@extends('master')

@section('style')

@endsection



@section('content')



    <!-- Nav-buttons -->
    @include('part.income_button_top')
    <!-- End of navButtons -->


    <div class="wrapper wrapper-content animated fadeInRight">

        {{--Other income table--}}

        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Other Income</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li>
                                <a href="#">Config option 1</a>
                            </li>
                            <li>
                                <a href="#">Config option 2</a>
                            </li>
                        </ul>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>

                <div class="ibox-content">
                    @include('layout.messages')
                    <div class="row">
                        <!--Search -->
                        <!--Search -->
                        <div class="col-sm-9">
                            <div class="input-group" style="margin-top:25px;">
                        <span class="input-group-btn">
                        <button type="button" style="margin-left:17px;" disabled class="btn btn-sm btn-primary"><i class="fa fa-search"></i> </button></span>
                                <input type="text" placeholder="Search patient name" class="input-sm form-control" id="search_otherIncome" onkeyup="search_otherIncome()">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <a href="/other-income/create" class="btn btn-primary text-right" style="margin-top: 20px;">Add New Income</a>
                        </div>
                        <div class="col-sm-12">
                        <table class="table table-striped table-bordered table-hover" id="table_otherIncome"
                               style="margin-top:10px;margin-left:30px;width:95%;">
                            <thead>
                            <tr style="color:black;">
                                <th>ID</th>
                                <th>From Whom</th>
                                <th>Amount</th>
                                <th>Purpose</th>
                                <th>Description</th>
                                <th>Date</th>
                                <th>Edit</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(count($others)>0)
                            @foreach($others as $other)
                            <tr class="gradeX">
                                <td>{{$other->id}}</td>
                                <td>{{$other->from_whom}}</td>
                                <td>{{$other->amount}}</td>
                                <td>{{$other->purpose}}</td>
                                <td>{{$other->description}}</td>
                                <td>{{$other->created_at}}</td>
                                <td>
                                    <button  class="btn btn-sm btn-primary fa fa-edit" data-toggle="modal"
                                             data-target="#{{$other->id}}">&nbsp;Edit
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                            <tr>
                                <td colspan="2">Total Amount</td>
                                <td>{{$total}}</td>
                            </tr>
                            @else
                            <h2 class="text-center" style="color: red;">No other income yet</h2>
                            @endif
                            </tbody>
                        </table>
                        {{$others->links()}}
                        </div>
                        {{--Edit modal--}}
                        @foreach($others as $other)
                            <div class="modal inmodal" id="{{$other->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content animated fadeIn">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <h4 class="modal-title">Edit Content</h4>
                                            <small>Edit information</small>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <form action="/other-income/{{$other->id}}" method="post">
                                                    {{method_field('PUT')}}
                                                    <div class="form-group">
                                                        <label for="p-name">From Whom</label>
                                                        <input type="text" name="from_whom" class="form-control" value="{{$other->from_whom}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="doctor-name">Amount</label>
                                                        <input type="text" name="amount" class="form-control"  value="{{$other->amount}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="estimated-fee">Purpose</label>
                                                        <input type="text" name="purpose" class="form-control"  value="{{$other->purpose}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="p-amount">Description</label>
                                                        <input type="text" name="description" class="form-control"  value="{{$other->description}}" style="resize: none">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save changes</button>

                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        {{--end of edit modal--}}

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