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
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.385746614594!2d-79.96069299999999!3d-3.2539571!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x90330e568e9b8011%3A0x6dd9acd3d9f24932!2sLaserImplant%20Cirug%C3%ADa%20Facial%20y%20Especialidades%20Odontol%C3%B3gicas!5e0!3m2!1ses-419!2sec!4v1693068219094!5m2!1ses-419!2sec" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5 foto-clinica p-5 pb-0">
            <img class="img" src="{{url('img/clinica.jpg')}}">
        </div>
    </div>
</div>
@endsection