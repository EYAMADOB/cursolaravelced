<?php
namespace App\Resources\Estudiantes;
use App\Models\estudiantes;
use RealRashid\SweetAlert\Facades\Alert;

class Manager{
public function listarRegistros ()
{
    return estudiantes::all();
}
public function buscarEstudiante($id){
    return  estudiantes::find($id);
}    
public function eliminarEstudiante($id){
    $estudiante = estudiantes::find($id);
    return $estudiante->delete();
    
}
public function actualizarEstudiante($request, $id){
    return estudiantes::where("id",$id)->update([
        'nombre' => $request->nombre,
        'correo' => $request->correo,
        'telefono' =>$request->telefono
    ]);

}
public function crearEstudiante($request){
    return estudiantes::create([
        'nombre' => $request->nombre,
        'correo' => $request->correo,
        'telefono' =>$request->telefono
    ]);
}

}