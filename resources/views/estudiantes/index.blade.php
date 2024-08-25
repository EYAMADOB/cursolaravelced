@include('estudiantes.Componentes.head')
<body class="cuerpo-color">
    @include('estudiantes.Componentes.navegacion')    
@include('estudiantes.Componentes.lista-estudiantes',['estudiant'=> $estudiant] ) 
@include('sweetalert::alert')
@include('estudiantes.Componentes.footer')

</body>