@extends('layouts.app')

@section('content')
    <!--<div class="flex justify-center w-full py-20 px-6 bg-cover bg-no-repeat bg-center relative z-10 h-64 bg-origin-border"
                            style=" background-image: url('https://image.freepik.com/free-vector/cartoon-coronavirus-vaccine-background_23-2148860780.jpg');">
                            <div class="flex justify-center transparent p-6 rounded-lg">

                            </div>
                        </div>-->
    <div class="flex justify-center">
        <img class="img-team" src="{{ URL('images/cartoon-coronavirus.jpg') }}">
    </div>

    <div class="p-9">
        <div>
            <h1 class="text-4xl"> Why Covid 19 Vaccination is IMPORTANT?</h1>
            <ul class="p-4 text-lg list-disc">
                <li class="p-2">COVID 19-vaccines are effective. They can keep you from getting and spreading the virus that
                    causes
                    COVID-19. </li>
                <li class="p-2">COVID-19 vaccines also help keep you from getting seriously ill even if you do get COVID-19.
                </li>
                <li class="p-2">After you are fully vaccinated, you can resume many activites that you did before the
                    pandemic</li>
            </ul>
        </div>

    </div>
@endsection
