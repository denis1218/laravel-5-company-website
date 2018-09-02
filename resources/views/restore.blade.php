@extends('master')
@section('style')

    <link href="dashboard/tstrap.min.css" rel="stylesheet">
    <link href="dashboard/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="dashboard/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="dashboard/css/animate.css" rel="stylesheet">
    <link href="dashboard/css/style.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="dashboard/css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <link href="dashboard/css/animate.css" rel="stylesheet">
    <link href="dashboard/css/style.css" rel="stylesheet">


@endsection

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading" style="margin-top:-20px; margin-bottom: 10px;">

        <div class="col-md-2">
            <h2><a class="btn btn-primary" style=" margin-left:25px;" href="/explore_backups"></i><i class="fa fa-search" style="color:#ffc000; font-size: 30px;"></i><br/>Explor<br/>Database Backups<br/></a></h2>
        </div>
        <div class="col-md-2">
            <h2><a class="btn btn-primary" style=" margin-left:25px;" href="/create_backups"></i><i class="fa fa-plus-circle" style="color:#ffc000; font-size: 30px;"></i><br/>Create New<br/>Database Backup<br/></a></h2>
        </div>
        <div class="col-md-2">
            <h2><a class="btn btn-primary" style=" margin-left:25px;" href="/restore"></i><i class="fa fa-refresh" style="color:#ffc000; font-size: 30px;"></i><br/><br/>Restore Database<br/></a></h2>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Restore Database</h5>
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

                       <div class="col-md-2"><h5>Destination for Restore</h5></div>
                        <hr class="hr hr-line-solid"/>
                        <br/><br/>
                        <h5>Select or type the name of a new or existing database for your restore operation</h5>
                        <br/>
                        <div class="row">
                                <div class="col-md-2"><h5>To database :</h5> </div>
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
                                <div class="form-group"><center><label><input type="radio"  name="first" value="Enable" id="radio_one"> from database :</label></center></div>
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
                                <div class="form-group"><center><label><input type="radio" name="first" value="Disable" id="radio_two" checked> from Device :&nbsp;&nbsp;&nbsp;&nbsp;</label></center></div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <select class="form-control col-md-3 selecttwo" id="get_file2">
                                        <option value="1">Select Database Backup</option>

                                    </select>
                                </div>
                            </div>

                            <input type="file" id="my_file2" style="display: none;" accept=".sql">
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group"> <button type="button" class="btn btn-w-m btn-primary ">Restore</button></div>

                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                <button type="button" class="btn btn-w-m btn-primary" id="showsimple">Test</button>
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
           $("select.selectone").attr('disabled',true);
           $('input:radio#radio_one').click(function () {
              $('select.selectone').attr('disabled',false);
              $('select.selecttwo').attr('disabled',true);
           });
           $('input:radio#radio_two').click(function(){
              $('select.selectone').attr('disabled',true);
              $('select.selecttwo').attr('disabled',false);
           });
        });
        //Show Alert Message Script
        $('#showsimple').click(function (){
            // Display a success toast, with a title
            toastr.success('Your Database Successfully inserted !')
        });
    </script>

    @endsection