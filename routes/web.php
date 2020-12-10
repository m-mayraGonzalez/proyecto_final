<!-- Mayra Marcela Gonzalez Rojas -->
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EpsController;
use App\Http\Controllers\MedicosController;
use App\Http\Controllers\PacientesController;
use App\Http\Controllers\HistoriasController;
use App\Http\Controllers\ProcedimientosController;
use App\Http\Controllers\ConsultasController;
use App\Http\Controllers\LaboratoriosController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/api/eps/añadir', [EpsController::class, 'añadir_eps'])->name('Guardar');
Route::put('/api/eps/actualizar', [EpsController::class, 'actualizar_eps'])->name('Actualizar');
Route::delete('/api/eps/eliminar', [EpsController::class, 'eliminar_eps'])->name('Eliminar');
Route::get('/api/eps/obtener', [EpsController::class, 'obtener_eps'])->name('Obtener');

Route::post('/api/medicos/añadir', [MedicosController::class, 'añadir_medico'])->name('Guardar');
Route::put('/api/medicos/actualizar', [MedicosController::class, 'actualizar_medico'])->name('Actualizar');
Route::delete('/api/medicos/eliminar', [MedicosController::class, 'eliminar_medico'])->name('Eliminar');
Route::get('/api/medicos/obtener', [MedicosController::class, 'obtener_medico'])->name('Obtener');

Route::post('/api/pacientes/añadir', [PacientesController::class, 'añadir_paciente'])->name('Guardar');
Route::put('/api/pacientes/actualizar', [PacientesController::class, 'actualizar_paciente'])->name('Actualizar');
Route::delete('/api/pacientes/eliminar', [PacientesController::class, 'eliminar_paciente'])->name('Eliminar');
Route::get('/api/pacientes/obtener', [PacientesController::class, 'obtener_paciente'])->name('Obtener');

Route::post('/api/historias/añadir', [HistoriasController::class, 'añadir_historia'])->name('Guardar');
Route::put('/api/historias/actualizar', [HistoriasController::class, 'actualizar_historia'])->name('Actualizar');
Route::delete('/api/historias/eliminar', [HistoriasController::class, 'eliminar_historia'])->name('Eliminar');
Route::get('/api/historias/obtener', [HistoriasController::class, 'obtener_historia'])->name('Obtener');

Route::post('/api/procedimientos/añadir', [ProcedimientosController::class, 'añadir_procedimiento'])->name('Guardar');
Route::put('/api/procedimientos/actualizar', [ProcedimientosController::class, 'actualizar_procedimiento'])->name('Actualizar');
Route::delete('/api/procedimientos/eliminar', [ProcedimientosController::class, 'eliminar_procedimiento'])->name('Eliminar');
Route::get('/api/procedimientos/obtener', [ProcedimientosController::class, 'obtener_procedimiento'])->name('Obtener');

Route::post('/api/consultas/añadir', [ConsultasController::class, 'añadir_consulta'])->name('Guardar');
Route::put('/api/consultas/actualizar', [ConsultasController::class, 'actualizar_consulta'])->name('Actualizar');
Route::delete('/api/consultas/eliminar', [ConsultasController::class, 'eliminar_consulta'])->name('Eliminar');
Route::get('/api/consultas/obtener', [ConsultasController::class, 'obtener_consulta'])->name('Obtener');

Route::post('/api/laboratorios/añadir', [LaboratoriosController::class, 'añadir_laboratorio'])->name('Guardar');
Route::put('/api/laboratorios/actualizar', [LaboratoriosController::class, 'actualizar_laboratorio'])->name('Actualizar');
Route::delete('/api/laboratorios/eliminar', [LaboratoriosController::class, 'eliminar_laboratorio'])->name('Eliminar');
Route::get('/api/laboratorios/obtener', [LaboratoriosController::class, 'obtener_laboratorio'])->name('Obtener');
