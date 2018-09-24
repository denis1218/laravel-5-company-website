@extends('master')
@section('content')
<div class="col-lg-12">
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>Custom responsive table </h5>
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
                <form action="" method="post">
                    <div class="input-group col-md-4"><input type="text" class="form-control" placeholder="Search Patient P-ID" style="margin-left: 20px">
                        <span class="input-group-btn">
                        <button type="button" class="btn btn-primary">Search
                        </button> </span></div>
                </form>
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">


                        <table class="table table-hover no-margins">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Status</th>
                                <th>Appointment Timing</th>
                                <th>Patient Name</th>
                                <th>Doctor Name</th>
                                <th>Register type</th>
                                <th>Patient_Details</th>
                                <th>Payment_Details</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td><span class="label label-primary">Visited</span></td>
                                <td><i class="fa fa-clock-o"></i> Wed 29-08-18 11:20pm</td>
                                <td>Azim</td>
                                <td class="text-navy"> <i class="fa fa-user-md"></i> Ahmad </td>
                                <td class=""> <i class="fa fa-book"></i> Online </td>
                                <td class=""><button class="btn btn-xs btn-info" data-toggle="modal" data-target="#info_patient" ><i class=" fa fa-user-md"></i> &nbsp Details</button></td>
                                  <td class=""><button class="btn btn-xs btn-info" data-toggle="modal" data-target="#info_payment" ><i class=" fa fa-money"></i> &nbsp Details</button></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td><span class="label label-primary">Visited</span></td>
                                <td><i class="fa fa-clock-o"></i> Wed 29-08-18 11:20pm</td>
                                <td>Azim</td>
                                <td class="text-navy"> <i class="fa fa-user-md"></i> Ahmad </td>
                                <td class=""> <i class="fa fa-book"></i> Online </td>
                                <td class=""><button class="btn btn-xs btn-info" data-toggle="modal" data-target="#info_patient" ><i class=" fa fa-user-md"></i> &nbsp Details</button></td>
                                  <td class=""><button class="btn btn-xs btn-info" data-toggle="modal" data-target="#info_payment" ><i class=" fa fa-money"></i> &nbsp Details</button></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td><span class="label label-primary">Visited</span></td>
                                <td><i class="fa fa-clock-o"></i> Wed 29-08-18 11:20pm</td>
                                <td>Azim</td>
                                <td class="text-navy"> <i class="fa fa-user-md"></i> Ahmad </td>
                                <td class=""> <i class="fa fa-book"></i> Online </td>
                                <td class=""><button class="btn btn-xs btn-info" data-toggle="modal" data-target="#info_patient" ><i class=" fa fa-user-md"></i> &nbsp Details</button></td>
                                  <td class=""><button class="btn btn-xs btn-info" data-toggle="modal" data-target="#info_payment" ><i class=" fa fa-money"></i> &nbsp Details</button></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td><span class="label label-primary">Visited</span></td>
                                <td><i class="fa fa-clock-o"></i> Wed 29-08-18 11:20pm</td>
                                <td>Azim</td>
                                <td class="text-navy"> <i class="fa fa-user-md"></i> Ahmad </td>
                                <td class=""> <i class="fa fa-book"></i> Online </td>
                                <td class=""><button class="btn btn-xs btn-info" data-toggle="modal" data-target="#info_patient" ><i class=" fa fa-user-md"></i> &nbsp Details</button></td>
                                  <td class=""><button class="btn btn-xs btn-info" data-toggle="modal" data-target="#info_payment" ><i class=" fa fa-money"></i> &nbsp Details</button></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td><span class="label label-primary">Visited</span></td>
                                <td><i class="fa fa-clock-o"></i> Wed 29-08-18 11:20pm</td>
                                <td>Azim</td>
                                <td class="text-navy"> <i class="fa fa-user-md"></i> Ahmad </td>
                                <td class=""> <i class="fa fa-book"></i> Online </td>
                                <td class=""><button class="btn btn-xs btn-info" data-toggle="modal" data-target="#info_patient" ><i class=" fa fa-user-md"></i> &nbsp Details</button></td>
                                <td class=""><button class="btn btn-xs btn-info" data-toggle="modal" data-target="#info_payment" ><i class=" fa fa-money"></i> &nbsp Details</button></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td><span class="label label-primary">Visited</span></td>
                                <td><i class="fa fa-clock-o"></i> Wed 29-08-18 11:20pm</td>
                                <td>Azim</td>
                                <td class="text-navy"> <i class="fa fa-user-md"></i> Ahmad </td>
                                <td class=""> <i class="fa fa-book"></i> Online </td>
                                <td class=""><button class="btn btn-xs btn-info" data-toggle="modal" data-target="#info_patient" ><i class=" fa fa-user-md"></i> &nbsp Details</button></td>
                                <td class=""><button class="btn btn-xs btn-info" data-toggle="modal" data-target="#info_payment" ><i class=" fa fa-money"></i> &nbsp Details</button></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- modal window to show editing detail of teeth  -->

<div class="modal inmodal" id="info_patient" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content animated fadeIn">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <i class=" modal-icon"><img src="dashboard/img/a9.jpg" class="rounded-circle"/></i>
                <h4 class="modal-title">Sita Qasimi</h4>
                <h5>Patient ID : P-0785511252</h5>
            </div>
            <div class="modal-body">
                <table class=" table table-striped" style="font-size: 1.3em;">
                    <tr>
                        <td>Full Name :</td>
                        <td>Sita Qasimi</td>
                    </tr>
                    <tr>
                        <td>Gender :</td>
                        <td>Female</td>
                    </tr>
                    <tr>
                        <td>Age :</td>
                        <td>25</td>
                    </tr>
                    <tr>
                        <td>Address :</td>
                        <td>Darul-aman, Kabul, Afghanistan</td>
                    </tr>
                    <tr>
                        <td>Encounter visites :</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Date Register :</td>
                        <td>2018/5/2</td>
                    </tr>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success">More History &nbsp;<i class="fa fa-file-o"></i></button>
            </div>
        </div>
    </div>
</div>
<!--  end of modal window -->


<!-- modal window to show editing detail of teeth  -->

<div class="modal inmodal" id="info_payment" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content animated fadeIn">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <i class=" modal-icon"><img src="dashboard/img/a5.jpg" class="rounded-circle"/></i>
                <h4 class="modal-title">Sita Qasimi</h4>
                <h5>Patient ID : P-0785511252</h5>
                <hr>
            </div>
            <div class="modal-body">
                <table class=" table table-striped" style="font-size: 1.3em;">
                    <tr>
                        <td>Total Fee :</td>
                        <td>3000AFG</td>
                    </tr>
                    <tr>
                        <td>Paid Amount :</td>
                        <td>1000 AFG</td>
                    </tr>
                    <tr>
                        <td>Discount :</td>
                        <td>200</td>
                    </tr>
                    <tr>
                        <td>Remaining :</td>
                        <td>1800 AFG</td>
                    </tr>

                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success">More info &nbsp;<i class="fa fa-file-o"></i></button>
            </div>
        </div>
    </div>
</div>
<!--  end of modal window -->

    @endsection
