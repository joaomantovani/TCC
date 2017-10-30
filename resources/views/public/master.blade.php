<!DOCTYPE HTML>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@lang('game.name')</title>
        <meta charset="utf-8" />
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--[if lte IE 8]><script' src="'js/ie/html5shiv.js"></script><![endif]-->
        <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
        <!--[if lte IE 8]>
        <link rel="stylesheet" href="css/ie8.css" />
        <![endif]-->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/darkbootstrap.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/customdarklaravel.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/slick/slick.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/slick/slick-theme.css') }}">
        @section('headextra')
        @show
    </head>
    <body class="homepage">
        <div id="page-wrapper">
            <!-- Header Wrapper -->
            <div id="header-wrapper">
                <!-- Header -->
                <div id="header" class="container">
                    <!-- Logo -->
                    <h1 id="logo"><a href="index.html"><span>Fatec <b>Quest</b></span></a></h1>
                    <!-- Nav -->
                    <nav id="nav">
                        <ul>
                            <li>
                                <a href="#">Dropdown</a>
                                <ul>
                                    <li><a href="#">Lorem ipsum dolor</a></li>
                                    <li><a href="#">Magna phasellus</a></li>
                                    <li><a href="#">Etiam dolore nisl</a></li>
                                    <li>
                                        <span>Phasellus consequat</span>
                                        <ul>
                                            <li><a href="#">Lorem ipsum dolor</a></li>
                                            <li><a href="#">Phasellus consequat</a></li>
                                            <li><a href="#">Magna phasellus</a></li>
                                            <li><a href="#">Etiam dolore nisl</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Veroeros feugiat</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ url('creditos') }}">Créditos</a></li>
                            <li class="break"><a href="{{ url('login') }}">Login</a></li>
                            <li><a href="{{ url('register') }}">Criar conta</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <br><br><br><br>
            @yield('content')
        </div>
        <!-- Footer Wrapper -->
        <div id="footer-wrapper">
            <!-- Footer -->
            <div id="footer" class="container">
                <header>
                    <h2>@lang('game.name')</h2>
                </header>
                <p>@lang('game.reason')</p>
                <ul class="contact">
                    <li><a href="{{ __('game.joao-site') }}" class="icon fa-home"><span>Site</span></a></li>
                    <li><a href="{{ __('game.joao-linkedin') }}" class="icon fa-linkedin"><span>LinkedIn</span></a></li>
                    <li><a href="{{ __('game.fatec-site') }}" class="icon fa-graduation-cap"><span>Fatec</span></a></li>
                </ul>
            </div>
            <!-- Copyright -->
            <div id="copyright" class="container">

            <div class="container">
            	<img style="max-width: 30%; text-align: center !important;; height: auto;" src="{{ asset('illustrations/fatec/fateclogo.png') }}">
            </div>

                Jogo desenvolvido por <a target="_blank" href="joaomantovani.com">João Pedro Mantovani</a> &copy; <a target="_blank" href="fatec.edu.br">Fatec Americana</a>
            </div>
        </div>
        <!-- Scripts -->
        <script src="{{ asset("js/jquery.min.js") }}"></script>
        <script src="{{ asset("js/jquery.dropotron.min.js") }}"></script>
        <script src="{{ asset("js/skel.min.js") }}"></script>
        <script src="{{ asset("js/skel-viewport.min.js") }}"></script>
        <script src="{{ asset("js/util.js") }}"></script>
        <script src="{{ asset("js/main.js") }}"></script>
        <script src="{{ asset("assets/slick/slick.min.js") }}"></script>
        <style type="text/css"> 
            .slick-slide {
                padding: 0 .5em !important;
                text-align: center !important;
                height: auto !important;
                opacity: .1;
            }

            .slick-current {
                opacity: 1;
            }
        </style>
        <!--[if lte IE 8]><script src="{{ asset('js/ie/respond.min.js') }}"></script><![endif]-->
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('.avatar').on('afterChange', function(event, slick, currentSlide, nextSlide){
                    $('#selected_avatar').val($('.slick-current').attr('id'));                        
                });

                $('.avatar').slick({
                  centerMode: true,
                  centerPadding: '60px',
                  slidesToShow: 5,
                  responsive: [
                    {
                      breakpoint: 768,
                      settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 3
                      }
                    },
                    {
                      breakpoint: 480,
                      settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 1
                      }
                    }
                  ]
                });
            });
        </script>
        @section('extrajs')
        @show
    </body>
</html>