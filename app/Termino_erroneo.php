<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Termino_erroneo extends Model
{
    protected $table = 'termino_erroneo';
    protected $fillable = ['nombre', 'significado', 'fkTerminoCorrecto'];

    public function termino_correcto(){
        return $this->belongsTo('App\Termino_correcto', 'fkTerminoCorrecto', 'idTerminoCorrecto');
    }
}
