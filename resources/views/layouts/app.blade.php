<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="a platform that would help unearth, nurture and develop young talent from the street as a way   to preserve and promote our culture and the heritage of our ancestors through the arts.">
    <meta name="keywords" content="">
    <meta name="author" content="elemis">
    <title>Uswazi Born Talent - @yield('title')</title>
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
                            <a href="/">
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
                                        <a class="nav-link" href="home">Home</a>
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
                                        <br /> 000 000 000 0 <br />
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

                                &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                @guest
                                    @if (Route::has('login'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}"> <i
                                                    class="fas fa-door-open    "></i> {{ __('Login') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                            v-pre>
                                            <i class="fa fa-user-circle" aria-hidden="true"></i> {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest

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

            </header>
            <!-- /header -->
            @yield('content')

            <footer class="bg-dark section-frame">
                <div class="container pb-13 pb-md-15">
                    <div class="card image-wrapper bg-full bg-image bg-overlay mt-n50p mx-md-5"
                        data-image-src="{{ asset('/img/photos/bg27.jpg') }}">
                        <div
                            class="card-body p-6 p-md-11 d-lg-flex flex-row align-items-lg-center justify-content-md-between text-center text-lg-start">
                            <h3 class="display-4 mb-6 mb-lg-0 pe-lg-10 pe-xl-5 pe-xxl-18 text-white"> &nbsp;</h3>
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                    <div class="text-inverse mx-md-5 mt-n15 mt-lg-0">
                        <div class="row gy-6 gy-lg-0">
                            <div class="col-md-4 col-lg-4">
                                <div class="widget">
                                    <img class="mb-4" src="{{ asset('/ubt.png') }}" height="80px"
                                        alt="" />


                                    <!-- /.social -->
                                </div>
                                <!-- /.widget -->
                            </div>
                            <!-- /column -->
                            <div class="col-md-4 col-lg-4">
                                <p class="mb-4">© 2023 UBT. <br class="d-none d-lg-block" />All rights
                                    reserved.</p>
                                <!-- /.widget -->
                            </div>
                            <!-- /column -->
                            <div class="col-md-4 col-lg-4">
                                <div class="widget">
                                    <nav class="nav social social-white">
                                        <a href="#">
                                            <i class="fab fa-twitter" aria-hidden="true"></i>
                                        </a>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                    </nav>
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
        <script src="{{ asset('/js/plugins.js') }}"></script>
        <script src="{{ asset('/js/theme.js') }}"></script>
</body>

</html>
