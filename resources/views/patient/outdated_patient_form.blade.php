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
                <h5>Insert Outdated Patient Info&nbsp;<i class="fa fa-info"></i></h5>
            </div>
            <div class="ibox-content" id="divone" style="background-color: #eee7ed">
                <div class="container" >
                    <div class="row">
                        <a class="btn btn-info" href="/outdated_patient" type="reset"><i class="fa fa-arrow-left"></i>&nbsp;&nbsp;Back</a>

                        <form action="/outdated_patient" method="post">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Bill number *</label>
                                    <input name="bill_number" type="text" value="0" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>First name *</label>
                                    <input name="firstname" type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Last Name *</label>
                                    <input name="lastname" type="text" class="form-control ">
                                </div>

                                <div class="form-group">
                                    <label>Phone *</label>
                                    <input name="phone" type="phone" class="form-control required">
                                </div>
                                <div class="form-group">
                                    <label>Date Register *</label>
                                    <input name="date_register" type="date" class="form-control ">
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Treatment *</label>
                                    <input name="treatment" type="text" value="teeth problem" class="form-control ">
                                </div>
                                <div class="form-group">
                                    <label>Fee *</label>
                                    <input name="fee" type="number" id="fee" onchange="subtractfee()" class="form-control ">
                                </div>
                                <div class="form-group">
                                    <label>Paid *</label>
                                    <input name="paid" type="number" id="paid" onchange="subtractfee()" class="form-control ">
                                </div>
                                <div class="form-group">
                                    <label>Remaining *</label>
                                    <input name="remaining"  type="number" id="remaining" class="form-control ">
                                </div>
                                <div>
                                    <button class="btn btn-primary pull-right" style="width: 200px" type="submit"><i class="fa fa-save"></i>&nbsp;&nbsp;Save</button>
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
