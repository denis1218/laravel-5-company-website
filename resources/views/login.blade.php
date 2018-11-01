<!DOCTYPE html>
<html>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.3/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Sep 2015 13:12:22 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>HK | Login</title>

    <link href="{{ asset('dashboard/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/css/style.css') }}" rel="stylesheet">

    <style>
        .background-image {
            background: url("img/back.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }
        .rememberme
        {
            margin-top: 5px;
            margin-left: 5px;
        }
    </style>

</head>

<body class="background-image">
<div class="row">
    <div class="col-lg-6"></div>
    <div class="col-lg-6">

        <div class="middle-box text-center loginscreen animated fadeInDown" style="margin-top: 100px;">
            <div style="">
                <div>
                    <img src="/img/Dentaa3.png" width="650px" class="img-responsive" alt="">
                </div>
                <h3>Welcome to HK Clinic</h3>

                @if(isset($value))
                    <div class="alert alert-danger" role="alert">
                        {{ $value }}
                    </div>
                @endif
                <form class="m-t" role="form" method="POST" action="{{ route('login') }}">
                    {{--@csrf--}}

                    <div class="form-group">
                        <input id="email" type="email" placeholder="Email address" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                        {{--@if ($errors->any())--}}
                            {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong class="">{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
                        {{--@endif--}}

                    </div>
                    <div class="form-group">
                        <input id="password" placeholder="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                        {{--@if ($errors->has('password'))--}}
                            {{--<span class="invalid-feedback alert alert-danger" role="alert">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                        {{--@endif--}}

                    </div>

                    <button type="submit" class="btn btn-block btn-success">
                        {{ __('Login') }}&nbsp;<i class="fa fa-sign-in"></i>
                    </button>

                    {{--<div class="form-check pull-left rememberme">--}}
                        {{--<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

                        {{--<label class="form-check-label" for="remember">--}}
                            {{--{{ __('Remember Me') }}--}}
                        {{--</label>--}}
                    {{--</div>--}}

                </form>
            </div>
        </div>
    </div>
<div>
    <div>

        <!-- Mainly scripts -->
        <script src="{{ asset('js/jquery-2.1.1.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    </div>
</div>
</body>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.3/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Sep 2015 13:12:22 GMT -->
</html>
