@extends('master')
@section('content')

    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Patient Prescription <i class="fa fa-info"></i></h5>
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
                    <a class="close-link" style="margin-right:20px;">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content" id="divone">
                <div class="container">
                    <div class="row">

                        {{--first doctor--}}

                        <div class="row" style="">
                            <div class="col-sm-5">
                                <div class="input-group">
                                        <span class="input-group-btn">
                                        <button type="button" class="btn btn-sm btn-primary"> Search</button> </span>
                                    <input type="text" placeholder="Search patient name"
                                           class="input-sm form-control">
                                </div>
                            </div>

                        </div>

                        <div class="row" style="margin-top:30px;">
                            <div class="col-sm-11">
                                <table class="table table-hover  no-margins">
                                    <thead>
                                    <tr class="bg-light">
                                        <th>P-ID</th>
                                        <th>Patient Name</th>
                                        <th>Medicine</th>
                                        <th>Pattern</th>
                                        <th>Days</th>
                                        <th>Print</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($prescription as $pres)
                                        <tr>
                                            <td>{{$pres->patient->id_patient}}</td>
                                            <td>{{$pres->patient->name}}</td>
                                            <td>{{$pres->medicine}}</td>
                                            <td>{{$pres->pattern}}</td>
                                            <td>{{$pres->day}}</td>

                                            <td><a class="btn btn-xs btn-primary" href="prescription/{{$pres->id}}"><i
                                                            class="fa fa-print"></i>
                                                    Print</a></td>

                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection