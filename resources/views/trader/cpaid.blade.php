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

                <h5>Paid Loan</h5>

                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>

            <div class="ibox-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="table_otherIncome" style="margin-top:10px;">
                                <thead>
                                <tr style="color:black;">
                                    <th>{{trans('file.supplier')}}</th>
                                    <th>{{trans('file.receiver')}}</th>
                                    <th>{{trans('file.paid_amount')}}</th>
                                    <th>{{trans('file.date')}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($items as $item)
                                    <tr class="gradeX">
                                        <td>{{$item->trader->name}}</td>
                                        <td>{{$item->receiver}}</td>
                                        <td>{{$item->paid}}</td>
                                        <td>{{$item->created_at}}</td>
                                    </tr>
                                @endforeach
                                <tr>
                                    <td colspan="2" class="text-center">{{trans('file.total')}}</td>
                                    <td>{{$ptotal}}</td>
                                </tr>
                                </tbody>
                            </table>
                              {{$items->links()}}
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