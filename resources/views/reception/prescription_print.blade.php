@extends('master')
@section('content')

    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5> Patient Prescription<i class="fa fa-info"></i></h5>
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
                        <h4>Patient Name :{{$patient->name}}</h4>
                        <h4>Date : {{\Carbon\Carbon::today()}}</h4>

                    </div>

                </div>
                <div class="hr-line-solid"></div>
                <br/>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row shadow p-3 mb-5 bg-white rounded"
                             style="background: rgba(145,224,255,0.42); padding-left:20px; border-radius: 50px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                            <h3 style="font-weight: bold">Prescription</h3>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <table class="table table-striped text-bold" style="margin-top:30px;">

                                    <tbody>

                                    </tbody>

                                </table>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>




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