@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <div class="row ${1| ,row-cols-2,row-cols-3, auto,justify-content-md-center,|}">
                            <div class="col  ">
                                <h2>
                                    {{ __('Blog Posts') }}
                                </h2>
                            </div>
                            <div class="col-md-3  ">
                                <a href="{{route('CreateBlog')}}" class="btn btn-primary">Create New Blog</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $try = 1;
                                @endphp
                                @foreach ($blog as $item)
                                    <tr>
                                        <td>{{$try}}</td>
                                        <td>{{$item->title}}</td>
                                        <td>{{$item->paragraph1}}</td>
                                        <td>
                                            <a href="{{route('Viewblog',$item->id)}}" class="btn btn-primary">View</a>
                                        </td>
                                    </tr>
                                    @php
                                        $try++;
                                    @endphp
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
