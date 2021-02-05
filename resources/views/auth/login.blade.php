<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="masuk/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="masuk/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="masuk/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="masuk/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="masuk/vendor/animate/animate.css">
    <!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="masuk/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="masuk/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="masuk/vendor/select2/select2.min.css">
    <!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="masuk/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="masuk/css/util.css">
    <link rel="stylesheet" type="text/css" href="masuk/css/main.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
</head>
<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-form-title" style="background-image: url(masuk/images/bg-01.jpg);">
                    <span class="login100-form-title-1">
                     Login Aplikasi
                 </span>
             </div>
             <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                    <span class="label-input100">Username</span>
                    <input required class="input100" type="text" name="username" placeholder="Enter username">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
                    <span class="label-input100">Password</span>
                    <input class="input100 pw" type="password" name="password" required autocomplete="current-password" placeholder="Enter password">
                    <span class="focus-input100"></span>
                </div>

                <div class="flex-sb-m w-full p-b-30">
                    <div class="contact100-form-checkbox">
                        <input class="input-checkbox100 check" id="ckb1" type="checkbox">
                        <label class="label-checkbox100" for="ckb1">
                            Lihat Sandi
                        </label>
                    </div>

                        <!-- <div>
                           @if (Route::has('password.request'))
                           <a class="txt1" href="{{ route('password.request') }}">
                            {{ __('Lupa Password?') }}
                        </a>
                        @endif
                    </div> -->
                    <div>
                     @if (Route::has('password.request'))
                     <a class="txt1" href="{{ route('register') }}">
                        Belum Punya Akun?
                    </a>
                    @endif
                </div>
            </div>

            <div class="container-login100-form-btn">
                <button class="login100-form-btn">
                    Login
                </button>
            </div>
        </form>
    </div>
</div>
</div>

<!--===============================================================================================-->
<script src="masuk/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="masuk/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="masuk/vendor/bootstrap/js/popper.js"></script>
<script src="masuk/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="masuk/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="masuk/vendor/daterangepicker/moment.min.js"></script>
<script src="masuk/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="masuk/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @include('sweet::alert')
<script src="masuk/js/main.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
      var cek = $('.check').val();
      $('.check').click(function() {
        if ($(this).is(':checked')) {
          $('.pw').attr('type', 'text');
      } else {
          $('.pw').attr('type', 'password');
      }
  });
  });
</script>
</body>
</html>