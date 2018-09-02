@extends('master')

@section('style')
    <style rel="stylesheet">

    </style>
@endsection

@section('content')
    <div class="row page-wrapper border-bottom white-bg " style="margin-top:-20px;margin-left: 1px; margin-bottom: 20px; padding-bottom: 15px;">
        <div class="row">
            <div class="col-md-5" style="margin-top:15px; margin-left:20px;">
                <h3>Report Patient</h3>
            </div>
        </div>
            <div class="col-md-2">
                <h2><a class="btn" style="height:70px; width:155px; margin-left:15px; background: #f56138" href="/doctor_operations"><i class="fa fa-bookmark"  style="font-size: 30px; color:#ff9f00 ;"></i><br/>Daily</a></h2>
            </div>
            <div class="col-md-2">
                <h2><a class="btn" style="height:70px; width:155px; background: #2f284f" href="#"><img src="img/medicine.png"/> <br/> Weekly</a></h2>
            </div>
            <div class="col-md-2">
                <h2><a class="btn" style="height:70px; width:155px; background: #199b8a" href="#"><i class="fa fa-calendar-o" style="font-size: 30px; color:#ff9f00 ;"></i> <br/>Monthly</a></h2>
            </div>
            <div class="col-md-2">
                <h2><a class="btn" style="height:70px; width:155px;background: #505050" href="#"><i class="fa fa-calendar" style="font-size: 30px; color:#ff9f00 ;"></i> <br/>Date</a></h2>
            </div>
            <div class="col-md-2">
                <h2><a class="btn" style="height:70px; width:155px;background: #e7d450;" href="#"><i class="fa fa-line-chart" style="font-size: 30px; color:#ff9f00 ;"></i> <br/>Trend Graph</a></h2>
            </div>

    </div>
    <div class="row page-wrapper border-bottom white-bg " style="margin-top:-20px;margin-left: 1px; margin-bottom: 20px; padding-bottom: 15px;">
            <div class="col-md-2">
                <h2><a class="btn btn-primary" style="height:70px; width:155px; margin-left:15px;" href="/doctor_operations"><i class="fa fa-bookmark"  style="font-size: 30px; color:#ff9f00 ;"></i><br/>Income</a></h2>
            </div>
            <div class="col-md-2">
                <h2><a class="btn btn-primary" style="height:70px; width:155px" href="#"><img src="img/medicine.png"/> <br/> Expenditure</a></h2>
            </div>
            <div class="col-md-2">
                <h2><a class="btn btn-primary" style="height:70px; width:155px" href="#"><i class="fa fa-calendar-o" style="font-size: 30px; color:#ff9f00 ;"></i> <br/>Patient</a></h2>
            </div>
            <div class="col-md-2">
                <h2><a class="btn btn-primary" style="height:70px; width:155px" href="#"><i class="fa fa-calendar" style="font-size: 30px; color:#ff9f00 ;"></i> <br/>Doctors</a></h2>
            </div>



    </div>


    <div class="col-lg-3">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <span class="label label-success pull-right">To day</span>
                <h5>Income</h5>
            </div>
            <div class="ibox-content">
                <h1 class="no-margins">886,200</h1>
                <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                <small>Total income</small>
            </div>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <span class="label label-info pull-right">Today</span>
                <h5>Patient</h5>
            </div>
            <div class="ibox-content">
                <h1 class="no-margins">275,800</h1>
                <div class="stat-percent font-bold text-info">20% <i class="fa fa-level-up"></i></div>
                <small>New orders</small>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <span class="label label-primary pull-right">Today</span>
                <h5>Doctors</h5>
            </div>
            <div class="ibox-content">
                <h1 class="no-margins">106,120</h1>
                <div class="stat-percent font-bold text-navy">44% <i class="fa fa-level-up"></i></div>
                <small>Doctors</small>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <span class="label label-danger pull-right">Today</span>
                <h5>Appointment</h5>
            </div>
            <div class="ibox-content">
                <h1 class="no-margins">80,600</h1>
                <div class="stat-percent font-bold text-danger">38% <i class="fa fa-level-down"></i></div>
                <small>In first month</small>
            </div>
        </div>
    </div>

    {{-- details of patient  --}}
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

                </div>
            </div>
        </div>
    </div>
    {{-- end of details of patient --}}

    {{-- modal for edit record medicine --}}
    <div class="modal inmodal" id="editMedicine" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content animated fadeIn">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <i class="modal-icon text-primary"><img src="img/medicine.png" width="10%"/></i>
                    <h4 class="modal-title">Edit Bill of Medicine</h4>
                </div>
                <div class="modal-body text-center">
                    <div id="iframetag" >
                        <form role="form" method="get" class="form-horizontal">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Drug Name :</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" placeholder="Drug name" value="Ampicinline">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Drugs per day :</label>
                                <div class="col-sm-8">
                                    <label class="radio-inline"><input type="radio" name="each_day" checked>1</label>
                                    <label class="radio-inline"><input type="radio" name="each_day">2</label>
                                    <label class="radio-inline"><input type="radio" name="each_day">3</label>
                                    <label class="radio-inline"><input type="radio" name="each_day">4</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Each packet tablet :</label>
                                <div class="col-sm-8">
                                    <label class="radio-inline"><input type="radio" name="packet" checked>10</label>
                                    <label class="radio-inline"><input type="radio" name="packet">20</label>
                                    <label class="radio-inline"><input type="radio" name="packet">30</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">For Days :</label>
                                <div class="col-sm-8">
                                    <input type="number" placeholder="For Days" class="form-control" value="3"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Descriptions</label>
                                <div class="col-sm-8">
                                    <textarea class="form-control" placeholder="Write Description about Drug" rows="5">
                                        Avoid eating vegetables and fatty foods and pepper
                                    </textarea>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Save &nbsp;<i class="fa fa-save"></i></button>
                </div>
            </div>
        </div>
    </div>


@endsection


@section('script')

@endsection
