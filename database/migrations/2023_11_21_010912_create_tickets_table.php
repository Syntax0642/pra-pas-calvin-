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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama_pesanan', 70);
            $table->string('nama_pemesan', 70);
            $table->string('berangkat_dari', 70);
            $table->string('destinasi', 70);
            $table->string('tipe_pesanan', 70);
            $table->string('nama_kendaraan', 70);
            $table->integer('kode_pesanan');
            $table->foreignId('tiket_orang');
            $table->string('harga',100);
            $table->string('jam_berangkat',100);
            $table->date('tanggal_pemesanan');
            $table->date('tanggal_berangkat');
            $table->date('tanggal_tiket_hangus');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
