@extends('master')

@section('style')
    <link href="{{asset('dashboard/css/plugins/sweetalert/sweetalert.css')}}" rel="stylesheet">
    <style rel="stylesheet">
    </style>
@endsection

@section('content')
    {{-- table of patient's x-ray --}}
    <div class="col-lg-12" >
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>{{trans('file.u_guide')}}</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <div class="row">
                <div class="col-lg-12">
                    <div class="tabs-container">
                        <ul class="nav nav-tabs">
                            {{--Main NavTabs--}}
                            <li class="active"><a data-toggle="tab" href="#home"><i class="fa fa-home" style="font-size: 35px;"></i><br>{{trans('file.home')}}</a></li>
                            <li><a data-toggle="tab" href="#department"><i class="fa fa-building" style="font-size: 35px;margin-left: 20px"></i><br>{{trans('file.department')}}</a></li>
                            <li><a data-toggle="tab" href="#reception"><i class="fa fa-user" style="font-size: 35px;margin-left: 15px"></i><br>{{trans('file.reception')}}</a></li>
                            <li><a data-toggle="tab" href="#finance"><i class="fa fa-money" style="font-size: 35px;margin-left: 5px"></i><br>{{trans('file.finance')}}</a></li>
                            <li><a data-toggle="tab" href="#setting"><i class="fa fa-cog" style="font-size: 35px;margin-left: 7px"></i><br>{{trans('file.setting')}}</a></li>
                            <li><a data-toggle="tab" href="#contact"><i class="fa fa-phone" style="font-size: 35px;margin-left: 7px"></i><br>{{trans('file.support')}}</a></li>
                            <li><a data-toggle="tab" href="#about"><i class="fa fa-info" style="font-size: 35px;margin-left: 20px"></i><br>{{trans('file.about_us')}}</a></li>
                            {{--End of Mian NavTabs--}}
                        </ul>
                        <div class="tab-content">
                            {{--Home Tab--}}
                            <div id="home" class="tab-pane active">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-sm-10">
                                            <h1>{{trans('file.home_info')}}:</h1>
                                            <div class="row">
                                                <div class="col-sm-12"><p>{{trans('file.hi1')}}</p></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <p>{{trans('file.hi2')}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <p>{{trans('file.hi3')}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <p>{{trans('file.hi4')}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <p>{{trans('file.hi5')}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <p>{{trans('file.hi6')}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-2" title="{{trans('file.ctsi')}}">
                                            <button type="button" id="dash" onclick="fullSize()" onblur="backToSmall()" style="width: 140px;height:60px;border: none">
                                                <img src="{{asset('img/dash.JPG')}}" style="height: auto;width: 100%;">
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--End of HomeTab--}}
                            {{--Department Tab--}}
                            <div id="department" class="tab-pane">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-sm-12 text-center"><h2>{{trans('file.dept_info')}}</h2><hr></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="tabs-container">
                                                <ul class="nav nav-tabs">
                                                    <li class="active"><a data-toggle="tab" href="#doctor"><img src="{{asset('img/doctors.PNG')}}" style="width:50px;height: 50px;margin-left: -5px"><br>{{trans('file.doctor')}}</a></li>
                                                    <li><a data-toggle="tab" href="#xray"><img src="{{asset('img/x-ray.PNG')}}" style="width:50px;height: 50px;margin-left: -5px"><br>{{trans('file.xray')}}</a></li>
                                                </ul>
                                                <div class="tab-content">
                                                        {{--Doctor Department--}}
                                                        <div id="doctor" class="tab-pane active">
                                                            <div class="panel-body">
                                                                <div class="row">
                                                                    <h1 style="margin-left: 10px;">{{trans('file.d_page_info')}}:</h1>
                                                                        <div class="col-sm-12"><p>{{trans('file.dpi_text')}}</p>
                                                                            <ul>
                                                                                <li>{{trans('file.patient_list')}}</li>
                                                                                <li>{{trans('file.next_appointment_list')}}</li>
                                                                                <li>{{trans('file.patient_report')}}</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-sm-10">
                                                                            <div class="row" style="margin-top: 50px;">
                                                                            <div class="col-sm-12">
                                                                                <h3>1-{{trans('file.patient_list')}}:</h3>{{trans('file.pl_text')}}
                                                                            </div>
                                                                            </div>
                                                                            <div class="row" style="margin-top: 50px;">
                                                                            <div class="col-sm-12">
                                                                                <h3>2- {{trans('file.next_appointment_list')}}:</h3>{{trans('file.napl_text')}}
                                                                            </div>
                                                                            </div>
                                                                            <div class="row" style="margin-top: 50px;">
                                                                            <div class="col-sm-12">
                                                                                <h3>3- {{trans('file.patient_report')}}:</h3>{{trans('file.pr_text')}}
                                                                            </div>
                                                                            </div>
                                                                            <div class="row" style="margin-top: 50px;">
                                                                                <h2 style="margin-left: 12px;z-index:-1;">{{trans('file.dop_info')}}</h2>
                                                                            <div class="col-sm-12">
                                                                                <h3>{{trans('file.past_history')}}:</h3> {{trans('file.prh_text')}}
                                                                            </div>
                                                                            </div>
                                                                            <div class="row" style="margin-top: 50px;">
                                                                            <div class="col-sm-12">
                                                                                    <h3>{{trans('file.present_history')}}:</h3>{{trans('file.psh_text')}}
                                                                            </div>
                                                                                <p style="margin-left: 15px;"><strong>{{trans('file.pnotet')}}:</strong> {{trans('file.pnote')}}</p>

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-2">
                                                                            <div class="row" style="margin-top: 80px;" title="{{trans('file.ctsi')}}">
                                                                                <div class="col-sm-12">
                                                                                    <button type="button" id="dpl" onclick="dPl()" onblur="DpL()" style="width: 145px;height:50px;border: none">
                                                                                        <img src="{{asset('img/dpl.JPG')}}" style="height: auto;width: 100%;">
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row" style="margin-top: 80px;" title="{{trans('file.ctsi')}}">
                                                                                <div class="col-sm-12">
                                                                                    <button type="button" id="dnal" onclick="Dnal()" onblur="dNal()" style="width: 145px;height:50px;border: none">
                                                                                        <img src="{{asset('img/dnal.JPG')}}" style="height: auto;width: 100%;">
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row" style="margin-top: 60px;" title="{{trans('file.ctsi')}}">
                                                                                <div class="col-sm-12">
                                                                                    <button type="button" id="dpr" onclick="Dpr()" onblur="dPr()" style="width: 145px;height:50px;border: none">
                                                                                        <img src="{{asset('img/dpr.JPG')}}" style="height: 108%;width: 100%;">
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row" style="margin-top: 90px;" title="{{trans('file.ctsi')}}">
                                                                                <div class="col-sm-12">
                                                                                    <button type="button" id="pasth" onclick="Pasth()" onblur="pasTh()"  style="width: 145px;height:50px;border: none">
                                                                                        <img src="{{asset('img/pasth.JPG')}}" style="height: 108%;width: 100%;">
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row" style="margin-top: 90px;" title="{{trans('file.ctsi')}}">
                                                                                <div class="col-sm-12">
                                                                                    <button type="button" id="phistory" onclick="pHistory()" onblur="PHistory()" style="width: 145px;height:50px;border: none">
                                                                                        <img src="{{asset('img/phistory.JPG')}}" style="height: 108%;width: 100%;">
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        {{--End of Doctor Department--}}
                                                        {{--X-ray Department--}}
                                                        <div id="xray" class="tab-pane">
                                                            <div class="panel-body">
                                                                <div class="row">
                                                                    <h1 style="margin-left: 10px;">{{trans('file.xp_info')}}:</h1>
                                                                    <div class="col-sm-12"><p>{{trans('file.xpi_text')}}</p>
                                                                        <ul>
                                                                            <li>{{trans('file.new_patient')}}</li>
                                                                            <li>{{trans('file.already_done')}}</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-sm-10">
                                                                        <div class="row" style="margin-top: 50px;">
                                                                            <div class="col-sm-12">
                                                                                <h3>1-{{trans('file.new_patient')}}:</h3>{{trans('file.xnp_text')}}
                                                                            </div>
                                                                        </div>
                                                                        <div class="row" style="margin-top: 50px;">
                                                                            <div class="col-sm-12">
                                                                                <h4>{{trans('file.xsbdh')}}:</h4>{{trans('file.xpp_text')}}
                                                                            </div>
                                                                        </div>
                                                                        <div class="row" style="margin-top: 50px;">
                                                                            <div class="col-sm-12">
                                                                                <h3>2-{{trans('file.already_done')}}:</h3>{{trans('file.xdp_text')}}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-2">
                                                                        <div class="row" style="margin-top: 80px;" title="{{trans('file.ctsi')}}">
                                                                            <div class="col-sm-12">
                                                                                <button type="button" id="nxray" onclick="Nxray()" onblur="nXray()" style="width: 145px;height:50px;border: none">
                                                                                    <img src="{{asset('img/xray.JPG')}}" style="height: 108%;width: 100%;">
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row" style="margin-top: 80px;" title="{{trans('file.ctsi')}}">
                                                                            <div class="col-sm-12">
                                                                                <button type="button" id="xstatus" onclick="Xstatus()" onblur="xStatus()" style="width: 145px;height:50px;border: none">
                                                                                    <img src="{{asset('img/xstatus.JPG')}}" style="height: 108%;width: 100%;">
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row" style="margin-top: 60px;" title="{{trans('file.ctsi')}}">
                                                                            <div class="col-sm-12">
                                                                                <button type="button" id="donx" onclick="Donx()" onblur="donX()" style="width: 145px;height:50px;border: none">
                                                                                    <img src="{{asset('img/donx.JPG')}}" style="height: 108%;width: 100%;">
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        {{--End of X-ray Department --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--End of Department Tab--}}
                            {{--Reception Tab--}}
                            <div id="reception" class="tab-pane">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-sm-12 text-center"><h2>{{trans('file.reception_info')}}</h2><hr></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="tabs-container">
                                                <ul class="nav nav-tabs">
                                                    <li class="active"><a data-toggle="tab" href="#dregister"><img src="{{asset('img/doctors.PNG')}}" style="width:40px;height: 40px;margin-left: 10px"><br><span style="margin-left: 15px;">{{trans('file.doctor')}}</span> <br> {{trans('file.register')}}</a></li>
                                                    <li><a data-toggle="tab" href="#pregister"><img src="{{asset('img/patient.PNG')}}" style="width:40px;height: 40px;margin-left: 11px"><br><span style="margin-left: 15px;">{{trans('file.patient')}}</span> <br>{{trans('file.register')}}</a></li>
                                                    <li><a data-toggle="tab" href="#plist"><img src="{{asset('img/patient_list.PNG')}}" style="width:60px;height: 50px;margin-left: -6px"><br>{{trans('file.patient')}}<br><span style="margin-left: 10px;">{{trans('file.list')}}</span></a></li>
                                                    <li><a data-toggle="tab" href="#preport"><img src="{{asset('img/patient_report.PNG')}}" style="width:60px;height: 50px;margin-left: -5px"><br><span style="margin-left: 10px;">{{trans('file.patient')}}</span><br><span style="margin-left: 10px;">{{trans('file.report')}}</span></a></li>
                                                    <li><a data-toggle="tab" href="#presc"><img src="{{asset('img/prescription.PNG')}}" style="width:50px;height: 50px;margin-left: -5px"><br><span style="margin-left: -18px;">{{trans('file.prescription')}}</span></a></li>
                                                </ul>
                                                <div class="tab-content">
                                                    {{--Doctor Registration--}}
                                                    <div id="dregister" class="tab-pane active">
                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <h1 style="margin-left: 10px;">{{trans('file.drp_info')}}</h1>
                                                                <div class="col-sm-12">
                                                                    <p>{{trans('file.drpi_text')}}</p>
                                                                </div>
                                                                <div class="col-sm-10">
                                                                    <div class="row" style="margin-top: 50px;">
                                                                        <div class="col-sm-12">
                                                                            <h3>{{trans('file.doctor_registration')}}:</h3> {{trans('file.dr_text')}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="row" style="margin-top: 80px;" title="{{trans('file.ctsi')}}">
                                                                        <div class="col-sm-12">
                                                                            <button type="button" id="dreg" onclick="Dregister()" onblur="dRegister()" style="width: 145px;height:50px;border: none">
                                                                                <img src="{{asset('img/drf.JPG')}}" style="height: 108%;width: 100%;">
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{--End of Doctor Registration--}}
                                                    {{--Patient Registration--}}
                                                    <div id="pregister" class="tab-pane">
                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <h1 style="margin-left: 10px;">{{trans('file.prp_info')}}</h1>
                                                                <div class="col-sm-12"><p>{{trans('file.prpi_text')}}</p>
                                                                    <ul>
                                                                        <li>{{trans('file.doctor_info')}}</li>
                                                                        <li>{{trans('file.ppersonal_info')}}</li>
                                                                        <li>{{trans('file.ph_problem')}}</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-sm-10">
                                                                    <div class="row" style="margin-top: 50px;">
                                                                        <div class="col-sm-12">
                                                                            <h3>1-{{trans('file.doctor_info')}}:</h3> {{trans('file.di_text')}}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row" style="margin-top: 50px;">
                                                                        <div class="col-sm-12">
                                                                            <h3>2-{{trans('file.ppersonal_info')}}:</h3> {{trans('file.ppi_text')}}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row" style="margin-top: 50px;">
                                                                        <div class="col-sm-12">
                                                                            <h3>3-{{trans('file.ph_problem')}}:</h3> {{trans('file.ph_text')}}<br>
                                                                            <ul>
                                                                                <li>{{trans('file.ph_text1')}}</li>
                                                                                <li>{{trans('file.ph_text2')}}</li>
                                                                                <li>{{trans('file.ph_text3')}}</li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="row" style="margin-top: 80px;" title="{{trans('file.ctsi')}}">
                                                                        <div class="col-sm-12">
                                                                            <button type="button" id="preg1" onclick="Pregister1()" onblur="pRegister1()" style="width: 145px;height:50px;border: none">
                                                                                <img src="{{asset('img/prf1.JPG')}}" style="height: 108%;width: 100%;">
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row" style="margin-top: 80px;" title="{{trans('file.ctsi')}}">
                                                                        <div class="col-sm-12">
                                                                            <button type="button" id="preg2" onclick="Pregister2()" onblur="pRegister2()" style="width: 145px;height:50px;border: none">
                                                                                <img src="{{asset('img/prf2.JPG')}}" style="height: 108%;width: 100%;">
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row" style="margin-top: 80px;" title="{{trans('file.ctsi')}}">
                                                                        <div class="col-sm-12">
                                                                            <button type="button" id="preg3" onclick="Pregister3()" onblur="pRegister3()" style="width: 145px;height:50px;border: none">
                                                                                <img src="{{asset('img/prf3.JPG')}}" style="height: 108%;width: 100%;">
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{--End of Patient Registration --}}
                                                    {{--Patient List--}}
                                                    <div id="plist" class="tab-pane">
                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <h1 style="margin-left: 10px;">{{trans('file.plp_info')}}:</h1>
                                                                <div class="col-sm-12"><p>{{trans('file.plpi_text')}}</p>
                                                                </div>
                                                                <div class="col-sm-10">
                                                                    <div class="row" style="margin-top: 50px;">
                                                                        <div class="col-sm-12">
                                                                            <h3>{{trans('file.list_of_patient')}}:</h3>{{trans('file.lop_text')}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="row" style="margin-top: 80px;" title="{{trans('file.ctsi')}}">
                                                                        <div class="col-sm-12">
                                                                            <button type="button" id="pl" onclick="Plist()" onblur="pList()" style="width: 145px;height:50px;border: none">
                                                                                <img src="{{asset('img/plist.JPG')}}" style="height: 108%;width: 100%;">
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{--End of Patient List --}}
                                                    {{--Patient Report--}}
                                                    <div id="preport" class="tab-pane">
                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <h1 style="margin-left: 10px;">{{trans('file.prepp_info')}}:</h1>
                                                                <div class="col-sm-12"><p>{{trans('file.preppi_text')}}</p>
                                                                </div>
                                                                <div class="col-sm-10">
                                                                    <div class="row" style="margin-top: 50px;">
                                                                        <div class="col-sm-12">
                                                                            <h3>{{trans('file.patient_report')}}:</h3> {{trans('file.prep')}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="row" style="margin-top: 80px;" title="{{trans('file.ctsi')}}">
                                                                        <div class="col-sm-12">
                                                                            <button type="button" id="pr" onclick="Preport()" onblur="pReport()" style="width: 145px;height:50px;border: none">
                                                                                <img src="{{asset('img/preport.JPG')}}" style="height: 108%;width: 100%;">
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{--End of Patient Report --}}
                                                    {{--Prescription--}}
                                                    <div id="presc" class="tab-pane">
                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <h1 style="margin-left: 10px;">{{trans('file.prsc_info')}}:</h1>
                                                                <div class="col-sm-12"><p>{{trans('file.prsci_text')}}</p>
                                                                </div>
                                                                <div class="col-sm-10">
                                                                    <div class="row" style="margin-top: 50px;">
                                                                        <div class="col-sm-12">
                                                                            <h3>{{trans('file.prescription')}}:</h3> {{trans('file.prsc_text')}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="row" style="margin-top: 80px;" title="{{trans('file.ctsi')}}">
                                                                        <div class="col-sm-12">
                                                                            <button type="button" id="pres" onclick="Prescription()" onblur="pRescription()" style="width: 145px;height:50px;border: none">
                                                                                <img src="{{asset('img/prescription.JPG')}}" style="height: 108%;width: 100%;">
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{--End of Prescription --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--End of Reception Tab--}}
                            {{--Finance Tab--}}
                            <div id="finance" class="tab-pane">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-sm-12 text-center"><h2>{{trans('file.finance_info')}}</h2><hr></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="tabs-container">
                                                <ul class="nav nav-tabs">
                                                    <li class="active"><a data-toggle="tab" href="#expenditure"><img src="{{asset('img/expense_icon.PNG')}}" style="width:60px;height: 60px;margin-left: 20px"><br><span style="margin-left: 15px;">{{trans('file.expenditure')}}</span></a></li>
                                                    <li><a data-toggle="tab" href="#income"><img src="{{asset('img/income_icon.PNG')}}" style="width:60px;height: 60px;margin-left: 11px"><br><span style="margin-left: 20px;">{{trans('file.income')}}</span></a></li>
                                                    <li><a data-toggle="tab" href="#doctorha"><img src="{{asset('img/doctors.PNG')}}" style="width:60px;height: 60px;margin-left: -6px"><br>{{trans('file.doctors')}}<br></a></li>
                                                    <li><a data-toggle="tab" href="#freport"><img src="{{asset('img/report_finance.PNG')}}" style="width:60px;height: 60px;margin-left: 20px"><br>{{trans('file.financial_report')}}<br></a></li>
                                                </ul>
                                                <div class="tab-content">
                                                    {{--Expenditure--}}
                                                    <div id="expenditure" class="tab-pane active">
                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <h1 style="margin-left: 10px;">{{trans('file.exp_info')}}</h1>
                                                                <div class="col-sm-12">
                                                                    <p>{{trans('file.expi_text')}}</p>
                                                                </div>
                                                                <div class="col-sm-10">
                                                                    <div class="row" style="margin-top: 50px;">
                                                                        <div class="col-sm-12">
                                                                            <h3>{{trans('file.expenditure')}}:</h3> {{trans('file.exp_text')}}<br><br>
                                                                            <strong>{{trans('file.pnotet')}}:</strong>{{trans('file.exp_note')}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="row" style="margin-top: 80px;" title="Click here on image to enlarge it">
                                                                        <div class="col-sm-12">
                                                                            <button type="button" id="exp" onclick="Exp()" onblur="eXp()" style="width: 145px;height:50px;border: none">
                                                                                <img src="{{asset('img/expenditure.JPG')}}" style="height: 108%;width: 100%;">
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{--End of Expenditure--}}
                                                    {{--Income--}}
                                                    <div id="income" class="tab-pane">
                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <h1 style="margin-left: 10px;">{{trans('file.incp_info')}}</h1>
                                                                <div class="col-sm-12"><p>{{trans('file.incpi_text')}}<br></p>
                                                                    <ul>
                                                                        <li>{{trans('file.patient_income')}}</li>
                                                                        <li>{{trans('file.xray_income')}}</li>
                                                                        <li>{{trans('file.other_income')}}</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-sm-10">
                                                                    <div class="row" style="margin-top: 50px;">
                                                                        <div class="col-sm-12">
                                                                            <h3>1-{{trans('file.patient_income')}}:</h3> {{trans('file.pincome_text')}}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row" style="margin-top: 50px;">
                                                                        <div class="col-sm-12">
                                                                            <h3>2-{{trans('file.xray_income')}}:</h3> {{trans('file.xincome_text')}}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row" style="margin-top: 50px;">
                                                                        <div class="col-sm-12">
                                                                            <h3>3-{{trans('file.other_income')}}:</h3> {{trans('file.oincome_text')}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="row" style="margin-top: 80px;" title="{{trans('file.ctsi')}}">
                                                                        <div class="col-sm-12">
                                                                            <button type="button" id="pin" onclick="Pin()" onblur="pIn()" style="width: 145px;height:50px;border: none">
                                                                                <img src="{{asset('img/pincome.JPG')}}" style="height: 108%;width: 100%;">
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row" style="margin-top: 120px;" title="{{trans('file.ctsi')}}">
                                                                        <div class="col-sm-12">
                                                                            <button type="button" id="xin" onclick="Xin()" onblur="xIn()" style="width: 145px;height:50px;border: none">
                                                                                <img src="{{asset('img/xincome.JPG')}}" style="height: 108%;width: 100%;">
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row" style="margin-top: 120px;" title="{{trans('file.ctsi')}}">
                                                                        <div class="col-sm-12">
                                                                            <button type="button" id="oin" onclick="Oin()" onblur="oIn()" style="width: 145px;height:50px;border: none">
                                                                                <img src="{{asset('img/oincome.JPG')}}" style="height: 108%;width: 100%;">
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{--End of Income --}}
                                                    {{--Doctor--}}
                                                    <div id="doctorha" class="tab-pane">
                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <h1 style="margin-left: 10px;">{{trans('file.docp_info')}}:</h1>
                                                                <div class="col-sm-12"><p>{{trans('file.docpi_text')}}<br></p>
                                                                </div>
                                                                <div class="col-sm-10">
                                                                    <div class="row" style="margin-top: 50px;">
                                                                        <div class="col-sm-12">
                                                                            <h3>{{trans('file.doctor_list')}}:</h3>{{trans('file.docl_text')}}<br>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row" style="margin-top: 50px;">
                                                                        <div class="col-sm-12">
                                                                            <h3>{{trans('file.spp')}}:</h3>{{trans('file.spp_text')}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="row" style="margin-top: 80px;" title="{{trans('file.ctsi')}}">
                                                                        <div class="col-sm-12">
                                                                            <button type="button" id="dsp" onclick="Dsp()" onblur="dSp()" style="width: 145px;height:50px;border: none">
                                                                                <img src="{{asset('img/dlist.JPG')}}" style="height: 108%;width: 100%;">
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row" style="margin-top: 100px;" title="{{trans('file.ctsi')}}">
                                                                        <div class="col-sm-12">
                                                                            <button type="button" id="spp" onclick="Spp()" onblur="sPp()" style="width: 145px;height:50px;border: none">
                                                                                <img src="{{asset('img/scomput.JPG')}}" style="height: 108%;width: 100%;">
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{--End of Doctor --}}
                                                    {{--Financial Report--}}
                                                    <div id="freport" class="tab-pane">
                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <h1 style="margin-left: 10px;">{{trans('file.frp_info')}}:</h1>
                                                                <div class="col-sm-12"><p>{{trans('file.frpi_text')}}<br></p>
                                                                    <ul>
                                                                        <li>{{trans('file.ifr')}}</li>
                                                                        <li>{{trans('file.efr')}}</li>
                                                                        <li>{{trans('file.pfr')}}</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-sm-10">
                                                                    <div class="row" style="margin-top: 50px;">
                                                                        <div class="col-sm-12">
                                                                            <h3>{{trans('file.ifr')}}:</h3>{{trans('file.ifr_text')}}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row" style="margin-top: 50px;">
                                                                        <div class="col-sm-12">
                                                                            <h3>{{trans('file.efr')}}:</h3>{{trans('file.efr_text')}}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row" style="margin-top: 50px;">
                                                                        <div class="col-sm-12">
                                                                            <h3>{{trans('file.pfr')}}:</h3>{{trans('file.pfr_text')}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="row" style="margin-top: 80px;" title="{{trans('file.ctsi')}}">
                                                                        <div class="col-sm-12">
                                                                            <button type="button" id="ifrep" onclick="Ifrep()" onblur="iFrep()" style="width: 145px;height:50px;border: none">
                                                                                <img src="{{asset('img/ifreport.JPG')}}" style="height: 108%;width: 100%;">
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row" style="margin-top: 80px;" title="{{trans('file.ctsi')}}">
                                                                        <div class="col-sm-12">
                                                                            <button type="button" id="xfrep" onclick="Xfrep()" onblur="xFrep()" style="width: 145px;height:50px;border: none">
                                                                                <img src="{{asset('img/xfreport.JPG')}}" style="height: 108%;width: 100%;">
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row" style="margin-top: 50px;" title="{{trans('file.ctsi')}}">
                                                                        <div class="col-sm-12">
                                                                            <button type="button" id="pirep" onclick="Pirep()" onblur="pIrep()" style="width: 145px;height:50px;border: none">
                                                                                <img src="{{asset('img/pireport.JPG')}}" style="height: 108%;width: 100%;">
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{--End of Financial Report --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--End of finance Tab--}}
                            {{--Setting Tab--}}
                            <div id="setting" class="tab-pane">
                                <div class="panel-body">
                                    <h3>{{trans('file.set_info')}}</h3>
                                    <P>{{trans('file.seti_text')}}<br><br>
                                    <b><strong>{{trans('file.pnotet')}}</strong></b>:{{trans('file.set_note')}}
                                    </P>
                                </div>
                            </div>
                            {{--End of setting Tab--}}
                            {{--Contact Tab--}}
                            <div id="contact" class="tab-pane">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-sm-10">
                                            <h1>{{trans('file.supp_info')}}:</h1>
                                            <div class="row">
                                                <div class="col-sm-12"><p>{{trans('file.suppi_text')}}</p></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-2" title="{{trans('file.ctsi')}}">
                                            <button type="button" id="co" onclick="Contact()" onblur="cOntact()" style="width: 145px;height:50px;border: none">
                                                <img src="{{asset('img/cont.JPG')}}" style="height: 108%;width: 100%;">
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--End of Contact Tab--}}
                            {{--About Tab--}}
                            <div id="about" class="tab-pane">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-sm-10">
                                            <h1>{{trans('file.about_info')}}:</h1>
                                            <div class="row">
                                                <div class="col-sm-12"><p>{{trans('file.abouti_text')}}</p></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-2" title="{{trans('file.ctsi')}}">
                                            <button type="button" id="abou" onclick="Abou()" onblur="aBou()" style="width: 145px;height:50px;border: none">
                                                <img src="{{asset('img/about.JPG')}}" style="height: 108%;width: 100%;">
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--End of About Tab--}}
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')

    {{--DashBoard--}}
    <script>
        function fullSize() {
            document.getElementById('dash').style.transform="translate(-435px,70px) scale(7.5,8.4)";
        }
        function backToSmall() {
            document.getElementById('dash').style.transform="translate(0px,0px) scale(1,1)";
        }
    </script>
    {{--End of DashBoard--}}
    {{--Doctor Department--}}
    <script>
        function dPl() {
            document.getElementById('dpl').style.position="relative";
            document.getElementById('dpl').style.zIndex="1";
            document.getElementById('dpl').style.transform="translate(-415px,70px) scale(7.1,8.4)";
        }
        function DpL() {
            document.getElementById('dpl').style.zIndex="0";
            document.getElementById('dpl').style.transform="translate(0px,0px) scale(1,1)";
        }
    </script>
    <script>
        function Dnal() {
            document.getElementById('dnal').style.position="relative";
            document.getElementById('dnal').style.zIndex="1";
            document.getElementById('dnal').style.transform="translate(-415px,70px) scale(7.1,8.4)";
        }
        function dNal() {
            document.getElementById('dnal').style.zIndex="0";
            document.getElementById('dnal').style.transform="translate(0px,0px) scale(1,1)";
        }
    </script>
    <script>
        function Dpr() {
            document.getElementById('dpr').style.position="relative";
            document.getElementById('dpr').style.zIndex="1";
            document.getElementById('dpr').style.transform="translate(-415px,70px) scale(7.1,8.4)";
        }
        function dPr() {
            document.getElementById('dpr').style.zIndex="0";
            document.getElementById('dpr').style.transform="translate(0px,0px) scale(1,1)";
        }
    </script>
    <script>
        function Pasth() {
            document.getElementById('pasth').style.position="relative";
            document.getElementById('pasth').style.zIndex="1";
            document.getElementById('pasth').style.transform="translate(-415px) scale(7.1,8.4)";
        }
        function pasTh() {
            document.getElementById('pasth').style.zIndex="0";
            document.getElementById('pasth').style.transform="translate(0px,0px) scale(1,1)";
        }
    </script>
    <script>
        function pHistory() {
            document.getElementById('phistory').style.position="relative";
            document.getElementById('phistory').style.zIndex="1";
            document.getElementById('phistory').style.transform="translate(-415px,-100px) scale(7.1,8.4)";
        }
        function PHistory() {
            document.getElementById('phistory').style.zIndex="0";
            document.getElementById('phistory').style.transform="translate(0px,0px) scale(1,1)";
        }
    </script>
    {{--End of Doctor Department--}}
    {{--X-ray Department--}}
    <script>
        function Nxray() {
            document.getElementById('nxray').style.position="relative";
            document.getElementById('nxray').style.zIndex="1";
            document.getElementById('nxray').style.transform="translate(-415px,30px) scale(7.1,8.4)";
        }
        function nXray() {
            document.getElementById('nxray').style.zIndex="0";
            document.getElementById('nxray').style.transform="translate(0px,0px) scale(1,1)";
        }
    </script>
    <script>
        function Xstatus() {
            document.getElementById('xstatus').style.position="relative";
            document.getElementById('xstatus').style.zIndex="1";
            document.getElementById('xstatus').style.transform="translate(-415px,-100px) scale(7.1,8.4)";
        }
        function xStatus() {
            document.getElementById('xstatus').style.zIndex="0";
            document.getElementById('xstatus').style.transform="translate(0px,0px) scale(1,1)";
        }
    </script>
    <script>
        function Donx() {
            document.getElementById('donx').style.position="relative";
            document.getElementById('donx').style.zIndex="1";
            document.getElementById('donx').style.transform="translate(-415px,-100px) scale(7.1,8.4)";
        }
        function donX() {
            document.getElementById('donx').style.zIndex="0";
            document.getElementById('donx').style.transform="translate(0px,0px) scale(1,1)";
        }
    </script>
    {{--End of X-ray Department--}}
    {{--Reception--}}
    <script>
        function Dregister() {
            document.getElementById('dreg').style.position="relative";
            document.getElementById('dreg').style.zIndex="1";
            document.getElementById('dreg').style.transform="translate(-415px,-100px) scale(7.1,8.4)";
        }
        function dRegister() {
            document.getElementById('dreg').style.zIndex="0";
            document.getElementById('dreg').style.transform="translate(0px,0px) scale(1,1)";
        }
    </script>
    <script>
        function Pregister1() {
            document.getElementById('preg1').style.position="relative";
            document.getElementById('preg1').style.zIndex="1";
            document.getElementById('preg1').style.transform="translate(-415px,50px) scale(7.1,8.4)";
        }
        function pRegister1() {
            document.getElementById('preg1').style.zIndex="0";
            document.getElementById('preg1').style.transform="translate(0px,0px) scale(1,1)";
        }
    </script>
    <script>
        function Pregister2() {
            document.getElementById('preg2').style.position="relative";
            document.getElementById('preg2').style.zIndex="1";
            document.getElementById('preg2').style.transform="translate(-415px,10px) scale(7.1,8.4)";
        }
        function pRegister2() {
            document.getElementById('preg2').style.zIndex="0";
            document.getElementById('preg2').style.transform="translate(0px,0px) scale(1,1)";
        }
    </script>
    <script>
        function Pregister3() {
            document.getElementById('preg3').style.position="relative";
            document.getElementById('preg3').style.zIndex="1";
            document.getElementById('preg3').style.transform="translate(-415px,-130px) scale(7.1,8.4)";
        }
        function pRegister3() {
            document.getElementById('preg3').style.zIndex="0";
            document.getElementById('preg3').style.transform="translate(0px,0px) scale(1,1)";
        }
    </script>
    <script>
        function Plist() {
            document.getElementById('pl').style.position="relative";
            document.getElementById('pl').style.zIndex="1";
            document.getElementById('pl').style.transform="translate(-415px,-130px) scale(7.1,8.4)";
        }
        function pList() {
            document.getElementById('pl').style.zIndex="0";
            document.getElementById('pl').style.transform="translate(0px,0px) scale(1,1)";
        }
    </script>
    <script>
        function Preport() {
            document.getElementById('pr').style.position="relative";
            document.getElementById('pr').style.zIndex="1";
            document.getElementById('pr').style.transform="translate(-415px,-130px) scale(7.1,8.4)";
        }
        function pReport() {
            document.getElementById('pr').style.zIndex="0";
            document.getElementById('pr').style.transform="translate(0px,0px) scale(1,1)";
        }
    </script>
    <script>
        function Prescription() {
            document.getElementById('pres').style.position="relative";
            document.getElementById('pres').style.zIndex="1";
            document.getElementById('pres').style.transform="translate(-415px,-130px) scale(7.1,8.4)";
        }
        function pRescription() {
            document.getElementById('pres').style.zIndex="0";
            document.getElementById('pres').style.transform="translate(0px,0px) scale(1,1)";
        }
    </script>
    {{--End of Reception--}}
    {{--Finance--}}
    <script>
        function Exp() {
            document.getElementById('exp').style.position="relative";
            document.getElementById('exp').style.zIndex="1";
            document.getElementById('exp').style.transform="translate(-415px,-130px) scale(7.1,8.4)";
        }
        function eXp() {
            document.getElementById('exp').style.zIndex="0";
            document.getElementById('exp').style.transform="translate(0px,0px) scale(1,1)";
        }
    </script>
    <script>
        function Pin() {
            document.getElementById('pin').style.position="relative";
            document.getElementById('pin').style.zIndex="1";
            document.getElementById('pin').style.transform="translate(-415px,20px) scale(7.1,8.4)";
        }
        function pIn() {
            document.getElementById('pin').style.zIndex="0";
            document.getElementById('pin').style.transform="translate(0px,0px) scale(1,1)";
        }
    </script>
    <script>
        function Xin() {
            document.getElementById('xin').style.position="relative";
            document.getElementById('xin').style.zIndex="1";
            document.getElementById('xin').style.transform="translate(-415px,-130px) scale(7.1,8.4)";
        }
        function xIn() {
            document.getElementById('xin').style.zIndex="0";
            document.getElementById('xin').style.transform="translate(0px,0px) scale(1,1)";
        }
    </script>
    <script>
        function Oin() {
            document.getElementById('oin').style.position="relative";
            document.getElementById('oin').style.zIndex="1";
            document.getElementById('oin').style.transform="translate(-415px,-130px) scale(7.1,8.4)";
        }
        function oIn() {
            document.getElementById('oin').style.zIndex="0";
            document.getElementById('oin').style.transform="translate(0px,0px) scale(1,1)";
        }
    </script>
    <script>
        function Dsp() {
            document.getElementById('dsp').style.position="relative";
            document.getElementById('dsp').style.zIndex="1";
            document.getElementById('dsp').style.transform="translate(-415px,30px) scale(7.1,8.4)";
        }
        function dSp() {
            document.getElementById('dsp').style.zIndex="0";
            document.getElementById('dsp').style.transform="translate(0px,0px) scale(1,1)";
        }
    </script>
    <script>
        function Spp() {
            document.getElementById('spp').style.position="relative";
            document.getElementById('spp').style.zIndex="1";
            document.getElementById('spp').style.transform="translate(-415px,-130px) scale(7,9.9)";
        }
        function sPp() {
            document.getElementById('spp').style.zIndex="0";
            document.getElementById('spp').style.transform="translate(0px,0px) scale(1,1)";
        }
    </script>
    <script>
        function Ifrep() {
            document.getElementById('ifrep').style.position="relative";
            document.getElementById('ifrep').style.zIndex="1";
            document.getElementById('ifrep').style.transform="translate(-415px,30px) scale(7,9.9)";
        }
        function iFrep() {
            document.getElementById('ifrep').style.zIndex="0";
            document.getElementById('ifrep').style.transform="translate(0px,0px) scale(1,1)";
        }
    </script>
    <script>
        function Xfrep() {
            document.getElementById('xfrep').style.position="relative";
            document.getElementById('xfrep').style.zIndex="1";
            document.getElementById('xfrep').style.transform="translate(-415px,-70px) scale(7,9.9)";
        }
        function xFrep() {
            document.getElementById('xfrep').style.zIndex="0";
            document.getElementById('xfrep').style.transform="translate(0px,0px) scale(1,1)";
        }
    </script>
    <script>
        function Pirep() {
            document.getElementById('pirep').style.position="relative";
            document.getElementById('pirep').style.zIndex="1";
            document.getElementById('pirep').style.transform="translate(-415px,-170px) scale(7,9.9)";
        }
        function pIrep() {
            document.getElementById('pirep').style.zIndex="0";
            document.getElementById('pirep').style.transform="translate(0px,0px) scale(1,1)";
        }
    </script>
    {{--End of Finance--}}
    {{--contact--}}
    <script>
        function Contact() {
            document.getElementById('co').style.position="relative";
            document.getElementById('co').style.zIndex="1";
            document.getElementById('co').style.transform="translate(-440px,70px) scale(7,9.9)";
        }
        function cOntact() {
            document.getElementById('co').style.zIndex="0";
            document.getElementById('co').style.transform="translate(0px,0px) scale(1,1)";
        }
    </script>
    <script>
        function Abou() {
            document.getElementById('abou').style.position="relative";
            document.getElementById('abou').style.zIndex="1";
            document.getElementById('abou').style.transform="translate(-440px,70px) scale(7,9.9)";
        }
        function aBou() {
            document.getElementById('abou').style.zIndex="0";
            document.getElementById('abou').style.transform="translate(0px,0px) scale(1,1)";
        }
    </script>


@stop
