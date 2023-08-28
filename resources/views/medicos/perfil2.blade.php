@extends('template.layout')
@section('contenido')
<link rel="stylesheet" href="{{ url('css/slider.css') }}">

<div class="offset-md-1 col-md-10 medico-marco">
    <div class="row perfil">
        <div class="col-md-5 mt-5">
            <div class="row">
                <div class="col-md-2">
                    <img src="{{url('img/doctores/dr_renato.jpg')}}">
                </div>
                <div class="col-md-10">
                    <h4>Dr. Renato Cisneros</h4>
                    <h5>Estética Dental y Rehabilitación</h5>
                </div>
                <p class="mt-3 bio">
                Nació en la cuidad de Ambato pero a su corta edad debido al trabajo de sus padres se radicó en la ciudad de Machala.
                <br><br>
                Por su inclinación a las áreas de la salud se decidió a estudiar odontología, se radico en la ciudad de guayaquil donde obtuvo su título de Odontólogo en la Universidad Católica Santiago de Guayaquil, después de leer el libro del profesor Aníbal Alonso “Oclusión y diagnóstico en Rehabilitación Oral, se apasiono por aprender más sobre esa área por lo que decidió viajar a argentina a conocer y formarse con el Profesor Aníbal Alonso con el que Realizó un postgrado de 2 años en Rehabilitación Oral Estética y Oclusión, además se formó bajo la tutela de la reconocida Dra. Patricia Moreno, a través de la Asociación Odontológica Argentina, en Buenos Aires, Argentina, en donde obtuvo un enfoque integral sobre estética dental, la doctora al ver su virtudes como estudiante lo invita a formar parte en la universidad de El Salvador como ayudante adjunto en la Cátedra de “Fisiología del Sistema Estomatognático”
                <br><br>
                Es miembro activo de la Asociación Odontológica Argentina, participando activamente en eventos y manteniéndose actualizado sobre los avances más recientes en el campo de la odontología. 
                <br><br>
                En su estadía en Buenos Aires, Asistió al congreso mundial “World Dental Congress en Buenos Aires” celebrado una vez al año en diferentes partes del mundo, además participó en cursos y congresos en todas las áreas de la Odontológica tanto como en Estética dental, Rehabilitación Oral, Ortodoncia, Periodoncia, Odontología digital, Técnica Dental, materiales Odontológicos , ya que entiende a la odontología con un enfoque integral en donde todas las especialidades ayudan al diagnóstico y plan de tratamiento.
            </p>
            </div>
        </div>
        <div class="offset-md-1 col-md-6 mt-5">
            <iframe width="560" height="400" src="https://www.youtube.com/embed/8JyQfb8vR9U?si=05z5rgDaaLnb4rou" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </div>
</div>
@endsection