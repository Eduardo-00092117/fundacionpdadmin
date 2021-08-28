@include('nav')

<style>
    .sup{
        display: none;
    }
    body{
    background-color: #b2cd36;
    }
</style>
<div class="contacto">
    <div class="container-fluid" id="contact-container">
        <div class="row">
            <div class="col-lg-6">

                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div id="textBlock">
                            <i class="fas fa-phone" style="color: white; margin-top: 10px; font-size: 1.6em;"></i>
                            <div class="col">
                                <p id="texto_nf" class="v_resaltado">Llámanos</p>
                                <p id="texto_nf"><a class="v_resaltado" href="tel:+50322887837">{{$datos[0]->telefono1}}</a></p >
                                    <p id="texto_nf"><a class="v_resaltado" href="tel:+50322887891">{{$datos[0]->telefono2}}</a></p >
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div id="textBlock">
                            <i class="fas fa-clock" style="color: white; margin-top: 10px; font-size: 1.6em;"></i>
                            <div class="col">
                                <p id="texto_nf" class="v_resaltado">Horario</p>
                                <p id="texto_nf" class="v_resaltado">
                                    Lunes a Viernes: <br> {{$datos[0]->horario_semanal}}
                                </p>
                                <p id="texto_nf" class="v_resaltado">
                                    Sabado: <br> {{$datos[0]->horario_fin}}
                                </p>
                            </div>
                        </div>
                    </div>
                   
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div id="textBlock">
                            <i class="fas fa-map-marked-alt" style="color: white; margin-top: 10px; font-size: 1.6em;"></i>
                            <div class="col">
                                <p id="texto_nf" class="v_resaltado">Ubicación</p>
                                <p id="texto_nf" class="v_resaltado">{{$datos[0]->direccion}}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="col" id="facebook">
                            <a href="{{$datos[0]->url_facebook}}" target="_blank">

                                <i class="fab fa-facebook" style="color: white; margin-top: 10px; font-size: 1.6em";></i>
                                <div class="texto">
                                    <p>Paraisodown</p>
                                </div>
                            </a>
                        </div>
                        <div class="col" id="insta">
                            <a href="{{$datos[0]->url_instagram}}" target="_blank">
                                <i class="fab fa-instagram" style="color: white; margin-top: 10px; font-size: 1.6em"></i>
                                <div class="texto">
                                    <p>Paraisodownorg</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <iframe src="{{$datos[0]->mapa}}" frameborder="0" style="border:10px solid gray;" allowfullscreen="" id="mapa"></iframe>
                </div>
            </div>
            <div class="col-lg-6 info">
                @if(Session::has('flash_message'))
                    <div class="alert alert-danger alert-dismissible fade show" id="success-alert" role="alert">
                    <strong>{!! session('flash_message') !!}</strong> 
                    </div>
                @endif
                @if(Session::has('flash_message2'))
                    <div class="alert alert-info alert-dismissible fade show" id="success-alert" role="alert">
                    <strong>{!! session('flash_message2') !!}</strong> 
                    </div>
                @endif
                <form action={{route('contact')}} method="POST">
                    {{ csrf_field() }}
                    <div class="textin" id="nombreform">
                        <p>Nombre</p>
                        <input class="form-control form-control-lg" name="name" type="text">
                    </div>
                    <div class="textin" id="emailform">
                        <p>E-mail</p>
                        <input class="form-control form-control-lg" name="email" type="email">
                    </div>
                    <div class="textin" id="asuntoform"> 
                        <p>Asunto</p>
                        <input class="form-control form-control-lg" name="subject" type="text">
                    </div>
                    <div class="textin msgform">
                        <p>Mensaje</p>
                        <textarea class="form-control form-control-lg" name="message" type="text" rows='6'></textarea>
                    </div>
                    <div class="g-recaptcha" data-sitekey="6Ld-aCscAAAAANvTL4VY4kvzUo79Ck5Nfnm4REbJ"></div>
                    <div class="btn-contacto">
                        <button type="submit" class="btn btn-danger fenviar"><i class="far fa-paper-plane"></i> Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
    $('.alert').alert()
	window.setTimeout(function () { 
    $("#success-alert").alert('close'); }, 2000);   
</script>