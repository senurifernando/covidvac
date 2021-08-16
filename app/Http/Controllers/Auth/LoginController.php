<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    public function index(Request $request)

    {
        if ($request->session()->has('users')) {
            return redirect('welcome');
        }
        return view('auth.login');
    }
    public function permission()
    {
        return view('layouts.loginpermission');
    }
    public function store(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('welcome');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }
    public function showAdminLoginForm()
    {
        return view('auth.adminlogin');
    }
    public function adminlogin(Request $request)
    {
        $credentials = $request->validate([
            'email'   => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('admin');
        }

        // if (Auth::guard('admin')->attempt($credentials(['email' => $request->email, 'password' => $request->password], $request->get('remember')))) {

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
    // return back()->withInput($request->only('email', 'remember'));
}