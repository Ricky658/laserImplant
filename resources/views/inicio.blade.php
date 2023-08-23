@extends('template.layout')
@section('contenido')

<link rel="stylesheet" href="{{ url('css/slider.css') }}">

<div class="row marco-banner m-0">
  <div class="col-md-4 p-0">
    <div class="container">
        <ul class="slider">
          <li id="slide1">
            <img src="{{url('img/banner/a_b1.png')}}"/>
            <div class="etiqueta"><label>ODONTOLOGÍA & <br> ESTÉTICA DENTAL</label></div>
          </li>
          <li id="slide2">
            <img src="{{url('img/banner/a_b2.png')}}">
          </li>
          <li id="slide3">
            <img src="{{url('img/banner/a_b3.png')}}"/>
          </li>
        </ul>
        
        <ul class="menu">
          <li>
            <a class="menu-boton" href="#slide1"></a>
          </li>
          <li>
            <a class="menu-boton" href="#slide2"></a>
          </li>
          <li>
            <a class="menu-boton" href="#slide3"></a>
          </li>
        </ul>
    </div>
    </div>
    <div class="col-md-4 p-0">
      <div class="container">
        <ul class="slider">
          <li id="slide4">
            <img src="{{url('img/banner/b_b1.png')}}"/>
            <div class="etiqueta"><label>CIRUGÍA <br> ESTÉTICA FACIAL</label></div>
          </li>
          <li id="slide5">
            <img src="https://www.gamespot.com/a/uploads/scale_super/1597/15976769/4097326-the-super-mario-bros.-movie-poster.jpg">
          </li>
          <li id="slide6">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3947459/sunset.jpg"/>
          </li>
        </ul>
        
        <ul class="menu">
          <li>
            <a class="menu-boton" href="#slide4"></a>
          </li>
          <li>
            <a class="menu-boton" href="#slide5"></a>
          </li>
          <li>
            <a class="menu-boton" href="#slide6"></a>
          </li>
        </ul>
        
      </div>
    </div>
    <div class="col-md-4 p-0">
      <div class="container">
        <ul class="slider">
          <li id="slide7">
            <img src="{{url('img/banner/c_b1.png')}}"/>
            <div class="etiqueta"><label>CIRUGÍA MAXILOFACIAL <br> E IMPLANTES DENTALES</label></div>
          </li>
          <li id="slide8">
            <img src="{{url('img/banner/c_b2.png')}}">
          </li>
          <li id="slide9">
            <img src="{{url('img/banner/c_b3.jpg')}}"/>
          </li>
        </ul>
        
        <ul class="menu">
          <li>
            <a class="menu-boton" href="#slide7"></a>
          </li>
          <li>
            <a class="menu-boton" href="#slide8"></a>
          </li>
          <li>
            <a class="menu-boton" href="#slide9"></a>
          </li>
        </ul>
        
      </div>
    </div>
</div>
<script>
  
</script>

@endsection