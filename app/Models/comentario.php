<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comentario extends Model 
{
    protected $table = 'comentario';
    use HasFactory;
    protected $fillable=[
        'autor','idspoilerfk','texto','tendencia'
    ];
}