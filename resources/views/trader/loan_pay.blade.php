@extends('master')

@section('style')
    <style>
        .buttonList li
        {
            display: inline-block;
            /* You can also add some margins here to make it look prettier */
            zoom: 1;
            *display: inline;
            margin-left:20px;
            /* this fix is needed for IE7- */
        }
    </style>
@endsection



@section('content')

        <div class="col-lg-12" style="margin-top: -2em;">
            <!-- Nav-buttons -->
        @include('part.trade_nav')
        <!-- End of navButtons -->
            <div class="ibox float-e-margins">
                <div class="ibox-title">

                    <h5>{{trans('file.slp')}}</h5>

                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>

                <div class="ibox-content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="col-md-3" style="margin-bottom: 30px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);height: 130px;">
                                <div class="ibox ">
                                    <div class="ibox-title" style="height: 30px">
                                        <span class="label label-info pull-right">{{trans('file.all')}}</span>
                                        <h5>{{trans('file.ticost')}}</h5>
                                    </div>
                                    <div class="ibox-content" style="height: 20px">

                                        <h1 class="no-margins">{{$itotal}}&nbsp;&nbsp;{{trans('file.afg')}}</h1>
                                        <small>{{trans('file.total_price')}}</small>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3" style="margin-bottom: 30px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);height: 130px;margin-left: 20px">
                                <div class="ibox ">
                                    <div class="ibox-title" style="height: 30px">
                                        <span class="label label-info pull-right">{{trans('file.all')}}</span>
                                        <h5>{{trans('file.tpamount')}}</h5>
                                    </div>
                                    <div class="ibox-content" style="height: 20px">

                                        <h1 class="no-margins">{{$ltotal}}&nbsp;&nbsp;{{trans('file.afg')}}</h1>
                                        <small>{{trans('file.tpamount')}}</small>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3" style="margin-bottom: 30px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);height: 130px;margin-left: 20px;">
                                <div class="ibox ">
                                    <div class="ibox-title" style="height: 30px">
                                        <span class="label label-info pull-right">{{trans('file.all')}}</span>
                                        <h5>{{trans('file.remaining')}}</h5>
                                    </div>
                                    <div class="ibox-content" style="height: 20px;">

                                        <h1 class="no-margins">{{$remaining}}&nbsp;&nbsp;{{trans('file.afg')}}</h1>
                                        <small>{{trans('file.total')}}</small>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <button class="btn btn-md btn-primary" data-toggle="modal"
                                    data-target="#p{{$trader->id}}">&nbsp;Paid Loan
                                <img src="{{ asset('img/icon_paid.png') }}" width="25px"/></button>


                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="table-responsive">
                               <table class="table table-striped table-bordered table-hover" id="table_otherIncome" style="margin-top:10px;">
                                <thead>
                                <tr style="color:black;">
                                    <th>{{trans('file.supplier')}}</th>
                                    <th>{{trans('file.item')}}</th>
                                    <th>{{trans('file.quantity')}}</th>
                                    <th>{{trans('file.unit_price')}}</th>
                                    <th>{{trans('file.total_price')}}</th>
                                    <th>Bill number</th>
                                    <th>{{trans('file.date')}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($items as $item)
                                        <tr class="gradeX">
                                            <td>{{$item->trader->name}}</td>
                                            <td>{{$item->kind}}</td>
                                            <td>{{$item->quantity}}</td>
                                            <td>{{$item->unit_price}}</td>
                                            <td>{{$item->total_price}}</td>
                                            <td>{{$item->bill_number}}</td>
                                            <td>{{$item->created_at}}</td>
                                        </tr>
                                @endforeach
                                    <tr>
                                        <td colspan="4" class="text-center"><strong>{{trans('file.total')}}</strong></td>
                                        <td><strong>{{$itotal}}</strong></td>
                                    </tr>
                                </tbody>
                            </table>
{{--                            {{$others->links()}}--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    {{-- modal paid supplier --}}

        <div class="modal inmodal" id="p{{ $trader->id }}" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content animated fadeIn">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span
                                    aria-hidden="true">&times;</span><span
                                    class="sr-only">{{trans('file.close')}}</span></button>
                        <i class="fa fa-edit-o modal-icon text-primary"></i>

                        <h4 class="modal-title">{{trans('file.pay_loan')}}</h4>

                        <small>{{trans('file.enter_loan')}}</small>
                    </div>
                    <div class="modal-body">
                        <form id="form" method="post" action="/loan">
                            <input type="hidden" value="{{ $trader->name }}" name="receiver"/>
                            <div class="form-group">
                                <label>Payment Amount</label>
                                <div><input type="number"  name="paid" class="form-control" placeholder="Loan payment amount" required></div>
                            </div>
                            <div><input type="hidden" name="trader_id" value="{{ $trader->id }}"></div>
                            <div class="form-group">
                                <div class="form-group">
                                    <button class="btn btn-primary pull-right" type="submit">Pay loan</button>
                                    <button type="button" class="btn btn-white pull-right" data-dismiss="modal"
                                            style="margin-bottom: 10px;">{{trans('file.close')}}</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="modal-footer">


                    </div>
                </div>
            </div>
        </div>

@endsection
@section('script')
    {{-- javascript search on table --}}
    <script>
        {{-- filter search all patient table --}}
        function search_otherIncome() {
            // Declare variables
            var input, filter, table, tr, td, i;
            input = document.getElementById("search_otherIncome");
            filter = input.value.toUpperCase();
            table = document.getElementById("table_otherIncome");
            tr = table.getElementsByTagName("tr");

            // Loop through all table rows, and hide those who don't match the search query
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[2];
                if (td) {
                    if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }

    </script>
@endsection