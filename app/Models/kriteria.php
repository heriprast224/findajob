<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kriteria extends Model
{
    protected $fillable = [
        'pendidikan',
        'skill',
        'pengalaman_kerja',
        'penghargaan',
        'organisasi',
        'bahasa',
    ];
}
