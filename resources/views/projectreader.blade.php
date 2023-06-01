@extends('layouts.ubt')
@section('title')
    View Project
@endsection
@section('content')
    @php
        use App\Models\Blog;
        use App\Models\Project;
        $proj = Project::where('id', $id)->first();
        $proj1 = Project::where('id', $id)->get();

    @endphp
    @if (count($proj1) < 1)
    @else
        <section class="wrapper image-wrapper bg-cover bg-image bg-overlay bg-overlay-500"
            data-image-src="{{ public_path('/img/photos/shoutout.jpg') }}">
            <div class="container pt-10 pb-19 pt-md-14 pb-md-22 text-center">
                <div class="row">
                    <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                        <div class="post-header">
                            <div class="post-category text-line">
                            </div>
                            <!-- /.post-category -->
                            <h1 class="display-1 mb-3" style="color:rgb(239, 235, 203);">{{ $proj->title }}</h1>
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
                            @if ($proj->image1 != null)
                                <figure class="rounded mb-8 mb-md-12"><img
                                        src="{{ public_path('images/projects/' . $proj->image1) }}" alt="" /></figure>
                            @endif
                            <div class="row">
                                <div class="col-lg-10 offset-lg-1">
                                    <h2 class="display-6 mb-4">About the Project</h2>
                                    <div class="row gx-0">
                                        <div class="col-md-9 text-justify">
                                            <p>{{ $proj->paragraph1 }}</p>
                                        </div>
                                        <!--/column -->
                                        <div class="col-md-2 ms-auto">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <h5 class="mb-1">Date</h5>
                                                    <p>{{ $proj->ceated_at }}</p>
                                                </li>
                                        </div>
                                        <!--/column -->
                                    </div>
                                    <!--/.row -->
                                </div>
                                <!-- /column -->
                            </div>
                            <!--/.row -->
                            <div class="row mt-5 gx-md-6 gy-6">
                                @if ($proj->image2 != null)
                                    <div class="item col-md-6">
                                        <figure class="hover-scale rounded cursor-dark"><a
                                                href="{{ public_path('images/projects/' . $proj->image2) }}" data-glightbox
                                                data-gallery="project-1"><img
                                                    src="{{ public_path('images/projects/' . $proj->image2) }}"
                                                    alt="" /></a>
                                        </figure>
                                @endif
                            </div>
                            <!--/column -->
                            @if ($proj->image3 != null)
                                <div class="item col-md-6">
                                    <figure class="hover-scale rounded cursor-dark"><a
                                            href="{{ public_path('images/projects/' . $proj->image3) }}" data-glightbox
                                            data-gallery="project-1"><img
                                                src="{{ public_path('images/projects/' . $proj->image3) }}" alt="" /></a>
                                    </figure>
                                </div>
                            @endif
                            <!--/column -->
                    </div>
                    <!-- /.row -->
                    <div class="row mt-8 mt-md-12">
                        <div class="col-md-10 offset-md-1 text-justify">

                            <p>{{ $proj->paragraph2 }}</p>
                        </div>
                        <!-- /column -->
                    </div>
                    <div class="row mt-5 gx-md-6 gy-6">
                        @if ($proj->image4 != null)
                            <div class="item col-md-6">
                                <figure class="hover-scale rounded cursor-dark"><a
                                        href="{{ public_path('images/projects/' . $proj->image4) }}" data-glightbox
                                        data-gallery="project-1"><img src="{{ public_path('images/projects/' . $proj->image4) }}"
                                            alt="" /></a>
                                </figure>
                            </div>
                        @endif
                        <!--/column -->
                        @if ($proj->image5 != null)
                            <div class="item col-md-6">
                                <figure class="hover-scale rounded cursor-dark"><a
                                        href="{{ public_path('images/projects/' . $proj->image5) }}" data-glightbox
                                        data-gallery="project-1"><img src="{{ public_path('images/projects/' . $proj->image5) }}"
                                            alt="" /></a>
                                </figure>
                        @endif
                    </div>
                    <!--/column -->
                </div>
                <div class="row mt-8 mt-md-12">
                    <div class="col-md-10 offset-md-1 text-justify">
                        <p>{{ $proj->paragraph3 }}</p>
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
        @php
            // Get the current project
            $currentProjectId = $proj->id;

            // Get the next project based on the query
            $nextProject = Project::where('id', '>', $currentProjectId)
                ->orderBy('id')
                ->first();
            // If the next project does not exist, loop back to the first project
            if (!$nextProject) {
                $nextProject = Project::orderBy('id')->first();
            }
        @endphp

        <section class="wrapper bg-light">
            <div class="container py-10">
                <div class="row gx-md-6 gy-3 gy-md-0">
                    <div class="col-md-8 align-self-center text-center text-md-start navigation">
                        <a href="{{ url('project.show', $nextProject->id) }}"
                            class="btn btn-soft-ash rounded-pill btn-icon btn-icon-start mb-0 me-1">
                            <i class="uil uil-arrow-left"></i> Prev Post
                        </a>
                        <!-- Add the link to the next project based on its ID -->
                        <a href="{{ url('project.show', $nextProject->id) }}"
                            class="btn btn-soft-ash rounded-pill btn-icon btn-icon-end mb-0">
                            Next Post <i class="uil uil-arrow-right"></i>
                        </a>
                    </div>
                    <!--/column -->

                    <!-- /column .sidebar -->
                </div>
                <!--/.row -->
            </div>
            <!-- /.container -->
        </section>
    @endif
    <br> <br>
    <!-- /section -->
@endsection
