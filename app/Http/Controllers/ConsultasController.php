<?php

namespace App\Http\Controllers;
use App\Models\Consultas;
use Illuminate\Http\Request;

class ConsultasController extends Controller
{
    public function añadir_consulta(Request $request)
    {
        //Instancio objeto según el modelo
        $cons = new Consultas();
        $cons->tipo = $request->tipo;
        $cons->titulo = $request->titulo;
        $cons->descripcion = $request->descripcion;
        $cons->horario = $request->horario;
        $cons->id_historia = $request->id_historia;
        $cons->save();
    }

    public function actualizar_consulta(Request $request)
    {
        //Instancio objeto según el modelo
        $cons = Consultas::find($request->id_consulta);
        $cons->tipo = $request->tipo;
        $cons->titulo = $request->titulo;
        $cons->descripcion = $request->descripcion;
        $cons->horario = $request->horario;
        $cons->id_historia = $request->id_historia;
        $cons->save();
    }

    public function eliminar_consulta(Request $request)
    {
        //Instancio objeto según el modelo
        $cons = Consultas::find($request->id_consulta);
        $cons->delete();
    }

    public function obtener_consulta(){
        $cons = Consultas::select('id_consulta', 'tipo', 'titulo', 'descripcion', 'horario', 'id_historia')->get();
        return [
            'Consultas' => $cons
        ];
    }
}
