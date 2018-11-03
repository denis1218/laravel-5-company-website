@extends('master')
@section('style')

    <!-- Toastr style -->
    <link href="dashboard/css/plugins/toastr/toastr.min.css" rel="stylesheet">


@endsection

@section('content')



    {{-- buttons --}}
    <div class="row wrapper border-bottom white-bg page-heading"
         style="margin-top:-20px; margin-bottom: 10px; margin-left:1px;">

        <div class="col-md-2 ">
            <h2><a class="btn btn-primary hvr-float-shadow" style="height: 65px; width:130px;" href="/explore_backups"></i>
                    <img src="img/db.png" width="30px"/><br/>Backup list<br/></a></h2>
        </div>
        <div class="col-md-2" style="margin-left:-50px;">
            <h2><a class="btn btn-primary hvr-float-shadow" style="height: 65px;" href="/create_backups"></i>
                    <img src="img/db_plus.png" width="30px"/><br/>Database Backup<br/></a></h2>
        </div>
        <div class="col-md-2" style="margin-left:-40px;">
            <h2><a class="btn btn-primary hvr-float-shadow" style="height: 65px;" href="/restore">
                    <img src="img/db_restor.png" width="30px"/>
                    <br/>Restore Database<br/></a></h2>
        </div>
    </div>
    {{-- buttons --}}


    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Restore Database</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">

                <div class="col-md-2"><h5>Destination for Restore</h5></div>
                <hr class="hr hr-line-solid"/>
                <br/><br/>
                <h5>Select or type the name of a new or existing database for your restore operation</h5>
                <br/>
                <div class="row">
                    <div class="col-md-2"><h5>To database :</h5></div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <select class="form-control col-md-3 ">
                                <option value="1">Select Database</option>
                                <option value="1">Adventure work</option>
                                <option value="2">Test Database</option>
                                <option value="3">Denta Database</option>
                            </select>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-2">To apoint in time :</div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <select class="form-control col-md-3" id="get_file">
                                <option value="1">Most Recent possible</option>

                            </select>
                        </div>
                    </div>

                </div>
                <br><br><br>
                <div class="col-md-2"><h5>Source For Restore</h5></div>
                <hr class="hr hr-line-solid"/>
                <br/><br/>
                <h5>Specify the source and location of backup sets and restore</h5>
                <br>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <center><label><input type="radio" name="first" value="Enable" id="radio_one"> from database
                                    :</label></center>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <select class="form-control col-md-3 selectone">
                                <option value="1">Select Database</option>
                                <option value="1">Adventure work</option>
                                <option value="2">Test Database</option>
                                <option value="3">Denta Database</option>
                            </select>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label><input type="radio" name="first" value="Disable" id="radio_two" checked> from Device :&nbsp;&nbsp;&nbsp;&nbsp;</label></center>
                        </div>
                    </div>
                    <div class="col-sm-4 ">
                        <select class="form-control col-md-3 selecttwo" id="get_file2">
                            <option value="1">Select Database Backup</option>
                        </select>
                    </div>
                    <input type="file" id="my_file2" style="display: none;" accept=".sql">
                </div><br/>
                <div class="row">
                    <div class="col-md-2" >
                        <button type="button" class="btn btn-w-m btn-primary demo_restore"><i class="fa fa-repeat"></i>&nbsp;Restore</button>
                    </div>
                    <div class="col-md-2" style="margin-left: -75px;">
                        <button type="button" class="btn btn-w-m btn-info demo_connection" id=""><i class="fa fa-refresh"></i>&nbsp;Test Connection DB</button>
                    </div>
                </div>

            </div>

        </div>
    </div>
    </div>


@endsection
@section('script')
    <script src="dashboard/js/plugins/sweetalert/sweetalert.min.js"></script>
    <script src="dashboard/js/jquery-ui.custom.min.js"></script>
    <script src="dashboard/js/jquery-ui-1.10.4.min.js"></script>
    {{--////////////////////--}}
    <script src="dashboard/js/jquery-2.1.1.js"></script>
    <script src="dashboard/js/bootstrap.min.js"></script>
    <script src="dashboard/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="dashboard/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="dashboard/js/inspinia.js"></script>
    <script src="dashboard/js/plugins/pace/pace.min.js"></script>

    <!-- Toastr script -->
    <script src="dashboard/js/plugins/toastr/toastr.min.js"></script>
    <script>

        document.getElementById('get_file2').onclick = function () {
            document.getElementById('my_file2').click();
        }
        $(document).ready(function () {
            $("select.selectone").attr('disabled', true);
            $('input:radio#radio_one').click(function () {
                $('select.selectone').attr('disabled', false);
                $('select.selecttwo').attr('disabled', true);

            });
            $('input:radio#radio_two').click(function () {
                $('select.selectone').attr('disabled', true);
                $('select.selecttwo').attr('disabled', false);

            });
        });
        //Show Alert Message Script
        $('#showsimple').click(function () {
            // Display a success toast, with a title
            toastr.success('Your Database Successfully inserted !')
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

            $('.demo_connection').click(function () {
                swal({
                    title: "Successfully Connected to database!",
                    text: "Application Connected to DB!",
                    type: "success"
                });
            });

            $('.demo_restore').click(function () {
                swal({
                    title: "Successfully Restore!",
                    text: "All Data restore to your Database!",
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