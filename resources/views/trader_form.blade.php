@extends('master')

@section('style')
    <!-- Data Tables -->


@endsection

@section('content')

    <div class="wrapper wrapper-content animated fadeInRight" style="margin-top: -35px;">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Supplier Registration</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-lg-5">
                                <form id="form" method="post" action="/trader">
                                    {{csrf_field()}}

                                    <div class="form-group">
                                        <label>Name</label>
                                        <div><input type="text" name="name" class="form-control" placeholder="Enter the name here" required></div>
                                    </div>

                                    <div class="form-group">
                                        <label>LastName</label>
                                        <div><input type="text" name="last_name" class="form-control" placeholder="Enter LastName" required></div>
                                    </div>

                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <div><input type="number" name="phone" class="form-control" placeholder="Enter Phone#" required></div>

                                    </div>
                                    <div class="form-group">
                                        <label>Name of Organization</label>
                                        <div><input type="text" name="organization" class="form-control" placeholder="Organization" required></div>

                                    </div>
                                    <div class="form-group">
                                        <label>Address</label>
                                        <div><input type="text" name="address" class="form-control" placeholder="Trader Address" required></div>

                                    </div>
                                    <div class="form-group">
                                        <label>Payment Process</label>
                                        <div><input type="text" name="payment_process" class="form-control" placeholder="The process of payment" required></div>

                                    </div>

                                    <div class="form-group">
                                        <div class="form-group">
                                            <button class="btn btn-primary" type="submit">Save</button>
                                            <button class="btn btn-white" type="reset">Reset</button>
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

    <script src="{{ asset('dashboard/js/plugins/toastr/toastr.min.js') }}"></script>

    <script type="text/javascript">
        $(function () {
            $('#form').submit(function (){
                // Display a success toast, with a title
//                toastr.info('Successfully Inserted !');
                toastr.info('Successfully Inserted !',{timeOut: 7000});
            });
        });
    </script>
@endsection