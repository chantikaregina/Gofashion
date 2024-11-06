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
        Schema::create('customer', function (Blueprint $table) {
            $table->integer('id_customer')->primary()->autoIncrement();
            $table->integer('id_users');
            $table->foreign('id_users')
                ->references('id_users')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->string('nama_pengguna', 25);
            $table->string('alamat_pengguna', 50);
            $table->string('telp', 12);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer');
    }
};
