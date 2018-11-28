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

                <h5>Expense Statment <i class="fa fa-info"></i></h5>

                <div class="ibox-tools">
                    <a href="/doctors" class="btn btn-primary btn-lg">Back &nbsp;<span
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
                                <h2>Doctor Salary Receipt</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 text-left"><h3 style="margin-left: 20px;"><strong>Dr.Zabihullah-Hakim Alkozay</strong></h3></div>
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
                            <h3 style="font-weight: bold">Expense Bill</h3>
                        </div>
                        <div class="col-xs-12" style="margin-top: 20px;">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <tbody>
                                    @foreach($expense as $exp)
                                        <tr>
                                            <td><strong>Money Receiver</strong></td>
                                            <td>{{ $exp->receiver}}</td>
                                            <td><strong>Amount</strong> </td>
                                            <td>{{$exp->amount}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Category</strong></td>
                                            <td>{{$exp->category}}</td>
                                            <td><strong>Description</strong> </td>
                                            <td>{{$exp->description}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <br>
                            <br>
                            <div class="row">
                                <h4  style="float: left;margin-left: 15px;">Reception sign &nbsp;&nbsp; . . . . . . .</h4>
                                <h4  style="float: right;">Receiver sign &nbsp;&nbsp; . . . . . . .</h4>

                            </div>
                            <div class="row" style="margin-top: 460px;">
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
