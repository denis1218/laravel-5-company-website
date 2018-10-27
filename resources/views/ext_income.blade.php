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
    @include('part.income_button_top')
    <!-- End of navButtons -->


    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Form Other income</h5>
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
                                    <textarea rows="5" class="form-control" name="description" placeholder="Enter more information"
                                              style="width:50%; resize: none;" required></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-1 control-label"></label>
                                <div class="col-sm-10">
                                    <input type="hidden" name="toast" value="toast">
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

       
    </div>


@endsection

