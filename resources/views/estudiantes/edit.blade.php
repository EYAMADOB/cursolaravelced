<h1>Este es la vista Edit</h1>
@include('sweetalert::alert')
<!-- dd($estudiantes);-->
<form action="{{route("estudiantes.update",["id"=>$estudiantes->id])}}" method="POST">
    <td>
        @csrf
        @method("put")
         <input type="text" name="nombre" value="{{$estudiantes->nombre}}"></td>
    <td> <input type="email" name="correo" value="{{$estudiantes->correo}}"> </td>
    <td> <input type="text" name="telefono" value="{{$estudiantes->telefono}}"> </td>
    <td> {{$estudiantes->created_at}}</td>
    <td>{{$estudiantes->updated_at}}</td>
    <td> <input type="submit" value="Actualizar">  </td>
    </form>

    <form action="{{route("estudiantes.delete",["id"=>$estudiantes->id])}}" method="POST">
        <h2>ELIMINAR REGISTRO</h2>
        <td>
            @csrf
            @method("delete")
             <input type="submit" value="ELiminar Registro"></td>
    </form>