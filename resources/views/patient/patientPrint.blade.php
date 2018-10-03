<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" dir="rtl">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>HK|Clinic</title>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/global/plugins/bootstrap/css/bootstrap-rtl.min.css" rel="stylesheet" type="text/css" />

    <link href="/assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap-rtl.css" rel="stylesheet" type="text/css" />

    <link href="/assets/global/css/components-rtl.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="/assets/global/css/plugins-rtl.min.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="favicon.ico" /> </head>
<!-- END HEAD -->


<body  style="background-color: #1BBC9B;">

        <div class="page-content-wrapper" >
            <!-- BEGIN CONTENT BODY -->
            <div class="page-content">

                <div class="container" style="margin-top: 20px;">
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                            <li>
                                <a href="/patient_report">
                                    <i class="icon-back"></i>
                                    <span class="badge badge-default">Back</span>
                                </a>

                            </li>


                        </ul>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-dark">
                                        <i class="icon-settings font-dark"></i>
                                        <span class="caption-subject bold uppercase">Patient Information </span>
                                    </div>
                                    <div class="tools"></div>
                                </div>
                                <div class="portlet-body">
                                    <table class="table table-hover text-center" id="sample_1">
                                        <thead>
                                        <tr>
                                            <th>Patient ID </th>
                                            <th>Patient Name </th>
                                            <th>AGE</th>
                                            <th>Gender</th>
                                            <th>Address</th>
                                            <th>Phone Number</th>
                                            <th>Problem Health</th>
                                            <th>Registration Date</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        <tr>
                                            <td>{{$patient->id}}</td>
                                            <td>{{$patient->name}}</td>
                                            <td>{{$patient->age}}</td>
                                            <td>{{$patient->gender}}</td>
                                            <td>{{$patient->address}}</td>
                                            <td>{{$patient->phone}}</td>
                                            <td>{{$patient->problem_health}}</td>
                                            <td>{{$patient->created_at}}</td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- END CONTENT BODY -->
        </div>
    </div>

</body>
<!-- BEGIN CORE PLUGINS -->
<script src="/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
{{--<script src="/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>--}}
<script src="/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
{{--<!-- END CORE PLUGINS -->--}}
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="/assets/global/scripts/datatable.js" type="text/javascript"></script>
<script src="/assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="/assets/global/scripts/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="/assets/pages/scripts/table-datatables-colreorder.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="/assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
<script src="/assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
<script src="/assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS-->
</div>

</html>