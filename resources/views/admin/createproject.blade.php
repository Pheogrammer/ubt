@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">{{ __('Create Blog Post') }}</div>

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
                        <form action="{{ route('SaveCreateProject') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row ${1| ,row-cols-2,row-cols-3, auto,justify-content-md-center,|}">
                                <div class="col  ">
                                    <div class="form-group">
                                        <label for="">Blog Title</label>
                                        <input type="text" required name="title" id="" class="form-control"
                                            placeholder="" value="{{ old('title') }}" aria-describedby="helpId">
                                    </div>
                                </div>
                            </div> <br>
                            <div class="row ${1| ,row-cols-2,row-cols-3, auto,justify-content-md-center,|}">
                                <div class="col  ">
                                    <div class="form-group">
                                        <label for="">Main Image</label>
                                        <input type="file" required name="image1" id="" class="form-control"
                                            placeholder="" value="{{ old('image1') }}" accept="image/*"
                                            aria-describedby="helpId">
                                    </div>
                                </div>
                            </div> <br>
                            <div class="row ${1| ,row-cols-2,row-cols-3, auto,justify-content-md-center,|}">
                                <div class="col  ">
                                    <div class="form-group">
                                        <label for="">Blog Content Half 1</label>
                                        <textarea type="text" required {{ old('half1') }} name="half1" id="" class="form-control" placeholder=""
                                            aria-describedby="helpId"></textarea>
                                    </div>
                                </div>
                            </div><br>
                            <div class="row ${1| ,row-cols-2,row-cols-3, auto,justify-content-md-center,|}">
                                <div class="col  ">
                                    <div class="form-group">
                                        <label for="">Blog Content Half 2</label>
                                        <textarea type="text" required {{ old('half2') }} name="half2" id="" class="form-control" placeholder=""
                                            aria-describedby="helpId"></textarea>
                                    </div>
                                </div>
                            </div><br>
                            <div class="row ${1| ,row-cols-2,row-cols-3, auto,justify-content-md-center,|}">
                                <div class="col  ">
                                    <div class="form-group">
                                        <label for="">Blog Content Half 3</label>
                                        <textarea type="text" required {{ old('half3') }} name="half3" id="" class="form-control" placeholder=""
                                            aria-describedby="helpId"></textarea>
                                    </div>
                                </div>
                            </div><br>
                            <div class="row ${1| ,row-cols-2,row-cols-3, auto,justify-content-md-center,|}">
                                <div class="col  ">
                                    <div class="form-group">
                                        <label for="">Image 2</label>
                                        <input type="file" required name="image2" id="" class="form-control"
                                            placeholder="" value="{{ old('image2') }}" accept="image/*"
                                            aria-describedby="helpId">
                                    </div>
                                </div>
                                <div class="col  ">
                                    <div class="form-group">
                                        <label for="">Image 3</label>
                                        <input type="file" required name="image3" id="" class="form-control"
                                            placeholder="" value="{{ old('image3') }}" accept="image/*"
                                            aria-describedby="helpId">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row ${1| ,row-cols-2,row-cols-3, auto,justify-content-md-center,|}">
                                <div class="col  ">
                                    <div class="form-group">
                                        <label for="">Image 4</label>
                                        <input type="file" name="image4" id="" class="form-control"
                                            placeholder="" value="{{ old('image4') }}" accept="image/*"
                                            aria-describedby="helpId">
                                    </div>
                                </div>
                                <div class="col  ">
                                    <div class="form-group">
                                        <label for="">Image 5</label>
                                        <input type="file" name="image5" id="" class="form-control"
                                            placeholder="" value="{{ old('image5') }}" accept="image/*"
                                            aria-describedby="helpId">
                                    </div>
                                </div>
                            </div><br>
                            <div class="row ${1| ,row-cols-2,row-cols-3, auto,justify-content-md-center,|}">
                                <div class="col  ">
                                    <button type="submit" class="btn btn-primary">Publish</button>
                                    <a class="btn btn-danger" href="{{ route('Adminproject') }}">Cancel</a>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
