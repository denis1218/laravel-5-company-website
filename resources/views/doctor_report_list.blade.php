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
                                <div class="row">
                                    <div class="col">
                                        <a type="button" class="btn btn-primary" href="doctor_salary" style="margin-left: 16px;">Go To Doctor Salary <i class="fa fa-arrow-right"></i> </a>
                                        <hr>
                                    </div>
                                </div>
                                    <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                                        <thead>
                                        <tr>
                                            <th>Doctor-ID</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Father Name</th>
                                            <th>Age</th>
                                            <th colspan="2" class="text-center" >Working time</th>
                                            <th>Phone</th>
                                            <th>Departement</th>
                                            <th>Gender</th>
                                            <th>Max patient</th>
                                            <th>Salary type</th>
                                            <th>Salary amount</th>
                                            <th>Report</th>
                                        </tr>
                                        </thead>
                                        @if(count($doctors)>0)
                                        @foreach ($doctors as $doctor)
                                        <tbody>
                                        <tr class="gradeX">
                                        <td>{{$doctor->id}}</td>
                                        <td>{{$doctor->first_name}}</td>
                                        <td>{{$doctor->last_name}}</td>
                                        <td>{{$doctor->father_name}}</td>
                                        <td>{{$doctor->age}}</td>
                                        <td class="center">{{$doctor->start_work_time}}</td>
                                        <td class="center">{{$doctor->end_work_time}}</td>
                                        <td>{{$doctor->phone}}</td>
                                        <td class="center">{{$doctor->dept_id}}</td>
                                        <td>{{$doctor->gender}}</td>
                                        <td>{{$doctor->max_patient}}</td>
                                        <td>{{$doctor->salary_type}}</td>
                                        <td class="center">{{$doctor->salary_amount}}</td>
                                        <td class="center"><a class="btn btn-xs btn-info" href="/doctors/{{$doctor->id}}">Details &nbsp;<i class="fa fa-file-o"></i></a></td>
                                        </tr>
                                        </tbody>
                                         @endforeach
                                        @else
                                        <h1 class="text-center" style="color:red;">No doctor registred yet</h1>
                                        @endif
                                    </table>
                                        {{$doctors->links()}}
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
