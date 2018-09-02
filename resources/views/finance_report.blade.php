@extends('master')

@section('style')
<link href="dashboard/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
<link href="dashboard/css/plugins/dataTables/dataTables.responsive.css" rel="stylesheet">
<link href="dashboard/css/plugins/dataTables/dataTables.tableTools.min.css" rel="stylesheet">

<link href="dashboard/css/animate.css" rel="stylesheet">
<link href="dashboard/css/style.css" rel="stylesheet">
<link href="dashboard/css/plugins/sweetalert/sweetalert.css" rel="stylesheet" />
<style media="screen">
  .bts:hover{
    box-shadow:4px 4px 4px 4px grey;
    transform:scale(1.1);
  }
  .bts{
    height:70px; width:155px;
  }
</style>
@endsection

@section('content')
    <div class="row page-wrapper border-bottom white-bg " style="margin-top:-20px;margin-left: 1px; margin-bottom: 20px; padding-bottom: 15px;">
        <div class="row">
            <div class="col-md-5" style="margin-top:15px; margin-left:20px;">
                <h3>Financial Report</h3>
            </div>
        </div>
            <div class="col-md-2">
              <h2><a class="btn bts hov1" data-toggle="collapse" style=" margin-left:15px; background: #f56138;" href="#day"><i class="fa fa-bookmark"  style="font-size: 30px; color:#ff9f00 ;"></i><br/>Daily</a></h2>
            </div>
            <div class="col-md-2">
              <h2><a class="btn bts hov2" data-toggle="collapse" style="margin-left: 6px;background: #2f284f;" href="#week"><img src="img/medicine.png"/> <br/> Weekly</a></h2>
            </div>
            <div class="col-md-2">
                <h2><a class="btn bts hov3" data-toggle="collapse" style=" background: #199b8a;" href="#month"><i class="fa fa-calendar-o" style="font-size: 30px; color:#ff9f00 ;"></i> <br/>Monthly</a></h2>
            </div>
            <div class="col-md-2">
                <h2><a class="btn bts hov4" style="background: #505050" href="#"><i class="fa fa-calendar" style="font-size: 30px; color:#ff9f00 ;"></i> <br/>Date</a></h2>
            </div>
            <div class="col-md-2">
                <h2><a class="btn bts hov5" style="background: #e7d450;" href="#"><i class="fa fa-line-chart" style="font-size: 30px; color:#ff9f00 ;"></i> <br/>Trend Graph</a></h2>
            </div>
    </div>

    <!-- daily -->
    <div class="row page-wrapper border-bottom white-bg collapse getl " id="day" style="margin-top:-20px;margin-left: 1px; margin-bottom: 20px; padding-bottom: 15px;">
            <div class="col-md-2">
                <h2><a class="btn btn-primary" data-toggle="collapse" style="height:70px; width:155px; background: #f56138; margin-left:15px;" href="#dincom"><i class="fa fa-bookmark"  style="font-size: 30px; color:#ff9f00 ;"></i><br/>Income</a></h2>
            </div>
            <div class="col-md-2">
                <h2><a class="btn btn-primary" data-toggle="collapse" style="height:70px; width:155px; background: #f56138;" href="#expends"><img src="img/medicine.png"/> <br/> Expenditure</a></h2>
            </div>
    </div>
    <!-- End of Daily-->

    <!-- Weekly -->
    <div class="row page-wrapper border-bottom white-bg collapse getl " id="week" style="margin-top:-20px;margin-left: 1px; margin-bottom: 20px; padding-bottom: 15px;">
            <div class="col-md-2">
                <h2><a class="btn btn-primary" data-toggle="collapse" style="height:70px; width:155px; background: #2f284f; margin-left:15px;" href="#wincom"><i class="fa fa-bookmark"  style="font-size: 30px; color:#ff9f00 ;"></i><br/>Income</a></h2>
            </div>
            <div class="col-md-2">
                <h2><a class="btn btn-primary" data-toggle="collapse" style="height:70px; width:155px; background: #2f284f;" href="#expends"><img src="img/medicine.png"/> <br/> Expenditure</a></h2>
            </div>
    </div>
    <!--End of  Weekly -->

    <!-- Monthly -->
    <div class="row page-wrapper border-bottom white-bg collapse getl " id="month" style="margin-top:-20px;margin-left: 1px; margin-bottom: 20px; padding-bottom: 15px;">
            <div class="col-md-2">
                <h2><a class="btn btn-primary" data-toggle="collapse" style="height:70px; width:155px; background: #199b8a; margin-left:15px;" href="#mincom"><i class="fa fa-bookmark"  style="font-size: 30px; color:#ff9f00 ;"></i><br/>Income</a></h2>
            </div>
            <div class="col-md-2">
                <h2><a class="btn btn-primary" data-toggle="collapse" style="height:70px; width:155px; background: #199b8a;" href="#expends"><img src="img/medicine.png"/> <br/> Expenditure</a></h2>
            </div>
    </div>
    <!-- End of Monthly -->


    <!-- Income Content -->
    <!-- daily income -->
      <div class="row page-wrapper border-bottom white-bg collapse  " id="dincom" style="margin-top:-20px;margin-left: 1px; margin-bottom: 20px; padding-bottom: 15px;">
              <div class="col-md-2">
                  <h2><a class="btn btn-primary" data-toggle="collapse" style="height:70px; width:155px; background: #f56138; margin-left:15px;" href="#Pincome"><i class="fa fa-bookmark"  style="font-size: 30px; color:#ff9f00 ;"></i><br/>From Patient</a></h2>
              </div>
              <div class="col-md-2">
                  <h2><a class="btn btn-primary" data-toggle="collapse" style="height:70px; width:155px; background: #f56138;" href="#Oincome"><img src="img/medicine.png"/> <br/>From Others</a></h2>
              </div>
      </div>
      <!-- end of daily income -->

      <!-- weekly income -->
        <div class="row page-wrapper border-bottom white-bg collapse  " id="wincom" style="margin-top:-20px;margin-left: 1px; margin-bottom: 20px; padding-bottom: 15px;">
                <div class="col-md-2">
                    <h2><a class="btn btn-primary" data-toggle="collapse" style="height:70px; width:155px; background:#2f284f; margin-left:15px;" href="#Pincome"><i class="fa fa-bookmark"  style="font-size: 30px; color:#ff9f00 ;"></i><br/>From Patient</a></h2>
                </div>
                <div class="col-md-2">
                    <h2><a class="btn btn-primary" data-toggle="collapse" style="height:70px; width:155px; background:#2f284f;" href="#Oincome"><img src="img/medicine.png"/> <br/>From Others</a></h2>
                </div>
        </div>
        <!-- end of weekly income -->

        <!-- Monthly income -->
          <div class="row page-wrapper border-bottom white-bg collapse " id="mincom" style="margin-top:-20px;margin-left: 1px; margin-bottom: 20px; padding-bottom: 15px;">
                  <div class="col-md-2">
                      <h2><a class="btn btn-primary" data-toggle="collapse" style="height:70px; width:155px; background: #199b8a; margin-left:15px;" href="#Pincome"><i class="fa fa-bookmark"  style="font-size: 30px; color:#ff9f00 ;"></i><br/>From Patient</a></h2>
                  </div>
                  <div class="col-md-2">
                      <h2><a class="btn btn-primary" data-toggle="collapse" style="height:70px; width:155px; background: #199b8a;" href="#Oincome"><img src="img/medicine.png"/> <br/>From Others</a></h2>
                  </div>
          </div>
          <!-- end of Monthly income -->

    <!-- End of Income Content -->

    <!-- Income Content -->

    <div class="collapse" id="Oincome">
      <!-- card show -->
      <div class="col-lg-3">
         <div class="ibox float-e-margins">
             <div class="ibox-title">
                 <span class="label label-success pull-right">To day</span>
                 <h5>Income</h5>
             </div>
             <div class="ibox-content">
                 <h1 class="no-margins">886,200</h1>
                 <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                 <small>Total Income</small>
             </div>
         </div>
     </div>

     <div class="col-lg-3">
         <div class="ibox float-e-margins">
             <div class="ibox-title">
                 <span class="label label-info pull-right">Today</span>
                 <h5>Remaining</h5>
             </div>
             <div class="ibox-content">
                 <h1 class="no-margins">275,800</h1>
                 <div class="stat-percent font-bold text-info">20% <i class="fa fa-level-up"></i></div>
                 <small>Total Remaining</small>
             </div>
         </div>
     </div>

     <div class="col-lg-3">
         <div class="ibox float-e-margins">
             <div class="ibox-title">
                 <span class="label label-info pull-right">Today</span>
                 <h5>Discount</h5>
             </div>
             <div class="ibox-content">
                 <h1 class="no-margins">275,800</h1>
                 <div class="stat-percent font-bold text-info">20% <i class="fa fa-level-up"></i></div>
                 <small>Total Discount</small>
             </div>
         </div>
     </div>
     <!-- end of card show -->

     <!-- report -->
     <div class="col-lg-12">
         <div class="ibox float-e-margins">
             <div class="ibox-title">
               <h5>Other Income</h5>
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
                   <div class="col-md-12">

                     <!--Search -->
                     <div class="col-md-5">
                         <div class="input-group" style="margin-left:14px;">
                           <input type="text" placeholder="Insert Patient ID" class="input-sm form-control">
                            <span class="input-group-btn">
                             <button type="button" class="btn btn-sm btn-primary"> Search</button></span>
                         </div>
                     </div>
                     <!-- end of Search -->
                     <div class="col-md-7 text-right">
                       <button type="button" class="btn btn-primary btn-md" style="width:110px;" name="button">PDF by Name</button>
                       <button type="button" class="btn btn-primary btn-md" style="margin-right:8px;width:110px;" name="button">PDF All</button>
                     </div>
                   </div>
                  </div>

                   <div class="row">
                     <div class="col-md-12">

                         <table class="table table-striped table-bordered table-hover " id="editable" style="visibility:;margin-top:20px;margin-left: 30px;width:95%;">
                             <thead>
                                 <tr>
                                     <th>ID</th>
                                     <th>Name</th>
                                     <th>Amount</th>
                                     <th>Purpose</th>
                                     <th>Date</th>
                                     <th>Remaining</th>
                                     <th>Discount</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <tr class="gradeX">
                                     <td>1</td>
                                     <td>Hamid</td>
                                     <td>1900</td>
                                     <td>Purchase</td>
                                     <td>04/06/2018</td>
                                     <td>600</td>
                                     <td>130</td>
                                 </tr>
                                 <tr class="gradeX">
                                     <td>1</td>
                                     <td>Hamid</td>
                                     <td>1900</td>
                                     <td>Purchase</td>
                                     <td>04/06/2018</td>
                                     <td>600</td>
                                     <td>130</td>
                                 </tr>
                                 <tr class="gradeX">
                                     <td>1</td>
                                     <td>Hamid</td>
                                     <td>1900</td>
                                     <td>Purchase</td>
                                     <td>04/06/2018</td>
                                     <td>600</td>
                                     <td>130</td>
                                 </tr>

                             </tbody>
                         </table>
                       </div>
                 </div>
             </div>
         </div>
     </div>
     <!--end of  report -->

    </div>

    <!-- End of Income Content -->

    <!-- Expenditure content -->
    <div class="collapse" id="expends">
     <div class="col-lg-3">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <span class="label label-success pull-right">To day</span>
                <h5>Expences</h5>
            </div>
            <div class="ibox-content">
                <h1 class="no-margins">886,200</h1>
                <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                <small>Total Expences</small>
            </div>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <span class="label label-info pull-right">Today</span>
                <h5>Loan</h5>
            </div>
            <div class="ibox-content">
                <h1 class="no-margins">275,800</h1>
                <div class="stat-percent font-bold text-info">20% <i class="fa fa-level-up"></i></div>
                <small>Total loan</small>
            </div>
        </div>
    </div>

    <!-- expenditure table -->

    <div class="wrapper wrapper-content animated fadeInRight">

        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Expenditure Table</h5>
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

                        <!-- Table -->

    <div class="table-responsive">
        <!-- Expenditure Table -->

        <button type="button" class="btn btn-md btn-primary">Show Report</button>
        <table class="table table-striped table-bordered table-hover " id="editable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Given Amount</th>
                    <th>To_Whom</th>
                    <th>Purpose</th>
                    <th>Item</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Remaining</th>
                    <th>Loan</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                <tr class="gradeX">
                    <td>1</td>
                    <td>900</td>
                    <td>Ahmad</td>
                    <td>lunch</td>
                    <td>Tooth Material</td>
                    <td>750</td>
                  <td>remaining is:150Af</td>
                    <td>
                      <button class="btn btn-xs btn-primary fa fa-plus demo3">&nbsp;Add Back</button>
                    </td>
                    <td>
                      <button class="btn btn-xs btn-primary fa fa-minus demo3">&nbsp;Reduce</button>
                    </td>
                    <td>
                        <button class="btn btn-xs btn-danger fa fa-remove demo3">&nbsp;Delete</button>
                        <button class="btn btn-xs btn-success fa fa-edit" data-toggle="modal" data-target="#eprice">&nbsp;Edit</button>
                    </td>
                </tr>

                <tr class="gradeX">
                    <td>2</td>
                    <td>1000</td>
                    <td>Ahmad</td>
                    <td>material purchase</td>
                    <td>Tooth Material</td>
                    <td>740</td>
                    <td>remaining is:260Af</td>
                    <td>
                      <button class="btn btn-xs btn-primary fa fa-plus demo3">&nbsp;Add Back</button>
                    </td>
                    <td>
                      <button class="btn btn-xs btn-primary fa fa-minus demo3">&nbsp;Reduce</button>
                    </td>
                    <td>
                        <button class="btn btn-xs btn-danger fa fa-remove demo3">&nbsp;Delete</button>
                        <button class="btn btn-xs btn-success fa fa-edit" data-toggle="modal" data-target="#eprice">&nbsp;Edit</button>
                    </td>
                </tr>

                <tr class="gradeX">
                    <td>3</td>
                    <td>1000</td>
                    <td>Ahmad</td>
                    <td>material purchase</td>
                    <td>Tooth Material</td>
                    <td>740</td>
                    <td>remaining is:260Af</td>
                    <td>
                      <button class="btn btn-xs btn-primary fa fa-plus demo3">&nbsp;Add Back</button>
                    </td>
                    <td>
                      <button class="btn btn-xs btn-primary fa fa-minus demo3">&nbsp;Reduce</button>
                    </td>
                    <td>
                        <button class="btn btn-xs btn-danger fa fa-remove demo3">&nbsp;Delete</button>
                        <button class="btn btn-xs btn-success fa fa-edit" data-toggle="modal" data-target="#eprice">&nbsp;Edit</button>
                    </td>
                </tr>

                <tr class="gradeX">
                    <td>4</td>
                    <td>1000</td>
                    <td>Ahmad</td>
                    <td>material purchase</td>
                    <td>Tooth Material</td>
                    <td>740</td>
                    <td>remaining is:260Af</td>
                    <td>
                      <button class="btn btn-xs btn-primary fa fa-plus demo3">&nbsp;Add Back</button>
                    </td>
                    <td>
                      <button class="btn btn-xs btn-primary fa fa-minus demo3">&nbsp;Reduce</button>
                    </td>
                    <td>
                        <button class="btn btn-xs btn-danger fa fa-remove demo3">&nbsp;Delete</button>
                        <button class="btn btn-xs btn-success fa fa-edit" data-toggle="modal" data-target="#eprice">&nbsp;Edit</button>
                    </td>
                </tr>
                <tr class="gradeX">
                    <td>5</td>
                    <td>1000</td>
                    <td>Ahmad</td>
                    <td>material purchase</td>
                    <td>Tooth Material</td>
                    <td>740</td>
                    <td>remaining is:260Af</td>
                      <td>
                        <button class="btn btn-xs btn-primary fa fa-plus demo3">&nbsp;Add Back</button>
                      </td>
                      <td>
                        <button class="btn btn-xs btn-primary fa fa-minus demo3">&nbsp;Reduce</button>
                      </td>
                    <td>
                        <button class="btn btn-xs btn-danger fa fa-remove demo3">&nbsp;Delete</button>
                        <button class="btn btn-xs btn-success fa fa-edit" data-toggle="modal" data-target="#eprice">&nbsp;Edit</button>
                    </td>
                </tr>

                <tr class="gradeX">
                    <td>6</td>
                    <td>1000</td>
                    <td>Ahmad</td>
                    <td>material purchase</td>
                    <td>Tooth Material</td>
                    <td>740</td>
                    <td>remaining is:260Af</td>
                    <td>
                      <button class="btn btn-xs btn-primary fa fa-plus demo3">&nbsp;Add Back</button>
                    </td>
                    <td>
                      <button class="btn btn-xs btn-primary fa fa-minus demo3">&nbsp;Reduce</button>
                    </td>
                    <td>
                        <button class="btn btn-xs btn-danger fa fa-remove demo3" data-toggle="modal" data-target="">&nbsp;Delete</button>
                        <button class="btn btn-xs btn-success fa fa-edit" data-toggle="modal" data-target="#eprice">&nbsp;Edit</button>
                    </td>
                </tr>

                <tr class="gradeX">
                    <td>7</td>
                    <td>1000</td>
                    <td>Ali</td>
                    <td>meat</td>
                    <td>sadgah</td>
                    <td>500</td>
                    <td>remaining is:500Af</td>
                    <td>
                      <button class="btn btn-xs btn-primary fa fa-plus demo3">&nbsp;Add Back</button>
                    </td>
                    <td>
                      <button class="btn btn-xs btn-primary fa fa-minus demo3">&nbsp;Reduce</button>
                    </td>
                    <td>
                        <button class="btn btn-xs btn-danger fa fa-remove demo3">&nbsp;Delete</button>
                        <button class="btn btn-xs btn-success fa fa-edit" data-toggle="modal" data-target="#eprice">&nbsp;Edit</button>
                    </td>
                </tr>

                <tr class="gradeX">
                    <td>8</td>
                    <td>1000</td>
                    <td>Hamid</td>
                    <td>material purchase</td>
                    <td>Tooth Material</td>
                    <td>740</td>
                    <td>remaining is:260Af</td>
                    <td>
                      <button class="btn btn-xs btn-primary fa fa-plus demo3">&nbsp;Add Back</button>
                    </td>
                    <td>
                      <button class="btn btn-xs btn-primary fa fa-minus demo3">&nbsp;Reduce</button>
                    </td>
                    <td>
                        <button class="btn btn-xs btn-danger fa fa-remove demo3">&nbsp;Delete</button>
                        <button class="btn btn-xs btn-success fa fa-edit" data-toggle="modal" data-target="#eprice">&nbsp;Edit</button>
                    </td>
                </tr>

                <tr class="gradeX">
                    <td>9</td>
                    <td>1000</td>
                    <td>Hadi</td>
                    <td>material purchase</td>
                    <td>Tooth Material</td>
                    <td>740</td>
                    <td>remaining is:260Af</td>
                    <td>
                      <button class="btn btn-xs btn-primary fa fa-plus demo3">&nbsp;Add Back</button>
                    </td>
                    <td>
                      <button class="btn btn-xs btn-primary fa fa-minus demo3">&nbsp;Reduce</button>
                    </td>
                    <td>
                        <button class="btn btn-xs btn-danger fa fa-remove demo3">&nbsp;Delete</button>
                        <button class="btn btn-xs btn-success fa fa-edit" data-toggle="modal" data-target="#eprice">&nbsp;Edit</button>
                    </td>
                </tr>
                <tr class="gradeX">
                    <td>10</td>
                    <td>1000</td>
                    <td>Ahsan</td>
                    <td>material purchase</td>
                    <td>Tooth Material</td>
                    <td>740</td>
                    <td>remaining is:260Af</td>
                    <td>
                      <button class="btn btn-xs btn-primary fa fa-plus demo3">&nbsp;Add Back</button>
                    </td>
                    <td>
                      <button class="btn btn-xs btn-primary fa fa-minus demo3">&nbsp;Reduce</button>
                    </td>
                    <td>
                        <button class="btn btn-xs btn-danger fa fa-remove demo3">&nbsp;Delete</button>
                        <button class="btn btn-xs btn-success fa fa-edit" data-toggle="modal" data-target="#eprice">&nbsp;Edit</button>
                    </td>
                </tr>

                <tr class="gradeX">
                    <td>11</td>
                    <td>1000</td>
                    <td>Abdul</td>
                    <td>material purchase</td>
                    <td>Tooth Material</td>
                    <td>740</td>
                    <td>remaining is:260Af</td>
                    <td>
                      <button class="btn btn-xs btn-primary fa fa-plus demo3">&nbsp;Add Back</button>
                    </td>
                    <td>
                      <button class="btn btn-xs btn-primary fa fa-minus demo3">&nbsp;Reduce</button>
                    </td>
                    <td>
                        <button class="btn btn-xs btn-danger fa fa-remove demo3" data-toggle="modal" data-target="">&nbsp;Delete</button>
                        <button class="btn btn-xs btn-success fa fa-edit" data-toggle="modal" data-target="#eprice">&nbsp;Edit</button>
                    </td>
                </tr>
                <tr class="gradeX">
                    <td>12</td>
                    <td>1000</td>
                    <td>Ahmad</td>
                    <td>material purchase</td>
                    <td>Tooth Material</td>
                    <td>740</td>
                    <td>remaining is:260Af</td>
                    <td>
                      <button class="btn btn-xs btn-primary fa fa-plus demo3">&nbsp;Add Back</button>
                    </td>
                    <td>
                      <button class="btn btn-xs btn-primary fa fa-minus demo3">&nbsp;Reduce</button>
                    </td>
                    <td>
                        <button class="btn btn-xs btn-danger fa fa-remove demo3">&nbsp;Delete</button>
                        <button class="btn btn-xs btn-success fa fa-edit" data-toggle="modal" data-target="#eprice">&nbsp;Edit</button>
                    </td>
                </tr>

                <tr class="gradeX">
                    <td>13</td>
                    <td>1000</td>
                    <td>Ahmad</td>
                    <td>material purchase</td>
                    <td>Tooth Material</td>
                    <td>740</td>
                    <td>remaining is:260Af</td>
                    <td>
                      <button class="btn btn-xs btn-primary fa fa-plus demo3">&nbsp;Add Back</button>
                    </td>
                    <td>
                      <button class="btn btn-xs btn-primary fa fa-minus demo3">&nbsp;Reduce</button>
                    </td>
                    <td>
                        <button class="btn btn-xs btn-danger fa fa-remove demo3">&nbsp;Delete</button>
                        <button class="btn btn-xs btn-success fa fa-edit" data-toggle="modal" data-target="#eprice">&nbsp;Edit</button>
                    </td>
                </tr>

                <tr class="gradeX">
                    <td>14</td>
                    <td>1000</td>
                    <td>Ahmad</td>
                    <td>material purchase</td>
                    <td>Tooth Material</td>
                    <td>740</td>
                    <td>remaining is:260Af</td>
                    <td>
                      <button class="btn btn-xs btn-primary fa fa-plus demo3">&nbsp;Add Back</button>
                    </td>
                    <td>
                      <button class="btn btn-xs btn-primary fa fa-minus demo3">&nbsp;Reduce</button>
                    </td>
                    <td>
                        <button class="btn btn-xs btn-danger fa fa-remove demo3">&nbsp;Delete</button>
                        <button class="btn btn-xs btn-success fa fa-edit" data-toggle="modal" data-target="#eprice">&nbsp;Edit</button>
                    </td>
                </tr>
                <tr class="gradeX">
                    <td>15</td>
                    <td>1000</td>
                    <td>Ahmad</td>
                    <td>material purchase</td>
                    <td>Tooth Material</td>
                    <td>740</td>
                    <td>remaining is:260Af</td>
                    <td>
                      <button class="btn btn-xs btn-primary fa fa-plus demo3">&nbsp;Add Back</button>
                    </td>
                    <td>
                      <button class="btn btn-xs btn-primary fa fa-minus demo3">&nbsp;Reduce</button>
                    </td>
                    <td>
                        <button class="btn btn-xs btn-danger fa fa-remove demo3">&nbsp;Delete</button>
                        <button class="btn btn-xs btn-success fa fa-edit" data-toggle="modal" data-target="#eprice">&nbsp;Edit</button>
                    </td>
                </tr>

                <tr class="gradeX">
                    <td>16</td>
                    <td>1000</td>
                    <td>Ahmad</td>
                    <td>material purchase</td>
                    <td>Tooth Material</td>
                    <td>740</td>
                    <td>remaining is:260Af</td>
                    <td>
                      <button class="btn btn-xs btn-primary fa fa-plus demo3">&nbsp;Add Back</button>
                    </td>
                    <td>
                      <button class="btn btn-xs btn-primary fa fa-minus demo3">&nbsp;Reduce</button>
                    </td>
                    <td>
                        <button class="btn btn-xs btn-danger fa fa-remove demo3" data-toggle="modal" data-target="">&nbsp;Delete</button>
                        <button class="btn btn-xs btn-success fa fa-edit" data-toggle="modal" data-target="#eprice">&nbsp;Edit</button>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of the table -->
    </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- edit model -->
    <div class="modal inmodal" id="eprice" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated fadeIn">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <i class="fa fa-edit modal-icon text-primary"></i>
                    <h4 class="modal-title">Edit Content</h4>
                    <small>Edit expenditure details</small>
                </div>
                <div class="modal-body">
                    <div class="form-group"><label>ID</label> <input type="text" placeholder="Id" value="" class="form-control"></div>
                    <div class="form-group"><label>Amount</label> <input type="number" placeholder="Amount"  value="" class="form-control"></div>
                    <div class="form-group"><label>To Whom</label> <input type="text" placeholder="Receiver" value="" class="form-control"></div>
                    <div class="form-group"><label>Purpose</label> <input type="text" placeholder="purpose" value="" class="form-control"></div>
                    <div class="form-group"><label>Item</label> <input type="text" placeholder="Purchased item" value="" class="form-control"></div>
                    <div class="form-group"><label>Price</label> <input type="text" placeholder="Price" value="" class="form-control"></div>
                    <div class="form-group"><label>Calculated Result</label> <input type="text" placeholder="" value="" class="form-control" readonly></div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>

                </div>
            </div>
        </div>
    </div>
  </div>
    <!-- end of model -->
    <!-- End of Expenditure Content -->

    <!-- Patient Content -->


    <!-- End of Patient Content -->




    {{-- end of details of patient --}}

    {{-- modal for edit record medicine --}}
    <!-- <div class="modal inmodal" id="editMedicine" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content animated fadeIn">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <i class="modal-icon text-primary"><img src="img/medicine.png" width="10%"/></i>
                    <h4 class="modal-title">Edit Bill of Medicine</h4>
                </div>
                <div class="modal-body text-center">
                    <div id="iframetag" >
                        <form role="form" method="get" class="form-horizontal">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Drug Name :</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" placeholder="Drug name" value="Ampicinline">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Drugs per day :</label>
                                <div class="col-sm-8">
                                    <label class="radio-inline"><input type="radio" name="each_day" checked>1</label>
                                    <label class="radio-inline"><input type="radio" name="each_day">2</label>
                                    <label class="radio-inline"><input type="radio" name="each_day">3</label>
                                    <label class="radio-inline"><input type="radio" name="each_day">4</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Each packet tablet :</label>
                                <div class="col-sm-8">
                                    <label class="radio-inline"><input type="radio" name="packet" checked>10</label>
                                    <label class="radio-inline"><input type="radio" name="packet">20</label>
                                    <label class="radio-inline"><input type="radio" name="packet">30</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">For Days :</label>
                                <div class="col-sm-8">
                                    <input type="number" placeholder="For Days" class="form-control" value="3"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Descriptions</label>
                                <div class="col-sm-8">
                                    <textarea class="form-control" placeholder="Write Description about Drug" rows="5">
                                        Avoid eating vegetables and fatty foods and pepper
                                    </textarea>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Save &nbsp;<i class="fa fa-save"></i></button>
                </div>
            </div>
        </div>
    </div> -->


@endsection


@section('script')
<!-- script -->

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
    $(document).on('click',function(){
	$('.getl').collapse('hide');
})
</script>



<!-- Data Tables -->
<script src="dashboard/js/plugins/dataTables/jquery.dataTables.js"></script>
<script src="dashboard/js/plugins/dataTables/dataTables.bootstrap.js"></script>
<script src="dashboard/js/plugins/dataTables/dataTables.responsive.js"></script>
<script src="dashboard/js/plugins/dataTables/dataTables.tableTools.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="dashboard/js/inspinia.js"></script>
<script src="dashboard/js/plugins/pace/pace.min.js"></script>

<style>
</style>

<!-- Page-Level Scripts -->
<!-- <script>
    $(document).ready(function () {
        $('.dataTables-example').DataTable({
            "dom": 'lTfigt',
            "tableTools": {
                "sSwfPath": "dashboard/js/plugins/dataTables/swf/copy_csv_xls_pdf.swf"
            }
        });

        /* Init DataTables */
        var oTable = $('#editable').DataTable();

        /* Apply the jEditable handlers to the table */
        oTable.$('td').editable('../example_ajax.html', {
            "callback": function (sValue, y) {
                var aPos = oTable.fnGetPosition(this);
                oTable.fnUpdate(sValue, aPos[0], aPos[1]);
            },
            "submitdata": function (value, settings) {
                return {
                    "row_id": this.parentNode.getAttribute('id'),
                    "column": oTable.fnGetPosition(this)[2]
                };
            },

            "width": "90%",
            "height": "100%"
        });


    }); -->
//     // hover daily collapse
//     $(".hov1").hover(
//  function() {
//     $('#day').collapse('show');
//   }, function() {
//      $('#day').collapse('hide');
// });
// // hover weekly collapse
// $(".hov2").hover(
// function() {
// $('#week').collapse('show');
// }, function() {
//  $('#week').collapse('hide');
// });
// // hover Monthly collapse
// $(".hov3").hover(
// function() {
// $('#month').collapse('show');
// }, function() {
//  $('#month').collapse('hide');
// });


</script>
@endsection
