<?php

namespace App\Http\Controllers;
use App\Models\Procedimientos;
use Illuminate\Http\Request;

class ProcedimientosController extends Controller
{
    public function añadir_procedimiento(Request $request)
    {
        $proc = new Procedimientos();
        $proc->tipo = $request->tipo;
        $proc->id_historia = $request->id_historia;
        $proc->save();
    }

    public function actualizar_procedimiento(Request $request)
    {
        $proc = Procedimientos::find($request->id_procedimiento);
        $proc->tipo = $request->tipo;
        $proc->id_historia = $request->id_historia;
        $proc->save();
    }

    public function eliminar_procedimiento(Request $request)
    {
        $proc = Procedimientos::find($request->id_procedimiento);
        $proc->delete();
    }

    public function obtener_procedimiento(){
        $proc = Procedimientos::select('id_procedimiento', 'tipo', 'id_historia')->get();
        return [
            'Procedimientos' => $proc
        ];
    }
}
