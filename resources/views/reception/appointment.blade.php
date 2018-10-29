@extends('master')

@section('style')
 <style>
     .nopadding{
         padding: 0px !important;
         margin: 0px !important;
     }
 </style>
@endsection

@section('content')

    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>{{trans('file.appointment_patient')}}</h5>
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
                @include('layout.messages')
                {{--doctor's specific patients--}}
                <div class="row">
                            <div class="col-md-3">
                                    <a href="/patient/create">
                                        <button class="btn btn-primary" style="width:87%;">
                                            <img src="{{ asset('img/patient.png') }}" width="20px" class="pull-left"/>&nbsp; {{trans('file.add_new_patient')}}
                                        </button>
                                    </a>
                             </div>
                            <div class="col-md-3">
                                <a href="/new-patient-today">
                                    <button class="btn btn-info" style="width:87%;">
                                        <img src="{{ asset('img/list_new_patient.png') }}" width="30px" class="pull-left"/>&nbsp;{{trans('file.list_new_patient_today')}}
                                    </button>
                                </a>
                            </div>
                    <div class="col-md-3">
                                <a href="/next-appointment-patient">
                                    <button class="btn" style="width:87%; background-color: #55ddff; color: #ffffff">
                                        <img src="{{ asset('img/list_appointment.png') }}" width="30px" class="pull-left"/>{{trans('file.list_next_appointment_today')}}
                                    </button>
                                </a>
                    </div>
                    <div class="col-md-3">
                                <a href="/miss-next-appointment-patient">
                                    <button class="btn" style="width:87%; background-color: #12cdba; color: #ffffff">
                                        <img src="{{ asset('img/miss_appointment.png') }}" width="30px" class="pull-left"/>&nbsp;{{trans('file.miss_list_next_appointment')}}
                                    </button>
                                </a>
                    </div>

                <br/>


                            <div class="col-md-9 pull-right">
                                {{--<h3>{{trans('file.note')}}</h3>--}}

                            </div>
                        </div>
                        <br/>
                        <div class="tabs-container">
                            <div class="tabs-left">
                                {{--navigation list--}}
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#home" style="color:black;">{{trans('file.all_patient')}}</a></li>
                                    @foreach($doctor_list as $doctors)
                                        <li class=""><a data-toggle="tab" href="#{{ $doctors->id }}"
                                                        style="color:black;">Dr.
                                                &nbsp;{{ $doctors->first_name }} {{ $doctors->last_name }}</a></li>
                                    @endforeach
                                </ul>
                                {{--end of navigation list--}}

                                {{--Doctors tabs--}}
                                <div class="tab-content bg-success" style="">
                                    <div id="home" class="tab-pane active">
                                        <div class="panel-body">

                                                <div class="col-md-1 " style="margin-right: 30px;">
                                                    <form method="get" action="/patient">
                                                        <input type="hidden" name="date"
                                                               value="{{ \Carbon\Carbon::yesterday()->toDateString() }}"/>
                                                        <button class="btn btn-white" type="submit"><i class="fa fa-arrow-left"></i>{{trans('file.previous')}}
                                                        </button>
                                                    </form>
                                                </div>

                                                <div class="col-md-1 nopadding">
                                                    <a href="/patient" class="btn btn-primary" type="button">{{trans('file.today')}}
                                                    </a>
                                                </div>

                                                <div class="col-md-1 nopadding">
                                                    <form method="get" action="/patient">
                                                        <input type="hidden" name="date"
                                                               value="{{ \Carbon\Carbon::tomorrow()->toDateString() }}"/>
                                                        <button class="btn btn-white" type="submit">{{trans('file.next')}}<i class="fa fa-arrow-right"></i></button>
                                                    </form>
                                                </div>


                                                <div class="col-sm-5 pull-right">
                                                    <form action="/patient" method="get">
                                                        <div class="input-group">
                                                        <span class="input-group-btn">
                                                        <button type="submit"
                                                                class="btn btn-primary"><i class="fa fa-calendar"></i> {{trans('file.set_date')}}</button> </span>
                                                            <input type="date" name="date"  class="form-control"/>
                                                        </div>
                                                    </form>
                                                </div>


                                                <div class="col-md-5 pull-right">
                                                    <div class="input-group">
                                                            <span class="input-group-btn">
                                                            <button type="button"
                                                                    class="btn btn-primary"><i class="fa fa-search"></i>{{trans('file.search')}}</button> </span>
                                                        <input type="text" id="search_all_patient" onkeyup="search_all_patient()" placeholder="{{trans('file.search_patient_name')}}" class="input-md form-control">
                                                    </div>
                                                </div>
                                            {{-- tab all patient in queue with defirrent doctor --}}
                                            <div class="col-md-12">
                                                <h5>{{trans('file.show_all_patient')}}</h5>

                                                <div class="table-responsive">
                                                    <table class="table table-hover  no-margins" id="table_all_patient">
                                                        <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>{{trans('file.p_id')}}</th>
                                                            <th>{{trans('file.patient_name')}}</th>
                                                            <th>{{trans('file.last_name')}}</th>
                                                            <th>{{trans('file.doctor_name')}}</th>
                                                            <th>{{trans('file.status')}}</th>
                                                            <th>{{trans('file.appointment_date')}}</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @if(count($patient_all)>0)
                                                            @foreach($patient_all as $patients)
                                                                <tr>
                                                                    <td>{{ $patients->id }}</td>
                                                                    <td>{{ $patients->id_patient }}</td>
                                                                    <td>{{ str_limit($patients->name ,8)}}</td>
                                                                    <td>{{ $patients->lastname }}</td>
                                                                    <td>{{ str_limit($patients->doctor->first_name ,7)}}</td>
                                                                    <td>{{ $patients->status }}</td>
                                                                    <td>{{ str_limit($patients->next_appointment,16 )}}</td>
                                                                </tr>
                                                            @endforeach
                                                        @else
                                                            <h3 class="text-danger">{{trans('file.there_is_no')}}</h3>
                                                        @endif
                                                        </tbody>
                                                    </table>
                                                    {{--                                                    {{ $patient_all->links() }}--}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{--first doctor--}}
                                    @foreach($doctor_list as $list)

                                        <div id="{{ $list->id }}" class="tab-pane">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-sm-11">
                                                        <div class="table-responsive">
                                                            <table class="table table-hover  no-margins">
                                                                <thead>
                                                                <tr>
                                                                    <td>{{trans('file.p_id')}}</td>
                                                                    <th>{{trans('file.patient_name')}}</th>
                                                                    <th>{{trans('file.last_name')}}</th>
                                                                    <th>{{trans('file.status')}}</th>
                                                                    <th>{{trans('file.appointment_date')}}</th>
                                                                    <th>{{trans('file.add_to_queue')}}</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                @if(count($list->patient_for_today) > 0)
                                                                    @foreach($list->patient_for_today as $pati)
                                                                        <tr>
                                                                            <td>{{ $pati->id_patient }}</td>
                                                                            <td>{{ $pati->name }}</td>
                                                                            <td>{{ $pati->lastname }}</td>
                                                                            <td>{{ $pati->status }}</td>
                                                                            <td>{{ $pati->next_appointment }}</td>
                                                                            <td>
                                                                                <form action="/patient/{{ $pati->id }}"
                                                                                      method="post">
                                                                                    {{--                                                                                {{ method_field('patch') }}--}}
                                                                                    @method('PUT')
                                                                                    @csrf
                                                                                    <button type="button"
                                                                                            class="btn btn-xs btn-primary demo3">
                                                                                        Check in
                                                                                    </button>
                                                                                </form>
                                                                            </td>
                                                                        </tr>
                                                                    @endforeach
                                                                @else
                                                                    <h3 class="text-danger">{{trans('file.there_is_no')}}</h3>
                                                                @endif
                                                                </tbody>
                                                            </table>
                                                            {{--                                                            {{ $list->links() }}--}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    @endforeach
                                </div>
                            </div>
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

    <script>
        function deletePatient(id) {
            event.preventDefault();
            $('#delete-patient').modal('show');
            $('#delete-route').attr('href', 'patient/' + id + '/delete');
        }
    </script>


    {{-- sweet alert --}}
    <script>
        $(document).ready(function () {


            $('.demo3').on('click', function (e) {
                e.preventDefault();
                var form = $(this).parents('form');
                swal({
                    title: "Are you sure?",
                    text: "To put this patient in queue for today!",
                    type: "success",
                    showCancelButton: true,
                    confirmButtonColor: "#317cdd",
                    confirmButtonText: "Yes, put it!",
                    closeOnConfirm: false
                }, function (isConfirm) {
                    if (isConfirm) form.submit();
                });
            });

            $('.done').on('click', function (e) {
                e.preventDefault();
                var form = $(this).parents('form');
                swal({
                    title: "Are you sure?",
                    text: "This patient visited doctor!",
                    type: "success",
                    showCancelButton: true,
                    confirmButtonColor: "#3ddd48",
                    confirmButtonText: "Yes, Visited!",
                    closeOnConfirm: false
                }, function (isConfirm) {
                    if (isConfirm) form.submit();
                });
            });

        });
    </script>
@endsection


