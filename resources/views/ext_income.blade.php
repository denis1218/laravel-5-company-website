@extends('master')

@section('style')

    <!-- Data Tables -->
    <link href="{{asset('dashboard/css/plugins/dataTables/dataTables.bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/css/plugins/dataTables/dataTables.responsive.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/css/plugins/dataTables/dataTables.tableTools.min.css')}}" rel="stylesheet">

    <link href="{{asset('dashboard/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/css/plugins/sweetalert/sweetalert.css')}}" rel="stylesheet"/>

    <link href="{{asset('css/hover/hover-min.css')}}" rel="stylesheet">


@endsection



@section('content')



    <!-- Nav-buttons -->
    @include('part.income_button_top')

    <!-- End of navButtons -->


    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>{{trans('file.other_income')}}</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li>
                                    <a href="#">Config option 1</a>
                                </li>
                                <li>
                                    <a href="#">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">

                        <!-- form -->

                        <form id="form" method="post" class="form-horizontal" action="/other-income">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label class="col-sm-2 control-label">{{trans('file.from_whom')}}:</label>
                                <div class="col-sm-10">
                                    <input type="text" name="from_whom" class="form-control" placeholder="{{trans('file.from_whom')}}" style="width:50%"
                                           required>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">{{trans('file.amount')}}:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="amount" placeholder="{{trans('file.amount')}}"
                                           style="width:50%" required>
                                </div>
                            </div>

                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">{{trans('file.purpose')}}:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="purpose" placeholder="{{trans('file.purpose')}}"
                                           style="width:50%" required>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">{{trans('file.description')}}:</label>
                                <div class="col-sm-10">
                                    <textarea rows="5" class="form-control" name="description" placeholder="{{trans('file.description')}}" style="width:50%; resize: none;" required></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-1 control-label"></label>
                                <div class="col-sm-10">
                                    <input type="hidden" name="toast" value="toast">
                                    <button type="submit" class="btn btn-primary btn-md" style="margin-left:110px;">{{trans('file.save')}}
                                        &nbsp;<i class="fa fa-save"></i></button>
                                    <button type="reset" class="btn btn-white btn-md" value="Reset">{{trans('file.reset')}}</button>
                                </div>
                            </div>


                        </form>

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
                toastr.info('Successfully Inserted !',{timeOut: 5000});
            });
        });
    </script>

@endsection
