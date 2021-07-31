<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class asociacion extends Model
{
    protected $table = 'asociacion';
    protected $fillable = ['nombre', 'url_logo', 'descripcion', 'telefono', 'url_facebook', 'nacional_internacional'];
}
