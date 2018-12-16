@extends('master')
@section('style')
    <link href="{{ asset('dashboard/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/css/plugins/iCheck/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/css/style.css') }}" rel="stylesheet">

    <link href="{{ asset('css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css') }}" rel="stylesheet">

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



    <div class="col-lg-12 ">
        <div class="ibox">
            <div class="ibox-title">
                <h5>{{trans('file.pr_form')}}</h5>

            </div>
            <div class="ibox-content">
                <h2>
                    {{trans('file.pr_form')}}
                </h2>

                <form id="form" method="post" action="{{ url('/patient') }}" class="wizard-big">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <h1 >{{trans('file.doctor_available')}}</h1>
                    <fieldset>
                        <h2>{{trans('file.select_doctor')}}</h2>
                        <hr class="hr-line-dashed">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive">
                                <table class="table table-hover table-borderd table-striped">
                                    <thead>
                                    <tr>
                                        <th>{{trans('file.id')}}</th>
                                        <th>{{trans('file.doctor_name')}}</th>
                                        <th>{{trans('file.availability_time')}}</th>
                                        <th>{{trans('file.max_patient')}}</th>
                                        <th>{{trans('file.registered_patient')}}</th>
                                        <th>{{trans('file.select_doctor')}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($doctor_list as $doctors)
                                    <tr>
                                        <td>{{ $doctors->id }}</td>
                                        <td>{{ $doctors->first_name }}</td>
                                        <td>{{ $doctors->start_work_time }}&nbsp;- &nbsp;{{ $doctors->end_work_time}}</td>
                                        <td>{{ $doctors->max_patient }}</td>
                                        <td>{{ count($doctors->patient) }}</td>
                                        <td>
                                            <div class="i-checks"><input type="radio"  value="{{ $doctors->id }}" name="FK_id_Doctor" id="FK_id_Doctor" required></div>
                                        </td>
                                    </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <img id="preview"  style="border-radius: 20px;"/>
                            </div>
                        </div>
                    </fieldset>

                    <h1>{{trans('file.patient')}}</h1>
                    <fieldset>
                        <h2>{{trans('file.patient_information')}}</h2>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>{{trans('file.first_name')}} *</label>
                                    <input id="name" name="name" type="text" class="form-control required" placeholder="firstname">
                                </div>

                                <div class="form-group">
                                    <label>{{trans('file.last_name')}} *</label>
                                    <input id="lastname" name="lastname" type="text" class="form-control required" placeholder="last name">
                                </div>


                                <div class="form-group">
                                    <label>Date Appointment *</label>
                                    <input id="appointment" name="appointment"  type="date" class="form-control" required style="width: 80%">
                                    <input type="button" class="btn btn-primary" id="today" style="float:right;margin-top: -33px;" value="Today">
                                </div>

                                <div class="form-group">
                                    <div class="col-xs-12"><label style="margin-left: -14px;">Time Appointment *</label></div>
                                    <div class="col-xs-12">
                                        <div class="col-xs-2" style="margin-left: -30px;"><input type="button" class="btn btn-primary" id="now"  value="Now"></div>
                                        <div class="col-xs-4"><label for="cur"><input id="cur" name="time" type="number" class="form-control" max="24" min="1" required></label></div>
                                        <div class="col-xs-2" style="margin-top: -10px;"><label style="margin-left: 20px;">AM</label><div class="i-checks"><label class="checkbox-inline"><input id="meridiem" checked value="AM" name="meridiem" type="radio" class="form-control required"></label></div></div>
                                        <div class="col-xs-2" style="margin-top: -10px;"><label style="margin-left: 20px;">PM</label><div class="i-checks"><label class="checkbox-inline"><input id="meridiem" value="PM" name="meridiem" type="radio" class="form-control required"></label></div></div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>{{trans('file.gender')}}&nbsp;&nbsp;&nbsp;</label>
                                    <label>  <div class="i-checks"><input type="radio" checked value="male" name="gender"></div></i> {{trans('file.male')}} </label>&nbsp;&nbsp;
                                    <label>  <div class="i-checks"><input type="radio"  value="female" name="gender"></div></i> {{trans('file.female')}} </label>
                                </div>

                                <div class="form-group">
                                    <label>{{trans('file.age')}} *</label>
                                    <input id="age" name="age" type="number" maxlength="2" max="99" class="form-control" placeholder="Age">
                                </div>

                            </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>{{trans('file.phone')}} *</label>
                                        <input id="phone" name="phone" type="phone" maxlength="10" class="form-control" required placeholder="Phone">
                                    </div>
                                <div class="form-group">
                                    <label>Job *</label>
                                    <input id="job" name="job" type="text" class="form-control" placeholder="Job">
                                </div>
                                <div class="form-group">
                                    <label>Education level *</label>
                                    <select name="education" class="form-control" required>
                                        <option selected disabled >Select Education Level</option>
                                        <option>Illiterate</option>
                                        <option>School Student</option>
                                        <option>Graduated</option>
                                        <option>Diploma</option>
                                        <option>Master</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>{{trans('file.address')}} *</label>
                                    <textarea rows="5" id="address" name="address" type="text" class="form-control required" placeholder="Address"></textarea>
                                </div>
                                </div>
                        </div>

                    </fieldset>
                    <h1>{{trans('file.health_problem')}}</h1>
                    <fieldset>

                        <h2>{{trans('file.p_treatment')}}?</h2>
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <div class="col-sm-10">
                                        <div class="i-checks"><label> <input type="checkbox" value="prior" name="problem_health[]"> <i></i>{{trans('file.p_problem')}}</label></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>

                        <h2>{{trans('file.allergy')}} </h2>
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <div class="col-sm-10">
                                        <div class="i-checks"><label> <input type="checkbox" value="Anesthitic" name="problem_health[]"> <i></i>{{trans('file.anesthetic_problem')}}</label></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>

                        <h2>{{trans('file.o_problem')}}</h2>
                        <div class="row" >
                            <div class="col-lg-7">
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-sm-6">
                                            <div class="i-checks"><label> <input type="checkbox" value="no" name="problem_health[]" checked> <i></i> No Problem</label></div>
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
                toastr.info('Successfully Inserted !');
            });
        });
        </script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#today').click(function(){
                var d = new Date();
                var dt=d.toISOString().format('yyyy-mm-dd').slice(0,10);
                $('#appointment').val(dt);
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#now').click(function(){
                var t = new Date();
                var td=t.getHours();
                var ft=td%12;
                $('#cur').val(ft);
            });
        });
    </script>
@endsection