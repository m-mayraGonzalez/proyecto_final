<?php

namespace App\Http\Controllers;
use App\Models\Historias;
use Illuminate\Http\Request;

class HistoriasController extends Controller
{
    public function añadir_historia(Request $request)
    {
        $his = new Historias();
        $his->cedula_paciente = $request->cedula_paciente;
        $his->save();
    }

    public function actualizar_historia(Request $request)
    {
        $his = Historias::find($request->id_historia);
        $his->cedula_paciente = $request->cedula_paciente;
        $his->save();
    }

    public function eliminar_historia(Request $request)
    {
        $his = Historias::find($request->id_historia);
        $his->delete();
    }

    public function obtener_historia(){
        $his = Historias::select('id_historia', 'cedula_paciente')->get();
        return [
            'Historias' => $his
        ];
    }
}
