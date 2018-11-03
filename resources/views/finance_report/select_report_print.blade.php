@extends('master')
@section('content')



    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Profit Statement <i class="fa fa-info"></i></h5>


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
                        <h4>Profit And Loss</h4>
                        <h5>Date : {{\Carbon\Carbon::today()}}</h5>


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
                        <table class="table table-striped text-bold" style="margin-top:30px;">

                            <tbody>
                            @if(isset($pinfo))

                            <tr>
                                <td style="margin-left: 30px"><b style="font-size: 20px">Patient Income Total</b></td>
                                <td style="float: right;margin-right: 30px"><b style="font-size: 20px">{{$pinfo->sum('paid_amount')}}
                                        &nbsp;afg</b>
                                </td>
                            </tr>
                            @foreach($pinfo as $p)
                            <tr>

                                <td style="margin-left: 30px">{{$p->patient->name}}</td>
                                <td style="float: right;margin-right: 30px">{{$p->paid_amount}}
                                        &nbsp;afg
                                </td>
                            </tr>
                            @endforeach
                            @endif
                            @if(isset($xinfo))
                            <tr>
                                <td style="margin-left: 30px"><b style="font-size: 20px">Xray Income Total</b></td>
                                <td style="float: right;margin-right: 30px"><b  style="font-size: 20px">{{$xinfo->sum('paid_amount')}}&nbsp;afg </b></td>
                            </tr>
                            @foreach($xinfo as $x)
                            <tr>

                                <td style="margin-left: 30px">{{$x->patient_name}}</td>
                                <td style="float: right;margin-right: 30px">{{$x->paid_amount}}&nbsp;afg</td>
                            </tr>
                            @endforeach
                            @endif
                            @if(isset($oinfo))
                            <tr>
                                <td style="margin-left: 30px"><b style="font-size: 20px">Other Income Total</b></td>
                                <td style="float: right;margin-right: 30px"><b style="font-size: 20px">{{$oinfo->sum('amount')}}&nbsp;afg</b></td>
                            </tr>
                            @foreach($oinfo as $on)
                            <tr>
                                <td style="margin-left: 30px">{{$on->from_whom}}</td>
                                <td style="float: right;margin-right: 30px">{{$on->amount}}&nbsp;afg</td>
                            </tr>
                            @endforeach

                            @endif
                            {{--<tr>--}}
                                {{--<td style="margin-left: 30px"><b>Total Income</b></td>--}}
                                {{--<td style="float: right;margin-right: 30px"><b>{{$total_income}}&nbsp;afg</b></td>--}}

                            {{--</tr>--}}
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