<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>COVID 19 VACCINATION RESERVATION</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">


</head>

<body class="bg-gray-200">

    <div class="relative w-full flex flex-col h-screen overflow-y-hidden">
        <!-- Desktop Header -->
        <header class="w-full items-center bg-white py-2 px-6 hidden sm:flex">
            <div class="w-1/2"></div>
            <div x-data="{ isOpen: false }" class="relative w-1/2 flex justify-end">
                <button @click="isOpen = !isOpen"
                    class="realtive z-10 w-12 h-12 rounded-full overflow-hidden border-4 border-gray-400 hover:border-gray-300 focus:border-gray-300 focus:outline-none">
                    <img src="https://source.unsplash.com/uJ8LNVCBjFQ/400x400">
                </button>
                <button x-show="isOpen" @click="isOpen = false"
                    class="h-full w-full fixed inset-0 cursor-default"></button>
                <div x-show="isOpen" class="absolute w-32 bg-white rounded-lg shadow-lg py-2 mt-16">
                    <!--   <a href="#" class="block px-4 py-2 account-link hover:text-white">reset</a>-->

                    <a href="{{ route('logout') }}" class="block px-4 py-2 account-link hover:text-white">Sign Out</a>
                </div>
            </div>
        </header>
        <!-- Mobile Header & Nav -->
        <header x-data="{ isOpen: false }" class="w-full bg-sidebar py-5 px-6 sm:hidden">
            <div class="flex items-center justify-between">
                <a href="{{ route('admin') }}"
                    class="text-black text-3xl font-semibold uppercase hover:text-gray-300">Admin</a>
                <button @click="isOpen = !isOpen" class="text-black text-3xl focus:outline-none">
                    <i x-show="!isOpen" class="fas fa-bars"></i>
                    <i x-show="isOpen" class="fas fa-times"></i>
                </button>
            </div>
        </header>
        <div>
            <table class="min-w-full bg-white">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="w-1/8 text-left py-3 px-6 uppercase font-semibold text-sm">Name</th>
                        <th class="w-1/8 text-left py-3 px-6 uppercase font-semibold text-sm">NIC</th>
                        <th class="text-left py-3 px-5 uppercase font-semibold text-sm">Yes/No</th>
                        <th class="text-left py-3 px-5 uppercase font-semibold text-sm">Allergies</th>

                    </tr>
                </thead>
                <tbody class="text-black-700">
                    <!--retrieve data from the database -->
                    @foreach ($allergies as $allergy)



                        <tr>
                            <td>{{ $allergy->name }}</td>
                            <td>{{ $allergy->NIC }}</td>
                            <td>{{ $allergy->allergies }}</td>
                            <td>{{ $allergy->textarea }}</td>

                        </tr>




                    @endforeach


                </tbody>
            </table>
        </div>

    </div>
    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
        integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</body>

</html>

</body>
