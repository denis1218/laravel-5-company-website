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
                                        <th>{{trans('file.last_name')}}</th>
                                        <th>{{trans('file.phone')}}</th>
                                        <th>{{trans('file.gender')}}</th>
                                        <th>{{trans('file.paid')}}</th>
                                        {{--<th>Edit</th>--}}
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($income as $incom)
                                        <tr class="gradeX">
                                            <td>{{$incom->id}}</td>
                                            <td>{{$incom->id_patient}}</td>
                                            <td>{{$incom->name}}</td>

                                            <td>{{$incom->lastname}}</td>
                                            <td>{{$incom->phone}}</td>
                                            <td>{{$incom->gender}}</td>
                                            <td><a class="btn btn-xs btn-success" href="/patient_fee/{{ $incom->id }}"><img
                                                            src="{{ asset('img/icon_paid.png') }}"
                                                            width="20px"/>&nbsp;{{trans('file.paid')}}
                                                </a></td>

                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                    <!-- detailss modal -->

                   

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
