<?php

use App\Http\Controllers\AnimalController;
use Illuminate\Support\Facades\Route;

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

Route::get('/home', [AnimalController::class, 'index']);
Route::get('/add', [AnimalController::class, 'add']);
Route::post('/store', [AnimalController::class, 'store']);
Route::get('/{id}/edit', [AnimalController::class, 'edit']);
Route::put('/update/{id}', [AnimalController::class, 'update']);
Route::delete('/update/{id}', [AnimalController::class, 'destroy']);
