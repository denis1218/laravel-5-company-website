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

            <div class="ibox-content">
                <div class="row">
                    <a href="/create_orthodensy/{{$patient_in_treatment->id}}" class="btn btn-primary"
                       style="margin-left: 30px;">Add New Image</a>
                    <br>
                    <br>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="mytable"
                               style="margin-left:30px;width:95%;">
                            <thead>
                            <th>ID</th>
                            <th>Type Treatment</th>
                            <th>Estimated Fee</th>
                            <th>Discount</th>
                            <th>Paid Amount</th>
                            <th>Remaining Fee</th>
                            <th>Orthodensy Date</th>
                            <th>See Image</th>
                            </thead>

                            <tbody>
                            @foreach($orthodensy_treatment as $treatment)
                                <tr>
                                    <td>{{$treatment->id}}</td>
                                    <td>{{$treatment->treatment->type_treatment}}</td>
                                    <td>{{$treatment->treatment->estimated_fee}}</td>
                                    <td>{{$treatment->treatment->discount}}</td>
                                    <td>{{$treatment->treatment->paid_amount}}</td>
                                    <td>{{$treatment->treatment->remaining_fee}}</td>
                                    <td>{{$treatment->created_at}}</td>
                                    <td>
                                        <button class="btn btn-primary btn-sm" data-toggle="modal"
                                                data-target="#{{$treatment->id}}">See Image
                                        </button>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @foreach($orthodensy_treatment as $treat)
        <div class="modal inmodal" id="{{$treat->id}}" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content animated fadeIn">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span
                                    aria-hidden="true">&times;</span><span
                                    class="sr-only">{{trans('file.close')}}</span></button>
                        <i class="fa fa-edit-o modal-icon text-primary"></i>

                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md 4"></div>
                            <div class="col-md-4 text-center">
                                <img  src="{{asset('/uploads/orthodensy_image/'.$treat->img)}}"
                                     width="500px" height="400px" alt="">
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of model -->
    @endforeach
@endsection