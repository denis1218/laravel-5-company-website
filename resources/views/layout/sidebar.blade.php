<body>


<div id="wrapper">


    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="" src="{{asset('img/dentaa3.png')}}" width="100px">
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
                {{--condition for super admin--}}


                {{--condition for super admin--}}
                @if(Auth::user()->department == 'admin')
                    <li class="active">

                        <a href="/dash"><i class="fa fa-home"></i> <span class="nav-label">{{trans('file.home')}}</span>
                        </a>
                    </li>

                    <li>
                        <a><i class="fa fa-sitemap"></i> <span
                                    class="nav-label">{{trans('file.department')}}</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="/operation"><i class="fa fa-user-md"></i>{{trans('file.doctor')}}</a></li>
                            <li><a href="/xray"><i class="fa fa-flash"></i>{{trans('file.xray')}}</a></li>
                        </ul>
                    </li>


                    <li>
                        <a><i class="fa fa-book"></i> <span class="nav-label">{{trans('file.reception')}}</span><span

                                    class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="/doctors/create"><i
                                            class="fa fa-save"></i>{{trans('file.doctor_registration')}}</a></li>
                            <li><a href="/patient/create"><i
                                            class="fa fa-user-md"></i>{{trans('file.patient_registration')}}</a></li>
                            <li><a href="/patient"><i class="fa fa-flash"></i>{{trans('list_of_patient')}}</a></li>
                            <li><a href="/patient_report"><i class="fa fa-file-o"></i>{{trans('patient_report')}}</a>
                            </li>
                            <li><a href="/prescription"><i class="fa fa-file-pdf-o"></i>{{trans('file.prescription')}}
                                </a></li>

                        </ul>
                    </li>

                    <li>
                        <a><i class="fa fa-calculator"></i> <span
                                    class="nav-label">{{trans('file.finance')}}</span><span
                                    class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="/expenditure"><i class="fa fa-shopping-cart"></i>{{trans('file.expenditure')}}
                                </a></li>
                            <li><a href="/income"><i class="fa fa-arrow-circle-o-down"></i>{{trans('file.income')}}</a>
                            </li>
                            <li><a href="/doctors"><i class="fa fa-user-md"></i>{{trans('file.doctors')}}</a></li>
                            <li><a href="/finance_report"><i class="fa fa-file-o"></i>{{trans('file.financial_report')}}
                                    <span
                                            class="fa arrow"></span></a>
                                <ul class="nav nav-second-level collapse">
                                    <li><a href="/finance_report_income"><i
                                                    class="fa fa-tag"></i>&nbsp;&nbsp;{{trans('file.income')}}</a>
                                    </li>
                                    <li><a href="/finance_report_expenses"><i
                                                    class="fa fa-tag"></i>{{trans('file.expense')}}</a>
                                    </li>
                                    <li><a href="/finance_report_profit"><i
                                                    class="fa fa-tag"></i>&nbsp;&nbsp;{{trans('file.profit')}}</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="setting"><i class="fa fa-cog"></i> <span
                                    class="nav-label">{{trans('file.setting')}}</span><span
                                    class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="account"><i class="fa fa-user-plus"></i>{{trans('file.account')}}</a></li>
                            <li><a href="explore_backups"><i class="fa fa-database"></i>{{trans('file.backup_db')}}</a>
                            </li>
                            <li><a href="medicine"><i class="fa fa-plus"></i>{{trans('file.add_medicine')}}</a></li>

                            <li><a href="/expense-category"><i
                                            class="fa fa-pencil-square-o"></i>{{trans('file.expense_category')}}</a>
                            </li>

                        </ul>
                    </li>
                    {{--end condition of super admin--}}
                @endif
            


                @if(Auth::user()->department == 'doctor')

                    <li class="active">
                        <a href="/dash_doctor"><i class="fa fa-home"></i> <span
                                    class="nav-label">{{trans('file.home')}}</span> </a>
                    </li>


                    <li>
                        <a><i class="fa fa-sitemap"></i> <span
                                    class="nav-label">{{trans('file.department')}}</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="/operation"><i class="fa fa-user-md"></i>{{trans('file.doctor')}}</a></li>
                            <li><a href="/xray"><i class="fa fa-flash"></i>{{trans('file.xray')}}</a></li>
                        </ul>
                    </li>
<<<<<<< HEAD
            </ul>
            {{--end condition of doctor--}}

            @endif
            {{--condition for reception--}}
            @if(Auth::user()->department == 'reception')
                <li class="active">
                    <a href="/dash_reception"><i class="fa fa-home"></i> <span
                                class="nav-label">{{trans('file.home')}}</span> </a>
                </li>


                <li>
                    <a><i class="fa fa-book"></i> <span class="nav-label">{{trans('file.reception')}}</span><span
=======

                    {{--end condition of doctor--}}
                @endif
                
                {{--condition for reception--}}
                @if(Auth::user()->department == 'reception')
                    <li class="active">
                        <a href="/dash_reception"><i class="fa fa-home"></i> <span class="nav-label">Home</span> </a>
                    </li>


                    <li>
                        <a><i class="fa fa-book"></i> <span class="nav-label">Reception</span><span
                                    class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="/doctors/create"><i class="fa fa-save"></i>Doctor Registration</a></li>
                            <li><a href="/patient/create"><i class="fa fa-user-md"></i>Patient Registration</a></li>
                            <li><a href="/patient"><i class="fa fa-flash"></i>List of Patient</a></li>
                            <li><a href="/patient_report"><i class="fa fa-file-o"></i>Patient Report</a></li>
                            <li><a href="/prescription"><i class="fa fa-file-pdf-o"></i>Prescriptions</a></li>
>>>>>>> f3b9ebc7224cbd791a853c87d5beda1599471f59

                                class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="/doctors/create"><i class="fa fa-save"></i>{{trans('file.doctor_registration')}}
                            </a></li>
                        <li><a href="/patient/create"><i
                                        class="fa fa-user-md"></i>{{trans('file.patient_registration')}}</a></li>
                        <li><a href="/patient"><i class="fa fa-flash"></i>{{trans('list_of_patient')}}</a></li>
                        <li><a href="/patient_report"><i class="fa fa-file-o"></i>{{trans('patient_report')}}</a></li>
                        <li><a href="/prescription"><i class="fa fa-file-pdf-o"></i>{{trans('file.prescription')}}</a>
                        </li>

                    </ul>
                </li>

                <li>
                    <a><i class="fa fa-calculator"></i> <span class="nav-label">{{trans('file.finance')}}</span><span
                                class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="/expenditure"><i class="fa fa-shopping-cart"></i>{{trans('file.expenditure')}}</a>
                        </li>
                        <li><a href="/income"><i class="fa fa-arrow-circle-o-down"></i>{{trans('file.income')}}</a></li>
                        <li><a href="/doctors"><i class="fa fa-user-md"></i>{{trans('file.doctors')}}</a></li>
                        <li><a href="/finance_report"><i class="fa fa-file-o"></i>{{trans('file.financial_report')}}<span
                                        class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li><a href="/finance_report_income"><i
                                                class="fa fa-tag"></i>&nbsp;&nbsp;{{trans('file.income')}}</a>
                                </li>
                                <li><a href="/finance_report_expenses"><i
                                                class="fa fa-tag"></i>{{trans('file.expense')}}</a>
                                </li>
                                <li><a href="/finance_report_profit"><i
                                                class="fa fa-tag"></i>&nbsp;&nbsp;{{trans('file.profit')}}</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                @endif
                {{--end condition--}}

<<<<<<< HEAD
=======
            </ul>

>>>>>>> f3b9ebc7224cbd791a853c87d5beda1599471f59
        </div>
    </nav>
</div>


