<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Title Icon --}}
    <link rel="icon" href={{ asset('website/images/logo3.jpg') }} type="image/x-icon">

    {{-- Fontawesome --}}
    <link rel="stylesheet" href={{ asset('website/fontawesome-free-5.15.3-web/css/fontawesome.css') }}>
    <link rel="stylesheet" href={{ asset('website/fontawesome-free-5.15.3-web/css/all.css') }}>

    {{-- Css --}}
    <link rel="stylesheet" href={{ asset('website/css/websiteLayout.css') }}>
    @yield('css')

    {{-- Bootstrap --}}
    <link rel="stylesheet" href={{ asset('website/bootstrap-5.0.2-dist/css/bootstrap.css') }}>
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light navbar-wrap bg-white fixed-top">
            <div class="container">
                <a class="navbar-brand" href="/"><img src="{{ asset('website/images/logo_landscape1.png') }}" alt="" srcset=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="/blogs">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/informasi">Informasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/list-kegiatan">Kegiatan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/#about-us">About-Us</a>
                        </li>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="{{route('login')}}">Account</a>
                        </li> --}}
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    @yield('content')

    <footer>
        <div class="container-fluid pb-5">
            <div class="footer text-center pt-5 pb-2">
                <div class="menu">
                    <a href="#" class="px-4 footer-menu">Login</a>
                    <a href="#" class="px-4 footer-menu">Register</a>
                    <a href="/informasi" class="px-4 footer-menu">Informasi</a>
                    <a href="/list-kegiatan" class="px-4 footer-menu">Kegiatan</a>
                </div>
                <div class="icon pt-4 ">
                    <a href="#" class="px-4"><i class="fab fa-facebook-f  footer-icon" style="font-size: 30px;"></i></a>
                    <a href="#" class="px-4"><i class="fab fa-instagram  footer-icon" style="font-size: 30px;"></i></a>
                    <a href="#" class="px-4"><i class="fab fa-linkedin  footer-icon" style="font-size: 30px;"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-copyright text-center pt-3 pb-2 text-light">
            <p>&copy; Copyright <a href="Home2.html">Paryasop.com</a> <span class="px-2">|</span> Created by Paryasop_IT</p>
        </div>
    </footer>


    {{-- Js Fontawesome --}}
    <script src="{{ asset('website/fontawesome-free-5.15.3-web/js/fontawesome.js') }}"></script>
    {{-- Js Bootstrap --}}
    <script src="{{ asset('website/bootstrap-5.0.2-dist/js/bootstrap.js') }}"></script>
    @yield('js')
</body>
</html>
