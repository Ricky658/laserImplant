@extends('template.layout')
@section('contenido')
<link rel="stylesheet" href="{{ url('css/slider.css') }}">

<div class="offset-md-1 col-md-10 clinica-marco">
    <div class="row">
        <div class="col-md-8 marco-img">
            <h1>Contacta con nosotros</h1>
            <h5 class="ms-3">Utiliza los canales disponibles o visítanos!</h5>

            <div class="row">
                <div class="col-md-6">
                    <h2 class="mt-3">Horarios</h2>
                    <div class="ms-3 en-linea">
                        <i class="fa-regular fa-clock"></i>
                        <h6 class="ms-2">Luneas a Viernes</h6>
                    </div>
                    <h7 class="ms-5">09h00 a 20h00</h7>

                    <div class="ms-3 en-linea">
                        <i class="fa-regular fa-clock"></i>
                        <h6 class="ms-2">Sábados</h6>
                    </div>
                    <h7 class="ms-5">09h00 a 14h00</h7>


                    <h2 class="mt-3">Teléfonos</h2>
                    <div class="ms-3 en-linea">
                        <i class="fa-brands fa-whatsapp"></i>
                        <h6 class="ms-2">098 448 7505</h6>
                    </div>

                    <h2 class="mt-3">Dirección</h2>
                    <div class="ms-3 en-linea">
                        <i class="fa-brands fa-whatsapp"></i>
                        <h6 class="ms-2">Av. Palmeras entre Pasaje y Boyacá</h6>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mapa">
                        <div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <img class="img" src="{{url('img/clinica.png')}}">
        </div>
    </div>
</div>
@endsection