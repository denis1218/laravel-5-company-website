@extends('master')
@section('content')
    <div class="row">
        <div class="col-md-3">
            <h2><a class="btn btn-primary hvr-grow-shadow" style="font-size: 20px; width: 250px;"
                   href="/doctor_operations"><img src="img/medicine.png" class="pull-left"/>&nbsp;&nbsp;Patient List</a>
            </h2>
        </div>
        <div class="col-md-3">
            <h2><a class="btn btn-primary hvr-grow-shadow" style="font-size: 20px; width: 250px;"
                   href="/treatment_operation">
                    <i class="fa fa-stethoscope pull-left" style="color:#ffc000; font-size: 25px;"></i>&nbsp;&nbsp;Treatment
                    operation</a></h2>
        </div>
        <div class="col-md-3">
            <h2><a class="btn btn-primary hvr-grow-shadow" style="font-size: 20px; width: 250px;" href="/iframe"><i
                            class="fa fa-calendar pull-left" style="color:#ffc000; font-size: 25px;"></i>&nbsp;&nbsp;Next
                    appointment</a></h2>
        </div>
    </div>
    <div class="hr-line-solid"></div>
    <div class="col-lg-12" >
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
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content" id="divone">
                <div class="row" style="margin-left:10px;">
                    <div class="row m-b-lg m-t-lg">
                        <div class="row">

                        <div class="col-md-4">
                            <center>
                            <div class="profile-image">
                                <img src="img/dentaa3.png" class="img-circle circle-border m-b-md" alt="profile">
                            </div>
                            </center>
                        </div>
                            <div class="col-md-8">

                                    <h2> Hakim Alikozay Dental Clinic</h2>
                                    <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        Patient Registration Form</h4>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <table class="table" border="0">
                                    <thead>
                                    <tr><h2>Patient Information</h2></tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>P-ID :</td>
                                        <td>P-0786807788</td>


                                    </tr>
                                    <tr>
                                        <td>Patient Name :</td>
                                        <td>Ahmad</td>

                                    </tr>
                                    <tr>
                                        <td>Age :</td>
                                        <td>25</td>
                                    </tr>
                                    <tr>
                                        <td>Gender :</td>
                                        <td>Male</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <table class="table" border="0">
                                    <thead>
                                    <tr><h2>Kind of Prosthesis</h2></tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Dental Defect :</td>
                                        <td>BDR</td>


                                    </tr>
                                    <tr>
                                        <td>Dental Treatment :</td>
                                        <td>Extraction</td>

                                    </tr>
                                    <tr>
                                        <td>Teeth Number:</td>
                                        <td>26</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <table class="table" border="0">
                                    <thead>
                                    <tr><h2>Payment Information</h2></tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Unit Price :</td>
                                        <td>500</td>


                                    </tr>
                                    <tr>
                                        <td>Total :</td>
                                        <td>2000</td>

                                    </tr>
                                    <tr>
                                        <td>Paid :</td>
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


                </div>
            </div>
        </div>
    </div>
    {{--end of header--}}

    <hr class="hr-line-dashed">
    <button class="btn btn-primary btn-lg" onclick="PrintElem();">Print &nbsp;<span class="fa fa-print"></span></button>
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
