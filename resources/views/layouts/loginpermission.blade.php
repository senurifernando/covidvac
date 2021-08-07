@extends('layouts.app')

@section('content')
    <div class=" inset-0 flex  items-center justify-center bg-opactiy-75 text-center">
        <div class="bg-blue-300 w-1/5 px-5 m-20 h-20 p-6 rounded-lg flex flex-col shadow-2xl">
            <a href="{{ route('adminlogin') }}">LOGIN AS ADMIN</a>

        </div><br>
        <div class="bg-green-300 w-1/5 px-5 m-20 h-20 p-6 rounded-lg flex flex-col shadow-2xl">

            <a href="{{ route('login') }}">LOGIN AS PATIENT</a>
        </div>
    </div>

@endsection
