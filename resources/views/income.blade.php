@extends('master')

@section('style')
    <link href="css/hover/hover-min.css" rel="stylesheet">
    @endsection

@section('content')


            <!-- Nav-buttons -->
        <div class="row wrapper border-bottom white-bg page-heading" style="margin-top:-20px; margin-bottom: 10px; margin-left:1px;">
        <h3 style="margin-left:43px;margin-top:10px;">Income Details</h3>
        <div class="col-md-2 ">
            <h2><a class="btn btn-primary hvr-float-shadow" style="height:70px;width:155px; margin-left:25px;" href="/income"><i class="fa fa-money" style="color:#ffc000; font-size: 30px;"></i> <br/> Patient Related</a></h2>
        </div>
        <div class="col-md-2 ">
                <h2><a class="btn btn-primary hvr-float-shadow" style="height:70px; width:155px" href="/ext_income"><i class="fa fa-user" style="color:#ffc000; font-size: 30px;"></i> <br/> From Other</a></h2>
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
                <div class="col-sm-5">
                    <div class="input-group">
                      <input type="text" placeholder="Patient ID" class="input-sm form-control">
                       <span class="input-group-btn">
                        <button type="button" class="btn btn-sm btn-primary"> Search</button></span>
                    </div>
                </div>
                <div class="col-sm-7 text-right animate fadeInRight">
                  <button class="btn btn-primary btn-lg" style="margin-right:10px;" >Print &nbsp<i class="fa fa-print"></i></button>
                </div>
                <div class="row" style="margin-top:40px; margin-left:2px;">
                    <div class="col-lg-12">
                        <label for="name"> <h4>Patient Name:</h4></label><label for=""><h4>Ahmad</h4></label><br>
                        <label for="name"> <h4>Visited:</h4></label><label for=""><h4>1</h4></label>
                    </div>
                </div>
                    <div class="">
                    </div>
                    <table class="table table-striped table-bordered table-hover " id="editable" style="visibility:;margin-top:20px;margin-left: 30px;width:95%;">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Treatment</th>
                                <th>Estimated Fee</th>
                                <th>Discount</th>
                                <th>Remaining Fee</th>
                                <th>Date & Time</th>
                                <th>Check</th>
                                <th>Payment state</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="gradeX">
                                <td>1</td>
                                <td>RDB</td>
                                <td>1900</td>
                                <td>70</td>
                                <td>1830</td>
                                <td>28/08/18</td>
                                <td><input type="checkbox" checked="checked"></td>
                                <td>paid</td>
                            </tr>
                             <tr class="gradeX">
                                <td>1</td>
                                <td>RSD</td>
                                <td>1300</td>
                                <td>100</td>
                                <td>1200</td>
                                <td>28/08/18</td>
                                <td><input type="checkbox"></td>
                                <td>not paid</td>
                            </tr>
                             <tr class="gradeX">
                                <td>1</td>
                                <td>RSD</td>
                                <td>1300</td>
                                <td>100</td>
                                <td>1200</td>
                                <td>28/08/18</td>
                                <td><input type="checkbox"></td>
                                <td>not paid</td>
                            </tr>

                        </tbody>
                    </table>

                    <div class="row">
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
                </div>
            </div>
        </div>
    </div>
</div>

            </div>
        </div>



    </div>


</div>
</div>
</div>




@endsection
