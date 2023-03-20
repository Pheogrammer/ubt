@extends('layouts.ubt')

@section('content')
    <section class="wrapper image-wrapper bg-cover bg-image bg-overlay bg-overlay-500"
        data-image-src="{{ asset('/img/photos/bg27.jpg') }}">
        <div class="container pt-10 pb-19 pt-md-14 pb-md-20 text-center">
            <div class="row">
                <div class="col-md-7 col-lg-6 col-xl-5 mx-auto">
                    <h1 class="display-1 mb-3">Login</h1>
                    <p class="lead px-lg-5 px-xxl-8"></p>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <section class="wrapper bg-light">
        <div class="container py-14 py-md-22">
            <div class="row mt-6">
                <div class="col-xl-10 mx-auto">
                    <div class="projects-tiles">
                        <div class="project grid grid-view">
                            <div class="row g-6 isotope">
                                <div class="row justify-content-center">
                                    <div class="col-md-8">
                                        <div class="card">
                                            <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                                            <div class="card-body">
                                                @if (session('resent'))
                                                    <div class="alert alert-success" role="alert">
                                                        {{ __('A fresh verification link has been sent to your email address.') }}
                                                    </div>
                                                @endif

                                                {{ __('Before proceeding, please check your email for a verification link.') }}
                                                {{ __('If you did not receive the email') }},
                                                <form class="d-inline" method="POST"
                                                    action="{{ route('verification.resend') }}">
                                                    @csrf
                                                    <button type="submit"
                                                        class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <hr class="dark my-14 my-md-17" />
    </section>
@endsection
