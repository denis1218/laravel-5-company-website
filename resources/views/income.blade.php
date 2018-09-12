@extends('master')

@section('style')
    <link href="css/hover/hover-min.css" rel="stylesheet">
    @endsection

@section('content')


            <!-- Nav-buttons -->
        <div class="row wrapper border-bottom white-bg page-heading" style="margin-top:-20px; margin-bottom: 10px; margin-left:1px;">
        <h3 style="margin-left:43px;margin-top:10px;">Income Details</h3>
        <div class="col-md-2 ">
            <h2><a class="btn btn-primary hvr-float-shadow" style="height:70px;width:155px; margin-left:25px;" href="/income"><i class="fa fa-money" style="color:#ffc000; font-size: 30px;"></i> <br/>From Patient</a></h2>
        </div>
        <div class="col-md-2 ">
                <h2><a class="btn btn-primary hvr-float-shadow" style="height:70px; width:155px; margin-left:15px;" href="/ext_income"><i class="fa fa-user" style="color:#ffc000; font-size: 30px;"></i> <br/> From Other</a></h2>
        </div>
        </div>
        <!-- End of navButtons -->

<div class="col-lg-12">
    <div class="ibox float-e-margins">
        <div class="ibox-title">
          <h5>Patient Income</h5>
            <div class="ibox-tools">
                <a class="collapse-link">
                    <i class="fa fa-chevron-up"></i>
                </a>
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-wrench"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li>
                        <a href="#">Config option 1</a>
                    </li>
                    <li>
                        <a href="#">Config option 2</a>
                    </li>
                </ul>
                <a class="close-link">
                    <i class="fa fa-times"></i>
                </a>
            </div>
        </div>

        <div class="ibox-content">
            <div class="row">

                <!--Search -->
                <div class="col-sm-10">
                    <div class="input-group" style="margin-top:25px;">
                        <span class="input-group-btn">
                        <button type="button" style="margin-left:17px;" class="btn btn-sm btn-primary"><i class="fa fa-search"></i> Search</button></span>
                        <input type="text" placeholder="Patient ID" class="input-sm form-control">
                    </div>
                </div>

                {{-- <div class="row" style="margin-top:40px; margin-left:2px;">
                    <div class="col-lg-12">
                        <label for="name"> <h4>Patient Name:</h4></label><label for=""><h4>Ahmad</h4></label><br>
                        <label for="name"> <h4>Visited:</h4></label><label for=""><h4>1</h4></label>
                    </div>
                </div> --}}
                    <div class="">
                    </div>
                    <table class="table table-striped table-bordered table-hover" id="editable" style="margin-top:80px;margin-left:30px;width:95%;">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>P-ID</th>
                                <th>P-Name</th>
                                <th>Estimated Fee</th>
                                <th>Paid Amount</th>
                                <th>Discount</th>
                                <th>Remaining Fee</th>
                                <th>Paid</th>
                                <th>P-Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="gradeX">
                                <td>1</td>
                                <td>p011</td>
                                <td>Abdullah</td>
                                <td>1900</td>
                                <td>1200</td>
                                <td>100</td>
                                <td>600</td>
                                <td><button class="btn btn-xs btn-primary fa fa-edit" data-toggle="modal" data-target="#eprice">&nbsp;Paid</button></td>
                                <td><button class="btn btn-xs btn-success fa fa-info" data-toggle="modal" data-target="#pinfo">&nbsp;P-Details</button></td>
                            </tr>

                             <tr class="gradeX">
                                <td>2</td>
                                <td>p012</td>
                                <td>Mansoor</td>
                                <td>1500</td>
                                <td>900</td>
                                <td>100</td>
                                <td>500</td>
                                <td><button class="btn btn-xs btn-primary fa fa-edit" data-toggle="modal" data-target="#eprice">&nbsp;Paid</button></td>
                                <td><button class="btn btn-xs btn-success fa fa-info" data-toggle="modal" data-target="#pinfo">&nbsp;P-Details</button></td>
                            </tr>

                             <tr class="gradeX">
                                <td>3</td>
                                <td>p013</td>
                                <td>Arash</td>
                                <td>3500</td>
                                <td>2000</td>
                                <td>300</td>
                                <td>1200</td>
                                <td><button class="btn btn-xs btn-primary fa fa-edit" data-toggle="modal" data-target="#eprice">&nbsp;Paid</button></td>
                                <td><button class="btn btn-xs btn-success fa fa-info" data-toggle="modal" data-target="#pinfo">&nbsp;P-Details</button></td>
                            </tr>

                            <tr class="gradeX">
                                <td>4</td>
                                <td>p014</td>
                                <td>Manizhah</td>
                                <td>700</td>
                                <td>650</td>
                                <td>50</td>
                                <td>00</td>
                                <td><button class="btn btn-xs btn-primary fa fa-edit" data-toggle="modal" data-target="#eprice">&nbsp;Paid</button></td>
                                <td><button class="btn btn-xs btn-success fa fa-info" data-toggle="modal" data-target="#pinfo">&nbsp;P-Details</button></td>
                            </tr>

                             <tr class="gradeX">
                                <td>5</td>
                                <td>p015</td>
                                <td>Erfanullah</td>
                                <td>1100</td>
                                <td>1100</td>
                                <td>00</td>
                                <td>00</td>
                                <td><button class="btn btn-xs btn-primary fa fa-edit" data-toggle="modal" data-target="#eprice">&nbsp;Paid</button></td>
                                <td><button class="btn btn-xs btn-success fa fa-info" data-toggle="modal" data-target="#pinfo">&nbsp;P-Details</button></td>
                            </tr>

                        </tbody>
                    </table>

                         <!-- edit model -->
                <div class="modal inmodal" id="eprice" tabindex="-1" role="dialog"  aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content animated fadeIn">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <i class="fa fa-edit modal-icon text-primary"></i>
                                <h4 class="modal-title">Edit Content</h4>
                                <small>Fill the Paid amount</small>
                            </div>
                            <div class="modal-body">
                                <div class="form-group"><label>ID</label> <input type="text" placeholder="ID"  value="" class="form-control" disabled></div>
                                <div class="form-group"><label>P-ID</label> <input type="text" placeholder="P-ID" value="" class="form-control" disabled></div>
                                <div class="form-group"><label>P-Name</label> <input type="text" placeholder="P-Name" value="" class="form-control" disabled></div>
                                <div class="form-group"><label>Estimated fee</label> <input type="text" placeholder="Estimated fee" value="" class="form-control" disabled></div>
                                <div class="form-group"><label>Paid Amount</label> <input type="text" placeholder="Paid amount" value="" class="form-control" disabled></div>
                                <div class="form-group"><label>Discount</label> <input type="text" placeholder="Discount" value="" class="form-control" disabled></div>
                                <div class="form-group"><label>Remaining</label> <input type="text" placeholder="Remaining" value="" class="form-control" disabled></div>
                                <div class="form-group"><label>Payment</label> <input type="text" placeholder="Payment amount" value="" class="form-control"></div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of model -->
                         <!-- edit model -->
                <div class="modal inmodal" id="pinfo" tabindex="-1" role="dialog"  aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content animated fadeIn">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                {{-- <i class="fa fa-edit modal-icon text-primary"></i> --}}
                                <h4 class="modal-title">Patient Informatino</h4>
                            </div>
                            <div class="modal-body">
                                <table class="table table-hover table-responsive">
                                    <tr>
                                        <td style="font-weight:bold;">Patient ID:</td>
                                        <td>p001</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight:bold;">Patient Name:</td>
                                        <td>Eqbal</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight:bold;">Patient Age:</td>
                                        <td>28</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight:bold;">Patient Gender:</td>
                                        <td>Male</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight:bold;">Dental Defect:</td>
                                        <td>Cavities</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight:bold;">Treatment:</td>
                                        <td>Washing and filling</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight:bold;">Registration Date:</td>
                                        <td>07-March-18</td>
                                    </tr>

                                </table>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}

                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of model -->

                    {{-- <div class="row">
                        <div class="col-md-4">
                            <table class="table table-striped table-bordered table-hover" style="margin-left:30px;">
                                <tr>
                                    <td style="text-align:right"><label style="margin-top:8px;"><strong>Total Discount</strong></label></td>
                                    <td><input type=" text" class="form-control" value="270" readonly></td>
                                </tr>

                                <tr>
                                    <td style="text-align:right"><label style="margin-top:8px;"><strong>Total</strong></label></td>
                                    <td><input type=" text" class="form-control" value="1500" readonly></td>
                                </tr>

                                <tr>
                                    <td style="text-align:right"><label style="margin-top:8px;"><strong>Remaining</strong></label></td>
                                    <td><input type=" text" class="form-control" value="4230" readonly></td>
                                </tr>

                                <tr>
                                    <td style="text-align:right;"><label style="margin-top:8px;"><strong>Payment</strong></label></td>
                                    <td><input type=" number" class="form-control" placeholder="Enter the amount"></td>
                                </tr>


                            </table>
                    </div>
                    <div class="col-4-lg">
                         <button class="btn btn-primary" style="position:relative;margin-top:170px; margin-left:30px;"> Save paid &nbsp<i class="fa fa-save"></i></button>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')

<script src="dashboard/js/plugins/sweetalert/sweetalert.min.js"></script>
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
