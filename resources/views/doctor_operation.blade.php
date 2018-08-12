@extends('master')

@section('style')
    <style rel="stylesheet">
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
    </style>
    @endsection

@section('content')
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Custom responsive table </h5>
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
                    <div class="col-md-10"><h3>Choose Tooth</h3></div>
                </div>
                <div class="row">

                    <div class="col-md-6">
                        {{-- this is content of page doctror = --}}
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-action"><img  src="img/thoot.png" width="25px"/></li>
                            <li class="list-group-item list-group-item-action"><img  src="img/thoot.png" width="25px"/></li>
                            <li class="list-group-item list-group-item-action"><img  src="img/thoot.png" width="25px"/></li>
                            <li class="list-group-item list-group-item-action"><img  src="img/thoot.png" width="25px"/></li>
                            <li class="list-group-item list-group-item-action"><img  src="img/thoot.png" width="25px"/></li>
                            <li class="list-group-item list-group-item-action"><img  src="img/thoot.png" width="25px"/></li>
                            <li class="list-group-item list-group-item-action"><img  src="img/thoot.png" width="25px"/></li>
                            <li class="list-group-item list-group-item-action"><img  src="img/thoot.png" width="25px"/></li>
                            <li class="list-group-item list-group-item-action"><img  src="img/thoot.png" width="25px"/></li>
                        </ul>
                        <hr class=""/>
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-action"><img  src="img/thoot.png" width="25px"/></li>
                            <li class="list-group-item list-group-item-action"><img  src="img/thoot.png" width="25px"/></li>
                            <li class="list-group-item list-group-item-action"><img  src="img/thoot.png" width="25px"/></li>
                            <li class="list-group-item list-group-item-action"><img  src="img/thoot.png" width="25px"/></li>
                            <li class="list-group-item list-group-item-action"><img  src="img/thoot.png" width="25px"/></li>
                            <li class="list-group-item list-group-item-action"><img  src="img/thoot.png" width="25px"/></li>
                            <li class="list-group-item list-group-item-action"><img  src="img/thoot.png" width="25px"/></li>
                            <li class="list-group-item list-group-item-action"><img  src="img/thoot.png" width="25px"/></li>
                            <li class="list-group-item list-group-item-action"><img  src="img/thoot.png" width="25px"/></li>

                        </ul>
                    </div>

                    <div class="col-md-6">
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-action"><img  src="img/thoot.png" width="25px"/></li>
                            <li class="list-group-item list-group-item-action"><img  src="img/thoot.png" width="25px"/></li>
                            <li class="list-group-item list-group-item-action"><img  src="img/thoot.png" width="25px"/></li>
                            <li class="list-group-item list-group-item-action"><img  src="img/thoot.png" width="25px"/></li>
                            <li class="list-group-item list-group-item-action"><img  src="img/thoot.png" width="25px"/></li>
                            <li class="list-group-item list-group-item-action"><img  src="img/thoot.png" width="25px"/></li>
                            <li class="list-group-item list-group-item-action"><img  src="img/thoot.png" width="25px"/></li>
                            <li class="list-group-item list-group-item-action"><img  src="img/thoot.png" width="25px"/></li>
                            <li class="list-group-item list-group-item-action"><img  src="img/thoot.png" width="25px"/></li>

                        </ul>
                        <hr/>
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-action"><img  src="img/thoot.png" width="25px"/></li>
                            <li class="list-group-item list-group-item-action"><img  src="img/thoot.png" width="25px"/></li>
                            <li class="list-group-item list-group-item-action"><img  src="img/thoot.png" width="25px"/></li>
                            <li class="list-group-item list-group-item-action"><img  src="img/thoot.png" width="25px"/></li>
                            <li class="list-group-item list-group-item-action"><img  src="img/thoot.png" width="25px"/></li>
                            <li class="list-group-item list-group-item-action"><img  src="img/thoot.png" width="25px"/></li>
                            <li class="list-group-item list-group-item-action"><img  src="img/thoot.png" width="25px"/></li>
                            <li class="list-group-item list-group-item-action"><img  src="img/thoot.png" width="25px"/></li>
                            <li class="list-group-item list-group-item-action"><img  src="img/thoot.png" width="25px"/></li>

                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div clasgit ins="col-md-5">

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

