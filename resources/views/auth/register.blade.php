@extends('layouts.app')

@section('content')
<div class="container">
    <div class="account-pages mt-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card">

                        <div class="card-body p-4">
                            
                            <div class="text-center w-75 m-auto">
                                <a href="index.html">
                                    <span><img src="assets/images/logo.png" alt="" height="22"></span>
                                </a>
                                <p class="text-muted mb-4 mt-3">Don't have an account? Create one now</p>
                            </div>

                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                            <label for="fullname">First Name</label>
                                            <input class="form-control{{ $errors->has('fName') ? ' is-invalid' : '' }}" type="text" name="fName" placeholder="Enter First Name" required value="{{ old('fName') }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                            <label for="fullname">Last Name</label>
                                            <input class="form-control{{ $errors->has('lName') ? ' is-invalid' : '' }}" type="text" name="lName" placeholder="Enter last Name" required value="{{ old('lName') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                            <label for="username">Username</label>
                                            <input class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" type="text" required 
                                           name="username" placeholder="Enter your Username" value="{{ old('username') }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                            <label for="emailaddress">Email</label>
                                            <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" required 
                                           name="email" placeholder="Enter your Email" value="{{ old('email') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                       <div class="form-group mb-3">
                                           <label for="password">Password</label>
                                           <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" required name="password" placeholder="Enter your password">
                                       </div> 
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                            <label for="password">Confirm Password</label>
                                            <input class="form-control" type="password" required name="password_confirmation" placeholder="Confirm password">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-0 text-center">
                                    <button class="btn btn-primary btn-block" type="submit"> Sign Up </button>
                                </div>

                            </form>
                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->

                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <p class="text-muted">Already have account? <a href="{{route('login')}}" class="text-dark ml-1"><b>Log In</b></a></p>
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->
                    @if(!$errors->isEmpty())
                    <div class="alert alert-danger">{{$errors->first()}}</div>
                    @endif
                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->
</div>
@endsection
