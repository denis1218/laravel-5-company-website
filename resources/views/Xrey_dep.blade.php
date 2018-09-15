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

    <div class="col-lg-9">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>X-Ray Patient </h5>
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

                <div class="row" style="margin-bottom: -30px;">
                    <div class="row m-b-lg m-t-lg">
                        <div class="col-md-6">
                            <div class="profile-info">
                                <div class="">
                                    <div>
                                        <h2 class="no-margins font-b">
                                            Ahmad Farid
                                        </h2>
                                        <h4>ID: P-504075</h4>
                                        <small style="font-size: 10px;">
                                            <span style="font-size: 10px; font-weight: bold;">Problem teeth : </span>Orthodontist,
                                            Periodontist <br/>
                                            <span style="font-size: 10px; font-weight: bold;">Problem Health : </span>Blood
                                            Pressure , Allergy to Penicillin , Allergy to Anaesthetic
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <table class="table small m-b-xs">
                                <tbody>
                                <tr>
                                    <td>
                                        <span class="font-m">Gender:<b>&nbsp;Male</b>&nbsp;<i class="fa fa-male"></span>
                                    </td>
                                    <td>
                                        <span class="font-m">Age:<b>&nbsp;25</b>&nbsp;<i class=""></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="font-m">Doctor:<b>&nbsp;Dr.Ahmadi</b>&nbsp;<i
                                                    class="fa fa-user-md"></i></span>
                                    </td>
                                    <td>
                                        <span class="font-m">Visited:<b>&nbsp;First Time</b>&nbsp;<i
                                                    class=""></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="font-m">Date Reg:<b>&nbsp;2018/5/26</b>&nbsp;<i
                                                    class="fa fa-calendar"></i></span>
                                    </td>
                                    <td>
                                        <span class="font-m text-info">Cash X-Ray:<b>&nbsp;Paid</b>&nbsp;<i
                                                    class="fa fa-money"></i></span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <hr class="bg-primary"/>
                <div class="row">
                    <div class="col-md-5">
                        <table class="table table-condensed table-bordered text-center">
                            <tr>
                                <td><strong style="margin-top:30px;">Tooth Image :</strong></td>
                                <td><img src="img/teeths/4.png"/></td>
                            </tr>
                            <tr>
                                <td><strong>Tooth Number :</strong></td>
                                <td>4</td>
                            </tr>
                            <tr>
                                <td><strong>Tooth Position :</strong></td>
                                <td>Upper Right</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-7">
                        <img src="img/all_tooth.jpg" class="img-responsive" id="img_all_tooth"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3" style="margin-top:30px;">
                        <button class="btn btn-primary xray">Save <i class="fa fa-save"></i></button>&nbsp;&nbsp;
                        <button class="btn btn-white">Cancel</button>
                    </div>
                </div>
            </div>
        </div>

        {{-- table xray One patient --}}
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Table X-Ray of Mostafa Ahamdi</h5>
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
                        {{-- table of content of X-Ray of petient --}}
                        <div class="col-md-12">

                            <div class="row text-center">
                                <span>Navigate between days :</span>
                                    <div class="btn-group">
                                        <button class="btn btn-white"><i class="fa fa-arrow-left text-success"></i>&nbsp;&nbsp;Last day</button>
                                        <button class="btn btn-success">To Day</button>
                                        <button class="btn btn-white">Next day &nbsp;<i class="fa fa-arrow-right text-success"></i></button>
                                    </div>

                            </div>
                            <br/>
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Patient PID</th>
                                    <th>Tooth NO</th>
                                    <th>Date & Time</th>
                                    <th>Doctor Treatment</th>
                                    <th>Cash X-Ray</th>
                                    <th>Edit</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>P-078565552</td>
                                    <td>7</td>
                                    <td>2018/5/25</td>
                                    <td>Dr. Tamim</td>
                                    <td>Paid</td>
                                    <td>
                                        <button class="btn btn-xs btn-primary" data-toggle="modal"
                                                data-target="#myModal4image">Edit <i class="fa fa-edit"></i></button>
                                        <button class="btn btn-xs btn-danger demo_delete">Delete <i
                                                    class="fa fa-remove"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>P-07778582</td>
                                    <td>26</td>
                                    <td>2018/5/26</td>
                                    <td>Dr. Yasin</td>
                                    <td>Paid</td>
                                    <td>
                                        <button class="btn btn-xs btn-primary" data-toggle="modal"
                                                data-target="#myModal4image">Edit <i class="fa fa-edit"></i></button>
                                        <button class="btn btn-xs btn-danger demo_delete">Delete <i
                                                    class="fa fa-remove"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>P-07752536</td>
                                    <td>23</td>
                                    <td>2018/5/25</td>
                                    <td>Dr. Samim</td>
                                    <td>Paid</td>
                                    <td>
                                        <button class="btn btn-xs btn-primary" data-toggle="modal"
                                                data-target="#myModal4image">Edit <i class="fa fa-edit"></i></button>
                                        <button class="btn btn-xs btn-danger demo_delete">Delete <i
                                                    class="fa fa-remove"></i></button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="row">
                                <div class="col-md-2">
                                    <strong>Result X-Ray</strong>
                                </div>
                                <div class="col-md-3">
                                    <strong>Current table X-Ray: 3</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- list of patient xray --}}
    <div class="col-lg-3">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Your X-Ray Patient List</h5>
                <div class="ibox-tools">
                    <span class="label label-warning-light pull-right">7 Patients</span>
                </div>
            </div>
            <div class="ibox-content">

                <div>
                    <div class="feed-activity-list">
                        <div class="feed-element">
                            <div class="media-body " style="margin-top: -20px;">
                                <small class="pull-right">5m ago</small>
                                <br/>
                                <small class="pull-right"><i class="fa fa-spinner text-info"></i>&nbsp;Pending</small>
                                <a href="#"><strong>P-665522</strong> <br/><strong>Ahamd Farid </strong><br></a>
                                <small class="text-muted">Today 5:60 pm - 12.06.2018</small>
                            </div>
                        </div>
                        <div class="feed-element">
                            <div class="media-body " style="margin-top: -20px;">
                                <small class="pull-right">5m ago</small>
                                <br/>
                                <small class="pull-right"><i class="fa fa-spinner text-info"></i>&nbsp;Pending</small>
                                <a href="#"><strong>P-665522</strong> <br/><strong>Ahamd Farid </strong><br></a>
                                <small class="text-muted">Today 5:60 pm - 12.06.2018</small>
                            </div>
                        </div>
                        <div class="feed-element">
                            <div class="media-body " style="margin-top: -20px;">
                                <small class="pull-right">5m ago</small>
                                <br/>
                                <small class="pull-right"><i class="fa fa-spinner text-info"></i>&nbsp;Pending</small>
                                <a href="#"><strong>P-665522</strong> <br/><strong>Ahamd Farid </strong><br></a>
                                <small class="text-muted">Today 5:60 pm - 12.06.2018</small>
                            </div>
                        </div>
                        <div class="feed-element">
                            <div class="media-body " style="margin-top: -20px;">
                                <small class="pull-right">5m ago</small>
                                <br/>
                                <small class="pull-right"><i class="fa fa-spinner text-info"></i>&nbsp;Pending</small>
                                <a href="#"><strong>P-665522</strong> <br/><strong>Ahamd Farid </strong><br></a>
                                <small class="text-muted">Today 5:60 pm - 12.06.2018</small>
                            </div>
                        </div>
                        <div class="feed-element">
                            <div class="media-body " style="margin-top: -20px;">
                                <small class="pull-right">5m ago</small>
                                <br/>
                                <small class="pull-right"><i class="fa fa-spinner text-info"></i>&nbsp;Pending</small>
                                <a href="#"><strong>P-665522</strong> <br/><strong>Ahamd Farid </strong><br></a>
                                <small class="text-muted">Today 5:60 pm - 12.06.2018</small>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>


    {{-- modal window --}}
    <div class="modal inmodal" id="myModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated fadeIn">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span
                                aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <i class="fa fa-edit modal-icon text-primary"></i>
                    <h4 class="modal-title">Edit Xray details</h4>
                    <small>Edit content of X-Ray operation</small>
                </div>
                <div class="modal-body">
                    <div class="form-group"><label>Tooth number</label> <input type="text" placeholder="Tooth number"
                                                                               value="25 UP" class="form-control"></div>
                    <div class="form-group"><label>Date & Time</label> <input type="date" placeholder="Date & Time"
                                                                              class="form-control"></div>
                    <div class="form-group"><label>Doctor Treatment</label> <input type="text"
                                                                                   placeholder="Doctor Treatment"
                                                                                   value="Dr.Tamim"
                                                                                   class="form-control"></div>
                    <div class="form-group"><label>Estimate Fee</label> <input type="number" placeholder="Estimate Fee"
                                                                               value="300" class="form-control"></div>
                    <div class="form-group"><label>X-Ray ID image</label> <input type="text"
                                                                                 placeholder="X-Ray ID image"
                                                                                 value="X-256535" class="form-control">
                    </div>
                    <div><h4>Note : You cann't change image X-Ray or you have to delete the record!.</h4></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>

                </div>
            </div>
        </div>
    </div>

    <div class="modal inmodal" id="myModal4image" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated fadeIn">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span
                                aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <i class="fa fa-image modal-icon text-primary"></i>
                    <h4 class="modal-title">Image X-Ray of Tooth</h4>
                    <small>X-Ray Tooth No: 25 UP</small>
                </div>
                <div class="modal-body text-center">
                    <img src="img/xray.jpg" width="250px" height="200px"/>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script src="dashboard/js/plugins/sweetalert/sweetalert.min.js"></script>
    <script>
        document.getElementById('get_file').onclick = function () {
            document.getElementById('my_file').click();
        };

    </script>
    <script>
        $(document).ready(function () {

            $('.demo1').click(function () {
                swal({
                    title: "Welcome in Alerts",
                    text: "Lorem Ipsum is simply dummy text of the printing and typesetting industry."
                });
            });

            $('.xray').click(function () {
                swal({
                    title: "Successfully X-Ray tooth!",
                    text: "X-Ray Details Successfully send to doctor!",
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
    </script>

@endsection