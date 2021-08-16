@include('nav')

<div class="container-leyes center">
    <h1 class="tc-gris">LEYES Y DERECHOS</h1>
    <hr class="linea-multicolor">
    <img src="{{URL::asset('img/leyesderechos/Balanza.png')}}" class="img-fluid">
    <div class="container">
        <h2>CONVENCIÓN, CÓDIGO, LEYES, RESOLUCIÓN POLÍTICAS Y DERECHOS QUE COMPETEN A LAS PERSONAS CON DISCAPACIDAD</h2>
        <div id="desktop">
            <img src="{{URL::asset('img/leyesderechos/Leyes.png')}}" class="img-fluid">
        </div>
        <div id="moviles">
            <div class="tCModal">
                <!-- leyes trigger-->
                <button type="button" class="btn" id="boton" data-toggle="modal" data-target="#tErr" style="background-color: #0ca3c2; font-size: 1em; color: white; width: 60%;">
                    Leyes
                </button>
                <!-- Modal leyes -->
                <div class="modal fade" id="tErr" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content" id="p_sDown-c">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Leyes</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            <hr class="linea-multicolor">
                            <ul id="lista-modal">
                                <li>Convención sobre los Derechos de las Personas con Discapacidad y Protocolo Facultativo de las Naciones Unidas (ONU).</li>
                                <li>Código de Trabajo.</li>
                                <li>Ley de Equiparación de Oportunidades para las Personas con Discapacidad.</li>
                                <li>Ley de Desarrollo y Protección Social.</li>
                                <li>Ley de Protección Integral de la Niñez y Adolescencia.</li>
                                <li>Resolución Aprobada por la Asamblea General el 19 de Diciembre de 2011: Día Mundial del Síndrome de Down.</li>
                                <li>Política de Eduación Inclusiva.</li>
                            </ul>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-derechos-art center">
    <h1 class="tc-gris">DERECHOS DE LAS PERSONAS CON DISCAPACIDAD SEGÚN ART. 2 DE LA LEY DE EQUIPARACIÓN DE OPORTUNIDADES PARA LAS
        PERSONAS CON DISCAPACIDAD DE EL SALVADOR</h1>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-6">
                <div>
                    <hr class="linea-derechos-art bg-rosado">
                    <br>
                    <img src="img/{{$ninio[0]->url_imagen}}" class="img-fluid">
                    <h2 class="tc-blanco"  style="font-weight: 200;">Las personas con discapacidad tienen derecho a:</h2>
                </div>
                <div>
                    <hr class="linea-derechos-art bg-rosado">
                    <p>Según art. 2 de la ley de equiparación de oportunidades para las personas con discapacidad de El
                    Salvador.</p>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div>
                    <hr class="linea-derechos-art bg-anaranjado">
                    <br>
                    <img src="img/{{$ninio[1]->url_imagen}}" class="img-fluid">
                    <p>1. A ser protegida contra la discriminación, explotación, trato denigrante o abusivo en razón de su
                        discapacidad.</p>
                </div>
                <div>
                    <hr class="linea-derechos-art bg-anaranjado">
                    <p>Según art. 2 de la ley de equiparación de oportunidades para las personas con discapacidad de El
                        Salvador.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <div>
                    <hr class="linea-derechos-art bg-verde">
                    <br>
                    <img src="img/{{$ninio[2]->url_imagen}}" class="img-fluid">
                    <p>2. A recibir educación con metodología adecuada que facilite su aprendizaje.</p>
                </div>
                <div>
                    <hr class="linea-derechos-art bg-verde">
                    <p>Según art. 2 de la ley de equiparación de oportunidades para las personas con discapacidad de El
                        Salvador.</p>
                </div>
                
            </div>
            <div class="col-12 col-md-6">
                <div>
                    <hr class="linea-derechos-art bg-celeste">
                    <br>
                    <img src="img/{{$ninio[3]->url_imagen}}" class="img-fluid">
                    <p>3. A facilidades arquitectónicas de movilidad vial y acceso a los establecimientos públicos y
                        privados con afluencia de público.</p>
                </div>
                <div>
                    <hr class="linea-derechos-art bg-celeste">
                        <p>Según art. 2 de la ley de equiparación de oportunidades para las personas con discapacidad de El
                            Salvador.</p>
                </div>
                
                
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <div>
                    <hr class="linea-derechos-art bg-rosado">
                    <br>
                    <img src="img/{{$ninio[4]->url_imagen}}" class="img-fluid">
                    <p>4. A su formación, rehabilitación laboral y profesional.</p>
                </div>
                <div>
                    <hr class="linea-derechos-art bg-rosado">
                        <p>Según art. 2 de la ley de equiparación de oportunidades para las personas con discapacidad de El
                        Salvador.</p>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div>
                    <hr class="linea-derechos-art bg-anaranjado">
                    <br>
                    <img src="img/{{$ninio[5]->url_imagen}}" class="img-fluid">
                    <p>5. A obtener empleo y ejercer una ocupación remunerada y a no ser despedido en razón de su
                        discapacidad.</p>
                </div>
                <div>
                    <hr class="linea-derechos-art bg-anaranjado">
                    <p>Según art. 2 de la ley de equiparación de oportunidades para las personas con discapacidad de El
                        Salvador.</p>
                </div>                
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 flex-container">
                <div>
                    <hr class="linea-derechos-art bg-verde">
                    <br>
                    <img src="img/{{$ninio[6]->url_imagen}}" class="img-fluid">
                    <p>6. A ser atendida por personal idóneo en su rehabilitación integral. 
                    </p>
                </div>
                <div>
                    <hr class="linea-derechos-art bg-verde">
                    <p>Según art. 2 de la ley de equiparación de oportunidades para las personas con discapacidad de El
                        Salvador.</p>
                </div>
            </div>
            <div class="col-12 col-md-6 flex-container">
                <div>
                    <hr class="linea-derechos-art bg-celeste">
                    <br>
                    <img src="img/{{$ninio[7]->url_imagen}}" class="img-fluid">
                    <p>7. A tener acceso a sistemas de becas. </p>
                </div>
                <div>
                    <hr class="linea-derechos-art bg-celeste">
                    <p>Según art. 2 de la ley de equiparación de oportunidades para las personas con discapacidad de El
                            Salvador.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-derechos center" style="padding-top: 3%;">
    <div class="container">
        <h1 class="tc-gris">DERECHOS SEGÚN LA CONVENCIÓN SOBRE LOS DERECHOS DE LAS PERSONAS CON DISCAPACIDAD Y PROTOCOLO FACULTATIVO DE
            LAS
            NACIONES UNIDAS (ONU)</h1>
        <hr class="linea-multicolor">
        <p>Recordando los principios de la carta de las Naciones Unidad que proclaman que la libertad, la justicia y la
            paz en el mundo tienen por base el reconocimiento de la dignidad, el valor inherente y los derechos iguales
            e inalienables de todos los miembros de la familia humana.</p>
        <div class="row">
            <div class="col-12 col-md-6" id="lista">
                <div>
                    <ul>
                        <li><span>Derecho a la vida.</span></li>
                        <li><span>Derecho a la igualdad y no discriminación.</span></li>
                        <li><span>Derecho a la accesibilidad</span>.</li>
                        <li><span>Derecho internacional humanitario.</span></li>
                        <li><span>Derecho al acceso a la justicia.</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div>
                    <ul>
                        <li><span>Derecho a la eduación.</span></li>
                        <li><span>Derecho a vivir de forma independiente y ser incluido en la comunidad.</span></li>
                        <li><span>Derecho a la libertad de desplazamiento y nacionalidad.</span></li>
                        <li><span>Derecho en todas partes al reconocimiento de su personalidad jurídica.</span></li>
                        <li><span>Derecho a no ser sometido a torturas y otros tratos o penas crueles, inhumanos o
                            degradantes.</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <div>
                    <ul>
                        <li><span>Derecho a la salud.</span></li>
                        <li><span>Derecho a la libertad y seguridad de la persona.</span></li>
                        <li><span>Derecho al respeto de la privacidad.</span></li>
                        <li><span>Derecho a la protección de la integridad personal (física y mental).</span></li>
                        <li><span>Derecho a la libertad de expresión, de opinión y acceso a la información.</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div>
                    <ul>
                        <li><span>Derecho al trabajo y empleo.</span></li>
                        <li><span>Derecho al respeto del hogas y de la familia.</span></li>
                        <li><span>Derecho a nivel de vida adecuada y protección social.</span></li>
                        <li><span>Derecho a la participación en la vida política y pública.</span></li>
                        <li><span>Derecho a la participación en la vida cultural, las actividades recreativas, el
                            esparcimiento y el deporte.</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@include('footer')