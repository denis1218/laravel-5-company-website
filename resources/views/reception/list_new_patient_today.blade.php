@extends('master')

@section('style')

@endsection

@section('content')

    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>List patient today</h5>
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


                {{-- row for buttons --}}
                <div class="row">
                    <div class="col-md-2">
                        <a class="btn btn-primary" href="/patient"><i class="fa fa-arrow-left"></i>&nbsp;Back</a>
                    </div>

                    <div class="col-md-4 pull-right">
                        <div class="widget style1 navy-bg">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user-plus fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <span> Total new register today {{ \Carbon\Carbon::today()->toDateString() }}</span>
                                    <h2 class="font-bold">{{ $countNewPatient }}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- row for table --}}
                <div class="row">
                    <div class="col-md-12">

                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                    <th>Visits</th>
                                    <th>Doctor &nbsp;<i class="fa fa-stethoscope"></i></th>
                                    <th>Date Reg &nbsp;<i class="fa fa-calendar"></i></th>
                                    {{--<th>Next appointment &nbsp;<i class="fa fa-calendar"></i></th>--}}
                                    <th>Phone &nbsp;<i class="fa fa-phone"></i></th>
                                <tr>
                            </thead>
                            <tbody>
                                @foreach($allNewPatientToday as $patient)
                                    <tr>
                                        <td>{{ $patient->id }}</td>
                                        <td>{{ $patient->name }}</td>
                                        <td>{{ $patient->lastname }}</td>
                                        <td>{{ $patient->status }}</td>
                                        <td>{{ $patient->doctor->first_name }}</td>
                                        <td>{{ $patient->created_at }}</td>
{{--                                        <td>{{ $patient->next_appointment }}</td>--}}
                                        <td>{{ $patient->phone }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                    <th>Visits</th>
                                    <th>Doctor &nbsp;<i class="fa fa-stethoscope"></i></th>
                                    <th>Date Reg &nbsp;<i class="fa fa-calendar"></i></th>
                                    {{--<th>Next appointment &nbsp;<i class="fa fa-calendar"></i></th>--}}
                                    <th>Phone &nbsp;<i class="fa fa-phone"></i></th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
    {{-- end of all box content --}}

@endsection

@section('script')
    <script>
        {{-- filter search all patient table --}}
        function search_all_patient() {
            // Declare variables
            var input, filter, table, tr, td, i;
            input = document.getElementById("search_all_patient");
            filter = input.value.toUpperCase();
            table = document.getElementById("table_all_patient");
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


