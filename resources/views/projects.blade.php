@extends('layouts.ubt')

@section('content')
    <section class="section-frame overflow-hidden">
        <div class="wrapper image-wrapper bg-cover bg-image bg-overlay bg-overlay-500"
            data-image-src="{{ asset('/img/photos/shoutout.jpg') }}">
            <div class="container py-13 py-md-17 text-center">
                <div class="row">
                    <div class="col-lg-10 col-xxl-8 mx-auto">
                        <h1 class="display-1 mb-1" style="color:#ccc;">Check out some of our awesome projects with creative
                            ideas.</h1>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.wrapper -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
        <div class="container py-14 py-md-16">
            <div class="row mt-6">
                <div class="col-xl-10 mx-auto">
                    <div class="projects-tiles">
                        <div class="project grid grid-view">
                            <div class="row g-6 isotope">
                                <div class="item col-md-6">
                                    <div class="project-details d-flex justify-content-center flex-column">
                                        <div class="post-header">
                                            <div class="post-category text-red mb-3">Ideas</div>
                                            <h2 class="post-title mb-3">Cras Fermentum Sem</h2>
                                        </div>
                                        <!-- /.post-header -->
                                        <div class="post-content">
                                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia
                                                odio sem nec elit.</p>
                                            <a href="viewproject" class="more hover link-red">See Project</a>
                                        </div>
                                        <!-- /.post-content -->
                                    </div>
                                    <!-- /.project-details -->
                                </div>
                                <!-- /.item -->
                                <div class="item col-md-6">
                                    <figure class="itooltip itooltip-light hover-scale rounded"
                                        title='<h5 class="mb-0">Cursus Inceptos Sit</h5>'><a href="/img/photos/cs1-full.jpg"
                                            data-glightbox="title: Cursus Inceptos Sit" data-gallery="project-1"> <img
                                                src="/img/photos/cs1.jpg" alt="" /></a>
                                    </figure>
                                </div>
                                <!-- /.item -->
                                <div class="item col-md-6">
                                    <figure class="itooltip itooltip-light hover-scale rounded"
                                        title='<h5 class="mb-0">Ipsum Egestas Porta</h5>'><a href="/img/photos/cs2-full.jpg"
                                            data-glightbox="title: Ipsum Egestas Porta" data-gallery="project-1"> <img
                                                src="/img/photos/cs2.jpg" alt="" /></a>
                                    </figure>
                                </div>
                                <!-- /.item -->
                                <div class="item col-md-6">
                                    <figure class="itooltip itooltip-light hover-scale rounded"
                                        title='<h5 class="mb-0">Ultricies Cras Tortor</h5>'><a
                                            href="/img/photos/cs3-full.jpg" data-glightbox="title: Ultricies Cras Tortor"
                                            data-gallery="project-1"> <img src="/img/photos/cs3.jpg" alt="" /></a>
                                    </figure>
                                </div>
                                <!-- /.item -->
                            </div>
                            <!-- /.row -->
                        </div>

                        <!-- /.project -->
                    </div>
                    <!-- /.projects-tiles -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>

        <hr class="dark my-14 my-md-17" />
        <!-- /.container -->
    </section>
@endsection
