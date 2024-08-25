
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entranamiento Deportivo</title>
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body class="cuerpo-color">
    <div class="caja-barra-navegacion">
        <div class="barra-de-navegacion">
            <nav class="navbar navbar-expand-md navbar-dark bg-transparent" id="colorbarra">
                <!-- <a class="navbar-brand"> <img src="/IMAGENES/logo-green 2.png" alt="logo-empresa" width="199px" height="142px"></a> -->
                <a class="navbar-brand"> <img src="{{asset('img/logo-green 2.png')}}" alt="logo-empresa" width="199px" height="142px"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="pruebaizquierda">
                        <ul class="navbar-nav" id="lista-barranav">
                            <li class="nav-item mr-5 active">
                                <a href="/index.html" class="nav-link">
                                NOSOTROS
                                </a>
                            </li>
                            <li class="nav-item mr-5 active">
                                <a href="/index.html" class="nav-link" >
                                PROGRAMAS
                                </a>
                            </li>
                            <li class="nav-item active mr-5">
                                <a href="/index.html" class="nav-link">
                                CONTACTO
                                </a>
                            </li>
                        </ul>
                    </div>
                </div> 
            </nav>
        </div>
    </div> 
    <div class="contenedor-imagen-central">
        <div class="caja-titulo-imagen-central">
            <h1 class="titulo-imagen-central">ENTRANETE</h1>
        </div>
        <div id="informaciondeservicios"></div>
        <div class="imagencentral">
            <img src="{{asset('img/logo-txt-white-21.png')}}" alt="imagen central" id="imagencentral">
            <!-- <img src="/IMAGENES/baloncesto.jpg" alt="">  --> 
        </div>
    </div>
    <section class="caja-formulario">
    <form class="formulario" id="formulario" action="{{route("estudiante.store")}}" method="post">
        @csrf
        <h1 class="titulo-registro-informacion">Registrate para más información</h1>
        <input type="text" name="nombre" placeholder="nombre">
        <input type="email" name="correo" placeholder="correo">
        <input type="text" name="telefono" placeholder="telefono">
        <div class="formulario__gurpo formulario__grupo-btn-enviar">
            <input type="submit" class=" boton formulario__btn" value="ENVIAR">
        </div>
    </form> 
</section>
    <footer class="piedepagina">
        <div class="iconopie">
            <!--<img src="/IMAGENES/logo-green 2.png" alt=""> -->
            <img src="{{asset('img/logo-green 2.png')}}" alt="logo">
        </div>
        <div class="listapie">
            <ul class="ul_pie">
                <li >Contacto</li>
                <li>TrainabilitMx,2023</li>
            </ul>
        </div>
        <div class="iconosredes">
            <img class="img_whatsap" src="{{asset("img/Group.png")}}" alt="group">

        </div>

    </footer>

    



    <script src="jasonentre.js"></script>
    <script src="entrene.js"></script>   
    <script src="https://kit.fontawesome.com/d6a79537b5.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
       
</body>
</html>

