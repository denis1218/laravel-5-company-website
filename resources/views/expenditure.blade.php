
@extends('master')

@section('style')
    <!-- Data Tables -->


@endsection



@section('content')


        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Expense Table</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>

                            <ul class="dropdown-menu dropdown-user">
                                <li>
                                    <a href="#">Config option 1</a>
                                </li>
                                <li>
                                    <a href="#">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <!-- Table -->
                        <div class="table-responsive">
                            <!-- Expenditure Table -->
                            <div class="row">
                            <div class="col-md-8">
                                <a href="/expenditure/create" class="btn btn-primary btn-md" style=""><i class="fa fa-plus"></i>&nbsp;&nbsp;Add New Expense</a>
                                <div><h4>Show all expense just for (this month {{ \Carbon\Carbon::now()->month }})</h4></div>
                            </div>

                            <div class="col-md-4" style="margin-bottom: 30px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                <div class="ibox ">
                                    <div class="ibox-title">
                                        <span class="label label-info pull-right">All</span>
                                        <h5>Total Expenses</h5>
                                    </div>
                                    <div class="ibox-content">

                                        <h1 class="no-margins">{{$totalExpense}}&nbsp;&nbsp;Afg<img  src="{{ asset('img/expense_icon.png') }}" width="60px;"style="float: right;"/></h1>
                                        <small>All Expenses</small>

                                    </div>
                                </div>
                            </div>
                            </div>
                            <table class="table table-striped table-bordered table-hover " >

                                <thead>
                                <tr>
                                    <th>Exp ID</th>
                                    <th>To Whom</th>
                                    <th>Paid Amount</th>
                                    <th>Category</th>
                                    <th>Description</th>
                                    <th>Date Of Payment</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(isset($expen))
                                @foreach($expen as $ex)
                                <tr class="gradeX">
                                    <td>{{$ex->id}}</td>
                                    <td>{{$ex->receiver}}</td>
                                    <td>{{$ex->amount}}</td>
                                    <td>{{$ex->category}}</td>
                                    <td>{{str_limit($ex->description,20)}}</td>
                                    <td>{{$ex->created_at}}</td>
                                    <td> <button class="btn btn-xs btn-success fa fa-edit" data-toggle="modal"
                                                 data-target="#{{$ex->id}}">&nbsp;Edit
                                        </button></td>
                                    <td>
                                        <form action="/expenditure2/{{$ex->id}}" id="myForm">
                                            <button class="btn btn-xs btn-danger fa fa-remove demo3">&nbsp;Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                    @endif

                                </tbody>
                            </table>
                            <!-- End of the table -->
                            {{ $expen->links() }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- edit model -->
        @if(isset($expen))
        @foreach($expen as $exs)
    <div class="modal inmodal" id="{{$exs->id}}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated fadeIn">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span
                                aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <i class="fa fa-edit modal-icon text-primary"></i>
                    <h4 class="modal-title">Edit Content</h4>
                </div>
                <div class="modal-body">
                    <form action="/expenditure/{{$exs->id}}" method="post">
                        {{method_field('patch')}}
                    {{--<div class="form-group"><label>ID</label> <input type="text" placeholder="Id" value="" class="form-control"></div>--}}
                        <div class="form-group"><label>To Whom</label> <input type="text" placeholder="Receiver of money"
                                                                          value="{{$exs->receiver}}" class="form-control" name="receiver"></div>
                    <div class="form-group"><label>Paid_Amount</label> <input type="text" placeholder="Paid Amount"
                                                                              value="{{$exs->amount}}" class="form-control" name="amount"></div>
                    <div class="form-group"><label>Category</label>
                        <input type="text" placeholder="parpose"
                               value="{{$exs->category}}" class="form-control" name="category">
                    </div>
                    <div class="form-group"><label>Description</label> <textarea placeholder="Enter more Information"
                                                                                 class="form-control"
                                                                                 style="resize: none;" name="description">{{$exs->description}}</textarea></div>
                        <button type="submit" class="btn btn-primary pull-right" >Save changes</button>
                        <button type="button" class="btn btn-white pull-right" data-dismiss="modal" style="margin-right: 5px;">Close</button>

                    </form>
                    <br>
                </div>

                <div class="modal-footer">


                </div>

            </div>
        </div>
    </div>
    @endforeach
        @endif
    <!-- end of model -->






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




@endsection
