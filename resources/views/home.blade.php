<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    
    <!--====== Title ======-->
    <title>Ram Residency</title>
    
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <!-- <link rel="shortcut icon" href="{{asset('frontend/assets/images/favicon.png')}}" type="image/png"> -->
    @include('includes.favicon')
        
    <!--====== Magnific Popup CSS ======-->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/magnific-popup.css')}}">
        
    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/slick.css')}}">
        
    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/LineIcons.css')}}">
        
    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">
    
    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/default.css')}}">
    
    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/home_s.css')}}">
    
</head>

<body>
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->
   
    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->
    
    <!--====== NAVBAR TWO PART START ======-->

    
    <!--====== NAVBAR TWO PART START ======-->

    <section class="navbar-area sticky">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">

                        <a class="navbar-brand " href="#"><img class="img-fluid logo_img"
                                src="{{ asset('frontend/images/logo12-01.png') }}"
                                alt="Company Logo" /></a>

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTwo"
                            aria-controls="navbarTwo" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarTwo">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active"><a class="page-scroll" href="#">home</a></li>
                                <li class="nav-item"><a class="page-scroll" href="#">Services</a></li>
                                <li class="nav-item"><a class="page-scroll" href="{{route('loginForm')}}">Login</a></li>
                                <li class="nav-item"><a class="page-scroll" href="{{route('registerForm')}}">Registration</a></li>
                            </ul>
                        </div>

                        <!-- <div class="navbar-btn d-none d-sm-inline-block">
                            <ul>
                                <li class="nav-item"><a class="page-scroll registration_button"
                                        href="{{route('registerForm')}}">Registration</a></li>
                            </ul>
                        </div> -->
                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== NAVBAR TWO PART ENDS ======-->

    {{-- slider section --}}

    <div class=" slider_section d-md-flex align-items-center ">
        <div class="col-lg-6 col-sm-12">
            <div class="slider-content">

                <h1 class="slider_title"> RM Delivery Service LLC </h1>
                <p class="slider_text">২০২২ সাল থেকে সুনামের সহিত দুবাইয়ে খাদ্যপণ্য, ঔষুধ,
                    নিত্যপ্রয়োজনীয় পণ্য এবং পার্সেল ডেলিভারি সার্ভিস প্রদান করে আসছে।</p>
            </div>

        </div> <!-- container -->
        <div class="slider-image-box col-lg-6 col-sm-12">
            <div class="slider-image">
                <img src="{{ asset('frontend/assets/images/slider/slider_3_copy.jpg') }}" class="img-fluid" alt="Hero">
            </div> <!-- slider-imgae -->
        </div> <!-- slider-imgae box -->
    </div> <!-- carousel-item -->
    <!--====== SLIDER PART ENDS ======-->
    
    <!--====== FEATRES TWO PART START ======-->

    <section id="services" class="features-area" style="padding-top: 60px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-title text-center pb-10">
                        <h3 class="title">Our Services</h3>
                        <!-- <p class="text">Stop wasting time and money designing and managing a website that doesn’t get results. Happiness guaranteed!</p> -->
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center d-flex align-items-stretch">
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features mt-40">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title"><a href="#">Hire People</a></h4>
                            <div class="features-icon">
                                <i class="lni lni-brush"></i>
                                <img class="shape" src="{{asset('frontend/assets/images/f-shape-1.svg')}}" alt="Shape">
                            </div>
                        </div>
                        <div class="features-content">
                            <p class="text">Our employment solution to the commerce enterprises, and to meet the needs of our clients, we recruit employees from a variety of categories and potentials.</p>
                            <a class="features-btn" href="#">LEARN MORE</a>
                        </div>
                    </div> <!-- single features -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features mt-40">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title"><a href="#">Trained Them</a></h4>
                            <div class="features-icon">
                                <i class="lni lni-layout"></i>
                                <img class="shape" src="{{asset('frontend/assets/images/f-shape-1.svg')}}" alt="Shape">
                            </div>
                        </div>
                        <div class="features-content">
                            <p class="text">During the second stage of our recruitment, we provide proper guidance and train them through various development.</p>
                            <a class="features-btn" href="#">LEARN MORE</a>
                        </div>
                    </div> <!-- single features -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features mt-40">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title"><a href="#">Deploy Them</a></h4>
                            <div class="features-icon">
                                <i class="lni lni-bolt"></i>
                                <img class="shape" src="{{asset('frontend/assets/images/f-shape-1.svg')}}" alt="Shape">
                            </div>
                        </div>
                        <div class="features-content">
                            <p class="text">In the last phase, we distribute them to the required delivery companies in accordance with their requirements..</p>
                            <a class="features-btn" href="#">LEARN MORE</a>
                        </div>
                    </div> <!-- single features -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== FEATRES TWO PART ENDS ======-->
    <!--====== FOOTER PART START ======-->

    <section class="footer-area footer-dark">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="footer-logo text-center">
                        <a class="mt-30" href="index.html"><img src="{{ asset('frontend/images/logo12-01.png') }}" class="img-fluid logo_img" alt="Logo"></a>
                    </div> <!-- footer logo -->
                    <ul class="social text-center mt-60">
                        <li><a href="https://facebook.com/uideckHQ"><i class="lni lni-facebook-filled"></i></a></li>
                        <li><a href="https://twitter.com/uideckHQ"><i class="lni lni-twitter-original"></i></a></li>
                        <li><a href="https://instagram.com/uideckHQ"><i class="lni lni-instagram-original"></i></a></li>
                        <li><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
                    </ul> <!-- social -->
                    <div class="footer-support text-center">
                        <span class="number">+8801234567890</span>
                        <span class="mail">support@ramagencey.com</span>
                    </div>
                    <div class="copyright text-center mt-35">
                        <p class="text">Designed by <a href="#" rel="nofollow">Entertech</a></p>
                    </div> <!--  copyright -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== FOOTER PART ENDS ======-->
    
    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->    

    <!--====== PART START ======-->

<!--
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-">
                    
                </div>
            </div>
        </div>
    </section>
-->

    <!--====== PART ENDS ======-->

    <!--====== Jquery js ======-->
    <script src="{{asset('frontend/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/vendor/modernizr-3.7.1.min.js')}}"></script>
    
    <!--====== Bootstrap js ======-->
    <script src="{{asset('frontend/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
    
    <!--====== Slick js ======-->
    <script src="{{asset('frontend/assets/js/slick.min.js')}}"></script>
    
    <!--====== Magnific Popup js ======-->
    <script src="{{asset('frontend/assets/js/jquery.magnific-popup.min.js')}}"></script>
    
    <!--====== Ajax Contact js ======-->
    <script src="{{asset('frontend/assets/js/ajax-contact.js')}}"></script>
    
    <!--====== Isotope js ======-->
    <script src="{{asset('frontend/assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/isotope.pkgd.min.js')}}"></script>
    
    <!--====== Scrolling Nav js ======-->
    <script src="{{asset('frontend/assets/js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/scrolling-nav.js')}}"></script>
    
    <!--====== Main js ======-->
    <script src="{{asset('frontend/assets/js/main.js')}}"></script>
    
</body>

</html>
