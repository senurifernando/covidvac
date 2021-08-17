@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg m-5">
            <form action="{{ route('register') }}" method="POST">
                @if (Session::has('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative"
                        role="alert">
                        <script>
                            swal("Congrats!", "{!! Session::get('success') !!}", "success" {
                                button: "ok"
                            });
                        </script>
                    </div>
                @endif
                @if (Session::has('fail'))
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                        {{ Session::get('fail') }}

                        <script>
                            swal("OOPs!", "{!! Session::get('fail') !!}", "failure" {
                                button: "ok"
                            });
                        </script>
                    </div>
                @endif
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
                    <label for="NIC" class="sr-only">NIC number</label>
                    <input type="text" name="NIC" id="NIC" placeholder="NIC Number" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('NIC') border-red-500
                                                                                                             @enderror"
                        value="{{ old('NIC') }}">

                    @error('NIC')
                        <div class="text-red-600 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="address" class="sr-only">Address</label>
                    <input type="text" name="address" id="address" placeholder="Residential Address" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('address') border-red-500
                                                                                                             @enderror"
                        value="{{ old('address') }}">

                    @error('address')
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
                                                                                                             @enderror"
                        value="">

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
                                                                                                             @enderror"
                        value="">

                    @error('password_confirmation')
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
