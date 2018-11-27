@extends('master')
@section('style')
    <style>
        td{
            color: black;
        }
    </style>
@endsection

@section('content')



    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">

                <h5>Patient Income Statement <i class="fa fa-info"></i></h5>

                <div class="ibox-tools">
                    <a href="/income" class="btn btn-primary btn-lg">Back &nbsp;<span
                                class="fa fa-chavrone-left"></span></a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#">Config option 1</a>
                        </li>
                        <li><a href="#">Config option 2</a>
                        </li>
                    </ul>
                    <button class="btn btn-primary btn-lg" onclick="PrintElem('divone');">Print &nbsp;<span
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
                                <h2>Treatment Fee Payment Bill</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 text-left"><h3><strong>Dr.Zabihullah-Hakim Alkozay</strong></h3></div>
                            <div class="col-xs-6 text-right"><h4>Date: {{Carbon\Carbon::now()->timezone('Asia/Kabul')}}</h4></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 text-left" style="margin-left: 20px">
                        <h3>Contact : 0786003636  |  0706003636</h3>
                    </div>

                </div>
                <div class="hr-line-solid"></div>
                <br/>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row shadow p-3 mb-5 bg-white rounded"
                             style="background: rgba(145,224,255,0.42); padding-left:20px; border-radius: 50px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);width: 99%;margin-left: 7px;">
                            <h3 style="font-weight: bold">Patient Personal Information</h3>
                        </div>
                        <div class="col-xs-12" style="margin-top: 20px;">
                            <div class="table-responsive">
                            <table class="table table-hover">

                                <tbody>
                                <tr>
                                    <td><strong>Patient ID </strong></td>
                                    <td>{{ $incom->patient->id_patient}}</td>
                                    <td><strong>Age</strong> </td>
                                    <td>{{ $incom->patient->age}}</td>
                                </tr>
                                <tr>
                                    <td> <strong>Phone</strong></td>
                                    <td>{{ $incom->patient->phone}}</td>
                                    <td><strong>Date</strong> </td>
                                    <td>{{ $incom->created_at}}</td>
                                </tr>
                                <tr>
                                    <td> <strong>Patient Name</strong></td>
                                    <td>{{ $incom->patient->name}}</td>
                                    <td> <strong>Gender</strong></td>
                                    <td>{{ $incom->patient->gender}}</td>
                                </tr>
                                <tr>
                                    <td><strong>Health Porblem</strong> </td>
                                    <td>{{ $incom->patient->problem_health}}</td>
                                    <td><strong>Address</strong> </td>
                                    <td>{{ $incom->patient->address}}</td>
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
                             style="background: rgba(145,224,255,0.42); padding-left:20px; border-radius: 50px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);width: 99%;margin-left: 7px;margin-top: 40px;">
                            <h3 style="font-weight: bold">Payment Information</h3>
                        </div>
                        <div class="col-xs-12" style="margin-top: 20px;">
                            <div class="table-responsive">
                            <table class="table table-hover">

                                <tbody>
                                <tr>
                                    <td><strong>Dental Defect </strong></td>
                                    <td>{{ $incom->dentaldefect}}</td>
                                    <td><strong>Treatment</strong> </td>
                                    <td>{{ $incom->treatment}}</td>
                                </tr>
                                <tr>
                                    <td> <strong>Estimated Fee</strong></td>
                                    <td>{{ $incom->estimated_fee}}</td>
                                    <td> <strong>Paid Amount</strong></td>
                                    <td>{{ $incom->paid_amount}}</td>
                                </tr>
                                <tr>
                                    <td> <strong>Remaining</strong></td>
                                    <td>{{ $incom->remaining_fee}}</td>
                                    <td> <strong>Date</strong></td>
                                    <td>{{ $incom->created_at}}</td>
                                </tr>
                                </tbody>
                            </table>
                            </div>
                            <br>
                            <br>

                            <div class="row">
                                <h4  style="float: left;margin-left: 15px;">Reception sign &nbsp;&nbsp; . . . . . . .</h4>
                                <h4  style="float: right;">Payer sign &nbsp;&nbsp; . . . . . . .</h4>

                            </div>
                            <div class="row" style="margin-top: 260px;">
                                <div class="col-xs-12">
                                    <h4><strong>Powered By : PaypolSoftware.com</strong></h4>
                                </div>
                            </div>
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
            var page=document.body.innerHTML;
            var content=document.getElementById(el).innerHTML;
            document.body.innerHTML=content;
            window.print();
            document.body.innerHTML=page;
        }
    </script>
@endsection
