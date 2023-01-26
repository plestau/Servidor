<?php

use App\Http\Controllers\AsignaturaController;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('horario.ver');
});

Route::get('/asignaturas', [AsignaturaController::class, 'index'])->middleware(['auth', 'verified'])->name('asignaturas.ver');

Route::get('/asignaturas/crear', [AsignaturaController::class, 'create'])->middleware(['auth', 'verified'])->name('asignaturas.crear');

Route::post('/asignaturas', [AsignaturaController::class, 'store'])->middleware(['auth', 'verified'])->name('asignaturas.crear');

Route::get('/asignaturas/editar/{codAs}', [AsignaturaController::class, 'edit'])->middleware(['auth', 'verified'])->name('asignaturas.editar');

Route::post('/asignaturas/editar/{codAs}', [AsignaturaController::class, 'update'])->middleware(['auth', 'verified'])->name('asignaturas.editar');

Route::get('/asignaturas/borrar/{codAs}', [AsignaturaController::class, 'destroy'])->middleware(['auth', 'verified'])->name('asignaturas.borrar');

Route::post('/asignaturas/update/{codAs}', [AsignaturaController::class, 'update'])->middleware(['auth', 'verified'])->name('asignaturas.update');

Route::get('/horario/ver', [HorarioController::class, 'index'])->middleware(['auth', 'verified'])->name('horario.ver'); 

Route::post('/horario/ver', [HorarioController::class, 'index'])->middleware(['auth', 'verified'])->name('horario.crear'); 

Route::get('/horario/crear', [HorarioController::class, 'create'])->middleware(['auth', 'verified'])->name('horario.crear');

Route::post('/horario/crear', [HorarioController::class, 'store'])->middleware(['auth', 'verified'])->name('horario.crear');

Route::get('/horario/editar/{codAs}', [HorarioController::class, 'edit'])->middleware(['auth', 'verified'])->name('horario.editar');

Route::post('/horario/editar/{codAs}', [HorarioController::class, 'update'])->middleware(['auth', 'verified'])->name('horario.editar');

Route::get('/horario/borrar/{codAs}', [HorarioController::class, 'destroy'])->middleware(['auth', 'verified'])->name('horario.borrar');

Route::post('/horario/update/{codAs}', [HorarioController::class, 'update'])->middleware(['auth', 'verified'])->name('horario.update');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
