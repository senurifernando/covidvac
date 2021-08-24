<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"
        integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous"></script>

    <title>COVID 19 VACCINATION RESERVATION - createAppointment</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://code.jquery.com/ui/1.13.0-alpha.1/themes/smoothness/jquery-ui.css" rel="stylesheet">

    <script>
        $(document).ready(function() {
            var minDate = new Date();
            $("#date").datepicker({
                // showAnim: 'drop',
                numberOfMonth: 1,
                minDate: minDate,
                dateFormat: 'dd/mm/yy',
                onClose: function(selectedDate) {
                    ("option", "minDate", selectedDate)
                }

            });
        });
    </script>

</head>


<body class="bg-gray-400">

    <div class="flex justify-center ">
        <div class="w-3/12 bg-white p-6 rounded-lg m-5 shadow-2xl">
            <form action="{{ route('createAppointment') }}" method="POST">
                @csrf
                <h2 class="text-4xl font-normal leading-normal mt-0 mb-2 text-pink-800">Create Appointment</h2>
                <div class=" md:flex md:items-center mb-6 h-10">
                    <label class=" px-6 uppercase font-semibold text-sm">Date :</label>
                    <input type="text" class="bg-gray-300 rounded-lg" name="date" id="date">
                </div>
                <div class="md:flex md:items-center mb-6">
                    <label class="  px-6 uppercase font-semibold text-sm">Time :</label>
                    <input type="time" class="bg-gray-300 rounded-lg" name="time">
                </div>
                <div class="md:flex md:items-center mb-6">
                    <label class=" px-6 uppercase font-semibold text-sm">Location :</label>
                    <input type="text" class="bg-gray-300 rounded-lg" name="location">
                </div>
                <div class="md:flex md:items-center mb-6">
                    <label class=" px-6 uppercase font-semibold text-sm">Patient NIC:</label>
                    <input type="text" class="bg-gray-300 rounded-lg" name="patientNIC">

                </div>
                <div class="mb-6 px-6">
                    <button
                        class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <!-- AlpineJS
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>-->
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
        integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</body>

</html>
