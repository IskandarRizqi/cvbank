<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NonFormalModel extends Model
{
    use HasFactory;

    protected $table = "nonformal";
    protected $fillable = [
        'no',
        'namakursus',
        'institusi',
        'tahun',
        'lokasi',

     
    ];
    
}
