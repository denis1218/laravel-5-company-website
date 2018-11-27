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

    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>{{trans('file.iopi')}}<i class="fa fa-info"></i></h5>
            </div>
            <div class="ibox-content" id="divone" style="background-color: #eee7ed">
                <div class="container" >
                    <div class="row">
                        <a class="btn btn-info" href="/outdated_patient" type="reset"><i class="fa fa-arrow-left"></i>&nbsp;&nbsp;{{trans('file.back')}}</a>

                        <form action="/outdated_patient" method="post">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{trans('file.bnumber')}} *</label>
                                    <input name="bill_number" type="text" value="0" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>{{trans('file.firstname')}} *</label>
                                    <input name="firstname" type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>{{trans('file.last_name')}} *</label>
                                    <input name="lastname" type="text" class="form-control ">
                                </div>

                                <div class="form-group">
                                    <label>{{trans('file.phone')}} *</label>
                                    <input name="phone" type="phone" class="form-control required">
                                </div>
                                <div class="form-group">
                                    <label>{{trans('file.date_register')}} *</label>
                                    <input name="date_register" type="date" class="form-control ">
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{trans('file.treatment')}} *</label>
                                    <input name="treatment" type="text" value="teeth problem" class="form-control ">
                                </div>
                                <div class="form-group">

                                    <label>{{trans('file.fee')}} *</label>
                                    <input name="fee" type="number" class="form-control" id="fee" onchange="subtractfee()">
                                </div>
                                <div class="form-group">
                                    <label>{{trans('file.paid')}} *</label>
                                    <input name="paid" type="number" class="form-control" id="paid" onchange="subtractfee()">
                                </div>
                                <div class="form-group">
                                    <label>{{trans('file.remaining')}} *</label>
                                    <input name="remaining" type="number" class="form-control" id="remaining">
                                </div>
                                <div>
                                    <button class="btn btn-primary pull-right" style="width: 200px" type="submit"><i class="fa fa-save"></i>&nbsp;&nbsp;{{trans('file.save')}}</button>
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

    <script>
        function subtractfee()
        {
            var fee = parseInt(document.getElementById("fee").value);
            var paid = parseInt(document.getElementById("paid").value);
            if (!fee) { fee = 0; }
            if (!paid) { paid = 0; }
            var remaining = document.getElementById("remaining");
            remaining.value = fee - paid;
        }
    </script>


@endsection
