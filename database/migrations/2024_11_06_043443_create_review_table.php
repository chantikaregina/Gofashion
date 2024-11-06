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
            $table->integer('id_product')->primary()->autoIncrement();
            $table->integer('id_product');
            $table->foreign('id_product')
                ->references('id_product')
                ->on('id_product')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->integer('id_customer');
            $table->foreign('id_customer')
                ->references('id_customer')
                ->on('id_customer')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->integer('rating_produk');
            $table->text('comment');
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
