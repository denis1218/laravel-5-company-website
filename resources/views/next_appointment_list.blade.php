@extends('master')
@section('content')

    @include('part.nav_doctor')

    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>List of all next appointment patients</h5>
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
                                    <td>P-ID</td>
                                    <th>Patient Name</th>
                                    <th>Doctor Name</th>
                                    <th>Status</th>
                                    <th>Next Appointment Date </th>
                                    <th>Dental Defect</th>
                                    <th>Treatment</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>P-07855442240</td>
                                    <td>Ahmad</td>
                                    <td></i>Dr.Samim</td>
                                    <td>First Time</td>
                                    <td><i class="fa fa-calendar"></i>&nbsp;2018/8/12 - 8:00 AM</td>
                                    <td class="">BDR</td>
                                    <td>Extraction</td>
                                </tr>
                                <tr>
                                    <td>P-0786805588</td>
                                    <td>Naweed</td>
                                    <td></i>Dr.Samim</td>
                                    <td>Second Time</td>
                                    <td><i class="fa fa-calendar"></i>&nbsp;2018/8/12 - 9:00 AM</td>
                                    <td class="">G-Caries</td>
                                    <td>PF</td>
                                </tr>
                                <tr>
                                    <td>P-0785908077</td>
                                    <td>Qasim</td>
                                    <td></i>Dr.samim</td>
                                    <td>First Time</td>
                                    <td><i class="fa fa-calendar"></i>&nbsp;2018/8/20 - 8:00 AM</td>
                                    <td class="">Attrision</td>
                                    <td>Extraction</td>
                                </tr>
                                <tr>
                                    <td>P-0784706688</td>
                                    <td>Mahmood</td>
                                    <td></i>Dr.Samim</td>
                                    <td>First Time</td>
                                    <td><i class="fa fa-calendar"></i>&nbsp;2018/8/30 - 10:00 AM</td>
                                    <td class="">BDR</td>
                                    <td>RCT</td>
                                </tr>
                                <tr>
                                    <td>P-07855442290</td>
                                    <td>Ali</td>
                                    <td></i>Dr.Samim</td>
                                    <td>Second Time</td>
                                    <td><i class="fa fa-calendar"></i>&nbsp;2018/9/10 - 9:00 AM</td>
                                    <td class="">Calculus</td>
                                    <td>Root Canal</td>
                                </tr>
                                <tr>
                                    <td>P-0785550422</td>
                                    <td>Mahdi</td>
                                    <td></i>Dr.Samim</td>
                                    <td>Second Time</td>
                                    <td><i class="fa fa-calendar"></i>&nbsp;2018/9/10 - 10:00 AM</td>
                                    <td class="">Calculus</td>
                                    <td>Root Canal</td>
                                </tr>
                                <tr>
                                    <td>P-0785807766</td>
                                    <td>Ahmad</td>
                                    <td></i>Dr.Samim</td>
                                    <td>First Time</td>
                                    <td><i class="fa fa-calendar"></i>&nbsp;2018/9/10 - 11:20 PM</td>
                                    <td class="">BDR</td>
                                    <td>Extraction</td>
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