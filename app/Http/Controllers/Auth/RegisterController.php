<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
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

        return redirect()->route('login');
    }
}