@extends('master')
@section('style')


    <style rel="stylesheet">
        .font-m {
            font-size: 1.5em;
        }

        .font-b {
            font-size: 1.7em;
        }

        ul.list-group:after {
            clear: both;
            display: block;
            content: "";
        }

        .list-group-item {
            float: left;

        }

        .vl {
            border-left: 6px solid green;
            height: 500px;
        }

        /* CSS REQUIRED */
        .state-icon {
            left: -5px;
        }

        .list-group-item-primary {
            color: rgb(255, 255, 255);
            background-color: rgb(88, 198, 202);
        }

        /* DEMO ONLY - REMOVES UNWANTED MARGIN */
        .well .list-group {
            margin-bottom: 0px;
        }
    </style>
@endsection
@section('content')

    @include('part.nav_doctor')

    <br/>

    {{--personal information patient--}}
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Patient Information</h5>
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
                <div class="row">
                    <div class="alert alert-danger alert-dismissable col-md-12">
                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                        Patient have {{ $patient_in_treatment->problem_health }} problem health <a class="alert-link" href="#"></a>.
                    </div>
                </div>
                <div class="row" style="margin-left:-100px;">

                    <div class="row m-b-lg m-t-lg">

                        <div class="col-md-5">
                            <div class="profile-info">
                                <div class="">
                                    <div>
                                        <h2 class="no-margins font-b">
                                            {{ $patient_in_treatment->name }}
                                        </h2>
                                        <h4>ID: {{ $patient_in_treatment->id_patient }}</h4>
                                        <small style="font-size: 12px;">
                                            <span class="text-warning" style="font-size: 15px; font-weight: bold;">Problem Health : </span>
                                            {{ $patient_in_treatment->problem_health }}
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <table class="table small m-b-xs">
                                <tbody>
                                <tr>
                                    <td>
                                            <span class=""
                                                  style="font-size: 12px;">Gender:<b>&nbsp;{{ $patient_in_treatment->gender }}</b>&nbsp;<i
                                                        class="fa fa-male"></i></span>
                                    </td>
                                    <td>
                                            <span style="font-size: 12px;">Age:<b>&nbsp;{{ $patient_in_treatment->age }}</b>&nbsp;<i
                                                        class=""></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span style="font-size: 12px;">Doctor:<b>&nbsp;{{ $patient_in_treatment->doctor->first_name }}</b>&nbsp;<i
                                                    class="fa fa-user-md"></i></span>
                                    </td>
                                    <td>
                                        <span style="font-size: 12px;">Visited:<b>&nbsp;{{ $patient_in_treatment->status }}</b>&nbsp;<i
                                                    class=""></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span style="font-size: 12px;">Date Reg:<b>&nbsp;{{ $patient_in_treatment->created_at }}</b>&nbsp;<i
                                                    class="fa fa-calendar"></i></span>
                                    </td>
                                    <td>
                                              <span style="font-size: 12px;">First Visited Date :<b>&nbsp;{{ $patient_in_treatment->created_at }}</b>&nbsp;<i
                                                          class="fa fa-calendar"></i></span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- tabs of patient treatment --}}
    <div class="row" style="margin-right: 0px;margin-left:0PX;">
        <div class="col-lg-12">
            <div class="tabs-container">
                <ul class="nav nav-tabs" id="demoTabs">
                    <li class="active"><a data-toggle="tab" href="#tab-1">Past History</a></li>
                    <li class=""><a data-toggle="tab" id="test" href="#tab-2">Present History</a></li>
                </ul>

                <div class="tab-content">
                    {{-- panel tab 1 past history --}}
                    <div id="tab-1" class="tab-pane active">
                        <div class="panel-body">
                            <br>
                            @foreach($patient_in_treatment->treatment->sortByDesc('id') as $treats)
                                {{-- start for each here --}}
                                <div class="row shadow p-3 mb-5 rounded bg-info"
                                     table-exchange
                                     style=" padding-left:20px; border-radius: 5px;margin-left:10px;margin-right: 10px; font-size: 17px;">
                                    <strong>{{ $treats->visits }} \ &nbsp;&nbsp; <i class="fa fa-calendar"></i>&nbsp;
                                        Date : {{ \Carbon\Carbon::parse($treats->created_at)->diffForHumans() }}
                                    </strong>
                                    <h3 style="font-weight: bold"></h3>
                                </div>
                                <br>
                                <div class="row " style="margin-top:15px;margin-right:10px;margin-left:10px;">
                                    <div class="col-md-8">
                                        <table class="table table-striped " style="font-weight: bold; ">
                                            <tr>
                                                <td>Dental Defect :</td>
                                                <td>{{ $treats->dentaldefect }}</td>
                                                <td>Estimated Fee:</td>
                                                <td>{{ $treats->estimated_fee }}</td>
                                            </tr>
                                            <tr>
                                                <td>Treatment :</td>
                                                <td>{{ $treats->treatment }}</td>
                                                <td>Fee Paid :</td>
                                                <td>null</td>
                                            </tr>
                                            <tr>
                                                <td>Tooth Number :</td>
                                                <td>{{ $treats->teeth_number }}</td>
                                                <td>Tooth Position :</td>
                                                <td>{{ $treats->tooth_position }}</td>

                                            </tr>
                                            <tr>
                                                <td>Remaining Fee :</td>
                                                <td>null</td>
                                                <td>Have Xray :</td>
                                                <td>{{ $treats->have_xray }}</td>
                                            </tr>
                                            <tr>
                                                <td>Date Visited :</td>
                                                <td>{{ $treats->created_at }}</td>
                                                <td> status treatment</td>
                                                <td>{{ $treats->status_visits }}</td>
                                            </tr>
                                        </table>
                                        <div>
                                            <div><p><strong>Description:</strong>{{ $treats->description }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        @if($treats->status_visits == 'not complete')
                                            <a href="/operation/{{ $treats->id }}/edit/{{ $patient_id }}"
                                               class="btn btn-md btn-primary">Continue this treatment</a>
                                        @else
                                            <h4 class="text-info"> This treatment has been done !</h4>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    {{-- panel tab 2 new history --}}
                    <div id="tab-2" class="tab-pane">
                        <div class="panel-body"  style="padding-left: 60px;">
                            <br>
                            {{-- Header of title --}}
                            <div class="row  bg-info"
                                 style=" padding-left:20px; border-radius: 5px;margin-left:0px;margin-right: 10px;">
                                <h3 style="font-weight: bold;">Present History</h3>
                            </div>
                            <br>
                            {{--x-ray form--}}
                            <form action="/xray" method="post">
                                {{csrf_field()}}

                                <div class="row">
                                   <div class="col-sm-4">
                                    <h4 style="color:green">Is X-Ray Needed?</h4>
                                        <div class="input-group">


                                            <input type="radio" onchange="activation()" value="not" name="xray_status"
                                                   id="check" style="height: 20px;width:20px;">&nbsp; <strong><b>YES</b></strong>&nbsp;&nbsp;&nbsp;

                                            <input type="radio" onchange="deactivation()" id="id" name="xray_status"
                                                   checked="checked" style="height: 20px;width:20px;"> &nbsp;<strong><b>NO</b></strong>

                                    </div>
                                </div>
                                </div>
                                <br>
                                <div class="row">
                                    <strong><b><label for="position" style="margin-left: 20px;">Choose tooth position:</label></b></strong>
                                    <br>
                                    <div class="form-group">
                                        <div class="col-sm-4"><div class="i-checks"><label> <input type="radio" id="mul" value="upper_left" name="tooth_position" onchange="upperLeft()" required> &nbsp;&nbsp; Upper Left </label></div></div>
                                        <div class="col-sm-4"><div class="i-checks"><label> <input type="radio" value="upper_right" name="tooth_position" required> &nbsp;&nbsp; Upper Rigth </label></div></div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-sm-4"><div class="i-checks"><label><input type="radio" value="lower_left" name="tooth_position" required>&nbsp;&nbsp; Lower Left</label></div></div>
                                        <div class="col-sm-4"><div class="i-checks"><label><input type="radio" value="lower_right" name="tooth_position" required>&nbsp;&nbsp; Lower Right </label></div></div>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <div class="row">
                                    <div class="col-md-6 text-left">
                                        <div class="input-group" style="margin-top:px;">
                                            <label for="number">Enter tooth number:</label>
                                            <input type="number" class="form-control" id="teeth" max="8" min="1"  name="tooth_number" onblur="copyvalue()" placeholder="Enter Tooth Number" style="width: 100%;height:36px;" required>
                                            <span class="input-group-btn">
                                            <button type="submit" class="btn btn-primary" id="but"  style="margin-top: 23px;height:36px;" disabled>
                                            Send To X-Ray &nbsp;<i class="fa fa-send">
                                            </i></button></span>
                                        </div>
                                    </div>
                                </div>


                                <input type="text" name="doctor_name"
                                       value="{{ $patient_in_treatment->doctor->first_name }}"
                                       style="visibility: hidden;">
                                <input type="text" name="patient_name" value="{{ $patient_in_treatment->name }}"
                                       style="visibility: hidden;">
                                <input type="text" name="patient_id" value="{{ $patient_in_treatment->id_patient }}"
                                       style="visibility: hidden;">


                            </form>
                            {{--end of x-ray form--}}
                            <form action="/operation" method="POST">
                                @foreach($checkValue as $check)
                                <input type="hidden" value="{{ $check->visits }}" name="visits">
                                @endforeach
                                <input  type="hidden" name="FK_id_patient" value="{{ $patient_id }}"/>
                                {{--<input hidden type="hidden" name="visits" value="{{ $treatments->visits  }}"/>--}}

                                <div class="row">
                                    <div class="col-md-6" style="margin-top: -85px;">
                                        <div class="form-group">
                                            <label></label>
                                            <input type="number" class="form-control" id="copyteeth" required
                                                   name="teeth_number" min="1" max="8" style="visibility: hidden">
                                        </div>
                                            <input type="checkbox" id="next" name="have_xray" value="yes" style="visibility:hidden;">
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-sm-4"><div class="i-checks"><label> <input type="radio" id="ul" value="upper_left" name="tooth_position" required> &nbsp;&nbsp; Upper Left </label></div></div>
                                                <div class="col-sm-4"><div class="i-checks"><label> <input type="radio" value="upper_right" name="tooth_position" required> &nbsp;&nbsp; Upper Rigth </label></div></div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-sm-4"><div class="i-checks"><label><input type="radio" value="lower_left" name="tooth_position" required>&nbsp;&nbsp; Lower Left</label></div></div>
                                                <div class="col-sm-4"><div class="i-checks"><label><input type="radio" value="lower_right" name="tooth_position" required>&nbsp;&nbsp; Lower Right </label></div></div>
                                            </div>
                                        </div>
                                        <br>

                                        <div class="form-group">
                                            <label>Select Dental Defect :</label>
                                            <select class="form-control" name="dentaldefect" required>
                                                <option disabled selected>Select Dental Defect</option>
                                                @foreach($dentalDefectList as $list)
                                                    <option value="{{ $list->dental_defect }}">{{ $list->dental_defect }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Treatment :</label>
                                            <select class="form-control" name="treatment"
                                                    onchange="getFeeTreatment(this);" required>
                                                <option disabled>Select Treatment</option>
                                                @foreach($treatementList as $listTreatement)
                                                    <option value="{{ $listTreatement->treatment }}"
                                                            id="{{ $listTreatement->estimated_fee }}">
                                                        {{ $listTreatement->treatment }} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        {{--<input type="hidden" class="form-control" name="id_treatment" id="id_treatment">--}}
                                        <div class="form-group">
                                            <label for="nex">Treatment Cost :</label>
                                            <input type="number" class="form-control" id="cost_treatment"
                                                   name="estimated_fee" value="" required>
                                        </div>
                                        <input type="text" name="paid_amount" hidden>
                                        <div class="form-group">
                                            <label for="nex">Discount :</label>
                                            <input type="number" class="form-control" name="discount">
                                        </div>
                                        {{--<div class="form-group">--}}
                                            {{--<label for="nex">Next Appointment :</label>--}}
                                            {{--<input type="date" class="form-control" name="next_appointment">--}}
                                        {{--</div>--}}
                                        {{--<div class="form-group">--}}
                                            {{--<div class="i-checks" for="nex">Set Meridiem :<label>&nbsp;&nbsp;--}}
                                                    {{--<input type="radio" value="morning" checked name="meridiem">--}}
                                                    {{--Morning</label>--}}
                                                {{--&nbsp;&nbsp;&nbsp; <input type="radio" checked value="afternoon"--}}
                                                                          {{--name="meridiem">Afternoon--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        <div class="form-group">
                                            <label for="nex">Description :</label>
                                            <textarea rows="5" type="text" class="form-control" name="description"
                                                      placeholder="Type Description ...."
                                                      id="description"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <div class="i-checks" for="nex"><label>&nbsp;&nbsp;
                                                    <input type="checkbox" value="complete"
                                                           class="checkbox checkbox-warning"
                                                           name="status_visits"/><span>&nbsp;&nbsp; Check it, To complete treatment of tooth for this patient
                                                        when check it the finance must get all remaining fee from patient.</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="margin-top: -70px;">
                                        <img src="{{ asset('img/all_tooth.jpg') }}" width="100%"/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5">
                                        <button type="submit" class="btn btn-primary"> Save&nbsp;<i
                                                    class="fa fa-save"></i>
                                        </button>
                                        <button type="reset" class="btn btn-white"> Reset&nbsp;<i
                                                    class="fa fa-save"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('script')

    <script src="{{ asset('js/tooths.js') }}" type="javascript"></script>

    <script>
        function getFeeTreatment(e) {
            document.getElementById('cost_treatment').value = e[e.selectedIndex].id
        }
    </script>

    {{-- Copying input from tooth number --}}
    <script type="text/javascript">
        function copyvalue() {
            var teeth = document.getElementById('teeth').value;
            document.getElementById('copyteeth').value = teeth;
        }
    </script>
    <script type="text/javascript">
        function upperLeft(){
            document.getElementById('ul').click();
        }
    </script>

    {{-- disabling send to xray button --}}


    <script>
        $(document).ready(function () {
            $('#check').change(function () {
                var ch = this.checked;
                if (!ch) {
                    $('#but').prop('disabled', true);
                } else {
                    $('#but').prop('disabled', false);
                }
            });
        });
    </script>


    <script type="text/javascript">
        function activation() {
            var ch=document.getElementById('check').value;
            if(ch=='not'){
                document.getElementById('but').disabled=false;
                document.getElementById('next').checked=true;
            } else{
                document.getElementById('but').disabled=true;
                document.getElementById('next').checked=false;
            }
        }
    </script>

    <script type="text/javascript">
        function deactivation() {
            var deac=document.getElementById('id').value;
            if(deac=='on'){
                document.getElementById('but').disabled=true;
                document.getElementById('next').checked=false;
            }else {
                document.getElementById('but').disabled=false;
                document.getElementById('next').checked=true;
            }
        }
    </script>

@endsection