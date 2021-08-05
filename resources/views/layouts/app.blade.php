<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>COVID 19 VACCINATION RESERVATION</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="bg-gray-300">

    <nav class="p-6 bg-white flex justify-between mb-0">
        <ul class="flex items-center">
            <li>
                <a href="{{ route('welcome') }}" class="p-3">Home</a>
            </li>
            <li>
                <a href="{{ route('guidelines') }}" class="p-3">General Guidelines</a>
            </li>
            <li>
                <a href="{{ route('vaccines') }}" class="p-3">Vaccines</a>
            </li>
            @auth
            <li>
                <a href="{{ route('takeAppointment') }}" class="p-3">Take Appointment</a>
            </li>
            @endauth
        </ul>

        <ul class="flex items-center">
            <!--

                        <li>
                            <a href="" class="p-6">SENNA</a>
                        </li>
                        <li>
                            <a href="" class="p-6">Logout</a>
                        </li>-->


            @guest
            <li>
                <a href="{{ route('login') }}" class="p-6">Login</a>
            </li>
            <li>
                <a href="{{ route('register') }}" class="p-6">Register</a>
            </li>

            @endguest

            @auth
            <li>
                <a href="{{ route('logout') }}" class="p-6">LOGOUT</a>
            </li>
            @endauth
        </ul>
    </nav>
    </nav>
    <footer class="fixed h-8 bg-gray-500 w-full bottom-0 flex items-center justify-center"> Laravel Group Project
    </footer>
    @yield('content')
</body>

</html>