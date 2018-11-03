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
                <h5>{{trans('file.doctor_salary')}}</h5>
            </div>
            <div class="ibox-content">

                <div class="row">
                    <div class="col">
                        <a type="button" class="btn btn-primary" href="/doctors" style="margin-left: 16px;">{{trans('file.goto_dl')}}&nbsp;&nbsp;<i class="fa fa-arrow-right"></i></a>
                        <hr>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover dataTables-example">
                                    <thead>
                                    <tr style="color:black;">
                                        <th>{{trans('file.id')}}</th>
                                        <th>{{trans('file.doctor_name')}}</th>
                                        <th>{{trans('file.department')}}</th>
                                        <th colspan="2">{{trans('file.time_period')}}</th>
                                        <th>{{trans('file.salary_type')}}</th>
                                        <th>{{trans('file.salary_amount')}}</th>
                                        <th>{{trans('file.paid_amount')}}</th>
                                        <th>{{trans('file.remaining')}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($doc as $d)
                                    <tr class="gradeX">
                                        <td>{{$d->id}}</td>
                                        <td>{{$d->first_name}}</td>
                                        <td>{{$d->department}}</td>
                                        <td>{{$d->from}}</td>
                                        <td>{{$d->to}}</td>
                                        <td>{{$d->salary_type}}</td>
                                        <td>{{$d->salary_amount}}</td>
                                        <td>{{$d->paid}}</td>
                                        <td>{{$d->remaining}}</td>
                                    </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{$doc->links()}}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop