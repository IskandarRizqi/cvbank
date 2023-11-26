<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformasiPribadiModel extends Model
{
    use HasFactory;
    protected $table = "informasipribadi";
    protected $fillable = [
        'gambar',
        'namalengkap',
        'namapanggilan',
        'ttl',  
        'agama',
        'rumah',
        'domisili',
        'status',
        'deskripsi',
        
      
    ];
}
