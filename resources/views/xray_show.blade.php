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
            <form method="post" action="/xray/{{ $spats->id }}">
                    {{csrf_field()}}
                    {{method_field('PUT')}}
                <div class="row" style="margin-bottom: -30px;">
                    <div class="row m-b-lg m-t-lg">
                        <div class="col-md-6">
                            <div class="profile-info">
                                <div class="">
                                    <div>
                                        <h2 class="no-margins font-b"><label>{{trans('file.patient_name')}}:&nbsp;</label>
                                            <h3><input type="text" name="patient_name" value="{{$spats->patient_name}}" class="form-control" readonly></h3>
                                        </h2>
                                        <h2 class="no-margins font-b"><label>{{trans('file.patient_id')}}:&nbsp;</label>
                                            <input type="text" name="patient_id" value="{{$spats->patient_id}}" class="form-control" readonly>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <table class="table small m-b-xs table-striped table-hover" >
                                <tbody>
                                   <tr>
                                        <td>
                                            <span class="font-m">{{trans('file.date')}}:&nbsp;<i class="fa fa-calendar"></i></span>
                                        </td>
                                        <td>
                                            <h3><b>&nbsp;{{$spats->created_at}}</b></h3>
                                        </td>
                                    </tr>
                                <tr>
                                    <td>
                                        <span class="font-m">{{trans('file.doctor')}}:&nbsp; <i class="fa fa-user-md"></i><input type="text" name="doctor_name" class="form-control" value="{{$spats->doctor_name}}" readonly> </span>
                                    </td>
                                    <td>
                                        <span class="font-m">{{trans('file.xray_id')}}:&nbsp;<input type="text" name="id" class="form-control" value="{{$spats->id}}" readonly> </span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                     <h3>{{trans('file.tooth_position')}}:&nbsp;</h3></td>
                                    <td>
                                        <input type="text" name="tooth_position" class="form-control" value="{{$spats->tooth_position}}" readonly>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                           <button type="button" class="btn btn-primary btn-md" onclick="changeStatus()" id="change">{{trans('file.change_xray_status')}}</button>
                                    </td>
                                    <td>
                                        <input type="text" id="status" style="font-size:15px;" name="xray_status" class="form-control" value="{{$spats->xray_status}}" readonly>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <hr class="bg-primary"/>
                <div class="row">
                    <div class="col-md-6">
                        <table class="table table-condensed table-bordered text-center">
                            <tr>
                                <td><strong>{{trans('file.teeth_number')}} :</strong></td>
                                <td><input type="text" name="tooth_number" class="form-control" value="{{$spats->tooth_number}}" readonly></td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <img src="{{asset('img/all_tooth.jpg')}}" class="img-responsive" id="img_all_tooth">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3" style="margin-top:30px;">
                    <button class="btn btn-primary xray" type="submit" value="Done">{{trans('file.save')}} &nbsp;<i class="fa fa-save"></i></button>&nbsp;&nbsp;
                        <a class="btn btn-white" href="/xray">{{trans('file.cancel')}}</a>
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


