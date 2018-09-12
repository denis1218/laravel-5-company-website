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

    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Patient Info</h5>
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
                <div class="row" style="margin-left:-100px;">
                    <div class="row m-b-lg m-t-lg">
                        <div class="col-md-5">
                            <div class="profile-info">
                                <div class="">
                                    <div>
                                        <h2 class="no-margins font-b">
                                            Mostafa Ahmadi
                                        </h2>
                                        <h4>ID: P-0780504075</h4>
                                        <small style="font-size: 15px;">
                                            <span style="font-size: 15px; font-weight: bold;">Dental Defect : </span>Orthodontist,
                                            Periodontist <br/>
                                            <span class="text-warning" style="font-size: 15px; font-weight: bold;">Problem Health : </span>Blood
                                            Pressure , Allergy to Penicillin , Allergy to Anaesthetic
                                            <br/><span style="font-size: 15px; font-weight: bold;">Treatment : </span>Extraction
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
                                            <span class="" style="font-size: 17px;">Gender:<b>&nbsp;Male</b>&nbsp;<i
                                                        class="fa fa-male"></i></span>
                                    </td>
                                    <td>
                                            <span style="font-size: 17px;">Age:<b>&nbsp;25</b>&nbsp;<i
                                                        class=""></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span style="font-size: 17px;">Doctor:<b>&nbsp;Dr.Ahmadi</b>&nbsp;<i
                                                    class="fa fa-user-md"></i></span>
                                    </td>
                                    <td>
                                        <span style="font-size: 17px;">Visited:<b>&nbsp;First Time</b>&nbsp;<i
                                                    class=""></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span style="font-size: 17px;">Date Reg:<b>&nbsp;2018/5/26</b>&nbsp;<i
                                                    class="fa fa-calendar"></i></span>
                                    </td>
                                    <td>
                                              <span style="font-size: 17px;">First Visited Date :<b>&nbsp;2018/5/26</b>&nbsp;<i
                                                          class="fa fa-calendar"></i></span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                <div class="hr-line-solid"></div>
                <div class="row shadow p-3 mb-5 bg-white rounded"
                     style="background: #c4ff6b; padding-left:20px; border-radius: 50px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                    <h3 style="font-weight: bold">First Treatment</h3>
                </div>
                <div class="row " style="margin-top:15px;">
                    <div class="col-md-8">
                        <table class="table table-striped " style="font-weight: bold; ">
                            <tr>
                                <td>Dental Defect :</td>
                                <td>BDR</td>
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
                            <div><p><strong>Description:</strong> I love to use the famous saying of “Fake it till you
                                    make it.” That’s why I used to say ” I can do it, because I love to do it.” ” I
                                    deserve a better life and I am going to create it.” I am open minded person</p>
                            </div>
                        </div>
                        <div class="hr-line-solid"></div>
                    </div>

                </div>


                    <div class="row"
                         style="background: #c4ff6b; padding-left:20px; border-radius: 50px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <h3 style="font-weight: bold">Treatment Operation</h3>
                    </div>
                <div class="row" style="margin-top:30px;">
                    <div class="col-md-6" >
                        <div class="form-group">
                            <label>Select Dental Defect *</label>
                            <select class="form-control">
                                <option value="1">Select Dental Defect</option>
                                <option value="1">Crown Fracture</option>
                                <option value="1">BDR</option>
                                <option value="2">G-Caries</option>
                                <option value="3">Attrision</option>
                                <option value="4">Calculus</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Treatment *</label>
                            <select class="form-control">
                                <option value="1">Select Treatment</option>
                                <option value="1">PF (Permanent Filling)</option>
                                <option value="2">RCT (Root Canal)</option>
                                <option value="3">Extraction</option>
                                <option value="4">Pulpotomy</option>
                                <option value="5">Apexification</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nex">Treatment Cost:</label>
                            <input type="number" class="form-control" name="nex" value="2000">
                        </div>
                        <div class="form-group">
                            <label for="nex">Next Appointment ?</label>
                            <input type="date" class="form-control" name="nex">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" name="description" cols="30" rows="5"
                                      placeholder="Description" style="resize: none"></textarea>
                        </div>
                    </div>

                    <div class="col-lg-6" id="toot">
                        <label for="toot">Choose Tooth</label>
                        <div class="" style="">
                            <ul class="list-group checked-list-box">
                                <li class="list-group-item"><img src="img/teeths/1.png" width="25px"/></li>
                                <li class="list-group-item"><img src="img/teeths/2.png" width="25px"/></li>
                                <li class="list-group-item"><img src="img/teeths/3.png" width="25px"/></li>
                                <li class="list-group-item"><img src="img/teeths/4.png" width="25px"/></li>
                                <li class="list-group-item"><img src="img/teeths/5.png" width="25px"/></li>
                                <li class="list-group-item"><img src="img/teeths/6.png" width="25px"/></li>
                                <li class="list-group-item"><img src="img/teeths/7.png" width="25px"/></li>
                                <li class="list-group-item"><img src="img/teeths/8.png" width="25px"/></li>
                            </ul>
                        </div>
                        <div class="" style="">
                            <ul class="list-group checked-list-box">
                                <li class="list-group-item"><img src="img/teeths/9.png" width="25px"/></li>
                                <li class="list-group-item"><img src="img/teeths/10.png" width="25px"/></li>
                                <li class="list-group-item"><img src="img/teeths/11.png" width="25px"/></li>
                                <li class="list-group-item"><img src="img/teeths/12.png" width="25px"/></li>
                                <li class="list-group-item"><img src="img/teeths/13.png" width="25px"/></li>
                                <li class="list-group-item"><img src="img/teeths/14.png" width="25px"/></li>
                                <li class="list-group-item"><img src="img/teeths/15.png" width="25px"/></li>
                                <li class="list-group-item"><img src="img/teeths/16.png" width="25px"/></li>
                            </ul>
                        </div>
                        <div class="" style="">
                            <ul class="list-group checked-list-box">
                                <li class="list-group-item"><img src="img/teeths/17.png" width="25px"/></li>
                                <li class="list-group-item"><img src="img/teeths/18.png" width="25px"/></li>
                                <li class="list-group-item"><img src="img/teeths/19.png" width="25px"/></li>
                                <li class="list-group-item"><img src="img/teeths/20.png" width="25px"/></li>
                                <li class="list-group-item"><img src="img/teeths/21.png" width="25px"/></li>
                                <li class="list-group-item"><img src="img/teeths/22.png" width="25px"/></li>
                                <li class="list-group-item"><img src="img/teeths/23.png" width="25px"/></li>
                                <li class="list-group-item"><img src="img/teeths/24.png" width="25px"/></li>
                            </ul>
                        </div>
                        <div class="" style="">
                            <ul class="list-group checked-list-box">
                                <li class="list-group-item"><img src="img/teeths/25.png" width="25px"/></li>
                                <li class="list-group-item"><img src="img/teeths/26.png" width="25px"/></li>
                                <li class="list-group-item"><img src="img/teeths/27.png" width="25px"/></li>
                                <li class="list-group-item"><img src="img/teeths/28.png" width="25px"/></li>
                                <li class="list-group-item"><img src="img/teeths/29.png" width="25px"/></li>
                                <li class="list-group-item"><img src="img/teeths/30.png" width="25px"/></li>
                                <li class="list-group-item"><img src="img/teeths/31.png" width="25px"/></li>
                                <li class="list-group-item"><img src="img/teeths/32.png" width="25px"/></li>
                            </ul>
                        </div>


                    </div>
                </div>

                <div class="row">
                    <div class="col-md-5">
                        <button class="btn btn-primary"> Send To Finance&nbsp;<i class="fa fa-save"></i>
                        </button>
                        <button class="btn btn-primary"> Send To X-Ray&nbsp;<i class="fa fa-send"></i>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection

@section('script')
    <script>
        $(function () {
            $('.list-group.checked-list-box .list-group-item').each(function () {
                // Settings
                var $widget = $(this),
                    $checkbox = $('<input type="checkbox" class="hidden" />'),
                    color = ($widget.data('color') ? $widget.data('color') : "primary"),
                    style = ($widget.data('style') == "button" ? "btn-" : "list-group-item-"),
                    settings = {
                        on: {
                            icon: ''
                        },
                        off: {
                            icon: ''
                        }
                    };
                $widget.css('cursor', 'pointer')
                $widget.append($checkbox);
                // Event Handlers
                $widget.on('click', function () {
                    $checkbox.prop('checked', !$checkbox.is(':checked'));
                    $checkbox.triggerHandler('change');
                    updateDisplay();
                });
                $checkbox.on('change', function () {
                    updateDisplay();
                });

                // Actions
                function updateDisplay() {
                    var isChecked = $checkbox.is(':checked');
                    // Set the button's state
                    $widget.data('state', (isChecked) ? "on" : "off");
                    // Set the button's icon
                    $widget.find('.state-icon')
                        .removeClass()
                        .addClass('state-icon ' + settings[$widget.data('state')].icon);
                    // Update the button's color
                    if (isChecked) {
                        $widget.addClass(style + color + ' active');
                    } else {
                        $widget.removeClass(style + color + ' active');
                    }
                }

                // Initialization
                function init() {
                    if ($widget.data('checked') == true) {
                        $checkbox.prop('checked', !$checkbox.is(':checked'));
                    }
                    updateDisplay();
                    // Inject the icon if applicable
                    if ($widget.find('.state-icon').length == 0) {
                        $widget.prepend('<span class="state-icon ' + settings[$widget.data('state')].icon + '"></span>');
                    }
                }

                init();
            });
            $('#get-checked-data').on('click', function (event) {
                event.preventDefault();
                var checkedItems = {}, counter = 0;
                $("#check-list-box li.active").each(function (idx, li) {
                    checkedItems[counter] = $(li).text();
                    counter++;
                });
                $('#display-json').html(JSON.stringify(checkedItems, null, '\t'));
            });
        });
    </script>
    @endsection