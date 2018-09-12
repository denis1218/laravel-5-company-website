@extends('master')

@section('style')
    <link href="dashboard/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <link href="dashboard/css/plugins/dataTables/dataTables.responsive.css" rel="stylesheet">
    <link href="dashboard/css/plugins/dataTables/dataTables.tableTools.min.css" rel="stylesheet">
    <link href="css/dropdown_menu.css" rel="stylesheet">
    <link href="dashboard/css/animate.css" rel="stylesheet">
    <link href="dashboard/css/style.css" rel="stylesheet">
    <link href="dashboard/css/plugins/sweetalert/sweetalert.css" rel="stylesheet" />
    <link href="css/hover/hover-min.css" rel="stylesheet">
    <link href="dashboard/css/plugins/datapicker/datepicker3.css" rel="stylesheet">

    <style media="screen">
        .bts:hover{
            box-shadow:4px 4px 4px 4px grey;
            transform:scale(1.1);
        }
        .bts{
            height:70px; width:155px;
        }

        #menu-me-drop{
            overflow: hidden;
            position: absolute;
            transition: height 1s ease;
        }

    </style>
@endsection

@section('content')
    <div class="row text-center">
        <div class="col-md-12">
            <h1>Financial Report Income&nbsp;&nbsp;<i class="fa fa-arrow-circle-down"></i></h1>
        </div>
    </div>
    <br/>
    <br/>


    {{-- financial report all report --}}
    <div class="row page-wrapper border-bottom white-bg" style=" margin-top:-20px;margin-left: 1px; margin-bottom: 20px; padding-bottom: 15px;">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6" style="margin-top:15px; margin-left:20px;">
                    <h3> report Income single day </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="form-group" style="margin-left:35px;">
                        <label class="font-noraml">Select single day</label>
                        <div class="input-daterange input-group" id="" >
                            <span class="input-group-addon">&nbsp;  <i class="fa fa-calendar"></i> &nbsp;<i class="fa fa-arrow-right"></i></span>
                            <input type="date" class="input-sm form-control" name="end" />
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-sm btn-primary" type="submit" data-toggle="dropdown" style="margin-top:23px;" href=""><i class="fa fa-tag" style=" color:#ffe118 ;"></i>
                        Report</button>
                </div>
            </div>

        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6" style="margin-top:15px; margin-left:20px;">
                    <h3> report Income range day</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group" style="margin-left:35px;">
                        <label class="font-noraml">Select Range</label>
                        <div class="input-daterange input-group" id="" >
                            <input type="date" class="input-sm form-control" name="start"/>
                            <span class="input-group-addon">TO &nbsp;<i class="fa fa-arrow-right"></i></span>
                            <input type="date" class="input-sm form-control" name="end" />
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-sm btn-primary" type="submit" data-toggle="dropdown" style="margin-top:23px; margin-left:10px;" href=""><i class="fa fa-tag" style=" color:#ffe118 ;"></i>
                        Report</button>
                </div>
            </div>

        </div>
    </div>
    {{-- end all report --}}


    <br/>


    {{-- finance report select by type income --}}
    <div class="row page-wrapper border-bottom white-bg " style=" margin-top:-20px;margin-left: 1px; margin-bottom: 20px; padding-bottom: 15px;">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6" style="margin-top:15px; margin-left:20px;">
                    <h3> report Income single day</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="form-group" style="margin-left:35px;">
                        <label class="font-noraml">Select single day</label>
                        <div class="input-daterange input-group" id="" >
                            <span class="input-group-addon">&nbsp;  <i class="fa fa-calendar"></i> &nbsp;<i class="fa fa-arrow-right"></i></span>
                            <input type="date" class="input-sm form-control" name="end" />
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-sm btn-primary" type="submit" data-toggle="dropdown" style="margin-top:23px;" href=""><i class="fa fa-tag" style=" color:#ffe118 ;"></i>
                        Report</button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="form-group" style="margin-left:35px;">
                        <label class="font-noraml">Select type income</label>
                        <div class="input-daterange input-group" id="" >
                            <span class="input-group-addon">&nbsp;  <i class="fa fa-bars"></i> &nbsp;<i class="fa fa-arrow-right"></i></span>
                            <select type="text" class="input-sm form-control" name="end">
                                <option class="item">Patient</option>
                                <option class="item">Other Income</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6" style="margin-top:15px; margin-left:20px;">
                    <h3> report Income range day</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group" style="margin-left:35px;">
                        <label class="font-noraml">Select Range</label>
                        <div class="input-daterange input-group" id="" >
                            <input type="date" class="input-sm form-control" name="start"/>
                            <span class="input-group-addon">TO &nbsp;<i class="fa fa-arrow-right"></i></span>
                            <input type="date" class="input-sm form-control" name="end" />
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-sm btn-primary" type="submit" data-toggle="dropdown" style="margin-top:23px; margin-left:10px;" href=""><i class="fa fa-tag" style=" color:#ffe118 ;"></i>
                        Report</button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="form-group" style="margin-left:35px;">
                        <label class="font-noraml">Select type income</label>
                        <div class="input-daterange input-group" id="" >
                            <span class="input-group-addon">&nbsp;  <i class="fa fa-bars"></i> &nbsp;<i class="fa fa-arrow-right"></i></span>
                            <select type="text" class="input-sm form-control" name="end">
                                <option class="item">Patient</option>
                                <option class="item">Other Income</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    {{-- select report by type income --}}


    {{-- start tag tabs patient and otherIncome --}}
    <div class="col-lg-12 collapse" id="income" >
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Income</h5>
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
                <div class="row" style="margin-left:20px;">
                    <!-- card show of Income-->
                    <div class="col-lg-3 animated fadeInRight hvr-glow" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);    ">
                        <div class="ibox">
                            <div class="ibox-title">
                                <span class="label label-success pull-right">To day</span>
                                <h5>Income</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">886,200</h1>
                                <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                                <small>Total Income</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 animated fadeInRight" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); margin-left:20px;">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-info pull-right">Today</span>
                                <h5>Remaining</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">275,800</h1>
                                <div class="stat-percent font-bold text-info">20% <i class="fa fa-level-up"></i></div>
                                <small>Total Remaining</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 animated fadeInRight" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); margin-left:20px;">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-warning pull-right">Today</span>
                                <h5>Discount</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">275,800</h1>
                                <div class="stat-percent font-bold text-warning">20% <i class="fa fa-level-up"></i></div>
                                <small>Total Discount</small>
                            </div>
                        </div>
                    </div>
                    <!-- end of card show Income -->
                </div>
                <br/><br/>
                {{-- Box content area --}}
                <div class="tabs-container">
                    <ul class="nav nav-tabs">
                        <li class="active hvr-glow"><a data-toggle="tab" href="#tab-1" style="background: #88ee52">Patient &nbsp; <i class="fa fa-medkit"></i></a></li>
                        <li class=" hvr-glow" style="margin-left:7px;"><a data-toggle="tab" href="#tab-2" style="background: #6becee">Others &nbsp;<i class="fa fa-user"></i></a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane active">
                            <div class="panel-body">
                            {{-- content body of patient --}}
                            <!-- report -->
                                <div class="col-lg-12 animated fadeInRight">
                                    <div class="ibox float-e-margins">
                                        <div class="ibox-content">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <!--Search -->
                                                    <div class="col-md-5">
                                                        <div class="input-group" style="margin-left:14px;">
                                                            <input type="text" placeholder="Insert Patient ID" class="input-sm form-control">
                                                            <span class="input-group-btn">
                                                             <button type="button" class="btn btn-sm btn-primary"> Search</button></span>
                                                        </div>
                                                    </div>
                                                    <!-- end of Search -->
                                                    <div class="col-md-7 text-right">
                                                        <button type="button" class="btn btn-primary btn-md" name="button">PDF by Name &nbsp;<i class="fa fa-file-pdf-o" style="color: red"></i></button>
                                                        <button type="button" class="btn btn-primary btn-md" name="button">PDF All &nbsp;<i class="fa fa-file-pdf-o" style="color: red;"></i></button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">

                                                    <table class="table table-striped table-bordered table-hover " id="editable" style="visibility:;margin-top:20px;margin-left: 30px;width:95%;">
                                                        <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Name</th>
                                                            <th>Amount</th>
                                                            <th>Purpose</th>
                                                            <th>Date</th>
                                                            <th>Remaining</th>
                                                            <th>Discount</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr class="gradeX">
                                                            <td>1</td>
                                                            <td>Hamid</td>
                                                            <td>1900</td>
                                                            <td>Purchase</td>
                                                            <td>04/06/2018</td>
                                                            <td>600</td>
                                                            <td>130</td>
                                                        </tr>
                                                        <tr class="gradeX">
                                                            <td>1</td>
                                                            <td>Hamid</td>
                                                            <td>1900</td>
                                                            <td>Purchase</td>
                                                            <td>04/06/2018</td>
                                                            <td>600</td>
                                                            <td>130</td>
                                                        </tr>
                                                        <tr class="gradeX">
                                                            <td>1</td>
                                                            <td>Hamid</td>
                                                            <td>1900</td>
                                                            <td>Purchase</td>
                                                            <td>04/06/2018</td>
                                                            <td>600</td>
                                                            <td>130</td>
                                                        </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end of  report -->
                                <!-- End of Income Content -->
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane">
                            <div class="panel-body">
                                {{-- content body of others --}}
                                <div class="col-lg-12">
                                    <div class="ibox float-e-margins">

                                        <div class="ibox-content">
                                            <div class="row">
                                                <div class="col-md-12">

                                                    <!--Search -->
                                                    <div class="col-md-5">
                                                        <div class="input-group" style="margin-left:14px;">
                                                            <input type="text" placeholder="Insert Patient ID" class="input-sm form-control">
                                                            <span class="input-group-btn">
									<button type="button" class="btn btn-sm btn-primary"> Search</button></span>
                                                        </div>
                                                    </div>
                                                    <!-- end of Search -->
                                                    <div class="col-md-7 text-right">
                                                        <button type="button" class="btn btn-primary btn-md" style="width:110px;" name="button">PDF by
                                                            Name</button>
                                                        <button type="button" class="btn btn-primary btn-md" style="margin-right:8px;width:110px;" name="button">PDF
                                                            All</button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <table class="table table-striped table-bordered table-hover " id="editable" style="visibility:;margin-top:20px;margin-left: 30px;width:95%;">
                                                        <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Name</th>
                                                            <th>Amount</th>
                                                            <th>Purpose</th>
                                                            <th>Date</th>
                                                            <th>Remaining</th>
                                                            <th>Discount</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr class="gradeX">
                                                            <td>1</td>
                                                            <td>Hamid</td>
                                                            <td>1900</td>
                                                            <td>Purchase</td>
                                                            <td>04/06/2018</td>
                                                            <td>600</td>
                                                            <td>130</td>
                                                        </tr>
                                                        <tr class="gradeX">
                                                            <td>1</td>
                                                            <td>Hamid</td>
                                                            <td>1900</td>
                                                            <td>Purchase</td>
                                                            <td>04/06/2018</td>
                                                            <td>600</td>
                                                            <td>130</td>
                                                        </tr>
                                                        <tr class="gradeX">
                                                            <td>1</td>
                                                            <td>Hamid</td>
                                                            <td>1900</td>
                                                            <td>Purchase</td>
                                                            <td>04/06/2018</td>
                                                            <td>600</td>
                                                            <td>130</td>
                                                        </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end of  report -->

                            </div>
                        </div>
                    </div>
                    {{-- End of Content area Box --}}
                </div>
            </div>
        </div>
    </div>
    {{-- end of tag tabs patient and other Income --}}

    {{-- start of expenditure --}}
    <div class="col-lg-12 collapse" id="expenditure">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Expenditure</h5>
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
                <div class="row" style="margin-left: 20px;">
                    <!-- Expenditure content -->
                    <div class="col-lg-3  animated fadeInRight hvr-glow" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); ">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-success pull-right">To day</span>
                                <h5>Expenses</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">86,200 Afg</h1>
                                <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                                <small>Total Expenses</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3  animated fadeInRight hvr-glow" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); margin-left:30px;">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-danger pull-right">Today</span>
                                <h5>Loan</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">275,800 Afg</h1>
                                <div class="stat-percent font-bold text-danger">20% <i class="fa fa-level-up"></i></div>
                                <small>Total loan</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3  animated fadeInRight hvr-glow" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); margin-left:30px;">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-primary pull-right">Today</span>
                                <h5>Balece of money</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">62,800 Afg</h1>
                                <div class="stat-percent font-bold text-primary">20% <i class="fa fa-level-up"></i></div>
                                <small>Total Balece of money</small>
                            </div>
                        </div>
                    </div>
                    <!-- expenditure table -->
                </div>
                <hr/>
                <div class="row">
                    <div class="wrapper wrapper-content animated fadeInRight">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="ibox float-e-margins">
                                    {{-- Start Table --}}
                                    <div class="table-responsive">
                                        <div class="text-right col-md-12">
                                            <button type="button" class="btn btn-md btn-primary">Show Report &nbsp;<i class="fa fa-file-pdf-o" style="color:red;"></i></button>
                                        </div>
                                        <br/>
                                        <table class="table table-striped table-bordered table-hover " id="editable">
                                            <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Given Amount</th>
                                                <th>To Whom</th>
                                                <th>Purpose</th>
                                                <th>Item</th>
                                                <th>Price</th>
                                                <th>Description</th>
                                                <th>Remaining</th>
                                                <th>Loan</th>
                                                <th>Edit</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr class="gradeX">
                                                <td>1</td>
                                                <td>900</td>
                                                <td>Ahmad</td>
                                                <td>lunch</td>
                                                <td>Tooth Material</td>
                                                <td>750</td>
                                                <td>remaining is:150Af</td>
                                                <td>
                                                    <button class="btn btn-xs btn-primary fa fa-plus demo3">&nbsp;Add Back</button>
                                                </td>
                                                <td>
                                                    <button class="btn btn-xs btn-primary fa fa-minus demo3">&nbsp;Reduce</button>
                                                </td>
                                                <td>
                                                    <button class="btn btn-xs btn-danger fa fa-remove demo3">&nbsp;Delete</button>
                                                    <button class="btn btn-xs btn-success fa fa-edit" data-toggle="modal" data-target="#eprice">&nbsp;Edit</button>
                                                </td>
                                            </tr>

                                            <tr class="gradeX">
                                                <td>2</td>
                                                <td>1000</td>
                                                <td>Ahmad</td>
                                                <td>material purchase</td>
                                                <td>Tooth Material</td>
                                                <td>740</td>
                                                <td>remaining is:260Af</td>
                                                <td>
                                                    <button class="btn btn-xs btn-primary fa fa-plus demo3">&nbsp;Add Back</button>
                                                </td>
                                                <td>
                                                    <button class="btn btn-xs btn-primary fa fa-minus demo3">&nbsp;Reduce</button>
                                                </td>
                                                <td>
                                                    <button class="btn btn-xs btn-danger fa fa-remove demo3">&nbsp;Delete</button>
                                                    <button class="btn btn-xs btn-success fa fa-edit" data-toggle="modal" data-target="#eprice">&nbsp;Edit</button>
                                                </td>
                                            </tr>

                                            <tr class="gradeX">
                                                <td>3</td>
                                                <td>1000</td>
                                                <td>Ahmad</td>
                                                <td>material purchase</td>
                                                <td>Tooth Material</td>
                                                <td>740</td>
                                                <td>remaining is:260Af</td>
                                                <td>
                                                    <button class="btn btn-xs btn-primary fa fa-plus demo3">&nbsp;Add Back</button>
                                                </td>
                                                <td>
                                                    <button class="btn btn-xs btn-primary fa fa-minus demo3">&nbsp;Reduce</button>
                                                </td>
                                                <td>
                                                    <button class="btn btn-xs btn-danger fa fa-remove demo3">&nbsp;Delete</button>
                                                    <button class="btn btn-xs btn-success fa fa-edit" data-toggle="modal" data-target="#eprice">&nbsp;Edit</button>
                                                </td>
                                            </tr>

                                            <tr class="gradeX">
                                                <td>4</td>
                                                <td>1000</td>
                                                <td>Ahmad</td>
                                                <td>material purchase</td>
                                                <td>Tooth Material</td>
                                                <td>740</td>
                                                <td>remaining is:260Af</td>
                                                <td>
                                                    <button class="btn btn-xs btn-primary fa fa-plus demo3">&nbsp;Add Back</button>
                                                </td>
                                                <td>
                                                    <button class="btn btn-xs btn-primary fa fa-minus demo3">&nbsp;Reduce</button>
                                                </td>
                                                <td>
                                                    <button class="btn btn-xs btn-danger fa fa-remove demo3">&nbsp;Delete</button>
                                                    <button class="btn btn-xs btn-success fa fa-edit" data-toggle="modal" data-target="#eprice">&nbsp;Edit</button>
                                                </td>
                                            </tr>
                                            <tr class="gradeX">
                                                <td>5</td>
                                                <td>1000</td>
                                                <td>Ahmad</td>
                                                <td>material purchase</td>
                                                <td>Tooth Material</td>
                                                <td>740</td>
                                                <td>remaining is:260Af</td>
                                                <td>
                                                    <button class="btn btn-xs btn-primary fa fa-plus demo3">&nbsp;Add Back</button>
                                                </td>
                                                <td>
                                                    <button class="btn btn-xs btn-primary fa fa-minus demo3">&nbsp;Reduce</button>
                                                </td>
                                                <td>
                                                    <button class="btn btn-xs btn-danger fa fa-remove demo3">&nbsp;Delete</button>
                                                    <button class="btn btn-xs btn-success fa fa-edit" data-toggle="modal" data-target="#eprice">&nbsp;Edit</button>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <!-- End of the table -->
                                    </div>
                                    {{-- End table --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- edit model -->
                <div class="modal inmodal" id="eprice" tabindex="-1" role="dialog"  aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content animated fadeIn">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <i class="fa fa-edit modal-icon text-primary"></i>
                                <h4 class="modal-title">Edit Content</h4>
                                <small>Edit expenditure details</small>
                            </div>
                            <div class="modal-body">
                                <div class="form-group"><label>ID</label> <input type="text" placeholder="Id" value="" class="form-control"></div>
                                <div class="form-group"><label>Amount</label> <input type="number" placeholder="Amount"  value="" class="form-control"></div>
                                <div class="form-group"><label>To Whom</label> <input type="text" placeholder="Receiver" value="" class="form-control"></div>
                                <div class="form-group"><label>Purpose</label> <input type="text" placeholder="purpose" value="" class="form-control"></div>
                                <div class="form-group"><label>Item</label> <input type="text" placeholder="Purchased item" value="" class="form-control"></div>
                                <div class="form-group"><label>Price</label> <input type="text" placeholder="Price" value="" class="form-control"></div>
                                <div class="form-group"><label>Calculated Result</label> <input type="text" placeholder="" value="" class="form-control" readonly></div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>

                            </div>
                        </div>
                    </div>

                    {{-- end of body content of others--}}
                </div>
            </div>
        </div>
    </div>
    {{-- end of expenditure --}}

@endsection


@section('script')
    <!-- script -->

    <script src="dashboard/js/plugins/sweetalert/sweetalert.min.js"></script>
    <!-- Data Tables -->
    <script src="dashboard/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="dashboard/js/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script src="dashboard/js/plugins/dataTables/dataTables.responsive.js"></script>
    <script src="dashboard/js/plugins/dataTables/dataTables.tableTools.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="dashboard/js/inspinia.js"></script>
    <script src="dashboard/js/plugins/pace/pace.min.js"></script>

    <script>
        $(document).ready(function () {

            $('.demo1').click(function () {
                swal({
                    title: "Welcome in Alerts",
                    text: "Lorem Ipsum is simply dummy text of the printing and typesetting industry."
                });
            });

            $('.demo2').click(function () {
                swal({
                    title: "Successfully Send!",
                    text: "X-Ray Document Successfully send to doctor!",
                    type: "success"
                });
            });

            $('.demo3').click(function () {
                swal({
                    title: "Are you sure?",
                    text: "You will not be able to recover this imaginary file!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes, delete it!",
                    closeOnConfirm: false
                }, function () {
                    swal("Deleted!", "Your imaginary file has been deleted.", "success");
                });
            });

            $('.demo4').click(function () {
                swal({
                        title: "Are you sure?",
                        text: "Your will not be able to recover this imaginary file!",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Yes, delete it!",
                        cancelButtonText: "No, cancel plx!",
                        closeOnConfirm: false,
                        closeOnCancel: false
                    },
                    function (isConfirm) {
                        if (isConfirm) {
                            swal("Deleted!", "Your imaginary file has been deleted.", "success");
                        } else {
                            swal("Cancelled", "Your imaginary file is safe :)", "error");
                        }
                    });
            });
        });
        $(document).on('click',function(){
            $('.getl').collapse('hide');
        })
    </script>


@endsection
