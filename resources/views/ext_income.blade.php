@extends('master')

@section('style')
    <!-- Data Tables -->
    <link href="dashboard/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <link href="dashboard/css/plugins/dataTables/dataTables.responsive.css" rel="stylesheet">
    <link href="dashboard/css/plugins/dataTables/dataTables.tableTools.min.css" rel="stylesheet">

    <link href="dashboard/css/animate.css" rel="stylesheet">
    <link href="dashboard/css/style.css" rel="stylesheet">
    <link href="dashboard/css/plugins/sweetalert/sweetalert.css" rel="stylesheet"/>

    <link href="css/hover/hover-min.css" rel="stylesheet">
    {{--toastr--}}
    <link href="dashboard/css/bootstrap.min.css" rel="stylesheet">
    <link href="dashboard/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="dashboard/css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <link href="dashboard/css/animate.css" rel="stylesheet">
    <link href="dashboard/css/style.css" rel="stylesheet">
@endsection



@section('content')



    <!-- Nav-buttons -->
    <div class="row wrapper border-bottom white-bg page-heading"
         style="margin-top:-20px; margin-bottom: 10px; margin-left:1px;">
        <h3 style="margin-left:43px;margin-top:10px;">Other income</h3>
        <div class="col-md-2 ">
            <h2><a class="btn btn-primary hvr-float-shadow" style="height:70px;width:155px; margin-left:25px;"
                   href="/income"><i class="fa fa-money" style="color:#ffc000; font-size: 30px;"></i> <br/>From Patient</a>
            </h2>
        </div>
        <div class="col-md-2 ">
            <h2><a class="btn btn-primary hvr-float-shadow" style="height:70px; width:155px; margin-left:15px;"
                   href="/xrey_income"><i class="fa fa-xing" style="color:#ffc000; font-size: 30px;"></i> <br/>X-Rey
                    Income</a></h2>
        </div>
        <div class="col-md-2 ">
            <h2><a class="btn btn-primary hvr-float-shadow" style="height:70px; width:155px;margin-left:15px;"
                   href="/other"><i class="fa fa-user" style="color:#ffc000; font-size: 30px;"></i> <br/>Other Income</a></h2>
        </div>
        <div class="col-lg-4" style="float:right;">
            <div class="ibox float-e-margins" style=" margin-top: 20px;">
                <div class="ibox-title" style=" background-color: #1ab394;color:white">
                    <h5>Total Income</h5>
                </div>
                <div class="ibox-content" style=" background-color: #1ab394;color:white">
                    <h1 class="no-margins">Amount:&nbsp;{{$Gtotal}}</h1>
                </div>
            </div>
        </div>
    </div>

    <!-- End of navButtons -->


    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Other income</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li>
                                    <a href="#">Config option 1</a>
                                </li>
                                <li>
                                    <a href="#">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">

                        <!-- form -->

                        <form method="post" class="form-horizontal" action="/other">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label class="col-sm-2 control-label">From Whome:</label>
                                <div class="col-sm-10">
                                    <input type="text" name="from_whom" class="form-control" placeholder="Enter Name" style="width:50%"
                                           required>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Amount:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="amount" placeholder="Enter the amount of money"
                                           style="width:50%" required>
                                </div>
                            </div>

                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Purpose:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="purpose" placeholder="purpose"
                                           style="width:50%" required>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Description:</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="description" placeholder="Enter more information"
                                              style="width:50%; resize: none;" required></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-1 control-label"></label>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary btn-md" id="showtoast" style="margin-left:110px;">Save
                                        &nbsp;<i class="fa fa-save"></i></button>
                                    <input type="reset" class="btn btn-white btn-md" value="Reset">
                                </div>
                            </div>
                            <div class="wrapper wrapper-content animated fadeIn" style="visibility: hidden;">
                                <div class="row">
                                    <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        {{--<div class="form-group">--}}
                                                            {{--<label for="title">Title</label>--}}
                                                            {{--<input id="title" type="text" class="form-control" placeholder="Enter a title ..." />--}}
                                                        {{--</div>--}}
                                                        {{--<div class="form-group">--}}
                                                            {{--<label for="message">Message</label>--}}
                                                            {{--<textarea class="form-control" id="message" rows="3" placeholder="Enter a message ..."></textarea>--}}
                                                        {{--</div>--}}
                                                        <div class="checkbox">
                                                            <label class="checkbox" for="closeButton">
                                                                <input id="closeButton" type="checkbox" value="checked" class="input-mini" checked/>Close Button
                                                            </label>
                                                        </div>
                                                        {{--<div class="checkbox">--}}
                                                            {{--<label class="checkbox" for="addBehaviorOnToastClick">--}}
                                                                {{--<input id="addBehaviorOnToastClick" type="checkbox" value="checked" class="input-mini" />Add behavior on toast click--}}
                                                            {{--</label>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="checkbox">--}}
                                                            {{--<label class="checkbox" for="debugInfo">--}}
                                                                {{--<input id="debugInfo" type="checkbox" value="checked" class="input-mini" />Debug--}}
                                                            {{--</label>--}}
                                                        {{--</div>--}}
                                                        <div class="checkbox">
                                                            <label class="checkbox" for="progressBar">
                                                                <input id="progressBar" type="checkbox" value="checked" class="input-mini" checked/>Progress Bar
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label class="checkbox" for="preventDuplicates">
                                                                <input id="preventDuplicates" type="checkbox" value="checked" class="input-mini" checked=""/>Prevent Duplicates
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2">
                                                        <div class="form-group" id="toastTypeGroup">
                                                            <label>Toast Type</label>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="toasts" value="success" checked />Success
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label class="radio">
                                                                    <input type="radio" name="toasts" value="info" />Info
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label class="radio">
                                                                    <input type="radio" name="toasts" value="warning" />Warning
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label class="radio">
                                                                    <input type="radio" name="toasts" value="error" />Error
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group" id="positionGroup">
                                                            <label>Position</label>
                                                            <div class="radio">
                                                                <label >
                                                                    <input type="radio" name="positions" value="toast-top-right" checked />Top Right
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label >
                                                                    <input type="radio" name="positions" value="toast-bottom-right" />Bottom Right
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label >
                                                                    <input type="radio" name="positions" value="toast-bottom-left" />Bottom Left
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label >
                                                                    <input type="radio" name="positions" value="toast-top-left" />Top Left
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label >
                                                                    <input type="radio" name="positions" value="toast-top-full-width" />Top Full Width
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label >
                                                                    <input type="radio" name="positions" value="toast-bottom-full-width" />Bottom Full Width
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label >
                                                                    <input type="radio" name="positions" value="toast-top-center" />Top Center
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label >
                                                                    <input type="radio" name="positions" value="toast-bottom-center" />Bottom Center
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="showEasing">Show Easing</label>
                                                            <input id="showEasing" type="text" placeholder="swing, linear" class="form-control" value="swing"/>
                                                        </div>
                                                        <div class="form-group">

                                                            <label for="hideEasing">Hide Easing</label>
                                                            <input id="hideEasing" type="text" placeholder="swing, linear" class="form-control" value="linear"/>
                                                        </div>
                                                        <div class="form-group">

                                                            <label for="showMethod">Show Method</label>
                                                            <input id="showMethod" type="text" placeholder="show, fadeIn, slideDown" class="form-control" value="fadeIn"/>
                                                        </div>
                                                        <div class="form-group">

                                                            <label for="hideMethod">Hide Method</label>
                                                            <input id="hideMethod" type="text" placeholder="hide, fadeOut, slideUp" class="form-control" value="fadeOut"/>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="showDuration">Show Duration</label>
                                                            <input id="showDuration" type="text" placeholder="ms" class="form-control" value="9000" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="hideDuration">Hide Duration</label>
                                                            <input id="hideDuration" type="text" placeholder="ms" class="form-control" value="9000" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="timeOut">Time out</label>
                                                            <input id="timeOut" type="text" placeholder="ms" class="form-control" value="9000" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="extendedTimeOut">Extended time out</label>
                                                            <input id="extendedTimeOut" type="text" placeholder="ms" class="form-control" value="9000" />
                                                        </div>
                                                    </div>
                                                </div>
                                    </div>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>

       
    </div>


@endsection

@section('script')
    <script src="dashboard/js/jquery-2.1.1.js"></script>
    <script src="dashboard/js/bootstrap.min.js"></script>
    <script src="dashboard/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="dashboard/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="dashboard/js/inspinia.js"></script>
    <script src="dashboard/js/plugins/pace/pace.min.js"></script>

    <!-- Toastr script -->
    <script src="dashboard/js/plugins/toastr/toastr.min.js"></script>

    <script type="text/javascript">
        $(function () {
            var i = -1;
            var toastCount = 0;
            var $toastlast;
            var getMessage = function () {
                var msg = 'Your details saved successfully';
                return msg;
            };

            $('#showsimple').click(function (){
                // Display a success toast, with a title
                toastr.success('Without any options','Simple notification!')
            });
            $('#showtoast').click(function () {
                var shortCutFunction = $("#toastTypeGroup input:radio:checked").val();
                var msg = $('#message').val();
                var title = $('#title').val() || '';
                var $showDuration = $('#showDuration');
                var $hideDuration = $('#hideDuration');
                var $timeOut = $('#timeOut');
                var $extendedTimeOut = $('#extendedTimeOut');
                var $showEasing = $('#showEasing');
                var $hideEasing = $('#hideEasing');
                var $showMethod = $('#showMethod');
                var $hideMethod = $('#hideMethod');
                var toastIndex = toastCount++;
                toastr.options = {
                    closeButton: $('#closeButton').prop('checked'),
                    debug: $('#debugInfo').prop('checked'),
                    progressBar: $('#progressBar').prop('checked'),
                    preventDuplicates: $('#preventDuplicates').prop('checked'),
                    positionClass: $('#positionGroup input:radio:checked').val() || 'toast-top-right',
                    onclick: null
                };
                if ($('#addBehaviorOnToastClick').prop('checked')) {
                    toastr.options.onclick = function () {
                        alert('You can perform some custom action after a toast goes away');
                    };
                }
                if ($showDuration.val().length) {
                    toastr.options.showDuration = $showDuration.val();
                }
                if ($hideDuration.val().length) {
                    toastr.options.hideDuration = $hideDuration.val();
                }
                if ($timeOut.val().length) {
                    toastr.options.timeOut = $timeOut.val();
                }
                if ($extendedTimeOut.val().length) {
                    toastr.options.extendedTimeOut = $extendedTimeOut.val();
                }
                if ($showEasing.val().length) {
                    toastr.options.showEasing = $showEasing.val();
                }
                if ($hideEasing.val().length) {
                    toastr.options.hideEasing = $hideEasing.val();
                }
                if ($showMethod.val().length) {
                    toastr.options.showMethod = $showMethod.val();
                }
                if ($hideMethod.val().length) {
                    toastr.options.hideMethod = $hideMethod.val();
                }
                if (!msg) {
                    msg = getMessage();
                }
                $("#toastrOptions").text("Command: toastr["
                    + shortCutFunction
                    + "](\""
                    + msg
                    + (title ? "\", \"" + title : '')
                    + "\")\n\ntoastr.options = "
                    + JSON.stringify(toastr.options, null, 2)
                );
                var $toast = toastr[shortCutFunction](msg, title); // Wire up an event handler to a button in the toast, if it exists
                $toastlast = $toast;
                if ($toast.find('#okBtn').length) {
                    $toast.delegate('#okBtn', 'click', function () {
                        alert('you clicked me. i was toast #' + toastIndex + '. goodbye!');
                        $toast.remove();
                    });
                }
                if ($toast.find('#surpriseBtn').length) {
                    $toast.delegate('#surpriseBtn', 'click', function () {
                        alert('Surprise! you clicked me. i was toast #' + toastIndex + '. You could perform an action here.');
                    });
                }
            });
            function getLastToast(){
                return $toastlast;
            }
            $('#clearlasttoast').click(function () {
                toastr.clear(getLastToast());
            });
            $('#cleartoasts').click(function () {
                toastr.clear();
            });
        });
    </script>

@endsection