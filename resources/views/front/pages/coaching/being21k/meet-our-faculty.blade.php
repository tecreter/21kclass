@extends('front.layouts.app')

@section('content')

    @include('front.layouts.nav')

    <main id="content" role="main">

        <div class="container space-top-3 space-top-lg-4">
            <div class="border-bottom">
                <div class="w-lg-75 text-center mx-lg-auto">
                    <div class="mb-9">
                        <h1 class="display-4 mb-4">Our Team of Faculty Members</h1>
                        <p class="lead">Talent wins games, but teamwork and intelligence win championships.</p>
                    </div>

                    <div class="w-lg-75 mx-lg-auto">
                        <img class="img-fluid" src="/images/coaching/svg/illustrations/discussion-scene.svg" alt="Image Description">
                    </div>
                </div>
            </div>
        </div>

        <div class="overflow-hidden space-bottom-2">
            <div class="position-relative bg-light text-center rounded-lg z-index-2 mx-3 mx-md-11">
                <div class="container space-2">

                    <figure class="mx-auto text-center mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="48px" height="48px" viewBox="0 0 8 8" style="enable-background:new 0 0 8 8;" xml:space="preserve">
                      <path fill="#bdc5d1" d="M3,1.3C2,1.7,1.2,2.7,1.2,3.6c0,0.2,0,0.4,0.1,0.5c0.2-0.2,0.5-0.3,0.9-0.3c0.8,0,1.5,0.6,1.5,1.5c0,0.9-0.7,1.5-1.5,1.5
                        C1.4,6.9,1,6.6,0.7,6.1C0.4,5.6,0.3,4.9,0.3,4.5c0-1.6,0.8-2.9,2.5-3.7L3,1.3z M7.1,1.3c-1,0.4-1.8,1.4-1.8,2.3
                        c0,0.2,0,0.4,0.1,0.5c0.2-0.2,0.5-0.3,0.9-0.3c0.8,0,1.5,0.6,1.5,1.5c0,0.9-0.7,1.5-1.5,1.5c-0.7,0-1.1-0.3-1.4-0.8
                        C4.4,5.6,4.4,4.9,4.4,4.5c0-1.6,0.8-2.9,2.5-3.7L7.1,1.3z"/>
                    </svg>
                    </figure>

                    <div class="w-md-80 mx-md-auto mb-6">
                        <blockquote class="font-size-2 text-dark">21K Class intends to replicate the brick and mortar class experience over the internet. This EdTech venture combines the expertise of three enthusiastic domain experts. Santosh Kumar, Dinesh Kumar and Joshi Kumar drive the technology behind 21K.</blockquote>
                    </div>
                </div>

                <figure class="position-absolute top-0 left-0 mt-10 ml-10">
                    <img src="/images/coaching/svg/components/abstract-shapes-11.svg" alt="SVG">
                </figure>
                <figure class="max-w-15rem w-100 position-absolute bottom-0 right-0">
                    <div class="mb-n7 mr-n7">
                        <img class="img-fluid" src="/images/coaching/svg/components/dots-1.svg" alt="Image Description">
                    </div>
                </figure>
            </div>
        </div>

        <div class="container space-2">
            <div class="w-md-80 w-lg-60 text-center mx-md-auto mb-5 mb-md-9">
                <span class="d-block small font-weight-bold text-cap mb-2">Our Faculty Members</span>
                <h2>Creative mind by people like you</h2>
            </div>


            <div class="row mx-n2 mb-5">
                @forelse($tutors as $tutor)
                    <div class="col-sm-6 col-lg-3 px-2 mb-3">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="avatar avatar-xl avatar-circle mb-4">
                                    <img class="avatar-img" src="{{ ($tutor->profile_picture) ? asset('/storage/'.$tutor->profile_picture) : cdn_mix('/images/100x100/img12.jpg') }}">
                                </div>

                                <h4 class="text-lh-sm">{{ $tutor->honorifics }} {{ $tutor->first_name }} {{ $tutor->last_name }}</h4>
                                <p class="small">{{ $tutor->qualification }}</p>
                                <span class="d-block small font-weight-bold text-cap mb-1" style="min-height:38px;max-height:38px;overflow:hidden">{{ $tutor->position }}</span>

                                <p class="font-size-1">
                                    {{ $tutor->excerpt }}
                                </p>
                            </div>
                            <div class="card-footer border-0 pt-0">
                                <ul class="list-inline mb-0">
                                    @if($tutor->social_facebook)
                                        <li class="list-inline-item">
                                            <a class="btn btn-xs btn-icon btn-soft-secondary rounded-lg" href="{{ $tutor->social_facebook }}" target="_blank">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                    @endif
                                    @if($tutor->social_twitter)
                                        <li class="list-inline-item">
                                            <a class="btn btn-xs btn-icon btn-soft-secondary rounded-lg" href="{{ $tutor->social_twitter }}" target="_blank">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                    @endif
                                    @if($tutor->social_google)
                                        <li class="list-inline-item">
                                            <a class="btn btn-xs btn-icon btn-soft-secondary rounded-lg" href="{{ $tutor->social_google }}" target="_blank">
                                                <i class="fab fa-google"></i>
                                            </a>
                                        </li>
                                    @endif
                                    @if($tutor->social_linkedin)
                                        <li class="list-inline-item">
                                            <a class="btn btn-xs btn-icon btn-soft-secondary rounded-lg" href="{{ $tutor->social_linkedin }}" target="_blank">
                                                <i class="fab fa-linkedin"></i>
                                            </a>
                                        </li>
                                    @endif
                                    @if($tutor->social_quora)
                                        <li class="list-inline-item">
                                            <a class="btn btn-xs btn-icon btn-soft-secondary rounded-lg" href="{{ $tutor->social_quora }}" target="_blank">
                                                <i class="fab fa-quora"></i>
                                            </a>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>

            <div class="text-center">
                <div class="d-inline-block font-size-1 border bg-white text-center rounded-pill py-3 px-4">
                    Wanna join our faculty team? <a class="font-weight-bold ml-3" href="{{ route('coaching.connect.work-with-us') }}">We are hiring <span class="fas fa-angle-right fa-sm ml-1"></span></a>
                </div>
            </div>
        </div>

    </main>

    @include('front.layouts.footer')

@endsection

@section('script')
@endsection
