<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Reference\Reference;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('review', function (Blueprint $table) {
            $table->integer('id_review')->primary()->autoIncrement();
            $table->integer('id_product');
            $table->foreign('id_product')
                ->references('id_product')
                ->on('product')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->string('nama');
            $table->string('email');
            $table->integer('rating_produk');
            $table->text('komentar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('review');
    }
};
