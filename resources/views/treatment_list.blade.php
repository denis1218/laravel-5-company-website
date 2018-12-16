@extends('master')

@section('style')

    <script src="{{ asset('/js/jscolor.js') }}" ></script>
@endsection

@section('content')

    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>{{trans('file.treatment_list')}}</h5>
            </div>
            <div class="ibox-content">

                {{-- row for table --}}
                <div class="row">
                    <div class="col-md-6">
                        <form action="/treatment-list" method="post">
                            <div class="form-group">
                                <lable for="form-control">{{trans('file.treatment')}}</lable>
                                <input type="text" class="form-control" name="treatment" required/>
                            </div>
                            <div class="form-group">
                                <lable for="form-control">{{trans('file.estimated_fee')}}</lable>
                                <input type="text" class="form-control" name="estimated_fee" required/>
                            </div>

                            <div class="form-group">
                                <label>Choose color treatment</label>
                                <input type="text" value="#00AABB" class="jscolor form-control"  name="color"/>
                            </div>


                            <div class="col-md-5">
                                <button type="submit" class="btn btn-primary" name="submit"><i class="fa fa-save"></i>&nbsp;{{trans('file.save')}}</button>
                                <button type="reset" class="btn btn-white" name="reset"><i class="fa fa-spin"></i>&nbsp;{{trans('file.reset')}}</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>{{trans('file.id')}}</th>
                                    <th>{{trans('file.treatment')}}</th>
                                    <th>{{trans('file.estimated_fee')}}</th>
                                    <th>{{trans('file.color')}}</th>
                                    <th>{{trans('file.delete')}}</th>
                                <tr>
                            </thead>
                            <tbody>
                                @foreach($treatment as $treatments)
                                    <tr>
                                        <td>{{ $treatments->id }}</td>
                                        <td>{{ $treatments->treatment }}</td>
                                        <td>{{ $treatments->estimated_fee }}</td>
                                        <td><label style="background: #{{ $treatments->color }}; padding: 3px;">{{ $treatments->color }}</label></td>
                                        <td>
                                            <form action="/treatment-list/{{ $treatments->id }}" method="post" id="formDelete">
                                                @method('delete')
                                                <a  class="btn btn-xs btn-danger demoDelete"  name="delete" href="/expense-category/{{ $treatments->id }}">
                                                    {{trans('file.delete')}} &nbsp;<i class="fa fa-trash"></i>
                                                </a>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>{{trans('file.id')}}</th>
                                    <th>{{trans('file.treatment')}}</th>
                                    <th>{{trans('file.estimated_fee')}}</th>
                                    <th>{{trans('file.color')}}</th>
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
                    title: "Are you sure?",
                    text: "You will not be able to recover this imaginary file!",
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


