@extends('layouts.app')

@section('content')

    <div class="flex justify-center rounded-xl bg-blue-300">

        <ul class=" p-6 list-disc">
            <h1 class="text-xl font-bold">Before Vaccinated Make Sure You Have:</h1><br>
            <li>A Mask that covers your nose and mouth- and fits tightly and comfortably</li>
            <li>Hand Sanitizer</li>
            <li>The notification of appointment reservation</li>
            <li>Your NIC Card</li>
            <li>Have A travel plan, to get your appointment on time</li>
            <blockquote>
                <p class="text-lg font-semibold">
                    Wear loose or short sleeves that can be rolled up easily, so that health workers have easy access to
                    your arm.
                    <br>
                    Tell your health provider, or vaccinator, if you have any health issues or are taking any medications,
                    including any pain killers.
                </p>
            </blockquote>
        </ul><br>

    </div>
    <div class="flex justify-center">
        <ul class="p-6 list-none md:list-disc">
            <h1 class="text-xl font-bold">After Getting Vaccinated :</h1><br>
            <blockquote class="font-medium">
                <p> After being vaccinated you’ll need to stay in an observation area for 15-30 minutes. </p>

                <p> This is to monitor your reaction to the vaccine and make sure you don’t experience any severe side
                    effects.</p>

                <p> Severe side effects are very rare, but could include:</p>
            </blockquote>
            <li>Itching </li>
            <li>Fainting</li>
            <li>Vomiting</li>
            <li>Severe allergic reaction </li>
            <li>Wheezing, difficulties in breathing or shortness of breath. </li><br>
            <blockquote class="font-medium">
                <p>Let a health worker know immediately if you experience any of these side effects.</p>
                <p>Severe side effects, while very rare, are most likely to appear in the first 30 minutes after being
                    vaccinated.</p>
                <p>Your stay in the observation area means qualified help is on hand in the unlikely event that
                    you do experience any. </p>
            </blockquote>
        </ul>
    </div>
@endsection
