<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class voluntariado extends Model
{
    protected $table = 'voluntariado';
    protected $fillable = ['nombre', 'apellido', 'area_colaboracion', 'url_foto', 'experiencia', 'genero','fkPais'];

    public function pais(){
        return $this->belongsTo('App\pais', 'fkPais', 'idPais');
    }

}
