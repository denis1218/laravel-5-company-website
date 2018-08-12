@extends('master')


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

                        <div class="form-group"><label class="col-sm-2 control-label">D-ID</label>

                            <div class="col-md-4"><input type="text" class="form-control" disabled="" placeholder="D-332"></div>
                        </div>

                        <div class="form-group"><label class="col-sm-2 control-label">Full name</label>

                            <div class="col-md-4"><input type="text" class="form-control" placeholder="Name"></div>
                        </div>

                        <div class="form-group"><label class="col-sm-2 control-label">Phone</label>
                            <div class="col-md-4"><input type="text" class="form-control" placeholder="Phone number"></div>
                        </div>

                        <div class="form-group"><label class="col-sm-2 control-label">Departement</label>

                            <div class="col-md-4">

                                    <select class="select2_demo_1 form-control">
                                        <option value="1">Select Department</option>
                                        <option value="1">regular basis</option>
                                        <option value="2">Orthodontist</option>
                                        <option value="3">Oral and maxillofacial surgeon</option>
                                        <option value="4">Periodontist</option>
                                        <option value="5">Prosthodontist</option>
                                        <option value="5">Endodontist</option>
                                    </select>
                                </div>
                        </div>

                        <div class="form-group"><label class="col-sm-2 control-label">Gender</label>

                            <div class="col-sm-1"><div class="i-checks"><label> <input type="radio" value="option1" name="a"> <i></i> Male </label></div></div>
                            <div class="col-sm-1"><div class="i-checks"><label> <input type="radio" value="option1" name="a"> <i></i> Female </label></div></div>
                        </div>

                        <div class="form-group"><label class="col-sm-2 control-label">Salary Type</label>
                            <div class="col-sm-1"><div class="i-checks"><label> <input type="radio" value="option2" name="a2"> <i></i> Per% </label></div></div>
                            <div class="col-sm-1"><div class="i-checks"><label> <input type="radio" value="option2" name="a2"> <i></i>  Fix </label></div></div>
                            <div class="col-sm-1"><div class="i-checks"><label> <input type="radio" value="option2" name="a2"> <i></i>  Mount </label></div></div>
                            <div class="col-sm-1"><div class="i-checks"><label> <input type="radio" value="option2" name="a2"> <i></i>  Day </label></div></div>
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
                <h5>List of Doctors </h5>
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
                                            <th>D-ID</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Departement</th>
                                            <th>Time work</th>
                                            <th>Salary</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="gradeX">
                                            <td>D-434</td>
                                            <td>Dr.Ahmadi</td>
                                            <td>0745544432</td>
                                            <td class="center">Orthodontist</td>
                                            <td class="center">11:00AM to 3:00PM</td>
                                            <td class="center">15000 Afg</td>

                                        </tr>
                                        <tr class="gradeC">
                                            <td>D-422</td>
                                            <td>Dr.Jalal</td>
                                            <td>07755157632</td>
                                            <td class="center">Periodontist</td>
                                            <td class="center">11:00AM to 3:00PM</td>
                                            <td class="center">16000 Afg</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>D-425</td>
                                            <td>Dr.Jalal</td>
                                            <td>0785515532</td>
                                            <td class="center">Periodontist</td>
                                            <td class="center">1:00PM to 3:00AM</td>
                                            <td class="center">18000 Afg</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>D-427</td>
                                            <td>Dr.Tamim</td>
                                            <td>0785666532</td>
                                            <td class="center">Prosthodontist</td>
                                            <td class="center">3:00PM to 3:00AM</td>
                                            <td class="center">12100 Afg</td>
                                        </tr>
                                        <tr class="gradeU">
                                            <td>D-432</td>
                                            <td>Dr.Samim</td>
                                            <td>078555442</td>
                                            <td class="center">Prosthodontist</td>
                                            <td class="center">5:00PM to 4:00AM</td>
                                            <td class="center">24000 Afg</td>
                                        </tr>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>D-IP</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Department</th>
                                            <th>Time work</th>
                                            <th>Grade</th>
                                        </tr>
                                        </tfoot>
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