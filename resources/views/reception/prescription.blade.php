@extends('master')
@section('content')

    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>{{trans('file.patient_prescription')}} <i class="fa fa-info"></i></h5>

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
                                <div class="table-responsive">
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
                                    @if(count($prescription)>0)

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
                                        @else
                                    <h3 style="color: red;" class="text-center">{{trans('file.there_is_no_pres')}}</h3>
                                    @endif
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

@endsection