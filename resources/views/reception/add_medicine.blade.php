@extends('master')
@section('content')

    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">

                <h5> Patient Prescription<i class="fa fa-info"></i></h5>
            </div>
            <div class="ibox-content" id="divone">
                <a class="btn btn-primary pull-right" href="/prescription">{{trans('file.back')}}</a>


                <div class="row">
                    <div class="col-md-1">
                        <img src="{{ asset('img/prescription2.png') }}" width="100px;"/>
                    </div>
                    <div class="col-md-7">
                        <div class="table-responsive">
                            <table class="table small m-b-xs">
                                <tbody>
                                <tr>
                                    <td>
                                        <h5>{{trans('file.name')}}:<b>&nbsp;{{ $patient->name }}</b>&nbsp;</h5>
                                    </td>
                                    <td>
                                        <h5>{{trans('file.date')}}:<b>&nbsp;{{\Carbon\Carbon::today()}}</b>&nbsp;<i
                                                    class="fa fa-calender"></i></h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h5>{{trans('file.age')}}:<b>&nbsp;{{ $patient->lastname }}</b>&nbsp;<i
                                                    class=""></i></h5>
                                    </td>
                                    <td>
                                        <h5>{{trans('file.p_id')}}:<b>&nbsp;{{ $patient->id_patient }}</b>&nbsp;<i
                                                    class=""></i></h5>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

                <div class="hr-line-solid"></div>
                <br/>

                <form action="/prescription" method="post">
                    {{csrf_field()}}
                    <input type="hidden" name="patient_id" value="{{$patient->id}}">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="table table-hover table-borderd table-striped">
                                <thead>
                                <tr>
                                    <th>{{trans('file.id')}}</th>
                                    <th>{{trans('file.name')}}</th>
                                    <th>{{trans('file.category')}}</th>
                                    <th>{{trans('file.from_whom')}}</th>
                                    <th>{{trans('file.buy')}}</th>
                                    <th>{{trans('file.sale')}}</th>
                                    <th>{{trans('file.unit_stock')}}</th>
                                    <th>{{trans('file.unit_patient')}}</th>
                                    <th>{{trans('file.choose_medicine')}}</th>



                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($medicine as $medice)
                                        <tr>
                                            <td>{{ $medice->id }}</td>
                                            <td><input type="text" name="medicine_name" class="form-control" value="{{ $medice->name }}" readonly></td>
                                            <td><input type="text" name="category" class="form-control" value="{{ $medice->category }}" readonly></td>
                                            <td><input type="text" name="person" class="form-control" value="{{ $medice->person }}" readonly></td>
                                            <td><input type="text" name="buy" class="form-control" value="{{ $medice->buy }}" readonly></td>
                                            <td><input type="text" name="sale" class="form-control" value="{{ $medice->sale }}" readonly></td>
                                            <td><input type="text" name="unit" class="form-control" value="{{ $medice->unit }}" readonly></td>

                                            <td><input type="number" name="patient[]" class="form-control" max="{{$medice->unit}}"></td>
                                            <td>
                                                <div class="i-checks"><input type="checkbox"  value="{{ $medice->id }}" name="medicine[]" id="medicine" ></div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp; save & print</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <img id="preview"  style="border-radius: 20px;"/>
                    </div>
                </div>
                </form>



            </div>
        </div>
    </div>




@endsection

@section('script')
    <script src="dashboard/js/plugins/sweetalert/sweetalert.min.js"></script>
    <script type="text/javascript">
        function PrintElem() {
            var mywindow = window.open('', 'PRINT', 'height=1024,width=1468');
            mywindow.document.write('<html><head><title>' + 'Patient information' + '</title>');
            mywindow.document.write('</head><body >');
            mywindow.document.write(document.getElementById('divone').innerHTML);
            mywindow.document.write('</body></html>');
            mywindow.document.close(); // necessary for IE >= 10
            mywindow.focus(); // necessary for IE >= 10*/
            mywindow.print();
            mywindow.close();
            return true;
        }
    </script>
@endsection