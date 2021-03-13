
@extends('front.layouts.app')

@section('content')

    @include('front.layouts.nav')

    <main id="content" role="main">
        @if(count(session('SESSION_TOC_CART_COURSE_IDS', [])) < 1)
            <div class="container space-2 space-lg-3">
                <div class="w-md-80 w-lg-50 text-center mx-md-auto">
                    <figure class="max-w-10rem max-w-sm-15rem mx-auto mb-3">
                        <img class="img-fluid" src="/images/coaching/svg/illustrations/empty-cart.svg" alt="SVG">
                    </figure>
                    <div class="mb-5">
                        <h1 class="h2">Your cart is currently empty</h1>
                        <p>Before proceed to checkout you must add some course to your shopping cart. You will find a lot of interesting course on our "Shop" page.</p>
                    </div>
                    <a class="btn btn-primary btn-pill transition-3d-hover px-5" href="{{ route('index') }}">Start shopping</a>
                </div>
            </div>

            <div class="position-relative text-center border-top">
                <div class="container space-2 space-bottom-lg-3">
                    <div class="w-md-60 mx-md-auto mb-5 mb-md-7">
                        <h2 class="h1">Stay in the know</h2>
                        <p>Get offers on our latest programs from 21K Class.</p>
                    </div>

                    <div class="w-md-75 w-lg-50 mx-md-auto">
                        <form class="js-validate mb-3">
                            <div class="form-row">
                                <div class="col-sm-12">
                                    <button type="button" class="btn btn-info btn-sm btn-wide" data-toggle="modal" data-target="#applyNow">Apply now</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="d-none d-lg-block position-absolute bottom-0 left-0 max-w-35rem w-100">
                        <img class="img-fluid" src="/images/coaching/svg/illustrations/mobile-article.svg" alt="Image Description">
                    </div>
                </div>
            </div>
            @include('front.layouts.apply')
        @else
            <div class="container space-1 space-md-2">
                <div class="row">
                    <div class="col-lg-8 mb-7 mb-lg-0">
                        <div class="d-flex justify-content-between align-items-end border-bottom pb-3 mb-7">
                            <h1 class="h3 mb-0">Shopping cart</h1>
                            <span>{{ count(session('SESSION_TOC_CART_COURSE_IDS', [])) }} Course{{ (count(session('SESSION_TOC_CART_COURSE_IDS', [])) > 1) ? 's' : '' }} in Cart</span>
                        </div>

                        <div class="pb-5 mb-5">
                            @php
                                $course_details = session('SESSION_TOC_CART_COURSE_DETAILS', []);
                            @endphp
                            @foreach($course_details as $course)
                                <div class="border-bottom pb-5 mb-5">
                                    <div class="media">
                                    <div class="max-w-15rem w-100 mr-3">
                                        <img  class="img-fluid" src="{{ ($course['thumb']) ? asset('/storage/'.$course['thumb']) : cdn_mix('/images/logos/logo.png') }}" alt="{{ $course['name'] }}">
                                    </div>
                                    <div class="media-body">
                                        <div class="row">
                                            <div class="col-md-7 mb-3 mb-md-0">
                                                <a class="h5 d-block" href="{{ route(strtolower($course['site_type']) . '.course-details', ['course'=>$course['slug']]) }}">{{ $course['name'] }}</a>

                                                <div class="d-block d-md-none">
                                                    <span class="h5 d-block mb-1">₹{{ number_format($course['price']) }}</span>
                                                    @if($course['original_price'] > 0)
                                                        <small class="d-block text-muted text-lh-sm"><del>₹{{ number_format($course['original_price']) }}</del></small>
                                                    @endif
                                                </div>

                                                <div class="text-body font-size-1 mb-1">
                                                    <span>{{ $course['excerpt'] }}</span>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="row">
                                                    <div class="col-auto">
                                                        <form id="remove-from-cart-{{ $course['id'] }}" action="{{ route('remove-from-cart') }}" method="POST" style="display: none;">
                                                            @csrf
                                                            <input type="hidden" name="course_id" value="{{ $course['id'] }}">
                                                        </form>
                                                        <a class="d-block text-body font-size-1 mb-1" href="javascript:void(0);" onclick="event.preventDefault();document.getElementById('remove-from-cart-{{ $course['id'] }}').submit();">
                                                            <i class="far fa-trash-alt text-hover-primary mr-1"></i>
                                                            <span class="font-size-1 text-hover-primary">Remove</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-4 col-md-2 d-none d-md-inline-block text-right">
                                                <span class="h5 d-block mb-1">₹{{ number_format($course['price']) }}</span>
                                                @if($course['original_price'] > 0)
                                                    <small class="d-block text-muted text-lh-sm"><del>₹{{ number_format($course['original_price']) }}</del></small>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="d-sm-flex justify-content-end">
                            <a class="font-weight-bold" href="{{ route('index') }}">
                                <i class="fas fa-angle-left fa-xs mr-1"></i>
                                Continue shopping
                            </a>
                        </div>
                    </div>

                    @php
                    $checkout_price = 0;
                    foreach (session('SESSION_TOC_CART_COURSE_DETAILS', []) as $item) {
                    	$checkout_price += (int) $item['price'];
                    }
                    @endphp

                    <div class="col-lg-4">
                        <div class="pl-lg-4">
                            <div class="card shadow-soft p-4 mb-4">
                                <div class="border-bottom pb-4 mb-4">
                                    <h2 class="h3 mb-0">Order summary</h2>
                                </div>

                                <div class="border-bottom pb-4 mb-4">
                                    <div class="media align-items-center mb-3">
                                        <span class="d-block font-size-1 mr-3">Item subtotal ({{ count(session('SESSION_TOC_CART_COURSE_IDS', [])) }})</span>
                                        <div class="media-body text-right">
                                            <span class="text-dark font-weight-bold">₹{{ number_format($checkout_price) }}</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="media align-items-center mb-3">
                                    <span class="d-block font-size-1 mr-3">Estimated tax</span>
                                    <div class="media-body text-right">
                                        <span class="text-dark font-weight-bold">--</span>
                                    </div>
                                </div>

                                <div class="media align-items-center mb-3">
                                    <span class="d-block font-size-1 mr-3">Total</span>
                                    <div class="media-body text-right">
                                        <span class="text-dark font-weight-bold">₹{{ number_format($checkout_price) }}</span>
                                    </div>
                                </div>

                                <div class="row mx-1">
                                    <div class="col px-1 my-1">
                                        <a class="btn btn-danger btn-block transition-3d-hover" href="{{ route('checkout') }}">Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

    </main>

    @include('front.layouts.footer')

@endsection

@section('script')
    <script type="text/javascript">
        $(function () {
            $('#header').removeAttr('class').attr('class', 'header');
        });
    </script>
@endsection
