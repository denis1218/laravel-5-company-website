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
                            <li><a href="/doctor_operations"><i class="fa fa-user-md"></i>Doctor</a></li>
                            <li><a href="/xray"><i class="fa fa-flash"></i>X-Ray</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="/patient"><i class="fa fa-user-plus"></i> <span
                                    class="nav-label">Patient Registeration</span> </a>
                    </li>
                    <li>
                        <a href="/appo"><i class="fa fa-list-alt"></i> <span class="nav-label">List Patients</span></a>
                    </li>
                    <li>
                        <a href="/reception"><i class="fa fa-money"></i> <span class="nav-label">Reception</span></a>
                    </li>
                    <li>
                        <a href="setting"><i class="fa fa-cog"></i> <span class="nav-label">Setting</span><span
                                    class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="account"><i class="fa fa-user-plus"></i>&nbsp;Accounts</a></li>
                            <li><a href="explore_backups"><i class="fa fa-database"></i> &nbsp;Backup DB</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-file"></i> <span class="nav-label">Reports</span> <span
                                    class="pull-right label label-primary">SPECIAL</span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="/patient_report"><i class="fa fa-user"></i>Patients</a></li>
                            <li><a href="/doctor_report"><i class="fa fa-user-md"></i>Doctors</a></li>
                        </ul>
                    </li>
                    <li>

                        <a href="#"><i class="fa fa-clipboard"></i> <span class="nav-label">Finance</span><span
                                    class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="/expenditure"><i class="fa fa-shopping-cart"></i>Expenditure</a></li>
                            <li><a href="/income"><i class="fa fa-arrow-circle-o-down"></i>Income</a></li>
                            <li><a href="/finance_report">Financial report<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level collapse">
                                    <li><a href="/finance_report_daily"><i class="fa fa-tag"></i>&nbsp;&nbsp;Daily</a>
                                    </li>
                                    <li><a href="/finance_report_date"><i class="fa fa-calendar"></i>&nbsp;&nbsp;&nbsp;Date</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
        </nav>
    </div>
</div>