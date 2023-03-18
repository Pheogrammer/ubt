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
                                    <li class="nav-item dropdown dropdown-mega">
                                        <a class="nav-link dropdown-toggle" href="#"
                                            data-bs-toggle="dropdown">Demos</a>
                                        {{-- <ul class="dropdown-menu mega-menu mega-menu-dark mega-menu-img">
                                            <li class="mega-menu-content mega-menu-scroll">
                                                <ul
                                                    class="row row-cols-1 row-cols-lg-6 gx-0 gx-lg-4 gy-lg-2 list-unstyled">
                                                    <li class="col">
                                                        <a class="dropdown-item" href="./demo1.html">
                                                            <figure class="rounded lift d-none d-lg-block"><img
                                                                    src="{{asset("/img/demos/mi1.jpg")}}"
                                                                    srcset="/img/demos/mi1@2x.jpg 2x" alt="">
                                                            </figure>
                                                            <span class="d-lg-none">Demo 1</span>
                                                        </a>
                                                    </li>
                                                    <li class="col">
                                                        <a class="dropdown-item" href="./demo2.html">
                                                            <figure class="rounded lift d-none d-lg-block"><img
                                                                    src="{{asset('/img/demos/mi2.jpg')}}"
                                                                    srcset="/img/demos/mi2@2x.jpg 2x" alt="">
                                                            </figure>
                                                            <span class="d-lg-none">Demo 2</span>
                                                        </a>
                                                    </li>
                                                    <li class="col">
                                                        <a class="dropdown-item" href="./demo3.html">
                                                            <figure class="rounded lift d-none d-lg-block"><img
                                                                    src="{{asset('/img/demos/mi3.jpg')}}"
                                                                    srcset="/img/demos/mi3@2x.jpg 2x" alt="">
                                                            </figure>
                                                            <span class="d-lg-none">Demo 3</span>
                                                        </a>
                                                    </li>
                                                    <li class="col">
                                                        <a class="dropdown-item" href="./demo4.html">
                                                            <figure class="rounded lift d-none d-lg-block"><img
                                                                    src="{{asset('/img/demos/mi4.jpg') }}"
                                                                    srcset="/img/demos/mi4@2x.jpg 2x" alt="">
                                                            </figure>
                                                            <span class="d-lg-none">Demo 4</span>
                                                        </a>
                                                    </li>
                                                    <li class="col">
                                                        <a class="dropdown-item" href="./demo5.html">
                                                            <figure class="rounded lift d-none d-lg-block"><img
                                                                    src="{{asset('/img/demos/mi5.jpg') }}"
                                                                    srcset="/img/demos/mi5@2x.jpg 2x" alt="">
                                                            </figure>
                                                            <span class="d-lg-none">Demo 5</span>
                                                        </a>
                                                    </li>
                                                    <li class="col">
                                                        <a class="dropdown-item" href="./demo6.html">
                                                            <figure class="rounded lift d-none d-lg-block"><img
                                                                    src="{{asset('/img/demos/mi6.jpg') }}"
                                                                    srcset="/img/demos/mi6@2x.jpg 2x" alt="">
                                                            </figure>
                                                            <span class="d-lg-none">Demo 6</span>
                                                        </a>
                                                    </li>
                                                    <li class="col">
                                                        <a class="dropdown-item" href="./demo7.html">
                                                            <figure class="rounded lift d-none d-lg-block"><img
                                                                    src="{{asset('/img/demos/mi7.jpg') }}"
                                                                    srcset="/img/demos/mi7@2x.jpg 2x"
                                                                    alt=""></figure>
                                                            <span class="d-lg-none">Demo 7</span>
                                                        </a>
                                                    </li>
                                                    <li class="col">
                                                        <a class="dropdown-item" href="./demo8.html">
                                                            <figure class="rounded lift d-none d-lg-block"><img
                                                                    src="{{asset('/img/demos/mi8.jpg') }}"
                                                                    srcset="/img/demos/mi8@2x.jpg 2x"
                                                                    alt=""></figure>
                                                            <span class="d-lg-none">Demo 8</span>
                                                        </a>
                                                    </li>
                                                    <li class="col">
                                                        <a class="dropdown-item" href="./demo9.html">
                                                            <figure class="rounded lift d-none d-lg-block"><img
                                                                    src="{{asset('/img/demos/mi9.jpg') }}"
                                                                    srcset="/img/demos/mi9@2x.jpg 2x"
                                                                    alt=""></figure>
                                                            <span class="d-lg-none">Demo 9</span>
                                                        </a>
                                                    </li>
                                                    <li class="col">
                                                        <a class="dropdown-item" href="./demo10.html">
                                                            <figure class="rounded lift d-none d-lg-block"><img
                                                                    src="{{asset('/img/demos/mi10.jpg') }}"
                                                                    srcset="/img/demos/mi10@2x.jpg 2x"
                                                                    alt=""></figure>
                                                            <span class="d-lg-none">Demo 10</span>
                                                        </a>
                                                    </li>
                                                    <li class="col">
                                                        <a class="dropdown-item" href="./demo11.html">
                                                            <figure class="rounded lift d-none d-lg-block"><img
                                                                    src="{{asset('/img/demos/mi11.jpg') }}"
                                                                    srcset="/img/demos/mi11@2x.jpg 2x"
                                                                    alt=""></figure>
                                                            <span class="d-lg-none">Demo 11</span>
                                                        </a>
                                                    </li>
                                                    <li class="col">
                                                        <a class="dropdown-item" href="./demo12.html">
                                                            <figure class="rounded lift d-none d-lg-block"><img
                                                                    src="{{asset('/img/demos/mi12.jpg') }}"
                                                                    srcset="/img/demos/mi12@2x.jpg 2x"
                                                                    alt=""></figure>
                                                            <span class="d-lg-none">Demo 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="col">
                                                        <a class="dropdown-item" href="./demo13.html">
                                                            <figure class="rounded lift d-none d-lg-block"><img
                                                                    src="{{asset('/img/demos/mi13.jpg') }}"
                                                                    srcset="/img/demos/mi13@2x.jpg 2x"
                                                                    alt=""></figure>
                                                            <span class="d-lg-none">Demo 13</span>
                                                        </a>
                                                    </li>
                                                    <li class="col">
                                                        <a class="dropdown-item" href="./demo14.html">
                                                            <figure class="rounded lift d-none d-lg-block"><img
                                                                    src="{{asset('/img/demos/mi14.jpg') }}"
                                                                    srcset="/img/demos/mi14@2x.jpg 2x"
                                                                    alt=""></figure>
                                                            <span class="d-lg-none">Demo 14</span>
                                                        </a>
                                                    </li>
                                                    <li class="col">
                                                        <a class="dropdown-item" href="./demo15.html">
                                                            <figure class="rounded lift d-none d-lg-block"><img
                                                                    src="{{asset('/img/demos/mi15.jpg') }}"
                                                                    srcset="/img/demos/mi15@2x.jpg 2x"
                                                                    alt=""></figure>
                                                            <span class="d-lg-none">Demo 15</span>
                                                        </a>
                                                    </li>
                                                    <li class="col">
                                                        <a class="dropdown-item" href="./demo16.html">
                                                            <figure class="rounded lift d-none d-lg-block"><img
                                                                    src="{{asset('/img/demos/mi16.jpg') }}"
                                                                    srcset="/img/demos/mi16@2x.jpg 2x"
                                                                    alt=""></figure>
                                                            <span class="d-lg-none">Demo 16</span>
                                                        </a>
                                                    </li>
                                                    <li class="col">
                                                        <a class="dropdown-item" href="./demo17.html">
                                                            <figure class="rounded lift d-none d-lg-block"><img
                                                                    src="{{asset('/img/demos/mi17.jpg') }}"
                                                                    srcset="/img/demos/mi17@2x.jpg 2x"
                                                                    alt=""></figure>
                                                            <span class="d-lg-none">Demo 17</span>
                                                        </a>
                                                    </li>
                                                    <li class="col">
                                                        <a class="dropdown-item" href="./demo18.html">
                                                            <figure class="rounded lift d-none d-lg-block"><img
                                                                    src="{{asset('/img/demos/mi18.jpg') }}"
                                                                    srcset="/img/demos/mi18@2x.jpg 2x"
                                                                    alt=""></figure>
                                                            <span class="d-lg-none">Demo 18</span>
                                                        </a>
                                                    </li>
                                                    <li class="col">
                                                        <a class="dropdown-item" href="./demo19.html">
                                                            <figure class="rounded lift d-none d-lg-block"><img
                                                                    src="{{asset('/img/demos/mi19.jpg') }}"
                                                                    srcset="/img/demos/mi19@2x.jpg 2x"
                                                                    alt=""></figure>
                                                            <span class="d-lg-none">Demo 19</span>
                                                        </a>
                                                    </li>
                                                    <li class="col">
                                                        <a class="dropdown-item" href="./demo20.html">
                                                            <figure class="rounded lift d-none d-lg-block"><img
                                                                    src="{{asset('/img/demos/mi20.jpg') }}"
                                                                    srcset="/img/demos/mi20@2x.jpg 2x"
                                                                    alt=""></figure>
                                                            <span class="d-lg-none">Demo 20</span>
                                                        </a>
                                                    </li>
                                                    <li class="col">
                                                        <a class="dropdown-item" href="./demo21.html">
                                                            <figure class="rounded lift d-none d-lg-block"><img
                                                                    src="{{asset('/img/demos/mi21.jpg') }}"
                                                                    srcset="/img/demos/mi21@2x.jpg 2x"
                                                                    alt=""></figure>
                                                            <span class="d-lg-none">Demo 21</span>
                                                        </a>
                                                    </li>
                                                    <li class="col">
                                                        <a class="dropdown-item" href="./demo22.html">
                                                            <figure class="rounded lift d-none d-lg-block"><img
                                                                    src="{{asset('/img/demos/mi22.jpg') }}"
                                                                    srcset="/img/demos/mi22@2x.jpg 2x"
                                                                    alt=""></figure>
                                                            <span class="d-lg-none">Demo 22</span>
                                                        </a>
                                                    </li>
                                                    <li class="col">
                                                        <a class="dropdown-item" href="./demo23.html">
                                                            <figure class="rounded lift d-none d-lg-block"><img
                                                                    src="{{asset('/img/demos/mi23.jpg') }}"
                                                                    srcset="/img/demos/mi23@2x.jpg 2x"
                                                                    alt=""></figure>
                                                            <span class="d-lg-none">Demo 23</span>
                                                        </a>
                                                    </li>
                                                    <li class="col">
                                                        <a class="dropdown-item" href="./demo24.html">
                                                            <figure class="rounded lift d-none d-lg-block"><img
                                                                    src="{{asset('/img/demos/mi24.jpg') }}"
                                                                    srcset="/img/demos/mi24@2x.jpg 2x"
                                                                    alt=""></figure>
                                                            <span class="d-lg-none">Demo 24</span>
                                                        </a>
                                                    </li>
                                                    <li class="col">
                                                        <a class="dropdown-item" href="./demo25.html">
                                                            <figure class="rounded lift d-none d-lg-block"><img
                                                                    src="{{asset('/img/demos/mi25.jpg') }}"
                                                                    srcset="/img/demos/mi25@2x.jpg 2x"
                                                                    alt=""></figure>
                                                            <span class="d-lg-none">Demo 25</span>
                                                        </a>
                                                    </li>
                                                    <li class="col">
                                                        <a class="dropdown-item" href="./demo26.html">
                                                            <figure class="rounded lift d-none d-lg-block"><img
                                                                    src="{{asset('/img/demos/mi26.jpg') }}"
                                                                    srcset="/img/demos/mi26@2x.jpg 2x"
                                                                    alt=""></figure>
                                                            <span class="d-lg-none">Demo 26</span>
                                                        </a>
                                                    </li>
                                                    <li class="col">
                                                        <a class="dropdown-item" href="./demo27.html">
                                                            <figure class="rounded lift d-none d-lg-block"><img
                                                                    src="{{asset('/img/demos/mi27.jpg') }}"
                                                                    srcset="/img/demos/mi27@2x.jpg 2x"
                                                                    alt=""></figure>
                                                            <span class="d-lg-none">Demo 27</span>
                                                        </a>
                                                    </li>
                                                    <li class="col">
                                                        <a class="dropdown-item" href="./demo28.html">
                                                            <figure class="rounded lift d-none d-lg-block"><img
                                                                    src="{{asset('/img/demos/mi28.jpg') }}"
                                                                    srcset="/img/demos/mi28@2x.jpg 2x"
                                                                    alt=""></figure>
                                                            <span class="d-lg-none">Demo 28</span>
                                                        </a>
                                                    </li>
                                                    <li class="col">
                                                        <a class="dropdown-item" href="./demo29.html">
                                                            <figure class="rounded lift d-none d-lg-block"><img
                                                                    src="{{asset('/img/demos/mi29.jpg') }}"
                                                                    srcset="/img/demos/mi29@2x.jpg 2x"
                                                                    alt=""></figure>
                                                            <span class="d-lg-none">Demo 29</span>
                                                        </a>
                                                    </li>
                                                    <li class="col">
                                                        <a class="dropdown-item" href="./demo30.html">
                                                            <figure class="rounded lift d-none d-lg-block"><img
                                                                    src="{{asset('/img/demos/mi30.jpg') }}"
                                                                    srcset="/img/demos/mi30@2x.jpg 2x"
                                                                    alt=""></figure>
                                                            <span class="d-lg-none">Demo 30</span>
                                                        </a>
                                                    </li>
                                                    <li class="col">
                                                        <a class="dropdown-item" href="./demo31.html">
                                                            <figure class="rounded lift d-none d-lg-block"><img
                                                                    src="{{asset('/img/demos/mi31.jpg') }}"
                                                                    srcset="/img/demos/mi31@2x.jpg 2x"
                                                                    alt=""></figure>
                                                            <span class="d-lg-none">Demo 31</span>
                                                        </a>
                                                    </li>
                                                    <li class="col">
                                                        <a class="dropdown-item" href="./demo32.html">
                                                            <figure class="rounded lift d-none d-lg-block"><img
                                                                    src="{{asset('/img/demos/mi32.jpg') }}"
                                                                    srcset="/img/demos/mi32@2x.jpg 2x"
                                                                    alt=""></figure>
                                                            <span class="d-lg-none">Demo 32</span>
                                                        </a>
                                                    </li>
                                                    <li class="col">
                                                        <a class="dropdown-item" href="./demo33.html">
                                                            <figure class="rounded lift d-none d-lg-block"><img
                                                                    src="{{asset('/img/demos/mi33.jpg') }}"
                                                                    srcset="/img/demos/mi33@2x.jpg 2x"
                                                                    alt=""></figure>
                                                            <span class="d-lg-none">Demo 33</span>
                                                        </a>
                                                    </li>
                                                    <li class="col">
                                                        <a class="dropdown-item" href="./demo34.html">
                                                            <figure class="rounded lift d-none d-lg-block"><img
                                                                    src="{{asset('/img/demos/mi34.jpg') }}"
                                                                    srcset="/img/demos/mi34@2x.jpg 2x"
                                                                    alt=""></figure>
                                                            <span class="d-lg-none">Demo 34</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <!--/.row -->
                                                <span class="d-none d-lg-flex"><i
                                                        class="uil uil-direction"></i><strong>Scroll to view
                                                        more</strong></span>
                                            </li>
                                            <!--/.mega-menu-content-->
                                        </ul> --}}
                                        <!--/.dropdown-menu -->
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#"
                                            data-bs-toggle="dropdown">Pages</a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown dropdown-submenu dropend"><a
                                                    class="dropdown-item dropdown-toggle" href="#"
                                                    data-bs-toggle="dropdown">Services</a>
                                                <ul class="dropdown-menu">
                                                    <li class="nav-item"><a class="dropdown-item"
                                                            href="./services.html">Services I</a></li>
                                                    <li class="nav-item"><a class="dropdown-item"
                                                            href="./services2.html">Services II</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown dropdown-submenu dropend"><a
                                                    class="dropdown-item dropdown-toggle" href="#"
                                                    data-bs-toggle="dropdown">About</a>
                                                <ul class="dropdown-menu">
                                                    <li class="nav-item"><a class="dropdown-item"
                                                            href="./about.html">About I</a></li>
                                                    <li class="nav-item"><a class="dropdown-item"
                                                            href="./about2.html">About II</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown dropdown-submenu dropend"><a
                                                    class="dropdown-item dropdown-toggle" href="#"
                                                    data-bs-toggle="dropdown">Shop</a>
                                                <ul class="dropdown-menu">
                                                    <li class="nav-item"><a class="dropdown-item"
                                                            href="./shop.html">Shop I</a></li>
                                                    <li class="nav-item"><a class="dropdown-item"
                                                            href="./shop2.html">Shop II</a></li>
                                                    <li class="nav-item"><a class="dropdown-item"
                                                            href="./shop-product.html">Product Page</a></li>
                                                    <li class="nav-item"><a class="dropdown-item"
                                                            href="./shop-cart.html">Shopping Cart</a></li>
                                                    <li class="nav-item"><a class="dropdown-item"
                                                            href="./shop-checkout.html">Checkout</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown dropdown-submenu dropend"><a
                                                    class="dropdown-item dropdown-toggle" href="#"
                                                    data-bs-toggle="dropdown">Contact</a>
                                                <ul class="dropdown-menu">
                                                    <li class="nav-item"><a class="dropdown-item"
                                                            href="./contact.html">Contact I</a></li>
                                                    <li class="nav-item"><a class="dropdown-item"
                                                            href="./contact2.html">Contact II</a></li>
                                                    <li class="nav-item"><a class="dropdown-item"
                                                            href="./contact3.html">Contact III</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown dropdown-submenu dropend"><a
                                                    class="dropdown-item dropdown-toggle" href="#"
                                                    data-bs-toggle="dropdown">Career</a>
                                                <ul class="dropdown-menu">
                                                    <li class="nav-item"><a class="dropdown-item"
                                                            href="./career.html">Job Listing I</a></li>
                                                    <li class="nav-item"><a class="dropdown-item"
                                                            href="./career2.html">Job Listing II</a></li>
                                                    <li class="nav-item"><a class="dropdown-item"
                                                            href="./career-job.html">Job Description</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown dropdown-submenu dropend"><a
                                                    class="dropdown-item dropdown-toggle" href="#"
                                                    data-bs-toggle="dropdown">Utility</a>
                                                <ul class="dropdown-menu">
                                                    <li class="nav-item"><a class="dropdown-item"
                                                            href="./404.html">404 Not Found</a></li>
                                                    <li class="nav-item"><a class="dropdown-item"
                                                            href="./page-loader.html">Page Loader</a></li>
                                                    <li class="nav-item"><a class="dropdown-item"
                                                            href="./signin.html">Sign In I</a></li>
                                                    <li class="nav-item"><a class="dropdown-item"
                                                            href="./signin2.html">Sign In II</a></li>
                                                    <li class="nav-item"><a class="dropdown-item"
                                                            href="./signup.html">Sign Up I</a></li>
                                                    <li class="nav-item"><a class="dropdown-item"
                                                            href="./signup2.html">Sign Up II</a></li>
                                                    <li class="nav-item"><a class="dropdown-item"
                                                            href="./terms.html">Terms</a></li>
                                                </ul>
                                            </li>
                                            <li class="nav-item"><a class="dropdown-item"
                                                    href="./pricing.html">Pricing</a></li>
                                            <li class="nav-item"><a class="dropdown-item" href="./onepage.html">One
                                                    Page</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#"
                                            data-bs-toggle="dropdown">Projects</a>
                                        <div class="dropdown-menu dropdown-lg">
                                            <div class="dropdown-lg-content">
                                                <div>
                                                    <h6 class="dropdown-header">Project Pages</h6>
                                                    <ul class="list-unstyled">
                                                        <li><a class="dropdown-item" href="./projects.html">Projects
                                                                I</a></li>
                                                        <li><a class="dropdown-item" href="./projects2.html">Projects
                                                                II</a></li>
                                                        <li><a class="dropdown-item" href="./projects3.html">Projects
                                                                III</a></li>
                                                        <li><a class="dropdown-item" href="./projects4.html">Projects
                                                                IV</a></li>
                                                    </ul>
                                                </div>
                                                <!-- /.column -->
                                                <div>
                                                    <h6 class="dropdown-header">Single Projects</h6>
                                                    <ul class="list-unstyled">
                                                        <li><a class="dropdown-item"
                                                                href="./single-project.html">Single Project I</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="./single-project2.html">Single Project II</a>
                                                        </li>
                                                        <li><a class="dropdown-item"
                                                                href="./single-project3.html">Single Project III</a>
                                                        </li>
                                                        <li><a class="dropdown-item"
                                                                href="./single-project4.html">Single Project IV</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- /.column -->
                                            </div>
                                            <!-- /auto-column -->
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#"
                                            data-bs-toggle="dropdown">Blog</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"><a class="dropdown-item" href="./blog.html">Blog
                                                    without Sidebar</a></li>
                                            <li class="nav-item"><a class="dropdown-item" href="./blog2.html">Blog
                                                    with Sidebar</a></li>
                                            <li class="nav-item"><a class="dropdown-item" href="./blog3.html">Blog
                                                    with Left Sidebar</a></li>
                                            <li class="dropdown dropdown-submenu dropend"><a
                                                    class="dropdown-item dropdown-toggle" href="#"
                                                    data-bs-toggle="dropdown">Blog Posts</a>
                                                <ul class="dropdown-menu">
                                                    <li class="nav-item"><a class="dropdown-item"
                                                            href="./blog-post.html">Post without Sidebar</a></li>
                                                    <li class="nav-item"><a class="dropdown-item"
                                                            href="./blog-post2.html">Post with Sidebar</a></li>
                                                    <li class="nav-item"><a class="dropdown-item"
                                                            href="./blog-post3.html">Post with Left Sidebar</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <!-- /.navbar-nav -->
                                <div class="offcanvas-footer d-lg-none">
                                    <div>
                                        <a href="" class="link-inverse"><span
                                                class="__cf_email__">[email&#160;protected]</span></a>
                                        <br /> 00 (123) 456 78 90 <br />
                                        <nav class="nav social social-white mt-4">
                                            <a href="#"><i class="uil uil-twitter"></i></a>
                                            <a href="#"><i class="uil uil-facebook-f"></i></a>
                                            <a href="#"><i class="uil uil-dribbble"></i></a>
                                            <a href="#"><i class="uil uil-instagram"></i></a>
                                            <a href="#"><i class="uil uil-youtube"></i></a>
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
                                        data-bs-target="#offcanvas-info"><i class="uil uil-info-circle"></i></a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvas-search"><i class="uil uil-search"></i></a></li>
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
                        <h3 class="text-white fs-30 mb-0">Sandbox</h3>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body pb-6">
                        <div class="widget mb-8">
                            <p>Sandbox is a multipurpose HTML5 template with various layouts which will be a great
                                solution for your business.</p>
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
                                <a href="#"><i class="uil uil-twitter"></i></a>
                                <a href="#"><i class="uil uil-facebook-f"></i></a>
                                <a href="#"><i class="uil uil-dribbble"></i></a>
                                <a href="#"><i class="uil uil-instagram"></i></a>
                                <a href="#"><i class="uil uil-youtube"></i></a>
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
                                    <p class="mb-4">© 2023 Sandbox. <br class="d-none d-lg-block" />All rights
                                        reserved.</p>
                                    <nav class="nav social social-white">
                                        <a href="#"><i class="uil uil-twitter"></i></a>
                                        <a href="#"><i class="uil uil-facebook-f"></i></a>
                                        <a href="#"><i class="uil uil-dribbble"></i></a>
                                        <a href="#"><i class="uil uil-instagram"></i></a>
                                        <a href="#"><i class="uil uil-youtube"></i></a>
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
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Our Story</a></li>
                                        <li><a href="#">Projects</a></li>
                                        <li><a href="#">Terms of Use</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
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
                                                    <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                                        <input type="text"
                                                            name="b_ddc180777a163e0f9f66ee014_4b1bcfa0bc" tabindex="-1"
                                                            value="">
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
