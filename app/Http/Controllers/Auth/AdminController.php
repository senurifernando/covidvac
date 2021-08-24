<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Appointment;
use App\Models\SendAppointment;

use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $data = array(
            'list' => DB::table('appointments')->get()
        );
        return view('layouts.admin', $data);
    }
    /*public function index1($id)
    {
        $data = Appointment::find($id);
        $data->show('id');
        //return redirect()->back();
    }*/
    public function retrieveUser($id)
    {
        $data = array(
            'users' => DB::table('users')->get()

        );
        return view('layouts.appointmentForm', compact('data'));
    }
    public function createAppointment()
    {
        return view('layouts.createAppointment');
    }

    public function deleteRecord($id)
    {
        $data = Appointment::find($id);
        $data->delete();
        return redirect()->back();
    }


    public function sendAppointment(Request $request)
    {
        $this->validate($request, [
            'date' => 'required',
            'time' => 'required',
            'location' => 'required|max:255',
            'patientNIC' => 'required'
        ]);

        SendAppointment::create([
            'date' => $request->date,
            'time' => $request->time,
            'location' => $request->location,
            'patientNIC' => $request->patientNIC,
        ]);

        return redirect()->route('admin');
    }

    public function list()
    {
        $data = SendAppointment::join('appointments', 'appointments.id', '=', 'send_appointments.id')
            ->get([
                'appointments.name', 'appointments.NIC', 'appointments.province',
                'appointments.district', 'appointments.phone', 'appointments.email', 'appointments.id', 'send_appointments.id'
            ]);
        return view('layouts.receivedAppointment', compact('data'));
    }
    public function showData($id)
    {

        return SendAppointment::find($id);
    }
}