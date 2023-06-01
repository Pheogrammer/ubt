@extends('layouts.ubt')
@section('title')
    Home
@endsection
@section('content')
    @php
        use App\Models\Partner;
        use App\Models\Staff;
        // use App\
        // $contact = Contact::first();
        $staffz = Staff::orderby('name', 'asc')->get();
        $partnerz = Partner::orderby('name', 'asc')->get();
    @endphp
    <section class="section-frame br-fix overflow-hidden" id="home">
        <div class="wrapper image-wrapper bg-cover bg-image bg-overlay bg-overlay-500"
            data-image-src="{{ asset('/img/photos/bg26.jpg') }}">
            <div class="container pt-18 pt-lg-21 pb-17 pb-lg-19 text-center">
                <div class="row">
                    <div class="col-md-9 col-lg-8 col-xl-7 col-xxl-6 mx-auto" data-cues="zoomIn" data-group="page-title"
                        data-interval="-200" data-delay="500">
                        <h2 class="h6 text-uppercase ls-xl text-white mb-5">Hello! We are Uswazi Born Talent</h2>
                        <h3 class="display-1 fs-54 text-white mb-7">Here is Where the street talent meets the world</h3>
                        <a href="" class="btn btn-circle btn-white btn-play ripple mx-auto" data-glightbox></a>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
            <div class="overflow-hidden">
                <div class="divider text-white mx-n2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60">
                        <path fill="currentColor" d="M0,0V60H1440V0A5771,5771,0,0,1,0,0Z" />
                    </svg>
                </div>
            </div>
            <!-- /.overflow-hidden -->
        </div>
        <!-- /.wrapper -->
    </section>
    <!--/section -->
    <section class="wrapper bg-light angled upper-end lower-end" id="who-are-we">
        <div class="container py-14 py-md-16">
            <div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-17 align-items-center">
                <div class="col-lg-6 position-relative order-lg-2">
                    <div class="shape bg-dot primary rellax w-16 h-20" data-rellax-speed="1"
                        style="top: 3rem; left: 5.5rem"></div>
                    <div class="overlap-grid overlap-grid-2">
                        <div class="item">
                            <figure class="rounded shadow"><img src="{{ asset('/img/photos/sing.jpg') }}" alt="">
                            </figure>
                        </div>
                        <div class="item">
                            <figure class="rounded shadow"><img src="{{ asset('/img/photos/shoutout.jpg') }}"
                                    alt=""></figure>
                        </div>
                    </div>
                </div>
                <!--/column -->
                <div class="col-lg-6">
                    <img src="{{ asset('/img/icons/lineal/megaphone.svg') }}" class="svg-inject icon-svg icon-svg-md mb-4"
                        alt="" />
                    <h2 class="display-4 mb-3">Who Are We?</h2>
                    <p class="lead fs-lg">Uswazi Born Talent is a non-governmental organization founded as a platform that
                        would help unearth, nurture and develop young
                        talent from the street as a way to preserve and promote our culture and the heritage of our
                        ancestors through the arts</p>
                    <p class="mb-6">The aim is to use Tanzanian creativity to protect, preserve and promote our culture as
                        Tanzanians for the benefit of future generations.</p>
                    <div class="row gy-3 gx-xl-8">
                        <div class="col-xl-6">
                            <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                                <li><span><i class="fa fa-check"></i></span><span>Music.</span></li>
                                <li class="mt-3"><span><i class="fa fa-check"></i></span><span>Dancing.</span></li>
                            </ul>
                        </div>
                        <!--/column -->
                        <div class="col-xl-6">
                            <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                                <li><span><i class="fa fa-check"></i></span><span>Drama.</span></li>
                                <li class="mt-3"><span><i class="fa fa-check"></i></span><span>Performing arts.</span>
                                </li>
                            </ul>
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
            <div class="row mb-5">
                <div class="col-md-10 col-xl-8 col-xxl-7 mx-auto text-center">
                    <img src="{{ asset('/img/icons/lineal/list.svg') }}" class="svg-inject icon-svg icon-svg-md mb-4"
                        alt="" />
                    <h2 class="display-4 mb-4 px-lg-14">Our Success Story</h2>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
            <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="card me-lg-6">
                        <div class="card-body p-6">
                            <div class="d-flex flex-row">
                                <div>
                                    <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4"><span
                                            class="number">01</span></span>
                                </div>
                                <div>
                                    <h4 class="mb-1">Singeli Stars</h4>
                                    <p class="mb-0">MAN FONGO, MSAGA SUMU, TAMIMU, DULLA MAKABILA etc</p>
                                </div>
                            </div>
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                    <div class="card ms-lg-13 mt-6">
                        <div class="card-body p-6">
                            <div class="d-flex flex-row">
                                <div>
                                    <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4"><span
                                            class="number">02</span></span>
                                </div>
                                <div>
                                    <h4 class="mb-1">Producers</h4>
                                    <p class="mb-0">Producer Kenny Touchez, Producer Good MASTER, etc</p>
                                </div>
                            </div>
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                    <div class="card mx-lg-6 mt-6">
                        <div class="card-body p-6">
                            <div class="d-flex flex-row">
                                <div>
                                    <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4"><span
                                            class="number">03</span></span>
                                </div>
                                <div>
                                    <h4 class="mb-1">Managers</h4>
                                    <p class="mb-0">Manager ISSA, Manager PAUL NELLY etc .</p>
                                </div>
                            </div>
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
                <!--/column -->
                <div class="col-lg-6">
                    <p class="lead fs-lg pe-lg-5">UBT has succeeded in supporting many local artists who today some have
                        succeeded and live through their art</p>
                    <p>Some of the artists mentioned include Mimah, also known as Malkia wa Singeli, producer Kenny Touchez,
                        Fire Girls (Wamoto), Waswahili Band, Mike Song, Kerry, So Real, Good Master (producer), Dotizo, and
                        managers Issa and Paul Nelly. <br><br>
                        The list includes Dulla Makabila, Easy Man, Tamimu, DJs
                        Kidogodogo and Kwaro, Msaga Sumu, Makuzi Comedian, Snika Daddy Comedian, Wamwiduka Band, Ellis
                        Manager, Anjella, Comedian Pusi, Man Fongo, DJ Msolopa, Vairas Mdudu, Vee Artist, K Mziwanda, Kisa
                        Baby, and many more.</p>

                    <a href="#" class="btn btn-primary rounded-pill mb-0">&nbsp;</a>
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </section>
    <section class="wrapper bg-light">
        <div class="container pt-14 pt-md-16 pb-15 pb-md-17">
            <!-- /.row -->

            <div class="row">
                <div class="col-xxl-11 mx-auto">
                    <div class="row gx-lg-8 gx-xl-12 gy-11 text-center d-flex align-items-end">
                        <div class="col-sm col-md col-lg mx-auto">
                            <div class="px-md-3 px-lg-0 px-xl-3">
                                <div class="icon btn btn-block btn-lg btn-soft-purple pe-none mb-5" style="color:#6b0304;">
                                    <i class="fa fa-map" style="color:#6b0304;" aria-hidden="true"></i>
                                </div>
                                <h3 class="fs-22">Mission</h3>
                                <p class="mb-2">Our mission is to provide a well-organized, coordinated, and resourceful
                                    cultural and arts center of excellence that focuses on nurturing the creativity of young
                                    people in Tanzania mainland.</p>
                            </div>
                            <!--/.px -->
                        </div>
                        <!--/column -->
                        <div class="col-sm col-md col-lg mx-auto">
                            <div class="px-md-3 px-lg-0 px-xl-3">
                                <div class="icon btn btn-block btn-lg btn-soft-leaf pe-none mb-5"> <i
                                        class="fa fa-binoculars" aria-hidden="true"></i> </div>
                                <h3 class="fs-22">Vision</h3>
                                <p class="mb-2">Our aim is to establish a center of excellence in culture and arts that
                                    will serve as an outstanding creative hub, dedicated to discovering, nurturing, and
                                    developing young talent from the streets.</p>
                            </div>
                            <!--/.px -->
                        </div>

                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
            <hr class="dark my-14 my-md-17" />
            <div class="row gx-lg-8 gx-xl-12 gy-10 mb-15 mb-md-12 align-items-center">
                <div class="col-lg-7">
                    <figure><img class="w-auto" src="{{ asset('/img/illustrations/i8.png') }}" alt="" /></figure>
                </div>
                <!--/column -->
                <div class="col-lg-5">
                    <h3 class="fs-16 text-uppercase text-muted mb-3"></h3>
                    <h3 class="display-4 mb-6">Our Objectives</h3>
                    <div class="row gy-4">
                        <div class="col-md-12">
                            <h4><span class="text-primary">1.</span> Youth Empowerment</h4>
                            <p class="mb-0">Create and promote safe spaces for unleashing youth talents and innovative
                                potentials that are cultural relevant.</p>
                        </div>
                        <div class="col-md-12">
                            <h4><span class="text-primary">2.</span> Youth Activism</h4>
                            <p class="mb-0">Empower youth creativity and cultural activism among youth, to use their
                                talents for influencing positive behavior, attitudes, and social change.</p>
                        </div>
                        <div class="col-md-12">
                            <h4><span class="text-primary">3.</span> Cultural Heritage Awareness</h4>
                            <p class="mb-0">Raising awareness on the usefulness of arts and talents to foster/promote the
                                identity of the country's cultural heritage such as our tradition/tribal cultures, cultural
                                heritage sites and tourist attractions.</p>
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="section-frame overflow-hidden">
        <div class="wrapper bg-soft-primary" style="border-radius: 1rem;">
            <div class="container py-17">
                <div class="row text-center">
                    <div class="col-xl-11 col-xxl-10 mx-auto">
                        <h2 class="fs-16 text-uppercase text-muted mb-3">Our Partners</h2>

                        <br>
                        <div class="px-lg-5">
                            <div class="row gx-0 gx-md-8 gx-xl-12 gy-8 align-items-center">
                                @foreach ($partnerz as $ptnez)
                                    <div class="col-4 col-md-2">
                                        <img src="{{ asset('img/RNE.png') }}" alt=""
                                            style="max-width: 150%; max-height: 150%;" />
                                    </div>
                                @endforeach
                                {{-- <!--/column -->
                              <div class="col-4 col-md-2">
                                <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="assets/img/brands/c5.png" alt="" /></figure>
                              </div>
                              <!--/column -->
                              <div class="col-4 col-md-2">
                                <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="assets/img/brands/c6.png" alt="" /></figure>
                              </div> --}}
                                <!--/column -->
                            </div>
                            <!--/.row -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.wrapper -->
    </section>
    <!--/section -->
    <section class="wrapper bg-light">
        <div class="container py-14 py-md-16">
            <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
                <div class="col-lg-4">
                    <h2 class="fs-15 text-uppercase text-line text-primary text-center mb-3">Meet the Team</h2>
                    <h3 class="display-5 mb-5">Introducing our team dedicated to nurturing creativity and cultural
                        excellence..</h3>
                    <p>Our team is passionately committed to realizing our vision of establishing a center of excellence in
                        culture and arts that unearths, nurtures, and develops young talent while promoting Tanzania's
                        cultural heritage..</p>
                    <a href="#"
                        class="btn btn-primary rounded-pill mt-3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                </div>
                <!--/column -->
                <div class="col-lg-8">
                    <div class="swiper-container text-center mb-6" data-margin="30" data-dots="true" data-items-xl="3"
                        data-items-md="2" data-items-xs="1">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                @foreach ($staffz as $stfz)
                                    <div class="swiper-slide">
                                        <div style="width: 120px; height: 120px; overflow: hidden; margin: 0 auto;">
                                            <img class="rounded-circle w-100 h-100"
                                                src="{{ asset('images/profiles/' . $stfz->picture) }}" alt=""
                                                style="object-fit: cover;">
                                        </div>
                                        <h4 class="mb-1">{{ $stfz->name }}</h4>
                                        <div class="meta mb-2">{{ $stfz->position }}</div>
                                        <nav class="nav social justify-content-center text-center mb-0">
                                            <a href="#" title="{{ $stfz->linkedin }}"><i
                                                    class="fab fa-linkedin"></i></a>
                                            <a href="#" title="{{ $stfz->twitter }}"><i
                                                    class="fab fa-twitter"></i></a>
                                            <a href="#" title="{{ $stfz->email }}"><i
                                                    class="fab fa-email"></i></a>
                                        </nav>
                                        <!-- /.social -->
                                    </div>
                                @endforeach
                            </div>
                            <!--/.swiper-wrapper -->
                        </div>
                        <!-- /.swiper -->
                    </div>
                    <!-- /.swiper-container -->
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </section>
    <section class="wrapper bg-light">
        <div class="container py-15 py-md-0">
            <div class="row">
                <div class="col-lg-10 col-xl-8 mx-auto text-center">
                    <h2 class="fs-16 text-uppercase text-muted mb-3">Latest Projects</h2>
                    <h3 class="display-4 mb-10 px-xxl-10">Explore our impressive portfolio of artistic projects featuring
                        innovative concepts and exceptional talents</h3>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->

        </div>
        <div class="container py-15 py-md-0">
            <div class="row">
                <a href="{{ url('viewproject') }}" class="col-lg-10 col-xl-8  mx-auto text-center">
                    <h2 class="fs-16 text-uppercase text-light mb-3 btn btn-danger">View Our Latest Projects</h2>

                </a>
                <!-- /column -->
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

        <hr class="dark my-14 my-md-17" />
    </section>
    <!-- /section -->
    </div>
    <!-- /.content-wrapper -->
@endsection
