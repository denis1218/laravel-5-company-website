@extends('master')

@section('style')
    <!-- Data Tables -->
    <style>
        .buttonList li
        {
            display: inline-block;
            /* You can also add some margins here to make it look prettier */
            zoom: 1;
            *display: inline;
            margin-left:20px;
            /* this fix is needed for IE7- */
        }
    </style>

@endsection

@section('content')

    <div class="wrapper wrapper-content animated fadeInRight" style="margin-top: -35px;">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>{{trans('file.sr')}}</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <a class="btn btn-primary" href="/trader"><i class="fa fa-arrow-left"></i>&nbsp; Back</a><br/>
                        <div class="row">
                            <div class="col-lg-5">
                                <form id="form" method="post" action="/trader">
                                    {{csrf_field()}}

                                    <div class="form-group">
                                        <label>{{trans('file.first_name')}}</label>
                                        <div><input type="text" name="name" class="form-control" placeholder="{{trans('file.first_name')}}" required></div>
                                    </div>

                                    <div class="form-group">
                                        <label>{{trans('file.last_name')}}</label>
                                        <div><input type="text" name="last_name" class="form-control" placeholder="{{trans('file.last_name')}}" required></div>
                                    </div>

                                    <div class="form-group">
                                        <label>{{trans('file.phone')}}</label>
                                        <div><input type="phone" maxlength="10" name="phone" class="form-control" placeholder="{{trans('file.phone')}}" required></div>

                                    </div>
                                    <div class="form-group">
                                        <label>{{trans('file.org')}}</label>
                                        <div><input type="text" name="organization" class="form-control" placeholder="{{trans('file.org')}}" required></div>

                                    </div>
                                    <div class="form-group">
                                        <label>{{trans('file.address')}}</label>
                                        <div><input type="text" name="address" class="form-control" placeholder="{{trans('file.address')}}" required></div>

                                    </div>
                                    <div class="form-group">
                                        <label>{{trans('file.pp')}}</label>
                                        <div><select type="text" name="payment_process" class="form-control" required>
                                                <option value="{{trans('file.pp')}}" disabled selected>{{trans('file.pp')}}</option>
                                                <option value="{{trans('file.cash')}}">{{trans('file.cash')}}</option>
                                                <option value="{{trans('file.weekly')}}">{{trans('file.weekly')}}</option>
                                                <option value="{{trans('file.monthly')}}">{{trans('file.monthly')}}</option>
                                            </select></div>

                                    </div>

                                    <div class="form-group">
                                        <div class="form-group">
                                            <button class="btn btn-primary" type="submit">{{trans('file.save')}}</button>
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