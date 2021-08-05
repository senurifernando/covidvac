@extends('layouts.app')

@section('content')

<!-- Gallery -->

<div>

    <div class=" grid grid-rows-2 grid-flow-col gap-8 p-7">
        <div class="grid grid-flow-col">

            <ul class="list-disc list-inside">
                <img src="{{ URL('images/sp.jpg') }}" alt="" class="rounded">
                <li>Name: Sputnik</li>
                <li>Manufacturar: The Gamaleya National Research Center of Epidemiology and Microbiology and (RDIF)
                </li>
                <li>No of Doses: 2 doses, 21 days apart</li>
                <li>Efficacy: 97.6%</li>
                <li>Recommended for: Over the age of 18</li>
            </ul>
        </div>
        <div class="grid grid-flow-col">

            <ul class="list-disc list-inside">
                <img src="{{ URL('images/vac.jpeg') }}" alt="" class="rounded">
                <li>Name: Sinovac</li>
                <li>Manufacturar: China National Pharmaceutical group</li>
                <li>No of Doses: 2 doses, 14 days apart</li>
                <li>Efficacy: 51%</li>
                <li>Recommended for: Aged 18 and above</li>
            </ul>
        </div>


        <div class="grid grid-flow-col">
            <ul class="list-disc list-inside">

                <img src="{{ URL('images/modernaa.jpg') }}" alt="" class="rounded">
                <li>Name: Moderna</li>
                <li>Manufacturar: ModernaTX, Inc</li>
                <li>No of Doses: 2 doses, 28 days apart</li>
                <li>Efficacy: 94.1%</li>
                <li>Recommended for: 12 years of age and older</li>
            </ul>

        </div>
        <div class="grid grid-flow-col">
            <ul class="list-disc list-inside">
                <img src="{{ URL('images/syno.png') }}" alt="" class="rounded">
                <li>Name: Synopharm</li>
                <li>Manufacturar: Beijing institute of Biological Products</li>
                <li>No of Doses: 2 doses, 21 days apart</li>
                <li>Efficacy: 79.1%</li>
                <li>Recommended for: Aged 18 and above</li>
            </ul>
        </div>


        <div class="grid grid-flow-col">

            <ul class="list-disc list-inside">
                <img src="{{ URL('images/pfi.jpg') }}" alt="" class="rounded">
                <li>Name: Pfizer</li>
                <li>Manufacturar: Pfizer, Inc, and BioTech </li>
                <li>No of Doses: 2 doses, 21 days apart</li>
                <li>Efficacy: 88%</li>
                <li>Recommended for: 12 years of age and older</li>
            </ul>
        </div>


        <div class="grid grid-flow-col">

            <ul class="list-disc list-inside">
                <img src="{{ URL('images/a.png') }}" alt="" class="rounded">
                <li>Name: AstraZeneca</li>
                <li>Manufacturar: Oxford University and AstraZeneca</li>
                <li>No of Doses: 2 doses, four to 12 weeks apart</li>
                <li>Efficacy: 93%</li>
                <li>Recommended for: Adults 18 and older</li>
            </ul>
        </div>


    </div>
</div>
@endsection