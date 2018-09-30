@extends('master')


@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-8">
            <h2>Invoice</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="index-2.html">Reception</a>
                </li>
                <li>
                    Details
                </li>
                <li class="active">
                    <strong>P-ID 0025</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-4">
            <div class="title-action">
                <a href="#" class="btn btn-white"><i class="fa fa-pencil"></i> Edit </a>
                <a href="#" class="btn btn-white"><i class="fa fa-check "></i> Save </a>
                <a href="invoice_print.html" target="_blank" class="btn btn-primary"><i class="fa fa-print"></i> Print Invoice </a>
            </div>
        </div>
    </div>
    <br/>
    <div class="ibox-content p-xl">
        <div class="row">
            <div class="col-sm-6">
                <h5>From:</h5>
                <address>
                    <strong>Hakim Alokozay Clinic Dental</strong><br>
                    Pole Sourck breach<br>
                    <br>
                    <abbr title="Phone">Phone:</abbr> (+93) 790112233
                </address>
            </div>

            <div class="col-sm-6 text-right">
                <h4>Invoice No.</h4>
                <h4 class="text-navy">INV-000567F7-00</h4>
                <span>To:</span>
                <address>
                    <strong>Patient name: Smith</strong><br>
                    Charte Char 4<br>
                    3th street, House #52<br>
                    <abbr title="Phone">Phone:</abbr> (+093) 798222333
                </address>
                <p>
                    <span><strong>Invoice Date:</strong> Marh 18, 2018</span><br/>
                    <span><strong>Due Date:</strong> March 24, 2018</span>
                </p>
            </div>
        </div>

        <div class="table-responsive m-t">
            <table class="table invoice-table">
                <thead>
                <tr>
                    <th>Treatment operation</th>
                    <th>Quantity</th>
                    <th>Unit Price</th>
                    <th>Total Price</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><div><strong>regular basis - Doctor: Dr.Ahmad</strong></div>
                        <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small></td>
                    <td>1</td>
                    <td>$26.00</td>
                    <td>$31,98</td>
                </tr>
                <tr>
                    <td><div><strong>Periodontist - Dr.Ahmad</strong></div>
                        <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </small></td>
                    <td>1</td>
                    <td>$80.00</td>
                    <td>$196.80</td>
                </tr>
                <tr>
                    <td><div><strong>Prosthodontist - Dr.Ahmad</strong></div>
                        <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small></td>
                    <td>1</td>
                    <td>$420.00</td>
                    <td>$1033.20</td>
                </tr>

                </tbody>
            </table>
        </div><!-- /table-responsive -->

        <table class="table invoice-total">
            <tbody>
            <tr>
                <td><strong>Sub Total :</strong></td>
                <td>$1026.00</td>
            </tr>
            <tr>
                <td><strong>Discount:</strong></td>
                <td>$5.98</td>
            </tr>
            <tr>
                <td><strong>TOTAL :</strong></td>
                <td>$1261.98</td>
            </tr>
            </tbody>
        </table>
        <div class="text-right">
            <button class="btn btn-primary"><i class="fa fa-dollar"></i> Make A Payment</button>
        </div>

        <div class="well m-t"><strong>Comments</strong>
            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less
        </div>
    </div>
    </div>
@endsection