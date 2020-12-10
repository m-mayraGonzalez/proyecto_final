<?php

namespace App\Http\Controllers;
use App\Models\Medico;
use Illuminate\Http\Request;

class MedicosController extends Controller
{
    public function añadir_medico(Request $request){
        $med = new Medico();
        $med->cedula_medico = $request->cedula_medico;
        $med->tarjeta = $request->tarjeta;
        $med->nombre = $request->nombre;
        $med->apellido = $request->apellido;
        $med->telefono = $request->telefono;
        $med->direccion = $request->direccion;
        $med->id_eps = $request->id_eps;
        $med->save();
    }

    public function actualizar_medico(Request $request){
        $med = Medico::find($request->cedula_medico);
        $med->tarjeta = $request->tarjeta;
        $med->nombre = $request->nombre;
        $med->apellido = $request->apellido;
        $med->telefono = $request->telefono;
        $med->direccion = $request->direccion;
        $med->id_eps = $request->id_eps;
        $med->save();
    }

    public function eliminar_medico(Request $request){
        $med = Medico::find($request->cedula_medico);
        $med->delete();
    }

    public function obtener_medico(){
        $med = Medico::select('cedula_medico', 'nombre', 'apellido', 'id_eps')->get();
        return [
            'medicos'=> $med
        ];
    }
}
