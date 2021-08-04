<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'NIC' => 'required |max:255',
            'address' => 'required|max:255',
            'email' => 'required|email |max:255',
            'password' => 'required|confirmed',
        ]);

        User::create([

            'name' => $request->name,
            'NIC' => $request->NIC,
            'address' => $request->address,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        // auth()->attempt($request->only('email', 'password'));
        //$user->attachRole('user');
        //return ($user)->route('login');
        return redirect()->route('login');
    }
    public function __construct()
    {
        //$this->middleware('guest');
        $this->middleware('guest:admin');
        // $this->middleware('guest:writer');
    }
    public function showAdminRegisterForm()
    {
        return view('auth.register', ['url' => 'admin']);
    }
    protected function createAdmin(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            //'NIC' => 'required |max:255',
            // 'address' => 'required|max:255',
            'email' => 'required|email |max:255',
            'password' => 'required|confirmed',
            'province' => 'required|max255',
            'district' => 'required|max255',
        ]);
        //$this->validator($request->all())->validate();
        Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'province' => $request->province,
            'district' => $request->district,
        ]);
        return redirect()->intended('login/admin');
    }
}