@extends('master')
@section('style')
    <link href="dashboard/css/bootstrap.min.css" rel="stylesheet">
    <link href="dashboard/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="dashboard/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="dashboard/css/animate.css" rel="stylesheet">
    <link href="dashboard/css/style.css" rel="stylesheet">

    <style rel="stylesheet">

        #shadow{
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        .nopad {
            padding-left: 0 !important;
            padding-right: 0 !important;
        }

        /*image gallery*/
        .image-check {
            cursor: pointer;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            border: 4px solid transparent;
            margin-bottom: 0;
            outline: 0;
        }

        .image-check-xray {
            cursor: pointer;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            border: 4px solid transparent;
            margin-bottom: 0;
            outline: 0;
        }

        .image-check-checked-xray{
            background-color: #ea615a;
            border-radius: 15px;
        }

        .image-check_prosthesis {
            cursor: pointer;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            border: 4px solid transparent;
            margin-bottom: 0;
            outline: 0;
        }

        .image-check-xray input[type="checkbox"] {
            display: none;
        }

        .image-check input[type="checkbox"] {
            display: none;
        }


        .image-check_prosthesis input[type="checkbox"] {
            display: none;
        }


        .ullist {
            display: table;
            width: 100%;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
        }

        .ullist li {
            display: table-cell;
        }

        .ullist-nav {
            display: table;
            width: 50%;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
        }

        .ullist-nav li {
            display: table-cell;
        }

        .prothisis li {
            display: inline-block;
            /* You can also add some margins here to make it look prettier */
            zoom: 1;
            *display: inline;
            margin-left: 20px;
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

            <div class="ibox-content">
                <div class="row">
                    <div class=" m-b-lg m-t-lg">
                        <div class="col-md-3">
                            <div>
                                <h2 class="no-margins font-b">
                                    <strong>{{ $patient_in_treatment->name }}</strong>
                                </h2>
                                <h4>{{trans('file.p_id')}}: {{ $patient_in_treatment->id_patient }}</h4>
                                <small style="font-size: 12px;">
                                            <span class="text-warning" style="font-size: 15px; font-weight: bold;">{{trans('file.health_problem')}}
                                                : </span>
                                    {{ $patient_in_treatment->problem_health }}
                                </small>
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
                    <li class=""><a data-toggle="tab" href="#tab-1" style="background-color: #ee7558;color: #000;"><i
                                    class="fa fa-history"></i>{{trans('file.past_history')}}</a></li>
                    <li class="active"><a data-toggle="tab" id="test" href="#tab-2" style="background-color: #959eee;color: #000;"><i
                                    class="fa fa-clock-o"></i>{{ trans('file.general_treatment') }}</a></li>
                    <li class=""><a data-toggle="tab" id="test" href="#tab-3" style="background-color: #73eee4;color: #000;"><i
                                    class="fa fa-clock-o"></i>{{ trans('file.prosthesis_treatment') }}</a></li>
                    <li class=""><a data-toggle="tab" id="test" href="#tab-4" style="background-color: #63ee75;color: #000;"><img src="{{ asset('img/xray.png') }}" width="15px"/>&nbsp;{{ trans('file.xray') }}</a></li>
                </ul>
                <div class="tab-content">

                    {{-- panel tab 1 past history --}}
                    <div id="tab-1" class="tab-pane">
                        <div class="panel-body">
                            <br>
                            @foreach($patient_in_treatment->treatment->sortByDesc('id') as $treats)
                                {{-- start for each here --}}
                                <div class="col-lg-12" id="shadow" style="margin-bottom: 10px;">
                                    <div class="ibox float-e-margins">
                                        <div class="ibox-title">
                                            <h5><span class="text-navy">{{ $treats->type_treatment }}</span>   </h5>
                                            <div class="ibox-tools">
                                                <a class="collapse-link">
                                                    <i class="fa fa-chevron-up" style="color: red; font-size: 20px"></i>
                                                </a>
                                            </div>
                                            <div class="ibox-tools" style="margin-right:50px;">
                                                <form action="/xray" method="post">
                                                    <input type="hidden" name="tooth_number"
                                                           value="{{ $treats->teeth_number }}"/>
                                                    <input type="hidden" name="patient_id"
                                                           value="{{ $patient_in_treatment->id }}"/>
                                                    <input type="hidden" name="patient_name"
                                                           value="{{ $patient_in_treatment->name }}"/>
                                                    <input type="hidden" name="xray_status" value="not"/>
                                                    <input type="hidden" name="doctor_name"
                                                           value="{{ $patient_in_treatment->doctor->first_name }}"/>
                                                    <a class="btn btn-md btn-success pull-right demo_xray" type="submit"
                                                       style="margin-left: 15px;"><img src="{{ asset('img/xray.png') }}"
                                                                                       width="20px"/> &nbsp;Take X-Ray Again</a>
                                                </form>
                                            </div>
                                            <div class="ibox-tools">
                                                <a class="btn btn-md btn-info pull-right"
                                                   href="/operation/{{ $treats->id }}/edit" style="margin-left: 15px;"><i
                                                            class="fa fa-edit pull-left"
                                                            style="font-size: 20px"></i>{{ trans('file.edit') }}</a>
                                            </div>
                                            <div class="ibox-tools">
                                                <form action="/operation/{{ $treats->id }}" method="POST">
                                                    @method('delete')
                                                    <a class="btn btn-md btn-danger pull-right demo3" type="submit"><i
                                                                class="fa fa-trash pull-left"
                                                                style="font-size: 20px"></i>{{ trans('file.delete') }}</a>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="ibox-content" id="divone" style="display: none">

                                            <div class="row" style="margin-top: -20px;">
                                                @if($treats->paid_amount == 0)
                                                    <div class="col-xs-12 alert alert-danger">
                                                        <h4 style="color: #850f36">This patient has not paid the treatment
                                                            fee</h4>
                                                    </div>
                                                @endif
                                            </div>

                                            @if($treats->type_treatment == 'General Treatment')
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="table-responsive" id="divToReload">
                                                            <table class="table table-striped table-bordered table-hover"
                                                                   style="margin-left:30px;width:95%;">
                                                                <thead>
                                                                <th>{{trans('file.id')}}</th>
                                                                <th>{{trans('file.teeth_number')}}</th>
                                                                <th>Treatment</th>
                                                                <th>Dental Defect</th>
                                                                <th>Delete teeth</th>
                                                                </thead>
                                                                <tbody>
                                                                <?php $i = 1;?>
                                                                @foreach($treats->teeth as $te)
                                                                    <tr>
                                                                        <td>{{ $i }}</td>
                                                                        <td>{{$te->tooth_number}}</td>
                                                                        <td>{{$te->treatment}}</td>
                                                                        <td>{{$te->dentaldefect}}</td>
                                                                        <td>
                                                                            <form action="/treatment/{{ $te->id }}" method="post">
                                                                                @method('delete')
                                                                                <button class="btn btn-xs btn-danger demo3" type="submit"><i
                                                                                            class="fa fa-remove"></i>&nbsp;Delete
                                                                                </button>
                                                                            </form>
                                                                        </td>
                                                                    </tr>
                                                                    <?php $i++;?>
                                                                @endforeach
                                                                </tbody>
                                                            </table>
                                                            {{ $teeth->links() }}
                                                        </div>
                                                    </div>
                                                </div>
                                                @else
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="table-responsive" id="divToReload">
                                                            <table class="table table-striped table-bordered table-hover"
                                                                   style="margin-left:30px;width:95%;">
                                                                <thead>
                                                                <th>{{trans('file.id')}}</th>
                                                                <th>{{trans('file.teeth_number')}}</th>
                                                                <th>Type Prosthesis</th>
                                                                <th>Shade</th>
                                                                <th>Type Cover</th>
                                                                <th>Delete teeth</th>
                                                                </thead>
                                                                <tbody>
                                                                <?php $i = 1;?>
                                                                @foreach($treats->teeth as $te)
                                                                    <tr>
                                                                        <td>{{ $i }}</td>
                                                                        <td>{{$te->tooth_number}}</td>
                                                                        <td>{{$te->type_prosthesis}}</td>
                                                                        <td>{{$te->shade}}</td>
                                                                        <td>{{$te->type_cover}}</td>
                                                                        <td>
                                                                            <form action="/treatment/{{ $te->id }}" method="post">
                                                                                @method('delete')
                                                                                <button class="btn btn-xs btn-danger demo3" type="submit"><i
                                                                                            class="fa fa-remove"></i>&nbsp;Delete
                                                                                </button>
                                                                            </form>
                                                                        </td>
                                                                    </tr>
                                                                    <?php $i++;?>
                                                                @endforeach
                                                                </tbody>
                                                            </table>
                                                            {{ $teeth->links() }}
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif

                                            <div class="row " style="margin-top:15px;margin-right:10px;margin-left:10px;">
                                                <div class="col-md-8">
                                                    <div class="table-responsive">
                                                        <table class="table table-striped " style="font-weight: bold; ">
                                                            <tr>
                                                                <td>{{trans('file.paid')}} :</td>
                                                                <td>{{$treats->paid_amount}}</td>
                                                                <td>{{trans('file.treatment_cost')}}:</td>
                                                                <td>{{ $treats->estimated_fee }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Have Xray :</td>
                                                                @if($treats->have_xray == '0')
                                                                    <td><label>No</label></td>
                                                                @else
                                                                    <td><label>Yes</label></td>
                                                                @endif

                                                                <td>{{trans('file.remaining')}} :</td>
                                                                <td>{{$treats->remaining_fee}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>{{trans('file.date')}} :</td>
                                                                <td>{{ $treats->created_at }}</td>
                                                                <td> {{trans('file.treatment')}}</td>
                                                                @if($treats->status_visits == 'complete')
                                                                    <td><label class="label-success"
                                                                               style="padding: 3px">{{ $treats->status_visits }}</label>
                                                                    </td>
                                                                @else
                                                                    <td><label class="label-warning"
                                                                               style="padding: 3px">{{ $treats->status_visits }}</label>
                                                                    </td>
                                                                @endif

                                                            </tr>
                                                            <tr>
                                                                <td><strong>{{trans('file.description')}}:</strong></td>
                                                                <td colspan="3">{{ $treats->description }}</td>
                                                            </tr>
                                                        </table>

                                                    </div>
                                                </div>
                                                <div class="col-md-4">

                                                </div>
                                            </div>
                                            <hr/>

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    {{-- End of tap 3 --}}

                    {{-- panel tab 2 new history --}}
                    <div id="tab-2" class="tab-pane active">
                        <div class="panel-body" style="">
                            <br>
                            {{-- Header of title --}}
                            <div class="row"
                                 style=" padding-left:20px; border-radius: 5px;margin-left:0px;margin-right: 10px; background-color: #959eee; color:#000;">
                                <h3 style="font-weight: bold;">{{ trans('file.general_treatment') }}</h3>
                            </div>

                            <br/>

                            {{-- Image Tooths --}}
                            {{--  Tooths --}}
                            <div class="container-fluid">

                                <div class="row" style="margin-left:-50px;">
                                    <div class="col-md-6 col-xs-6">
                                        <ul class="ullist">

                                            <li>
                                                <label class="image-check" id="upper_left8">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooths/8.png') }}" width="100%"
                                                         height="auto" style="border-bottom: 1px"/>
                                                    <input type="checkbox" name="teeth_number[]"
                                                                value="8 Upper Left"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>

                                            <li>
                                                <label class="image-check">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooths/7.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]"
                                                           value="7 Upper Left"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooths/6.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]"
                                                           value="6 Upper left"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooths/5.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]"
                                                           value="5 Upper Left"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooths/4.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]"
                                                           value="4 Upper Left"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooths/3.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]"
                                                           value="3 Upper Left"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooths/2.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]"
                                                           value="2 Upper Left"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooths/1.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]"
                                                           value="1 Upper Left"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>

                                        </ul>
                                    </div>
                                    <div class="col-md-6 col-xs-6">
                                        <ul class="ullist">
                                            <li>
                                                <label class="image-check">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooths/1.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]"
                                                           value="1 Upper Right"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooths/2.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]"
                                                           value="2 Upper Right"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooths/3.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]"
                                                           value="3 Upper Right"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooths/4.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]"
                                                           value="4 Upper Right"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooths/5.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]"
                                                           value="5 Upper Right"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooths/6.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]"
                                                           value="6 Upper Right"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooths/7.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]"
                                                           value="7 Upper Right"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooths/8.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]"
                                                           value="8 Upper Right"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                {{-- Lower Tooths--}}
                                <div class="row" style="margin-left:-50px;">
                                    <div class="col-md-6 col-xs-6">
                                        <ul class="ullist">
                                            <li>
                                                <label class="image-check">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooth_lower/8.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]"
                                                           value="8 Lower Left" id="8_Lower_Left"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooth_lower/7.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]"
                                                           value="7 Lower Left" id="7_Lower_Left"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooth_lower/6.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]"
                                                           value="6 Lower left" id="6_Lower_Left"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooth_lower/5.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]"
                                                           value="5 Lower Left" id="5_Lower_Left"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooth_lower/4.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]"
                                                           value="4 Lower Left" id="4_Lower_Left"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooth_lower/3.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]"
                                                           value="3 Lower Left" id="3_Lower_Left"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooth_lower/2.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]"
                                                           value="2 lower Left" id="2_Lower_Left"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooth_lower/1.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]"
                                                           value="1 lower Left" id="1_Lower_Left"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>

                                        </ul>
                                    </div>
                                    <div class="col-md-6 col-xs-6">
                                        <ul class="ullist">
                                            <li>
                                                <label class="image-check">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooth_lower/1.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]" value="1 Lower Right"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooth_lower/2.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]" value="2 Lower Right"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooth_lower/3.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]" value="3 Lower Right"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooth_lower/4.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]" value="4 Lower Right"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooth_lower/5.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]" value="5 Lower Right"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooth_lower/6.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]" value="6 Lower Right"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooth_lower/7.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]" value="7 Lower Right"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooth_lower/8.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]" value="8 Lower Right"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>

                                        </ul>
                                    </div>
                                </div>

                            </div>
                            {{-- End of image Tooth--}}
                            <br>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="referesh"
                                       style="margin-left:30px;width:95%;">
                                    <thead>
                                    <th>{{trans('file.id')}}</th>
                                    <th>{{trans('file.teeth_number')}}</th>
                                    <th>Treatment</th>
                                    <th>Dentaldefect</th>

                                    <th>Delete teeth</th>
                                    </thead>
                                    <tbody>
                                    <?php $i = 1;?>
                                    @foreach($teeth as $te)
                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td>{{$te->tooth_number}}</td>
                                            <td>{{$te->treatment}}</td>
                                            <td>{{$te->dentaldefect}}</td>
                                            <td>
                                                <form action="/treatment/{{ $te->id }}" method="post" id="formDeleteTeeth">
                                                    @method('delete')
                                                    <button class="btn btn-xs btn-danger delete_teeth" type="submit" id="{{ $te->id }}" data-id="{{ $te->id }}"><i
                                                                class="fa fa-remove"></i>&nbsp;Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php $i++;?>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{ $teeth->links() }}
                            </div>


                            <form id="form" action="/operation" method="POST">

                                <div class="row" style="margin-top: 15px">
                                    <input type="checkbox" id="next" name="have_xray" value="yes"
                                           style="visibility:hidden;">


                                    @foreach($checkValue as $check)
                                        <input type="hidden" value="{{ $check->visits }}" name="visits">
                                    @endforeach
                                    <input type="hidden" name="FK_id_patient" value="{{ $patient_id }}"/>
                                    <input type="hidden" name="type_treatment" value="General Treatment"/>
                                    <div class="col-md-6">
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
                                        <button type="submit" id="submitform"
                                                class="btn btn-primary">{{trans('file.save')}}&nbsp;<i
                                                    class="fa fa-save"></i>
                                        </button>
                                        <button type="reset" class="btn btn-white"> {{trans('file.cancel')}}&nbsp;
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    {{-- End of tab 2 --}}

                    {{-- panel tab 3 orthondistst --}}
                    <div id="tab-3" class="tab-pane">
                        <div class="panel-body" style="">
                            <br>
                            {{-- Header of title --}}
                            <div class="row"
                                 style=" padding-left:20px; border-radius: 5px;margin-left:0px;margin-right: 10px; background-color: #73eee4; color: #000;">
                                <h3 style="font-weight: bold;">{{ trans('file.prosthesis_treatment') }}</h3>
                            </div>

                            <br/>

                            <div class="container-fluid">
                                <div class="row" style="margin-left:-50px;">
                                    <div class="col-md-6 col-xs-6">
                                        <ul class="ullist">
                                            <li>
                                                <label class="image-check_prosthesis">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooths/8.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]"
                                                           value="8 Upper Left"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check_prosthesis">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooths/7.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]"
                                                           value="7 Upper Left"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check_prosthesis">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooths/6.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]"
                                                           value="6 Upper left"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check_prosthesis">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooths/5.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]"
                                                           value="5 Upper Left"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check_prosthesis">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooths/4.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]"
                                                           value="4 Upper Left"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check_prosthesis">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooths/3.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]"
                                                           value="3 Upper Left"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check_prosthesis">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooths/2.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]"
                                                           value="2 Upper Left"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check_prosthesis">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooths/1.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]"
                                                           value="1 Upper Left"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>

                                        </ul>
                                    </div>
                                    <div class="col-md-6 col-xs-6">
                                        <ul class="ullist">
                                            <li>
                                                <label class="image-check_prosthesis">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooths/1.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]"
                                                           value="1 Upper Right"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check_prosthesis">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooths/2.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]"
                                                           value="2 Upper Right"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check_prosthesis">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooths/3.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]"
                                                           value="3 Upper Right"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check_prosthesis">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooths/4.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]"
                                                           value="4 Upper Right"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check_prosthesis">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooths/5.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]"
                                                           value="5 Upper Right"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check_prosthesis">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooths/6.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]"
                                                           value="6 Upper Right"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check_prosthesis">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooths/7.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]"
                                                           value="7 Upper Right"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check_prosthesis">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooths/8.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]"
                                                           value="8 Upper Right"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                {{-- Lower Tooths--}}
                                <div class="row" style="margin-left:-50px;">
                                    <div class="col-md-6 col-xs-6">
                                        <ul class="ullist">
                                            <li>
                                                <label class="image-check_prosthesis">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooth_lower/8.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]" value="8 Lower Left"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check_prosthesis">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooth_lower/7.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]" value="7 Lower Left"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check_prosthesis">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooth_lower/6.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]" value="6 Lower left"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check_prosthesis">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooth_lower/5.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]" value="5 Lower Left"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check_prosthesis">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooth_lower/4.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]" value="4 Lower Left"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check_prosthesis">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooth_lower/3.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]" value="3 Lower Left"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check_prosthesis">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooth_lower/2.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]" value="2 lower Left"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check_prosthesis">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooth_lower/1.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]" value="1 lower Left"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>

                                        </ul>
                                    </div>
                                    <div class="col-md-6 col-xs-6">
                                        <ul class="ullist">

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <br/>

                            <div class="table-responsive" id="divToReload">
                                <table class="table table-striped table-bordered table-hover" id="mytableProsthesis"
                                       style="margin-left:30px;width:95%;">
                                    <thead>
                                        <th>{{trans('file.id')}}</th>
                                        <th>{{trans('file.teeth_number')}}</th>
                                        <th>Type Prosthesis</th>
                                        <th>Teeth shade</th>
                                        <th>Teeth Cover</th>
                                        <th>Delete</th>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1;?>
                                        @foreach($teeth_pros as $te)
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td>{{ $te->tooth_number }}</td>
                                                <td>{{ $te->type_prosthesis }}</td>
                                                <td>{{ $te->shade }}</td>
                                                <td>{{ $te->type_cover }}</td>
                                                <td>
                                                    <form action="/treatment/{{ $te->id }}" method="post" id="formDeleteTeeth_prosthesis">
                                                        @method('delete')
                                                        <button class="btn btn-xs btn-danger delete_teeth_prosthesis" type="submit" data-id="{{ $te->id }}" id="{{ $te->id }}"><i
                                                                    class="fa fa-remove"></i>&nbsp;Delete
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php $i++;?>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $teeth->links() }}
                            </div>



                            <form id="form" action="/operation" method="POST">
                                <input type="hidden" name="type_treatment" value="Prosthesis Treatment"/>
                                <input type="text" name="teeth_number_all" hidden id="tooth_number_ortho"/>

                                <div class="row" style="margin-top: 15px">
                                    <input type="checkbox" id="next" name="have_xray" value="yes"
                                           style="visibility:hidden;">

                                    @foreach($checkValue as $check)
                                        <input type="hidden" value="{{ $check->visits }}" name="visits">
                                    @endforeach

                                    <input type="hidden" name="FK_id_patient" value="{{ $patient_id }}"/>
                                    <div class="col-md-6">

                                        {{--<input type="hidden" class="form-control" name="id_treatment" id="id_treatment">--}}
                                        <div class="form-group">
                                            <label for="nex">Cost :</label>
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
                                        <button type="submit" id="submitformortho"
                                                class="btn btn-primary">{{trans('file.save')}}&nbsp;<i
                                                    class="fa fa-save"></i>
                                        </button>
                                        <button type="reset" class="btn btn-white"> {{trans('file.cancel')}}&nbsp;
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div id="tab-4" class="tab-pane">
                        <div class="panel-body" style="">
                            <br>
                            {{-- Header of title --}}
                            <div class="row  bg-info"
                                 style=" padding-left:20px; border-radius: 5px;margin-left:0px;margin-right: 10px; background-color: #63ee75; color:#000;">
                                <h3 style="font-weight: bold;">X-Ray</h3>
                            </div>

                            <br/>

                            <div class="container-fluid">
                                <div class="row" style="margin-left:-50px;">
                                    <div class="col-md-6 col-xs-6">
                                        <ul class="ullist">
                                            <li>
                                                <label class="image-check-xray">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooths/8.png') }}" width="100%"
                                                         height="auto" style="border-bottom: 1px"/>
                                                    <input type="checkbox" name="teeth_number[]"
                                                           value="8 Upper Left"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check-xray">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooths/7.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]"
                                                           value="7 Upper Left"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check-xray">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooths/6.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]"
                                                           value="6 Upper left"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check-xray">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooths/5.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]"
                                                           value="5 Upper Left"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check-xray">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooths/4.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]"
                                                           value="4 Upper Left"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check-xray">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooths/3.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]"
                                                           value="3 Upper Left"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check-xray">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooths/2.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]"
                                                           value="2 Upper Left"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check-xray">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooths/1.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]"
                                                           value="1 Upper Left"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>

                                        </ul>
                                    </div>
                                    <div class="col-md-6 col-xs-6">
                                        <ul class="ullist">
                                            <li>
                                                <label class="image-check-xray">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooths/1.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]"
                                                           value="1 Upper Right"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check-xray">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooths/2.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]"
                                                           value="2 Upper Right"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check-xray">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooths/3.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]"
                                                           value="3 Upper Right"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check-xray">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooths/4.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]"
                                                           value="4 Upper Right"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check-xray">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooths/5.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]"
                                                           value="5 Upper Right"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check-xray">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooths/6.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]"
                                                           value="6 Upper Right"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check-xray">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooths/7.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]"
                                                           value="7 Upper Right"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check-xray">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooths/8.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]"
                                                           value="8 Upper Right"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                {{-- Lower Tooths--}}
                                <div class="row" style="margin-left:-50px;">
                                    <div class="col-md-6 col-xs-6">
                                        <ul class="ullist">
                                            <li>
                                                <label class="image-check-xray">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooth_lower/8.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]" value="8 Lower Left"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check-xray">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooth_lower/7.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]" value="7 Lower Left"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check-xray">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooth_lower/6.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]" value="6 Lower left"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check-xray">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooth_lower/5.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]" value="5 Lower Left"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check-xray">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooth_lower/4.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]" value="4 Lower Left"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check-xray">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooth_lower/3.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]" value="3 Lower Left"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check-xray">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooth_lower/2.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]" value="2 lower Left"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check-xray">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooth_lower/1.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]" value="1 lower Left"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>

                                        </ul>
                                    </div>
                                    <div class="col-md-6 col-xs-6">
                                        <ul class="ullist">
                                            <li>
                                                <label class="image-check-xray">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooth_lower/1.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]" value="1 Lower Right"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check-xray">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooth_lower/2.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]" value="2 Lower Right"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check-xray">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooth_lower/3.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]" value="3 Lower Right"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check-xray">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooth_lower/4.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]" value="4 Lower Right"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check-xray">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooth_lower/5.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]" value="5 Lower Right"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check-xray">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooth_lower/6.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]" value="6 Lower Right"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check-xray">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooth_lower/7.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]" value="7 Lower Right"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="image-check-xray">
                                                    <img class="img-responsive"
                                                         src="{{ asset('img/tooth_lower/8.png') }}" width="100%"
                                                         height="auto"/>
                                                    <input type="checkbox" name="teeth_number[]" value="8 Lower Right"/>
                                                    <i class="fa fa-check hidden"></i>
                                                </label>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <br/>

                            <form id="form" action="/xray" method="POST">

                                <input type="text" name="teeth_number_all" hidden id="tooth_number_ortho"/>

                                <div class="row" style="margin-top: 15px">

                                    <input type="hidden" name="FK_id_patient" value="{{ $patient_id }}"/>
                                    <div class="col-md-6">

                                        <input type="text" name="doctor_name"
                                               value="{{ $patient_in_treatment->doctor->first_name }}" style="visibility: hidden;">

                                        <input type="text" name="patient_name" value="{{ $patient_in_treatment->name }}"
                                               style="visibility: hidden;">

                                        <input type="text" name="patient_id" value="{{ $patient_in_treatment->id }}"
                                               style="visibility: hidden;">

                                        <input type="hidden" value="not" id="tooth" hidden name="xray_status"/>

                                        <input type="hidden" class="form-control" value="" id="tooth_number_3" name="tooth_number"
                                               required>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5">
                                        <button type="submit" id="xray_btn"
                                                class="btn btn-primary">Take X-Ray&nbsp;<i
                                                    class="fa fa-save"></i>
                                        </button>
                                        <button type="reset" class="btn btn-white"> {{trans('file.cancel')}}&nbsp;
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    {{-- End of tab 3 --}}

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
                        <form id="form" action="/xray" method="post" id="xray_form">


                            <br/>
                            {{-- pass value tooth number using jquery --}}
                            <label class="control-label">Tooth Number</label>
                            <input type="text" class="form-control" value="" id="tooth_number_3" name="tooth_number"
                                   required>

                            <br>
                            <button type="button" class="btn btn-white pull-right" data-dismiss="modal"
                                    style="margin-bottom: 10px;">{{trans('file.close')}}</button>
                            <button type="submit" class="btn btn-primary pull-right" id="save" onclick=""
                                    style="margin-bottom: 10px;margin-right: 20px;">{{trans('file.save')}}</button>

                        </form>
                        <br>


                    </div>

                    <div class="modal-footer">

                    </div>
                </div>
            </div>
        </div>

        {{-- modal window general treatment --}}
        <div class="modal inmodal" id="general_treatment" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content animated fadeIn">
                    <form id="myform" action="/treatment" method="post" name="myform">

                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span
                                        aria-hidden="true">&times;</span><span
                                        class="sr-only">{{trans('file.close')}}</span></button>
                            <img src="{{ asset('img/general_treatment.png') }}" width="150px"/>
                            <h4 class="modal-title">General Treatment</h4>
                        </div>
                        <div class="modal-body">

                            <input type="hidden" name="patient_id" value="{{ $patient_in_treatment->id}}"/>

                            {{--<input type="hidden" name="type_treatment" value="General Treatment"/>--}}
                            <input type="hidden" name="teeth_id" value="null" id="teeth_id"/>

                            <div class="form-group">
                                <label>Tooth number</label>
                                <input type="text" value="" disabled="" id="tooth_number" name="tooth_number" class="form-control"/>
                            </div>

                            <div class="form-group">
                                <label>Dental Defect *</label>
                                <select class="form-control" name="dentaldefect" id="dentaldefect" required>
                                    <option disabled
                                            selected>{{trans('file.select_dental_defect')}}</option>
                                    @foreach($dentalDefectList as $list)
                                        <option value="{{ $list->dental_defect }}">{{ $list->dental_defect }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>{{trans('file.treatment')}} :</label>
                                <select class="form-control" name="treatment" required id="treatment-select"
                                        onchange="getcolor(this)">
                                    <option disabled>{{trans('file.treatment')}}</option>
                                    @foreach($treatementList as $listTreatement)
                                        <option style="color: #{{ $listTreatement->color }}; font-weight: bold"
                                                value="{{ $listTreatement->treatment }}"
                                                id="{{ $listTreatement->color }}">
                                            {{ $listTreatement->treatment }} </option>
                                    @endforeach
                                </select>
                            </div>


                            <br>

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-white pull-right" data-dismiss="modal"
                                    style="margin-bottom: 10px;">{{trans('file.close')}}</button>
                            <button type="submit" class="btn btn-primary pull-right" id="refresh-btn"
                                    style="margin-bottom: 10px;margin-right: 20px;">{{trans('file.save')}}</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>

        {{-- Modal window Prosthise treatment --}}
        <div class="modal inmodal" id="prosthesis_treatment" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content animated fadeIn">
                    <form id="myform_prosth" action="/treatment" method="post" name="myform_prosth">

                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span
                                        aria-hidden="true">&times;</span><span
                                        class="sr-only">{{trans('file.close')}}</span></button>
                            <img src="{{ asset('img/prosth_img.jpg') }}" width="250px"/>
                            <h4 class="modal-title">Prosthesis Treatment</h4>
                        </div>
                        <div class="modal-body">

                            <input type="hidden" name="patient_id" value="{{ $patient_in_treatment->id}}"/>

                            <div class="form-group">
                                <label>Tooth number</label>
                                <input type="text" value="" disabled id="tooth_number" name="tooth_number" class="form-control"/>
                            </div>

                            <div class="form-group">
                                <label>Type of Prosthesis</label>
                                <ul class="prothisis">
                                    <li>
                                        <div class="i-checks"><label>Static &nbsp;<input type="radio"
                                                                                         name="type_prosthesis"
                                                                                         value="static"
                                                                                         checked/></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="i-checks"><label>Dynamic &nbsp;<input type="radio"
                                                                                          name="type_prosthesis"
                                                                                          value="dynamic"/></label>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="form-group">
                                <label>Select shade teeth</label>
                                <select class="form-control" name="shade" required>
                                    <option disabled
                                            selected>Select shade
                                    </option>
                                    @foreach($teethShades as $teethshade)
                                        <option value="{{ $teethshade->shade }}">{{ $teethshade->shade }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Select Cover :</label>
                                <select class="form-control" name="type_cover"
                                        onchange="getFeeTreatment(this);" required>
                                    <option disabled selected>Select Cover</option>
                                    @foreach($teethTypeCovers as $cover)
                                        <option value="{{ $cover->type }}"
                                                id="{{ $cover->price }}">
                                            {{ $cover->type }} </option>
                                    @endforeach
                                </select>
                            </div>

                            <br>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-white pull-right" data-dismiss="modal"
                                    style="margin-bottom: 10px;">{{trans('file.close')}}</button>
                            <button type="submit" class="btn btn-primary pull-right" id="refresh-btn-prosthesis"
                                    style="margin-bottom: 10px;margin-right: 20px;">{{trans('file.save')}}</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>


        @endsection

        @section('script')



            <script src="{{ asset('dashboard/js/plugins/toastr/toastr.min.js') }}"></script>

            {{--            <script src="{{ asset('js/tooths.js') }}" type="javascript"></script>--}}


            <script>
                $(document).ready(function () {
                    $('#myform').on('submit', function (e) {
                        e.preventDefault();
                        $.ajax({
                            url: $(this).attr('action') || window.location.pathname,
                            type: "POST",
                            data: $(this).serialize(),
                            dataType:"json",
                            success: function (data) {
                                $("#form_output").html(data);
                                $("#mytable").append("<tr><td>"+data.id+"</td><td>"+data.tooth_number+"</td><td>"+data.treatment+"</td><td>"+data.dentaldefect+"</td><td>" +
                                    "<form action='/treatment/"+data.id+"'  method='post'>" +
                                        "<input type='hidden' name='_method' value='delete' /> "+
                                    "<button class='btn btn-xs btn-danger demo3' type='submit'><i class='fa fa-remove'></i>&nbsp;Delete</button>" +
                                    "</form></td></tr>");
                            },
                            error: function (jXHR, textStatus, errorThrown) {
                                alert(errorThrown);
                            }
                        });
                    });
                });

                $(document).ready(function () {
                    $('#myform_prosth').on('submit', function (e) {
                        e.preventDefault();
                        $.ajax({
                            url: $(this).attr('action') || window.location.pathname,
                            type: "POST",
                            data: $(this).serialize(),
                            dataType:"json",
                            success: function (data) {
                                $("#form_output").html(data);
                                $("#mytableProsthesis").append("<tr><td>"+data.id+"</td><td>"+data.tooth_number+"</td><td>"+data.type_prosthesis+"</td><td>"+data.shade+"</td><td>"+data.type_cover+"</td><td>" +
                                    "<form action='/treatment/"+data.id+"'  method='post' id='formDeleteTeeth'>" +
                                    "<input type='hidden' name='_method' value='delete' /> "+
                                    "<button class='btn btn-xs btn-danger delete_teeth' type='submit' data-id='"+data.id+"'><i class='fa fa-remove'></i>&nbsp;Delete</button>" +
                                    "</form></td></tr>");
                            },
                            error: function (jXHR, textStatus, errorThrown) {
                                alert(errorThrown);
                            }
                        });
                    });
                });

                $('.delete_teeth').on('click', function(e) {
                    var inputData = $('#formDeleteTeeth').serialize();

                    var dataId = $(this).attr('data-id');
                    var el = this;
                    $.ajax({
                        url: '{{ url('/treatment') }}' + '/' + dataId,
                        type: 'POST',
                        data: inputData,
                        success: function( data ) {
                            $(el).closest("tr").remove();
                        },
                        error: function( data ) {
                            if ( data.status === 422 ) {
                                toastr.error('Cannot delete the category');
                            }
                        }
                    });

                    return false;
                });

                $('.delete_teeth_prosthesis').on('click', function(e) {
                    var inputData = $('#formDeleteTeeth_prosthesis').serialize();

                    var dataId = $(this).attr('data-id');
                    var el = this;
                    $.ajax({
                        url: '{{ url('/treatment') }}' + '/' + dataId,
                        type: 'POST',
                        data: inputData,
                        success: function( data ) {
                            $(el).closest("tr").remove();
                        },
                        error: function( data ) {
                            if ( data.status === 422 ) {
                                toastr.error('Cannot delete the category');
                            }
                        }
                    });

                    return false;
                });
            </script>

            <script>
                function getFeeTreatment(e) {
                    document.getElementById('cost_treatment').value = e[e.selectedIndex].id
                }

            </script>


            <script>
                $(document).ready(function () {
                    $('#myform').on('submit', function (e) {
                        e.preventDefault();
                        $.ajax({
                            url: $(this).attr('action') || window.location.pathname,
                            type: "POST",
                            data: $(this).serialize(),
                            success: function (data) {
                                $("#form_output").html(data);

                            },
                            error: function (jXHR, textStatus, errorThrown) {
                                alert(errorThrown);
                            }
                        });
                    });
                });


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

                // sync the state to the input
                var tooth_num;
                var tooth_pos = null;
                var tooth_id;


                $(".image-check").on("click", function (e) {
                    $(this).toggleClass('image-check-checked');
                    var $checkbox = $(this).find('input[type="checkbox"]').attr('checked','checked');
                    tooth_num = $checkbox.val();
                    $('.modal-body #tooth_number').val(tooth_num);
                    $('#general_treatment').modal('show');
                    e.preventDefault();
                });

                $(".image-check-xray").on("click", function (e) {
                    $(this).toggleClass('image-check-checked-xray');
                    var $checkbox = $(this).find('input[type="checkbox"]').attr('checked','checked');
                    tooth_num = $checkbox.val();
                    e.preventDefault();
                });



                //                Image check box for prosthesis
                $(".image-check_prosthesis").on("click", function (e) {
                    $(this).toggleClass('image-check-checked');
                    var $checkbox = $(this).find('input[type="checkbox"]').attr('checked','checked');
                    tooth_num = $checkbox.val();
                    $('.modal-body #tooth_number').val(tooth_num);
                    $('#prosthesis_treatment').modal('show');
                    e.preventDefault();
                });


                $("#refresh-btn").on("click", function (e) {
                    $('.image-check-checked').css('background-color', '#ea615a');
                    $('.image-check-checked').css('border-radius', '15px');

                });
                {{--@foreach($teeth as $t)--}}
                {{--@if($t->tooth_number == '8 Upper Left')--}}
                {{--$(document).ready(function(){--}}

                {{--$('#upper_left8').css('background-color', '#ea615a');--}}
                {{--$('#upper_left8').css('border-radius', '15px');--}}


                {{--});--}}
                {{--@endif--}}
                {{--@endforeach--}}

                $("#refresh-btn-prosthesis").on("click", function (e) {
                    $('.image-check-checked').css('background-color', '#ea615a');
                    $('.image-check-checked').css('border-radius', '15px');
                });


                $('#myform').submit(function (e) {
                    e.preventDefault();
                    $('#general_treatment').modal('toggle'); //or  $('#IDModal').modal('hide');
                    return false;
                });


                $('#xray_form').submit(function (e) {
                    e.preventDefault();
                    $('#xray').modal('toggle'); //or  $('#IDModal').modal('hide');
                    return false;
                });


                $('#myform_prosth').submit(function (e) {
                    e.preventDefault();
                    $('#prosthesis_treatment').modal('toggle'); //or  $('#IDModal').modal('hide');
                    return false;
                });


                $("#btnsubmit").on("click", function (e) {
                    var $checkbox = $("input[type='checkbox']");
                    var $checkbox_lenght = $('input[type="checkbox"]').length;
                    var values;
                    for (var i = 0; i < $checkbox_lenght; i++) {
                        values = $checkbox[i].value;
                    }
                    e.preventDefault();
                });

//                $(document).on("click", ".delete_teeth" , function() {
//                    var delete_id = $(this).data('id');
//                    var el = this;
//                    $.ajax({
//                        url: '/treatment/'+delete_id,
//                        type: 'POST',
//                        success: function(response){
////
//                            alert(response);
//                        }
//                    });
//                });


                $(document).on("click", "#xray_btn", function () {
                    var valuesArray = $('input:checkbox:checked').map(function () {
                        return $(this).val();
                    }).get().join();
                    $("#tooth_number_3").val(valuesArray);
                });

                $(document).on("click", "#submitform", function () {

                    var valuesArray = $('input:checkbox:checked').map(function () {
                        return $(this).val();
                    }).get().join();

                    $("#tooth_number_3").val(valuesArray);
                });

                $(document).ready(function () {
                    $('.demo3').on('click', function (e) {
                        e.preventDefault();
                        var form = $(this).parents('form');
                        swal({
                            title: "Are you sure?",
                            text: "It will be deleted from database",
                            type: "warning",
                            showCancelButton: true,
                            confirmButtonColor: "#DD6B55",
                            confirmButtonText: "Yes, delete it!",
                            closeOnConfirm: false
                        }, function (isConfirm) {
                            if (isConfirm) form.submit();
                        });
                    });
                });

                $(document).ready(function () {
                    $('.demo_xray').on('click', function (e) {
                        e.preventDefault();
                        var form = $(this).parents('form');
                        swal({
                            title: "Are you sure?",
                            text: "Take again X-Ray again from these teeth",
                            type: "warning",
                            showCancelButton: true,
                            confirmButtonColor: "#5178dd",
                            confirmButtonText: "Yes, X-Ray it!",
                            closeOnConfirm: false
                        }, function (isConfirm) {
                            if (isConfirm) form.submit();
                        });
                    });
                });

                $(document).on("click", "#submitformortho", function () {

                    var valuesArray = $('input:checkbox:checked').map(function () {
                        return $(this).val();
                    }).get().join();

                    $("#tooth_number_ortho").val(valuesArray);
                });


                $(".tooth_position").on("click", function () {
                    tooth_pos = $(this).val();
                    $("#tooth_position").val(tooth_pos);
                });


            </script>

@endsection