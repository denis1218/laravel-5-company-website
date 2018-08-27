@extends('master')

@section('style')

    <link href="dashboard/css/plugins/sweetalert/sweetalert.css" rel="stylesheet"/>
    <style rel="stylesheet">


        #iframetag > button {
            opacity: 1;
            position:relative;
            float: right;
            right:10px;
            bottom:35px;
            transition: 0.5s;
        }

        <!-- style of pdf file -->
        @CHARSET "UTF-8";
        .page-break {
            page-break-after: always;
            page-break-inside: avoid;
            clear:both;
        }
        .page-break-before {
            page-break-before: always;
            page-break-inside: avoid;
            clear:both;
        }

        #html-2-pdfwrapper {
            left: 20px;
            top: 50px;
            bottom: 0;
        }
        <!-- end of style of PDF file -->

        .font-m{
            font-size: 1.5em;
        }

        .font-b{
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

    <div class="row wrapper border-bottom white-bg page-heading" style="margin-top:-20px; margin-bottom: 10px;">
        <div class="col-md-2">
            <h2><a class="btn btn-primary" style="height:70px; margin-left:15px;" href="/doctor_operations"><i class="fa fa-stethoscope"  style="font-size: 30px; color:#ff9f00 ;"></i><br/> Treatment Operation</a></h2>
        </div>
        <div class="col-md-2">
            <h2><a class="btn btn-primary" style="height:70px; width:155px" href="/medicine"><img src="img/medicine.png"/> <br/> medicine</a></h2>
        </div>
        <div class="col-md-2">
            <h2><a class="btn btn-primary" style="height:70px; width:155px" href="/next_appointment"><i class="fa fa-calendar" style="font-size: 30px; color:#ff9f00 ;"></i> <br/> Next Appointment</a></h2>
        </div>
    </div>

    {{-- details of patient  --}}
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Custom responsive table </h5>
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
                    <div class="row m-b-lg m-t-lg">
                        <div class="col-md-6">
                            <div class="profile-image">
                                <img src="img/a4.jpg" class="img-circle circle-border m-b-md" alt="profile">
                            </div>

                            <div class="profile-info">
                                <div class="">
                                    <div>
                                        <h2 class="no-margins font-b">
                                            ID: P-0780504075
                                        </h2>
                                        <h4>Mostafa Ahmadi</h4>
                                        <small class="font-m">
                                            There are many variations of passages of Lorem Ipsum available, but the majority
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <table class="table small m-b-xs">
                                <tbody>
                                <tr>
                                    <td>
                                        <span class="font-m">Gender:<b>&nbsp;Male</b>&nbsp;<i class="fa fa-male"></span>
                                    </td>
                                    <td>
                                        <span class="font-m">Age:<b>&nbsp;25</b>&nbsp;<i class=""></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="font-m">Doctor:<b>&nbsp;Dr.Ahmadi</b>&nbsp;<i class="fa fa-user-md"></i></span>
                                    </td>
                                    <td>
                                        <span class="font-m">Visited:<b>&nbsp;First Time</b>&nbsp;<i class=""></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="font-m">Date Reg:<b>&nbsp;2018/5/26</b>&nbsp;<i class="fa fa-calendar"></i></span>
                                    </td>
                                    <td>

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
    {{-- end of details of patient --}}


    {{-- form  of data entrirse of medicin--}}
    <div class="col-lg-6">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Treatment Operation (Mostafa Ahamdi) </h5>
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
                    <div class="col-md-12">
                        <br/>

                        <form role="form" method="get" class="form-horizontal">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Drug Name :</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" placeholder="Drug name">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Drugs per day :</label>
                                <div class="col-sm-8">
                                    <label class="radio-inline"><input type="radio" name="each_day" checked>1</label>
                                    <label class="radio-inline"><input type="radio" name="each_day">2</label>
                                    <label class="radio-inline"><input type="radio" name="each_day">3</label>
                                    <label class="radio-inline"><input type="radio" name="each_day">4</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Each packet tablet :</label>
                                <div class="col-sm-8">
                                    <label class="radio-inline"><input type="radio" name="packet" checked>10</label>
                                    <label class="radio-inline"><input type="radio" name="packet">20</label>
                                    <label class="radio-inline"><input type="radio" name="packet">30</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">For Days :</label>
                                <div class="col-sm-8">
                                    <input type="number" placeholder="For Days" class="form-control"/>
                                </div>
                            </div>

                            {{--<div class="hr-line-dashed"></div>--}}

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Descriptions</label>
                                <div class="col-sm-8">
                                    <textarea class="form-control" placeholder="Write Description about Drug" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"></label>
                                <div class="col-sm-8">
                                    <input type="submit" value="Save" class="btn btn-primary">
                                   <input type="reset" value="Reset" class="btn btn-white"/>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>
    {{-- end of data entiris--}}

    {{-- table of show medicine lists --}}
    <div class="col-lg-6">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Bill of Medicines (Mostafa Ahamdi) </h5>
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
                    <div class="col-md-12">
                        ` <div class="ibox float-e-margins">
                            <div class="ibox-content">
                                    <table class="table table-hover no-margins table-striped">
                                        <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Name Drug</th>
                                            <th>Each day</th>
                                            <th>Total Days</th>
                                            <th>Update</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Ampicilne</td>
                                            <td>1+1+1</td>
                                            <td>2 days</td>
                                            <td>
                                                <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#editMedicine">Edit &nbsp;<i class="fa fa-edit"></i></button>
                                                <button class="btn btn-danger btn-xs demo3">Delete &nbsp;<i class="fa fa-remove"></i></button>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Ampicinile</td>
                                            <td>1+1+1</td>
                                            <td>2 days</td>
                                            <td>
                                                <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#editMedicine">Edit &nbsp;<i class="fa fa-edit"></i></button>
                                                <button class="btn btn-danger btn-xs demo3">Delete &nbsp;<i class="fa fa-remove"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Ampicinile</td>
                                            <td>1+1+1</td>
                                            <td>2 days</td>
                                            <td>
                                                <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#editMedicine">Edit &nbsp;<i class="fa fa-edit"></i></button>
                                                <button class="btn btn-danger btn-xs demo3">Delete &nbsp;<i class="fa fa-remove"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Ampicinile</td>
                                            <td>1+1+1</td>
                                            <td>2 days</td>
                                            <td>
                                                <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#editMedicine">Edit &nbsp;<i class="fa fa-edit"></i></button>
                                                <button class="btn btn-danger btn-xs demo3">Delete &nbsp;<i class="fa fa-remove"></i></button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <button onclick="generate()" class="btn btn-primary" data-toggle="modal" data-target="#myModal4">Generate PDF &nbsp;<i class="fa fa-file-pdf-o"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- table of generate PDF --}}
    <div id="html-2-pdfwrapper">
        <table class="table table-hover no-margins table-striped" style="visibility: hidden;">
            <thead>
            <tr>
                <th>id</th>
                <th>Name Drug</th>
                <th>Each day</th>
                <th>Total Days</th>

            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>Ampicinile</td>
                <td>1+1+1</td>
                <td>2 days</td>

            </tr>
            <tr>
                <td>1</td>
                <td>Ampicinile</td>
                <td>1+1+1</td>
                <td>2 days</td>

            </tr>
            <tr>
                <td>1</td>
                <td>Ampicinile</td>
                <td>1+1+1</td>
                <td>2 days</td>

            </tr>
            <tr>
                <td>1</td>
                <td>Ampicinile</td>
                <td>1+1+1</td>
                <td>2 days</td>

            </tr>
            </tbody>
        </table>
    </div>

    {{-- modal window example --}}
    <div class="modal inmodal" id="myModal4" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-lg" style="position: absolute; width: 100%;">
            <div class="modal-content animated fadeIn">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    {{--<i class="fa fa-image modal-icon text-primary"></i>--}}
                    <h4 class="modal-title">Bill Medicine of patient</h4>
                    {{--<small>X-Ray Tooth No: 25 UP</small>--}}
                </div>
                <div class="modal-body text-center">
                    <div id="iframetag" style="height: 450px;">
                        <iframe  id="PDFiFrame"></iframe>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close<i class="fa fa-remove"></i></button>
                </div>
            </div>
        </div>
    </div>

    {{-- modal for edit record medicine --}}
    <div class="modal inmodal" id="editMedicine" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content animated fadeIn">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <i class="modal-icon text-primary"><img src="img/medicine.png" width="10%"/></i>
                    <h4 class="modal-title">Edit Bill of Medicine</h4>
                </div>
                <div class="modal-body text-center">
                    <div id="iframetag" >
                        <form role="form" method="get" class="form-horizontal">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Drug Name :</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" placeholder="Drug name" value="Ampicinline">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Drugs per day :</label>
                                <div class="col-sm-8">
                                    <label class="radio-inline"><input type="radio" name="each_day" checked>1</label>
                                    <label class="radio-inline"><input type="radio" name="each_day">2</label>
                                    <label class="radio-inline"><input type="radio" name="each_day">3</label>
                                    <label class="radio-inline"><input type="radio" name="each_day">4</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Each packet tablet :</label>
                                <div class="col-sm-8">
                                    <label class="radio-inline"><input type="radio" name="packet" checked>10</label>
                                    <label class="radio-inline"><input type="radio" name="packet">20</label>
                                    <label class="radio-inline"><input type="radio" name="packet">30</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">For Days :</label>
                                <div class="col-sm-8">
                                    <input type="number" placeholder="For Days" class="form-control" value="3"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Descriptions</label>
                                <div class="col-sm-8">
                                    <textarea class="form-control" placeholder="Write Description about Drug" rows="5">
                                        Avoid eating vegetables and fatty foods and pepper
                                    </textarea>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Save &nbsp;<i class="fa fa-save"></i></button>
                </div>
            </div>
        </div>
    </div>


@endsection


@section('script')
    <script src='js/jspdf.min.js'></script>

    <script src="dashboard/js/plugins/sweetalert/sweetalert.min.js"></script>


    {{-- Scripts of converting of PDF file --}}
    <script>
        var base64Img = null;
        imgToBase64('img/octocat.jpg', function(base64) {
            base64Img = base64;
        });

        margins = {
            top: 120,
            bottom: 40,
            left: 40,
            width: 550
        };

        generate = function()
        {
            var pdf = new jsPDF('p', 'pt', 'a4');
            pdf.setFontSize(18);
            pdf.fromHTML(document.getElementById('html-2-pdfwrapper'),
                margins.left, // x coord
                margins.top,
                {
                    // y coord
                    width: margins.width// max width of content on PDF
                },function(dispose) {
                    headerFooterFormatting(pdf, pdf.internal.getNumberOfPages());
                },
                margins);

            var iframe = document.getElementById('PDFiFrame');
            var iframetag = document.getElementById('iframetag');
            iframe.setAttribute('style',' height:100%; width:100%; padding:20px;');
            iframetag.appendChild(iframe);
            iframe.src = pdf.output('datauristring');
        };

        function headerFooterFormatting(doc, totalPages)
        {
            for(var i = totalPages; i >= 1; i--)
            {
                doc.setPage(i);
                //header
                header(doc);

                footer(doc, i, totalPages);
                doc.page++;
            }
        };

        function header(doc)
        {
            doc.setFontSize(20);
            doc.setTextColor(40);
            doc.setFontStyle('normal');

            if (base64Img) {
                doc.addImage(base64Img, 'JPEG', margins.left, 25, 45,45);
            }

            doc.text("Dental Clinic Hakim Alkozay", margins.left + 50, 40 );
            doc.setLineCap(2);


//            doc.line(3, 70, margins.width + 43,70); // horizontal line
            doc.setFontSize(10);
            doc.setTextColor(10);
            doc.setFontStyle('normal');
            doc.text("Doctor Name: Dr. Mustafa Qanbari             ", margins.left + 350, 40 );
            doc.setLineCap(2);


//          small text of Bill
            doc.setFontSize(10);
            doc.setTextColor(10);
            doc.setFontStyle('normal');
            doc.text("Patient Name: Mr. Ahmad Jan             ", margins.left + 50, 60 );
            doc.setLineCap(2);
//            doc.line(3, 90, margins.width + 43,70); // horizontal line
//            end of small text of Bill


            doc.setFontSize(8);
            doc.setTextColor(10);
            doc.setFontStyle('normal');
            doc.text("Date: 2018/8/26             Bill NO: 51225", margins.left + 50, 75 );
            doc.setLineCap(2);
            doc.line(8, 100, margins.width + 70,100);
        };

        // You could either use a function similar to this or pre convert an image with for example http://dopiaza.org/tools/datauri
        // http://stackoverflow.com/questions/6150289/how-to-convert-image-into-base64-string-using-javascript
        function imgToBase64(url, callback, imgVariable) {

            if (!window.FileReader) {
                callback(null);
                return;
            }
            var xhr = new XMLHttpRequest();
            xhr.responseType = 'blob';
            xhr.onload = function() {
                var reader = new FileReader();
                reader.onloadend = function() {
                    imgVariable = reader.result.replace('text/xml', 'image/jpeg');
                    callback(imgVariable);
                };
                reader.readAsDataURL(xhr.response);
            };
            xhr.open('GET', url);
            xhr.send();
        };

        function footer(doc, pageNumber, totalPages){
            var str = "Page " + pageNumber + " of " + totalPages
            doc.setFontSize(10);
            doc.text(str, margins.left, doc.internal.pageSize.height - 20);
        };
    </script>
    {{-- end of scripts PDF file --}}

    {{-- start of sweet alert --}}
    <script>
        $(document).ready(function () {

            $('.demo1').click(function(){
                swal({
                    title: "Welcome in Alerts",
                    text: "Lorem Ipsum is simply dummy text of the printing and typesetting industry."
                });
            });

            $('.demo2').click(function(){
                swal({
                    title: "Successfully Send!",
                    text: "X-Ray Document Successfully send to doctor!",
                    type: "success"
                });
            });

            $('.demo3').click(function () {
                swal({
                    title: "Are you sure?",
                    text: "You will not be able to recover this imaginary file!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes, delete it!",
                    closeOnConfirm: false
                }, function () {
                    swal("Deleted!", "Your imaginary file has been deleted.", "success");
                });
            });

            $('.demo4').click(function () {
                swal({
                        title: "Are you sure?",
                        text: "Your will not be able to recover this imaginary file!",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Yes, delete it!",
                        cancelButtonText: "No, cancel plx!",
                        closeOnConfirm: false,
                        closeOnCancel: false },
                    function (isConfirm) {
                        if (isConfirm) {
                            swal("Deleted!", "Your imaginary file has been deleted.", "success");
                        } else {
                            swal("Cancelled", "Your imaginary file is safe :)", "error");
                        }
                    });
            });


        });
    </script>
    {{-- end of sweet alert --}}
@endsection
