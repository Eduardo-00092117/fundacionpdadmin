<?php

use Illuminate\Support\Facades\Route;

Route::get('/', "MainController@index")
    ->name("index");

Route::get('/legal', "MainController@index8")
    ->name("legal");
  
Route::get('/apoyo', "MainController@index5")
    ->name("asociacionesApoyo");

Route::get('/contacto', "MainController@index9")
    ->name("contacto");

Route::get('/junta', "MainController@index3")
    ->name("junta");

Route::get('/quienes_somos', "MainController@index12")
    ->name("quienes_somos");

Route::get('/sd_Down', "MainController@index13")
    ->name("sd_Down");

Route::get('/terminosCorrectos', "MainController@index10")
    ->name("terminosCorrectos");

Route::get('/voluntariado', "MainController@index4")
    ->name("voluntariado");
  
Route::get('/leyes', "MainController@index2")
    ->name("leyes");

Route::get('/aLenguaje', "MainController@area4")
    ->name("aLenguaje");

Route::get('/aPed', "MainController@area5")
    ->name("aPed");

Route::get('/aOcupacional', "MainController@area3")
    ->name("aOcupacional");

Route::get('/aDesarrollo', "MainController@area6")
    ->name("aDesarrollo");

Route::get('/aPsicologica', "MainController@area7")
    ->name("aPsicologica");

Route::get('/aEvaluacion', "MainController@area1")
    ->name("aEvaluacion");

Route::get('/aFiMotor', "MainController@area2")
    ->name("aFiMotor");

Route::get('/noticias', "MainController@index6")
    ->name("noticias");

Route::get('/formacion', "MainController@index7")
    ->name("formacion");

Route::get('/mantenimiento', "MainController@index11")
    ->name("mantenimiento");
 
Route::post('/contactar', 'EmailController@contact')->name('contact');