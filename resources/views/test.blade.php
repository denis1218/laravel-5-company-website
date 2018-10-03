@extends('master')

@section('style')
    <link href="dashboard/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
    <style rel="stylesheet">

        #img_all_tooth {
            border-radius: 20px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            border: 20px;
        }

        #my_file {
            display: none;
        }

        .btn-xray {
            height: 57px;
        }

        .bg-khatar {
            background: #ff0004;
        }

        .font-m {
            font-size: 1.2em;
        }

        .font-b {
            font-size: 1.5em;
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

    <div class="col-lg-9">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>X-Ray Patient </h5>
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

                <div class="row" style="margin-bottom: -30px;">
                    <div class="row m-b-lg m-t-lg">
                        <div class="col-md-6">
                            <div class="profile-info">
                                <div class="">
                                    <div>
                                        @foreach($patient as $pat)
                                        <h2 class="no-margins font-b">
                                            {{$pat->patient->name}}
                                        </h2>
                                        <h4>{{$pat->FK_id_patient}}</h4>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <hr class="bg-primary"/>
                <div class="row">
                    <div class="col-md-5">
                        <table class="table table-condensed table-bordered text-center">
                            <tr>
                                <td><strong>Tooth Number :</strong></td>
                                <td>4</td>
                            </tr>
                            <tr>
                                <td><strong>Tooth Position :</strong></td>
                                <td>Upper Right</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3" style="margin-top:30px;">
                        <button class="btn btn-primary xray">Save <i class="fa fa-save"></i></button>&nbsp;&nbsp;
                        <button class="btn btn-white">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection