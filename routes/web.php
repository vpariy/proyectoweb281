<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;


//Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')->middleware('auth');

Route::get('/', [\App\Http\Controllers\PaginaController::class, 'principal'])->name('pagina.principal');


Route::get('login/ingreso', [\App\Http\Controllers\LoginController::class, 'ingreso'])->name('login.ingreso');
Route::post('login/valida', [\App\Http\Controllers\LoginController::class, 'valida'])->name('login.valida');
Route::post('login/logout', [\App\Http\Controllers\LoginController::class, 'logout'])->name('login.logout');
Route::get('login/registro', [\App\Http\Controllers\LoginController::class, 'registro'])->name('login.registro');
Route::post('login/registrar', [\App\Http\Controllers\LoginController::class, 'registrar'])->name('login.registrar');

Route::resource('usuario', \App\Http\Controllers\UsuarioController::class)->middleware('auth');

Route::get('evento/listar', [\App\Http\Controllers\EventoController::class, 'listar'])->middleware('auth')->name('evento.listar');
Route::get('evento/crear', [\App\Http\Controllers\EventoController::class, 'crear'])->middleware('auth')->name('evento.crear');
Route::post('evento/registra', [\App\Http\Controllers\EventoController::class, 'registra'])->middleware('auth')->name('evento.registra');

Route::get('normativa/listar', [\App\Http\Controllers\NormativaController::class, 'listar'])->middleware('auth')->name('normativa.listar');





/* Route::view('login', 'login.login')->name('login')->middleware('guest');
Route::post('login', [\App\Http\Controllers\LoginController::class, 'login']);
Route::post('logout', [\App\Http\Controllers\LoginController::class, 'logout'])->middleware('auth')->name('logout');
Route::get('registre', [\App\Http\Controllers\LoginController::class, 'create'])->name('registre')->middleware('guest');
Route::post('registre', [\App\Http\Controllers\LoginController::class, 'store'])->name('registre.store')->middleware('guest'); */

/* Route::get('usuarios', [\App\Http\Controllers\UsuarioController::class, 'index'])->middleware('auth')->name('usuarios');
Route::delete('usuario-borrar/{usuario}', [\App\Http\Controllers\UsuarioController::class, 'destroy'])->middleware('auth')->name('usuario-borrar');

Route::get('usuario-crear', [\App\Http\Controllers\UsuarioController::class, 'create'])->middleware('auth')->name('usuario-crear');
Route::post('usuario-crear-post', [\App\Http\Controllers\UsuarioController::class, 'store'])->middleware('auth')->name('usuario-crear-post');


Route::post('usuario-editar/{usuario}', [\App\Http\Controllers\UsuarioController::class, 'edit'])->middleware('auth')->name('usuario-editar');
Route::put('usuario-actualizar/{usuario}', [\App\Http\Controllers\UsuarioController::class, 'update'])->middleware('auth')->name('usuario-actualizar');
 */


 //rutas centros ayuda
Route::resource('centro_ayuda',\App\Http\Controllers\CentroAyudaController::class)->middleware('auth');