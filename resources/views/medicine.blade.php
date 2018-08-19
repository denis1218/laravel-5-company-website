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

    <div class="row wrapper border-bottom white-bg page-heading" style="margin-top:-20px; margin-bottom: 10px;">
        <div class="col-md-2">
            <h2><a class="btn btn-primary" style="height:70px; margin-left:15px;" href="/doctor_operations"><i class="fa fa-stethoscope"  style="font-size: 30px; color:#ff9f00 ;"></i><br/> Treatment Operation</a></h2>
        </div>
        <div class="col-md-2">
            <h2><a class="btn btn-primary" style="height:70px; width:155px" href="/medicine"><img src="img/medicine.png"/> <br/> medicine</a></h2>
        </div>
        <div class="col-md-2">
            <h2><a class="btn btn-primary" style="height:70px; width:155px" href="/medicine"><img src="img/medicine.png"/> <br/> medicine</a></h2>
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

                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
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
                    <div class="col-md-8">
                        <br/>

                        <form role="form" method="get" class="form-horizontal">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Drug Name :</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" placeholder="Drug name">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Drugs per day :</label>
                                <div class="col-sm-6">
                                    <label class="radio-inline"><input type="radio" name="each_day" checked>1</label>
                                    <label class="radio-inline"><input type="radio" name="each_day">2</label>
                                    <label class="radio-inline"><input type="radio" name="each_day">3</label>
                                    <label class="radio-inline"><input type="radio" name="each_day">4</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Each packet tablet :</label>
                                <div class="col-sm-6">
                                    <label class="radio-inline"><input type="radio" name="packet" checked>10</label>
                                    <label class="radio-inline"><input type="radio" name="packet">20</label>
                                    <label class="radio-inline"><input type="radio" name="packet">30</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">For Days :</label>
                                <div class="col-sm-6">
                                    <input type="number" placeholder="For Days" class="form-control"/>
                                </div>
                            </div>

                            {{--<div class="hr-line-dashed"></div>--}}

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Descriptions</label>
                                <div class="col-sm-6">
                                    <textarea class="form-control" placeholder="Write Description about Drug" rows="5"></textarea>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4">
    `                   <div class="ibox float-e-margins">
                            <div class="ibox-content">
                                <table class="table table-hover no-margins table-striped">
                                    <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Name Drug</th>
                                        <th>Each day</th>
                                        <th>Total Days</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Ampicinile</td>
                                        <td>1+1+1</td>
                                        <td>2 days</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Ampicinile</td>
                                        <td>1+1+1</td>
                                        <td>2 days</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Ampicinile</td>
                                        <td>1+1+1</td>
                                        <td>2 days</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Ampicinile</td>
                                        <td>1+1+1</td>
                                        <td>2 days</td>
                                    </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- modal window example --}}
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
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Confirm</button>
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
