<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NasaApiController;
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
Route::redirect('/', '/nasa');

Route::get('/nasa',[NasaApiController::class, 'index']) ->name('nasa');
Route::post('/nasa', [NasaApiController::class, 'show'])->name('nasa.post');