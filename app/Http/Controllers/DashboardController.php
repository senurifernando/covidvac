<?php

namespace App\Http\Controllers;

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
    public function showAppointement()
    {
        return view('layouts.appointmentForm');
    }
}