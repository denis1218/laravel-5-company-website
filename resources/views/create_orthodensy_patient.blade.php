@extends('master')

@section('style')
    <!-- Data Tables -->


@endsection

@section('content')

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>{{trans('file.expense')}}</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">

                    <!-- form -->
                        <a href="/orthodensy/create/{{$patient->id}}" class="btn btn-primary"
                           style="">{{trans('file.back')}}</a>
                        <br>
                        <br>
                        <div class="row">
                            <div class="col-lg-5">
                                <form id="form" method="post" action="/orthodensy/save_treatment" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <input type="hidden" value="{{$patient->id}}" name="patient_id">
                                    <div class="form-group">
                                        <label>Estimated Fee</label>
                                        <div><input type="text" name="estimated_fee" class="form-control"
                                                    placeholder="Estimated Fee" required></div>
                                    </div>

                                    <div class="form-group">
                                        <label>Discount</label>
                                        <div><input type="number" name="discount" class="form-control"
                                                    placeholder="Discount" ></div>
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <div>
                                            <textarea name="description" id="" cols="30" style="resize: none" placeholder="Description" class="form-control"></textarea>

                                    </div>


                                    <div class="form-group">
                                        <div class="form-group">
                                            <button class="btn btn-primary"
                                                    type="submit">{{trans('file.save')}}</button>
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

    <script src="{{ asset('dashboard/js/plugins/toastr/toastr.min.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function () {
           $('#click_btn').click(function () {
              $('#image_file').click();
           });
        });
    </script>
    <script type="text/javascript">
        $(function () {
            $('#form').submit(function () {
                // Display a success toast, with a title
//                toastr.info('Successfully Inserted !');
                toastr.info('Successfully Inserted !', {timeOut: 7000});
            });
        });
    </script>
@endsection