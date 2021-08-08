<!doctype html>
    <html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>Appointment form</title>
        <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
        <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
        <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
        <style>body {
    color: #000;
    overflow-x: hidden;
    height: 100%;
    background-image: URL("images/bacgroud2.jpg");
    background-repeat: no-repeat;
    background-size: 100% 100%
}


.card {
    padding: 30px 40px;
    margin-top: 60px;
    margin-bottom: 60px;
    border: none ;
    box-shadow: 0 6px 12px 0 rgba(0, 0, 0, 0.2)
}



.form-control-label {
    margin-bottom: 0
}

input,
textarea,
button {
    padding: 8px 15px;
    border-radius: 5px ;
    margin: 5px 0px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    font-size: 18px ;
    font-weight: 300
}

input:focus,
textarea:focus {
    -moz-box-shadow: none ;
    -webkit-box-shadow: none ;
    box-shadow: none ;
    border: 1px solid #00BCD4;
    outline-width: 0;
    font-weight: 400
}

.btn-block {
    text-transform: uppercase;
    font-size: 15px ;
    font-weight: 400;
    height: 43px;
    cursor: pointer
}

.btn-block:hover {
    color: #fff 
}

button:focus {
    -moz-box-shadow: none ;
    -webkit-box-shadow: none ;
    box-shadow: none ;
    outline-width: 0
}</style>
        </head>
        <body>
        <div class="container-fluid px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
            <h1>Appointment Form</h1>
            
            <div class="card">

                <form class="form-card" onsubmit="event.preventDefault()">

                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Nic Number<span class="text-danger"> </span></label> <input type="text" id="nic" name="nic" placeholder="" > </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Province<span class="text-danger"> </span></label> <input type="text" id="province" name="province" > </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">District<span class="text-danger"> </span></label> <input type="text" id="district" name="district" > </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Injection Name<span class="text-danger"> </span></label> <input type="text" id="injname" name="injname"  > </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Dose Number<span class="text-danger"> </span></label> <input type="text" id="dosenum" name="dosenum" > </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Date<span class="text-danger"> </span></label> <input type="text" id="date" name="date"  > </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Time<span class="text-danger"> </span></label> <input type="text" id="time" name="time" > </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Location<span class="text-danger"> </span></label> <input type="text" id="location" name="location" > </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Email<span class="text-danger"> </span></label> <input type="text" id="email" name="email" > </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Phone number<span class="text-danger"> </span></label> <input type="text" id="mob" name="mob" > </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-12 flex-column d-flex"> <label class="form-control-label px-3">If you have special disease, Mention Here<span class="text-danger"> </span></label> <input type="text" id="answer" name="answer"> </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="form-group col-sm-6"> <button type="submit" class="btn-block btn-primary">Sibmit</button> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
                               
                                </body>
                            </html>
