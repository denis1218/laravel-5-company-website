
@extends('master')

@section('style')

@endsection



@section('content')


    <div class="row">
        <div class="col-lg-12">
            @include('part.trade_nav')
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Items Table</h5>

                </div>
                <div class="ibox-content">
                    <!-- Table -->
                    <div class="table-responsive">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover " >

                                <thead>
                                <tr>
                                    <th>Item_id</th>
                                    <th>Kind of Item</th>
                                    <th>Quantity</th>
                                    <th>Unit Price</th>
                                    <th>Total Price</th>
                                    <th>Item Supplier</th>
                                    <th>Description</th>
                                    {{--<th>Date</th>--}}
                                    <th>Bill Number</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($items as $item)
                                    <tr class="gradeX">
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->kind}}</td>
                                        <td>{{$item->quantity}}</td>
                                        <td>{{$item->unit_price}}</td>
                                        <td>{{$item->total_price}}</td>
                                        <td>{{$item->trader->name}}</td>
                                        <td>{{$item->description}}</td>
{{--                                        <td>{{$item->created_at}}</td>--}}
                                        <td>{{$item->bill_number}}</td>
                                    </tr>
                                @endforeach
                                    <tr>
                                        <td colspan="4" class="text-center"><strong>Total</strong></td>
                                        <td ><strong>{{$total}}</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- End of the table -->
                        {{ $items->links() }}
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
