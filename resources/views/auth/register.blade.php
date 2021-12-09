@extends('layout.admin.app')

@section('title', 'Register')

@section('content')
<div class="col-sm-6 align-self-center">
    <div class="sign-in-from">
        <h1 class="mb-0">Sign Up</h1>
        <p>Enter your email address and password to access admin panel.</p>
        <form action="{{ route('register') }}" method="POST" class="mt-4">
            @csrf
            <div class="form-group">
                <label for="name">Nama Lengkap</label>
                <input type="text" name="name" class="form-control mb-0 @error('name') is-invalid @enderror" id="name"
                    placeholder="Nama Lengkap" value="{{old('name')}}">
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control mb-0 @error('email') is-invalid @enderror"
                    id="email" placeholder="Email" value="{{old('email')}}">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control mb-0 @error('password') is-invalid @enderror"
                    id="password" placeholder="Password" value="{{old('password')}}">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="password-confirm">{{ __('Confirm Password') }}</label>
                <input type="password" name="password_confirmation"
                    class="form-control mb-0 @error('password_confirmation') is-invalid @enderror" id="password-confirm"
                    placeholder="Confirm-Password" value="{{old('password_confirmation')}}">
                @error('password-confirm')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="d-inline-block w-100">
                {{-- <div class="custom-control custom-checkbox d-inline-block mt-2 pt-1">
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">I accept <a href="#">Terms and
                            Conditions</a></label>
                </div> --}}
                <button type="submit" class="btn btn-primary float-right">Sign Up</button>
            </div>
            <div class="sign-info">
                <span class="dark-color d-inline-block line-height-2">Already Have Account ? <a
                        href="{{route('login')}}">Log
                        In</a></span>
                <ul class="iq-social-media">
                    <li><a href="#"><i class="ri-facebook-box-line"></i></a></li>
                    <li><a href="#"><i class="ri-twitter-line"></i></a></li>
                    <li><a href="#"><i class="ri-instagram-line"></i></a></li>
                </ul>
            </div>
        </form>
    </div>
</div>
<div class="col-sm-6 text-center">
    <div class="sign-in-detail text-white">
        <a class="sign-in-logo mb-5" href="#"><img src="{{ asset('assets/dashboard/images/logo-white.png') }}"
                class="img-fluid" alt="logo"></a>
        <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="false" data-dots="true" data-items="1"
            data-items-laptop="1" data-items-tab="1" data-items-mobile="1" data-items-mobile-sm="1" data-margin="0">
            <div class="item">
                <img src="{{ asset('assets/dashboard/images/login/1.png') }}" class="img-fluid mb-4" alt="logo">
                <h4 class="mb-1 text-white">Manage your orders</h4>
                <p>It is a long established fact that a reader will be distracted by the readable content.</p>
            </div>
            <div class="item">
                <img src="{{ asset('assets/dashboard/images/login/1.png') }}" class="img-fluid mb-4" alt="logo">
                <h4 class="mb-1 text-white">Manage your orders</h4>
                <p>It is a long established fact that a reader will be distracted by the readable content.</p>
            </div>
            <div class="item">
                <img src="{{ asset('assets/dashboard/images/login/1.png') }}" class="img-fluid mb-4" alt="logo">
                <h4 class="mb-1 text-white">Manage your orders</h4>
                <p>It is a long established fact that a reader will be distracted by the readable content.</p>
            </div>
        </div>
    </div>
</div>
@endsection
