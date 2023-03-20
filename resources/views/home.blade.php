@extends('layouts.app')
@section('title')
    Admin
@endsection
@section('content')
    <section class="wrapper image-wrapper bg-cover bg-image bg-overlay bg-overlay-500"
        data-image-src="{{ asset('/img/photos/bg27.jpg') }}">
        <div class="container pt-10 pb-19 pt-md-0 pb-md-20 text-center">
            <div class="row">
                <div class="col-md-7 col-lg-6 col-xl-5 mx-auto">
                    <h1 class="display-1 mb-3">
                        <br> <br> <br>
                    </h1>
                    <p class="lead px-lg-5 px-xxl-8"></p>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <section class="wrapper bg-light" id="who-are-we">
        <div class="container py-14 py-md-16">
            <div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-17 align-items-center">
                <div class="col position-relative order-lg-2">
                    <div class="col">
                        <img src="{{ asset('/img/icons/lineal/megaphone.svg') }}"
                            class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
                        <h2 class="display-4 mb-3">Blog Posts</h2>
                        <p class="lead fs-lg">
                        <table class="table table-light">
                            <thead class="thead-light">
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Post Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>rr</td>
                                    <td>cc</td>
                                    <td>dd</td>
                                </tr>
                            </tbody>
                        </table>
                        </p>
                    </div>
                </div>
            </div>

            <div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-10 align-items-center">
                <div class="col position-relative order-lg-2">
                    <div class="col">
                        <img src="{{ asset('/img/icons/lineal/list.svg') }}" class="svg-inject icon-svg icon-svg-md mb-4"
                        alt="" />
                        <h2 class="display-4 mb-3">Projects</h2>
                        <p class="lead fs-lg">
                        <table class="table table-light">
                            <thead class="thead-light">
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Post Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>rr</td>
                                    <td>cc</td>
                                    <td>dd</td>
                                </tr>
                            </tbody>
                        </table>
                        </p>
                    </div>
                </div>
            </div>

        </div>
        <hr class="dark my-14 my-md-17" />
    </section>
@endsection
