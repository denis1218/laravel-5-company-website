@extends('master')
@section('content')

    @include('part.nav_doctor')

    <br/>

    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>{{trans('file.next_appointment_patient')}}</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-wrench"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#">Config option 1</a>
                        </li>
                        <li><a href="#">Config option 2</a>
                        </li>
                    </ul>
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>

            <div class="ibox-content">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <table class="table table-hover no-margins table-striped">
                                <thead>
                                <tr>
                                    <td>{{trans('file.p_id')}}</td>
                                    <th>{{trans('file.patient_name')}}</th>
                                    <th>{{trans('file.doctor_name')}}</th>
                                    <th>{{trans('file.status')}}</th>
                                    <th>{{trans('file.date_appointment')}}</th>
                                    <th>{{trans('file.dental_defect')}}</th>
                                    <th>{{trans('file.treatment')}}</th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr>
                                    <td>P-0785550422</td>
                                    <td>Mahdi</td>
                                    <td></i>Dr.Samim</td>
                                    <td>Second Time</td>
                                    <td><i class="fa fa-calendar"></i>&nbsp;2018/9/10 - 10:00 AM</td>
                                    <td class="">Calculus</td>
                                    <td>Root Canal</td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection