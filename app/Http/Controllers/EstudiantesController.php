<?php

namespace App\Http\Controllers;
use App\Resources\Estudiantes\Manager;
use App\Models\estudiantes;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;



class EstudiantesController extends Controller
{   
    //creo objeto globla para usar manager
    protected $manager;
    function __construct(){
        $this->manager= new Manager();
    }
    public function index(){
        //$estudiant = estudiantes::all();
        //@dd($estudiant);
        //return view("estudiantes.index")->with("estudiant" , $estudiant);    
        return view("estudiantes.index")->with("estudiant" , $this->manager->listarRegistros());
    }
//este metodo me servira para enviar a una seccion especifica el envio el id
    public function edit($id){
        //dd($id); first me trae el primero q encuetre get me trae un array de modelos
        //$estudiantes = estudiantes::where("id",$id)->first();funciona pero mejor con find que where
        //$estudiantes = estudiantes::find($id);
        //dd($estudiantes);
        return view("estudiantes.edit")->with("estudiantes",$this->manager->buscarEstudiante($id));
    }

//me recibe la requuest del formulario y el id
    public function update(Request $request, $id)
    {
        //dd($request->all(),$id);
        //voy a asignarle el modelo para modificar los datos -update es un array
        /*$estudiante = estudiantes::where("id",$id)->update([
            'nombre' => $request->nombre,
            'correo' => $request->correo,
            'telefono' =>$request->telefono
        ]);*/
        //dd($estudiante);
        if ($this->manager->actualizarEstudiante($request, $id)){
            Alert::success("se actualizo correctamente");
            
        }else{
            Alert::success("No se actualizo el registro");

        }
        return redirect()->back();
    }
    public function delete($id){


        /*$estudiante = estudiantes::find($id);
        if (!$estudiante) {
            return redirect()->route('estudiante.index')->with('error', 'Estudiante no encontrado');
        }
        $estudiante->delete();*/
        if ($this->manager->eliminarEstudiante($id))
        {
            Alert::success("El registro se elimino exitosamente");
            return redirect()->route("estudiante.index");
        }
        else{
            Alert::error("El registro no pudo ser elimino");
            return redirect->back();
        }
        
    }

    public function create(){
        return view("estudiantes.create");
    }

    public function store(Request $request){
     /* 
        estudiantes::create([
            'nombre' => $request->nombre,
            'correo' => $request->correo,
            'telefono' =>$request->telefono
        ]);*/
        if ($this->manager->crearEstudiante($request))
        {
            Alert::success("Se creo exitosamente el estudiante");
            return redirect()->route("estudiante.index");
        
        }
        else{
            Alert::error("No se pudo crear el estudiante");
            return redirect()->back();
        }
        

    }
}
