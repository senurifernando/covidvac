<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\AdminController;


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
Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/vaccines', [DashboardController::class, 'vaccines'])->name('vaccines');
Route::get('/takeAppointment', [DashboardController::class, 'takeAppointment'])->name('takeAppointment');

Route::get('/guidelines', [DashboardController::class, 'guidelines'])->name('guidelines');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/loginpermission', [LoginController::class, 'permission'])->name('loginpermission');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);