@extends('master')


@section('style')

    @endsection

        @section('content')

            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>{{trans('file.about_us')}}</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">Config option 1</a>
                                </li>
                                <li><a href="#">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <h1>About Paypol Software Company</h1>
                                    <p style="font-size: 20px; text-align: justify">
                                        PayPolSoftware provides leading-edge capabilities in software as a service, a platform that develop digital infrastructure as a service, and creating data for small, medium and large enterprises.
                                        PayPolSoftware, a provider of enterprise digitalization computing system, is empowering businesses of all sizes on their journey of digital transformation.

                                        ACCELERATING DIGITAL TRANSFORMATION IN AFGHAN’S  MARKET
                                        With PayPolSoftware, enterprises can innovate faster, improve customer engagement, drive business-process efficiency and accelerate digital transformation with us.
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








