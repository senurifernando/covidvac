<?php

namespace App\Http\Controllers;

use App\Models\allergies;
use App\Models\Appointment;
use App\Models\SendAppointment;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Location;
use Illuminate\Support\Facades\DB;

class AppointmentController extends Controller
{
    public function showAppointement()
    {
        // $data = array(
        //'list' => DB::select('select * from users where active = "id"'[1])
        // 'list' => DB::table('users')->where('id')->get()
        //);
        return view('layouts.appointmentForm');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'NIC' => 'required|max:10 |unique:appointments,NIC',
            'province' => 'required|max:255',
            'district' => 'required|max:255',
            'injection_name' => 'required|max:255',
            //'date' => 'required|date',
            //'time' => 'required|time',
            //'location' => 'required|max:255',
            'dosenum' => 'required|max:255',
            'phone' => 'required|max:10',
            'email' => 'required|email|max:255',

        ]);

        Appointment::create([
            'name' => $request->name,
            'NIC' => $request->NIC,
            'province' => $request->province,
            'district' => $request->district,
            'injection_name' => $request->injection_name,
            //'date' => $request->date,
            //'time' => $request->time,
            //'location' => $request->location,
            'dosenum' => $request->dosenum,
            'phone' => $request->phone,
            'email' => $request->email,

        ]);
        return redirect()->route('welcome');
    }

    public function showAllergies()
    {
        return view('layouts.allergies');
    }
    public function storeAllergies(Request $request)
    {
        Allergies::create([
            'name' => $request->name,
            'NIC' => $request->NIC,
            'allergies' => $request->allergies,
            'textarea' => $request->textarea,
        ]);
        return redirect()->route('appointmentForm');
    }
    public function index()
    {
        $data = array(
            'allergies' => DB::table('allergies')->get()
        );
        return view('layouts.reviewAllergies', $data);
    }
    public function receivedAppointment()
    {
        collect(DB::select('select * from send_appointments where NIC=$NIC',))->first();
    }
}