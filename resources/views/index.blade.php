@include('nav')
<style>
  .galeria-princial img { 
    width: 100%;
  };
</style>

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
  </ol>
  <div class="carousel-inner galeria-princial">
    @php
      $cont2 = 1;
    @endphp
    @foreach($area as $pos)
      @if ($pos->id != 1 &&  $pos->id != 7  && $pos->id != 8)
        @if ($cont2 === 1) 
          <div class="carousel-item active">
            <div align="center row">
              <div style="display:flex; align-items: center;">
                <img src="img/{{$pos->url_imagen}}" class="d-block" alt="...">
              </div>
              <div>
                <div>
                  <h2 class="tc-celeste" style="font-weight: 200;">{{$pos->nombre}}</h2>
                  <p>{{$pos->descripcion}}</p>
                </div>
              </div>
            </div>
          </div>
        @else
          <div class="carousel-item">
            <div align="center row">
              <div style="display:flex; align-items: center;">
                <img src="img/{{$pos->url_imagen}}" class="d-block" alt="...">
              </div>
              <div>
                <div>
                  <h2 class="tc-celeste" style="font-weight: 200;">{{$pos->nombre}}</h2>
                  <p>{{$pos->descripcion}}</p>
                </div>
              </div>
            </div>
          </div>
        @endif
        @php
          ++$cont2;
        @endphp
      @endif
    @endforeach
  </div>
</div>
<hr class="linea-index">
<div id="container-secciones">

  <h1 class="tc-celeste">SECCIONES</h1>
  <div class="container"> 
    <div class="row">
      <div class="col">
        <a href="https://yomeuno.com/el-salvador/organizaciones/fundacion-paraiso-down?ref=previous_url">
          <img src="{{URL::asset('img/index/Apoyanos.png')}}" class="img-fluid" alt="...">
        </a>
      </div>
      <div class="col-6 col-md-3">
        <a href="{{route('voluntariado')}}">
          <img src="{{URL::asset('img/index/Voluntariado.png')}}" class="img-fluid" alt="...">
        </a>
      </div>
      <div class="col-6 col-md-3" id="img-secciones">
        <a href="{{ route('mantenimiento') }}">
          <img src="{{URL::asset('img/index/Asociaciones.png')}}" class="img-fluid" alt="...">
        </a>
      </div>
      <div class="col-6 col-md-3" id="img-secciones">
        <a href="{{ route('leyes')}}">
          <img src="{{URL::asset('img/index/leyesderechos.png')}}" class="img-fluid" alt="...">
        </a>
      </div>
    </div>
  </div>
</div>

<div id="container-valores">
  <div class="container">
    <h1 class="tc-blanco">VALORES</h1>
    <div class="row">
      <div class="col-6 col-md-3" id="img-valores">
        <img src="{{URL::asset('img/index/Calidez.png')}}" class="img-fluid" alt="...">
      </div>
      <div class="col-6 col-md-3" id="img-valores">
        <img src="{{URL::asset('img/index/Diversidad.png')}}" class="img-fluid" alt="...">
      </div>
      <div class="col-6 col-md-3" id="img-valores">
        <img src="{{URL::asset('img/index/Inclusion.png')}}" class="img-fluid" alt="...">
      </div>
      <div class="col-6 col-md-3" id="img-valores">
        <img src="{{URL::asset('img/index/Respeto.png')}}" class="img-fluid" alt="...">
      </div>
    </div>
    <div class="img-valores2 row">
      <div class="col-md-1" id="img-valores">

      </div>
      <div class="col-6 col-md-3" id="img-valores">
        <img src="{{URL::asset('img/index/Responsabilidad.png')}}" class="img-fluid" alt="...">
      </div>
      <div class="col-6 col-md-3" id="img-valores">
        <img src="{{URL::asset('img/index/Solidaridad.png')}}" class="img-fluid" alt="...">
      </div>
      <div class="col-6 col-md-3" id="img-valores">
        <img src="{{URL::asset('img/index/Transparencia.png')}}" class="img-fluid" alt="...">
      </div>
    </div>
  </div>
</div>

<div class="container-redes">
  <div class="container">
    <h1 class="tc-rosado">REDES NACIONALES<br> E
        INTERNACIONALES</h1>
    <div class="row center">
      <div class="col-12 col-md-6" id="img-valores">
        <img src="{{URL::asset('img/index/Nacional.jpeg')}}" class="img-fluid" alt="...">
        <p>Como Fundación Paraíso Down El Salvador, pertenecemos a la Federación Iberoamericana de síndrome de Down,
          FIADOWN, que se ha creado con el deseo de estrechar los lazos de cooperación entre las federaciones y
          asociaciones de los distintos países iberoamericanos, a efectos de apoyar su gestión, fomentar, ampliar y
          fortalecer la cultura de los Derechos Humanos.</p>
      </div>
      <div class="col-12 col-md-6" id="img-valores">
        <img src="{{URL::asset('img/index/Internacional.jpeg')}}" class="img-fluid" alt="...">
        <p>También formamos parte de Red de Entidades de Atención a la Niñez y Adolescencia con Discapacidad RENADIS,
          enfocada en mejorar la atención integral de la niñez y adolescencia con discapacidad y sus familias, mediante
          la realizacion de acciones entre instituciones públicas y privadas en el marco del cumplimiento pleno de sus
          derechos.</p>
      </div>
    </div>
  </div>
</div>

<div class="container-sindrome-index">
  <h1 class="tc-celeste">EL SÍNDROME DE DOWN</h1>
  <div class="container-fluid">
    <div class="row">
      <div class="sindrome1 col-12 col-md-6">
        <div class="index-imagen1">
          <img src="{{URL::asset('img/index/kid1.jpeg')}}" class="img-fluid" alt="...">
        </div>
        <p id="index-text1">NO SE CONTAGIA</p>
        <p id="index-text2">INCLÚYELOS</p>
      </div>
      <div class="sindrome2 col-12 col-md-6">
        <div class="index-imagen2">
          <img src="{{URL::asset('img/index/kid2.jpeg')}}" class="img-fluid" alt="...">
        </div>
        <p id="index-text3">NO DISCRIMINA </p>
        <p id="index-text4">¡NO LO HAGAS TÚ!</p>
      </div>
    </div>
  </div>
</div>

<div id="container-apoyos-index">
  <div class="container">
    <h1 class="tc-anaranjado">¡CON TÚ APOYO<br> ES POSIBLE!
    </h1>
    <h2 class="tc-verde">¡LES DAMOS LAS GRACIAS!</h2>
    <p class="center">Agradecemos a todas las empresas, instituciones y organizaciones que nos brindan <br> su apoyo
      con:
      Empleos inclusivos, donaciones económicas y alianzas estratégicas.</p>
    <div class="row row-cols-md-5 row-cols-2 center">
        @foreach($patrocinadores as $pos)
            <div class="col">
              <img src="img/{{$pos->url_imagen}}" class="img-fluid" alt="{{$pos->nombre}}">
            </div>
        @endforeach
    </div>
  </div>
</div>

@include('footer')