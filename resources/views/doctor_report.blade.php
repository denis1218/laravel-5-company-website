
@extends('master')

@section('style')

@endsection

@section('content')

    {{-- one doctor info report--}}
    <div class="col-lg-12" >
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>{{trans('file.doctors')}}</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <div class="row">
                    <div class="col-md-12 text-right">
                        <a class="btn btn-primary btn-lg" style="float: left;" href="/doctors">
                            <i class="fa fa-arrow-left"></i> &nbsp;{{trans('file.back_to_doctor')}}</a>
                        <button class="btn btn-primary btn-lg">{{trans('file.print')}} &nbsp;<i class="fa fa-print"></i></button>
                    </div>
                </div>

                {{-- patient personal information --}}

                <div class="row" style="padding-left:30px; font-size: 20px;">
                    <div class="row m-b-lg m-t-lg">
                        <div class="col-md-5">
                            <div class="profile-info">
                                <div class="">
                                    <div>
                                        <h2 class="no-margins font-b">
                                            {{ $doctor->first_name }}
                                        </h2>
                                        <h4> ID:&nbsp;{{$doctor->id}}</h4>
                                        <small class="font-m">
                                            Dental Expert for 2 years work in dental clinics and more 100 patient visited
                                        </small>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <table class="table small m-b-xs">
                                <tbody>
                                <tr>
                                    <td>
                                        <span class="font-m">{{trans('file.gender')}}:<b>&nbsp;{{$doctor->gender}}</b>&nbsp;<i class="fa fa-male"></i></span>
                                    </td>
                                    <td>
                                        <span class="font-m">{{trans('file.age')}}:<b>&nbsp;{{$doctor->age}}</b>&nbsp;<i class=""></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="font-m">{{trans('file.salary_type')}}:<b>&nbsp; {{$doctor->salary_type}}</b>&nbsp;<i class="fa fa-user-md"></i></span>
                                    </td>
                                    <td>
                                        <span class="font-m">{{trans('file.salary_amount')}} :<b>&nbsp;{{$doctor->salary_amount}}</b>&nbsp;<i class=""></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="font-m">{{trans('file.date_of_registration')}}:<b>&nbsp;{{$doctor->created_at}}</b>&nbsp;<i class="fa fa-calendar"></i></span>
                                    </td>
                                    <td>
                                        <span class="font-m">{{trans('file.department')}}:<b>&nbsp; {{$doctor->department}}</b>&nbsp;<i class=""></i></span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                {{-- patient personal information --}}
                <hr/>
                {{-- table info patient --}}
                <div class="row">
                    <form id="form" action="/doctors/{{$doctor->id}}" method="post">
                        {{csrf_field()}}
                        {{method_field('PUT')}}
                        @if($doctor->salary_type == "per")
                            <div class="col-md-12">
                        <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="font-noraml">{{trans('file.select_range')}}</label>
                                <div class="input-daterange input-group" id="" >
                                    <span class="input-group-addon">{{trans('file.from')}} &nbsp;<i class="fa fa-arrow-right"></i></span>
                                    <input type="date" class="input-sm form-control" name="start" required>
                                    <span class="input-group-addon">{{trans('file.to')}} &nbsp;<i class="fa fa-arrow-right"></i></span>
                                    <input type="date" class="input-sm form-control" name="end" required="">

                                </div>
                            </div>
                        </div>
                        </div>
                        <table class="table table-hover table-bordered">
                            <thead>
                            <tr>
                                <th>{{trans('file.p_id')}}</th>
                                <th>{{trans('file.treatment')}}</th>
                                <th>{{trans('file.treatment_fee')}}</th>
                                <th>{{trans('file.date')}}</th>
                                <th>{{trans('file.status')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($treatment as $treat)
                            <tr>
                                <td>{{$treat->patient->id_patient}}</td>
                                <td>{{$treat->treatment}}</td>
                                <td>{{$treat->paid_amount}}</td>
                                <td>{{$treat->created_at}}</td>
                                <td><span class="label label-info">{{$treat->status_visits}}</span></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                                <div class="row">
                                    <div class="col-md-5">
                                        <table class="table table-hover table-bordered">

                                            <tr>
                                                <td class="text-bold"><h4>{{trans('file.total_fee')}}: </h4></td>
                                                <td><input type="text" class="form-control" value="{{$total}}" readonly></td>
                                            </tr>
                                            <tr>
                                                <td class="text-bold"><h4>{{trans('file.doctor_salary')}}: </h4></td>
                                                <td><input type="text" name="fee" class="form-control" value="{{$docfee}}" readonly></td>

                                            </tr>
                                            <tr>
                                                <td class="text-bold"><h4>{{trans('file.past_remaining')}}: </h4></td>
                                                <td><input type="text" class="form-control" value="{{$doctor->remaining}}" readonly=""></td>

                                            </tr>
                                            <tr>
                                                <td class="text-bold"><h4>{{trans('file.advance')}}: </h4></td>
                                                <td><input type="text" class="form-control" value="{{$doctor->advance}}" name="advance" readonly=""></td>

                                            </tr>

                                            <tr>

                                                <td class="text-bold"><h4>{{trans('file.total_doctor_salary')}}: </h4></td>
                                                <td>
                                                    <input type="text" class="form-control" value="{{$docfee+$doctor->remaining-$doctor->advance}}" name="colection" readonly>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-bold"><h4>{{trans('file.lpd')}}: </h4></td>
                                                <td>
                                                    <input type="text" class="form-control" value="{{$doctor->to}}" readonly>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-bold"><h4>{{trans('file.payment_amount')}}: </h4></td>
                                                <td>
                                                    <input type="number" min="1" max="{{$docfee+$doctor->remaining-$doctor->advance}}" class="form-control" placeholder="Enter the fee amount" name="salary" required>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="text-right"> <button class="btn btn-primary" type="submit">{{trans('file.pay_salary')}}</button></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                        @else
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="font-noraml">{{trans('file.select_range')}}</label>
                                                <div class="input-daterange input-group" id="" >
                                                    <span class="input-group-addon">{{trans('file.from')}} &nbsp;<i class="fa fa-arrow-right"></i></span>
                                                    <input type="date" class="input-sm form-control" name="start" required>
                                                    <span class="input-group-addon">{{trans('file.to')}} &nbsp;<i class="fa fa-arrow-right"></i></span>
                                                    <input type="date" class="input-sm form-control" name="end" required="">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                        <div class="row">
                            <div class="col-md-5">
                                <table class="table table-hover table-bordered">

                                    <tr>
                                        <td class="text-bold"><h4>{{trans('file.doctor_salary')}}: </h4></td>
                                        <td><input type="text" name="fee" class="form-control" value="{{$docfee}}" readonly></td>

                                    </tr>
                                    <tr>
                                        <td class="text-bold"><h4>{{trans('file.past_remaining')}}: </h4></td>
                                        <td><input type="text" class="form-control" value="{{$doctor->remaining}}" readonly=""></td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold"><h4>{{trans('file.advance')}}: </h4></td>
                                        <td><input type="text" class="form-control" value="{{$doctor->advance}}" name="advance" readonly=""></td>

                                    </tr>

                                    <tr>

                                        <td class="text-bold"><h4>{{trans('file.total_doctor_salary')}}: </h4></td>
                                        @if($doctor->to < $tod)
                                        <td>
                                            <input type="text" class="form-control" value="{{$docfee+$doctor->remaining-$doctor->advance}}" name="colection" readonly>
                                        </td>
                                        @else
                                            <td>
                                                <input type="text" class="form-control" value="{{$doctor->remaining-$doctor->advance}}" name="colection" readonly>
                                            </td>
                                        @endif
                                    </tr>
                                    <tr>
                                        <td class="text-bold"><h4>{{trans('file.lpd')}}: </h4></td>
                                        <td>
                                            <input type="text" class="form-control" value="{{$doctor->to}}" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold"><h4>{{trans('file.payment_amount')}}: </h4></td>
                                        <td>
                                            <input type="number" min="1" max="{{$docfee+$doctor->remaining-$doctor->advance}}" class="form-control" placeholder="Enter the fee amount" name="salary" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="text-right"> <button class="btn btn-primary" type="submit">{{trans('file.pay_salary')}}</button></td>
                                    </tr>
                                </table>
                            </div>
                          </div>
                            @endif
                       </div>
                    </form>
                </div>
                {{-- table info patient --}}
            </div>
        </div>
    </div>





@endsection


@section('script')
    <!-- script -->
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
                    text: "You will not be able to recover this record!",
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
                        text: "Your will not be able to recover this file!",
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

