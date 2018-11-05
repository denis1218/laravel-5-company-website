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
                                        <th>{{trans('file.advance')}}</th>
                                        <th>{{trans('file.giv_advance')}}</th>
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
                                        <td>{{$d->advance}}</td>
                                        <td>
                                            <button class="btn btn-xs btn-primary fa fa-dollar" data-toggle="modal"
                                                    data-target="#{{$d->id}}">&nbsp;{{trans('file.giv_advance')}}
                                            </button>
                                        </td>
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
            @foreach($doc as $d)
                <!-- edit model -->
                    <div class="modal inmodal" id="{{$d->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content animated fadeIn">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                                                class="sr-only">{{trans('file.close')}}</span></button>
                                    <i class="fa fa-edit modal-icon text-primary"></i>
                                    <small>{{trans('file.fill_pa')}}</small>
                                </div>
                                <div class="modal-body">
                                    <form action="/doctors3/{{$d->id}}" method="post">
                                        {{method_field('patch')}}
                                        {{csrf_field()}}
                                        <div class="row">
                                            <div class="form-group"><label class="col-md-3 control-label">{{trans('file.paid_amount')}}
                                                    :</label>

                                                <div class="col-sm-6"><input type="text" name="advance" class="form-control"
                                                                             placeholder="{{trans('file.paid_amount')}}"></div>
                                            </div>
                                        </div>
                                        <br><br>
                                        <button type="submit" class="btn btn-primary pull-right" style="margin-right: 5px">{{trans('file.save')}}</button>

                                        <button type="button" class="btn btn-white pull-right" data-dismiss="modal" style="margin-right: 5px">{{trans('file.close')}}</button>
                                        <br>

                                    </form>
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
@stop