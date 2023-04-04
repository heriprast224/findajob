<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penyediaKerja extends Model
{
    protected $fillable = [
        'bidang',
        'alamat',
        'no_telp',
        'jml_karyawan',
        'deskripsi',
        'website',
        'sosal_media',
        'foto',
        'user_id',
    ];
}
