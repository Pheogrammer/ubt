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
    <!-- /section -->
    <section class="wrapper bg-light angled upper-end">
        <div class="container pb-11">
            <div class="row mb-14 mb-md-16">
                <div class="col-xl-10 mx-auto mt-n19">
                    <div class="card">
                        <div class="row gx-0">
                            <div class="col-lg-6 align-self-stretch">
                                <div class="map map-full rounded-top rounded-lg-start">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25387.23478654725!2d-122.06115399490332!3d37.309248660190086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb4571bd377ab%3A0x394d3fe1a3e178b4!2sCupertino%2C%20CA%2C%20USA!5e0!3m2!1sen!2str!4v1645437305701!5m2!1sen!2str"
                                        style="width:100%; height: 100%; border:0" allowfullscreen></iframe>
                                </div>
                                <!-- /.map -->
                            </div>
                            <!--/column -->
                            <div class="col-lg-6">
                                <div class="p-10 p-md-11 p-lg-14">
                                    <div class="d-flex flex-row">
                                        <div>
                                            <div class="icon text-primary fs-28 me-4 mt-n1"> <i
                                                    class="uil uil-location-pin-alt"></i> </div>
                                        </div>
                                        <div class="align-self-start justify-content-start">
                                            <h5 class="mb-1">Address</h5>
                                            <address>Moonshine St. 14/05 Light City, <br class="d-none d-md-block" />London,
                                                United Kingdom</address>
                                        </div>
                                    </div>
                                    <!--/div -->
                                    <div class="d-flex flex-row">
                                        <div>
                                            <div class="icon text-primary fs-28 me-4 mt-n1"> <i
                                                    class="uil uil-phone-volume"></i> </div>
                                        </div>
                                        <div>
                                            <h5 class="mb-1">Phone</h5>
                                            <p>00 (123) 456 78 90 <br />00 (987) 654 32 10</p>
                                        </div>
                                    </div>
                                    <!--/div -->
                                    <div class="d-flex flex-row">
                                        <div>
                                            <div class="icon text-primary fs-28 me-4 mt-n1"> <i
                                                    class="uil uil-envelope"></i> </div>
                                        </div>
                                        <div>
                                            <h5 class="mb-1">E-mail</h5>
                                            <p class="mb-0"><a
                                                    href="cdn-cgi/l/email-protection.html#0172606f65636e7941646c60686d2f626e6c"
                                                    class="link-body"><span class="__cf_email__"
                                                        data-cfemail="a4d7c5cac0c6cbdce4c1c9c5cdc88ac7cbc9">[email&#160;protected]</span></a>
                                            </p>
                                            <p class="mb-0"><a
                                                    href="cdn-cgi/l/email-protection.html#5d3538312d1d2e3c33393f3225733e3230"
                                                    class="link-body"><span class="__cf_email__"
                                                        data-cfemail="5038353c201023313e34323f287e333f3d">[email&#160;protected]</span></a>
                                            </p>
                                        </div>
                                    </div>
                                    <!--/div -->
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
                <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
                    <h2 class="display-4 mb-3 text-center">Drop Us a Line</h2>
                    <p class="lead text-center mb-10">Reach out to us from our contact form and we will get back to you
                        shortly.</p>
                    <form class="contact-form needs-validation" method="post"
                        action="https://sandbox.elemisthemes.com//php/contact.php" novalidate>
                        <div class="messages"></div>
                        <div class="row gx-4">
                            <div class="col-md-6">
                                <div class="form-floating mb-4">
                                    <input id="form_name" type="text" name="name" class="form-control"
                                        placeholder="Jane" required>
                                    <label for="form_name">First Name *</label>
                                    <div class="valid-feedback"> Looks good! </div>
                                    <div class="invalid-feedback"> Please enter your first name. </div>
                                </div>
                            </div>
                            <!-- /column -->
                            <div class="col-md-6">
                                <div class="form-floating mb-4">
                                    <input id="form_lastname" type="text" name="surname" class="form-control"
                                        placeholder="Doe" required>
                                    <label for="form_lastname">Last Name *</label>
                                    <div class="valid-feedback"> Looks good! </div>
                                    <div class="invalid-feedback"> Please enter your last name. </div>
                                </div>
                            </div>
                            <!-- /column -->
                            <div class="col-md-6">
                                <div class="form-floating mb-4">
                                    <input id="form_email" type="email" name="email" class="form-control"
                                        placeholder="jane.doe@example.com" required>
                                    <label for="form_email">Email *</label>
                                    <div class="valid-feedback"> Looks good! </div>
                                    <div class="invalid-feedback"> Please provide a valid email address. </div>
                                </div>
                            </div>
                            <!-- /column -->
                            <div class="col-md-6">
                                <div class="form-select-wrapper mb-4">
                                    <select class="form-select" id="form-select" name="department" required>
                                        <option selected disabled value="">Select a department</option>
                                        <option value="Sales">Sales</option>
                                        <option value="Marketing">Marketing</option>
                                        <option value="Customer Support">Customer Support</option>
                                    </select>
                                    <div class="valid-feedback"> Looks good! </div>
                                    <div class="invalid-feedback"> Please select a department. </div>
                                </div>
                            </div>
                            <!-- /column -->
                            <div class="col-12">
                                <div class="form-floating mb-4">
                                    <textarea id="form_message" name="message" class="form-control" placeholder="Your message" style="height: 150px"
                                        required></textarea>
                                    <label for="form_message">Message *</label>
                                    <div class="valid-feedback"> Looks good! </div>
                                    <div class="invalid-feedback"> Please enter your messsage. </div>
                                </div>
                            </div>
                            <!-- /column -->
                            <div class="col-12 text-center">
                                <input type="submit" class="btn btn-primary rounded-pill btn-send mb-3"
                                    value="Send message">
                                <p class="text-muted"><strong>*</strong> These fields are required.</p>
                            </div>
                            <!-- /column -->
                        </div>
                        <!-- /.row -->
                    </form>
                    <!-- /form -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->

        <hr class="dark my-14 my-md-17" />
    </section>
    <!-- /section -->
@endsection
