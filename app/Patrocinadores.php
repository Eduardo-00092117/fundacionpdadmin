<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patrocinadores extends Model
{
    protected $table = 'patrocinador';
    protected $fillable = ['nombre', 'url_imagen', 'descripcion'];
}
