<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class SosialLinkModel extends Model
{
    use HasFactory;
    protected $table = "medsos";
    protected $fillable = [
        'no',
        'media',
        'link',
        
    ];
}
