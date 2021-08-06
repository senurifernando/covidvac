@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="bg-green-400 w-1/5 px-5 m-5 p-6 rounded">
            <a href="{{ route('adminregister') }}">REGISTER AS ADMIN</a>

        </div><br>
        <div class="bg-red-300 w-1/5 px-5 m-5 p-6 rounded">

            <a href="{{ route('register') }}" class="p-6">REGISTER AS PATIENT</a>
        </div>
    </div>
@endsection
