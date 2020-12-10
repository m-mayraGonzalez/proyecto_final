<?php

namespace App\Http\Controllers;
use App\Models\eps;
use Illuminate\Http\Request;

class EpsController extends Controller
{
    public function añadir_eps(Request $request){
        $eps = new eps();
        $eps->nit = $request->nit;
        $eps->nombre = $request->nombre;
        $eps->id_ciudad = $request->id_ciudad;
        $eps->save();
    }

    public function actualizar_eps(Request $request){
        $eps = eps::find($request->id_eps);
        $eps->nit = $request->nit;
        $eps->nombre = $request->nombre;
        $eps->id_ciudad = $request->id_ciudad;
        $eps->save();
    }

    public function eliminar_eps(Request $request)
    {
        $eps = eps::find($request->id_eps);
        $eps->delete();
    }

    public function obtener_eps(){
       $eps = eps::select('id_eps', 'nombre', 'id_ciudad')->get();

       return [
           'eps' => $eps
       ];
    }
}
