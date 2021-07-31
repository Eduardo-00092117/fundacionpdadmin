@include('nav')

<div class="container center">
    <div class="info-legal">
        <h1>INFORMACIÓN LEGAL</h1>
        <hr class="linea-multicolor">
        <p>La Fundación Salvadoreña de Síndrome Down (conocida como Paraíso Down El Salvador y referida en el presente
            documento como “la Fundación”) fue creada el día 24 de junio de 2008, ratificada por Decreto Ejecutivo #111,
            de fecha 13 de octubre de 2008 publicado en Diario Oficial #212, Tomo 381, de Fecha 11 de noviembre de 2008,
            según se evidencia en los estatutos de creación de la Fundación; la Fundación está inscrita en el Registro
            de Asociaciones y Fundaciones Sin Fines de Lucro del Ministerio de Gobernación, de fecha 23 de Octubre de
            2008, bajo el Número 03 del Libro 19 de Fundaciones Nacionales; es una entidad apolítica, sin ánimo de
            lucro, sin preferencia religiosa, de derecho privado y de interés social, la cual está caracterizada como
            Organización No Gubernamental (ONG). La primera asamblea general extraordinaria fue celebrada el jueves 16
            de mayo de 2008, mismo día en que fue electa la primera Junta Directiva de la Fundación Salvadoreña de
            Síndrome de Down</p>
        <p>- Paraíso Down El Salvador. La Fundación tiene situadas sus oficinas y centro de atención
            en la dirección: {{$datos[0]->direccion}}</p>
        <br>
        <h1>CONFIRMACIÓN DE LEGALIZACIÓN DE <br>FUNDACIÓN PARAISO DOWN</h1>
        <hr class="linea-multicolor">
        <img src="{{URL::asset('img/info-legal/legal.png')}}" class="img-fluid">
    </div>
</div>

@include('footer')