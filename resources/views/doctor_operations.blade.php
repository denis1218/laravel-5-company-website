@extends('master')

@section('style')



    <style rel="stylesheet">
        .font-m {
            font-size: 1.5em;
        }

        .font-b {
            font-size: 1.7em;
        }

        ul.list-group:after {
            clear: both;
            display: block;
            content: "";
        }

        .list-group-item {
            float: left;
        }

        .vl {
            border-left: 6px solid green;
            height: 500px;
        }

        /* CSS REQUIRED */
        .state-icon {
            left: -5px;
        }

        .list-group-item-primary {
            color: rgb(255, 255, 255);
            background-color: rgb(88, 198, 202);
        }

        /* DEMO ONLY - REMOVES UNWANTED MARGIN */
        .well .list-group {
            margin-bottom: 0px;
        }
    </style>

@endsection

@section('content')
    @include('part.nav_doctor')

    <br/>

    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>{{trans('file.patient_appointment_list')}} </h5>
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
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <br/>
                <div class="row">
                    <div class="col-md-12">
                        <div class="input-group"><span class="input-group-btn">
                        <button type="button" disabled class="btn btn-white"><i class="fa fa-search"></i>
                        </button> </span>
                            <input  type="text" id="search" onkeyup="filter_search()" name="search_patient" placeholder="{{trans('file.search_patient_id')}}"
                                    class=" form-control"></div>
                    </div>
                </div>
                <br/>
                <div class="row">
                    <div class="col-lg-12">
                        <h5>Show all patients just for today</h5>
                        <div class="ibox float-e-margins">
                            <table class="table table-hover no-margins" id="table_patient">
                                <thead>
                                <tr>
                                    <th>{{trans('file.p_id')}}</th>
                                    <th>{{trans('file.patient_name')}}</th>
                                    <th>{{trans('file.last_name')}}</th>
                                    <th>{{trans('file.status')}}</th>
                                    <th>{{trans('file.date_appointment')}}</th>
                                    <th>{{trans('file.health_problem')}}</th>
                                    <th>{{trans('file.operation')}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(count($operation)>0)
                                    @foreach($operation as $opr)
                                        <tr>
                                            <td>{{ $opr->id_patient }}</td>
                                            <td>{{ $opr->name }}</td>
                                            <td>{{ $opr->lastname }}</td>
                                            <td>{{ $opr->status }}</td>
                                            <td>{{ $opr->next_appointment }}</td>
                                            <td>{{ $opr->problem_health }}</td>
                                            <td><a href="/operation/create/{{$opr->id}}" class="btn btn-sm btn-primary">{{trans('file.start_operation')}}</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                            {{--{{$operation->links()}}--}}
                            @else
                                <h3 style="color:red;text-align: center;">NO PATIENT HAS BEEN REGISTERED YET</h3>
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')





    {{-- filter search for patient name --}}
    <script>
        function filter_search() {
            // Declare variables
            var input, filter, table, tr, td, i;
            input = document.getElementById("search");
            filter = input.value.toUpperCase();
            table = document.getElementById("table_patient");
            tr = table.getElementsByTagName("tr");

            // Loop through all table rows, and hide those who don't match the search query
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
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

    {{-- sweet alert --}}
    <script>
        $(document).ready(function () {
            $('.demo1').click(function () {
                swal({
                    title: "Welcome in Alerts",
                    text: "Lorem Ipsum is simply dummy text of the printing and typesetting industry."
                });
            });
            $('.demo_recp').click(function () {
                swal({
                    title: "Successfully Send to Receptions!",
                    text: "Receptions will check it!",
                    type: "success"
                });
            });
            $('.demo_delete').click(function () {
                swal({
                    title: "Are you sure?",
                    text: "You will not be able to recover this imaginary file!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes, delete it!",
                    closeOnConfirm: false
                }, function () {
                    swal("Deleted!", "Your imaginary file has been deleted.", "success");
                });
            });
            $('.demo4').click(function () {
                swal({
                        title: "Are you sure?",
                        text: "Your will not be able to recover this imaginary file!",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Yes, delete it!",
                        cancelButtonText: "No, cancel plx!",
                        closeOnConfirm: false,
                        closeOnCancel: false
                    },
                    function (isConfirm) {
                        if (isConfirm) {
                            swal("Deleted!", "Your imaginary file has been deleted.", "success");
                        } else {
                            swal("Cancelled", "Your imaginary file is safe :)", "error");
                        }
                    });
            });
        });
    </script>

@endsection