@extends('template.layout')
@section('contenido')
<link rel="stylesheet" href="{{ url('css/slider.css') }}">

<div class="col-md-12 cambios-marco">
    <div class="row m-0">
        <div class="col-md-3 cambios-menu p-0 mt-4">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        ESTÉTICA FACIAL
                    </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div onclick="cargarDatos(1)" id="cambio_boton1" class="offset-md-1 col-md-6 accordion-boton cambio-seleccionado amarillo">
                        ORTOGNÁTICA
                        </div>
                        <div  onclick="cargarDatos(2)" id="cambio_boton2" class="offset-md-1 col-md-6 accordion-boton">
                        FRONTOPLASTÍA
                        </div>
                        <div  onclick="cargarDatos(3)" id="cambio_boton3" class="offset-md-1 col-md-6 accordion-boton">
                        OTOPLASTÍA
                        </div>
                        <div  onclick="cargarDatos(4)" id="cambio_boton4" class="offset-md-1 col-md-6 accordion-boton">
                        BLEFAROPLASTÍA
                        </div>
                        <div  onclick="cargarDatos(5)" id="cambio_boton5" class="offset-md-1 col-md-6 accordion-boton">
                        RINOPLASTÍA
                        </div>
                        <div  onclick="cargarDatos(6)" id="cambio_boton6" class="offset-md-1 col-md-6 accordion-boton">
                        MENTOPLASTÍA
                        </div>
                        <div onclick="cargarDatos(7)" id="cambio_boton7" class="offset-md-1 col-md-6 accordion-boton">
                        V-LINE
                        </div>
                    </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        MAXILOFACIAL
                    </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <div id="cambio_boton1" class="offset-md-1 col-md-6 accordion-boton">
                        ORTOGNÁTICA
                        </div>
                        <div onclick="cargarDatos(8)" id="cambio_boton8" class="offset-md-1 col-md-6 accordion-boton">
                        TERCEROS MOLARES
                        </div>
                        <div onclick="cargarDatos(9)" id="cambio_boton9" class="offset-md-1 col-md-6 accordion-boton">
                        IMPLANTES
                        </div>
                        <div onclick="cargarDatos(10)" id="cambio_boton10" class="offset-md-1 col-md-6 accordion-boton">
                        TRAUMA FACIAL
                        </div>
                        <div onclick="cargarDatos(11)" id="cambio_boton11" class="offset-md-1 col-md-6 accordion-boton">
                        TUMORES Y QUISTES
                        </div>
                        <div onclick="cargarDatos(12)" id="cambio_boton12" class="offset-md-1 col-md-6 accordion-boton">
                        ATM
                        </div>
                    </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        ESPECIALIDADES <br>ODONTOLÓGICAS
                    </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div onclick="cargarDatos(13)" id="cambio_boton13" class="offset-md-1 col-md-6 accordion-boton">
                        DISEÑO DE SONRISA
                        </div>
                        <div onclick="cargarDatos(14)" id="cambio_boton14" class="offset-md-1 col-md-6 accordion-boton">
                        BLANQUEAMIENTO
                        </div>
                        <div onclick="cargarDatos(15)" id="cambio_boton15" class="offset-md-1 col-md-6 accordion-boton">
                        ENDODONCIA
                        </div>
                        <div onclick="cargarDatos(16)" id="cambio_boton16" class="offset-md-1 col-md-6 accordion-boton">
                        REHABILITACIÓN
                        </div>
                        <div onclick="cargarDatos(17)" id="cambio_boton17" class="offset-md-1 col-md-6 accordion-boton">
                        ORTODONCIA
                        </div>
                        <div onclick="cargarDatos(18)" id="cambio_boton18" class="offset-md-1 col-md-6 accordion-boton">
                        PRÓTESIS
                        </div>
                        <div onclick="cargarDatos(19)" id="cambio_boton19" class="offset-md-1 col-md-6 accordion-boton">
                        OPERATORIA
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 antes">
            <div class="row mt-5">
                <div class="col-md-4 p-0 text-end">
                    <button onclick="cambiarInformacion(-1)" class="btn"><i class="fa-solid fa-circle-arrow-left"></i></button>
                </div>
                <div class="col-md-8">
                    <img id="cambio_antes_imagen" src="{{url('img/cambios/antes1.jpg')}}">
                    <h4>ANTES</h4>
                    <p id="cambio_antes_parrafo">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4 antes">
            <div class="row mt-5">
                <div class="col-md-4 p-0 text-end boton-siguiente-oculto" style="display:none">
                    <button onclick="cambiarInformacion(1)" class="btn"><i class="fa-solid fa-circle-arrow-right"></i></button>
                </div>
                <div class="col-md-8">
                    <img id="cambio_despues_imagen" src="{{url('img/cambios/despues1.jpg')}}">
                    <h4>DESPUES</h4>
                    <p id="cambio_despues_parrafo">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie
                    </p>
                </div>
                <div class="col-md-4 p-0 text-start boton-siguiente">
                    <button onclick="cambiarInformacion(1)" class="btn"><i class="fa-solid fa-circle-arrow-right"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    posicion_actual=1;

    data=[
        "Paciente como estaba antes, problema del maxilar inferior",
        "Luego de la operación se solucionó su problema de maxilar",
        "Problema dental dificulta la masticación",
        "Se procedió a corregir mordidad por medio de rayos laser",
    ]

    function cambiarInformacion(pos){
        console.log(pos)
        if(pos>0){
            if(data.length/2 > posicion_actual){
                posicion_actual++
                cargarDatos(posicion_actual)
            }
        }
        else{
            if(posicion_actual > 1){
                posicion_actual--
                cargarDatos(posicion_actual)
            }
        }
    }

    function cargarDatos(index){
        document.getElementById('cambio_antes_parrafo').innerHTML=data[(index-1)*2]
        document.getElementById('cambio_despues_parrafo').innerHTML=data[(index-1)*2+1]
        document.getElementById('cambio_antes_imagen').src='{{url('img/cambios/antes')}}'+index+'.jpg'
        document.getElementById('cambio_despues_imagen').src='{{url('img/cambios/despues')}}'+index+'.jpg'

        for(i=1; i<=19; i++){
            document.getElementById('cambio_boton'+i).classList.remove('amarillo')
            document.getElementById('cambio_boton'+i).classList.remove('cambio-seleccionado')
        }

        document.getElementById('cambio_boton'+index).classList.add('amarillo')
        document.getElementById('cambio_boton'+index).classList.add('cambio-seleccionado')
        

    }
</script>
@endsection