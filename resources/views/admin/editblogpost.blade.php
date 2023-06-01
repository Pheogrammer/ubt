@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">{{ __('Edit Blog Post') }}</div>

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
                        <form action="{{ route('saveeditedBlog') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="text" name="id" value="{{ $blog->id }}" hidden>
                            <div class="row ${1| ,row-cols-2,row-cols-3, auto,justify-content-md-center,|}">
                                <div class="col  ">
                                    <div class="form-group">
                                        <label for="">Blog Title</label>
                                        <input type="text" required name="title" id="" class="form-control"
                                            placeholder="" value="{{ $blog->title }}" aria-describedby="helpId">
                                    </div>
                                </div>
                            </div> <br>
                            <div class="row ${1| ,row-cols-2,row-cols-3, auto,justify-content-md-center,|}">
                                <div class="col  ">
                                    <img src="{{ asset('images/blogs/' . $blog->image1) }}"
                                        class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}"
                                        alt="">
                                </div>
                            </div>
                            <br>
                            <div class="row ${1| ,row-cols-2,row-cols-3, auto,justify-content-md-center,|}">
                                <div class="col  ">
                                    <div class="form-group">
                                        <label for="">Main Image</label>
                                        <input type="file" name="image1" id="" class="form-control"
                                            placeholder="" accept="image/*" aria-describedby="helpId">
                                    </div>
                                </div>
                            </div> <br>
                            <div class="row ${1| ,row-cols-2,row-cols-3, auto,justify-content-md-center,|}">
                                <div class="col  ">
                                    <div class="form-group">
                                        <label for="">Blog Content Half 1</label>
                                        <textarea type="text" required name="half1" id="" class="form-control" placeholder=""
                                            aria-describedby="helpId">{{ $blog->paragraph1 }}</textarea>
                                    </div>
                                </div>
                            </div><br>
                            <div class="row ${1| ,row-cols-2,row-cols-3, auto,justify-content-md-center,|}">
                                <div class="col  ">
                                    <div class="form-group">
                                        <label for="">Blog Content Half 2</label>
                                        <textarea type="text" required name="half2" id="" class="form-control" placeholder=""
                                            aria-describedby="helpId">{{ $blog->paragraph2 }}</textarea>
                                    </div>
                                </div>
                            </div><br><br>
                            <div class="row ${1| ,row-cols-2,row-cols-3, auto,justify-content-md-center,|}">
                                <div class="col  ">
                                    <img src="{{ asset('images/blogs/' . $blog->image2) }}"
                                        class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}"
                                        alt="">
                                </div>
                                <div class="col  ">
                                    <img src="{{ asset('images/blogs/' . $blog->image3) }}"
                                        class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}"
                                        alt="">
                                </div>
                            </div> <br>
                            <div class="row ${1| ,row-cols-2,row-cols-3, auto,justify-content-md-center,|}">
                                <div class="col  ">
                                    <div class="form-group">
                                        <label for="">Image 2</label>
                                        <input type="file" name="image2" id="" class="form-control"
                                            placeholder="" accept="image/*" aria-describedby="helpId">
                                    </div>
                                </div>
                                <div class="col  ">
                                    <div class="form-group">
                                        <label for="">Image 3</label>
                                        <input type="file" name="image3" id="" class="form-control"
                                            placeholder="" accept="image/*" aria-describedby="helpId">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row ${1| ,row-cols-2,row-cols-3, auto,justify-content-md-center,|}">
                                <div class="col  ">
                                    <img src="{{ asset('images/blogs/' . $blog->image4) }}"
                                        class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}"
                                        alt="">
                                </div>
                                <div class="col  ">
                                    <img src="{{ asset('images/blogs/' . $blog->image5) }}"
                                        class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}"
                                        alt="">
                                </div>
                            </div> <br>
                            <div class="row ${1| ,row-cols-2,row-cols-3, auto,justify-content-md-center,|}">
                                <div class="col  ">
                                    <div class="form-group">
                                        <label for="">Image 4</label>
                                        <input type="file" name="image4" id="" class="form-control"
                                            placeholder="" accept="image/*" aria-describedby="helpId">
                                    </div>
                                </div>
                                <div class="col  ">
                                    <div class="form-group">
                                        <label for="">Image 5</label>
                                        <input type="file" name="image5" id="" class="form-control"
                                            placeholder="" accept="image/*" aria-describedby="helpId">
                                    </div>
                                </div>
                            </div><br>
                            <div class="row ${1| ,row-cols-2,row-cols-3, auto,justify-content-md-center,|}">
                                <div class="col  ">
                                    <button type="submit" class="btn btn-primary">Publish</button>
                                    <a class="btn btn-danger" href="{{ route('Adminblog') }}">Cancel</a>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
