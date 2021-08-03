@include('nav')

<div class="container-fluid">

    <!---------------Etapa Inicial------------------>
    <div id="desktop">
        <div class="row etapaInicial">
            <div class="col-md" id="aOcupacional">
                <div>
                    <h1 class="tc-anaranjado" style="font-size: 3em; text-transform: uppercase;">{{$area[2]->nombre}}</h1>
                    <p>{{$area[2]->descripcion}}</p>
                </div>
            </div>
            <div class="col-md">
                <img src="{{$area[2]->url_imagen}}" alt="">
            </div>
        </div>
    </div>

    <div id="moviles">
        <div class="row etapaInicial">
            <div class="col-md">
                <img src="{{$area[2]->url_imagen}}" alt="">
            </div>
            <div class="col-md" id="aOcupacional">
                <div>
                    <h1 class="tc-anaranjado" style="font-size: 2em; text-transform: uppercase;">ÁREA OCUPACIONAL</h1>
                    <p>{{$area[2]->descripcion}}</p>
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
                        <img src="img/{{$subarea[11]->url_imagen}}" alt="" class="img-fluid" width="100%">
                    </div>
                </div>
                <div class="row">
                    <div class="col" id="texto1">
                        <p>{{$subarea[11]->titulo}}<span>{{$subarea[11]->subtitulo}}</span></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md Asegmento">
            <div>
                <div class="row">
                    <div class="col">
                        <img src="img/{{$subarea[12]->url_imagen}}" alt="" class="img-fluid" width="100%">
                    </div>
                </div>
                <div class="row">
                    <div class="col" id="texto2">
                        <p>{{$subarea[12]->titulo}}<span>{{$subarea[12]->subtitulo}}</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@include('footer')