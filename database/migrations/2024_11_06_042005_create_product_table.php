<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product', function (Blueprint $table) {
            $table->integer('id_product')->primary()->autoIncrement();
            $table->integer('id_category');
            $table->foreign('id_category')
                  ->references('id_category')
                  ->on('category')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->string('nama_product', 50);
            $table->text('deskripsi');
            $table->integer('harga_product');
            $table->enum('stock_product', ['Tersedia', 'Tidak Tersedia']);
            $table->string('foto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
