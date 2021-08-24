<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Validation\ValidatesRequests;

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
            'NIC' => 'required |max:10',
            'address' => 'required|max:255',
            'email' => 'required|email|unique:users,email|max:255',
            'password' => 'required|confirmed',
        ]);

        $user = User::create([

            'name' => $request->name,
            'NIC' => $request->NIC,
            'address' => $request->address,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        // auth()->attempt($request->only('email', 'password'));
        //$user->attachRole('user');
        //return ($user)->route('login');
        if ($user) {
            return redirect()->route('login')->with('success', 'You have Registered Successfully');
        } else {
            return back()->with('fail', 'Something went Wrong');
        }
    }
    public function __construct()
    {
        //$this->middleware('guest');
        $this->middleware('guest:admin');
        // $this->middleware('guest:writer');
    }
    public function showAdminRegisterForm()
    {
        return view('auth.adminregister');
        //return view('auth.adminregister', ['url' => 'admin']);
    }
    public function createAdmin(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'WorkID' => 'required|unique:admins,WorkID|max:10',
            // 'address' => 'required|max:255',
            'email' => 'required|email |max:255',
            'password' => 'required|confirmed',
            'province' => 'required|max:255',
            'district' => 'required|max:255',
        ]);
        //$this->validator($request->all())->validate();
        $admin = Admin::create([
            'name' => $request->name,
            'WorkID' => $request->WorkID,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'province' => $request->province,
            'district' => $request->district,
        ]);
        return redirect()->route('adminlogin');
    }
    public function registerpermission()
    {
        return view('layouts.registerpermission');
    }
}