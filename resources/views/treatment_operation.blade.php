@extends('master')
@section('style')
    <link href="dashboard/css/bootstrap.min.css" rel="stylesheet">
    <link href="dashboard/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="dashboard/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="dashboard/css/animate.css" rel="stylesheet">
    <link href="dashboard/css/style.css" rel="stylesheet">

    <style rel="stylesheet">


        .nopad {
            padding-left: 0 !important;
            padding-right: 0 !important;
        }

        /*image gallery*/
        .image-checkbox {
            cursor: pointer;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            border: 4px solid transparent;
            margin-bottom: 0;
            outline: 0;
        }

        .image-checkbox input[type="checkbox"] {
            display: none;
        }

        .image-checkbox-checked {
            background-color: #ff4542;
        }

        ul > li {
            display: inline-block;
            /* You can also add some margins here to make it look prettier */
            zoom: 1;
            *display: inline;
            /* this fix is needed for IE7- */
        }

        .check {
            background-color: #ff0000;
        }

        .font-m {
            font-size: 1.5em;
        }

        .title-button {
            font-size: 50px;
            font-weight: bold;
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
                <h5>{{trans('file.patient_information')}}</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-wrench"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <div class="row">
                    <div class="alert alert-danger alert-dismissable col-md-9">
                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                        Patient have {{ $patient_in_treatment->problem_health }} {{trans('file.health_problem')}} <a
                                class="alert-link"
                                href="#"></a>.
                    </div>
                    {{--<div class="col-sm-3 pull-right">--}}
                    {{--<h2><a class="btn btn-primary hvr-grow-shadow" style="font-size: 13px; width: 200px;"--}}
                    {{--href="/patient_history_print"><img src="{{ asset('img/patient_report.png') }}" class="pull-left" width="40px"/>&nbsp;&nbsp;{{trans('file.report_patient')}}</a></h2>--}}

                    {{--</div>--}}
                </div>
                <div class="row">

                    <div class="row m-b-lg m-t-lg">

                        <div class="col-md-5">
                            <div class="profile-info">
                                <div class="">
                                    <div>
                                        <h2 class="no-margins font-b">
                                            {{ $patient_in_treatment->name }}
                                        </h2>
                                        <h4>{{trans('file.p_id')}}: {{ $patient_in_treatment->id_patient }}</h4>
                                        <small style="font-size: 12px;">
                                            <span class="text-warning" style="font-size: 15px; font-weight: bold;">{{trans('file.health_problem')}}
                                                : </span>
                                            {{ $patient_in_treatment->problem_health }}
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="table-responsive">
                                <table class="table small m-b-xs">
                                    <tbody>
                                    <tr>
                                        <td>
                                            {{trans('file.gender')}}:<b>&nbsp;{{ $patient_in_treatment->gender }}</b>&nbsp;<i
                                                    class="fa fa-male"></i>
                                        </td>
                                        <td>
                                            {{trans('file.age')}}:<b>&nbsp;{{ $patient_in_treatment->age }}</b>&nbsp;<i
                                                    class=""></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            {{trans('file.doctor')}}
                                            :<b>&nbsp;{{ $patient_in_treatment->doctor->first_name }}</b>&nbsp;<i
                                                    class="fa fa-user-md"></i>
                                        </td>
                                        <td>
                                            {{trans('file.visited')}}:<b>&nbsp;{{ $patient_in_treatment->status }}</b>&nbsp;<i
                                                    class=""></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            {{trans('file.date')}}:<b>&nbsp;{{ $patient_in_treatment->created_at }}</b>&nbsp;<i
                                                    class="fa fa-calendar"></i>
                                        </td>
                                        <td>
                                            {{trans('file.first_visited_date')}}
                                            :<b>&nbsp;{{ $patient_in_treatment->created_at }}</b>&nbsp;<i
                                                    class="fa fa-calendar"></i>
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
    </div>

    {{-- tabs of patient treatment --}}
    <div class="row" style="margin-right: 0px;margin-left:0PX;">
        <div class="col-lg-12">
            <div class="tabs-container">
                <ul class="nav nav-tabs" id="demoTabs">
                    <li class=""><a data-toggle="tab" href="#tab-1"><i
                                    class="fa fa-history"></i>{{trans('file.past_history')}}</a></li>
                    <li class="active"><a data-toggle="tab" id="test" href="#tab-2"><i
                                    class="fa fa-clock-o"></i>{{trans('file.present_history')}}</a></li>
                </ul>
                <div class="tab-content">
                    {{-- panel tab 1 past history --}}
                    <div id="tab-1" class="tab-pane">
                        <div class="panel-body">
                            <br>
                            @foreach($patient_in_treatment->treatment->sortByDesc('id') as $treats)
                                {{-- start for each here --}}
                                <div class="row shadow p-3 mb-5 rounded bg-info"
                                     style=" padding-left:20px; border-radius: 5px;margin-left:10px;margin-right: 10px; font-size: 17px;">
                                    <strong>{{ $treats->visits }} \ &nbsp;&nbsp; <i class="fa fa-calendar"></i>&nbsp;
                                        {{trans('file.date')}}
                                        : {{ \Carbon\Carbon::parse($treats->created_at)->diffForHumans() }}
                                    </strong>
                                    <h3 style="font-weight: bold"></h3>
                                </div>
                                <br>





                                <div class="row " style="margin-top:15px;margin-right:10px;margin-left:10px;">
                                    <div class="col-md-8">
                                        <div class="row" style="margin-top: -20px;">
                                            <div class="col-xs-12">
                                                @if($treats->paid_amount==0)
                                                    <h2 style="color: red">This patient has not paid the treatment fee</h2>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                        <table class="table table-striped " style="font-weight: bold; ">

                                            <tr>
                                                <td>{{trans('file.dental_defect')}} :</td>
                                                <td>{{ $treats->dentaldefect }}</td>
                                                <td>{{trans('file.treatment_cost')}}:</td>
                                                <td>{{ $treats->estimated_fee }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{trans('file.treatment')}} :</td>
                                                <td>{{ $treats->treatment }}</td>
                                                <td>{{trans('file.paid')}} :</td>
                                                <td>{{$treats->paid_amount}}</td>
                                            </tr>
                                            <tr>
                                                <td>{{trans('file.teeth_number')}} :</td>
                                                <td>{{ $treats->teeth_number }}</td>
                                                <td>{{trans('file.tooth_position')}} :</td>
                                                <td>{{ $treats->tooth_position }}</td>

                                            </tr>
                                            <tr>
                                                <td>{{trans('file.remaining')}} :</td>
                                                <td>{{$treats->remaining_fee}}</td>
                                                <td>Have Xray :</td>
                                                <td>{{ $treats->have_xray }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{trans('file.date')}} :</td>
                                                <td>{{ $treats->created_at }}</td>
                                                <td> {{trans('file.treatment')}}</td>
                                                <td>{{ $treats->status_visits }}</td>
                                            </tr>
                                        </table>

                                        </div>
                                        <div>
                                            <div><p><strong>{{trans('file.description')}}
                                                        :</strong>{{ $treats->description }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        @if($treats->status_visits == 'not complete')
                                            <a href="/operation/{{ $treats->id }}/edit/{{ $patient_id }}"
                                               class="btn btn-md btn-primary">{{trans('file.continue_treatment')}}</a>
                                        @else
                                            <h4 class="text-info"> This treatment has been done !</h4>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    {{-- panel tab 2 new history --}}
                    <div id="tab-2" class="tab-pane active">
                        <div class="panel-body" style="padding-left: 60px;">
                            <br>
                            {{-- Header of title --}}
                            <div class="row  bg-info"
                                 style=" padding-left:20px; border-radius: 5px;margin-left:0px;margin-right: 10px;">
                                <h3 style="font-weight: bold;">{{trans('file.present_history')}}</h3>
                            </div>
                            <br>


                            <div class="row">
                                <div class="col-md-6 col-xs-6">
                                    <ul>
                                        <li>
                                            <label class="image-checkbox">
                                                <img class="img-responsive"
                                                     src="{{ asset('img/tho.png') }}" width="100%" height="auto"/>
                                                <input type="checkbox" name="image[]" value="1"/>
                                                <i class="fa fa-check hidden"></i>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="image-checkbox">
                                                <img class="img-responsive"
                                                     src="{{ asset('img/tho.png') }}" width="100%" height="auto"/>
                                                <input type="checkbox" name="image[]" value="2"/>
                                                <i class="fa fa-check hidden"></i>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="image-checkbox">
                                                <img class="img-responsive"
                                                     src="{{ asset('img/tho.png') }}" width="100%" height="auto"/>
                                                <input type="checkbox" name="image[]" value="3"/>
                                                <i class="fa fa-check hidden"></i>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="image-checkbox">
                                                <img class="img-responsive"
                                                     src="{{ asset('img/tho.png') }}" width="100%" height="auto"/>
                                                <input type="checkbox" name="image[]" value="4"/>
                                                <i class="fa fa-check hidden"></i>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="image-checkbox">
                                                <img class="img-responsive"
                                                     src="{{ asset('img/tho.png') }}" width="100%" height="auto"/>
                                                <input type="checkbox" name="image[]" value="5"/>
                                                <i class="fa fa-check hidden"></i>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="image-checkbox">
                                                <img class="img-responsive"
                                                     src="{{ asset('img/tho.png') }}" width="100%" height="auto"/>
                                                <input type="checkbox" name="image[]" value="6"/>
                                                <i class="fa fa-check hidden"></i>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="image-checkbox">
                                                <img class="img-responsive"
                                                     src="{{ asset('img/tho.png') }}" width="100%" height="auto"/>
                                                <input type="checkbox" name="image[]" value="7"/>
                                                <i class="fa fa-check hidden"></i>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="image-checkbox">
                                                <img class="img-responsive"
                                                     src="{{ asset('img/tho.png') }}" width="100%" height="auto"/>
                                                <input type="checkbox" name="image[]" value="8"/>
                                                <i class="fa fa-check hidden"></i>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6 col-xs-6">
                                    <ul>

                                        <li>
                                            <label class="image-checkbox">
                                                <img class="img-responsive"
                                                     src="{{ asset('img/tho.png') }}" width="100%" height="auto"/>
                                                <input type="checkbox" name="image[]" value="9"/>
                                                <i class="fa fa-check hidden"></i>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="image-checkbox">
                                                <img class="img-responsive"
                                                     src="{{ asset('img/tho.png') }}" width="100%" height="auto"/>
                                                <input type="checkbox" name="image[]" value="10"/>
                                                <i class="fa fa-check hidden"></i>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="image-checkbox">
                                                <img class="img-responsive"
                                                     src="{{ asset('img/tho.png') }}" width="100%" height="auto"/>
                                                <input type="checkbox" name="image[]" value="11"/>
                                                <i class="fa fa-check hidden"></i>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="image-checkbox">
                                                <img class="img-responsive"
                                                     src="{{ asset('img/tho.png') }}" width="100%" height="auto"/>
                                                <input type="checkbox" name="image[]" value="12"/>
                                                <i class="fa fa-check hidden"></i>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="image-checkbox">
                                                <img class="img-responsive"
                                                     src="{{ asset('img/tho.png') }}" width="100%" height="auto"/>
                                                <input type="checkbox" name="image[]" value="13"/>
                                                <i class="fa fa-check hidden"></i>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="image-checkbox">
                                                <img class="img-responsive"
                                                     src="{{ asset('img/tho.png') }}" width="100%" height="auto"/>
                                                <input type="checkbox" name="image[]" value="14"/>
                                                <i class="fa fa-check hidden"></i>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="image-checkbox">
                                                <img class="img-responsive"
                                                     src="{{ asset('img/tho.png') }}" width="100%" height="auto"/>
                                                <input type="checkbox" name="image[]" value="15"/>
                                                <i class="fa fa-check hidden"></i>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="image-checkbox">
                                                <img class="img-responsive"
                                                     src="{{ asset('img/tho.png') }}" width="100%" height="auto"/>
                                                <input type="checkbox" name="image[]" value="16"/>
                                                <i class="fa fa-check hidden"></i>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 col-xs-6">
                                    <ul>
                                        <li>
                                            <label class="image-checkbox">
                                                <img class="img-responsive"
                                                     src="{{ asset('img/tho.png') }}" width="100%" height="auto"/>
                                                <input type="checkbox" name="image[]" value="17"/>
                                                <i class="fa fa-check hidden"></i>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="image-checkbox">
                                                <img class="img-responsive"
                                                     src="{{ asset('img/tho.png') }}" width="100%" height="auto"/>
                                                <input type="checkbox" name="image[]" value="18"/>
                                                <i class="fa fa-check hidden"></i>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="image-checkbox">
                                                <img class="img-responsive"
                                                     src="{{ asset('img/tho.png') }}" width="100%" height="auto"/>
                                                <input type="checkbox" name="image[]" value="19"/>
                                                <i class="fa fa-check hidden"></i>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="image-checkbox">
                                                <img class="img-responsive"
                                                     src="{{ asset('img/tho.png') }}" width="100%" height="auto"/>
                                                <input type="checkbox" name="image[]" value="20"/>
                                                <i class="fa fa-check hidden"></i>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="image-checkbox">
                                                <img class="img-responsive"
                                                     src="{{ asset('img/tho.png') }}" width="100%" height="auto"/>
                                                <input type="checkbox" name="image[]" value="21"/>
                                                <i class="fa fa-check hidden"></i>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="image-checkbox">
                                                <img class="img-responsive"
                                                     src="{{ asset('img/tho.png') }}" width="100%" height="auto"/>
                                                <input type="checkbox" name="image[]" value="22"/>
                                                <i class="fa fa-check hidden"></i>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="image-checkbox">
                                                <img class="img-responsive"
                                                     src="{{ asset('img/tho.png') }}" width="100%" height="auto"/>
                                                <input type="checkbox" name="image[]" value="23"/>
                                                <i class="fa fa-check hidden"></i>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="image-checkbox">
                                                <img class="img-responsive"
                                                     src="{{ asset('img/tho.png') }}" width="100%" height="auto"/>
                                                <input type="checkbox" name="image[]" value="24"/>
                                                <i class="fa fa-check hidden"></i>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6 col-xs-6">
                                    <ul>
                                        <li>
                                            <label class="image-checkbox">
                                                <img class="img-responsive"
                                                     src="{{ asset('img/tho.png') }}" width="100%" height="auto"/>
                                                <input type="checkbox" name="image[]" value="25"/>
                                                <i class="fa fa-check hidden"></i>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="image-checkbox">
                                                <img class="img-responsive"
                                                     src="{{ asset('img/tho.png') }}" width="100%" height="auto"/>
                                                <input type="checkbox" name="image[]" value="26"/>
                                                <i class="fa fa-check hidden"></i>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="image-checkbox">
                                                <img class="img-responsive"
                                                     src="{{ asset('img/tho.png') }}" width="100%" height="auto"/>
                                                <input type="checkbox" name="image[]" value="27"/>
                                                <i class="fa fa-check hidden"></i>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="image-checkbox">
                                                <img class="img-responsive"
                                                     src="{{ asset('img/tho.png') }}" width="100%" height="auto"/>
                                                <input type="checkbox" name="image[]" value="28"/>
                                                <i class="fa fa-check hidden"></i>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="image-checkbox">
                                                <img class="img-responsive"
                                                     src="{{ asset('img/tho.png') }}" width="100%" height="auto"/>
                                                <input type="checkbox" name="image[]" value="29"/>
                                                <i class="fa fa-check hidden"></i>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="image-checkbox">
                                                <img class="img-responsive"
                                                     src="{{ asset('img/tho.png') }}" width="100%" height="auto"/>
                                                <input type="checkbox" name="image[]" value="30"/>
                                                <i class="fa fa-check hidden"></i>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="image-checkbox">
                                                <img class="img-responsive"
                                                     src="{{ asset('img/tho.png') }}" width="100%" height="auto"/>
                                                <input type="checkbox" name="image[]" value="31"/>
                                                <i class="fa fa-check hidden"></i>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="image-checkbox">
                                                <img class="img-responsive"
                                                     src="{{ asset('img/tho.png') }}" width="100%" height="auto"/>
                                                <input type="checkbox" name="image[]" value="32"/>
                                                <i class="fa fa-check hidden"></i>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <a class="btn btn-primary" data-toggle="modal" id="xray_btn">XRay</a>


                            <form id="form" action="/operation" method="POST">
                                <div class="row">
                                    <input type="checkbox" id="next" name="have_xray" value="yes"
                                           style="visibility:hidden;">
                                    <input type="text" value="" id="tooth_number_3" hidden name="teeth_number"/>
                                    <input type="text" value="" id="tooth_position" hidden name="tooth_position"/>
                                    @foreach($checkValue as $check)
                                        <input type="hidden" value="{{ $check->visits }}" name="visits">
                                    @endforeach
                                    <input type="hidden" name="FK_id_patient" value="{{ $patient_id }}"/>
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label>{{trans('file.select_dental_defect')}} :</label>
                                            <select class="form-control" name="dentaldefect" required>
                                                <option disabled
                                                        selected>{{trans('file.select_dental_defect')}}</option>
                                                @foreach($dentalDefectList as $list)
                                                    <option value="{{ $list->dental_defect }}">{{ $list->dental_defect }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>{{trans('file.treatment')}} :</label>
                                            <select class="form-control" name="treatment"
                                                    onchange="getFeeTreatment(this);" required>
                                                <option disabled>{{trans('file.treatment')}}</option>
                                                @foreach($treatementList as $listTreatement)
                                                    <option value="{{ $listTreatement->treatment }}"
                                                            id="{{ $listTreatement->estimated_fee }}">
                                                        {{ $listTreatement->treatment }} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        {{--<input type="hidden" class="form-control" name="id_treatment" id="id_treatment">--}}
                                        <div class="form-group">
                                            <label for="nex">{{trans('file.treatment_cost')}} :</label>
                                            <input type="number" class="form-control" id="cost_treatment"
                                                   name="estimated_fee" value="" required>
                                        </div>
                                        <input type="text" name="paid_amount" hidden>
                                        <div class="form-group">
                                            <label for="nex">{{trans('file.discount')}} :</label>
                                            <input type="number" class="form-control" name="discount">
                                        </div>
                                        <div class="form-group">
                                            <label for="nex">{{trans('file.description')}} :</label>
                                            <textarea rows="5" type="text" class="form-control" name="description"
                                                      placeholder="Type Description ...."
                                                      id="description"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <div class="i-checks" for="nex"><label>&nbsp;&nbsp;
                                                    <input type="checkbox" value="complete"
                                                           class="checkbox checkbox-warning"
                                                           name="status_visits"/><span>&nbsp;&nbsp{{trans('file.radio_message')}}
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5">
                                        <button type="submit" class="btn btn-primary">{{trans('file.save')}}&nbsp;<i
                                                    class="fa fa-save"></i>
                                        </button>
                                        <button type="reset" class="btn btn-white"> {{trans('file.cancel')}}&nbsp;<i
                                                    class="fa fa-save"></i></button>
                                    </div>
                                </div>
                            </form>
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
                            <input type="text" name="doctor_name" value="{{ $patient_in_treatment->doctor->first_name }}" style="visibility: hidden;">
                            <input type="text" name="patient_name" value="{{ $patient_in_treatment->name }}" style="visibility: hidden;">
                            <input type="text" name="patient_id" value="{{ $patient_in_treatment->id_patient }}" style="visibility: hidden;">
                            <input type="text" value="not" id="tooth" hidden name="xray_status"/>
                            <input type="text" value="upper_left" id="tooth" hidden name="tooth_position"/>

                            {{-- pass value tooth number using jquery --}}
                            <label class="control-label">{{trans('file.tooth_number')}}:</label>
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
            <script src="{{ asset('dashboard/js/plugins/toastr/toastr.min.js') }}"></script>

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
                    if (teeth > 8) {
                        alert('Tooth number must be less than or equal to 8');
                    }
                }
            </script>
            {{--copy radio buttons values to another radio buttons--}}
            <script type="text/javascript">
                function upperLeft() {
                    document.getElementById('ul').click();
                }
            </script>
            <script type="text/javascript">
                function upperRight() {
                    document.getElementById('ur').click();
                }
            </script>
            <script type="text/javascript">
                function lowerLeft() {
                    document.getElementById('ll').click();
                }
            </script>
            <script type="text/javascript">
                function lowerRight() {
                    document.getElementById('lr').click();
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
                    var ch = document.getElementById('check').value;
                    if (ch == 'not') {
                        document.getElementById('but').disabled = false;
                        document.getElementById('next').checked = true;
                    } else {
                        document.getElementById('but').disabled = true;
                        document.getElementById('next').checked = false;
                    }
                }
            </script>

            <script type="text/javascript">
                function deactivation() {
                    var deac = document.getElementById('id').value;
                    if (deac == 'on') {
                        document.getElementById('but').disabled = true;
                        document.getElementById('next').checked = false;
                    } else {
                        document.getElementById('but').disabled = false;
                        document.getElementById('next').checked = true;
                    }
                }
            </script>

            <script type="text/javascript">
                $(function () {
                    $('#form').submit(function () {
                        // Display a success toast, with a title
//                toastr.info('Successfully Inserted !');
                        toastr.info('Successfully Inserted !', {timeOut: 5000});
                    });
                });
            </script>

            <script>

                $(function () {
                    if ($(window).width() <= 900) {
                        $("img").each(function () {
                            $(this).attr("src", $(this).attr("src").replace("img", "img_phone"));
                        });
                    }
                });

                $(document).ready(function (e) {
                    $('.checkbox-theet').click(function () {
                        var ee = $('.checkbox-theet').val();
                        alert(ee);
                    });
                });

                function gettooth(oFld) {
                    alert(oFld.checked);
                }

                $(".image-checkbox").each(function () {
                    if ($(this).find('input[type="checkbox"]').first().attr("checked")) {
                        $(this).addClass('image-checkbox-checked');
                    }
                    else {
                        $(this).removeClass('image-checkbox-checked');
                    }
                });

                // sync the state to the input
                var tooth_num;
                $(".image-checkbox").on("click", function (e) {
                    $(this).toggleClass('image-checkbox-checked');
                    var $checkbox = $(this).find('input[type="checkbox"]');
                    $checkbox.prop("checked", !$checkbox.prop("checked"));
                    tooth_num = $checkbox.val();
                    $('#tooth_number_3').val($checkbox.val());
                    var tooth_pos;
                    if(tooth_num <= 8 && tooth_num >= 1)
                    {
                        tooth_pos = 'Upper Right';
                    }else if(tooth_num <= 16 && tooth_num >= 9)
                    {
                        tooth_pos = 'Upper Left';
                    }else if( tooth_num <= 24 && tooth_num >= 14)
                    {
                        tooth_pos = 'Lower Left';
                    }else
                    {
                        tooth_pos = 'Lower Right';
                    }
                    $('#tooth_position').val(tooth_pos);

                    e.preventDefault();
                });

                $(document).on("click", "#xray_btn", function () {
                    $(".modal-body #tooth_number_3").val(tooth_num);
                    $('#xray').modal('show');
                });

            </script>

@endsection