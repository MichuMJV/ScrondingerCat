<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class spoiler extends Model 
{
    protected $table = 'spoiler';
    use HasFactory;
    protected $fillable=[
        'idautor','comunidad','titulo','imagen','descripcion','tendencia'
    ];
}