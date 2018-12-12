<body class="{{ app()->getLocale()}}">

<div id="wrapper">


    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="" src="{{asset('img/dentaa3.png')}}" width="120px">
                            <p class="text-white">version 0.0.1v</p>
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong
                                            class="font-bold">{{trans('file.hk_dental_clinic')}}</strong>
                             </span>  </span>
                        </a>

                    </div>
                    <div class="logo-element">
                        <img src="img/small_logo_denta.png" width="30px"/>
                    </div>
                </li>

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
                            <li><a href="/xray"><img src="{{ asset('img/xray.png') }}"
                                                     width="13px"/>&nbsp;{{trans('file.xray')}}</a></li>
                        </ul>
                    </li>
                    <li>
                        <a><i class="fa fa-book"></i> <span class="nav-label">{{trans('file.reception')}}</span><span

                                    class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">

                            <li><a href="/patient/create"><i
                                            class="fa fa-user"></i>{{trans('file.patient_registration')}}</a></li>
                            <li><a href="/patient"><i class="fa fa-list-ol"></i>{{trans('file.list_of_patient')}}</a>
                            </li>
                            <li><a href="/patient_report"><img src="{{ asset('img/report_patient.png') }}"
                                                               width="14px"/>&nbsp;{{trans('file.patient_report')}}</a>
                            </li>
                            <li><a href="/prescription"><img src="{{ asset('img/prescription.png') }}" width="15px"/>&nbsp;{{trans('file.prescription')}}
                                </a></li>
                            <li><a href="/doctors/create"><i
                                            class="fa fa-user-md"></i>{{trans('file.doctor_registration')}}</a></li>
                            <li><a href="/employee/create"><i
                                            class="fa fa-user"></i>{{trans('file.emp_reg')}}</a></li>
                        </ul>
                    </li>
                    {{--traders--}}
                    <li>
                        <a href=""> <i class="fa fa-truck"></i><span class="nav-label">{{trans('file.supplier')}}</span>
                            <span class="fa fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="/trader"><i
                                            class="fa fa-truck"></i>{{trans('file.supplier')}}
                                </a>
                            </li>
                            <li><a href="/item"><i
                                            class="fa fa-gift"></i>{{trans('file.item')}}</a>
                            </li>
                            <li><a href="/common"><i
                                            class="fa fa-shopping-cart"></i>{{trans('file.purchase')}}</a>
                            </li>
                        </ul>
                    </li>
                    {{--end of traders--}}
                    <li>
                        <a><i class="fa fa-calculator"></i> <span
                                    class="nav-label">{{trans('file.finance')}}</span><span
                                    class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="/expenditure"><i class="fa fa-shopping-cart"></i>{{trans('file.expenditure')}}
                                </a></li>
                            <li><a href="/income"><i class="fa fa-arrow-circle-o-down"></i>{{trans('file.income')}}</a>
                            </li>
                            <li><a href="/finance_report"><img src="{{ asset('img/report_finance.png') }}"
                                                               width="13px"/>&nbsp;{{trans('file.financial_report')}}
                                    <span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level collapse">
                                    <li><a href="/finance_report_income"><i
                                                    class="fa fa-arrow-down"></i>&nbsp;&nbsp;{{trans('file.income')}}
                                        </a>
                                    </li>
                                    <li><a href="/finance_report_expenses"><i
                                                    class="fa fa-shopping-cart"></i>{{trans('file.expense')}}</a>
                                    </li>

                                    <li><a href="/finance_report_profit"><img src="{{ asset('img/profite.png') }}"
                                                                              width="15px"/>
                                            &nbsp;&nbsp;{{trans('file.profit')}}</a>
                                    </li>
                                    <li><a href="/finance_report_loan"><i class="fa fa-stack-overflow"></i>
                                            &nbsp;&nbsp;Loans</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href=""><i class="fa fa-money"></i><span class="nav-lable">{{trans('file.salary')}}</span>
                            <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="/doctors"><i class="fa fa-user-md"></i>{{ trans('file.doctors') }}</a>
                            </li>
                            <li><a href="/employee"><i class="fa fa-users"></i>{{ trans('file.other_staff') }}</a>
                            </li>
                        </ul>
                    </li>
                {{-- setting menu begin --}}
                    <li>
                        <a href="setting"><i class="fa fa-cog"></i> <span
                                    class="nav-label">{{trans('file.setting')}}</span><span
                                    class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="/user"><i class="fa fa-user-plus"></i>{{trans('file.account')}}</a></li>

                            <li><a><i class="fa fa-plus-square"></i>&nbsp;Add ..
                                    <span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level collapse">
                                    <li><a href="/medicine"><i class="fa fa-pencil-square-o"></i>{{trans('file.add_medicine')}}
                                        </a></li>
                                    <li><a href="/medicine_category"><i class="fa fa-pencil-square-o"></i>{{trans('file.medicine_category')}}
                                        </a></li>
                                    <li><a href="/teeth-shade"><i
                                                    class="fa fa-pencil-square-o"></i>{{trans('file.teethshade')}}</a>
                                    </li>
                                    <li><a href="/teeth-cover"><i
                                                    class="fa fa-pencil-square-o"></i>{{trans('file.teethcover')}}</a>
                                    </li>


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

                            <li><a href="/outdated_patient"><i
                                            class="fa fa-user"></i>{{trans('file.odp')}}</a>
                            </li>
                            <li><a href="" onclick="updateSoftware()"><i
                                            class="fa fa-refresh"></i>{{trans('file.update_software')}}</a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="setting"><i class="fa fa-trash"></i> <span
                                    class="nav-label">{{trans('file.rd')}}</span><span
                                    class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li>
                                <a href="/user-deleted"><i class="fa fa-user"></i> <span
                                            class="nav-label">{{trans('file.users')}}</span></a>
                            </li>
                            <li>
                                <a href="/patient-deleted"><i class="fa fa-user-secret"></i> <span
                                            class="nav-label">{{trans('file.patients')}}</span></a>
                            </li>
                            <li>
                                <a href="/doctor-deleted"><i class="fa fa-user-md"></i> <span
                                            class="nav-label">{{trans('file.doctors')}}</span></a>
                            </li>
                            <li>
                                <a href="/expense-deleted"><i class="fa fa-shopping-cart"></i> <span
                                            class="nav-label">{{trans('file.expenses')}}</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="/log_activity"><i class="fa fa-tasks"></i> <span
                                    class="nav-label">Log all activity</span></a>
                    </li>
                    <li>
                        <a href="/contact"><i class="fa fa-phone"></i> <span
                                    class="nav-label">{{trans('file.support')}}</span></a>
                    </li>
                    <li>
                        <a href="/about-us"><i class="fa fa-info"></i> <span
                                    class="nav-label">&nbsp;{{trans('file.about_us')}}</span></a>

                    </li>
                    <li>
                    <li><a href="/help"><i class="fa fa-question-circle"></i><span class="nav-lable">{{trans('file.help')}}</span></a></li>

                    {{--end condition of super admin--}}
                @endif


                {{--Condition for Doctor --}}
                @if(Auth::user()->department == 'doctor')
                    <li class="active">
                        <a href="/dash_doctor"><i class="fa fa-home"></i> <span
                                    class="nav-label">{{trans('file.home')}}</span> </a>
                    </li>
                    <li>
                        <a><i class="fa fa-sitemap"></i> <span
                                    class="nav-label">{{trans('file.department')}}</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="/dash_doctor"><i class="fa fa-user-md"></i>{{trans('file.doctor')}}</a></li>
                            {{--<li><a href="/xray"><i class="fa fa-flash"></i>{{trans('file.xray')}}</a></li>--}}
                        </ul>
                    </li>
                    <li>
                        <a href="/contact"><i class="fa fa-phone"></i> <span
                                    class="nav-label">{{trans('file.support')}}</span></a>
                    </li>
                    <li>
                        <a href="/about-us"><i class="fa fa-info"></i> <span
                                    class="nav-label">&nbsp;{{trans('file.about_us')}}</span></a>

                    </li>
                    <li>
                    <li><a href="/help"><i class="fa fa-question-circle"></i>{{trans('file.help')}}</a></li>


                @endif

                {{--end condition of doctor--}}

                {{--Condition for X-ray --}}
                @if(Auth::user()->department == 'xray')
                    <li class="active">
                        <a href="/xray"><i class="fa fa-home"></i> <span
                                    class="nav-label">{{trans('file.home')}}</span> </a>
                    </li>
                    <li>
                        <a><i class="fa fa-sitemap"></i> <span
                                    class="nav-label">{{trans('file.department')}}</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            {{--<li><a href="/operation"><i class="fa fa-user-md"></i>{{trans('file.doctor')}}</a></li>--}}
                            <li><a href="/xray"><i class="fa fa-flash"></i>{{trans('file.xray')}}</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="/contact"><i class="fa fa-phone"></i> <span
                                    class="nav-label">{{trans('file.support')}}</span></a>
                    </li>
                    <li>
                        <a href="/about-us"><i class="fa fa-info"></i> <span
                                    class="nav-label">&nbsp;{{trans('file.about_us')}}</span></a>

                    </li>
                    <li>
                    <li><a href="/help"><i class="fa fa-question-circle"></i>{{trans('file.help')}}</a></li>


                @endif
                {{--end condition of X-ray--}}


                @if(Auth::user()->department == 'reception')


                    <li class="active">
                        <a href="/dash"><i class="fa fa-home"></i> <span
                                    class="nav-label">{{trans('file.home')}}</span> </a>
                    </li>


                    <li>
                        <a><i class="fa fa-book"></i> <span class="nav-label">{{trans('file.reception')}}</span><span

                                    class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">

                            <li><a href="/patient/create"><i
                                            class="fa fa-user"></i>{{trans('file.patient_registration')}}</a></li>
                            <li><a href="/patient"><i class="fa fa-list-ol"></i>{{trans('file.list_of_patient')}}</a>
                            </li>
                            <li><a href="/patient_report"><img src="{{ asset('img/report_patient.png') }}"
                                                               width="14px"/>&nbsp;{{trans('file.patient_report')}}</a>
                            </li>
                            <li><a href="/prescription"><img src="{{ asset('img/prescription.png') }}" width="15px"/>&nbsp;{{trans('file.prescription')}}
                                </a></li>
                            <li><a href="/doctors/create"><i
                                            class="fa fa-user-md"></i>{{trans('file.doctor_registration')}}</a></li>
                            <li><a href="/employee/create"><i
                                            class="fa fa-user"></i>{{trans('file.emp_reg')}}</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href=""> <i class="fa fa-truck"></i>{{trans('file.supplier')}}
                            <span class="fa fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="/trader"><i
                                            class="fa fa-truck"></i>{{trans('file.supplier')}}
                                </a>
                            </li>
                            <li><a href="/item"><i
                                            class="fa fa-gift"></i>{{trans('file.item')}}</a>
                            </li>
                            <li><a href="/common"><i
                                            class="fa fa-shopping-cart"></i>{{trans('file.purchase')}}</a>
                            </li>
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
                            <li><a href="/finance_report"><img src="{{ asset('img/report_finance.png') }}"
                                                               width="13px"/>&nbsp;{{trans('file.financial_report')}}
                                    <span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level collapse">
                                    <li><a href="/finance_report_income"><i
                                                    class="fa fa-arrow-down"></i>&nbsp;&nbsp;{{trans('file.income')}}
                                        </a>
                                    </li>
                                    <li><a href="/finance_report_expenses"><i
                                                    class="fa fa-shopping-cart"></i>{{trans('file.expense')}}</a>
                                    </li>

                                    <li><a href="/finance_report_profit"><img src="{{ asset('img/profite.png') }}"
                                                                              width="15px"/>
                                            &nbsp;&nbsp;{{trans('file.profit')}}</a>
                                    </li>
                                    <li><a href="/finance_report_loan"><i class="fa fa-stack-overflow"></i>
                                            &nbsp;&nbsp;{{ trans('file.loans') }}</a>
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

                            <li><a href="/medicine"><i class="fa fa-pencil-square-o"></i>{{trans('file.add_medicine')}}
                                </a></li>
                            <li><a href="/medicine_category"><i class="fa fa-pencil-square-o"></i>{{trans('file.medicine_category')}}
                                </a></li>



                            <li><a href="/teeth-shade"><i
                                            class="fa fa-pencil-square-o"></i>{{trans('file.teethshade')}}</a>
                            </li>
                            <li><a href="/teeth-cover"><i
                                            class="fa fa-pencil-square-o"></i>{{trans('file.teethcover')}}</a>
                            </li>


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
                            <li><a href="/outdated_patient"><i
                                            class="fa fa-user"></i>{{trans('file.odp')}}</a>
                            </li>
                            <li><a href="" onclick="updateSoftware()"><i
                                            class="fa fa-refresh"></i>{{trans('file.update_software')}}</a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="setting"><i class="fa fa-trash"></i> <span
                                    class="nav-label">{{trans('file.rd')}}</span><span
                                    class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li>
                                <a href="/user-deleted"><i class="fa fa-user"></i> <span
                                            class="nav-label">{{trans('file.users')}}</span></a>
                            </li>
                            <li>
                                <a href="/patient-deleted"><i class="fa fa-user-secret"></i> <span
                                            class="nav-label">{{trans('file.patients')}}</span></a>
                            </li>
                            <li>
                                <a href="/doctor-deleted"><i class="fa fa-user-md"></i> <span
                                            class="nav-label">{{trans('file.doctors')}}</span></a>
                            </li>
                            <li>
                                <a href="/expense-deleted"><i class="fa fa-shopping-cart"></i> <span
                                            class="nav-label">{{trans('file.expenses')}}</span></a>
                            </li>
                        </ul>
                    </li>

                    {{--traders--}}
                    <li><a href=""><i class="fa fa-money"></i><span class="nav-lable">{{trans('file.salary')}}</span>
                            <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="/doctors"><i class="fa fa-user-md"></i>{{ trans('file.doctors') }}</a>
                            </li>
                            <li><a href="/employee"><i class="fa fa-users"></i>{{ trans('file.other_staff') }}</a>
                            </li>
                        </ul>
                    </li>

                    {{--end of traders--}}
                    <li>
                        <a href="/contact"><i class="fa fa-phone"></i> <span
                                    class="nav-label">{{trans('file.support')}}</span></a>
                    </li>
                    <li>
                        <a href="/about-us"><i class="fa fa-info"></i> <span
                                    class="nav-label">&nbsp;{{trans('file.about_us')}}</span></a>

                    </li>
                    <li>
                    <li><a href="/help"><i class="fa fa-question-circle"></i>{{trans('file.help')}}</a></li>

                @endif
            </ul>
            {{--end  of finance condition--}}
        </div>
    </nav>
</div>

{{--end condition--}}

<div class="modal" tabindex="-1" id="updatesoftware" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Software</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h4>Are you sure want to update software?</h4>
                <p>This update fix errors or update software.</p>
                <p>This update does not effect on your database data.</p>
            </div>
            <div class="modal-footer">
                <a href="" id="updatesoftwareroute" type="button" class="btn btn-danger">Yes update it</a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<script>
    function updateSoftware() {
        event.preventDefault();
        $('#updatesoftware').modal('show');
        $('#updatesoftwareroute').attr('href', '/update-system');
    }
</script>

