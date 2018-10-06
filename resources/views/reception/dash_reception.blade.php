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
                <h1 class="no-margins">Welcome Latifa</h1>
                <div class="stat-percent font-bold text-danger"></div>
                <small>Reception</small>
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
                <h1 class="no-margins">35<img  src="img/patienticon2.png" width="45px;"style="float: right;"/></h1>
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
                <h1 class="no-margins">7<img  src="img/doctors.png" width="60px;"style="float: right;"/></h1>
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
                <h1 class="no-margins">25<img  src="img/appintmentincon.png" width="60px;"style="float: right;"/></h1>
                <div class="stat-percent font-bold text-danger"></div>
                <small>Total Appointment</small>
            </div>
        </div>
    </div>


    {{-- End of Card area --}}

    {{-- Dash area --}}
    <div class="col-lg-10">
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
                        <tr>
                            <td>P-078554422</td>
                            <td>Ahmad</td>
                            <td></i>Dr.Samim</td>
                            <td>First Time</td>
                            <td><i class="fa fa-calendar"></i>&nbsp;2018/8/1 - 8:00 AM</td>
                            <td class="">Blood pressure</td>
                        </tr>
                        <tr>
                            <td>P-0786906677</td>
                            <td>Naweed</td>
                            <td></i>Dr.Rashid</td>
                            <td>Second Time</td>
                            <td><i class="fa fa-calendar"></i>&nbsp;2018/8/1 - 8:20 AM</td>
                            <td class="">Diabetics</td>
                        </tr>
                        <tr>
                            <td>P-0785445580</td>
                            <td>Qasim</td>
                            <td></i>Dr.Ahmadi</td>
                            <td>First Time</td>
                            <td><i class="fa fa-calendar"></i>&nbsp;2018/8/2 - 9:00 AM</td>
                            <td class="">Hepatitics</td>
                        </tr>
                        <tr>
                            <td>P-0785564749</td>
                            <td>Mahmood</td>
                            <td></i>Dr.Ali</td>
                            <td>Second Time</td>
                            <td><i class="fa fa-calendar"></i>&nbsp;2018/8/2 - 9:00 AM</td>
                            <td class="">Asthma</td>
                        </tr>
                        <tr>
                            <td>P-0785786788</td>
                            <td>Ali</td>
                            <td></i>Dr.Samim</td>
                            <td>First Time</td>
                            <td><i class="fa fa-calendar"></i>&nbsp;2018/8/2 - 9:00</td>
                            <td class="">Blood pressure</td>
                        </tr>
                        <tr>
                            <td>P-0785786866</td>
                            <td>Mahdi</td>
                            <td></i>Dr.Naweed</td>
                            <td>Second Time</td>
                            <td><i class="fa fa-calendar"></i>&nbsp;2018/8/3 - 10:00 AM</td>
                            <td class="">Diabetics</td>
                        </tr>
                        <tr>
                            <td>P-078558099</td>
                            <td>Ahmad</td>
                            <td></i>Dr.Samim</td>
                            <td>First Time</td>
                            <td><i class="fa fa-calendar"></i>&nbsp;2018/8/3 - 11:00 AM</td>
                            <td class="">Blood pressure</td>
                        </tr>
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
    <div class="col-lg-2">
        <button class="btn btn-primary dim dim-large-dim" ><a href="/patient"><img src="img/teeth_patient.png" width="150px;" style="border-radius: 8px;"/></a></button>
    </div>
    {{-- are of button new patient --}}

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








