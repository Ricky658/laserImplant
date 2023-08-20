@extends('template.layout')
@section('contenido')
<link rel="stylesheet" href="{{ url('css/slider.css') }}">

<div class="offset-md-1 col-md-10 medico-marco">
    <div class="row perfil">
        <div class="col-md-6 mt-5">
            <div class="row">
                <div class="col-md-2">
                    <img src="{{url('img/dra.jpg')}}">
                </div>
                <div class="col-md-10">
                    <h3>Dra. Carmen Vallejo</h3>
                    <h4>Cirujanos Maxilofacial</h4>
                </div>
                <p class="mt-3">
                    Nació en Riobamba, pero ha vivido la mayor parte de su vida en ciudades como Ambato, Quito en la sierra ecuatoriana y en Buenos Aires, Argentina país que ama como el suyo. 
                    Ahora se encuentra radicado en Machala, hermosa ciudad de la costa Ecuatoriana, cercana a Perú. 
                    <br><br>  
                    Se graduó como Doctor en Odontología en la Universidad Central del Ecuador. Posteriormente realizó su primera especialidad en la Universidad San Francisco de Quito una de las Mejores de Latinoamérica, 
                    obtuvo el título de Especialista en Cirugía Oral.
                    <br><br>  
                    Luego se tomó un año y realizó obra social en el área de cirugía maxilofacial, en el hospital público de niños Baca Ortiz de Quito. 
                    
                    <br><br>  
                    Siempre quiso estudiar y vivir en otro país que no fuera el suyo, por ello se trasladó a Argentina, revalidó su título de odontólogo en la Universidad Nacional de La Plata en la ciudad de La Plata, 
                    en la Universidad Maimónides de Buenos Aires obtuvo su segunda especialidad la que tuvo una duración de tres años en Cirugía y Traumatología Buco Maxilofacial, el doctor además tiene el postgrado 
                    de Implantes dentales y rehabilitación de la Universidad del Salvador en Buenos Aires el mismo que tiene duración de dos años.
                    
                    <br><br>  
                    Para completar su conocimiento en cirugía mayor realizó el postgrado en cabeza y cuello de la Asociación de médicos municipales de Buenos Aires de duración de un año, con el reconocido 
                    Dr. Alejandro Ostrosky uno de los mejores cirujanos Maxilofaciales de Latinoamérica
                    
                    <br><br>  
                    Su pasión es la cirugía lo que le ha llevado a una dedicación exclusiva a la Cirugía estética y funcional del rostro,
                    cirugía Maxilofacial e Implantes Dentales. Ha su llegada al Ecuador le ofrecieron ser el Cirujano Maxilofacial en el hospital publico más grande de Guayaquil, trabajo que rechazo y decidió 
                    radicarse en una ciudad más pequeña como es Machala, y juntar sus ideales de trabajo y familia. El todavía sigue distribuyendo su apretada agenda trabajando en un hospital público el Hospital 
                    Teófilo Dávila de Machala, como todo el sector público tiene muchas carencias y no puede realizar todas las cirugías que normalmente hace en el área privada pero le permite ayudar a gente pobre 
                    y personas con discapacidad, salvando muchas vidas. Así cumple sus creencias de ayuda social con su país. En estos años ha realizado mucho más de 5000 cirugías exitosas. Ha dado múltiples conferencias
                    a nivel nacional e internacional en México, Brasil, Argentina y Perú. Cree en la capacitación continua que le ha hecho viajar por todo el mundo. Su casa es Laserimplant, que es el sueño hecho realidad
                    donde puede desarrollar todas las técnicas más avanzadas del mundo. brindando siempre lo mejor a sus pacientes.</p>
            </div>
        </div>
        <div class="col-md-6 mt-5">
            <iframe width="560" height="400" src="https://www.youtube.com/embed/8JyQfb8vR9U?si=05z5rgDaaLnb4rou" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </div>
</div>
@endsection