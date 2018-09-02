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


@endsection

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading" style="margin-top:-20px; margin-bottom: 10px;">
        <div class="col-md-2">
            <h2><a class="btn btn-primary" style="height:70px; width:155px" href="/account"><i class="fa fa-users"  style="font-size: 30px; color:#ff9f00 ;"></i><br>List Of Accounts</a></h2>
        </div>
        <div class="col-md-2">
            <h2><a class="btn btn-primary" style="height:70px; margin-left:25px;" href="/create_account"><i class="fa fa-user" style="color:#ffc000; font-size: 30px;"></i> <br/>Create Account</a></h2>
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

                <form id="form" method="post" class="wizard-big">

                    <h1>Account</h1>
                    <fieldset>
                        <h2>Account Information</h2>
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <label>Username *</label>
                                    <input id="userName" name="userName" type="text" class="form-control required">
                                </div>
                                <div class="form-group">
                                    <label>Password *</label>
                                    <input id="password" name="password" type="text" class="form-control required">
                                </div>
                                <div class="form-group">
                                    <label>Confirm Password *</label>
                                    <input id="confirm" name="confirm" type="text" class="form-control required">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="text-center">
                                    <div style="margin-top: 20px">
                                        <i class="fa fa-sign-in" style="font-size: 180px;color: #e5e5e5 "></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <h1>Profile</h1>
                    <fieldset>
                        <h2>Profile Information</h2>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>First name *</label>
                                    <input id="name" name="name" type="text" class="form-control required">
                                </div>
                                <div class="form-group">
                                    <label>Last name *</label>
                                    <input id="surname" name="surname" type="text" class="form-control required">
                                </div>
                                <div class="form-group">
                                    <label>Gender &nbsp;&nbsp;&nbsp;</label>
                                    <label> <input type="radio" value="option1" name="a"> <i></i> Male </label>&nbsp;&nbsp;
                                    <label> <input type="radio" value="option1" name="a"> <i></i> Female </label>
                                </div>
                                <div class="form-group">
                                    <label>Department *</label>
                                    <select class="form-control" required>
                                        <option value="">Select Department</option>
                                        <option value="1">Doctor</option>
                                        <option value="2">Receptionist</option>
                                        <option value="3">Finance</option>
                                        <option value="4">Admin</option>
                                        <option value="5">Other</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Age *</label>
                                    <input id="age" name="age" type="number" class="form-control required">
                                </div>
                                <div class="form-group">
                                    <label>Phonenumber *</label>
                                    <input id="phonenumber" name="text" type="text" class="form-control required">
                                </div>
                                <div class="form-group">
                                    <label>Email *</label>
                                    <input id="email" name="email" type="text" class="form-control required email">
                                </div>
                                <div class="form-group">
                                    <label>Address *</label>
                                    <input id="address" name="address" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <h1>Your Information</h1>
                    <fieldset>
                        <div class="row">
                            <div class="col-lg-5">
                                <table class="table table-bordered">
                                    <thead>
                                    <td><b>Info</b></td><td><b>Details</b></td>
                                    </thead>
                                    <tr>
                                        <td>P-ID:</td><td>P-223</td>
                                    </tr>
                                    <tr>
                                        <td>Name:</td><td>Ahamd</td>
                                    </tr>
                                    <tr>
                                        <td>Gender:</td><td>Male</td>
                                    </tr>
                                    <tr>
                                        <td>Department:</td><td>Doct</td>
                                    </tr>
                                    <tr>
                                        <td>Age:</td><td>25</td>
                                    </tr>
                                    <tr>
                                        <td>Phone:</td><td>0780552233</td>
                                    </tr>
                                    <tr>
                                        <td>Address:</td><td>Carte Char, Pole Sourkhe, Kabul, Afghanistan</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </fieldset>

                    <h1>Finish</h1>

                    <fieldset>

                        <h3></h3>
                        <div class="col-lg-5">
                            <div class="text-center">
                                <div style="margin-top: 10px">
                                    <i class="fa fa-clock-o" style="font-size: 180px;color: #5be560 "></i>
                                </div>
                                <h3>Account Successfully Created!</h3>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>


@endsection


@section('script')

    <!-- Steps -->
    <script src="dashboard/js/plugins/staps/jquery.steps.min.js"></script>

    <!-- Jquery Validate -->
    <script src="dashboard/js/plugins/validate/jquery.validate.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="dashboard/js/inspinia.js"></script>
    <script src="dashboard/js/plugins/pace/pace.min.js"></script>

    <script>
        $(document).ready(function(){
            $("#wizard").steps();
            $("#form").steps({
                bodyTag: "fieldset",
                onStepChanging: function (event, currentIndex, newIndex)
                {
                    // Always allow going backward even if the current step contains invalid fields!
                    if (currentIndex > newIndex)
                    {
                        return true;
                    }

                    // Forbid suppressing "Warning" step if the user is to young
                    if (newIndex === 4 && Number($("#age").val()) < 18)
                    {
                        return false;
                    }

                    var form = $(this);

                    // Clean up if user went backward before
                    if (currentIndex < newIndex)
                    {
                        // To remove error styles
                        $(".body:eq(" + newIndex + ") label.error", form).remove();
                        $(".body:eq(" + newIndex + ") .error", form).removeClass("error");
                    }

                    // Disable validation on fields that are disabled or hidden.
                    form.validate().settings.ignore = ":disabled,:hidden";

                    // Start validation; Prevent going forward if false
                    return form.valid();
                },
                onStepChanged: function (event, currentIndex, priorIndex)
                {
                    // Suppress (skip) "Warning" step if the user is old enough.
//                    if (currentIndex === 3 && Number($("#age").val()) >= 18)
//                    {
//                        $(this).steps("next");
//                    }

                    // Suppress (skip) "Warning" step if the user is old enough and wants to the previous step.
                    if (currentIndex === 3 && priorIndex === 4)
                    {
                        $(this).steps("previous");
                    }
                },
                onFinishing: function (event, currentIndex)
                {
                    var form = $(this);

                    // Disable validation on fields that are disabled.
                    // At this point it's recommended to do an overall check (mean ignoring only disabled fields)
                    form.validate().settings.ignore = ":disabled";

                    // Start validation; Prevent form submission if false
                    return form.valid();
                },
                onFinished: function (event, currentIndex)
                {
                    var form = $(this);

                    // Submit form input
                    form.submit();
                }
            }).validate({
                errorPlacement: function (error, element)
                {
                    element.before(error);
                },
                rules: {
                    confirm: {
                        equalTo: "#password"
                    }
                }
            });
        });

    </script>



@endsection