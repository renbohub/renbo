<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Renbo</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('renbo/sites/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Animation CSS -->
    <link href="{{asset('renbo/sites/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('renbo/sites/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('renbo/sites/css/style-1.css')}}" rel="stylesheet">
    <link href="{{asset('renbo/sites/js/plugins/owl/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('renbo/sites/js/plugins/owl/assets/owl.theme.default.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
</head>

<body id="page-top" class="landing-page no-skin-config">
    <div class="navbar-wrapper">
        <nav class="navbar navbar-default navbar-fixed-top navbar-expand-md" role="navigation">
            <div class="container">
                <a class="navbar-brand" href="{{route('landing')}}">RENBO</a>
                <div class="navbar-header page-scroll">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>
                <div class="collapse navbar-collapse justify-content-end" id="navbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="nav-link page-scroll" href="{{route('landing')}}#page-top">Home</a></li>
                        <li><a class="nav-link page-scroll" href="{{route('landing')}}#features">Features</a></li>
                        <li><a class="nav-link page-scroll" href="{{route('landing')}}#team">Team</a></li>
                        <li><a class="nav-link page-scroll" href="{{route('landing')}}#testimonials">Testimonials</a></li>
                        <li><a class="nav-link page-scroll" href="{{route('landing')}}#pricing">Pricing</a></li>
                        <li><a class="nav-link page-scroll" href="{{route('landing')}}#contact">Contact</a></li>
                        <li><a class="nav-link page-scroll bg-success" href="{{route('dashboard')}}">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    @yield('content')

    <!-- Mainly scripts -->
    <script src="{{asset('renbo/sites/js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('renbo/sites/js/popper.min.js')}}"></script>
    <script src="{{asset('renbo/sites/js/bootstrap.js')}}"></script>
    <script src="{{asset('renbo/sites/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
    <script src="{{asset('renbo/sites/js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

    <!-- Custom and plugin javascript -->
    <script src="{{asset('renbo/sites/js/inspinia.js')}}"></script>
    <script src="{{asset('renbo/sites/js/plugins/pace/pace.min.js')}}"></script>
    <script src="{{asset('renbo/sites/js/plugins/wow/wow.min.js')}}"></script>
    <script src="{{asset('renbo/sites/js/plugins/owl/owl.carousel.min.js')}}"></script>
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>


    <script>

        $(document).ready(function () {

            $('body').scrollspy({
                target: '#navbar',
                offset: 80
            });

            // Page scrolling feature
            $('a.page-scroll').bind('click', function(event) {
                var link = $(this);
                $('html, body').stop().animate({
                    scrollTop: $(link.attr('href')).offset().top - 50
                }, 500);
                event.preventDefault();
                $("#navbar").collapse('hide');
            });
        });

        var cbpAnimatedHeader = (function() {
            var docElem = document.documentElement,
                    header = document.querySelector( '.navbar-default' ),
                    didScroll = false,
                    changeHeaderOn = 200;
            function init() {
                window.addEventListener( 'scroll', function( event ) {
                    if( !didScroll ) {
                        didScroll = true;
                        setTimeout( scrollPage, 250 );
                    }
                }, false );
            }
            function scrollPage() {
                var sy = scrollY();
                if ( sy >= changeHeaderOn ) {
                    $(header).addClass('navbar-scroll')
                }
                else {
                    $(header).removeClass('navbar-scroll')
                }
                didScroll = false;
            }
            function scrollY() {
                return window.pageYOffset || docElem.scrollTop;
            }
            init();

        })();

        // Activate WOW.js plugin for animation on scrol
        new WOW().init();

    </script>
    @yield('script')
</body>
</html>
