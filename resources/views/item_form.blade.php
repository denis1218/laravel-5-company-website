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
                        <h5>Item Registration</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-lg-5">
                                <form id="form" method="post" action="/item">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label>kind</label>
                                        <div><input type="text" name="kind" class="form-control" placeholder="kind of item" required></div>
                                    </div>

                                    <div class="form-group">
                                        <label>Quantity</label>
                                        <div><input type="number" name="quantity" id="q" class="form-control" placeholder="Quantity" required></div>
                                    </div>

                                    <div class="form-group">
                                        <label>Unit Pirce</label>
                                        <div><input type="number" name="unit_price" id="p" onkeyup="compute()" class="form-control" placeholder="Enter price of each unit" required></div>

                                    </div>
                                    <div class="form-group">
                                        <label>Total Price</label>
                                        <div><input type="number" name="total_price" id="t" class="form-control" readonly required></div>

                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <div><input type="text" name="description" class="form-control" placeholder="Description" required></div>

                                    </div>
                                    <div class="form-group">
                                        <label>Bill Number</label>
                                        <div><input type="text" name="bill_number" class="form-control" placeholder="Enter Bill Numebr" ></div>
                                        @foreach($trader as $trd)
                                        <div><input type="hidden" name="trader_id" value="{{$trader->id}}" ></div>
                                        @endforeach
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

    <script>
        function compute() {
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