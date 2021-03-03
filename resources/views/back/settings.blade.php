@extends('back.layouts.app')

@section('content')
    <body class="c-app pg-home">
    @include('back.layouts.left_menu')
    <div class="c-wrapper">
        @include('back.layouts.header')

        <div class="c-body">
            <main class="c-main">
                <div class="container-fluid">
                    <div class="ui-view">
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <div class="text-center">{{ session('success') }}</div>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <div class="fade-in">
                            <div class="row justify-content-sm-center">
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="card-header"><strong>Profile Settings</strong></div>
                                        <form action="{{ route('back.settings') }}" method="post">
                                            @csrf
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label for="name">Name<span class="text-danger">*</span></label>
                                                            <input class="form-control @error('name') is-invalid @enderror" name="name" type="text" placeholder="Enter admin name" value="{{ old('name', $admin->name) }}" required>
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
                                                            <input class="form-control @error('username') is-invalid @enderror" name="username" type="text" placeholder="Enter admin username" value="{{ old('username', $admin->username) }}" required>
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
                                                            <input class="form-control @error('password') is-invalid @enderror" name="password" type="password" placeholder="Enter admin password" required>
                                                            @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-actions text-center">
                                                    <button class="btn btn-primary" type="submit">Save</button>
                                                    <a class="btn btn-secondary" type="button" href="{{ route('back.home') }}">Cancel</a>
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

        <div class="toast toastSuccess" role="alert" aria-live="assertive" aria-atomic="true" data-delay="2000" style="position: absolute;top: 3.5rem;margin: 0 auto;left: 43%;">
            <div class="toast-body alert-success">
                <i class="fa fa-1x fa-check-circle"></i> Updated Successfully.
            </div>
        </div>

        @include('back.layouts.footer')
    </div>
    </body>
@endsection

@section('script')
    <script type="text/javascript">
        window.TocAdmin.Admin.adminsFormInit();
    </script>
@endsection
