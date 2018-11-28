@extends('master')

@section('style')
    <link href="{{asset('dashboard/css/plugins/dataTables/dataTables.bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/css/plugins/dataTables/dataTables.responsive.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/css/plugins/dataTables/dataTables.tableTools.min.css')}}" rel="stylesheet">

    <link href="{{asset('dashboard/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/css/plugins/sweetalert/sweetalert.css')}}" rel="stylesheet"/>
    <style media="screen">
        .bts:hover {
            box-shadow: 4px 4px 4px 4px grey;
            transform: scale(1.1);
        }

        .bts {
            height: 70px;
            width: 155px;
        }
    </style>
@endsection

@section('content')




    {{-- show all doctors --}}
    <div class="col-lg-12" >
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>{{trans('file.list_of_doctors')}}</h5>
            </div>
            <div class="ibox-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">

                            <div class="ibox-content">
                                <div class="row">
                                    <div class="col">
                                        {{--<a type="button" class="btn btn-primary" href="/doctors2" style="margin-left: 16px;"><i class="fa fa-arrow-left"></i>&nbsp;&nbsp;{{trans('file.goto_ds')}}  </a>--}}
                                        <hr>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                                        <thead>
                                        <tr>
                                            <th>{{trans('file.id')}}</th>
                                            <th>{{trans('file.doctor_name')}}</th>
                                            <th>{{trans('file.last_name')}}</th>
                                            <th>{{trans('file.father_name')}}</th>
                                            <th>{{trans('file.age')}}</th>
                                            <th colspan="2" class="text-center" >{{trans('file.working_time')}}</th>
                                            <th>{{trans('file.phone')}}</th>
                                            <th>{{trans('file.department')}}</th>
                                            <th>{{trans('file.gender')}}</th>
                                            <th>{{trans('file.max_patient')}}</th>
                                            <th>{{trans('file.salary_amount')}}</th>
                                            <th>{{trans('file.pay_salary')}}</th>
                                            <th>{{trans('file.edit')}}</th>
                                            <th>{{trans('file.delete')}}</th>
                                        </tr>
                                        </thead>
                                        @if(count($doctors) > 0)
                                        @foreach ($doctors as $doctor)
                                        <tbody>
                                        <tr class="gradeX">
                                        <td>{{$doctor->id}}</td>
                                        <td>{{$doctor->first_name}}</td>
                                        <td>{{$doctor->last_name}}</td>
                                        <td>{{$doctor->father_name}}</td>
                                        <td>{{$doctor->age}}</td>
                                        <td class="center">{{$doctor->start_work_time}}</td>
                                        <td class="center">{{$doctor->end_work_time}}</td>
                                        <td>{{$doctor->phone}}</td>
                                        <td class="center">{{$doctor->department}}</td>
                                        <td>{{$doctor->gender}}</td>
                                        <td>{{$doctor->max_patient}}</td>
                                        <td class="center">{{$doctor->salary_amount}}</td>
                                            <form action="/dr_salary">
                                                <input type="hidden" name="id" value="{{$doctor->id}}">
                                                <td>
                                                    <button type="submit" class="btn btn-xs btn-primary fa fa-dollar">&nbsp;{{trans('file.pay_salary')}}</button>
                                                </td>
                                            </form>
                                            <td>
                                                    <a class="btn btn-xs btn-success" href="/doctors/{{ $doctor->id }}/edit">{{trans('file.edit')}} &nbsp;
                                                            <i class="fa fa-edit"></i></a>
                                            </td>
                                            <td>
                                            <form id="del" action="/doctors/{{$doctor->id}}" method="post" id="myForm">
                                                @method('delete')
                                                <button class="btn btn-xs btn-danger demo3" >{{trans('file.delete')}} &nbsp;<i class="fa fa-remove"></i></button>
                                            </form>
                                        </td>
                                        </tr>
                                        </tbody>
                                         @endforeach
                                        @else
                                        <h1 class="text-center" style="color:red;">{{trans('file.ndry')}}</h1>
                                        @endif
                                    </table>
                                        {{$doctors->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- show all doctors --}}
@endsection

@section('script')

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
@endsection
