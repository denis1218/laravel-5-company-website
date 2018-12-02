@extends('master')

@section('style')
    <!-- Data Tables -->


@endsection

@section('content')

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>{{trans('file.expense')}}</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                    @if(isset($success))
                    <div class="alert alert-success  alert-dismissible">
                    {{$success}}
                    </div>
                    @endif
                    <!-- form -->
                        <div class="row">
                            <div class="col-lg-5">
                                <form id="form" method="post" action="/expenditure">
                                    {{csrf_field()}}

                                    <div class="form-group">
                                        <label>{{trans('file.to_whom')}}</label>
                                        <div><input type="text" name="receiver" class="form-control" placeholder="{{trans('file.to_whom')}}" required></div>
                                    </div>

                                    <div class="form-group">
                                        <label>{{trans('file.paid_amount')}}</label>
                                        <div><input type="number" name="amount" class="form-control" placeholder="{{trans('file.paid_amount')}}" required></div>
                                    </div>

                                    <div class="form-group">
                                        <label>{{trans('file.category')}}</label>
                                        <div>
                                            <select class="select2_demo_1 form-control" name="category" required>
                                                <option value="" selected disabled>{{trans('file.select_category')}}</option>
                                                @foreach($expenseCategory as $categories)
                                                    <option value="{{ $categories->category }}">{{ $categories->category }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label>{{trans('file.description')}}</label>
                                        <div><textarea class="form-control" name="description" id="grade"
                                                       placeholder="{{trans('file.description')}}"
                                                       style="resize:none;" required></textarea></div>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-group">
                                            <button class="btn btn-primary" type="submit">{{trans('file.save_and_print')}}</button>
                                            <button class="btn btn-white" type="reset">{{trans('file.reset')}}</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')

    <script src="{{ asset('dashboard/js/plugins/toastr/toastr.min.js') }}"></script>

    <script type="text/javascript">
        $(function () {
            $('#form').submit(function (){
                // Display a success toast, with a title
//                toastr.info('Successfully Inserted !');
                toastr.info('Successfully Inserted !',{timeOut: 7000});
            });
        });
    </script>
    @endsection