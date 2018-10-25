@extends('master')


@section('style')

@endsection

@section('content')
    {{-- Top Card area --}}
    <div class="col-lg-3">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <span class="label label-info pull-right">Logged in</span>
                <h5>User</h5>
            </div>
            <div class="ibox-content">
                <h3 class="no-margins">Welcome {{Auth()->user()->firstname}}</h3>
                <div class="stat-percent font-bold text-danger"></div>
                <br>
                <small>{{Auth()->user()->department}}</small>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <span class="label label-info pull-right">Today</span>
                <h5>Patient</h5>
            </div>
            <div class="ibox-content">
                <h1 class="no-margins">{{count($doctor)}}<img  src="img/patienticon2.png" width="45px;"style="float: right;"/></h1>
{{--                @foreach($doctor as $d)--}}
                <small>Total patient for today </small>
                    {{--@endforeach--}}
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <span class="label label-primary pull-right">Today</span>
                <h5>Doctors</h5>
            </div>
            <div class="ibox-content">
                <h1 class="no-margins">{{$doct}}<img  src="img/doctors.png" width="60px;"style="float: right;"/></h1>
                <div class="stat-percent font-bold text-navy"></div>
                <small>Total Doctors Available</small>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <span class="label label-danger pull-right">Today</span>
                <h5>Appointment patients</h5>
            </div>
            <div class="ibox-content">
                <h1 class="no-margins">{{count($patient)}}<img  src="img/appintmentincon.png" width="60px;"style="float: right;"/></h1>
                <div class="stat-percent font-bold text-danger"></div>
                <small>Total Appointment</small>
            </div>
        </div>
    </div>
    {{-- End of Card area --}}

    {{-- list of patient --}}
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>List of Patient </h5>
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
                <div class="row" style="padding: 20px;">
                    <table class="table table-hover no-margins">
                        <thead>
                        <tr>
                            <th>P-ID</th>
                            <th>Patient Name</th>
                            <th>Doctor Name</th>
                            <th>Status</th>
                            <th>Date & Time Appointment</th>
                            <th>Problem Health</th>
                            <th>Operation</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($doctor as $d)
                        <tr>
                            <td>{{$d->id_patient}}</td>
                            <td>{{$d->name}}</td>
                            <td>{{$d->doctor->first_name}}</td>
                            <td>{{$d->status}}</td>
                            <td><i class="fa fa-calendar"></i>&nbsp;{{$d->created_at}}</td>
                            <td class="">{{$d->problem_health}}</td>
                            <td><a href="/operation/create/{{$d->id}}" class="btn btn-sm btn-primary">Start Treatment</a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{-- list of patient --}}

    {{-- Modal Window for remaining cash --}}
    <div class="modal inmodal" id="remaining" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated fadeIn">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    {{--<i class="fa fa-edit modal-icon text-primary"></i>--}}
                    <h4 class="modal-title">Remaining cash</h4>
                    <small>Give back money from expenses</small>
                </div>
                <div class="modal-body">
                    {{--<div class="form-group"><label>ID</label> <input type="text" placeholder="Id" value="" class="form-control"></div>--}}
                    <div class="form-group"><label>Remain :</label><input type="number" placeholder="Amount"  value="" class="form-control"></div>
                    <div class="form-group"><label>From Whom :</label><input type="text" placeholder="Receiver" value="" class="form-control"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>

                </div>
            </div>
        </div>
    </div>
    {{-- Modal Window for remaining cash --}}



@endsection


@section('script')


@endsection
