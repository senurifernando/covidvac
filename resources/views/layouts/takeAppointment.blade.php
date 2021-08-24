@extends('layouts.app')

@section('content')

    <!-- Gallery -->



    <div>

        <div class=" grid grid-rows-2 grid-flow-col gap-8 p-7">
            <div class="grid grid-flow-col">

                <ul class="list-disc list-inside">
                    <a href="{{ route('appointmentForm') }}">
                        <img src="{{ URL('images/sp.jpg') }}" alt="" class="rounded">
                    </a>
                </ul>
            </div>
            <div class="grid grid-flow-col">

                <ul class="list-disc list-inside">
                    <a href="{{ route('appointmentForm') }}">
                        <img src="{{ URL('images/vac.jpeg') }}" alt="" class="rounded">
                    </a>
                </ul>
            </div>


            <div class="grid grid-flow-col">
                <ul class="list-disc list-inside">
                    <a href="{{ route('appointmentForm') }}">
                        <img src="{{ URL('images/modernaa.jpg') }}" alt="" class="rounded">
                    </a>
                </ul>

            </div>
            <div class="grid grid-flow-col">
                <ul class="list-disc list-inside">
                    <a href="{{ route('appointmentForm') }}">
                        <img src="{{ URL('images/syno.png') }}" alt="" class="rounded">
                    </a>
                </ul>
            </div>


            <div class="grid grid-flow-col">

                <ul class="list-disc list-inside">
                    <a href="{{ route('appointmentForm') }}">
                        <img src="{{ URL('images/pfi.jpg') }}" alt="" class="rounded">
                    </a>
                </ul>
            </div>


            <div class="grid grid-flow-col">

                <ul class="list-disc list-inside">
                    <a href="{{ route('appointmentForm') }}">
                        <img src="{{ URL('images/a.png') }}" alt="" class="rounded">
                    </a>
                </ul>
            </div>


        </div>
    </div>

@endsection
