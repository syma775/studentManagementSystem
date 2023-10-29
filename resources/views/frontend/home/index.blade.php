@extends('frontend.master')

@section('content')
<section class="w3l-main-slider" id="home">
        <div class="companies20-content">
            <div class="owl-one owl-carousel owl-theme">
                <div class="item">
                    <li>
                        <div class="slider-info banner-view">
                            <div class="banner-info">
                                <div class="container">
                                    <div class="banner-info-bg">
                                        <h5>Master the Skills to Drive your Career</h5>
                                        <a class="btn btn-style mt-sm-5 mt-4" href="about.html">
                                            Know More<i class="fa fa-arrow-right ml-2" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
                <div class="item">
                    <li>
                        <div class="slider-info  banner-view banner-top1">
                            <div class="banner-info">
                                <div class="container">
                                    <div class="banner-info-bg">
                                        <h5>Studious is the best choice for everyone</h5>
                                        <a class="btn btn-style mt-sm-5 mt-4" href="about.html">
                                            Know More<i class="fa fa-arrow-right ml-2" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
            </div>
        </div>
    </section>
    <!-- //banner section -->

    <!-- banner bottom section -->
    <section class="w3l-bottom-grids-6 pb-lg-5 text-center" id="services">
        <div class="container">
            <div class="grids-area-hny main-cont-wthree-fea row">
                <div class="col-lg-3 col-md-6 px-lg-2">
                    <div class="area-box color-1">
                        <i class="fa fa-cogs" aria-hidden="true"></i>
                        <h4><a href="courses.html" class="title-head">Engineering & Architecture</a></h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 px-lg-2 mt-md-0 mt-3">
                    <div class="area-box color-2">
                        <i class="fa fa-book" aria-hidden="true"></i>
                        <h4><a href="courses.html" class="title-head">Learning Management</a></h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 px-lg-2 mt-lg-0 mt-3">
                    <div class="area-box color-3">
                        <i class="fa fa-coffee" aria-hidden="true"></i>
                        <h4><a href="courses.html" class="title-head">Business & Management</a></h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 px-lg-2 mt-lg-0 mt-3">
                    <div class="area-box color-4">
                        <i class="fa fa-hourglass-half" aria-hidden="true"></i>
                        <h4><a href="courses.html" class="title-head">Artificial Intelligence</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //banner bottom section -->

    <!-- welcome section -->
    <section class="w3l-feature-8">
        <div class="features-main py-5">
            <div class="container py-md-5 py-4">
                <div class="title-heading-w3 text-center mx-auto mb-5 pb-sm-4">
                    <h3 class="title-main">Welcome to <span>Studious</span></h3>
                </div>
                <div class="row features text-center">
                    <div class="col-lg-4 col-sm-6">
                        <div class="feature-body">
                            <div class="feature-images">
                                <span class="fa fa-graduation-cap" aria-hidden="true"></span>
                            </div>
                            <div class="feature-info mt-4">
                                <a href="about.html">
                                    <h3 class="feature-titel">
                                        Trending Courses
                                    </h3>
                                </a>
                                <p class="feature-text">Lorem ipsum dolor sit amet consectetur adipisicing elit sed do
                                    eiusmod te incididunt</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mt-sm-0 mt-5">
                        <div class="feature-body">
                            <div class="feature-images">
                                <span class="fa fa-users" aria-hidden="true"></span>
                            </div>
                            <div class="feature-info mt-4">
                                <a href="about.html">
                                    <h3 class="feature-titel">Certified Teachers</h3>
                                </a>
                                <p class="feature-text">Lorem ipsum dolor sit amet consectetur adipisicing elit sed do
                                    eiusmod te incididunt</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mt-lg-0 mt-5">
                        <div class="feature-body">
                            <div class="feature-images">
                                <span class="fa fa-book" aria-hidden="true"></span>
                            </div>
                            <div class="feature-info mt-4">
                                <a href="about.html">
                                    <h3 class="feature-titel">Books & Library</h3>
                                </a>
                                <p class="feature-text">Lorem ipsum dolor sit amet consectetur adipisicing elit sed do
                                    eiusmod te incididunt</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //welcome section -->

    <!-- courses section -->
    <div class="w3l-grids-block-5 py-5">
        <div class="container py-md-5 py-4">
            <div class="title-heading-w3 text-center mx-auto mb-5 pb-sm-4">
                <h3 class="title-main">Pick a Course to <span>Get Started</span></h3>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="blog-card-single">
                        <div class="grids5-info position-relative">
                            <img src="{{ asset('/frontend/') }}/{{ asset('/frontend/') }}/assets/images/c1.jpg" alt="" class="img-fluid" />
                            <div class="meta-list">
                                <a href="courses.html">art</a>
                                <a href="courses.html">design</a>
                            </div>
                            <div class="course-price-item">
                                <h6>$400</h6>
                            </div>
                        </div>
                        <div class="content-main-top">
                            <div class="content-top mb-4 mt-3">
                                <ul class="list-unstyled d-flex align-items-center justify-content-between">
                                    <li> <i class="fa fa-signal" aria-hidden="true"></i> Intermediate</li>
                                    <li> <i class="fa fa-clock-o" aria-hidden="true"></i> 10 week</li>
                                </ul>
                            </div>
                            <h4><a href="courses.html">Donec sed teus enime</a></h4>
                            <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <div class="top-content-border d-flex align-items-center justify-content-between mt-5 pt-4">
                                <ul class="rating-list">
                                    <li><a href="#rate"><i class="fa fa-star" aria-hidden="true"></i>
                                        </a></li>
                                    <li><a href="#rate"><i class="fa fa-star" aria-hidden="true"></i>
                                        </a></li>
                                    <li><a href="#rate"><i class="fa fa-star" aria-hidden="true"></i>
                                        </a></li>
                                    <li><a href="#rate"><i class="fa fa-star" aria-hidden="true"></i>
                                        </a></li>
                                    <li><a href="#rate"><i class="fa fa-star" aria-hidden="true"></i>
                                        </a></li>
                                </ul>
                                <a class="btn btn-style btn-style-primary" href="course.html">Know Details<i
                                        class="fa fa-arrow-right ml-2" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-md-0 mt-5">
                    <div class="blog-card-single">
                        <div class="grids5-info position-relative">
                            <img src="{{ asset('/frontend/') }}/assets/images/c2.jpg" alt="" class="img-fluid" />
                            <div class="meta-list">
                                <a href="courses.html">Digital</a>
                                <a href="courses.html">Learn</a>
                                <a href="courses.html">10% off</a>
                            </div>
                            <div class="course-price-item">
                                <h6>$900</h6>
                            </div>
                        </div>
                        <div class="content-main-top">
                            <div class="content-top mb-4 mt-3">
                                <ul class="list-unstyled d-flex align-items-center justify-content-between">
                                    <li> <i class="fa fa-signal" aria-hidden="true"></i> High </li>
                                    <li> <i class="fa fa-clock-o" aria-hidden="true"></i> 10 week</li>
                                </ul>
                            </div>
                            <h4><a href="courses.html">It's enim ad minim ate</a></h4>
                            <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <div class="top-content-border d-flex align-items-center justify-content-between mt-5 pt-4">
                                <ul class="rating-list">
                                    <li><a href="#rate"><i class="fa fa-star" aria-hidden="true"></i>
                                        </a></li>
                                    <li><a href="#rate"><i class="fa fa-star" aria-hidden="true"></i>
                                        </a></li>
                                    <li><a href="#rate"><i class="fa fa-star" aria-hidden="true"></i>
                                        </a></li>
                                    <li><a href="#rate"><i class="fa fa-star" aria-hidden="true"></i>
                                        </a></li>
                                    <li><a href="#rate"><i class="fa fa-star" aria-hidden="true"></i>
                                        </a></li>
                                </ul>
                                <a class="btn btn-style btn-style-primary" href="course.html">Know Details<i
                                        class="fa fa-arrow-right ml-2" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-lg-0 mt-5">
                    <div class="blog-card-single">
                        <div class="grids5-info position-relative">
                            <img src="{{ asset('/frontend/') }}/assets/images/c3.jpg" alt="" class="img-fluid" />
                            <div class="meta-list">
                                <a href="courses.html">Html</a>
                                <a href="courses.html">Java</a>
                            </div>
                            <div class="course-price-item">
                                <h6>$99</h6>
                            </div>
                        </div>
                        <div class="content-main-top">
                            <div class="content-top mb-4 mt-3">
                                <ul class="list-unstyled d-flex align-items-center justify-content-between">
                                    <li> <i class="fa fa-signal" aria-hidden="true"></i> Beginner </li>
                                    <li> <i class="fa fa-clock-o" aria-hidden="true"></i> 10 week</li>
                                </ul>
                            </div>
                            <h4><a href="courses.html">Ullamco laboris nisi uts</a></h4>
                            <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <div class="top-content-border d-flex align-items-center justify-content-between mt-5 pt-4">
                                <ul class="rating-list">
                                    <li><a href="#rate"><i class="fa fa-star" aria-hidden="true"></i>
                                        </a></li>
                                    <li><a href="#rate"><i class="fa fa-star" aria-hidden="true"></i>
                                        </a></li>
                                    <li><a href="#rate"><i class="fa fa-star" aria-hidden="true"></i>
                                        </a></li>
                                    <li><a href="#rate"><i class="fa fa-star" aria-hidden="true"></i>
                                        </a></li>
                                    <li><a href="#rate"><i class="fa fa-star-o" aria-hidden="true"></i>
                                        </a></li>
                                </ul>
                                <a class="btn btn-style btn-style-primary" href="course.html">Know Details<i
                                        class="fa fa-arrow-right ml-2" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-5">
                    <div class="blog-card-single">
                        <div class="grids5-info position-relative">
                            <img src="{{ asset('/frontend/') }}/assets/images/c4.jpg" alt="" class="img-fluid" />
                            <div class="meta-list">
                                <a href="courses.html">Website</a>
                                <a href="courses.html">Wordpress</a>
                            </div>
                            <div class="course-price-item">
                                <h6>$369</h6>
                            </div>
                        </div>
                        <div class="content-main-top">
                            <div class="content-top mb-4 mt-3">
                                <ul class="list-unstyled d-flex align-items-center justify-content-between">
                                    <li> <i class="fa fa-signal" aria-hidden="true"></i> Intermediate</li>
                                    <li> <i class="fa fa-clock-o" aria-hidden="true"></i> 10 week</li>
                                </ul>
                            </div>
                            <h4><a href="courses.html">Donec sed teus enime</a></h4>
                            <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <div class="top-content-border d-flex align-items-center justify-content-between mt-5 pt-4">
                                <ul class="rating-list">
                                    <li><a href="#rate"><i class="fa fa-star" aria-hidden="true"></i>
                                        </a></li>
                                    <li><a href="#rate"><i class="fa fa-star" aria-hidden="true"></i>
                                        </a></li>
                                    <li><a href="#rate"><i class="fa fa-star" aria-hidden="true"></i>
                                        </a></li>
                                    <li><a href="#rate"><i class="fa fa-star" aria-hidden="true"></i>
                                        </a></li>
                                    <li><a href="#rate"><i class="fa fa-star" aria-hidden="true"></i>
                                        </a></li>
                                </ul>
                                <a class="btn btn-style btn-style-primary" href="course.html">Know Details<i
                                        class="fa fa-arrow-right ml-2" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-5">
                    <div class="blog-card-single">
                        <div class="grids5-info position-relative">
                            <img src="{{ asset('/frontend/') }}/assets/images/c5.jpg" alt="" class="img-fluid" />
                            <div class="meta-list">
                                <a href="courses.html">Marketing</a>
                                <a href="courses.html">Edu</a>
                            </div>
                            <div class="course-price-item">
                                <h6>$499</h6>
                            </div>
                        </div>
                        <div class="content-main-top">
                            <div class="content-top mb-4 mt-3">
                                <ul class="list-unstyled d-flex align-items-center justify-content-between">
                                    <li> <i class="fa fa-signal" aria-hidden="true"></i> High </li>
                                    <li> <i class="fa fa-clock-o" aria-hidden="true"></i> 10 week</li>
                                </ul>
                            </div>
                            <h4><a href="courses.html">It's enim ad minim ate</a></h4>
                            <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <div class="top-content-border d-flex align-items-center justify-content-between mt-5 pt-4">
                                <ul class="rating-list">
                                    <li><a href="#rate"><i class="fa fa-star" aria-hidden="true"></i>
                                        </a></li>
                                    <li><a href="#rate"><i class="fa fa-star" aria-hidden="true"></i>
                                        </a></li>
                                    <li><a href="#rate"><i class="fa fa-star" aria-hidden="true"></i>
                                        </a></li>
                                    <li><a href="#rate"><i class="fa fa-star" aria-hidden="true"></i>
                                        </a></li>
                                    <li><a href="#rate"><i class="fa fa-star-o" aria-hidden="true"></i>
                                        </a></li>
                                </ul>
                                <a class="btn btn-style btn-style-primary" href="course.html">Know Details<i
                                        class="fa fa-arrow-right ml-2" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-5">
                    <div class="blog-card-single">
                        <div class="grids5-info position-relative">
                            <img src="{{ asset('/frontend/') }}/assets/images/c6.jpg" alt="" class="img-fluid" />
                            <div class="meta-list">
                                <a href="courses.html">Study</a>
                                <a href="courses.html">Accadamic</a>
                            </div>
                            <div class="course-price-item">
                                <h6>$289</h6>
                            </div>
                        </div>
                        <div class="content-main-top">
                            <div class="content-top mb-4 mt-3">
                                <ul class="list-unstyled d-flex align-items-center justify-content-between">
                                    <li> <i class="fa fa-signal" aria-hidden="true"></i> Beginner </li>
                                    <li> <i class="fa fa-clock-o" aria-hidden="true"></i> 10 week</li>
                                </ul>
                            </div>
                            <h4><a href="courses.html">Ullamco laboris nisi uts</a></h4>
                            <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <div class="top-content-border d-flex align-items-center justify-content-between mt-5 pt-4">
                                <ul class="rating-list">
                                    <li><a href="#rate"><i class="fa fa-star" aria-hidden="true"></i>
                                        </a></li>
                                    <li><a href="#rate"><i class="fa fa-star" aria-hidden="true"></i>
                                        </a></li>
                                    <li><a href="#rate"><i class="fa fa-star" aria-hidden="true"></i>
                                        </a></li>
                                    <li><a href="#rate"><i class="fa fa-star" aria-hidden="true"></i>
                                        </a></li>
                                    <li><a href="#rate"><i class="fa fa-star" aria-hidden="true"></i>
                                        </a></li>
                                </ul>
                                <a class="btn btn-style btn-style-primary" href="course.html">Know Details<i
                                        class="fa fa-arrow-right ml-2" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a class="btn btn-style btn-style-secondary mt-sm-3" href="about.html">
                    Browse more courses<i class="fa fa-arrow-right ml-2" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
    <!-- //courses section -->

    <!-- grids section -->
    <section class="w3l-homeblock1">
        <div class="w3-services-ab py-5">
            <div class="container py-md-5 py-4">
                <div class="w3-services-grids pb-sm-5 mb-sm-4">
                    <div class="row w3-services-right-grid">
                        <div class="col-xl-4">

                        </div>
                        <div class="col-xl-8">
                            <div class="fea-gd-vv row">
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center feature-gd ">
                                        <div class="icon">
                                            <i class="fa fa-american-sign-language-interpreting" aria-hidden="true"></i>
                                        </div>
                                        <div class="icon-info">
                                            <h5>Flexible Classes</h5>
                                            <p> Lorem ipsum dolor sit amet, dolor elit.</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-md-0 mt-4">
                                    <div class="d-flex align-items-center feature-gd">
                                        <div class="icon">
                                            <i class="fa fa-download" aria-hidden="true"></i>
                                        </div>
                                        <div class="icon-info">
                                            <h5>Offline Mode</h5>
                                            <p> Lorem ipsum dolor sit amet, dolor elit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-4 pt-md-2">
                                    <div class="d-flex align-items-center feature-gd ">
                                        <div class="icon">
                                            <i class="fa fa-headphones" aria-hidden="true"></i>
                                        </div>
                                        <div class="icon-info">
                                            <h5>Educator Help</h5>
                                            <p> Lorem ipsum dolor sit amet, dolor elit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-4 pt-md-2">
                                    <div class="d-flex align-items-center feature-gd">
                                        <div class="icon">
                                            <i class="fa fa-play-circle" aria-hidden="true"></i>
                                        </div>
                                        <div class="icon-info">
                                            <h5>Online Classes</h5>
                                            <p> Lorem ipsum dolor sit amet, dolor elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //grids section -->

    <!-- stats -->
    <section class="w3_stats py-sm-5 pt-sm-0 pt-5" id="stats">
        <div class="container py-md-5 py-4">
            <div class="title-heading-w3 text-center mx-auto mb-5 pb-sm-4">
                <h3 class="title-main">Strength in <span>Numbers</span></h3>
                <p class="mt-4 pt-md-2">Similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et
                    dolorum
                    fuga.</p>
            </div>
            <div class="w3-stats">
                <div class="row text-center">
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter">
                            <div class="timer count-title count-number" data-to="6300" data-speed="1500"></div>
                            <p class="count-text">Learners & counting</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mt-sm-0 mt-4">
                        <div class="counter">
                            <div class="timer count-title count-number" data-to="638" data-speed="1500"></div>
                            <p class="count-text">Total courses</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mt-lg-0 mt-4">
                        <div class="counter">
                            <div class="timer count-title count-number" data-to="7600" data-speed="1500"></div>
                            <p class="count-text">Successful students</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mt-lg-0 mt-4">
                        <div class="counter border-right-0">
                            <div class="timer count-title count-number" data-to="36" data-speed="1500"></div>
                            <p class="count-text">Languages</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //stats -->

    <!-- testimonial section -->
    <div class="w3l-cutomer-main-cont">
        <div class="testimonials py-5">
            <div class="container py-md-5 py-4">
                <div class="title-heading-w3 text-center mx-auto mb-5 pb-lg-5">
                    <h3 class="title-main">Student Community <span>Feedback </span></h3>
                </div>
                <div class="row content-sec mt-md-5">
                    <div class="col-lg-4 col-md-6 testi-sections">
                        <div class="testimonials_grid">
                            <p class="sub-test"><q>
                                    Nam libero tempore, cum soluta
                                    nobis est eligendi optio cumque nihil impedit.</q>
                            </p>
                            <div class="d-grid sub-author-con">
                                <div class="testi-img-res">
                                    <img src="{{ asset('/frontend/') }}/assets/images/testi2.jpg" alt="" class="img-fluid" />
                                </div>
                                <div class="testi_grid text-left">
                                    <h5>Petey Cruis</h5>
                                    <p>Caption Here</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-md-0 mt-4 testi-sections">
                        <div class="testimonials_grid">
                            <p class="sub-test"><q>
                                    Nam
                                    libero
                                    tempore, cum soluta
                                    nobis est eligendi optio cumque nihil impedit.</q>
                            </p>
                            <div class="d-grid sub-author-con">
                                <div class="testi-img-res">
                                    <img src="{{ asset('/frontend/') }}/assets/images/testi1.jpg" alt="" class="img-fluid" />
                                </div>
                                <div class="testi_grid text-left">
                                    <h5>Molive Joe</h5>
                                    <p>Caption Here</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-lg-0 mt-4 testi-sections">
                        <div class="testimonials_grid">
                            <p class="sub-test"><q>
                                    Nam
                                    libero
                                    tempore, cum soluta
                                    nobis est eligendi optio cumque nihil impedit.</q>
                            </p>
                            <div class="d-grid sub-author-con">
                                <div class="testi-img-res">
                                    <img src="{{ asset('/frontend/') }}/assets/images/testi3.jpg" alt="" class="img-fluid" />
                                </div>
                                <div class="testi_grid text-left">
                                    <h5>Paige Turner</h5>
                                    <p>Caption Here</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //testimonial section -->

    <!-- team section -->
    <section class="w3l-team py-sm-5 pb-sm-0 pb-5">
        <div class="container py-md-5 py-4">
            <div class="title-heading-w3 text-center mx-auto mb-5 pb-sm-4">
                <h3 class="title-main">World Class <span>Instructors</span></h3>
            </div>
            <div class="row text-center">
                <div class="col-lg-3 col-sm-6">
                    <div class="team-block-single">
                        <div class="team-grids">
                            <a href="#team-single">
                                <img src="{{ asset('/frontend/') }}/assets/images/team1.jpg" class="img-fluid" alt="">
                                <div class="team-info">
                                    <div class="social-icons-section">
                                        <a class="fac" href="#facebook">
                                            <span class="fa fa-facebook"></span>
                                        </a>
                                        <a class="twitter mx-2" href="#twitter">
                                            <span class="fa fa-twitter"></span>
                                        </a>
                                        <a class="google" href="#google-plus">
                                            <span class="fa fa-google-plus"></span>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="team-bottom-block p-4">
                            <h5 class="member mb-1"><a href="#team">Olive Yew</a></h5>
                            <small>Teaches Design</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mt-sm-0 mt-5">
                    <div class="team-block-single">
                        <div class="team-grids">
                            <a href="#team-single">
                                <img src="{{ asset('/frontend/') }}/assets/images/team2.jpg" class="img-fluid" alt="">
                                <div class="team-info">
                                    <div class="social-icons-section">
                                        <a class="fac" href="#facebook">
                                            <span class="fa fa-facebook"></span>
                                        </a>
                                        <a class="twitter mx-2" href="#twitter">
                                            <span class="fa fa-twitter"></span>
                                        </a>
                                        <a class="google" href="#google-plus">
                                            <span class="fa fa-google-plus"></span>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="team-bottom-block p-4">
                            <h5 class="member mb-1 active"><a href="#team">Aida Joe</a></h5>
                            <small>UI/UX Designer</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mt-lg-0 mt-5">
                    <div class="team-block-single">
                        <div class="team-grids">
                            <a href="#team-single">
                                <img src="{{ asset('/frontend/') }}/assets/images/team3.jpg" class="img-fluid" alt="">
                                <div class="team-info">
                                    <div class="social-icons-section">
                                        <a class="fac" href="#facebook">
                                            <span class="fa fa-facebook"></span>
                                        </a>
                                        <a class="twitter mx-2" href="#twitter">
                                            <span class="fa fa-twitter"></span>
                                        </a>
                                        <a class="google" href="#google-plus">
                                            <span class="fa fa-google-plus"></span>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="team-bottom-block p-4">
                            <h5 class="member mb-1"><a href="#team">Teri Dac</a></h5>
                            <small>Teaches Skills</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mt-lg-0 mt-5">
                    <div class="team-block-single">
                        <div class="team-grids">
                            <a href="#team-single">
                                <img src="{{ asset('/frontend/') }}/assets/images/team4.jpg" class="img-fluid" alt="">
                                <div class="team-info">
                                    <div class="social-icons-section">
                                        <a class="fac" href="#facebook">
                                            <span class="fa fa-facebook"></span>
                                        </a>
                                        <a class="twitter mx-2" href="#twitter">
                                            <span class="fa fa-twitter"></span>
                                        </a>
                                        <a class="google" href="#google-plus">
                                            <span class="fa fa-google-plus"></span>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="team-bottom-block p-4">
                            <h5 class="member mb-1"><a href="#team">Anton Bne</a></h5>
                            <small>Web Designer</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //team setion -->

    <!-- about-2 section -->
    <section class="w3l-about-2 pb-5">
        <div class="container pb-md-5 pb-4 mb-5">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-5 about-2-secs-right mb-lg-0 mb-4 text-center">
                    <img src="{{ asset('/frontend/') }}/assets/images/image.png" alt="" class="img-fluid img-responsive m-auto" />
                </div>
                <div class="col-lg-7 about-2-secs-left pr-lg-5">
                    <h3 class="title-style mb-sm-3 mb-2">
                        Not Sure Where to Begin? <br>Contact Now, We will Help you</h3>
                    <p>Consectetur adipiscing elit. Aliquam sit amet
                        efficitur tortor.Uspendisse efficitur orci urna. In et augue ornare, tempor massa in, luctus
                        sapien.</p>
                    <div class="mt-4">
                        <a class="btn btn-style btn-style-secondary mt-3" href="contact.html">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection