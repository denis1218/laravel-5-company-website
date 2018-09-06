@extends('master')
@section('style')
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
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

    {{-- back up table list --}}
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Backup List </h5>
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

                <table class="table table-hover table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Backup Owner</th>
                        <th>Date & Time</th>
                        <th>Backup Destination</th>
                        <th>Type</th>
                        <th>Path</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Ahmad</td>
                        <td>2018,8,25 , 4:00</td>
                        <td>Dropbox <i class="fa fa-dropbox"></i></td>
                        <td>Full</td>
                        <td>C:\backup\first.sql</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Ahmad</td>
                        <td>2018,8,25 , 4:00</td>
                        <td>Dropbox <i class="fa fa-dropbox"></i></td>
                        <td>Full</td>
                        <td>C:\backup\first.sql</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Ahmad</td>
                        <td>2018,8,25 , 4:00</td>
                        <td>Dropbox <i class="fa fa-dropbox"></i></td>
                        <td>Full</td>
                        <td>C:\backup\first.sql</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- content details of patient appointment --}}

@endsection