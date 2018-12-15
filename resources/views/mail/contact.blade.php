@extends('master')

@section('style')

@endsection

@section('content')
    <div class="col-lg-12 animated fadeInRight">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>{{trans('file.support')}}</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>

            <div class="ibox-content">
                <div class="row">
                    <div class="col-md-6">

                        <h3>{{trans('file.ser')}}</h3>
                        @if($net)
                            <div class="alert alert-success" role="alert">
                                {{trans('file.yacti')}}
                            </div>
                            @else
                            <div class="alert alert-danger" role="alert">
                                {{trans('file.yanc')}}
                            </div>
                            @endif


                        <form method="post" action="/email-send" >
                            <div class="form-group">
                                <label>{{trans('file.subject')}}</label>
                                <input type="text" class="form-control" name="title" placeholder="{{trans('file.subject')}}" required/>
                            </div>
                            <div class="form-group">
                                <label>{{trans('file.context')}}</label>
                                <textarea name="content" rows="6" required placeholder="{{trans('file.wyc')}}" class="form-control"></textarea>
                            </div>
                            {{--<div class="form-group">--}}
                                {{--<lable>Upload Errors image</lable>--}}
                                {{--<input type="file"  class="file-control" name="imagefile" />--}}
                            {{--</div>--}}
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">{{trans('file.send')}}</button>
                                <input type="reset" class="btn btn-white"/>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <img src="{{ asset('img/paypol_logo.png') }}" width="300px;"/>
                        </div>
                        <br/>
                        <h2>{{trans('file.psdc')}}</h2>
                        <br/>
                        <h3>{{trans('file.cu')}}</h3>
                        <br/>
                        <table class="table">
                            <tr>
                                <td><strong><i class="fa fa-phone"></i>&nbsp;{{trans('file.phone')}}</strong></td>
                                <td><strong>0731888814</strong></td>
                            </tr>
                            <tr>
                                <td><strong><i class="fa fa-envelope"></i>&nbsp;{{trans('file.email')}}</strong></td>
                                <td><strong>dentaclinic2018@gmail.com</strong></td>
                            </tr>
                            <tr>
                                <td><strong><i class="fa fa-facebook-square"></i>&nbsp;{{trans('file.facebook')}}</strong></td>
                                <td><strong><a target="_blank" href="https://www.facebook.com/paypolsoftwaredevelopment/?modal=admin_todo_tour">Paypol Software Development Co</a></strong></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('script')

@endsection
