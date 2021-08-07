<?php

namespace App\Http\Controllers;

use App\Patrocinadores;
use App\Termino_correcto;
use App\Area_trabajo;
use App\Imagen_ninio;
use App\junta_directiva;
use App\pais;
use App\voluntariado;
use App\asociacion;
use App\noticia;
use App\Datos_generales;
use App\Termino_erroneo;
use App\sub_area;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patrocinadores = Patrocinadores::all();
        $areas = Area_trabajo::all();
        $datos = Datos_generales::all();

        return view('index', [
            'patrocinadores' => $patrocinadores,
            'areas' => $areas,
            'datos' => $datos
         ]);
    }

    public function index2()
    {
        $ninio = Imagen_ninio::all();
        $datos = Datos_generales::all();

        return view('leyesderechos', [
            'ninio' => $ninio,
            'datos' => $datos
         ]);
    }

    public function index3()
    {
        $junta = junta_directiva::all();
        $datos = Datos_generales::all();

        return view('juntaDirectiva', [
            'junta' => $junta,
            'datos' => $datos
         ]);
    }    

    public function index4()
    {
        $voluntario = voluntariado::with('pais')->get();
        $datos = Datos_generales::all();
        $subarea = sub_area::with('area_trabajo')->get();
        $area = Area_trabajo::all();

        return view('voluntariado', [
            'voluntario' => $voluntario,
            'datos' => $datos,
            'subarea'=>$subarea->where('fkAreaTrabajo', 8),
            'area'=>$area
         ]);
    }  

    public function index5()
    {
        $asociacion = asociacion::all();
        $datos = Datos_generales::all();

        return view('asociacionesApoyo', [
            'asociacion_nacional' => $asociacion->where('nacional_internacional', 0),
            'asociacion_internacional' => $asociacion->where('nacional_internacional', 1),
            'datos' => $datos
         ]);
    } 

    public function index6()
    {
        $noticia = noticia::all();
        $datos = Datos_generales::all();

        return view('boletinNoticias', [
            'noticia' => $noticia->where('noticia_formacion', 0),
            'datos' => $datos
         ]);
    } 

    public function index7()
    {
        $formacion = noticia::all();
        $datos = Datos_generales::all();

        return view('boletinFormacion', [
            'formacion' => $formacion->where('noticia_formacion', 1),
            'datos' => $datos
         ]);
    } 

    public function index8()
    {
        $datos = Datos_generales::all();

        return view('informacionLegal', [
            'datos' => $datos
         ]);
    } 

    public function index9()
    {
        $datos = Datos_generales::all();

        return view('contacto', [
            'datos' => $datos
         ]);
    } 

    public function index10()
    {
        $erroneo = Termino_erroneo::with('termino_correcto')->orderBy('fkTerminoCorrecto', 'ASC')->get();
        $datos = Datos_generales::all();
        $correcto = Termino_correcto::all();

        return view('terminosCorrectos', [
            'erroneo' => $erroneo,
            'datos' => $datos,
            'correcto' => $correcto
         ]);
    }  

    public function index11()
    {
        $datos = Datos_generales::all();

        return view('mantenimiento', [
            'datos' => $datos
         ]);
    }  

    public function index13()
    {
        $datos = Datos_generales::all();

        return view('sindromeDown', [
            'datos' => $datos
         ]);
    }  

    public function index12()
    {
        $datos = Datos_generales::all();

        return view('quienesSomos', [
            'datos' => $datos
         ]);
    }  

    public function area1()
    {
        $subarea = sub_area::with('area_trabajo')->get();
        $area = Area_trabajo::all();
        $datos = Datos_generales::all();

        return view('areaEvaluacion', [
            'subarea' => $subarea->where('fkAreaTrabajo', 1),
            'area' => $area,
            'datos' => $datos
         ]);
    } 

    public function area2()
    {
        $subarea = sub_area::with('area_trabajo')->get();
        $area = Area_trabajo::all();
        $datos = Datos_generales::all();

        return view('areaFisicoMotor', [
            'subarea' => $subarea->where('fkAreaTrabajo', 2),
            'area' => $area,
            'datos' => $datos
         ]);
    } 

    public function area3()
    {
        $subarea = sub_area::with('area_trabajo')->get();
        $area = Area_trabajo::all();
        $datos = Datos_generales::all();

        return view('areaOcupacional', [
            'subarea' => $subarea->where('fkAreaTrabajo', 3),
            'area' => $area,
            'datos' => $datos
         ]);
    } 

    public function area4()
    {
        $subarea = sub_area::with('area_trabajo')->get();
        $area = Area_trabajo::all();
        $datos = Datos_generales::all();

        return view('areaLenguaje', [
            'subarea' => $subarea->where('fkAreaTrabajo', 4),
            'area' => $area,
            'datos' => $datos
         ]);
    }

    public function area5()
    {
        $subarea = sub_area::with('area_trabajo')->get();
        $area = Area_trabajo::all();
        $datos = Datos_generales::all();

        return view('areaPedagogica', [
            'subarea' => $subarea->where('fkAreaTrabajo', 5),
            'area' => $area,
            'datos' => $datos
         ]);
    }

    public function area6()
    {
        $subarea = sub_area::with('area_trabajo')->get();
        $area = Area_trabajo::all();
        $datos = Datos_generales::all();

        return view('areaDesarrollo', [
            'subarea' => $subarea->where('fkAreaTrabajo', 6),
            'area' => $area,
            'datos' => $datos
         ]);
    }

    public function area7()
    {
        $subarea = sub_area::with('area_trabajo')->get();
        $area = Area_trabajo::all();
        $datos = Datos_generales::all();

        return view('areaPsicologica', [
            'subarea' => $subarea->where('fkAreaTrabajo', 7),
            'area' => $area,
            'datos' => $datos
         ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Patrocinadores  $patrocinadores
     * @return \Illuminate\Http\Response
     */
    public function show(Patrocinadores $patrocinadores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Patrocinadores  $patrocinadores
     * @return \Illuminate\Http\Response
     */
    public function edit(Patrocinadores $patrocinadores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Patrocinadores  $patrocinadores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patrocinadores $patrocinadores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Patrocinadores  $patrocinadores
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patrocinadores $patrocinadores)
    {
        //
    }
}
