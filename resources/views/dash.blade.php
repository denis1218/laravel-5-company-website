    @extends('master')


@section('style')

    @endsection

        @section('content')
            {{-- Top Card area --}}
            <div class="col-lg-3">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <span class="label label-info pull-right">{{trans('file.logged_in')}}</span>
                        <h5>{{trans('file.user')}}</h5>
                    </div>
                    <div class="ibox-content">
                        <h2 class="no-margins">

                           {{trans('file.welcome')}} {{ Auth::user()->firstname }}</h2>
                        <div class="stat-percent font-bold text-danger"></div>
                        <small>{{ Auth::user()->department }}</small>

                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <span class="label label-info pull-right">{{trans('file.all')}}</span>
                        <h5>{{trans('file.patient')}}</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins">{{$patient}}<img  src="img/patient.png" width="45px;"style="float: right;"/></h1>
                        <small>{{trans('file.apc')}}</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <span class="label label-primary pull-right">{{trans('file.all')}}</span>
                        <h5>{{trans('file.doctors')}}</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins">{{$doctor}}<img  src="img/doctors.png" width="60px;"style="float: right;"/></h1>
                        <div class="stat-percent font-bold text-navy"></div>
                        <small>{{trans('file.tda')}}</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <span class="label label-danger pull-right">{{trans('file.today')}}</span>
                        <h5>{{trans('file.appointment_patient')}}</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins">{{count($apatient)}}<img  src="img/appintmentincon.png" width="60px;"style="float: right;"/></h1>
                        <div class="stat-percent font-bold text-danger"></div>
                        <small>{{trans('file.total_appointment')}}
                            <br>
                            @if(session('msg'))
                               <h3>{{$msg}}</h3>

                            @endif

                        </small>
                    </div>
                </div>
            </div>


            {{-- End of Card area --}}




            {{-- Dash graph area --}}
            <div class="wrapper wrapper-content">
                <div class="container">

                <div class="row">
                    {{-- Graph Area --}}
                            <div class="col-md-2" >
                                <button class="btn btn-primary dim dim-large-dim" ><a href="/income"><img src="img/income_icon_dash.png"  width="150px;" style="border-radius: 8px;"/></a></button>
                            </div>
                            <div class="col-md-2" style="margin-left:30px;">
                                <button class="btn btn-primary dim dim-large-dim" ><a href="/expenditure"><img src="img/expense_icon_dash.png" width="150px;" style="border-radius: 8px;"/></a></button>
                            </div>
                            <div class="col-md-2"  style="margin-left:30px;">
                                <button class="btn btn-primary dim dim-large-dim" ><a href="/doctors"><img src="img/doctor_icon_dash.png" width="150px;" style="  border-radius: 8px;height: 60px;"/></a></button>
                            </div>
                            <div class="col-md-2"  style="margin-left:30px;">
                                <button class="btn btn-primary dim dim-large-dim" ><a href="/finance_report_income"><img src="img/report_icon_dash.png" width="150px;" style="border-radius: 8px;height: 60px"/></a></button>
                            </div>
                            <div class="col-md-2"  style="margin-left:30px;">
                                <button class="btn btn-primary dim dim-large-dim" ><a href="/patient"><img src="img/patientBigIcon.png" width="150px;" style="border-radius: 8px;height: 60px"/></a></button>
                            </div>



                    {{-- End Graph--}}
                    <div class="col-lg-4">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>{{trans('file.qee')}}</h5>
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
                                <form action="/expenditure3" method="post">
                                    {{csrf_field()}}
                                    <div class="row">
                                      <div class="col">
                                        <input type="text" name="receiver" class="form-control" maxlength="20" style="width:100%" placeholder="{{trans('file.money_receiver')}}" required=""><br>
                                        <input type="number" name="amount" class="form-control"  style="width:100%" placeholder="{{trans('file.paid_amount')}}" required=""><br>
                                        
                                        <select class="form-control" name="category" style="width:100%" required>
                                            <option disabled selected>{{trans('file.select_category')}}</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->category}}">{{$category->category}}</option>
                                            @endforeach
                                        </select><br>


                                        <textarea name="msg" id="" placeholder="{{trans('file.eym')}}"  class="form-control" style="resize: none;" required></textarea><br>
                                        <button type="submit"  value="Pay" class="btn btn-primary">{{trans('file.save')}}&nbsp;<i class="fa fa-save"></i></button>
                                        <button  value="Pay" class="btn btn-warning" data-toggle="modal" data-target="#remaining">{{trans('file.remainder')}}<i class="fa fa-arrow-circle-down"></i></button>

                                        </div>
                                    </div>
                                </form>
                            </div>
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
                            <button type="button" class="btn btn-primary" >Save changes</button>

                        </div>
                    </div>
                </div>
            </div>
            {{-- Modal Window for remaining cash --}}



        @endsection


@section('script')

    <script src="{{asset('dashboard/js/plugins/chartJs/Chart.min.js')}}"></script>
    <script src="{{asset('dashboard/js/plugins/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('dashboard/js/plugins/flot/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{asset('dashboard/js/plugins/flot/jquery.flot.resize.js')}}"></script>
    <!-- Peity -->
    <script src="{{asset('dashboard/js/plugins/peity/jquery.peity.min.js')}}"></script>
    <!-- Peity demo -->
    <script src="{{asset('dashboard/js/demo/peity-demo.js')}}"></script>

    <script>


        $(document).ready(function() {
            $('.demo_connection').click(function () {
                swal({
                        title: "Inserted!",
                        text: "Your Row Has Been Inserted.",
                        type: "success",
                        timer: 5000
                    },
                    function () {
                        location.reload(true);
                        tr.hide();
                    });
            });


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








