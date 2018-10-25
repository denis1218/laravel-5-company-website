@extends('master')

@section('style')
    <link href="dashboard/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <link href="dashboard/css/plugins/dataTables/dataTables.responsive.css" rel="stylesheet">
    <link href="dashboard/css/plugins/dataTables/dataTables.tableTools.min.css" rel="stylesheet">

    <link href="dashboard/css/animate.css" rel="stylesheet">
    <link href="dashboard/css/style.css" rel="stylesheet">
    <link href="dashboard/css/plugins/sweetalert/sweetalert.css" rel="stylesheet"/>
    <style media="screen">
        .bts:hover {
            box-shadow: 4px 4px 4px 4px grey;
            transform: scale(1.1);
        }

        .bts {
            height: 70px;
            width: 155px;
        }
    </style>
@endsection

@section('content')




    {{-- show all doctors --}}
    <div class="col-lg-12" >
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
                @include('layout.messages')
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">

                            <div class="ibox-content">
                                <div class="row">
                                    <div class="col">
                                        <a type="button" class="btn btn-primary" href="/doctors2" style="margin-left: 16px;">Go To Doctor Salary <i class="fa fa-arrow-right"></i> </a>
                                        <hr>
                                    </div>
                                </div>
                                    <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                                        <thead>
                                        <tr>
                                            <th>Doctor-ID</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Father Name</th>
                                            <th>Age</th>
                                            <th colspan="2" class="text-center" >Working time</th>
                                            <th>Phone</th>
                                            <th>Departement</th>
                                            <th>Gender</th>
                                            <th>Max patient</th>
                                            <th>Salary type</th>
                                            <th>Salary amount</th>
                                            <th>Report</th>
                                        </tr>
                                        </thead>
                                        @if(count($doctors)>0)
                                        @foreach ($doctors as $doctor)
                                        <tbody>
                                        <tr class="gradeX">
                                        <td>{{$doctor->id}}</td>
                                        <td>{{$doctor->first_name}}</td>
                                        <td>{{$doctor->last_name}}</td>
                                        <td>{{$doctor->father_name}}</td>
                                        <td>{{$doctor->age}}</td>
                                        <td class="center">{{$doctor->start_work_time}}</td>
                                        <td class="center">{{$doctor->end_work_time}}</td>
                                        <td>{{$doctor->phone}}</td>
                                        <td class="center">{{$doctor->department}}</td>
                                        <td>{{$doctor->gender}}</td>
                                        <td>{{$doctor->max_patient}}</td>
                                        <td>{{$doctor->salary_type}}</td>
                                        <td class="center">{{$doctor->salary_amount}}</td>
                                        <td class="center"><a class="btn btn-xs btn-info" href="/doctors/{{$doctor->id}}/edit">PaySalary &nbsp;<i class="fa fa-file-o"></i></a></td>
                                        </tr>
                                        </tbody>
                                         @endforeach
                                        @else
                                        <h1 class="text-center" style="color:red;">No doctor registred yet</h1>
                                        @endif
                                    </table>
                                        {{$doctors->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- show all doctors --}}


@endsection


