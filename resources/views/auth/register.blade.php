@extends('layouts.app')

@section('content')
    <div class="container bg-white ">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-lg-7 mx-0 px-0 bg-register">
            </div>
            <div class="col-12 col-lg-5  text-center pb-4">
                <h3 class="py-4">Регистрация</h3>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group">
                        <input type="text"
                               class="form-control rounded-pill small form-control-sm @error('name') is-invalid @enderror"
                               id="name" name="name" placeholder="Имя" value="{{ old('name') }}" required
                               autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="email"
                               class="form-control rounded-pill small form-control-sm @error('email') is-invalid @enderror"
                               id="email" name="email" placeholder="Email" value="{{ old('email') }}" required
                               autocomplete="email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" name="phone"
                               class="form-control rounded-pill small form-control-sm @error('phone') is-invalid @enderror"
                               value="{{ old('phone') }}" id="phone" placeholder="Телефон">
                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="password"
                               class="form-control rounded-pill small form-control-sm @error('password') is-invalid @enderror" name="password"
                               required autocomplete="new-password" placeholder="Введите пароль" id="password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control rounded-pill small form-control-sm"
                               placeholder="Повторите пароль" id="password-confirm" name="password_confirmation" required autocomplete="new-password">
                    </div>
                    <button type="submit" class="btn btn-success btn-sm rounded-pill ">Создать аккаунт</button>
                    <a href="{{ route('login') }}" class="btn btn-danger btn-sm rounded-pill ">Войти</a>
                </form>


                {{--<div class="card">--}}
                    {{--<div class="card-header">{{ __('Регистрация') }}</div>--}}
                    {{--<div class="card-body">--}}
                        {{--<form method="POST" action="{{ route('register') }}">--}}
                            {{--@csrf--}}
                            {{--<div class="form-group row">--}}
                                {{--<label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Имя') }}</label>--}}

                                {{--<div class="col-md-6">--}}
                                    {{--<input id="name" type="text"--}}
                                           {{--class="form-control @error('name') is-invalid @enderror" name="name"--}}
                                           {{--value="{{ old('name') }}" required autocomplete="name" autofocus>--}}

                                    {{--@error('name')--}}
                                    {{--<span class="invalid-feedback" role="alert">--}}
                                                        {{--<strong>{{ $message }}</strong>--}}
                                                    {{--</span>--}}
                                    {{--@enderror--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group row">--}}
                                {{--<label for="email"--}}
                                       {{--class="col-md-4 col-form-label text-md-right">{{ __('E-Mail ') }}</label>--}}

                                {{--<div class="col-md-6">--}}
                                    {{--<input id="email" type="email"--}}
                                           {{--class="form-control @error('email') is-invalid @enderror" name="email"--}}
                                           {{--value="{{ old('email') }}" required autocomplete="email">--}}

                                    {{--@error('email')--}}
                                    {{--<span class="invalid-feedback" role="alert">--}}
                                                        {{--<strong>{{ $message }}</strong>--}}
                                                    {{--</span>--}}
                                    {{--@enderror--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group row">--}}
                                {{--<label for="phone"--}}
                                       {{--class="col-md-4 col-form-label text-md-right">{{ __('Телефон') }}</label>--}}
                                {{--<div class="col-md-6">--}}
                                    {{--<input type="text" name="phone"--}}
                                           {{--class="form-control @error('phone') is-invalid @enderror"--}}
                                           {{--value="{{ old('phone') }}" id="phone">--}}

                                    {{--@error('phone')--}}
                                    {{--<span class="invalid-feedback" role="alert">--}}
                                                        {{--<strong>{{ $message }}</strong>--}}
                                                    {{--</span>--}}
                                    {{--@enderror--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group row">--}}
                                {{--<label for="password"--}}
                                       {{--class="col-md-4 col-form-label text-md-right">{{ __('Введите пароль') }}</label>--}}

                                {{--<div class="col-md-6">--}}
                                    {{--<input id="password" type="password"--}}
                                           {{--class="form-control @error('password') is-invalid @enderror" name="password"--}}
                                           {{--required autocomplete="new-password">--}}

                                    {{--@error('password')--}}
                                    {{--<span class="invalid-feedback" role="alert">--}}
                                                        {{--<strong>{{ $message }}</strong>--}}
                                                    {{--</span>--}}
                                    {{--@enderror--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group row">--}}
                                {{--<label for="password-confirm"--}}
                                       {{--class="col-md-4 col-form-label text-md-right">{{ __('Повторите пароль') }}</label>--}}

                                {{--<div class="col-md-6">--}}
                                    {{--<input id="password-confirm" type="password" class="form-control"--}}
                                           {{--name="password_confirmation" required autocomplete="new-password">--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group row mb-0">--}}
                                {{--<div class="col-md-6 offset-md-4">--}}
                                    {{--<button type="submit" class="btn btn-primary">--}}
                                        {{--{{ __('Зарегистриваться') }}--}}
                                    {{--</button>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</form>--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>
        </div>
    </div>
@endsection
