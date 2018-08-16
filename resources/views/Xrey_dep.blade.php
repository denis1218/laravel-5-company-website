@extends('master')

@section('style')
    <link href="dashboard/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
    <style rel="stylesheet">

        #my_file {
            display: none;
        }

        .btn-xray{
            height: 57px;
        }

        .bg-khatar{
            background: #ff0004;
        }

        .font-m{
            font-size: 1.2em;
        }
        .font-b{
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
                <h5>Doctor Registration </h5>
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
                    <div class="row m-b-lg m-t-lg">
                        <div class="col-md-6">
                            <div class="profile-image">
                                <img src="img/a4.jpg" class="img-circle circle-border m-b-md" alt="profile">
                            </div>
                            <div class="profile-info">
                                <div class="">
                                    <div>
                                        <h2 class="no-margins font-b">
                                            ID: P-504075
                                        </h2>
                                        <h4>Mostafa Ahmadi</h4>
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
                                        <span class="font-m">Doctor:<b>&nbsp;Dr.Ahmadi</b>&nbsp;<i class="fa fa-user-md"></i></span>
                                    </td>
                                    <td>
                                        <span class="font-m">Visited:<b>&nbsp;First Time</b>&nbsp;<i class=""></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="font-m">Date Reg:<b>&nbsp;2018/5/26</b>&nbsp;<i class="fa fa-calendar"></i></span>
                                    </td>
                                    <td>
                                        <span class="font-m text-info">Cash:<b>&nbsp;Paid</b>&nbsp;<i class="fa fa-money"></i></span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-10"><h3>Tooth selected for X-Ray Number : <b class="text-danger">12 UP</b></h3></div>
                    <div class="col-lg-6">
                        <div class="" style="">
                            <ul class="list-group checked-list-box">
                                <li class="list-group-item"><img src="img/tho.png" width="15px"/></li>
                                <li class="list-group-item"><img src="img/tho.png" width="15px"/></li>
                                <span class="bg-khatar"><li class="list-group-item"><img src="img/tho.png" width="15px"/></li></span>
                                <li class="list-group-item"><img src="img/tho.png" width="15px"/></li>
                                <li class="list-group-item"><img src="img/tho.png" width="15px"/></li>
                                <li class="list-group-item"><img src="img/tho.png" width="15px"/></li>
                                <li class="list-group-item"><img src="img/tho.png" width="15px"/></li>
                                <li class="list-group-item"><img src="img/tho.png" width="15px"/></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="" style="">
                            <ul class="list-group">
                                <li class="list-group-item"><img src="img/tho.png" width="15px"/></li>
                                <li class="list-group-item"><img src="img/tho.png" width="15px"/></li>
                                <li class="list-group-item"><img src="img/tho.png" width="15px"/></li>
                                <li class="list-group-item"><img src="img/tho.png" width="15px"/></li>
                                <li class="list-group-item"><img src="img/tho.png" width="15px"/></li>
                                <li class="list-group-item"><img src="img/tho.png" width="15px"/></li>
                                <li class="list-group-item"><img src="img/tho.png" width="15px"/></li>
                                <li class="list-group-item"><img src="img/tho.png" width="15px"/></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="" style="">
                            <ul class="list-group">
                                <li class="list-group-item"><img src="img/tho.png" width="15px"/></li>
                                <li class="list-group-item"><img src="img/tho.png" width="15px"/></li>
                                <li class="list-group-item"><img src="img/tho.png" width="15px"/></li>
                                <li class="list-group-item"><img src="img/tho.png" width="15px"/></li>
                                <li class="list-group-item"><img src="img/tho.png" width="15px"/></li>
                                <li class="list-group-item"><img src="img/tho.png" width="15px"/></li>
                                <li class="list-group-item"><img src="img/tho.png" width="15px"/></li>
                                <li class="list-group-item"><img src="img/tho.png" width="15px"/></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="" style="">
                            <ul class="list-group">
                                <li class="list-group-item"><img src="img/tho.png" width="15px"/></li>
                                <li class="list-group-item"><img src="img/tho.png" width="15px"/></li>
                                <li class="list-group-item"><img src="img/tho.png" width="15px"/></li>
                                <li class="list-group-item"><img src="img/tho.png" width="15px"/></li>
                                <li class="list-group-item"><img src="img/tho.png" width="15px"/></li>
                                <li class="list-group-item"><img src="img/tho.png" width="15px"/></li>
                                <li class="list-group-item"><img src="img/tho.png" width="15px"/></li>
                                <li class="list-group-item"><img src="img/tho.png" width="15px"/></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-lg-2">
                        <button class="btn btn-primary btn-xray" name="Take X-Ray" id="get_file" value="Grab file" type="button">Take X-Ray &nbsp;<i class="fa fa-file-excel-o"></i></button>
                        <input type="file" id="my_file">
                    </div>
                    <div class="col-md-6">
                        <img src="img/xray.jpg" width="75px" height="60px"/>&nbsp;&nbsp; X-Ray image ID : <b>X-256585</b>
                    </div>

                </div>
                <br/>
                <div class="row">
                    <div class="col-lg-8">
                        <label class="col-lg-3 control-label">Fee Price</label>
                        <div class="col-lg-10"><input type="text" placeholder="Fee Afg" class="form-control"></div>
                    </div>
                    <div class="col-lg-3" style="margin-top:30px;">
                        <button class="btn btn-primary">Save</button>&nbsp;&nbsp;
                        <button class="btn btn-white">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
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
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tooth NO</th>
                                    <th>Date & Time</th>
                                    <th>Doctor Treatment</th>
                                    <th>Estimate Fee</th>
                                    <th>X-Ray Image ID</th>
                                    <th>X-Ray Image</th>
                                    <th>Edit</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>25 UP</td>
                                    <td>2018/5/4 - 12:33 am</td>
                                    <td>Dr.Tamim</td>
                                    <td>300 AFG</td>
                                    <td>X-252635</td>
                                    <td class="">
                                        <button class="btn btn-xs btn-primary">Image <i class="fa fa-image"></i> </button>
                                    </td>
                                    <td class="">
                                        <button class="btn btn-xs btn-primary">Edit <i class="fa fa-edit"></i> </button>
                                        <button class="btn btn-xs btn-danger demo3">Delete <i class="fa fa-remove"></i> </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>12 UP</td>
                                    <td>2018/5/4 - 12:40 am</td>
                                    <td>Dr.Tamim</td>
                                    <td>300 AFG</td>
                                    <td>X-252635</td>
                                    <td class="">
                                        <button class="btn btn-xs btn-primary">Image <i class="fa fa-image"></i> </button>
                                    </td>
                                    <td class="">
                                        <button class="btn btn-xs btn-primary">Edit <i class="fa fa-edit"></i> </button>
                                        <button class="btn btn-xs btn-danger demo3">Delete <i class="fa fa-remove"></i> </button>
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                            <div class="row">
                                <div class="col-md-10">
                                    <button class="btn btn-primary demo2">Send X-Ray to Doctor</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Your X-Ray Patient List</h5>
                <div class="ibox-tools">
                    <span class="label label-warning-light pull-right">7 Patients</span>
                </div>
            </div>
            <div class="ibox-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="btn-group">
                            <button class="btn btn-primary">List of Done &nbsp; <i class="fa fa-check"></i></button>
                            <button class="btn btn-info">List of Pending &nbsp; <i class="fa fa-spinner"></i></button>
                        </div>
                    </div>
                </div>
                <br/>
                <div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="input-group">
                                <input type="text" placeholder="Search patient name" class="input-sm form-control"> <span class="input-group-btn">
                                    <button type="button" class="btn btn-sm btn-primary"> Go!</button> </span></div>
                        </div>
                    </div>
                    <br/>
                    <div class="feed-activity-list">

                        <div class="feed-element">
                            <a href="profile.html" class="pull-left">
                                <img alt="image" class="img-circle" src="img/profile.jpg">
                            </a>
                            <div class="media-body ">
                                <small class="pull-right">5m ago</small><br/>
                                <small class="pull-right"><i class="fa fa-spinner text-info"></i>&nbsp;Pending</small>
                                <strong>P-665522</strong> <br/><strong>Ahamd Farid </strong><br>
                                <small class="text-muted">Today 5:60 pm - 12.06.2018</small>
                            </div>
                        </div>

                        <div class="feed-element">
                            <a href="profile.html" class="pull-left">
                                <img alt="image" class="img-circle" src="img/a2.jpg">
                            </a>
                            <div class="media-body ">
                                <small class="pull-right">2m ago</small><br/>
                                <small class="pull-right"><i class="fa fa-spinner text-info"></i>&nbsp;Pending</small>
                                <strong>P-554845</strong><br/> <strong>Yasin Rahamti</strong> site. <br>
                                <small class="text-muted">Today 2:10 pm - 12.06.2018</small>
                            </div>
                        </div>
                        <div class="feed-element">
                            <a href="profile.html" class="pull-left">
                                <img alt="image" class="img-circle" src="img/a3.jpg">
                            </a>
                            <div class="media-body ">
                                <small class="pull-right">15m ago</small><br/>
                                <small class="pull-right"><i class="fa fa-spinner text-info"></i>&nbsp;Pending</small>
                                <strong>P-343565</strong><br/><strong>Tamim Rahim</strong>. <br>
                                <small class="text-muted">Today 1:43 am - 11.06.2018</small>
                            </div>
                        </div>
                        <div class="feed-element">
                            <a href="profile.html" class="pull-left">
                                <img alt="image" class="img-circle" src="img/a4.jpg">
                            </a>
                            <div class="media-body ">
                                <small class="pull-right text-navy">36m ago</small><br/>
                                <small class="pull-right"><i class="fa fa-spinner text-info"></i>&nbsp;Pending</small>
                                <strong>p-334556</strong><br/><strong>Wasiq Safari</strong><br>
                                <small class="text-muted">Today 1:21pm - 11.06.2018</small>
                            </div>
                        </div>
                        <div class="feed-element">
                            <a href="profile.html" class="pull-left">
                                <img alt="image" class="img-circle" src="img/a5.jpg">
                            </a>
                            <div class="media-body ">
                                <small class="pull-right">2m ago</small><br/>
                                <small class="pull-right"><i class="fa fa-spinner text-info"></i>&nbsp;Pending</small>
                                <strong>P-445686</strong><br/><strong>Mahdi Safari</strong><br>
                                <small class="text-muted">Today 5:20 pm - 12.06.2018</small>
                            </div>
                        </div>
                        <div class="feed-element">
                            <a href="profile.html" class="pull-left">
                                <img alt="image" class="img-circle" src="img/profile.jpg">
                            </a>
                            <div class="media-body ">
                                <small class="pull-right">23m ago</small><br/>
                                <small class="pull-right"><i class="fa fa-spinner text-info"></i>&nbsp;Pending</small>
                                <strong>P-335632</strong> <br/> <strong>Qullam Rasoli</strong>. <br>
                                <small class="text-muted">Today at 2:30 am - 11.06.2018</small>
                            </div>
                        </div>
                        <div class="feed-element">
                            <a href="profile.html" class="pull-left">
                                <img alt="image" class="img-circle" src="img/a7.jpg">
                            </a>
                            <div class="media-body ">
                                <small class="pull-right">46m ago</small><br/>
                                <small class="pull-right"><i class="fa fa-spinner text-info"></i>&nbsp;Pending</small>
                                <strong>P-552345</strong><br/><strong>Nadim Ghallami</strong>. <br>
                                <small class="text-muted">Today at 7:58 pm - 10.06.2018</small>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="dashboard/js/plugins/sweetalert/sweetalert.min.js"></script>
    <script>
        document.getElementById('get_file').onclick = function() {
            document.getElementById('my_file').click();
        };

    </script>
    <script>
        $(document).ready(function () {

            $('.demo1').click(function(){
                swal({
                    title: "Welcome in Alerts",
                    text: "Lorem Ipsum is simply dummy text of the printing and typesetting industry."
                });
            });

            $('.demo2').click(function(){
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
                        closeOnCancel: false },
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