<style>
    @media (max-width: 750px){
        .menu-pagina .menu-web{
            display:none !important;
        }
        .menu-pagina .menu-celular{
            display:block !important;
        }
        
        
    }
    
    .menu-pagina .menu-web img, .menu-pagina .menu-celular img{
        height:70px;
        margin-left:90px;
    }
    .menu-pagina .menu-web .col-md-7{
        display:flex;
    }
</style>

<div class="offset-md-1 col-md-10 menu-pagina">
    <div class="row m-0 menu-web">
        <div class="col-md-5">
            <img src="{{url('img/logo-negativo.png')}}">
        </div>
        <div class="col-md-7">
            <ul>
                <li><a href="{{url('')}}">INICIO</a></li>
                <li><a href="{{url('medicos')}}">DOCTORES</a></li>
                <li><a href="{{url('testimonios')}}">TESTIMONIOS</a></li>
                <li><a href="{{url('cambios')}}">ANTES Y DESPÚES</a></li>
                <li><a href="{{url('indicaciones')}}">INDICACIONES</a></li>
                <li><a href="{{url('clinica')}}">CLÍNICA</a></li>
            </ul>
        </div>
    </div>
    
    <div class="row m-0 menu-celular">
        <div class="col-md-12">
            <div class="row m-0 p-0">
            <div class="col-md-9 izq">
                <img src="{{url('img/logo-negativo.png')}}">
            </div>
            <div class="col-md-3 der text-center">
                <button class="menu-button" data-bs-toggle="collapse" data-bs-target="#menu-vertical">
                    <i style="text-size:22px" class="fa-solid fa-bars"></i>
                </button>
            </div>
            </div>
        </div>
        <div class="menu-vertical collapse p-0" id="menu-vertical">
            <ul class="ul-vertical">
              <li><a href="{{url('')}}">INICIO</a></li>
                <li><a href="{{url('medicos')}}">DOCTORES</a></li>
                <li><a href="{{url('testimonios')}}">TESTIMONIOS</a></li>
                <li><a href="{{url('cambios')}}">ANTES Y DESPÚES</a></li>
                <li><a href="{{url('indicaciones')}}">INDICACIONES</a></li>
                <li><a href="{{url('clinica')}}">CLÍNICA</a></li>
            </ul>
        </div>
    </div>
</div>