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
                    <div class="col-md-4">
                        <div class="btn-group">
                            <button class="btn btn-white" type="button">Pre day</button>
                            <button class="btn btn-primary" type="button">Today</button>
                            <button class="btn btn-white" type="button">Next day</button>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="input-group"><input type="text" placeholder="Search patient name" class="input-sm form-control"> <span class="input-group-btn">
                                        <button type="button" class="btn btn-sm btn-primary"> Go!</button> </span></div>
                    </div>

                </div>

                    <div class="row">
                        <div class="col-lg-8">
                            <div class="ibox float-e-margins">


                                    <table class="table table-hover no-margins">
                                        <thead>
                                        <tr>
                                            <th>Status</th>
                                            <th>Time Appointment</th>
                                            <th>Date Appointment</th>
                                            <th>Day Appointment</th>
                                            <th>Patient Name</th>
                                            <th>Doctor Name</th>
                                            <th>Register type</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td><small>Pending...</small></td>
                                            <td><i class="fa fa-clock-o"></i> 11:20pm</td>
                                            <td><i class="fa fa-clock-o"></i> 2018/8/1</td>
                                            <td><i class="fa fa-clock-o"></i> Monday</td>
                                            <td>Samantha</td>
                                            <td class="text-navy"> <i class="fa fa-user-md"></i> Ahmad </td>
                                            <td class=""> <i class="fa fa-book"></i> Online </td>
                                        </tr>
                                        <tr>
                                            <td><span class="label label-warning">Canceled</span> </td>
                                            <td><i class="fa fa-clock-o"></i> 10:40am</td>
                                            <td><i class="fa fa-clock-o"></i> 2018/8/1</td>
                                            <td><i class="fa fa-clock-o"></i> Monday</td>
                                            <td>Monica</td>
                                            <td class="text-navy"> <i class="fa fa-user-md"></i> Ahmad </td>
                                            <td> <i class="fa fa-book"></i> Online </td>
                                        </tr>
                                        <tr>
                                            <td><small>Pending...</small> </td>
                                            <td><i class="fa fa-clock-o"></i> 01:30pm</td>
                                            <td><i class="fa fa-clock-o"></i> 2018/8/1</td>
                                            <td><i class="fa fa-clock-o"></i> Monday</td>
                                            <td>John</td>
                                            <td class="text-navy"> <i class="fa fa-user-md"></i> Nemat </td>
                                            <td> <i class="fa fa-book"></i> Local </td>
                                        </tr>
                                        <tr>
                                            <td><small>Pending...</small> </td>
                                            <td><i class="fa fa-clock-o"></i> 02:20pm</td>
                                            <td><i class="fa fa-clock-o"></i> 2018/8/1</td>
                                            <td><i class="fa fa-clock-o"></i> Monday</td>
                                            <td>Agnes</td>
                                            <td class="text-navy"> <i class="fa fa-user-md"></i> Mike </td>
                                            <td> <i class="fa fa-book"></i> Local </td>
                                        </tr>
                                        <tr>
                                            <td><small>Pending...</small> </td>
                                            <td><i class="fa fa-clock-o"></i> 09:40pm</td>
                                            <td><i class="fa fa-clock-o"></i> 2018/8/1</td>
                                            <td><i class="fa fa-clock-o"></i> Monday</td>
                                            <td>Janet</td>
                                            <td class="text-navy"> <i class="fa fa-user-md"></i> Ahmad </td>
                                            <td> <i class="fa fa-book"></i> Online </td>
                                        </tr>
                                        <tr>
                                            <td><span class="label label-primary">Completed</span> </td>
                                            <td><i class="fa fa-clock-o"></i> 04:10am</td>
                                            <td><i class="fa fa-clock-o"></i> 2018/8/1</td>
                                            <td><i class="fa fa-clock-o"></i> Monday</td>
                                            <td>Amelia</td>
                                            <td class="text-navy"> <i class="fa fa-user-md"></i> Rahm </td>
                                            <td> <i class="fa fa-book"></i> Online </td>
                                        </tr>
                                        <tr>
                                            <td><small>Pending...</small> </td>
                                            <td><i class="fa fa-clock-d"></i> 12:08am</td>
                                            <td><i class="fa fa-clock-o"></i> 2018/8/1</td>
                                            <td><i class="fa fa-clock-o"></i> Monday</td>
                                            <td>Damian</td>
                                            <td class="text-navy"> <i class="fa fa-user-md"></i> Rahamt </td>
                                            <td> <i class="fa fa-book"></i> Local </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>


                                {{-- content details of patient appointment --}}
                                <div class="col-md-4">
                                    <div class="ibox-content text-left">

                                        <div class="m-b-sm">
                                            <img alt="image" class="img-circle" src="img/imageGirl.png">
                                        </div>
                                        <p class="font-bold" style="margin-left: 25px;">Patient PID : 552</p>

                                        <div class="text-left">
                                            <h8>Name: Nicki Smith - </h8>
                                            <span>Age: 25</span><br/>
                                            <span class="fa fa-user-md"></span><lable>  Doctor: Ahmad (Dep: Orthodontist) </lable><br/>
                                            <span class="fa fa-clock-o"></span><lable>  11:20AM <b>TO</b> 12:20AM</lable><br/>
                                            <span class="fa fa-at"></span><lable>  nicki@gmail.com</lable>
                                        </div>
                                        <div class="text-center">
                                            <button class="btn btn-success btn-rounded">Examination</button>
                                        </div>
                                    </div>
                            </div>


                        </div>
                        </div>
                    </div>
            </div>



@endsection