@include('nav')

<div class="container-fluid">

    <!---------------Etapa Inicial------------------>
    <div id="desktop">
        <div class="row etapaInicial">
            <div class="col-md" id="aDesarrollo">
                <div>
                    <h1 class="title tc-verde" style="font-size: 3em; text-transform: uppercase;">{{$area[5]->nombre}}</h1>
                    <p>{{$area[5]->descripcion}}</p>     
                </div>
            </div>
            <div class="col-md" id="">
                <img src="img/{{$area[5]->url_imagen}}" alt="">
            </div>
        </div>
    </div>

    <div id="moviles">
        <div class="col  etapaInicial">
            <div class="col-md" id="">
                <img src="img/{{$area[5]->url_imagen}}" alt="">
            </div>
            <div class="col-md" id="aDesarrollo">
                <div>
                    <h1 class="tc-verde" style="font-size: 2em; text-transform: uppercase;">{{$area[5]->nombre}}</h1>
                    <p>{{$area[5]->descripcion}}</p>     
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
                        <img src="img/{{$subarea[22]->url_imagen}}" alt="" width="100%">
                    </div>
                </div>
                <div class="row">
                    <div class="col" id="texto1">
                        <p>{{$subarea[22]->titulo}}</p>
                        <p>{{$subarea[22]->subtitulo}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md Asegmento">
            <div>
                <div class="row">
                    <div class="col">
                        <img src="img/{{$subarea[23]->url_imagen}}" alt="" width="100%">
                    </div>
                </div>
                <div class="row">
                    <div class="col" id="texto2">
                        <p>{{$subarea[23]->titulo}}</p>
                        <p>{{$subarea[23]->subtitulo}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---------------Segmento 3--------------------->
    <div class="row Acontenedor">
        <div class="col-md Asegmento">
            <div>
                <div class="row">
                    <div class="col">
                        <img src="img/{{$subarea[24]->url_imagen}}" alt="" width="100%">
                    </div>
                </div>
                <div class="row">
                    <div class="col" id="texto3">
                        <p>{{$subarea[24]->titulo}}</p>
                        <p>{{$subarea[24]->subtitulo}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md Asegmento">
            <div>
                <div class="row">
                    <div class="col">
                        <img src="img/{{$subarea[25]->url_imagen}}" alt="" width="100%">
                    </div>
                </div>
                <div class="row">
                    <div class="col" id="texto4">
                        <p>{{$subarea[25]->titulo}}</p>
                        <p>{{$subarea[25]->subtitulo}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---------------Segmento 4--------------------->
    <div class="row Acontenedor">
        <div class="col-md Asegmento">
            <div>
                <div class="row">
                    <div class="col">
                        <img src="img/{{$subarea[26]->url_imagen}}" alt="" width="100%">
                    </div>
                </div>
                <div class="row">
                    <div class="col" id="texto6">
                        <p>{{$subarea[26]->titulo}}</p>
                        <p>{{$subarea[26]->subtitulo}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md Asegmento">
            <div>
                <div class="row">
                    <div class="col">
                        <img src="img/{{$subarea[27]->url_imagen}}" alt="" width="100%">
                    </div>
                </div>
                <div class="row">
                    <div class="col" id="texto5">
                        <p>{{$subarea[27]->titulo}}</p>
                        <p>{{$subarea[27]->subtitulo}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<br>

@include('footer')