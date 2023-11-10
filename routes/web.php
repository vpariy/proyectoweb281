<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;


//Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')->middleware('auth')->name('dashboard');

//Rutas pagina principal o de invitados
Route::get('/', [\App\Http\Controllers\PaginaController::class, 'principal'])->name('pagina.principal');
Route::get('centrosayuda', [\App\Http\Controllers\PaginaController::class, 'centrosAyuda'])->name('pagina.centrosayuda');
Route::get('testviolencia', [\App\Http\Controllers\PaginaController::class, 'testviolencia'])->name('pagina.testviolencia');
Route::get('articulo', [\App\Http\Controllers\PaginaController::class, 'articulo'])->name('pagina.articulo');
Route::get('normativa', [\App\Http\Controllers\PaginaController::class, 'normativa'])->name('pagina.normativa');

//Rutas login inicio sesion
Route::get('login/ingreso', [\App\Http\Controllers\LoginController::class, 'ingreso'])->name('login.ingreso')->middleware('guest');
Route::post('login/valida', [\App\Http\Controllers\LoginController::class, 'valida'])->name('login.valida');
Route::post('login/logout', [\App\Http\Controllers\LoginController::class, 'logout'])->name('login.logout');
Route::get('login/registro', [\App\Http\Controllers\LoginController::class, 'registro'])->name('login.registro');
Route::post('login/registrar', [\App\Http\Controllers\LoginController::class, 'registrar'])->name('login.registrar');

//Rutas Usuario
Route::resource('usuario', \App\Http\Controllers\UsuarioController::class)->middleware('auth');

//Rutas eventos
Route::get('evento/listar', [\App\Http\Controllers\EventoController::class, 'listar'])->middleware('auth')->name('evento.listar');
Route::get('evento/crear', [\App\Http\Controllers\EventoController::class, 'crear'])->middleware('auth')->name('evento.crear');
Route::post('evento/registra', [\App\Http\Controllers\EventoController::class, 'registra'])->middleware('auth')->name('evento.registra');
Route::delete('evento/elimina/{evento}', [\App\Http\Controllers\EventoController::class, 'elimina'])->middleware('auth')->name('evento.elimina');
Route::get('evento/edita/{evento}', [\App\Http\Controllers\EventoController::class, 'edita'])->middleware('auth')->name('evento.edita');
Route::put('evento/actualiza/{evento}', [\App\Http\Controllers\EventoController::class, 'actualiza'])->middleware('auth')->name('evento.actualiza');
Route::get('evento/mostrar/{evento}', [\App\Http\Controllers\EventoController::class, 'mostrar'])->middleware('auth')->name('evento.mostrar');
Route::get('evento/mostrarevento/{evento}', [\App\Http\Controllers\EventoController::class, 'mostrarevento'])->name('evento.mostrarevento');

//Route::get('questions/listar/{preguntas}', [\App\Http\Controllers\TestviolenciaController::class, 'listar'])->middleware('auth')->name('questions.listar');
Route::get('questions/listar', [\App\Http\Controllers\TestviolenciaController::class, 'listar'])->middleware('auth')->name('questions.listar');

Route::get('normativa/listar', [\App\Http\Controllers\NormativaController::class, 'listar'])->middleware('auth')->name('normativa.listar');
Route::get('normativa/crear', [\App\Http\Controllers\NormativaController::class, 'crear'])->middleware('auth')->name('normativa.crear');
Route::post('normativa/registra', [\App\Http\Controllers\NormativaController::class, 'registra'])->middleware('auth')->name('normativa.registra');
Route::delete('/normativa/eliminar/{ley}', [\App\Http\Controllers\NormativaController::class, 'eliminar'])->middleware('auth')->name('normativa.eliminar');

Route::get('articulo/listar', [\App\Http\Controllers\ArticuloController::class, 'listar'])->middleware('auth')->name('articulo.listar');
Route::get('articulo/crear', [\App\Http\Controllers\ArticuloController::class, 'crear'])->middleware('auth')->name('articulo.crear');
Route::post('articulo/registra', [\App\Http\Controllers\ArticuloController::class, 'registra'])->middleware('auth')->name('articulo.registra');
Route::delete('articulo/{articulo}', [\App\Http\Controllers\ArticuloController::class, 'destroy'])->middleware('auth')->name('articulo.destroy');
Route::get('articulo/editar/{articulo}', [\App\Http\Controllers\ArticuloController::class, 'editar'])->middleware('auth')->name('articulo.editar');
Route::put('articulo/actualizar/{articulo}', [\App\Http\Controllers\ArticuloController::class, 'actualizar'])->middleware('auth')->name('articulo.actualizar');
Route::get('articulo/descargar/{articulo}', [\App\Http\Controllers\ArticuloController::class, 'descargar'])->name('articulo.descargar');

Route::resource('centro_ayuda',\App\Http\Controllers\CentroAyudaController::class)->middleware('auth');

Route::resource('alerta',\App\Http\Controllers\AlertaController::class)->middleware('auth');
//Route::post('alerta/{id}/toggle-revisado',[\App\Http\Controllers\AlertaController::class,'toggle-revisado'])->middleware('auth')->name('alerta.toggle-revisado');
//Route::post('alerta/{id}/toggle-revisado', [\App\Http\Controllers\AlertaController::class,'toggle-revisado'])->middleware('auth');

Route::get('denuncia/crear',[\App\Http\Controllers\DenunciaController::class, 'crear'])->name('denuncia.crear');
Route::post('denuncia/registra',[\App\Http\Controllers\DenunciaController::class, 'registra'])->name('denuncia.registra');
Route::get('denuncia/listar',[\App\Http\Controllers\DenunciaController::class, 'listar'])->middleware('auth')->name('denuncia.listar');
Route::put('denuncia/revisado/{denuncias2}',[\App\Http\Controllers\DenunciaController::class, 'revisado'])->middleware('auth')->name('denuncia.revisado');



Route::view('test/test2', 'test.test2')->name('test.test2');


//Route::get('datos_agresors/crear', [\App\Http\Controllers\DatosAgresorsController::class, 'crear'])->middleware('auth')->name('datos_agresors.crear');
//Route::post('datos_agresors/almacenar', [\App\Http\Controllers\DatosAgresorsController::class, 'almacenar'])->middleware('auth')->name('datos_agresors.almacenar');















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