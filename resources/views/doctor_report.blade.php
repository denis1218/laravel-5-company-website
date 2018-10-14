
@extends('master')

@section('style')
    <link href="dashboard/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <link href="dashboard/css/plugins/dataTables/dataTables.responsive.css" rel="stylesheet">
    <link href="dashboard/css/plugins/dataTables/dataTables.tableTools.min.css" rel="stylesheet">

    <link href="dashboard/css/animate.css" rel="stylesheet">
    <link href="dashboard/css/style.css" rel="stylesheet">
    <link href="dashboard/css/plugins/sweetalert/sweetalert.css" rel="stylesheet"/>
    <style media="screen">
        .bts:hover {
            box-shadow: 4px 4px 4px 4px grey;
            transform: scale(1.1);
        }

        .bts {
            height: 70px;
            width: 155px;
        }
    </style>
@endsection

@section('content')

    {{-- one doctor info report--}}
    <div class="col-lg-12" >
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Doctor</h5>
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
                    <div class="col-md-12 text-right">
                        <a class="btn btn-primary btn-lg" style="float: left;" href="/doctors">
                            <i class="fa fa-arrow-left"></i> &nbsp; Back to Doctors</a>
                        <button class="btn btn-primary btn-lg">Print &nbsp;<i class="fa fa-print"></i></button>
                    </div>
                </div>

                {{-- patient personal information --}}

                <div class="row" style="padding-left:30px; font-size: 20px;">
                    <div class="row m-b-lg m-t-lg">
                        <div class="col-md-5">
{{--                            @foreach($doctor as $d)--}}
                            <div class="profile-info">
                                <div class="">
                                    <div>

                                        <h2 class="no-margins font-b">
                                            {{ $doctor->first_name }}
                                        </h2>
                                        <h4> ID:&nbsp;{{$doctor->id}}</h4>
                                        <small class="font-m">
                                            Dental Expert for 2 years work in dental clinics and more 100 patient visited
                                        </small>

                                    </div>
                                </div>
                            </div>
                            {{--@endforeach--}}
                        </div>
                        <div class="col-md-7">
{{--                            @foreach($doctor as $do)--}}
                            <table class="table small m-b-xs">
                                <tbody>
                                <tr>
                                    <td>
                                        <span class="font-m">Gender:<b>&nbsp;{{$doctor->gender}}</b>&nbsp;<i class="fa fa-male"></i></span>
                                    </td>
                                    <td>
                                        <span class="font-m">Age:<b>&nbsp;{{$doctor->age}}</b>&nbsp;<i class=""></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="font-m">Salary Type:<b>&nbsp; {{$doctor->salary_type}}</b>&nbsp;<i class="fa fa-user-md"></i></span>
                                    </td>
                                    <td>
                                        <span class="font-m">Salary :<b>&nbsp;{{$doctor->salary_amount}}</b>&nbsp;<i class=""></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="font-m">Date Reg:<b>&nbsp;{{$doctor->created_at}}</b>&nbsp;<i class="fa fa-calendar"></i></span>
                                    </td>
                                    <td>
                                        <span class="font-m">Department:<b>&nbsp {{$doctor->department}}</b>&nbsp;<i class=""></i></span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                            {{--@endforeach--}}
                        </div>
                    </div>
                </div>

                {{-- patient personal information --}}
                <hr/>
                {{-- table info patient --}}
                <div class="row">
                    <form action="/doctors/{{$doctor->id}}" method="post">
                        {{csrf_field()}}
                        {{method_field('PUT')}}
                    <div class="col-md-12">
                        <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="font-noraml">Select Range</label>
                                <div class="input-daterange input-group" id="" >
                                    <span class="input-group-addon">From &nbsp;<i class="fa fa-arrow-right"></i></span>
                                    <input type="date" class="input-sm form-control" name="start"/>
                                    <span class="input-group-addon">TO &nbsp;<i class="fa fa-arrow-right"></i></span>
                                    <input type="date" class="input-sm form-control" name="end" />

                                </div>
                            </div>
                        </div>
                            <div class="col-sm-6">
                                <button type="button" class="btn btn-primary" style="margin-top: 23px;height: 30px;width: 90px;">Total</button>
                            </div>
                        </div>
                        <table class="table table-hover table-bordered">
                            <thead>
                            <tr>
                                <th>Patient ID</th>
                                <th>Treatment</th>
                                <th>Treatment Fee</th>
                                <th>Date</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($treatment as $treat)
                                @if($treat->created_at>$doctor->to)
                                @if($treat->status_visits=='complete')
                            <tr>
                                <td>{{$treat->patient->id_patient}}</td>
                                <td>{{$treat->treatment}}</td>
                                <td>{{$treat->paid_amount}}</td>
                                <td>{{$treat->created_at}}</td>
                                <td><span class="label label-info">{{$treat->status_visits}}</span></td>
                            </tr>
                                @endif
                                @endif
                            @endforeach
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-md-5">
                                <table class="table table-hover table-bordered">

                                    <tr>
                                        <td class="text-bold"><h4>Total fee cash: </h4></td>
                                        <td><input type="text" class="form-control" value="{{$total}}" readonly></td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold"><h4>Doctor Salary: </h4></td>
                                        <td><input type="text" name="fee" class="form-control" value="{{$docfee}}" readonly></td>

                                    </tr>
                                    <tr>
                                        <td class="text-bold"><h4>Past Remaining: </h4></td>
                                        <td><input type="text" class="form-control" value="{{$doctor->remaining}}" readonly=""></td>

                                    </tr>

                                    <tr>

                                        <td class="text-bold"><h4>Total Doctor Salary: </h4></td>
                                        <td>
                                            <input type="text" class="form-control" value="{{$docfee+$doctor->remaining}}" name="colection" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold"><h4>Payment amount: </h4></td>
                                        <td>
                                            <input type="number" max="{{$docfee+$doctor->remaining}}" class="form-control" placeholder="Enter the fee amount" name="salary" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="text-right"> <button class="btn btn-primary" type="submit">Pay Salary</button></td>
                                    </tr>
                                </table>
                            </div>
                          </div>
                       </div>
                    </form>
                </div>
                {{-- table info patient --}}
            </div>
        </div>
    </div>





@endsection


@section('script')
    <!-- script -->

    <script src="dashboard/js/plugins/sweetalert/sweetalert.min.js"></script>
    <script>
        $(document).ready(function () {

            $('.demo1').click(function () {
                swal({
                    title: "Welcome in Alerts",
                    text: "Lorem Ipsum is simply dummy text of the printing and typesetting industry."
                });
            });

            $('.demo2').click(function () {
                swal({
                    title: "Successfully Send!",
                    text: "X-Ray Document Successfully send to doctor!",
                    type: "success"
                });
            });

            $('.demo3').click(function () {
                swal({
                    title: "Are you sure?",
                    text: "You will not be able to recover this imaginary file!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes, delete it!",
                    closeOnConfirm: false
                }, function () {
                    swal("Deleted!", "Your imaginary file has been deleted.", "success");
                });
            });

            $('.demo4').click(function () {
                swal({
                        title: "Are you sure?",
                        text: "Your will not be able to recover this imaginary file!",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Yes, delete it!",
                        cancelButtonText: "No, cancel plx!",
                        closeOnConfirm: false,
                        closeOnCancel: false
                    },
                    function (isConfirm) {
                        if (isConfirm) {
                            swal("Deleted!", "Your imaginary file has been deleted.", "success");
                        } else {
                            swal("Cancelled", "Your imaginary file is safe :)", "error");
                        }
                    });
            });


        });
    </script>

    <!-- Data Tables -->
    <script src="dashboard/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="dashboard/js/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script src="dashboard/js/plugins/dataTables/dataTables.responsive.js"></script>
    <script src="dashboard/js/plugins/dataTables/dataTables.tableTools.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="dashboard/js/inspinia.js"></script>
    <script src="dashboard/js/plugins/pace/pace.min.js"></script>


@endsection

