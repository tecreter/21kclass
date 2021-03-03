@extends('back.layouts.app')

@section('content')
    <body class="c-app pg-language-list">
    @include('back.layouts.left_menu')

    <div class="c-wrapper">
        @include('back.layouts.header')
        <div class="c-body">
            <main class="c-main">
                <div class="container-fluid">
                    <div class="ui-view">
                        <div class="fade-in">
                            <div class="row justify-content-sm-center">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-header">Edit Course Category :: <strong>{{ $courseCategory->name }}</strong></div>
                                        <form action="{{ route('back.course.category.update', $courseCategory->id) }}" method="post" autocomplete="off" enctype="multipart/form-data">
                                            @csrf
                                            @method('PATCH')
                                            <div class="card-body">

                                                @if ($errors->any())
                                                    <div class="row">
                                                        <div class="col-md-12 col-lg-6">
                                                            <div class="row alert alert-danger">
                                                                <ul>
                                                                    @foreach ($errors->all() as $error)
                                                                        <li>{{ $error }}</li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif

                                                <div class="row">
                                                    <div class="offset-lg-2 col-md-8 col-lg-6">
                                                        <div class="form-group row">
                                                            <label class="col-md-3 col-form-label" for="name">{{ __('Category Name') }}<span class="text-danger">*</span></label>
                                                            <div class="col-md-9">
                                                                <input class="form-control @error('name') is-invalid @enderror" name="name" id="name" type="text" value="{{ old('name', $courseCategory->name) }}" required>
                                                                @error('name')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-actions text-center">
                                                    <button class="btn btn-primary" type="submit">Update</button>
                                                    <a class="btn btn-secondary" type="button" href="{{ route('back.course.category.index') }}">Cancel</a>
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
