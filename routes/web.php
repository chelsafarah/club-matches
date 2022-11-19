<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/clubs', [HomeController::class, 'club'])->name('clubs');
Route::get('/managers', [HomeController::class, 'manager'])->name('managers');
Route::get('/players', [HomeController::class, 'player'])->name('players');
Route::get('/stadiums', [HomeController::class, 'stadium'])->name('stadiums');
