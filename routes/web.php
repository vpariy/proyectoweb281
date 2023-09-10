<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;


Route::view('/', 'welcome');
Route::view('login', 'login')->name('login')->middleware('guest');
Route::view('dashboard', 'dashboard')->middleware('auth');


Route::post('login', [\App\Http\Controllers\LoginController::class, 'login']);


