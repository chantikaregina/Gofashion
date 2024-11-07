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
            $table->string('kode_diskon');
            $table->enum('tipe_diskon', ['percentage','fixed_amount']);
            $table->integer('nilai_diskon');
            $table->date('tanggal_mulai');
            $table->date('tanggal_akhir');
            $table->integer('minimum_pembelian');
            $table->integer('maksimum_pemakaian');
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
