<?php

namespace App\Http\Controllers;
use App\Models\Pacientes;
use Illuminate\Http\Request;

class PacientesController extends Controller
{
    public function añadir_paciente(Request $request)
    {
        $pac = new Pacientes();
        $pac->cedula_paciente = $request->cedula_paciente;
        $pac->tipo_documento = $request->tipo_documento;
        $pac->nombre = $request->nombre;
        $pac->apellido = $request->apellido;
        $pac->telefono = $request->telefono;
        $pac->id_afiliacion = $request->id_afiliacion;
        $pac->save();
    }

    public function actualizar_paciente(Request $request)
    {
        $pac = Pacientes::find($request->cedula_paciente);
        $pac->tipo_documento = $request->tipo_documento;
        $pac->nombre = $request->nombre;
        $pac->apellido = $request->apellido;
        $pac->telefono = $request->telefono;
        $pac->id_afiliacion = $request->id_afiliacion;
        $pac->save();
    }

    public function eliminar_paciente(Request $request)
    {
        $pac = Pacientes::find($request->cedula_paciente);
        $pac->delete();
    }

    public function obtener_paciente(){
        $pac = Pacientes::select('cedula_paciente', 'nombre', 'id_afiliacion')->get();
        return [
            'Pacientes' => $pac
        ];
    }
}
