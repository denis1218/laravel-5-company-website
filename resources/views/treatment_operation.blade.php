@extends('master')
@section('style')


    <style rel="stylesheet">
        .font-m {
            font-size: 1.5em;
        }

        .font-b {
            font-size: 1.7em;
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

    @include('part.nav_doctor')

    <br/>

    {{--personal information patient--}}
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Patient Information</h5>
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
                    <div class="alert alert-danger alert-dismissable col-md-12">
                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                        Patient have AIDS problem health <a class="alert-link" href="#"></a>.
                    </div>
                </div>
                <div class="row" style="margin-left:-100px;">

                    <div class="row m-b-lg m-t-lg">

                        <div class="col-md-5">
                            <div class="profile-info">
                                <div class="">
                                    <div>
                                        <h2 class="no-margins font-b">
                                            {{ $patient_in_treatment->name }}
                                        </h2>
                                        <h4>ID: {{ $patient_in_treatment->id_patient }}</h4>
                                        <small style="font-size: 15px;">
                                            <span class="text-warning" style="font-size: 15px; font-weight: bold;">Problem Health : </span>Blood
                                            {{ $patient_in_treatment->problem_health }}
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <table class="table small m-b-xs">
                                <tbody>
                                <tr>
                                    <td>
                                            <span class=""
                                                  style="font-size: 17px;">Gender:<b>&nbsp;{{ $patient_in_treatment->gender }}</b>&nbsp;<i
                                                        class="fa fa-male"></i></span>
                                    </td>
                                    <td>
                                            <span style="font-size: 17px;">Age:<b>&nbsp;{{ $patient_in_treatment->age }}</b>&nbsp;<i
                                                        class=""></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span style="font-size: 17px;">Doctor:<b>&nbsp;{{ $patient_in_treatment->doctor->first_name }}</b>&nbsp;<i
                                                    class="fa fa-user-md"></i></span>
                                    </td>
                                    <td>
                                        <span style="font-size: 17px;">Visited:<b>&nbsp;{{ $patient_in_treatment->status }}</b>&nbsp;<i
                                                    class=""></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span style="font-size: 17px;">Date Reg:<b>&nbsp;{{ $patient_in_treatment->created_at }}</b>&nbsp;<i
                                                    class="fa fa-calendar"></i></span>
                                    </td>
                                    <td>
                                              <span style="font-size: 17px;">First Visited Date :<b>&nbsp;{{ $patient_in_treatment->created_at }}</b>&nbsp;<i
                                                          class="fa fa-calendar"></i></span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- tabs of patient treatment --}}
    <div class="row" style="margin-right: 0px;margin-left:0PX;">
        <div class="col-lg-12">
            <div class="tabs-container">
                <ul class="nav nav-tabs" id="demoTabs">
                    <li class="active"><a data-toggle="tab" href="#tab-1">Past History</a></li>
                    <li class=""><a data-toggle="tab" href="#tab-2">Present History</a></li>
                </ul>

                <div class="tab-content">
                    {{-- panel tab 1 past history --}}
                    <div id="tab-1" class="tab-pane active">
                        <div class="panel-body">
                            <br>
                            {{--                            @foreach($patient_in_treatment as $patient_treatments)--}}
                            {{-- start for each here --}}
                            <div class="row shadow p-3 mb-5 rounded bg-info"
                                 table-exchange
                                 style=" padding-left:20px; border-radius: 5px;margin-left:10px;margin-right: 10px;">
                                <h3 style="font-weight: bold">dfdfd</h3>
                            </div>
                            <br>
                            <div class="row " style="margin-top:15px;margin-right:10px;margin-left:10px;">
                                <div class="col-md-8">
                                    {{--                                        @if($patient_treatments->treatments->visits == 0)--}}
                                    <table class="table table-striped " style="font-weight: bold; ">
                                        <tr>
                                            <td>Dental Defect :</td>
                                            <td>fsdfsd</td>
                                            <td>Fee paid:</td>
                                            <td>2500 Afg</td>
                                        </tr>
                                        <tr>
                                            <td>Treatment :</td>
                                            <td>RCT</td>
                                            <td>Remaining Fee :</td>
                                            <td>2000 Afg</td>
                                        </tr>
                                        <tr>
                                            <td>Tooth Number :</td>
                                            <td>25</td>
                                            <td>Date First Visite :</td>
                                            <td>2018/5/3</td>
                                        </tr>
                                    </table>
                                    <div>
                                        <div><p><strong>Description:</strong> I love to use the famous saying of “Fake
                                                it till you
                                                make it.” That’s why I used to say ” I can do it, because I love to do
                                                it.” ” I
                                                deserve a better life and I am going to create it.” I am open minded
                                                person</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <br>
                            <div class="row p-3 mb-5 bg-info"
                                 style=" padding-left:20px; border-radius: 5px;margin-left:10px;margin-right: 10px;">
                                <h3 style="font-weight: bold">asdfasdf</h3>
                            </div>
                            <br/>
                            <div class="row " style="margin-top:15px;margin-left:10px;margin-right:10px;">
                                <div class="col-md-8">
                                    <table class="table table-striped " style="font-weight: bold; ">
                                        <tr>
                                            <td>Dental Defect :</td>
                                            <td>Fracture of the tooth</td>
                                            <td>Fee paid:</td>
                                            <td>2500 Afg</td>
                                        </tr>
                                        <tr>
                                            <td>Treatment :</td>
                                            <td>Toothpaste</td>
                                            <td>Remaining Fee :</td>
                                            <td>2000 Afg</td>
                                        </tr>

                                        <tr>
                                            <td>Tooth Number :</td>
                                            <td>25</td>
                                            <td>Date First Visite :</td>
                                            <td>2018/5/3</td>
                                        </tr>
                                    </table>
                                    <div>
                                        <div><p><strong>Description:</strong> I love to use the famous saying of “Fake
                                                it till you
                                                make it.” That’s why I used to say ” I can do it, because I love to do
                                                it.” ” I
                                                deserve a better life and I am going to create it.” I am open minded
                                                person</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- panel tab 1 past history --}}

                    {{-- panel tab 3 new history --}}
                    <div id="tab-2" class="tab-pane">
                        <div class="panel-body">
                            <br>
                            {{-- Header of title --}}
                            <div class="row  bg-info"
                                 style=" padding-left:20px; border-radius: 5px;margin-left:10px;margin-right: 10px;">
                                <h3 style="font-weight: bold">Present History</h3>
                            </div>

                            <br>
                            <form action="/operation" method="POST">

                                <input hidden type="hidden"/>
                                <input hidden type="hidden" name="FK_id_patient" value="{{ $patient_id }}"/>
                                <input hidden type="hidden" name="visits" value="{{ $checkValue  }}"/>

                                <div class="row" style="margin-top:30px;">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Tooth Number :</label>
                                            <input type="number" class="form-control" required name="teeth_number"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Select Dental Defect :</label>
                                            <select class="form-control" name="FK_id_dentalDefect">
                                                <option disabled selected>Select Dental Defect</option>
                                                @foreach($dentalDefectList as $list)
                                                    <option value="{{ $list->id }}">{{ $list->dental_defect }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Treatment :</label>
                                            <select class="form-control" onchange="getFeeTreatment(this)">
                                                <option disabled selected>Select Treatment</option>
                                                @foreach($treatementList as $listTreatement)
                                                    <option value="{{ $listTreatement->estimated_fee }}"
                                                            id="{{ $listTreatement->id }}"> {{ $listTreatement->treatment }} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <input type="hidden" class="form-control" name="id_treatment" id="id_treatment">
                                        <div class="form-group">
                                            <label for="nex">Treatment Cost :</label>
                                            <input type="number" class="form-control" id="cost_treatment">
                                        </div>
                                        <div class="form-group">
                                            <label for="nex">Discount :</label>
                                            <input type="number" class="form-control" name="discount">
                                        </div>
                                        <div class="form-group">
                                            <label for="nex">Next Appointment :</label>
                                            <input type="date" class="form-control" name="next_appointment">
                                        </div>
                                        <div class="form-group">
                                            <div class="i-checks" for="nex">Set Meridiem :<label>&nbsp;&nbsp;
                                                    <input type="radio" value="morning" name="meridiem"> <i></i> Morning </label>
                                                &nbsp;&nbsp;&nbsp; <input type="radio" value="afternoon" name="meridiem">
                                                <i></i> Afternoon
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="nex">Description :</label>
                                            <textarea rows="5" type="text" class="form-control" name="description"
                                                      id="description"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="{{ asset('img/tooths.jpg') }}" width="100%"/>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-5">
                                        <button type="submit" class="btn btn-primary"> Send To Finance&nbsp;<i
                                                    class="fa fa-save"></i>
                                        </button>
                                        <button class="btn btn-primary"> Send To X-Ray&nbsp;<i class="fa fa-send"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>


                </div>


            </div>
        </div>
    </div>
    </div>

@endsection

@section('script')
    <script src="{{ asset('js/tooths.js') }}" type="javascript"></script>
    <script>
        function getFeeTreatment(e) {
//           alert(e[e.selectedIndex].id);
            document.getElementById('cost_treatment').value = e[e.selectedIndex].value
            document.getElementById('id_treatment').value = e[e.selectedIndex].id
//            alert('const = '+e.target.id);
        }
    </script>
@endsection