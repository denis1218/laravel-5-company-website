@extends('master')

@section('style')

@endsection

@section('content')

    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>{{trans('file.list_new_patient_today')}}</h5>

            </div>
            <div class="ibox-content">


                {{-- row for buttons --}}
                <div class="row">
                    <div class="col-md-2">
                        <a class="btn btn-primary" href="/patient"><i class="fa fa-arrow-left"></i>{{trans('file.back')}}</a>
                    </div>

                    <div class="col-md-4 pull-right">
                        <div class="widget style1 navy-bg">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user-plus fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <span> {{trans('file.total_new')}}&nbsp;&nbsp;{{ \Carbon\Carbon::today()->toDateString() }}</span>
                                    <h2 class="font-bold">{{ $countNewPatient }}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- row for table --}}
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>{{trans('file.id')}}</th>
                                    <th>{{trans('file.first_name')}}</th>
                                    <th>{{trans('file.last_name')}}</th>
                                    <th>{{trans('file.visits')}}</th>
                                    <th>{{trans('file.doctor')}}&nbsp;<i class="fa fa-stethoscope"></i></th>
                                    <th>{{trans('file.date')}}<i class="fa fa-calendar"></i></th>
                                    {{--<th>Next appointment &nbsp;<i class="fa fa-calendar"></i></th>--}}
                                    <th>{{trans('file.phone')}}&nbsp;<i class="fa fa-phone"></i></th>
                                <tr>
                            </thead>
                            <tbody>
                                @foreach($allNewPatientToday as $patient)
                                    <tr>
                                        <td>{{ $patient->id }}</td>
                                        <td>{{ $patient->name }}</td>
                                        <td>{{ $patient->lastname }}</td>
                                        <td>{{ $patient->status }}</td>
                                        @if($patient->doctor != null)
                                        <td>{{ $patient->doctor->first_name }}</td>
                                        @else
                                            <td>Null</td>
                                        @endif

                                        <td>{{ $patient->created_at }}</td>
{{--                                        <td>{{ $patient->next_appointment }}</td>--}}
                                        <td>{{ $patient->phone }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>{{trans('file.id')}}</th>
                                    <th>{{trans('file.first_name')}}</th>
                                    <th>{{trans('file.last_name')}}</th>
                                    <th>{{trans('file.visits')}}</th>
                                    <th>{{trans('file.doctor')}}&nbsp;<i class="fa fa-stethoscope"></i></th>
                                    <th>{{trans('file.date')}}&nbsp;<i class="fa fa-calendar"></i></th>
                                    {{--<th>Next appointment &nbsp;<i class="fa fa-calendar"></i></th>--}}
                                    <th>{{trans('file.phone')}}&nbsp;<i class="fa fa-phone"></i></th>
                                </tr>
                            </tfoot>
                        </table>
                        </div>
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


