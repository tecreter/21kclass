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
                                        <div class="card-header"><h5 class="mb-0">Edit Tutor :: <strong>{{ $tutor->first_name . ' ' . $tutor->last_name }}</strong></h5></div>
                                        <form action="{{ route('back.faculty.tutor.update', $tutor->id) }}" method="post" autocomplete="off" enctype="multipart/form-data">
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
                                                                <select name="type_id" id="type_id" class="form-control @error('type_id') is-invalid @enderror" autofocus required>
                                                                    <option value="">- Select a Type -</option>
                                                                    <option value="1" {{ (old('type_id', $tutor->type_id) == 1) ? ' selected' : '' }}>Coaching</option>
                                                                    <option value="2" {{ (old('type_id', $tutor->type_id) == 2) ? ' selected' : '' }}>Tutoring</option>
                                                                    <option value="3" {{ (old('type_id', $tutor->type_id) == 3) ? ' selected' : '' }}>Commerce</option>
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
                                                            <label class="col-md-3 col-form-label" for="honorifics">{{ __('Title') }}</label>
                                                            <div class="col-md-9">
                                                                <input class="form-control @error('honorifics') is-invalid @enderror" name="honorifics" id="honorifics" type="text" value="{{ old('honorifics', $tutor->honorifics) }}" placeholder="Dr. Mr. Mrs. Miss.">
                                                                @error('honorifics')
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
                                                            <label class="col-md-3 col-form-label" for="first_name">{{ __('First Name') }}<span class="text-danger">*</span></label>
                                                            <div class="col-md-9">
                                                                <input class="form-control @error('first_name') is-invalid @enderror" name="first_name" id="first_name" type="text" value="{{ old('first_name', $tutor->first_name) }}">
                                                                @error('first_name')
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
                                                            <label class="col-md-3 col-form-label" for="last_name">{{ __('Last Name') }}</label>
                                                            <div class="col-md-9">
                                                                <input class="form-control @error('last_name') is-invalid @enderror" name="last_name" id="last_name" type="text" value="{{ old('last_name', $tutor->last_name) }}">
                                                                @error('last_name')
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
                                                            <label class="col-md-3 col-form-label" for="qualification">{{ __('Qualification') }}<span class="text-danger">*</span></label>
                                                            <div class="col-md-9">
                                                                <input class="form-control @error('qualification') is-invalid @enderror" name="qualification" id="qualification" type="text" value="{{ old('qualification', $tutor->qualification) }}">
                                                                @error('qualification')
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
                                                            <label class="col-md-3 col-form-label" for="position">{{ __('Position') }}</label>
                                                            <div class="col-md-9">
                                                                <input class="form-control @error('position') is-invalid @enderror" name="position" id="position" type="text" value="{{ old('position', $tutor->position) }}">
                                                                @error('position')
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
                                                            <label class="col-md-3 col-form-label" for="excerpt">{{ __('Profile Information') }}</label>
                                                            <div class="col-md-9">
                                                                <textarea class="form-control @error('excerpt') is-invalid @enderror" name="excerpt" id="excerpt" cols="30" rows="7">{{ old('excerpt', $tutor->excerpt) }}</textarea>
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
                                                            <label class="col-md-3 col-form-label" for="profile_picture">{{ __('Profile Image') }}</label>
                                                            <div class="col-md-9">
                                                                @if(isset($tutor->profile_picture))
                                                                    <p class="row col-md-9">
                                                                        <img src="{{ asset('/storage/'.$tutor->profile_picture) }}" width="100" alt="">
                                                                    </p>
                                                                @endif
                                                                <input type="file" class="@error('profile_picture') is-invalid @enderror" name="profile_picture" id="profile_picture" accept="image/gif,image/bmp,image/x-png,image/gif,image/jpeg,image/jpg" value="{{ old('profile_picture', $tutor->profile_picture) }}">
                                                                @error('profile_picture')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

{{--                                                <div class="row">--}}
{{--                                                    <div class="offset-lg-2 col-md-8 col-lg-6">--}}
{{--                                                        <div class="form-group row">--}}
{{--                                                            <label class="col-md-3 col-form-label" for="order">{{ __('Profile Display Order') }}</label>--}}
{{--                                                            <div class="col-md-9">--}}
{{--                                                                <input class="form-control @error('order') is-invalid @enderror" name="order" id="order" type="text" value="{{ old('order', $tutor->order) }}" maxlength="6">--}}
{{--                                                                @error('order')--}}
{{--                                                                <span class="invalid-feedback" role="alert">--}}
{{--                                                                <strong>{{ $message }}</strong>--}}
{{--                                                            </span>--}}
{{--                                                                @enderror--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}

                                                <div class="row">
                                                    <div class="offset-lg-2 col-md-8 col-lg-6">
                                                        <div class="form-group row">
                                                            <label class="col-md-3 col-form-label" for="social_facebook">{{ __('Facebook Link') }}</label>
                                                            <div class="col-md-9">
                                                                <input class="form-control @error('social_facebook') is-invalid @enderror" name="social_facebook" id="social_facebook" type="text" value="{{ old('social_facebook', $tutor->social_facebook) }}">
                                                                @error('social_facebook')
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
                                                            <label class="col-md-3 col-form-label" for="social_twitter">{{ __('Twitter Link') }}</label>
                                                            <div class="col-md-9">
                                                                <input class="form-control @error('social_twitter') is-invalid @enderror" name="social_twitter" id="social_twitter" type="text" value="{{ old('social_twitter', $tutor->social_twitter) }}">
                                                                @error('social_twitter')
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
                                                            <label class="col-md-3 col-form-label" for="social_linkedin">{{ __('LinkedIn Link') }}</label>
                                                            <div class="col-md-9">
                                                                <input class="form-control @error('social_linkedin') is-invalid @enderror" name="social_linkedin" id="social_linkedin" type="text" value="{{ old('social_linkedin', $tutor->social_linkedin) }}">
                                                                @error('social_linkedin')
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
                                                            <label class="col-md-3 col-form-label" for="social_google">{{ __('Google Link') }}</label>
                                                            <div class="col-md-9">
                                                                <input class="form-control @error('social_google') is-invalid @enderror" name="social_google" id="social_google" type="text" value="{{ old('social_google', $tutor->social_google) }}">
                                                                @error('social_google')
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
                                                            <label class="col-md-3 col-form-label" for="social_quora">{{ __('Quora Link') }}</label>
                                                            <div class="col-md-9">
                                                                <input class="form-control @error('social_quora') is-invalid @enderror" name="social_quora" id="social_quora" type="text" value="{{ old('social_quora', $tutor->social_quora) }}">
                                                                @error('social_quora')
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
                                                    <a class="btn btn-secondary" type="button" href="{{ route('back.faculty.tutor.index') }}">Cancel</a>
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
