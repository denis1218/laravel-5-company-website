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
                        {{-- search --}}
                        <div class="row" style="">
                            <div class="col-sm-12 col-xs-12">
                                <div class="input-group">
                                        <span class="input-group-btn">
                                        <button type="button" class="btn btn-sm btn-primary">{{trans('file.search')}}</button> </span>
                                    <input type="text" placeholder="{{trans('file.search_patient_name')}}"
                                           class="input-sm form-control">
                                </div>
                            </div>

                        </div>

                        <div class="row" style="margin-top:30px;">
                            <div class="col-sm-10">
                                <div class="table-responsive">
                                <table class="table table-hover  no-margins">
                                    <thead>
                                    <tr class="bg-light">
                                        <th>{{trans('file.id')}}</th>
                                        <th>{{trans('file.p_id')}}</th>
                                        <th>{{trans('file.name')}}</th>
                                        <th>{{trans('file.last_name')}}</th>
                                        <th>{{trans('file.add_prescription')}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(count($patient)>0)

                                    @foreach($patient as $pat)
                                        <tr>
                                            <td>{{$pat->id}}</td>
                                            <td>{{$pat->id_patient}}</td>
                                            <td>{{$pat->name}}</td>
                                            <td>{{$pat->lastname}}</td>

                                            <td><a class="btn btn-xs btn-primary" href="/prescription/{{$pat->id}}"><i
                                                            class="fa fa-plus"></i>
                                                    {{trans('file.add_prescription')}}</a></td>

                                        </tr>
                                    @endforeach
                                        @else
                                    <h3 style="color: red;" class="text-center">{{trans('file.there_is_no')}}</h3>
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