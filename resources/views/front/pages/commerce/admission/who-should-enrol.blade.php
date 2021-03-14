@extends('front.layouts.app')

@section('content')

    @include('front.layouts.nav-commerce')

    <main id="content" role="main">


        <div class="position-relative bg-img-hero" style="background-image: url('/images/commerce/svg/components/abstract-shapes-12.svg');">
            <div class="space-top-3 space-bottom-2 space-bottom-lg-3">
                <div class="container mt-lg-11">
                    <div class="row">
                        <div class="col-lg-5 col-xl-6">
                            <div class="mb-5">
                                <h1 class="display-4">Who should enroll the class?</h1>
                                <p class="lead">Get enrolled and Succeed with 21K Class.</p>
                            </div>
                            <button type="button" class="btn btn-primary btn-wide transition-3d-hover" data-toggle="modal" data-target="#applyNow">Enroll now</button>
                        </div>
                    </div>
                </div>
            </div>

            <figure>
                <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1920 100.1">
                    <path fill="#fff" d="M0,0c0,0,934.4,93.4,1920,0v100.1H0L0,0z"/>
                </svg>
            </figure>
        </div>

        <div class="container space-0 space-bottom-3 w-lg-60 mx-lg-auto mb-5">
            <table class="table table-align-middle table-thead-bordered">
                <thead class="text-center">
                <tr>
                    <th scope="col" class="align-middle border-top">
                        <span class="text-dark">Course Name</span>
                    </th>
                    <th scope="col" class="align-middle border-left">
                        <span class="text-dark">Students of Class</span>
                    </th>
                    <th scope="col" class="align-middle border-left">
                        <span class="text-dark">Course Duration</span>
                    </th>
                </tr>
                </thead>
                <tbody>
                    <tr class="border-top border-bottom">
                        <td class="font-size-1 bg-white text-center text-dark">21K CA Foundation Extension Course</td>
                        <td class="font-size-1 bg-white text-center border-left">XII</td>
                        <td class="font-size-1 bg-white text-center border-left">1 Year</td>
                    </tr>
                    <tr class="border-top border-bottom">
                        <td class="font-size-1 bg-white text-center text-dark">21K CA Foundation Comprehensive Course</td>
                        <td class="font-size-1 bg-white text-center border-left">XI</td>
                        <td class="font-size-1 bg-white text-center border-left">2 Years</td>
                    </tr>
                    <tr class="border-top border-bottom">
                        <td class="font-size-1 bg-white text-center text-dark">21K CA Foundation Crash Course</td>
                        <td class="font-size-1 bg-white text-center border-left">XII</td>
                        <td class="font-size-1 bg-white text-center border-left">2 Months</td>
                    </tr>
                    <tr class="border-top border-bottom">
                        <td class="font-size-1 bg-white text-center text-dark">21K CA Foundation Test Series</td>
                        <td class="font-size-1 bg-white text-center border-left">XII</td>
                        <td class="font-size-1 bg-white text-center border-left">4 Months</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="bg-soft-primary text-center bg-img-hero" style="background-image: url('/images/commerce/svg/components/abstract-shapes-19.svg');">
            <div class="container space-2">
                <div class="mb-5">
                    <h3 class="h2 text-dark">Enrol your class with 21K Class</h3>
                </div>
                <button type="button" class="btn btn-primary btn-wide transition-3d-hover" data-toggle="modal" data-target="#applyNow">Apply now</button>
            </div>
        </div>

        @include('front.layouts.apply')

    </main>

    @include('front.layouts.footer-commerce')


@endsection

@section('script')
@endsection
