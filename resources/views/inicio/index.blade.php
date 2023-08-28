@extends('template.layout')
@section('contenido')

<link rel="stylesheet" href="{{ url('css/slider.css') }}">

<div class="row marco-banner m-0">
  <div class="col-md-4 p-0">
    <div class="container">
        <a href="{{url('/odontologia')}}">
          <ul class="slider1">
            <li id="imga1">
              <img onclick="cambiarA()" src="{{url('img/banner/a_b1.png')}}"/>
            </li>
            <li id="imga2">
              <img onclick="cambiarA()" src="{{url('img/banner/a_b2.png')}}">
            </li>
            <li id="imga3">
              <img onclick="cambiarA()" src="{{url('img/banner/a_b3.png')}}"/>
            </li>
          </ul>
          <div class="etiqueta"><label>ODONTOLOGÍA & <br> ESTÉTICA DENTAL</label></div>
          <ul class="menu">
            <li>
              <a id="menu-boton-a1" onclick="cambio('a',1)" href="#slide1"><i id="menu-boton-i-a1" style="color:white; font-size:12px" class="fa-solid fa-circle"></i></a>
            </li>
            <li>
              <a id="menu-boton-a2" onclick="cambio('a',2)" href="#slide2"><i id="menu-boton-i-a2" style="color:white; font-size:12px" class="fa-regular fa-circle"></i></a>
            </li>
            <li>
              <a id="menu-boton-a3" onclick="cambio('a',3)" href="#slide3"><i id="menu-boton-i-a3" style="color:white; font-size:12px" class="fa-regular fa-circle"></i></a>
            </li>
          </ul>
        </a>
    </div>
    </div>
    <div class="col-md-4 p-0">
      <div class="container">
      <a href="{{url('/odontologia')}}">
        <ul class="slider2">
          <li id="imgb1">
            <img src="{{url('img/banner/b_b1.png')}}"/>
          </li>
          <li id="imgb2">
            <img src="https://www.gamespot.com/a/uploads/scale_super/1597/15976769/4097326-the-super-mario-bros.-movie-poster.jpg">
          </li>
          <li id="imgb3">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3947459/sunset.jpg"/>
          </li>
        </ul>
        <div class="etiqueta"><label>CIRUGÍA <br> ESTÉTICA FACIAL</label></div>
        <ul class="menu">
          <li>
            <a id="menu-boton-b1" onclick="cambio('b',1)" href="#slide4"><i id="menu-boton-i-b1" style="color:white; font-size:12px" class="fa-solid fa-circle"></i></a>
          </li>
          <li>
            <a id="menu-boton-b2" onclick="cambio('b',2)" href="#slide5"><i id="menu-boton-i-b2" style="color:white; font-size:12px" class="fa-regular fa-circle"></i></a>
          </li>
          <li>
            <a id="menu-boton-b3" onclick="cambio('b',3)" href="#slide6"><i id="menu-boton-i-b3" style="color:white; font-size:12px" class="fa-regular fa-circle"></i></a>
          </li>
        </ul>
      </a>
      </div>
    </div>
    <div class="col-md-4 p-0"> 
      <div class="container">
      <a href="{{url('/implantes')}}">
        <ul class="slider3">
          <li id="imgc1">
            <img src="{{url('img/banner/c_b1.png')}}"/>
          </li>
          <li id="imgc2">
            <img src="{{url('img/banner/c_b2.png')}}">
          </li>
          <li id="imgc3">
            <img src="{{url('img/banner/c_b3.jpg')}}"/>
          </li>
        </ul>
        <div class="etiqueta"><label>CIRUGÍA MAXILOFACIAL <br> E IMPLANTES DENTALES</label></div>
        <ul class="menu">
          <li>
            <a id="menu-boton-c1" onclick="cambio('c',1)" href="#slide7"><i id="menu-boton-i-c1" style="color:white; font-size:12px" class="fa-solid fa-circle"></i></a>
          </li>
          <li>
            <a id="menu-boton-c2" onclick="cambio('c',2)" href="#slide8"><i id="menu-boton-i-c2" style="color:white; font-size:12px" class="fa-regular fa-circle"></i></a>
          </li>
          <li>
            <a id="menu-boton-c3" onclick="cambio('c',3)" href="#slide9"><i id="menu-boton-i-c3" style="color:white; font-size:12px" class="fa-regular fa-circle"></i></a>
          </li>
        </ul>
      </a>
      </div>
    </div>
</div>
<script>
  posA=1
  posB=1
  posC=1
  
  function cambiarA(){
      if(posA<3)
        posA++
      else
        posA=1
        
    cambio('a', posA)
  }
  
  function cambio(banner, pos){
      for(i=1;i<=3; i++){
        document.getElementById('img'+banner+i).style.opacity=0
        document.getElementById('menu-boton-i-'+banner+i).setAttribute('data-prefix','far')
      }

      document.getElementById('menu-boton-i-'+banner+pos).setAttribute('data-prefix','fas')
      document.getElementById('img'+banner+pos).style.opacity=1
  }
  
</script>

@endsection