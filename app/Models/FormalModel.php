<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormalModel extends Model
{
    use HasFactory;
    protected $table = "formal";
    protected $fillable = [
        'tingkatansekolah',
        'tahun',
        'namasekolah',
        'jurusan',
        'gelar',
    
    ];
}
