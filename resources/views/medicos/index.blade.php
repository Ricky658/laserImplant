@extends('template.layout')
@section('contenido')
<link rel="stylesheet" href="{{ url('css/slider.css') }}">

<div class="offset-md-1 col-md-10 medico-marco">
    <div class="col-md-12">
        <div class="offset-lx-3 col-lx-6 offset-md-2 col-md-8 medico-encabezado">
            <h5 class="text-center mt-5">CONOCE A NUESTROS MÉDICOS ESPECIALISTAS</h5>
            <p>En LaserImplant, confiamos plenamente en nuestras habilidades y experiencia. Nuestros médicos especialistas están comprometidos en proporcionar la más alta calidad de atención dental y se esfuerzan por superar tus expectativas en cada visita.</p>
        </div>
        <div class="offset-xl-2 col-xl-8 offset-md-1 col-md-10">
            <div class="row">
                <div class="col-md-4">
                    <div class="medico-card">
                        <img src="{{url('img/dra.jpg')}}">
                        <h5 class="m-0 p-0">Dr. Juan Carlos Cisneros</h5>
                        <h6 class="m-0 p-0">Cirujanos Maxilofacial</h6>
                        <p>Especialista en Cirugía Maxilofacial e Implantes Dentales, con experiencia en Quito y Buenos Aires. Conferencista internacional y docente.</p>
                        <a href="{{url('medicos/1/perfil')}}" class="btn btn-warning">Ver Perfil</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="medico-card">
                        <img src="{{url('img/dra.jpg')}}">
                        <h5 class="m-0 p-0">Dr. Renato Cisneros</h5>
                        <h6 class="m-0 p-0">Rehabilitador Oral</h6>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat...</p>
                        <a href="{{url('medicos/2/perfil')}}" class="btn btn-warning">Ver Perfil</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="medico-card">
                        <img src="{{url('img/dra.jpg')}}">
                        <h5 class="m-0 p-0">Dra. Carmen Vallejo</h5>
                        <h6 class="m-0 p-0">Odontóloga Restauradora</h6>
                        <p>Graduada como Doctora en Odontología en la Universidad Central del Ecuador, especialista en Ortodoncia y Ortopedia de los Maxilares.</p>
                        <a href="{{url('medicos/3/perfil')}}" class="btn btn-warning">Ver Perfil</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection