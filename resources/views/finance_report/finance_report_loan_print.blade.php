@extends('master')
@section('style')
    <style>
        td{
            color: black;
        }

        .list {
            list-style-type: none;
            margin: 10px;
            padding: 10px;
            overflow: hidden;
        }

        .list li {
            float: left;
            margin-left: 30px;
        }
    </style>
@endsection
@section('content')



    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">

                <h5>Expense Statment <i class="fa fa-info"></i></h5>

                <div class="ibox-tools">
                    <a href="{{ URL::previous() }}" class="btn btn-primary btn-lg">Back &nbsp;<span
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
                <table>
                    <tr>
                        <td><img src="{{ asset('img/print_logo.jpg') }}" style="width: 120px;height: 100px;"></td>
                        <td>
                            <ul style="list-style-type: none;">
                                <li><h2>Hakim Alkozay Dental Clinic</h2></li>
                                <li><h4>Loan Report Supplier
                                    </h4></li>
                            </ul>
                        </td>
                    </tr>
                </table>

                <ul style="list-style-type: none;
                        margin: 10px;
                        padding: 10px;
                        overflow: hidden;">
                    <li style="float: left;
                                margin-left: 30px;"><h6><strong>Dr.Zabihullah-Hakim Alkozay</strong></h6></li>
                    <li style="float: left;
                                margin-left: 30px;"><h6>Date: {{Carbon\Carbon::now()->timezone('Asia/Kabul')}}</h6></li>
                    <li style="float: left;
                                margin-left: 30px;"><h6>Contact : 0786003636  |  0706003636</h6></li>
                </ul>

                <div class="row">
                </div>
                <div class="hr-line-solid"></div>
                <br/>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row shadow p-3 mb-5 bg-white rounded"
                             style="background: rgba(145,224,255,0.42); padding-left:20px; border-radius: 50px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                            <h3 style="font-weight: bold">Loan Report</h3>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover table-stripped" cellpadding="5px">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Kind</th>
                                    <th>Quantity</th>
                                    <th>Unit Price</th>
                                    <th>Total Price</th>
                                    <th>Bill #</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i = 1 ;?>
                                @foreach($trader_items as $item)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $item->kind }}</td>
                                        <td>{{ $item->quantity}}</td>
                                        <td>{{$item->unit_price}}</td>
                                        <td>{{$item->total_price}}</td>
                                        <td>{{ $item->bill_number }}</td>
                                    </tr>
                                    <?php $i++; ?>
                                @endforeach
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td style="background-color: #a2a2a2"><strong>Sum Items price :</strong></td>
                                    <td style="background-color: #a2a2a2"><strong>{{$total_items_price = $trader_items->sum('total_price')}}</strong> </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td style="background-color: #bebebe"><strong>Total Paid :</strong></td>
                                    <td style="background-color: #bebebe"><strong>{{$total_paid = $trader_recieve->sum('paid')}}</strong> </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td style="background-color: #cdcdcd"><strong>Total Remaining :</strong></td>
                                    <td style="background-color: #cdcdcd"><strong>{{ $total_items_price - $total_paid }}</strong> </td>
                                    <td></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                {{--@endif--}}
            </div>
        </div>
    </div>
@endsection
@section('script')

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
