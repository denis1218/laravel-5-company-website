@extends('master')

@section('style')
    <link href="dashboard/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
    <style rel="stylesheet">

        #img_all_tooth {
            border-radius: 20px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            border: 20px;
        }

        #my_file {
            display: none;
        }

        .btn-xray {
            height: 57px;
        }

        .bg-khatar {
            background: #ff0004;
        }

        .font-m {
            font-size: 1.2em;
        }

        .font-b {
            font-size: 1.5em;
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
        {{-- table of patient's x-ray --}}
        <div class="col-lg-12" >
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>{{trans('file.patient_xray_list')}}</h5>

                    <br>
                    <br>
                    <div class="row" style="margin-right: 0px;margin-left:0PX;">
                        <div class="col-lg-12">
                            <div class="tabs-container">
                                <ul class="nav nav-tabs" id="demoTabs">
                                    <li class="active"><a data-toggle="tab" href="#tab-1">{{trans('file.new_patient')}}</a></li>
                                    <li class=""><a data-toggle="tab" href="#tab-2">{{trans('file.already_done')}}</a></li>
                                </ul>
                                <div class="tab-content">
                                    {{-- panel tab 1 past history --}}
                                    <div id="tab-1" class="tab-pane active">
                                        <div class="panel-body">
                                            <div class="row">
                                                {{-- table of content of X-Ray of petient --}}
                                                <div class="col-md-12">

                                                    <br/>
                                                    <form action="" ></form>
                                                    <div class="table-responsive">
                                                        <label style="margin-left: 10px;font-size: 15px"><strong><b>{{trans('file.number_of_patient')}}:&nbsp; <span style="color:orange">{!!count($not)!!}</span> &nbsp; {{trans('file.patient')}} </b></strong></label>
                                                        <hr>
                                                        <table class="table table-hover table-bordered table-striped">
                                                            <thead>
                                                            <tr>
                                                                <th>{{trans('file.xray_id')}}</th>
                                                                <th colspan="2">{{trans('file.teeth_number')}}</th>
{{--                                                                <th>{{trans('file.tooth_position')}}</th>--}}
{{--                                                                <th>{{trans('file.patient_id')}}</th>--}}
                                                                <th>{{trans('file.patient_name')}}</th>
                                                                <th>{{trans('file.doctor_name')}}</th>
                                                                <th>{{trans('file.status_of_payment')}}</th>
                                                                <th>{{trans('file.status_of_xray')}}</th>
                                                                <th>{{trans('file.details')}}</th>
                                                            </tr>
                                                            </thead>
                                                            @if(count($count)>0)
                                                                @foreach($patient as $pat)
                                                                    <?php $i = 1 ;?>
                                                                    <tbody>
                                                                    @if($pat->xray_status=='not')
                                                                        <tr>
                                                                            <td>{{ $i }}</td>
                                                                            <td colspan="2">{{$pat->tooth_number}}</td>
{{--                                                                            <td>{{$pat->tooth_position}}</td>--}}
{{--                                                                            <td>{{$pat->patient_id}}</td>--}}
                                                                            <td>{{$pat->patient_name}}</td>
                                                                            <td>{{$pat->doctor_name}}</td>
                                                                            <td>{{$pat->paid_amount}}</td>
                                                                            <td>{{$pat->xray_status}}</td>
                                                                            <td>
                                                                                <form id="del" action="/xray/{{$pat->id}}/edit" id="myForm">
                                                                                    <button class="btn btn-xs btn-info demo3" >{{trans('file.details')}} &nbsp;<i class="fa fa-file-o"></i></button>
                                                                                </form>
                                                                            </td>
                                                                        </tr>
                                                                    @endif
                                                                    </tbody>
                                                                    <?php $i++ ;?>
                                                                @endforeach
                                                            @else
                                                                <h1 class="text-center" style="color:red;font-size: 20px;">{{trans('file.nprfx')}}</h1>
                                                            @endif
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- panel tab 2 new history --}}
                                    <div id="tab-2" class="tab-pane">
                                        <div class="panel-body">
                                            <div class="row">
                                                {{-- table of content of X-Ray of petient --}}
                                                <div class="col-md-12">

                                                    <br/>
                                                    <div class="table-responsive">
                                                                <label style="margin-left: 10px;font-size: 15px"><strong><b>{{trans('file.number_of_patient')}}:&nbsp; <span style="color:orange">{!!count($yes)!!}</span> &nbsp; {{trans('file.patient')}} </b></strong></label>
                                                        <hr>
                                                        <table class="table table-hover table-bordered table-striped">
                                                            <thead>
                                                            <tr>
                                                                <th>{{trans('file.id')}}</th>
                                                                <th colspan="2">{{trans('file.teeth_number')}}</th>
{{--                                                                <th>{{trans('file.tooth_position')}}</th>--}}
{{--                                                                <th>{{trans('file.p_id')}}</th>--}}
                                                                <th>{{trans('file.p_name')}}</th>
                                                                <th>{{trans('file.doctor_name')}}</th>
                                                                <th>{{trans('file.status_of_payment')}}</th>
                                                                <th>{{trans('file.status_of_xray')}}</th>
                                                            </tr>
                                                            </thead>
                                                            @if(count($patient)>0)
                                                            <?php $i = 1;?>
                                                                @foreach($patient as $pat)
                                                                    <tbody>
                                                                    @if($pat->xray_status=='yes')
                                                                        <tr>
                                                                            <td>{{ $i }}</td>
                                                                            <td colspan="2">{{$pat->tooth_number}}</td>
{{--                                                                            <td>{{$pat->tooth_position}}</td>--}}
                                                                            {{--<td>{{$pat->patient_id}}</td>--}}
                                                                            <td>{{$pat->patient_name}}</td>
                                                                            <td>{{$pat->doctor_name}}</td>
                                                                            <td>{{$pat->paid_amount}}</td>
                                                                            <td>{{$pat->xray_status}}</td>
                                                                        </tr>
                                                                    @endif
                                                                    </tbody>
                                                                    <?php $i++ ?>
                                                                @endforeach
                                                            @else
                                                                <h1 class="text-center" style="color:red;font-size: 20px;">{{trans('file.nprfx')}}</h1>
                                                            @endif
                                                        </table>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
        </div>
@endsection

@section('script')

    <script>
        $(document).ready(function () {
            $('.demo3').on('click',function(e){
            e.preventDefault();
            var form = $(this).parents('form');
            swal({
            title: "Has the patient paid X-ray fee?",
            text: "If not, Press cancel and send him/her to finance department!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Take Xray!",
            closeOnConfirm: false
            }, function(isConfirm){
            if (isConfirm) form.submit();
            });
            });
        });
    </script>
@endsection