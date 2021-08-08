@include('nav')

<div class="container-fluid" id="sindromeDown">
    <!--Que es el sindrome de Down-->
    <div class="row sDContainer bg-gris-claro">
        <div class="col">
            <h1 class="tc-celeste">¿QUÉ ES EL <br>SINDROME DE DOWN?</h1>
            <hr class="linea-multicolor" width="55%">
            <img src="{{URL::asset('img/sindromeDown/ADN.png')}}">
            <div class="row sDText"> 
                <div class="col-md-6">
                    <p>El síndrome de Down no es una enfermedad, es una condición genética que se da a partir de la 
                        acomodación cromosómica en la que existe la presencia de una copia extra del cromosoma 21 
                        (o una parte del mismo),</p>
                </div>
                <div class="col-md-6">
                    <p>a diferencia de los dos habituales, por ello se denomina también trisomía del par 21. 
                        Ocurre de forma natural y ha sido siempre una parte de la condición humana, estando 
                        universalmente presente en todas las razas, géneros o estratos sociales.
                    </p>
                </div>

            </div>

        </div>
    </div>

    <!--Incidencia-->
    <div class="row sDContainer bg-anaranjado">
        <div class="col">
            <h2 class="tc-rosado">INCIDENCIA</h2>
            <div class="row justify-content-center" id="cls-f2">
                <div class="col-md-5"> 
                    <img src="{{URL::asset('img/sindromeDown/incidencia.png')}}" width="50%">
                </div>
                <div class="col-md-5" id="m2">
                    <img src="{{URL::asset('img/sindromeDown/mundo.png')}}" width="50%">
                </div>
            </div>
        </div>
    </div>
    <!--¿Como se da?-->
    <div class="row sDContainer" style="padding-bottom: 0%;">
        <div class="col">
            <h2 class="tc-verde">¿CÓMO SE DA?</h2>
            <div class="row" id="desktop">  
                <div class="col">
                    <img src="{{URL::asset('img/sindromeDown/como_se_da1.png')}}" id="img-med-desk">
                </div>
                <div class="col">
                    <img src="{{URL::asset('img/sindromeDown/como_se_da2.png')}}" id="img-large-desk">
                </div>
            </div>

            <div class="row" id="moviles">  
                <div class="col">
                    <img src="{{URL::asset('img/sindromeDown/como_se_da1.png')}}" class="csd1">
                </div>
                <br>
                <div class="col">
                    <img src="{{URL::asset('img/sindromeDown/sD_Moviles/c_sDt.png')}}">
                    <img src="{{URL::asset('img/sindromeDown/sD_Moviles/d1.png')}}">
                    <img src="{{URL::asset('img/sindromeDown/sD_Moviles/d2.png')}}">
                </div>

            </div>
            <div class="row bg-gris-claro" style="margin-top: 2%;">
                <div class="col-md-3 titulo-anaranjado-sindrome">
                    <h2 class="tc-anaranjado">¡CAUSA!</h2>
                </div>
                <div class="col-md-8 align-self-center">
                    <p id="t_cuerpo">Hasta la fecha se desconoce la razón por la que los cromosomas se dividen de esta manera al 
                        momento de la concepción, por lo tanto no hay una causa específica que determine si una madre 
                        tendrá un hijo con síndrome de Down, salvo la incidencia arriba mencionada, sin embargo cualquier
                         persona puede tener un hijo con síndrome de Down.
                    </p>
                </div>
            </div>
        </div>
    </div>

    
    <!--formas en que se da-->
    <div class="row sDContainer bg-azul" style="padding-bottom: 0%;">
        <div class="col">
            <h2 class="tc-amarillo">FORMAS EN <br>LAS QUE SE DA</h2>
            <div class="row justify-content-center frmda">
                <div class="col-sm">
                    <img src="{{URL::asset('img/sindromeDown/t_trisomia_21.png')}}" id="img-xlarge-desk">
                    <p class="sDText">Todas las células del cuerpo poseen un cromosoma 21 adicional.
                    </p>
                    <img src="{{URL::asset('img/sindromeDown/trisomia_21.png')}}" id="img-med-desk">
                </div>   
                <div class="col-sm">
                    <img src="{{URL::asset('img/sindromeDown/t_translocacion.png')}}" id="img-xlarge-desk">
                    <p class="sDText">Se presenta con 2 cromosomas del par 21 completos (lo normal) más un trozo más o menos
                         grande de un tercer cromosoma 21 que generalmente se encuentra pegado o adherido a otro 
                         cromosoma de otro par (el 14 , 22 o algún otro, aunque generalmente es el 14).</p>
                    <img src="{{URL::asset('img/sindromeDown/translocacion.png')}}" id="img-med-desk">
                </div>
                <div class="col-sm">

                    <img src="{{URL::asset('img/sindromeDown/t_mosaico.png')}}" id="img-xlarge-desk">
                    <p class="sDText">Algunas células contienen el cromosoma extra (haciendo que estas tengan en total 47 
                        cromosomas) y otras tienen 46, como suelen ser normalmente.</p>
                    <img src="{{URL::asset('img/sindromeDown/mosaico.png')}}" id="img-med-desk">
                </div>
            </div>
            
            <div class="row bg-azul-oscuro" style="padding-bottom: 0%; margin-top: 2%; padding-top: 10px;">
                <div class="col" id="glosario">
                    <h2 class="tc-blanco">GLOSARIO</h2>
                    <div class="row" id="desc">
                        <div class="col-sm" >
                            <div class="row">
                                <div class="col-sm align-self-center">
                                    <p class="tc-blanco" style="font-family: 'Fredoka One', cursive;
                                    font-size: 2em;">
                                        TRANS-<br>LOCADO
                                    </p>
                                </div>
                                <div class="col-sm align-self-center">
                                    <p id="t_cuerpo">Consiste en la transferencia de un segmento de cromosoma, o de un cromosoma 
                                        entero, a un cromosoma de otro par.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="row">
                                <div class="col-sm align-self-center">
                                    <p class="tc-blanco" style="font-family: 'Fredoka One', cursive;
                                    font-size: 2em;">
                                        CROMO-<br>SOMA
                                    </p>
                                </div>
                                <div class="col-sm align-self-center">
                                    <p id="t_cuerpo">Elemento que se halla en el interior del núcleo de una célula y 
                                        que contiene el material genético.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div >
            </div>
        </div>
    </div>
    <!-- caracteristicas fisicas-->
    <div class="row sDContainer" style="padding-bottom: 0;">
        <div class="col">
            <h2 class="tc-verde">CARACTERÍSTICAS FÍSICAS</h2>
            <hr class="linea-multicolor" width="70%">
            <div class="col" >
                <div class="row ">
                    <div class="col-sm">
                        <img class="cFisicasImg" src="/img/sindromeDown/c_fisicas1.png" alt="">
                    </div>
                    <div class="col-sm">
                        <img class="cFisicasImg" src="/img/sindromeDown/c_fisicas2.png" alt="">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <img src="/img/sindromeDown/t2.png" alt="" class="tituloaManosPies">
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col-sm">
                        <img class="cFisicasImg" src="/img/sindromeDown/c_fisicas3.png" alt="">
                    </div>
                    <div class="col-sm">
                        <img class="cFisicasImg" src="/img/sindromeDown/c_fisicas4.png" alt="">
                    </div>
                </div>
            </div>
 
            <div class="row bg-gris-claro" style="margin-top: 2%;">
                <div class="col-md-3 titulo-anaranjado-sindrome">
                    <h2 class="tc-anaranjado">¡NOTA!</h2>
                </div>
                <div class="col-md-8 align-self-center">
                    <p id="t_cuerpo">Algunas personas con síndrome de Down, pueden presentar otras características 
                        o carecer de algunas, ya que ninguna persona con síndrome de Down, es igual a otra.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--Etapas-->
    <div class="row sDContainer bg-anaranjado">
        <div class="col">
            <h2 class="tc-blanco">ETAPAS</h2>
            <div class="row" id="cls-f6"> 
                <div class="col-sm">
                    <img src="{{URL::asset('img/sindromeDown/etapa1.png')}}">
                </div>
                <div class="col-sm">
                    <img src="{{URL::asset('img/sindromeDown/etapa2.png')}}">
                </div>
                <div class="col-sm">
                    <img src="{{URL::asset('img/sindromeDown/etapa3.png')}}">
                </div>
            </div>
            <div class="row" id="cls-f6"> 
                <div class="col-sm">
                    <img src="{{URL::asset('img/sindromeDown/etapa4.png')}}">
                </div>
                <div class="col-sm">
                    <img src="{{URL::asset('img/sindromeDown/etapa5.png')}}">
                </div>
                <div class="col-sm">
                    <img src="{{URL::asset('img/sindromeDown/etapa6.png')}}">
                </div>
            </div>
        </div>
    </div>
    <!--Salud-->
    <div class="row sDContainer" style="padding-bottom: 0;">
        <div class="col">
            <h2 class="tc-verde">SALUD</h2>
            <div class="row ">
                <div class="col">
                    <hr class="linea-multicolor" width="75%">
                    <div class="row justify-content-center" id="cls-f7">
                        <div class="col-md-5">
                            <p id="t_cuerpo">Son más propensos a los problemas respiratorios. Algunas veces poseen problemas 
                                visuales, tales como el estrabismo y la miopía, al igual que la dificultad del 
                                habla y problemas con la calidad de audición. Una tercera parte tienen 
                                complicaciones en el corazón, la mayoría de los cuales pueden ser corregidos. 
                                Algunos nacen con problemas gastro intestinales que pueden ser corregidos, 
                                por medio de la intervención quirúrgica. Algunas personas con síndrome de Down 
                                pueden tener una condición conocida como Inestabilidad Atlantoaxial, una 
                                desalineación de las primeras dos vértebras del cuello. </p>
                        </div>
                        <div class="col-md-5">
                            <p id="t_cuerpo">Esta última condición causa que sean más propensos a las heridas si participan en 
                                actividades durante las cuales pueden extender demasiado o encorvar el cuello. 
                                A pesar de esta desalineación puede ser una condición seria, un diagnóstico 
                                correcto podría ayudar en la prevención de las heridas graves. En muchos casos, 
                                las personas con síndrome de Down son propensos a subir de peso, con el tiempo 
                                este aumento de peso amenaza la salud y longevidad de estos individuos. Una dieta 
                                controlada y un programa de ejercicio podrían presentar una solución a este 
                                problema.</p>
                        </div>
                    </div>
                </div>
            </div> 
            
            <div class="row sDContainer bg-gris-claro">
                <div class="col">
                    <h2 class="tc-rosado">Algunas predisposiciones de salud.</h2>
                    <img src="{{URL::asset('img/sindromeDown/d-salud.png')}}" width="80%">
                </div>

            </div>
            <div class="row" style="padding-top: 1%;">
                <div class="col-md-3 titulo-anaranjado-sindrome">
                    <h2 class="tc-anaranjado">¡NOTA!</h2>
                </div>
                <div class="col-md-8" style="text-align: justify;">
                    <p>Todas estas características de salud varían de una persona a otra. 
                        No existe una forma de predecir si alguna de estas condiciones estará presente o no; por lo que, los chequeos médicos constantes son importantes.

                        Recuerda que una detección temprana, permite un tratamiento oportuno.
                    </p>
                </div>
            </div>
        </div>
    </div>

</div>

@include('footer')