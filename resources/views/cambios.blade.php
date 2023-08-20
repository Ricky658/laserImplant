@extends('template.layout')
@section('contenido')
<link rel="stylesheet" href="{{ url('css/slider.css') }}">

<div class="col-md-12 cambios-marco">
    <div class="row m-0">
        <div class="col-md-3 cambios-menu p-0">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        ESTÉTICA FACIAL
                    </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="offset-md-1 col-md-6 accordion-boton">
                        ORTOGNÁTICA
                        </div>
                        <div class="offset-md-1 col-md-6 accordion-boton">
                        FRONTOPLASTÍA
                        </div>
                        <div class="offset-md-1 col-md-6 accordion-boton">
                        OTOPLASTÍA
                        </div>
                        <div class="offset-md-1 col-md-6 accordion-boton">
                        BLEFAROPLASTÍA
                        </div>
                        <div class="offset-md-1 col-md-6 accordion-boton">
                        RINOPLASTÍA
                        </div>
                        <div class="offset-md-1 col-md-6 accordion-boton">
                        MENTOPLASTÍA
                        </div>
                        <div class="offset-md-1 col-md-6 accordion-boton">
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
                    <div class="offset-md-1 col-md-6 accordion-boton">
                        ORTOGNÁTICA
                        </div>
                        <div class="offset-md-1 col-md-6 accordion-boton">
                        TERCEROS MOLARES
                        </div>
                        <div class="offset-md-1 col-md-6 accordion-boton">
                        IMPLANTES
                        </div>
                        <div class="offset-md-1 col-md-6 accordion-boton">
                        TRAUMA FACIAL
                        </div>
                        <div class="offset-md-1 col-md-6 accordion-boton">
                        TUMORES Y QUISTES
                        </div>
                        <div class="offset-md-1 col-md-6 accordion-boton">
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
                        <div class="offset-md-1 col-md-6 accordion-boton">
                        DISEÑO DE SONRISA
                        </div>
                        <div class="offset-md-1 col-md-6 accordion-boton">
                        BLANQUEAMIENTO
                        </div>
                        <div class="offset-md-1 col-md-6 accordion-boton">
                        ENDODONCIA
                        </div>
                        <div class="offset-md-1 col-md-6 accordion-boton">
                        REHABILITACIÓN
                        </div>
                        <div class="offset-md-1 col-md-6 accordion-boton">
                        ORTODONCIA
                        </div>
                        <div class="offset-md-1 col-md-6 accordion-boton">
                        PRÓTESIS
                        </div>
                        <div class="offset-md-1 col-md-6 accordion-boton">
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
                    <button class="btn"><i class="fa-solid fa-circle-arrow-left"></i></button>
                </div>
                <div class="col-md-8">
                    <img src="{{url('img/antes.jpg')}}">
                    <h4>ANTES</h4>
                    <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4 antes">
            <div class="row mt-5">
                <div class="col-md-8">
                    <img src="{{url('img/despues.jpg')}}">
                    <h4>DESPUES</h4>
                    <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie
                    </p>
                </div>
                <div class="col-md-4 p-0 text-start">
                    <button class="btn"><i class="fa-solid fa-circle-arrow-right"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection