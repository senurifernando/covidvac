<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Appointment;
use App\Models\SendAppointment;

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
        ]);

        SendAppointment::create([
            'date' => $request->date,
            'time' => $request->time,
            'location' => $request->location,
        ]);
        return redirect()->route('admin');
    }
}