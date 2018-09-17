
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
                        <div class="tabs-container" >
                            <div class="tabs-left">
                                {{--navigation list--}}
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#home"style="color:black;">Doctors list</a></li>
                                    <li class=""><a data-toggle="tab" href="#fst" style="color:black;">Dr.Samim</a></li>
                                    <li class=""><a data-toggle="tab" href="#snd" style="color:black;">Dr.Ahmadi</a></li>
                                    <li class=""><a data-toggle="tab" href="#trd" style="color:black;">Dr.Jalal</a></li>
                                    <li class=""><a data-toggle="tab" href="#frt" style="color:black;">Dr.Tamim </a></li>
                                </ul>
                                {{--end of navigation list--}}

                                {{--Doctors tabs--}}
                                <div class="tab-content bg-success" style="">
                                    <div id="home" class="tab-pane active">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <a href="/patient">
                                                        <button class="btn btn-primary" style="width:100%;">
                                                            <li class="fa fa-plus"></li>&nbsp; Add new Patient
                                                        </button>
                                                    </a>
                                                </div>
                                                <div class="col-md-3">
                                                    <button class="btn btn-primary">
                                                        <li class="fa fa-list"></li>&nbsp; Next Appointment List
                                                    </button>
                                                </div>
                                                <div class="col-md-3">
                                                    <button class="btn btn-primary">
                                                        <li class="fa fa-list"></li>&nbsp; First Appointment List
                                                    </button>
                                                </div>
                                            </div>
                                            
                                            <div class="row" style="margin-top:-120px;">
                                                <div class="col-sm-7">
                                                    <div class="input-group">
                                                        <span class="input-group-btn">
                                                        <button type="button" class="btn btn-sm btn-primary"> Search</button> </span>
                                                        <input type="text" placeholder="Search patient name"
                                                               class="input-sm form-control"> 
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="btn-group">
                                                        <button class="btn btn-white" type="button" >Previous</button>
                                                        <button class="btn btn-primary" type="button">Today</button>
                                                        <button class="btn btn-white" type="button">Next</button>
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
                                                                <th>Doctor Name</th>
                                                                <th>Status</th>
                                                                <th>Date & Time Appointment</th>
                                                                <th>Healths Problem</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            
                                                            <tr>
                                                                <td>P-0785786788</td>
                                                                <td>Ali</td>
                                                                <td>Ahmadyar</td>
                                                                <td></i>Dr.Tamim</td>
                                                                <td>First Time</td>
                                                                <td><i class="fa fa-calendar"></i>&nbsp;2018/8/2 - 9:00</td>
                                                                <td class="">Blood pressure</td>
                                                            </tr>
                                                            <tr>
                                                                <td>P-0785786866</td>
                                                                <td>Mahdi</td>
                                                                <td>Safari</td>
                                                                <td></i>Dr.Tamim</td>
                                                                <td>Second Time</td>
                                                                <td><i class="fa fa-calendar"></i>&nbsp;2018/8/3 - 10:00 AM</td>
                                                                <td class="">Diabetics</td>
                                                            </tr>
                                                            <tr>
                                                                <td>P-078558099</td>
                                                                <td>Ahmad</td>
                                                                <td>Rasuli</td>
                                                                <td></i>Dr.Tamim</td>
                                                                <td>First Time</td>
                                                                <td><i class="fa fa-calendar"></i>&nbsp;2018/8/3 - 11:00 AM</td>
                                                                <td class="">Blood pressure</td>
                                                            </tr>
                                                           
                                                            <tr>
                                                                <td>P-0785786788</td>
                                                                <td>Omid</td>
                                                                <td>Shafaq</td>
                                                                <td></i>Dr.Ahmadi</td>
                                                                <td>First Time</td>
                                                                <td><i class="fa fa-calendar"></i>&nbsp;2018/8/2 - 9:00</td>
                                                                <td class="">Blood pressure</td>
                                                            </tr>
                                                            <tr>
                                                                <td>P-0785786866</td>
                                                                <td>Mahdi</td>
                                                                <td>Afzaly</td>
                                                                <td></i>Dr.Ahmadi</td>
                                                                <td>Second Time</td>
                                                                <td><i class="fa fa-calendar"></i>&nbsp;2018/8/3 - 10:00 AM</td>
                                                                <td class="">Diabetics</td>
                                                            </tr>
                                                            <tr>
                                                                <td>P-078558099</td>
                                                                <td>Reza</td>
                                                                <td>Ahmadian</td>
                                                                <td></i>Dr.Ahmadi</td>
                                                                <td>First Time</td>
                                                                <td><i class="fa fa-calendar"></i>&nbsp;2018/8/3 - 11:00 AM</td>
                                                                <td class="">Blood pressure</td>
                                                            </tr>

                                                           
                                                            <tr>
                                                                <td>P-0785786788</td>
                                                                <td>Mohsen</td>
                                                                <td>Twassuli</td>
                                                                <td>Dr.Jalal</td>
                                                                <td>First Time</td>
                                                                <td><i class="fa fa-calendar"></i>&nbsp;2018/8/2 - 9:00</td>
                                                                <td class="">Blood pressure</td>
                                                            </tr>
                                                            <tr>
                                                                <td>P-0785786866</td>
                                                                <td>Shafiqah</td>
                                                                <td>Enayati</td>
                                                                <td>Dr.Jalal</td>
                                                                <td>Second Time</td>
                                                                <td><i class="fa fa-calendar"></i>&nbsp;2018/8/3 - 10:00 AM</td>
                                                                <td class="">Diabetics</td>
                                                            </tr>
                                                            <tr>
                                                                <td>P-078558099</td>
                                                                <td>Fayaz</td>
                                                                <td>Qurbani</td>
                                                                <td>Dr.Jalal</td>
                                                                <td>First Time</td>
                                                                <td><i class="fa fa-calendar"></i>&nbsp;2018/8/3 - 11:00 AM</td>
                                                                <td class="">Blood pressure</td>
                                                            </tr>

                                                           
                                                            <tr>
                                                                <td>P-0785786788</td>
                                                                <td>Amrullah</td>
                                                                <td>Barokzay</td>
                                                                <td></i>Dr.Samim</td>
                                                                <td>First Time</td>
                                                                <td><i class="fa fa-calendar"></i>&nbsp;2018/8/2 - 9:00</td>
                                                                <td class="">Blood pressure</td>
                                                            </tr>
                                                            <tr>
                                                                <td>P-0785786866</td>
                                                                <td>Marwa</td>
                                                                <td>Anwary</td>
                                                                <td></i>Dr.Samim</td>
                                                                <td>Second Time</td>
                                                                <td><i class="fa fa-calendar"></i>&nbsp;2018/8/3 - 10:00 AM</td>
                                                                <td class="">Diabetics</td>
                                                            </tr>
                                                            <tr>
                                                                <td>P-078558099</td>
                                                                <td>Shakib</td>
                                                                <td>Khaliqi</td>
                                                                <td></i>Dr.Samim</td>
                                                                <td>First Time</td>
                                                                <td><i class="fa fa-calendar"></i>&nbsp;2018/8/3 - 11:00 AM</td>
                                                                <td class="">Blood pressure</td>
                                                            </tr>
                                                           
                                                        
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{--first doctor--}}
                                    <div id="fst" class="tab-pane">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <a href="/patient">
                                                        <button class="btn btn-primary" style="width:100%;">
                                                            <li class="fa fa-plus"></li>&nbsp; Add new Patient
                                                        </button>
                                                    </a>
                                                </div>
                                                <div class="col-md-3">
                                                    <button class="btn btn-primary">
                                                        <li class="fa fa-list"></li>&nbsp; Next Appointment List
                                                    </button>
                                                </div>
                                                <div class="col-md-3">
                                                    <button class="btn btn-primary">
                                                        <li class="fa fa-list"></li>&nbsp; First Appointment List
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="row" style="margin-top:-120px;">
                                                <div class="col-sm-7">
                                                    <div class="input-group">
                                                        <span class="input-group-btn">
                                                        <button type="button" class="btn btn-sm btn-primary"> Search</button> </span>
                                                        <input type="text" placeholder="Search patient name"
                                                               class="input-sm form-control"> 
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="btn-group">
                                                        <button class="btn btn-white" type="button" >Previous</button>
                                                        <button class="btn btn-primary" type="button">Today</button>
                                                        <button class="btn btn-white" type="button">Next</button>
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
                                                                <td>Sultani</td>
                                                                <td></i>Dr.Samim</td>
                                                                <td>First Time</td>
                                                                <td><i class="fa fa-calendar"></i>&nbsp;2018/8/1 - 8:00 AM</td>
                                                                <td class="">Blood pressure</td>
                                                            </tr>
                                                            <tr>
                                                                <td>P-0786906677</td>
                                                                <td>Naweed</td>
                                                                <td>Rezayee</td>
                                                                <td></i>Dr.Samim</td>
                                                                <td>Second Time</td>
                                                                <td><i class="fa fa-calendar"></i>&nbsp;2018/8/1 - 8:20 AM</td>
                                                                <td class="">Diabetics</td>
                                                            </tr>
                                                            <tr>
                                                                <td>P-0785445580</td>
                                                                <td>Qasim</td>
                                                                <td>Mukhtary</td>
                                                                <td></i>Dr.Samim</td>
                                                                <td>First Time</td>
                                                                <td><i class="fa fa-calendar"></i>&nbsp;2018/8/2 - 9:00 AM</td>
                                                                <td class="">Hepatitics</td>
                                                            </tr>
                                                            <tr>
                                                                <td>P-0785564749</td>
                                                                <td>Mahmood</td>
                                                                <td>Hashimi</td>
                                                                <td></i>Dr.Samim</td>
                                                                <td>Second Time</td>
                                                                <td><i class="fa fa-calendar"></i>&nbsp;2018/8/2 - 9:00 AM</td>
                                                                <td class="">Asthma</td>
                                                            </tr>
                                                            <tr>
                                                                <td>P-0785786788</td>
                                                                <td>Ali</td>
                                                                <td>Ahmadyar</td>
                                                                <td></i>Dr.Samim</td>
                                                                <td>First Time</td>
                                                                <td><i class="fa fa-calendar"></i>&nbsp;2018/8/2 - 9:00</td>
                                                                <td class="">Blood pressure</td>
                                                            </tr>
                                                            <tr>
                                                                <td>P-0785786866</td>
                                                                <td>Mahdi</td>
                                                                <td>Safari</td>
                                                                <td></i>Dr.Samim</td>
                                                                <td>Second Time</td>
                                                                <td><i class="fa fa-calendar"></i>&nbsp;2018/8/3 - 10:00 AM</td>
                                                                <td class="">Diabetics</td>
                                                            </tr>
                                                            <tr>
                                                                <td>P-078558099</td>
                                                                <td>Ahmad</td>
                                                                <td>Rasuli</td>
                                                                <td></i>Dr.Samim</td>
                                                                <td>First Time</td>
                                                                <td><i class="fa fa-calendar"></i>&nbsp;2018/8/3 - 11:00 AM</td>
                                                                <td class="">Blood pressure</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{--second doctor--}}
                                    <div id="snd" class="tab-pane">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <a href="/patient">
                                                        <button class="btn btn-primary"style="width:100%;">
                                                            <li class="fa fa-plus"></li>&nbsp; Add new Patient
                                                        </button>
                                                    </a>
                                                </div>
                                                <div class="col-md-3">
                                                    <button class="btn btn-primary">
                                                        <li class="fa fa-list"></li>&nbsp; Next Appointment List
                                                    </button>
                                                </div>
                                                <div class="col-md-3">
                                                    <button class="btn btn-primary">
                                                        <li class="fa fa-list"></li>&nbsp; First Appointment List
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="row" style="margin-top:-120px;">
                                                <div class="col-sm-7">
                                                    <div class="input-group">
                                                        <span class="input-group-btn">
                                                        <button type="button" class="btn btn-sm btn-primary"> Search</button> </span>
                                                        <input type="text" placeholder="Search patient name"
                                                               class="input-sm form-control"> 
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="btn-group">
                                                        <button class="btn btn-white" type="button" >Previous</button>
                                                        <button class="btn btn-primary" type="button">Today</button>
                                                        <button class="btn btn-white" type="button">Next</button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row" style="margin-top:-50px;">
                                                <div class="col-sm-11">
                                                    <div class="table-responsive">
                                                        <table class="table table-hover no-margins" >
                                                            <thead>
                                                            <tr>
                                                                <td>P-ID</td>
                                                                <th>Patient Name</th>
                                                                <th>Last Name</th>
                                                                <th>Doctor Name</th>
                                                                <th>Status</th>
                                                                <th>Date & Time Appointment</th>
                                                                <th>Healths Problem</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td>P-078554422</td>
                                                                <td>Rostam</td>
                                                                <td>Baqiri</td>
                                                                <td></i>Dr.Ahmadi</td>
                                                                <td>First Time</td>
                                                                <td><i class="fa fa-calendar"></i>&nbsp;2018/8/1 - 8:00 AM</td>
                                                                <td class="">Blood pressure</td>
                                                            </tr>
                                                            <tr>
                                                                <td>P-0786906677</td>
                                                                <td>Naweed</td>
                                                                <td>Azizi</td>
                                                                <td></i>Dr.Ahmadi</td>
                                                                <td>Second Time</td>
                                                                <td><i class="fa fa-calendar"></i>&nbsp;2018/8/1 - 8:20 AM</td>
                                                                <td class="">Diabetics</td>
                                                            </tr>
                                                            <tr>
                                                                <td>P-0785445580</td>
                                                                <td>Qasim</td>
                                                                <td>Saadat</td>
                                                                <td></i>Dr.Ahmadi</td>
                                                                <td>First Time</td>
                                                                <td><i class="fa fa-calendar"></i>&nbsp;2018/8/2 - 9:00 AM</td>
                                                                <td class="">Hepatitics</td>
                                                            </tr>
                                                            <tr>
                                                                <td>P-0785564749</td>
                                                                <td>Mahbub</td>
                                                                <td>Faqiri</td>
                                                                <td></i>Dr.Ahmadi</td>
                                                                <td>Second Time</td>
                                                                <td><i class="fa fa-calendar"></i>&nbsp;2018/8/2 - 9:00 AM</td>
                                                                <td class="">Asthma</td>
                                                            </tr>
                                                            <tr>
                                                                <td>P-0785786788</td>
                                                                <td>Omid</td>
                                                                <td>Shafaq</td>
                                                                <td></i>Dr.Ahmadi</td>
                                                                <td>First Time</td>
                                                                <td><i class="fa fa-calendar"></i>&nbsp;2018/8/2 - 9:00</td>
                                                                <td class="">Blood pressure</td>
                                                            </tr>
                                                            <tr>
                                                                <td>P-0785786866</td>
                                                                <td>Mahdi</td>
                                                                <td>Afzaly</td>
                                                                <td></i>Dr.Ahmadi</td>
                                                                <td>Second Time</td>
                                                                <td><i class="fa fa-calendar"></i>&nbsp;2018/8/3 - 10:00 AM</td>
                                                                <td class="">Diabetics</td>
                                                            </tr>
                                                            <tr>
                                                                <td>P-078558099</td>
                                                                <td>Reza</td>
                                                                <td>Ahmadian</td>
                                                                <td></i>Dr.Ahmadi</td>
                                                                <td>First Time</td>
                                                                <td><i class="fa fa-calendar"></i>&nbsp;2018/8/3 - 11:00 AM</td>
                                                                <td class="">Blood pressure</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{--third doctor--}}
                                    <div id="trd" class="tab-pane">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <a href="/patient">
                                                        <button class="btn btn-primary"style="width:100%;">
                                                            <li class="fa fa-plus"></li>&nbsp; Add new Patient
                                                        </button>
                                                    </a>
                                                </div>
                                                <div class="col-md-3">
                                                    <button class="btn btn-primary">
                                                        <li class="fa fa-list"></li>&nbsp; Next Appointment List
                                                    </button>
                                                </div>
                                                <div class="col-md-3">
                                                    <button class="btn btn-primary">
                                                        <li class="fa fa-list"></li>&nbsp; First Appointment List
                                                    </button>
                                                </div>
                                            </div>

                                           <div class="row" style="margin-top:-120px;">
                                                <div class="col-sm-7">
                                                    <div class="input-group">
                                                        <span class="input-group-btn">
                                                        <button type="button" class="btn btn-sm btn-primary"> Search</button> </span>
                                                        <input type="text" placeholder="Search patient name"
                                                               class="input-sm form-control"> 
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="btn-group">
                                                        <button class="btn btn-white" type="button" >Previous</button>
                                                        <button class="btn btn-primary" type="button">Today</button>
                                                        <button class="btn btn-white" type="button">Next</button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row" style="margin-top:-50px;">
                                                <div class="col-sm-11">
                                                    <div class="table-resposive">
                                                        <table class="table table-hover no-margins" >
                                                            <thead>
                                                            <tr>
                                                                <td>P-ID</td>
                                                                <th>Patient Name</th>
                                                                <th>Last name</th>
                                                                <th>Doctor Name</th>
                                                                <th>Status</th>
                                                                <th>Date & Time Appointment</th>
                                                                <th>Healths Problem</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td>P-078554422</td>
                                                                <td>Murtaza</td>
                                                                <td>Akhlaqi</td>
                                                                <td>Dr.Jalal</td>
                                                                <td>First Time</td>
                                                                <td><i class="fa fa-calendar"></i>&nbsp;2018/8/1 - 8:00 AM</td>
                                                                <td class="">Blood pressure</td>
                                                            </tr>
                                                            <tr>
                                                                <td>P-0786906677</td>
                                                                <td>Hadi</td>
                                                                <td>Paktiawal</td>
                                                                <td>Dr.Jalal</td>
                                                                <td>Second Time</td>
                                                                <td><i class="fa fa-calendar"></i>&nbsp;2018/8/1 - 8:20 AM</td>
                                                                <td class="">Diabetics</td>
                                                            </tr>
                                                            <tr>
                                                                <td>P-0785445580</td>
                                                                <td>Soltan</td>
                                                                <td>Pazhwak</td>
                                                                <td>Dr.Jalal</td>
                                                                <td>First Time</td>
                                                                <td><i class="fa fa-calendar"></i>&nbsp;2018/8/2 - 9:00 AM</td>
                                                                <td class="">Hepatitics</td>
                                                            </tr>
                                                            <tr>
                                                                <td>P-0785564749</td>
                                                                <td>Fahim</td>
                                                                <td>Kohsari</td>
                                                                <td>Dr.Jalal</td>
                                                                <td>Second Time</td>
                                                                <td><i class="fa fa-calendar"></i>&nbsp;2018/8/2 - 9:00 AM</td>
                                                                <td class="">Asthma</td>
                                                            </tr>
                                                            <tr>
                                                                <td>P-0785786788</td>
                                                                <td>Mohsen</td>
                                                                <td>Twassuli</td>
                                                                <td>Dr.Jalal</td>
                                                                <td>First Time</td>
                                                                <td><i class="fa fa-calendar"></i>&nbsp;2018/8/2 - 9:00</td>
                                                                <td class="">Blood pressure</td>
                                                            </tr>
                                                            <tr>
                                                                <td>P-0785786866</td>
                                                                <td>Shafiqah</td>
                                                                <td>Enayati</td>
                                                                <td>Dr.Jalal</td>
                                                                <td>Second Time</td>
                                                                <td><i class="fa fa-calendar"></i>&nbsp;2018/8/3 - 10:00 AM</td>
                                                                <td class="">Diabetics</td>
                                                            </tr>
                                                            <tr>
                                                                <td>P-078558099</td>
                                                                <td>Fayaz</td>
                                                                <td>Qurbani</td>
                                                                <td>Dr.Jalal</td>
                                                                <td>First Time</td>
                                                                <td><i class="fa fa-calendar"></i>&nbsp;2018/8/3 - 11:00 AM</td>
                                                                <td class="">Blood pressure</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    {{--forth doctor--}}
                                    <div id="frt" class="tab-pane">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <a href="/patient">
                                                        <button class="btn btn-primary"style="width:100%;">
                                                            <li class="fa fa-plus"></li>&nbsp; Add new Patient
                                                        </button>
                                                    </a>
                                                </div>
                                                <div class="col-md-3">
                                                    <button class="btn btn-primary">
                                                        <li class="fa fa-list"></li>&nbsp; Next Appointment List
                                                    </button>
                                                </div>
                                                <div class="col-md-3">
                                                    <button class="btn btn-primary">
                                                        <li class="fa fa-list"></li>&nbsp; First Appointment List
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="row" style="margin-top:-120px;">
                                                <div class="col-sm-7">
                                                    <div class="input-group">
                                                        <span class="input-group-btn">
                                                        <button type="button" class="btn btn-sm btn-primary"> Search</button> </span>
                                                        <input type="text" placeholder="Search patient name"
                                                               class="input-sm form-control"> 
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="btn-group">
                                                        <button class="btn btn-white" type="button" >Previous</button>
                                                        <button class="btn btn-primary" type="button">Today</button>
                                                        <button class="btn btn-white" type="button">Next</button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row" style="margin-top:-50px;">
                                                <div class="col-sm-11">
                                                    <div class="table-responsive">
                                                        <table class="table table-hover no-margins" >
                                                            <thead>
                                                            <tr>
                                                                <td>P-ID</td>
                                                                <th>Patient Name</th>
                                                                <th>Last Name</th>
                                                                <th>Doctor Name</th>
                                                                <th>Status</th>
                                                                <th>Date & Time Appointment</th>
                                                                <th>Healths Problem</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td>P-078554422</td>
                                                                <td>Mustafa</td>
                                                                <td>Moulayee</td>
                                                                <td></i>Dr.Tamim</td>
                                                                <td>First Time</td>
                                                                <td><i class="fa fa-calendar"></i>&nbsp;2018/8/1 - 8:00 AM</td>
                                                                <td class="">Blood pressure</td>
                                                            </tr>
                                                            <tr>
                                                                <td>P-0786906677</td>
                                                                <td>Ehsan</td>
                                                                <td>Sarwary</td>
                                                                <td></i>Dr.Tamim</td>
                                                                <td>Second Time</td>
                                                                <td><i class="fa fa-calendar"></i>&nbsp;2018/8/1 - 8:20 AM</td>
                                                                <td class="">Diabetics</td>
                                                            </tr>
                                                            <tr>
                                                                <td>P-0785445580</td>
                                                                <td>Abuzar</td>
                                                                <td>Rashidi</td>
                                                                <td></i>Dr.Tamim</td>
                                                                <td>First Time</td>
                                                                <td><i class="fa fa-calendar"></i>&nbsp;2018/8/2 - 9:00 AM</td>
                                                                <td class="">Hepatitics</td>
                                                            </tr>
                                                            <tr>
                                                                <td>P-0785564749</td>
                                                                <td>Rashid</td>
                                                                <td>Mortazawi</td>
                                                                <td></i>Dr.Tamim</td>
                                                                <td>Second Time</td>
                                                                <td><i class="fa fa-calendar"></i>&nbsp;2018/8/2 - 9:00 AM</td>
                                                                <td class="">Asthma</td>
                                                            </tr>
                                                            <tr>
                                                                <td>P-0785786788</td>
                                                                <td>Amrullah</td>
                                                                <td>Barokzay</td>
                                                                <td></i>Dr.Tamim</td>
                                                                <td>First Time</td>
                                                                <td><i class="fa fa-calendar"></i>&nbsp;2018/8/2 - 9:00</td>
                                                                <td class="">Blood pressure</td>
                                                            </tr>
                                                            <tr>
                                                                <td>P-0785786866</td>
                                                                <td>Marwa</td>
                                                                <td>Anwary</td>
                                                                <td></i>Dr.Tamim</td>
                                                                <td>Second Time</td>
                                                                <td><i class="fa fa-calendar"></i>&nbsp;2018/8/3 - 10:00 AM</td>
                                                                <td class="">Diabetics</td>
                                                            </tr>
                                                            <tr>
                                                                <td>P-078558099</td>
                                                                <td>Shakib</td>
                                                                <td>Khaliqi</td>
                                                                <td></i>Dr.Tamim</td>
                                                                <td>First Time</td>
                                                                <td><i class="fa fa-calendar"></i>&nbsp;2018/8/3 - 11:00 AM</td>
                                                                <td class="">Blood pressure</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{--end of doctors tabs--}}

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
    </div>
@endsection

