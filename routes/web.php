<?php

use App\Http\Controllers\UsuarioController;
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
    return view('welcome');
});

Route::get('/usuarios', [UsuarioController::class, 'index'])->name('usuarios');
Route::post('/usuarios', [UsuarioController::class, 'store'])->name('usuarios');

Route::get('/usuarios/{id}', [UsuarioController::class, 'show'])->name('usuario-edit');
Route::patch('/usuarios/{id}', [UsuarioController::class, 'update'])->name('usuario-update');

Route::delete('/usuarios/{id}', [UsuarioController::class, 'destroy'])->name('usuario-delete');
