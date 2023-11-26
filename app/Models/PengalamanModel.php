<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengalamanModel extends Model
{
    use HasFactory;

    protected $table = "pengalamanumum";
    protected $fillable = [
        'tahun',
        'perusahaan',
        'posisikerja',
        'tanggungjawab',
        'prestasi',
        'penghargaan',
    ];


}
