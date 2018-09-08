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
    <div class="row page-wrapper border-bottom white-bg "
         style="margin-top:-20px;margin-left: 1px; margin-bottom: 20px; padding-bottom: 15px;">
        <div class="row">
            <div class="col-md-5" style="margin-top:15px; margin-left:20px;">
                <h3>Report Patient</h3>
            </div>
        </div>
        <div class="col-sm-10">
            <div class="input-group m-b"><span class="input-group-btn">
                    <button type="button" class="btn btn-primary" href="#patient" data-toggle="collapse">Search</button> </span>
                <input type="text" class="form-control" placeholder="Search P-ID patient">
            </div>
        </div>
        <div class="col-sm-2">
            <a type="button" href="/appo" class="btn btn-warning">Show all patient</a>
        </div>
    </div>

    {{-- patient info --}}
    <div class="col-lg-12 collapse" id="patient" >
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Patient History</h5>
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
                                <img src="img/a4.jpg" class="img-circle circle-border m-b-md" alt="profile">
                            </div>
                            <div class="profile-info">
                                <div class="">
                                    <div>
                                        <h2 class="no-margins font-b">
                                            Omid Ahamdi
                                        </h2>
                                        <h4>ID: P-0780504075</h4>
                                        <small style="font-size: 15px;">
                                            <span style="font-size: 15px; font-weight: bold;">Problem teeth : </span>Orthodontist,
                                            Periodontist <br/>
                                            <span style="font-size: 15px; font-weight: bold;">Problem Health : </span>Blood
                                            Pressure , Allergy to Penicillin , Allergy to Anaesthetic
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
                                        <span class="font-m">Doctor:<b>&nbsp;Dr.Ahmadi</b>&nbsp;<i class="fa fa-user-md"></i></span>
                                    </td>
                                    <td>
                                        <span class="font-m">Visited:<b>&nbsp;First Time</b>&nbsp;<i class=""></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="font-m">Date Reg:<b>&nbsp;2018/5/26</b>&nbsp;<i class="fa fa-calendar"></i></span>
                                    </td>
                                    <td>
                                        <span class="font-m text-success">Cash:<b>&nbsp;paid</b>&nbsp;<i class="fa fa-money"></i></span>
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
                        <table class="table table-hover table-bordered">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Tooth NO</th>
                                <th>Dental Defect</th>
                                <th>Treatment</th>
                                <th>Estimated Fee</th>
                                <th>Doctor defect</th>
                                <th>Medicine</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>25</td>
                                <td>BDR</td>
                                <td>RCT</td>
                                <td>2690 AFG</td>
                                <td>Dr. Rahmati</td>
                                <td>
                                    <button class="btn btn-xs btn-primary" data-toggle="modal" data-target="#medicine-model">
                                        Details</button></td>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>15</td>
                                <td>Attrision</td>
                                <td>Extraction</td>
                                <td>2000 AFG</td>
                                <td>Dr. Rahmati</td>
                                <td>
                                    <button class="btn btn-xs btn-primary" data-toggle="modal" data-target="#medicine-model">
                                        Details</button></td>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-md-5">
                                <table class="table table-hover table-bordered">
                                    <tr>
                                        <td class="text-bold"><h4> Tooth Defects: </h4></td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold"><h4>Total Fee: </h4></td>
                                        <td>3500 AFG</td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold"><h4>Total paid: </h4></td>
                                        <td>3500 AFG</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                {{-- table info patient --}}
            </div>
        </div>
    </div>
    {{-- patient info --}}

    {{-- Modal window dialog --}}
    <div class="modal inmodal" id="medicine-model" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated fadeIn">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span
                                aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <i class=" modal-icon"><img src="img/medicine_drug.png" width="80px"/></i>
                    <h4 class="modal-title">Medicine patient</h4>
                    <small>information patient medicine</small>
                </div>
                <div class="modal-body">
                    <table class="table table-hover no-margins table-striped">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>Name Drug</th>
                            <th>Each day</th>
                            <th>Total Days</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Ampicilne</td>
                            <td>1+1+1</td>
                            <td>2 days</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Brophine</td>
                            <td>1+1+1</td>
                            <td>1 day</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
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
