<body>
<div style="position: fixed;">
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                            <img alt="image" class="" src="img/Dentaa3.png" width="100px">
                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong
                                            class="font-bold">HK Dental Clinic</strong>
                             </span> <span class="text-muted text-xs block">Profile <b class="caret"></b></span> </span>
                            </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                {{--<li><a href="#">Profile</a></li>--}}
                                {{--<li><a href="#">Contacts</a></li>--}}
                                {{--<li><a href="#">Mailbox</a></li>--}}
                                <li class="divider"></li>
                                <li><a href="/login">Logout</a></li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            <img src="img/small_logo_denta.png" width="30px"/>
                        </div>
                    </li>
                    <li class="active">
                        <a href="/dash"><i class="fa fa-home"></i> <span class="nav-label">Home</span> </a>
                    </li>
                    <li>
                        <a href="/doctor_operations"><i class="fa fa-sitemap"></i> <span
                                    class="nav-label">Department</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="/operation"><i class="fa fa-user-md"></i>Doctor</a></li>
                            <li><a href="/xray"><i class="fa fa-flash"></i>X-Ray</a></li>
                        </ul>
                    </li>
                    <li>
                        <a ><i class="fa fa-book"></i> <span class="nav-label">Reception</span><span
                                    class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="/employee"><i class="fa fa-save"></i>Doctor Registration</a></li>
                            <li><a href="/patient/create"><i class="fa fa-user-md"></i>Patient Registration</a></li>
                            <li><a href="/patient"><i class="fa fa-flash"></i>List of Patient</a></li>
                            <li><a href="/patient_report"><i class="fa fa-file-o"></i>Patient Report</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-calculator"></i> <span class="nav-label">Finance</span><span
                                    class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="/expenditure"><i class="fa fa-shopping-cart"></i>Expenditure</a></li>
                            <li><a href="/income"><i class="fa fa-arrow-circle-o-down"></i>Income</a></li>
                            <li><a href="/doctors"><i class="fa fa-user-md"></i>Doctors</a></li>
                            <li><a href="/finance_report"><i class="fa fa-file-o"></i> Financial report<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level collapse">
                                    <li><a href="/finance_report_income"><i class="fa fa-tag"></i>&nbsp;&nbsp;Income</a>
                                    </li>
                                    <li><a href="/finance_report_expenses"><i class="fa fa-tag"></i>&nbsp;&nbsp;Expenses</a>
                                    </li>
                                    <li><a href="/finance_report_profit"><i class="fa fa-tag"></i>&nbsp;&nbsp;Profit</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="setting"><i class="fa fa-cog"></i> <span class="nav-label">Setting</span><span
                                    class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="account"><i class="fa fa-user-plus"></i>&nbsp;Accounts</a></li>
                            <li><a href="explore_backups"><i class="fa fa-database"></i> &nbsp;Backup DB</a></li>
                        </ul>
                    </li>
                </ul>

            </div>
        </nav>
    </div>
</div>
