@include('nav')

<div class="container-fluid">

    <!---------------Etapa Inicial------------------>
    <div id="desktop">
        <div class="row etapaInicial">
            <div class="col-md" id="aEvaluacion">
                <div>
                    <h1 class="tc-verde" style="text-transform: uppercase;">{{$area[0]->nombre}}</h1>
                    <p>{{$area[0]->descripcion}}</p>
                </div>
            </div>
            <div class="col-md">
                <img src="{{URL::asset('/img/areaEvaluacion/IMAGEN-1.jpg')}}" alt="" width="100%">
            </div>
        </div>

    </div>

    <div id="moviles">
        <div class="col etapaInicial">
            <div class="row">
                <img src="{{URL::asset('/img/areaEvaluacion/IMAGEN-1.jpg')}}" alt="" width="100%">
            </div>
            <div class="row" id="aEvaluacion">
                <div>
                    <h1 class="tc-verde" style="font-size: 2em; text-transform: uppercase;">{{$area[0]->nombre}}</h1>
                    <p>{{$area[0]->descripcion}}</p>
                </div>
            </div>

        </div>
    </div>
    <hr class="linea-multicolor" style="width: 100%;">
    <!---------------Segmento 2--------------------->
    <h2 class="tc.negro">¿CÓMO PUEDES INSCRIBIRTE A NUESTROS SERVICIOS?</h2>
    <div class="row">
        <div class="col-md Asegmento" id="desktop">
            <div>
                <div class="row">
                    <div class="col">
                        <img src="img/{{$subarea[0]->url_imagen}}" alt="" width="100%">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <img src="img/{{$subarea[1]->url_imagen}}" alt="" width="100%">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <img src="{{$subarea[2]->url_imagen}}" alt="" width="100%">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <img src="{{$subarea[3]->url_imagen}}" alt="" width="100%">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <img src="{{$subarea[4]->url_imagen}}" alt="" width="100%">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <img src="{{$subarea[5]->url_imagen}}" alt="" width="100%">
                    </div>
                </div>
            </div>
        </div>

        <div class=" col center" id="moviles">
            <div class="tCModal">
                <button type="button" class="btn" id="boton" data-toggle="modal" data-target="#p1">
                    <img src="{{URL::asset('img/areaEvaluacion/paso1.png')}}" alt="">
                </button>
                <!-- Modal terminos erroneos -->
                <div class="modal fade" id="p1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content" id="p_sDown-c">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">{{$subarea[0]->titulo}}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <hr class="linea-multicolor">
                                <p>{{$subarea[0]->descripcion}}</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tCModal">
                <button type="button" class="btn" id="boton" data-toggle="modal" data-target="#p2">
                    <img src="{{URL::asset('img/areaEvaluacion/paso2.png')}}" alt="">
                </button>
                <!-- Modal terminos erroneos -->
                <div class="modal fade" id="p2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content" id="p_sDown-c">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">{{$subarea[1]->titulo}}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <hr class="linea-multicolor">
                                <p>{{$subarea[1]->descripcion}}</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tCModal">
                <button type="button" class="btn" id="boton" data-toggle="modal" data-target="#p3">
                    <img src="{{URL::asset('img/areaEvaluacion/paso3.png')}}" alt="">
                </button>
                <!-- Modal terminos erroneos -->
                <div class="modal fade" id="p3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content" id="p_sDown-c">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">{{$subarea[2]->titulo}}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <hr class="linea-multicolor">
                                <p>{{$subarea[2]->descripcion}}</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tCModal">
                <button type="button" class="btn" id="boton" data-toggle="modal" data-target="#p4">
                    <img src="{{URL::asset('img/areaEvaluacion/paso4.png')}}" alt="">
                </button>
                <!-- Modal terminos erroneos -->
                <div class="modal fade" id="p4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content" id="p_sDown-c">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">{{$subarea[3]->titulo}}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <hr class="linea-multicolor">
                                <p>{{$subarea[3]->descripcion}}</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tCModal">
                <button type="button" class="btn" id="boton" data-toggle="modal" data-target="#p5">
                    <img src="{{URL::asset('img/areaEvaluacion/paso5.png')}}" alt="">
                </button>
                <!-- Modal terminos erroneos -->
                <div class="modal fade" id="p5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content" id="p_sDown-c">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">{{$subarea[4]->titulo}}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <hr class="linea-multicolor">
                                <p>{{$subarea[4]->descripcion}}</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tCModal">
                <button type="button" class="btn" id="boton" data-toggle="modal" data-target="#p6">
                    <img src="{{URL::asset('img/areaEvaluacion/paso6.png')}}" alt="">
                </button>
                <!-- Modal terminos erroneos -->
                <div class="modal fade" id="p6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content" id="p_sDown-c">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">{{$subarea[5]->titulo}}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <hr class="linea-multicolor">
                                <p>{{$subarea[5]->descripcion}}</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<br>

@include('footer')