@extends('master')


@section('style')

    @endsection

        @section('content')

            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>{{trans('file.about_us')}}</h5>

                    </div>
                    <div class="ibox-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <h1>{{trans('file.apsc')}}</h1>
                                    <p style="font-size: 20px; text-align: justify">
                                        {{trans('file.apsc_text')}}
                                    </p>

                                </div>
                                <div class="col-md-6">
                                    <img src="{{ asset('img/paypol_logo.png') }}" width="400px"/>
                                    <img src="{{ asset('img/Dentaa3.png') }}" width="400px"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        @endsection


@section('script')

    @endsection








