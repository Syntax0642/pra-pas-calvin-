<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tikerorang extends Model
{
    use HasFactory;

    protected $fillable = [
        'tiketperorang',
    ];

    public function Tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
