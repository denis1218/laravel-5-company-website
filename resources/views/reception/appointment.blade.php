@extends('master')

@section('style')

@endsection

@section('content')

    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Appointment patient</h5>
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

                {{--doctor's specific patients--}}
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-md-3">
                                <a href="/patient/create">
                                    <button class="btn btn-primary" style="width:100%;">
                                        <li class="fa fa-plus"></li>&nbsp; Add new Patient
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class="tabs-container">
                            <div class="tabs-left">
                                {{--navigation list--}}
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#home" style="color:black;">All
                                            Patients</a></li>
                                    @foreach($doctor_list as $doctors)
                                        <li class=""><a data-toggle="tab" href="#{{ $doctors->id }}"
                                                        style="color:black;">Dr.
                                                &nbsp;{{ $doctors->first_name }} {{ $doctors->last_name }}</a></li>
                                    @endforeach
                                </ul>
                                {{--end of navigation list--}}

                                {{--Doctors tabs--}}
                                <div class="tab-content bg-success" style="">
                                    <div id="home" class="tab-pane active">
                                        <div class="panel-body">

                                            <div class="col-md-8">
                                                <div class="input-group">
                                                        <span class="input-group-btn">
                                                        <button type="button"
                                                                class="btn btn-primary"><i class="fa fa-search"></i> Search</button> </span>
                                                    <input type="text" id="search_all_patient"
                                                           onkeyup="search_all_patient()"
                                                           placeholder="Search patient ID"
                                                           class="input-md form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <button class="btn btn-primary">
                                                    <li class="fa fa-list"></li>&nbsp; Next Appointment List
                                                </button>
                                            </div>

                                            {{-- tab all patient in queue with defirrent doctor --}}

                                            <p>show all patient created at today </p>
                                            <div class="col-md-12">
                                                <div class="table-responsive">
                                                    <table class="table table-hover  no-margins" id="table_all_patient">
                                                        <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>P-ID</th>
                                                            <th>Patient Name</th>
                                                            <th>Last Name</th>
                                                            <th>Doctor Name</th>
                                                            <th>Status</th>
                                                            <th>Appointment date</th>
                                                            <th>Add to visited</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($patient_all as $patients)
                                                            <tr>
                                                                <td>{{ $patients->id }}</td>
                                                                <td>{{ $patients->id_patient }}</td>
                                                                <td>{{ str_limit($patients->name ,8)}}</td>
                                                                <td>{{ $patients->lastname }}</td>
                                                                <td>{{ str_limit($patients->doctor->first_name ,7)}}</td>
                                                                <td>{{ $patients->status }}</td>
                                                                <td>{{ str_limit($patients->created_at,16 )}}</td>
                                                                <td>
                                                                    <a class="btn btn-xs btn-warning demo4" href="">Done</a>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{--first doctor--}}
                                    @foreach($doctor_list as $list)

                                        <div id="{{ $list->id }}" class="tab-pane">
                                            <div class="panel-body">


                                                <div class="col-md-3">
                                                    <button class="btn btn-primary">
                                                        <li class="fa fa-list"></li>&nbsp; Next Appointment List
                                                    </button>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="btn-group">
                                                        <button class="btn btn-white" type="button">Previous
                                                        </button>
                                                        <button class="btn btn-primary" type="button">Today
                                                        </button>
                                                        <button class="btn btn-white" type="button">Next
                                                        </button>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-11">
                                                        <div class="table-responsive">
                                                            <table class="table table-hover  no-margins">
                                                                <thead>
                                                                <tr>
                                                                    <td>P-ID</td>
                                                                    <th>Patient Name</th>
                                                                    <th>Last Name</th>
                                                                    <th>Status</th>
                                                                    <th>Appointment Date</th>
                                                                    <th>Add to Queue</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                @foreach($list->patient as $pati)
                                                                    <tr>
                                                                        <td>{{ $pati->id_patient }}</td>
                                                                        <td>{{ $pati->name }}</td>
                                                                        <td>{{ $pati->lastname }}</td>
                                                                        <td>{{ $pati->status }}</td>
                                                                        <td>{{ $pati->created_at }}</td>
                                                                        <td>
                                                                            <form action="/patient/{{ $pati->id }}" method="post">
{{--                                                                                {{ method_field('patch') }}--}}
                                                                                @method('PUT')
                                                                                @csrf
                                                                                <button type="button" class="btn btn-xs btn-primary demo3">
                                                                                    In Queue
                                                                                </button>
                                                                            </form>
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end of all box content --}}

    {{-- modal window to show editing detail of teeth --}}
    <div class="modal inmodal" id="info_patient" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated fadeIn">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span
                                aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <i class=" modal-icon"><img src="dashboard/img/a5.jpg" class="rounded-circle"/></i>
                    <h4 class="modal-title">Halima Qullami</h4>
                    <h3>Patient ID : P-0785511252</h3>
                </div>
                <div class="modal-body">
                    <table class=" table table-striped" style="font-size: 1.3em;">
                        <tr>
                            <td>Full Name :</td>
                            <td>Halima Qullami</td>
                        </tr>
                        <tr>
                            <td>Gender :</td>
                            <td>Female</td>
                        </tr>
                        <tr>
                            <td>Age :</td>
                            <td>25</td>
                        </tr>
                        <tr>
                            <td>Address :</td>
                            <td>Darul-aman, Kabul, Afghanistan</td>
                        </tr>
                        <tr>
                            <td>Encounter visites :</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Date Register :</td>
                            <td>2018/5/2</td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success">More History &nbsp;<i class="fa fa-file-o"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    {{-- end of modal window--}}


    {{-- modal window for deleting record --}}
    <div class="modal" tabindex="-1" id="delete-patient" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Delete Patient</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure the delete patient?</p>
                </div>
                <div class="modal-footer">
                    <a href="" id="delete-route" type="button" class="btn btn-danger">Delete</a>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
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
                td = tr[i].getElementsByTagName("td")[2];
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

    <script>
        function deletePatient(id) {
            event.preventDefault();
            $('#delete-patient').modal('show');
            $('#delete-route').attr('href', 'patient/' + id + '/delete');
        }
    </script>


    {{-- sweet alert --}}
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
            $('.demo3').on('click', function (e) {
                e.preventDefault();
                var form = $(this).parents('form');
                swal({
                    title: "Are you sure?",
                    text: "To put this patient in queue for today!",
                    type: "success",
                    showCancelButton: true,
                    confirmButtonColor: "#317cdd",
                    confirmButtonText: "Yes, put it!",
                    closeOnConfirm: false
                }, function (isConfirm) {
                    if (isConfirm) form.submit();
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
@endsection


