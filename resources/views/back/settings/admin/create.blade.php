@extends('back.layouts.app')

@section('content')
    <body class="c-app pg-admin-list">
    @include('back.layouts.left_menu')
    <div class="c-wrapper">
        @include('back.layouts.header')
        <div class="c-body">
            <main class="c-main">
                <div class="container-fluid">
                    <div class="ui-view">
                        <div class="fade-in">
                            <div class="row justify-content-sm-center">
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="card-header"><strong>New Admin</strong></div>
                                        <form action="{{ route('back.settings.admin.store') }}" method="post" autocomplete="off">
                                            @csrf
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label for="name">Name<span class="text-danger">*</span></label>
                                                            <input class="form-control @error('name') is-invalid @enderror" name="name" type="text" placeholder="Enter admin name" value="{{ old('name') }}" autofocus>
                                                            @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label for="Username">Username<span class="text-danger">*</span></label>
                                                            <input class="form-control @error('username') is-invalid @enderror" name="username" type="text" placeholder="Enter admin username" value="{{ old('username') }}">
                                                            @error('username')
                                                            <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label for="password">Password<span class="text-danger">*</span></label>
                                                            <input class="form-control @error('password') is-invalid @enderror" name="password" type="password" placeholder="Enter admin password">
                                                            @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-actions text-center">
                                                    <button class="btn btn-primary" type="submit">수정하기</button>
                                                    <a class="btn btn-secondary" type="button" href="{{ route('back.settings.admin.index') }}">취소</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            @include('back.layouts.footer')
        </div>
    </div>
    </body>
@endsection

@section('script')
    <script type="text/javascript">
        window.KolonLsiAdmin.Admin.adminsFormInit();
    </script>
@endsection
