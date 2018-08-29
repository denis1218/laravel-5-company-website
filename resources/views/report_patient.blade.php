@extends('master')

@section('style')
    <style rel="stylesheet">

    </style>
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
