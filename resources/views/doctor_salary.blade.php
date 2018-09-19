@extends('master')
@section('style')
    <style>

        th{
            text-align: center;
        }

    </style>
@stop
@section('content')

    <div class="col-lg-12" >
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
                        <a type="button" class="btn btn-primary" href="doctor_report_list" style="margin-left: 16px;">Go To Doctor List <i class="fa fa-arrow-right"></i> </a>
                        <hr>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                                        <thead>
                                        <tr>
                                            <th>Doctor-ID</th>
                                            <th>Name</th>
                                            <th>Departement</th>
                                            <th>Working time</th>
                                            <th colspan="2">Time Period </th>
                                            <th>Salary type</th>
                                            <th>Salary amount</th>
                                            <th>Paid amount</th>
                                            <th>Remaining</th>
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
    {{-- show all doctors --}}

@stop