@include('nav')

<div class="container-fluid">
    <div class="card text-center mantenimiento">
        <div class="card-header"></div>
        <div class="card-body">
          <h2 class="card-title tc-rosado">Pagina no disponible</h2>
          <img src="{{URL::asset('img/Mantenimiento/mantenimiento.jpg')}}">
          <div class="d-flex justify-content-center" style="margin: 1%">
            <div class="spinner-border tc-verde" role="status">
              <span class="visually-hidden"></span>
            </div>
          </div>
        </div>
        <div class="card-footer text-muted"></div>
    </div>
</div>

@include('footer')