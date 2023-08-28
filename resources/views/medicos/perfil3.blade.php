@extends('template.layout')
@section('contenido')
<link rel="stylesheet" href="{{ url('css/slider.css') }}">

<div class="offset-md-1 col-md-10 medico-marco">
    <div class="row perfil">
        <div class="col-md-5 mt-5">
            <div class="row">
                <div class="col-md-2">
                    <img src="{{url('img/doctores/dra_carmen.jpg')}}">
                </div>
                <div class="col-md-10">
                    <h4>Dra. Carmen Vallejo</h4>
                    <h5>Cirujanos Maxilofacial</h5>
                </div>
                <p class="mt-3 bio">
                Originaria de la ciudad de Riobamba, en el centro de nuestro país
                <br><br>
                Se graduó como Doctora en Odontología en la Universidad Central del Ecuador en Quito.
                <br><br>
                Hace aproximadamente 15 años viene trabajando en la ciudad de Machala, ciudad de la cual se enamoró por sus múltiples encantos.
                <br><br>
                Su sueño siempre fue crear una clínica familiar, que sea como las mejores del país. 
                <br><br>
                Este sueño se cumplio al fundar Laserimplant, que es una clínica con unas instalaciones de Lujo que permiten dar el confort y la tecnología que todos nuestros pacientes merecen.
                <br><br>
                La doctora ha realizado innumerables cursos a nivel nacional e internacional. Su principal campo de acción es la odontología restauradora
            </p>
            </div>
        </div>
        <div class="offset-md-1 col-md-6 mt-5">
            <iframe width="560" height="400" src="https://www.youtube.com/embed/8JyQfb8vR9U?si=05z5rgDaaLnb4rou" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </div>
</div>
@endsection