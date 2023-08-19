@extends('template.layout')
@section('contenido')
<link rel="stylesheet" href="{{ url('css/slider.css') }}">

<div class="offset-md-1 col-md-10 medico-marco">
    <div class="offset-md-3 col-md-6 medico-encabezado">
        <h3 class="text-center mt-5">CONOCE A NUESTRO MÉDICOS ESPECIALISTAS</h3>
        <p>En LaserImplant, confiamos plenamente en nuestras habilidades y experiencia. Nuestros médicos especialistas están comprometidos en proporcionar la más alta calidad de atención dental y se esfuerzan por superar tus expectativas en cada visita.</p>
    </div>
    <div class="offset-md-2 col-md-8">
    <div class="row">
        <div class="col-md-4">
            <div class="medico-card">
                <img src="{{url('img/dra.png')}}">
                <h5>Dra. Carmen Vallejo</h5>
                <h6>Cirujanos Maxilofacial</h6>
                <p>Graduada como Doctora en Odontología en la Universidad Central del Ecuador, especialista en Ortodoncia y Ortopedia de los Maxilares.</p>
                <a href="{{url('medicos/1/perfil')}}" class="btn btn-warning">Ver Perfil</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="medico-card">
                <img src="{{url('img/dra.png')}}">
                <h5>Dra. Carmen Vallejo</h5>
                <h6>Rehabilitador Oral</h6>
                <p>Graduada como Doctora en Odontología en la Universidad Central del Ecuador, especialista en Ortodoncia y Ortopedia de los Maxilares.</p>
                <a href="{{url('medicos/2/perfil')}}" class="btn btn-warning">Ver Perfil</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="medico-card">
                <img src="{{url('img/dra.png')}}">
                <h5>Dra. Carmen Vallejo</h5>
                <h6>Odontóloga Restauradora</h6>
                <p>Graduada como Doctora en Odontología en la Universidad Central del Ecuador, especialista en Ortodoncia y Ortopedia de los Maxilares.</p>
                <a href="{{url('medicos/3/perfil')}}" class="btn btn-warning">Ver Perfil</a>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection