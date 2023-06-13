<!doctype html>
<html lang="zxx">


<!--  36:22-->
<head>

    <!-- meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Sports & Magazine Khela</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome-all.css')}}">
    <link rel="stylesheet" href="{{asset('css/slick-slider.css')}}">
    <link rel="stylesheet" href="{{asset('css/fancybox.css')}}">
    <link rel="stylesheet" href="{{asset('css/smartmenus.css')}}">
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <link rel="stylesheet" href="{{asset('css/color.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
</head>

<body class="home">
    <div id="ritekhela-loader">
        <div id="ritekhela-loader-inner">
            <div id="ritekhela-shadow"></div>
            <div id="ritekhela-box"></div>
        </div>
    </div>

    <div class="ritekhela-wrapper">
        @include('front.layouts.header')
        @yield('banner')
        
        @yield('subheader')
        <div class="ritekhela-main-content">

        @yield('content')
        </div>
        @include('front.layouts.extra')
        @include('front.layouts.footer')

    </div>
    <!-- .site-wrap -->

    <script src="{{asset('script/jquery.js')}}"></script>
    <script src="{{asset('script/popper.min.js')}}"></script>
    <script src="{{asset('script/bootstrap.min.js')}}"></script>
    <script src="{{asset('script/slick.slider.min.js')}}"></script>
    <script src="{{asset('script/fancybox.min.js')}}"></script>
    <script src="{{asset('script/isotope.min.js')}}"></script>
    <script src="{{asset('script/smartmenus.min.js')}}"></script>
    <script src="{{asset('script/progressbar.js')}}"></script>
    <script src="{{asset('script/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('script/functions.js')}}"></script>
</body>

<script type="text/javascript">  
    var url = "{{ route('LangChange') }}";
    $(".Langchange").change(function(){
        window.location.href = url + "?lang="+ $(this).val();
    });  
</script>
</html>
