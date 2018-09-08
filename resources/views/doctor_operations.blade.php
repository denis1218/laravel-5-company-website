@extends('master')

@section('style')
    <style rel="stylesheet">
        .font-m {
            font-size: 1.5em;
        }

        .font-b {
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

    {{-- search area --}}
    <div class="row wrapper border-bottom white-bg page-heading"
         style="margin-top:-20px; margin-bottom: 10px; margin-left: 1px;">
        <div class="row" style="margin-top: 30px; margin-left: 25px;">
            <div class="col-sm-10">
                <div class="input-group m-b"><span class="input-group-btn">
                    <button type="button" class="btn btn-primary" href="#patient" data-toggle="collapse"><i
                                class="fa fa-search"></i>&nbsp;Search</button> </span>
                    <input type="text" class="form-control" placeholder="Search P-ID patient">
                </div>
            </div>
        </div>


    </div>
    {{-- search area  --}}


    {{-- patient information --}}
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Patient Information <i class="fa fa-info"></i></h5>
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
                <div class="row" style="margin-left:10px;">
                    <div class="row m-b-lg m-t-lg">
                        <div class="col-md-5">
                            <div class="profile-image">
                                <img src="img/a4.jpg" class="img-circle circle-border m-b-md" alt="profile"
                                     style="box-shadow: 0 5px 9px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                            </div>

                            <div class="profile-info">
                                <div class="">
                                    <div>
                                        <h2 class="no-margins font-b">
                                            Mostafa Ahmadi
                                        </h2>
                                        <h4>ID: P-0780504075</h4>
                                        <small style="font-size: 15px;">
                                            <span style="font-size: 15px; font-weight: bold;">Problem teeth : </span>Orthodontist,
                                            Periodontist <br/>
                                            <span style="font-size: 15px; font-weight: bold;">Problem Health : </span>Blood
                                            Pressure , Allergy to Penicillin , Allergy to Anaesthetic
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
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

                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-3" style="margin-top: -15px;">
                            <h2><a class="btn btn-primary hvr-grow-shadow" style="font-size: 20px; width: 250px;"
                                   href="/doctor_operations"><i class="fa fa-stethoscope pull-left"
                                                                style="color:#ffc000; font-size: 25px;"></i>&nbsp;&nbsp;Treatment
                                    operation</a></h2>
                            <h2><a class="btn btn-primary hvr-grow-shadow" style="font-size: 20px; width: 250px;"
                                   href="/medicine"><img src="img/medicine.png" class="pull-left"/>&nbsp;&nbsp;Medicine</a>
                            </h2>
                            <h2><a class="btn btn-primary hvr-grow-shadow" style="font-size: 20px; width: 250px;"
                                   href="/iframe"><i class="fa fa-calendar pull-left"
                                                     style="color:#ffc000; font-size: 25px;"></i>&nbsp;&nbsp;Next
                                    appointment</a></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- patient information--}}


    {{-- patient treatment choose teeth --}}
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
                    <div class="col-md-10"><h3>Choose Tooth</h3></div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="" style="">
                            <ul class="list-group checked-list-box">
                                <li class="list-group-item"><img src="img/teeths/16.png" width="30px"/></li>
                                <li class="list-group-item"><img src="img/teeths/15.png" width="30px"/></li>
                                <li class="list-group-item"><img src="img/teeths/14.png" width="30px"/></li>
                                <li class="list-group-item"><img src="img/teeths/13.png" width="30px"/></li>
                                <li class="list-group-item"><img src="img/teeths/12.png" width="30px"/></li>
                                <li class="list-group-item"><img src="img/teeths/11.png" width="30px"/></li>
                                <li class="list-group-item"><img src="img/teeths/10.png" width="30px"/></li>
                                <li class="list-group-item"><img src="img/teeths/9.png" width="30px"/></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="" style="">
                            <ul class="list-group checked-list-box">
                                <li class="list-group-item"><img src="img/teeths/8.png" width="30px"/></li>
                                <li class="list-group-item"><img src="img/teeths/7.png" width="30px"/></li>
                                <li class="list-group-item"><img src="img/teeths/6.png" width="30px"/></li>
                                <li class="list-group-item"><img src="img/teeths/5.png" width="30px"/></li>
                                <li class="list-group-item"><img src="img/teeths/4.png" width="30px"/></li>
                                <li class="list-group-item"><img src="img/teeths/3.png" width="30px"/></li>
                                <li class="list-group-item"><img src="img/teeths/2.png" width="30px"/></li>
                                <li class="list-group-item"><img src="img/teeths/1.png" width="30px"/></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="" style="">
                            <ul class="list-group checked-list-box">
                                <li class="list-group-item"><img src="img/teeths/17.png" width="30px"/></li>
                                <li class="list-group-item"><img src="img/teeths/18.png" width="30px"/></li>
                                <li class="list-group-item"><img src="img/teeths/19.png" width="30px"/></li>
                                <li class="list-group-item"><img src="img/teeths/20.png" width="30px"/></li>
                                <li class="list-group-item"><img src="img/teeths/21.png" width="30px"/></li>
                                <li class="list-group-item"><img src="img/teeths/22.png" width="30px"/></li>
                                <li class="list-group-item"><img src="img/teeths/23.png" width="30px"/></li>
                                <li class="list-group-item"><img src="img/teeths/24.png" width="30px"/></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="" style="">
                            <ul class="list-group checked-list-box">
                                <li class="list-group-item"><img src="img/teeths/25.png" width="30px"/></li>
                                <li class="list-group-item"><img src="img/teeths/26.png" width="30px"/></li>
                                <li class="list-group-item"><img src="img/teeths/27.png" width="30px"/></li>
                                <li class="list-group-item"><img src="img/teeths/28.png" width="30px"/></li>
                                <li class="list-group-item"><img src="img/teeths/29.png" width="30px"/></li>
                                <li class="list-group-item"><img src="img/teeths/30.png" width="30px"/></li>
                                <li class="list-group-item"><img src="img/teeths/31.png" width="30px"/></li>
                                <li class="list-group-item"><img src="img/teeths/32.png" width="30px"/></li>
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
                                <option value="2">RCT (Root Canal)</option>
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
                        <button class="btn btn-primary demo_save"> Save &nbsp;<i class="fa fa-save"></i></button>
                        <button class="btn btn-gray"> Cancel</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    {{-- patient info --}}

    {{-- table treatment patient --}}
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
                                <button class="btn btn-xs btn-danger fa fa-remove demo3" data-toggle="modal">&nbsp;Delete</button>

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
                                <button class="btn btn-xs btn-primary" data-toggle="modal" data-target="#myModal4">Details &nbsp;</button></td>
                            <td class=""> <i class=""></i>
                                <button class="btn btn-xs btn-danger fa fa-remove demo3" data-toggle="modal" data-target="#editteeth">&nbsp;Delete</button>
                                <button class="btn btn-xs btn-success fa fa-edit" data-toggle="modal" data-target="#editteeth">&nbsp;Edit</button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div class="row">

                    <div class="col-lg-3 text-left pull-left" style="">
                        <table class="table text-left table-striped ">
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
                        <button class="btn btn-primary"style="width:11em">Send to reception &nbsp;<i class="fa fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- table treatment patient --}}


    {{-- Modal Window to show X-ray image details --}}
    <div class="modal inmodal" id="myModal4" tabindex="-1" role="dialog" aria-hidden="true">
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
    <div class="modal inmodal" id="editteeth" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated fadeIn">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span
                                aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <i class="fa fa-edit modal-icon text-primary"></i>
                    <h4 class="modal-title">Edit Treatment operation</h4>
                    <small>Edit content of Treatment operation</small>
                </div>
                <div class="modal-body">
                    <div class="form-group"><label>Tooth number</label> <input type="text" placeholder="Tooth number"
                                                                               value="25 UP" class="form-control"></div>
                    <div class="form-group"><label>Dental Defect</label> <input type="text" placeholder="Dental Defect"
                                                                                value="BDR" class="form-control"></div>
                    <div class="form-group"><label>Treatment</label> <input type="text" placeholder="Doctor Treatment"
                                                                            value="Dr.Tamim" class="form-control"></div>
                    <div class="form-group"><label>Estimate Fee</label> <input type="number" placeholder="Estimate Fee"
                                                                               value="300" class="form-control"></div>
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

            $('#get-checked-data').on('click', function (event) {
                event.preventDefault();
                var checkedItems = {}, counter = 0;
                $("#check-list-box li.active").each(function (idx, li) {
                    checkedItems[counter] = $(li).text();
                    counter++;
                });
                $('#display-json').html(JSON.stringify(checkedItems, null, '\t'));
            });
        });
    </script>

    {{-- sweet alert --}}
    <script>
        $(document).ready(function () {

            $('.demo1').click(function () {
                swal({
                    title: "Welcome in Alerts",
                    text: "Lorem Ipsum is simply dummy text of the printing and typesetting industry."
                });
            });

            $('.demo_recp').click(function () {
                swal({
                    title: "Successfully Send to Receptions!",
                    text: "Receptions will check it!",
                    type: "success"
                });
            });

            $('.demo_delete').click(function () {
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
    {{-- sweet alert --}}

@endsection
