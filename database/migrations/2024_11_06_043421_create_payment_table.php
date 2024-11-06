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
        Schema::create('payment', function (Blueprint $table) {
            $table->integer('id_pembayaran')->primary()->autoIncrement();
            $table->integer('id_order');
            $table->foreign('id_order')
                  ->references('id_order')
                  ->on('order')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->timestamp('tanggal_pembayaran');
            $table->integer('jumlah');
            $table->string('metode_pembayaran', 50);
            $table->enum('status_pembayaran', ['pending','completed','failed']);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment');
    }
};
