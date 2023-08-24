@extends('template.layout')
@section('contenido')
<link rel="stylesheet" href="{{ url('css/slider.css') }}">

<div class="offset-md-1 col-md-10 indicaciones-marco">
    <div class="row">
        <div class="col-md-5 mt-4 marco-img">
            <img class="img" src="{{url('img/diente.jpg')}}">
        </div>
        <div class="offset-md-1 col-md-6 mt-4">
            <h3>INDICACIONES EXODONCIA</h3>

            <p>
                Si tiene una gasa en su boca, botarla en 1 hora
            </p>

            <ul>
                <li></li>
                
                <li>Hielo local constante por 6 horas </li>
                <li>No ESCUPIR por 5 días </li>
                <li>No Fumar por 2 meses </li>
                <li>No tomar bebidas alcohólicas por 1 mes </li>
                <li>No exponerse al sol por una semana </li>
                <li>No lácteos, cerdo y mariscos por 5 días </li>
                <li>Buena Higiene Oral (Cepillo Quirúrgico, pasta e hilo de dientes) </li>
                <li>Dieta blanda y fría por hoy </li>
                <li>Reposo relativo</li>
            </ul>

            <p class="mt-3">
                Es fuertemente recomendado acudir a los 10 días a Laserimplant y tomarse una Radiografía Panorámica Digital y poder realizar un control para GARANTIZAR su tratamiento
            </p>

            <div class="row">
                <div class="col-md-4">
                    <a class="btn btn-warning">AGENDAR CITA AQUI</a>
                </div>
                <div class="col-md-2">
                    <a class="btn btn-warning">IMPLANTES</a>
                </div>
                
                
            </div>
        </div>
    </div>
</div>
@endsection