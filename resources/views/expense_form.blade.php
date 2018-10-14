@extends('master')

@section('style')
    <!-- Data Tables -->
    <link href="dashboard/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <link href="dashboard/css/plugins/dataTables/dataTables.responsive.css" rel="stylesheet">
    <link href="dashboard/css/plugins/dataTables/dataTables.tableTools.min.css" rel="stylesheet">

    <link href="dashboard/css/animate.css" rel="stylesheet">
    <link href="dashboard/css/style.css" rel="stylesheet">
    <link href="dashboard/css/plugins/sweetalert/sweetalert.css" rel="stylesheet"/>

@endsection

@section('content')

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Expenses</h5>
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
                    @if(isset($success))
                    <div class="alert alert-success  alert-dismissible">
                    {{$success}}
                    </div>
                    @endif
                    <!-- form -->
                        <div class="row">
                            <div class="col-lg-5">
                                <form method="post" action="/expenditure">
                                    {{csrf_field()}}

                                    <div class="form-group">
                                        <label>To Whom</label>
                                        <div><input type="text" name="receiver" class="form-control" placeholder="Money receiver"></div>
                                    </div>

                                    <div class="form-group">
                                        <label>Paid_Amount</label>
                                        <div><input type="text" name="amount" class="form-control" placeholder="Paid Amount"></div>
                                    </div>

                                    <div class="form-group">
                                        <label>Category</label>
                                        <div>
                                            <select class="select2_demo_1 form-control" name="category">
                                                <option value="">Select The Category</option>
                                                <option value="Rent">Rent</option>
                                                <option value="Office Supply">Office Supply</option>
                                                <option value="Personal">Personal</option>
                                                <option value="Taxes">Taxes</option>
                                                <option value="Employee salary">Employee Salary</option>
                                                <option value="Clinical Instrument">Clinical Instrument</option>
                                                <option value="Miscellaneous">Miscellaneous</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label>Description</label>
                                        <div><textarea class="form-control" name="description" id="grade"
                                                       placeholder="Enter more information"
                                                       style="resize:none;"></textarea></div>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-group">
                                            <button class="btn btn-primary" type="submit">Save</button>
                                            <button class="btn btn-white" type="reset">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-3"></div>
                            <div class="col-lg-4" style="float:right;">
                                <div class="ibox float-e-margins" style=" background-color: lightyellow;">
                                    <div class="ibox-title" style="background-color:  lightyellow;">
                                        <h5 style="">Capital</h5>
                                    </div>
                                    <div class="ibox-content"style=" background-color: lightyellow;">
                                        <h1 class="no-margins">{{$capital}}</h1>
                                        {{--<div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i>--}}
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection