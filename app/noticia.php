<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class noticia extends Model
{
    protected $table = 'noticia_formacion';
    protected $fillable = ['titulo', 'url_imagen', 'descripcion', 'noticia_formacion'];
}
