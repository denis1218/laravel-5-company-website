@extends('master')

@section('style')

@endsection

@section('content')

<div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Patient Report Table <i class="fa fa-info"></i></h5>
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
                                        <button type="button" class="btn btn-sm btn-primary" disabled=""> Search</button> </span>
                                        <input type="text" placeholder="Search patient name" id="search_all_patient" onkeyup="search_all_patient()"
                                                class="input-sm form-control"> 
                                    </div>
                                </div>

                            </div>

                            <div class="row" style="margin-top:30px;">
                                <div class="col-sm-11">
                                        <table class="table table-hover  no-margins" id="table_all_patient">
                                            <thead>
                                            <tr class="bg-light">
                                                <th>P-ID</th>
                                                <th>Patient Name</th>
                                                <th>Last Name</th>
                                                <th>Doctor Name</th>
                                                <th>Status</th>
                                                <th>Date & Time Appointment</th>
                                                <th>Healths Problem</th>

                                                <th>Print</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($all_patient as $patient)
                                            <tr>
                                                <td>{{$patient->id_patient}}</td>
                                                <td>{{$patient->name}}</td>
                                                <td>{{$patient->lastname}}</td>
                                                <td></i>{{$patient->doctor->first_name}}</td>
                                                <td>{{$patient->status}}</td>
                                                <td><i class="fa fa-calendar"></i>{{$patient->created_at}}</td>
                                                <td class="">{{$patient->problem_health}}</td>
                                                <td><a class="btn btn-xs btn-primary" href="/patient_report/{{$patient->id}}" ><i class="fa fa-info"></i>
                                                        Print</a></td>

                                            </tr>
                                                @endforeach
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
    <script> $(document).ready(function () {

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

    <script>
        {{-- filter search all patient table --}}
        function search_all_patient() {
            // Declare variables
            var input, filter, table, tr, td, i;
            input = document.getElementById("search_all_patient");
            filter = input.value.toUpperCase();
            table = document.getElementById("table_all_patient");
            tr = table.getElementsByTagName("tr");

            // Loop through all table rows, and hide those who don't match the search query
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1];
                if (td) {
                    if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }

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
