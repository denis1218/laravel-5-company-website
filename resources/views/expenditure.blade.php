@extends('master')

@section('style')
    <!-- Data Tables -->
    <link href="dashboard/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <link href="dashboard/css/plugins/dataTables/dataTables.responsive.css" rel="stylesheet">
    <link href="dashboard/css/plugins/dataTables/dataTables.tableTools.min.css" rel="stylesheet">

    <link href="dashboard/css/animate.css" rel="stylesheet">
    <link href="dashboard/css/style.css" rel="stylesheet">
    <link href="dashboard/css/plugins/sweetalert/sweetalert.css" rel="stylesheet"/>

@endsection



@section('content')

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Expenses</h5>
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
                        <div class="row">
                            <div class="col-lg-5">
                                <form method="get">

                                    <div class="form-group">
                                        <label>To Whom</label>
                                        <div><input type="text" class="form-control" placeholder="Money receiver"></div>
                                    </div>

                                    <div class="form-group">
                                        <label>Paid_Amount</label>
                                        <div><input type="text" class="form-control" placeholder="Paid Amount"></div>
                                    </div>

                                    <div class="form-group">
                                        <label>Category</label>
                                        <div>
                                            <select class="select2_demo_1 form-control">
                                                <option value="1">Select The Category</option>
                                                <option value="1">Rent</option>
                                                <option value="2">Office Supply</option>
                                                <option value="3">Personal</option>
                                                <option value="4">Taxes</option>
                                                <option value="5">Employee Salary</option>
                                                <option value="6">Clinical Instrument</option>
                                                <option value="7">Miscellaneous</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label>Description</label>
                                        <div><textarea class="form-control" id="grade"
                                                       placeholder="Enter more information"
                                                       style="resize:none;"></textarea></div>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-group">
                                            <button class="btn btn-white" type="submit">Cancel</button>
                                            <button class="btn btn-primary" type="submit">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-3"></div>
                            <div class="col-lg-4" style="float:right;">
                                <div class="ibox float-e-margins" style=" background-color: lightyellow;">
                                    <div class="ibox-title" style="background-color:  lightyellow;">
                                        <h5 style="">Capital</h5>
                                    </div>
                                    <div class="ibox-content"style=" background-color: lightyellow;">
                                        <h1 class="no-margins">40 886,200</h1>
                                        <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Expense Table</h5>
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

                            <table class="table table-striped table-bordered table-hover " id="editable">
                                <thead>
                                <tr>
                                    <th>Exp ID</th>
                                    <th>To Whom</th>
                                    <th>Paid Amount</th>
                                    <th>Category</th>
                                    <th>Date Of Payment</th>
                                    <th>Description</th>
                                    <th>Edit</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="gradeX">
                                    <td>1</td>
                                    <td>Ahmad</td>
                                    <td>900</td>
                                    <td>Clinical Instrument</td>
                                    <td>10-sep-18</td>
                                    <td>Artificial teeth purchased</td>
                                    <td>
                                        <button class="btn btn-xs btn-danger fa fa-remove demo3">&nbsp;Delete</button>
                                        <button class="btn btn-xs btn-success fa fa-edit" data-toggle="modal"
                                                data-target="#eprice">&nbsp;Edit
                                        </button>
                                    </td>
                                </tr>

                                <tr class="gradeX">
                                    <td>2</td>
                                    <td>Ali</td>
                                    <td>1000</td>
                                    <td>Miscellaneous</td>
                                    <td>03-sep-18</td>
                                    <td>Electrical switch</td>
                                    <td>
                                        <button class="btn btn-xs btn-danger fa fa-remove demo3">&nbsp;Delete</button>
                                        <button class="btn btn-xs btn-success fa fa-edit" data-toggle="modal"
                                                data-target="#eprice">&nbsp;Edit
                                        </button>
                                    </td>
                                </tr>

                                <tr class="gradeX">
                                    <td>3</td>
                                    <td>Mujtaba</td>
                                    <td>9200</td>
                                    <td>Personal</td>
                                    <td>06-sep-18</td>
                                    <td>Airline tecket booking</td>
                                    <td>
                                        <button class="btn btn-xs btn-danger fa fa-remove demo3">&nbsp;Delete</button>
                                        <button class="btn btn-xs btn-success fa fa-edit" data-toggle="modal"
                                                data-target="#eprice">&nbsp;Edit
                                        </button>
                                    </td>
                                </tr>

                                <tr class="gradeX">
                                    <td>4</td>
                                    <td>Ahmad</td>
                                    <td>100</td>
                                    <td>Miscellaneous</td>
                                    <td>06-sep-18</td>
                                    <td>Chocolate for doctors</td>
                                    <td>
                                        <button class="btn btn-xs btn-danger fa fa-remove demo3">&nbsp;Delete</button>
                                        <button class="btn btn-xs btn-success fa fa-edit" data-toggle="modal"
                                                data-target="#eprice">&nbsp;Edit
                                        </button>
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
    <div class="modal inmodal" id="eprice" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated fadeIn">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span
                                aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    {{--<i class="fa fa-edit modal-icon text-primary"></i>--}}
                    <h4 class="modal-title">Edit Content</h4>
                </div>
                <div class="modal-body">
                    {{--<div class="form-group"><label>ID</label> <input type="text" placeholder="Id" value="" class="form-control"></div>--}}
                    <div class="form-group"><label>Exp ID</label> <input type="number" placeholder="Exp Id" value=""
                                                                         class="form-control"></div>
                    <div class="form-group"><label>To Whom</label> <input type="text" placeholder="Receiver of money"
                                                                          value="" class="form-control"></div>
                    <div class="form-group"><label>Paid_Amount</label> <input type="text" placeholder="Paid Amount"
                                                                              value="" class="form-control"></div>
                    <div class="form-group"><label>Category</label>
                        <select class="select2_demo_1 form-control">
                            <option value="1">select a Category</option>
                            <option value="1">Rent</option>
                            <option value="2">Office Supply</option>
                            <option value="3">Personal</option>
                            <option value="4">Taxes</option>
                            <option value="5">Employee Salary</option>
                            <option value="6">Clinical Instrument</option>
                            <option value="7">Miscellaneous</option>
                        </select>
                    </div>
                    {{-- <div class="form-group"><label>Date Of Payment</label> <input type="text" placeholder="Date of payment" value="" class="form-control"></div> --}}
                    <div class="form-group"><label>Description</label> <textarea placeholder="Enter more Information"
                                                                                 value="" class="form-control"
                                                                                 readonly style="resize: none;"></textarea></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>

                </div>
            </div>
        </div>
    </div>
    <!-- end of model -->






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
    <script>
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


        });


    </script>
@endsection
