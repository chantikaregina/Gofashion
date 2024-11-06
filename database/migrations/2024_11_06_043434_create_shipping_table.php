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
        Schema::create('shipping', function (Blueprint $table) {
            $table->integer('id_pengiriman')->primary()->autoIncrement();
            $table->integer('id_order');
            $table->foreign('id_order')
                  ->references('id_order')
                  ->on('order')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->timestamps('tanggal_pengiriman');
            $table->enum('status_pengiriman', ['pending','shipped','delivered']);
            $table->string('nomor_pelacakan', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shipping');
    }
};
