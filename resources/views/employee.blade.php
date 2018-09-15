@extends('master')


@section('content')

    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Employee Registration </h5>
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
                            <label class="col-sm-2 control-label">Emp-ID</label>
                            <div class="col-md-4"><input type="text" class="form-control" placeholder="Emp-id"></div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Full name</label>
                            <div class="col-md-4"><input type="text" class="form-control" placeholder="Emp-Name"></div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Type of job</label>
                            <div class="col-md-4">
                                <select class="select2_demo_1 form-control" id="job" onchange="disabling()">
                                    <option value="1">Select The Job</option>
                                    <option value="1">Doctor</option>
                                    <option value="2">Nurse</option>
                                    <option value="3">Guard</option>
                                    <option value="4">Cleaner</option>
                                    <option value="5">Cook</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-2 control-label">Grade</label>
                            <div class="col-md-4"><input type="text" class="form-control" id="grade" placeholder="Emp Degree" disabled></div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Working Time</label>
                            <div class="col-md-4">
                                <select class="select2_demo_1 form-control">
                                    <option value="1">Select The working Time</option>
                                    <option value="1">Full Time</option>
                                    <option value="2">Half Day</option>
                                    <option value="3">1 Hour per day</option>
                                    <option value="4">2 Hours per day</option>
                                    <option value="5">3 Hours per day</option>
                                    <option value="6">1 day per week</option>
                                    <option value="7">2 days per week</option>
                                    <option value="8">3 days per week</option>
                                    <option value="9">4 days per week</option>
                                    <option value="11">5 days per week</option>
                                    <option value="1">One week per month</option>
                                    <option value="2">Two weeks per month</option>
                                    <option value="3">Three weeks per month</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Phone</label>
                            <div class="col-md-4"><input type="text" class="form-control" placeholder="Phone number"></div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Departement</label>
                            <div class="col-md-4">
                                <select class="select2_demo_1 form-control" id="dept"disabled>
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
                            <div class="col-sm-2"><div class="i-checks"><label> <input type="checkbox" value="option2" name="a2"> <i></i> Per% <input type="text"class="form-control"placeholder="percentage" style="float: right;"></label></div></div>
                            <div class="col-sm-2"><div class="i-checks"><label> <input type="checkbox" value="option2" name="a2"> <i></i>  Fix </label></div></div>
                            <div class="col-sm-2"><div class="i-checks"><label> <input type="checkbox" value="option2" name="a2"> <i></i>  Monthly</label></div></div>
                            <div class="col-sm-2"><div class="i-checks"><label> <input type="checkbox" value="option2" name="a2"> <i></i>  Daily </label></div></div>
                        </div>

                        <div class="form-group"><label class="col-sm-2 control-label">Salary amount</label>
                            <div class="col-md-4"><input type="number" class="form-control" placeholder="Salary amount"></div>
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
                                        <div class="input-group"><input type="text" placeholder="Search Doctor name" class="input-sm form-control"> <span class="input-group-btn">
                                        <button type="button" class="btn btn-sm btn-primary"> Go!</button> </span></div>
                                    </div>
                                </div><br/>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                                        <thead>
                                        <tr>
                                            <th>Emp-ID</th>
                                            <th>Name</th>
                                            <th>Type of job</th>
                                            <th>Grade</th>
                                            <th>Work Time</th>
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
                                            <td>Doctor</td>
                                            <td>Master</td>
                                            <td>Full time</td>
                                            <td>0745544432</td>
                                            <td class="center">Orthodontist</td>
                                            <td class="center">Male</td>
                                            <td>Fix-Monthly</td>
                                            <td class="center">15000 Afg</td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td>D-435</td>
                                            <td>Dr.Sadiq</td>
                                            <td>Doctor</td>
                                            <td>Master</td>
                                            <td>Two days per week</td>
                                            <td>0746743432</td>
                                            <td class="center">Orthodontist</td>
                                            <td class="center">Male</td>
                                            <td>Per% 75</td>
                                            <td class="center">34000Afg</td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td>N-124</td>
                                            <td>Raziq</td>
                                            <td>Nurse</td>
                                            <td>////</td>
                                            <td>Half Day</td>
                                            <td>0745532132</td>
                                            <td class="center">Endodontist</td>
                                            <td class="center">Male</td>
                                            <td>Fix-Monthly</td>
                                            <td class="center">9000 Afg</td>
                                        </tr>

                                        <tr class="gradeX">
                                            <td>G-624</td>
                                            <td>Akhtar</td>
                                            <td>Guard</td>
                                            <td>////</td>
                                            <td>Full Time</td>
                                            <td>0748573132</td>
                                            <td class="center">General</td>
                                            <td class="center">Male</td>
                                            <td>Fix-Monthly</td>
                                            <td class="center">1000 Afg</td>
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

@endsection

@section('script')
    <script type="text/javascript">
        function disabling(){
            var j=document.getElementById("job").value;
            //Grade specification
            if (j!=1) {
                document.getElementById("grade").disabled=true;
            }else {
                document.getElementById("grade").disabled=false;
            }
            // Department specification
            if (j!=1) {
                document.getElementById("dept").disabled=true;
            }else {
                document.getElementById("dept").disabled=false;
            }
        }
    </script>
@endsection