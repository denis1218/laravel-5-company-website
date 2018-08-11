@extends('master')


@section('content')

    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Patient Registration locally </h5>
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

                    <form method="get" class="form-horizontal">

                        <div class="form-group"><label class="col-sm-2 control-label">PID</label>

                            <div class="col-sm-5"><input type="text" disabled="" class="form-control" placeholder="P-332"></div>
                        </div>

                    <div class="form-group"><label class="col-sm-2 control-label">Full name</label>

                        <div class="col-sm-5"><input type="text" class="form-control"></div>
                    </div>



                    <div class="form-group"><label class="col-sm-2 control-label">Phone</label>

                        <div class="col-sm-5"><input type="text" class="form-control"></div>
                    </div>



                    <div class="form-group"><label class="col-sm-2 control-label">Age</label>

                        <div class="col-sm-5"><input type="text" class="form-control"></div>
                    </div>

                        <div class="form-group"><label class="col-sm-2 control-label">Gender</label>

                            <div class="col-sm-1"><div class="i-checks"><label> <input type="radio" value="option1" name="a"> <i></i> Male </label></div></div>
                            <div class="col-sm-1"><div class="i-checks"><label> <input type="radio" value="option1" name="a"> <i></i> Female </label></div></div>
                        </div>



                        <div class="form-group"><label class="col-sm-2 control-label">Address</label>

                            <div class="col-sm-5"><input type="text" class="form-control"></div>
                        </div>



                        <div class="form-group"><label class="col-sm-2 control-label">Appointment</label>
                            <div class="col-sm-2"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                    Check time with doctor
                                </button></div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-4 col-sm-offset-2">
                                <button class="btn btn-white" type="submit">Cancel</button>
                                <button class="btn btn-primary" type="submit">Save</button>
                            </div>
                        </div>
                    </form>


                </div>


            </div>
        </div>
    </div>


    {{-- mode patient get time with doctor--}}
    <div class="modal inmodal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated bounceInRight">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <i class="fa fa-clock-o modal-icon"></i>
                    <h4 class="modal-title">Appointment locally</h4>
                    <small class="font-bold">Take time with doctros is time empty exist.</small>
                </div>
                <div class="modal-body">

                    <div class="form-group"><label>Department</label> <select class="select2_demo_1 form-control">
                            <option value="1">Select Department</option>
                            <option value="1">regular basis</option>
                            <option value="2">Orthodontist</option>
                            <option value="3">Oral and maxillofacial surgeon</option>
                            <option value="4">Periodontist</option>
                            <option value="5">Prosthodontist</option>
                            <option value="5">Endodontist</option>
                        </select></div>
                    <div class="form-group"><label>Doctor</label>
                        <select class="select2_demo_1 form-control">
                            <option value="1">Select Doctor</option>
                            <option value="1">Dr.Ahmad</option>
                            <option value="2">Dr.Jalal</option>
                            <option value="3">Dr.Omid</option>
                            <option value="4">Dr.Mostafa</option>
                            <option value="5">Dr.Hakim</option>
                            <option value="5">Dr.Samim</option>
                        </select>
                    </div>

                    <div class="form-group"><label><span class="text-navy">Empty time today 7:00AM to 8:00PM</span></label>
                        <select class="form-control" multiple="">
                            <option>4:00AM to 5:00AM</option>
                            <option>5:00AM to 6:00AM</option>
                            <option>6:AM to 7:00AM</option>
                            <option>1:00PM to 2:00PM</option>
                        </select>

                    </div>

                    <div class="form-group">
                        <div class="col-md-3">
                            <span><b>Total: 2000 Afg</b></span>
                        </div>
                        <div class="col-md-3">

                            <input type="number" placeholder="Discount" class="form-control">

                        </div>
                        <div class="col-md-3">
                            <lable><b>Total:</b></lable>
                            <lable><b>1500 Afg</b></lable>
                        </div>
                    </div>
                    <br/><br/>
                    <div class="form-group">
                        <label>Payment price</label>
                        <input type="number" placeholder="Price" class="form-control">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    @endsection