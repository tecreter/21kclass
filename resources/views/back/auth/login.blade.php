@extends('back.layouts.app')

@section('content')
    <body class="c-app flex-row align-items-center pg-login bg-gradient">
        <div class="container">
            <div class="row justify-content-around pb-0">
                <div class="col-sm-12 col-md-8 col-lg-5">
                    <div class="card-group">
                        <div class="card p-4">
                            <div class="card-body">
                                <form method="POST" action="{{ route('back.login') }}" autocomplete="off">
                                    @csrf
                                    <div class="form-group text-center mb-4">
                                        <img src="/images/logos/s-logo.png" alt="logo" width="100">
                                    </div>
                                    <div class="form-group text-center mb-4">
                                        <h3>{{ __('ADMIN LOGIN') }}</h3>
                                    </div>
                                    <div class="form-group">
                                        <label for="nf-email">{{ __('Username') }}</label>
                                        <input id="username" type="text" class="form-control form-control-lg @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" placeholder="" autofocus>

                                        @error('username')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="nf-password">{{ __('Password') }}</label>
                                        <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group row py-0 px-0">
                                        <div class="col-md-12 offset-md-0 mb-0">
                                            <button type="submit" class="btn btn-block btn-lg btn-primary">
                                                {{ __('Login') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection
