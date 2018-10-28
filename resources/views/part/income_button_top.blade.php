<div class="row wrapper border-bottom white-bg page-heading"
     style="margin-top:-20px; margin-bottom: 10px; margin-left:1px;">
    <h3 style="margin-left:43px;margin-top:10px;">Income Button Navigate</h3>
    <div class="col-md-2 ">
        <h2><a class="btn btn-primary hvr-float-shadow" style="height:70px;width:155px; margin-left:25px;"
               href="/income"><i class="fa fa-money" style="color:#ffc000; font-size: 30px;"></i> <br/>{{trans('file.from_patient')}}</a>
        </h2>
    </div>
    <div class="col-md-2 ">
        <h2><a class="btn btn-primary hvr-float-shadow" style="height:70px; width:155px; margin-left:15px;"
               href="/xrey_income"><i class="fa fa-xing" style="color:#ffc000; font-size: 30px;"></i> <br/>{{trans('file.xray_income')}}</a></h2>
    </div>
    <div class="col-md-2 ">
        <h2><a class="btn btn-primary hvr-float-shadow" style="height:70px; width:155px; margin-left:15px;"
               href="/other-income"><i class="fa fa-user" style="color:#ffc000; font-size: 30px;"></i> <br/>
                {{trans('file.other_income')}}</a></h2>
    </div>
    <div class="col-sm-4" style="float:right;margin-top: 10px;">
        <div class="widget style1 navy-bg">
            <div class="row">
                <div class="col-xs-12">
                    <h2>{{trans('file.total')}}</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 text-left">
                    <h2 class="font-bold"><span> {{trans('file.amount')}}:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>{{$Gtotal}}</h2>
                </div>
            </div>
        </div>
    </div>
</div>