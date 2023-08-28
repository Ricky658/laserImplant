@extends('template.layout')
@section('contenido')
<link rel="stylesheet" href="{{ url('css/slider.css') }}">

<div class="col-md-12 testimonios-marco">
    <div class="row m-0">
        <div class="col-md-5 izq">
            <div class="offset-md-2 col-md-8 mt-5">
                <h4>Mira lo que dicen <br> algunos de nuestros <br> pacientes</h4>
                <div class="botonera">
                    <button onclick="cambiarTestimonio(-1)" class="btn btn-sm btn-izquierda"><i class="fa-solid fa-arrow-left-long"></i></button>
                    <button onclick="cambiarTestimonio(1)" class="btn btn-sm btn-derecha"><i class="fa-solid fa-arrow-right-long"></i></button>
                </div>
                <h3 class="mt-3" id="testimonio_titulo">Diseño de Sonrisa</h3>
                <p id="testimonio_parrafo">
                Conocí al Dr. Renato gracias a las redes sociales, me pareció espectacular los resultados que publicaba 
                y me animé agendar una cita, me mostró sus casos y el procedimiento para el tratamiento, 
                estoy muy feliz de confiar en su profesionalidad.
                </p>

                <div class="calificacion-usuario">
                    <img id="testimonio_imagen" src="{{url('img/dra.jpg')}}">
                    <div class="detalle ms-3">
                        <div class="estrellas">
                            <i id="testimonio_estrella1" class="fa-solid fa-star amarillo"></i>
                            <i id="testimonio_estrella2" class="fa-solid fa-star amarillo"></i>
                            <i id="testimonio_estrella3" class="fa-solid fa-star amarillo"></i>
                            <i id="testimonio_estrella4" class="fa-solid fa-star amarillo "></i>
                            <i id="testimonio_estrella5" class="fa-solid fa-star amarillo "></i>
                        </div>
                        <h6 id="testimonio_nombre">Mayra Vallejo</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-7 der">
            <div class="offset-xl-2 col-xl-8 offset-md-1 col-md-10 video mt-5">
                <iframe id="testimonio_youtube" width="560" height="315" src="https://www.youtube.com/embed/v0nNa0hdC90?si=MWaj0GWj6R3GiqFA?enablejsapi" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
<script>
    posicion_actual=1;

    data=[
        "Mayra Vallejo",
        "Diseño de Sonrisa",
        "Conocí al Dr. Renato gracias a las redes sociales, me pareció espectacular los resultados que publicaba y me animé agendar una cita, me mostró sus casos y el procedimiento para el tratamiento, estoy muy feliz de confiar en su profesionalidad.",
        "{{url('img/dra.jpg')}}",
        'https://www.youtube.com/embed/v0nNa0hdC90?si=MWaj0GWj6R3GiqFA?autoplay=1',
        5,
        
        "José Bonaparte",
        "Me cambió por completo",
        "Gracias al Dr. Renato, obtuve los mejores resultados, me mostró sus casos y me explicó el procedimiento para el tratamiento, buena la atención en todo momento.",
        "{{url('img/dr.jpg')}}",
        'https://www.youtube.com/embed/-So9LQNpD2M?si=9RixlQ4HflDRzvsI?autoplay=1',
        4,
    ]

    function cambiarTestimonio(pos){
        console.log(posicion_actual)
        if(pos>0){
            if(data.length/6 > posicion_actual){
                posicion_actual++
                cargarDatos()
            }
        }
        else{
            if(posicion_actual > 1){
                posicion_actual--
                cargarDatos()
            }
        }
        console.log(posicion_actual)

    }

    function cargarDatos(){
        document.getElementById('testimonio_nombre').innerHTML=data[(posicion_actual-1)*6]
        document.getElementById('testimonio_titulo').innerHTML=data[(posicion_actual-1)*6+1]
        document.getElementById('testimonio_parrafo').innerHTML=data[(posicion_actual-1)*6+2]
        document.getElementById('testimonio_imagen').src=data[(posicion_actual-1)*6+3]
        document.getElementById('testimonio_youtube').src=data[(posicion_actual-1)*6+4]

        for(i=1; i<=5; i++){
            document.getElementById('testimonio_estrella'+i).classList.remove('gris')
            document.getElementById('testimonio_estrella'+i).classList.remove('amarillo')

            if(i<=data[(posicion_actual-1)*6+5]) 
                document.getElementById('testimonio_estrella'+i).classList.add('amarillo')
            else
                document.getElementById('testimonio_estrella'+i).classList.add('gris')
        }
    }
</script>
@endsection