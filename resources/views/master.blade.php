{{--// header--}}
{{--// side bar--}}
{{--// top-nav--}}
{{--//content--}}
{{--//footer bar--}}
{{--// right side message--}}
{{--// footer--}}

@include('layout.header')
@include('layout.sidebar')
@include('layout.top_nav')
<div class="se-pre-con"></div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
              @yield('content')
        </div>
    </div>
<style>
    /*.no-js #loader { display: none;  }*/
    /*.js #loader { display: block; position: absolute; left: 100px; top: 0; }*/
    .se-pre-con {
        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background: url(img/loader2.gif) center no-repeat #fff;
    }
</style>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>

<script>
    $(window).load(function() {
        // Animate loader off screen
        $(".se-pre-con").fadeOut("slow");
    });
</script>

@include('layout.footer-bar')
@include('layout.rigth-side-message')
@include('layout.footer')