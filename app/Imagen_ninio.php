<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagen_ninio extends Model
{
    protected $table = 'imagen_ninio';
    protected $fillable = ['orden', 'nombre', 'apellido', 'url_imagen'];
}
