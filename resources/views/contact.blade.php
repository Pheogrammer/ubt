@extends('layouts.ubt')

@section('content')
    <section class="wrapper image-wrapper bg-cover bg-image bg-overlay bg-overlay-400 text-white"
        data-image-src="/img/photos/5032.jpg">
        <div class="container pt-17 pb-20 pt-md-19 pb-md-21 text-center">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h1 class="display-1 mb-3 text-white">Get in Touch</h1>
                    <nav class="d-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb text-white">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact</li>
                        </ol>
                    </nav>
                    <!-- /nav -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <section class="wrapper bg-light">
        <div class="container pb-14 pb-md-16">
            <div class="row">
                <div class="col mt-n19 mb-16">
                    <div class="card shadow-lg">
                        <div class="row gx-0">
                            <div class="col-lg-6 image-wrapper bg-image bg-cover rounded-top rounded-lg-start d-none d-md-block"
                                data-image-src="/img/photos/421.jpg">
                            </div>
                            <!--/column -->
                            <div class="col-lg-6">
                                <div class="p-10 p-md-11 p-lg-13">
                                    <h2 class="display-4 mb-3">Let’s Talk</h2>
                                    <p class="lead fs-lg">Let's make something great together. We are trusted by over 5000+
                                        clients. Join them by using our services and grow your business.</p>
                                    <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.
                                        Maecenas faucibus mollis interdum. Fusce dapibus, tellus ac cursus commodo, tortor
                                        mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                                    <a href="#" class="btn btn-primary rounded-pill mt-2">Join Us</a>
                                </div>
                                <!--/div -->
                            </div>
                            <!--/column -->
                        </div>
                        <!--/.row -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-xl-10 mx-auto">
                    <div class="row gy-10 gx-lg-8 gx-xl-12">
                        <div class="col-lg-8">
                            <div class="map map-full rounded-top rounded-lg-start">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25387.23478654725!2d-122.06115399490332!3d37.309248660190086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb4571bd377ab%3A0x394d3fe1a3e178b4!2sCupertino%2C%20CA%2C%20USA!5e0!3m2!1sen!2str!4v1645437305701!5m2!1sen!2str"
                                    style="width:100%; height: 100%; border:0" allowfullscreen></iframe>
                            </div>
                            <!-- /form -->
                        </div>
                        <!--/column -->
                        <div class="col-lg-4">
                            <div class="d-flex flex-row">
                                <div>
                                    <div class="icon text-primary fs-28 me-4 mt-n1"> <i
                                            class="uil uil-location-pin-alt"></i> </div>
                                </div>
                                <div>
                                    <h5 class="mb-1">Address</h5>
                                    <address>Moonshine St. 14/05 Light City, London, United Kingdom</address>
                                </div>
                            </div>
                            <div class="d-flex flex-row">
                                <div>
                                    <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-phone-volume"></i>
                                    </div>
                                </div>
                                <div>
                                    <h5 class="mb-1">Phone</h5>
                                    <p>00 (123) 456 78 90 <br />00 (987) 654 32 10</p>
                                </div>
                            </div>
                            <div class="d-flex flex-row">
                                <div>
                                    <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-envelope"></i>
                                    </div>
                                </div>
                                <div>
                                    <h5 class="mb-1">E-mail</h5>
                                    <p class="mb-0"><a
                                            href="cdn-cgi/l/email-protection.html#d9aab8b7bdbbb6a199bcb4b8b0b5f7bab6b4"
                                            class="link-body"><span class="__cf_email__"
                                                data-cfemail="5d2e3c33393f32251d38303c3431733e3230">[email&#160;protected]</span></a>
                                    </p>
                                    <p><a href="cdn-cgi/l/email-protection.html#cea6aba2be8ebdafa0aaaca1b6e0ada1a3"
                                            class="link-body"><span class="__cf_email__"
                                                data-cfemail="b0d8d5dcc0f0c3d1ded4d2dfc89ed3dfdd">[email&#160;protected]</span></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <br>
        <hr>
        <!-- /.container -->
    </section>
    <!-- /section -->
@endsection
