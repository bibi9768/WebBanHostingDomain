<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng Ký Tài Khoản Mới Tại HTVietNam</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('signinsignup/fonts/material-icon/css/material-design-iconic-font.min.css')}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('signinsignup/css/style.css')}}">
</head>

<body>

<div class="main">

    <!-- Sign up form -->
    <section class="signup">
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">Đăng ký tài khoản</h2>
                    <form method="POST" class="register-form" id="register-form">
                        <b>
                            @if(count($errors)>0)
                                <div class="alert alert-danger" style="color: red">
                                    @foreach($errors->all() as $err)
                                        {{$err}}
                                    @endforeach
                                </div>
                            @endif
                            @if(Session::has('flag'))
                                <div class="alert alert-{{Session::get('flag')}}"
                                     style="color: red">{{Session::get('message')}}</div>
                            @endif
                        </b>
                        @csrf
                        <div class="form-group">
                            <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="hoten" id="name" placeholder="Tên của bạn" required
                                   value="{{old('hoten')}}"/>
                        </div>
                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-email"></i></label>
                            <input type="email" name="email" id="email" placeholder="Email của bạn" required
                                   value="{{old('email')}}"/>
                        </div>
                        <div class="form-group">
                            <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="pass" id="pass" placeholder="Mật khẩu" required/>
                        </div>
                        <div class="form-group">
                            <label for="repass"><i class="zmdi zmdi-lock-outline"></i></label>
                            <input type="password" name="repass" id="repass" placeholder="Nhập lại mật khẩu" required/>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" required/>
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>Tôi đồng ý với
                                tất cả <a href="#" class="term-service">Điều khoản dịch vụ</a></label>
                        </div>
                        <div class="form-group form-button">
                            <input type="submit" name="signup" id="signup" class="form-submit" value="Đăng ký"/>
                        </div>
                    </form>
                </div>
                <div class="signup-image">
                    <figure><img src="{{asset('signinsignup/images/signup-image.jpg')}}" alt="sing up image"></figure>
                    <a href="{{route('getSignInPage')}}" class="signup-image-link">Tôi đã có tài khoản</a>
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
