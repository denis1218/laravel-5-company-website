@extends('master')
@section('content')


     @include('part.nav_doctor')


    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Patient Information <i class="fa fa-info"></i></h5>
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
                    <a class="close-link" style="margin-right:20px;">
                        <i class="fa fa-times"></i>
                    </a>
                    <button class="btn btn-primary btn-lg" onclick="PrintElem();">Print &nbsp;<span
                                class="fa fa-print"></span></button>
                </div>
            </div>
            <div class="ibox-content" id="divone">
                <div class="row">
                    <div class="col-md-3">
                        <div class="profile-image">
                            <img src="{{asset('img/dentaa3.png')}}" class="" style="width: 200px;">
                        </div>
                    </div>

                    <div class="col-md-6">

                        <h2> Hakim Alikozay Dental Clinic</h2>
                        <h4>Patient History File</h4>
                        <h4>Doctor Name : Dr.Rahmati</h4>
                        <h4>Date : 2018/5/4</h4>

                    </div>

                </div>
                <div class="hr-line-solid"></div>
                <br/>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row shadow p-3 mb-5 bg-white rounded"
                             style="background: rgba(145,224,255,0.42); padding-left:20px; border-radius: 50px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                            <h3 style="font-weight: bold">Personal Information Patient</h3>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <table class="table table-striped text-bold" style="margin-top:30px;">
                                    <tbody>
                                    @foreach($patient as $p)
                                    <tr>
                                        <td>P-ID :</td>
                                        <td>{{$p->id}}</td>
                                    </tr>
                                    <tr>
                                        <td>Patient Name :</td>
                                        <td>{{$p->name}}</td>

                                    </tr>
                                    <tr>
                                        <td>Age :</td>
                                        <td>{{$p->age}}</td>
                                    </tr>
                                    <tr>
                                        <td>Gender :</td>
                                        <td>{{$p->gender}}</td>
                                    </tr>
                                    <tr>
                                        <td>Address :</td>
                                        <td>{{$p->address}}</td>

                                    </tr>
                                    <tr>
                                        <td>Phone :</td>
                                        <td>{{$p->phone}}</td>
                                    </tr>
                                    <td>Patient Problem Health :</td>
                                    <td>{{$p->problem_health}}</td>
                                    <tr>
                                        <td>Date Reg :</td>
                                        <td>{{$p->created_at}}</td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-4">
                                <table class="table table-striped text-bold" style="margin-top:30px;">
                                    <tbody>
                                    <tr>

                                    </tr>





                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row shadow p-3 mb-5 bg-white rounded"
                             style="background: rgba(145,224,255,0.42); padding-left:20px; border-radius: 50px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                            <h3 style="font-weight: bold">Kind of Prosthesis</h3>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <table class="table table-striped text-bold" style="margin-top:30px;">
                                    <tbody>
                                    <tr>
                                        <td>Dental Defect :</td>
                                        <td>BDR</td>
                                    </tr>
                                    <tr>
                                        <td>Dental Treatment :</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Teeth Number:</td>
                                        <td></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row shadow p-3 mb-5 bg-white rounded"
                             style="background: rgba(145,224,255,0.42); padding-left:20px; border-radius: 50px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                            <h3 style="font-weight: bold">Payment Information</h3>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <table class="table table-striped text-bold" style="margin-top:30px;">
                                    <tbody>
                                    <tr>
                                        <td>Estimated Fee :</td>
                                        <td>500</td>


                                    </tr>
                                    <tr>
                                        <td>Paid Amount :</td>
                                        <td>50</td>

                                    </tr>
                                    <tr>
                                        <td>Discount :</td>
                                        <td>1000</td>
                                    </tr>
                                    <tr>
                                        <td>Remaining :</td>
                                        <td>1000</td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <br/>
                    <br/>
                    <h3>Sign Doctor: </h3>
                </div>
            </div>
        </div>
    </div>

        end of header


        @endsection

        @section('script')
            <script src="dashboard/js/plugins/sweetalert/sweetalert.min.js"></script>
            <script type="text/javascript">
                function PrintElem() {
                    var mywindow = window.open('', 'PRINT', 'height=1024,width=1468');
                    mywindow.document.write('<html><head><title>' + 'Patient information' + '</title>');
                    mywindow.document.write('</head><body >');
                    mywindow.document.write(document.getElementById('divone').innerHTML);
                    mywindow.document.write('</body></html>');
                    mywindow.document.close(); // necessary for IE >= 10
                    mywindow.focus(); // necessary for IE >= 10*/
                    mywindow.print();
                    mywindow.close();
                    return true;
                }
            </script>
@endsection