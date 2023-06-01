@extends('layouts.ubt')
@section('title')
    View Project
@endsection
@section('content')
    <section class="wrapper image-wrapper bg-cover bg-image bg-overlay bg-overlay-500"
        data-image-src="{{ asset('/img/photos/shoutout.jpg') }}">
        <div class="container pt-10 pb-19 pt-md-14 pb-md-22 text-center">
            <div class="row">
                <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                    <div class="post-header">
                        <div class="post-category text-line">
                        </div>
                        <!-- /.post-category -->
                        <h1 class="display-1 mb-3" style="color:rgb(239, 235, 203);">{{ $project->title }}</h1>

                    </div>
                    <!-- /.post-header -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light wrapper-border">
        <div class="container pb-14 pb-md-16">
            <div class="row">
                <div class="col-12">
                    <article class="mt-n21">
                        @if ($project->image1 != null)
                            <figure class="rounded mb-8 mb-md-12"><img
                                    src="{{ asset('images/projects/' . $project->image1) }}" alt="" /></figure>
                        @endif
                        <div class="row">
                            <div class="col-lg-10 offset-lg-1">
                                <h2 class="display-6 mb-4">About the Project</h2>
                                <div class="row gx-0">
                                    <div class="col-md-9 text-justify">
                                        <p>{!! $project->paragraph1 !!}</p>
                                    </div>
                                    <!--/column -->
                                    {{-- <div class="col-md-2 ms-auto">
                                        <ul class="list-unstyled">
                                            <li>
                                                <h5 class="mb-1">Date</h5>
                                                <p>17 May 2018</p>
                                            </li>
                                            <li>
                                                <h5 class="mb-1">Client Name</h5>
                                                <p>Cool House</p>
                                            </li>
                                        </ul>
                                        <a href="#" class="more hover">See Project</a>
                                    </div> --}}
                                    <!--/column -->
                                </div>
                                <!--/.row -->
                            </div>
                            <!-- /column -->
                        </div>
                        <!--/.row -->
                        <div class="row mt-5 gx-md-6 gy-6">
                            @if ($project->image2 != null)
                                <div class="item col-md-6">
                                    <figure class="hover-scale rounded cursor-dark"><a
                                            href="{{ asset('images/projects/' . $project->image2) }}" data-glightbox
                                            data-gallery="project-1"><img
                                                src="{{ asset('images/projects/' . $project->image2) }}"
                                                alt="" /></a>
                                    </figure>
                                </div>
                            @endif
                            <!--/column -->
                            @if ($project->image3 != null)
                                <div class="item col-md-6">
                                    <figure class="hover-scale rounded cursor-dark"><a
                                            href="{{ asset('images/projects/' . $project->image3) }}" data-glightbox
                                            data-gallery="project-1"><img
                                                src="{{ asset('images/projects/' . $project->image3) }}"
                                                alt="" /></a>
                                    </figure>
                                </div>
                            @endif
                            <!--/column -->
                        </div>
                        <!-- /.row -->
                        <div class="row mt-8 mt-md-12">
                            <div class="col-md-10 offset-md-1 text-justify">
                                <p>{!! $project->paragraph2 !!}</p>
                            </div>
                            <!-- /column -->
                        </div>
                        <div class="row mt-5 gx-md-6 gy-6">
                            @if ($project->image4 != null)
                                <div class="item col-md-6">
                                    <figure class="hover-scale rounded cursor-dark"><a
                                            href="{{ asset('images/projects/' . $project->image4) }}" data-glightbox
                                            data-gallery="project-1"><img
                                                src="{{ asset('images/projects/' . $project->image4) }}"
                                                alt="" /></a>
                                    </figure>
                                </div>
                            @endif
                            <!--/column -->
                            @if ($project->image5 != null)
                                <div class="item col-md-6">
                                    <figure class="hover-scale rounded cursor-dark"><a
                                            href="{{ asset('images/projects/' . $project->image5) }}" data-glightbox
                                            data-gallery="project-1"><img
                                                src="{{ asset('images/projects/' . $project->image5) }}"
                                                alt="" /></a>
                                    </figure>
                                </div>
                            @endif
                            <!--/column -->
                        </div>
                        <div class="row mt-8 mt-md-12">
                            <div class="col-md-10 offset-md-1 text-justify">
                                <p>{!! $project->paragraph3 !!}</p>
                            </div>
                            <!-- /column -->
                        </div>
                        <!-- /.row -->
                    </article>
                    <!-- /.project -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
        <div class="container py-10">
            <div class="row gx-md-6 gy-3 gy-md-0">
                <div class="col-md-8 align-self-center text-center text-md-start navigation">
                    {{-- <a href="#" class="btn btn-soft-ash rounded-pill btn-icon btn-icon-start mb-0 me-1"><i
                            class="uil uil-arrow-left"></i> Prev Post</a>
                    <a href="#" class="btn btn-soft-ash rounded-pill btn-icon btn-icon-end mb-0">Next Post <i
                            class="uil uil-arrow-right"></i></a> --}}
                </div>
                <!--/column -->
                <aside class="col-md-4 sidebar text-center text-md-end">
                    <div class="btn-group">
                        <a href="{{ route('EditProject', $project->id) }}" class="btn btn-secondary">Edit Project</a>
                        <a href="{{ route('deleteproject', $project->id) }}"
                            onclick="return confirm('Are you sure you want to delete this Project?')"
                            class="btn btn-secondary">Delete Project</a>

                        <a href="{{ route('Adminblog') }}" class="btn btn-primary">Go Back</a>

                        <!--/.dropdown-menu -->
                    </div>
                    <!--/.share-dropdown -->
                </aside>
                <!-- /column .sidebar -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </section>
    <br><br>
    <!-- /section -->
@endsection
