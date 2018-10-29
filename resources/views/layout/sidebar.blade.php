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
                                            class="font-bold">{{trans('file.hk_dental_clinic')}}</strong>
                             </span> <span class="text-muted text-xs block">{{trans('file.profile')}} <b class="caret"></b></span> </span>

                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            {{--<li><a href="#">Profile</a></li>--}}
                            {{--<li><a href="#">Contacts</a></li>--}}
                            {{--<li><a href="#">Mailbox</a></li>--}}
                            <li class="divider"></li>
                            <li><a href="/login">{{trans('file.logout')}}</a></li>
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
                            <li><a href="/xray"><img src="{{ asset('img/xray.png') }}" width="13px"/>&nbsp;{{trans('file.xray')}}</a></li>
                        </ul>
                    </li>


                    <li>
                        <a><i class="fa fa-book"></i> <span class="nav-label">{{trans('file.reception')}}</span><span

                                    class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="/doctors/create"><i class="fa fa-user-md"></i>{{trans('file.doctor_registration')}}</a></li>
                            <li><a href="/patient/create"><i class="fa fa-user"></i>{{trans('file.patient_registration')}}</a></li>
                            <li><a href="/patient"><i class="fa fa-list-ol"></i>{{trans('file.list_of_patient')}}</a></li>
                            <li><a href="/patient_report"><img src="{{ asset('img/report_patient.png') }}" width="14px"/>&nbsp;{{trans('file.patient_report')}}</a>
                            </li>
                            <li><a href="/prescription"><img src="{{ asset('img/prescription.png') }}" width="15px"/>&nbsp;{{trans('file.prescription')}}
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

                            <li><a href="/finance_report"><img src="{{ asset('img/report_finance.png') }}" width="13px"/>&nbsp;{{trans('file.financial_report')}}
                                    <span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level collapse">
                                    <li><a href="/finance_report_income"><i
                                                    class="fa fa-arrow-down"></i>&nbsp;&nbsp;{{trans('file.income')}}</a>
                                    </li>
                                    <li><a href="/finance_report_expenses"><i
                                                    class="fa fa-shopping-cart"></i>{{trans('file.expense')}}</a>
                                    </li>
                                    <li><a href="/finance_report_profit"><img src="{{ asset('img/profite.png') }}" width="15px"/>
                                                    &nbsp;&nbsp;{{trans('file.profit')}}</a>
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
                            <li><a href="/user"><i class="fa fa-user-plus"></i>{{trans('file.account')}}</a></li>
                            <li><a href="/backup"><i class="fa fa-database"></i>{{trans('file.backup_db')}}</a>
                            </li>

                            <li><a href="medicine"><i class="fa fa-pencil-square-o"></i>{{trans('file.add_medicine')}}</a></li>


                            <li><a href="/expense-category"><i
                                            class="fa fa-pencil-square-o"></i>{{trans('file.expense_category')}}</a>
                            </li>
                            <li><a href="/dental-defect-list"><i
                                            class="fa fa-pencil-square-o"></i>{{trans('file.dental_defect_list')}}</a>
                            </li>
                            <li><a href="/treatment-list"><i
                                            class="fa fa-pencil-square-o"></i>{{trans('file.treatment_list')}}</a>
                            </li>
                            <li><a href="/doctor-department"><i
                                            class="fa fa-pencil-square-o"></i>{{trans('file.doctor_department')}}</a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="/contact"><i class="fa fa-phone"></i> <span
                                    class="nav-label">{{trans('file.contact')}}</span><span
                                    class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="/contact-us"><i class="fa fa-phone-square"></i>{{trans('file.contactUs')}}</a></li>
                            <li><a href="/help"><i class="fa fa-question-circle"></i>{{trans('file.help')}}</a></li>
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

            </ul>
            {{--end condition of doctor--}}

            @endif

                @if(Auth::user()->department == 'reception')


                    <li class="active">
                        <a href="/dash_reception"><i class="fa fa-home"></i> <span class="nav-label">{{trans('file.home')}}</span> </a>
                    </li>


                    <li>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="/doctors/create"><i class="fa fa-save"></i>{{trans('file.doctor_registration')}}
                            </a></li>
                        <li><a href="/patient/create"><i
                                        class="fa fa-user-md"></i>{{trans('file.patient_registration')}}</a></li>
                        <li><a href="/patient"><i class="fa fa-flash"></i>{{trans('file.list_of_patient')}}</a></li>
                        <li><a href="/patient_report"><i class="fa fa-file-o"></i>{{trans('file.patient_report')}}</a></li>
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

        </div>
    </nav>
</div>


