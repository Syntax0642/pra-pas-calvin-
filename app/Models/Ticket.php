<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [
        'nama_pesanan',
        'nama_pemesan' ,
        'berangkat_dari',
        'destinasi',
        'tipe_pesanan',
        'nama_kendaraan',
        'kode_pesanan',
        'tiket_orang',
        'harga',
        'jam_berangkat',
        'tanggal_pemesanan',
        'tanggal_berangkat',
        'tanggal_tiket_hangus'
    ];

    protected $with = ["Ticketss"];

    public function Ticketss()
    {
        return $this->belongsTo(tikerorang::class,"tiket_orang");
    }
}
