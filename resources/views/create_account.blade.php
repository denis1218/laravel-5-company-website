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
    <link href="dashboard/css/bootstrap.min.css" rel="stylesheet">
    <link href="dashboard/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="dashboard/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="dashboard/css/animate.css" rel="stylesheet">
    <link href="dashboard/css/style.css" rel="stylesheet">
    <link href="css/hover/hover-min.css" rel="stylesheet">
@endsection

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading"
         style="margin-left:1px;margin-top:-20px; margin-bottom: 10px;">
        <div class="col-md-2">
            <h2><a class="btn btn-primary hvr-float-shadow" style="height:65px; margin-left:30px;" href="/account"><i
                            class="fa fa-users" style="font-size: 30px; color:#ffcf1c ;"></i><br>List Of Accounts</a>
            </h2>
        </div>
        <div class="col-md-2">
            <h2><a class="btn btn-primary hvr-float-shadow" style="height:65px;" href="/account/create"><i
                            class="fa fa-user" style="color:#ffcf1c; font-size: 30px;"></i> <br/>Create Account</a></h2>
        </div>
    </div>


    <div class="col-lg-12">
        <div class="ibox">
            <div class="ibox-title">
                <h5>Account Registration</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-wrench"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#">Config option 1</a>
                        </li>
                        <li><a href="#">Config option 2</a>
                        </li>
                    </ul>
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">

                <form id="form" method="POST" action="/account" class="wizard-big">
                    <h2>Account Information</h2>
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label>Username *</label>
                                <input id="" name="username" type="text" class="form-control required">
                            </div>
                            <div class="form-group">
                                <label>Password *</label>
                                <input id="password" name="password" type="password" class="form-control required" onkeyup='check();' >
                            </div>
                            <div class="form-group">
                                <label>Confirm Password *</label>
                                <input id="confirm_password" name="confirm_password" type="password" class="form-control required" onkeyup='check();' >
                            </div>
                            <span id='message'></span>
                            <div class="form-group">
                                <label>First name *</label>
                                <input id="name" name="firstname" type="text" class="form-control required">
                            </div>
                            <div class="form-group">
                                <label>Last name *</label>
                                <input id="surname" name="lastname" type="text" class="form-control required">
                            </div>
                            <div class="form-group">
                                <label>Gender &nbsp;&nbsp;&nbsp;</label>
                                <label> <input type="radio" value="male" name="gender"> <i></i> Male </label>&nbsp;&nbsp;
                                <label> <input type="radio" value="female" name="gender"> <i></i> Female </label>
                            </div>
                            <div class="form-group">
                                <label>Role *</label>
                                <select class="form-control" required name="role">
                                    <option value="" disabled>Select Department</option>
                                    <option value="writer">Writer</option>
                                    <option value="reader">Reader</option>
                                    <option value="editor">Editor</option>
                                    <option value="admin">Admin</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Department *</label>
                                <select class="form-control" required name="department">
                                    <option value="" disabled>Select Department</option>
                                    <option value="doctor">Doctor</option>
                                    <option value="finance">Finance</option>
                                    <option value="reception">Reception</option>
                                    <option value="owner">Owner</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Age *</label>
                                <input id="age" name="age" type="number" class="form-control required">
                            </div>
                            <div class="form-group">
                                <label>Phone *</label>
                                <input id="" name="phone" type="text" class="form-control required">
                            </div>
                            <div class="form-group">
                                <label>Email *</label>
                                <input id="" name="email" type="text" class="form-control required email">
                            </div>
                            <div class="form-group">
                                <label>Address *</label>
                                <input id="" name="address" type="text" class="form-control">
                            </div>
                            <input id="" name="" type="submit" class="btn btn-primary"/>
                            <input id="" name="reset" type="reset" class="btn btn-white"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection


@section('script')
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