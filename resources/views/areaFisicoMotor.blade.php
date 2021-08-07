@include('nav')

<div class="container-fluid">

    <!---------------Segmento 1------------------>
    <div id="desktop">
        <div class="row etapaInicial">
            <div class="col-md" id="aFisico">
                <div>
                    <h1 class="tc-celeste" style="font-size: 3em; text-transform: uppercase;">{{$area[1]->nombre}}</h1>
                    <p>{{$area[1]->descripcion}}</p>
                </div>
            </div>
            <div class="col-md">
                <img src="img/{{$area[1]->url_imagen}}">
            </div>
        </div>
    </div>

    <div id="moviles">
        <div class="col etapaInicial">
            <div class="col-md">
                <img src="img/{{$area[1]->url_imagen}}">
            </div>
            <div class="col-md" id="aFisico">
                <div>
                    <h1 class="tc-celeste" style="font-size: 2em; text-transform: uppercase;">{{$area[1]->nombre}}</h1>
                    <p>{{$area[1]->descripcion}}</p>
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
                        <img src="img/{{$subarea[6]->url_imagen}}" alt="" width="100%">
                    </div>
                </div>
                <div class="row">
                    <div class="col" id="texto1">
                        <p>{{$subarea[6]->titulo}}</p>
                        <p>{{$subarea[6]->subtitulo}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md Asegmento">
            <div>
                <div class="row">
                    <div class="col">
                        <img src="img/{{$subarea[7]->url_imagen}}" alt="" width="100%">
                    </div>
                </div>
                <div class="row">
                    <div class="col" id="texto2">
                        <p>{{$subarea[7]->titulo}}</p>
                        <p>{{$subarea[7]->subtitulo}}</p>
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
                        <img src="img/{{$subarea[8]->url_imagen}}" alt="" width="100%">
                    </div>
                </div>
                <div class="row">
                    <div class="col" id="texto3">
                        <p>{{$subarea[8]->titulo}}</p>
                        <p>{{$subarea[8]->subtitulo}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 Asegmento">
            <div>
                <div class="row">
                    <div class="col">
                        <img src="img/{{$subarea[9]->url_imagen}}" alt="" width="100%">
                    </div>
                </div>
                <div class="row">
                    <div class="col" id="texto4">
                        <p>{{$subarea[9]->titulo}}</p>
                        <p>{{$subarea[9]->subtitulo}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 Asegmento">
            <div>
                <div class="row">
                    <div class="col">
                        <img src="img/{{$subarea[10]->url_imagen}}" alt="" width="100%">
                    </div>
                </div>
                <div class="row">
                    <div class="col" id="texto5">
                        <p>{{$subarea[10]->titulo}}</p>
                        <p>{{$subarea[10]->subtitulo}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<br>

@include('footer')