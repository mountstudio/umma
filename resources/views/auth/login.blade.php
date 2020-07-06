@extends('layouts.app')
@push('metas')
    <meta property="og:title" content="{{ __('main.title') }}" />
    <meta property="og:type" content="article">
    <meta property="og:url" content="{{ request()->fullUrl() }}" />
    <meta property="og:image" content="{{ asset('img/logo.svg') }}">
    <meta property="og:site_name" content="Ummamag">
@endpush
@section('content')
    <div class="container bg-white ">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-lg-7 mx-0 px-0 bg-login">
            </div>
            <div class="col-12 col-lg-5 pb-4 text-center">
                <h3 class="py-4">{{ __('main.authorization') }}</h3>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="email"
                               class="form-control  @error('email') is-invalid @enderror rounded-pill small form-control-sm"
                               id="email" placeholder="email" name="email" value="{{ old('email') }}"
                               required autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="password"
                               class="form-control  @error('password') is-invalid @enderror rounded-pill small form-control-sm"
                               id="password" placeholder="введите пароль" name="password"
                               required autocomplete="current-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-success btn-sm rounded-pill ">{{ __('main.login_account') }}</button>
                    <a href="{{ route('register') }}" class="btn btn-danger btn-sm rounded-pill ">{{ __('main.create_account') }}</a>
                </form>
            </div>
        </div>
    </div>
    {{--    <div class="container">--}}
    {{--        <div class="row justify-content-center">--}}
    {{--            <div class="col-12">--}}
    {{--                <div class="card">--}}
    {{--                    <div class="card-header">{{ __('Login') }}</div>--}}

    {{--<div class="card-body">--}}
    {{--<form method="POST" action="{{ route('login') }}">--}}
    {{--@csrf--}}
    {{--<div class="form-group row">--}}
    {{--<label for="email"--}}
    {{--class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

    {{--<div class="col-md-6">--}}
    {{--<input id="email" type="email"--}}
    {{--class="form-control @error('email') is-invalid @enderror" name="email"--}}
    {{--value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

    {{--@error('email')--}}
    {{--<span class="invalid-feedback" role="alert">--}}
    {{--<strong>{{ $message }}</strong>--}}
    {{--</span>--}}
    {{--@enderror--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="form-group row">--}}
        {{--<label for="password"--}}
               {{--class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

        {{--<div class="col-md-6">--}}
            {{--<input id="password" type="password"--}}
                   {{--class="form-control @error('password') is-invalid @enderror" name="password"--}}
                   {{--required autocomplete="current-password">--}}

            {{--@error('password')--}}
            {{--<span class="invalid-feedback" role="alert">--}}
                                            {{--<strong>{{ $message }}</strong>--}}
                                        {{--</span>--}}
            {{--@enderror--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--                            <div class="form-group row">--}}
    {{--                                <div class="col-md-6 offset-md-4">--}}
    {{--                                    <div class="form-check">--}}
    {{--                                        <input class="form-check-input" type="checkbox" name="remember"--}}
    {{--                                               id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

    {{--                                        <label class="form-check-label" for="remember">--}}
    {{--                                            {{ __('Remember Me') }}--}}
    {{--                                        </label>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}

    {{--                            <div class="form-group row mb-0">--}}
    {{--                                <div class="col-md-8 offset-md-4">--}}
    {{--                                    <button type="submit" class="btn btn-primary">--}}
    {{--                                        {{ __('Login') }}--}}
    {{--                                    </button>--}}

    {{--                                    @if (Route::has('password.request'))--}}
    {{--                                        <a class="btn btn-link" href="{{ route('password.request') }}">--}}
    {{--                                            {{ __('Forgot Your Password?') }}--}}
    {{--                                        </a>--}}
    {{--                                    @endif--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </form>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
@endsection
@push('styles')

@endpush
@push('scripts')


@endpush
