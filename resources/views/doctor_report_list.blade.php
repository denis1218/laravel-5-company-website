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
                <h3>Report Doctor</h3>
            </div>
        </div>
        <div class="col-sm-10">
            <div class="input-group m-b"><span class="input-group-btn">
                    <a type="" class="btn btn-primary" href="#"><i class="fa fa-search"></i>&nbsp;&nbsp;Search</a> </span>
                <input type="text" class="form-control" placeholder="Search P-ID patient">
            </div>
        </div>
        <div class="col-sm-2">
            <a type="" class="btn btn-warning" href="/doctor_report_list"> Show all Doctors</a> </span>
        </div>
    </div>



    {{-- show all doctors --}}
    <div class="col-lg-12" >
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>List of Doctors </h5>
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
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">

                            <div class="ibox-content">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                                        <thead>
                                        <tr>
                                            <th>D-ID</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Departement</th>
                                            <th>Time work</th>
                                            <th>Salary</th>
                                            <th>Report</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="gradeX">
                                            <td>D-434</td>
                                            <td>Dr.Ahmadi</td>
                                            <td>0745544432</td>
                                            <td class="center">Orthodontist</td>
                                            <td class="center">11:00AM to 3:00PM</td>
                                            <td class="center">15000 Afg</td>
                                            <td class="center"><a class="btn btn-xs btn-info" href="/doctor_report">Report</a></td>
                                        </tr>
                                        <tr class="gradeC">
                                            <td>D-422</td>
                                            <td>Dr.Jalal</td>
                                            <td>07755157632</td>
                                            <td class="center">Periodontist</td>
                                            <td class="center">11:00AM to 3:00PM</td>
                                            <td class="center">16000 Afg</td>
                                            <td class="center"><a class="btn btn-xs btn-info"  href="/doctor_report">Report</a></td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>D-425</td>
                                            <td>Dr.Jalal</td>
                                            <td>0785515532</td>
                                            <td class="center">Periodontist</td>
                                            <td class="center">1:00PM to 3:00AM</td>
                                            <td class="center">18000 Afg</td>
                                            <td class="center"><a class="btn btn-xs btn-info"  href="/doctor_report">Report</a></td>
                                        <tr class="gradeA">
                                            <td>D-427</td>
                                            <td>Dr.Tamim</td>
                                            <td>0785666532</td>
                                            <td class="center">Prosthodontist</td>
                                            <td class="center">3:00PM to 3:00AM</td>
                                            <td class="center">12100 Afg</td>
                                            <td class="center"><a class="btn btn-xs btn-info"  href="/doctor_report">Report</a></td>
                                        </tr>
                                        <tr class="gradeU">
                                            <td>D-432</td>
                                            <td>Dr.Samim</td>
                                            <td>078555442</td>
                                            <td class="center">Prosthodontist</td>
                                            <td class="center">5:00PM to 4:00AM</td>
                                            <td class="center">24000 Afg</td>
                                            <td class="center"><a class="btn btn-xs btn-info"  href="/doctor_report">Report</a></td>
                                        </tr>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>D-IP</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Department</th>
                                            <th>Time work</th>
                                            <th>Grade</th>
                                            <th>Report</th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- show all doctors --}}

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
