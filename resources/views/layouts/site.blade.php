<!doctype html>
<html lang="zxx">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" />
    <meta name="title" content="Hapec - Materiales de Construcción, Abrasivos y Herramientas">
    <meta name="description" content="info@hapec.com.mx | Tel. (81) 1038 2831 | Álvaro Obregón 327, Centro, Monterrey, N.L.">
    <meta name="keywords" content="Distribuidora, Materiales, Construcción, Abrasivos, Herramientas, Block, Arena, Obra, Yeso, Cemento, Triturados.">
    <meta name="author" content="Valtre" />
    <meta property="og:title" content="Hapec - Materiales de Construcción, Abrasivos y Herramientas" />
    <!-- Title -->
    <title> Hapec - Materiales de Construcción, Abrasivos y Herramientas</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('img/logo/3.png') }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset('img/logo/3.png') }}">
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Plugins css -->
    <link rel="stylesheet" href="{{ asset('css/plugins.css') }}">
    <!-- Style Css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Custom styles -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="template-color-15">

    <!-- Wrapper -->
    <div id="wrapper" class="wrapper">
        <!-- Cursor -->
        <div class="node" id="node"></div>
        <div class="cursor" id="cursor"></div>
        <!-- Header start -->
        <div class="header-menu">
            <!-- Header -->
            <header class="sl_header header-left-align header-default header-architecture header-transparent header-light-version header-fixed-width header-fixed-150 header-sticky header-mega-menu clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="header__wrapper mr-0">
                                <!-- Header Left -->
                                <div class="header-left">
                                    <div class="logo">
                                        <a href="{{ route('home') }}">
                                            <img src="{{ asset('img/logo/1.png') }}" alt="Hapec Logo">
                                        </a>
                                    </div>
                                    <div class="mainmenu-wrapper have-not-flex d-none d-lg-block pl-40">
                                        <nav class="page_nav">
                                            <ul class="mainmenu">
                                                <li class="lavel-1"><a href="{{ route('home') }}"><span>Inicio</span></a></li>
                                                <li class="lavel-1"><a href="{{ route('home') }}#about"><span>Conócenos</span></a></li>
                                                <li class="lavel-1"><a href="{{ route('home') }}#catalogue"><span>Catálogo</span></a></li>
                                                <!-- <li class="lavel-1 with--drop slide-dropdown"><a href="#"><span>Project</span></a>
                                                    <ul class="dropdown__menu">
                                                        <li><a href="project.html"><span>Projects</span></a></li>
                                                        <li><a href="project-details.html"><span>Project Details</span></a></li>
                                                    </ul>
                                                </li> -->
                                                <li class="lavel-1"><a href="{{ route('contact.view') }}"><span>Contacto</span></a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <!-- Mainmenu Wrap -->
                                <!-- Header Right -->
                                <div class="header-right">
                                    <a href="#" class="btn p-0 d-none d-md-block d-lg-none d-xl-block">
                                        <span class="icon-button-rl btn-ex-small rounded-0 w-100 bg-color border border-color text-white">
                                            <span>Llámanos: (81) 1038 2831</span>
                                        </span>
                                    </a>
                                    <!-- Start Hamberger -->
                                    <div class="manu-hamber popup-mobile-click d-block d-lg-none light-version d-block d-xl-none">
                                        <div>
                                            <i></i>
                                        </div>
                                    </div>
                                    <!-- End Hamberger -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Header -->
            <!-- Start Popup Menu -->
            <div class="popup-mobile-manu popup-mobile-visiable">
                <div class="inner">
                    <div class="mobileheader">
                        <div class="logo">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('img/logo/1.png') }}" alt="Hapec Logo">
                            </a>
                        </div>
                        <a class="mobile-close" href="#" aria-label="Close"></a>
                    </div>
                    <div class="menu-content">
                        <ul class="menulist object-custom-menu">
                            <li><a href="{{ route('home') }}"><span>Inicio</span></a></li>
                            <li><a href="{{ route('home') }}#about"><span>Conócenos</span></a></li>
                            <li><a href="{{ route('home') }}#catalogue"><span>Catálogo</span></a></li>
                            <!-- <li class="has-mega-menu"><a href="#"><span>Projects</span></a> -->
                                <!-- End Single List -->
                                <!-- <ul class="object-submenu">
                                    <li class="title">Projects</li>
                                    <li><a href="project.html"><span>Projects</span></a></li>
                                    <li><a href="project-details.html"><span>Project Details</span></a></li>
                                </ul> -->
                                <!-- End Single List -->
                            <!-- </li> -->
                            <li><a href="{{ route('contact.view') }}"><span>Contacto</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Popup Menu -->
        </div>
        <!-- Header end -->
        
        <!-- Main content start -->
        <main class="page-content">
            
            @yield('content')

            <!-- footer part Start -->
            <footer class="footer-part footer-classic bg-light-black">
                <div class="inner text-style-light ptb-60 basic-thine-line">
                    <div class="container">
                        <div class="row text-left justify-content-center">
                            <div class="col-md-6 col-lg-4">
                                <img src="{{ asset('img/logo/2.png') }}" alt="Hapec Logo" class="logo-footer">
                                <p class="footer-links mt-3">
                                    <a href="{{ route('home') }}" class="link-1">Inicio</a>
                                    <a href="{{ route('home') }}#catalogue">Catálogo</a>
                                    <a href="{{ route('contact.view') }}">Contacto</a>
                                </p>
                                <ul class="social-icon liquid-animate theme-color icon-size-small text-left mt-20">
                                    <li class="facebook"><a href="https://www.facebook.com/hapecdistribuidora/" target="_blank" class="link rounded-0" aria-label="Facebook"><i class="fab fa-facebook"></i></a></li>
                                    <li class="linkedin"><a href="https://www.linkedin.com/company/hapecdistribuidora/" target="_blank" class="link rounded-0" aria-label="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-lg-4 mt-30 mt-lg-0">
                                <div class="contact-mata">
                                    <i class="fa fa-map-marker"></i>
                                    <p><span>Álvaro Obregón 327 </span>- Centro, Monterrey.</p>
                                </div>
                                <div class="contact-mata">
                                    <i class="fa fa-phone"></i>
                                    <p>(81) 1038 2831</p>
                                </div>
                                <div class="contact-mata">
                                    <i class="fa fa-envelope"></i>
                                    <p><a href="mailto:info@hapec.com.mx">info@hapec.com.mx</a></p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 mt-30 mt-lg-0 text-left text-md-center text-lg-left">
                                <h3>Nosotros</h3>
                                <p>Empresa mexicana líder en el rubro de distribución de materiales para construcción. Contamos con una amplia gama de productos que cubren cada una de las necesidades de nuestros clientes.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="footer-copyright">
                        <div class="copyright py-3">
                            <p class="text-center text-white-50 mb-0">&copy; 2021 Design By <a class="text-white hover-text-color">Valtre</a></p>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- footer part end -->
        </main><!-- End main -->
        <!-- Scroll to top -->
        <a href="#" id="scroll-top" class="scroll-top" aria-label="Arrow Up">
            <i class="ti-arrow-up"></i>
        </a>
    </div> <!-- End Wrapper -->
    <!-- jquery -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <!-- Plugins js -->
    <script src="{{asset('js/plugins.js')}}"></script>
    <!-- custom js -->
    <script src="{{asset('js/custom.js')}}"></script>
    <!-- script js -->
    <script src="{{asset('js/script.js')}}"></script>
    <script src="{{ asset('js/app.js') }}"></script>

    @yield('js')
</body>

</html>