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
    @endsection

@section('content')



    <div class="col-lg-12">
        <div class="ibox">
            <div class="ibox-title">
                <h5>Patient Registration</h5>
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
                <h2>
                    Validation Wizard Form
                </h2>
                <p>
                    This example show how to use Steps with jQuery Validation plugin.
                </p>

                <form id="form" action="#" class="wizard-big">
                    <h1>Patient</h1>
                    <fieldset>
                        <h2>Patient Information</h2>
                        <div class="row">
                            <div class="col-lg-8">
                                <button class="btn btn-success"><li class="fa fa-plus"></li>&nbsp;&nbsp;New Patient</button>
                                <button class="btn btn-success">Second Appointment</button>
                                <br/>
                                <br/>
                                <div class="form-group">
                                    <label>PID</label>
                                        <input type="text" class="form-control" placeholder="P-ID" value="P-333">

                                </div>
                                <div class="form-group">
                                    <label>Full Name *</label>
                                    <input id="name" name="name" type="text" class="form-control required">
                                </div>
                                <div class="form-group">
                                    <label>Gender &nbsp;&nbsp;&nbsp;</label>
                                    <label> <input type="radio" value="option1" name="a"> <i></i> Male </label>&nbsp;&nbsp;
                                    <label> <input type="radio" value="option1" name="a"> <i></i> Female </label>
                                </div>
                                <div class="form-group">
                                    <label>Age *</label>
                                    <input id="age" name="age" type="number" class="form-control required">
                                </div>
                                <div class="form-group">
                                    <label>Phone *</label>
                                    <input id="phone" name="phone" type="phone" class="form-control required">
                                </div>


                                <div class="form-group">
                                    <label>Address *</label>
                                    <input id="address" name="address" type="text" class="form-control required">
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
                    <h1>Appointment</h1>
                    <fieldset>
                        <h2>Take free time with doctor</h2>
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <label>Department *</label>
                                    <select class="form-control col-lg-5">
                                        <option value="1">Select Department</option>
                                        <option value="1">regular basis</option>
                                        <option value="2">Orthodontist</option>
                                        <option value="3">Oral and maxillofacial surgeon</option>
                                        <option value="4">Periodontist</option>
                                        <option value="5">Prosthodontist</option>
                                        <option value="5">Endodontist</option>
                                    </select>
                                </div>
                            <br/>
                                <div class="form-group">
                                    <label>Doctor name *</label>
                                    <select class="form-control col-lg-5">
                                        <option value="1">Select Doctor</option>
                                        <option value="1">Dr.Ahmad</option>
                                        <option value="2">Dr.Jalal</option>
                                        <option value="3">Dr.Omid</option>
                                        <option value="4">Dr.Mostafa</option>
                                        <option value="5">Dr.Hakim</option>
                                        <option value="5">Dr.Samim</option>
                                    </select>
                                </div>
                            </div>
                        <br/>
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <label>Best Free time </label>
                                    <select class="form-control col-lg-5" multiple="">
                                        <option>4:00AM to 5:00AM</option>
                                        <option>5:00AM to 6:00AM</option>
                                        <option>6:AM to 7:00AM</option>
                                        <option>1:00PM to 2:00PM</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="text-center">
                                    <div style="margin-top: 10px">
                                        <i class="fa fa-clock-o" style="font-size: 180px;color: #5be560 "></i>
                                    </div>
                                    <h3>Appointment</h3>
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <h1>Finish</h1>

                    <fieldset>
                        <h1>All information patient</h1>
                        <br/>
                        <br/>
                        <div class="col-lg-5">


                        <table>
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
                        <div class="col-lg-5">
                            <h1>Time Visite 10:35AM</h1>
                            <h1>After 35 Minites</h1>
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
                    if (newIndex === 3 && Number($("#age").val()) < 18)
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
                    if (currentIndex === 2 && Number($("#age").val()) >= 18)
                    {
                        $(this).steps("next");
                    }

                    // Suppress (skip) "Warning" step if the user is old enough and wants to the previous step.
                    if (currentIndex === 2 && priorIndex === 3)
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