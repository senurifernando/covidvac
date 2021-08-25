@extends('layouts.app')

@section('content')
    <div class="flex justify-center md:flex">
        <div class="w-4/12 bg-white p-6 rounded-lg m-5">
            <form action="{{ route('appointmentForm') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <a href="{{ route('allergies') }}" class="text-red-500">verify whether you have allergies or not!</a>
                </div>

                <div class="mb-4">
                    <label for="name" class="sr-only">name</label>
                    <input type="text" name="name" id="name" placeholder="Enter your name With Initials"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror"
                        value="{{ old('name') }}">
                </div>

                <div class="mb-4">
                    <label for="NIC" class="sr-only">NIC</label>
                    <input type="text" name="NIC" id="NIC" placeholder="Enter your NIC number"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('NIC') border-red-500
                                                                                                                                                                                                                                                                                @enderror"
                        value="{{ old('NIC') }}">
                    @error('NIC')
                        <div class="text-red-600 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror

                </div>
                <div class="mb-4">
                    <label for="province" class="sr-only">province</label>
                    <input type="text" name="province" id="province" placeholder="Enter your province"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('province') border-red-500
                                                                                                                                                                                                                                                                                @enderror"
                        value="{{ old('province') }}">
                    @error('province')
                        <div class="text-red-600 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror

                </div>
                <div class="mb-4">
                    <label for="district" class="sr-only">district</label>
                    <input type="text" name="district" id="district" placeholder="Enter your district"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('district') border-red-500
                                                                                                                                                                                                                                                                        @enderror"
                        value="{{ old('district') }}">
                    @error('district')
                        <div class="text-red-600 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror

                </div>
                <div class="mb-4">
                    <label for="injection_name">Injection name: </label>
                    <select name="injection_name" class="form-control">
                        <option aria-placeholder="Selected injection" class="bg-gray-100 border-2 w-full p-4 rounded-lg">
                        </option>
                        <option value="Sputnik-V">Sputnik-V</option>
                        <option value="moderna">moderna</option>
                        <option value="pfizer">pfizer</option>
                        <option value="Sinovac">Sinovac</option>
                        <option value="Sinopharm">Sinopharm</option>
                        <option value="Astrazeneca">AstraZeneca</option>

                    </select>
                    <!-- <input type="text" name="injection_name" placeholder="selected injection" id="injection_name" class="bg-gray-100 border-2 w-full
                                                                                    p-4 rounded-lg">-->
                </div>
                <div class="mb-4">
                    <label for="dosenum">Dosage : </label>
                    <input type="radio" name="dosenum" id="dosenum" class="form-radio" value="1st Dose">
                    <span class="ml-2">1st Dose</span>
                    <input type="radio" name="dosenum" id="dosenum" class="form-radio" value="2nd Dose">
                    <span class="ml-2">2nd Dose</span>
                </div>
                <div class="mb-4">
                    <label for="phone" class="sr-only">Phone :</label>
                    <input type="text" name="phone" id="phone" placeholder="Enter your Phone number" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('phone') border-red-500
                                                                                                   @enderror"
                        value="{{ old('phone') }}">
                    @error('phone')
                        <div class="text-red-600 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="email">Email :</label>
                    <input type="email" name="email" id="email" placeholder="email"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg">
                </div>

                <div>
                    <button type="submit"
                        class="bg-blue-400 text-white px-4 py-3 rounded font-medium w-full">SUBMIT</button>
                </div>
            </form>
        </div>
    </div>

@endsection
