@extends('master')

@section('style')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

@endsection

@section('content')

    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>{{trans('file.patient_report_table')}}<i class="fa fa-info"></i></h5>

            </div>
            <div class="ibox-content" id="divone">

                <div class="container">
                    <div class="row">

                        {{--first doctor--}}

                        <div class="">
                            <a class="btn btn-primary" href="{{ URL::previous() }}"><i class="fa fa-arrow-left"></i>&nbsp;Back</a>
                        </div>

                        <div class="row" style="margin-top:30px;">
                            <div class="col-sm-12">

                                <table class="table table-hover  no-margins" id="table_all_patient">
                                    <thead>
                                    <tr class="bg-light">
                                        <th>{{trans('file.id')}}</th>
                                        <th>{{trans('file.p_id')}}</th>
                                        <th>{{trans('file.patient_name')}}</th>
                                        <th>{{trans('file.last_name')}}</th>
                                        <th>{{trans('file.status')}}</th>
                                        <th>{{trans('file.next_appointment_date')}}</th>
                                        <th>{{trans('file.health_problem')}}</th>
                                        <th>Set Appointment</th>
                                        <th>{{trans('file.report')}}</th>
                                        <th>{{trans('file.edit')}}</th>
                                        <th>{{trans('file.delete')}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(count($data)>0)
                                        @foreach($data as $patient)
                                            <tr>
                                                <td>{{ $patient->id }}</td>
                                                <td>{{ $patient->id_patient }}</td>
                                                <td>{{ $patient->name }}</td>
                                                <td>{{ $patient->lastname }}</td>
                                                <td>{{ $patient->status }}</td>
                                                <td>{{$patient->next_appointment}}</td>
                                                <td class="">{{$patient->problem_health}}</td>
                                                <td><a class="btn btn-xs btn-primary" data-toggle="modal" data-target="#e{{$patient->id}}">Set appointment &nbsp;<i class="fa fa-history"></i></a></td>
                                                <td><a class="btn btn-xs btn-primary"
                                                       href="/patient_report/{{$patient->id}}"><i
                                                                class="fa fa-print"></i>
                                                        History</a></td>
                                                <td><a class="btn btn-xs btn-info" href="/patient/{{ $patient->id }}/edit">Edit &nbsp;<i class="fa fa-edit"></i></a></td>
                                                <td>
                                                <form action="/patient_report/{{ $patient->id }}" method="post" id="myForm">
                                                        @method('delete')
                                                        <button class="btn btn-xs btn-danger demo3"><i class="fa fa-remove"></i>
                                                            {{trans('file.delete')}}</button>
                                                    </form>
                                                </td>


                                            </tr>
                                        @endforeach
                                    @else
                                        <div class="alert alert-warning">
                                            <h4 style="color:#275bc6;">{{trans('file.there_is_not_patient')}}</h4>
                                        </div>
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @foreach($data as $patient)
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
    <!-- script -->



    {{-- Sweet alert for delete --}}
    <script>
        $(document).ready(function () {
            $('.demo3').on('click',function(e){
                e.preventDefault();
                var form = $(this).parents('form');
                swal({
                    title: "Do you want to delete this doctor ?",
                    text: "It will be deleted from database",
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
    </script>


    {{-- search using javascript --}}
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
