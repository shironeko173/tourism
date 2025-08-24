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
    <title>Web Semantic Project</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="{{ asset('assets/front')}}/css/bootstrap.css" rel="stylesheet">
    <link href="{{ asset('assets/front')}}/css/fontawesome-all.css" rel="stylesheet">
    <link href="{{ asset('assets/front')}}/css/swiper.css" rel="stylesheet">
	<link href="{{ asset('assets/front')}}/css/magnific-popup.css" rel="stylesheet">
	<link href="{{ asset('assets/front')}}/css/styles.css" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="{{ asset('assets/front')}}/images/logo1.png">
    <style>
        .element-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }
        .element-item {
            height: 250px; /* Atur tinggi sesuai kebutuhan */
            position: relative;
            overflow: hidden;
        }
        .col-lg-8 {
            height: 350px; /* Atur tinggi sesuai kebutuhan */
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }
        .col-lg-8 img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        } 
    </style>
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
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Aria</a> -->

        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href="/"><img src="{{ asset('assets/front')}}/images/logo.svg" alt="alternative"></a>
        
        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#header">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#search">SEARCH</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#projects">RECOMMEND</a>
                </li>

                <!-- Dropdown Menu -->          
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll" href="#about" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">ABOUT</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="terms-conditions.html"><span class="item-text">TERMS CONDITIONS</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="privacy-policy.html"><span class="item-text">PRIVACY POLICY</span></a>
                    </div>
                </li> --}}
                <!-- end of dropdown menu -->

                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#team">TEAM</a>
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
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-container">
                            <h1>TRAVELING | <span id="js-rotating"  style="color: #1dd8ac;">pleasure, relaxed, comfortable</span></h1>
                            <p class="p-heading p-large">Temukan destinasi wisata terbaik untuk liburan Anda. Nikmati pengalaman traveling yang menyenangkan, santai, dan nyaman bersama kami. Mulai pencarian tempat wisata favorit Anda sekarang!</p>
                            <a class="btn-solid-lg page-scroll" href="#search">SEARCH NOW!</a>
                        </div>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->


    <!-- Search -->
    <div id="search" class="basic-1">
        <div class="container">
            <section id="about" class="about">
                <div class="container" style="max-width: 660px;">
                    <h2 style="text-align: center;">Bingung Mencari Tempat Wisata?</h2>
                    <p style="text-align: center;">Search aja disini! mudah, cepat, dan recommended!</p>
                <form method="POST" action="/result" >
                        @csrf

                    
                  <div class="input-group rounded">
                    <input type="text" class="form-control rounded" placeholder="Search by nama negara" aria-label="Search" aria-describedby="search-addon" name="mysearch" />
                    <button type="submit" class="input-group-text" style="background-color: #14bf98;height: 38px;" id="search-addon">
                      <i class="fas fa-search" style="color: white;"></i>
                    </button>

                </form>  
                  </div><br><br>
                  <p style="text-align: center;">Jelajahi berbagai destinasi wisata menarik dengan mudah dan cepat. Temukan tempat liburan favorit Anda, dapatkan rekomendasi terbaik, dan nikmati pengalaman traveling yang tak terlupakan bersama kami!</p>
                </div>
            </section>
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of search -->




    <!-- Recommend -->
	<div id="projects" class="filter">
		<div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">RECOMMEND</div>
                    <h2>Tempat Wisata Yang Kami Rekomendasikan Kepada Anda</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    <!-- Filter -->
                    <div class="button-group filters-button-group">
                        <a class="button is-checked" data-filter="*"><span>SHOW ALL</span></a>
                        <a class="button" data-filter=".asia"><span>ASIA</span></a>
                        <a class="button" data-filter=".afrika"><span>AFRIKA</span></a>
                        <a class="button" data-filter=".eropa"><span>EUROPA</span></a>
                        <a class="button" data-filter=".australia"><span>AUSTRALIA</span></a>
                    </div> <!-- end of button group -->
                    <div class="grid">

                        @foreach($doc->all('foaf:Asia') as $asia )

                            <div class="element-item asia">
                                <a class="popup-with-move-anim" href="#project-{{$i++}}"><div class="element-item-overlay"><span>{{$asia->get('foaf:placeName')}}</span></div><img src="{{$asia->get('foaf:image')}}" alt="alternative"></a>
                            </div>
                        
                        @endforeach 
                        @foreach($doc->all('foaf:Afrika') as $afrika )

                            <div class="element-item afrika">
                                <a class="popup-with-move-anim" href="#project-{{$i++}}"><div class="element-item-overlay"><span>{{$afrika->get('foaf:placeName')}}</span></div><img src="{{$afrika->get('foaf:image')}}" alt="alternative"></a>
                            </div>
                        
                        @endforeach 
                        @foreach($doc->all('foaf:Eropa') as $eropa )

                            <div class="element-item eropa">
                                <a class="popup-with-move-anim" href="#project-{{$i++}}"><div class="element-item-overlay"><span>{{$eropa->get('foaf:placeName')}}</span></div><img src="{{$eropa->get('foaf:image')}}" alt="alternative"></a>
                            </div>
                        
                        @endforeach 
                        @foreach($doc->all('foaf:Australia') as $australia )

                            <div class="element-item australia">
                                <a class="popup-with-move-anim" href="#project-{{$i++}}"><div class="element-item-overlay"><span>{{$australia->get('foaf:placeName')}}</span></div><img src="{{$australia->get('foaf:image')}}" alt="alternative"></a>
                            </div>
                        
                        @endforeach 
                   

                    </div> <!-- end of grid -->
                    <!-- end of filter -->
                    
                </div> <!-- end of col -->
            </div> <!-- end of row -->
		</div> <!-- end of container -->
    </div> <!-- end of filter -->
    <!-- end of projects -->


    <!-- Project Lightboxes -->
    <!-- Lightbox -->


    @foreach($doc->all('foaf:Asia') as $asia )

        
        <div id="project-{{$j++}}" class="lightbox-basic zoom-anim-dialog mfp-hide">
            <div class="row">
                <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                <div class="col-lg-8">
                    <img class="img-fluid" src="{{$asia->get('foaf:image')}}">
                </div> <!-- end of col -->
                <div class="col-lg-4">
                    <h3>{{$asia->get('foaf:placeName')}}</h3>
                    <hr class="line-heading">
                    <h6>{{$asia->get('foaf:placeLocation')}}</h6>
                    <p>{{$asia->get('foaf:desc1')}}</p>
                    <p>{{$asia->get('foaf:desc2')}}</p>
                    <div class="testimonial-container">
                        <p class="testimonial-text">{{$asia->get('foaf:qoute')}}</p>
                        <p class="testimonial-author">Anonymous</p>
                    </div>
                    <a class="btn-solid-reg" href="/Detail/{{ $asia->get('foaf:id') }}">DETAILS</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a> 
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of lightbox-basic -->
        <!-- end of lightbox -->
                        
    @endforeach 

    @foreach($doc->all('foaf:Afrika') as $afrika )

        
        <div id="project-{{$j++}}" class="lightbox-basic zoom-anim-dialog mfp-hide">
            <div class="row">
                <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                <div class="col-lg-8">
                    <img class="img-fluid" src="{{$afrika->get('foaf:image')}}">
                </div> <!-- end of col -->
                <div class="col-lg-4">
                    <h3>{{$afrika->get('foaf:placeName')}}</h3>
                    <hr class="line-heading">
                    <h6>{{$afrika->get('foaf:placeLocation')}}</h6>
                    <p>{{$afrika->get('foaf:desc1')}}</p>
                    <p>{{$afrika->get('foaf:desc2')}}</p>
                    <div class="testimonial-container">
                        <p class="testimonial-text">{{$afrika->get('foaf:qoute')}}</p>
                        <p class="testimonial-author">Anonymous</p>
                    </div>
                    <a class="btn-solid-reg" href="/Detail/{{ $afrika->get('foaf:id') }}">DETAILS</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a> 
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of lightbox-basic -->
        <!-- end of lightbox -->
                    
    @endforeach 


    @foreach($doc->all('foaf:Eropa') as $eropa )

        
        <div id="project-{{$j++}}" class="lightbox-basic zoom-anim-dialog mfp-hide">
            <div class="row">
                <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                <div class="col-lg-8">
                    <img class="img-fluid" src="{{$eropa->get('foaf:image')}}">
                </div> <!-- end of col -->
                <div class="col-lg-4">
                    <h3>{{$eropa->get('foaf:placeName')}}</h3>
                    <hr class="line-heading">
                    <h6>{{$eropa->get('foaf:placeLocation')}}</h6>
                    <p>{{$eropa->get('foaf:desc1')}}</p>
                    <p>{{$eropa->get('foaf:desc2')}}</p>
                    <div class="testimonial-container">
                        <p class="testimonial-text">{{$eropa->get('foaf:qoute')}}</p>
                        <p class="testimonial-author">Anonymous</p>
                    </div>
                    <a class="btn-solid-reg" href="/Detail/{{ $eropa->get('foaf:id') }}">DETAILS</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a> 
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of lightbox-basic -->
        <!-- end of lightbox -->
                        
    @endforeach 


    @foreach($doc->all('foaf:Australia') as $australia )

            
        <div id="project-{{$j++}}" class="lightbox-basic zoom-anim-dialog mfp-hide">
            <div class="row">
                <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                <div class="col-lg-8">
                    <img class="img-fluid" src="{{$australia->get('foaf:image')}}">
                </div> <!-- end of col -->
                <div class="col-lg-4">
                    <h3>{{$australia->get('foaf:placeName')}}</h3>
                    <hr class="line-heading">
                    <h6>{{$australia->get('foaf:placeLocation')}}</h6>
                    <p>{{$australia->get('foaf:desc1')}}</p>
                    <p>{{$australia->get('foaf:desc2')}}</p>
                    <div class="testimonial-container">
                        <p class="testimonial-text">{{$australia->get('foaf:qoute')}}</p>
                        <p class="testimonial-author">Anonymous</p>
                    </div>
                    <a class="btn-solid-reg" href="/Detail/{{ $australia->get('foaf:id') }}">DETAILS</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a> 
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of lightbox-basic -->
        <!-- end of lightbox -->
                        
    @endforeach 


    <!-- end of project lightboxes -->

    <!-- Team -->
    <div id="team" class="basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Tim Semantic Web Kami</h2>
                    <p class="p-heading">We're only as strong and as knowledgeable as our team. So here are the men and women which help Any people in the world.</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Team Member -->
                    <div class="team-member">
                        <div class="image-wrapper">
                            <img class="img-fluid" src="{{ asset('assets/front')}}/images/team-1.png" alt="alternative">
                        </div> <!-- end of image-wrapper -->
                        <p class="p-large">Muhammad Fahru Rozi</p>
                        <p class="job-title">Project Manager</p>
                        <span class="social-icons">
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <span class="hexagon"></span>
                                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <span class="hexagon"></span>
                                    <i class="fab fa-linkedln fa-stack-1x"></i>
                                </a>
                            </span>
                        </span>
                    </div> <!-- end of team-member -->
                    <!-- end of team member -->

                    <!-- Team Member -->
                    <div class="team-member">
                        <div class="image-wrapper">
                            <img class="img-fluid" src="{{ asset('assets/front')}}/images/team-2.png" alt="alternative">
                        </div> <!-- end of image wrapper -->
                        <p class="p-large">Anggota 1</p>
                        <p class="job-title">Teman Kelas</p>
                        <span class="social-icons">
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
                    </div> <!-- end of team-member -->
                    <!-- end of team member -->

                    <!-- Team Member -->
                    <div class="team-member">
                        <div class="image-wrapper">
                            <img class="img-fluid" src="{{ asset('assets/front')}}/images/team-2.png" alt="alternative">
                        </div> <!-- end of image wrapper -->
                        <p class="p-large">Anggota 5</p>
                        <p class="job-title">Teman Kelas</p>
                        <span class="social-icons">
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
                    </div> <!-- end of team-member -->
                    <!-- end of team member -->

                    <!-- Team Member -->
                    <div class="team-member">
                        <div class="image-wrapper">
                            <img class="img-fluid" src="{{ asset('assets/front')}}/images/team-2.png" alt="alternative">
                        </div> <!-- end of image wrapper -->
                        <p class="p-large">Anggota 5</p>
                        <p class="job-title">Teman Kelas</p>
                        <span class="social-icons">
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
                    </div> <!-- end of team-member -->
                    <!-- end of team member -->
                    <!-- Team Member -->
                    <div class="team-member">
                        <div class="image-wrapper">
                            <img class="img-fluid" src="{{ asset('assets/front')}}/images/team-2.png" alt="alternative">
                        </div> <!-- end of image wrapper -->
                        <p class="p-large">Anggota 5</p>
                        <p class="job-title">Teman Kelas</p>
                        <span class="social-icons">
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
                    </div> <!-- end of team-member -->
                    <!-- end of team member -->

                    <!-- Team Member -->
                    <div class="team-member">
                        <div class="image-wrapper">
                            <img class="img-fluid" src="{{ asset('assets/front')}}/images/team-2.png" alt="alternative">
                        </div> <!-- end of image wrapper -->
                        <p class="p-large">Anggota 5</p>
                        <p class="job-title">Teman Kelas</p>
                        <span class="social-icons">
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
                    </div> <!-- end of team-member -->
                    <!-- end of team member -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of team -->

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
                                <a class="white" href="#your-link">businessgrowth.com</a>
                            </li>
                            <li>
                               <a class="white" href="#your-link">influencers.com</a>
                            </li>
                            <li class="media">
                                <a class="white" href="#your-link">optimizer.net</a>
                            </li>
                        </ul>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-md-2">
                    <div class="text-container">
                        <h4>Partners</h4>
                        <ul class="list-unstyled li-space-lg">
                            <li>
                                <a class="white" href="#your-link">unicorns.com</a>
                            </li>
                            <li>
                                <a class="white" href="#your-link">staffmanager.com</a>
                            </li>
                            <li>
                                <a class="white" href="#your-link">association.gov</a>
                            </li>
                        </ul>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->  
    <!-- end of footer -->

    
    	
    <!-- Scripts -->
    <script src="{{ asset('assets/front/js/jquery.min.js') }}"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="{{ asset('assets/front/js/popper.min.js') }}"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="{{ asset('assets/front/js/bootstrap.min.js') }}"></script> <!-- Bootstrap framework -->
    <script src="{{ asset('assets/front/js/jquery.easing.min.js') }}"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="{{ asset('assets/front/js/swiper.min.js') }}"></script> <!-- Swiper for image and text sliders -->
    <script src="{{ asset('assets/front/js/jquery.magnific-popup.js') }}"></script> <!-- Magnific Popup for lightboxes -->
    <script src="{{ asset('assets/front/js/morphext.min.js') }}"></script> <!-- Morphtext rotating text in the header -->
    <script src="{{ asset('assets/front/js/isotope.pkgd.min.js') }}"></script> <!-- Isotope for filter -->
    <script src="{{ asset('assets/front/js/validator.min.js') }}"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="{{ asset('assets/front/js/scripts.js') }}"></script> <!-- Custom scripts -->
</body>
</html>