@extends('master')

@section('style')
    <!-- Data Tables -->
    <link href="dashboard/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <link href="dashboard/css/plugins/dataTables/dataTables.responsive.css" rel="stylesheet">
    <link href="dashboard/css/plugins/dataTables/dataTables.tableTools.min.css" rel="stylesheet">

    <link href="dashboard/css/animate.css" rel="stylesheet">
    <link href="dashboard/css/style.css" rel="stylesheet">
    <link href="dashboard/css/plugins/sweetalert/sweetalert.css" rel="stylesheet"/>

    <link href="css/hover/hover-min.css" rel="stylesheet">
@endsection



@section('content')



    <!-- Nav-buttons -->
    <div class="row wrapper border-bottom white-bg page-heading"
         style="margin-top:-20px; margin-bottom: 10px; margin-left:1px;">
        <h3 style="margin-left:43px;margin-top:10px;">Other income</h3>
        <div class="col-md-2 ">
            <h2><a class="btn btn-primary hvr-float-shadow" style="height:70px;width:155px; margin-left:25px;"
                   href="/income"><i class="fa fa-money" style="color:#ffc000; font-size: 30px;"></i> <br/>From Patient</a>
            </h2>
        </div>
        <div class="col-md-2 ">
            <h2><a class="btn btn-primary hvr-float-shadow" style="height:70px; width:155px; margin-left:15px;"
                   href="/xrey_income"><i class="fa fa-xing" style="color:#ffc000; font-size: 30px;"></i> <br/>X-Rey
                    Income</a></h2>
        </div>
        <div class="col-md-2 ">
            <h2><a class="btn btn-primary hvr-float-shadow" style="height:70px; width:155px;margin-left:15px;"
                   href="/other"><i class="fa fa-user" style="color:#ffc000; font-size: 30px;"></i> <br/>From
                    Others</a></h2>
        </div>
    </div>
    <!-- End of navButtons -->


    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Other income</h5>
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

                        <!-- form -->

                        <form method="post" class="form-horizontal" action="/other">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label class="col-sm-2 control-label">From Whome:</label>
                                <div class="col-sm-10">
                                    <input type="text" name="from_whom" class="form-control" placeholder="Enter Name" style="width:50%"
                                           required>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Amount:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="amount" placeholder="Enter the amount of money"
                                           style="width:50%" required>
                                </div>
                            </div>

                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Purpose:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="purpose" placeholder="purpose"
                                           style="width:50%" required>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Description:</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="description" placeholder="Enter more information"
                                              style="width:50%; resize: none;" required></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-1 control-label"></label>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary btn-md" style="margin-left:110px;">Save
                                        &nbsp;<i class="fa fa-save"></i></button>
                                    <input type="reset" class="btn btn-white btn-md" value="Reset">
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>

        {{--Other income table--}}

        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Xrey income</h5>
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
                        <div class="col-sm-9">
                            <div class="input-group" style="margin-top:25px;">
                        <span class="input-group-btn">
                        <button type="button" style="margin-left:17px;" class="btn btn-sm btn-primary"><i
                                    class="fa fa-search"></i> Search</button></span>
                                <input type="text" placeholder="Patient ID" class="input-sm form-control">
                            </div>
                        </div>

                        <table class="table table-striped table-bordered table-hover" id="editable"
                               style="margin-top:80px;margin-left:30px;width:95%;">
                            <thead>
                            <tr style="color:black;">
                                <th>ID</th>
                                <th>From Whom</th>
                                <th>Amount</th>
                                <th>Purpose</th>
                                <th>Description</th>
                                <th>Date</th>
                                <th>Edit</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(count($others)>0)
                                @foreach($others as $other)
                            <tr class="gradeX">
                                <td>{{$other->id}}</td>
                                <td>{{$other->from_whom}}</td>
                                <td>{{$other->amount}}</td>
                                <td>{{$other->purpose}}</td>
                                <td>{{$other->description}}</td>
                                <td>{{$other->created_at}}</td>
                                <td>
                                    <button  class="btn btn-sm btn-primary fa fa-edit" data-toggle="modal"
                                            data-target="#{{$other->id}}">&nbsp;Edit
                                    </button>
                                </td>
                            </tr>
                                @endforeach
                            @else
                                <h1 style="color:red;">No Externel Income</h1>
                            @endif
                            </tbody>
                        </table>
                            {{$others->links()}}
                        {{--Edit modal--}}
                        @foreach($others as $other)
                        <div class="modal inmodal" id="{{$other->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content animated fadeIn">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title">Edit Content</h4>
                                        <small>Edit information</small>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <form action="/other/{{$other->id}}" method="post">
                                                {{method_field('PUT')}}
                                            <div class="form-group">
                                                <label for="p-name">From Whom</label>
                                                <input type="text" name="from_whom" class="form-control" value="{{$other->from_whom}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="doctor-name">Amount</label>
                                                <input type="text" name="amount" class="form-control"  value="{{$other->amount}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="estimated-fee">Purpose</label>
                                                <input type="text" name="purpose" class="form-control"  value="{{$other->purpose}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="p-amount">Description</label>
                                                <input type="text" name="description" class="form-control"  value="{{$other->description}}" style="resize: none">
                                            </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save changes</button>

                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    {{--end of edit modal--}}

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
