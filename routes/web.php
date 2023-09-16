<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;


Route::view('/', 'welcome');
Route::view('login', 'login')->name('login')->middleware('guest');
Route::view('dashboard', 'dashboard')->middleware('auth');


Route::post('login', [\App\Http\Controllers\LoginController::class, 'login']);
Route::post('logout', [\App\Http\Controllers\LoginController::class, 'logout'])->middleware('auth')->name('logout');


/* Route::get('usuarios', [\App\Http\Controllers\UsuarioController::class, 'index'])->middleware('auth')->name('usuarios');
Route::delete('usuario-borrar/{usuario}', [\App\Http\Controllers\UsuarioController::class, 'destroy'])->middleware('auth')->name('usuario-borrar');

Route::get('usuario-crear', [\App\Http\Controllers\UsuarioController::class, 'create'])->middleware('auth')->name('usuario-crear');
Route::post('usuario-crear-post', [\App\Http\Controllers\UsuarioController::class, 'store'])->middleware('auth')->name('usuario-crear-post');


Route::post('usuario-editar/{usuario}', [\App\Http\Controllers\UsuarioController::class, 'edit'])->middleware('auth')->name('usuario-editar');
Route::put('usuario-actualizar/{usuario}', [\App\Http\Controllers\UsuarioController::class, 'update'])->middleware('auth')->name('usuario-actualizar');
 */

Route::resource('usuario', \App\Http\Controllers\UsuarioController::class)->middleware('auth');
