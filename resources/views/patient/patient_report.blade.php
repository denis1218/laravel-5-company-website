@extends('master')

@section('style')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

@endsection

@section('content')

    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>{{trans('file.patient_report_table')}}&nbsp;<i class="fa fa-info"></i></h5>
            </div>
            <div class="ibox-content" id="divone">
                <div class="container">
                  <div class="row">
                        <div class="row" style="">
                            <div class="col-sm-12">
                              <form action="/patient_report/search" method="post">
                                <div class="input-group">
                                        <span class="input-group-btn">
                                                <button type="submit" class="btn btn-sm btn-primary" ><i
                                                            class="fa fa-search"></i>&nbsp;{{trans('file.search')}}</button> </span>
                                                <input type="text" placeholder="{{trans('file.search_patient_name_id')}}"
                                                       id="search" name="search"
                                                       class="input-sm form-control">

                                </div>
                              </form>
                            </div>
                        </div>
                        <div class="row" style="margin-top:30px;">
                            <div class="col-md-12 col-xs-12">
                                <div class="table-responsive col-xs-12">

                                <table class="table table-hover  no-margins" id="table_all_patient">
                                    <thead>
                                    <tr class="bg-light">
                                        <th>{{trans('file.id')}}</th>
                                        <th>{{trans('file.p_id')}}</th>
                                        <th>{{trans('file.patient_name')}}</th>
                                        <th>{{trans('file.last_name')}}</th>
                                        <th>{{trans('file.doctor_name')}}</th>
                                        <th>{{trans('file.register')}}</th>
                                        <th>{{trans('file.status')}}</th>
                                        <th>{{trans('file.next_appointment_date')}}</th>
                                        <th>{{trans('file.health_problem')}}</th>
                                        <th>{{trans('file.report')}}</th>
                                        <th>{{trans('file.edit')}}</th>
                                        <th>{{trans('file.delete')}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(count($all_patient)>0)
                                        @foreach($all_patient as $patient)
                                            <tr>
                                                <td>{{ $patient->id }}</td>
                                                <td>{{ $patient->id_patient }}</td>
                                                <td>{{ $patient->name }}</td>
                                                <td>{{ $patient->lastname }}</td>\
                                                @if($patient->doctor != null)
                                                <td>{{ $patient->doctor->first_name }}</td>
                                                @else
                                                    <td>Null</td>
                                                    @endif
                                                <td>{{ $patient->created_at }}</td>
                                                <td>{{ $patient->status }}</td>
                                                <td>{{$patient->next_appointment}}</td>
                                                <td class="">{{$patient->problem_health}}</td>
                                                <td><a class="btn btn-xs btn-primary"
                                                       href="/patient_report/{{$patient->id}}"><i
                                                                class="fa fa-print"></i>
                                                        {{trans('file.print')}}</a></td>
                                                <td><a class="btn btn-xs btn-success" data-toggle="modal"
                                                       data-target="#e{{$patient->id}}"><i class="fa fa-edit"></i>
                                                        {{trans('file.edit')}}</a></td>
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
                                        <h3 style="color:red;">{{trans('file.there_is_no')}}</h3>
                                    @endif
                                    </tbody>
                                </table>
                                {{ $all_patient->links() }}
                                </div>
                            </div>
                        </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
    @foreach($all_patient as $patient)
        {{-- modal window to show editing detail of doctor--}}
        <div class="modal inmodal" id="e{{$patient->id}}" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content animated fadeIn">
                    <div class="modal-header">
                        <h4 class="modal-title">{{trans('file.info_patient')}}</h4>
                    </div>
                    <form id="form" action="/patient_report/{{$patient->id}}" method="post">
                        {{method_field('patch')}}
                        <div class="modal-body">
                            <input type="number" hidden name="id" value="{{ $patient->id }}">

                            <div class="form-group"><label>{{trans('file.first_name')}}</label>
                                <input type="text" name="name" placeholder="{{trans('file.first_name')}}"
                                       value="{{$patient->name}}" class="form-control"></div>

                            <div class="form-group"><label>{{trans('file.last_name')}}</label>
                                <input type="text" name="lastname" placeholder="{{trans('file.last_name')}}"
                                       value="{{$patient->lastname}}" class="form-control"></div>

                            <div class="form-group"><label>{{trans('file.phone')}}</label>
                                <input type="text" name="phone" placeholder="{{trans('file.phone')}}"
                                       value="{{$patient->phone}}" class="form-control">
                            </div>

                            <div class="form-group"><label>{{trans('file.status')}}</label>
                                <select name="status" class="form-control   ">
                                    <option selected disabled>{{ $patient->status }}</option>
                                    <option value="1">first</option>
                                    <option value="2">second</option>
                                    <option value="3">third</option>
                                    <option value="4">fourth</option>
                                    <option value="5">fifth</option>
                                    <option value="6">sixth</option>
                                    <option value="7">seventh</option>
                                </select>
                            </div>

                            <div class="form-group"><label>{{trans('file.next_appointment')}}</label>
                                <input type="date" name="next_appointment" placeholder="{{trans('file.next_appointment')}}"
                                       value="{{$patient->next_appointment}}"
                                       class="form-control"></div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-white"
                                    data-dismiss="modal">{{trans('file.close')}}</button>
                            <button type="submit" class="btn btn-primary">{{trans('file.save')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    @endforeach

@endsection


@section('script')



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
