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
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <button class="btn btn-primary">
                                                        <li class="fa fa-list"></li>&nbsp; Next Appointment List
                                                    </button>
                                                </div>
                                            </div>
                                            <br/>
                                            <div class="row" style="margin-top:-120px;">
                                                <div class="col-sm-7">
                                                    <div class="input-group">
                                                        <span class="input-group-btn">
                                                        <button type="button"
                                                                class="btn btn-sm btn-primary"> Search</button> </span>
                                                        <input type="text" placeholder="Search patient name"
                                                               class="input-sm form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- tab all patient in queue with defirrent doctor--}}
                                            <div class="row" style="margin-top:-50px;">
                                                <div class="col-sm-11">
                                                    <div class="table-responsive">
                                                        <table class="table table-hover  no-margins">
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
                                                                    <td>{{ $patients->name }}</td>
                                                                    <td>{{ $patients->lastname }}</td>
                                                                    <td>{{ $patients->doctor->first_name }}</td>
                                                                    <td>{{ $patients->status }}</td>
                                                                    <td>{{ $patients->created_at }}</td>
                                                                    <td><a class="btn btn-xs btn-warning" href=""
                                                                           onclick="deletePatient({{ $patients->id }})">remove</a>
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
                                    {{--first doctor--}}
                                    @foreach($doctor_list as $list)

                                        <div id="{{ $list->id }}" class="tab-pane">
                                            <div class="panel-body">
                                                <div class="row">

                                                    <div class="col-md-3">
                                                        <button class="btn btn-primary">
                                                            <li class="fa fa-list"></li>&nbsp; Next Appointment List
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="row" style="margin-top:-120px;">
                                                    <div class="col-sm-7">
                                                        <div class="input-group">
                                                        <span class="input-group-btn">
                                                        <button type="button"
                                                                class="btn btn-sm btn-primary"> Search</button> </span>
                                                            <input type="text" placeholder="Search patient name"
                                                                   class="input-sm form-control">
                                                        </div>
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
                                                </div>
                                                <div class="row" style="margin-top:-50px;">
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
                                                                @foreach($list->patients as $pati)
                                                                    <tr>
                                                                        <td>{{ $pati->id_patient }}</td>
                                                                        <td>{{ $pati->name }}</td>
                                                                        <td>{{ $pati->lastname }}</td>
                                                                        <td>{{ $pati->status }}</td>
                                                                        <td>{{ $pati->created_at }}</td>
                                                                        <td>
                                                                            <button class="btn btn-xs btn-primary">In
                                                                                Queue
                                                                            </button>
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
        function deletePatient(id) {
            event.preventDefault();
            $('#delete-patient').modal('show');
            $('#delete-route').attr('href', 'patient/' + id + '/delete');
        }
    </script>
@endsection


