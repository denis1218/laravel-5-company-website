@extends('master')
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
                    <button class="btn btn-primary btn-lg" onclick="PrintElem();">Print &nbsp;<span
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
                        <h1>Payer</h1>
                        <h2> Hakim Alikozay Dental Clinic</h2>
                        <h4>Date: {{Carbon\Carbon::now()->timezone('Asia/Kabul')}}</h4>
                        <h4>payer :
                            {{$incom->name}}
                        </h4>

                    </div>

                </div>
                <div class="hr-line-solid"></div>
                <br/>
                {{--start condition of patient info--}}
                {{--@if(isset($pinfo))--}}
                <div class="row">
                    <div class="col-md-12">
                        <div class="row shadow p-3 mb-5 bg-white rounded"
                             style="background: rgba(145,224,255,0.42); padding-left:20px; border-radius: 50px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                            <h3 style="font-weight: bold">Receipt Bill</h3>
                        </div>
                        <div class="col-md-6">
                            <table class="table table-hover">

                                <tbody>
                                <tr>
                                    <td>Payer ID </td>
                                    <td>{{ $incom->patient->id_patient}}</td>

                                </tr>
                                <tr>
                                    <td>Payer </td>
                                    <td>{{ $incom->patient->name}}</td>

                                </tr>
                                <tr>
                                    <td>Paid Amount</td>
                                    <td>{{$incom->paid_amount}}</td>
                                </tr>
                                <tr>
                                    <td>Remaining</td>
                                    <td>{{$incom->remaining_fee}}</td>
                                </tr>
                                <tr>
                                    <td>Date</td>
                                    <td>{{$incom->created_at}}</td>
                                </tr>

                                </tbody>
                            </table>
                            <br>
                            <br>

                            <div class="row">
                                <h4  style="float: left;">Reception sign &nbsp;&nbsp; . . . . . . .</h4>
                                <h4  style="float: right;">Payer sign &nbsp;&nbsp; . . . . . . .</h4>

                            </div>
                        </div>
                    </div>
                </div>
                {{--@endif--}}
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
