@extends('master')
@section('content')



    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Profit Statement <i class="fa fa-info"></i></h5>

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
                    <button class="btn btn-primary btn-lg" onclick="PrintElem();">Print &nbsp;<span
                                class="fa fa-print"></span></button>
                </div>
            </div>
            <div class="ibox-content" id="divone">
                <div class="row">
                    <div class="col-md-3">
                        <div class="profile-image">
                            <img src="{{asset('img/dentaa3.png')}}" class="img-responsive" style="width: 200px;">
                        </div>
                    </div>
                    <div class="col-md-6">

                        <h2> Hakim Alikozay Dental Clinic</h2>
                        <h4>Profit And Loss</h4>
                        <h5>Date : {{$single}}&nbsp;&nbsp;TO &nbsp;&nbsp;
                        @if(isset($end))
                            {{$end}}
                        @endif
                        </h5>



                    </div>

                </div>
                <div class="hr-line-solid"></div>
                <br/>
                {{--start condition of patient info--}}
                <div class="row">
                    <div class="col-md-12">
                        <div class="row shadow p-3 mb-5 bg-white rounded"
                             style="background: rgba(145,224,255,0.42); padding-left:20px; border-radius: 50px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                            <h3 style="font-weight: bold">Income</h3>
                        </div>
                        <br>
                        <div class="table-responsive">
                        <table class="table table-striped text-bold" style="margin-top:30px;">

                            <tbody>

                            <tr>
                                <td style="margin-left: 30px">Patient Income</td>
                                <td style="float: right;margin-right: 30px">{{$treatment->sum('paid_amount')}}
                                    &nbsp;afg
                                </td>
                            </tr>


                            <tr>
                                <td style="margin-left: 30px">Xray Income</td>
                                <td style="float: right;margin-right: 30px">{{$xray->sum('paid_amount')}}&nbsp;afg</td>
                            </tr>
                            <tr>
                                <td style="margin-left: 30px">Other Income</td>
                                <td style="float: right;margin-right: 30px">{{$oincome->sum('amount')}}&nbsp;afg</td>
                            </tr>
                            <tr>
                                <td style="margin-left: 30px">Medicine Income</td>
                                <td style="float: right;margin-right: 30px">{{$medicine->sum('total_fee')}}&nbsp;afg</td>
                            </tr>
                            <tr>
                                <td style="margin-left: 30px"><b>Total Income</b></td>
                                <td style="float: right;margin-right: 30px"><b>{{$total_income}}&nbsp;afg</b></td>

                            </tr>
                            </tbody>
                        </table>
                        </div>
                        </div>
                </div>
                {{--end condition of patient info--}}
                <div class="row">
                    <div class="col-md-12">
                        <div class="row shadow p-3 mb-5 bg-white rounded"
                             style="background: rgba(145,224,255,0.42); padding-left:20px; border-radius: 50px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                            <h3 style="font-weight: bold">Expense</h3>
                        </div>
                        <br>
                        <table class="table table-striped text-bold" style="margin-top:30px;">

                            <tbody>

                            <tr>
                                <td style="margin-left: 30px"><b>Category</b></td>
                                <td style="float: right;margin-right: 30px"><b>Amount</b></td>
                            </tr>
                                @foreach($expense as $exp)
                                <tr>
                                    <td style="margin-left: 30px">{{$exp->category}}</td>
                                    <td style="float: right;margin-right: 30px">{{$exp->amount}}&nbsp;afg</td>

                                </tr>
                                @endforeach
                            <tr>
                                <td style="margin-left: 30px"><b>Total Expense</b></td>
                                <td style="float: right;margin-right: 30px"><b>{{$expense->sum('amount')}}</b></td>
                            </tr>
                            </tbody>

                        </table>
                    </div>
                </div>
                {{--end condition of patient info--}}
                <div class="row">
                    <div class="col-md-12">
                        <div class="row shadow p-3 mb-5 bg-white rounded"
                             style="background: rgba(145,224,255,0.42); padding-left:20px; border-radius: 50px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                            <h3 style="font-weight: bold">Net Profit</h3>
                        </div>
                        <br>
                        <table class="table table-striped text-bold" style="margin-top:30px;">

                            <tbody>
                            <tr>
                                <td style="margin-left: 30px"><b>Net Profit</b></td>
                                <td style="float: right;margin-right: 30px"><b>{{$total_profit}}</b></td>
                            </tr>



                            </tbody>

                        </table>
                    </div>
                </div>
                {{--end condition of patient info--}}

            </div>
        </div>

        {{--end of header--}}


        @endsection

        @section('script')
            <script src="dashboard/js/plugins/sweetalert/sweetalert.min.js"></script>
            <script type="text/javascript">
                function PrintElem() {
                    var mywindow = window.open('', 'PRINT', 'height=1024,width=1468');
                    mywindow.document.write('<html><head><title>' + 'Profit Information' + '</title>');
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