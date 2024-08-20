<body>
    

<!--envio el arreglo estudiantes y lo encapsulo en variable estudiante -->  
<table>
    <tr>
        <th>NOMBRE</th>
        <th>CORREO</th>
        <th>TELEFONO</th>
        <th>FECHA DE CREACION</th>
        <th>FECHA DE ACTUALIZACION</th>
        <th></th>
    </tr>

@foreach ($estudiant as $estudiant)
<tr>
    <form action="{{route("estudiantes.update",["id"=>$estudiant->id])}}" method="POST">
    <td>
        @csrf
        @method("put")
         <input type="text" name="nombre" value="{{$estudiant->nombre}}"></td>
    <td> <input type="email" name="correo" value="{{$estudiant->correo}}"> </td>
    <td> <input type="text" name="telefono" value="{{$estudiant->telefono}}"> </td>
    <td> {{$estudiant->created_at}}</td>
    <td>{{$estudiant->updated_at}}</td>
    <td> <input type="submit" value="Actualizar">  </td>
    <!--crear un link -->
    <td> <a href="{{route('estudiantes.edit',["id"=>$estudiant->id])}}" target="_blank" >Ver registro</td>
    </form>    
</tr>  
@endforeach
</table>
</body>