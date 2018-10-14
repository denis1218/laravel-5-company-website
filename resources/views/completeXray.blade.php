@extends('master')
@section('content')

    <div class="row wrapper border-bottom white-bg page-heading"
         style="margin-top:-20px; margin-bottom: 10px; margin-left:1px;">
        <h3 style="margin-left:43px;margin-top:10px;">Income Details</h3>
        <div class="col-md-2 ">
            <h2><a class="btn btn-primary hvr-float-shadow" style="height:70px;width:155px; margin-left:25px;"
                   href="/income"><i class="fa fa-money" style="color:#ffc000; font-size: 30px;"></i> <br/>From Patient</a>
            </h2>
        </div>
        <div class="col-md-2 ">
            <h2><a class="btn btn-primary hvr-float-shadow" style="height:70px; width:155px; margin-left:15px;"
                   href="/xrey_income"><i class="fa fa-xing" style="color:#ffc000; font-size: 30px;"></i> <br/>X-Ray
                    Income</a></h2>
        </div>
        <div class="col-md-2 ">
            <h2><a class="btn btn-primary hvr-float-shadow" style="height:70px; width:155px; margin-left:15px;"
                   href="/other"><i class="fa fa-user" style="color:#ffc000; font-size: 30px;"></i> <br/> Other Income</a></h2>
        </div>
        <div class="col-lg-4" style="float:right;">
            <div class="ibox float-e-margins" style=" margin-top: 20px;">
                <div class="ibox-title" style=" background-color: #1ab394;color:white">
                    <h5>Total Income</h5>
                </div>
                <div class="ibox-content" style=" background-color: #1ab394;color:white">
                    <h1 class="no-margins">Amount:&nbsp;{{$Gtotal}}</h1>
                </div>
            </div>
        </div>
        {{--<div class="col-lg-4" style="float:right;">--}}
            {{--<div class="ibox float-e-margins" style=" background-color: lightyellow;">--}}
                {{--<div class="ibox-title" style=" background-color: lightyellow;">--}}
                    {{--<h5>Capital</h5>--}}
                {{--</div>--}}
                {{--<div class="ibox-content" style=" background-color: lightyellow;">--}}
                    {{--<h1 class="no-margins">40 886,200</h1>--}}
                    {{--<div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>--}}

                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    </div>
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Xrey income</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-wrench"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li>
                            <a href="#">Config option 1</a>
                        </li>
                        <li>
                            <a href="#">Config option 2</a>
                        </li>
                    </ul>
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>

            <div class="ibox-content">
                <div class="row">

                    <!--Search -->
                    <div class="col-sm-9">
                        <div class="input-group" style="margin-top:25px;">
                        <span class="input-group-btn">
                        <button type="button" style="margin-left:17px;" class="btn btn-sm btn-primary"><i
                                    class="fa fa-search"></i> Search</button></span>
                            <input type="text" placeholder="Patient ID" class="input-sm form-control">
                        </div>
                    </div>
                    <div class="col-sm-3" style="margin-top:25px;">
                        <a href="xrey_income" type="button" class="btn btn-sm btn-primary">Show uncomplete Xray</a>
                    </div>
                    <table class="table table-striped table-bordered table-hover" id="editable"
                           style="margin-top:80px;margin-left:30px;width:95%;">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>P-ID</th>
                            <th>P-Name</th>
                            <th>Doctor Name</th>
                            <th>Paid Amount</th>
                            <th>P-Details</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($xrey as $xr)
                            <tr class="gradeX">
                                <td>{{$xr->id}}</td>
                                <td>{{$xr->patient_id}}</td>
                                <td>{{$xr->patient_name}}</td>
                                <td>{{$xr->doctor_name}}</td>
                                <td>{{$xr->paid_amount}}</td>
                                <td>
                                    <button class="btn btn-xs btn-success fa fa-info" data-toggle="modal"
                                            data-target="#pinfo">&nbsp;P-Details
                                    </button>
                                </td>
                            </tr>

                        @endforeach
                        <tr>
                            <td colspan="4" class="text-right">Total X-Ray Fee</td>
                            <td colspan="2">{{$total}}</td>
                        </tr>

                        </tbody>
                    </table>
                @foreach($xrey as $xr)
                    <!-- edit model -->
                        <div class="modal inmodal" id="p{{$xr->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content animated fadeIn">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                                                    class="sr-only">Close</span></button>
                                        <i class="fa fa-edit modal-icon text-primary"></i>
                                        <h4 class="modal-title">Pay Amount</h4>
                                        <small>Fill the Paid amount</small>
                                    </div>
                                    <div class="modal-body">
                                        <form action="/xrey_income/{{$xr->id}}" method="post">
                                            {{method_field('patch')}}
                                            <div class="row">
                                                <div class="form-group"><label class="col-md-3 control-label">Paid Amount
                                                        :</label>

                                                    <div class="col-sm-6"><input type="text" name="paid_amount" class="form-control"
                                                                                 placeholder="Paid Amount"></div>
                                                </div>
                                            </div>
                                            <br><br>
                                            <button type="submit" class="btn btn-primary pull-right" style="margin-right: 5px">Save changes</button>

                                            <button type="button" class="btn btn-white pull-right" data-dismiss="modal" style="margin-right: 5px">Close</button>
                                            <br>

                                        </form>
                                    </div>
                                    <div class="modal-footer">


                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end of model -->
                    @endforeach
                    {{--Edit modal--}}
                    <div class="modal inmodal" id="edit" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content animated fadeIn">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                                                class="sr-only">Close</span></button>
                                    <i class="fa fa-edit modal-icon text-primary"></i>
                                    <h4 class="modal-title">Edit Content</h4>
                                    <small>Edit information</small>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="pid">PID</label>
                                            <input type="text" name="pid" class="form-control" value="p-078678976" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="p-name">Patient Name</label>
                                            <input type="text" name="p-name" class="form-control" placeholder="Patient Name" value="Ahmad">
                                        </div>
                                        <div class="form-group">
                                            <label for="doctor-name">Doctor Name</label>
                                            <input type="text" name="doctor-name" class="form-control" placeholder="Doctor Name" value="Dr.Samim">
                                        </div>
                                        <div class="form-group">
                                            <label for="estimated-fee">Estimated Fee</label>
                                            <input type="text" name="estimated-fee" class="form-control" placeholder="Estimated Fee" value="2000">
                                        </div>
                                        <div class="form-group">
                                            <label for="p-amount">Paid Amount</label>
                                            <input type="text" name="p-amount" class="form-control" placeholder="Paid Amount" value="1500">
                                        </div>
                                        <div class="form-group">
                                            <label for="discount">Discount</label>
                                            <input type="text" name="discount" class="form-control" placeholder="Discount" value="200">
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>

                                </div>
                            </div>
                        </div>
                    </div>
                {{--end of edit modal--}}

                <!-- edit model -->
                    <div class="modal inmodal" id="pinfo" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content animated fadeIn">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                                                class="sr-only">Close</span></button>

                                    <h4 class="modal-title">Patient Informatino</h4>
                                </div>
                                <div class="modal-body">
                                    <table class="table table-hover table-responsive">
                                        <tr>
                                            <td style="font-weight:bold;">Patient ID:</td>
                                            <td>p001</td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight:bold;">Patient Name:</td>
                                            <td>Eqbal</td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight:bold;">Patient Age:</td>
                                            <td>28</td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight:bold;">Patient Gender:</td>
                                            <td>Male</td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight:bold;">Patient Address:</td>
                                            <td>Karte Char Pole Surkh</td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight:bold;">Phone Number:</td>
                                            <td>0786859890</td>
                                        </tr>

                                        <tr>
                                            <td style="font-weight:bold;">Registration Date:</td>
                                            <td>07-March-18</td>
                                        </tr>

                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end of model -->

                </div>
            </div>
        </div>
    </div>
@endsection