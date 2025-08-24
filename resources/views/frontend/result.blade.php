<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Aria is a business focused HTML landing page template built with Bootstrap to help you create lead generation websites for companies and their services.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <!-- Website Title -->
    <title>Test WS Project-Tahap Building</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="{{ asset('assets/front')}}/css/bootstrap.css" rel="stylesheet">
    <link href="{{ asset('assets/front')}}/css/fontawesome-all.css" rel="stylesheet">
    <link href="{{ asset('assets/front')}}/css/swiper.css" rel="stylesheet">
	<link href="{{ asset('assets/front')}}/css/magnific-popup.css" rel="stylesheet">
    <link href="{{ asset('assets/front')}}/css/styles.css" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="{{ asset('assets/front')}}/images/favicon.png">
</head>
<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    

     <!-- Navbar -->
     <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href="index.html"><img src="{{ asset('assets/front')}}/images/logo.svg" alt="alternative"></a>
        
        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="/">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="/">SEARCH</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="/">RECOMMEND</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link page-scroll" href="/">CONTACT</a>
                </li>
            </ul>
            <span class="nav-item social-icons">
                <span class="fa-stack">
                    <a href="#your-link">
                        <span class="hexagon"></span>
                        <i class="fab fa-facebook-f fa-stack-1x"></i>
                    </a>
                </span>
                <span class="fa-stack">
                    <a href="#your-link">
                        <span class="hexagon"></span>
                        <i class="fab fa-linkedin fa-stack-1x"></i>
                    </a>
                </span>
            </span>
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navbar -->


    <!-- Header -->
    <header id="header" class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Your Result " {{ $search }} "</h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->


   
    <!-- Result -->
    <div id="services" class="cards-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    
                 
                @foreach ($result as $item)
                    
                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" style="width: 335px; height: 235px;" src="{{ $item['gambar'] }}" alt="alternative" onerror="this.onerror=null; this.src='/images/placeholder.jpg';">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">{{ $item['nama_tempat'] }}</h3>
                            
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Lokasi :</div>
                                </li>
                            </ul>
                            <p>{{ $item['lokasi'] }}</p>
                        </div>
                        <div class="button-container">
                            <form method="POST" action="/detail">
                                @csrf
                                <input type="hidden" name="src" value="{{ $item['source'] }}">
                                <button type="submit" class="btn-solid-reg page-scroll" >DETAILS</button>
                            </form>
                        </div> <!-- end of button-container -->
                    </div>
                    <!-- end of card -->

                @endforeach

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-2 -->
    <!-- end of services -->
    

    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="text-container about">
                       <h4>Tentang Web Semantic Tourism</h4>
                        <p class="white">
                            Web Semantic Tourism hadir untuk membantu Anda menemukan dan menjelajahi destinasi wisata terbaik dengan mudah. Kami berkomitmen memberikan informasi akurat, rekomendasi terpercaya, dan pengalaman pencarian wisata yang menyenangkan untuk semua traveler.
                        </p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-md-2">
                    <div class="text-container">
                        <h4>Links</h4>
                        <ul class="list-unstyled li-space-lg white">
                            <li>
                                <a class="white" href="#your-link">startupguide.com</a>
                            </li>
                            <li>
                                <a class="white" href="terms-conditions.html">Terms & Conditions</a>
                            </li>
                            <li>
                                <a class="white" href="privacy-policy.html">Privacy Policy</a>
                            </li>
                        </ul>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-md-2">
                    <div class="text-container">
                        <h4>Tools</h4>
                        <ul class="list-unstyled li-space-lg">
                            <li>
                                <a class="white" href="#your-link">startupguide.com</a>
                            </li>
                            <li>
                                <a class="white" href="terms-conditions.html">Terms & Conditions</a>
                            </li>
                            <li class="media">
                                <a class="white" href="privacy-policy.html">Privacy Policy</a>
                            </li>
                        </ul>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-md-2">
                    <div class="text-container">
                        <h4>Partners</h4>
                        <ul class="list-unstyled li-space-lg">
                            <li>
                                <a class="white" href="#your-link">startupguide.com</a>
                            </li>
                            <li>
                                <a class="white" href="terms-conditions.html">Terms & Conditions</a>
                            </li>
                            <li>
                                <a class="white" href="privacy-policy.html">Privacy Policy</a>
                            </li>
                        </ul>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->  
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © 2020 <a href="https://inovatik.com">Template by Inovatik</a></p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->

	
    <!-- Scripts -->
    <script src="{{ asset('assets/front')}}/js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="{{ asset('assets/front')}}/js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="{{ asset('assets/front')}}/js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="{{ asset('assets/front')}}/js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="{{ asset('assets/front')}}/js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="{{ asset('assets/front')}}/js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="{{ asset('assets/front')}}/js/morphext.min.js"></script> <!-- Morphtext rotating text in the header -->
    <script src="{{ asset('assets/front')}}/js/isotope.pkgd.min.js"></script> <!-- Isotope for filter -->
    <script src="{{ asset('assets/front')}}/js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="{{ asset('assets/front')}}/js/scripts.js"></script> <!-- Custom scripts -->
</body>
</html>