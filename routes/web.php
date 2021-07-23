<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [DashboardController::class, 'index'])->name('welcome');

Route::get('/vaccines', [DashboardController::class, 'vaccines'])->name('vaccines');

Route::get('/guidelines', [DashboardController::class, 'guidelines'])->name('guidelines');

Route::get('/login', [LoginController::class, 'index'])->name('login');


Route::get('/register', [RegisterController::class, 'index'])->name('register');