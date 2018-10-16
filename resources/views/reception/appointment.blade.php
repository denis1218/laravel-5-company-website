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
                                    <button class="btn btn-primary" style="width:87%;">
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

                                                           placeholder="Search patient name"

                                                           class="input-md form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <button class="btn btn-primary">
                                                    <li class="fa fa-list"></li>&nbsp; Next Appointment List
                                                </button>
                                            </div>

                                            {{-- tab all patient in queue with defirrent doctor --}}



                                            <div class="col-md-12">
                                                <h5>show all patients present now</h5>

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
                                                                <td>{{ str_limit($patients->next_appointment,16 )}}</td>
                                                                <td>
                                                                    <form action="/patient/{{ $patients->id }}" method="post">
                                                                        <button class="btn btn-xs btn-warning done">Visited</button>
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
                                                                @foreach($list->patient_for_today as $pati)
                                                                    <tr>
                                                                        <td>{{ $pati->id_patient }}</td>
                                                                        <td>{{ $pati->name }}</td>
                                                                        <td>{{ $pati->lastname }}</td>
                                                                        <td>{{ $pati->status }}</td>
                                                                        <td>{{ $pati->next_appointment }}</td>
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

            $('.done').on('click', function (e) {
                e.preventDefault();
                var form = $(this).parents('form');
                swal({
                    title: "Are you sure?",
                    text: "This patient visited doctor!",
                    type: "success",
                    showCancelButton: true,
                    confirmButtonColor: "#3ddd48",
                    confirmButtonText: "Yes, Visited!",
                    closeOnConfirm: false
                }, function (isConfirm) {
                    if (isConfirm) form.submit();
                });
            });

        });
    </script>
@endsection


