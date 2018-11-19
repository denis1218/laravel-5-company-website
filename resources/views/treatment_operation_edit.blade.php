@extends('master')
@section('style')


    <style rel="stylesheet">
        .image-radio {
            cursor: pointer;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            border: 4px solid transparent;
            margin-bottom: 0;
            outline: 0;
        }

        .image-radio input[type="radio"] {
            display: none;
        }

        .image-radio-checked {
            background-color: #ff4542;
            border-radius: 15px;
        }

        ul > li {
            display: inline-block;
            /* You can also add some margins here to make it look prettier */
            zoom: 1;
            *display: inline;
            /* this fix is needed for IE7- */
        }
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
    {{--personal information patient--}}
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Patient Information</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
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
                                        <small style="font-size: 15px;">
                                            <span class="text-warning" style="font-size: 12px; font-weight: bold;">Problem Health : </span>
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
                    <li class=""><a data-toggle="tab" href="#tab-1">Past History</a></li>
                    <li class="active"><a data-toggle="tab" href="#tab-2">Present History</a></li>
                </ul>

                <div class="tab-content">

                    {{-- panel tab 1 past history --}}
                    <div id="tab-1" class="tab-pane">
                        <div class="panel-body">
                            <br>
                            @foreach($patient_in_treatment->treatment as $treats)
                                {{-- start for each here --}}
                                <div class="row shadow p-3 mb-5 rounded bg-info"
                                     table-exchange
                                     style=" padding-left:20px; border-radius: 5px;margin-left:10px;margin-right: 10px;">
                                    <h3 style="font-weight: bold">{{ $treats->visits }}</h3>
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
                                                <td>Tooth Position</td>
                                                <td>{{$treats->tooth_position}}</td>
                                            </tr>
                                            <tr>
                                                <td>Date First Visite :</td>
                                                <td>{{ $treats->created_at }}</td>
                                                <td>Have Xray :</td>
                                                <td>{{ $treats->have_xray }}</td>
                                            </tr>
                                            <tr>
                                                <td>Date First Visite :</td>
                                                <td>{{ $treats->created_at }}</td>
                                            </tr>
                                        </table>
                                        <div>
                                            <div><p><strong>Description:</strong>{{ $treats->description }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="/operation/{{ $treats->id }}/edit/{{ $patient_id }}" class="btn btn-md btn-primary">Continue
                                            Treatment</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    {{-- panel tab 2 new history --}}
                    <div id="tab-2" class="tab-pane active">
                        <div class="panel-body">
                            <br>
                            {{-- Header of title --}}
                            <div class="row  bg-info"
                                 style=" padding-left:20px; border-radius: 5px;margin-left:10px;margin-right: 10px;">
                                <h3 style="font-weight: bold">Present History</h3>
                            </div>

                            <br>

                            {{-- Image Tooths --}}
                            <div class="row">

                                <div class="col-md-6 col-xs-6">
                                    <h4>Choose one Tooth</h4>
                                    <ul>
                                        <li>
                                            <label class="image-radio">
                                                <img class="img-responsive"
                                                     src="{{ asset('img/tooth/1.png') }}" width="100%" height="auto"/>
                                                <input type="radio" name="image" value="1"/>
                                                <i class="fa fa-check hidden"></i>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="image-radio">
                                                <img class="img-responsive"
                                                     src="{{ asset('img/tooth/2.png') }}" width="100%" height="auto"/>
                                                <input type="radio" name="image" value="2"/>
                                                <i class="fa fa-check hidden"></i>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="image-radio">
                                                <img class="img-responsive"
                                                     src="{{ asset('img/tooth/3.png') }}" width="100%" height="auto"/>
                                                <input type="radio" name="image" value="3"/>
                                                <i class="fa fa-check hidden"></i>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="image-radio">
                                                <img class="img-responsive"
                                                     src="{{ asset('img/tooth/4.png') }}" width="100%" height="auto"/>
                                                <input type="radio" name="image" value="4"/>
                                                <i class="fa fa-check hidden"></i>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="image-radio">
                                                <img class="img-responsive"
                                                     src="{{ asset('img/tooth/5.png') }}" width="100%" height="auto"/>
                                                <input type="radio" name="image" value="5"/>
                                                <i class="fa fa-check hidden"></i>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="image-radio">
                                                <img class="img-responsive"
                                                     src="{{ asset('img/tooth/6.png') }}" width="100%" height="auto"/>
                                                <input type="radio" name="image" value="6"/>
                                                <i class="fa fa-check hidden"></i>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="image-radio">
                                                <img class="img-responsive"
                                                     src="{{ asset('img/tooth/7.png') }}" width="100%" height="auto"/>
                                                <input type="radio" name="image" value="7"/>
                                                <i class="fa fa-check hidden"></i>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="image-radio">
                                                <img class="img-responsive"
                                                     src="{{ asset('img/tooth/8.png') }}" width="100%" height="auto"/>
                                                <input type="radio" name="image" value="8"/>
                                                <i class="fa fa-check hidden"></i>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            {{-- Radio button tooth position --}}
                            <div class="row">
                                <div class="col-md-3">
                                    <table class="table ">
                                        @if($last_treatment->tooth_position == "upper left")
                                        <tr>
                                            <td><label>Upper left &nbsp;<input type="radio" checked name="tooth_position" class="tooth_position"
                                                                               value="Upper left"/></label></td>
                                            <td> <label>Upper right &nbsp;<input type="radio" name="tooth_position" class="tooth_position"
                                                                                 value="Upper right"/></label></td>
                                        </tr>
                                        <tr>
                                            <td><label>Lower left &nbsp;<input type="radio" name="tooth_position" class="tooth_position"
                                                                               value="Lower left"/></label></td>
                                            <td><label>Lower right &nbsp;<input type="radio" name="tooth_position" class="tooth_position"
                                                                                value="Lower right"/></label></td>
                                        </tr>
                                            @elseif($last_treatment->tooth_position == "upper right")
                                            <tr>
                                                <td><label>Upper left &nbsp;<input type="radio"  name="tooth_position" class="tooth_position"
                                                                                   value="Upper left"/></label></td>
                                                <td> <label>Upper right &nbsp;<input type="radio"  checked name="tooth_position" class="tooth_position"
                                                                                     value="Upper right"/></label></td>
                                            </tr>
                                            <tr>
                                                <td><label>Lower left &nbsp;<input type="radio" name="tooth_position" class="tooth_position"
                                                                                   value="Lower left"/></label></td>
                                                <td><label>Lower right &nbsp;<input type="radio" name="tooth_position" class="tooth_position"
                                                                                    value="Lower right"/></label></td>
                                            </tr>
                                            @elseif($last_treatment->tooth_position == "lower left")
                                            <tr>
                                                <td><label>Upper left &nbsp;<input type="radio"  name="tooth_position" class="tooth_position"
                                                                                   value="Upper left"/></label></td>
                                                <td> <label>Upper right &nbsp;<input type="radio"   name="tooth_position" class="tooth_position"
                                                                                     value="Upper right"/></label></td>
                                            </tr>
                                            <tr>
                                                <td><label>Lower left &nbsp;<input type="radio" checked name="tooth_position" class="tooth_position"
                                                                                   value="Lower left"/></label></td>
                                                <td><label>Lower right &nbsp;<input type="radio" name="tooth_position" class="tooth_position"
                                                                                    value="Lower right"/></label></td>
                                            </tr>
                                            @elseif($last_treatment->tooth_position == "lower right")
                                            <tr>
                                                <td><label>Upper left &nbsp;<input type="radio"  name="tooth_position" class="tooth_position"
                                                                                   value="Upper left"/></label></td>
                                                <td> <label>Upper right &nbsp;<input type="radio"   name="tooth_position" class="tooth_position"
                                                                                     value="Upper right"/></label></td>
                                            </tr>
                                            <tr>
                                                <td><label>Lower left &nbsp;<input type="radio"  name="tooth_position" class="tooth_position"
                                                                                   value="Lower left"/></label></td>
                                                <td><label>Lower right &nbsp;<input type="radio" checked name="tooth_position" class="tooth_position"
                                                                                    value="Lower right"/></label></td>
                                            </tr>
                                            @endif

                                    </table>
                                </div>

                            </div>

                            {{-- Button take X-Ray --}}
                            <div class="row">
                                <div class="col-md-4">
                                    <button class="btn btn-primary" data-toggle="modal" id="xray_btn">Take X-Ray</button>
                                </div>
                            </div>


                            <form action="/operation" method="POST">
                                <div class="row">
                                    <div class="col-md-6" >
                                        <input hidden type="hidden" name="FK_id_patient" value="{{ $patient_id }}"/>
                                        <input hidden type="hidden" name="visits" value="{{ $checkValue  }}"/>
                                        <input type="text"  class="form-control" value="{{ $last_treatment->teeth_number }}"
                                               id="tooth_number_3" name="teeth_number" style="visibility: hidden;"/>
                                        <input type="text" value="" id="tooth_position" class="form-control" name="tooth_position"/>

                                        <input type="checkbox" id="next" name="have_xray" value="yes" style="visibility:hidden;">

                                        <br>
                                        <div class="form-group">
                                            <label>Select Dental Defect :</label>
                                            <select class="form-control" name="dentaldefect">
                                                <option selected >{{ $last_treatment->dentaldefect }}</option>
                                                <option  disabled>Select Dental Defect</option>
                                                @foreach($dentalDefectList as $list)
                                                    <option value="{{ $last_treatment->dentaldefect }}">{{ $list->dental_defect }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Treatment :</label>
                                            <select class="form-control" name="treatment">
                                                <option selected >{{ $last_treatment->treatment }}</option>
                                                <option  disabled>Select Treatment</option>
                                                @foreach($treatementList as $listTreatement)
                                                    <option value="{{ $last_treatment->treatment }}"> {{ $listTreatement->treatment }} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        {{--<input type="hidden" class="form-control" name="id_treatment" id="id_treatment">--}}
                                        <div class="form-group">
                                            <label for="nex">Treatment Cost :</label>
                                            <input type="number" class="form-control" name="estimated_fee"
                                                   value="{{ $last_treatment->estimated_fee }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="nex">Discount :</label>
                                            <input type="number" class="form-control" name="discount"
                                                   value="{{ $last_treatment->discount }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="nex">Description :</label>
                                            <textarea rows="5" type="text" class="form-control" name="description"
                                                      placeholder="Type Description ...."
                                                      id="description">{{ $last_treatment->description }}</textarea>
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
                                </div>

                                <div class="row">
                                    <div class="col-md-5">
                                        <button type="submit" class="btn btn-primary"> New Visit Save&nbsp;<i
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


    {{-- Modal window XRay--}}
    <div class="modal inmodal" id="xray" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated fadeIn">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span
                                aria-hidden="true">&times;</span><span
                                class="sr-only">{{trans('file.close')}}</span></button>
                    <i class="fa fa-edit modal-icon text-primary"></i>
                    <h4 class="modal-title">{{trans('file.xray')}}</h4>
                </div>
                <div class="modal-body">
                    <form id="form" action="/xray" method="post">
                        <input type="text" name="doctor_name"
                               value="{{ $patient_in_treatment->doctor->first_name }}" style="visibility: hidden;">
                        <input type="text" name="patient_name" value="{{ $patient_in_treatment->name }}"
                               style="visibility: hidden;">
                        <input type="text" name="patient_id" value="{{ $patient_in_treatment->id_patient }}"
                               style="visibility: hidden;">
                        <input type="text" value="not" id="tooth" hidden name="xray_status"/>

                        <label>Tooth Position</label>
                        <input type="text" value="" id="tooth_position" class="form-control" name="tooth_position"/>
                        <br/>
                        {{-- pass value tooth number using jquery --}}
                        <label class="control-label">Tooth Number</label>
                        <input type="text" class="form-control" value="" id="tooth_number_3" name="tooth_number"/>

                        <br>
                        <button type="button" class="btn btn-white pull-right" data-dismiss="modal"
                                style="margin-bottom: 10px;">{{trans('file.close')}}</button>
                        <button type="submit" class="btn btn-primary pull-right"
                                style="margin-bottom: 10px;margin-right: 20px;">{{trans('file.save')}}</button>

                    </form>
                    <br>


                </div>

                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script src="{{ asset('js/tooths.js') }}" type="javascript"></script>
    <script>


        function getFeeTreatment(e) {
//           alert(e[e.selectedIndex].id);
            document.getElementById('cost_treatment').value = e[e.selectedIndex].value
            document.getElementById('id_treatment').value = e[e.selectedIndex].id
//            alert('const = '+e.target.id);
        }
    </script>
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
            if(teeth>8){
                alert('Tooth number must be less than or equal to 8');
            }
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

        $(".image-radio").each(function () {
            if ($(this).find('input[type="radio"]').first().attr("checked")) {
                $(this).addClass('image-radio-checked');
            }
            else {
                $(this).removeClass('image-radio-checked');
            }
        });


//        functino on load page to make responsive image tooth
        $(function () {
            if ($(window).width() <= 900) {
                $("img").each(function () {
                    $(this).attr("src", $(this).attr("src").replace("img", "img_phone"));
                });
            }
        });


        // sync the state to the input
        var tooth_num = {{ $last_treatment->teeth_number }};
        var tooth_pos = $('input:radio[name=tooth_position]:checked').val();

                {{-- List of radio button image teeth to choose on teeth --}}
        $(".image-radio").on("click", function (e) {
            $(".image-radio").removeClass('image-radio-checked');
            $(this).addClass('image-radio-checked');
            var $checkbox = $(this).find('input[type="radio"]');
            $checkbox.prop("checked", !$checkbox.prop("checked"));
            tooth_num = $checkbox.val();
            $('#tooth_number_3').val($checkbox.val());
            e.preventDefault();
        });


//        get tooth position and tooth number and send it to modal window
        $(document).on("click", "#xray_btn", function () {
            $(".modal-body #tooth_number_3").val(tooth_num);
            $(".modal-body #tooth_position").val(tooth_pos);
            $('#xray').modal('show');
            tooth_pos = null;
        });

//        get toothe position from clickit on radio button tooth position
        $(".tooth_position").on("click" , function(){
            tooth_pos = $(this).val();
            $("#tooth_position").val(tooth_pos);
        });

//        function selected onload page to teeth
        $(function () {
            var $tooth_position = $('input:radio[name=tooth_position]:checked').val();
            $("#tooth_position").val($tooth_position);
            var $imagetooth = $('input:radio[name=image]');
            if($imagetooth.is(':checked') === false)
            {
                $imagetooth.filter('[value={{ $last_treatment->teeth_number }}]').prop('checked',true);
                $imagetooth.filter('[value={{ $last_treatment->teeth_number }}]').parent('.image-radio').addClass('image-radio-checked');
            }
        });

    </script>
@endsection
