@extends('master')

@section('style')
    <link href="{{asset('css/hover/hover-min.css')}}" rel="stylesheet">
@endsection

@section('content')


    <!-- Nav-buttons -->
    @include('part.income_button_top')
    <!-- End of navButtons -->

    <div class="col-xs-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>{{trans('file.patient_income')}}</h5>
            </div>

            <div class="ibox-content">
                <div class="row">

                    <!--Search -->
                    <div class="col-xs-8">
                        <div class="input-group" style="margin-top:25px;">
                        <span class="input-group-btn">
                        <button type="button" style="margin-left:px;" class="btn btn-sm btn-primary"><i
                                    class="fa fa-search"></i> {{trans('file.search')}}</button></span>
                            <input type="text" placeholder="{{trans('file.p_id')}}" class="input-sm form-control">
                        </div>
                    </div>

                    <div class="col-xs-3" style="margin-top:25px;margin-left: -8px">
                        <a href="income" type="button"
                           class="btn btn-sm btn-primary">{{trans('file.show_loan_patient')}}</a>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover "
                                       style="margin-top:0px; margin-left: 0px;width:95%;">
                                    <thead>
                                    <tr>
                                        <th>{{trans('file.id')}}</th>
                                        <th>{{trans('file.p_id')}}</th>
                                        <th>{{trans('file.p_name')}}</th>
                                        <th>{{trans('file.estimated_fee')}}</th>
                                        <th>{{trans('file.paid_amount')}}</th>
                                        <th>{{trans('file.discount')}}</th>
                                        <th>{{trans('file.remaining_fee')}}</th>
                                        <th>{{trans('file.p_details')}}</th>
{{--                                        <th>{{trans('file.print_bill')}}</th>--}}
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($income as $incom)
                                        <tr class="gradeX">
                                            <td>{{$incom->id}}</td>
                                            <td>{{$incom->patient->id_patient}}</td>
                                            <td>{{$incom->patient->name}}</td>
                                            <td>{{$incom->estimated_fee}}</td>
                                            <td>{{$incom->paid_amount}}</td>
                                            <td>{{$incom->discount}}</td>
                                            <td>{{$incom->remaining_fee}}</td>

                                            <td>
                                                <button class="btn btn-xs btn-success fa fa-info" data-toggle="modal"
                                                        data-target="#p{{$incom->id}}">&nbsp;{{trans('file.p_details')}}
                                                </button>
                                            </td>
                                            {{--<td>--}}
                                                {{--<a href="/patient_report/{{$incom->id}}" class="btn btn-xs btn btn-primary"><i--}}
                                                            {{--class="fa fa-print"></i>&nbsp;&nbsp;{{trans('file.print_bill')}}</a>--}}
                                            {{--</td>--}}

                                        </tr>
                                    @endforeach
                                    <tr>
                                        <td colspan="4" class="text-center">{{trans('file.total')}}</td>
                                        <td colspan="3" class="text-left">{{$total}}</td>
                                    </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                    <!-- detaills model -->
                    @foreach($income as $in)
                        <div class="modal inmodal" id="p{{$in->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content animated fadeIn">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span
                                                    aria-hidden="true">&times;</span><span
                                                    class="sr-only">{{trans('file.close')}}</span></button>
                                        {{-- <i class="fa fa-edit modal-icon text-primary"></i> --}}
                                        <h4 class="modal-title">{{trans('file.patient_information')}}</h4>
                                    </div>
                                    <div class="modal-body">
                                        <table class="table table-hover table-responsive">
                                            <tr>
                                                <td style="font-weight:bold;">{{trans('file.p_id')}}:</td>
                                                <td>{{$in->id}}</td>
                                            </tr>
                                            <tr>
                                                <td style="font-weight:bold;">{{trans('file.p_name')}}:</td>
                                                <td>{{$in->patient->name}}</td>
                                            </tr>
                                            <tr>
                                                <td style="font-weight:bold;">{{trans('file.age')}}:</td>
                                                <td>{{$in->patient->age}}</td>
                                            </tr>
                                            <tr>
                                                <td style="font-weight:bold;">{{trans('file.gender')}}:</td>
                                                <td>{{$in->patient->gender}}</td>
                                            </tr>
                                            <tr>
                                                <td style="font-weight:bold;">{{trans('file.address')}}:</td>
                                                <td>{{$in->patient->address}}</td>
                                            </tr>
                                            <tr>
                                                <td style="font-weight:bold;">{{trans('file.phone')}}:</td>
                                                <td>{{$in->patient->phone}}</td>
                                            </tr>

                                            <tr>
                                                <td style="font-weight:bold;">{{trans('file.dental_defect')}}:</td>
                                                <td>{{$in->dentaldefect}}</td>
                                            </tr>
                                            <tr>
                                                <td style="font-weight:bold;">{{trans('file.treatment')}}:</td>
                                                <td>{{$in->treatment}}</td>
                                            </tr>
                                            <tr>
                                                <td style="font-weight:bold;">{{trans('file.date_of_registration')}}:
                                                </td>
                                                <td>{{$in->created_at}}</td>
                                            </tr>

                                        </table>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-white"
                                                data-dismiss="modal">{{trans('file.close')}}</button>
                                        {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end of model -->
                @endforeach
                     <!-- edit model -->
                    <div class="modal inmodal" id="pinfo" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content animated fadeIn">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                                                class="sr-only">C{{trans('file.close')}}</span></button>
                                    {{-- <i class="fa fa-edit modal-icon text-primary"></i> --}}
                                    <h4 class="modal-title">{{trans('file.patient_information')}}</h4>
                                </div>
                                <div class="modal-body">
                                    <table class="table table-hover table-responsive">
                                        <tr>
                                            <td style="font-weight:bold;">Patient ID:</td>
                                            <td>p001</td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight:bold;">Patient Name:</td>
                                            <td>Eqbal</td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight:bold;">Patient Age:</td>
                                            <td>28</td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight:bold;">Patient Gender:</td>
                                            <td>Male</td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight:bold;">Patient Address:</td>
                                            <td>Karte Char Pole Surkh</td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight:bold;">Phone Number:</td>
                                            <td>0786859890</td>
                                        </tr>

                                        <tr>
                                            <td style="font-weight:bold;">Dental Defect:</td>
                                            <td>Cavities</td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight:bold;">Treatment:</td>
                                            <td>Washing and filling</td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight:bold;">Registration Date:</td>
                                            <td>07-March-18</td>
                                        </tr>

                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                    {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end of model -->


                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')

    <script src="dashboard/js/plugins/sweetalert/sweetalert.min.js"></script>
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
    </script>


@endsection
