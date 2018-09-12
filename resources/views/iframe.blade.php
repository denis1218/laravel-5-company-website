@extends('master')

@section('content')

    {{-- search area --}}
    <div class="row wrapper border-bottom white-bg page-heading"
         style="margin-top:-20px; margin-bottom: 10px; margin-left: 1px;">
        <div class="row" style="margin-top: 30px; margin-left: 25px;">
            <div class="col-sm-10">
                <div class="input-group m-b"><span class="input-group-btn">
                    <button type="button" class="btn btn-primary" href="#patient" data-toggle="collapse"><i
                                class="fa fa-search"></i>&nbsp;Search</button> </span>
                    <input type="text" class="form-control" placeholder="Search P-ID patient">
                </div>
            </div>
        </div>


    </div>
    {{-- search area  --}}

    {{-- patient information --}}
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Patient Information <i class="fa fa-info"></i></h5>
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

            </div>
        </div>
    </div>
    {{-- patient information--}}

    <iframe src="/fullcalender" width="100%" height="1024px"></iframe>
    @endsection