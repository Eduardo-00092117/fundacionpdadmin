<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class noticia extends Model
{
    protected $table = 'noticia_formacion';
    protected $fillable = ['titulo', 'url_imagen', 'parrafo1', 'parrafo2', 'parrafo3', 'parrafo4', 'noticia_formacion'];
}
