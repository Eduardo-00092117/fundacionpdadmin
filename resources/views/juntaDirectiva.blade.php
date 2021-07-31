@include('nav')

<div class="container container-junta">
    <h1 class="tc-celeste">Junta Directiva</h1>
    <hr class="linea-multicolor">
    <div class="diagrama">
        <div class="texto-prin letra-amarillo">PRESIDENTE</div>
        <div  class="node node-parte-1 node-amarillo" style="width: 300px;">{{$junta[0]->presidente}}</div>
        
        <div class="vertical"></div>
        <div class="texto-prin letra-celeste" >VICEPRESIDENTE</div>
        <div class="vertical"></div>
        
        <div  class="node node-parte-1 node-celeste" style="width: 300px;">{{$junta[0]->vicepresidente}}</div>
        
        <div class="vertical2"></div>
        
        <div class="horizontal"></div>
        <div class="texto2 letra-verde" style="margin-right: 60px;">TESORERO</div>
        <div  class="node node-parte-2 node-right node-verde" style="width: 300px;">{{$junta[0]->tesorero}}</div>
        <div class="texto3 letra-verde" style="margin-left: 50px;">SECRETARIO</div>
        <div  class="node node-parte-2 node-left node-verde" style="width: 300px;">{{$junta[0]->secretario}}</div>
        
        <div class="vertical3"></div>
        <div class="texto-prin letra-rosado">VOCALES</div>
        <div class="vertical4"></div>
        
        <div class="horizontal"></div>
        <div  class="node node-parte-2 node-right node-rosado" style="width: 300px;">{{$junta[0]->vocal_1}}</div>
        <div  class="node node-parte-2 node-left node-rosado" style="width: 300px;">{{$junta[0]->vocal_2}}</div>
        
        <div class="vertical2"></div>
        <div class="vertical2"></div>
        
        <div class="horizontal"></div>
        <div class="rela">
            <div  class="node node-parte-2 node-right node-rosado" style="width: 300px;">{{$junta[0]->vocal_3}}</div>
            <div  class="node node-parte-2 node-left node-rosado" style="width: 300px;">{{$junta[0]->vocal_4}}</div>
        </div>
        
        
        <div class="vertical2"></div>
        <div  class="node node-parte-1 node-rosado" style="margin-top: 40px;width: 300px;">{{$junta[0]->vocal_5}}</div>
    </div>

    <div class="lista">
        <div class="texto-lista tc-blanco texto-lista-principal node-amarillo node-list">PRESIDENTE</div>
        <div class="lista-nombre">
            <ul class="letra-amarillo">
                <li>{{$junta[0]->presidente}}</li>
            </ul>
        </div>
        <div class="texto-lista tc-blanco texto-lista-principal node-celeste node-list">VICEPRESIDENTE</div>
        <div class="lista-nombre">
            <ul class="letra-celeste">
                <li>{{$junta[0]->vicepresidente}}</li>
            </ul>
        </div>
        
        <div class="texto-lista tc-blanco texto-lista-principal node-verde node-list">TESORERO</div>
        <div class="lista-nombre">
            <ul class="letra-verde">
                <li>{{$junta[0]->tesorero}}</li>
            </ul>
        </div>
        <div class="texto-lista tc-blanco texto-lista-principal node-verde node-list">SECRETARIO</div>
        <div class="lista-nombre">
            <ul class="letra-verde">
                <li>{{$junta[0]->secretario}}</li>
            </ul>
        </div>
        
        <div class="texto-lista tc-blanco texto-lista-principal node-rosado node-list">VOCALES</div>
        <div class="lista-nombre">
            <ul class="letra-rosado">
                <li>{{$junta[0]->vocal_1}}</li>
                <li>{{$junta[0]->vocal_2}}</li>
                <li>{{$junta[0]->vocal_3}}</li>
                <li>{{$junta[0]->vocal_4}}</li>
                <li>{{$junta[0]->vocal_5}}</li>
            </ul>
        </div>
        
    </div>
</div>
@include('footer')