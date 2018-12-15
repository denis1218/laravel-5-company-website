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

                    <h5>{{trans('file.other_income')}}</h5>

                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>

                <div class="ibox-content">
                    <div class="row">
                        <!--Search -->
                        <!--Search -->
                        <div class="col-sm-9">
                            <div class="input-group" style="margin-top:25px;margin-left: 15px;">
                        <span class="input-group-btn">
                                <button type="button" style="margin-left:17px;" disabled class="btn btn-sm btn-primary"><i class="fa fa-search"></i> </button></span>
                                <input type="text" placeholder="Search" class="input-sm form-control" id="search_otherIncome" onkeyup="search_otherIncome()">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <a href="/other-income/create" class="btn btn-sm btn-primary text-right" style="margin-top: 20px;">{{trans('file.add_new_income')}}</a>
                        </div>
                        <div class="col-sm-12">
                        <table class="table table-striped table-bordered table-hover" id="table_otherIncome"
                               style="margin-top:10px;margin-left:30px;width:95%;">
                            <thead>
                            <tr style="color:black;">
                                <th>{{trans('file.id')}}</th>
                                <th>{{trans('file.from_whom')}}</th>
                                <th>{{trans('file.amount')}}</th>
                                <th>{{trans('file.purpose')}}</th>
                                <th>{{trans('file.description')}}</th>
                                <th>{{trans('file.date')}}</th>
                                <th>{{trans('file.edit')}}</th>
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
                                             data-target="#{{$other->id}}">&nbsp;{{trans('file.edit')}}
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                            <tr>
                                <td colspan="2">{{trans('file.total')}}</td>
                                <td>{{$total}}</td>
                            </tr>
                            @else
                            <h5 class="text-center" style="color: #9b96ff;">There aren't Other income. Add new income</h5>
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
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">{{trans('file.close')}}</span></button>
                                            <h4 class="modal-title">{{trans('file.edit_content')}}</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <form action="/other-income/{{$other->id}}" method="post">

                                                    {{method_field('patch')}}

                                                    <div class="form-group">
                                                        <label for="p-name">{{trans('file.from_whom')}}</label>
                                                        <input type="text" name="from_whom" class="form-control" value="{{$other->from_whom}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="doctor-name">{{trans('file.amount')}}</label>
                                                        <input type="text" name="amount" class="form-control"  value="{{$other->amount}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="estimated-fee">{{trans('file.purpose')}}</label>
                                                        <input type="text" name="purpose" class="form-control"  value="{{$other->purpose}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="p-amount">{{trans('file.description')}}</label>
                                                        <input type="text" name="description" class="form-control"  value="{{$other->description}}" style="resize: none">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-white" data-dismiss="modal">{{trans('file.close')}}</button>
                                                        <button type="submit" class="btn btn-primary">{{trans('file.save')}}</button>

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