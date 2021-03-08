@extends('front.layouts.app')

@section('content')

    @include('front.layouts.nav')

    <main id="content" role="main">

        <div class="container space-2 space-lg-3">
            <div class="w-md-80 w-lg-50 text-center mx-md-auto">
                <i class="fas fa-check-circle text-success fa-5x mb-3"></i>
                <div class="mb-5">
                    <h1 class="h2">Your order is completed!</h1>
                    <p>Thank you for your order! Your order is being processed and will be completed within 3-6 hours. You will receive an email confirmation when your order is completed.</p>
                </div>
                <a class="btn btn-primary btn-pill transition-3d-hover px-5" href="{{ route('index') }}">Continue Shopping</a>
            </div>
        </div>

        <div class="bg-light">
            <div class="container space-2">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-6">
                        <div class="text-center mb-4">
                            <h2 class="h1">Stay in the know</h2>
                            <p>Get to know about our latest courses from 21kclass.com</p>
                        </div>

                        <form class="js-validate js-form-message w-lg-85 mx-lg-auto">
                            <label class="sr-only" for="subscribeSrEmail">Email address</label>
                            <div class="input-group input-group-pill">
                                <input type="email" class="form-control" name="email" id="subscribeSrEmail" placeholder="Email address" aria-label="Email address" aria-describedby="subscribeButton" required
                                       data-msg="Please enter a valid email address.">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-primary px-6" id="subscribeButton">Join</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </main>

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
