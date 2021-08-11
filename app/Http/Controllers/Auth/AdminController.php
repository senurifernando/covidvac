<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $data = array(
            'list' => DB::table('appointments')->get()
        );
        return view('layouts.admin', $data);
    }
    public function createAppointment()
    {
        return view('layouts.createAppointment');
    }
}