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
        Schema::create('cupon', function (Blueprint $table) {
            $table->integer('id_cupon');
            $table->string('code');
            $table->enum('discount_type', ['percentage','fixed_amount']);
            $table->integer('discount_value');
            $table->date('date_start');
            $table->date('date_end');
            $table->integer('minimum_pembelian');
            $table->integer('maksimal_pemakaian');
            $table->integer('jumlah_pengguna');
            $table->boolean('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cupon');
    }
};
