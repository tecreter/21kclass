@extends('front.layouts.app')

@section('content')

    @include('front.layouts.nav')

    <main id="content" role="main">

        <div class="container space-top-3 space-top-lg-4">
            <div class="border-bottom">
                <div class="w-lg-75 text-center mx-lg-auto">
                    <div class="mb-9">
                        <h1 class="display-4 mb-4">Our Faculties</h1>
                        <p class="lead">Talent wins games, but teamwork and intelligence win championships.</p>
                    </div>

                    <div class="w-lg-75 mx-lg-auto">
                        <img class="img-fluid" src="{{ cdn_mix('/svg/illustrations/discussion-scene.svg') }}" alt="Image Description">
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
                    <img src="{{ cdn_mix('/svg/components/abstract-shapes-11.svg') }}" alt="SVG">
                </figure>
                <figure class="max-w-15rem w-100 position-absolute bottom-0 right-0">
                    <div class="mb-n7 mr-n7">
                        <img class="img-fluid" src="{{ cdn_mix('/svg/components/dots-1.svg') }}" alt="Image Description">
                    </div>
                </figure>
            </div>
        </div>

        <div class="container space-2">
            <div class="w-md-80 w-lg-60 text-center mx-md-auto mb-5 mb-md-9">
                <span class="d-block small font-weight-bold text-cap mb-2">Our Faculties</span>
                <h2>Creative mind by people like you</h2>
            </div>

            <div class="row mx-n2 mb-5">
                <div class="col-sm-6 col-lg-3 px-2 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="avatar avatar-xl avatar-circle mb-4">
                                <img class="avatar-img" src="{{ cdn_mix('/images/others/faculty-sunitha.png') }}" alt="Image Description">
                            </div>

                            <h4 class="text-lh-sm">Mrs.Sunitha</h4>
                            <p class="small">M.Sc, B.Ed</p>
                            <span class="d-block small font-weight-bold text-cap mb-3">Principal</span>

                            <p class="font-size-1">Skillful Educationist with the experience of 15 years in the Field of Curriculum development and learning methodologies.
                                Best Teacher Award 2016 from CBSE.
                                Worked in building emotional and physical awareness in primary school and best career prospects to students in senior school. </p>
                        </div>
                        <div class="card-footer border-0 pt-0">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <a class="btn btn-xs btn-icon btn-soft-secondary rounded-lg" href="https://www.facebook.com/sunitha.acoppbs" target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <!--                            <li class="list-inline-item">-->
                                <!--                                <a class="btn btn-xs btn-icon btn-soft-secondary rounded-lg" href="#">-->
                                <!--                                    <i class="fab fa-google"></i>-->
                                <!--                                </a>-->
                                <!--                            </li>-->
                                <!--                            <li class="list-inline-item">-->
                                <!--                                <a class="btn btn-xs btn-icon btn-soft-secondary rounded-lg" href="#">-->
                                <!--                                    <i class="fab fa-twitter"></i>-->
                                <!--                                </a>-->
                                <!--                            </li>-->
                                <li class="list-inline-item">
                                    <a class="btn btn-xs btn-icon btn-soft-secondary rounded-lg" href="https://www.linkedin.com/in/r-sunitha-762381b2" target="_blank">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3 px-2 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="avatar avatar-xl avatar-circle mb-4">
                                <img class="avatar-img" src="{{ cdn_mix('/images/others/faculty-lalitha.jpg') }}" alt="Image Description">
                            </div>

                            <h4 class="text-lh-sm">Mrs.Lalitha</h4>
                            <p class="small">M.sc, M.Phil in Physics Former Hod- Physics,</p>
                            <span class="d-block small font-weight-bold text-cap mb-3">Subject Matter Expert for Physics </span>

                            <p class="font-size-1">Women’s College
                                Coaching for NEET, IIT JEE, PMPD for the past 24 years
                                37 Years Experience in UG Teaching
                                22 Years Experience in PG Teaching
                                more than 3 decades  of Experience in teaching in  competitive Exam
                                Worked as resource  person in Various Top Academies.
                                Developed Content for competitive exams in various institutions.</p>
                        </div>
                        <div class="card-footer border-0 pt-0">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <a class="btn btn-xs btn-icon btn-soft-secondary rounded-lg" href="https://www.facebook.com/laltha.s" target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <!--                            <li class="list-inline-item">-->
                                <!--                                <a class="btn btn-xs btn-icon btn-soft-secondary rounded-lg" href="#">-->
                                <!--                                    <i class="fab fa-google"></i>-->
                                <!--                                </a>-->
                                <!--                            </li>-->
                                <!--                            <li class="list-inline-item">-->
                                <!--                                <a class="btn btn-xs btn-icon btn-soft-secondary rounded-lg" href="#">-->
                                <!--                                    <i class="fab fa-twitter"></i>-->
                                <!--                                </a>-->
                                <!--                            </li>-->
                                <li class="list-inline-item">
                                    <a class="btn btn-xs btn-icon btn-soft-secondary rounded-lg" href="https://www.linkedin.com/in/lalitha-s-24974a203/" target="_blank">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3 px-2 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="avatar avatar-xl avatar-circle mb-4">
                                <img class="avatar-img" src="{{ cdn_mix('/images/others/faculty-gurumoorthy.png') }}" alt="Image Description">
                            </div>

                            <h4 class="text-lh-sm">Dr.Gurumurthy</h4>
                            <p class="small">Ph.D</p>
                            <span class="d-block small font-weight-bold text-cap mb-3">Subject Matter Expert for Chemistry Former HoD- Department of Chemistry, Annamalai University</span>

                            <p class="font-size-1 mt-2">Former Prof.& HOD Chemistry Annamalai University.
                                Registrar, SCSVMV Deemed University, Kanchipuram
                                Guided 8 Ph.Ds &  24 M.Phils.
                                Published 32 research papers.
                                Coaching for IIT JEE & NEET for the past 15 years  </p>
                        </div>
                        <div class="card-footer border-0 pt-0">
                            <ul class="list-inline mb-0">
                                <!--                            <li class="list-inline-item">-->
                                <!--                                <a class="btn btn-xs btn-icon btn-soft-secondary rounded-lg" href="#">-->
                                <!--                                    <i class="fab fa-facebook-f"></i>-->
                                <!--                                </a>-->
                                <!--                            </li>-->
                                <!--                            <li class="list-inline-item">-->
                                <!--                                <a class="btn btn-xs btn-icon btn-soft-secondary rounded-lg" href="#">-->
                                <!--                                    <i class="fab fa-google"></i>-->
                                <!--                                </a>-->
                                <!--                            </li>-->
                                <!--                            <li class="list-inline-item">-->
                                <!--                                <a class="btn btn-xs btn-icon btn-soft-secondary rounded-lg" href="#">-->
                                <!--                                    <i class="fab fa-twitter"></i>-->
                                <!--                                </a>-->
                                <!--                            </li>-->
                                <!--                            <li class="list-inline-item">-->
                                <!--                                <a class="btn btn-xs btn-icon btn-soft-secondary rounded-lg" href="#">-->
                                <!--                                    <i class="fab fa-linkedin"></i>-->
                                <!--                                </a>-->
                                <!--                            </li>-->
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3 px-2 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="avatar avatar-xl avatar-circle mb-4">
                                <img class="avatar-img" src="{{ cdn_mix('/images/others/faculty-nachammai.png') }}" alt="Image Description">
                            </div>

                            <h4 class="text-lh-sm">Ms.Nachammai</h4>
                            <p class="small">B.Sc, B.ED in Biology</p>

                            <p class="font-size-1 mt-2">16 years of experience in teaching CBSE AND TN SBSE curriculum.
                                Expert in Instruction and achieving the Leaning outcome among students. </p>
                        </div>
                        <div class="card-footer border-0 pt-0">
                            <ul class="list-inline mb-0">
                                <!--                            <li class="list-inline-item">-->
                                <!--                                <a class="btn btn-xs btn-icon btn-soft-secondary rounded-lg" href="#">-->
                                <!--                                    <i class="fab fa-facebook-f"></i>-->
                                <!--                                </a>-->
                                <!--                            </li>-->
                                <!--                            <li class="list-inline-item">-->
                                <!--                                <a class="btn btn-xs btn-icon btn-soft-secondary rounded-lg" href="#">-->
                                <!--                                    <i class="fab fa-google"></i>-->
                                <!--                                </a>-->
                                <!--                            </li>-->
                                <!--                            <li class="list-inline-item">-->
                                <!--                                <a class="btn btn-xs btn-icon btn-soft-secondary rounded-lg" href="#">-->
                                <!--                                    <i class="fab fa-twitter"></i>-->
                                <!--                                </a>-->
                                <!--                            </li>-->
                                <li class="list-inline-item">
                                    <a class="btn btn-xs btn-icon btn-soft-secondary rounded-lg" href="https://www.linkedin.com/in/nachammai-venkatachalam-886281204/" target="_blank">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3 px-2 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="avatar avatar-xl avatar-circle mb-4">
                                <img class="avatar-img" src="{{ cdn_mix('/images/others/faculty-bradhavus.jpg') }}" alt="Image Description">
                            </div>

                            <h4 class="text-lh-sm">Ms.Janathul Bradhavus</h4>
                            <p class="small">M.Sc, B.Ed in Mathematics</p>

                            <p class="font-size-1 mt-2">Excellent Maths teacher award
                                Experienced in training aspirants of Various Competitive exams through various online Platform.</p>
                        </div>
                        <div class="card-footer border-0 pt-0">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <a class="btn btn-xs btn-icon btn-soft-secondary rounded-lg" href="https://www.facebook.com/fir.noufal" target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <!--                            <li class="list-inline-item">-->
                                <!--                                <a class="btn btn-xs btn-icon btn-soft-secondary rounded-lg" href="#">-->
                                <!--                                    <i class="fab fa-google"></i>-->
                                <!--                                </a>-->
                                <!--                            </li>-->
                                <!--                            <li class="list-inline-item">-->
                                <!--                                <a class="btn btn-xs btn-icon btn-soft-secondary rounded-lg" href="#">-->
                                <!--                                    <i class="fab fa-twitter"></i>-->
                                <!--                                </a>-->
                                <!--                            </li>-->
                                <li class="list-inline-item">
                                    <a class="btn btn-xs btn-icon btn-soft-secondary rounded-lg" href="https://www.linkedin.com/in/fir-thouse-070752203" target="_blank">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3 px-2 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="avatar avatar-xl avatar-circle mb-4">
                                <img class="avatar-img" src="{{ cdn_mix('/images/others/faculty-narendraran.jpg') }}" alt="Image Description">
                            </div>

                            <h4 class="text-lh-sm">K. Narendiran</h4>
                            <p class="small">M. SC., B.Ed. PG Asst. in Mathematics</p>

                            <p class="font-size-1 mt-2">8 Years of Experience of Teaching in Various Boards.</p>
                        </div>
                        <div class="card-footer border-0 pt-0">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <a class="btn btn-xs btn-icon btn-soft-secondary rounded-lg" href="https://m.facebook.com/naren.karthikeyan.79" target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <!--                            <li class="list-inline-item">-->
                                <!--                                <a class="btn btn-xs btn-icon btn-soft-secondary rounded-lg" href="#">-->
                                <!--                                    <i class="fab fa-google"></i>-->
                                <!--                                </a>-->
                                <!--                            </li>-->
                                <!--                            <li class="list-inline-item">-->
                                <!--                                <a class="btn btn-xs btn-icon btn-soft-secondary rounded-lg" href="#">-->
                                <!--                                    <i class="fab fa-twitter"></i>-->
                                <!--                                </a>-->
                                <!--                            </li>-->
                                <li class="list-inline-item">
                                    <a class="btn btn-xs btn-icon btn-soft-secondary rounded-lg" href="https://www.linkedin.com/in/narendiran-k-5ba751203" target="_blank">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3 px-2 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="avatar avatar-xl avatar-circle mb-4">
                                <img class="avatar-img" src="{{ cdn_mix('/images/others/faculty-divya.jpg') }}" alt="Image Description">
                            </div>

                            <h4 class="text-lh-sm">Ms. Bala Divya</h4>
                            <p class="small">B.TECH (IT)</p>

                            <p class="font-size-1 mt-2">A math teacher with over seven years’ experience in training students for Mathematics in a reputed CBSE school.
                                Experience in training student of Foundation Courses and Competitive exams like olympiad, NTSE etc.</p>
                        </div>
                        <div class="card-footer border-0 pt-0">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <a class="btn btn-xs btn-icon btn-soft-secondary rounded-lg" href="https://www.facebook.com/divya.kumar.505" target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <!--                            <li class="list-inline-item">-->
                                <!--                                <a class="btn btn-xs btn-icon btn-soft-secondary rounded-lg" href="#">-->
                                <!--                                    <i class="fab fa-google"></i>-->
                                <!--                                </a>-->
                                <!--                            </li>-->
                                <!--                            <li class="list-inline-item">-->
                                <!--                                <a class="btn btn-xs btn-icon btn-soft-secondary rounded-lg" href="#">-->
                                <!--                                    <i class="fab fa-twitter"></i>-->
                                <!--                                </a>-->
                                <!--                            </li>-->
                                <li class="list-inline-item">
                                    <a class="btn btn-xs btn-icon btn-soft-secondary rounded-lg" href="https://www.linkedin.com/in/baladivya-premkumar-a56b6277/" target="_blank">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3 px-2 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="avatar avatar-xl avatar-circle mb-4">
                                <img class="avatar-img" src="{{ cdn_mix('/images/others/faculty-praveen.jpg') }}" alt="Image Description">
                            </div>

                            <h4 class="text-lh-sm">Mr.Praveen Shanker</h4>
                            <p class="small">MSc in Physics, Currently pursuing PhD as Senior Research Fellow in DRDO</p>

                            <p class="font-size-1 mt-2">Currently pursuing PhD
                                10 + years of experience in training students for JEE, NEET , SAT and CBSE</p>
                        </div>
                        <div class="card-footer border-0 pt-0">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <a class="btn btn-xs btn-icon btn-soft-secondary rounded-lg" href="https://m.facebook.com/prabps.shanker?ref=bookmarks" target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <!--                            <li class="list-inline-item">-->
                                <!--                                <a class="btn btn-xs btn-icon btn-soft-secondary rounded-lg" href="#">-->
                                <!--                                    <i class="fab fa-google"></i>-->
                                <!--                                </a>-->
                                <!--                            </li>-->
                                <!--                            <li class="list-inline-item">-->
                                <!--                                <a class="btn btn-xs btn-icon btn-soft-secondary rounded-lg" href="#">-->
                                <!--                                    <i class="fab fa-twitter"></i>-->
                                <!--                                </a>-->
                                <!--                            </li>-->
                                <!--                            <li class="list-inline-item">-->
                                <!--                                <a class="btn btn-xs btn-icon btn-soft-secondary rounded-lg" href="#" target="_blank">-->
                                <!--                                    <i class="fab fa-linkedin"></i>-->
                                <!--                                </a>-->
                                <!--                            </li>-->
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3 px-2 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="avatar avatar-xl avatar-circle mb-4">
                                <img class="avatar-img" src="{{ cdn_mix('/images/others/faculty-mohan.jpg') }}" alt="Image Description">
                            </div>

                            <h4 class="text-lh-sm">Mr. Mohan Kumar T</h4>
                            <p class="small">M.E, B.Ed </p>

                            <p class="font-size-1 mt-2">Overall 22 students got good score in NEET. 14 students got good percentile in JEE mains.
                                100% NCERT results in CLASS 10 and CLASS 12 for the past 5 years.</p>
                        </div>
                        <div class="card-footer border-0 pt-0">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <a class="btn btn-xs btn-icon btn-soft-secondary rounded-lg" href="https://www.facebook.com/mohankumar.t.96" target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <!--                            <li class="list-inline-item">-->
                                <!--                                <a class="btn btn-xs btn-icon btn-soft-secondary rounded-lg" href="#">-->
                                <!--                                    <i class="fab fa-google"></i>-->
                                <!--                                </a>-->
                                <!--                            </li>-->
                                <!--                            <li class="list-inline-item">-->
                                <!--                                <a class="btn btn-xs btn-icon btn-soft-secondary rounded-lg" href="#">-->
                                <!--                                    <i class="fab fa-twitter"></i>-->
                                <!--                                </a>-->
                                <!--                            </li>-->
                                <li class="list-inline-item">
                                    <a class="btn btn-xs btn-icon btn-soft-secondary rounded-lg" href="https://www.quora.com/Mohan-Kumar-2404" target="_blank">
                                        <i class="fab fa-quora"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="btn btn-xs btn-icon btn-soft-secondary rounded-lg" href="https://www.linkedin.com/in/mohan-kumar-b0806b26" target="_blank">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3 px-2 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="avatar avatar-xl avatar-circle mb-4">
                                <img class="avatar-img" src="{{ cdn_mix('/images/100x100/img12.jpg') }}" alt="Image Description">
                            </div>

                            <h4 class="text-lh-sm">Mr.Vishnu.B</h4>
                            <p class="small">BE, B.Ed</p>

                            <p class="font-size-1 mt-2"></p>
                        </div>
                        <div class="card-footer border-0 pt-0">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <a class="btn btn-xs btn-icon btn-soft-secondary rounded-lg" href="https://m.facebook.com/vishnu.vichu.904?ref=bookmarks" target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <!--                            <li class="list-inline-item">-->
                                <!--                                <a class="btn btn-xs btn-icon btn-soft-secondary rounded-lg" href="#">-->
                                <!--                                    <i class="fab fa-google"></i>-->
                                <!--                                </a>-->
                                <!--                            </li>-->
                                <!--                            <li class="list-inline-item">-->
                                <!--                                <a class="btn btn-xs btn-icon btn-soft-secondary rounded-lg" href="#">-->
                                <!--                                    <i class="fab fa-twitter"></i>-->
                                <!--                                </a>-->
                                <!--                            </li>-->
                                <!--                            <li class="list-inline-item">-->
                                <!--                                <a class="btn btn-xs btn-icon btn-soft-secondary rounded-lg" href="#" target="_blank">-->
                                <!--                                    <i class="fab fa-linkedin"></i>-->
                                <!--                                </a>-->
                                <!--                            </li>-->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <div class="d-inline-block font-size-1 border bg-white text-center rounded-pill py-3 px-4">
                    Wanna join our faculty team? <a class="font-weight-bold ml-3" href="{{ route('work-with-us') }}">We are hiring <span class="fas fa-angle-right fa-sm ml-1"></span></a>
                </div>
            </div>
        </div>

    </main>

    @include('front.layouts.footer')

@endsection

@section('script')
@endsection
