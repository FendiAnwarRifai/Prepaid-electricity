<!DOCTYPE html>
<html lang="en">
<head>
    <title>Buat Akun</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="daftar/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="daftar/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="daftar/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="daftar/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="daftar/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="daftar/vendor/animate/animate.css">
    <!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="daftar/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="daftar/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="daftar/vendor/select2/select2.min.css">
    <!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="daftar/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="daftar/css/util.css">
    <link rel="stylesheet" type="text/css" href="daftar/css/main.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
</head>
<body style="background-color: #999999;">

    <div class="limiter">
        <div class="container-login100">
            <div class="login100-more" style="background-image: url('daftar/images/bg-01.jpg');"></div>

            <div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
                <form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
                    @csrf
                    <span class="login100-form-title p-b-59">
                        Buat Akun
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Name is required">
                        <span class="label-input100">Full Name</span>
                        <input id="name" type="text" class="input100 @error('name') is-invalid @enderror" name="name" required autocomplete="name" placeholder="Name...">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        <span class="label-input100">Email</span>
                        <input class="input100 @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email addess...">
                        @error('email')
                        <strong style="color: red;">Warning!! Email Sudah Digunakan</strong>
                        @enderror
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Username is required">
                        <span class="label-input100">Username</span>
                        <input class="input100" type="text" name="username" placeholder="Username...">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
                        <span class="label-input100">Password</span>
                        <input id="password" type="password" class="pw input100 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="*************">
                        @error('password')
                        <strong style="color: red;">Konfirmasi kata sandi tidak cocok</strong>
                        
                        @enderror
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Repeat Password is required">
                        <span class="label-input100">Repeat Password</span>
                        <input id="password-confirm" type="password" class="input100 pw" name="password_confirmation" required autocomplete="new-password"  placeholder="*************">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="flex-m w-full p-b-33">
                        <div class="contact100-form-checkbox">
                            <input class="input-checkbox100 check" id="ckb1" type="checkbox" name="pw">
                            <label class="label-checkbox100" for="ckb1">
                                <span class="txt1">
                                    Lihat Password
                                </span>
                            </label>
                        </div>

                        
                    </div>
                    <input type="hidden" name="role" value="user">
                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn">
                                Buat Akun
                            </button>
                        </div>

                        <a href="/" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
                            Login
                            <i class="fa fa-long-arrow-right m-l-5"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <!--===============================================================================================-->
    <script src="daftar/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="daftar/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="daftar/vendor/bootstrap/js/popper.js"></script>
    <script src="daftar/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="daftar/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="daftar/vendor/daterangepicker/moment.min.js"></script>
    <script src="daftar/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="daftar/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="daftar/js/main.js"></script>
    <!--===============================================================================================-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @include('sweet::alert')
    <!--===============================================================================================-->
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