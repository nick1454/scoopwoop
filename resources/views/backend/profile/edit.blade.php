@extends('layouts.backend')
@section('content')
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    {{ $errors }}
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <form class="form-horizontal" action="{{ route('profile.update') }}">
                  <input type="hidden" name="id" value="1">
                    <div class="card-body">
                        <h4 class="card-title">Update Personal Info</h4>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="fname" name="name" placeholder="Name Here">
                                @if ( $errors->has('name') )
                                <span>
                                  {{ $errors->name }}
                                </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <form class="form-horizontal" action="{{ route('profile.update') }}">
                    <input type="hidden" name="id" value="1">
                    <div class="card-body">
                        <h4 class="card-title">Update Contact Info</h4>
                        <div class="form-group row">
                            <label for="email" class="col-sm-3 text-right control-label col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email Here">
                                @if ( $errors->has('email') )
                                <span>
                                  {{ $errors->first('email') }}
                                </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <form class="form-horizontal"  action="{{ route('profile.update') }}">
                  <input type="hidden" name="id" value="1">
                    <div class="card-body">
                        <h4 class="card-title">Update Password</h4>
                        <div class="form-group row">
                            <label for="password" class="col-sm-3 text-right control-label col-form-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                @if ( $errors->has('password') )
                                <span>
                                  {{  $errors->first('password') }}
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="confirm-password" class="col-sm-3 text-right control-label col-form-label">Confirm Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="confirm-password" name="password_confirmation" placeholder="Confirm Password">
                            </div>
                        </div>
                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- editor -->
    {{-- <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Quill Editor</h4>
                    <!-- Create the editor container -->
                    <div id="editor" style="height: 300px;">
                        <p>Hello World!</p>
                        <p>Some initial <strong>bold</strong> text</p>
                        <p>
                            <br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right sidebar -->
    <!-- ============================================================== -->
    <!-- .right-sidebar -->
    <!-- ============================================================== -->
    <!-- End Right sidebar -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
@endsection
