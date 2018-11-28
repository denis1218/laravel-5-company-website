@extends('master')


@section('style')

    <style>
        .list-ul {
            list-style-type: none;
            margin: 10px;
            padding: 10px;
            overflow: hidden;
        }

        .list-ul li {
            float: left;
            margin-left: 15px;
        }
    </style>

@endsection

@section('content')
    {{-- Top Card area --}}
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <span class="label label-info pull-right">{{trans('file.logged_in')}}</span>
                    <h5>{{trans('file.user')}}</h5>
                </div>
                <div class="ibox-content">
                    <h2 class="no-margins">

                        {{trans('file.welcome')}} {{ Auth::user()->firstname }}</h2>
                    <div class="stat-percent font-bold text-danger"></div>
                    <small>{{ Auth::user()->department }}</small>

                </div>
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <span class="label label-info pull-right">{{trans('file.all')}}</span>
                    <h5>{{trans('file.patient')}}</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">{{$patient}}<img src="img/patient.png" width="45px;" style="float: right;"/>
                    </h1>
                    <small>{{trans('file.apc')}}</small>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <span class="label label-primary pull-right">{{trans('file.all')}}</span>
                    <h5>{{trans('file.doctors')}}</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">{{$doctor}}<img src="img/doctors.png" width="60px;" style="float: right;"/>
                    </h1>
                    <div class="stat-percent font-bold text-navy"></div>
                    <small>{{trans('file.tda')}}</small>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <span class="label label-danger pull-right">{{trans('file.today')}}</span>
                    <h5>{{trans('file.appointment_patient')}}</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">{{count($apatient)}}<img src="img/appintmentincon.png" width="60px;"
                                                                    style="float: right;"/></h1>
                    <div class="stat-percent font-bold text-danger"></div>
                    <small>{{trans('file.total_appointment')}}
                        <br>
                    </small>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <span class="label pull-right" style="background-color: #c39200; color: #ffffff">{{trans('file.this_month')}}</span>
                    <h5>{{trans('file.total_expenses')}}</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">{{ $total_expense }}<img src="img/expense_icon.png" width="60px;"
                                                                    style="float: right;"/></h1>
                    <div class="stat-percent font-bold text-danger"></div>
                    <small>{{trans('file.total_expenses')}}
                        <br>
                    </small>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <span class="label pull-right" style="background-color: #077700; color: #ffffff;">{{trans('file.this_month')}}</span>
                    <h5>{{trans('file.total_incomes')}}</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">{{ $total_income }}<img src="img/income_icon.png" width="60px;"
                                                                    style="float: right;"/></h1>
                    <div class="stat-percent font-bold text-danger"></div>
                    <small>{{trans('file.total_incomes')}}
                        <br>
                    </small>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <span class="label pull-right" style="background-color: #080077;color: #fff3cd">{{trans('file.this_month')}}</span>
                    <h5>{{trans('file.total_profit')}}</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">{{ $profit  }}<img src="img/profit_icon_dash.png" width="50px;"
                                                                    style="float: right;"/></h1>
                    <div class="stat-percent font-bold text-danger"></div>
                    <small>{{trans('file.total_profit')}}
                        <br>
                    </small>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <span class="label  pull-right" style="background-color: #0b8600;color: #ffffff">{{trans('file.now')}}</span>
                    <h5>{{trans('file.capital')}}</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">{{ $profit }}<img src="img/capital_icon.png" width="60px;"
                                                                    style="float: right;"/></h1>
                    <div class="stat-percent font-bold text-danger"></div>
                    <small>{{trans('file.capital')}}
                        <br>
                    </small>
                </div>
            </div>
        </div>
    </div>


    {{-- End of Card area --}}




    {{-- Dash graph area --}}
    <div class="wrapper wrapper-content">
        <div class="container">

            <div class="row">
                {{-- Graph Area --}}
                <div class="col-md-2 col-xs-3">
                    <button class="btn btn-primary dim dim-large-dim"><a href="/income"><img
                                    src="img/income_icon_dash.png" width="150px;" style="border-radius: 8px;"/></a>
                    </button>
                </div>
                <div class="col-md-2 col-xs-3" style="margin-left:30px;">
                    <button class="btn btn-primary dim dim-large-dim"><a href="/expenditure"><img
                                    src="img/expense_icon_dash.png" width="150px;" style="border-radius: 8px;"/></a>
                    </button>
                </div>
                <div class="col-md-2 col-xs-3" style="margin-left:30px;">
                    <button class="btn btn-primary dim dim-large-dim"><a href="/doctors"><img
                                    src="img/doctor_icon_dash.png" width="150px;"
                                    style="  border-radius: 8px;height: 60px;"/></a></button>
                </div>

                <div class="col-md-2 col-xs-3" style="margin-left:30px;">
                    <button class="btn btn-primary dim dim-large-dim"><a href="/finance_report_income"><img
                                    src="img/report_icon_dash.png" width="150px;"
                                    style="border-radius: 8px;height: 60px"/></a></button>
                </div>
                <div class="col-md-2 col-xs-3" style="margin-left:30px;">
                    <button class="btn btn-primary dim dim-large-dim"><a href="/patient"><img
                                    src="img/patientBigIcon.png" width="150px;"
                                    style="border-radius: 8px;height: 60px"/></a></button>
                </div>


                {{-- End Graph--}}
                <div class="col-lg-4">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>{{trans('file.qee')}}</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">

                            <form id="form" action="/expenditure3" method="post">

                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col">
                                        <input type="text" name="receiver" class="form-control" maxlength="20"
                                               style="width:100%" placeholder="{{trans('file.money_receiver')}}"
                                               required=""><br>
                                        <input type="number" name="amount" class="form-control" style="width:100%"
                                               placeholder="{{trans('file.paid_amount')}}" required=""><br>

                                        <select class="form-control" name="category" style="width:100%" required>
                                            <option disabled selected>{{trans('file.select_category')}}</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->category}}">{{$category->category}}</option>
                                            @endforeach
                                        </select><br>


                                        <textarea name="msg" id="" placeholder="{{trans('file.eym')}}"
                                                  class="form-control" style="resize: none;" required></textarea><br>
                                        <button type="submit" value="Pay" class="btn btn-primary">{{trans('file.save')}}
                                            &nbsp;<i class="fa fa-save"></i></button>
                                        <button class="btn btn-default" type="reset">{{trans('file.reset')}} &nbsp;<i
                                                    class="fa fa-arrow-circle-down"></i></button>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                {{--quick appointment--}}
                <div class="col-lg-4">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>{{trans('file.quick_appointment')}}</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">

                            <form id="form" action="/patient/storeFromDash" method="post">

                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col">
                                        <select name="doctor_id" id="" required class="form-control">
                                            <option value="">Select Doctor</option>
                                            @foreach($doct as $d)
                                                <option value="{{$d->id}}">{{$d->first_name}}</option>
                                            @endforeach
                                        </select>
                                        <br>
                                        <input type="text" name="firstname" class="form-control" maxlength="20"
                                               style="width:100%" placeholder="{{trans('file.first_name')}}"
                                               required=""><br>
                                        <input type="text" name="lastname" class="form-control" style="width:100%"
                                               placeholder="{{trans('file.last_name')}}" required=""><br>
                                        <input type="number" name="phone" class="form-control" style="width:100%"
                                               placeholder="{{trans('file.phone')}}" required=""><br>
                                        <input type="date" name="date" class="form-control" style="width:100%"
                                               placeholder="{{trans('file.date')}}" required=""><br>
                                        <input type="number" name="time" class="form-control" style="width:100%"
                                               placeholder="{{trans('file.clock')}}" required=""><br>
                                        <ul class="list-ul">
                                            <li><label>Meridiem : </label></li>
                                            <li>
                                                <div class="i-checks"><label>AM: <input name="meridiem" type="radio" checked
                                                                                          value="AM" checked
                                                                                          class="form-control required"></label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="i-checks"><label>PM :<input name="meridiem" type="radio"
                                                                                            value="PM"
                                                                                            class="form-control required"></label>
                                                </div>
                                            </li>
                                        </ul>


                                        <button type="submit" value="Pay" class="btn btn-primary">{{trans('file.save')}}
                                            &nbsp;<i class="fa fa-save"></i></button>
                                        <button class="btn btn-default" type="reset">{{trans('file.reset')}} &nbsp;<i
                                                    class="fa fa-arrow-circle-down"></i></button>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Graph area --}}

@endsection


@section('script')

    <script src="{{ asset('dashboard/js/plugins/iCheck/icheck.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/plugins/toastr/toastr.min.js') }}"></script>

    <script>


        $(document).ready(function () {
            $('.demo_connection').click(function () {
                swal({
                        title: "Inserted!",
                        text: "Your Row Has Been Inserted.",
                        type: "success",
                        timer: 5000
                    },
                    function () {
                        location.reload(true);
                        tr.hide();
                    });
            });
        });



    </script>

    <script type="text/javascript">
        $(function () {
            $('#form').submit(function () {
                // Display a success toast, with a title
                toastr.info('Successfully Inserted !');
            });
        });
    </script>

@endsection








