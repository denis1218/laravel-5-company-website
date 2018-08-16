@extends('master')

@section('style')

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
                                            have suffered alteration in some form Ipsum available.
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
                                        <span class="font-m text-danger">Cash:<b>&nbsp;unpaid</b>&nbsp;<i class="fa fa-money"></i></span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <hr/>
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
                </div>
                <br/>
                <div class="row">
                    <div class="col-md-5">
                        <button class="btn btn-primary"> Save </button>
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
                            <th>Estimate Fee</th>
                            <th>X-Ray</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>25</td>
                            <td>BDR</td>
                            <td>RCT</td>
                            <td>2690 AFG</td>
                            <td class=""> <i class=""></i>
                                <button class="btn btn-xs btn-primary">Details</button></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>12</td>
                            <td>BDR</td>
                            <td>RCT</td>
                            <td>2880 AFG</td>
                            <td class=""> <i class=""></i>
                                <button class="btn btn-xs btn-primary">Details</button></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="text-danger"><b>Total Price :</b></td>
                            <td class="text-danger"><b>2360 AFG</b></td>
                        </tr>
                        </tbody>
                    </table>
                    </div>
                </div>


            </div>
        </div>
    </div>

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

@endsection
