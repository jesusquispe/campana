<!--<nav>
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/service">Service</a></li>
        <li><a href="/contact">Contact</a></li>
    </ul>
</nav>

@yield('content')
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Flat Pro || Buisness HTML template</title>

        <!-- Required CSS files -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/barfiller.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <div class="preloader">
        <span class="preloader-spin"></span>
    </div>
    <div class="site">
        
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-6 col-sm-3 logo-column">
                        <a href="index.html" class="logo">
                            <img src="img/logo.png" alt="logo">
                        </a>
                    </div>
                    <div class="col-6 col-sm-9 nav-column clearfix">
                        <div class="right-nav">
                            <span class="search-icon fa fa-search"></span>
                            <form action="#" class="search-form">
                                <input type="search" placeholder="search now">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                            <div class="header-social">
                                <a href="#" class="fa fa-facebook"></a>
                                <a href="#" class="fa fa-twitter"></a>
                                <a href="#" class="fa fa-github"></a>
                            </div>
                        </div>
                        <nav id="menu" class="d-none d-lg-block">                            <ul>                                
                                <li><a href="{{ route('home') }}">Inicio Cam</a></li>                                
                                <li><a href="{{ route('about') }}">Candidato</a></li>
                                <li><a href="{{ route('education') }}">Imagenes</a></li>
                                <li><a href="{{ route('Health') }}">Videos</a></li>
                                <li><a href="{{ route('contact')}}">Contacto</a></li>
                                <li><a href="{{ route('service')}}">Servicio</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        @yield('content')
        <footer>
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-3 footer_widget">
                            <div class="inner">
                                <h4>Nosotros</h4>
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                <p>Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, antesenectus et netus et malesuada fames ac turpis egestas.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 footer_widget">
                            <div class="inner">
                                <h4>Partido</h4>
                                <ul>
                                    <li><a href="#">Resumen de la compañía</a></li>
                                    <li><a href="#">Conocer al equipo</a></li>
                                    <li><a href="#">Nuestros socios increíbles</a></li>
                                    <li><a href="#">Nuestros servicios</a></li>
                                    <li><a href="#">Preguntas frecuentes</a></li>
                                    <li><a href="#">Contáctenos</a></li>
                                    <li><a href="#">Términos de Uso</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 footer_widget">
                            <div class="inner">
                                <h4>Recent Posts</h4>
                                <div class="media">
                                    <a href="#">
                                        <img src="img/recent1.jpg" class="d-flex mr-3" alt="">
                                    </a>
                                    <div class="media-body">
                                        <h5>
                                            <a href="#">Curling irons are as individual as the women</a>
                                        </h5>
                                        <span>June 22, 2017</span>
                                    </div>
                                </div>
                                <div class="media">
                                    <a href="#">
                                        <img src="img/recent2.jpg" class="d-flex mr-3" alt="">
                                    </a>
                                    <div class="media-body">
                                        <h5>
                                            <a href="#">Curling irons are as individual as the women</a>
                                        </h5>
                                        <span>June 22, 2017</span>
                                    </div>
                                </div>
                                <div class="media">
                                    <a href="#">
                                        <img src="img/recent3.jpg" class="d-flex mr-3" alt="">
                                    </a>
                                    <div class="media-body">
                                        <h5>
                                            <a href="#">Curling irons are as individual as the women</a>
                                        </h5>
                                        <span>June 22, 2017</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 footer_widget">
                            <div class="inner">
                                <h4>Dirección</h4>
                                <h5>Flat Pro, Inc.</h5>
                                <p>649 Folsom Ave, Suite 400 <br>San Francisco, CA 63105 <br>P: (123) 456-7890</p>
                                <h4>Newsletter</h4>
                                <form action="#" class="nw_form">
                                    <input placeholder="Enter your email" type="email">
                                    <button><i class="fa fa-paper-plane"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="copyright-txt">
                                © 2019 Flat Pro. All Rights Reserved.
                            </div>
                        </div>
                        <div class="col-lg-6 text-right">
                            <div class="footer-nav">
                                <a href="#">Home</a>
                                <a href="#">Portfolio</a>
                                <a href="#">Pages</a>
                                <a href="#">Shortcode</a>
                                <a href="#">Blog</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!--Required JS files-->
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/vendor/popper.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/vendor/owl.carousel.min.js"></script>
    <script src="js/vendor/isotope.pkgd.min.js"></script>
    <script src="js/vendor/jquery.barfiller.js"></script>
    <script src="js/vendor/loopcounter.js"></script>
    <script src="js/vendor/slicknav.min.js"></script>
    <script src="js/active.js"></script>

</body>

</html>

