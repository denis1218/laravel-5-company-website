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
                <h2 class="no-margins">Welcome {{Auth()->user()->firstname}}</h2>
                <div class="stat-percent font-bold text-danger"></div>
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
                <h1 class="no-margins">{{ count($patient) }}<img  src="img/patienticon2.png" width="45px;"style="float: right;"/></h1>
                <small>Total patient for today</small>
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
                <h1 class="no-margins">{{ count($patient) }}<img  src="img/appintmentincon.png" width="60px;"style="float: right;"/></h1>
                <div class="stat-percent font-bold text-danger"></div>
                <small>Total Appointment</small>
            </div>
        </div>
    </div>


    {{-- End of Card area --}}

    {{-- Dash area --}}
    <div class="col-lg-9">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Patient List </h5>
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
                <div class="row" style="padding: 10px;">
                    <table class="table table-hover no-margins">
                        <thead>
                        <tr>
                            <td>P-ID</td>
                            <th>Patient Name</th>
                            <th>Doctor Name</th>
                            <th>Status</th>
                            <th>Date & Time Appointment</th>
                            <th>Healths Problem</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($patient as $pa)
                        <tr>
                                <td>{{$pa->id_patient}}</td>
                            <td>{{$pa->name}}</td>
                            <td>{{$pa->doctor->first_name}}</td>
                            <td>{{$pa->status}}</td>
                            <td><i class="fa fa-calendar"></i>{{$pa->next_appointment}}</td>
                            <td class="">{{$pa->problem_health}}</td>
                        </tr>
                       @endforeach
                        </tbody>
                    </table>
                    <br/>
                    <div class="col-md-12 pull-right">
                        <div class="btn-group">
                            <button class="btn btn-sm btn-white" type="button"><i class="fa fa-arrow-left"></i>&nbsp;&nbsp;Last Day</button>
                            <button class="btn btn-sm btn-info" type="button">Today</button>
                            <button class="btn btn-sm btn-white" type="button">Next Day &nbsp;&nbsp;<i class="fa fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    {{-- Graph area --}}

    {{-- are of button new patient --}}
    <div class="col-lg-3">
        <button class="btn btn-primary dim dim-large-dim" ><a href="/patient"><img src="img/teeth_patient.png" width="150px;" style="border-radius: 8px;"/></a></button>

    </div>
    {{-- are of button new patient --}}
    <div class="col-lg-3">
        <a href="/patient/create">
            <button class="btn btn-primary" style="width:87%;">
                <i class="fa fa-user-plus pull-left"></i>&nbsp; Add new patient
            </button>
        </a>
    </div>
    <br>
    <div class="col-lg-3">

        <a href="/new-patient-today">
            <button class="btn btn-info" style="width:87%;">
                <i class="fa fa-table pull-left"></i>&nbsp;List new patient today
            </button>
        </a>
    </div>
    <br>
    <div class="col-lg-3">
        <a href="/next-appointment-patient">
            <button class="btn btn-success" style="width:87%;">
                <i class="fa fa-table pull-left"></i>&nbsp;List next appointment today
            </button>
        </a>
    </div>
    <div class="col-lg-3">
        <a href="/miss-next-appointment-patient">
            <button class="btn btn-success" style="width:87%;">
                <i class="fa fa-table pull-left"></i>&nbsp;Miss list next appointment
            </button>
        </a>

    </div>


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

    <script src="dashboard/js/plugins/chartJs/Chart.min.js"></script>
    <script src="dashboard/js/plugins/flot/jquery.flot.js"></script>
    <script src="dashboard/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="dashboard/js/plugins/flot/jquery.flot.resize.js"></script>
    <!-- Peity -->
    <script src="dashboard/js/plugins/peity/jquery.peity.min.js"></script>
    <!-- Peity demo -->
    <script src="dashboard/js/demo/peity-demo.js"></script>

    <script>

        $(document).ready(function() {

            var lineData = {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [
                    {
                        label: "Example dataset",
                        fillColor: "rgba(220,220,220,0.5)",
                        strokeColor: "rgba(220,220,220,1)",
                        pointColor: "rgba(220,220,220,1)",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(220,220,220,1)",
                        data: [65, 59, 80, 81, 56, 55, 40]
                    },
                    {
                        label: "Example dataset",
                        fillColor: "rgba(26,179,148,0.5)",
                        strokeColor: "rgba(26,179,148,0.7)",
                        pointColor: "rgba(26,179,148,1)",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(26,179,148,1)",
                        data: [28, 48, 40, 19, 86, 27, 90]
                    }
                ]
            };

            var lineOptions = {
                scaleShowGridLines: true,
                scaleGridLineColor: "rgba(0,0,0,.05)",
                scaleGridLineWidth: 1,
                bezierCurve: true,
                bezierCurveTension: 0.4,
                pointDot: true,
                pointDotRadius: 4,
                pointDotStrokeWidth: 1,
                pointHitDetectionRadius: 20,
                datasetStroke: true,
                datasetStrokeWidth: 2,
                datasetFill: true,
                responsive: true,
            };

            var ctx = document.getElementById("lineChart").getContext("2d");
            var myNewChart = new Chart(ctx).Line(lineData, lineOptions);

        });

    </script>

@endsection








