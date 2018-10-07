@extends('master')
@section('style')
    <style>

        th {
            text-align: center;
        }

    </style>
@stop
@section('content')

    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Doctor Salary</h5>
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
                    <div class="col">
                        <a type="button" class="btn btn-primary" href="/doctors" style="margin-left: 16px;">Go
                            To Doctor List <i class="fa fa-arrow-right"></i> </a>
                        <hr>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover dataTables-example">
                                    <thead>
                                    <tr>
                                        <th>Doctor-ID</th>
                                        <th>Name</th>
                                        <th>Departement</th>
                                        <th>Working time</th>
                                        <th colspan="2">Time Period</th>
                                        <th>Salary type</th>
                                        <th>Salary amount</th>
                                        <th>Paid amount</th>
                                        <th>Remaining</th>
                                        <th>Edit</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="gradeX">
                                        <td>D-434</td>
                                        <td>Dr.Ahmadi</td>
                                        <td class="center">Orthodontist</td>
                                        <td class="center">11:00AM to 3:00PM</td>
                                        <td>01-sep-18</td>
                                        <td>01-oct-18</td>
                                        <td>fix</td>
                                        <td class="center">15000 Afg</td>
                                        <td>15000 Afg</td>
                                        <td>00</td>
                                        <td>
                                            <button class="btn btn-xs btn-primary fa fa-edit" data-toggle="modal"
                                                    data-target="#eprice">&nbsp;Edit
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="gradeX">
                                        <td>D-434</td>
                                        <td>Dr.Jalal</td>
                                        <td class="center">Orthodontist</td>
                                        <td class="center">11:00AM to 3:00PM</td>
                                        <td>01-sep-18</td>
                                        <td>01-oct-18</td>
                                        <td>percentage</td>
                                        <td class="center">14000</td>
                                        <td>12000 Afg</td>
                                        <td>2000</td>
                                        <td>
                                            <button class="btn btn-xs btn-primary fa fa-edit" data-toggle="modal"
                                                    data-target="#eprice">&nbsp;Edit
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="gradeX">
                                        <td>D-434</td>
                                        <td>Dr.Samim</td>
                                        <td class="center">Orthodontist</td>
                                        <td class="center">11:00AM to 3:00PM</td>
                                        <td>01-sep-18</td>
                                        <td>01-oct-18</td>
                                        <td>percentage</td>
                                        <td class="center">11000</td>
                                        <td>11000 Afg</td>
                                        <td>00</td>
                                        <td>
                                            <button class="btn btn-xs btn-primary fa fa-edit" data-toggle="modal"
                                                    data-target="#eprice">&nbsp;Edit
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="gradeX">
                                        <td>D-434</td>
                                        <td>Dr.Tamim</td>
                                        <td class="center">Orthodontist</td>
                                        <td class="center">11:00AM to 3:00PM</td>
                                        <td>01-sep-18</td>
                                        <td>01-oct-18</td>
                                        <td>fix</td>
                                        <td class="center">18000</td>
                                        <td>12000 Afg</td>
                                        <td>6000</td>
                                        <td>
                                            <button class="btn btn-xs btn-primary fa fa-edit" data-toggle="modal"
                                                    data-target="#eprice">&nbsp;Edit
                                            </button>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="modal inmodal" id="eprice" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated fadeIn">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span
                                aria-hidden="true">&times;</span><span
                                class="sr-only">Close</span></button>
                    <i class="fa fa-edit modal-icon text-primary"></i>
                    <h4 class="modal-title">Edit Content</h4>
                    <small>Edit Doctor Information</small>
                </div>
                <div class="modal-body">
                    <div class="row">

                            <div class="form-group">
                                <label for="dr-name">Doctor Name :</label>
                                <input type="text" name="dr-name" class="form-control" placeholder="Doctor Name" value="Dr.Ahmadi">
                            </div>
                        <div class="form-group">
                            <label for="department">Department :</label>
                            <input type="text" name="department" class="form-control" placeholder="Department" value="orthodontist">
                        </div>
                        <div class="form-group">
                            <label for="worktime">Work Time :</label>
                            <input type="text" name="worktime" class="form-control" placeholder="Work Time" value="11:00 AM To 3:00 PM">
                        </div>
                        <div class="form-group">
                            <label for="timeperiod">Time Period :</label>
                            <input type="text" name="timeperiod" class="form-control" placeholder="Time Period" value="01-sep-18 To 01-oct-18">
                        </div>
                        <div class="form-group">
                            <label for="salary_type">Salary Type :</label>
                            <input type="text" name="salary_type" class="form-control" placeholder="Salary Type" value="Fix">
                        </div>
                        <div class="form-group">
                            <label for="salary_amount">Salary Amount :</label>
                            <input type="text" name="salary_amount" class="form-control" placeholder="Salary Amount" value="15000">
                        </div>
                        <div class="form-group">
                            <label for="paid_amount">Paid Amount :</label>
                            <input type="text" name="paid_amount" class="form-control" placeholder="Paid Amount" value="10000">
                        </div>
                        <div class="form-group">
                            <label for="remaining">Remaining :</label>
                            <input type="text" name="remaining" class="form-control" placeholder="Remaining" value="5000">
                        </div>

                    </div>



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>

                </div>
            </div>
        </div>
    </div>
    {{-- show all doctors --}}

@stop