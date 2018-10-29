@extends('master')
@section('style')


@endsection
@section('content')


    {{-- buttons --}}
    <div class="row wrapper border-bottom white-bg page-heading"
         style="margin-top:-20px; margin-bottom: 10px; margin-left:1px;">

        <div class="col-md-2 ">
            <h2><a class="btn btn-primary hvr-float-shadow" style="height: 65px; width:130px;"
                   href="/backup"></i><img src="img/db.png" width="30px"/><br/>{{trans('file.backup_list')}}<br/></a></h2>
        </div>
        <div class="col-md-2" style="margin-left:-50px;">
            <h2><a class="btn btn-primary hvr-float-shadow" style="height: 65px;" href="/create_backups"></i>
                    <img src="img/db_plus.png" width="30px"/><br/>{{trans('file.database_backup')}}<br/></a></h2>
        </div>
        <div class="col-md-2" style="margin-left:-40px;">
            <h2><a class="btn btn-primary hvr-float-shadow" style="height: 65px;" href="/restore">
                    <img src="img/db_restor.png" width="30px"/>
                    <br/>{{trans('file.restore_database')}}<br/></a></h2>
        </div>
    </div>
    {{-- buttons --}}


    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>{{trans('file.backup_creation')}} </h5>
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
                                <label>{{trans('file.db_name')}}</label>
                                <input type="text" class="form-control" placeholder="{{trans('file.enter_db_name')}}"/>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="hr-line-dashed"></div>
                <div class="row">

                    <div class="ibox-content">
                        <h3>{{trans('file.backup_method')}}</h3>
                        <table class="table">
                            <tbody>
                            <tr>
                                <td class="col-md-3">
                                    <div class="i-checks">
                                        <label> <input type="radio" value="option1" name="a"> <i
                                                    class="fa fa-dropbox"></i>{{trans('file.drop_box')}}</label>
                                    </div>
                                </td>
                                <th class="col-xs-1">
                                    <center>{{trans('file.path')}}:</center>
                                </th>
                                <td class="col-md-3">
                                    <div class="form-group"><input type="text" class="form-control"
                                                                   value="C:\Document\Dropbox\Backups" readonly>
                                    </div>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="i-checks">
                                        <label> <input type="radio" value="option1" name="a"> <i
                                                    class="fa fa-location-arrow"></i> {{trans('file.local_network_drive')}} </label>
                                    </div>
                                </td>
                                <th class="col-xs-1">
                                    <center>{{trans('file.path')}}:</center>
                                </th>
                                <td class="col-md-3">
                                    <div class="form-group"><input type="text" class="form-control"
                                                                   value="C:\Document\Local Drive\Backups" readonly>
                                    </div>
                                </td>
                                <td></td>
                            </tr>
                            </tbody>
                        </table>
                        <p>
                            <button type="button" class="btn btn-w-m btn-primary demo_DB_create">{{trans('file.create_backup')}}</button>
                        </p>
                    </div>
                </div>
            </div>
        </div>

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

@section('script')
    {{-- sweet alert --}}
    <script>
        $(document).ready(function () {

            $('.demo1').click(function () {
                swal({
                    title: "Welcome in Alerts",
                    text: "Lorem Ipsum is simply dummy text of the printing and typesetting industry."
                });
            });

            $('.demo_DB_create').click(function () {
                swal({
                    title: "Successfully Backup it DB!",
                    text: "You have Backup DB file!",
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