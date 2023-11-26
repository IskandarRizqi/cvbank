<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengalamanBankModel extends Model
{
    use HasFactory;

    protected $table = "pengalamanbank";
    protected $fillable = [
        'tahun',
        'perusahaan',
        'posisikerja',
        'tanggungjawab',
        'prestasi',
        'penghargaan',
        'omset',
    ];
}
