@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if (Session::has('message'))
                            <div class="alert alert-success">
                                <ul>
                                    <li>{{ Session::get('message') }}</li>
                                </ul>
                            </div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="row ${1| ,row-cols-2,row-cols-3, auto,justify-content-md-center,|}">
                            <div class="col  ">
                                <div class="card text-center">
                                    <img class="card-img-top" src="holder.js/100px180/" alt="">
                                    <div class="card-body">
                                        <h4 class="card-title">Blogs</h4>
                                        <p class="card-text">{{ count($blogTotal) }}</p>
                                    </div>
                                </div>
                            </div>



                            <div class="col  ">
                                <div class="card text-center">
                                    <img class="card-img-top" src="holder.js/100px180/" alt="">
                                    <div class="card-body">
                                        <h4 class="card-title">Projects</h4>
                                        <p class="card-text">{{ count($projectTotal) }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col  ">
                                <div class="card text-center">
                                    <img class="card-img-top" src="holder.js/100px180/" alt="">
                                    <div class="card-body">
                                        <h4 class="card-title">Partners</h4>
                                        <p class="card-text">{{ count($partnerTotal) }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
