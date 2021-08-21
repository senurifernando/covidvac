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
                    <a href="#" class="block px-4 py-2 account-link hover:text-white">Account</a>

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
                        <th class="w-1/8 text-left py-3 px-4 uppercase font-semibold text-sm">Province</th>
                        <th class="w-1/8 text-left py-3 px-6 uppercase font-semibold text-sm">District</th>
                        <th class="text-left py-3 px-5 uppercase font-semibold text-sm">Phone</th>
                        <th class="text-left py-3 px-5 uppercase font-semibold text-sm">Email</th>
                        <th class="text-left py-3 px-5 uppercase font-semibold text-sm">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-black-700">
                    <!--retrieve data from the database -->
                    @foreach ($list as $item)


                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->NIC }}</td>
                            <td>{{ $item->province }}</td>
                            <td>{{ $item->district }}</td>
                            <td>{{ $item->phone }}</td>
                            <td>{{ $item->email }}</td>
                            <td>
                                <div>
                                    <!-- date, time and location is being given by the following form -->
                                    <button id="create"
                                        class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full">
                                        <a href="{{ route('createAppointment') }}"> Create appointment</a>
                                    </button>

                                    <!-- <button class="btn btn-success btn-sm rounded-0" type="button"
                                            data-toggle="tooltip" data-placement="top" title="Edit"><i
                                                class="fa fa-edit"></i></button>-->



                                    <body x-data="{showDeleteModal:false}"
                                        x-bind:class="{ 'model-open': showDeleteModal }" style="font-family:Roboto">

                                        <button @click={showDeleteModal=true} type="button"
                                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">Delete</Button>

                                        <div x-show="showDeleteModal" tabindex="0"
                                            class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed">
                                            <div @click.away="showDeleteModal = false"
                                                class="z-50 relative p-3 mx-auto my-0 max-w-full" style="width: 500px;">
                                                <div
                                                    class="bg-white rounded shadow-lg border flex flex-col overflow-hidden px-10 py-10">
                                                    <div class="text-center">
                                                        <span
                                                            class="material-icons border-4 rounded-full p-4 text-red-500 font-bold border-red-500 text-4xl">
                                                            close
                                                        </span>
                                                    </div>
                                                    <div class="text-center py-6 text-2xl text-gray-700">Are you sure ?
                                                    </div>
                                                    <div class="text-center font-light text-gray-700 mb-8">
                                                        Do you really want to delete these records? This process cannot
                                                        be
                                                        undone.
                                                    </div>
                                                    <div class="flex justify-center">
                                                        <button @click={showDeleteModal=false}
                                                            class="bg-gray-300 text-gray-900 rounded hover:bg-gray-200 px-6 py-2 focus:outline-none mx-1">Cancel</button>
                                                        <a href="/deleteRecord/{{ $item->id }}"
                                                            class="bg-red-500 text-gray-200 rounded hover:bg-red-400 px-6 py-2 focus:outline-none mx-1">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed bg-black opacity-50">
                                            </div>
                                        </div>
                                    </body>
                                    <!-- <button class="btn btn-danger btn-sm rounded-0" type="button"
                                            data-toggle="tooltip" data-placement="top" title="Delete"><i
                                                class="fa fa-trash"></i></button>-->





                                    <!-- <button
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                         <a href Edit
                                    </button>-->


                                </div>
                            </td>
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
