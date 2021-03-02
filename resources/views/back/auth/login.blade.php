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
                                        <img src="{{ cdn_mix('/images/hotelpoco-logo.png') }}" alt="hotelpoco-logo" width="100">
                                    </div>
                                    <div class="form-group text-center mb-4">
                                        <h3>{{ __('관리자 로그인') }}</h3>
                                    </div>
                                    <div class="form-group">
                                        <label for="nf-email">{{ __('아이디') }}</label>
                                        <input id="username" type="text" class="form-control form-control-lg @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" placeholder="" autofocus>

                                        @error('username')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="nf-password">{{ __('비밀번호') }}</label>
                                        <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="6자 이상 ~ 20자 이하">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    {{--<div class="form-group row py-0 px-0">--}}
                                        {{--<div class="col-md-12 offset-md-0">--}}
                                            {{--<div class="form-check form-check-inline">--}}
                                                {{--<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}
                                                {{--<label class="form-check-label" for="remember">{{ __('아이디저장') }}</label>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}

                                    <div class="form-group row py-0 px-0">
                                        <div class="col-md-12 offset-md-0 mb-0">
                                            <button type="submit" class="btn btn-block btn-lg btn-primary">
                                                {{ __('로그인') }}
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
