@extends('master')

@section('style')
    <!-- Data Tables -->


@endsection

@section('content')

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>{{trans('file.expense')}}</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li>
                                    <a href="#">Config option 1</a>
                                </li>
                                <li>
                                    <a href="#">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                    @if(isset($success))
                    <div class="alert alert-success  alert-dismissible">
                    {{$success}}
                    </div>
                    @endif
                    <!-- form -->
                        <div class="row">
                            <div class="col-lg-5">
                                <form method="post" action="/expenditure">
                                    {{csrf_field()}}

                                    <div class="form-group">
                                        <label>{{trans('file.to_whom')}}</label>
                                        <div><input type="text" name="receiver" class="form-control" placeholder="{{trans('file.to_whom')}}"></div>
                                    </div>

                                    <div class="form-group">
                                        <label>{{trans('file.paid_amount')}}</label>
                                        <div><input type="text" name="amount" class="form-control" placeholder="{{trans('file.paid_amount')}}"></div>
                                    </div>

                                    <div class="form-group">
                                        <label>{{trans('file.category')}}</label>
                                        <div>
                                            <select class="select2_demo_1 form-control" name="category">
                                                <option value="" selected disabled>{{trans('file.select_category')}}</option>
                                                @foreach($expenseCategory as $categories)
                                                    <option value="{{ $categories->category }}">{{ $categories->category }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label>{{trans('file.description')}}</label>
                                        <div><textarea class="form-control" name="description" id="grade"
                                                       placeholder="{{trans('file.description')}}"
                                                       style="resize:none;"></textarea></div>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-group">
                                            <button class="btn btn-primary" type="submit">{{trans('file.save')}}</button>
                                            <button class="btn btn-white" type="reset">{{trans('file.reset')}}</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-3"></div>
                            <div class="col-lg-4" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <span class="label label-info pull-right">{{trans('file.all')}}</span>
                                        <h5>{{trans('file.total_expense')}}</h5>
                                    </div>
                                    <div class="ibox-content">

                                        <h1 class="no-margins">{{$capital}}&nbsp;&nbsp;{{trans('file.afg')}}<img  src="{{ asset('img/expense_icon.png') }}" width="80px;"style="float: right;"/></h1>
                                        <small>{{trans('file.expenses')}}</small>

                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection