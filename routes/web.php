<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EncargController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContadController;
use App\Http\Controllers\SuperviController;
use App\Http\Controllers\VendedController;

use App\Http\Controllers\CategController;
use App\Http\Controllers\ProductController;

use App\Http\Controllers\LoginController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'inicio'])->name('home');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth:sanctum');

Route::middleware(['auth', 'encarg'])->group(function () {
    Route::get('/encarg', [EncargController::class, 'inicio'])->name('encarg.home');
});

Route::middleware(['auth', 'client'])->group(function () {
    Route::get('/client', [ClientController::class, 'inicio'])->name('client.home');
});

Route::middleware(['auth', 'contad'])->group(function () {
    Route::get('/contad', [ContadController::class, 'inicio'])->name('contad.home');
});

Route::middleware(['auth', 'supervi'])->group(function () {
    Route::get('/supervi', [SuperviController::class, 'inicio'])->name('supervi.home');
});

Route::middleware(['auth', 'vended'])->group(function () {
    Route::get('/vended', [VendedController::class, 'inicio'])->name('vended.home');
});
