@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg m-5">
            <form action="{{ route('adminlogin') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="email" id="email" placeholder="Your Email" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500
                                                                                                                 @enderror"
                        value="{{ old('email') }}">

                    @error('email')
                        <div class="text-red-600 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" placeholder="Choose your Password" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') border-red-500
                                                                                                                 @enderror"
                        value="">

                    @error('password')
                        <div class="text-red-600 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <button type="submit" class="bg-blue-400 text-white px-4 py-3 rounded font-medium w-full">LOGIN</button>
                </div>
                <!-- <div class="mb-4">
                        <a href="{{ route('password.request') }}"> Forgot Password?</a>
                    </div>-->

            </form>

        </div>
    </div>
@endsection
