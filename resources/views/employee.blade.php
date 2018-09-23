@extends('master')

@section('style')



@endsection
@section('content')

    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Doctor Registration </h5>
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

                    <form method="get" class="form-horizontal" action="/doctor_report_list">

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Doctor-ID</label>
                            <div class="col-md-4"><input type="text" class="form-control" placeholder="Enter DoctorID" required></div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Full name</label>
                            <div class="col-md-4"><input type="text" class="form-control" placeholder="Enter Name of Doctor" required></div>
                        </div>






                        <div class="form-group">
                            <label class="col-sm-2 control-label">Working Time</label>
                            <div class="col-md-4">
                                <label for=""> From </label><input type="time" class="form-control" style="width: 40%" required> <label for=""> To </label> <input type="time" class="form-control" style="width: 40%">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Phone</label>
                            <div class="col-md-4"><input type="text" class="form-control" placeholder="Phone number" required></div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Departement</label>
                            <div class="col-md-4">
                                <select class="select2_demo_1 form-control" id="dept" required>
                                    <option value="1">Select Department</option>
                                    <option value="1">regular basis</option>
                                    <option value="2">Orthodontist</option>
                                    <option value="3">Oral and maxillofacial surgeon</option>
                                    <option value="4">Periodontist</option>
                                    <option value="5">Prosthodontist</option>
                                    <option value="5">Endodontist</option>
                                    <option value="6">General</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Gender</label>
                            <div class="col-sm-2"><div class="i-checks"><label> <input type="radio" value="option1" name="a" required> <i></i> Male </label></div></div>
                            <div class="col-sm-2"><div class="i-checks"><label> <input type="radio" value="option1" name="a" required> <i></i> Female </label></div></div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Salary Type</label>
                            <div class="col-sm-2"> <div class="input-group" style="display: inline"><div class="i-checks"><label> <input type="radio" value="option2" name="a2" id="per" required> <i></i> Per% </label></div></div></div>
                            <div class="col-sm-2"><div class="i-checks"><label> <input type="radio" value="option2" name="a2"> <i></i>  Fix </label></div></div>
                        </div>

                        <div class="form-group"><label class="col-sm-2 control-label">Salary amount</label>
                            <div class="col-md-4"><input type="text" class="form-control" id="sal" placeholder="Enter amount or percentage of salary"></div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-4 col-sm-offset-2">
                                <button class="btn btn-white" type="submit">Cancel</button>
                                <button class="btn btn-primary" type="submit" href="doctor_report_list">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection

