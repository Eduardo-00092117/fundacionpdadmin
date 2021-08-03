@include('nav')

<div class="container-fluid">

    <!---------------Etapa Inicial------------------>
    <div id="desktop">
        <div class="row etapaInicial">
            <div class="col-md" id="aLenguaje">
                <div>
                    <h1 class="tc-rosado" style="font-size: 3em; text-transform: uppercase;">{{$area[3]->nombre}}</h1>
                    <p>{{$area[3]->descripcion}}</p>
                </div>
            </div>
            <div class="col-md" id="">
                <img src="img/{{$area[3]->url_imagen}}" alt="">
            </div>
        </div>
    </div>

    <div id="moviles">
        <div class="row etapaInicial">
            <div class="col-md" id="">
                <img src="img/{{$area[3]->url_imagen}}" alt="">
            </div>
            <div class="col-md" id="aLenguaje">
                <div>
                    <h1 class="tc-rosado" style="font-size: 2em; text-transform: uppercase;">{{$area[3]->nombre}}</h1>
                    <p>{{$area[3]->descripcion}}</p>
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
                        <img src="img/{{$subarea[13]->url_imagen}}" alt="" width="100%">
                    </div>
                </div>
                <div class="row">
                    <div class="col" id="texto1">
                        <p>{{$subarea[13]->titulo}}<span>{{$subarea[13]->subtitulo}}</span></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md Asegmento">
            <div>
                <div class="row">
                    <div class="col">
                        <img src="img/{{$subarea[14]->url_imagen}}" alt="" width="100%">
                    </div>
                </div>
                <div class="row">
                    <div class="col" id="texto2">
                        <p>{{$subarea[14]->titulo}}<span>{{$subarea[14]->subtitulo}}</span></p>
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
                        <img src="img/{{$subarea[15]->url_imagen}}" alt="" width="100%">
                    </div>
                </div>
                <div class="row">
                    <div class="col" id="texto3">
                        <p>{{$subarea[15]->titulo}}<span>{{$subarea[15]->subtitulo}}</span></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md Asegmento">
            <div>
                <div class="row">
                    <div class="col">
                        <img src="img/{{$subarea[16]->url_imagen}}" alt="" width="100%">
                    </div>
                </div>
                <div class="row">
                    <div class="col" id="texto4">
                        <p>{{$subarea[16]->titulo}}<span>{{$subarea[16]->subtitulo}}</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<br>

@include('footer')  