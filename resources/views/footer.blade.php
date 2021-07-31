</body>
<footer>
    <div class="container" id="contenedor">
        <div class="row align-items-center">
            <div class="col">
                <div class="logofundacion">
                    <img src="{{URL::asset('img/footer/Logo-FPD.png')}}" alt="">
                </div>
            </div>
            <div class="col info">
                <div class="col" id="telefono">
                    <img src="{{URL::asset('img/footer/Phone.png')}}" class="img-fluid" alt="Responsive image">
                    <div class="texto">
                        <p id="texto_nf"><a class="v_normal">Llámanos</a></p>
                        <p id="texto_nf"><a class="v_resaltado" href="tel:+503{{$datos[0]->telefono1}}">{{$datos[0]->telefono1}}</a></p >
                            <p id="texto_nf"><a class="v_resaltado" href="tel:+503{{$datos[0]->telefono2}}">{{$datos[0]->telefono2}}</a></p >
                    </div>
                </div>
                <div class="col" id="ubicacion">
                    <img src="{{URL::asset('img/footer/Site-logo.png')}}" class="img-fluid" alt="Responsive image">
                    <div class="texto">
                        <p>Ubicación</p>
                        <h6 style="text-align: justify;">{{$datos[0]->direccion}}</h6>
                    </div>
                </div>
                <div class="col" id="facebook">
                    <a href="{{$datos[0]->url_facebook}}" target="_blank">
                        <img src="{{URL::asset('img/footer/FB-logo.png')}}" class="img-fluid" alt="Responsive image">
                        <div class="texto">
                            <p>Paraisodown</p>
                        </div>
                    </a>
                </div>
                <div class="col" id="insta">
                    <a href="{{$datos[0]->url_instagram}}" target="_blank">
                        <img src="{{URL::asset('img/footer/IG-logo.png')}}" class="img-fluid" alt="Responsive image">
                        <div class="texto">
                            <p>Paraisodownorg</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>

</html>