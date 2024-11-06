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
        Schema::create('cart_items', function (Blueprint $table) {
            $table->integer('id_cart_items')->primary()->autoIncrement();
            $table->integer('id_cart');
            $table->foreign('id_cart')
                ->references('id_cart')
                ->on('cart')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->integer('id_product');
            $table->foreign('id_product')
                ->references('id_product')
                ->on('product')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->integer('jumlah_produk');
            $table->integer('harga_produk');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart_items');
    }
};
