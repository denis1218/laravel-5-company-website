@extends('master')

@section('style')

@endsection

@section('content')

    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>{{trans('file.teethshade')}}</h5>

            </div>
            <div class="ibox-content">

                {{-- row for table --}}
                <div class="row">
                    <div class="col-md-6">
                        <form action="/teeth-shade" method="post">
                            <div class="form-group">
                                <lable for="form-control">{{trans('file.teethshade')}}</lable>
                                <input type="text" class="form-control" name="shade"required="">
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
                                    <th>{{trans('file.teethshade')}}</th>
                                    <th>{{trans('file.delete')}}</th>
                                <tr>
                                </thead>
                                <tbody>
                                @foreach($teethshade as $shade)
                                    <tr>
                                        <td>{{ $shade->id }}</td>
                                        <td>{{ $shade->shade }}</td>
                                        <td>
                                            <form action="/teeth-shade/{{ $shade->id }}" method="post" id="formDelete">
                                                @method('delete')
                                                <a  class="btn btn-xs btn-danger demoDelete"  name="delete" href="/teeth-shade/{{ $shade->id }}">
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
                                    <th>{{trans('file.teethshade')}}</th>
                                    <th>{{trans('file.delete')}}</th>
                                </tr>
                                </tfoot>
                            </table>
                            {{$teethshade->links()}}
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


