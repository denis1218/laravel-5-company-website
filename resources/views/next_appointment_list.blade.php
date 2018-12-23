@extends('master')
@section('content')
    <style>
        .ullist-nav {
            display: table;
            width: 50%;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
        }

        .ullist-nav li {
            display: table-cell;
        }
    </style>

    @include('part.nav_doctor')

    <br/>

    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>{{trans('file.next_appointment_patient')}}</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>

            <div class="ibox-content">
                <div class="row">

                    <div class="col-md-6">
                        <label>{{trans('file.search_patient_name')}}</label>
                        <div class="input-group">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-white"><i class="fa fa-search text-success"></i> </button> </span>
                            <input type="text" id="search_nextappoinment" onkeyup="search_appointment()" placeholder="{{trans('file.search_patient_name')}}" class="input-md form-control">
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <form action="/next_appointment_list" method="get">
                            <label>{{trans('file.fnaud')}}</label>
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-calendar"></i> Set Date</button> </span>
                                <input type="date" name="date" class="form-control"/>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="row" style="margin-top:20px;">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <table class="table table-hover no-margins table-striped" id="table_nextappointment">
                                <thead>
                                <tr>
                                    <td>{{trans('file.p_id')}}</td>
                                    <th>{{trans('file.patient_name')}}</th>
                                    <th>{{trans('file.status')}}</th>
                                    <th>{{trans('file.date_appointment')}}</th>
                                    <th>{{trans('file.health_problem')}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($next_appointment as $appointments)
                                    <tr>
                                        <td>{{ $appointments->id_patient }}</td>
                                        <td>{{ $appointments->name }}</td>
                                        <td>{{ $appointments->status }}</td>
                                        <td><i class="fa fa-calendar"></i>&nbsp;{{ $appointments->next_appointment }}
                                        </td>
                                        <td>{{ $appointments->problem_health }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td>{{trans('file.p_id')}}</td>
                                    <th>{{trans('file.patient_name')}}</th>
                                    <th>{{trans('file.status')}}</th>
                                    <th>{{trans('file.date_appointment')}}</th>
                                    <th>{{trans('file.health_problem')}}</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')

    {{-- search on table next - appointment --}}
    <script>
        {{-- filter search all patient table --}}
        function search_appointment() {
            // Declare variables
            var input, filter, table, tr, td, i;
            input = document.getElementById("search_nextappoinment");
            filter = input.value.toUpperCase();
            table = document.getElementById("table_nextappointment");
            tr = table.getElementsByTagName("tr");

            // Loop through all table rows, and hide those who don't match the search query
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1];
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