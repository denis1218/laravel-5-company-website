@extends('master')

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-3">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">

                        <h5>{{trans('file.total_paid_amount')}}</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins">{{$total}}</h1>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">

                        <h5>{{trans('file.this_month_paid')}}</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins">
                            @if(isset($emp))
                                {{$emp->sum('paid_amount')}}
                            @endif
                            @if(isset($pay))
                                {{$pay->sum('paid_amount')}}
                            @endif
                        </h1>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">

                        <h5>{{trans('file.remaining')}}</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins">
                            @if(isset($emp))
                                {{$doctor->salary_amount - $emp->sum('paid_amount')}}
                            @endif
                            @if(isset($pay))
                                {{$doctor->salary_amount - $pay->sum('paid_amount')}}
                            @endif
                        </h1>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">

                        <h5>{{trans('file.salary')}}</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins">{{$doctor->salary_amount}}</h1>
                    </div>
                </div>
            </div>


            {{-- main content of doctor salary --}}
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>{{trans('file.doctor_salary')}}</h5>

                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-sm-6">
                                <button data-toggle="modal" data-target="#edit" class="btn btn-primary fa fa-dollar"
                                        style="margin-left:30px">&nbsp;&nbsp;{{trans('file.pay_salary')}}</button>
                            </div>
                            <div class="col-xs-6 text-right">
                                <a href="/doctors" class="btn btn-primary fa fa-arrow-circle-left">&nbsp;&nbsp;{{trans('file.back')}}</a>
                            </div>
                        </div>


                        <div class="hr-line-dashed"></div>
                        <form action="/dr_salary1" method="post">
                            {{csrf_field()}}
                            <div class="row" style="margin-left: 20px;">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="font-noraml">{{trans('file.select_range')}}</label>
                                        <div class="input-daterange input-group" id="">
                                            <span class="input-group-addon">{{trans('file.from')}} &nbsp;<i
                                                        class="fa fa-arrow-right"></i></span>
                                            <input type="date" class="input-sm form-control" name="start" required>
                                            <span class="input-group-addon">{{trans('file.to')}} &nbsp;<i
                                                        class="fa fa-arrow-right"></i></span>
                                            <input type="date" class="input-sm form-control" name="end" required="">
                                            <input type="hidden" name="doc_id" value="{{$id}}">

                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <button class="btn btn-sm btn-primary" type="submit"
                                            style="margin-top:23px; margin-left: 10px;"><i class="fa fa-tag"
                                                                                           style=" color:#ffe118 ;"></i>
                                        &nbsp;{{trans('file.show_payment_indaterange')}}
                                    </button>

                                </div>
                            </div>
                        </form>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="editable"
                                   style="margin-left:30px;width:95%;">
                                <thead>
                                <tr>
                                    <th>{{trans('file.id')}}</th>
                                    <th>{{trans('file.first_name')}}</th>
                                    <th>{{trans('file.last_name')}}</th>
                                    <th>{{trans('file.department')}}</th>
                                    <th>{{trans('file.salary')}}</th>
                                    <th>{{trans('file.paid_amount')}}</th>
                                    <th colspan="2" style="text-align: center">{{trans('file.bdate')}}</th>
                                    <th>{{trans('file.pdate')}}</th>

                                </tr>
                                </thead>
                                <tbody>
                                @if(isset($emp))
                                    @foreach($emp as $em)
                                        <tr>
                                            <td>{{$em->id}}</td>
                                            <td>{{$em->doctor->first_name}}</td>
                                            <td>{{$em->doctor->last_name}}</td>
                                            <td>{{$em->doctor->department}}</td>
                                            <td>{{$em->doctor->salary_amount}}</td>
                                            <td>{{$em->paid_amount}}</td>
                                            <td>{{$em->start}}</td>
                                            <td>{{$em->end}}</td>
                                            <td>{{$em->date}}</td>
                                        </tr>
                                    @endforeach
                                @endif
                                @if(isset($pay))
                                    @foreach($pay as $p)
                                        <tr>
                                            <td>{{$p->id}}</td>
                                            <td>{{$p->doctor->first_name}}</td>
                                            <td>{{$p->doctor->last_name}}</td>
                                            <td>{{$p->doctor->department}}</td>
                                            <td>{{$p->doctor->salary_amount}}</td>
                                            <td>{{$p->paid_amount}}</td>
                                            <td>{{$p->start}}</td>
                                            <td>{{$p->end}}</td>
                                            <td>{{$p->date}}</td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>
                        {{--dddd--}}


                    </div>
                </div>
            </div>
        </div>

        <div class="modal inmodal" id="edit" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content animated fadeIn">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                                    class="sr-only">Close</span></button>
                        <i class="fa fa-edit modal-icon text-primary"></i>
                        <h4 class="modal-title">{{trans('file.edit_content')}}</h4>
                    </div>
                    @if(isset($emp))
                        <form action="/dr_salary2" method="post">
                            {{csrf_field()}}
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">

                                            <div class="col-md-4"><label for="">{{trans('file.salary')}}</label></div>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" name="salary"
                                                       value="{{$doctor->salary_amount}}" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group" style="margin-top: 50px;">

                                            <div class="col-md-4"><label for="">{{trans('file.remaining')}}</label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" name="salary"
                                                       value="{{$doctor->salary_amount - $emp->sum('paid_amount')}}"
                                                       readonly>

                                            </div>
                                        </div>
                                        <div class="form-group" style="margin-top: 100px;">

                                            <div class="col-md-4"><label
                                                        for="">{{trans('file.paid_amount_this_month')}}</label></div>
                                            <div class="col-md-8">

                                                <input type="text" class="form-control" name="salary"
                                                       value="{{$emp->sum('paid_amount')}}" readonly>

                                            </div>
                                        </div>
                                        <div class="form-group" style="margin-top: 150px;">

                                            <div class="col-md-4"><label for="">{{trans('file.pay_salary')}}</label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="number" class="form-control" name="paid_amount"
                                                       max="{{$doctor->salary_amount - $emp->sum('paid_amount')}}" required>
                                            </div>
                                            <input type="hidden" name="doc_id" value="{{$id}}">
                                            <input type="hidden" name="start" value="{{$start}}">
                                            <input type="hidden" name="end" value="{{$end}}">
                                        </div>
                                    </div>


                                    <br>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-white pull-right" data-dismiss="modal"
                                            style="margin-bottom: 10px;">{{trans('file.close')}}
                                    </button>
                                    <button type="submit" class="btn btn-primary pull-right"
                                            style="margin-bottom: 10px;margin-right: 20px;">{{trans('file.pay_salary')}}
                                    </button>
                                </div>
                            </div>
                        </form>

                    @elseif(isset($pay))
                        <form action="/dr_salary3" method="post">
                            {{csrf_field()}}
                            <div class="modal-body">


                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">

                                            <div class="col-md-4"><label for="">{{trans('file.salary')}}</label></div>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" name="salary"
                                                       value="{{$doctor->salary_amount}}" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group" style="margin-top: 50px;">

                                            <div class="col-md-4"><label for="">{{trans('file.remaining')}}</label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" name="salary"
                                                       value="{{$doctor->salary_amount - $pay->sum('paid_amount')}}"
                                                       readonly>

                                            </div>
                                        </div>
                                        <div class="form-group" style="margin-top: 100px;">

                                            <div class="col-md-4"><label
                                                        for="">{{trans('file.paid_amount_this_month')}}</label></div>
                                            <div class="col-md-8">

                                                <input type="text" class="form-control" name="salary"
                                                       value="{{$pay->sum('paid_amount')}}" readonly>

                                            </div>
                                        </div>
                                        <div class="form-group" style="margin-top: 150px;">

                                            <div class="col-md-4"><label for="">{{trans('file.pay_salary')}}</label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="number" class="form-control" name="paid_amount"
                                                       max="{{$doctor->salary_amount - $pay->sum('paid_amount')}}" required>
                                            </div>
                                            <input type="hidden" name="doc_id" value="{{$id}}">
                                            <input type="hidden" name="start" value="{{$startt}}">
                                            <input type="hidden" name="end" value="{{$endd}}">
                                        </div>
                                    </div>


                                    <br>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-white pull-right" data-dismiss="modal"
                                            style="margin-bottom: 10px;">{{trans('file.close')}}
                                    </button>
                                    <button type="submit" class="btn btn-primary pull-right"
                                            style="margin-bottom: 10px;margin-right: 20px;">{{trans('file.pay_salary')}}
                                    </button>
                                </div>
                            </div>
                        </form>
                    @endif
                </div>
            </div>
        </div>
        <!-- end of model -->
@endsection