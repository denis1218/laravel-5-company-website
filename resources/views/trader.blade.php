
@extends('master')

@section('style')

@endsection



@section('content')


    <div class="row">
        <div class="col-lg-12">
            @include('part.trade_nav')
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Suppliers Table</h5>

                </div>
                <div class="ibox-content">
                    <!-- Table -->
                    <div class="table-responsive">
                        <!-- Expenditure Table -->
                        <div class="row">
                            <div class="col-md-12">
                                <a href="/trader/create" class="btn btn-primary btn-md" style=""><i class="fa fa-plus"></i>&nbsp;&nbsp;Supplier Registration</a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover " >

                                <thead>
                                <tr>
                                    <th>Supplier_id</th>
                                    <th>Name</th>
                                    <th>LastName</th>
                                    <th>Pone</th>
                                    <th>Organization</th>
                                    <th>Address</th>
                                    <th>Payment Process</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($traders as $trader)
                                        <tr class="gradeX">
                                            <td>{{$trader->id}}</td>
                                            <td>{{$trader->name}}</td>
                                            <td>{{$trader->last_name}}</td>
                                            <td>{{$trader->phone}}</td>
                                            <td>{{$trader->organization}}</td>
                                            <td>{{$trader->address}}</td>
                                            <td>{{$trader->payment_process}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- End of the table -->
                        {{ $traders->links() }}
                    </div>

                </div>
            </div>
        </div>
     </div>







@endsection

@section('script')
    <!-- script -->


    <script>
        $(document).ready(function () {

            $('.demo1').click(function () {
                swal({
                    title: "Welcome in Alerts",
                    text: "Lorem Ipsum is simply dummy text of the printing and typesetting industry."
                });
            });

            $('.demo2').click(function () {
                swal({
                    title: "Successfully Send!",
                    text: "X-Ray Document Successfully send to doctor!",
                    type: "success"
                });
            });
            $('.demo3').on('click',function(e){
                e.preventDefault();
                var form = $(this).parents('form');
                swal({
                    title: "Are you sure?",
                    text: "You will not be able to recover this imaginary file!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes, delete it!",
                    closeOnConfirm: false
                }, function(isConfirm){
                    if (isConfirm) form.submit();
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
                        closeOnCancel: false
                    },
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
