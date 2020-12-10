<?php

namespace App\Http\Controllers;
use App\Models\Laboratorios;
use Illuminate\Http\Request;

class LaboratoriosController extends Controller
{
    public function añadir_laboratorio(Request $request)
    {
        $lab = new Laboratorios();
        $lab->titulo = $request->titulo;
        $lab->id_historia = $request->id_historia;
        $lab->save();
    }

    public function actualizar_laboratorio(Request $request)
    {
        $lab = Laboratorios::find($request->id_laboratorio);
        $lab->titulo = $request->titulo;
        $lab->id_historia = $request->id_historia;
        $lab->save();
    }

    public function eliminar_laboratorio(Request $request)
    {
        $lab = Laboratorios::find($request->id_laboratorio);
        $lab->delete();
    }

    public function obtener_laboratorio(){
        $lab = Laboratorios::select('id_laboratorio', 'titulo', 'id_historia')->get();
        return [
            'Laboratorios' => $lab
        ];
    }
}
