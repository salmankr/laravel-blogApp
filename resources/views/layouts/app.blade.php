<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

    <!-- App css -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/app.min.css')}}" rel="stylesheet" type="text/css" />
</head>
<body>
    <div id="app">
        @auth
        <div class="navbar-custom">
            <ul class="list-unstyled topbar-right-menu float-right mb-0">

                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle nav-user mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="assets/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
                        <small class="pro-user-name ml-1">
                            <span id="auth-name"> {{Auth::user()->f_name}}</span>
                        </small>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown ">
                        <!-- item-->
                        <div class="dropdown-header noti-title">
                            <h6 class="text-overflow m-0">Welcome !</h6>
                        </div>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-user"></i>
                            <span>My Account</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-settings"></i>
                            <span>Settings</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-lock"></i>
                            <span>Lock Screen</span>
                        </a>

                        <div class="dropdown-divider"></div>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <span>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button class="btn btn-primary" type="submit"> Log Out </button>
                                </form>
                            </span>
                        </a>

                    </div>
                </li>

            </ul>
            <button class="button-menu-mobile open-left disable-btn">
                <i class="fe-menu"></i>
            </button>
            <div class="app-search">
                <form>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search...">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">
                                <i class="fe-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        @endauth
        <main>
            @yield('content')
        </main>
    </div>
    <!-- App js -->
    <script src="{{asset('js/vendor.min.js')}}"></script>
    <script src="{{asset('js/app.min.js')}}"></script>

    <!-- Plugins js -->
    <script src="{{asset('js/vendor/Chart.bundle.js')}}"></script>
    <script src="{{asset('js/vendor/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('js/vendor/jquery.knob.min.js')}}"></script>

    <script src="{{asset('js/pages/dashboard.init.js')}}"></script> 
    
    <script src="{{asset('js/custom.js')}}"></script>
</body>
</html>
