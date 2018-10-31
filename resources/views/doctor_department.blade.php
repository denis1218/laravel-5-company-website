@extends('master')

@section('style')

@endsection

@section('content')

    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>{{trans('file.doctor_department')}}</h5>

            </div>
            <div class="ibox-content">

                {{-- row for table --}}
                <div class="row">
                    <div class="col-md-6">
                        <form action="/doctor-department" method="post">
                            <div class="form-group">
                                <lable for="form-control">{{trans('file.department')}}</lable>
                                <input type="text" class="form-control" name="department"/>
                            </div>
                            <div class="col-md-5">
                                <button type="submit" class="btn btn-primary" name="submit"><i class="fa fa-save"></i>&nbsp;{{trans('file.save')}}</button>
                                <button type="reset" class="btn btn-white" name="reset"><i class="fa fa-spin"></i>&nbsp;{{trans('file.reset')}}</button>
                            </div>
                        </form>
                    </div>
                    @include('layout.messages')
                    <div class="col-md-6">
                        <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>{{trans('file.id')}}</th>
                                    <th>{{trans('file.department')}}</th>
                                    <th>{{trans('file.delete')}}</th>
                                <tr>
                            </thead>
                            <tbody>
                                @foreach($doctor_department as $departments)
                                    <tr>
                                        <td>{{ $departments->id }}</td>
                                        <td>{{ $departments->department }}</td>
                                        <td>
                                            <form action="/doctor-department/{{ $departments->id }}" method="post" id="formDelete">
                                                @method('delete')
                                                <a  class="btn btn-xs btn-danger demoDelete"  name="delete" href="/expense-category/{{ $departments->id }}">
                                                    {{trans('file.delete')}}
                                                </a>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>{{trans('file.id')}}</th>
                                    <th>{{trans('file.department')}}</th>
                                    <th>{{trans('file.delete')}}</th>
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
        $(document).ready(function () {

            $('.demoDelete').on('click',function(e){
                e.preventDefault();
                var form = $(this).parents('form');
                swal({
                    title: "{{trans('file.are_you_sure')}}",
                    text: "{{trans('file.ywnba')}}",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "{{trans('file.yes_delete')}}",
                    closeOnConfirm: false
                }, function(isConfirm){
                    if (isConfirm) form.submit();
                });
            });




        });
    </script>
@endsection


