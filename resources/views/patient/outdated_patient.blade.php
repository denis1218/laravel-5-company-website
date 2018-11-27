@extends('master')

@section('style')
    <link href="{{ asset('dashboard/css/plugins/iCheck/custom.css') }}" rel="stylesheet">
    <style>


        .list-ul {
            list-style-type: none;
            margin: 10px;
            padding: 10px;
            overflow: hidden;
        }

        .list-ul li {
            float: left;
            margin-left: 15px;
        }

    </style>

@endsection

@section('content')

    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>{{trans('file.odp')}}&nbsp;<i class="fa fa-info"></i></h5>
            </div>

            <div class="ibox-content" id="divone">
                <div class="container">
                    <br/>
                    {{-- Search patient --}}
                    <div class="row">
                        <div class="col-md-2">
                            <a class="btn btn-success" href="/outdated_patient/create">{{trans('file.new_patient')}} &nbsp;<i class="fa fa-user-plus"></i></a>
                        </div>
                        <div class="col-sm-10">
                            <form action="/outdated_patient/search_user" method="post">
                                <div class="input-group">
                                        <span class="input-group-btn">
                                                <button type="submit" class="btn btn-md btn-primary" ><i
                                                            class="fa fa-search"></i>&nbsp;{{trans('file.search')}}</button> </span>
                                    <input type="text" placeholder="Search patient name - lastname - phone"
                                           id="search" name="search"
                                           class="input-md form-control">
                                </div>
                            </form>
                        </div>
                    </div>
                    <br/>

                    <div class="row">
                        <div class="col-md-12">
                           <table class="table table-stripped">
                               <thead>
                                    <tr>
                                        <th>{{trans('file.bnumber')}}</th>
                                        <th>{{trans('file.firstname')}}</th>
                                        <th>{{trans('file.last_name')}}</th>
                                        <th>{{trans('file.phone')}}</th>
                                        <th>{{trans('file.date_register')}}</th>
                                        <th>{{trans('file.fee')}}</th>
                                        <th>{{trans('file.paid')}}</th>
                                        <th>{{trans('file.remaining')}}</th>
                                        <th>{{trans('file.edit')}}</th>
                                        <th>{{trans('file.delete')}}</th>
                                    </tr>
                               </thead>
                               <tbody>
                               @foreach($patients as $patient)
                                   <tr>
                                       <td>{{ $patient->bill_number }}</td>
                                       <td>{{ $patient->firstname }}</td>
                                       <td>{{ $patient->lastname }}</td>
                                       <td>{{ $patient->phone }}</td>
                                       <td>{{ $patient->date_register }}</td>
                                       <td>{{ $patient->fee }}</td>
                                       <td>{{ $patient->paid }}</td>
                                       <td>{{ $patient->remaining }}</td>

                                       <td><a class="btn btn-xs btn-info" href="/outdated_patient/{{ $patient->id }}/edit">{{trans('file.edit')}} &nbsp;<i class="fa fa-edit"></i></a></td>

                                       <td>
                                           <form action="/outdated_patient/{{ $patient->id }}" method="post">
                                               @method('DELETE')
                                                <button type="submit" class="btn btn-xs btn-danger demo3">{{trans('file.delete')}} &nbsp;<i class="fa fa-remove"></i></button>
                                           </form>
                                       </td>
                                   </tr>
                                   @endforeach
                               </tbody>
                           </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection


@section('script')

    <script>
        $(document).ready(function () {
            $('.demo3').on('click',function(e){
                e.preventDefault();
                var form = $(this).parents('form');
                swal({
                    title: "Are you Sure ?",
                    text: "Delete this patient",
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


@endsection
