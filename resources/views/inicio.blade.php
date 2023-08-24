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
            <a id="menu-boton-a1" onclick="cambio('a',1)" href="#slide1"><i id="menu-boton-i-a1" style="color:white; font-size:12px" class="fa-regular fa-circle"></i></a>
          </li>
          <li>
            <a id="menu-boton-a2" onclick="cambio('a',2)" href="#slide2"><i id="menu-boton-i-a2" style="color:white; font-size:12px" class="fa-regular fa-circle"></i></a>
          </li>
          <li>
            <a id="menu-boton-a3" onclick="cambio('a',3)" href="#slide3"><i id="menu-boton-i-a3" style="color:white; font-size:12px" class="fa-regular fa-circle"></i></a>
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
            <a id="menu-boton-b1" onclick="cambio('b',1)" href="#slide4"><i id="menu-boton-i-b1" style="color:white; font-size:12px" class="fa-regular fa-circle"></i></a>
          </li>
          <li>
            <a id="menu-boton-b2" onclick="cambio('b',2)" href="#slide5"><i id="menu-boton-i-b2" style="color:white; font-size:12px" class="fa-regular fa-circle"></i></a>
          </li>
          <li>
            <a id="menu-boton-b3" onclick="cambio('b',3)" href="#slide6"><i id="menu-boton-i-b3" style="color:white; font-size:12px" class="fa-regular fa-circle"></i></a>
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
            <a id="menu-boton-c1" onclick="cambio('c',1)" href="#slide7"><i id="menu-boton-i-c1" style="color:white; font-size:12px" class="fa-regular fa-circle"></i></a>
          </li>
          <li>
            <a id="menu-boton-c2" onclick="cambio('c',2)" href="#slide8"><i id="menu-boton-i-c2" style="color:white; font-size:12px" class="fa-regular fa-circle"></i></a>
          </li>
          <li>
            <a id="menu-boton-c3" onclick="cambio('c',3)" href="#slide9"><i id="menu-boton-i-c3" style="color:white; font-size:12px" class="fa-regular fa-circle"></i></a>
          </li>
        </ul>
        
      </div>
    </div>
</div>
<script>
  function cambio(banner, pos){
    //control.classList.toggle('active')

    
      for(i=1;i<=3; i++){
        //document.getElementById('menu-boton-i-'+banner+i).classList.remove('active')
        document.getElementById('menu-boton-i-'+banner+i).setAttribute('data-prefix','far')
        
      }

      //document.getElementById('menu-boton-i-'+banner+pos).classList.add('active')
      document.getElementById('menu-boton-i-'+banner+pos).setAttribute('data-prefix','fas')
    
  }
</script>

@endsection