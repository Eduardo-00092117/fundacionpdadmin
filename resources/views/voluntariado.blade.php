@include('nav')

<div class="container-voluntariado center">
    <h1 class="tc-verde">VOLUNTARIADO <br> Y APOYOS EXTERNOS</h1>
    <div class="container">
        <hr class="linea-multicolor">
        <h2>¿CÓMO SER VOLUNTARIO?</h2>
        <div id="desktop">
            <img src="{{$area[7]->url_imagen}}" class="img-fluid" alt="...">
        </div>
        
        <div id="moviles">
            <div class="tCModal">
                <button type="button" class="btn" id="boton" data-toggle="modal" data-target="#p1">
                    <img src="{{URL::asset('img/Voluntariado/paso1.png')}}" alt="">
                </button>
                <!-- Modal terminos erroneos -->
                <div class="modal fade" id="p1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content" id="p_sDown-c">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">{{$subarea[32]->titulo}}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <hr class="linea-multicolor">
                                <p>{{$subarea[32]->descripcion}}</p>
                                
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
                    <img src="{{URL::asset('img/Voluntariado/paso2.png')}}" alt="">
                </button>
                <!-- Modal terminos erroneos -->
                <div class="modal fade" id="p2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content" id="p_sDown-c">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">{{$subarea[33]->titulo}}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <hr class="linea-multicolor">
                                <p>{{$subarea[33]->descripcion}}</p>
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
                    <img src="{{URL::asset('img/Voluntariado/paso3.png')}}" alt="">
                </button>
                <!-- Modal terminos erroneos -->
                <div class="modal fade" id="p3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content" id="p_sDown-c">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">{{$subarea[34]->titulo}}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <hr class="linea-multicolor">
                                <p>{{$subarea[34]->descripcion}}</p>
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
                    <img src="{{URL::asset('img/Voluntariado/paso4.png')}}" alt="">
                </button>
                <!-- Modal terminos erroneos -->
                <div class="modal fade" id="p4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content" id="p_sDown-c">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">{{$subarea[35]->titulo}}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <hr class="linea-multicolor">
                                <p>{{$subarea[35]->descripcion}}</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <p>¿COMPLETASTE SATISFACTORIAMENTE TODOS LOS PASOS?</p>
        <p>¡FELICIDADES!</p>
        <p>¡ESTÁS LISTO PARA INICIAR TU PROYECTO!</p>
    </div>
</div>

<div class="container-experiencias center">
    <h1 class="tc-celeste">EXPERIENCIAS</h1>
    @php
        $cont = 1;
    @endphp
    @foreach($voluntario as $pos)
        @if ($pos->genero === 0)
            @php
                $titulo = 'Voluntario';
            @endphp
        @elseif ($pos->genero === 1)
            @php
                $titulo = 'Voluntaria';
            @endphp
        @endif
        @if ($cont === 1)
            <div>
                <hr class="linea-multicolor">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <h2 class="tc-blanco node-verde">{{$pos->nombre}} {{$pos->apellido}}</h2>
                            <h3 class="tc-verde" style="text-transform: uppercase;">{{$titulo}} DE {{$pos->pais->nombre}}</h3>
                            <img src="{{$pos->url_foto}}" class="img-fluid" alt="...">
                        </div>
                        <div class="col-12 col-md-6">
                            <div>
                                <h2>{{$pos->area_colaboracion}}</h2>
                                <p><span class="tc-verde">"</span>{{$pos->experiencia}}<span class="tc-verde">"</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @elseif ($cont === 2)
            <div>
                <hr class="linea-multicolor">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div>
                                <h2>{{$pos->area_colaboracion}}</h2>
                                <p><span class="tc-rosado">"</span>{{$pos->experiencia}}<span class="tc-rosado">"</span></p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <h2 class="tc-blanco node-rosado n-voluntario">{{$pos->nombre}} {{$pos->apellido}}</h2>
                            <h3 class="tc-rosado" style="text-transform: uppercase;">{{$titulo}} DE {{$pos->pais->nombre}}</h3>
                            <img src="{{$pos->url_foto}}" class="img-fluid" alt="Responsive image">
                        </div>
                    </div>
                </div>
            </div>
        @elseif ($cont === 3)
            <div>
                <hr class="linea-multicolor">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <h2 class="tc-blanco node-celeste">{{$pos->nombre}} {{$pos->apellido}}</h2>
                            <h3 class="tc-celeste" style="text-transform: uppercase;">{{$titulo}} DE {{$pos->pais->nombre}}</h3>
                            <img src="{{$pos->url_foto}}" class="img-fluid" alt="...">
                        </div>
                        <div class="col-12 col-md-6">
                            <div>
                                <h2>{{$pos->area_colaboracion}}</h2>
                                <p><span class="tc-celeste">"</span>{{$pos->experiencia}}<span class="tc-celeste">"</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @elseif ($cont === 4)
            <div>
                <hr class="linea-multicolor">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div>
                                <h2>{{$pos->area_colaboracion}}</h2>
                                <p><span class="tc-anaranjado">"</span>{{$pos->experiencia}}<span class="tc-anaranjado">"</span></p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <h2 class="tc-blanco node-amarillo">{{$pos->nombre}} {{$pos->apellido}}</h2>
                            <h3 class="tc-anaranjado" style="text-transform: uppercase;">{{$titulo}} DE {{$pos->pais->nombre}}</h3>
                            <img src="{{$pos->url_foto}}" class="img-fluid" alt="...">
                        </div>
                    </div>
                </div>
            </div>
            @php
                $cont = 0;
            @endphp
        @endif
        @php
            ++$cont;
        @endphp
    @endforeach
</div>

@include ('footer')