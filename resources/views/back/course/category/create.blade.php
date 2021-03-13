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
                                        <div class="card-header"><h5 class="mb-0">New Course Category</h5></div>
                                        <form action="{{ route('back.course.category.store') }}" method="post" autocomplete="off" enctype="multipart/form-data">
                                            @csrf
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
                                                            <label class="col-md-3 col-form-label" for="name">{{ __('Type') }}<span class="text-danger">*</span></label>
                                                            <div class="col-md-9">
                                                                <select name="type_id" id="type_id" class="form-control @error('type_id') is-invalid @enderror" autofocus required>
                                                                    <option value="">- Select a Type -</option>
                                                                    <option value="1" {{ (old('type_id') == 1) ? ' selected' : '' }}>Coaching</option>
                                                                    <option value="2" {{ (old('type_id') == 2) ? ' selected' : '' }}>Tutoring</option>
                                                                    <option value="3" {{ (old('type_id') == 3) ? ' selected' : '' }}>Commerce</option>
                                                                </select>
                                                                @error('type_id')
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
                                                            <label class="col-md-3 col-form-label" for="name">{{ __('Category Name') }}<span class="text-danger">*</span></label>
                                                            <div class="col-md-9">
                                                                <input class="form-control @error('name') is-invalid @enderror" name="name" id="name" type="text" value="{{ old('name') }}" autofocus required>
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
                                                                    <input class="form-check-input @error('is_new') is-invalid @enderror" id="category_new_yes" type="radio" value="1" name="is_new" required>
                                                                    <label class="form-check-label" for="category_new_yes">Yes</label>
                                                                </div>
                                                                <div class="form-check form-check-inline mr-1">
                                                                    <input class="form-check-input" id="category_new_no" type="radio" value="0" name="is_new">
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
                                                    <button class="btn btn-primary" type="submit">Create</button>
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
