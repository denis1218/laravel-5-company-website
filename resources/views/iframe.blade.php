@extends('master')
@section('content')
    <div class="row wrapper border-bottom white-bg page-heading" style="margin-top:-20px; margin-bottom: 10px;">
        <div class="col-md-2">
            <h2><a class="btn btn-primary" style="height:70px; margin-left:25px;" href="/doctor_operations"><i class="fa fa-stethoscope" style="color:#ffc000; font-size: 30px;"></i> <br/> Treatment operation</a></h2>
        </div>
        <div class="col-md-2">
            <h2><a class="btn btn-primary" style="height:70px; width:155px" href="/medicine"><img src="img/medicine.png"/> <br/> medicine</a></h2>
        </div>
        <div class="col-md-2">
            <h2><a class="btn btn-primary" style="height:70px; width:155px" href="/iframe"><i class="fa fa-calendar" style="font-size: 30px; color:#ff9f00 ;"></i> <br/> Next Appointment</a></h2>
        </div>
    </div>
    <iframe src="/fullcalender" width="100%" height="1024px"></iframe>
    @endsection