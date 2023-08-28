@extends('template.layout')
@section('contenido')
<link rel="stylesheet" href="{{ url('css/slider.css') }}">

<div class="offset-md-1 col-md-10 menu-tipos">
    <div class="col-md-12">
        <div class="col-md-12 mb-2">
            <div class="row">
                <div class="col-md-6">
                    <div class="marco-a m-0 p-0 pr-1">
                        <a href="{{url('/testimonios')}}">
                        <img src="{{url('img/carillas_dentales/IMG_7773.JPG')}}">
                    </a>
                    <span class="etiqueta">Tipos de Cirugía</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="marco-b m-0 p-0 pr-1">
                    <a href="{{url('/cambios')}}">
                        <img src="{{url('img/carillas_dentales/IMG_7772.png')}}">
                    </a>
                    <span class="etiqueta">Antes  y  Despues</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <div class="marco-c m-0 p-0 pr-1">
                    <a href="{{url('/medicos/2/perfil')}}">
                        <img src="{{url('img/doctores/dr_renato.JPG')}}">
                    </a>
                    <span class="etiqueta">Dr. Juan Carlos Cisneros</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="marco-e m-0 p-0 pr-1">
                    <a href="{{url('/testimonios')}}">
                        <img src="{{url('img/testimonios.jpg')}}">
                    </a>
                    <span class="etiqueta">Testimonios</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

