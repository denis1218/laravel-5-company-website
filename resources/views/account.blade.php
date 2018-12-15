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
            <h2><a class="btn btn-primary hvr-float-shadow" style="height:65px; margin-left: 30px; " href="/user">
                    <img src="{{ asset('img/user_list.png') }}" width="30px"/>
                    <br>{{trans('file.list_of_account')}}</a>
            </h2>
        </div>
        <div class="col-md-2">
            <h2><a class="btn btn-primary hvr-float-shadow" style="height:65px; margin-left:0px;" href="/user/create">
                    <img src="{{ asset('img/usre_icon.png') }}" width="30px"/>
                    <br/>{{trans('file.create_account')}}</a></h2>

        </div>

    </div>

    {{--start of doctor info --}}
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>{{trans('file.list_of_account')}} </h5>

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
                                <th>{{trans('file.password')}}</th>
                                <th>{{trans('file.email')}}</th>
                                <th>{{trans('file.role')}}</th>
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
                                    <td>{{ str_limit($user->password ,7)}}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->department }}</td>

                                    <td>
                                        <button class="btn btn-xs btn-success" data-toggle="modal"
                                                data-target="#e{{$user->id}}"><i class="fa fa-edit"></i>&nbsp;{{trans('file.edit')}}
                                        </button>
                                    </td>
                                    <td>
                                        <form id="del" action="/user2/{{$user->id}}" id="myForm">
                                            <button class="btn btn-xs btn-danger  demo3"><i class="fa fa-remove"></i>&nbsp;{{trans('file.delete')}}</button>
                                        </form>
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
    {{--end of user info--}}

    @foreach($users as $usr)
    {{-- modal window to show editing detail of doctor--}}
    <div class="modal inmodal" id="e{{$usr->id}}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated fadeIn">
                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal"><span
                                aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <input type="file" id="my_file">
                    <h4 class="modal-title">{{trans('file.user_info')}}</h4>
                </div>
                <form id="form" action="/user/{{$usr->id}}" method="post">
                    {{method_field('patch')}}
                <div class="modal-body">


                    <div class="form-group"><label>{{trans('file.first_name')}}</label> <input type="text" name="firstname" placeholder="{{trans('file.first_name')}}"
                                                                             value="{{$usr->firstname}}" class="form-control"></div>
                    <div class="form-group"><label>{{trans('file.last_name')}}</label> <input type="text" name="lastname" placeholder="{{trans('file.last_name')}}"
                                                                            value="{{$usr->lastname}}" class="form-control"></div>
                    <div class="form-group"><label>{{trans('file.change_password')}}</label> <input type="password" name="password" placeholder="{{trans('file.password')}}"

                                                                           value="{{$usr->password}}" class="form-control">
                    </div>

                    <div class="form-group"><label>{{trans('file.email')}}</label> <input type="email" name="email" placeholder="{{trans('file.email')}}"
                                                                        value="{{$usr->email}}"
                                                                        class="form-control"></div>
                    <div class="form-group"> <input type="hidden" name="department" placeholder="{{trans('file.department')}}"
                                                                        value="{{$usr->department}}"
                                                                        class="form-control"></div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">{{trans('file.close')}}</button>
                    <button type="submit"   class="btn btn-primary">{{trans('file.save')}}</button>

                </div>
                </form>
            </div>
        </div>
    </div>

    @endforeach
    {{-- end of modal window--}}
@endsection
@section('script')
    <script src="{{ asset('dashboard/js/plugins/toastr/toastr.min.js') }}"></script>

    <script type="text/javascript">
        $(function () {
            $('#form').submit(function (){
                // Display a success toast, with a title
//                toastr.info('Successfully Inserted !');
                toastr.info('Successfully Inserted !',{timeOut: 7000});
            });
            $('#del').submit(function (){
                // Display a success toast, with a title
//                toastr.info('Successfully Inserted !');
                toastr.success('Successfully Deleted!',{timeOut: 7000});
            });
        });
    </script>
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

            $('.demo3').on('click',function(e){
                e.preventDefault();
                var form = $(this).parents('form');
                swal({
                    title: "Are you sure?",
                    text: "You will not be able to recover this imaginary file!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes, delete it!",
                    closeOnConfirm: false
                }, function(isConfirm){
                    if (isConfirm) form.submit();
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
