@extends('layouts.app')

@section('content')
<div class="m-4">
    <table class="min-w-full bg-white" id="example">
        <thead class="bg-gray-800 text-white">
            <tr>
                <th class="w-1/8 text-left py-3 px-6 uppercase font-semibold text-sm">NIC</th>
                <th class="w-1/8 text-left py-3 px-6 uppercase font-semibold text-sm">Date</th>
                <th class="w-1/8 text-left py-3 px-6 uppercase font-semibold text-sm">Time</th>
                <th class="w-1/8 text-left py-3 px-6 uppercase font-semibold text-sm">Location</th>
            </tr>
        </thead>
        <tbody class="text-black-700">
            <!-- retrieve from send-appointments -->
            @foreach ($sendApp as $sapp)


            <tr>
                <td>{{ $sapp->patientNIC }}</td>
                <td>{{ $sapp->date }}</td>
                <td>{{ $sapp->time }}</td>
                <td>{{ $sapp->location }}</td>
            </tr>
            @endforeach
        </tbody>

    </table>
</div>

@endsection