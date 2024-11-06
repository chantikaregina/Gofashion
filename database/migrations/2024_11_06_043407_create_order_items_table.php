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
        Schema::create('order_items', function (Blueprint $table) {
            $table->integer('id_order_items')->primary()->autoIncrement();
            $table->integer('id_order');
            $table->foreign('id_order')
                  ->references('id_order')
                  ->on('order')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->integer('id_product');
            $table->foreign('id_product')
                ->references('id_product')
                ->on('product')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->integer('jumlah');
            $table->integer('harga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};
