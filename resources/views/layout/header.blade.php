<!DOCTYPE html>
<html>
<!-- Mirrored from webapplayers.com/inspinia_admin-v2.3/dashboard_2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Sep 2015 13:12:22 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>HK | Clinic</title>
    <link href="{{ asset('dashboard/css/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet"/>
    <link href="{{ asset('dashboard/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/css/plugins/steps/jquery.steps.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery-ui.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/css/plugins/select2/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/css/plugins/iCheck/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/css/plugins/clockpicker/clockpicker.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/hover/hover-min.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/css/plugins/toastr/toastr.min.css') }}" rel="stylesheet">

    <script src="{{ asset('js/responsiveImg.js') }}"></script>

    {{-- calender style link --}}
    @yield('style')
    <style type="text/css">
        body.fr{
            font-family: "B Yekan";
        }

        input[type=number],
        input[type=date],
        input[type=time],
        input[type=email],
        input[type=color],
        input[type=phone],
        select[type=text],
        textarea[type=text],
        select,
        input[type=text]{
            border: 1.5px solid #56d9ba;
            -webkit-box-shadow:
                    inset 0 0 8px  rgba(0,0,0,0.1),
                    0 0 16px rgba(0,0,0,0.1);
            -moz-box-shadow:
                    inset 0 0 8px  rgba(0,0,0,0.1),
                    0 0 16px rgba(0,0,0,0.1);
            box-shadow:
                    inset 0 0 8px  rgba(0,0,0,0.1),
                    0 0 16px rgba(0,0,0,0.1);
            padding: 15px;
            background: rgba(255,255,255,0.5);
            margin: 0 0 10px 0;
        }

    </style>


</head>
