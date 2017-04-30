<!DOCTYPE html>
<html ng-app = "sunshine">

<!-- Mirrored from rhythm.bestlooker.pro/mp-index-05.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Jul 2016 12:13:57 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <title>Rhythm &mdash; One & Multi Page Creative Theme</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta charset="utf-8">
    <meta name="author" content="Roman Kirichik">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="images/favicon.png">
    <link rel="apple-touch-icon" href="{{asset('images/apple-touch-icon.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('images/apple-touch-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('images/apple-touch-icon-114x114.png')}}">

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/style-responsive.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/vertical-rhythm.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    
    



</head>
<body class="appear-animate">

<!-- Page Loader -->
<div class="page-loader">
    <div class="loader">Loading...</div>
</div>
<!-- End Page Loader -->

<!-- Page Wrap -->
<div class="page" id="top">

    <!-- Home Section -->
    <section class="home-section bg-dark-alfa-30 parallax-2" data-background="images/full-width-images/slide-4.jpg" id="home">
        <div style="height: 400px !important;">

            <!-- Hero Content -->
            <div class="home-content">
                <div class="home-text">

                    <h1 class="hs-line-8 no-transp font-alt mb-50 mb-xs-30">
                        L'&eacute;nergie solaire
                    </h1>

                    <h2 class="hs-line-7 mb-50 mb-xs-30">
                                <span class="text-rotate">
                                    Un d&eacute;fi pour tous,
                                    Une planification pour tous,
                                    Un bien pour tous
                                </span>
                    </h2>

                    <div class="local-scroll">
                        <a href="#/panneaux" class="btn btn-mod btn-border-w btn-medium btn-round hidden-xs">Panneaux </a>
                        <span class="hidden-xs">&nbsp;</span>
                        <a href="#/optimisation" class="btn btn-mod btn-border-w btn-medium btn-round lightbox mfp-iframe">Optimisation</a>
                    </div>

                </div>
            </div>
            <!-- End Hero Content -->

            <!-- Scroll Down -->
            <div class="local-scroll">
                <a href="#about" class="scroll-down"><i class="fa fa-angle-down scroll-down-icon"></i></a>
            </div>
            <!-- End Scroll Down -->

        </div>
    </section>
    <!-- End Home Section -->

    <!-- Navigation panel -->
    <nav class="main-nav dark transparent stick-fixed">
        <div class="full-wrapper relative clearfix">
            <!-- Logo ( * your text or image into link tag *) -->
            <div class="nav-logo-wrap local-scroll">
                <a href="mp-index.html" class="logo">
                    <img src="{{asset('images/sun.svg')}}" alt="" />
                </a>
            </div>
            <div class="mobile-nav">
                <i class="fa fa-bars"></i>
            </div>

            <!-- Main Menu -->
            <div class="inner-nav desktop-nav">
                <ul class="clearlist">

                    <!-- Item With Sub -->
                    <li>
                        <a href="#/accueil" data-target="#accueil" class="mn-has-sub active">Accueil</a>
                    </li>
                    <!-- End Item With Sub -->

                    <!-- Item With Sub -->
                    <li>
                        <a href="#/panneaux" data-target="#panneaux" class="mn-has-sub">Panneaux solaires </a>
                    </li>
                    <!-- End Item With Sub -->

                    <!-- Item With Sub -->
                    <li>
                        <a href="#/optimisation" data-target="#optimisation" class="mn-has-sub">Optimisation</a>
                    </li>
                    <!-- End Item With Sub -->

                    <!-- Divider -->
                    <li><a>&nbsp;</a></li>
                    <!-- End Divider -->


                    <!-- Languages -->
                    <li>
                        <a href="#" class="mn-has-sub">Compte <i class="fa fa-angle-down"></i></a>

                        <ul class="mn-sub">

                            <li><a href="#">Se connecter</a></li>
                            <li><a href="#">D&eacute;connexion</a></li>

                        </ul>

                    </li>
                    <!-- End Languages -->

                </ul>
            </div>
            <!-- End Main Menu -->


        </div>
    </nav>
    <!-- End Navigation panel -->

    <ng-view></ng-view>




    {{--<!-- Newsletter Section -->--}}
    {{--<section class="small-section bg-gray-lighter">--}}
        {{--<div class="container relative">--}}

            {{--<form class="form align-center" id="mailchimp">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-md-8 col-md-offset-2">--}}

                        {{--<div class="newsletter-label font-alt">--}}
                            {{--Stay informed with our newsletter--}}
                        {{--</div>--}}

                        {{--<div class="mb-20">--}}
                            {{--<input placeholder="Enter Your Email" class="newsletter-field form-control input-md round mb-xs-10" type="email" pattern=".{5,100}" required/>--}}

                            {{--<button type="submit" class="btn btn-mod btn-medium btn-round mb-xs-10">--}}
                                {{--Subscribe--}}
                            {{--</button>--}}
                        {{--</div>--}}

                        {{--<div class="form-tip">--}}
                            {{--<i class="fa fa-info-circle"></i> Please trust us, we will never send you spam--}}
                        {{--</div>--}}

                        {{--<div id="subscribe-result"></div>--}}

                    {{--</div>--}}
                {{--</div>--}}
            {{--</form>--}}

        {{--</div>--}}
    {{--</section>--}}
    {{--<!-- End Newsletter Section -->--}}




    <!-- Foter -->
    <footer class="page-section bg-gray-lighter footer pb-60">
        <div class="container">

            <!-- Footer Text -->
            <div class="footer-text">

                <!-- Copyright -->
                <div class="footer-copy font-alt">
                    <a href="http://themeforest.net/user/theme-guru/portfolio" target="_blank">&copy; Sunshine 2017</a>.
                </div>
                <!-- End Copyright -->

                <div class="footer-made">
                    Tout droit reserves.
                </div>

            </div>
            <!-- End Footer Text -->

        </div>


        <!-- Top Link -->
        <div class="local-scroll">
            <a href="#top" class="link-to-top"><i class="fa fa-caret-up"></i></a>
        </div>
        <!-- End Top Link -->

    </footer>
    <!-- End Foter -->


</div>
<!-- End Page Wrap -->



<!-- BEGIN ANGULAR SCRIPTS -->

<!-- ANGULAR BOWER SCRIPTS STRART-->
<script src="js/angular/assets/bower_components/angular/angular.js"></script>
<script src="js/angular/assets/bower_components/angular-route/angular-route.js"></script>
<script src="js/angular/assets/bower_components/angular-resource/angular-resource.js"></script>
<script src="js/angular/assets/bower_components/angular-loaders/dist/angular-loaders.min.js"></script>
<!-- ANGULAR BOWER SCRIPTS END -->



<!-- BEGIN ANGULAR APPLICATION MAIN MODULE SCRIPTS -->
<script src="js/angular/application.js"></script>
<!-- END ANGULAR APPLICATION MAIN MODULE SCRIPTS -->

<!-- BEGIN APPLICATION ANGULAR ROUTE CONTROLLER SCRIPTS -->
<script src="js/angular/routes/ApplicationRoute.js"></script>
<!-- END APPLICATION ANGULAR ROUTE SCRIPTS -->

<!-- BEGIN APPLICATION ANGULAR CUSTOM DIRECTIVES SCRIPTS -->
<script src="js/angular/directives/directives.js"></script>
<!-- END APPLICATION ANGULAR CUSTOM DIRECTIVES SCRIPTS -->

<!-- BEGIN APPLICATION ANGULAR FACTORY SCRIPTS -->
<script src="js/angular/factories/StatisticFactory.js"></script>
<script src="js/angular/factories/ProductFactory.js"></script>
<!-- END APPLICATION ANGULAR FACTORY SCRIPTS -->

<!-- BEGIN APPLICATION ANGULAR CONTROLLER SCRIPTS -->
<script src="js/angular/controllers/StatisticCtrl.js"></script>
<script src="js/angular/controllers/PanneauCtrl.js"></script>

{{--<script src="js/angular/controllers/ProductCtrl.js"></script>--}}

<script src="js/angular/controllers/ProductResourceCtrl.js"></script>


<!-- END APPLICATION ANGULAR CONTROLLER SCRIPTS -->



<!-- JS -->
<script type="text/javascript" src="{{asset('js/jquery-1.11.2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.easing.1.3.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/SmoothScroll.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.scrollTo.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.localScroll.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.viewport.mini.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.countTo.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.appear.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.sticky.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.parallax-1.1.3.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.fitvids.js')}}"></script>
<script type="text/javascript" src="{{asset('js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/isotope.pkgd.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/imagesloaded.pkgd.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<!-- Replace test API Key "AIzaSyAZsDkJFLS0b59q7cmW0EprwfcfUA8d9dg" with your own one below
**** You can get API Key here - https://developers.google.com/maps/documentation/javascript/get-api-key -->
<script type="text/javascript" src="{{asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyAZsDkJFLS0b59q7cmW0EprwfcfUA8d9dg')}}"></script>
<script type="text/javascript" src="{{asset('js/gmap3.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/wow.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/masonry.pkgd.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.simple-text-rotator.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/all.js')}}"></script>
<script type="text/javascript" src="{{asset('js/contact-form.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
<!--[if lt IE 10]><script type="text/javascript" src="{{asset('js/placeholder.js')}}"></script><![endif]-->



</body>

<!-- Mirrored from rhythm.bestlooker.pro/mp-index-05.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Jul 2016 12:13:57 GMT -->
</html>
