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
                        <h5>{{trans('file.it')}}</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-lg-5">
                                <form id="form" method="post" action="/item/{{$item->id}}">
                                    {{method_field('PUT')}}
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label>{{trans('file.item')}}</label>
                                        <div><input type="text" name="kind" class="form-control" value="{{$item->kind}}" required></div>
                                    </div>

                                    <div class="form-group">
                                        <label>{{trans('file.quantity')}}</label>
                                        <div><input type="number" name="quantity" id="q" onkeyup="Ecompute()" class="form-control" value="{{$item->quantity}}" required></div>
                                    </div>

                                    <div class="form-group">
                                        <label>{{trans('file.unit_price')}}</label>
                                        <div><input type="number" name="unit_price" id="p" onkeyup="compute()" class="form-control" value="{{$item->unit_price}}" required></div>

                                    </div>
                                    <div class="form-group">
                                        <label>{{trans('file.total_price')}}</label>
                                        <div><input type="number" name="total_price" id="t" class="form-control" value="{{$item->total_price}}" readonly required></div>

                                    </div>
                                    <div class="form-group">
                                        <label>{{trans('file.description')}}</label>
                                        <div><input type="text" name="description" class="form-control" value="{{$item->description}}" required></div>

                                    </div>
                                    <div class="form-group">
                                        <label>{{trans('file.bnumber')}}</label>
                                        <div><input type="text" name="bill_number" class="form-control" value="{{$item->bill_number}}" ></div>
                                        {{--@foreach($trader as $trd)--}}
                                            {{--<div><input type="hidden" name="trader_id" value="{{$trader->id}}" ></div>--}}
                                        {{--@endforeach--}}
                                    </div>

                                    <div class="form-group">
                                        <div class="form-group">
                                            <button class="btn btn-primary" type="submit">{{trans('file.save')}}</button>
                                            <button class="btn btn-white" type="reset">{{trans('file.reset')}}</button>
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

    <script>
        function compute() {
            var q=document.getElementById('q').value;
            var p=document.getElementById('p').value;
            var t=p*q;
            document.getElementById('t').value=t;
        }
    </script>
    <script>
        function Ecompute() {
            var q=document.getElementById('q').value;
            var p=document.getElementById('p').value;
            var t=p*q;
            document.getElementById('t').value=t;
        }
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