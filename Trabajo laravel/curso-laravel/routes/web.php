<?php

use App\Http\Controllers\AsignaturaController;
use App\Http\Controllers\HoraController;
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
    return view('horas.ver');
});

Route::get('/asignaturas', [AsignaturaController::class, 'index'])->middleware(['auth', 'verified'])->name('asignaturas.ver');

Route::get('/asignaturas/crear', [AsignaturaController::class, 'create'])->middleware(['auth', 'verified'])->name('asignaturas.crear');

Route::post('/asignaturas', [AsignaturaController::class, 'store'])->middleware(['auth', 'verified'])->name('asignaturas.crear');

Route::get('/asignaturas/editar/{codAs}', [AsignaturaController::class, 'edit'])->middleware(['auth', 'verified'])->name('asignaturas.editar');

Route::post('/asignaturas/editar/{codAs}', [AsignaturaController::class, 'update'])->middleware(['auth', 'verified'])->name('asignaturas.editar');

Route::get('/asignaturas/borrar/{codAs}', [AsignaturaController::class, 'destroy'])->middleware(['auth', 'verified'])->name('asignaturas.borrar');

Route::get('/horas', [HoraController::class, 'index'])->middleware(['auth', 'verified'])->name('horas.ver');

Route::get('/horas/crear', [HoraController::class, 'create'])->middleware(['auth', 'verified'])->name('horas.crear');

Route::post('/horas/crear', [HoraController::class, 'store'])->middleware(['auth', 'verified'])->name('horas.guardar');

Route::get("/horas/editar/{codAs}/{diaH}/{horaH}", [HoraController::class, 'edit'])->middleware(['auth', 'verified'])->name('horas.editar');

Route::put("/horas/editar/{codAs}/{diaH}/{horaH}", [HoraController::class, 'update'])->middleware(['auth', 'verified'])->name('horas.editar');

Route::get('/horas/eliminar/{codAs}/{diaH}/{horaH}',  [HoraController::class, 'destroy'])->middleware(['auth', 'verified'])->name('horas.borrar');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
