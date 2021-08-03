@include('nav')

<div class="container-fluid">

    <!---------------Segmento 1------------------>
    <div id="desktop">
        <div class="row etapaInicial">
            <div class="col-md" id="aPedagogica">
                <div>
                    <h1 class="tc-celeste" style="font-size: 3em;text-transform: uppercase;">{{$area[4]->nombre}}</h1>
                    <p>{{$area[4]->descripcion}}</p>
                </div>
            </div>
            <div class="col-md">
                <img src="{{$area[4]->url_imagen}}" alt="" class="img-fluid">
            </div>
        </div>
    </div>

    <div id="moviles">
        <div class="row etapaInicial">
            <div class="col-md">
                <img src="{{$area[4]->url_imagen}}" alt="" class="img-fluid">
            </div>
            <div class="col-md" id="aPedagogica">
                <div>
                    <h1 class="tc-celeste" style="font-size: 2em;text-transform: uppercase;">{{$area[4]->nombre}}</h1>
                    <p>{{$area[4]->descripcion}}</p>
                </div>
            </div>

        </div>
    </div>

    <hr class="linea-multicolor" style="width: 100%;">
    <!---------------Segmento 2--------------------->
    <div class="row Acontenedor">
        <div class="col-md Asegmento">
            <div>
                <div class="row">
                    <div class="col">
                        <img src="img/{{$subarea[17]->url_imagen}}" alt="" class="img-fluid" id="prueba">
                    </div>
                </div>
                <div class="row">
                    <div class="col" id="texto1">
                        <p>{{$subarea[17]->titulo}}<span>{{$subarea[17]->subtitulo}}</span></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md Asegmento">
            <div>
                <div class="row">
                    <div class="col">
                        <img src="img/{{$subarea[18]->url_imagen}}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="row">
                    <div class="col" id="texto2">
                        <p>{{$subarea[18]->titulo}}<span>{{$subarea[18]->subtitulo}}</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---------------Segmento 3--------------------->
    <div class="row Acontenedor">
        <div class="col-md-4 Asegmento">
            <div>
                <div class="row">
                    <div class="col">
                        <img src="img/{{$subarea[19]->url_imagen}}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="row">
                    <div class="col" id="texto3">
                        <p>{{$subarea[19]->titulo}}<span>{{$subarea[19]->subtitulo}}</span></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 Asegmento">
            <div>
                <div class="row">
                    <div class="col">
                        <img src="img/{{$subarea[20]->url_imagen}}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="row">
                    <div class="col" id="texto4">
                        <p>{{$subarea[20]->titulo}}<span>{{$subarea[20]->subtitulo}}</span></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 Asegmento">
            <div>
                <div class="row">
                    <div class="col">
                        <img src="img/{{$subarea[21]->url_imagen}}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="row">
                    <div class="col" id="texto5">
                        <p>{{$subarea[21]->titulo}}<span>{{$subarea[21]->subtitulo}}</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<br>

@include('footer')