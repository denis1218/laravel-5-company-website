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

                    <form method="get" class="form-horizontal">

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Doctor-ID</label>
                            <div class="col-md-4"><input type="text" class="form-control" placeholder="Enter DoctorID"></div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Full name</label>
                            <div class="col-md-4"><input type="text" class="form-control" placeholder="Enter Name of Doctor"></div>
                        </div>






                        <div class="form-group">
                            <label class="col-sm-2 control-label">Working Time</label>
                            <div class="col-md-4">
                                <label for=""> From </label><input type="time" class="form-control" style="width: 40%"> <label for=""> To </label> <input type="time" class="form-control" style="width: 40%">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Phone</label>
                            <div class="col-md-4"><input type="text" class="form-control" placeholder="Phone number"></div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Departement</label>
                            <div class="col-md-4">
                                <select class="select2_demo_1 form-control" id="dept">
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
                            <div class="col-sm-2"><div class="i-checks"><label> <input type="radio" value="option1" name="a"> <i></i> Male </label></div></div>
                            <div class="col-sm-2"><div class="i-checks"><label> <input type="radio" value="option1" name="a"> <i></i> Female </label></div></div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Salary Type</label>
                            <div class="col-sm-2"> <div class="input-group" style="display: inline"><div class="i-checks"><label> <input type="radio" value="option2" name="a2" id="per"> <i></i> Per% </label></div></div></div>
                            <div class="col-sm-2"><div class="i-checks"><label> <input type="radio" value="option2" name="a2"> <i></i>  Fix </label></div></div>
                            {{--<div class="col-sm-2"><div class="i-checks"><label> <input type="checkbox" value="option2" name="a2"> <i></i>  Monthly</label></div></div>--}}
                            {{--<div class="col-sm-2"><div class="i-checks"><label> <input type="checkbox" value="option2" name="a2"> <i></i>  Daily </label></div></div>--}}
                        </div>

                        <div class="form-group"><label class="col-sm-2 control-label">Salary amount</label>
                            <div class="col-md-4"><input type="text" class="form-control" id="sal" placeholder="Enter amount or percentage of salary"></div>
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


    {{-- table of doctors --}}
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>List of Employees </h5>
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
                        <div class="ibox float-e-margins">

                            <div class="ibox-content">

                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="input-group"> <span class="input-group-btn"><button type="button" class="btn btn-sm btn-primary"> Go!</button> </span>
                                            <input type="text" placeholder="Search Doctor name" class="input-sm form-control">
                                        </div>
                                    </div>
                                </div><br/>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                                        <thead>
                                        <tr>
                                            <th>Doctor-ID</th>
                                            <th>Name</th>
                                            <th>Working time</th>
                                            <th>Phone</th>
                                            <th>Departement</th>
                                            <th>Gender</th>
                                            <th>Salary type</th>
                                            <th>Salary amount</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="gradeX">
                                            <td>D-434</td>
                                            <td>Dr.Ahmadi</td>
                                            <td>08am-04pm</td>
                                            <td>0745544432</td>
                                            <td class="center">Orthodontist</td>
                                            <td class="center">Male</td>
                                            <td>Fix</td>
                                            <td class="center">15000 Afg</td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td>D-435</td>
                                            <td>Dr.Sadiq</td>
                                            <td>08am-04pm</td>
                                            <td>0745544432</td>
                                            <td class="center">Orthodontist</td>
                                            <td class="center">Male</td>
                                            <td>Fix</td>
                                            <td class="center">15000 Afg</td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td>D-436</td>
                                            <td>Dr.Samim</td>
                                            <td>08am-12pm</td>
                                            <td>0745544432</td>
                                            <td class="center">Orthodontist</td>
                                            <td class="center">Male</td>
                                            <td>percentage</td>
                                            <td class="center">45%</td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td>D-437</td>
                                            <td>Dr.Jalal</td>
                                            <td>12pm-03pm</td>
                                            <td>0745544432</td>
                                            <td class="center">Orthodontist</td>
                                            <td class="center">Male</td>
                                            <td>percentage</td>
                                            <td class="center">32%</td>
                                        </tr>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- table of doctors --}}


@endsection

