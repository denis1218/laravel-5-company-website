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
                                <th>Status</th>
                                <th>Time Appointment</th>
                                <th>Date Appointment</th>
                                <th>Day Appointment</th>
                                <th>Patient Name</th>
                                <th>Doctor Name</th>
                                <th>Register type</th>
                                <th>Details</th>
                                {{--<th>History</th>--}}
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><span class="label label-primary">Visited</span> </td>
                                <td><i class="fa fa-clock-o"></i> 11:20pm</td>
                                <td><i class="fa fa-clock-o"></i> 2018/8/1</td>
                                <td><i class="fa fa-clock-o"></i> Monday</td>
                                <td>Samantha</td>
                                <td class="text-navy"> <i class="fa fa-user-md"></i> Ahmad </td>
                                <td class=""> <i class="fa fa-book"></i> Online </td>
                                <td class=""> <i class=""></i><button class="btn btn-xs btn-info">Details</button></td>
                                {{--<td class=""> <i class=""></i><button class="btn btn-xs btn-success">History</button></td>--}}
                            </tr>
                            <tr>
                                <td><span class="label label-warning">Canceled</span> </td>
                                <td><i class="fa fa-clock-o"></i> 10:40am</td>
                                <td><i class="fa fa-clock-o"></i> 2018/8/1</td>
                                <td><i class="fa fa-clock-o"></i> Monday</td>
                                <td>Monica</td>
                                <td class="text-navy"> <i class="fa fa-user-md"></i> Ahmad </td>
                                <td> <i class="fa fa-book"></i> Online </td>
                                <td class=""> <i class=""></i><button class="btn btn-xs btn-info">Details</button></td>
                                {{--<td class=""> <i class=""></i><button class="btn btn-xs btn-success">History</button></td>--}}
                            </tr>
                            <tr>
                                <td><small>Waiting...</small> </td>
                                <td><i class="fa fa-clock-o"></i> 01:30pm</td>
                                <td><i class="fa fa-clock-o"></i> 2018/8/1</td>
                                <td><i class="fa fa-clock-o"></i> Monday</td>
                                <td>John</td>
                                <td class="text-navy"> <i class="fa fa-user-md"></i> Nemat </td>
                                <td> <i class="fa fa-book"></i> Local </td>
                                <td class=""> <i class=""></i><button class="btn btn-xs btn-info">Details</button></td>
                                {{--<td class=""> <i class=""></i><button class="btn btn-xs btn-success">History</button></td>--}}
                            </tr>
                            <tr>
                                <td><span class="label label-primary">Visited</span> </td>
                                <td><i class="fa fa-clock-o"></i> 02:20pm</td>
                                <td><i class="fa fa-clock-o"></i> 2018/8/1</td>
                                <td><i class="fa fa-clock-o"></i> Monday</td>
                                <td>Agnes</td>
                                <td class="text-navy"> <i class="fa fa-user-md"></i> Mike </td>
                                <td> <i class="fa fa-book"></i> Local </td>
                                <td class=""> <i class=""></i><button class="btn btn-xs btn-info">Details</button></td>
                                {{--<td class=""> <i class=""></i><button class="btn btn-xs btn-success">History</button></td>--}}
                            </tr>
                            <tr>
                                <td><small>Waiting...</small> </td>
                                <td><i class="fa fa-clock-o"></i> 09:40pm</td>
                                <td><i class="fa fa-clock-o"></i> 2018/8/1</td>
                                <td><i class="fa fa-clock-o"></i> Monday</td>
                                <td>Janet</td>
                                <td class="text-navy"> <i class="fa fa-user-md"></i> Ahmad </td>
                                <td> <i class="fa fa-book"></i> Online </td>
                                <td class=""> <i class=""></i><button class="btn btn-xs btn-info">Details</button></td>
                                {{--<td class=""> <i class=""></i><button class="btn btn-xs btn-success">History</button></td>--}}
                            </tr>
                            <tr>
                                <td><span class="label label-primary">Visited</span> </td>
                                <td><i class="fa fa-clock-o"></i> 04:10am</td>
                                <td><i class="fa fa-clock-o"></i> 2018/8/1</td>
                                <td><i class="fa fa-clock-o"></i> Monday</td>
                                <td>Amelia</td>
                                <td class="text-navy"> <i class="fa fa-user-md"></i> Rahm </td>
                                <td> <i class="fa fa-book"></i> Online </td>
                                <td class=""> <i class=""></i><button class="btn btn-xs btn-info">Details</button></td>
                                {{--<td class=""> <i class=""></i><button class="btn btn-xs btn-success">History</button></td>--}}
                            </tr>
                            <tr>
                                <td><small>Waiting...</small> </td>
                                <td><i class="fa fa-clock-d"></i> 12:08am</td>
                                <td><i class="fa fa-clock-o"></i> 2018/8/1</td>
                                <td><i class="fa fa-clock-o"></i> Monday</td>
                                <td>Damian</td>
                                <td class="text-navy"> <i class="fa fa-user-md"></i> Rahamt </td>
                                <td> <i class="fa fa-book"></i> Local </td>
                                <td class=""> <i class=""></i><button class="btn btn-xs btn-info">Details</button></td>
                                {{--<td class=""> <i class=""></i><button class="btn btn-xs btn-success">History</button></td>--}}
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

