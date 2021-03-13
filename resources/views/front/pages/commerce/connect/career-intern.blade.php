@extends('front.layouts.app')

@section('content')

    @include('front.layouts.nav-commerce')

    <main id="content" role="main">

        <div class="container space-top-3 space-top-lg-4 space-bottom-2 space-bottom-lg-3">
            <div class="w-lg-80 mx-auto">
                <div class="mb-5">
                    <a class="font-weight-bold" href="{{ route('commerce.connect.work-with-us', [ '#openRolesSection' ]) }}">
                        <i class="fas fa-angle-left fa-sm mr-1"></i>
                        Back to Listings
                    </a>
                </div>

                <div class="card space-bottom-2 p-4 p-md-7">
                    <div class="row justify-content-sm-between align-items-sm-center mb-5">
                        <div class="col-sm mb-3 mb-sm-0">
                            <h1 class="h2">Interns</h1>
                            <p class="mb-0">Bengaluru, IN - Teaching - Full-Time</p>
                        </div>

                        <div class="col-sm-auto text-sm-right">
                            <a class="js-go-to position-static btn btn-primary transition-3d-hover" href="javascript:;"
                               data-hs-go-to-options='{
                                  "targetSelector": "#applyForJob",
                                  "compensationSelector": "#logoAndNav",
                                  "offsetTop": 0,
                                  "position": null,
                                  "animationIn": false,
                                  "animationOut": false
                                 }'>
                                Apply Now
                            </a>
                        </div>
                    </div>

                    <div class="mb-5">
                        <p>Require fresh graduates from Maths, Physics, Chemistry and Biology to work as interns for content management work. Should have a good knowledge of the School level concepts and have basic Computer Skills along with the attitude to work with Seniors and as a Team.</p>
                    </div>

                    <div class="mb-5">
                        <h3 class="h4">Requirements:</h3>

                        <ul>
                            <li>Energized to join a startup</li>
                            <li>Candidate should be Very Fluent in English Communication</li>
                            <li>Good at problem selection, problem solving, and course correcting</li>
                            <li>Focused on best practices</li>
                            <li>Highly pragmatic and collaborative</li>
                        </ul>
                    </div>

                    <div class="mb-5">
                        <h3 class="h4">You have:</h3>

                        <ul>
                            <li>Candidate should be at least B.Ed</li>
                            <li>Complete knowledge of the Subject he/she handles.</li>
                        </ul>
                    </div>

                    <div class="mb-5">
                        <h3 class="h4">Extra awesome:</h3>

                        <ul>
                            <li>Good presentation skills & Expertise on the subject</li>
                            <li>Good writing skills in English</li>
                            <li>Good Communication Skills</li>
                            <li>Passion to teach and lead a group of students</li>
                        </ul>
                    </div>

                    <div class="mb-5">
                        <p>Please send your resume to <a href="mailto:subbu@21kclass.com">subbu@21kclass.com</a></p>
                    </div>

                    <div class="border-top text-center pt-9 mb-5 mb-md-9">
                        <h2>Apply for this Job</h2>
                    </div>

                    <form id="applyForJob" class="js-validate">
                        <div class="row">
                            <div class="col-md-6 mb-3 mb-md-5">
                                <div class="js-form-message">
                                    <label class="input-label" for="fullNameLabel">Full name</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="firstName" id="fullNameLabel" placeholder="First Name" aria-label="First Name" required
                                               data-msg="Please enter your frist name.">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3 mb-md-5">
                                <div class="js-form-message">
                                    <label class="input-label" for="lastNameLabel">Last name</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="lastName" id="lastNameLabel" placeholder="Last Name" aria-label="Last Name" required
                                               data-msg="Please enter your last name.">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3 mb-md-5">
                                <div class="js-form-message">
                                    <label class="input-label" for="emailAddressLabel">Email</label>
                                    <div class="input-group">
                                        <input type="email" class="form-control" name="emailAddress" id="emailAddressLabel" placeholder="Email" aria-label="Email" required
                                               data-msg="Please enter a valid email address.">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3 mb-md-5">
                                <div class="js-form-message">
                                    <label class="input-label" for="urlLabel">URL <span class="text-muted font-weight-normal ml-1">(optional)</span></label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="URL" id="urlLabel" placeholder="Linkedin" aria-label="Linkedin">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3 mb-md-5">
                            <label class="input-label">Resume/CV and Cover Letter</label>
                            <div id="resumeAttach" class="js-dropzone dz-dropzone dz-dropzone-boxed">
                                <div class="dz-message p-2">
                                    <span class="d-block mb-1">Browse your files</span>
                                    <small class="d-block text-muted">Maximum file size is 1MB</small>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3 mb-md-5">
                            <div class="js-form-message">
                                <label class="input-label">In a few words...</label>
                                <div class="input-group">
                                <textarea class="form-control" rows="6" name="answer" placeholder="How'd you hear about Front?" aria-label="How'd you hear about Front?" required
                            data-msg="Please enter an answer."></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary transition-3d-hover">Submit Application</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </main>

    @include('front.layouts.footer-commerce')


@endsection

@section('script')
@endsection
