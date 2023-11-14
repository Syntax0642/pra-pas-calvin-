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
        Schema::create('planes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama_pesawat' , 70);
            $table->string('nama_pilot' , 70);
            $table->string('preview',200);
            $table->integer('nomor_penerbangan');
            $table->string('harga',100);
            $table->string('jam_berangkat',100);
            $table->date('tanggal_berangkat');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('planes');
    }
};
