@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg m-5">
            <form action="{{ route('adminregister') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="sr-only">Name</label>
                    <input type="text" name="name" id="name" placeholder="Your Name with Initials" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500
                                                                                             @enderror"
                        value="{{ old('name') }}">

                    @error('name')
                        <div class="text-red-600 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="WorkID" class="sr-only">Work Id</label>
                    <input type="text" name="WorkID" id="WorkID" placeholder="Work ID Number" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('WorkID') border-red-500
                                                                                             @enderror"
                        value="{{ old('WorkID') }}">

                    @error('WorkID')
                        <div class="text-red-600 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

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
                                                                                             @enderror" value="">

                    @error('password')
                        <div class="text-red-600 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password_confirmation" class="sr-only">Password again</label>
                    <input type="password" name="password_confirmation" id="password_confirmation"
                        placeholder="Repeat your Password" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password_confirmation') border-red-500
                                                                                             @enderror" value="">

                    @error('password_confirmation')
                        <div class="text-red-600 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="province" class="sr-only">Province</label>
                    <input type="text" name="province" id="province" placeholder="Enter your Province" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('province') border-red-500
                                                                                             @enderror" value="">

                    @error('province')
                        <div class="text-red-600 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="district" class="sr-only">District</label>
                    <input type="text" name="district" id="district" placeholder="Enter your District" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('district') border-red-500
                                                                                             @enderror" value="">

                    @error('district')
                        <div class="text-red-600 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div>
                    <button type="submit"
                        class="bg-blue-400 text-white px-4 py-3 rounded font-medium w-full">Register</button>
                </div>

            </form>

        </div>

    </div>
@endsection
