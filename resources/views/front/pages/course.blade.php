@extends('front.layouts.app')

@section('content')

    @include('front.layouts.nav')

    <div class="position-relative">
        <div class="bg-dark space-2" style="background-image: url({{ cdn_mix('/svg/components/abstract-shapes-20.svg') }});">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-lg-8">
                        <h1 class="text-lh-sm text-white">{{ $course->name }}</h1>
                        <p class="text-white-70">{{ $course->excerpt }}</p>

                        <div class="d-flex align-items-center flex-wrap">
                            <ul class="list-inline mt-b2 mb-0 mr-2">
                                @if ($course->rating >= 1)
                                    <li class="list-inline-item mx-0"><i class="fas fa-star fa-xs text-primary"></i></li>
                                @elseif ($course->rating > 0 && $course->rating < 1)
                                    <li class="list-inline-item mx-0"><i class="fas fa-star-half-alt fa-xs text-primary"></i></li>
                                @else
                                    <li class="list-inline-item mx-0"><i class="far fa-star fa-xs text-primary"></i></li>
                                @endif

                                @if ($course->rating >= 2)
                                    <li class="list-inline-item mx-0"><i class="fas fa-star fa-xs text-primary"></i></li>
                                @elseif ($course->rating > 1 && $course->rating < 2)
                                    <li class="list-inline-item mx-0"><i class="fas fa-star-half-alt fa-xs text-primary"></i></li>
                                @else
                                    <li class="list-inline-item mx-0"><i class="far fa-star fa-xs text-primary"></i></li>
                                @endif

                                @if ($course->rating >= 3)
                                    <li class="list-inline-item mx-0"><i class="fas fa-star fa-xs text-primary"></i></li>
                                @elseif ($course->rating > 2 && $course->rating < 3)
                                    <li class="list-inline-item mx-0"><i class="fas fa-star-half-alt fa-xs text-primary"></i></li>
                                @else
                                    <li class="list-inline-item mx-0"><i class="far fa-star fa-xs text-primary"></i></li>
                                @endif

                                @if ($course->rating >= 4)
                                    <li class="list-inline-item mx-0"><i class="fas fa-star fa-xs text-primary"></i></li>
                                @elseif ($course->rating > 3 && $course->rating < 4)
                                    <li class="list-inline-item mx-0"><i class="fas fa-star-half-alt fa-xs text-primary"></i></li>
                                @else
                                    <li class="list-inline-item mx-0"><i class="far fa-star fa-xs text-primary"></i></li>
                                @endif

                                @if ($course->rating >= 5)
                                    <li class="list-inline-item mx-0"><i class="fas fa-star fa-xs text-primary"></i></li>
                                @elseif ($course->rating > 4 && $course->rating < 5)
                                    <li class="list-inline-item mx-0"><i class="fas fa-star-half-alt fa-xs text-primary"></i></li>
                                @else
                                    <li class="list-inline-item mx-0"><i class="far fa-star fa-xs text-primary"></i></li>
                                @endif
                            </ul>
                            <span class="d-inline-block">
                              <small class="font-weight-bold text-white-50 mr-1">{{ $course->rating }} / 5</small>
                            </span>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="container space-top-md-2 position-md-absolute top-0 right-0 left-0">
            <div class="row justify-content-end">
                <div id="stickyBlockStartPoint" class="col-md-5 col-lg-4 position-relative z-index-2" style="">
                    <div class="js-sticky-block card card-bordered" data-hs-sticky-block-options="{
                   &quot;parentSelector&quot;: &quot;#stickyBlockStartPoint&quot;,
                   &quot;breakpoint&quot;: &quot;md&quot;,
                   &quot;startPoint&quot;: &quot;#stickyBlockStartPoint&quot;,
                   &quot;endPoint&quot;: &quot;#stickyBlockEndPoint&quot;,
                   &quot;stickyOffsetTop&quot;: 12,
                   &quot;stickyOffsetBottom&quot;: 12
                 }" style="">

                        <div class="position-relative p-1">
                            <div class="w-100 mx-auto">
                                <img class="img-fluid" src="{{ ($course->thumb) ? asset('/storage/'.$course->thumb) : cdn_mix('/images/logos/logo.png') }}" alt="Image Description">
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="mb-3">
                                <span class="h2 text-lh-sm mr-1 mb-0 text-danger">₹{{ number_format($course->price) }}</span>
                                @if($course->original_price > 0)
                                    <span class="lead text-muted text-lh-sm"><del>₹{{ number_format($course->original_price) }}</del></span>
                                @endif
                            </div>

                            <div class="mb-2">
                                <a class="btn btn-block btn-primary transition-3d-hover" href="#">Buy Now</a>
                            </div>

                            <div class="text-center mb-4">
                                <p class="small">30-day money-back guarantee</p>
                            </div>

                            <h2 class="h4">This course includes</h2>

                            <div class="media text-body font-size-1 mb-2">
                                <div class="min-w-3rem text-center mr-3">
                                    <i class="fa fa-video"></i>
                                </div>
                                <div class="media-body">
                                    46.5 hours on-demand video
                                </div>
                            </div>

                            <div class="media text-body font-size-1 mb-2">
                                <div class="min-w-3rem text-center mr-3">
                                    <i class="fa fa-file"></i>
                                </div>
                                <div class="media-body">
                                    77 articles
                                </div>
                            </div>

                            <div class="media text-body font-size-1 mb-2">
                                <div class="min-w-3rem text-center mr-3">
                                    <i class="fa fa-file-download"></i>
                                </div>
                                <div class="media-body">
                                    85 downloadable resources
                                </div>
                            </div>

                            <div class="media text-body font-size-1 mb-2">
                                <div class="min-w-3rem text-center mr-3">
                                    <i class="fa fa-infinity"></i>
                                </div>
                                <div class="media-body">
                                    Full time access
                                </div>
                            </div>

                            <div class="media text-body font-size-1 mb-2">
                                <div class="min-w-3rem text-center mr-3">
                                    <i class="fa fa-mobile"></i>
                                </div>
                                <div class="media-body">
                                    Access on mobile and Tablet
                                </div>
                            </div>

                            <div class="media text-body font-size-1 mb-2">
                                <div class="min-w-3rem text-center mr-3">
                                    <i class="fa fa-certificate"></i>
                                </div>
                                <div class="media-body">
                                    Certificate of Completion
                                </div>
                            </div>
                        </div>

                        <a class="card-footer text-center font-weight-bold py-3" data-toggle="modal" data-target="#copyToClipboardModal" href="javascript:;">
                            <i class="fa fa-share mr-1"></i>
                            Share
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container space-top-2 space-top-md-1">
        <div class="row">
            <div class="col-md-7 col-lg-8" style="min-height: 800px">
                <div class="pt-0 mt-0">
                    <h3 class="mb-4">Description</h3>
                    {!! $course->description !!}
                </div>
            </div>
        </div>
    </div>

    <div id="stickyBlockEndPoint"></div>

    <div class="space-top-1"></div>

    @if(count($otherCourses))

        <div class="container space-bottom-2">
            <div class="border-top pt-7 mt-7">
                <h3 class="mb-4">Students also bought</h3>

                <div class="row">
                    @foreach($otherCourses as $otherCourse)
                        <article class="col-md-6 col-lg-4 mb-5">
                            <div class="card card-bordered h-100">
                                <a class="card-img-top position-relative" href="/course/{{ $otherCourse->slug }}">
                                    <img class="card-img-top" src="{{ ($otherCourse->thumb) ? asset('/storage/'.$otherCourse->thumb) : cdn_mix('/images/logos/logo.png') }}" alt="{{ $otherCourse->name }}">
                                </a>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <h3>
                                            <a class="text-inherit" href="/course/{{ $otherCourse->slug }}">{{ $otherCourse->name }}</a>
                                        </h3>
                                    </div>
                                    <p class="mb-0">{{ $otherCourse->excerpt }}</p>
                                    <div class="d-flex align-items-center">
                                        <div class="bottom-0 left-0 mb-3">
                                            <div class="d-flex align-items-center flex-wrap">
                                                <ul class="list-inline mt-b2 mb-0 mr-2">
                                                    @if ($otherCourse->rating >= 1)
                                                        <li class="list-inline-item mx-0"><i class="fas fa-star fa-xs text-primary"></i></li>
                                                    @elseif ($otherCourse->rating > 0 && $otherCourse->rating < 1)
                                                        <li class="list-inline-item mx-0"><i class="fas fa-star-half-alt fa-xs text-primary"></i></li>
                                                    @else
                                                        <li class="list-inline-item mx-0"><i class="far fa-star fa-xs text-primary"></i></li>
                                                    @endif

                                                    @if ($otherCourse->rating >= 2)
                                                        <li class="list-inline-item mx-0"><i class="fas fa-star fa-xs text-primary"></i></li>
                                                    @elseif ($otherCourse->rating > 1 && $otherCourse->rating < 2)
                                                        <li class="list-inline-item mx-0"><i class="fas fa-star-half-alt fa-xs text-primary"></i></li>
                                                    @else
                                                        <li class="list-inline-item mx-0"><i class="far fa-star fa-xs text-primary"></i></li>
                                                    @endif

                                                    @if ($otherCourse->rating >= 3)
                                                        <li class="list-inline-item mx-0"><i class="fas fa-star fa-xs text-primary"></i></li>
                                                    @elseif ($otherCourse->rating > 2 && $otherCourse->rating < 3)
                                                        <li class="list-inline-item mx-0"><i class="fas fa-star-half-alt fa-xs text-primary"></i></li>
                                                    @else
                                                        <li class="list-inline-item mx-0"><i class="far fa-star fa-xs text-primary"></i></li>
                                                    @endif

                                                    @if ($otherCourse->rating >= 4)
                                                        <li class="list-inline-item mx-0"><i class="fas fa-star fa-xs text-primary"></i></li>
                                                    @elseif ($otherCourse->rating > 3 && $otherCourse->rating < 4)
                                                        <li class="list-inline-item mx-0"><i class="fas fa-star-half-alt fa-xs text-primary"></i></li>
                                                    @else
                                                        <li class="list-inline-item mx-0"><i class="far fa-star fa-xs text-primary"></i></li>
                                                    @endif

                                                    @if ($otherCourse->rating >= 5)
                                                        <li class="list-inline-item mx-0"><i class="fas fa-star fa-xs text-primary"></i></li>
                                                    @elseif ($otherCourse->rating > 4 && $otherCourse->rating < 5)
                                                        <li class="list-inline-item mx-0"><i class="fas fa-star-half-alt fa-xs text-primary"></i></li>
                                                    @else
                                                        <li class="list-inline-item mx-0"><i class="far fa-star fa-xs text-primary"></i></li>
                                                    @endif
                                                </ul>
                                                <span class="d-inline-block">
                                              <small class="font-weight-bold text-dark mr-1">{{ $otherCourse->rating }} / 5</small>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer border-0 pt-0">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="mr-2">
                                            @if($otherCourse->original_price > 0)
                                                <small class="d-block text-muted text-lh-sm"><del>₹{{ number_format($otherCourse->original_price) }}</del></small>
                                            @endif
                                            <span class="d-block h5 text-lh-sm mb-0 text-danger">₹{{ number_format($otherCourse->price) }}</span>
                                        </div>
                                        <a class="btn btn-sm btn-info transition-3d-hover" href="javascript:void(0);">Buy This Course</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="space-top-1"></div>
    @endif



    <div class="border-top">
        <div class="container space-2">
            <div class="text-center" style="background: url({{ cdn_mix('/svg/components/abstract-shapes-19.svg') }}) center no-repeat;">
                <h2>Find the right learning path for you</h2>
                <p>Answer a few questions and match your goals to our programs.</p>
                <span class="d-block mt-5">
                  <a class="btn btn-primary transition-3d-hover" href="#">Explore by Category</a>
                </span>
            </div>
        </div>
    </div>

    @include('front.layouts.footer')

@endsection

@section('script')
    <script type="text/javascript">
        $('.js-sticky-block').each(function () {
            var stickyBlock = new HSStickyBlock($(this)).init();
        });

        $(function () {
            $('#header').removeAttr('class').attr('class', 'header');
        });
    </script>
@endsection
