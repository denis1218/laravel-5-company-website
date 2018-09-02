@extends('master')
@section('style')
    <link href="dashboard/css/bootstrap.min.css" rel="stylesheet">
    <link href="dashboard/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="dashboard/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="dashboard/css/animate.css" rel="stylesheet">
    <link href="dashboard/css/style.css" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <link href="css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
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
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Database Name</label>
                                <input type="text" class="form-control" placeholder="Enter Database Name"/>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="hr-line-dashed"></div>
                    <div class="row">

                                <div class="ibox-content">
                                    <h3>Backup Method</h3>
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <td class="col-md-3"><div class="i-checks">
                                                <label> <input type="radio" value="option1" name="a"> <i class="fa fa-dropbox" ></i> Dropbox </label>
                                                </div>
                                            </td>
                                            <th class="col-xs-1"><center>Path:</center></th>
                                            <td class="col-md-3">
                                                <div class="form-group"><input type="text" class="form-control" value="C:\Document\Dropbox\Backups" readonly>
                                                </div>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><div class="i-checks">
                                                    <label> <input type="radio" value="option1" name="a"> <i class="fa fa-location-arrow" ></i> Local Network Drive </label>
                                                </div></td>
                                            <th class="col-xs-1"><center>Path:</center></th>
                                            <td class="col-md-3">
                                                <div class="form-group"><input type="text" class="form-control" value="C:\Document\Local Drive\Backups" readonly>
                                                </div>
                                            </td>
                                            <td></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <p><button type="button" class="btn btn-w-m btn-primary ">Create Backup</button></p>
                                </div>
            </div>
        </div>
    </div>
        <script src="dashboard/js/jquery-2.1.1.js"></script>
        <script src="dashboard/js/bootstrap.min.js"></script>
        <script src="dashboard/js/plugins/metisMenu/jquery.metisMenu.js"></script>
        <script src="dashboard/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

        <!-- Custom and plugin javascript -->
        <script src="dashboard/js/inspinia.js"></script>
        <script src="dashboard/js/plugins/pace/pace.min.js"></script>
    <!-- Mainly scripts -->
    <script src="dashboard/js/jquery-2.1.1.js"></script>
    <script src="dashboard/js/bootstrap.min.js"></script>
    <script src="dashboard/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="dashboard/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="dashboard/js/inspinia.js"></script>
    <script src="dashboard/js/plugins/pace/pace.min.js"></script>

    <!-- iCheck -->
    <script src="dashboard/js/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>
    </div>
    @endsection