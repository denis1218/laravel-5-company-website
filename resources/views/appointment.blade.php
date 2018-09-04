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
                            <button class="btn btn-success">
                                <li class="fa fa-plus"></li>&nbsp; Add new Patient
                            </button>
                        </a>
                    </div>
                </div>
                <br/>
                <div class="row">
                    <div class="col-md-4">
                        <div class="btn-group">
                            <button class="btn btn-white" type="button"><i class="fa fa-arrow-left"></i>&nbsp; Pre day
                            </button>
                            <button class="btn btn-primary" type="button">Today</button>
                            <button class="btn btn-white" type="button">Next day &nbsp;<i class="fa fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="input-group"><input type="text" placeholder="Search patient name"
                                                        class="input-sm form-control"> <span class="input-group-btn">
                                        <button type="button" class="btn btn-sm btn-primary"> Go!</button> </span></div>
                    </div>
                </div>
                <br/>
                <div class="row">
                    <div class="col-lg-10">
                        <div class="ibox float-e-margins">
                            <table class="table table-hover no-margins">
                                <thead>
                                <tr>
                                    <td>P-ID</td>
                                    <th>Patient Name</th>
                                    <th>Doctor Name</th>
                                    <th>Status</th>
                                    <th>Date & Time Appointment</th>
                                    <th>Register type</th>
                                    <th>Details</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>P-078554422</td>
                                    <td>Samantha</td>
                                    <td class="text-navy"><i class="fa fa-user-md"></i> Ahmad</td>
                                    <td>
                                        <small>Waiting...</small>
                                    </td>
                                    <td><i class="fa fa-calendar"></i>&nbsp;2018/8/1 - 11:20pm</td>
                                    <td class=""><i class="fa fa-book"></i> Online</td>
                                    <td class=""><i class=""></i>
                                        <button class="btn btn-xs btn-info" data-toggle="modal"
                                                data-target="#info_patient">Details
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>P-0799512536</td>
                                    <td>Monica</td>
                                    <td class="text-navy"><i class="fa fa-user-md"></i> Ahmad</td>
                                    <td><span class="label label-warning">Canceled</span></td>
                                    <td><i class="fa fa-calendar"></i>&nbsp;2018/8/1 - 10:40am</td>
                                    <td><i class="fa fa-book"></i> Online</td>
                                    <td class=""><i class=""></i>
                                        <button class="btn btn-xs btn-info" data-toggle="modal"
                                                data-target="#info_patient">Details
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>P-0752211554</td>
                                    <td>John</td>
                                    <td class="text-navy"><i class="fa fa-user-md"></i> Nemat</td>
                                    <td>
                                        <small>Waiting...</small>
                                    </td>
                                    <td><i class="fa fa-calendar"></i>&nbsp;2018/8/1 - 01:30pm</td>
                                    <td><i class="fa fa-book"></i> Local</td>
                                    <td class=""><i class=""></i>
                                        <button class="btn btn-xs btn-info" data-toggle="modal"
                                                data-target="#info_patient">Details
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>P-0745511253</td>
                                    <td>Agnes</td>
                                    <td class="text-navy"><i class="fa fa-user-md"></i> Mike</td>
                                    <td>
                                        <small>Waiting...</small>
                                    </td>
                                    <td><i class="fa fa-calendar"></i>&nbsp;2018/8/1 - 02:20pm</td>
                                    <td><i class="fa fa-book"></i> Local</td>
                                    <td class=""><i class=""></i>
                                        <button class="btn btn-xs btn-info" data-toggle="modal"
                                                data-target="#info_patient">Details
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>P-076225325</td>
                                    <td>Janet</td>
                                    <td class="text-navy"><i class="fa fa-user-md"></i> Ahmad</td>
                                    <td>
                                        <small>Waiting...</small>
                                    </td>
                                    <td><i class="fa fa-calendar"></i>&nbsp;2018/8/1 - 09:40pm</td>
                                    <td><i class="fa fa-book"></i> Online</td>
                                    <td class=""><i class=""></i>
                                        <button class="btn btn-xs btn-info" data-toggle="modal"
                                                data-target="#info_patient">Details
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>P-078522154</td>
                                    <td>Amelia</td>
                                    <td class="text-navy"><i class="fa fa-user-md"></i> Rahm</td>
                                    <td><span class="label label-primary">Visited</span></td>
                                    <td><i class="fa fa-calendar"></i>&nbsp;2018/8/1 - 04:10am</td>
                                    <td><i class="fa fa-book"></i> Online</td>
                                    <td class=""><i class=""></i>
                                        <button class="btn btn-xs btn-info" data-toggle="modal"
                                                data-target="#info_patient">Details
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>P-071552565</td>
                                    <td>Damian</td>
                                    <td class="text-navy"><i class="fa fa-user-md"></i> Rahamt</td>
                                    <td>
                                        <small>Waiting...</small>
                                    </td>
                                    <td><i class="fa fa-calendar"></i>&nbsp;2018/8/1 - 12:08am</td>
                                    <td><i class="fa fa-book"></i> Local</td>
                                    <td class=""><i class=""></i>
                                        <button class="btn btn-xs btn-info" data-toggle="modal"
                                                data-target="#info_patient">Details
                                        </button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end of all box content --}}

    {{-- modal window to show editing detail of teeth --}}
    <dgitiv class="modal inmodal" id="info_patient" tabindex="-1" role="dialog" aria-hidden="true">
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
