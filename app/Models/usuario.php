<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuario extends Model 
{
    protected $table = 'usuario';
    use HasFactory;
    protected $fillable=[
        'ID_name','User_name','correo','contrasena','foto'
    ];
}


//php -S localhost:8000 -t public