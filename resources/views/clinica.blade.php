@extends('template.layout')
@section('contenido')
<link rel="stylesheet" href="{{ url('css/slider.css') }}">

<div class="offset-md-1 col-md-11 clinica-marco">
    <div class="row m-0">
        <div class="col-md-7 marco-img">
            <h1>Contacta con nosotros</h1>
            <h6 class="ms-3">Utiliza los canales disponibles o visítanos!</h6>

            <div class="row m-0">
                <div class="col-md-6">
                    <h3 class="mt-3">Horarios</h3>
                    <div class="ms-3 en-linea">
                        <i class="fa-regular fa-clock"></i>
                        <h6 class="ms-2 mb-0">Luneas a Viernes</h6>
                    </div>
                    <h7 class="ms-5">09h00 a 20h00</h7>

                    <div class="ms-3 en-linea">
                        <i class="fa-regular fa-clock"></i>
                        <h6 class="ms-2 mb-0">Sábados</h6>
                    </div>
                    <h7 class="ms-5">09h00 a 14h00</h7>


                    <h3 class="mt-3">Teléfonos</3>
                    <div class="ms-3 en-linea">
                        <i class="fa-brands fa-whatsapp"></i>
                        <h6 class="ms-2 mb-0">098 448 7505</h6>
                    </div>

                    <h3 class="mt-3">Dirección</3>
                    <div class="ms-3 en-linea">
                        <i class="fa-solid fa-location-dot"></i>
                        <h6 class="ms-2 mb-0">Av. Palmeras entre Pasaje y Boyacá</h6>
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
        <div class="col-md-5">
            <img class="img" src="{{url('img/clinica.jpg')}}">
        </div>
    </div>
</div>
@endsection