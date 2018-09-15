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
                        <h1 class="no-margins">Welcome Qasim</h1>
                        <div class="stat-percent font-bold text-danger"></div>
                        <small>Finance</small>
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




            {{-- Dash graph area --}}
            <div class="wrapper wrapper-content">
                <div class="row">
                    {{-- Graph Area --}}
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-md-2" >
                                <button class="btn btn-primary dim dim-large-dim" ><a href="/income"><img src="img/income_icon_dash.png"  width="150px;" style="border-radius: 8px;"/></a></button>
                            </div>
                            <div class="col-md-2" style="margin-left:75px;">
                                <button class="btn btn-primary dim dim-large-dim" ><a href="/expenditure"><img src="img/expense_icon_dash.png" width="150px;" style="border-radius: 8px;"/></a></button>
                            </div>
                            <div class="col-md-2" style="margin-left:75px;">
                                <button class="btn btn-primary dim dim-large-dim" ><a href="/doctor_report"><img src="img/doctor_icon_dash.png" width="150px;" style="border-radius: 8px;"/></a></button>
                            </div>
                            <div class="col-md-2" style="margin-left:75px;">
                                <button class="btn btn-primary dim dim-large-dim" ><a href="/finance_report_income"><img src="img/report_icon_dash.png" width="150px;" style="border-radius: 8px;"/></a></button>
                            </div>
                        </div>
                        <div class="ibox float-e-margins">
                            <div class="ibox-content">
                                <div>
                                        <span class="pull-right text-right">
                                        <small>Average value of Income & Expenditure in the past month in: <strong>HK Clinic</strong></small>
                                            <br/>
                                            All Patients: 12,251
                                        </span>
                                    <h1 class="m-b-xs"></h1>
                                    <h3 class="font-bold no-margins">
                                        Half-year revenue margin
                                    </h3>
                                    <small><strong>Income &nbsp;<i class="fa fa-line-chart" style="color:rgb(81,154,156);"></i>&nbsp;  & Expenditure &nbsp;<i class="fa fa-line-chart" style="color:rgb(151,144,142);"></i></strong></small>
                                </div>

                                <div>
                                    <canvas id="lineChart" height="70"></canvas>
                                </div>

                                <div class="m-t-md">
                                    <small class="pull-right">
                                        <i class="fa fa-clock-o"> </i>
                                        Update on 16.07.2018
                                    </small>
                                    <small>
                                        <strong>Analysis of Patient and Expenditure:</strong> The value has been changed over time..
                                    </small>
                                </div>

                            </div>
                        </div>
                    </div>
                    
                    {{-- End Graph--}}
                    <div class="col-lg-4">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Quick Enter Expenses</h5>
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
                                <form>
                                    <div class="row">
                                      <div class="col">
                                        <input type="text" class="form-control" style="width:100%" placeholder="Money receiver"><br>
                                        <input type="text" class="form-control" style="width:100%" placeholder="Paid Amount"><br>
                                        
                                        <select class="form-control" style="width:100%">
                                            <option value="1" disabled selected>Select The Category</option>
                                            <option value="1">Rent</option>
                                            <option value="2">Office Supply</option>
                                            <option value="3">Personal</option>
                                            <option value="4">Taxes</option>
                                            <option value="5">Employee Salary</option>
                                            <option value="6">Clinical Instrument</option>
                                            <option value="7">Miscellaneous</option>                          
                                        </select><br>

                                        <textarea name="msg" id="" placeholder="Enter your message"  class="form-control"></textarea><br>
                                        <button type="submit"  value="Pay" class="btn btn-primary">Save &nbsp;<i class="fa fa-save"></i></button>
                                        <button  value="Pay" class="btn btn-warning" data-toggle="modal" data-target="#remaining">Remainder &nbsp;<i class="fa fa-arrow-circle-down"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Graph area --}}

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








