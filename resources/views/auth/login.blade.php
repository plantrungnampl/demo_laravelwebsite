{{-- @extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection --}}

@extends('layout')



@section('content')
    <main class="login-form">

        <div class="cotainer">

            <div class="row justify-content-center">

                <div class="col-md-8">

                    <div class="card">

                        <div class="card-header">Login</div>

                        <div class="card-body">
                            <form action="{{ route('login.post') }}" method="POST">

                                @csrf

                                <div class="form-group row">

                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail
                                        Address</label>

                                    <div class="col-md-6">

                                        <input type="text" id="email_address" class="form-control" name="email"
                                            required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif

                                    </div>

                                </div>



                                <div class="form-group row">

                                    <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                                    <div class="col-md-6">

                                        <input type="password" id="password" class="form-control" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif

                                    </div>

                                </div>



                                <div class="form-group row">

                                    <div class="col-md-6 offset-md-4">

                                        <div class="checkbox">

                                            <label>

                                                <input type="checkbox" name="remember"> Remember Me

                                            </label>

                                        </div>

                                    </div>

                                </div>



                                <div class="col-md-6 offset-md-4">

                                    <button type="submit" class="btn btn-primary">

                                        Login

                                    </button>

                                </div>

                            </form>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </main>
@endsection
