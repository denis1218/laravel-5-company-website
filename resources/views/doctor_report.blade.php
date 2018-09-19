
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
                        <button class="btn btn-primary btn-lg">Print &nbsp;<i class="fa fa-print"></i></button>
                    </div>
                </div>

                {{-- patient personal information --}}
                <div class="row" style="padding-left:30px; font-size: 20px;">
                    <div class="row m-b-lg m-t-lg">
                        <div class="col-md-6">
                            <div class="profile-image">
                                <img src="img/doctors.png" class="img-circle circle-border m-b-md" alt="profile">
                            </div>
                            <div class="profile-info">
                                <div class="">
                                    <div>
                                        <h2 class="no-margins font-b">
                                            Dr. Wahid Ghollami
                                        </h2>
                                        <h4>ID: D-25</h4>
                                        <small class="font-m">
                                            Dental Expert for 2 years work in dental clinics and more 100 patient visited
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <table class="table small m-b-xs">
                                <tbody>
                                <tr>
                                    <td>
                                        <span class="font-m">Gender:<b>&nbsp;Male</b>&nbsp;<i class="fa fa-male"></i></span>
                                    </td>
                                    <td>
                                        <span class="font-m">Age:<b>&nbsp;25</b>&nbsp;<i class=""></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="font-m">Type Job:<b>&nbsp; Percentage</b>&nbsp;<i class="fa fa-user-md"></i></span>
                                    </td>
                                    <td>
                                        <span class="font-m">Salary :<b>&nbsp; 40%</b>&nbsp;<i class=""></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="font-m">Date Reg:<b>&nbsp;2018/5/26</b>&nbsp;<i class="fa fa-calendar"></i></span>
                                    </td>
                                    <td>
                                        <span class="font-m">Department duty:<b>&nbsp;RCT & PF</b>&nbsp;<i class=""></i></span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {{-- patient personal information --}}
                <hr/>
                {{-- table info patient --}}
                <div class="row">
                    <div class="col-md-12">

                        <div class="col-md-8">
                            <div class="form-group" style="margin-left:35px;">
                                <label class="font-noraml">Select Range</label>
                                <div class="input-daterange input-group" id="" >
                                    <input type="date" class="input-sm form-control" name="start"/>
                                    <span class="input-group-addon">TO &nbsp;<i class="fa fa-arrow-right"></i></span>
                                    <input type="date" class="input-sm form-control" name="end" />
                                </div>
                            </div>
                        </div>

                        <table class="table table-hover table-bordered">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Patient P-ID</th>
                                <th>Treatment</th>
                                <th>Fee AFG</th>

                                <th>Date</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>P-5543</td>
                                <td>Permanent Filling</td>
                                <td>2000</td>

                                <td>2018/5/6</td>
                                <td> <span class="label label-info">Complete</span></td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>P-2665</td>
                                <td>Extraction</td>
                                <td>2500</td>

                                <td>2018/5/7</td>
                                <td> <span class="label label-info">Complete</span></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>P-3252</td>
                                <td>Permanent Filling</td>
                                <td>4500</td>

                                <td>2018/5/6</td>
                                <td> <span class="label label-info">Complete</span></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>P-3256</td>
                                <td>Extraction</td>
                                <td>2000</td>

                                <td>2018/5/4</td>
                                <td> <span class="label label-info">Complete</span></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>P-2152</td>
                                <td>Permanent Filling</td>
                                <td>2300</td>

                                <td>2018/5/1</td>
                                <td> <span class="label label-info">Complete</span></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>P-2152</td>
                                <td>Extraction</td>
                                <td>2000</td>

                                <td>2018/5/12</td>
                                <td> <span class="label label-info">Complete</span></td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>P-2163</td>
                                <td>Extraction</td>
                                <td>700</td>

                                <td>2018/5/12</td>
                                <td> <span class="label label-warning">Not Visited</span></td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>P-2145</td>
                                <td>Extraction</td>
                                <td>1500</td>

                                <td>2018/5/12</td>
                                <td> <span class="label label-warning">Not Visited</span></td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>P-2184</td>
                                <td>Extraction</td>
                                <td>4510</td>

                                <td>2018/5/12</td>
                                <td> <span class="label label-warning">Not Visited</span></td>
                            </tr>


                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-md-5">
                                <table class="table table-hover table-bordered">
                                    <tr>
                                        <td class="text-bold"><h4> Patient Visited: </h4></td>
                                        <td>6</td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold"><h4> Patient NOT Visited: </h4></td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold"><h4>Total fee cash: </h4></td>
                                        <td>15300 Afg</td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold"><h4>Doctor Fee: </h4></td>
                                        <td>1700 Afg</td>

                                    </tr>
                                    <tr>
                                        <td class="text-bold"><h4>Remaining: </h4></td>
                                        <td> 00 </td>

                                    </tr>
                                    <form action="doctor_salary">
                                    <tr>
                                        <td class="text-bold"><h4>Paid amount: </h4></td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="Enter amount" required></td>

                                    </tr>
                                    <tr>
                                        <td colspan="2" class="text-right"> <button class="btn btn-primary" type="submit">Pay Salary</button></td>
                                    </tr>
                                    </form>
                                </table>
                            </div>
                        </div>
                    </div>

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

