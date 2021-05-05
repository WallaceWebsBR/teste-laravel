<?php

use App\Http\Controllers\Homepage;
use App\Http\Controllers\Cadastro;
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

Route::get('/', [Homepage::class, 'index']);

Route::post('/', [Homepage::class, 'userSearch']);

Route::delete('/', [Homepage::class, 'deleteUser']);

Route::get('/cadastro', [Cadastro::class, 'index']);

Route::post('/cadastro', [Cadastro::class, 'insertUser']);

Route::patch('/cadastro', [Cadastro::class, 'findUser']);