@extends('front.layouts.app')

@section('content')

    @include('front.layouts.nav')

    <main id="content" role="main">

        <div class="container space-2 space-lg-3">
            <div class="w-md-80 w-lg-50 text-center mx-md-auto">
                <i class="fas fa-check-circle text-success fa-5x mb-3"></i>
                <div class="mb-5">
                    <h1 class="h2">Transaction completed!</h1>
                    <div class="mt-3 mb-3 text-dark bold border-top border-bottom">
                        <p class="mt-3">Your order number is <b>#{{ $order_no }}</b></p>
                        <p>Order price <b>₹{{ $amount }}</b></p>
                    </div>
                    <p>Thank you for your order! You will receive a confirmation email shortly.</p>
                </div>
                <a class="btn btn-primary btn-pill transition-3d-hover px-5 mt-lg-3" href="{{ route('index') }}">Continue shopping</a>
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
