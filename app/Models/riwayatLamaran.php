<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class riwayatLamaran extends Model
{
    protected $fillable = [
        'id',
        'terkirim_pada',
        'status',
        'lowongan_kerja_id',
        'pencari_kerja_id'
    
    ];
}
