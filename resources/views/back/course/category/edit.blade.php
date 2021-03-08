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
                                        <div class="card-header"><h5 class="mb-0">Edit Course Category :: <strong>{{ $courseCategory->name }}</strong></h5></div>
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

                                                <div class="row">
                                                    <div class="offset-lg-2 col-md-8 col-lg-6">
                                                        <div class="form-group row">
                                                            <label class="col-md-3 col-form-label" for="is_new">{{ __('New Category') }}<span class="text-danger">*</span></label>
                                                            <div class="col-md-9 col-form-label">
                                                                <div class="form-check form-check-inline mr-1">
                                                                    <input class="form-check-input @error('is_new') is-invalid @enderror" id="category_new_yes" type="radio" value="1" name="is_new" required {{ (old('is_new', $courseCategory->is_new) == 1) ? 'checked' : '' }}>
                                                                    <label class="form-check-label" for="category_new_yes">Yes</label>
                                                                </div>
                                                                <div class="form-check form-check-inline mr-1">
                                                                    <input class="form-check-input" id="category_new_no" type="radio" value="0" name="is_new" {{ (old('is_new', $courseCategory->is_new) == 0) ? 'checked' : '' }}>
                                                                    <label class="form-check-label" for="category_new_no">No</label>
                                                                </div>
                                                                @error('is_new')
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
