<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   {{-- <!-- SEO Meta Tags -->--}}
   <meta name="description"--}}
         content="Create a stylish landing page for your business startup and get leads for the offered features with this HTML landing page template.">
   <meta name="author" content="Inovatik">

<!-- Website Title -->
    <title>MoneyFellows</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext"
          rel="stylesheet">
    <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/fontawesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/swiper.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/styles.css') }}" rel="stylesheet">

    <!-- Favicon  -->
    <link rel="icon" href="images/logo.png">
</head>
{{--

<body class="antialiased">
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
            @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
            @endif
            @endauth
        </div>
        @endif


    </div>
</body> --}}

<body data-spy="scroll" data-target=".fixed-top">

{{-- <!-- Preloader -->
<div class="spinner-wrapper">
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>
<!-- end of preloader --> --}}

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <!-- Text Logo - Use this if you don't have a graphic logo -->
    <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">MoneyFellows</a> -->

    <!-- Image Logo -->
    <a href=""><img class="navbar-brand logo-image" src=" {{ asset('./images/dark-logo.png') }} " alt="alternative"></a>

    <!-- Mobile Menu Toggle Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-awesome fas fa-bars"></span>
        <span class="navbar-toggler-awesome fas fa-times"></span>
    </button>
    <!-- end of mobile menu toggle button -->

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link page-scroll" href="#header">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="#features">Features</a>
            </li>
            {{-- <li class="nav-item">--}}
            {{-- <a class="nav-link page-scroll" href="#pricing">Pricing</a>--}}
            {{-- </li>--}}
            {{-- <li class="nav-item">--}}
            {{-- <a class="nav-link page-scroll" href="#request">Request</a>--}}
            {{-- </li>--}}
            <li class="nav-item dropdown">
                <a class="nav-link page-scroll" href="#about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="#contact">Contact</a>
            </li>
            @if (Route::has('login'))
                @auth
                    <li class="nav-item"><a href="{{ url('/dashboard') }}" class="nav-link page-scroll">Profile</a>
                    </li>
                @else
                    <li class="nav-item"><a href="{{ route('login') }}" class="nav-link page-scroll">Log in</a></li>

                    @if (Route::has('register'))
                        <li class="nav-item"><a href="{{ route('register') }}" class="nav-link page-scroll">Register</a>
                        </li>
                    @endif
                @endauth
            @endif
        </ul>
    </div>
</nav> <!-- end of navbar -->
<!-- end of navigation -->


<!-- Header -->
<header id="header" class="header">
    <div class="header-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h1><span class="turquoise">Trusted and Convenient</span><br> Money Circles</h1>
                        <p class="p-large">
                            As MoneyFellows circles are available at anytime,and you can join multiple circles at
                            the
                            same time.</p>
                        <a class="btn-solid-lg page-scroll" href="#features">DISCOVER</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="images/header-teamwork.svg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of header-content -->
</header> <!-- end of header -->
<!-- end of header -->

<!-- features -->
<div id="features" class="cards-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Features</h2>
                <p class="p-heading p-large">MoneyFellows provides a wide range of money circles options for every
                    user
                    to choose from.</p>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
        <div class="row">
            <div class="col-lg-12">

                <!-- Card -->
                <div class="card">
                    <img class="card-image" src="images/zerofees.png" alt="alternative">
                    <div class="card-body">
                        <h4 class="card-title">0 % Service Fees</h4>
                        <p>By joining late slots as Our fees are calculated per selected slot and it decreases
                            gradually
                            until it reaches zero.</p>
                    </div>
                </div>
                <!-- end of card -->

                <!-- Card -->
                <div class="card">
                    <img class="card-image" src="images/master-card.png" alt="alternative">
                    <div class="card-body">
                        <h4 class="card-title">Flexible Payment Options
                        </h4>
                        <p>We offer a wide range of payment options, you can easily select the one that suits you
                        </p>
                    </div>
                </div>
                <!-- end of card -->

                <!-- Card -->
                <div class="card">
                    <img class="card-image" src="images/trusted-circle.png" alt="alternative">
                    <div class="card-body">
                        <h4 class="card-title">Trusted Circles</h4>
                        <p>Join our trusted money circles, subscribe now and choose your desired slot along with
                            your
                            payout date.</p>
                    </div>
                </div>
                <!-- end of card -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of cards-1 -->
<!-- end of features -->


<!-- Details 1 -->
<div class="basic-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="text-container">
                    <h2>INVEST YOUR MONEY SECURELY WITH US!</h2>
                    <p>There is no doubt that money is important in our everyday lives, but it's also important to know where to invest your money!
Here in Money Fellows, we offer you a secure and reliable way to invest your money, sign up now and become a money fellow!</p>
                    <a class="btn-solid-reg popup-with-move-anim" href="#details-lightbox-1">FAQ</a>
                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
            <div class="col-lg-6">
                <div class="image-container">
                    <img class="img-fluid" src="images/details-1-office-worker.svg" alt="alternative">
                </div> <!-- end of image-container -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of basic-1 -->
<!-- end of details 1 -->


<!-- Details 2 -->
<div class="basic-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="image-container">
                    <img class="img-fluid" src="images/details-2-office-team-work.svg" alt="alternative">
                </div> <!-- end of image-container -->
            </div> <!-- end of col -->
            <div class="col-lg-6">
                <div class="text-container">
                    <h2>Managing your money has never been easier!</h2>
                    <ul class="list-unstyled li-space-lg">
                        <li class="media">
                            <i class="fas fa-check"></i>
                            <div class="media-body">Basically we'll teach you step by step what you need to do</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i>
                            <div class="media-body">Various payment methods are avalaible</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i>
                            <div class="media-body">Your satisfication is our top priority</div>
                        </li>
                    </ul>
                    <a class="btn-solid-reg popup-with-move-anim" href="#details-lightbox-2">LIGHTBOX</a>
                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of basic-2 -->
<!-- end of details 2 -->

<!-- Details Lightboxes -->
<!-- Details Lightbox 1 -->
<div id="details-lightbox-1" class="lightbox-basic zoom-anim-dialog mfp-hide">
    <div class="container">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <div class="image-container">
                    <img class="img-fluid" src="images/details-lightbox-1.svg" alt="alternative">
                </div> <!-- end of image-container -->
            </div> <!-- end of col -->
            <div >
                <h3>FREQUENTLY ASKED QUESTIONS</h3>
                <hr>
                <!-- <h5>Core feature</h5>
                <p>The emailing module basically will speed up your email marketing operations while offering more
                    subscriber control.</p>
                <p>Do you need to build lists for your email campaigns? It just got easier with MoneyFellows.</p> -->
                <ul class="list-unstyled li-space-lg">
                    <li class="media">
                        <i class="fas fa-check"></i>
                        <div class="media-body">Why MoneyFellows is better than the traditional offline model?<ul>
                            <li>As MoneyFellows circles are available at anytime,and you can join multiple circles at the same time.</li>
                        </ul> </div>
                    </li>
                    <li class="media">
                        <i class="fas fa-check"></i>
                        <div class="media-body">Is this legal?<ul>
                            <li>MoneyFellows is registered in the ministry of investment ,it’s commercial registration number is 100301 and it’s tax card no is 535694.</li>
                        </ul></div>
                    </li>
                    <li class="media">
                        <i class="fas fa-check"></i>
                        <div class="media-body">Why should I trust that other users are going to pay?<ul>
                            <li>As MoneyFellows credit assessment which enables you to select your preferred slot/s and amount or which ensures that each user has selected or joined a suitable ,In addition, each user has to sign a legal contract before the circle starts.</li>
                        </ul></div>
                    </li>
                    <li class="media">
                        <i class="fas fa-check"></i>
                        <div class="media-body">How do i pay?<ol>
                            <li>Debit/Credit cards payment</li>
                            <li>Fawry/Fawry plus</li>
                            <li>Digital wallets</li>
                            <li>Cash collection</li>
                            <li>Direct debit</li>
                        </ol></div>
                    </li>
                    <li class="media">
                        <i class="fas fa-check"></i>
                        <div class="media-body">How do i get my payout?<ol>
                            <li>Digital wallet</li>
                            <li>Bank transfer</li>
                            <li>Fawry plus</li>
                        </ol></div>
                    </li>
                    <li class="media">
                        <i class="fas fa-check"></i>
                        <div class="media-body">How is Fees calculated?<ul>
                            <li>Fees start from 8% and decreases gradually depends on your selected slot, until it reaches zero</li>
                        </ul></div>
                    </li>
                    <li class="media">
                        <i class="fas fa-check"></i>
                        <div class="media-body">What is the credit ladder?<ul>
                            <li>It’s our credit assessment, which enables you to select your preferred slot/s and amount. yet you can easily control your credit ladder score by uploading the required docs, The more verified docs you upload, the higher you can climb your credit ladder.</li>
                        </ul></div>
                    </li>
                </ul>
                <a class="btn-solid-reg mfp-close page-scroll" href="/register">SIGN-UP NOW</a> <a
                    class="btn-outline-reg mfp-close as-button" href="#screenshots">BACK</a>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of lightbox-basic -->
<!-- end of details lightbox 1 -->

<!-- Details Lightbox 2 -->
<div id="details-lightbox-2" class="lightbox-basic zoom-anim-dialog mfp-hide">
    <div class="container">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <div class="image-container">
                    <img class="img-fluid" src="images/details-lightbox-2.svg" alt="alternative">
                </div> <!-- end of image-container -->
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>PLan your money</h3>
                <hr>
                <h5>Main Steps</h5>
                <ul class="list-unstyled li-space-lg">
                    <li class="media">
                        <i class="fas fa-check"></i>
                        <div class="media-body">Pick your desired slot and amount.</div>
                    </li>
                    <li class="media">
                        <i class="fas fa-check"></i>
                        <div class="media-body">Pick payment methods.</div>
                    </li>
                    <li class="media">
                        <i class="fas fa-check"></i>
                        <div class="media-body">Pick payout methods.</div>
                    </li>
                    <li class="media">
                        <i class="fas fa-check"></i>
                        <div class="media-body">Contract signature.</div>
                    </li>
                    <li class="media">
                        <i class="fas fa-check"></i>
                        <div class="media-body">Increase your credit ladder.</div>
                    </li>
                    <!-- <li class="media">
                        <i class="fas fa-check"></i>
                        <div class="media-body">Fast email checking</div>
                    </li> -->
                </ul>
                <a class="btn-solid-reg mfp-close page-scroll" href="/register">SIGN-UP NOW</a> <a
                    class="btn-outline-reg mfp-close as-button" href="#screenshots">BACK</a>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of lightbox-basic -->
<!-- end of details lightbox 2 -->
<!-- end of details lightboxes -->

<!-- Video -->
<div class="basic-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Check Out The Video</h2>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
        <div class="row">
            <div class="col-lg-12">

                <!-- Video Preview -->
                <div class="image-container">
                    <div class="video-wrapper">
                        <a class="popup-youtube" href="https://www.youtube.com/watch?v=ZVVuhn6DTHo"
                           data-effect="fadeIn">
                            <img class="img-fluid" src="images/video-frame.svg" alt="alternative">
                            <span class="video-play-button">
                                    <span></span>
                                </span>
                        </a>
                    </div> <!-- end of video-wrapper -->
                </div> <!-- end of image-container -->
                <!-- end of video preview -->

                <p>This video will show our services and features four services and features as we make sure to meet
                    all
                    your expectations and satisfy our<strong> Users</strong> needs!</p>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of basic-3 -->
<!-- end of video -->


<!-- Testimonials -->
<div class="slider-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="image-container">
                    <img class="img-fluid" src="images/testimonials-2-men-talking.svg" alt="alternative">
                </div> <!-- end of image-container -->
            </div> <!-- end of col -->
            <div class="col-lg-6">
                <h2>Testimonials</h2>

                <!-- Card Slider -->
                <div class="slider-container">
                    <div class="swiper-container card-slider">
                        <div class="swiper-wrapper">

                            <!-- Slide -->
                            <div class="swiper-slide">
                                <div class="card">
                                    <img class="card-image" src="images/testimonial-1.svg" alt="alternative">
                                    <div class="card-body">
                                        <p class="testimonial-text">I just finished my trial period and was so
                                            amazed
                                            with the support and results that I purchased MoneyFellows right away at the
                                            special price.</p>
                                        <p class="testimonial-author">Jude Thorn - Designer</p>
                                    </div>
                                </div>
                            </div> <!-- end of swiper-slide -->
                            <!-- end of slide -->

                            <!-- Slide -->
                            <div class="swiper-slide">
                                <div class="card">
                                    <img class="card-image" src="images/testimonial-2.svg" alt="alternative">
                                    <div class="card-body">
                                        <p class="testimonial-text">MoneyFellows has always helped or startup to
                                            position
                                            itself in the highly competitive market of mobile applications. You will
                                            not
                                            regret using it!</p>
                                        <p class="testimonial-author">Marsha Singer - Developer</p>
                                    </div>
                                </div>
                            </div> <!-- end of swiper-slide -->
                            <!-- end of slide -->

                            <!-- Slide -->
                            <div class="swiper-slide">
                                <div class="card">
                                    <img class="card-image" src="images/testimonial-3.svg" alt="alternative">
                                    <div class="card-body">
                                        <p class="testimonial-text">Love their features and was so amazed with the
                                            support and results that I purchased MoneyFellows for two years in a row.
                                            They
                                            are
                                            awesome.</p>
                                        <p class="testimonial-author">Roy Smith - Marketer</p>
                                    </div>
                                </div>
                            </div> <!-- end of swiper-slide -->
                            <!-- end of slide -->

                        </div> <!-- end of swiper-wrapper -->

                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <!-- end of add arrows -->

                    </div> <!-- end of swiper-container -->
                </div> <!-- end of slider-container -->
                <!-- end of card slider -->

            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of slider-2 -->
<!-- end of testimonials -->


<div id="about" class="basic-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>About The Team</h2>
                <p class="p-heading p-large">Meat our team of specialized marketers and business developers which
                    will
                    help you research new products and launch them in new emerging markets</p>
            </div> <!-- end of col -->

            <div class="card-deck">
                <div class="card">
                    <img class="card-img-top" src="images/one.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Aley Khalid</h5>
                        <p class="card-text">Developer</p>
                    </div>
                    <div class="card-footer">
                            <span class="social-icons">
                                <span class="fa-stack">
                                    <a href="#your-link">
                                        <i class="fas fa-circle fa-stack-2x facebook"></i>
                                        <i class="fab fa-facebook-f fa-stack-1x"></i>
                                    </a>
                                </span>
                                <span class="fa-stack">
                                    <a href="#your-link">
                                        <i class="fas fa-circle fa-stack-2x twitter"></i>
                                        <i class="fab fa-twitter fa-stack-1x"></i>
                                    </a>
                                </span>
                            </span> <!-- end of social-icons -->
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="images/two.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Amr Mohamed</h5>
                        <p class="card-text">Developer</p>
                    </div>
                    <div class="card-footer">
                            <span class="social-icons">
                                <span class="fa-stack">
                                    <a href="#your-link">
                                        <i class="fas fa-circle fa-stack-2x facebook"></i>
                                        <i class="fab fa-facebook-f fa-stack-1x"></i>
                                    </a>
                                </span>
                                <span class="fa-stack">
                                    <a href="#your-link">
                                        <i class="fas fa-circle fa-stack-2x twitter"></i>
                                        <i class="fab fa-twitter fa-stack-1x"></i>
                                    </a>
                                </span>
                            </span> <!-- end of social-icons -->
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="images/three.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Khaled Siam</h5>
                        <p class="card-text">Developer</p>
                    </div>
                    <div class="card-footer">
                            <span class="social-icons">
                                <span class="fa-stack">
                                    <a href="#your-link">
                                        <i class="fas fa-circle fa-stack-2x facebook"></i>
                                        <i class="fab fa-facebook-f fa-stack-1x"></i>
                                    </a>
                                </span>
                                <span class="fa-stack">
                                    <a href="#your-link">
                                        <i class="fas fa-circle fa-stack-2x twitter"></i>
                                        <i class="fab fa-twitter fa-stack-1x"></i>
                                    </a>
                                </span>
                            </span> <!-- end of social-icons -->
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="images/four.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Omar Salah</h5>
                        <p class="card-text">Developer</p>
                    </div>
                    <div class="card-footer">
                            <span class="social-icons">
                                <span class="fa-stack">
                                    <a href="#your-link">
                                        <i class="fas fa-circle fa-stack-2x facebook"></i>
                                        <i class="fab fa-facebook-f fa-stack-1x"></i>
                                    </a>
                                </span>
                                <span class="fa-stack">
                                    <a href="#your-link">
                                        <i class="fas fa-circle fa-stack-2x twitter"></i>
                                        <i class="fab fa-twitter fa-stack-1x"></i>
                                    </a>
                                </span>
                            </span> <!-- end of social-icons -->
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="images/five.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Youssef Hani</h5>
                        <p class="card-text">Developer</p>
                    </div>
                    <div class="card-footer">
                            <span class="social-icons">
                                <span class="fa-stack">
                                    <a href="#your-link">
                                        <i class="fas fa-circle fa-stack-2x facebook"></i>
                                        <i class="fab fa-facebook-f fa-stack-1x"></i>
                                    </a>
                                </span>
                                <span class="fa-stack">
                                    <a href="#your-link">
                                        <i class="fas fa-circle fa-stack-2x twitter"></i>
                                        <i class="fab fa-twitter fa-stack-1x"></i>
                                    </a>
                                </span>
                            </span> <!-- end of social-icons -->
                    </div>
                </div>
            </div>
        </div> <!-- end of row -->
    </div>
</div>

<!-- Contact -->
<div id="contact" class="form-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Contact Information</h2>
                <ul class="list-unstyled li-space-lg">
                    <li class="address">Don't hesitate to give us a call or send us a contact form message</li>
                    <li><i class="fas fa-map-marker-alt"></i>Lotfy El-Sied st. off، Gamal Abd El-Nasir, Alexandria
                        Governorate 11432,Egypt
                    </li>
                    <li><i class="fas fa-phone"></i><a class="turquoise" href="tel:003024630820">+81 720 2212</a>
                    </li>
                    <li><i class="fas fa-envelope"></i><a class="turquoise"
                                                          href="mailto:office@moneyfellows.com">office@moneyfellows.com</a>
                    </li>
                </ul>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
        <div class="row">
            <div class="col-lg-6">
                <div class="map-responsive">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3412.501207171377!2d29.921582415097824!3d31.206840681474414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f5c47e53204b39%3A0x884cc003f3633cf1!2sFaculty%20of%20Engineering%2C%20Alexandria%20University!5e0!3m2!1sen!2seg!4v1628017412566!5m2!1sen!2seg"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div> <!-- end of col -->
            <div class="col-lg-6">

                <!-- Contact Form -->
                <form id="contactForm" data-toggle="validator" data-focus="false">
                    <div class="form-group">
                        <input type="text" class="form-control-input" id="cname" required>
                        <label class="label-control" for="cname">Name</label>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control-input" id="cemail" required>
                        <label class="label-control" for="cemail">Email</label>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control-textarea" id="cmessage" required></textarea>
                        <label class="label-control" for="cmessage">Your message</label>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group checkbox">
                        <input type="checkbox" id="cterms" value="Agreed-to-Terms" required>I have read and agree
                        with
                        MoneyFellows's stated <a href="privacy-policy.html">Privacy Policy</a> and <a
                            href="terms-conditions.html">Terms Conditions</a>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control-submit-button">SUBMIT MESSAGE</button>
                    </div>
                    <div class="form-message">
                        <div id="cmsgSubmit" class="h3 text-center hidden"></div>
                    </div>
                </form>
                <!-- end of contact form -->

            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of form-2 -->
<!-- end of contact -->


<!-- Footer -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="footer-col">
                    <h4>About MoneyFellows</h4>
                    <p>We're passionate about offering some of the best and safest features for money circles</p>
                </div>
            </div> <!-- end of col -->
            <div class="col-md-4">
                <div class="footer-col last">
                    <h4>Social Media</h4>
                    <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                    <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                    <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-google-plus-g fa-stack-1x"></i>
                            </a>
                        </span>
                    <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                    <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-linkedin-in fa-stack-1x"></i>
                            </a>
                        </span>
                </div>
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
                <p class="p-small">Copyright © 2021 <a href="https://inovatik.com">MoneyFellows</a> - All rights
                    reserved
                </p>
            </div> <!-- end of col -->
        </div> <!-- enf of row -->
    </div> <!-- end of container -->
</div> <!-- end of copyright -->
<!-- end of copyright -->

{{--<!-- Scripts -->--}}
<script src="{{asset('js/jquery.min.js')}}"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
<script src="{{asset('js/popper.min.js')}}"></script> <!-- Popper tooltip library for Bootstrap -->
<script src="{{asset('js/bootstrap.min.js')}}"></script> <!-- Bootstrap framework -->
<script src="{{asset('js/jquery.easing.min.js')}}"></script>
<!-- jQuery Easing for smooth scrolling between anchors -->
<script src="{{asset('js/swiper.min.js')}}"></script> <!-- Swiper for image and text sliders -->
<script src="{{asset('js/jquery.magnific-popup.js')}}"></script> <!-- Magnific Popup for lightboxes -->
<script src="{{asset('js/validator.min.js')}}"></script>
<!-- Validator.js - Bootstrap plugin that validates forms -->
<script src="{{asset('js/scripts.js')}}"></script> <!-- Custom scripts -->
</body>

</html>