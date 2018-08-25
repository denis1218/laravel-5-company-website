@extends('master')

@section('style')

@endsection

@section('content')

    <div class="row wrapper border-bottom white-bg page-heading" style="margin-top:-20px; margin-bottom: 10px;">
        <div class="col-md-2">
            <h2><a class="btn btn-primary" style="height:70px; margin-left:15px;" href="/doctor_operations"><i class="fa fa-stethoscope"  style="font-size: 30px; color:#ff9f00 ;"></i><br/> Treatment Operation</a></h2>
        </div>
        <div class="col-md-2">
            <h2><a class="btn btn-primary" style="height:70px; width:155px" href="/medicine"><img src="img/medicine.png"/> <br/> medicine</a></h2>
        </div>
        <div class="col-md-2">
            <h2><a class="btn btn-primary" style="height:70px; width:155px" href="/next_appointment"><i class="fa fa-calendar" style="font-size: 30px; color:#ff9f00 ;"></i> <br/> Next Appointment</a></h2>
        </div>
    </div>
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
                    <div class="col-lg-12">

                    </div>
                </div>
            </div>
        </div>
    </div>







@endsection

