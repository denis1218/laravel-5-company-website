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
    @include('part.nav_doctor')
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Appointment patient </h5>
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
                <br/>
                <div class="row">
                    <div class="col-md-12">
                        <div class="input-group"> <span
                                    class="input-group-btn">
                                        <button type="button" class="btn  btn-primary"> <i class="fa fa-search"></i>&nbsp;&nbsp;Search</button> </span><input
                                    type="text" placeholder="Search patient name"
                                    class=" form-control"></div>
                    </div>
                </div>
                <br/>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <table class="table table-hover no-margins">
                                <thead>
                                <tr>
                                    <td>P-ID</td>
                                    <th>Patient Name</th>
                                    <th>Doctor Name</th>
                                    <th>Status</th>
                                    <th>Date & Time Appointment</th>
                                    <th>Problem Health</th>
                                    <th>Operation</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>P-0785544229</td>
                                    <td>Ahmad</td>
                                    <td>Dr.Samim</td>
                                    <td>Second Time</td>
                                    <td><i class="fa fa-calendar"></i>&nbsp;2018/8/1 - 8:20 AM</td>
                                    <td class="">Blood pressure</td>
                                    <td><a href="treatment_operation" class="btn btn-sm btn-primary">Start Treatment</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>P-0780669022</td>
                                    <td>Naweed</td>
                                    <td>Dr.Samim</td>
                                    <td>Second Time</td>
                                    <td><i class="fa fa-calendar"></i>&nbsp;2018/8/1 - 9:00 AM</td>
                                    <td class="">Diabetics</td>
                                    <td><a href="treatment_operation" class="btn btn-sm btn-primary">Start Treatment</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>P-0790446690</td>
                                    <td>Qasim</td>
                                    <td>Dr.Samim</td>
                                    <td>Second Time</td>
                                    <td><i class="fa fa-calendar"></i>&nbsp;2018/8/1 - 10:00 AM</td>
                                    <td class="">Hepatitics</td>
                                    <td><a href="treatment_operation" class="btn btn-sm btn-primary">Start Treatment</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>P-0787206644</td>
                                    <td>Mahmood</td>
                                    <td>Dr.Samim</td>
                                    <td>First Time</td>
                                    <td><i class="fa fa-calendar"></i>&nbsp;2018/8/1 - 11:20 AM</td>
                                    <td class="">Asthma</td>
                                    <td><a href="treatment_operation" class="btn btn-sm btn-primary">Start Treatment</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>P-0702036768</td>
                                    <td>Ali</td>
                                    <td>Dr.Samim</td>
                                    <td>First Time</td>
                                    <td><i class="fa fa-calendar"></i>&nbsp;2018/8/1 - 1:00 PM</td>
                                    <td class="">Blood pressure</td>
                                    <td><a href="treatment_operation" class="btn btn-sm btn-primary">Start Treatment</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>P-0785454643</td>
                                    <td>Mahdi</td>
                                    <td>Dr.Samim</td>
                                    <td>First Time</td>
                                    <td><i class="fa fa-calendar"></i>&nbsp;2018/8/1 - 2:20 PM</td>
                                    <td class="">Diabetics</td>
                                    <td><a href="treatment_operation" class="btn btn-sm btn-primary">Start Treatment</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>P-0777506070</td>
                                    <td>Ahmad</td>
                                    <td>Dr.Samim</td>
                                    <td>First Time</td>
                                    <td><i class="fa fa-calendar"></i>&nbsp;2018/8/1 - 3:00 PM</td>
                                    <td class="">Blood pressure</td>
                                    <td><a href="treatment_operation" class="btn btn-sm btn-primary">Start Treatment</a>
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

@endsection