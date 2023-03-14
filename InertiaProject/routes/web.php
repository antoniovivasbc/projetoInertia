<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\AuthController;

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
Route::get('/login', [AuthController::class, 'index']);

Route::post('/login', [AuthController::class, 'store']);

Route::get('/listing', [ItemsController::class, 'index']);
Route::get('/create', [ItemsController::class, 'create']);

Route::post('/create', [ItemsController::class, 'store']);