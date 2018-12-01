@extends('master')

@section('style')
    <style>
        .nopadding {
            padding: 0px !important;
            margin: 0px !important;
        }

        .list-meridiem{
            list-style-type: none;
            margin: 10px;
            padding: 10px;
            overflow: hidden;
        }
        .list-meridiem li{
            float: left;
        }

    </style>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-2 col-xs-3 text-center" style="margin-top:5px;">
            <a href="/patient/create">
                <button class="btn btn-primary" >
                    <img src="{{ asset('img/patient.png') }}" width="30px"
                         class=""/>&nbsp;<br/> {{trans('file.add_new_patient')}}
                </button>
            </a>
        </div>
        <div class="col-md-2 text-center col-xs-4" style="margin-top:5px;">
            <a href="/new-patient-today">
                <button class="btn btn-info">
                    <img src="{{ asset('img/list_new_patient.png') }}" width="50px"
                         class=""/><br/>{{trans('file.list_new_patient_today')}}
                </button>
            </a>
        </div>
        <div class="col-md-2 text-center col-xs-4" style="margin-top:5px;">
            <a href="/next-appointment-patient">
                <button class="btn" style=" background-color: #62c694; color: #ffffff">
                    <img src="{{ asset('img/list_appointment.png') }}" width="50px"
                         class=""/><br/>{{trans('file.list_next_appointment_today')}}
                </button>
            </a>
        </div>
        <div class="col-md-2 text-center col-xs-4" style="margin-top:5px;">
            <a href="/miss-next-appointment-patient">
                <button class="btn" style=" background-color: #12cdba; color: #ffffff">
                    <img src="{{ asset('img/miss_appointment.png') }}" width="50px"
                         class=""/><br/>{{trans('file.miss_list_next_appointment')}}
                </button>
            </a>
        </div>
        <div class="col-md-2 text-center col-xs-3" style="margin-top:5px;">
            <a href="/patient_report">
                <button class="btn" style=" background-color: #3989cd; color: #ffffff">
                    <img src="{{ asset('img/patient_list.png') }}" width="50px"
                    /><br/>{{trans('file.all_patient')}}
                </button>
            </a>
        </div>
        <br/>
    </div>
    <br/>
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>{{trans('file.appointment_patient')}}</h5>
            </div>
            <div class="ibox-content">

                <div class="row">
                    <div class="col-sm-5">
                        <form action="/patient" method="get">
                            <label>{{trans('file.spbd')}}</label>
                            <div class="input-group">
                            <span class="input-group-btn">
                                <button type="submit"
                                        class="btn btn-primary"><i
                                            class="fa fa-calendar"></i> {{trans('file.set_date')}}</button> </span>
                                <input type="date" name="date" class="form-control"/>
                            </div>
                        </form>
                    </div>

                    <div class="col-md-12 pull-right col-xs-12">
                        <div class="input-group">
                            <span class="input-group-btn">
                                <form action="/patient_report/search" method="post">
                                <div class="input-group col-md-12 col-xs-12">
                                        <span class="input-group-btn">
                                                <button type="submit" class="btn btn-primary" ><i
                                                            class="fa fa-search"></i>&nbsp;{{trans('file.search')}}</button> </span>
                                                <input type="text" placeholder="{{trans('file.search_patient_name_id')}}"
                                                       id="search" name="search"
                                                       class=" form-control">

                                </div>
                              </form>
                        </div>
                    </div>

                    <div class="row">
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
                                        <th>Set Appointment</th>
                                        <th>History</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
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
                                                @if($patients->doctor != null )
                                                    <td>{{ str_limit($patients->doctor->first_name ,7)}} </td>
                                                @else
                                                    <td>Null</td>
                                                @endif
                                                <td>{{ $patients->status }}</td>
                                                <td>{{ str_limit($patients->next_appointment,16 )}}, {{ $patients->time }} {{ $patients->meridiem }}</td>
                                                <td><a class="btn btn-xs btn-primary" data-toggle="modal" data-target="#e{{$patients->id}}">Set appointment &nbsp;<i class="fa fa-history"></i></a></td>
                                                <td><a class="btn btn-xs btn-success" href="/patient_report/{{ $patients->id }}">History &nbsp; <i class="fa fa-file-pdf-o"></i></a></td>
                                                <td><a class="btn btn-xs btn-info" href="/patient/{{ $patients->id }}/edit">Edit &nbsp;<i class="fa fa-edit"></i></a></td>
                                                <td>
                                                    <form action="/patient/{{ $patients->id }}" method="post">
                                                        @method('delete')
                                                        <button class="btn btn-xs btn-danger demo4" type="submit">Delete &nbsp;<i class="fa fa-remove"></i></button>
                                                    </form>
                                                </td>
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

            </div>
        </div>
    </div>

    {{-- end of all box content --}}

    @foreach($patient_all as $patient)
        {{--modal window to show editing detail of doctor--}}
        <div class="modal inmodal" id="e{{$patient ->id}}" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content animated fadeIn">
                    <div class="modal-header">

                        <button type="button" class="close" data-dismiss="modal"><span
                                    aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title"><i class="fa fa-history"></i>&nbsp;&nbsp;{{trans('file.change_appointment')}}</h4>
                    </div>
                    <form id="form" action="/next-appointment-patient-edit/{{$patient->id}}" method="post">
                        {{method_field('patch')}}
                        <div class="modal-body">

                            <div class="form-group"><label>{{trans('file.change_appointment')}}</label>
                                <input type="date" name="next_appointment_date" placeholder="{{trans('file.next_appointment_date')}}"
                                       value="{{$patient->next_appointment}}" class="form-control"></div>

                            <div class="form-group"><label>Time</label>
                                <input type="number" name="time" placeholder="Time" max="12" min="1"
                                       value="{{$patient->time}}" class="form-control"></div>

                            <div class="form-group"><label>Meridien</label>
                                    @if($patient->meridiem == "AM")
                                        <ul class="list-meridiem">
                                            <li><div class="i-checks"><label>AM
                                                        <input type="radio" name="meridiem" checked
                                                               value="AM" class="form-control"></label></div></li>
                                            <li><div class="i-checks"><label>
                                                        PM <input type="radio" name="meridiem"
                                                                  value="PM" class="form-control"></label></div></li>
                                        </ul>
                                        @elseif($patient->meridiem == "PM")
                                            <ul class="list-meridiem">
                                                <li><div class="i-checks"><label>AM
                                                            <input type="radio" name="meridiem"
                                                                   value="AM" class="form-control"></label></div></li>
                                                <li><div class="i-checks"><label>
                                                            PM <input type="radio" name="meridiem" checked
                                                                      value="PM" class="form-control"></label></div></li>
                                            </ul>
                                        @else
                                            <ul class="list-meridiem">
                                                <li><div class="i-checks"><label>AM
                                                            <input type="radio" name="meridiem"
                                                                   value="AM" class="form-control"></label></div></li>
                                                <li><div class="i-checks"><label>
                                                            PM <input type="radio" name="meridiem"
                                                                      value="PM" class="form-control"></label></div></li>
                                            </ul>
                                        @endif


                            </div>


                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-white" data-dismiss="modal">{{trans('file.close')}}</button>
                                <button type="submit"   class="btn btn-primary">{{trans('file.save')}}</button>

                            </div>
                    </form>
                </div>
            </div>
        </div>

    @endforeach
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

            $(document).ready(function () {
                $('.demo4').on('click',function(e){
                    e.preventDefault();
                    var form = $(this).parents('form');
                    swal({
                        title: "Are you Sure ?",
                        text: "To delete this patient",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Yes, delete it!",
                        closeOnConfirm: false
                    }, function(isConfirm){
                        if (isConfirm) form.submit();
                    });
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


