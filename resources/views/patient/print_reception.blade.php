@extends('master')
@section('style')
    <style>
        td {
            color: black;
        }
    </style>
@endsection
@section('content')
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <a class="btn btn-md btn-primary" href="{{ URL::previous() }}"><i class="fa fa-arrow-left"></i>&nbsp;Back</a>
                <strong>&nbsp;&nbsp;{{trans('file.patient_information')}} <i class="fa fa-info"></i>
                    <strong/>

                    <div class="ibox-tools">
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#">Config option 1</a>
                            </li>
                            <li><a href="#">Config option 2</a>
                            </li>
                        </ul>
                        <button class="btn btn-primary btn-lg" onclick="PrintElem('divone');">{{trans('file.print')}}
                            &nbsp;<span
                                    class="fa fa-print"></span></button>
                    </div>
            </div>
            <div class="ibox-content" id="divone">

                <div class="row">
                    <div class="col-md-3">
                        <div class="profile-image">
                            <img src="{{asset('img/print_logo.JPG')}}" class="" style="width: 150%;height: auto;">
                        </div>
                    </div>
                    <div class="col-md-7 text-center">
                        <div class="row">
                            <div class="col-sm-12">
                                <h1> Hakim Alikozay Dental Clinic</h1>
                                <br>
                                <h2>{{trans('file.patient_history_file')}}</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 text-left"><h3 style="margin-left: 20px;">
                                    <strong>{{trans('file.doctor_name')}} : Dr.Zabihullah-Hakim Alkozay (DMD)</strong>
                                </h3></div>
                            <div class="col-xs-6 text-right"><h4>{{trans('file.date')}} : {{$patient->created_at}}</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 text-left" style="margin-left: 20px">
                        <h3>Contact : 0786003636 | 0706003636</h3>
                    </div>

                </div>
                <div class="hr-line-solid"></div>
                <br/>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row shadow p-3 mb-5 bg-white rounded"
                             style="background: rgba(145,224,255,0.42); padding-left:20px; border-radius: 50px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);width: 99%;margin-left: 7px;">
                            <h3 style="font-weight: bold">{{trans('file.patient_personal_info')}}</h3>
                        </div>
                        <div class="col-xs-12" style="margin-top: 20px;">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <tbody>
                                    <tr>
                                        <td><strong>{{trans('file.p_id')}}:</strong></td>
                                        <td>{{$patient->id}}</td>
                                        <td><strong>{{trans('file.patient_name')}}:</strong></td>
                                        <td>{{$patient->name}}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>{{trans('file.age')}} :</strong></td>
                                        <td>{{$patient->age}}</td>
                                        <td><strong>{{trans('file.gender')}} :</strong></td>
                                        <td>{{$patient->gender}}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>{{trans('file.address')}}:</strong></td>
                                        <td>{{$patient->address}}</td>
                                        <td><strong>{{trans('file.phone')}} :</strong></td>
                                        <td>{{$patient->phone}}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>{{trans('file.health_problem')}}:</strong></td>
                                        <td>{{$patient->problem_health}}</td>
                                        <td><strong>{{trans('file.date')}}:</strong></td>
                                        <td>{{$patient->created_at}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row shadow p-3 mb-5 bg-white rounded"
                             style="background: rgba(145,224,255,0.42); padding-left:20px; border-radius: 50px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);width: 99%;margin-left: 7px;">
                            <h3 style="font-weight: bold">{{trans('file.kind_of_prosthesis')}}</h3>
                        </div>
                        <div class="col-xs-12" style="margin-top: 20px;">
                            <div class="table-responsive">
                                <table class="table table-stripped">
                                    <tbody>
                                    <tr>
                                        <td><b>{{trans('file.dental_defect')}}:</b></td>
                                        @if($patient_income != null)
                                            @foreach($patient_income as $patient)
                                                <td>{{$patient->dentaldefect}}</td>
                                            @endforeach
                                        @endif
                                    </tr>
                                    <tr>
                                        <td><strong>{{trans('file.dental_treatment')}}:</strong></td>
                                        @if($patient_income != null)
                                            @foreach($patient_income as $patient)
                                                <td>{{$patient->treatment}}</td>
                                            @endforeach
                                        @endif
                                    </tr>

                                    <tr>
                                        <td><strong>{{trans('file.teeth_number')}}:</strong></td>
                                        @if($patient_income != null)
                                            @foreach($patient_income as $patient)
                                                <td>{{$patient->teeth_number}}</td>
                                            @endforeach
                                        @endif
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row shadow p-3 mb-5 bg-white rounded"
                             style="background: rgba(145,224,255,0.42); padding-left:20px; border-radius: 50px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);width: 99%;margin-left: 7px;">
                            <h3 style="font-weight: bold">{{trans('file.payment_info')}}</h3>
                        </div>
                        <div class="col-xs-2" style="margin-top: 20px;">
                                <table class="table table-hover">
                                    <tr>
                                        <td>{{trans('file.total')}} :</td>
                                        <td>{{$patient_income->sum('paid_amount')}}</td>
                                    </tr>
                                </table>
                        </div>
                    </div>
                    <br/>
                    <br/>

                    <div class="row" style="margin-left: 40px;margin-top: 90px;">
                        <h3>{{trans('file.doctor_signature')}}: </h3>

                    </div>
                    <div class="row" style="margin-top: 160px;">
                        <div class="col-xs-12">
                            <h4><strong>Powered By : PaypolSoftware.com</strong></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        function PrintElem(el) {
            var page = document.body.innerHTML;
            var content = document.getElementById(el).innerHTML;
            document.body.innerHTML = content;
            window.print();
            document.body.innerHTML = page;
        }
    </script>
@endsection
