@extends('master')
@section('content')


    @include('part.nav_doctor')

    <br/>

    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>{{trans('file.patient_information')}}<i class="fa fa-info"></i></h5>
                <div class="ibox-tools">
                    <button class="btn btn-primary btn-lg" onclick="PrintElem();">{{trans('file.print')}}&nbsp;<span
                                class="fa fa-print"></span></button>

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
                </div>
            </div>
            <div class="ibox-content" id="divone">
                <div class="row">
                    <div class="col-md-3">
                        <div class="profile-image">
                            <img src="img/dentaa3.png" class="" style="width: 200px;">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h2> {{trans('file.dc')}}</h2>
                        <h4>{{trans('file.phf')}}</h4>
                        <h4>{{trans('file.doctor_name')}}</h4>
                        <h4>{{trans('file.date')}}</h4>
                    </div>

                </div>
                <div class="hr-line-solid"></div>
                <br/>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row shadow p-3 mb-5 bg-white rounded"
                                   style="background: rgba(145,224,255,0.42); padding-left:20px; border-radius: 50px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);margin-left:10px;margin-right: 10px;">
                            <h3 style="font-weight: bold">{{trans('file.patient_personal_info')}}</h3>
                        </div>
                        <div class="row"  style="margin-left:10px;margin-right: 10px;">
                            <div class="col-md-4">
                                <table class="table table-striped text-bold" style="margin-top:30px;" border="1">
                                    <tbody>
                                    <tr>
                                        <td>{{trans('file.p_id')}} :</td>
                                        <td>P-0786807788</td>
                                    </tr>
                                    <tr>
                                        <td>{{trans('file.patient_name')}} :</td>
                                        <td>Ahmad</td>

                                    </tr>
                                    <tr>
                                        <td>{{trans('file.age')}} :</td>
                                        <td>25</td>
                                    </tr>
                                    <tr>
                                        <td>{{trans('file.gender')}}:</td>
                                        <td>Male</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-4" >
                                <table class="table table-striped text-bold" style="margin-top:30px;">
                                    <tbody>
                                    <tr>
                                        <td>{{trans('file.health_problem')}} :</td>
                                        <td>Blood Pressure, Diabetics</td>
                                    </tr>
                                    <tr>
                                        <td>{{trans('file.address')}}:</td>
                                        <td>Kabul , Afghanistan</td>

                                    </tr>
                                    <tr>
                                        <td>{{trans('file.phone')}} :</td>
                                        <td>078558252</td>
                                    </tr>
                                    <tr>
                                        <td>{{trans('file.date')}} :</td>
                                        <td>Male</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row" >
                    <div class="col-md-12">
                        <div class="row shadow p-3 mb-5 bg-white rounded"
                             style="background: rgba(145,224,255,0.42); padding-left:20px; border-radius: 50px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);margin-left:10px;margin-right: 10px;">
                            <h3 style="font-weight: bold">{{trans('file.kind_of_prosthesis')}}</h3>
                        </div>
                        <div class="row" style="margin-left:10px;margin-right: 10px;">
                            <div class="col-md-4">
                                <table class="table table-striped text-bold" style="margin-top:30px;">
                                    <tbody>
                                    <tr>
                                        <td>{{trans('file.dental_defect')}} :</td>
                                        <td>BDR</td>
                                    </tr>
                                    <tr>
                                        <td>{{trans('file.dental_treatment')}} :</td>
                                        <td>Extraction</td>
                                    </tr>
                                    <tr>
                                        <td>{{trans('file.teeth_number')}}:</td>
                                        <td>26</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row" >
                    <div class="col-md-12">
                        <div class="row shadow p-3 mb-5 bg-white rounded"
                             style="background: rgba(145,224,255,0.42); padding-left:20px; border-radius: 50px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);margin-left:10px;margin-right: 10px;">
                            <h3 style="font-weight: bold">{{trans('file.payment_info')}}</h3>
                        </div>
                        <div class="row"  style="margin-left:10px;margin-right: 10px;">
                            <div class="col-md-4">
                                <table class="table table-striped text-bold" style="margin-top:30px;">
                                    <tbody>
                                    <tr>
                                        <td>{{trans('file.unit_price')}} :</td>
                                        <td>500</td>


                                    </tr>
                                    <tr>
                                        <td>{{trans('file.total')}} :</td>
                                        <td>2000</td>

                                    </tr>
                                    <tr>
                                        <td>{{trans('file.paid')}} :</td>
                                        <td>1000</td>
                                    </tr>
                                    <tr>
                                        <td>{{trans('file.remaining')}} :</td>
                                        <td>1000</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <br/>
                    <br/>
                    <h5 class="text-right" style="margin-right: 60px;color:grey;margin-bottom: 70px;" >{{trans('file.doctor_signature')}} </h5>
                </div>
            </div>
        </div>
        {{--end of header--}}


        @endsection

        @section('script')
            <script src="js/jspdf.debug.js"></script>
            <script src="js/jspdf.min.js"></script>
            <script src="dashboard/js/plugins/sweetalert/sweetalert.min.js"></script>
            <script type="text/javascript">
                function PrintPDF(){
                    if(type == 'datauri') {
                        var doc = new jsPDF()

                        doc.save('a4.pdf')
                    }
                }

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
    </div>
@endsection