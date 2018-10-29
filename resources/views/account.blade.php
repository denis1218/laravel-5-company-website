@extends('master')

@section('style')
    <link href="{{asset('dashboard/css/plugins/sweetalert/sweetalert.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/hover/hover-min.css')}}" rel="stylesheet">
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


    <div class="row wrapper border-bottom white-bg page-heading"
         style="margin-top:-20px; margin-bottom: 10px; margin-left:1px;">
        <div class="col-md-2">
            <h2><a class="btn btn-primary hvr-float-shadow" style="height:65px; margin-left: 30px; " href="/user"><i
                            class="fa fa-users" style="font-size: 30px; color:#ffac1b ;"></i><br>{{trans('file.list_of_account')}}</a>
            </h2>
        </div>
        <div class="col-md-2">
            <h2><a class="btn btn-primary hvr-float-shadow" style="height:65px; margin-left:0px;"
                   href="/user/create"><i class="fa fa-user" style="color:#ffac1b; font-size: 30px;"></i> <br/>{{trans('file.create_account')}}</a></h2>

        </div>

    </div>

    {{--start of doctor info --}}
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>{{trans('file.list_of_account')}} </h5>
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
                        <table class="table table-hover table-borderd table-striped">
                            <thead>
                            <tr>
                                <th>{{trans('file.id')}}</th>
                                <th>{{trans('file.first_name')}}</th>
                                <th>{{trans('file.last_name')}}</th>
                                <th>{{trans('file.user_name')}}</th>
                                <th>{{trans('file.password')}}</th>
                                <th>{{trans('file.email')}}</th>
                                <th>{{trans('file.phone')}}</th>
                                <th>{{trans('file.role')}}</th>
                                <th>{{trans('file.details')}}</th>
                                <th>{{trans('file.edit')}}</th>
                                <th>{{trans('file.delete')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->firstname }}</td>
                                    <td>{{ $user->lastname }}</td>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ str_limit($user->password ,7)}}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td>{{ $user->department }}</td>
                                    <td>
                                        <button class="btn btn-xs btn-primary" data-toggle="modal"
                                                data-target="#"><i class="fa fa-info"></i>&nbsp; {{trans('file.permission')}}
                                        </button>
                                    </td>
                                    <td>
                                        <button class="btn btn-xs btn-success" data-toggle="modal"
                                                data-target="#"><i class="fa fa-edit"></i>&nbsp;{{trans('file.edit')}}
                                        </button>
                                    </td>
                                    <td>
                                        <button class="btn btn-xs btn-danger demo3" data-toggle="modal"
                                                data-target="#"><i class="fa fa-remove"></i>&nbsp;{{trans('file.delete')}}
                                        </button>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>

                </div>
                <hr/>
                <div class="row">
                    <div class="col-lg-9">
                    </div>

                </div>

            </div>
        </div>
    </div>
    {{--end of doctor info--}}








    <div class="modal inmodal" id="account_details" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated fadeIn">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span
                                aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <img src="img/a4.jpg" class="img-circle circle-border m-b-md" alt="profile">

                    <h4 class="modal-title">Dr.tamim</h4>
                </div>
                <div class="modal-body text-center">
                    <fieldset>
                        <h1>All information Dr.tamim</h1>
                        <br/>
                        <br/>
                        <div class="col-lg-12">


                            <table class="table table-bordered">
                                <thead>
                                <td><b>Info</b></td>
                                <td><b>Details</b></td>
                                </thead>
                                <tr>
                                    <td>P-ID:</td>
                                    <td>P-223</td>
                                </tr>
                                <tr>
                                    <td>Name:</td>
                                    <td>Ahamd</td>
                                </tr>
                                <tr>
                                    <td>Gender:</td>
                                    <td>Male</td>
                                </tr>
                                <tr>
                                    <td>Age:</td>
                                    <td>25</td>
                                </tr>
                                <tr>
                                    <td>Phone:</td>
                                    <td>0780552233</td>
                                </tr>
                                <tr>
                                    <td>Address:</td>
                                    <td>Carte Char, Pole Sourkhe, Kabul, Afghanistan</td>
                                </tr>
                            </table>
                        </div>
                    </fieldset>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    {{-- end of modal window --}}


    {{-- modal window to show editing detail of doctor--}}

    <div class="modal inmodal" id="edit_account" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated fadeIn">
                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal"><span
                                aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <a href="#" id="get_file"><img src="img/a4.jpg" class="img-circle circle-border m-b-md"
                                                   alt="profile"> </a>
                    <input type="file" id="my_file">
                    <h4 class="modal-title">Edit Doctor Information</h4>
                </div>
                <div class="modal-body">

                    <div class="form-group"><label>First Name</label> <input type="text" placeholder="First Name"
                                                                             value="tamim" class="form-control"></div>
                    <div class="form-group"><label>Last Name</label> <input type="text" placeholder="Last Name"
                                                                            value="ahmadi" class="form-control"></div>
                    <div class="form-group"><label>Username</label> <input type="text" placeholder="Username"
                                                                           value="tamimahmadi" class="form-control">
                    </div>
                    <div class="form-group"><label>Phonenumber</label> <input type="text" placeholder="phone number"
                                                                              value="0780######" class="form-control">
                    </div>
                    <div class="form-group"><label>Email</label> <input type="email" placeholder="Email"
                                                                        value="tamimahmadi@gmail.com"
                                                                        class="form-control"></div>



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

        $(document).ready(function () {
            $('input#my_file').hide();
            $('a#get_file').hover(function () {
                $('h3#chg').show();
                $('span#chg').css('fontSize', '20px');

            });
        });
        document.getElementById('get_file').onclick = function () {
            document.getElementById('my_file').click();
        };

    </script>
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
    </script>

    });
    <script>
        $(document).ready(function () {

            $('.demo1').click(function () {

                swal({
                    title: "Welcome in Alerts",
                    text: "Lorem Ipsum is simply dummy text of the printing and typesetting industry."
                });
            });


            $('.demo2').click(function () {

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
