@extends('layouts.site')

@section('content')
<!-- Slider part start -->
<section class="sl-hero">
    <div id="sl-hero-props-carousel-1" class="carousel slide sl-hero-props-carousel-1" data-ride="carousel" data-pause="false" data-interval="7000">
        <ol class="carousel-indicators container">
            <li data-target="#sl-hero-props-carousel-1" data-slide-to="0" class="bg-cover bg-center active" data-bg-image="{{ asset('img/slider/architecture-slide-1.jpg') }}"></li>
            <li data-target="#sl-hero-props-carousel-1" data-slide-to="1" class="bg-cover bg-center" data-bg-image="{{ asset('img/slider/architecture-slide-2.jpg') }}"></li>
            <li data-target="#sl-hero-props-carousel-1" data-slide-to="2" class="bg-cover bg-center" data-bg-image="{{ asset('img/slider/architecture-slide-3.jpg') }}"></li>
            <li data-target="#sl-hero-props-carousel-1" data-slide-to="3" class="bg-cover bg-center" data-bg-image="{{ asset('img/slider/architecture-slide-4.jpg') }}"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active" data-slide="0">
                <div class="sl-hero-bg bg-cover bg-center" data-bg-image="{{ asset('img/slider/architecture-slide-1.jpg') }}"></div>
                <div class="sl-caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-md-8 col-lg-6">
                                <div class="sl-caption-prop-title">Materiales<br>Para la Construcción.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" data-slide="1">
                <div class="sl-hero-bg bg-cover bg-center" data-bg-image="{{ asset('img/slider/architecture-slide-2.jpg') }}"></div>
                <div class="sl-caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-md-8 col-lg-6">
                                <div class="sl-caption-prop-title">Herramientas y Equipo Eléctrico</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" data-slide="2">
                <div class="sl-hero-bg bg-cover bg-center" data-bg-image="{{ asset('img/slider/architecture-slide-3.jpg') }}"></div>
                <div class="sl-caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-md-8 col-lg-6">
                                <div class="sl-caption-prop-title">Plomería, Abrasivos<br>y Herramientas</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" data-slide="3">
                <div class="sl-hero-bg bg-cover bg-center" data-bg-image="{{ asset('img/slider/architecture-slide-4.jpg') }}"></div>
                <div class="sl-caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-md-8 col-lg-6">
                                <div class="sl-caption-prop-title">Equipo de Protección y Herramientas</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sl-carousel-controls">
            <a class="sl-carousel-control-prev" role="button" data-slide="prev">
                <svg xmlns="http://www.w3.org/2000/svg" width="32.414" height="20.828" viewBox="0 0 32.414 20.828">
                    <g id="Group_30" data-name="Group 30" transform="translate(-1845.086 -1586.086)">
                        <line id="Line_2" data-name="Line 2" x1="30" transform="translate(1846.5 1596.5)" fill="none" stroke="#333" stroke-linecap="round" stroke-width="2" />
                        <line id="Line_3" data-name="Line 3" x1="9" y2="9" transform="translate(1846.5 1587.5)" fill="none" stroke="#333" stroke-linecap="round" stroke-width="2" />
                        <line id="Line_4" data-name="Line 4" x1="9" y1="9" transform="translate(1846.5 1596.5)" fill="none" stroke="#333" stroke-linecap="round" stroke-width="2" />
                    </g>
                </svg>
            </a>
            <a class="sl-carousel-control-next" role="button" data-slide="next">
                <svg xmlns="http://www.w3.org/2000/svg" width="32.414" height="20.828" viewBox="0 0 32.414 20.828">
                    <g id="Symbol_1_1" data-name="Symbol 1 – 1" transform="translate(-1847.5 -1589.086)">
                        <line id="Line_5" data-name="Line 2" x2="30" transform="translate(1848.5 1599.5)" fill="none" stroke="#333" stroke-linecap="round" stroke-width="2" />
                        <line id="Line_6" data-name="Line 3" x2="9" y2="9" transform="translate(1869.5 1590.5)" fill="none" stroke="#333" stroke-linecap="round" stroke-width="2" />
                        <line id="Line_7" data-name="Line 4" y1="9" x2="9" transform="translate(1869.5 1599.5)" fill="none" stroke="#333" stroke-linecap="round" stroke-width="2" />
                    </g>
                </svg>
            </a>
        </div>
    </div>
    <div class="carousel slide sl-hero-props-carousel-1-prices" data-ride="carousel" data-pause="false" data-interval="false">
        <div class="carousel-inner">
            <div class="carousel-item active" data-slide="0">
                <div class="sl-progress"></div>
                <!-- <div class="sl-price"><span>$890,000</span></div> -->
                <a href="#catalogue" class="sl-cta text-uppercase sl-animate">Más Información</a>
            </div>
            <div class="carousel-item" data-slide="1">
                <div class="sl-progress"></div>
                <!-- <div class="sl-price"><span>$2,675</span></div> -->
                <a href="#catalogue" class="sl-cta text-uppercase sl-animate">Más Información</a>
            </div>
            <div class="carousel-item" data-slide="2">
                <div class="sl-progress"></div>
                <!-- <div class="sl-price"><span>$960,000</span></div> -->
                <a href="#catalogue" class="sl-cta text-uppercase sl-animate">Más Información</a>
            </div>
            <div class="carousel-item" data-slide="3">
                <div class="sl-progress"></div>
                <!-- <div class="sl-price"><span>$7,995</span></div> -->
                <a href="#catalogue" class="sl-cta text-uppercase sl-animate">Más Información</a>
            </div>
        </div>
    </div>
</section>
<!-- /Slider part start -->

<!-- About Us Start -->
<section id="about" class="position-relative bg-white ptb-100 ptb-md-80 ptb-sm-60 z-index-2 parallax-scene">
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-title text-center mb-5">
                <h2>Conoce Más De Nosotros<br></h2>
                <p class="text-color font-size-18">Con nuestro amplio catálogo abarcamos tu próxima construcción</p>
            </div>
        </div>
        <div class="row align-items-center justify-content-md-between">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-5 mx-auto">
                        <article class="box-icon-classic mb-4 text-center">
                            <div class="d-flex align-items-center justify-content-center justify-content-md-center ">
                                <h3 class="mr-2 mb-0 font-size-70">01</h3>
                                <h6 class="box-icon-classic-title font-size-22 mb-0 text-left"><a class="text-dark" href="#">Empresa <br>Líder</a></h6>
                            </div>
                            <div class="box-icon-classic-text font-size-18">
                                Somos una empresa mexicana líder en el rubro de distribución de materiales para construcción. Contamos con una amplia gama de productos que cubren cada una de las necesidades de nuestros clientes y sus proyectos.
                            </div>
                        </article>
                    </div>
                    {{-- <div class="col-md-4">
                        <article class="box-icon-classic mb-4">
                            <div class="d-flex align-items-center justify-content-center justify-content-md-start">
                                <h3 class="mr-2 mb-0 font-size-70">02</h3>
                                <h6 class="box-icon-classic-title font-size-22  mb-0"><a class="text-dark" href="#">Years</a></h6>
                            </div>
                            <div class="box-icon-classic-text font-size-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore </div>
                        </article>
                    </div>
                    <div class="col-md-4">
                        <article class="box-icon-classic mb-4">
                            <div class="d-flex align-items-center justify-content-center justify-content-md-start">
                                <h3 class="mr-2 mb-0 font-size-70">03</h3>
                                <h6 class="box-icon-classic-title font-size-22  mb-0"><a class="text-dark" href="#">Awards</a></h6>
                            </div>
                            <div class="box-icon-classic-text font-size-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore </div>
                        </article>
                    </div> --}}
                </div>
            </div>
            <!-- <div class="col-md-12 col-lg-12 mt-30">
                <div class="inset-xl-left-35 section-title text-center text-md-left">
                    <div class="wow blurIn">
                        <div class="position-relative w-100 shadow-large">
                            <img src="public/img/bg/bg-9.jpg" alt="video-image">
                            <div class="video-player">
                                <a class="play-button video-popup bg-white text-color pulsing" href="https://www.youtube.com/watch?v=oyA7Ucnmje4" aria-label="Video Popup"><i class="fa fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
    <div class="layer-wrap layer-2">
        <div class="layer d-none d-md-block" data-depth="0.4"><img src="{{ asset('img/2.png') }}" alt="architecture_img" width="694" height="539"></div>
    </div>
</section>
<!-- About us end -->

<section class="bg-light-black ptb-100 ptb-md-80 ptb-sm-60">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-lg-6">
                <div class="section-title dark-version text-left text-md-left">
                    <span class="text-color">Conoce Nuestros Servicios</span>
                    <h2>Nos Especializamos En Todo Para Tu Siguiente Construcción</h2>
                    <div class="sl-list-2 style-2">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="list-header with-number with-number--theme">
                                    <div class="marker">01.</div>
                                    <div class="title-wrap">
                                        <p>Materiales Básicos Para Construcción</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="list-header with-number with-number--theme">
                                    <div class="marker">02.</div>
                                    <div class="title-wrap">
                                        <p>Equipo Y Material Eléctrico</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="list-header with-number with-number--theme">
                                    <div class="marker">03.</div>
                                    <div class="title-wrap">
                                        <p>Todo Para Plomería</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="list-header with-number with-number--theme">
                                    <div class="marker">04.</div>
                                    <div class="title-wrap">
                                        <p>Abrasivos Y Herramientas</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="list-header with-number with-number--theme">
                                    <div class="marker">05.</div>
                                    <div class="title-wrap">
                                        <p>Equipo De Protección</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <img src="{{ asset('img/component/architecture-1.jpg') }}" class="img-fluid shadow-large" alt="architecture-image">
            </div>
        </div>
    </div>
</section>

<section id="catalogue" class="position-relative bg-white ptb-100 ptb-md-80 ptb-sm-60 z-index-2 parallax-scene">
    <div class="container">
        <div class="row align-items-center justify-content-md-between">
            <div class="col-md-4 col-lg-6">
                <div class="row">
                    <div class="col-sm-4 col-md-12 col-xl-11">
                        <article class="box-icon-classic mb-4">
                            <div class="box-icon-classic-header">
                                <img src="{{ asset('svg/hammer.svg') }}" alt="" width="50px" height="50px" />
                                <div class="d-flex flex-column">
                                    <h6 class="box-icon-classic-title font-size-22 mb-0"><a class="text-dark" href="#">Herramientas</a></h6>
                                    <p class="box-icon-classic-text font-size-16 text-black mb-0">Herramientas básicas para tu obra.</p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-4 col-md-12 col-xl-11">
                        <article class="box-icon-classic mb-4">
                            <div class="box-icon-classic-header">
                                <div class="box-icon-classic-icon">
                                    <img src="{{ asset('svg/brickwall.svg') }}" alt="Brickwall Icon" width="50px" height="50px">
                                </div>
                                <div class="d-flex flex-column">
                                    <h6 class="box-icon-classic-title font-size-22 mb-0"><a class="text-dark" href="#">Materiales</a></h6>
                                    <p class="box-icon-classic-text font-size-16 text-black mb-0">Materiales de construcción; yeso, arena, block, etc.</p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-4 col-md-12 col-xl-11">
                        <article class="box-icon-classic mb-4">
                            <div class="box-icon-classic-header">
                                <div class="box-icon-classic-icon novi-icon ti-light-bulb"></div>
                                <div class="d-flex flex-column">
                                    <h6 class="box-icon-classic-title font-size-22 mb-0"><a class="text-dark" href="#">Eléctrico</a></h6>
                                    <p class="box-icon-classic-text font-size-16 text-black mb-0">Equipo de protección, herramientas y material eléctrico.</p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-4 col-md-12 col-xl-11">
                        <article class="box-icon-classic mb-4">
                            <div class="box-icon-classic-header">
                                <img src="{{ asset('svg/helmet.svg') }}" alt="Brickwall Icon" width="50px" height="50px">
                                <div class="d-flex flex-column">
                                    <h6 class="box-icon-classic-title font-size-22 mb-0"><a class="text-dark" href="#">Equipo de Protección</a></h6>
                                    <p class="box-icon-classic-text font-size-16 text-black mb-0">Cumple con los estándares de seguridad.</p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
            <div class="col-md-7 col-lg-6">
                <div class="section-title mt-5 mt-lg-0">
                    <h2 class="text-center text-md-left">Descarga nuestro catálogo</h2>
                    <div class="form-style-1 context-dark">
                        <!-- RD Mailform-->
                        <form action="{{ route('download.catalogue') }}" method="POST" class="rd-mailform text-left p-lg-5">
                            @csrf
                            <button id="catalogue-form-submit-btn" type="submit" class="btn p-0 w-100" aria-label="Submit Button">
                                <span class="icon-button-rl btn-ex-small active rounded-0 w-100 bg-color border-0 font-size-16">
                                    <span>Descargar</span>
                                    <i class="fa fa-arrow-down bg-color shadow-none" aria-hidden="true"></i>
                                </span>
                            </button>
                            <p class="wow fadeInUp text-color mt-2" data-wow-delay=".05s">Obtén nuestro catálogo de productos.</p>
                        </form>
                    </div>
                    <p id="alert-catalogue-downloaded" class="alert alert-success font-size-18 text-center mt-2" role="alert" style="display: none;">
                        ¡Gracias por descargar nuestro catálogo!
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="layer-wrap layer-1">
        <div class="layer d-none d-md-block" data-depth="0.4">
            <img src="{{ asset('img/1.png') }}" alt="architecture_img" width="694" height="539">
        </div>
    </div>
</section>

<!-- <section class="feature-property-part bg-light-black ptb-100 ptb-md-80 ptb-sm-60">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5 col-lg-4">
                <div class="section-title dark-version text-center text-md-left mb-5 mb-md-0">
                    <h2>Future Properties</h2>
                    <p class="text-color">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a href="#" class="btn p-0 mt-20">
                        <span class="icon-button-rl font-size-14 bg-transparent hover-bg-color border hover-border-color border-white rounded-0">
                            <span class="text-white">Browse All</span>
                            <i class="fa fa-arrow-right bg-transparent shadow-none" aria-hidden="true"></i>
                        </span>
                    </a>
                </div>
            </div>
            <div class="col-md-7 col-lg-8">
                <div class="feature-slider owl-carousel owl-theme">
                    <div class="item">
                        <div class="properties fancybox-hover-block" data-bg-image="public/img/component/slide1.jpg" data-overlay="3">
                            <div class="fancy-box-contents">
                                <div class="fancy-box-header mb-4">
                                    <p>Chic Apartment In Downtown</p>
                                    <span class="price mb-3">$1,30,230</span>
                                    <span class="features">350Sq. | 2 Bed | 2 Hall</span>
                                </div>
                                <div class="fancy-box-info">
                                    <a href="#" class="btn mb-4 p-0">
                                        <span class="icon-button-rl btn-link p-0 m-0">
                                            <span class="text-white text-uppercase">View Details</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="properties fancybox-hover-block" data-bg-image="public/img/component/slide2.jpg" data-overlay="3">
                            <div class="fancy-box-contents">
                                <div class="fancy-box-header mb-4">
                                    <p>Chic Apartment In Downtown</p>
                                    <span class="price mb-3">$1,30,230</span>
                                    <span class="features">350Sq. | 2 Bed | 2 Hall</span>
                                </div>
                                <div class="fancy-box-info">
                                    <a href="#" class="btn mb-4 p-0">
                                        <span class="icon-button-rl btn-link p-0 m-0">
                                            <span class="text-white text-uppercase">View Details</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="properties fancybox-hover-block" data-bg-image="public/img/component/slide3.jpg" data-overlay="3">
                            <div class="fancy-box-contents">
                                <div class="fancy-box-header mb-4">
                                    <p>Chic Apartment In Downtown</p>
                                    <span class="price mb-3">$1,30,230</span>
                                    <span class="features">350Sq. | 2 Bed | 2 Hall</span>
                                </div>
                                <div class="fancy-box-info">
                                    <a href="#" class="btn mb-4 p-0">
                                        <span class="icon-button-rl btn-link p-0 m-0">
                                            <span class="text-white text-uppercase">View Details</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="properties fancybox-hover-block" data-bg-image="public/img/component/slide4.jpg" data-overlay="3">
                            <div class="fancy-box-contents">
                                <div class="fancy-box-header mb-4">
                                    <p>Chic Apartment In Downtown</p>
                                    <span class="price mb-3">$1,30,230</span>
                                    <span class="features">350Sq. | 2 Bed | 2 Hall</span>
                                </div>
                                <div class="fancy-box-info">
                                    <a href="#" class="btn mb-4 p-0">
                                        <span class="icon-button-rl btn-link p-0 m-0">
                                            <span class="text-white text-uppercase">View Details</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<!-- Intro part start -->
<!-- <section class="intro-section ptb-100 ptb-md-80 ptb-sm-60">
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-title text-center mb-5">
                <h2>Latest Projects</h2>
                <p class="text-color">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore </p>
            </div>
        </div>
        <div class="grid">
            <div class="column-xs-12">
                <ul class="slider architect-project-carousel owl-carousel owl-theme pl-0 pl-md-auto">
                    <li class="slider-item">
                        <div class="grid vertical">
                            <div class="column-xs-12 column-md-2 d-none d-md-block">
                                <div class="intro">
                                    <a href="#">
                                        <h3 class="title bg-light-black font-weight-700"><span>Explore Kyoto</span></h3>
                                    </a>
                                </div>
                            </div>
                            <div class="column-xs-12 column-md-10">
                                <div class="image-holder">
                                    <img src="public/img/slider/architecture-1.jpg" alt="architecture-inspire">
                                </div>
                                <div class="grid">
                                    <div class="column-xs-12 column-md-9 ">
                                        <p class="description mt-3">Kyoto is famous for its numerous classical Buddhist temples, gardens, imperial palaces.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="slider-item">
                        <div class="grid vertical">
                            <div class="column-xs-12 column-md-2 hide-mobile d-none d-md-block">
                                <div class="intro">
                                    <a href="#">
                                        <h3 class="title bg-light-black font-weight-700"><span>Chic Apartment</span></h3>
                                    </a>
                                </div>
                            </div>
                            <div class="column-xs-12 column-md-10">
                                <div class="image-holder">
                                    <img src="public/img/slider/architecture-2.jpg" alt="architecture-inspire">
                                </div>
                                <div class="grid">
                                    <div class="column-xs-12 column-md-9">
                                        <p class="description mt-3">Tokyo, Japan’s busy capital, mixes the ultramodern and the traditional, from neon-lit skyscrapers to historic temples.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section> -->
<!-- Intro Part end -->
<!-- Team Part Start-->
<!-- <section class="team-part ptb-100 ptb-md-80 ptb-sm-60 gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-title text-center mb-5">
                <h2>Our Team</h2>
                <p class="text-color">Lorem ipsum dolor sit amet, consectetur</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="single-blog-item">
                    <div class="single-blog-img text-center">
                        <img src="public/img/team/t1.jpg" alt="artist">
                    </div>
                    <div class="single-text">
                        <div class="single-blog-text bg-light-black text-center">
                            <h3>John Doe</h3>
                            <p class="text-color font-size-14">Sr. Architecture</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="single-blog-item">
                    <div class="single-blog-img text-center">
                        <img src="public/img/team/t2.jpg" alt="artist">
                    </div>
                    <div class="single-text">
                        <div class="single-blog-text bg-light-black text-center">
                            <h3>Rose Meri</h3>
                            <p class="text-color font-size-14">Interior Designer</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="single-blog-item">
                    <div class="single-blog-img text-center">
                        <img src="public/img/team/t3.jpg" alt="artist">
                    </div>
                    <div class="single-text">
                        <div class="single-blog-text bg-light-black text-center">
                            <h3>Ramsan Deo</h3>
                            <p class="text-color font-size-14">Infrastructure Head</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="single-blog-item">
                    <div class="single-blog-img text-center">
                        <img src="public/img/team/t4.jpg" alt="artist">
                    </div>
                    <div class="single-text">
                        <div class="single-blog-text bg-light-black text-center">
                            <h3>Roles Looc</h3>
                            <p class="text-color font-size-14">Sr. Interior Designer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- Team Part end -->
<!-- Testimonial Part start -->
<!-- <section class="position-relative architecture-style bg-light-black ptb-100 ptb-md-80 ptb-sm-60">
    <div class="container">
        <div class="testimonial-classic architecture-style square-dots p-0 p-xl-5 owl-carousel owl-theme">
            <div class="item">
                <div class="clients d-flex align-items-center">
                    <div class="client-image img-small">
                        <img src="public/img/team/1.jpg" alt="team">
                    </div>
                    <div class="client-content ml-3">
                        <p class="font-size-20 client-name text-white">Barian amali</p>
                        <p class="designation text-color mb-0">Manager</p>
                    </div>
                </div>
                <div class="description mt-4">
                    <p class="text-white">
                        "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged."</p>
                </div>
            </div>
            <div class="item">
                <div class="clients d-flex align-items-center">
                    <div class="client-image img-small">
                        <img src="public/img/team/2.jpg" alt="team">
                    </div>
                    <div class="client-content ml-3">
                        <p class="font-size-20 client-name text-white">Barian amali</p>
                        <p class="designation text-color mb-0">Manager</p>
                    </div>
                </div>
                <div class="description mt-4">
                    <p class="text-white">
                        "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged."</p>
                </div>
            </div>
            <div class="item">
                <div class="clients d-flex align-items-center">
                    <div class="client-image img-small">
                        <img src="public/img/team/3.jpg" alt="team">
                    </div>
                    <div class="client-content ml-3">
                        <p class="font-size-20 client-name text-white">Barian amali</p>
                        <p class="designation text-color mb-0">Manager</p>
                    </div>
                </div>
                <div class="description mt-4">
                    <p class="text-white">
                        "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged."</p>
                </div>
            </div>
        </div>
        <div class="quote-icon text-right d-none d-md-block">
            <img src="public/img/icons/quote-square.png" class="pr-5" alt="quotes">
        </div>
    </div>
</section> -->
<!-- blog part start -->
<!-- <section class="position-relative ptb-100 ptb-md-80 ptb-sm-60">
    <div class="container">
        <div class="row mb-4 align-items-center">
            <div class="col-md-8 section-title text-center text-md-left">
                <h2>Latest blog</h2>
                <p class="text-color">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore </p>
            </div>
            <div class="col-md-4 clearfix d-none d-md-block">
                <a href="blog.html" class="btn p-0 float-right">
                    <span class="icon-button-rl btn-ex-small rounded-0 w-100 bg-white text-muted hover-text-white hover-bg-color border-color">
                        <span>View More</span>
                    </span>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="post blog2">
                    <a class="post-img" href="blog-details.html"><img src="public/img/blog/ar-1.jpg" alt="architecture blog 1"></a>
                    <div class="post-body p-4">
                        <h5 class="card-title"><a href="blog-details.html">What Is Something Every Young Architect Should Know?</a></h5>
                        <p>That dominion stars lights dominion divide years for fourth have don't stars is that he earth it first without heaven in place seed it second morning saying.</p>
                        <div class="post-meta mb-0">
                            <a class="post-category" href="#">boost, energy</a>
                            <a href="#"><i class="far fa-comments"></i> 03</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="post blog2">
                    <a class="post-img" href="blog-details.html"><img src="public/img/blog/ar-2.jpg" alt="architecture blog 2"></a>
                    <div class="post-body p-4">
                        <h5 class="card-title"><a href="blog-details.html">The Best Instagram Accounts to Follow for Construction</a></h5>
                        <p>That dominion stars lights dominion divide years for fourth have don't stars is that he earth it first without heaven in place seed it second morning saying.</p>
                        <div class="post-meta mb-0">
                            <a class="post-category" href="#">mussel</a>
                            <a href="#"><i class="far fa-comments"></i> 03 </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="post blog2">
                    <a class="post-img" href="blog-details.html"><img src="public/img/blog/ar-1.jpg" alt="architecture blog 3"></a>
                    <div class="post-body p-4">
                        <h5 class="card-title"><a href="blog-details.html">End of Architecture School Semester: COVID-19 Edition</a></h5>
                        <p>That dominion stars lights dominion divide years for fourth have don't stars is that he earth it first without heaven in place seed it second morning saying.</p>
                        <div class="post-meta mb-0">
                            <a class="post-category" href="#">curl, chest</a>
                            <a href="#"><i class="far fa-comments"></i> 03 </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- blog part end -->
<!-- clients -->
<!-- <section class="position-relative ptb-100 ptb-md-80 ptb-sm-60 gray-bg">
    <div class="container">
        <div class="brand-area grid-style position-relative">
            <div>
                <div class="row text-center no-gutters">
                    <div class="col-6 col-md-2 col-lg-2">
                        <div class="brand hover-style with-border">
                            <a href="#"><img src="public/img/clients/1.png" alt="client"></a>
                        </div>
                    </div>
                    <div class="col-6 col-md-2 col-lg-2">
                        <div class="brand hover-style with-border">
                            <a href="#"><img src="public/img/clients/2.png" alt="client"></a>
                        </div>
                    </div>
                    <div class="col-6 col-md-2 col-lg-2">
                        <div class="brand hover-style with-border">
                            <a href="#"><img src="public/img/clients/3.png" alt="client"></a>
                        </div>
                    </div>
                    <div class="col-6 col-md-2 col-lg-2">
                        <div class="brand hover-style with-border">
                            <a href="#"><img src="public/img/clients/4.png" alt="client"></a>
                        </div>
                    </div>
                    <div class="col-6 col-md-2 col-lg-2">
                        <div class="brand hover-style with-border">
                            <a href="#"><img src="public/img/clients/5.png" alt="client"></a>
                        </div>
                    </div>
                    <div class="col-6 col-md-2 col-lg-2">
                        <div class="brand hover-style with-border">
                            <a href="#"><img src="public/img/clients/6.png" alt="client"></a>
                        </div>
                    </div>
                    <div class="col-6 col-md-2 col-lg-2">
                        <div class="brand hover-style with-border">
                            <a href="#"><img src="public/img/clients/1_1.png" alt="client"></a>
                        </div>
                    </div>
                    <div class="col-6 col-md-2 col-lg-2">
                        <div class="brand hover-style with-border">
                            <a href="#"><img src="public/img/clients/1_2.png" alt="client"></a>
                        </div>
                    </div>
                    <div class="col-6 col-md-2 col-lg-2">
                        <div class="brand hover-style with-border">
                            <a href="#"><img src="public/img/clients/1_3.png" alt="client"></a>
                        </div>
                    </div>
                    <div class="col-6 col-md-2 col-lg-2">
                        <div class="brand hover-style with-border">
                            <a href="#"><img src="public/img/clients/1_4.png" alt="client"></a>
                        </div>
                    </div>
                    <div class="col-6 col-md-2 col-lg-2">
                        <div class="brand hover-style with-border">
                            <a href="#"><img src="public/img/clients/1_5.png" alt="client"></a>
                        </div>
                    </div>
                    <div class="col-6 col-md-2 col-lg-2">
                        <div class="brand hover-style with-border">
                            <a href="#"><img src="public/img/clients/1_6.png" alt="client"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- clients end -->
@endsection

@section('js')
    <script defer>
        const btnDownloadCatalogue = document.getElementById('catalogue-form-submit-btn')
        const alertDownloadedCatalogue = document.getElementById('alert-catalogue-downloaded')
        btnDownloadCatalogue.addEventListener('click', (e) => {
            setTimeout(() => {
                alertDownloadedCatalogue.style = 'display: block;'
            }, 1200);
        })
    </script>
@endsection
