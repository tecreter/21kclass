@extends('front.layouts.app')

@section('content')

    @include('front.layouts.nav-coaching')

    <main id="content" role="main">

        <div class="container space-2 space-lg-3">
            <div class="w-md-80 w-lg-50 text-center mx-md-auto">
                @if($status === 'success')
                    <i class="fas fa-check-circle text-success fa-5x mb-3"></i>
                    <div class="mb-5">
                        <h1 class="h2">Your payment is Successful.</h1>
                        <div class="mt-3 mb-3 text-dark bold border-top border-bottom pl-0 pl-sm-11 text-left">
                            <p class="mt-3">Invoice number <b>#{{ $invoice }}</b></p>
                            <p class="mt-3">Transaction ID <b>{{ $trans_id }}</b></p>
                            <p class="mt-3">Transaction Date <b>{{ $trans_datetime }}</b></p>
                            <p>Amount received <b>₹{{ $amount }}</b></p>
                        </div>
                        <p>Thank you for your order! You will receive a confirmation email shortly.</p>
                    </div>
                    <a class="btn btn-primary btn-pill transition-3d-hover px-5 mt-lg-3" href="{{ route('index') }}">Continue shopping</a>
                @else
                    <i class="fas fa-exclamation-triangle fa-5x mb-3" style="color:#ef3333"></i>
                    <div class="mb-5">
                        <h1 class="h2">We are sorry but the transaction failed.</h1>
                        <div class="mt-3 mb-3 text-dark bold border-top border-bottom">
                            <p class="mt-3">Transaction failure reason <b>{{ $error_msg }}</b></p>
                            <p class="mt-3">Transaction ID <b>{{ $trans_id }}</b></p>
                            <p class="mt-3">Transaction Date <b>{{ $trans_datetime }}</b></p>
                        </div>
                    </div>
                    <p>Contact us at <a href="mailto:hello@21kclass.com">hello@21kclass.com</a></p>
                @endif
            </div>
        </div>

    </main>

    @include('front.layouts.footer-coaching')

@endsection

@section('script')
    <script type="text/javascript">
        $(function () {
            $('#header').removeAttr('class').attr('class', 'header');
        });
    </script>
@endsection
