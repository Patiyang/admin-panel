<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

    <script src="https://kit.fontawesome.com/29f90c65af.js" crossorigin="anonymous"></script>
    {{-- <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet"> --}}
    @vite(['resources/js/app.js', 'resources/js/script.js', 'resources/css/sidebar.css'])


</head>

{{-- <body>
    <div class="main-container d-flex">

        @if (Auth::check() == true)
            <div class="sidebar" id="side_nav">
                <div class="header-box px-2 pt-3 pb-4 d-flex justify-content-between">
                    <h1 class="fs-4">
                        <span class="bg-white text-dark rounded shadow px-2 me-2">AL</span>
                        <span class="text-white"> Ally Admin</span>
                    </h1>
                    <button class="btn d-md-none d-block close-btn px-1 py-0 text-white"><i
                            class="fa-solid fa-bars-staggered"></i></button>
                </div>
                <ul class="list-unstyled px-2">
                    <li class=""><a href="/settings" class="text-decoration-none px-3 py-2 d-block"><i
                                class="fa-lg fa-sharp fa-solid fa-gears"></i> Settings</a></li>
                    <li class=""><a href="/users" class="text-decoration-none px-3 py-2 d-block"><i
                                class="fa-lg fa-solid fa-users"></i> Users</a></li>
                    <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i
                                class="fa-lg fa-solid fa-comments"></i> Querries</a></li>

                </ul>
            </div>
        @endif
        <div class="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed">
                <div class="container-fluid">
                    <div class="d-flex justify-content-between d-md-none d-block">

                        @if (Auth::check() == true)
                            <button class="btn px-1 py-0 open-btn">
                                <i class="fa-solid fa-bars-staggered"></i>
                               
                                
                            </button> <div class="px-3"><a class="navbar-brand fs-4" href="<?php echo Auth::check() == true ? '/home' : '/'; ?>">
                                    <span class="bg-dark rounded px-2 py-0 text-light">
                                        AL
                                    </span>
                                </a></div>
                        @endif
                    </div>
                    <button class="navbar-toggler py-0 border-0" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <i class="fa-solid fa-bars"></i> </button>

                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto">
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true" v-pre>
                                        {{ Auth::user()->email }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
            <main class="py-4">
                <div>
                    @include('layouts.inc.alerts')

                </div>
                @yield('content')
            </main>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            $(".sidebar ul li").each(function() {
                var navItem = $(this);
                if (navItem.find("a").attr("href") == location.pathname) {
                    navItem.addClass("active");
                }
            });
        });


        $(".sidebar ul li").on('click', function() {

            $(".sidebar ul li.active").removeClass('active');
            $(this).addClass('active');


        })
        $('.open-btn').on('click', function() {
            $('.sidebar').addClass('active');
        });
        $('.close-btn').on('click', function() {
            $('.sidebar').removeClass('active');
        });
    </script>
</body> --}}

<body>
    <main class="py-14">
        @include('layouts.inc.alerts')
        @yield('content')
    </main>
    <!-- navbar -->
    <nav class="navbar">
        <div class="logo_item">
            <i class="bx bx-menu" id="sidebarOpen"></i>
            {{-- <img src="images/logo.png" alt="dcd"> --}}

            </i>Ally Admin
        </div>

        {{-- <div class="search_bar">
            <input type="text" placeholder="Search" />
        </div> --}}

        <div class="navbar_content">
            <i class="bi bi-grid"></i>
            <i class='bx bx-sun' id="darkLight"></i>
            <i class='bx bx-bell'></i>
            <img src="images/profile.jpg" alt="" class="profile" />
        </div>
    </nav>

    <!-- sidebar -->
    <nav class="sidebar">
        <div class="menu_content">
            <ul class="menu_items">
                <div class="menu_title menu_dahsboard"></div>
                <li class="item">
                    <div href="#" class="nav_link submenu_item">
                        <span class="navlink_icon">
                            <i class="bx bx-home-alt"></i>
                        </span>
                        <span class="navlink">Home</span>
                    </div>
                </li>
                <li class="item">
                    <div href="#" class="nav_link submenu_item">
                        <span class="navlink_icon">
                            <i class="bx bx-grid-alt"></i>
                        </span>
                        <span class="navlink">Overview</span>

                    </div>
            </ul>
            <div class="bottom_content">
                <div class="bottom expand_sidebar">
                    <span> Expand</span>
                    <i class='bx bx-log-in'></i>
                </div>
                <div class="bottom collapse_sidebar">
                    <span> Collapse</span>
                    <i class='bx bx-log-out'></i>
                </div>
            </div>
        </div>
    </nav>

</body>

</html>
