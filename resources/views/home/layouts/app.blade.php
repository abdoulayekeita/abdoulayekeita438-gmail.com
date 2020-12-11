<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ page_title($title?? '')  }}</title>

        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css" >
        <link href="{{asset('css/footer.css')}}" rel="stylesheet" type="text/css" >
        <style>

            @media only screen and (max-width: 576px) {
               #mobile{

               }
            }
            .kt-svg-icon g [fill] {
                fill: #478fcd;
            }
            nav {
                /*position: -webkit-sticky;*/
                /*position: sticky;*/
                /* sticky or fixed are fine */
                /*position: fixed;*/
                /*top: 0;*/
                height: 69px;
                width: 100%;
                background: transparent !important;
                transition: background .5s; /* control how smooth the background changes */
            }

            nav.scrolled {
                background: white !important;
            }

        </style>
        @yield('style')

    </head>
    <body>

        @include('home.layouts.partials.header')
        @include('home.layouts.partials.header_mobile')

        @yield('content')

        @include('home.layouts.partials.footer')
        <script
            src="https://code.jquery.com/jquery-2.2.4.js"
            integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
            crossorigin="anonymous">

        </script>
        <script src="{{asset('js/jquery.fancybox.min.js')}}"></script>
        <script src="{{asset('js/app.js')}}"></script>
        @yield('script')
        <script>
            var navbar = document.querySelector('nav')

            window.onscroll = function() {

                // pageYOffset or scrollY
                if (window.pageYOffset > 0) {
                    navbar.classList.add('scrolled')
                } else {
                    navbar.classList.remove('scrolled')
                }
            }
           if (screen.width>768){
               $("#mobile").remove()
           }else{
               $("#header").remove()
           }
        </script>
    </body>
</html>
