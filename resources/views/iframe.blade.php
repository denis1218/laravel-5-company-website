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
                <div class="row" style="margin-left:10px;">
                    <div class="row m-b-lg m-t-lg">
                        <div class="col-md-5">
                            <div class="profile-image">
                                <img src="img/a4.jpg" class="img-circle circle-border m-b-md" alt="profile" style="box-shadow: 0 5px 9px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                            </div>

                            <div class="profile-info">
                                <div class="">
                                    <div>
                                        <h2 class="no-margins font-b">
                                            Mostafa Ahmadi
                                        </h2>
                                        <h4>ID: P-0780504075</h4>
                                        <small style="font-size: 15px;">
                                            <span style="font-size: 15px; font-weight: bold;">Problem teeth : </span>Orthodontist,
                                            Periodontist <br/>
                                            <span style="font-size: 15px; font-weight: bold;">Problem Health : </span>Blood
                                            Pressure , Allergy to Penicillin , Allergy to Anaesthetic
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <table class="table small m-b-xs">
                                <tbody>
                                <tr>
                                    <td>
                                        <span class="" style="font-size: 17px;">Gender:<b>&nbsp;Male</b>&nbsp;<i class="fa fa-male"></i></span>
                                    </td>
                                    <td>
                                        <span style="font-size: 17px;">Age:<b>&nbsp;25</b>&nbsp;<i class=""></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span style="font-size: 17px;">Doctor:<b>&nbsp;Dr.Ahmadi</b>&nbsp;<i
                                                    class="fa fa-user-md"></i></span>
                                    </td>
                                    <td>
                                        <span style="font-size: 17px;">Visited:<b>&nbsp;First Time</b>&nbsp;<i
                                                    class=""></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span style="font-size: 17px;">Date Reg:<b>&nbsp;2018/5/26</b>&nbsp;<i
                                                    class="fa fa-calendar"></i></span>
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-3" style="margin-top: -15px;">
                            <h2><a class="btn btn-primary hvr-grow-shadow" style="font-size: 20px; width: 250px;" href="/doctor_operations"><i class="fa fa-stethoscope pull-left" style="color:#ffc000; font-size: 25px;"></i>&nbsp;&nbsp;Treatment operation</a></h2>
                            <h2><a class="btn btn-primary hvr-grow-shadow" style="font-size: 20px; width: 250px;" href="/medicine"><img src="img/medicine.png" class="pull-left"/>&nbsp;&nbsp;Medicine</a></h2>
                            <h2><a class="btn btn-primary hvr-grow-shadow" style="font-size: 20px; width: 250px;" href="/iframe"><i class="fa fa-calendar pull-left" style="color:#ffc000; font-size: 25px;"></i>&nbsp;&nbsp;Next appointment</a></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- patient information--}}

    <iframe src="/fullcalender" width="100%" height="1024px"></iframe>
    @endsection