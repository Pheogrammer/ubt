@extends('layouts.app')

@section('content')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card text-center" style="padding-top: 3px; padding-bottom: 3px;">
                   Profile Details
            </div>
        </div>
    </div>
    <br>
    <div class="row justify-content-center">
        <div class="col justify-content-center">
            <div class="card">
                <div class="card-body text-center">
                   <i style="font-size: 200px;" class="fa fa-user"></i>
                </div>
            </div>
        </div>
        <div class="col-md-8">
                <div class="card-body">
                    <form method="post" action=""  enctype="multipart/form-data">
                        @csrf
                        @foreach($data as $userdata)
                       <div class="input-group mb-3">
                          <div class="input-group-prepend" >
                            <span class="input-group-text" id="basic-addon1" style="width: 180px;">Full Name</span>
                          </div>
                          <input type="text" value="{{ $userdata->name }}" class="form-control" placeholder="Full Name" aria-label="Username" aria-describedby="basic-addon1" required>
                        </div>

                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1" style="width: 180px;">Email</span>
                          </div>
                          <input type="email" value="{{ $userdata->email }}" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1" required>
                        </div>

                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1" style="width: 180px;">Phone Number</span>
                          </div>
                          <input type="number" value="{{ $userdata->mobile }}" class="form-control" placeholder="Mobile Number" aria-label="Username" aria-describedby="basic-addon1" min="10" max="12">
                        </div>

                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1" style="width: 180px;">Registration Number</span>
                          </div>
                          <input type="text" value="{{ $userdata->reg }}" class="form-control" placeholder="Registration Number" aria-label="Username" aria-describedby="basic-addon1" required>
                        </div>

                        <div class="input-group mb-3 justify-content-center">
                            <button type="submit" id="submit-data" disabled="true" class="btn btn-primary">Save</button> &nbsp;&nbsp;
                            <a class="btn btn-danger" href="{{ route('settings') }}">Cancel</a>
                        </div>
                        @endforeach
                    </form>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3">
            <button class="btn btn-primary"> <i class="fa fa-camera"></i> Change Profile Picture</button>
        </div>
        <div class="col-lg-3">
            <button class="btn btn-primary"> Change Password</button>
        </div>
    </div>
</div>

@endsection
