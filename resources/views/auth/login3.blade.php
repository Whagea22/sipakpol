<!DOCTYPE html>
<html lang="en">

<head>
    <title>SIPAKPOL</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{ url('public') }}/images2/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('public') }}/vendor2/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('public') }}/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('public') }}/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('public') }}/vendor2/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('public') }}/vendor2/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('public') }}/vendor2/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('public') }}/vendor2/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('public') }}/vendor2/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('public') }}/css2/util.css">
    <link rel="stylesheet" type="text/css" href="{{ url('public') }}/css2/main.css">
    <!--===============================================================================================-->
</head>

<body style="background-color: #666666;">

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form action="{{ url('login') }}" method="post" class="login100-form validate-form">
                    <span class="login100-form-title p-b-43">
                        Sistem Pengajuan Angka Kredit Internal Politap
                    </span>
                    <div class="row">
                        <div class="col-md-12">
                        </div>
                    </div>
                    @if(isset($message))
      				<div class="alert alert-danger">{{$message}}</div>
      				@endif
                    @csrf
                    <div class="wrap-input100 validate-input" data-validate="Diperlukan NIDN yang valid">
                        <input class="input100" type="text" name="userid">
                        <span class="focus-input100"></span>
                        <span class="label-input100">NIDN</span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Diperlukan Password">
                        <input class="input100" type="password" name="password">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Password</span>
                    </div>
                    <div class="flex-sb-m w-full p-t-3 p-b-32">
                        <div class="contact100-form-checkbox">
                            <input class="input-checkbox100" id="remember" type="checkbox" name="remember">
                            <label class="label-checkbox100" for="remember">
                                Remember me
                            </label>
                        </div>
                    </div>
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit">
                            Login
                        </button>
                    </div>
                </form>

                <div class="login100-more" style="background-image: url('public/images2/logo22.jpg');">
                </div>
            </div>
        </div>
    </div>



    <!--===============================================================================================-->
    <script src="{{ url('public') }}/vendor2/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="{{ url('public') }}/vendor2/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="{{ url('public') }}/vendor2/bootstrap/js/popper.js"></script>
    <script src="{{ url('public') }}/vendor2/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="{{ url('public') }}/vendor2/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="{{ url('public') }}/vendor2/daterangepicker/moment.min.js"></script>
    <script src="{{ url('public') }}/vendor2/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="{{ url('public') }}/vendor2/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="{{ url('public') }}/js2/main.js"></script>

</body>

</html>