<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\AdminController;
use App\Http\Controllers\AppointmentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\PasswordReset;



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
//Route::get('/admin', [AdminController::class, 'index1']);
Route::get('/vaccines', [DashboardController::class, 'vaccines'])->name('vaccines');
Route::get('/takeAppointment', [DashboardController::class, 'takeAppointment'])->name('takeAppointment');
Route::get('/receivedAppointment', [DashboardController::class, 'show'])->name('receivedAppointment');

//Route::get('/allergies', function () {
//     return view('layouts/allergies');
// });

Route::get('/appointmentForm', [AppointmentController::class, 'showAppointement'])->name('appointmentForm');
Route::post('/appointmentForm', [AppointmentController::class, 'store']);

Route::get('/allergies', [AppointmentController::class, 'showallergies'])->name('allergies');
Route::post('/allergies', [AppointmentController::class, 'storeAllergies']);
Route::get('/admin-allergies', [AppointmentController::class, 'index'])->name('admin-allergies');

Route::get('/guidelines', [DashboardController::class, 'guidelines'])->name('guidelines');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/loginpermission', [LoginController::class, 'permission'])->name('loginpermission');
Route::post('/login', [LoginController::class, 'store']);
Route::get('/adminlogin', [LoginController::class, 'showAdminLoginForm'])->name('adminlogin');
Route::post('/adminlogin', [LoginController::class, 'adminlogin']);

Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/registerpermission', [RegisterController::class, 'registerpermission'])->name('registerpermission');
Route::get('/adminregister', [RegisterController::class, 'showAdminRegisterForm'])->name('adminregister');
Route::post('/adminregister', [RegisterController::class, 'createAdmin']);

Route::get('/createAppointment', [AdminController::class, 'createAppointment'])->name('createAppointment');
Route::get('/deleteRecord/{id}', [AdminController::class, 'deleteRecord']);
Route::post('/createAppointment', [AdminController::class, 'sendAppointment']);
//Route::get('/admin', [AdminController::class, 'list'])->name('admin');
//Route::get('/edit/{id}', [AdminController::class, 'showData']);


// forgot Password
Route::get('/forgot-password', function () {
    return view('auth.forgotpassword');
})->middleware('guest')->name('password.request');
Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink(
        $request->only('email')
    );

    return $status === Password::RESET_LINK_SENT
        ? back()->with(['status' => __($status)])
        : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');

//pasword reset
Route::get('/reset-password/{token}', function ($token) {
    return view('auth.reset-password', ['token' => $token]);
})->middleware('guest')->name('password.reset');
Route::post('/reset-password', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|confirmed',
    ]);

    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function ($user, $password) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->setRememberToken(Str::random(60));

            $user->save();

            event(new PasswordReset($user));
        }
    );

    return $status === Password::PASSWORD_RESET
        ? redirect()->route('loginpermission')->with('status', __($status))
        : back()->withErrors(['email' => [__($status)]]);
})->middleware('guest')->name('password.update');