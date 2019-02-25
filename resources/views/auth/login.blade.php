@extends('layouts.app')

@section('content')
<div class="container">
    <div class="account-pages mt-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center w-75 m-auto">
                                <a href="index.html">
                                    <span><img src="assets/images/logo.png" alt="" height="22"></span>
                                </a>
                                <p class="text-muted mb-4 mt-3">Enter your username and password to access admin panel.</p>
                            </div>

                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group mb-3">
                                    <label for="emailaddress">Username</label>
                                    <input class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" type="text" name="username" value="{{ old('username') }}" required="" placeholder="Enter your Username">
                                </div>

                                <div class="form-group mb-3">
                                    <a href="pages-recoverpw.html" class="text-muted float-right"><small></small></a>
                                    <label for="password">Password</label>
                                    <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" required="" placeholder="Enter your password">
                                </div>

                                <div class="form-group mb-3">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="checkbox-signin" checked>
                                        <label class="custom-control-label" for="checkbox-signin">Remember me</label>
                                    </div>
                                </div>

                                <div class="form-group mb-0 text-center">
                                    <button class="btn btn-primary btn-block" type="submit"> Log In </button>
                                </div>

                            </form>

                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <p class="text-muted"> <a href="{{ route('password.request') }}" class="text-muted ml-1">Forgot your password?</a></p>
                            <p class="text-muted">Don't have an account? <a href="{{ route('register') }}" class="text-dark ml-1"><b>Sign Up</b></a></p>
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->
                    @if(!$errors->isEmpty())
                    <div class="alert alert-danger">{{$errors->first()}}</div>
                    @endif
                </div> <!-- end col -->
            </div>
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->
</div>
@endsection
