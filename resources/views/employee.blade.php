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

                    <form method="post" class="form-horizontal" action="/doctors">
                        {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"> --}}
                        <div class="form-group">
                            <label class="col-sm-2 control-label">First name</label>
                            <div class="col-md-4"><input type="text" class="form-control" name="first_name" placeholder="Doctor's firstname" required></div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Last name</label>
                            <div class="col-md-4"><input type="text" class="form-control" name="last_name" placeholder="Doctor's last name" required></div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Father name</label>
                            <div class="col-md-4"><input type="text" class="form-control" name="father_name" placeholder="Doctor's father name" required></div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Age</label>
                            <div class="col-md-4"><input type="number" class="form-control" name="age" placeholder="Doctor's age" ></div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Working Time</label>
                            <div class="col-md-4">
                                <label for=""> From </label><input type="time" class="form-control" name="start_work_time" style="width: 40%" required>
                                <label for=""> To </label> <input type="time" class="form-control" name="end_work_time" style="width: 40%">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Phone</label>
                            <div class="col-md-4"><input type="text" class="form-control" name="phone" placeholder="Doctor's Phone number" required></div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Departement</label>
                            <div class="col-md-4">
                                <select class="select2_demo_1 form-control" id="dept" name="dept_id" required>
                                    <option value="0">Select Department</option>
                                    <option value="regular basis">regular basis</option>
                                    <option value="Orthodontist">Orthodontist</option>
                                    <option value="Oral and maxillofacial surgeon">Oral and maxillofacial surgeon</option>
                                    <option value="Periodontist">Periodontist</option>
                                    <option value="Prosthodontist">Prosthodontist</option>
                                    <option value="Endodontist">Endodontist</option>
                                    <option value="General">General</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group"><label class="col-sm-2 control-label">Max Patient can visits</label>
                            <div class="col-md-4"><input type="number" class="form-control" name="max_patient"  placeholder="Enter Maximum patient can visits"></div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Gender</label>
                            <div class="col-sm-2"><div class="i-checks"><label> <input type="radio" value="Male" name="gender" required> <i></i> Male </label></div></div>
                            <div class="col-sm-2"><div class="i-checks"><label> <input type="radio" value="Female" name="gender" required> <i></i> Female </label></div></div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Salary Type</label>
                            <div class="col-sm-2"> <div class="input-group" style="display: inline">
                                <div class="i-checks"><label>
                                     <input type="radio" name="salary_type" value="percentage" name="a2" id="per" required> <i></i> Per% </label></div></div></div>
                            <div class="col-sm-2"><div class="i-checks">
                                <label> <input type="radio" name="salary_type" value="fix" name="a2"> <i></i>  Fix </label></div></div>
                        </div>

                        <div class="form-group"><label class="col-sm-2 control-label">Salary amount</label>
                            <div class="col-md-4"><input type="text" class="form-control" name="salary_amount" id="sal" placeholder="Enter amount or percentage of salary"></div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-4 col-sm-offset-2">
                                <button class="btn btn-white" type='reset'>Cancel</button>
                                <button class="btn btn-primary" type="submit"  name="submit" value="Save">Save</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection

