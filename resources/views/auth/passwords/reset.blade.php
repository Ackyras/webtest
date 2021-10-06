@extends('layout.admin.app')

@section('title', 'Reset Password')

@section('content')
<!-- Sign in Start -->
<section class="sign-in-page">
    <div class="container bg-white mt-5 p-0">
        <div class="row no-gutters">
            <div class="col-sm-6 align-self-center">
                <div class="sign-in-from">
                    <h1 class="mb-0">Ubah Password</h1>
                    @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                    @endif
                    <form class="mt-4" method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $request->token }}">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Alamat E-Mail</label>
                            <input type="email" class="form-control mb-0 @error('email') is-invalid @enderror"
                                name="email" value="{{$email ?? old('email') }}" required autocomplete="email" autofocus
                                id="email" placeholder="Enter email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password Baru</label>
                            <input type="password" class="form-control mb-0 @error('password') is-invalid @enderror"
                                name="password" required autocomplete="new-password" id="password"
                                placeholder="Password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Konfirmasi Password</label>
                            <input type="password" class="form-control mb-0 @error('password') is-invalid @enderror"
                                name="password_confirmation" required autocomplete="new-password" id="password-confirm"
                                placeholder="Password">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="d-inline-block w-100">
                            <button type="submit" class="btn btn-primary float-right">{{ __('Simpan') }}</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-6 text-center">
                <div class="sign-in-detail text-white">
                    <a class="sign-in-logo mb-5" href="#"><img src="{{ asset('admin/images/logo-white.png') }}"
                            class="img-fluid" alt="logo"></a>
                    <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="false" data-dots="true"
                        data-items="1" data-items-laptop="1" data-items-tab="1" data-items-mobile="1"
                        data-items-mobile-sm="1" data-margin="0">
                        <div class="item">
                            <img src="{{ asset('admin/images/login/1.png') }}" class="img-fluid mb-4" alt="logo">
                            <h4 class="mb-1 text-white">Manage your orders</h4>
                            <p>It is a long established fact that a reader will be distracted by the readable
                                content.</p>
                        </div>
                        <div class="item">
                            <img src="{{ asset('admin/images/login/1.png') }}" class="img-fluid mb-4" alt="logo">
                            <h4 class="mb-1 text-white">Manage your orders</h4>
                            <p>It is a long established fact that a reader will be distracted by the readable
                                content.</p>
                        </div>
                        <div class="item">
                            <img src="{{ asset('admin/images/login/1.png') }}" class="img-fluid mb-4" alt="logo">
                            <h4 class="mb-1 text-white">Manage your orders</h4>
                            <p>It is a long established fact that a reader will be distracted by the readable
                                content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Sign in END -->
@endsection
