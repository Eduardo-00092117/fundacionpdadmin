<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/941493bfa7.js" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css?family=Assistant|Fredoka+One&display=swap" rel="stylesheet">


    <link href = "{{URL::asset('css/areaTrabajo.css')}}" rel="stylesheet">
    <link href = "{{URL::asset('css/catalogo.css')}}" rel="stylesheet">
    <link href = "{{URL::asset('css/index.css')}}" rel="stylesheet">
    <link href = "{{URL::asset('css/sindromeDown.css')}}" rel="stylesheet">
    <link href = "{{URL::asset('css/quienesSomos.css')}}" rel="stylesheet">
    <link href = "{{URL::asset('css/contactanos.css')}}" rel="stylesheet">
    <link href = "{{URL::asset('css/responsive.css')}}" rel="stylesheet">
    

    <link  rel="icon"  href="img/nav/Untitled.png" type="image/png" />

    <title>Fundacion Paraíso Down</title>
</head>

<body>
    <nav class="navbar navbar-light sup" style="background-color: #fbbc35; font: 14px 'Lucida Grande', Helvetica, Arial, sans-serif;">
        <div class="cont-sup">
            <div id="sn-s">
                <a href="{{$datos[0]->url_facebook}}" target="_blank"><i class="fab fa-facebook"></i></a>
            </div>
            <div id="sn-s">
                <a href="{{$datos[0]->url_instagram}}" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="inf-s"> 
            <div id="inf">
                <i class="fas fa-clock"></i>
                <p>Horario: L-V: {{$datos[0]->horario_semanal}} | S: {{$datos[0]->horario_fin}}</p>
            </div>
        </div>

    </nav>

    <nav class="navbar navbar-expand-lg navbar-light menu-admin">
        <a class="navbar-brand logo-menu" href="/">
            <img src="{{URL::asset('img/nav/Logo-FPD2.jpg')}}">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item dropdown link-menu">
                    <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="color-botton1">Síndrome</span> <br><span
                            class="color-botton2">de Down</span>
                    </a>
                    <div class="dropdown-menu sub-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="sd_Down">Hablemos sobre Síndrome <br> de Down</a>
                        <a class="dropdown-item" href="terminosCorrectos">Términos Correctos</a>
                        <a class="dropdown-item" href="leyes">Leyes y derechos</a>
                    </div>
                </li>
                <hr class="linea-menu">
                <hr class="linea-menu-responsive">
                <li class="nav-item dropdown link-menu">
                    <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="color-botton1">¿Quiénes</span> <br><span
                            class="color-botton2">somos?</span>
                    </a>
                    <div class="dropdown-menu sub-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item espaciado2" href="/quienes_somos">Historia, objetivo, misión, <br> visión, valores</a>
                        <a class="dropdown-item" href="/junta">Junta Directiva</a>
                        <a class="dropdown-item" href="/legal">Constitución Legal</a>
                        <a class="dropdown-item" href="/mantenimiento">Asociaciones de <br>apoyo</a>
                        <a class="dropdown-item" href="/voluntariado">Voluntariado</a>
                    </div>
                </li>
                <hr class="linea-menu">
                <hr class="linea-menu-responsive">
                <li class="nav-item dropdown link-menu">
                    <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="color-botton1">Áreas de</span> <br><span
                            class="color-botton2">trabajo</span>
                    </a>
                    <div class="dropdown-menu sub-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/aEvaluacion">Evaluación: Nuevo Ingreso</a>
                        <a class="dropdown-item" href="/aFiMotor">Área de desarrollo <br> físico y motor</a>
                        <a class="dropdown-item" href="/aOcupacional">Área ocupacional</a>
                        <a class="dropdown-item" href="/aLenguaje">Área de lenguaje</a>
                        <a class="dropdown-item" href="/aPed">Área pedagógica</a>
                        <a class="dropdown-item espaciado" href="/aDesarrollo">Área de desarrollo integral <br> en adolescentes y adultos</a>
                        <a class="dropdown-item" href="/aPsicologica">Área psicológica</a>
                    </div>
                </li>
                <hr class="linea-menu">
                <hr class="linea-menu-responsive">

                <li class="nav-item link-menu">
                    <a class="nav-link text-light" href="/mantenimiento">
                        <span class="color-botton1">Noticias</span> <br><span
                            class="color-botton2">e información</span>
                    </a>
                </li>
                <hr class="linea-menu">
                <hr class="linea-menu-responsive">
                <li class="nav-item link-menu">
                    <a class="nav-link text-light menu-contactanos" href="/contacto">
                        <span class="color-botton1">Contáctanos</span>
                    </a>
                </li>

            </ul>
        </div>

    </nav>