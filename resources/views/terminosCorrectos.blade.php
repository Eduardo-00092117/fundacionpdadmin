@include('nav')

<div class="container-comunicar">
    <div class="container">
        <h1 class="tc-rosado">COMUNICAR<br>LA DISCAPACIDAD</h1>
        <hr class="linea-multicolor">
        <div class="row">
            <div class="col-12 col-md-6">
                <p>La palabra es una herramienta y con ella se pueden construir grandes proyectos, también permite derribar
                    barreras. A través de las palabras se construyen y orientan los pensamientos que a su vez defienden
                    las acciones en torno a las personas con discapacidad.</p>
            </div>
            <div class="col-12 col-md-6">
                <p>Al hablar de discapacidad toda la sociedad debe intervenir: Gobiernos, medios de comunicación,
                    asociaciones, normativas, entre otros; todos deben referirse a las
                    personas con discapacidad de forma correcta.</p>
            </div>
        </div>
    </div>

    @php
        $cont = 0;   
        $temp =  $erroneo[0]->termino_correcto->nombre;
        $c = collect();
    @endphp

    @foreach($erroneo as $pos)
        @if ($temp === $pos->termino_correcto->nombre)
            @php
                ++$cont;
            @endphp
        @else
            @php
                $c->add($cont);
                $temp = $pos->termino_correcto->nombre;
                $cont=1;
            @endphp
        @endif
    @endforeach
    @php 
        $c->add($cont);
    @endphp

    <div class="row">
        <div class="col-12" id="desktop">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">TÉRMINOS ERRÓNEOS</th>
                    <th scope="col">SIGNIFICADO</th>
                    <th scope="col">TÉRMINOS CORRECTOS</th>
                  </tr>
                </thead>
                @php
                    $cont = 0;  
                    $cont2 = 0; 
                    $temp =  $erroneo[0]->termino_correcto->nombre;
                @endphp
                <tbody>
                    @foreach($erroneo as $pos)
                        @if ($temp === $pos->termino_correcto->nombre)
                            @if ($cont === 0)
                                <tr>
                                    <td>{{$pos->nombre}}</td>
                                    <td>{{$pos->significado}}</td>
                                    <td rowspan="{{$c[$cont2]}}"><div>{{$correcto[$cont2]->nombre}}</div></td>
                                </tr>
                                @php
                                    $cont = 1;
                                @endphp
                            @else
                                <tr>
                                    <td>{{$pos->nombre}}</td>
                                    <td>{{$pos->significado}}</td>
                                </tr>
                            @endif
                        @else
                            @php
                                $temp = $pos->termino_correcto->nombre;
                                ++$cont2;
                            @endphp
                            <tr>
                                <td>{{$pos->nombre}}</td>
                                <td>{{$pos->significado}}</td>
                                <td rowspan="{{$c[$cont2]}}"><div>{{$correcto[$cont2]->nombre}}</div></td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div> 
<div class="row" id="moviles">
        
    <div class="tCModal">
        <!-- Terminos erroneos trigger-->
        <button type="button" class="btn" id="boton" data-toggle="modal" data-target="#tErr" style="background-color: #0ca3c2; font-size: 1.2em; color: white; width: 90%">
            Terminos erróneos
        </button>
        <!-- Modal terminos erroneos -->
        <div class="modal fade" id="tErr" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content" id="p_sDown-c">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Terminos erróneos</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <hr class="linea-multicolor">
                        <p>Es inadecuado utilizar términos como: </p>
                        <ul style='text-align: left;'>
                            @foreach($erroneo as $pos)
                                <li>{{$pos->nombre}}</li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tCModal">
        <!-- Terminos correctos trigger-->
        <button type="button" class="btn" id="boton" data-toggle="modal" data-target="#tCor" style="background-color: #f64397; font-size: 1.2em; color: white; width: 90%">
            Terminos correctos
        </button>
        <!-- Modal terminos erroneos -->
        <div class="modal fade" id="tCor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" id="p_sDown-c">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Terminos correctos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <hr class="linea-multicolor">
                    <p style='text-align: justify;'>El término correcto hace referencia al uso del CON o TIENE, dando prioridad a la persona y visualizando su condición 
                    sólo como una parte de sí mismo. De igual forma, es importante respetar la etapa del desarrollo en la que se encuentra.
                     Por ejemplo: </p>
                     <ul style='text-align: left;'>
                        @foreach($correcto as $pos)
                            <li>{{$pos->nombre}}</li>
                        @endforeach
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
<div class="container-significado">
    <div class="container center">
        <h1 class="tc-blanco">¿QUÉ ES <br> DISCAPACIDAD?</h1>
        <div class="row">
            <div class="col-12 col-md-6">
                <p>La discapacidad según la convención de la Organizacion de las Naciones Unidad (ONU), es un concepto
                    que evoluciona y que resulta de la interacción entre las personas con deficiencias y las barreras
                    debidas a la actitud y al entorno que evitan su participacion plena y efectiva en la sociedad, en
                    igualdad de condiciones con los demás.</p>
                <p>La discapacidad según la Organizacion Mundial de la Salud (OMS), es un término general que abarca las
                    deficiencias, las limitaciones de la actividad y las restricciones de la participación.</p>
            </div>
            <div class="col-12 col-md-6">
                <p>Las deficiencias son problemas que afectan a una estructura o función corporal; las limitaciones de
                    la actividad son dificultades para ejecutar acciones o tareas, y las restricciones de la
                    participación son problemas para participar en situaciones vitales.</p>
                <p>Por consiguiente, la discapacidad es un fenómeno complejo que refleja una interacción entre las
                    características del organismo humano y las características de la sociedad en la que vive.</p>
            </div>
        </div>
    </div>
</div>

<div class="container-tiposD">
    <div class="container center">
        <h1 class="tc-rosado">TIPOS DE DISCAPACIDAD</h1>
        <div class="row">
            <div class="col-12 col-md-6">
                <img src="{{URL::asset('img/terminosCorrectos/Fisica.png')}}" class="img-fluid" alt="...">
                <h2 class="tc-blanco">Física</h2>
                <p>Consiste en falta, deterioro o alteración funcional de una o más partes del cuerpo, y que provoque
                    inmovilidad o disminución de movilidad.</p>
            </div>
            <div id="linea-tiposD"></div>
            <div class="col-12 col-md-6">
                <img src="{{URL::asset('img/terminosCorrectos/Sensorial.png')}}" class="img-fluid" alt="...">
                <h2 class="tc-blanco">Sensorial</h2>
                <p>Consiste en el deterioro de UNO o más de los 5 sentidos, o falta de la función sensorial (sordera
                    parcial o total, dificultades para hablar, visión disminuidad o ceguera).</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <img src="{{URL::asset('img/terminosCorrectos/Intelectual.png')}}" class="img-fluid" alt="...">
                <h2 class="tc-blanco">Intelectual</h2>
                <p>Consiste en la disminución cognitiva significativa, que influye en la conducta adaptativa y se manifiesta en
                    habilidades adaptativas conceptuales, sociales y prácticas.</p>
            </div>
            <div id="linea-tiposD"></div>
            <div class="col-12 col-md-6">
                <img src="{{URL::asset('img/terminosCorrectos/Psico-social.png')}}" class="img-fluid" alt="...">
                <h2 class="tc-blanco">Psico-social</h2>
                <p>Consiste en alteraciones o dificultades en las funciones mentales, específicamente en el pensar,
                    sentir y relacionarse.</p>
            </div>
        </div>
    </div>
</div>

<div class="container-enfoques">
    <div class="container center">
        <h1 class="tc-gris">ENFOQUES PARA COMPRENDER <br> LA DISCAPACIDAD A LO LARGO DEL TIEMPO</h1>
        <hr class="linea-multicolor">
        <p>Las personas con discapacidad (PcD) ha sido considerada como castigo divino, con un origen religioso o
            únicamente médico, por lo que las personas con síndrome de Down han sido excluidas y discriminadas por su condición. Poco
            a poco se han desarrollado nuevos modelos para comprender la discapacidad.</p>
        <div class="row">
            <div class="col-12 col-md-6">
                <h2 class="tc-blanco">Prescindencia</h2>
                <ul>
                    <li><span>Tener un hijo con discapacidad es un castigo divino.</span></li>
                    <li><span>Se decide prescindir de las personas con discapacidad.</span></li>
                    <li><span>Hay muchos infanticidios.</span></li>
                    <li><span>Las personas son marginadas por completo.</span></li>
                </ul>
                <img src="{{URL::asset('img/terminosCorrectos/Exclusion.png')}}" class="img-fluid" alt="...">
            </div>
            <div class="col-12 col-md-6">
                <h2 class="tc-blanco">Caritativo</h2>
                <ul>
                    <li><span>Esas personas no aportan nada.</span></li>
                    <li><span>Cuando se les trata predomina la lástima.</span></li>
                    <li><span>Se considera que las personas con discapacidad sufren.</span></li> 
                    <li><span>"Sin mí, no pueden".</span></li>
                </ul>
                <img src="{{URL::asset('img/terminosCorrectos/Segregacion.png')}}" class="img-fluid" alt="...">
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <h2 class="tc-blanco">Médico-Rehabilitador</h2>
                <ul>
                    <li><span>Se reconoce la necesidad de apoyar activamente a las PcD.</span></li>
                    <li><span>Se busca normalizar, rehabilitar para poder participar.</span></li>
                    <li><span>Se basa en el precepto que a las PcD les falta algo que los demas tenemos que
                        dar.</span></li>
                    <li><span>"La discapacidad es una enfermedad que tiene que tratarse"</span></li>
                </ul>
                <img src="{{URL::asset('img/terminosCorrectos/Integracion.png')}}" class="img-fluid" alt="...">
            </div>
            <div class="col-12 col-md-6">
                <h2 class="tc-blanco">Social-Derechos Humanos</h2>
                <ul>
                    <li><span>Se reconoce la riqueza de la diversidad humana.</span></li>
                    <li><span>Se percibe la equidad como medio para lograr la igualdad.</span></li>
                    <li><span>Se reconoce que la sociedad también debe adaptarse.</span></li>
                    <li><span>Causas sociales más que religiosas o médicas.</span></li>
                    <li><span>Las personas con discapacidad pueden participar activamente.</span></li>
                    <li><span>Se enfatizan los derechos y no las necesidades.</span></li>
                </ul>
                <img src="{{URL::asset('img/terminosCorrectos/Inclusion.png')}}" class="img-fluid" alt="...">
            </div>
        </div>
    </div>
</div>

<div class="container-terminos">
    <div class="container center">
        <h1 class="tc-amarillo">TÉRMINOS</h1>
        <h2 class="tc-blanco">¿Qué es el síndrome de Down?</h2>
        <div class="row">
            <div class="col-12 col-md-6">
                <p>Es una alteración genética causado por la presencia de una copia total o parcial del cromosoma 21.
                </p>
                <p>Como un síndrome está acompañado de diversos elementos, como discapacidad intelectual.</p>
            </div>
            <div class="col-12 col-md-6">
                <p>Poco a poco se ha desarrollado nuevos modelos para comprender la discapacidad y el síndrome de Down
                    como parte de la misma, llegando a la conclusión que el origen de la discapacidad son las barreras
                    sociales que dificultan la socialización e impiden el goce pleno de derechos.</p>
            </div>
        </div>
    </div>
</div>

<div class="container-origen">
    <div class="container center">
        <h1 class="tc-rosado">Origen del<br>término síndrome de Down</h1>
        <p style="text-align: justify;">El nombre de síndrome de Down se debe al Dr. John Langdon Haydon Down, quien en 1866 descubrió las
            caracteristicas físicas comunes de estas personas.</p>
        <p style="text-align: justify;">Sin embargo, las atribuyó a enfermedades comunes. Fue hasta 1959 que el doctor Jerome Lejeune descubrió la
            alteración genética.</p>
    </div>
</div>

<div class="container-inclusion">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="container">
                    <div>
                        <hr>
                        <h1><span class="tc-blanco">¿Qué es</span> <span class="tc-amarillo">la Inclusión?</span></h1>
                        <p>Según el diccionario de la Real Academia de la Lengua Española (RAE), la inclusión es la acción y
                            efecto de incluir.</p>
                        <p>La inclusión implica el goce pleno de los derechos y deberes de una persona teniendo así las
                            mismas
                            oportunidades. Consiste en espacios de convivencia entre personas con y sin discapacidad que
                            faciliten la socializacion y el respeto a la diversidad.</p>
                        <p>La inclusión va más allá de la adecuación de espacios físicos, la construcción de una sociedad
                            inclusiva es también romper con estereotipos y actitudes negativas que limitan el goce de los
                            derechos humanos.</p>
                        <p>La utilización de un lenguaje adecuado y el conocimiento acertado sobre el síndrome de Down, son
                            los
                            primeros pasos para la eliminación de estas barreras actitudinales.</p>
                    </div>
                    <div>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="container">
                    <div>
                        <hr>
                        <h1><span class="tc-amarillo">¿Qué es la</span> <span class="tc-blanco">Educación</span> 
                            <span class="tc-amarillo">Inclusiva?</span></h1>
                        <p>Según el Comité sobre los Derechos de las Personas con Discapacidad, Comentario General N°4,
                            (2016) Artículo 24, Derecho a la Educación Inclusiva, debe ser entendida como:</p>
                        <p>a) Un derecho humano fundamental para todos los estudiantes.</p>
                        <p>A la fecha, se han llevado a cabo diversas iniciativas para construir una sociedad inclusiva,
                            donde
                            los Derechos para todas las personas se respeten y cumplan por igual. Sin embargo, una
                            verdadera
                            inclusión continúa siendo un reto.</p>
                    </div>
                    <div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-img-equidad center">
    <img src="{{URL::asset('img/terminosCorrectos/Igualdad-equidad-inclusion.png')}}" class="img-fluid" alt="...">
</div>

<div class="container-diversidad">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <h1 class="tc-celeste">¿Qué es <br>diversidad?</h1>
            </div>
            <div class="col-12 col-md-6">
                <p>El término diversidad, se refiere a la diferencia o la distinción entre personas, a la variedad, a la
                    infinidad o a la abundancia de cosas diferentes y a la multiplicidad, la cual enriquese a la
                    sociedad y debe respetarse.</p>
            </div>
        </div>
    </div>
</div>

<div class="container-recordar">
    <div class="container center">
        <img src="{{URL::asset('img/terminosCorrectos/Recuerda.png')}}" class="img-fluid" alt="...">
    </div>
</div>

@include('footer')