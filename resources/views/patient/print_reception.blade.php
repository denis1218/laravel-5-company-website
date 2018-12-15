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
                            <h3 style="font-weight: bold;">PATIENT PERSONAL INFORMATION</h3>
                        </div>
                        <div class="col-xs-12" style="margin-top: 20px;">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <tbody>
                                    <tr>
                                        <td><strong>{{trans('file.p_id')}}:</strong></td>
                                        <td>{{$patient->id_patient}}</td>
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
                                        <td><strong>{{trans('file.date')}} Register:</strong></td>
                                        <td>{{$patient->created_at}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                {{-- General Treatment --}}
                @if($patient_income_general != null)
                <div class="row">
                    <div class="col-md-12">
                        <div class="row shadow p-3 mb-5 bg-white rounded"
                             style="background: rgba(145,224,255,0.42); padding-left:20px; border-radius: 50px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);width: 99%;margin-left: 7px;">
                            <h3 style="font-weight: bold">GENERAL TREATMENTS</h3>
                        </div>
                        <div class="col-xs-12" style="margin-top: 20px;">
                            <div class="table-responsive">
                                <table class="table table-stripped table-border">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tooth number</th>
                                        <th>Dental Defect</th>
                                        <th>Treatment</th>
                                        <th>Estimated Fee</th>
                                        <th>Discount Fee</th>
                                        <th>Paid Fee</th>
                                        <th>Date</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1 ;?>
                                        @foreach($patient_income_general as $patient_general)
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td>{{ $patient_general->teeth_number }}</td>
                                                <td>{{ $patient_general->dentaldefect }}</td>
                                                <td>{{ $patient_general->treatment }}</td>
                                                <td>{{ $patient_general->estimated_fee }}</td>
                                                <td>{{ $patient_general->discount }}</td>
                                                <td>{{ $patient_general->paid_amount }}</td>
                                                <td>{{ $patient_general->created_at }}</td>
                                            </tr>
                                            <?php $i++;?>
                                        @endforeach
                                        <tr><td colspan="7"></td></tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>Total Estimated Fee</td>
                                            <td>{{$totalFee = $patient_income_general->sum('estimated_fee')}}</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>Total Discount Fee</td>
                                            <td>{{$totalDiscount = $patient_income_general->sum('discount')}}</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>Total Paid Fee</td>
                                            <td>{{$totalPaid = $patient_income_general->sum('paid_amount')}}</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>Total Remaining Fee</td>
                                            <td style="background-color: #ff958f">{{ $totalFee - $totalDiscount - $totalPaid }}</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                @endif


                {{-- Prosthesis Treatment --}}
                @if($patient_income_prosthesis != null)
                <div class="row">
                    <div class="col-md-12">
                        <div class="row shadow p-3 mb-5 bg-white rounded"
                             style="background: rgba(145,224,255,0.42); padding-left:20px; border-radius: 50px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);width: 99%;margin-left: 7px;">
                            <h3 style="font-weight: bold">PROSTHESIS TREATMENTS</h3>
                        </div>
                        <div class="col-xs-12" style="margin-top: 20px;">
                            <div class="table-responsive">
                                <table class="table table-stripped table-border">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tooth number</th>
                                        <th>Shade</th>
                                        <th>Tooth Cover</th>
                                        <th>Estimated Fee</th>
                                        <th>Discount Fee</th>
                                        <th>Paid Fee</th>
                                        <th>Date</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                        <?php $i = 1 ;?>
                                        @foreach($patient_income_prosthesis as $patient_prosthesis)
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td>{{ $patient_prosthesis->teeth_number }}</td>
                                                <td>{{ $patient_prosthesis->shade }}</td>
                                                <td>{{ $patient_prosthesis->type_cover }}</td>
                                                <td>{{ $patient_prosthesis->estimated_fee }}</td>
                                                <td>{{ $patient_prosthesis->discount }}</td>
                                                <td>{{ $patient_prosthesis->paid_amount }}</td>
                                                <td>{{ $patient_prosthesis->created_at }}</td>
                                            </tr>
                                            <?php $i++;?>
                                        @endforeach
                                        <tr><td colspan="7"></td></tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>Total Estimated Fee</td>
                                            <td>{{$totalFee = $patient_income_prosthesis->sum('estimated_fee')}}</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>Total Discount Fee</td>
                                            <td>{{$totalDiscount = $patient_income_prosthesis->sum('discount')}}</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>Total Paid Fee</td>
                                            <td>{{$totalPaid = $patient_income_prosthesis->sum('paid_amount')}}</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>Total Remaining Fee</td>
                                            <td style="background-color: #ff958f">{{ $totalFee - $totalDiscount - $totalPaid }}</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                @endif


                {{-- X-Ray Report --}}
                @if($patient_income_xray != null)
                <div class="row">

                    <div class="col-md-12">
                        <div class="row shadow p-3 mb-5 bg-white rounded"
                             style="background: rgba(145,224,255,0.42); padding-left:20px; border-radius: 50px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);width: 99%;margin-left: 7px;">
                            <h3 style="font-weight: bold">X-RAY REPORT</h3>
                        </div>
                        <div class="col-xs-12" style="margin-top: 20px;">
                            <div class="table-responsive">
                                <table class="table table-stripped table-border">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tooth number</th>
                                        <th>X-Ray status</th>
                                        <th>Paid Fee</th>
                                        <th>Date</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                        <?php $i = 1 ;?>
                                        @foreach($patient_income_xray as $patient_xray)
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td>{{ $patient_xray->teeth_number }}</td>
                                                <td>{{ $patient_xray->xray_status }}</td>
                                                <td>{{ $patient_xray->paid_amount }}</td>
                                                <td>{{ $patient_xray->created_at }}</td>
                                            </tr>
                                            <?php $i++;?>
                                        @endforeach
                                        <tr><td colspan="7"></td></tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>Total Paid Fee</td>
                                            <td>{{$totalPaid = $patient_income_xray->sum('paid_amount')}}</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                <h4>Powered by : PaypolSoftware.com Ltd</h4>
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
