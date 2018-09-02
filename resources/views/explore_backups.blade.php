@extends('master')
@section('style')
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    @endsection
@section('content')
    <div class="row wrapper border-bottom white-bg page-heading" style="margin-top:-20px; margin-bottom: 10px;">

        <div class="col-md-2">
            <h2><a class="btn btn-primary" style=" margin-left:25px;" href="/explore_backups"></i><i class="fa fa-search" style="color:#ffc000; font-size: 30px;"></i><br/>Explor<br/>Database Backups<br/></a></h2>
        </div>
        <div class="col-md-2">
            <h2><a class="btn btn-primary" style=" margin-left:25px;" href="/create_backups" ></i><i class="fa fa-plus-circle" style="color:#ffc000; font-size: 30px;"></i><br/>Create New<br/>Database Backup<br/></a></h2>
        </div>
        <div class="col-md-2">
            <h2><a class="btn btn-primary" style=" margin-left:25px;" href="/restore"></i><i class="fa fa-refresh" style="color:#ffc000; font-size: 30px;"></i><br/><br/>Restore Database<br/></a></h2>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Backup Details  </h5>
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

                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Backup Owner</th>
                        <th>Date & Time</th>
                        <th>Backup Destination </th>
                        <th>Type</th>
                        <th>Path</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Ahmad</td>
                        <td>2018,8,25 , 4:00</td>
                        <td>Dropbox</td>
                        <td>Full</td>
                        <td>C:\backup\first.sql</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Ahmad</td>
                        <td>2018,8,25 , 4:00</td>
                        <td>Dropbox</td>
                        <td>Full</td>
                        <td>C:\backup\first.sql</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Ahmad</td>
                        <td>2018,8,25 , 4:00</td>
                        <td>Dropbox</td>
                        <td>Full</td>
                        <td>C:\backup\first.sql</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

        {{-- content details of patient appointment --}}



    </div>
    </div>
    </div>

    @endsection