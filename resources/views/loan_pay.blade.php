@extends('master')

@section('style')
@endsection



@section('content')

        <div class="col-lg-12" style="margin-top: -2em;">
            <!-- Nav-buttons -->
        @include('part.trade_nav')
        <!-- End of navButtons -->
            <div class="ibox float-e-margins">
                <div class="ibox-title">

                    <h5>Supplier Loan Payment</h5>

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
                                        <span class="label label-info pull-right">All</span>
                                        <h5>Totoal Item Cost</h5>
                                    </div>
                                    <div class="ibox-content" style="height: 20px">

                                        <h1 class="no-margins">{{$itotal}}&nbsp;&nbsp;Afg</h1>
                                        <small>Total Cost</small>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3" style="margin-bottom: 30px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);height: 130px;margin-left: 20px">
                                <div class="ibox ">
                                    <div class="ibox-title" style="height: 30px">
                                        <span class="label label-info pull-right">All</span>
                                        <h5>Totoal Paid Amount</h5>
                                    </div>
                                    <div class="ibox-content" style="height: 20px">

                                        <h1 class="no-margins">{{$ltotal}}&nbsp;&nbsp;Afg</h1>
                                        <small>Total Paid</small>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3" style="margin-bottom: 30px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);height: 130px;margin-left: 20px;">
                                <div class="ibox ">
                                    <div class="ibox-title" style="height: 30px">
                                        <span class="label label-info pull-right">All</span>
                                        <h5>Remaining</h5>
                                    </div>
                                    <div class="ibox-content" style="height: 20px;">

                                        <h1 class="no-margins">{{$remaining}}&nbsp;&nbsp;Afg</h1>
                                        <small>Total Total</small>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <a href="/loan1/{{$t_id}}" class="btn btn-primary ">PayLoan</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="table-responsive">
                               <table class="table table-striped table-bordered table-hover" id="table_otherIncome" style="margin-top:10px;">
                                <thead>
                                <tr style="color:black;">
                                    <th>Supplier Name</th>
                                    <th>Item</th>
                                    <th>Quantity</th>
                                    <th>Unit Price</th>
                                    <th>Total Price</th>
                                    <th>Date</th>
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
                                            <td>{{$item->created_at}}</td>

                                        </tr>
                                @endforeach
                                    <tr>
                                        <td colspan="4" class="text-center">Total</td>
                                        <td>{{$itotal}}</td>
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