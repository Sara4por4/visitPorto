<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="google-site-verification" content="lC9W2DnXHEzfed_xHt7XtBXIS4lnraKpmAVYG1SYIkE" />
        @yield('meta-tags')
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{url('/front/css/app.css')}}" rel="stylesheet">
        <link href="{{url('/front/plugins/slick/slick.css')}}" rel="stylesheet">

        @stack('styles')
    </head>
    <body>

    <div id="app">

      @if(!Request::is('guide') && !Request::is('guide-2') && !Request::is('guide-3') && !Request::is('guide-4'))
        @include('front.layout.nav')
      @endif

     @yield('content')

     @if(!Request::is('guide') && !Request::is('guide-2') && !Request::is('guide-3') && !Request::is('guide-4'))
      @include('front.layout.footer')
     @endif

    </div>



    <!-- JavaScripts -->
    <script src="{{url('/')}}/front/js/app.js"></script>
    <script src="{{url('/')}}/front/js/switchmap.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>
    <script src="front/plugins/slick/slick.min.js"></script>
    <script src="front/plugins/svg-inject/svg-inject.min.js"></script>

    @stack('scripts')

    <script>
        SVGInject(document.querySelectorAll("img.injectable"));

        $('.top-banner__scroll').on('click', function(event){
            event.preventDefault();
            var viewportHeight = $(window).height();

            $('html, body').animate({
                scrollTop: viewportHeight,
            }, 1400);
        });



      //  forms effect
        $('.form-group .form-control').focus(function(){
           $(this).parents('.form-group').addClass('focused');
         });

           $('.form-group  .form-control').blur(function(){
             var inputValue = $(this).val();
             if ( inputValue == "" ) {
               $(this).removeClass('filled');
               $(this).parents('.form-group').removeClass('focused');
             } else {
               $(this).addClass('filled');
             }
           })

    </script>

</body>
</html>
