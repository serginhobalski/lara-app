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

Route::prefix('/home')->group(function () {
    Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'index']);
});
Route::prefix('/app')->group(function () {
    Route::get('/', [\App\Http\Controllers\AppController::class, 'index']);
});
Route::prefix('/mensagens')->group(function () {
    Route::get('/', [\App\Http\Controllers\MensagensController::class, 'index']);
    Route::get('/enviadas', [\App\Http\Controllers\MensagensController::class, 'enviadas']);
    Route::get('/lixeira', [\App\Http\Controllers\MensagensController::class, 'lixeira']);
    Route::get('/criar', [\App\Http\Controllers\MensagensController::class, 'criar']);
    Route::get('/exibir', [\App\Http\Controllers\MensagensController::class, 'exibir']);
});
Route::prefix('/cursos')->group(function () {
    Route::get('/', [\App\Http\Controllers\CursosController::class, 'index']);
});
Route::get('/itq', [\App\Http\Controllers\PrincipalController::class, 'itq']);
Route::get('/postulantes', [\App\Http\Controllers\PrincipalController::class, 'postulantes']);
Route::get('/seec', [\App\Http\Controllers\PrincipalController::class, 'seec']);
Route::get('/eventos', [\App\Http\Controllers\EventosController::class, 'eventos']);
Route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'contato']);
Route::post('/contato', 'ContatoController@contato')->name('site.contato');
Route::get('/login', [\App\Http\Controllers\LoginController::class, 'login']);
Route::post('/login', 'LoginController@login')->name('site.login');
