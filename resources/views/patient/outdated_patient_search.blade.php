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

    <div class="col-lg-12 ">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Edit Patient Info&nbsp;<i class="fa fa-info"></i></h5>
            </div>

            <div class="ibox-content" id="divone">
                <div class="container">
                    <br/>

                    <div class="row">
                        <div class="col-md-12">
                            @if($patients == null)
                                <strong class="text-danger">No patient found</strong>
                                @endif
                           <table class="table table-stripped">
                               <thead>
                                    <tr>
                                        <th>Bill Number</th>
                                        <th>Firstname</th>
                                        <th>Lastname</th>
                                        <th>Phone</th>
                                        <th>Date Reg</th>
                                        <th>Fee</th>
                                        <th>Paid</th>
                                        <th>Remaining</th>
                                        <th>Receive Fee</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
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
                                       <td><button class="btn btn-xs btn-primary">Receive &nbsp;<i class="fa fa-money"></i></button></td>
                                       <td><button class="btn btn-xs btn-info">Edit &nbsp;<i class="fa fa-edit"></i></button></td>
                                       <td>
                                           <form action="/outdated_patient/{{ $patient->id }}" method="post">
                                               @method('DELETE')
                                               <button type="submit" class="btn btn-xs btn-danger demo3">Delete &nbsp;<i class="fa fa-remove"></i></button>
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
