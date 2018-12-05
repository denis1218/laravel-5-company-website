<div class="row wrapper border-bottom white-bg page-heading "
     style="margin-top:-20px; margin-bottom: 10px; margin-left:1px;">
    <h3 style="margin-left:43px;margin-top:10px;">{{trans('file.inb')}}</h3>
    <div class="col-md-2 ">
        <h2><a class="btn btn-primary hvr-float-shadow " style="height:70px;width:155px; margin-left:25px;"
               href="/income"><img src="{{ asset('img/patient_income.png') }}" width="55px"/> <br/>{{trans('file.from_patient')}}</a>
        </h2>
    </div>
    <div class="col-md-2 ">
        <h2><a class="btn btn-primary hvr-float-shadow" style="height:70px; width:155px; margin-left:15px;"
               href="/xrey_income"><img src="{{ asset('img/xray_income.png') }}" width="55px"/> <br/>{{trans('file.xray_income')}}</a></h2>
    </div>
    <div class="col-md-2 ">
        <h2><a class="btn btn-primary hvr-float-shadow" style="height:70px; width:155px; margin-left:15px;"
               href="/other-income"><img src="{{ asset('img/other_income.png') }}" width="33px"/> <br/>{{trans('file.other_income')}}</a></h2>
    </div>
    <div class="col-sm-4" style="float:right;margin-top: 10px;">
        <div class="widget style1 navy-bg">
            <div class="row">
                <div class="col-xs-12">
                    <h3>{{trans('file.total')}}</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8 text-left">
                    <h3 class="font-bold"><span> {{trans('file.amount')}}:&nbsp;&nbsp; </span>{{$Gtotal}} {{trans('file.afg')}}</h3>
                </div>
                <div class="col-sm-4 pull-right" style="margin-top:-20px;">
                    <img src="img/totalIncome.png" width="50px"/>
                </div>
            </div>
        </div>
    </div>
</div>