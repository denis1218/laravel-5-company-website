@extends('master')

@section('style')
    <link href="dashboard/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
    <style rel="stylesheet">

        #img_all_tooth {
            border-radius: 20px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            border: 20px;
        }

        #my_file {
            display: none;
        }

        .btn-xray {
            height: 57px;
        }

        .bg-khatar {
            background: #ff0004;
        }

        .font-m {
            font-size: 1.2em;
        }

        .font-b {
            font-size: 1.5em;
        }

        ul.list-group:after {
            clear: both;
            display: block;
            content: "";
        }

        .list-group-item {
            float: left;

        }

        .vl {
            border-left: 6px solid green;
            height: 500px;
        }

        /* CSS REQUIRED */
        .state-icon {
            left: -5px;
        }

        .list-group-item-primary {
            color: rgb(255, 255, 255);
            background-color: rgb(88, 198, 202);
        }

        /* DEMO ONLY - REMOVES UNWANTED MARGIN */
        .well .list-group {
            margin-bottom: 0px;
        }
    </style>
@endsection



@section('content')
    {{-- table of patient's x-ray --}}
    <div class="col-lg-12" >
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Using Guide</h5>
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
                <div class="col-lg-12">
                    <div class="tabs-container">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#home"><i class="fa fa-home" style="font-size: 35px;"></i><br>Home</a></li>
                            <li><a data-toggle="tab" href="#department"><i class="fa fa-building" style="font-size: 35px;margin-left: 20px"></i><br>Department</a></li>
                            <li><a data-toggle="tab" href="#reception"><i class="fa fa-user" style="font-size: 35px;margin-left: 15px"></i><br>Reception</a></li>
                            <li><a data-toggle="tab" href="#finance"><i class="fa fa-money" style="font-size: 35px;margin-left: 5px"></i><br>Finance</a></li>
                            <li><a data-toggle="tab" href="#setting"><i class="fa fa-cog" style="font-size: 35px;margin-left: 7px"></i><br>Setting</a></li>
                            <li><a data-toggle="tab" href="#contact"><i class="fa fa-phone" style="font-size: 35px;margin-left: 7px"></i><br>Contact</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="home" class="tab-pane active">
                                <div class="panel-body">
                                    <strong>This is home tab</strong>
                                </div>
                            </div>
                            <div id="department" class="tab-pane">
                                <div class="panel-body">
                                    <strong>This is department tab</strong>
                                </div>
                            </div>
                            <div id="reception" class="tab-pane">
                                <div class="panel-body">
                                    <strong>This is reception tab</strong>
                                </div>
                            </div>
                            <div id="finance" class="tab-pane">
                                <div class="panel-body">
                                    <strong>This is finance tab</strong>
                                </div>
                            </div>
                            <div id="setting" class="tab-pane">
                                <div class="panel-body">
                                    <strong>This is setting tab</strong>
                                </div>
                            </div>
                            <div id="contact" class="tab-pane">
                                <div class="panel-body">
                                    <strong>This is contact tab</strong>
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
