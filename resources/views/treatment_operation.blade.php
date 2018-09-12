@extends('master')
@section('style')
    <style rel="stylesheet">
        .font-m {
            font-size: 1.5em;
        }

        .font-b {
            font-size: 1.7em;
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
    <div class="row wrapper border-bottom white-bg page-heading"
         style="margin-top:-20px; margin-bottom: 10px; margin-left: 1px;">
        <div class="col-md-3">
            <h2><a class="btn btn-primary hvr-grow-shadow" style="font-size: 20px; width: 250px;"
                   href="/doctor_operations"><img src="img/medicine.png" class="pull-left"/>&nbsp;&nbsp;Patient List</a>
            </h2>
        </div>
        <div class="col-md-3">
            <h2><a class="btn btn-primary hvr-grow-shadow" style="font-size: 20px; width: 250px;"
                   href="/treatment_operation">
                    <i class="fa fa-stethoscope pull-left" style="color:#ffc000; font-size: 25px;"></i>&nbsp;&nbsp;Treatment
                    operation</a></h2>
        </div>
        <div class="col-md-3">
            <h2><a class="btn btn-primary hvr-grow-shadow" style="font-size: 20px; width: 250px;" href="/next_appointment_list"><i
                            class="fa fa-calendar pull-left" style="color:#ffc000; font-size: 25px;"></i>Next Appointment List</a></h2>
        </div>
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Patient Info</h5>
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
                                    <img src="img/a4.jpg" class="img-circle circle-border m-b-md" alt="profile"
                                         style="box-shadow: 0 5px 9px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                </div>

                                <div class="profile-info">
                                    <div class="">
                                        <div>
                                            <h2 class="no-margins font-b">
                                                Mostafa Ahmadi
                                            </h2>
                                            <h4>ID: P-0780504075</h4>
                                            <small style="font-size: 15px;">
                                                <span style="font-size: 15px; font-weight: bold;">Dental Defect : </span>Orthodontist,
                                                Periodontist <br/> <br/>
                                                <span style="font-size: 15px; font-weight: bold;">Treatment : </span>Extraction
                                                <br/>
                                                <br/>
                                                <span style="font-size: 15px; font-weight: bold;">Problem Health : </span>Blood
                                                Pressure , Allergy to Penicillin , Allergy to Anaesthetic


                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <table class="table small m-b-xs">
                                    <tbody>
                                    <tr>
                                        <td>
                                            <span class="" style="font-size: 17px;">Gender:<b>&nbsp;Male</b>&nbsp;<i
                                                        class="fa fa-male"></i></span>
                                        </td>
                                        <td>
                                            <span style="font-size: 17px;">Age:<b>&nbsp;25</b>&nbsp;<i
                                                        class=""></i></span>
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
                                              <span style="font-size: 17px;">First Visited Date :<b>&nbsp;2018/5/26</b>&nbsp;<i
                                                          class="fa fa-calendar"></i></span>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                    <div class="hr-line-solid"></div>
                    <div class="row"><h1>First Treatment</h1></div>
                    <div class="row">
                        <div class="col-md-6">
                            <br/>
                            <h3>Dental Defect : &nbsp;BDR</h3>
                            <h3>Treatment : &nbsp;RCT (Root Canal)</h3>
                            <h3>Date First Appointment : &nbsp;2018 / 5 / 7</h3>
                        </div>
                        <div class="col-md-6">
                            <h3>Fee Paid : &nbsp;500</h3>
                            <h3>Remaining : &nbsp;1000</h3>
                            <h3>Teeth Number: &nbsp;27</h3>
                            <h3>Description : &nbsp;This teeth must extract</h3>
                        </div>

                    </div>
                    <div class="hr-line-solid"></div>
                    <div class="row">
                        <div class="col-lg-12">
                            <h2>Start Operation</h2>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Select Dental Defect *</label>
                                <select class="form-control">
                                    <option value="1">Select Dental Defect</option>
                                    <option value="1">Crown Fracture</option>
                                    <option value="1">BDR</option>
                                    <option value="2">G-Caries</option>
                                    <option value="3">Attrision</option>
                                    <option value="4">Calculus</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Treatment *</label>
                                <select class="form-control">
                                    <option value="1">Select Treatment</option>
                                    <option value="1">PF (Permanent Filling)</option>
                                    <option value="2">RCT (Root Canal)</option>
                                    <option value="3">Extraction</option>
                                    <option value="4">Pulpotomy</option>
                                    <option value="5">Apexification</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="nex">Next Appointment ?</label>
                                <input type="datetime-local" class="form-control" name="nex">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" name="description" cols="30" rows="5"
                                          placeholder="Description" style="resize: none"></textarea>
                            </div>
                        </div>

                        <div class="col-lg-6" id="toot">
                            <label for="toot">Choose Tooth</label>
                            <div class="" style="">
                                <ul class="list-group checked-list-box">
                                    <li class="list-group-item"><img src="img/teeths/1.png" width="25px"/></li>
                                    <li class="list-group-item"><img src="img/teeths/2.png" width="25px"/></li>
                                    <li class="list-group-item"><img src="img/teeths/3.png" width="25px"/></li>
                                    <li class="list-group-item"><img src="img/teeths/4.png" width="25px"/></li>
                                    <li class="list-group-item"><img src="img/teeths/5.png" width="25px"/></li>
                                    <li class="list-group-item"><img src="img/teeths/6.png" width="25px"/></li>
                                    <li class="list-group-item"><img src="img/teeths/7.png" width="25px"/></li>
                                    <li class="list-group-item"><img src="img/teeths/8.png" width="25px"/></li>
                                </ul>
                            </div>
                            <div class="" style="">
                                <ul class="list-group checked-list-box">
                                    <li class="list-group-item"><img src="img/teeths/9.png" width="25px"/></li>
                                    <li class="list-group-item"><img src="img/teeths/10.png" width="25px"/></li>
                                    <li class="list-group-item"><img src="img/teeths/11.png" width="25px"/></li>
                                    <li class="list-group-item"><img src="img/teeths/12.png" width="25px"/></li>
                                    <li class="list-group-item"><img src="img/teeths/13.png" width="25px"/></li>
                                    <li class="list-group-item"><img src="img/teeths/14.png" width="25px"/></li>
                                    <li class="list-group-item"><img src="img/teeths/15.png" width="25px"/></li>
                                    <li class="list-group-item"><img src="img/teeths/16.png" width="25px"/></li>
                                </ul>
                            </div>
                            <div class="" style="">
                                <ul class="list-group checked-list-box">
                                    <li class="list-group-item"><img src="img/teeths/17.png" width="25px"/></li>
                                    <li class="list-group-item"><img src="img/teeths/18.png" width="25px"/></li>
                                    <li class="list-group-item"><img src="img/teeths/19.png" width="25px"/></li>
                                    <li class="list-group-item"><img src="img/teeths/20.png" width="25px"/></li>
                                    <li class="list-group-item"><img src="img/teeths/21.png" width="25px"/></li>
                                    <li class="list-group-item"><img src="img/teeths/22.png" width="25px"/></li>
                                    <li class="list-group-item"><img src="img/teeths/23.png" width="25px"/></li>
                                    <li class="list-group-item"><img src="img/teeths/24.png" width="25px"/></li>
                                </ul>
                            </div>
                            <div class="" style="">
                                <ul class="list-group checked-list-box">
                                    <li class="list-group-item"><img src="img/teeths/25.png" width="25px"/></li>
                                    <li class="list-group-item"><img src="img/teeths/26.png" width="25px"/></li>
                                    <li class="list-group-item"><img src="img/teeths/27.png" width="25px"/></li>
                                    <li class="list-group-item"><img src="img/teeths/28.png" width="25px"/></li>
                                    <li class="list-group-item"><img src="img/teeths/29.png" width="25px"/></li>
                                    <li class="list-group-item"><img src="img/teeths/30.png" width="25px"/></li>
                                    <li class="list-group-item"><img src="img/teeths/31.png" width="25px"/></li>
                                    <li class="list-group-item"><img src="img/teeths/32.png" width="25px"/></li>
                                </ul>
                            </div>


                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-5">
                            <button class="btn btn-primary"> Send To Finance&nbsp;<i class="fa fa-save"></i>
                            </button>
                            <a href="patient_history_print" class="btn btn-primary">Print &nbsp;<i
                                        class="fa fa-file-pdf-o"></i></a>

                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
    </div>

@endsection