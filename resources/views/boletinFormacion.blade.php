@include('nav')

<div class="container-fluid" id="boletin">

<div class="card text-center">
        <div class="card-header">
          <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
              <a class="nav-link" href="/noticias">Noticias</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="/formacion">Formación</a>
            </li>
          </ul>
        </div>
        <div class="card-body">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
              @php
                $cont = 1;
              @endphp
              @foreach($formacion as $pos)
                @if ($cont === 1) 
                  <div class="carousel-item active">
                    <h3 class="card-title text-color-celeste">{{$pos->titulo}}</h3>
                    <img src="img/{{$pos->url_imagen}}" class="img-fluid">
                    <div class="textoCarrusel">
                      <p class="card-text">{{$pos->descripcion}}</p>
                    </div>
                  </div>
                    @php
                      $cont = 2;
                    @endphp
                @else
                  <div class="carousel-item">
                    <h3 class="card-title text-color-celeste">{{$pos->titulo}}</h3>
                    <img src="img/{{$pos->url_imagen}}" class="img-fluid">
                    <div class="textoCarrusel">
                      <p class="card-text">{{$pos->descripcion}}</p>
                    </div>
                  </div>
                @endif
              @endforeach
              </div>
              <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
        </div>
      </div>

</div>


@include('footer')