<?php

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

Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'index']);
Route::get('/login', [\App\Http\Controllers\PrincipalController::class, 'login']);
Route::post('/login', 'PrincipalController@login')->name('site.login');
Route::get('/seec', [\App\Http\Controllers\PrincipalController::class, 'seec']);
Route::get('/eventos', [\App\Http\Controllers\PrincipalController::class, 'eventos']);
Route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'contato']);
Route::post('/contato', 'ContatoController@contato')->name('site.contato');
Route::get('/itq', [\App\Http\Controllers\PrincipalController::class, 'itq']);
Route::get('/postulantes', [\App\Http\Controllers\PrincipalController::class, 'postulantes']);
