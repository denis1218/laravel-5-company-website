@extends('master')
@section('content')

    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <a class="btn btn-md btn-primary" href="{{ URL::previous() }}"><i class="fa fa-arrow-left"></i>&nbsp;Back</a>
                <strong>&nbsp;&nbsp;{{trans('file.patient_information')}} <i class="fa fa-info"></i>
                <strong/>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-wrench"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#">Config option 1</a>
                        </li>
                        <li><a href="#">Config option 2</a>
                        </li>
                    </ul>
                    <a class="close-link" style="margin-right:20px;">
                        <i class="fa fa-times"></i>
                    </a>
                    <button class="btn btn-primary btn-lg" onclick="PrintElem();">{{trans('file.print')}}&nbsp;<span
                                class="fa fa-print"></span></button>
                </div>
            </div>
            <div class="ibox-content" id="divone">
                <div class="row">
                    <div class="col-md-3">
                        <div class="profile-image">
                            <img src="{{asset('img/dentaa3.png')}}" class="" style="width: 200px;">
                        </div>
                    </div>

                    <div class="col-md-6">

                        <h2> Hakim Alikozay Dental Clinic</h2>
                        <h4>{{trans('file.patient_history_file')}}</h4>
                        <h4>{{trans('file.doctor_name')}} : {{$patient->doctor->first_name}}</h4>
                        <h4>{{trans('file.date')}} : {{$patient->created_at}}</h4>

                    </div>

                </div>
                <div class="hr-line-solid"></div>
                <br/>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row shadow p-3 mb-5 bg-white rounded"
                             style="background: rgba(145,224,255,0.42); padding-left:20px; border-radius: 50px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                            <h3 style="font-weight: bold">{{trans('file.patient_personal_info')}}</h3>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <table class="table table-striped text-bold" style="margin-top:30px;">

                                    <tbody>

                                    <tr>
                                        <td>{{trans('file.p_id')}} :</td>
                                        <td>{{$patient->id}}</td>
                                    </tr>
                                    <tr>
                                        <td>{{trans('file.patient_name')}}:</td>
                                        <td>{{$patient->name}}</td>

                                    </tr>
                                    <tr>
                                        <td>{{trans('file.age')}} :</td>
                                        <td>{{$patient->age}}</td>
                                    </tr>
                                    <tr>
                                        <td>{{trans('file.gender')}} :</td>
                                        <td>{{$patient->gender}}</td>
                                    </tr>
                                    <tr>
                                        <td>{{trans('file.address')}}:</td>
                                        <td>{{$patient->address}}</td>

                                    </tr>
                                    <tr>
                                        <td>{{trans('file.phone')}} :</td>
                                        <td>{{$patient->phone}}</td>
                                    </tr>
                                    <td>{{trans('file.health_problem')}}:</td>
                                    <td>{{$patient->problem_health}}</td>
                                    <tr>
                                        <td>{{trans('file.date')}}:</td>
                                        <td>{{$patient->created_at}}</td>
                                    </tr>

                                    </tbody>

                                </table>
                            </div>
                            <div class="col-md-4">
                                <table class="table table-striped text-bold" style="margin-top:30px;">
                                    <tbody>
                                    <tr>

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
                             style="background: rgba(145,224,255,0.42); padding-left:20px; border-radius: 50px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                            <h3 style="font-weight: bold">{{trans('file.kind_of_prosthesis')}}</h3>
                        </div>
                        <div class="row">
                            <div style="width: 100%;">
                                <table class="table table-striped text-bold" style="margin-top:30px;">
                                    <tbody>
                                    <tr>
                                        <td>{{trans('file.dental_defect')}}:</td>
                                        @if($patient_income != null)
                                        @foreach($patient_income as $patient)
                                        <td>{{$patient->dentaldefect}}</td>
                                            @endforeach

                                         @endif


                                    </tr>
                                    <tr>
                                        <td>{{trans('file.dental_treatment')}}:</td>

                                        @if($patient_income != null)
                                            @foreach($patient_income as $patient)
                                                <td>{{$patient->treatment}}</td>
                                            @endforeach

                                        @endif                                    </tr>
                                    <tr>
                                        <td>{{trans('file.teeth_number')}}:</td>
                                        @if($patient_income != null)
                                            @foreach($patient_income as $patient)
                                                <td>{{$patient->teeth_number}}</td>
                                            @endforeach

                                        @endif                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row shadow p-3 mb-5 bg-white rounded"
                             style="background: rgba(145,224,255,0.42); padding-left:20px; border-radius: 50px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                            <h3 style="font-weight: bold">{{trans('file.payment_info')}}</h3>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <table class="table table-striped text-bold" style="margin-top:30px;">
                                    <tbody>
                                    <tr>
                                        <td>{{trans('file.total')}} :</td>
                                        <td>{{$patient_income->sum('paid_amount')}}</td>


                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <br/>
                    <br/>
                    <h3>{{trans('file.doctor_signature')}}: </h3>
                </div>
            </div>
        </div>
    </div>




        @endsection

        @section('script')
            <script src="dashboard/js/plugins/sweetalert/sweetalert.min.js"></script>
            <script type="text/javascript">
                function PrintElem() {
                    var mywindow = window.open('', 'PRINT', 'height=1024,width=1468');
                    mywindow.document.write('<html><head><title>' + 'Patient information' + '</title>');
                    mywindow.document.write('</head><body >');
                    mywindow.document.write(document.getElementById('divone').innerHTML);
                    mywindow.document.write('</body></html>');
                    mywindow.document.close(); // necessary for IE >= 10
                    mywindow.focus(); // necessary for IE >= 10*/
                    mywindow.print();
                    mywindow.close();
                    return true;
                }
            </script>
@endsection