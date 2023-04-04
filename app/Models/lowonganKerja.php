<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lowonganKerja extends Model
{
    protected $fillable = [
        'nama',
        'jenis',
        'lokasi',
        'gaji',
        'deskripsi',
        'status',
        'kriteria_id',
        'penyedia_kerja_id',
    ];
}
