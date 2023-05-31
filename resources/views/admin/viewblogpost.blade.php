@extends('layouts.ubt')
@section('title')
    Read Blog
@endsection
@section('content')
    <section class="wrapper image-wrapper bg-cover bg-image bg-overlay bg-overlay-500"
        data-image-src="{{ asset('/img/photos/bg27.jpg') }}">
        <div class="container pt-10 pb-19 pt-md-14 pb-md-20 text-center">
            <div class="row">
                <div class="col-md-10 col-xl-8 mx-auto">
                    <div class="post-header">
<br><br><br>
                        <!-- /.post-category -->
                        <h1 class="display-1 mb-4" style="color:antiquewhite;">{{ $blog->title }}</h1>

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
                            @if($blog->image1!=NULL)
                            <figure class="card-img-top"><img src="{{asset('images/blogs/'.$blog->image1)}}" alt="" /></figure>
                            @endif
                            <div class="card-body">
                                <div class="classic-view">
                                    <article class="post">
                                        <div class="post-content mb-5">
                                            <h2 class="h1 mb-4">{{ $blog->title }}</h2>
                                            <p>{{$blog->paragraph1}}</p>
                                            <div class="row g-6 mt-3 mb-10">
                                                @if($blog->image2!=NULL)
                                                <div class="col-md-6">
                                                    <figure class="hover-scale rounded cursor-dark"><a
                                                            href="{{asset('images/blogs/'.$blog->image2)}}"
                                                            data-glightbox="title: Heading; description: Purus Vulputate Sem Tellus Quam"
                                                            data-gallery="post"> <img src="{{asset('images/blogs/'.$blog->image2)}}"
                                                                alt="" /></a></figure>
                                                </div>
                                                @endif
                                                <!--/column -->
                                                @if($blog->image3!=NULL)
                                                <div class="col-md-6">
                                                    <figure class="hover-scale rounded cursor-dark"><a
                                                            href="{{asset('images/blogs/'.$blog->image3)}}" data-glightbox
                                                            data-gallery="post"> <img src="{{asset('images/blogs/'.$blog->image3)}}"
                                                                alt="" /></a></figure>
                                                </div>
                                                @endif
                                                <!--/column -->
                                                @if($blog->image4!=NULL)
                                                <div class="col-md-6">
                                                    <figure class="hover-scale rounded cursor-dark"><a
                                                            href="{{asset('images/blogs/'.$blog->image4)}}" data-glightbox
                                                            data-gallery="post"> <img src="{{asset('images/blogs/'.$blog->image4)}}"
                                                                alt="" /></a></figure>
                                                </div>
                                                @endif
                                                <!--/column -->
                                                @if($blog->image5!=NULL)
                                                <div class="col-md-6">
                                                    <figure class="hover-scale rounded cursor-dark"><a
                                                            href="{{asset('images/blogs/'.$blog->image5)}}" data-glightbox
                                                            data-gallery="post"> <img src="{{asset('images/blogs/'.$blog->image5)}}"
                                                                alt="" /></a></figure>
                                                </div>
                                                @endif
                                                <!--/column -->
                                            </div>
                                            <!-- /.row -->

                                            {{-- <blockquote class="fs-lg my-8">
                                                <p>Sed posuere consectetur est at lobortis. Lorem ipsum dolor sit amet,
                                                    consectetur adipiscing elit. Duis mollis, est non commodo luctus, nisi
                                                    erat porttitor ligula lacinia odio sem nec elit purus.</p>
                                                <footer class="blockquote-footer">Very important person</footer>
                                            </blockquote> --}}
                                            <p>{{$blog->paragraph2}}</p>
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


        <hr class="dark my-14 my-md-17" />
    </section>
@endsection
