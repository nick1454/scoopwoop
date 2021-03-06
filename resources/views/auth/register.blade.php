@extends('layouts.auth')
@section('title', 'Register')
@section('content')
<div>
    <div class="text-center p-t-20 p-b-20">
        <span class="db"><img src="../../assets/images/logo.png" alt="logo" /></span>
    </div>
    <!-- Form -->
    <form class="form-horizontal m-t-20" action="{{ route('register') }}">
        @csrf
        <div class="row p-b-30">
            <div class="col-12">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-success text-white" id="basic-addon1"><i class="ti-user"></i></span>
                    </div>
                    <input type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="name" aria-label="name" aria-describedby="basic-addon1" required autocomplete="name" autofocus>
                    @error('name')
                        <span class="invalid-feedback text-white" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <!-- email -->
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-danger text-white" id="basic-addon1"><i class="ti-email"></i></span>
                    </div>
                    <input type="text" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email Address" aria-label="Username" aria-describedby="basic-addon1" required autocomplete="email">
                    @error('email')
                        <span class="invalid-feedbacktext-white" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-warning text-white" id="basic-addon2"><i class="ti-pencil"></i></span>
                    </div>
                    <input type="text" class="form-control form-control-lg" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" name="password" required autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback text-white" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-info text-white" id="basic-addon2"><i class="ti-pencil"></i></span>
                    </div>
                    <input type="text" class="form-control form-control-lg" placeholder="Confirm Password" aria-label="Password" aria-describedby="basic-addon1" required>
                </div>
            </div>
        </div>
        <div class="row border-top border-secondary">
            <div class="col-12">
                <div class="form-group">
                    <div class="p-t-20">
                        <button class="btn btn-block btn-lg btn-info" type="submit">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
