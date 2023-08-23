@extends('template.layout')
@section('contenido')
<link rel="stylesheet" href="{{ url('css/slider.css') }}">

<div class="col-md-12 testimonios-marco">
    <div class="row m-0">
        <div class="col-md-5 izq">
            <div class="offset-md-2 col-md-8">
                <h4>Mira lo que dicen <br> algunos de nuestros <br> Pacientes</h4>
                <div class="botonera">
                    <button class="btn btn-sm btn-izquierda"><i class="fa-solid fa-arrow-left-long"></i></button>
                    <button class="btn btn-sm btn-derecha"><i class="fa-solid fa-arrow-right-long"></i></button>
                </div>
                <h3 class="mt-3">Diseño de Sonrisa</h3>
                <p>
                Conocí al Dr. Renato gracias a las redes sociales, me pareció espectacular los resultados que publicaba 
                y me animé agendar una cita, me mostró sus casos y el procedimiento para el tratamiento, 
                estoy muy feliz de confiar en su profesionalidad.
                </p>

                <div class="calificacion-usuario">

                    <img src="{{url('img/dra.jpg')}}">
                    <div class="detalle ms-3">
                        <div class="estrellas">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h6>Mayra Vallejo</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-7 der">
            <div class="offset-md-2 col-md-8">
                <iframe height="300" src="https://www.youtube.com/embed/8JyQfb8vR9U?si=05z5rgDaaLnb4rou" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
@endsection