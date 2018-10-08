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
            <h1>Report Income&nbsp;&nbsp;<img src="img/income_icon.png" width="100px;"/></h1>
        </div>
    </div>
    <br/>
    <br/>


    {{-- financial report all report --}}
    <div class="row page-wrapper border-bottom white-bg" style=" margin-top:-20px;margin-left: 1px; margin-bottom: 20px; padding-bottom: 15px;">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6" style="margin-top:15px; margin-left:20px;">
                    <h3> Report Income single day all type</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <div class="form-group" style="margin-left:35px;">
                        <label class="font-noraml">Select single day </label>
                        <div class="input-daterange input-group" id="" >
                            <span class="input-group-addon">&nbsp;  <i class="fa fa-calendar"></i> &nbsp;<i class="fa fa-arrow-right"></i></span>
                            <input type="date" class="input-sm form-control" name="end" />
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-sm btn-primary dropdown-toggle" type="submit" data-toggle="dropdown" style="margin-top:23px;" href=""><i class="fa fa-tag" style=" color:#ffe118 ;"></i>
                        &nbsp;Report &nbsp;&nbsp;<span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a href="#">PDF<i class="fa fa-lg fa-file-pdf-o pull-right text-danger" style="margin-top:6px;"></i></a></li>
                        <li><a href="#">Excel<i class="fa fa-lg fa-file-excel-o pull-right text-navy" style="margin-top:6px;"></i></a></li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6" style="margin-top:15px; margin-left:20px;">
                    <h3> Report Income range day all type</h3>
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
                        &nbsp;Report&nbsp;&nbsp;<span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a href="#">PDF<i class="fa fa-lg fa-file-pdf-o pull-right text-danger" style="margin-top:6px;"></i></a></li>
                        <li><a href="#">Excel<i class="fa fa-lg fa-file-excel-o pull-right text-navy" style="margin-top:6px;"></i></a></li>
                    </ul>
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
                    <h3> Report Income single day select type</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <div class="form-group" style="margin-left:35px;">
                        <label class="font-noraml">Select single day </label>
                        <div class="input-daterange input-group" id="" >
                            <span class="input-group-addon">&nbsp;  <i class="fa fa-calendar"></i> &nbsp;<i class="fa fa-arrow-right"></i></span>
                            <input type="date" class="input-sm form-control" name="end" />
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-sm btn-primary dropdown-toggle" type="submit" data-toggle="dropdown" style="margin-top:23px;" href=""><i class="fa fa-tag" style=" color:#ffe118 ;"></i>
                        &nbsp;Report &nbsp;&nbsp;<span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a href="#">PDF<i class="fa fa-lg fa-file-pdf-o pull-right text-danger" style="margin-top:6px;"></i></a></li>
                        <li><a href="#">Excel<i class="fa fa-lg fa-file-excel-o pull-right text-navy" style="margin-top:6px;"></i></a></li>
                    </ul>
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
                    <h3> Report Income range day select type </h3>
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
                        &nbsp;Report&nbsp;&nbsp;<span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a href="#">PDF<i class="fa fa-lg fa-file-pdf-o pull-right text-danger" style="margin-top:6px;"></i></a></li>
                        <li><a href="#">Excel<i class="fa fa-lg fa-file-excel-o pull-right text-navy" style="margin-top:6px;"></i></a></li>
                    </ul>
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



@endsection
