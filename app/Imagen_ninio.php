<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagen_ninio extends Model
{
    protected $table = 'imagen_ninio';
    protected $fillable = ['nombre', 'apellido', 'url_imagen'];
}
