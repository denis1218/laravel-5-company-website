@extends('master')
@section('content')

    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>{{trans('file.patient_prescription')}} <i class="fa fa-info"></i></h5>
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
                                        <button type="button" class="btn btn-sm btn-primary">{{trans('file.search')}}</button> </span>
                                    <input type="text" placeholder="{{trans('file.search_patient_name')}}"
                                           class="input-sm form-control">
                                </div>
                            </div>

                        </div>

                        <div class="row" style="margin-top:30px;">
                            <div class="col-sm-11">
                                <table class="table table-hover  no-margins">
                                    <thead>
                                    <tr class="bg-light">
                                        <th>{{trans('file.p_id')}}</th>
                                        <th>{{trans('file.patient_name')}}</th>
                                        <th>{{trans('file.medicine')}}</th>
                                        <th>{{trans('file.pattern')}}</th>
                                        <th>{{trans('file.days')}}</th>
                                        <th>{{trans('file.print')}}</th>
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
                                                    {{trans('file.print')}}</a></td>

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