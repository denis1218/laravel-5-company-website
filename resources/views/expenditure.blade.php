@extends('master')

@section('style')
<!-- Data Tables -->
<link href="dashboard/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
<link href="dashboard/css/plugins/dataTables/dataTables.responsive.css" rel="stylesheet">
<link href="dashboard/css/plugins/dataTables/dataTables.tableTools.min.css" rel="stylesheet">

<link href="dashboard/css/animate.css" rel="stylesheet">
<link href="dashboard/css/style.css" rel="stylesheet">
<link href="dashboard/css/plugins/sweetalert/sweetalert.css" rel="stylesheet" />


   

    



@endsection 



@section('content')

                <div class="wrapper wrapper-content animated fadeInRight">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ibox float-e-margins">
                                <div class="ibox-title">
                                    <h5>Expenditure Form</h5>
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

                            <form method="get" class="form-horizontal">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">ID:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Enter the ID" style="width:50%" required>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Amount:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Amount of money" style="width:50%" required>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">To Whom:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="password" placeholder="Money receiver" style="width:50%" required>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Purpose:</label>
                                    <div class="col-sm-10">
                                        <input type="text" placeholder="Purpose" class="form-control" style="width:50%" required>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Item:</label>
                                    <div class="col-sm-10">
                                        <input type="text" placeholder="Enter the item" class="form-control" style="width:50%" required>
                                    </div>
                                </div>

                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Price:</label>
                                    <div class="col-sm-10">
                                        <input type="text" placeholder="Item cost" class="form-control" style="width:50%" required>
                                    </div>
                                </div>

                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Calculation Result:</label>
                                    <div class="col-sm-10">
                                        <input type="text" placeholder="" class="form-control" style="width:50%" readonly>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 text-left">
                                        <button type="submit" class="btn btn-primary btn-md" style="margin-left:177px;">SAVE</button>
                                        <input type="reset" class="btn btn-white btn-md" value="Reset" name="" id="">
                                    </div>
                                </div>
                            </form>

                                </div>
                            </div>
                        </div>
                    </div>


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



