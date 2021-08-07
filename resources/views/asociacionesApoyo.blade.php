@include('nav')
<div class="container center asociaciones">
    <h1 class="tc-anaranjado">Asociaciones de
            apoyo</h1>
    <hr class="linea-multicolor linea-asociacion">
    <p class="container-asociacion">En esta sesión prodrán encontrar: los contactos de otras organizaciones que
        trabajan a favor de las personas con
        discapacidad, en El Salvador y en Iberoamérica. Para visitar la página Web o perfil de Facebook de cada
        organización por favor hacer click en el nombre</p>
    <h2 class="tc-rosado">Internacionales</h2>
    <div class="row row-cols-md-2 row-cols-1 card-asociaciones">
        @foreach($asociacion_internacional as $pos)
                        <div class="col-md">
                            <div>
                                <div> 
                                    <h5>{{$pos->nombre}}</h5>
                                </div>
                                <div>
                                    <img src="img/{{$pos->url_logo}}" class="img-thumbnail rounded mx-auto d-block">
                                    <p class="card-text">{{$pos->descripcion}}</p>
                                </div>
                                <div>
                                    <hr class="linea-asociaciones-card">
                                    @if ($pos->url_facebook != null)
                                        <div class="asociaciones-redes1">
                                            <a href="{{$pos->url_facebook}}"><i class="fab fa-facebook"></i></a>
                                        </div>
                                    @endif
                                    @if ($pos->telefono != null)
                                        <div class="asociaciones-redes2">
                                            <i class="fas fa-phone"></i> {{$pos->telefono}}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
        @endforeach
    </div>
    <h2 class="tc-rosado">Nacionales</h2>
    <div class="row row-cols-md-2 row-cols-1 card-asociaciones">
        @foreach($asociacion_nacional as $pos)
                    <div class="col-md">
                        <div>
                            <div> 
                                <h5>{{$pos->nombre}}</h5>
                            </div>
                            <div>
                                <img src="img/{{$pos->url_logo}}" class="img-thumbnail rounded mx-auto d-block">
                                <p class="card-text">{{$pos->descripcion}}</p>
                            </div>
                            <div>
                                <hr class="linea-asociaciones-card">
                                @if ($pos->url_facebook != null)
                                    <div class="asociaciones-redes1">
                                        <a href="{{$pos->url_facebook}}"><i class="fab fa-facebook"></i></a>
                                    </div>
                                @endif
                                @if ($pos->telefono != null)
                                    <div class="asociaciones-redes2">
                                        <i class="fas fa-phone"></i> {{$pos->telefono}}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
        @endforeach
    </div>
</div>
<br>
@include('footer')
                     