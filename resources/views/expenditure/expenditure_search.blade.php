
@extends('master')

@section('style')
    <style>
        .shadow-box{
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
    </style>
@endsection



@section('content')

    <div class="col-lg-4 col-xs-6 ">
        <div class="ibox float-e-margins shadow-box">
            <div class="ibox-title">
                <span class="label pull-right" style="background-color: #c39200; color: #ffffff">{{trans('file.this_month')}}</span>
                <h5>{{trans('file.total_expenses_month')}}</h5>
            </div>
            <div class="ibox-content">
                <h1 class="no-margins">{{ $totalExpense }}<img src="{{ asset('img/expense_icon.png') }}" width="60px;"
                                                                style="float: right;"/></h1>
                <div class="stat-percent font-bold text-danger"></div>
                <small>{{trans('file.total_expenses')}}
                    <br>
                </small>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-xs-6">
        <div class="ibox float-e-margins shadow-box">
            <div class="ibox-title">
                <span class="label pull-right" style="background-color: #c39200; color: #ffffff">{{trans('file.this_month')}}</span>
                <h5>{{trans('file.total_expenses_all')}}</h5>
            </div>
            <div class="ibox-content">
                <h1 class="no-margins">{{ $totalExpense_all }}<img src="{{ asset('img/expense_icon.png') }}" width="60px;"
                                                               style="float: right;"/></h1>
                <div class="stat-percent font-bold text-danger"></div>
                <small>{{trans('file.total_expenses')}}
                    <br>
                </small>
            </div>
        </div>
    </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>{{trans('file.expense_table')}}</h5>
                    </div>
                    <div class="ibox-content">
                            <div class="row">
                                <div class="col-md-8">
                                    <a href="/expenditure" class="btn btn-primary btn-md" style=""><i class="fa fa-arrow-left"></i>&nbsp;&nbsp;{{trans('file.back')}}</a>
                                </div>
                            </div>
                            <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover " >
                                <thead>
                                <tr>
                                    <th>{{trans('file.exp_id')}}</th>
                                    <th>{{trans('file.to_whom')}}</th>
                                    <th>{{trans('file.paid_amount')}}</th>
                                    <th>{{trans('file.category')}}</th>
                                    <th>{{trans('file.description')}}</th>
                                    <th>{{trans('file.date')}}</th>
                                    <th>{{trans('file.edit')}}</th>
                                    <th>{{trans('file.delete')}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(isset($data))
                                @foreach($data as $ex)
                                <tr class="gradeX">
                                    <td>{{$ex->id}}</td>
                                    <td>{{$ex->receiver}}</td>
                                    <td>{{$ex->amount}}</td>
                                    <td>{{$ex->category}}</td>
                                    <td>{{str_limit($ex->description,20)}}</td>
                                    <td>{{$ex->created_at}}</td>
                                    <td> <button class="btn btn-xs btn-success fa fa-edit" data-toggle="modal"
                                                 data-target="#{{$ex->id}}">&nbsp;{{trans('file.edit')}}
                                        </button></td>
                                    <td>
                                        <form action="/expenditure2/{{$ex->id}}" id="myForm">
                                            <button class="btn btn-xs btn-danger fa fa-remove demo3">&nbsp;{{trans('file.delete')}}</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                    @endif

                                </tbody>
                            </table>
                            </div>
                                <!-- End of the table -->

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- edit model -->
        @if(isset($data))
        @foreach($data as $exs)
    <div class="modal inmodal" id="{{$exs->id}}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated fadeIn">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span
                                aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <i class="fa fa-edit modal-icon text-primary"></i>
                    <h4 class="modal-title">{{trans('file.edit_content')}}</h4>
                </div>
                <div class="modal-body">
                    <form id="form" action="/expenditure/{{$exs->id}}" method="post">
                        {{method_field('patch')}}
                    {{--<div class="form-group"><label>ID</label> <input type="text" placeholder="Id" value="" class="form-control"></div>--}}
                        <div class="form-group"><label>{{trans('file.to_whom')}}</label> <input type="text" placeholder="{{trans('file.to_whom')}}"
                                                                          value="{{$exs->receiver}}" class="form-control" name="receiver"></div>
                    <div class="form-group"><label>{{trans('file.paid_amount')}}</label> <input type="text" placeholder="{{trans('file.paid_amount')}}"
                                                                              value="{{$exs->amount}}" class="form-control" name="amount"></div>
                    <div class="form-group"><label>{{trans('file.category')}}</label>
                        <input type="text" placeholder="{{trans('file.purpose')}}"
                               value="{{$exs->category}}" class="form-control" name="category">
                    </div>
                    <div class="form-group"><label>{{trans('file.description')}}</label> <textarea placeholder="{{trans('file.description')}}"
                                                                                 class="form-control"
                                                                                 style="resize: none;" name="description">{{$exs->description}}</textarea></div>
                        <button type="submit" class="btn btn-primary pull-right" >{{trans('file.save')}}</button>
                        <button type="button" class="btn btn-white pull-right" data-dismiss="modal" style="margin-right: 5px;">{{trans('file.close')}}</button>

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
