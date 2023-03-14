<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\TesteController;
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

Route::get('/listing', [ItemsController::class, 'index']);
Route::get('/create', [ItemsController::class, 'create']);
Route::get('/edit/{id}', [ItemsController::class, 'edit']);

Route::post('/create', [ItemsController::class, 'store']);
Route::post('/edit/{id}', [ItemsController::class, 'update']);

Route::get('/teste', [TesteController::class, 'index']);