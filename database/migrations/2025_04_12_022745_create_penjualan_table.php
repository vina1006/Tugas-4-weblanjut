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
        Schema::create('penjualan', function (Blueprint $table) {
            $table->id();
            $table->string('alamat_pembeli');
            $table->string('no_telp_pembeli');
            $table->string('nama_barang');
            $table->string('jumlah_barang');
            $table->string('harga_barang');
            $table->string('total_harga');
            $table->string('status_pembelian');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penjualan');
    }
};
