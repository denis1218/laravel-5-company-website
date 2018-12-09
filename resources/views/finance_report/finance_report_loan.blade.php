@extends('master')

@section('style')

@endsection

@section('content')

    <div class="row text-center">
        <div class="col-md-12">
            <h1>Financial Report Loan &nbsp;&nbsp;<img src="img/expense_icon.png" width="100px;"/></h1>
        </div>
    </div>

    <br/>
    <br/>

    {{-- financial report all report expenses --}}
    <div class="row page-wrapper border-bottom white-bg"
         style=" margin-top:-20px;margin-left: 1px; margin-bottom: 20px; padding-bottom: 15px;">
        <div class="col-md-6">
            {{--start form for single day report--}}
            <form action="/finance_report_loan_all">
                <div class="row">
                    <div class="col-md-6" style="margin-top:15px; margin-left:20px;">
                        <h3> All Loan with Paid</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group" style="margin-left:35px;">
                            <div class="input-daterange input-group" id="">
                                <span class="input-group-addon">&nbsp;  <i class="fa fa-users"></i> &nbsp;</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group" style="margin-left:35px;">
                        <div class="col-md-2">
                            <button class="btn btn-sm btn-primary " type="submit"
                            ><i class="fa fa-tag" style=" color:#ffe118 ;"></i>
                                &nbsp;{{trans('file.report')}} &nbsp;
                            </button>
                        </div>
                    </div>
                </div>
            </form>
            {{--end form for single day report--}}

        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6" style="margin-top:15px;">
                    <h3> Supplier Report</h3>
                </div>
            </div>
            {{--start form of range day report--}}
            <form action="finance_report_loan/single/supplier" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="font-noraml">Select supplier</label>
                            <div class="input-daterange input-group" id="">
                                <span class="input-group-addon"> &nbsp;<i class="fa fa-user"></i></span>
                                <select type="text" class="input-sm form-control" name="supplier_id" required>
                                    <option disabled selected> Select supplier</option>
                                    @foreach($traders as $trader)
                                        <option value="{{ $trader->id }}">{{ $trader->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-2">
                            <button class="btn btn-sm btn-primary" type="submit"
                            ><i class="fa fa-tag"
                                style=" color:#ffe118 ;"></i>
                                &nbsp;{{trans('file.report')}}&nbsp;&nbsp;</button>
                        </div>
                    </div>
                </div>
            </form>
            {{--end form of range day--}}

        </div>
    </div>
    {{-- end all report --}}


    <br/>
    <br/>






@endsection


@section('script')
    <!-- script -->

    <script src="dashboard/js/plugins/sweetalert/sweetalert.min.js"></script>
    <!-- Data Tables -->
    <script src="dashboard/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="dashboard/js/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script src="dashboard/js/plugins/dataTables/dataTables.responsive.js"></script>
    <script src="dashboard/js/plugins/dataTables/dataTables.tableTools.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="dashboard/js/inspinia.js"></script>
    <script src="dashboard/js/plugins/pace/pace.min.js"></script>

    <script>
        $(document).ready(function () {

            $('.demo1').click(function () {
                swal({
                    title: "Welcome in Alerts",
                    text: "Lorem Ipsum is simply dummy text of the printing and typesetting industry."
                });
            });

            $('.demo2').click(function () {
                swal({
                    title: "Successfully Send!",
                    text: "X-Ray Document Successfully send to doctor!",
                    type: "success"
                });
            });

            $('.demo3').click(function () {
                swal({
                    title: "Are you sure?",
                    text: "You will not be able to recover this imaginary file!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes, delete it!",
                    closeOnConfirm: false
                }, function () {
                    swal("Deleted!", "Your imaginary file has been deleted.", "success");
                });
            });

            $('.demo4').click(function () {
                swal({
                        title: "Are you sure?",
                        text: "Your will not be able to recover this imaginary file!",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Yes, delete it!",
                        cancelButtonText: "No, cancel plx!",
                        closeOnConfirm: false,
                        closeOnCancel: false
                    },
                    function (isConfirm) {
                        if (isConfirm) {
                            swal("Deleted!", "Your imaginary file has been deleted.", "success");
                        } else {
                            swal("Cancelled", "Your imaginary file is safe :)", "error");
                        }
                    });
            });


        });
        $(document).on('click', function () {
            $('.getl').collapse('hide');
        })
    </script>


@endsection
