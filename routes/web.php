<?php

use App\Http\Controllers\CarreraController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\PlanCarreraController;
use App\Models\PlanesCarrera;

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



//Route::view('materias/materias','materias');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/', function () {
        return view('home');
    });
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/materias', [App\Http\Controllers\MateriasController::class, 'index'])->name('materias');
    Route::resource('estudiante', EstudianteController::class);
    Route::resource('carreras', CarreraController::class);
    Route::resource('plancarrera', PlanCarreraController::class);
});
