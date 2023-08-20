<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laser Implant</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://kenwheeler.github.io/slick/slick/slick.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"></script>
    <style>
        .marco-banner{
            position: relative;
            margin: 0px;
        }
        .menu-pagina, footer{
            background: black;
            border-radius: 10px;
            position:absolute;
            height: 80px;
            transform: translate(0px, 40px);
            z-index: 9999;
        }

        .menu-pagina ul, .footer ul{
            display:flex;
            list-style-type: none;
        }
        .menu-pagina ul li, .footer  ul li{
            font-size: 16px;
            font-weight:bold
        }
        
        .menu-pagina li a, .footer li a, .footer li a label{
            color: #FCC00D;
            display:block;
            text-align: center;
            padding: 25px;
            text-decoration: none;
        }
        .footer li a svg, .footer li a label{
            float:left;
            transition: opacity 2.5s;
        }
        .footer li a{
            font-size: 26px
        }
        .footer li a label{
            padding: 3px;
            padding-left:10px;
            font-size:14px
        }

        .footer li a svg:hover ~ .aparecer{
            display:block !important;
            opacity: 1;
        }

        .aparecer{
            display:none !important;
            opacity: 0;
        }

        .menu-pagina li a:hover{
            font-weight: bold;
            color:  #FCC00D;
        }

        .div1{
            background: red;
            
        }
        .div2{
            background: blue
        }
        .div3{
            background: yellow
        }
        .marco-banner, .inidicaciones-marco, .testimonios-marco, .cambios-marco{
            height:90vh;
        }

        .footer{
            background: black;
            height: 10vh;
        }


        section{
            display: flex;
            width: 100%;
            height: 100%;
        }
        section img{
            width: 0px;
            flex-grow: 1;
            object-fit: cover;
            opacity: .8;
            transition: .5s ease;
        }
        section img:hover{
            cursor: crosshair;
            width: 300px;
            opacity: 1;
            filter: contrast(120%);
        }



    </style>
</head>
<body>
    <div class="col-md-12 marco">
        @include('template.menu')
        @yield('contenido')
        @include('template.footer')
    </div>
</body>
</html>