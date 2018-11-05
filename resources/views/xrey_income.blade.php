@extends('master')
@section('content')

    <!-- Nav-buttons -->
    @include('part.income_button_top')
    <!-- End of navButtons -->

    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>{{trans('file.xray_income')}}</h5>

            </div>

            <div class="ibox-content">
                <div class="row">


                    <!--Search -->
                    <div class="col-xs-8">
                        <div class="input-group" style="margin-top:25px;margin-left: -5px;">
                        <span class="input-group-btn">
                        <button type="button" disabled class="btn btn-sm btn-primary"><i class="fa fa-search"></i> </button></span>
                            <input type="text" placeholder="{{trans('file.p_name')}}" class="input-sm form-control" id="search_xray" onkeyup="search_xray()">
                        </div>
                    </div>
                    {{-- End search --}}

                    <div class="col-xs-3" style="margin-top:25px;">
                        <a href="xrey_income2" type="button" class="btn btn-sm btn-primary">{{trans('file.show_completed_xray')}}</a>
                    </div>

                    <table class="table table-striped table-bordered table-hover" id="table_xray_income"
                           style="margin-top:80px;margin-left:30px;width:95%;">
                        <thead>
                        <tr>
                            <th>{{trans('file.id')}}</th>
                            <th>{{trans('file.p_id')}}</th>
                            <th>{{trans('file.p_name')}}</th>
                            <th>{{trans('file.doctor_name')}}</th>
                            <th>{{trans('file.paid_amount')}}</th>
                            <th>{{trans('file.paid')}}</th>
                            <th>{{trans('file.p_details')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($xrey as $xr)
                        <tr class="gradeX">
                            <td>{{$xr->id}}</td>
                            <td>{{$xr->patient_id}}</td>
                            <td>{{$xr->patient_name}}</td>
                            <td>{{$xr->doctor_name}}</td>
                            <td>{{$xr->paid_amount}}</td>
                            <td>
                                <button class="btn btn-xs btn-primary fa fa-dollar" data-toggle="modal"
                                        data-target="#p{{$xr->id}}">&nbsp;{{trans('file.paid')}}
                                </button>
                            </td>
                            <td>
                                <button class="btn btn-xs btn-success fa fa-info" data-toggle="modal"
                                        data-target="#d{{$xr->id}}">&nbsp;{{trans('file.p_details')}}
                                </button>
                            </td>
                        </tr>

                        @endforeach

                        </tbody>
                    </table>

                   <div style="margin-left: 30px">{{$xrey->links()}}</div>

                    @foreach($xrey as $xr)
                    <!-- edit model -->
                    <div class="modal inmodal" id="p{{$xr->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content animated fadeIn">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                                                class="sr-only">{{trans('file.close')}}</span></button>
                                    <i class="fa fa-edit modal-icon text-primary"></i>
                                    <small>{{trans('file.fill_pa')}}</small>
                                </div>
                                <div class="modal-body">
                                    <form action="/xrey_income/{{$xr->id}}" method="post">
                                        {{method_field('patch')}}
                                    <div class="row">
                                        <div class="form-group"><label class="col-md-3 control-label">{{trans('file.paid_amount')}}
                                                :</label>

                                            <div class="col-sm-6"><input type="text" name="paid_amount" class="form-control"
                                                                         placeholder="{{trans('file.paid_amount')}}"></div>
                                        </div>
                                    </div>
                                        <br><br>
                                        <button type="submit" class="btn btn-primary pull-right" style="margin-right: 5px">{{trans('file.save')}}</button>

                                        <button type="button" class="btn btn-white pull-right" data-dismiss="modal" style="margin-right: 5px">{{trans('file.close')}}</button>
                                        <br>

                                    </form>
                                </div>
                                <div class="modal-footer">


                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end of model -->
                    @endforeach
                    {{--show modal--}}

                    @foreach($xrey as $xr)
                    <!-- edit model -->
                    <div class="modal inmodal" id="d{{$xr->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content animated fadeIn">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                                                class="sr-only">{{trans('file.close')}}</span></button>

                                    <h4 class="modal-title">{{trans('file.patient_information')}}</h4>
                                </div>
                                <div class="modal-body">
                                    <table class="table table-hover table-responsive">
                                        <tr>
                                            <td style="font-weight:bold;">{{trans('file.p_id')}}:</td>
                                            <td>{{$xr->patient_id}}</td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight:bold;">{{trans('file.p_name')}}:</td>
                                            <td>{{$xr->patient_name}}</td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight:bold;">{{trans('file.doctor_name')}}:</td>
                                            <td>{{$xr->doctor_name}}</td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight:bold;">{{trans('file.teeth_number')}}:</td>
                                            <td>{{$xr->tooth_number}}</td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight:bold;">{{trans('file.date')}} :</td>
                                            <td>{{$xr->created_at}}</td>
                                        </tr>

                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-white" data-dismiss="modal">{{trans('file.close')}}</button>

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

    {{-- javascript search on table --}}
    <script>
        {{-- filter search all patient table --}}
        function search_xray() {
            // Declare variables
            var input, filter, table, tr, td, i;
            input = document.getElementById("search_xray");
            filter = input.value.toUpperCase();
            table = document.getElementById("table_xray_income");
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

    @endsection