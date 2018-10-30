@extends('master')

@section('style')
    <link href="{{asset('css/hover/hover-min.css')}}" rel="stylesheet">
@endsection

@section('content')



    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>{{trans('file.contact')}}</h5>
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
                <div class="row">
                    <div class="col-md-6">
                        @if($errors->any())
                            <div class="alert alert-danger" role="alert">
                                Error happing
                            </div>
                            @elseif(\Illuminate\Support\Facades\Session::has('success'))
                            <div class="alert alert-success" role="alert">
                                {{ $success }}
                            </div>
                            @endif
                        <h3>Send Errors</h3>
                        <h5>Send Any report or help we replay soon</h5>
                        <form method="post" action="/email-send" enctype="multipart/form-data">
                            <div class="form-group">
                                <lable>Subject</lable>
                                <input type="text" class="form-control" name="title" placeholder="Subject" required/>
                            </div>
                            <div class="form-group">
                                <lable>Context</lable>
                                <textarea name="content" rows="6" required placeholder="Write your context" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <lable>Upload Errors image</lable>
                                <input type="file"  class="imagefile" name="imagefile" required/>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Send</button>
                                <input type="reset" class="btn btn-white"/>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection

@section('script')



@endsection
