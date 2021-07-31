<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class junta_directiva extends Model
{
    protected $table = 'junta_directiva';
    protected $fillable = ['presidente', 'vicepresidente', 'tesorero', 'secretario', 'vocal_1', 'vocal_2', 'vocal_3', 'vocal_4', 'vocal_5'];
}
