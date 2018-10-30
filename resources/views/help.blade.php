@extends('master')

@section('style')
    <link href="dashboard/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
    <style rel="stylesheet">
        #dash:hover{
            transform: translate(-435px,25px) scale(7.5,7.8);
        }
        #dpl:hover{
            z-index: 1;
            transform: translate(-435px,25px) scale(7.5,7.8);
        }

        #img_all_tooth {
            border-radius: 20px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            border: 20px;
        }

        #my_file {
            display: none;
        }

        .btn-xray {
            height: 57px;
        }

        .bg-khatar {
            background: #ff0004;
        }

        .font-m {
            font-size: 1.2em;
        }

        .font-b {
            font-size: 1.5em;
        }

        ul.list-group:after {
            clear: both;
            display: block;
            content: "";
        }

        .list-group-item {
            float: left;

        }

        .vl {
            border-left: 6px solid green;
            height: 500px;
        }

        /* CSS REQUIRED */
        .state-icon {
            left: -5px;
        }

        .list-group-item-primary {
            color: rgb(255, 255, 255);
            background-color: rgb(88, 198, 202);
        }

        /* DEMO ONLY - REMOVES UNWANTED MARGIN */
        .well .list-group {
            margin-bottom: 0px;
        }
    </style>
@endsection



@section('content')
    {{-- table of patient's x-ray --}}
    <div class="col-lg-12" >
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Using Guide</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-wrench"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#">Config option 1</a>
                        </li>
                        <li><a href="#">Config option 2</a>
                        </li>
                    </ul>
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <div class="row">
                <div class="col-lg-12">
                    <div class="tabs-container">
                        <ul class="nav nav-tabs">
                            {{--Main NavTabs--}}
                            <li class="active"><a data-toggle="tab" href="#home"><i class="fa fa-home" style="font-size: 35px;"></i><br>Home</a></li>
                            <li><a data-toggle="tab" href="#department"><i class="fa fa-building" style="font-size: 35px;margin-left: 20px"></i><br>Department</a></li>
                            <li><a data-toggle="tab" href="#reception"><i class="fa fa-user" style="font-size: 35px;margin-left: 15px"></i><br>Reception</a></li>
                            <li><a data-toggle="tab" href="#finance"><i class="fa fa-money" style="font-size: 35px;margin-left: 5px"></i><br>Finance</a></li>
                            <li><a data-toggle="tab" href="#setting"><i class="fa fa-cog" style="font-size: 35px;margin-left: 7px"></i><br>Setting</a></li>
                            <li><a data-toggle="tab" href="#contact"><i class="fa fa-phone" style="font-size: 35px;margin-left: 7px"></i><br>Contact</a></li>
                            {{--End of Mian NavTabs--}}
                        </ul>
                        <div class="tab-content">
                            {{--Home Tab--}}
                            <div id="home" class="tab-pane active">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-sm-10">
                                            <h1>Home Page Information:</h1>
                                                    <div class="row">
                                                        <div class="col-sm-12"><p>1-This dashboard is visible to admin of the application and only admin can access it.</p></div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <p>2-In the left side of page there is a menu which list all different part of the application like departments,reception,finance,setting etc.</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <p>3-In the top navigation bar there are name of the clinic that is using this app , date,option for choosing language either English or Dari adn logout button.</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <p>4-Bellow the top navigation bar white boxes show the current user name,number of patients,doctors and those who have appointment for today</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <p>5-In the middle of the page there are buttons for rapid access to different part of the application.</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <p>6-The form is embedded for quick entery of daily expenses.</p>
                                                        </div>
                                                    </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div id="dash"  style="width: 145px;height:50px;">
                                                <img src="{{asset('img/dash.JPG')}}" style="height: auto;width: 100%;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--End of HomeTab--}}
                            {{--Department Tab--}}
                            <div id="department" class="tab-pane">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-sm-12 text-center"><h2>Department Information</h2><hr></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="tabs-container">
                                                <ul class="nav nav-tabs">
                                                    <li class="active"><a data-toggle="tab" href="#doctor"><img src="{{asset('img/doctors.PNG')}}" style="width:50px;height: 50px;margin-left: -5px"><br>Doctor</a></li>
                                                    <li><a data-toggle="tab" href="#xray"><img src="{{asset('img/x-ray.PNG')}}" style="width:50px;height: 50px;margin-left: -5px"><br>X-Ray</a></li>
                                                </ul>
                                                    <div class="tab-content">
                                                    {{--Doctor Department--}}
                                                    <div id="doctor" class="tab-pane active">
                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <h1 style="margin-left: -15px;">Doctor Page Information:</h1>
                                                                    <div class="row">
                                                                        <div class="col-sm-12"><p>From Department in sidebar by clicking on <b>Doctor</b> doctor page will appear.<br>
                                                                            This page will take you to three different other pages namely .</p>
                                                                            <ul>
                                                                                <li>Patient List</li>
                                                                                <li>Next Appointment Lis</li>
                                                                                <li>Patient Report</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-sm-10">
                                                                                <h3>1-Patient List:</h3>In this page all the patients who are having appointment for the current day will be listed.<br>
                                                                                By clicking on <b>Start Treatment</b> button at the last column doctor can start his/her work with the patient, the information about that page will come later.
                                                                            </div>
                                                                            <div class="col-sm-2">
                                                                                <div id="dpl"  style="width: 145px;height:50px;">
                                                                                    <img src="{{asset('img/dpl.JPG')}}" style="height: auto;width: 100%;">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-sm-10">
                                                                                <h3>2- Next Appointment List:</h3>In this page all the patient who are having appointment for the upcoming days will be listed.<br>
                                                                                You can also find the patient by searching his/her name or date of appointment.
                                                                            </div>
                                                                            <div class="col-sm-2">
                                                                                <div id="dnal"  style="width: 145px;height:50px;">
                                                                                    <img src="{{asset('img/dnal.JPG')}}" style="height: auto;width: 100%;">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-sm-10">
                                                                                <h3>3- Patient Report:</h3> In this page doctor can have report about his/her patient.
                                                                                <br> The report is printable and can be printed.
                                                                            </div>
                                                                            <div class="col-sm-2">
                                                                                <div id="dpr"  style="width: 145px;height:50px;">
                                                                                    <img src="{{asset('img/dpr.JPG')}}" style="height: auto;width: 100%;">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <h2 style="margin-left: 12px;z-index:-1;">Doctor Operation Page Information</h2>
                                                                            <div class="col-sm-10">
                                                                                <h3>Past History:</h3> If the current patient has already been treated by this doctor his/her previous history will be liste out here.<br>
                                                                                If the problem is with same tooth the treatment can be continued ,otherwise another treatment can take place.
                                                                            </div>
                                                                            <div class="col-sm-2">
                                                                                <div id="pasth"  style="width: 145px;height:50px;">
                                                                                    <img src="{{asset('img/pasth.JPG')}}" style="height: auto;width: 100%;">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <h2 style="margin-left: 12px;z-index:-1;">Doctor Operation Page Information</h2>
                                                                            <div class="col-sm-10">
                                                                                <h3>Present History:</h3>In this page doctor can record the new details of patient and send it to finance for making payment. <br>
                                                                                If Patient needed to x-ray his/her tooth doctor can send his/her tooth details to the x-ray department.
                                                                            </div>
                                                                            <p >Note: In the prescription part doctor can give prescription to his/her patient</p>

                                                                            <div class="col-sm-2">
                                                                                <div id="phistory"  style="width: 145px;height:50px;">
                                                                                    <img src="{{asset('img/phistory.JPG')}}" style="height: auto;width: 100%;">
                                                                                </div>
                                                                            </div>
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
                                                            <strong>This is department tab</strong>
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
                                    <strong>This is reception tab</strong>
                                </div>
                            </div>
                            {{--End of Reception Tab--}}
                            {{--Finance Tab--}}
                            <div id="finance" class="tab-pane">
                                <div class="panel-body">
                                    <strong>This is finance tab</strong>
                                </div>
                            </div>
                            {{--End of finance Tab--}}
                            {{--Setting Tab--}}
                            <div id="setting" class="tab-pane">
                                <div class="panel-body">
                                    <strong>This is setting tab</strong>
                                </div>
                            </div>
                            {{--End of setting Tab--}}
                            {{--Contact Tab--}}
                            <div id="contact" class="tab-pane">
                                <div class="panel-body">
                                    <strong>This is contact tab</strong>
                                </div>
                            </div>
                            {{--End of Contact Tab--}}
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')



    <script>
        function dPl() {
            document.getElementById('dpl').style.cssText="transform:translate(-435px,70px);transform:scale(7.5,8.4);z-index:2;";
//            document.getElementById('dpl').style.transform="translate(-435px,70px) scale(7.5,8.4)";
        }
        function dpL() {
            document.getElementById('dpl').style.transform="translate(0px,0px) scale(1,1)";
        }
    </script>

    <script>
        function fullSize() {
            document.getElementById('dash').style.transform="translate(-435px,70px) scale(7.5,8.4)";
            document.getElementById('dash').style.zIndex="999";
        }
        function backToSmall() {
            document.getElementById('dash').style.transform="translate(0px,0px) scale(1,1)";
        }
    </script>

    <script>
        function fullSize() {
            document.getElementById('dash').style.transform="translate(-435px,70px) scale(7.5,8.4)";
            document.getElementById('dash').style.zIndex="999";
        }
        function backToSmall() {
            document.getElementById('dash').style.transform="translate(0px,0px) scale(1,1)";
        }
    </script>

    <script>
        function fullSize() {
            document.getElementById('dash').style.transform="translate(-435px,70px) scale(7.5,8.4)";
            document.getElementById('dash').style.zIndex="999";
        }
        function backToSmall() {
            document.getElementById('dash').style.transform="translate(0px,0px) scale(1,1)";
        }
    </script>

    <script>
        function fullSize() {
            document.getElementById('dash').style.transform="translate(-435px,70px) scale(7.5,8.4)";
            document.getElementById('dash').style.zIndex="999";
        }
        function backToSmall() {
            document.getElementById('dash').style.transform="translate(0px,0px) scale(1,1)";
        }
    </script>
@stop
