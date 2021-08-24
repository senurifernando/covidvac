@extends('layouts.app')

@section('content')
    <div class="flex justify-center md:flex">
        <div class="w-4/12 bg-white p-6 rounded-lg m-5">
            <form action="{{ route('allergies') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="sr-only">name</label>
                    <input type="text" name="name" id="name" placeholder="Enter your name With Initials"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg">
                </div>
                <div class="mb-4">
                    <label for="NIC" class="sr-only">NIC</label>
                    <input type="text" name="NIC" id="NIC" placeholder="Enter your NIC number"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg ">
                </div>
                <div class="mb-4">
                    <label for="allergies">Do you have any Allergies : </label>
                    <input type="radio" name="allergies" id="allergies" class="form-radio" value="yes">
                    <span class="ml-2">Yes</span>
                    <input type="radio" name="allergies" id="allergies" class="form-radio" value="no">
                    <span class="ml-2">No</span>
                </div>
                <div class="mb-4">
                    <input type=text name="textarea" id="textarea" placeholder="Mention if you have any Allergies"
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
