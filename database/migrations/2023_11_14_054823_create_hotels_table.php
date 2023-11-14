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
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama_hotel' , 70);
            $table->string('preview',200);
            $table->string('tipe_kamar',200);
            $table->integer('kapasitas');
            $table->string('harga',100);
            $table->date('booking_deadline');
            $table->date('update_terakhir');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotels');
    }
};
