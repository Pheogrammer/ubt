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
                                    {{ __('Projects') }}
                                </h2>
                            </div>
                            <div class="col-md-3  ">
                                <a href="{{ route('CreateProject') }}" class="btn btn-primary">Create New Project</a>
                            </div>
                        </div>
                    </div>

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
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Published On</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $try = 1;
                                @endphp
                                @foreach ($project as $item)
                                    <tr>
                                        <td>{{ $try }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ Str::limit($item->paragraph1, 100, '...') }}</td>
                                        <td>{{ $item->formattedDate }}</td>
                                        <td>
                                            <a href="{{ route('viewprojectAdmin', $item->id) }}"
                                                class="btn btn-primary">View</a>
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
