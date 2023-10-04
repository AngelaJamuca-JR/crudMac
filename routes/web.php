<?php

use App\Http\Controllers\PacienteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// se crea una ruta para acceder al index de pacientes
Route::get('pacientes',[PacienteController::class,'index'])->name('pacientes.index');

// se crea una ruta para acceder al formulario
Route::get('pacientes/create',[PacienteController::class,'create'])->name('pacientes.create');

// se crea para guardar la información
Route::post('pacientes',[PacienteController::class,'store'])->name('pacientes.store');


// crear la ruta de visualizacion de un paciente
Route::get('pacientes/{paciente}',[PacienteController::class, 'show'])->name('pacientes.show');



//nuevoooooo
// crear la ruta para editar un paciente
Route::get('pacientes/{paciente}/edit',[PacienteController::class, 'edit'])->name('pacientes.edit');

// crear la ruta para actualizar un paciente
Route::put('pacientes/{paciente}',[PacienteController::class, 'update'])->name('pacientes.update');



// crear la ruta para eliminar un paciente
Route::delete('pacientes/{paciente}',[PacienteController::class, 'destroy'])->name('pacientes.destroy');

