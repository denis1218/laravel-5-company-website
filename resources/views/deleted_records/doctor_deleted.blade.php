@extends('master')

@section('style')
@endsection



@section('content')

    <div class="wrapper wrapper-content  ">

        {{--Other income table--}}

        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">

                    <h5>{{trans('file.deleted_records')}}</h5>

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
                        <div class="col-sm-12">
                            <div class="input-group" style="margin-top:25px;margin-left: 15px;">
                        <span class="input-group-btn">
                        <button type="button" style="margin-left:17px;" disabled class="btn btn-sm btn-primary"><i class="fa fa-search"></i> </button></span>
                                <input type="text" placeholder="Search by name" class="input-sm form-control" id="search_otherIncome" onkeyup="search_otherIncome()">
                            </div>
                        </div>
                        <div class="col-sm-12">
                        <table class="table table-striped table-bordered table-hover" id="table_otherIncome"
                               style="margin-top:10px;margin-left:30px;width:95%; color:black;">
                            <thead>
                            <tr>
                                <th>{{trans('file.id')}}</th>
                                <th>{{trans('file.firstname')}}</th>
                                <th>{{trans('file.lastname')}}</th>
                                <th>{{trans('file.gender')}}</th>
                                <th>{{trans('file.age')}}</th>
                                <th>{{trans('file.phone')}}</th>
                                <th>{{trans('file.salary_type')}}</th>
                                <th>{{trans('file.salary_amount')}}</th>
                                <th>{{trans('file.paid')}}</th>
                                <th>{{trans('file.remaining')}}</th>
                                <th>{{trans('file.deleted_at')}}</th>
                                <th>{{trans('file.restore')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(count($doctorDeleted)>0)
                            @foreach($doctorDeleted as $doctor)
                            <tr>
                                <td>{{$doctor->id}}</td>
                                <td>{{$doctor->first_name}}</td>
                                <td>{{$doctor->last_name}}</td>
                                <td>{{$doctor->gender}}</td>
                                <td>{{$doctor->age}}</td>
                                <td>{{$doctor->phone}}</td>
                                <td>{{$doctor->salary_type}}</td>
                                <td>{{$doctor->salary_amount}}</td>
                                <td>{{$doctor->paid}}</td>
                                <td>{{$doctor->remaining}}</td>
                                <td>{{$doctor->deleted_at}}</td>
                                <td>
                                    <form action="/doctor-deleted/{{ $doctor->id }}">
                                        <a  class="btn btn-sm btn-primary fa fa-refresh demo3"
                                                 >&nbsp;{{trans('file.restore')}}
                                        </a>
                                    </form>
                                </td>
                            </tr>
                            @endforeach

                            @else
                            <h4 class="text-center" style="color: red;">No Doctor Deleted</h4>
                            @endif
                            </tbody>
                        </table>
                        {{$doctorDeleted->links()}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')

    {{-- Sweet alert for delete --}}
    <script>
        $(document).ready(function () {
            $('.demo3').on('click',function(e){
                e.preventDefault();
                var form = $(this).parents('form');
                swal({
                    title: "Do you want to restore this record ?",
                    text: "It will be restored from database",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes, restore it!",
                    closeOnConfirm: false
                }, function(isConfirm){
                    if (isConfirm) form.submit();
                });
            });
        });
    </script>

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