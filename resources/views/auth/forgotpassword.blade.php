@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg m-5">
            <form action="{{ route('password.email') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <p class="text-lg">Enter The Email Address You want to send the Reset Password link</p>
                    <input type="email" name="email" id="email" class="bg-gray-100 border-2 w-full p-4 rounded-lg">
                </div>
                <div class="mb-4">
                    <button type="submit" class="bg-blue-400 text-white px-4 py-3 rounded font-medium w-full">SEND
                        EMAIL</button>
                </div>
            </form>
        </div>
    </div>
@endsection
