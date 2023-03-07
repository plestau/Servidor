<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AsignaturaController;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\HoraController;

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
    return view('auth/login');
});

Route::get('/dashboard', [HorarioController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/asignaturas', [AsignaturaController::class, 'index'])->middleware(['auth', 'verified'])->name('asignaturas');
Route::get('/asignaturas/crear', [AsignaturaController::class, 'create'])->middleware(['auth', 'verified'])->name('asignaturas.crear');
Route::post('/asignaturas/crear', [AsignaturaController::class, 'store'])->middleware(['auth', 'verified'])->name('asignaturas.crear');
Route::get('/asignaturas/lista', [AsignaturaController::class, 'index'])->middleware(['auth', 'verified'])->name('asignaturas.lista');
Route::get('/asignaturas/editar/{id}', [AsignaturaController::class, 'edit'])->middleware(['auth', 'verified'])->name('asignaturas.editar');
Route::put('/asignaturas/editar/{id}', [AsignaturaController::class, 'update'])->middleware(['auth', 'verified'])->name('asignaturas.actualizar');
Route::get('/asignaturas/eliminar/{id}', [AsignaturaController::class, 'destroy'])->middleware(['auth', 'verified'])->name('asignaturas.borrar');

Route::get("/horas", [HoraController::class, 'index'])->middleware(['auth', 'verified'])->name('horas');
Route::get("/horas/create", [HoraController::class, 'create'])->middleware(['auth', 'verified'])->name('horas.create');
Route::post("/horas/create", [HoraController::class, 'store'])->middleware(['auth', 'verified'])->name('horas.store');
Route::get("/horas/edit/{diaH}/{horaH}", [HoraController::class, 'edit'])->middleware(['auth', 'verified'])->name('horas.edit');
Route::put("/horas/edit/{id}/{diaH}/{horaH}", [HoraController::class, 'update'])->middleware(['auth', 'verified'])->name('horas.update');
Route::get("/horas/delete/{id}/{diaH}/{horaH}", [HoraController::class, 'destroy'])->middleware(['auth', 'verified'])->name('horas.destroy');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
