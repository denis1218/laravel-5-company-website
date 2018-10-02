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



    {{-- table xray One patient --}}
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5> X-Ray Table of Patient</h5>
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

                        <div class="row text-right">
                            <span>Navigate between days :</span>
                            <div class="btn-group">
                                <button class="btn btn-white"><i class="fa fa-arrow-left text-success"></i>&nbsp;&nbsp;Last day</button>
                                <button class="btn btn-success">ToDay</button>
                                <button class="btn btn-white">Next day &nbsp;<i class="fa fa-arrow-right text-success"></i></button>
                            </div>

                        </div>
                        <br/>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>X-Ray ID</th>
                                <th>Patient ID</th>
                                <th>Tooth NO</th>
                                <th>Date & Time</th>
                                <th>Type of  Treatment</th>
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