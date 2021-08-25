<?php

namespace App\Http\Controllers;

use App\Models\SendAppointment;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()

    {

        return view('welcome');
    }

    public function vaccines()
    {
        return view('layouts.vaccines');
    }

    public function guidelines()
    {
        return view('layouts.guidelines');
    }
    public function takeAppointment()
    {
        return view('layouts.takeAppointment');
    }

    public function show()
    {
        $data = array(
            'sendApp' => DB::table('send_appointments')->get()
        );
        return view('layouts.receivedAppointment', $data);
    }
}