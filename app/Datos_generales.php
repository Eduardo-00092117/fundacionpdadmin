<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datos_generales extends Model
{
    protected $table = 'dato_general';
    protected $fillable = ['nombre_fundacion', 'direccion', 'mapa', 'url_facebook', 'url_instagram', 'correo', 'telefono1', 'telefono2', 'horario_semanal', 'horario_fin'];
}
