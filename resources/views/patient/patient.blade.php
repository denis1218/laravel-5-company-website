@extends('master')
@section('style')
    <link href="dashboard/css/bootstrap.min.css" rel="stylesheet">
    <link href="dashboard/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="dashboard/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="dashboard/css/animate.css" rel="stylesheet">
    <link href="dashboard/css/style.css" rel="stylesheet">

    <link href="css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">

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
                    Patient Ragistration Form
                </h2>

                <form id="form" method="post" action="{{ url('/patient') }}" class="wizard-big">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <h1 >Doctor Available</h1>
                    <fieldset>
                        <h2>Select Doctor</h2>
                        <hr class="hr-line-dashed">
                        <div class="row">
                            <div class="col-lg-12">
                                <table class="table table-hover table-borderd table-striped">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Doctor Name</th>
                                        <th>Availability Time</th>
                                        <th>Max Patient Accept</th>
                                        <th>Registered Patients</th>
                                        <th>Select Doctor</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($doctor_list as $doctors)
                                    <tr>
                                        <td>{{ $doctors->id }}</td>
                                        <td>{{ $doctors->first_name }}</td>
                                        <td>{{ $doctors->start_work_time }}&nbsp;- &nbsp;{{ $doctors->end_work_time}}</td>
                                        <td>{{ $doctors->max_patient }}</td>
                                        <td>{{ $doctors->have_patient }}</td>
                                        <td>
                                            <div class="i-checks"><input type="radio"  value="{{ $doctors->id }}" name="FK_id_Doctor" id="FK_id_Doctor" required></div>
                                        </td>
                                    </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-lg-5">
                                <img id="preview"  style="border-radius: 20px;"/>
                            </div>
                        </div>
                    </fieldset>

                    <h1>Patient</h1>
                    <fieldset>
                        <h2>Patient Information</h2>
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <label>Full Name *</label>
                                    <input id="name" name="name" type="text" class="form-control required">
                                </div>

                                <div class="form-group">
                                    <label>Last Name *</label>
                                    <input id="lastname" name="lastname" type="text" class="form-control required">
                                </div>

                                <div class="form-group">
                                    <label>Gender &nbsp;&nbsp;&nbsp;</label>
                                    <label>  <div class="i-checks"><input type="radio"  value="male" name="gender"></div></i> Male </label>&nbsp;&nbsp;
                                    <label>  <div class="i-checks"><input type="radio"  value="female" name="gender"></div></i> Female </label>


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
                                    <textarea rows="5" id="address" name="address" type="text" class="form-control required"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="text-center">
                                    <div style="margin-top: 20px">
                                        <i class="fa fa-sign-in  text-success" style="font-size: 180px;color: #e5e5e5 "></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </fieldset>
                    <h1>Healths Problems</h1>
                    <fieldset>

                        <h2>Any treatment prior to this treatment?</h2>
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <div class="col-sm-10">
                                        <div class="i-checks"><label> <input type="checkbox" value="prior" name="problem_health[]"> <i></i>Prior Problem</label></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>

                        <h2>Allergy to Anesthitic drug </h2>
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <div class="col-sm-10">
                                        <div class="i-checks"><label> <input type="checkbox" value="Anesthitic" name="problem_health[]"> <i></i>Anesthitic Problem</label></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>

                        <h2>Other Health Problem</h2>
                        <div class="row" >
                            <div class="col-lg-7">
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-sm-6">
                                            <div class="i-checks"><label> <input type="checkbox" value="no" name="problem_health[]"> <i></i> No Problem</label></div>
                                            <div class="i-checks"><label> <input type="checkbox" value="Blood_Pressure" name="problem_health[]"> <i></i> Blood Pressure</label></div>
                                            <div class="i-checks"><label> <input type="checkbox" value="Diabetics" name="problem_health[]"> <i></i>Diabetics</label></div>
                                            <div class="i-checks"><label> <input type="checkbox"  value="Hepatitics" name="problem_health[]"> <i></i>Hepatitics</label></div>
                                            <div class="i-checks"><label> <input type="checkbox"  value="Bleeding_Problems" name="problem_health[]"> <i></i>Bleeding Problems</label></div>
                                            <div class="i-checks"><label> <input type="checkbox"  value="Jaundice" name="problem_health[]"> <i></i>Jaundice</label></div>
                                            <div class="i-checks"><label> <input type="checkbox"  value="Asthma" name="problem_health[]"> <i></i>Asthma</label></div>

                                        </div>
                                        <div class="col-sm-6">
                                            <div class="i-checks"><label> <input type="checkbox"  value="AIDS" name="problem_health[]"> <i></i>AIDS</label></div>
                                            <div class="i-checks"><label> <input type="checkbox"  value="Tuberculosis" name="problem_health[]"> <i></i>Tuberculosis </label></div>
                                            <div class="i-checks"><label> <input type="checkbox"  value="Allergy_to_Penicillin" name="problem_health[]"> <i></i>Allergy to Penicillin</label></div>
                                            <div class="i-checks"><label> <input type="checkbox"  value="Allergy_to_Sulpers" name="problem_health[]"> <i></i>Allergy to Sulpers</label></div>
                                            <div class="i-checks"><label> <input type="checkbox"  value="Allergy_to_Anaesthetic" name="problem_health[]"> <i></i>Allergy to Anaesthetic</label></div>
                                            <div class="i-checks"><label> <input type="checkbox"  value="Pregnency" name="problem_health[]"> <i></i>Pregnency</label></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>


@endsection

@section('script')

    <!-- Steps -->
    <script src="{{ asset('dashboard/js/plugins/staps/jquery.steps.min.js') }}"></script>

    <!-- Jquery Validate -->
    <script src="{{ asset('dashboard/js/plugins/validate/jquery.validate.min.js') }}"></script>

    <!-- Custom and plugin javascript -->
    <script src="{{ asset('dashboard/js/inspinia.js') }}"></script>
    <script src="{{ asset('dashboard/js/plugins/pace/pace.min.js') }}"></script>

    <!-- Date range picker -->
    <script src="{{ asset('dashboard/js/plugins/daterangepicker/daterangepicker.js') }}"></script>

    <!-- Select2 -->
    <script src="{{ asset('dashboard/js/plugins/select2/select2.full.min.js') }}"></script>
    <!-- Toastr script -->
    <script src="{{ asset('dashboard/js/plugins/toastr/toastr.min.js') }}"></script>
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
                    if (currentIndex === 3 && Number($("#age").val()) >= 18)
                    {
                        $(this).steps("next");
                    }
                    // Suppress (skip) "Warning" step if the user is old enough and wants to the previous step.
                    if (currentIndex === 2 && priorIndex === 5)
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
    <script type="text/javascript">
        $(function () {
            $('#form').submit(function (){
                // Display a success toast, with a title
                toastr.success('Without any options','Simple notification!')
            });
        })
@endsection