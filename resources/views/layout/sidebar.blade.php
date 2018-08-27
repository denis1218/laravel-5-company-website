<body>
<div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="img/icon_co.png" width="50px"/>
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">HK Dental Clinic</strong>
                             </span> <span class="text-muted text-xs block">Profile <b class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            {{--<li><a href="#">Profile</a></li>--}}
                            {{--<li><a href="#">Contacts</a></li>--}}
                            {{--<li><a href="#">Mailbox</a></li>--}}
                            <li class="divider"></li>
                            <li><a href="#">Logout</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">d
                        HK
                    </div>
                </li>
                <li class="active">
                    <a href="/"><i class="fa fa-home"></i> <span class="nav-label">Home</span> </a>

                </li>
                <li>
                    <a href="/doctor_operations"><i class="fa fa-sitemap"></i> <span class="nav-label">Department</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="/doctor_operations">Doctor</a></li>
                        <li><a href="/xray">X-Ray</a></li>
                    </ul>
                </li>

                {{--<li>--}}
                    {{--<a href="/doctor"><i class="fa fa-envelope"></i> <span class="nav-label">Doctors </span><span class="label label-warning pull-right">16/24</span></a>--}}
                {{--</li>--}}
                <li>
                    <a href="/patient"><i class="fa fa-user-plus"></i> <span class="nav-label">Patient Registeration</span>  </a>
                </li>
                <li>
                    <a href="/appo"><i class="fa fa-list-alt"></i> <span class="nav-label">List Patients</span></a>
                </li>
                <li>
                    <a href="/reception"><i class="fa fa-money"></i> <span class="nav-label">Reception</span></a>
                </li>
                <li>
                    <a href="setting"><i class="fa fa-cog"></i> <span class="nav-label">Setting</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="account">Accounts</a></li>
                        <li><a href="#">Backup Database </a></li>
                    </ul>

                </li>
                <li>
                    <a href="#"><i class="fa fa-file"></i> <span class="nav-label">Reports</span>  <span class="pull-right label label-primary">SPECIAL</span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="#">Patients</a></li>
                        <li><a href="#">Doctors</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-clipboard"></i> <span class="nav-label">Finance</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="#">Expenditure</a></li>
                        <li><a href="#">Income</a></li>

                    </ul>
                </li>
                {{--<li>--}}
                    {{--<a href="#"><i class="fa fa-globe"></i> <span class="nav-label">Employees</span><span class="label label-info pull-right">NEW</span></a>--}}

                 {{----}}
                {{--</li>--}}
            </ul>

        </div>
    </nav>