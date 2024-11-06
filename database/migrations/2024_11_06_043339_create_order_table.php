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
        Schema::create('order', function (Blueprint $table) {
            $table->integer('id_order')->primary()->autoIncrement();
            $table->integer('id_customer');
            $table->foreign('id_customer')
                ->references('id_customer')
                ->on('customer')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->timestamps('tanggal_pesanan');
            $table->enum('status_pesanan', ['pending', 'shipped', 'completed', 'canceled']);
            $table->integer('total_pembayaran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order');
    }
};
