    @extends('master')

@section('style')
    <!-- Data Tables -->


@endsection

@section('content')

    <div class="wrapper wrapper-content animated fadeInRight" style="margin-top: -35px;">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>{{trans('file.erf')}}</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-lg-12">
                                <a href="/employee" class="btn btn-primary"><i class="fa fa-arrow-left"></i>&nbsp;
                                    {{trans('file.back')}}</a>
                                <br/>
                                <br>
                                <form id="form" method="post" action="/employee">
                                    {{csrf_field()}}
                                    <div class="row">
                                        <div class="col-md-5" style="margin-left:30px;">
                                            <div class="form-group">
                                                <label>{{trans('file.first_name')}}</label>
                                                <div><input type="text" name="firstname" class="form-control"
                                                            placeholder="{{trans('file.first_name')}}" required></div>
                                            </div>

                                            <div class="form-group">
                                                <label>{{trans('file.last_name')}}</label>
                                                <div><input type="text" name="lastname" class="form-control"
                                                            placeholder="{{trans('file.last_name')}}" required></div>
                                            </div>
                                            <div class="form-group">
                                                <label>{{trans('file.age')}}</label>
                                                <div><input type="number" name="age" class="form-control" maxlength="2"
                                                            oninput="javscript:if(this.value.length>this.maxLength) this.value=this.value.slice(0,this.maxLength);"
                                                            placeholder="{{trans('file.age')}}" required></div>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <div class="col-sm-3"><label
                                                            class="control-label">{{trans('file.gender')}}
                                                        :</label></div>
                                                <div class="col-sm-4">
                                                    <div class="i-checks"><label><input type="radio" value="male"
                                                                                        name="gender"
                                                                                        class="form-control"
                                                                                        required>&nbsp;&nbsp;{{trans('file.male')}}
                                                        </label></div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="i-checks"><label> <input type="radio" value="female"
                                                                                         name="gender"
                                                                                         class="form-control"
                                                                                         required>&nbsp;&nbsp; {{trans('file.female')}}
                                                        </label></div>
                                                </div>
                                            </div>
                                            <br>
                                            <br>
                                            <div class="form-group">
                                                <label>{{trans('file.phone')}}</label>
                                                <div><input type="number" name="phone" class="form-control" maxlength="10"
                                                            placeholder="{{trans('file.phone')}}"
                                                            oninput="javascript: if(this.value.length > this.maxLength) this.value=this.value.slice(0, this.maxLength);"
                                                            required></div>
                                            </div>
                                        </div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-5">

                                            <div class="form-group">
                                                <label>{{trans('file.salary')}}</label>
                                                <div><input type="number" name="salary" class="form-control" placeholder="{{trans('file.salary')}}" maxlength="7"
                                                            oninput="javascript: if(this.value.length>this.maxLength) this.value=this.value.slice(0,this.maxLength);"
                                                            required></div>
                                            </div>
                                            <div class="form-group">
                                                <label>{{trans('file.address')}}</label>
                                                <div><input type="text" name="address" class="form-control" placeholder="{{trans('file.address')}}" required></div>
                                            </div>
                                            <div class="form-group">
                                                <label>{{trans('file.position')}}</label>
                                                <div><input type="text" name="position" class="form-control" placeholder="{{trans('file.position')}}" required></div>
                                            </div>


                                                    <div class="form-group" style="margin-top: 30px;">
                                                        <button class="btn btn-white" type='reset'>{{trans('file.reset')}}</button>&nbsp;
                                                        <button class="btn btn-primary " type="submit" name="submit" value="Save"
                                                                >{{trans('file.save')}}
                                                        </button>
                                                    </div>

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

    <script>
        function compute() {
            var q = document.getElementById('q').value;
            var p = document.getElementById('p').value;
            var t = p * q;
            document.getElementById('t').value = t;
        }
    </script>

    <script src="{{ asset('dashboard/js/plugins/toastr/toastr.min.js') }}"></script>

    <script type="text/javascript">
        $(function () {
            $('#form').submit(function () {
                // Display a success toast, with a title
//                toastr.info('Successfully Inserted !');
                toastr.info('Successfully Inserted !', {timeOut: 7000});
            });
        });
    </script>
@endsection