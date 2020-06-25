@extends('layouts.auth')
@section('content')
<div id="loginform">
    <div class="text-center p-t-20 p-b-20">
        <span class="db"><img src="../../assets/images/logo.png" alt="logo" /></span>
    </div>
    <!-- Form -->
    <form class="form-horizontal m-t-20" id="loginform" action="{{ route('login') }}">
        @csrf
        <div class="row p-b-30">
            <div class="col-12">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-success text-white" id="basic-addon1"><i class="ti-user"></i></span>
                    </div>
                    <input type="text" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1" required="">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-warning text-white" id="basic-addon2"><i class="ti-pencil"></i></span>
                    </div>
                    <input type="text" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row border-top border-secondary">
            <div class="col-12">
                <div class="form-group">
                    <div class="p-t-20">
                        <button class="btn btn-info" id="to-recover" type="button"><i class="fa fa-lock m-r-5"></i> Lost password?</button>
                        <button class="btn btn-success float-right" type="submit">Login</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<div id="recoverform">
    <div class="text-center">
        <span class="text-white">Enter your e-mail address below and we will send you instructions how to recover a password.</span>
    </div>
    <div class="row m-t-20">
        <!-- Form -->
        <form class="col-12" action="{{ route('password.email') }}">
            <!-- email -->
            @csrf
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-danger text-white" id="basic-addon1"><i class="ti-email"></i></span>
                </div>
                <input id="email" type="email"
                       class="form-control form-control-lg @error('email') is-invalid @enderror"
                       name="email" value="{{ old('email') }}"
                       placeholder="Email Address" aria-label="Username"
                       aria-describedby="basic-addon1" required autocomplete="email" autofocus
                >
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <!-- pwd -->
            <div class="row m-t-20 p-t-20 border-top border-secondary">
                <div class="col-12">
                    <a class="btn btn-success" href="#" id="to-login" name="action">Back To Login</a>
                    <button class="btn btn-info float-right" type="submit" name="action">Recover</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
