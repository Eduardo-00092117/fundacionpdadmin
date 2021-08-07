@include('nav')

<div class="container-fluid">

    <!---------------Etapa Inicial------------------>
    <div id="desktop">
        <div class="row etapaInicial">
            <div class="col-md" id="aLenguaje">
                <div>
                    <h1 class="tc-anaranjado" style="font-size: 3em; text-transform: uppercase;">{{$area[6]->nombre}}</h1>
                    <p>{{$area[6]->descripcion}}</p>    
                </div>
            </div>
            <div class="col-md" id="">
                <img src="img/{{$area[6]->url_imagen}}" alt="" width="100%" style="margin-top: 20px; margin-left: 50px; width: 80%; height: 90%;">
            </div>
        </div>
    </div>
    
    <div id="moviles">
        <div class="col etapaInicial">
            <div class="col-md" id="">
                <img src="img/{{$area[6]->url_imagen}}" alt="" width="100%" style="margin-top: 20px; margin-left: 50px; width: 80%; height: 90%;">
            </div>
            <div class="col-md" id="aLenguaje">
                <div>
                    <h1 class="tc-anaranjado" style="font-size: 2em; text-transform: uppercase;">{{$area[6]->nombre}}</h1>
                    <p>{{$area[6]->descripcion}}</p>    
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
                        <img src="img/{{$subarea[28]->url_imagen}}" alt="" width="100%">
                    </div>
                </div>
                <div class="row">
                    <div class="col" id="texto1">
                        <p>{{$subarea[28]->titulo}}</p>
                        <p>{{$subarea[28]->subtitulo}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md Asegmento">
            <div>
                <div class="row">
                    <div class="col">
                        <img src="img/{{$subarea[29]->url_imagen}}" alt="" width="100%">
                    </div>
                </div>
                <div class="row">
                    <div class="col" id="texto2">
                        <p>{{$subarea[29]->titulo}}</p>
                        <p>{{$subarea[29]->subtitulo}}</p>
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
                        <img src="img/{{$subarea[30]->url_imagen}}" alt="" width="100%">
                    </div>
                </div>
                <div class="row">
                    <div class="col" id="texto3">
                        <p>{{$subarea[30]->titulo}}</p>
                        <p>{{$subarea[30]->subtitulo}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md Asegmento">
            <div>
                <div class="row">
                    <div class="col">
                        <img src="img/{{$subarea[31]->url_imagen}}" alt="" width="100%">
                    </div>
                </div>
                <div class="row">
                    <div class="col" id="texto4">
                        <p>{{$subarea[31]->titulo}}</p>
                        <p>{{$subarea[31]->subtitulo}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<br>

<@include('footer')