@extends('master')

@section('style')

@endsection

@section('content')

    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Appointment patient </h5>
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
                    <div class="col-md-3">
                        <a href="/patient">
                            <button class="btn btn-primary">
                                <li class="fa fa-plus"></li>&nbsp; Add new Patient
                            </button>
                        </a>
                    </div>
                    <div class="row">
                        <span style="font-weight: bold">Show table group by  &nbsp;&nbsp;</span>
                        <button class="btn btn-primary">
                            <li class="fa fa-list"></li>&nbsp; Next Appointment List
                        </button>
                        <button class="btn btn-primary">
                            <li class="fa fa-list"></li>&nbsp; First Appointment List
                        </button>
                    </div>

                </div>
                <br/>
                <div class="row">
                    <div class="col-md-12">
                        <div class="input-group">
                            <span class="input-group-btn">
                            <button type="button" class="btn  btn-primary"><i class="fa fa-search"></i>&nbsp;&nbsp; Search</button></span>
                            <input type="text" placeholder="Search patient name" class=" form-control">
                        </div>
                    </div>


                </div>
                <br/>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
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
                    <h8>Patient ID : P-0785511252</h8>
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



@endsection