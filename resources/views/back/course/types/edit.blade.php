
@extends('back.layouts.app')

@section('content')
    <body class="c-app pg-language-list">
    @include('back.layouts.left_menu')

    <div class="c-wrapper">
        @include('back.layouts.header')
        <link rel="stylesheet" href="//cdn.quilljs.com/1.3.6/quill.snow.css" />
        <style type="text/css">#description {height: 250px;}#features {height: 250px;}</style>
        <div class="c-body">
            <main class="c-main">
                <div class="container-fluid">
                    <div class="ui-view">
                        <div class="fade-in">
                            <div class="row justify-content-sm-center">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-header"><h5 class="mb-0">Edit Course :: <strong>{{ $course->name }}</strong></h5></div>
                                        <form action="{{ route('back.course.types.update', $course->id) }}" method="post" autocomplete="off" enctype="multipart/form-data">
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
                                                            <label class="col-md-3 col-form-label" for="name">{{ __('Course Category') }}<span class="text-danger">*</span></label>
                                                            <div class="col-md-9">
                                                                <select name="category_id" id="category_id" class="form-control @error('category_id') is-invalid @enderror" autofocus required>
                                                                    <option value="">- Select a course category -</option>
                                                                    @foreach($courseCategories as $courseCategory)
                                                                        <option value="{{ $courseCategory->id }}" {{ (old('category_id', $courseCategory->id) == $course->category_id) ? ' selected' : '' }}>{{ $courseCategory->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                                @error('category_id')
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
                                                            <label class="col-md-3 col-form-label" for="name">{{ __('Course Name') }}<span class="text-danger">*</span></label>
                                                            <div class="col-md-9">
                                                                <input class="form-control @error('name') is-invalid @enderror" name="name" id="name" type="text" maxlength="50" value="{{ old('name', $course->name) }}">
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
                                                            <label class="col-md-3 col-form-label" for="name">{{ __('Price') }}<span class="text-danger">*</span></label>
                                                            <div class="col-md-9">
                                                                <input class="form-control @error('price') is-invalid @enderror" name="price" id="price" maxlength="10" type="text" value="{{ old('price', $course->price) }}">
                                                                @error('price')
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
                                                            <label class="col-md-3 col-form-label" for="name">{{ __('Original Price') }}<span class="text-danger">*</span></label>
                                                            <div class="col-md-9">
                                                                <input class="form-control @error('original_price') is-invalid @enderror" name="original_price" maxlength="10" id="original_price" type="text" value="{{ old('original_price', $course->original_price) }}">
                                                                @error('original_price')
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
                                                            <label class="col-md-3 col-form-label" for="name">{{ __('Short Description') }}<span class="text-danger">*</span></label>
                                                            <div class="col-md-9">
                                                                <input class="form-control @error('excerpt') is-invalid @enderror" name="excerpt" id="excerpt" type="text" maxlength="100" value="{{ old('excerpt', $course->excerpt) }}">
                                                                @error('excerpt')
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
                                                            <label class="col-md-3 col-form-label" for="name">{{ __('Course Description') }}<span class="text-danger">*</span></label>
                                                            <div class="col-md-9"></div>
                                                            <div class="col-xs-12">
                                                                <div id="description" class="@error('description') is-invalid @enderror">
                                                                    {!! old('description', $course->description) !!}
                                                                </div>
                                                                <textarea style="display: none" class="form-control @error('description') is-invalid @enderror" name="description" id="description-textarea" cols="30" rows="7">{{ old('description', $course->description) }}</textarea>
                                                                @error('description')
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
                                                            <label class="col-md-3 col-form-label" for="name">{{ __('Course Features') }}</label>
                                                            <div class="col-md-9"></div>
                                                            <div class="col-xs-12">
                                                                <div id="features" class="@error('features') is-invalid @enderror">
                                                                    {!! old('features', $course->features) !!}
                                                                </div>
                                                                <textarea style="display: none" class="form-control @error('features') is-invalid @enderror" name="features" id="features-textarea" cols="30" rows="7">{{ old('description', $course->description) }}</textarea>
                                                                @error('description')
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
                                                            <label class="col-md-3 col-form-label" for="name">{{ __('Rating') }}<span class="text-danger">*</span></label>
                                                            <div class="col-md-9">
                                                                <input class="form-control @error('rating') is-invalid @enderror" name="rating" id="rating" maxlength="4" type="text" value="{{ old('rating', number_format($course->rating, 2)) }}">
                                                                @error('rating')
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
                                                            <label class="col-md-3 col-form-label" for="is_new">{{ __('New Course') }}<span class="text-danger">*</span></label>
                                                            <div class="col-md-9 col-form-label">
                                                                <div class="form-check form-check-inline mr-1">
                                                                    <input class="form-check-input @error('is_new') is-invalid @enderror" id="category_new_yes" type="radio" value="1" name="is_new" required {{ (old('is_new', $course->is_new) == 1) ? 'checked' : '' }}>
                                                                    <label class="form-check-label" for="category_new_yes">Yes</label>
                                                                </div>
                                                                <div class="form-check form-check-inline mr-1">
                                                                    <input class="form-check-input" id="category_new_no" type="radio" value="0" name="is_new" {{ (old('is_new', $course->is_new) == 0) ? 'checked' : '' }}>
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

                                                <div class="row">
                                                    <div class="offset-lg-2 col-md-8 col-lg-6">
                                                        <div class="form-group row">
                                                            <label class="col-md-3 col-form-label" for="name">{{ __('Thumbnail Image') }}<span class="text-danger">*</span><br><small class="text-info">Make sure 500x300 ratio</small></label>
                                                            <div class="col-md-9">
                                                                @if(isset($course->thumb))
                                                                    <p class="row col-md-9">
                                                                        <img src="{{ asset('/storage/'.$course->thumb) }}" width="100" alt="">
                                                                    </p>
                                                                @endif
                                                                <input type="file" class="@error('thumb') is-invalid @enderror" name="thumb" id="thumb" accept="image/gif,image/bmp,image/x-png,image/gif,image/jpeg,image/jpg,image/svg+xml" value="{{ old('thumb', $course->thumb) }}">
                                                                @error('thumb')
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
                                                    <a class="btn btn-secondary" type="button" href="{{ route('back.course.types.index') }}">Cancel</a>
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
    <script src="//cdn.quilljs.com/1.3.7/quill.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {

            var toolbarOptions = [['bold', 'italic', 'underline', 'strike'], ['blockquote', 'code-block'], [{'header': 1}, {'header': 2}], [{'list': 'ordered'}, {'list': 'bullet'}], [{'script': 'sub'}, {'script': 'super'}], [{'indent': '-1'}, {'indent': '+1'}], [{'direction': 'rtl'}], [{'size': ['small', false, 'large', 'huge']}], [{'header': [1, 2, 3, 4, 5, 6, false]}], [{'color': []}, {'background': []}], [{'font': []}], [{'align': []}], ['clean']];

            var quill = new Quill(
                '#description', {
                    modules: {
                        toolbar: toolbarOptions
                    },
                    theme: 'snow'
                });

            quill.on('text-change', function(delta, oldDelta, source) {
                var str = quill.root.innerHTML;
                if(str === '<p><br></p>') str = '';
                $("#description-textarea").text(str);
            });

            var quill2 = new Quill(
                '#features', {
                    modules: {
                        toolbar: toolbarOptions
                    },
                    theme: 'snow'
                });

            quill2.on('text-change', function(delta, oldDelta, source) {
                var str = quill2.root.innerHTML;
                if(str === '<p><br></p>') str = '';
                $("#features-textarea").text(str);
            });
        });
    </script>
@endsection
