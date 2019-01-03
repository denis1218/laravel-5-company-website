@extends('master')
@section('content')
    <div class="col-lg-12">
        <div class="ibox float-e-margins">

            <div class="ibox-content">
                <div class="row">
                    <div class=" m-b-lg m-t-lg">
                        <div class="col-md-3">
                            <div>
                                <h2 class="no-margins font-b">
                                    <strong>{{ $patient_in_treatment->name }}</strong>
                                </h2>
                                <h4>{{trans('file.p_id')}}: {{ $patient_in_treatment->id_patient }}</h4>
                                <small style="font-size: 12px;">
                                            <span class="text-warning" style="font-size: 15px; font-weight: bold;">{{trans('file.health_problem')}}
                                                : </span>
                                    {{ $patient_in_treatment->problem_health }}
                                </small>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="table-responsive">
                                <table class="table small m-b-xs">
                                    <tbody>
                                    <tr>
                                        <td>
                                            {{trans('file.gender')}}:<b>&nbsp;{{ $patient_in_treatment->gender }}</b>&nbsp;<i
                                                    class="fa fa-male"></i>
                                        </td>
                                        <td>
                                            {{trans('file.age')}}:<b>&nbsp;{{ $patient_in_treatment->age }}</b>&nbsp;<i
                                                    class=""></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            {{trans('file.doctor')}}
                                            :<b>&nbsp;{{ $patient_in_treatment->doctor->first_name }}</b>&nbsp;<i
                                                    class="fa fa-user-md"></i>
                                        </td>
                                        <td>
                                            {{trans('file.visited')}}:<b>&nbsp;{{ $patient_in_treatment->status }}</b>&nbsp;<i
                                                    class=""></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            {{trans('file.date')}}:<b>&nbsp;{{ $patient_in_treatment->created_at }}</b>&nbsp;<i
                                                    class="fa fa-calendar"></i>
                                        </td>
                                        <td>
                                            {{trans('file.first_visited_date')}}
                                            :<b>&nbsp;{{ $patient_in_treatment->created_at }}</b>&nbsp;<i
                                                    class="fa fa-calendar"></i>
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
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            {{--<div class="ibox-title">--}}
                {{--<h5>{{trans('file.employee_salary')}}</h5>--}}

            {{--</div>--}}
            <div class="ibox-content">


                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="editable"
                           style="margin-left:30px;width:95%;">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Type Treatment</th>
                            <th>Estimated Fee</th>
                            <th>Paid Amount</th>
                            <th>Discount</th>
                            <th>Remaining Fee</th>
                            <th>Date</th>
                            <th>Paid</th>


                        </tr>
                        </thead>
                        <tbody>
                        @foreach($treatment as $treat)
                            <tr class="gradeX">
                                <td>{{$treat->id}}</td>
                                <td>{{$treat->type_treatment}}</td>

                                <td>{{$treat->estimated_fee}}</td>
                                <td>{{$treat->paid_amount}}</td>
                                <td>{{$treat->discount}}</td>
                                <td>{{$treat->remaining_fee}}</td>
                                <td>{{$treat->created_at}}</td>
                                <td>

                                    <button class="btn btn-xs btn-primary" data-toggle="modal"
                                            data-target="#{{$treat->id}}"><img
                                                src="{{ asset('img/icon_paid.png') }}"
                                                width="20px"/>&nbsp;{{trans('file.paid')}}

                                    </button>
                                </td>

                            </tr>
                        @endforeach
                            <tr>
                                <td><h4>Total Paid Amount : {{$treatment->sum('paid_amount')}}</h4></td>
                            </tr>
                        <tr>
                            <td><h4>Total Remaining Fee : {{$treatment->sum('remaining_fee')}}</h4></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                {{--dddd--}}
                @foreach($treatment as $treat)
                    <div class="modal inmodal" id="{{$treat->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content animated fadeIn">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span
                                                aria-hidden="true">&times;</span><span
                                                class="sr-only">{{trans('file.close')}}</span></button>
                                    <i class="fa fa-edit-o modal-icon text-primary"></i>

                                    <h4 class="modal-title">{{trans('file.fee_payment')}}</h4>

                                    <small>{{trans('file.fill_pa')}}</small>
                                </div>
                                <div class="modal-body">
                                    <form id="form" action="/income/{{$treat->id}}" method="post">
                                        {{method_field('patch')}}
                                        <div class="row">
                                            <div class="form-group"><label
                                                        class="col-md-3 control-label">{{trans('file.estimated_fee')}}
                                                    :</label>
                                                <div class="col-md-6"><h4>{{$treat->estimated_fee}}</h4></div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group"><label
                                                        class="col-md-3 control-label">{{trans('file.remaining_fee')}}
                                                    :</label>

                                                <div class="col-md-6"><h4>{{$treat->remaining_fee}}</h4></div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group"><label
                                                        class="col-md-3 control-label">{{trans('file.paid_amount')}}
                                                    :</label>

                                                <div class="col-sm-6"><input type="number" class="form-control"
                                                                             max="{{$treat->remaining_fee}}"
                                                                             name="paid_amount"
                                                                             placeholder="{{trans('file.paid_amount')}}"
                                                                             required></div>
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        <button type="button" class="btn btn-white pull-right" data-dismiss="modal"
                                                style="margin-bottom: 10px;">{{trans('file.close')}}</button>
                                        <button type="submit" class="btn btn-primary pull-right"
                                                style="margin-bottom: 10px;margin-right: 20px;">{{trans('file.paid')}}</button>

                                    </form>
                                    <br>


                                </div>

                                <div class="modal-footer">


                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end of model -->
                @endforeach

            </div>
        </div>
    </div>


@endsection