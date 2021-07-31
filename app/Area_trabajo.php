<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area_trabajo extends Model
{
    protected $table = 'area_trabajo';
    protected $fillable = ['nombre', 'descripcion', 'url_imagen'];
}
