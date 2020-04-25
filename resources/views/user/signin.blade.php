<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng Nhập Vào Hệ Thống HTVietNam</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('signinsignup/fonts/material-icon/css/material-design-iconic-font.min.css')}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('signinsignup/css/style.css')}}">
</head>

<body>

<div class="main">
    <!-- Sing in  Form -->
    <section class="sign-in">
        <div class="container">
            <div class="signin-content">
                <div class="signin-image">
                    <figure><img src="{{asset('signinsignup/images/signin-image.jpg')}}" alt="sing up image"></figure>
                    <a href="{{route('getSignUpPage')}}" class="signup-image-link">Đăng ký tài khoản mới</a>
                </div>

                <div class="signin-form">
                    <h2 class="form-title">Đăng Nhập</h2>
                    <form method="POST" class="register-form" id="login-form">
                        <b>
                            @if(count($errors)>0)
                                <div class="alert alert-danger" style="color: red">
                                    @foreach($errors->all() as $err)
                                        {{$err}}
                                    @endforeach
                                </div>
                            @endif
                            @if(Session::has('message'))
                                <div style="color: red">{{Session::get('message')}}</div>
                            @endif
                        </b>
                        @csrf
                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            @if(Session::has('email'))
                                <input type="email" name="email" id="email" placeholder="Địa chỉ email" required
                                       value="{{Session::get('email')}}"/>
                            @else
                                <input type="email" name="email" id="email" placeholder="Địa chỉ email" required
                                       value="{{old('email')}}"/>
                            @endif

                        </div>
                        <div class="form-group">
                            <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="password" id="your_pass" placeholder="Mật khẩu" required/>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="remember-me" id="remember-me" class="agree-term"/>
                            <label for="remember-me" class="label-agree-term"><span><span></span></span>Nhớ tài
                                khoản</label>
                        </div>
                        <div class="form-group form-button">
                            <input type="submit" name="signin" id="signin" class="form-submit" value="Đăng nhập"/>
                        </div>
                    </form>
                    <!-- <div class="social-login">
                        <span class="social-label">Or login with</span>
                        <ul class="socials">
                            <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                            <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                            <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                        </ul>
                    </div> -->
                </div>
            </div>
        </div>
    </section>

</div>

<!-- JS -->
<script src="{{asset('signinsignup/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('signinsignup/js/main.js')}}"></script>
</body>

</html>
