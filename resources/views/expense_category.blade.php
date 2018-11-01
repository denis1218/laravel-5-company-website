@extends('master')

@section('style')

@endsection

@section('content')

    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>{{trans('file.expense_category')}}</h5>
            </div>
            <div class="ibox-content">

                {{-- row for table --}}
                <div class="row">
                    <div class="col-md-6">
                        <form action="/expense-category" method="post">
                            <div class="form-group">
                                <lable for="form-control">{{trans('file.category')}}</lable>
                                <input type="text" class="form-control" name="category"/>
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
                                    <th>{{trans('file.category')}}</th>
                                    <th>{{trans('file.delete')}}</th>
                                <tr>
                            </thead>
                            <tbody>
                                @foreach($category as $categories)
                                    <tr>
                                        <td>{{ $categories->id }}</td>
                                        <td>{{ $categories->category }}</td>
                                        <td>
                                            <form action="/expense-category/{{ $categories->id }}" method="post" id="formDelete">
                                                @method('delete')
                                                <a  class="btn btn-xs btn-danger demoDelete"  name="delete" href="/expense-category/{{ $categories->id }}">
                                                    delete
                                                </a>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>{{trans('file.id')}}</th>
                                    <th>{{trans('file.category')}}</th>
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


