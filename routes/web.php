<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ActividadController;
use App\Http\Controllers\CalendarController;

use App\Http\Controllers\CalendarioController;

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

// Rutuas del calendario
// Route::get('/calendar', [CalendarioController::class, 'index']);
// Route::get('/events', [CalendarioController::class, 'getEvents']);
// Route::post('/event', [CalendarioController::class, 'addEvent']);
// Route::put('/event/{id}', [CalendarioController::class, 'updateEvent']);
// Route::delete('/event/{id}', [CalendarioController::class, 'deleteEvent']);

// routes/web.php
// Ruats del menu lateral
Route::get('/clientes', [\App\Http\Controllers\ClienteController::class, 'index'])->name('clientes.index');
Route::get('/actividades', [\App\Http\Controllers\ActividadController::class, 'index'])->name('actividades.index');
Route::get('/productos', [\App\Http\Controllers\ClienteController::class, 'index'])->name('productos.index');
Route::get('/calendario', [\App\Http\Controllers\CalendarioController::class, 'index'])->name('calendario.index');

// Vamos a retornar un resourse que es el controller ya que a su vez retorna una vista
Route::get('home', [\App\Http\Controllers\ClienteController::class, 'index'])->name('home');
// Habilita la ruta para recibir peticiones HTTP  por ejemplo home.store
Route::resource('home', ClienteController::class);
// Puedes responder vistas directas sin pasar por el controler

// Vamos a retornar un resourse que es el controller ya que a su vez retorna una vista
// Route::get('actividad', [\App\Http\Controllers\ActividadController::class, 'index'])->name('actividad');
// Habilita la ruta para recibir peticiones HTTP  por ejemplo home.store
// Route::resource('actividad', ActividadController::class);
// Puedes responder vistas directas sin pasar por el controler
Route::get('/actividad/create/{cliente?}', [\App\Http\Controllers\ActividadController::class, 'create'])->name('actividad.create');
// 
Route::get('/actividad/{id?}', [\App\Http\Controllers\ActividadController::class, 'show'])->name('actividad.show');
// Route::match(['get', 'post'],'/actividad/{id?}', [\App\Http\Controllers\ActividadController::class, 'show'])->name('actividad.show');

// Route::get('/actividad/{id?}', [\App\Http\Controllers\ActividadController::class, 'show'])->name('actividad.show');



// Route::get('/actividad/{id?}', function ($id = null) {
//     // Aquí puedes realizar lógica adicional si es necesario
//     return view('nombre_de_la_vista', ['id' => $id]);
// })->name('actividad.show');





Route::get('/Principal', function () {
    return view('Principal');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/boot', function () {
    return view('ejemplos/uso_bootstrap');
});


// Route::get('/home', function () {
//     return view('home');
// });

// Route::get('/inicio', function () {
//     return view('inicio');
// });
