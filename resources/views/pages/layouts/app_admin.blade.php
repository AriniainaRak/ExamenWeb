<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>
        @yield('title')
    </title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/simplegrid.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lightcase.css') }}">
    <link rel="stylesheet" href="{{ asset('js/owl-carousel/owl.carousel.css') }}" />
    <link rel="stylesheet" href="{{ asset('js/owl-carousel/owl.theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('js/owl-carousel/owl.transitions.css') }}" />
    <link rel="stylesheet" href="{{ asset('style.css') }}">

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,900' rel='stylesheet'
        type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
             <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
             <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
           <![endif]-->
</head>

<body id="home">
    <!-- Header -->
    <header id="top-header" class="header-home">
        <div class="grid">
            <div class="col-1-1">
                <div class="content">
                    <div class="logo-wrap">
                        <a href="#0" class="logo">IA_News</a>
                    </div>
                    <nav class="navigation">
                        <input type="checkbox" id="nav-button">
                        <label for="nav-button" onclick></label>
                        <ul class="nav-container">
                            <li><a href="#home" class="current">Home</a></li>
                            <li><a href="#insert">Insert</a></li>
                            <li><a href="#liste">Liste</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header -->

    <!-- Services Section -->
    <div class="wrap services-wrap" id="insert">
        <section class="grid grid-pad services">
            <h2>New Article</h2>
            <div class="col-1-4 service-box service-1">
                <div class="content">
                    <div class="service-entry">
                        <form action=""{{route('insertion')}} method="get">
                            <h3>Article</h3>
                            <p>Image <input type="file" name="image"></p>
                            <p>Titre <input type="text" name="titre"></p>
                            <p>Sous-Titre <input type="text" name="soustitre"></p>
                            <p>Description <input type="text" name="description"></p>
                            <p><input type="submit" value="inserer"></p>
                        </form>
                    </div>

                </div>
            </div>
        </section>
    </div>
    <!-- End Services Section -->



    <!-- Work Section -->
    <div classon class="grid grid-pad">
        <h2>Recent Work</h2>
        <!-- Start of Filter section -->

        <!-- End of Filter section -->
        <div class="portfolio-items">
            <div class="col-1-3 mix illustration">
                <div class="content">
                    <div class="recent-work">
                        <img src="images/work/1-small.jpg" alt="">
                        <div class="overlay">
                            <span>Illustration</span>
                            <h2><a class="img-wrap" data-rel="lightcase:illustration"
                                    title="Asian tourist - Illustration" href="images/work/1-big.jpg">Asian
                                    tourist</a></h2>
                        </div>

                    </div>
                </div>
            </div>





            </section>
        </div>
        <!-- End Work Section -->






        <!-- CurveDown -->
        <svg class="curveDownColor curveMapUp" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%"
            height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
            <path d="M0 0 C 50 100 80 100 100 0 Z"></path>
        </svg>

        <!-- Parallax Section -->
        <div class="map">
            <div class="wrap">
                <section id="cd-google-map">
                    <div id="google-container"></div>
                    <div id="cd-zoom-in"></div>
                    <div id="cd-zoom-out"></div>
                </section>
            </div>
        </div>
        <!-- End Parallax Section -->

        <!-- CurveUp -->
        <svg class="curveUpColor curveMapDown" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%"
            height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
            <path d="M0 100 C 20 0 50 0 100 100 Z"></path>
        </svg>


        <!-- CurveDown -->
        <svg class="curveDownColor" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100"
            viewBox="0 0 100 100" preserveAspectRatio="none">
            <path d="M0 0 C 50 100 80 100 100 0 Z"></path>
        </svg>

        <!-- Footer -->
        <footer class="wrap">
            <div class="grid grid-pad">
                <div class="col-1-4">
                    <div class="content">
                        <div class="footer-widget">
                            <h3>About</h3>
                            <div class="textwidget">
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                    tempor
                                    invidunt ut labore.</p><br>
                                <p>Et dolore magna aliquyam erat sed diam voluptua.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-1-4">
                    <div class="content">
                        <div class="footer-widget">
                            <h3>Recent Posts</h3>
                            <div class="fwidget">
                                <ul>
                                    <li><a href="#0">Suspendisse nec lectus non</a></li>
                                    <li><a href="#0">Phasellus euismod pulvinar</a></li>
                                    <li><a href="#0">Aliquam erat volutpat</a></li>
                                    <li><a href="#0">Phasellus euismod pulvinar</a></li>
                                    <li><a href="#0">Aliquam erat volutpat</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-1-4">
                    <div class="content">
                        <div class="footer-widget">
                            <h3>More info</h3>
                            <div class="textwidget">
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                    tempor
                                    invidunt ut labore et dolore.</p>
                                <br>
                                <p>At vero eos et accusam et justo duo dolores et ea rebum.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-1-4">
                    <div class="content">
                        <div class="footer-widget">
                            <h3>Flickr Feed</h3>
                            <div class="flickr-widget">
                                <ul class="flickr-list">
                                    <li><a href="#0"><img src="images/flickr-widget/flickr1.jpg"
                                                alt=""></a>
                                    </li>
                                    <li><a href="#0"><img src="images/flickr-widget/flickr2.jpg"
                                                alt=""></a>
                                    </li>
                                    <li><a href="#0"><img src="images/flickr-widget/flickr3.jpg"
                                                alt=""></a>
                                    </li>
                                    <li><a href="#0"><img src="images/flickr-widget/flickr4.jpg"
                                                alt=""></a>
                                    </li>
                                    <li><a href="#0"><img src="images/flickr-widget/flickr5.jpg"
                                                alt=""></a>
                                    </li>
                                    <li><a href="#0"><img src="images/flickr-widget/flickr6.jpg"
                                                alt=""></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="social-footer">
                <div class="grid grid-pad">
                    <div class="col-1-1">
                        <div class="content">
                            <div class="social-set">
                                <a href="#0"><i class="icon-facebook"></i></a>
                                <a href="#0"><i class="icon-twitter"></i></a>
                                <a href="#0"><i class="icon-linkedin2"></i></a>
                                <a href="#0"><i class="icon-dribbble4"></i></a>
                                <a href="#0"><i class="icon-instagram"></i></a>
                            </div>
                            <p class="source-org copyright">© 2016 | All Rights Reserved Created By <a
                                    href="http://templatestock.co">Template Stock</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->

        <div class="loader-overlay">
            <div class="loader">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
        </div>

        <!-- JS -->
        <script src="{{ asset('js/jquery.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
        <script src="{{ asset('js/mixitup.js') }}"></script>
        <script src="{{ asset('js/smoothscroll.js') }}"></script>
        <script src="{{ asset('js/jquery.nav.js') }}"></script>
        <script src="{{ asset('js/owl-carousel/owl.carousel.min.js') }}"></script>
        <script src="https://maps.googleapis.com/maps/api/js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
        <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('js/lightcase.min.js') }}"></script>
</body>

</html>
