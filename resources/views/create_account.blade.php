@extends('master')
@section('style')
    <style rel="stylesheet">
        ul.list-group:after {
            clear: both;
            display: block;
            content: "";
        }

        .list-group-item {
            float: left;
        }
    </style>
    <link href="{{asset('dashboard/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/css/plugins/iCheck/custom.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/hover/hover-min.css')}}" rel="stylesheet">
@endsection

@section('content')

    <div class="row wrapper border-bottom white-bg page-heading"
         style="margin-top:-20px; margin-bottom: 10px; margin-left:1px;">
        <div class="col-md-2">
            <h2><a class="btn btn-primary hvr-float-shadow" style="height:65px; margin-left: 30px; " href="/user">
                    <img src="{{ asset('img/user_list.png') }}" width="30px"/>
                    <br>{{trans('file.list_of_account')}}</a>
            </h2>
        </div>
        <div class="col-md-2">
            <h2><a class="btn btn-primary hvr-float-shadow" style="height:65px; margin-left:0px;" href="/user/create">
                    <img src="{{ asset('img/usre_icon.png') }}" width="30px"/>
                    <br/>{{trans('file.create_account')}}</a></h2>

        </div>

    </div>


    <div class="col-lg-12">
        <div class="ibox">
            <div class="ibox-title">
                <h5>{{trans('file.account_registration')}}</h5>

            </div>
            <div class="ibox-content">

                <form id="form" method="POST" action="/user" class="wizard-big">
                    <h2>{{trans('file.account_info')}}</h2>
                    <div class="row">
                        <div class="col-lg-5">
                            <span id='message'></span>
                            <div class="form-group">
                                <label>{{trans('file.first_name')}} *</label>
                                <input id="name" name="firstname" type="text" class="form-control required">
                            </div>
                            <div class="form-group">
                                <label>{{trans('file.last_name')}} *</label>
                                <input id="surname" name="lastname" type="text" class="form-control required">
                            </div>
                            <div class="form-group">
                                <label>{{trans('file.department')}} *</label>
                                <select class="form-control" required name="department">
                                    <option value="admin">{{trans('file.admin')}}</option>
                                    {{--<option value="doctor">{{trans('file.doctor')}}</option>--}}
                                    <option value="reception">{{trans('file.reception')}}</option>
                                    <option value="xray">{{trans('file.xray')}}</option>

                                </select>
                                <span class="text-warning">Doctor cannt't create account here!. for Doctor account go to doctor registeration</span>
                            </div>
                            <div class="form-group">
                                <label>{{trans('file.email')}} *</label>
                                <input id="" name="email" type="text" class="form-control required email">
                            </div>
                            <div class="form-group">
                                <label>{{trans('file.password')}} *</label>
                                <input id="password" name="password" type="password" class="form-control required" onkeyup='check();' >
                            </div>
                            <div class="form-group">
                                <label>{{trans('file.confirm_password')}} *</label>
                                <input id="confirm_password" name="confirm_password" type="password" class="form-control required" onkeyup='check();' >
                            </div>

                            <input id="" name="" type="submit" class="btn btn-primary" value="{{trans('file.submit')}}"/>
                            <input id="" name="reset" type="reset" class="btn btn-white" value="{{trans('file.reset')}}"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection


@section('script')
    <script src="{{ asset('dashboard/js/plugins/toastr/toastr.min.js') }}"></script>

    <script type="text/javascript">
        $(function () {
            $('#form').submit(function (){
                // Display a success toast, with a title
//                toastr.info('Successfully Inserted !');
                toastr.info('Successfully Inserted !',{timeOut: 7000});
            });
        });
    </script>

    <script>
        var check = function () {
            if (document.getElementById('password').value ==
                document.getElementById('confirm_password').value) {
                document.getElementById('message').style.color = 'green';
                document.getElementById('message').innerHTML = 'matching';
            } else {
                document.getElementById('message').style.color = 'red';
                document.getElementById('message').innerHTML = 'not matching';
            }
        }
    </script>

@endsection