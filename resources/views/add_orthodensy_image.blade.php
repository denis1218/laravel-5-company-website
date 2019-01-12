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
                        {{--<a href="/orthodensy/create/{{$patient->id}}" class="btn btn-primary"--}}
                        {{--style="">{{trans('file.back')}}</a>--}}
                        <br>
                        <br>
                        <div class="row">
                            <div class="col-lg-5">
                                <form id="form" method="post" action="/orthodensy" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <input type="hidden" value="{{$treatment_id->patient->id}}" name="patient_id">
                                    <input type="hidden" value="{{$treatment_id->id}}" name="treatment_id">

                                    <div class="form-group">
                                        <label>Description</label>
                                        <div>
                                            <textarea name="description" id="" cols="30" style="resize: none"
                                                      placeholder="Description" class="form-control"></textarea>

                                        </div>
                                        <div class="form-group">
                                            <label>Add Image</label>
                                            <button class="form-control btn btn-primary" id="click_btn"
                                                    style="background-color: #1ab394;color: white;">Add Image &nbsp;&nbsp;<i
                                                        class="fa fa-image"></i></button>
                                        </div>


                                        <div class="form-group">
                                            <button class="btn btn-primary"
                                                    type="submit">{{trans('file.save')}}</button>
                                            <button class="btn btn-white" type="reset">{{trans('file.reset')}}</button>
                                        </div>
                                    </div>
                                    <input type="file" name="image" id="image_file" class="form-control"
                                           required style="visibility: hidden;">
                                </form>
                            </div>
                        </div>

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="mytable"
                               style="margin-left:30px;width:95%;">
                            <thead>
                            <th>ID</th>
                            <th>Description</th>
                            <th>Orthodensy Date</th>
                            <th>See Image</th>
                            </thead>

                            <tbody>
                            @foreach($orthodensy as $treatment)
                                <tr>
                                    <td>{{$treatment->id}}</td>
                                    <td>{{$treatment->description}}</td>
                                    <td>{{$treatment->created_at}}</td>
                                    <td>
                                        <a class="btn btn-primary btn-sm" data-toggle="modal"
                                           data-target="#{{$treatment->id}}">Show Image
                                        </a>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>

                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    @foreach($orthodensy as $treat)
        <div class="modal inmodal" id="{{$treat->id}}" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content animated fadeIn">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span
                                    aria-hidden="true">&times;</span><span
                                    class="sr-only">{{trans('file.close')}}</span></button>
                        <i class="fa fa-edit-o modal-icon text-primary"></i>

                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md 4"></div>
                            <div class="col-md-4 text-center">
                                <img src="{{asset('/uploads/orthodensy_image/'.$treat->img)}}"
                                     width="500px" height="400px" alt="">
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of model -->
            @endforeach
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