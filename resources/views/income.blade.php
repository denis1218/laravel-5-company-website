@extends('master')

@section('style')
    <link href="{{asset('css/hover/hover-min.css')}}" rel="stylesheet">
@endsection

@section('content')


    <!-- Nav-buttons -->
    @include('part.income_button_top')
    <!-- End of navButtons -->

    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>{{trans('file.patient_income')}}</h5>
            </div>

            <div class="ibox-content">
                <div class="row">

                    <!--Search -->
                    <div class="col-xs-8">

                        <div class="input-group" style="margin-top:25px;margin-left: -5px;">
                            <span class="input-group-btn">
                                    <button type="submit" disabled class="btn btn-sm btn-primary"><i
                                                class="fa fa-search"></i>&nbsp; Search</button></span>
                            <input type="text" placeholder="Search patient ID / name / lastname / phone" name="patient"
                                   class="input-sm form-control" id="search_income" onkeyup="search_income()"/>
                        </div>

                    </div>

                    <div class="col-sm-3" style="margin-top:25px;">
                        <a href="/income2" type="button"
                           class="btn btn-sm btn-primary">{{trans('file.show_completed_patient')}}</a>
                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover " id="table_income"
                                       style="margin-top:0px;margin-left: 10px;width:95%;">
                                    <thead>
                                    <tr>
                                        <th>{{trans('file.id')}}</th>
                                        <th>{{trans('file.p_id')}}</th>
                                        <th>{{trans('file.p_name')}}</th>
                                        <th>{{trans('file.estimated_fee')}}</th>
                                        <th>{{trans('file.paid_amount')}}</th>
                                        <th>{{trans('file.discount')}}</th>
                                        <th>{{trans('file.remaining_fee')}}</th>
                                        <th>{{trans('file.paid')}}</th>
                                        <th>{{trans('file.p_details')}}</th>
                                        {{--<th>Edit</th>--}}
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($income as $incom)
                                        <tr class="gradeX">
                                            <td>{{$incom->id}}</td>
                                            @if($incom->patient != null)
                                                <td>{{$incom->patient->id_patient}}</td>
                                                <td>{{$incom->patient->name}}</td>
                                            @else
                                                <td>Null</td>
                                                <td>Null</td>
                                            @endif
                                            <td>{{$incom->estimated_fee}}</td>
                                            <td>{{$incom->paid_amount}}</td>
                                            <td>{{$incom->discount}}</td>
                                            <td>{{$incom->remaining_fee}}</td>
                                            <td>

                                                <button class="btn btn-xs btn-primary" data-toggle="modal"
                                                        data-target="#{{$incom->id}}"><img
                                                            src="{{ asset('img/icon_paid.png') }}"
                                                            width="20px"/>&nbsp;{{trans('file.paid')}}

                                                </button>
                                            </td>
                                            <td>
                                                <button class="btn btn-xs btn-success fa fa-info" data-toggle="modal"
                                                        data-target="#p{{$incom->id}}">&nbsp;{{trans('file.p_details')}}
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                    <!-- detailss modal -->
                    @foreach($income as $in)
                        <div class="modal inmodal" id="{{$in->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content animated fadeIn">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span
                                                    aria-hidden="true">&times;</span><span
                                                    class="sr-only">{{trans('file.close')}}</span></button>
                                        <i class="fa fa-edit-o modal-icon text-primary"></i>

                                        <h4 class="modal-title">{{trans('file.fee_payment')}}</h4>

                                        <small>{{trans('file.fill_pa')}}</small>
                                    </div>
                                    <div class="modal-body">
                                        <form id="form" action="/income/{{$in->id}}" method="post">
                                            {{method_field('patch')}}
                                            <div class="row">
                                                <div class="form-group"><label
                                                            class="col-md-3 control-label">{{trans('file.estimated_fee')}}
                                                        :</label>
                                                    <div class="col-md-6"><h4>{{$in->estimated_fee}}</h4></div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="form-group"><label
                                                            class="col-md-3 control-label">{{trans('file.remaining_fee')}}
                                                        :</label>

                                                    <div class="col-md-6"><h4>{{$in->remaining_fee}}</h4></div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="form-group"><label
                                                            class="col-md-3 control-label">{{trans('file.paid_amount')}}
                                                        :</label>

                                                    <div class="col-sm-6"><input type="number" class="form-control"
                                                                                 max="{{$in->remaining_fee}}"
                                                                                 name="paid_amount"
                                                                                 placeholder="{{trans('file.paid_amount')}}"
                                                                                 required></div>
                                                </div>
                                            </div>
                                            <br>
                                            <br>
                                            <button type="button" class="btn btn-white pull-right" data-dismiss="modal"
                                                    style="margin-bottom: 10px;">{{trans('file.close')}}</button>
                                            <button type="submit" class="btn btn-primary pull-right"
                                                    style="margin-bottom: 10px;margin-right: 20px;">{{trans('file.paid')}}</button>

                                        </form>
                                        <br>


                                    </div>

                                    <div class="modal-footer">


                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end of model -->
                    @endforeach
                    {{--Edit Modal--}}
                    @foreach($income as $in)
                        <div class="modal inmodal" id="e{{$in->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content animated fadeIn">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span
                                                    aria-hidden="true">&times;</span><span
                                                    class="sr-only">{{trans('file.close')}}</span></button>
                                        <i class="fa fa-edit modal-icon text-primary"></i>
                                        <h4 class="modal-title">{{trans('file.edit_content')}}</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form id="form" action="/income3/{{$in->id}}" method="post">
                                            {{method_field('patch')}}
                                            <div class="row">
                                                <label class="control-label">{{trans('file.p_id')}}:</label>
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                           value="{{$in->patient->id_patient}}" readonly>
                                                </div>
                                                <label class="control-label">{{trans('file.p_name')}}:</label>
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                           value="{{$in->patient->name}}" readonly>
                                                </div>
                                                <label class="control-label">{{trans('file.estimated_fee')}}:</label>
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                           value="{{$in->estimated_fee}}" readonly>
                                                </div>
                                                <label class="control-label">{{trans('file.paid_amount')}}:</label>
                                                <div class="form-group">
                                                    <input type="number" class="form-control" name="paid_amount"
                                                           value="{{$in->paid_amount}}">
                                                </div>
                                                <label class="control-label">{{trans('file.discount')}}:</label>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" value="{{$in->discount}}"
                                                           readonly>
                                                </div>
                                                <label class="control-label">{{trans('file.remaining_fee')}}:</label>
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                           value="{{$in->remaining_fee}}" readonly>
                                                </div>
                                            </div>
                                            <br>
                                            <br>
                                            <button type="button" class="btn btn-white pull-right" data-dismiss="modal"
                                                    style="margin-bottom: 10px;">{{trans('file.close')}}</button>
                                            <button type="submit" class="btn btn-primary pull-right"
                                                    style="margin-bottom: 10px;margin-right: 20px;">{{trans('file.save')}}</button>

                                        </form>
                                        <br>


                                    </div>

                                    <div class="modal-footer">


                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end of model -->
                    @endforeach

                    {{--End Edit modal--}}
                    <!-- detaills model -->
                    @foreach($income as $in)
                        <div class="modal inmodal" id="p{{$in->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content animated fadeIn">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span
                                                    aria-hidden="true">&times;</span><span
                                                    class="sr-only">{{trans('file.close')}}</span></button>
                                        <i class="fa fa-edit modal-icon text-primary"></i>

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
                                        <button type="button" class="btn btn-primary">Save changes</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end of model -->
                    @endforeach


                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')

    <script src="{{ asset('dashboard/js/plugins/toastr/toastr.min.js') }}"></script>

    <script type="text/javascript">
        $(function () {
            $('#form').submit(function () {
                // Display a success toast, with a title
//                toastr.info('Successfully Inserted !');
                toastr.info('Successfully Inserted !', {timeOut: 5000});
            });
        });
    </script>

    {{-- javascript search on table --}}
    <script>
        {{-- filter search all patient table --}}
        function search_income() {
            // Declare variables
            var input, filter, table, tr, td, i;
            input = document.getElementById("search_income");
            filter = input.value.toUpperCase();
            table = document.getElementById("table_income");
            tr = table.getElementsByTagName("tr");

            // Loop through all table rows, and hide those who don't match the search query
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[2];
                if (td) {
                    if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }

    </script>
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
