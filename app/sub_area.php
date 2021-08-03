<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sub_area extends Model
{
    protected $table = 'sub_area';
    protected $fillable = ['titulo', 'subtitulo', 'url_imagen', 'descripcion', 'orden', 'fkAreaTrabajo'];

    public function area_trabajo(){
        return $this->belongsTo('App\Area_trabajo', 'fkAreaTrabajo', 'id');
    }
}
