@extends('layouts.ubt')
@section('title')
    Read Blog
@endsection
@section('content')
    @php
        use App\Models\Blog;
        use App\Models\Project;
        $blog = Blog::where('id', $id)->first();
        $proj1 = Blog::where('id', $id)->get();

    @endphp
    @if (count($proj1) < 1)
    @else
        <section class="wrapper image-wrapper bg-cover bg-image bg-overlay bg-overlay-500"
            data-image-src="{{ public_path('/img/photos/bg27.jpg') }}">
            <div class="container pt-10 pb-19 pt-md-14 pb-md-20 text-center">
                <div class="row">
                    <div class="col-md-10 col-xl-8 mx-auto">
                        <div class="post-header">
                            <br> <br>
                            <!-- /.post-category -->
                            <h1 class="display-1 mb-4" style="color:antiquewhite;">{{ $blog->title }}</h1>

                            <!-- /.post-meta -->
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
        <section class="wrapper bg-light">
            <div class="container pb-14 pb-md-0">
                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <div class="blog single mt-n17">
                            <div class="card">
                                @if ($blog->image1 != null)
                                    <figure class="card-img-top"><img src="{{ public_path('images/blogs/' . $blog->image1) }}"
                                            alt="" /></figure>
                                @endif
                                <div class="card-body">
                                    <div class="classic-view">
                                        <article class="post">
                                            <div class="post-content mb-5">
                                                <h2 class="h1 mb-4">{{ $blog->title }}</h2>
                                                <p>{!! $blog->paragraph1 !!}</p>
                                                <div class="row g-6 mt-3 mb-10">
                                                    @if ($blog->image2 != null)
                                                        <div class="col-md-6">
                                                            <figure class="hover-scale rounded cursor-dark"><a
                                                                    href="{{ public_path('images/blogs/' . $blog->image2) }}"
                                                                    data-glightbox="title: Heading; description: Purus Vulputate Sem Tellus Quam"
                                                                    data-gallery="post"> <img
                                                                        src="{{ public_path('images/blogs/' . $blog->image2) }}"
                                                                        alt="" /></a></figure>
                                                        </div>
                                                    @endif
                                                    <!--/column -->
                                                    @if ($blog->image3 != null)
                                                        <div class="col-md-6">
                                                            <figure class="hover-scale rounded cursor-dark"><a
                                                                    href="{{ public_path('images/blogs/' . $blog->image3) }}"
                                                                    data-glightbox data-gallery="post"> <img
                                                                        src="{{ public_path('images/blogs/' . $blog->image3) }}"
                                                                        alt="" /></a></figure>
                                                        </div>
                                                    @endif
                                                    <!--/column -->
                                                </div>
                                                <!-- /.row -->
                                                <p>{!! $blog->paragraph2 !!}</p>
                                                <div class="row g-6 mt-3 mb-10">
                                                    @if ($blog->image4 != null)
                                                        <div class="col-md-6">
                                                            <figure class="hover-scale rounded cursor-dark"><a
                                                                    href="{{ public_path('images/blogs/' . $blog->image4) }}"
                                                                    data-glightbox="title: Heading; description: Purus Vulputate Sem Tellus Quam"
                                                                    data-gallery="post"> <img
                                                                        src="{{ public_path('images/blogs/' . $blog->image4) }}"
                                                                        alt="" /></a></figure>
                                                        </div>
                                                    @endif
                                                    <!--/column -->
                                                    @if ($blog->image5 != null)
                                                        <div class="col-md-6">
                                                            <figure class="hover-scale rounded cursor-dark"><a
                                                                    href="{{ public_path('images/blogs/' . $blog->image5) }}"
                                                                    data-glightbox data-gallery="post"> <img
                                                                        src="{{ public_path('images/blogs/' . $blog->image5) }}"
                                                                        alt="" /></a></figure>
                                                        </div>
                                                    @endif
                                                    <!--/column -->
                                                </div>
                                            </div>
                                            <!-- /.post-footer -->
                                        </article>
                                        <!-- /.post -->
                                    </div>
                                    <!-- /.classic-view -->


                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.blog -->
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->


        </section>
        @php
            // Get the current project
            $currentBlogId = $blog->id;

            // Get the next project based on the query
            $nextBlog = Blog::where('id', '>', $currentBlogId)
                ->orderBy('id')
                ->first();
            // If the next project does not exist, loop back to the first project
            if (!$nextBlog) {
                $nextBlog = Blog::orderBy('id')->first();
            }
        @endphp

        <section class="wrapper bg-light">
            <div class="container py-10">
                <div class="row gx-md-6 gy-3 gy-md-0">
                    <div class="col-md-8 align-self-center text-center text-md-start navigation">
                        <a href="{{ url('blog.show', $nextBlog->id) }}"
                            class="btn btn-soft-ash rounded-pill btn-icon btn-icon-start mb-0 me-1">
                            <i class="uil uil-arrow-left"></i> Prev Post
                        </a>
                        <!-- Add the link to the next project based on its ID -->
                        <a href="{{ url('blog.show', $nextBlog->id) }}"
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
    <hr class="dark my-14 my-md-17" />
@endsection
