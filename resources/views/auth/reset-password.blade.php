@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg m-5">
            <form action="{{ route('password.update') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="email" id="email" class="bg-gray-100 border-2 w-full p-4 rounded-lg">
                </div>
                <div class="mb-4">
                    <label for="password" class="sr-only">New Password</label>
                    <input type="password" name="password" id="password" class="bg-gray-100 border-2 w-full p-4 rounded-lg">
                </div>
                <div class="mb-4">
                    <label for="password-confirmation" class="sr-only">Confirm Password</label>
                    <input type="password" name="password-confirmation" id="password-confirmation"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg">
                </div>
                <div class="mb-4">
                    <button type="submit" class="bg-blue-400 text-white px-4 py-3 rounded font-medium w-full">SAVE</button>
                </div>
            </form>
        </div>
    </div>
@endsection
