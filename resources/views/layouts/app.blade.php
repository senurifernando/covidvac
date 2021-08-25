<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>COVID 19 VACCINATION RESERVATION</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.2/sweetalert2.min.css"
        integrity="sha512-rogivVAav89vN+wNObUwbrX9xIA8SxJBWMFu7jsHNlvo+fGevr0vACvMN+9Cog3LAQVFPlQPWEOYn8iGjBA71w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Custom styles for tables
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->
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
            <li>
                <a href="{{ route('receivedAppointment') }}" class="p-3">Received Appointment</a>
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

                <a href="{{ route('loginpermission') }}" class="p-6">Login</a>

            </li>
            <li>
                <a href="{{ route('registerpermission') }}" class="p-6">Register</a>
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
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.2/sweetalert2.min.js"
            integrity="sha512-2sjxi4MoP9Gn7QE0NhJdxOFVMK/qYsZO6JnO6pngGvck8p5UPwFX2LV5AsAMOQYgvbzMmki6sIqJ90YO3STAnA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script> -->
        <!-- <script>
        jQuery(document).ready(function($) {
            //jQuery Functionality
            $('#example').DataTable();
            $(document).on('click', '#example tbody tr button', function() {
                // $("#modaldata tbody tr").html("");
                //$("#modaldata tbody tr").html($(this).closest("tr").html());
                //$("#exampleModal").modal("show");
            });
        });
        </script> -->
    </footer>
    @yield('content')

</body>


</html>