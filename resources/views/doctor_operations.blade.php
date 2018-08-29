@extends('master')

@section('style')

    <link href="dashboard/css/plugins/sweetalert/sweetalert.css" rel="stylesheet"/>

    <style rel="stylesheet">
        .font-m{
            font-size: 1.5em;
        }
        .font-b{
            font-size: 1.7em;
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

    <div class="row wrapper border-bottom white-bg page-heading" style="margin-top:-20px; margin-bottom: 10px;">
        <div class="col-md-2">
            <h2><a class="btn btn-primary" style="height:70px; margin-left:25px;" href="/doctor_operations"><i class="fa fa-stethoscope" style="color:#ffc000; font-size: 30px;"></i> <br/> Treatment operation</a></h2>
        </div>
            <div class="col-md-2">
                <h2><a class="btn btn-primary" style="height:70px; width:155px" href="/medicine"><img src="img/medicine.png"/> <br/> medicine</a></h2>
            </div>
        <div class="col-md-2">
            <h2><a class="btn btn-primary" style="height:70px; width:155px" href="/iframe"><i class="fa fa-calendar" style="font-size: 30px; color:#ff9f00 ;"></i> <br/> Next Appointment</a></h2>
        </div>




    </div>
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Custom responsive table </h5>
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
                                            ID: P-0780504075
                                        </h2>
                                        <h4>Mostafa Ahmadi</h4>
                                        <small class="font-m">
                                            There are many variations of passages of Lorem Ipsum available, but the majority
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
                                        <span class="font-m text-success">Cash:<b>&nbsp;paid</b>&nbsp;<i class="fa fa-money"></i></span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-10"><h3>Choose Tooth</h3></div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="" style="">
                            <ul class="list-group checked-list-box">
                                <li class="list-group-item"><img src="img/tho.png" width="30px"/></li>
                                <li class="list-group-item"><img src="img/tho.png" width="30px"/></li>
                                <li class="list-group-item"><img src="img/tho.png" width="30px"/></li>
                                <li class="list-group-item"><img src="img/tho.png" width="30px"/></li>
                                <li class="list-group-item"><img src="img/tho.png" width="30px"/></li>
                                <li class="list-group-item"><img src="img/tho.png" width="30px"/></li>
                                <li class="list-group-item"><img src="img/tho.png" width="30px"/></li>
                                <li class="list-group-item"><img src="img/tho.png" width="30px"/></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="" style="">
                            <ul class="list-group checked-list-box">
                                <li class="list-group-item"><img src="img/tho.png" width="30px"/></li>
                                <li class="list-group-item"><img src="img/tho.png" width="30px"/></li>
                                <li class="list-group-item"><img src="img/tho.png" width="30px"/></li>
                                <li class="list-group-item"><img src="img/tho.png" width="30px"/></li>
                                <li class="list-group-item"><img src="img/tho.png" width="30px"/></li>
                                <li class="list-group-item"><img src="img/tho.png" width="30px"/></li>
                                <li class="list-group-item"><img src="img/tho.png" width="30px"/></li>
                                <li class="list-group-item"><img src="img/tho.png" width="30px"/></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="" style="">
                            <ul class="list-group checked-list-box">
                                <li class="list-group-item"><img src="img/tho.png" width="30px"/></li>
                                <li class="list-group-item"><img src="img/tho.png" width="30px"/></li>
                                <li class="list-group-item"><img src="img/tho.png" width="30px"/></li>
                                <li class="list-group-item"><img src="img/tho.png" width="30px"/></li>
                                <li class="list-group-item"><img src="img/tho.png" width="30px"/></li>
                                <li class="list-group-item"><img src="img/tho.png" width="30px"/></li>
                                <li class="list-group-item"><img src="img/tho.png" width="30px"/></li>
                                <li class="list-group-item"><img src="img/tho.png" width="30px"/></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="" style="">
                            <ul class="list-group checked-list-box">
                                <li class="list-group-item"><img src="img/tho.png" width="30px"/></li>
                                <li class="list-group-item"><img src="img/tho.png" width="30px"/></li>
                                <li class="list-group-item"><img src="img/tho.png" width="30px"/></li>
                                <li class="list-group-item"><img src="img/tho.png" width="30px"/></li>
                                <li class="list-group-item"><img src="img/tho.png" width="30px"/></li>
                                <li class="list-group-item"><img src="img/tho.png" width="30px"/></li>
                                <li class="list-group-item"><img src="img/tho.png" width="30px"/></li>
                                <li class="list-group-item"><img src="img/tho.png" width="30px"/></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr/>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Select Dental Defect *</label>
                            <select class="form-control col-md-3">
                                <option value="1">Select Dental Defect</option>
                                <option value="1">Crown Fracture</option>
                                <option value="1">BDR</option>
                                <option value="2">G-Caries</option>
                                <option value="3">Attrision</option>
                                <option value="4">Calculus</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Treatment *</label>
                            <select class="form-control col-md-3">
                                <option value="1">Select Treatment</option>
                                <option value="1">PF (Permanent Filling)</option>
                                <option value="2">RCT (Root Canal) </option>
                                <option value="3">Extraction</option>
                                <option value="4">Pulpotomy</option>
                                <option value="5">Apexification</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Estimate Fee *</label>
                            <input type="text" class="form-control" placeholder="Fee"/>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Discount *</label>
                            <input type="number" class="form-control" placeholder="Discount"/>
                        </div>
                    </div>
                </div>
                <br/>
                <div class="row">
                    <div class="col-md-5">
                        <button class="btn btn-primary"> Save &nbsp;<i class="fa fa-save"></i></button>
                        <button class="btn btn-gray"> Cancel </button>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Treatment Operation (Mostafa Ahamdi) </h5>
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
                    <div class="col-md-12">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Tooth NO</th>
                            <th>Dental Defect</th>
                            <th>Treatment</th>
                            <th>Estimated Fee</th>
                            <th>Minimum Fee</th>
                            <th>Fee Paid</th>
                            <th>X-Ray</th>
                            <th>Edit</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>25</td>
                            <td>BDR</td>
                            <td>RCT</td>
                            <td>2690 AFG</td>
                            <td>1690 AFG</td>
                            <td>1690 AFG</td>
                            <td class=""> <i class=""></i>
                                <button class="btn btn-xs btn-primary" data-toggle="modal" data-target="#myModal4">Details</button></td>
                            <td class=""> <i class=""></i>
                                <button class="btn btn-xs btn-danger fa fa-remove demo3" data-toggle="modal" data-target="">&nbsp;Delete</button>
                                <button class="btn btn-xs btn-success fa fa-edit" data-toggle="modal" data-target="#editteeth">&nbsp;Edit</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>12</td>
                            <td>BDR</td>
                            <td>RCT</td>
                            <td>2880 AFG</td>
                            <td>1880 AFG</td>
                            <td>1880 AFG</td>
                            <td class=""> <i class=""></i>
                                <button class="btn btn-xs btn-primary" data-toggle="modal" data-target="#myModal4">Details &nbsp;<i class="fa fa-check"></i></button></td>
                            <td class=""> <i class=""></i>
                                <button class="btn btn-xs btn-danger fa fa-remove demo3" data-toggle="modal" data-target="#editteeth">&nbsp;Delete</button>
                                <button class="btn btn-xs btn-success fa fa-edit" data-toggle="modal" data-target="#editteeth">&nbsp;Edit</button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    </div>

                </div>
                <hr/>
                <div class="row">
                    <div class="col-lg-9">
                    </div>
                    <div class="col-lg-3 text-right" style="">
                        <table class="table text-right table-striped " >
                            <tr>
                                <td><strong>Total Estimate :</strong></td>
                                <td>2500 AFG</td>
                            </tr>
                            <tr>
                                <td><strong>Total Paid :</strong></td>
                                <td>1000 AFG</td>
                            </tr>
                            <tr>
                                <td><strong>Total Remaining:</strong></td>
                                <td>1500 AFG</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <button class="btn btn-primary ">Send to reception &nbsp;<i class="fa fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- Modal Window to show X-ray image details --}}
    <div class="modal inmodal" id="myModal4" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated fadeIn">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <i class="fa fa-image modal-icon text-primary"></i>
                    <h4 class="modal-title">Image X-Ray of Tooth</h4>
                    <small>X-Ray Tooth No: 25 UP</small>
                </div>
                <div class="modal-body text-center">

                    <img src="img/xray.jpg" width="400px" height="300px"/>
                    <h3>This xray paid 300AFG</h3>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Confirm</button>
                </div>
            </div>
        </div>
    </div>
    {{-- end of modal window --}}


    {{-- modal window to show editing detail of teeth --}}
    <div class="modal inmodal" id="editteeth" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated fadeIn">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <i class="fa fa-edit modal-icon text-primary"></i>
                    <h4 class="modal-title">Edit Treatment operation</h4>
                    <small>Edit content of Treatment operation</small>
                </div>
                <div class="modal-body">
                    <div class="form-group"><label>Tooth number</label> <input type="text" placeholder="Tooth number" value="25 UP" class="form-control"></div>
                    <div class="form-group"><label>Dental Defect</label> <input type="text" placeholder="Dental Defect"  value="BDR" class="form-control"></div>
                    <div class="form-group"><label>Treatment</label> <input type="text" placeholder="Doctor Treatment" value="Dr.Tamim" class="form-control"></div>
                    <div class="form-group"><label>Estimate Fee</label> <input type="number" placeholder="Estimate Fee" value="300" class="form-control"></div>
                    {{--<div class="form-group"><label>X-Ray ID image</label> <input type="text" placeholder="X-Ray ID image" value="X-256535" class="form-control"></div>--}}
                    {{--<div><h4>Note : You cann't change image X-Ray or you have to delete the record!.</h4></div>--}}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>

                </div>
            </div>
        </div>
    </div>
    {{-- end of modal window--}}


@endsection
@section('script')
    <script src="dashboard/js/plugins/sweetalert/sweetalert.min.js"></script>
    <script>
        $(function () {
            $('.list-group.checked-list-box .list-group-item').each(function () {

                // Settings
                var $widget = $(this),
                    $checkbox = $('<input type="checkbox" class="hidden" />'),
                    color = ($widget.data('color') ? $widget.data('color') : "primary"),
                    style = ($widget.data('style') == "button" ? "btn-" : "list-group-item-"),
                    settings = {
                        on: {
                            icon: ''
                        },
                        off: {
                            icon: ''
                        }
                    };

                $widget.css('cursor', 'pointer')
                $widget.append($checkbox);

                // Event Handlers
                $widget.on('click', function () {
                    $checkbox.prop('checked', !$checkbox.is(':checked'));
                    $checkbox.triggerHandler('change');
                    updateDisplay();
                });
                $checkbox.on('change', function () {
                    updateDisplay();
                });


                // Actions
                function updateDisplay() {
                    var isChecked = $checkbox.is(':checked');

                    // Set the button's state
                    $widget.data('state', (isChecked) ? "on" : "off");

                    // Set the button's icon
                    $widget.find('.state-icon')
                        .removeClass()
                        .addClass('state-icon ' + settings[$widget.data('state')].icon);

                    // Update the button's color
                    if (isChecked) {
                        $widget.addClass(style + color + ' active');
                    } else {
                        $widget.removeClass(style + color + ' active');
                    }
                }

                // Initialization
                function init() {

                    if ($widget.data('checked') == true) {
                        $checkbox.prop('checked', !$checkbox.is(':checked'));
                    }

                    updateDisplay();

                    // Inject the icon if applicable
                    if ($widget.find('.state-icon').length == 0) {
                        $widget.prepend('<span class="state-icon ' + settings[$widget.data('state')].icon + '"></span>');
                    }
                }
                init();
            });

            $('#get-checked-data').on('click', function(event) {
                event.preventDefault();
                var checkedItems = {}, counter = 0;
                $("#check-list-box li.active").each(function(idx, li) {
                    checkedItems[counter] = $(li).text();
                    counter++;
                });
                $('#display-json').html(JSON.stringify(checkedItems, null, '\t'));
            });
        });
    </script>
    {{-- start of sweet alert --}}
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
