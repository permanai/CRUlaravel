<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ujianprak069Controller;

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

Route::get('/adminIndex', [Ujianprak069Controller::class, 'adminIndex']);
Route::get('/adminAdd', [Ujianprak069Controller::class, 'adminAdd']);
Route::post('/Add', [Ujianprak069Controller::class, 'Add']);
Route::get('/adminEdit/{id}', [Ujianprak069Controller::class, 'adminEdit']);
Route::put('/Edit/{id}', [Ujianprak069Controller::class, 'Edit']);



