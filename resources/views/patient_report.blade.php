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









<div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Patient Information <i class="fa fa-info"></i></h5>
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
                    <a class="close-link" style="margin-right:20px;">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content" id="divone">
                
                <div class="container">
                <div class="row">
                    
                    {{--first doctor--}}
                            
                            <div class="row" style="">
                                <div class="col-sm-5">
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                        <button type="button" class="btn btn-sm btn-success"> Search</button> </span>
                                        <input type="text" placeholder="Search patient name"
                                                class="input-sm form-control"> 
                                    </div>
                                </div>

                            </div>

                            <div class="row" style="margin-top:30px;">
                                <div class="col-sm-11">
                                        <table class="table table-hover  no-margins" >
                                            <thead>
                                            <tr class="bg-light">
                                                <td>P-ID</td>
                                                <th>Patient Name</th>
                                                <th>Last Name</th>
                                                <th>Doctor Name</th>
                                                <th>Status</th>
                                                <th>Date & Time Appointment</th>
                                                <th>Healths Problem</th>
                                                <th>Full Details</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>P-078554422</td>
                                                <td>Ahmad</td>
                                                <td>Sultani</td>
                                                <td></i>Dr.Samim</td>
                                                <td>First Time</td>
                                                <td><i class="fa fa-calendar"></i>&nbsp;2018/8/1 - 8:00 AM</td>
                                                <td class="">Blood pressure</td>
                                                <td><a class="btn btn-xs btn-primary" href="/print_preport" ><i class="fa fa-info"></i>
                                                        Details</a></td>

                                            </tr>
                                            <tr>
                                                <td>P-0786906677</td>
                                                <td>Naweed</td>
                                                <td>Rezayee</td>
                                                <td></i>Dr.Samim</td>
                                                <td>Second Time</td>
                                                <td><i class="fa fa-calendar"></i>&nbsp;2018/8/1 - 8:20 AM</td>
                                                <td class="">Diabetics</td>
                                                <td><a class="btn btn-xs btn-primary" href="/print_preport" ><i class="fa fa-info"></i>
                                                        Details</a></td>
                                            </tr>
                                            <tr>
                                                <td>P-0785445580</td>
                                                <td>Qasim</td>
                                                <td>Mukhtary</td>
                                                <td></i>Dr.Samim</td>
                                                <td>First Time</td>
                                                <td><i class="fa fa-calendar"></i>&nbsp;2018/8/2 - 9:00 AM</td>
                                                <td class="">Hepatitics</td>
                                                <td><a class="btn btn-xs btn-primary" href="/print_preport" ><i class="fa fa-info"></i>
                                                        Details</a></td>
                                            </tr>
                                            <tr>
                                                <td>P-0785564749</td>
                                                <td>Mahmood</td>
                                                <td>Hashimi</td>
                                                <td></i>Dr.Samim</td>
                                                <td>Second Time</td>
                                                <td><i class="fa fa-calendar"></i>&nbsp;2018/8/2 - 9:00 AM</td>
                                                <td class="">Asthma</td>
                                                <td><a class="btn btn-xs btn-primary" href="/print_preport" ><i class="fa fa-info"></i>
                                                        Details</a></td>
                                            </tr>
                                            <tr>
                                                <td>P-0785786788</td>
                                                <td>Ali</td>
                                                <td>Ahmadyar</td>
                                                <td></i>Dr.Samim</td>
                                                <td>First Time</td>
                                                <td><i class="fa fa-calendar"></i>&nbsp;2018/8/2 - 9:00</td>
                                                <td class="">Blood pressure</td>
                                                <td><a class="btn btn-xs btn-primary" href="/print_preport" ><i class="fa fa-info"></i>
                                                        Details</a></td>
                                            </tr>
                                            <tr>
                                                <td>P-0785786866</td>
                                                <td>Mahdi</td>
                                                <td>Safari</td>
                                                <td></i>Dr.Samim</td>
                                                <td>Second Time</td>
                                                <td><i class="fa fa-calendar"></i>&nbsp;2018/8/3 - 10:00 AM</td>
                                                <td class="">Diabetics</td>
                                                <td><a class="btn btn-xs btn-primary" href="/print_preport" ><i class="fa fa-info"></i>
                                                        Details</a></td>
                                            </tr>
                                            <tr>
                                                <td>P-078558099</td>
                                                <td>Ahmad</td>
                                                <td>Rasuli</td>
                                                <td></i>Dr.Samim</td>
                                                <td>First Time</td>
                                                <td><i class="fa fa-calendar"></i>&nbsp;2018/8/3 - 11:00 AM</td>
                                                <td class="">Blood pressure</td>
                                                <td><a class="btn btn-xs btn-primary" href="/print_preport" ><i class="fa fa-info"></i>
                                                        Details</a></td>
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
