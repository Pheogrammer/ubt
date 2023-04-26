@extends('layouts.app')
@section('title')
    Create Blog Post
@endsection
@section('content')
    <section class="wrapper bg-light" id="who-are-we">
        <div class="container py-14 py-md-16">
            <div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-17 align-items-center">
                <div class="col position-relative order-lg-2">
                    <div class="col">
                        <h2 class="display-4 mb-3 text-center">Create a Blog Post</h2>
                        <form method="post" action="{{route('storeblog')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row gx-4">
                                <div class="col-md-12">
                                    <div class="form-floating mb-4">
                                        <input id="form_name" type="text" name="name" class="form-control"
                                            placeholder="Jane" required>
                                        <label for="form_name">Blog Title *</label>
                                        <div class="valid-feedback"> Looks good! </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating mb-4">
                                        <input id="form_name" type="file" accept="image/png, image/gif, image/jpeg"
                                            name="name" class="form-control" placeholder="Jane" required>
                                        <label for="form_name">Header Image *</label>
                                        <div class="valid-feedback"> Looks good! </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating mb-4">
                                        <textarea id="form_message" name="message" class="form-control" placeholder="Your message" style="height: 150px"
                                            required></textarea>
                                        <label for="form_message">Paragraph 1 *</label>
                                        <div class="valid-feedback"> Looks good! </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-4">
                                        <input id="form_name" type="file" accept="image/png, image/gif, image/jpeg"
                                            name="name" class="form-control" placeholder="Jane" required>
                                        <label for="form_name">Image 1 *</label>
                                        <div class="valid-feedback"> Looks good! </div>
                                    </div>
                                </div>
                                <!-- /column -->
                                <div class="col-md-6">
                                    <div class="form-floating mb-4">
                                        <input id="form_lastname" type="file" accept="image/png, image/gif, image/jpeg"
                                            name="surname" class="form-control" placeholder="Doe" required>
                                        <label for="form_lastname">Image 2 *</label>
                                        <div class="valid-feedback"> Looks good! </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating mb-4">
                                        <input id="form_name" type="file" accept="image/png, image/gif, image/jpeg"
                                            name="name" class="form-control" placeholder="Jane">
                                        <label for="form_name">Image 3 *</label>
                                        <div class="valid-feedback"> Looks good! </div>
                                    </div>
                                </div>
                                <!-- /column -->
                                <div class="col-md-6">
                                    <div class="form-floating mb-4">
                                        <input id="form_lastname" type="file" accept="image/png, image/gif, image/jpeg"
                                            name="surname" class="form-control" placeholder="Doe">
                                        <label for="form_lastname">Image 4 *</label>
                                        <div class="valid-feedback"> Looks good! </div>
                                    </div>
                                </div>

                                <!-- /column -->
                                <div class="col-12">
                                    <div class="form-floating mb-4">
                                        <textarea id="form_message" name="message" class="form-control" placeholder="Your message" style="height: 150px"
                                            required></textarea>
                                        <label for="form_message">Paragraph 2 *</label>
                                        <div class="valid-feedback"> Looks good! </div>
                                    </div>
                                </div>
                                <!-- /column -->
                                <div class="col-12 text-center">
                                    <button class="btn btn-primary" type="submit">Post</button>
                                </div>
                                <!-- /column -->
                            </div>
                            <!-- /.row -->
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <hr class="dark my-14 my-md-17" />

    </section>
@endsection
