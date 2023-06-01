@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">{{ __('Management') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <!-- Button trigger modal -->


                        <div class="row">

                            @foreach ($staff as $item)
                                <div class="card col-md-6">
                                    <div class="card-header"></div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-3 ">
                                                <h4 class="card-title">{{ $item->name }}</h4>
                                                <p class="card-text">{{ $item->position }}</p>
                                            </div>
                                            <div class="col  ">
                                                <img src="{{ asset('images/profiles/' . $item->picture) }}" alt=""
                                                    srcset="" style="border-radius: 100px; max-height:200px;">
                                            </div>
                                            <div class="col  ">
                                                Phone: {{ $item->phone }} <br>
                                                Email: {{ $item->email }} <br>
                                                Twitter: {{ $item->twitter }} <br>
                                                LinkedIn: {{ $item->linkedin }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        <button type="button" class="btn btn-warning" data-toggle="modal"
                                            data-target=".bd-example-modal-lg{{ $item->id }}">Edit Staff</button>
                                        <div class="modal fade bd-example-modal-lg{{ $item->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content container">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <p class="card-text">
                                                                <br>
                                                            <h3>Staff Details Form</h3>
                                                            <form action="{{ route('updatestaff', $item->id) }}"
                                                                method="post" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="form-group">
                                                                    <label for="">Name</label>
                                                                    <input type="text" name="name"
                                                                        value="{{ $item->name }}" required id=""
                                                                        class="form-control" placeholder=""
                                                                        aria-describedby="helpId">
                                                                </div> <br>
                                                                <div class="form-group">
                                                                    <label for="">position</label>
                                                                    <input type="text" name="position" required
                                                                        id="" class="form-control"
                                                                        value="{{ $item->position }}" placeholder=""
                                                                        aria-describedby="helpId">
                                                                </div><br>
                                                                <div class="form-group">
                                                                    <label for="">Image/Photo Shot</label>
                                                                    <input type="file" name="image" id=""
                                                                        class="form-control" placeholder="" accept="image/*"
                                                                        aria-describedby="helpId">
                                                                </div><br>
                                                                <div class="form-group">
                                                                    <label for="">Phone Number</label>
                                                                    <input type="tel" name="phone" required
                                                                        id="" class="form-control" placeholder=""
                                                                        value="{{ $item->phone }}"
                                                                        aria-describedby="helpId">
                                                                </div><br>
                                                                <div class="form-group">
                                                                    <label for="">email</label>
                                                                    <input type="email" name="email" required
                                                                        id="" class="form-control" placeholder=""
                                                                        value="{{ $item->email }}"
                                                                        aria-describedby="helpId">
                                                                </div><br>
                                                                <div class="form-group">
                                                                    <label for="">twitter</label>
                                                                    <input type="text" name="twitter" id=""
                                                                        class="form-control" placeholder=""
                                                                        value="{{ $item->twitter }}"
                                                                        aria-describedby="helpId">
                                                                </div><br>
                                                                <div class="form-group">
                                                                    <label for="">linkedIn</label>
                                                                    <input type="text" name="linkedIn" id=""
                                                                        class="form-control" placeholder=""
                                                                        value="{{ $item->linkedin }}"
                                                                        aria-describedby="helpId">
                                                                </div> <br> <br>
                                                                <div
                                                                    class="row ${1| ,row-cols-2,row-cols-3, auto,justify-content-md-center,|}">
                                                                    <div class="col  ">
                                                                        <button type="submit" class="btn btn-primary"
                                                                            onclick="return confirm('Are you sure you want to proceed with the action?')">Register</button>
                                                                        <a href="#"
                                                                            class="btn btn-danger">Cancel</a>
                                                                    </div>
                                                                </div> <br>
                                                            </form>
                                                            </p>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        {{--  --}}
                                        <a href="{{ route('deletestaff', $item->id) }}" class="btn btn-danger"
                                            onclick="return confirm('Are you sure you want to delete this staff?')">Delete
                                            Staff</a>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <div class="card-footer text-muted">
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target=".bd-example-modal-lg">Add New Staff</button>
                            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content container">
                                        <div class="card">
                                            <div class="card-body">
                                                <p class="card-text">
                                                    <br>
                                                <h3>Staff Registration Form</h3>
                                                <form action="{{ route('saveStaff') }}" method="post"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="">Name</label>
                                                        <input type="text" name="name" required id=""
                                                            class="form-control" placeholder=""
                                                            aria-describedby="helpId">
                                                    </div> <br>
                                                    <div class="form-group">
                                                        <label for="">position</label>
                                                        <input type="text" name="position" required id=""
                                                            class="form-control" placeholder=""
                                                            aria-describedby="helpId">
                                                    </div><br>
                                                    <div class="form-group">
                                                        <label for="">Image/Photo Shot</label>
                                                        <input type="file" name="image" required id=""
                                                            class="form-control" placeholder="" accept="image/*"
                                                            aria-describedby="helpId">
                                                    </div><br>
                                                    <div class="form-group">
                                                        <label for="">Phone Number</label>
                                                        <input type="tel" name="phone" required id=""
                                                            class="form-control" placeholder=""
                                                            aria-describedby="helpId">
                                                    </div><br>
                                                    <div class="form-group">
                                                        <label for="">email</label>
                                                        <input type="email" name="email" required id=""
                                                            class="form-control" placeholder=""
                                                            aria-describedby="helpId">
                                                    </div><br>
                                                    <div class="form-group">
                                                        <label for="">twitter</label>
                                                        <input type="text" name="twitter" id=""
                                                            class="form-control" placeholder=""
                                                            aria-describedby="helpId">
                                                    </div><br>
                                                    <div class="form-group">
                                                        <label for="">linkedIn</label>
                                                        <input type="text" name="linkedIn" id=""
                                                            class="form-control" placeholder=""
                                                            aria-describedby="helpId">
                                                    </div> <br> <br>
                                                    <div
                                                        class="row ${1| ,row-cols-2,row-cols-3, auto,justify-content-md-center,|}">
                                                        <div class="col  ">
                                                            <button type="submit"
                                                                class="btn btn-primary">Register</button>
                                                            <a href="#" class="btn btn-danger">Cancel</a>
                                                        </div>
                                                    </div> <br>
                                                </form>
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br> <br>
                <div class="card">
                    <div class="card-header">{{ __('Management') }}</div>

                    <div class="card-body">

                        <!-- Button trigger modal -->


                        <div class="row">

                            @foreach ($partner as $item)
                                <div class="card col-md-4">
                                    <div class="card-header"></div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col ">
                                                <h4 class="card-title">{{ $item->name }}</h4>
                                                <p class="card-text">
                                                    <img src="{{ asset('images/partners/' . $item->logo) }}"
                                                        alt="" srcset="" style="max-height:200px;">
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        <button type="button" class="btn btn-warning" data-toggle="modal"
                                            data-target=".bd-example-modal-lg{{ $item->id }}-partner">Edit
                                            Partner</button>
                                        <div class="modal fade bd-example-modal-lg{{ $item->id }}-partner"
                                            tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content container">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <p class="card-text">
                                                                <br>
                                                            <h3>Partner Details Form</h3>
                                                            <form action="{{ route('updatePartner', $item->id) }}"
                                                                method="post" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="form-group">
                                                                    <label for="">Name</label>
                                                                    <input type="text" name="name"
                                                                        value="{{ $item->name }}" required
                                                                        id="" class="form-control"
                                                                        placeholder="" aria-describedby="helpId">
                                                                </div> <br>
                                                                <div class="form-group">
                                                                    <label for="">Logo</label>
                                                                    <input type="file" name="image" id=""
                                                                        class="form-control" placeholder=""
                                                                        accept="image/*" aria-describedby="helpId">
                                                                </div><br> <br>
                                                                <div
                                                                    class="row ${1| ,row-cols-2,row-cols-3, auto,justify-content-md-center,|}">
                                                                    <div class="col  ">
                                                                        <button type="submit" class="btn btn-primary"
                                                                            onclick="return confirm('Are you sure you want to proceed with the action?')">Register</button>
                                                                        <a href="#"
                                                                            class="btn btn-danger">Cancel</a>
                                                                    </div>
                                                                </div> <br>
                                                            </form>
                                                            </p>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        {{--  --}}
                                        <a href="{{ route('deletepartner', $item->id) }}" class="btn btn-danger"
                                            onclick="return confirm('Are you sure you want to delete this partner?')">Delete
                                            Staff</a>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <div class="card-footer text-muted">
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target=".bd-example-modal-lg-partner">Add New Partner</button>
                            <div class="modal fade bd-example-modal-lg-partner" tabindex="-1" role="dialog"
                                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content container">
                                        <div class="card">
                                            <div class="card-body">
                                                <p class="card-text">
                                                    <br>
                                                <h3>Partner Registration Form</h3>
                                                <form action="{{ route('registerPartner') }}" method="post"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="">Name</label>
                                                        <input type="text" name="name" required id=""
                                                            class="form-control" placeholder=""
                                                            aria-describedby="helpId">
                                                    </div> <br>
                                                    <div class="form-group">
                                                        <label for="">Logo</label>
                                                        <input type="file" name="image" required id=""
                                                            class="form-control" placeholder="" accept="image/*"
                                                            aria-describedby="helpId">
                                                    </div><br> <br>
                                                    <div
                                                        class="row ${1| ,row-cols-2,row-cols-3, auto,justify-content-md-center,|}">
                                                        <div class="col  ">
                                                            <button type="submit"
                                                                class="btn btn-primary">Register</button>
                                                            <a href="#" class="btn btn-danger">Cancel</a>
                                                        </div>
                                                    </div> <br>
                                                </form>
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <br>
                <br>
                <br>
                <div class="col">
                    <div class="card">
                        <div class="card-header">{{ __('Company Contacts') }}</div>

                        <div class="card-body">

                                <form action="{{route('changeContact')}}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="">Office Phone</label>
                                                <input type="text" value="{{ $contact->phone ?? '' }}" name="phone" id="" class="form-control"
                                                    placeholder="" aria-describedby="helpId">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="">Office Email</label>
                                                <input type="email" value="{{ $contact->email ?? '' }}" name="email" id="" class="form-control"
                                                    placeholder="" aria-describedby="helpId">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="">Office Address</label>
                                                <input type="text" value="{{ $contact->address ?? '' }}" name="address" id="" class="form-control"
                                                    placeholder="" aria-describedby="helpId">
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row ${1| ,row-cols-2,row-cols-3, auto,justify-content-md-center,|}">
                                        <div class="col  ">
                                            <button type="submit"
                                                class="btn btn-primary">Update</button>
                                            <a href="#" class="btn btn-danger">Cancel</a>
                                        </div>
                                    </div>
                                </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
