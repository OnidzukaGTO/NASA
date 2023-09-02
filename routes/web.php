<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NasaApiController;
use App\Http\Controllers\WelcomeController;

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

Route::get('/', [WelcomeController::class, 'index']) -> name('welcome');
Route::get('/lox', [WelcomeController::class, 'mem']) -> name('mem');

Route::get('/nasa',[NasaApiController::class, 'index']) ->name('nasa');
Route::post('/nasa', [NasaApiController::class, 'show'])->name('nasa.post');