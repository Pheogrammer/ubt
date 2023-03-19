<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="a platform that would help unearth, nurture and develop young talent from the street as a way   to preserve and promote our culture and the heritage of our ancestors through the arts.">
    <meta name="keywords" content="">
    <meta name="author" content="elemis">
    <title>Uswazi Born Talent</title>
    <link rel="shortcut icon" href="{{ asset('/ubt.png') }}">
    <link rel="stylesheet" href="{{ asset('/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/colors/purple.css') }}">
    <link rel="preload" href="{{ asset('/css/fonts/urbanist.css') }}" as="style" onload="this.rel='stylesheet'">
    <link rel="stylesheet" href="{{ asset('/fontawesome/css/all.min.css') }}" as="style"
        onload="this.rel='stylesheet'">
</head>

<body>
    <div class="py-md-6">
        <div class="content-wrapper">
            <header class="wrapper">
                <nav
                    class="navbar navbar-expand-lg center-nav transparent position-absolute navbar-dark px-md-10 px-xxl-0">
                    <div class="container flex-lg-row flex-nowrap align-items-center">
                        <div class="navbar-brand w-100">
                            <a href="./index.html">
                                <img class="logo-dark" src="{{ asset('/ubt.png') }}" height="40px" alt="" />
                                <img class="logo-light" src="{{ asset('/ubt.png') }}" height="40px" alt="" />
                            </a>
                        </div>
                        <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                            <div class="offcanvas-header d-lg-none">
                                <h3 class="text-white fs-30 mb-0">Uswazi Born Talent</h3>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                                <ul class="navbar-nav">
                                    <li class="nav-item ">
                                        <a class="nav-link" href="/#home">Home</a>
                                        <!--/.dropdown-menu -->
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link " href="/#who-are-we">About Us</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link " href="projects">Projects</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="blog">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="contact">Contact Us</a>
                                    </li>
                                </ul>
                                <!-- /.navbar-nav -->
                                <div class="offcanvas-footer d-lg-none">
                                    <div>
                                        <a href="" class="link-inverse"><span
                                                class="__cf_email__">[email&#160;protected]</span></a>
                                        <br /> 00 (123) 456 78 90 <br />
                                        <nav class="nav social social-white mt-4">
                                            <a href="#">
                                                <i class="fab fa-twitter    "></i>
                                            </a>
                                            <a href="#"><i class="fab fa-facebook"></i></a>
                                            <a href="#"><i class="fab fa-dribbble"></i></a>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                            <a href="#"><i class="fab fa-youtube"></i></a>
                                        </nav>
                                        <!-- /.social -->
                                    </div>
                                </div>
                                <!-- /.offcanvas-footer -->
                            </div>
                            <!-- /.offcanvas-body -->
                        </div>
                        <!-- /.navbar-collapse -->
                        <div class="navbar-other w-100 d-flex ms-auto">
                            <ul class="navbar-nav flex-row align-items-center ms-auto">
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvas-info"><i class="fa fa-info-circle"></i></a></li>

                                <li class="nav-item d-lg-none">
                                    <button class="hamburger offcanvas-nav-btn"><span></span></button>
                                </li>
                            </ul>
                            <!-- /.navbar-nav -->
                        </div>
                        <!-- /.navbar-other -->
                    </div>
                    <!-- /.container -->
                </nav>
                <!-- /.navbar -->
                <div class="offcanvas offcanvas-end text-inverse" id="offcanvas-info" data-bs-scroll="true">
                    <div class="offcanvas-header">
                        <h3 class="text-white fs-30 mb-0">UBT</h3>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                            aria-label="Close">
                        </button>
                    </div>
                    <div class="offcanvas-body pb-6">
                        <div class="widget mb-8">
                            <p>a platform that helps to unearth, nurture and develop young talent from the street as a way   to preserve and promote our culture and the heritage of our ancestors through the arts.</p>
                        </div>
                        <!-- /.widget -->
                        <div class="widget mb-8">
                            <h4 class="widget-title text-white mb-3">Contact Info</h4>
                            <address> Moonshine St. 14/05 <br /> Light City, London </address>
                            <a href="/cdn-cgi/l/email-protection#9dfbf4efeee9b3f1fceee9ddf8f0fcf4f1b3fef2f0"><span
                                    class="__cf_email__"
                                    data-cfemail="771e19111837121a161e1b5914181a">[email&#160;protected]</span></a><br />
                            00 (123) 456 78 90
                        </div>
                        <!-- /.widget -->
                        <div class="widget mb-8">
                            <h4 class="widget-title text-white mb-3">Learn More</h4>
                            <ul class="list-unstyled">
                                <li><a href="#">Our Story</a></li>
                                <li><a href="#">Terms of Use</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                        <!-- /.widget -->
                        <div class="widget">
                            <h4 class="widget-title text-white mb-3">Follow Us</h4>
                            <nav class="nav social social-white">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </nav>
                            <!-- /.social -->
                        </div>
                        <!-- /.widget -->
                    </div>
                    <!-- /.offcanvas-body -->
                </div>
                <!-- /.offcanvas -->
                <div class="offcanvas offcanvas-top bg-light" id="offcanvas-search" data-bs-scroll="true">
                    <div class="container d-flex flex-row py-6">
                        <form class="search-form w-100">
                            <input id="search-form" type="text" class="form-control"
                                placeholder="Type keyword and hit enter">
                        </form>
                        <!-- /.search-form -->
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <!-- /.container -->
                </div>
                <!-- /.offcanvas -->
            </header>
            <!-- /header -->
            @yield('content')

            <footer class="bg-dark section-frame">
                <div class="container pb-13 pb-md-15">
                    <div class="card image-wrapper bg-full bg-image bg-overlay mt-n50p mx-md-5"
                        data-image-src="{{ asset('/img/photos/bg27.jpg') }}">
                        <div
                            class="card-body p-6 p-md-11 d-lg-flex flex-row align-items-lg-center justify-content-md-between text-center text-lg-start">
                            <h3 class="display-4 mb-6 mb-lg-0 pe-lg-10 pe-xl-5 pe-xxl-18 text-white">We are trusted by
                                over 5000+ clients. Join them by using our services and grow your business.</h3>
                            <a href="#" class="btn btn-lg btn-white rounded mb-0 text-nowrap">Join Us</a>
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                    <div class="text-inverse mx-md-5 mt-n15 mt-lg-0">
                        <div class="row gy-6 gy-lg-0">
                            <div class="col-md-4 col-lg-3">
                                <div class="widget">
                                    <img class="mb-4" src="{{ asset('/img/logo-light.png') }}"
                                        srcset="/img/logo-light@2x.png 2x" alt="" />
                                    <p class="mb-4">© 2023 UBT. <br class="d-none d-lg-block" />All rights
                                        reserved.</p>
                                    <nav class="nav social social-white">
                                        <a href="#">
                                            <i class="fab fa-twitter" aria-hidden="true"></i>
                                        </a>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                    </nav>
                                    <!-- /.social -->
                                </div>
                                <!-- /.widget -->
                            </div>
                            <!-- /column -->
                            <div class="col-md-4 col-lg-3">
                                <div class="widget">
                                    <h4 class="widget-title text-white mb-3">Get in Touch</h4>
                                    <address class="pe-xl-15 pe-xxl-17">Moonshine St. 14/05 Light City, London, United
                                        Kingdom</address>
                                    <a href="/cdn-cgi/l/email-protection#b596"><span class="__cf_email__"
                                            data-cfemail="51383f373e11343c30383d7f323e3c">[email&#160;protected]</span></a><br />
                                    00 (123) 456 78 90
                                </div>
                                <!-- /.widget -->
                            </div>
                            <!-- /column -->
                            <div class="col-md-4 col-lg-3">
                                <div class="widget">
                                    <h4 class="widget-title text-white mb-3">Learn More</h4>
                                    <ul class="list-unstyled  mb-0">
                                        <li><a href="/#home">Home</a></li>
                                        <li><a href="/#who-are-we">About Us</a></li>
                                        <li><a href="projects">Projects</a></li>
                                        <li><a href="blog">Blog</a></li>
                                        <li><a href="contact">Contact Us</a></li>
                                    </ul>
                                </div>
                                <!-- /.widget -->
                            </div>
                            <!-- /column -->
                            <div class="col-md-12 col-lg-3">
                                <div class="widget">
                                    <h4 class="widget-title text-white mb-3">Our Newsletter</h4>
                                    <p class="mb-5">Subscribe to our newsletter to get our news & deals delivered to
                                        you.</p>
                                    <div class="newsletter-wrapper">
                                        <!-- Begin Mailchimp Signup Form -->
                                        <div id="mc_embed_signup2">
                                            <form
                                                action="https://elemisfreebies.us20.list-manage.com/subscribe/post?u=aa4947f70a475ce162057838d&amp;id=b49ef47a9a"
                                                method="post" id="mc-embedded-subscribe-form2"
                                                name="mc-embedded-subscribe-form" class="validate dark-fields"
                                                target="_blank" novalidate>
                                                <div id="mc_embed_signup_scroll2">
                                                    <div class="mc-field-group input-group form-floating">
                                                        <input type="email" value="" name="EMAIL"
                                                            class="required email form-control"
                                                            placeholder="Email Address" id="mce-EMAIL2">
                                                        <label for="mce-EMAIL2">Email Address</label>
                                                        <input type="submit" value="Join" name="subscribe"
                                                            id="mc-embedded-subscribe2" class="btn btn-primary ">
                                                    </div>
                                                    <div id="mce-responses2" class="clear">
                                                        <div class="response" id="mce-error-response2"
                                                            style="display:none"></div>
                                                        <div class="response" id="mce-success-response2"
                                                            style="display:none"></div>
                                                    </div>
                                                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                                    <div style="position: absolute; left: -5000px;"
                                                        aria-hidden="true">
                                                        <input type="text"
                                                            name="b_ddc180777a163e0f9f66ee014_4b1bcfa0bc"
                                                            tabindex="-1" value="">
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </form>
                                        </div>
                                        <!--End mc_embed_signup-->
                                    </div>
                                    <!-- /.newsletter-wrapper -->
                                </div>
                                <!-- /.widget -->
                            </div>
                            <!-- /column -->
                        </div>
                        <!--/.row -->
                    </div>
                </div>
                <!-- /.container -->
            </footer>
        </div>
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
        {{-- <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> --}}
        <script src="{{ asset('/js/plugins.js') }}"></script>
        <script src="{{ asset('/js/theme.js') }}"></script>
</body>

</html>
