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

    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>{{trans('file.patient_xray_details')}} </h5>
            </div>

            <div class="ibox-content">
            <form method="post" action="/xray/{{ $spats->id }}">
                    {{csrf_field()}}
                    {{method_field('PUT')}}
                {{--<div class="row" style="margin-bottom: -30px;">--}}
                    <div class="row ">
                        <div class="col-md-6">
                            <h4 class="no-margins"><label>{{trans('file.patient_name')}}:&nbsp;</label>
                                <h3><input type="text" name="patient_name" value="{{$spats->patient_name}}" class="form-control" readonly></h3>
                            </h4>
                            <h4 style="margin-top: 10px;"><label>{{trans('file.patient_id')}}:&nbsp;</label>
                                <input type="text" name="patient_id" value="{{$spats->patient_id}}" class="form-control" readonly>
                            </h4>
                            <h4 style="margin-top: 10px;"><label>{{trans('file.xray_id')}}:&nbsp;</label>
                                <input type="text" name="id" class="form-control" value="{{$spats->id}}" readonly>
                            </h4>
                            <h4 style="margin-top: 10px;"><label>{{trans('file.doctor')}}:&nbsp;</label>
                                <input type="text" name="doctor_name" class="form-control" value="{{$spats->doctor_name}}" readonly>
                            </h4>
                            <h4 style="margin-top: 10px;"><label>{{trans('file.date')}} <i class='fa fa-calendar'></i>:&nbsp;</label>
                                <input type="text" name="date" class="form-control" value="{{$spats->created_at}}" readonly>
                            </h4>
                        </div>
                        <div class="col-md-6" style="margin-top: 10px;">
                            <img src="{{asset('img/all_tooth.jpg')}}" class="img-responsive" id="img_all_tooth">
                        </div>
                        <div class="row">
                            <div class="col-xs-12" style="width: 97%;margin-left: 17px;">
                                <h4 style="margin-top: 10px;"><label>{{trans('file.teeth_number')}} :</label>
                                    <input type="text" name="tooth_number" class="form-control" value="{{$spats->tooth_number}}" readonly>
                                </h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                <div style="margin-top: 10px;margin-left: 17px;">
                                    <button type="button" style="width: 49%" class="btn btn-primary btn-md" onclick="changeStatus()" id="change">{{trans('file.change_xray_status')}}</button>
                                    <input type="text" id="status" style="font-size:15px; width: 49%;float:right;" name="xray_status" class="form-control" value="{{$spats->xray_status}}" readonly>
                                </div>
                            </div>
                            <div class="col-xs-6 text-right">
                                <div style="margin-top: 10px;margin-right: 17px;">
                                    <button class="btn btn-primary xray" type="submit" value="save">{{trans('file.save')}} &nbsp;<i class="fa fa-save"></i></button>&nbsp;&nbsp;
                                    <a class="btn btn-white" href="/xray">{{trans('file.cancel')}}</a>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                        </div>

                    </div>
                <div class="row">
                    <div class="col-lg-3" style="margin-top:30px;">

                    </div>
                </div>
                </form>
            </div>

        </div>
    </div>

@endsection

@section('script')
    <script type="text/javascript">
        function changeStatus() {
           document.getElementById('status').setAttribute('value','yes');
        }
    </script>
@endsection


