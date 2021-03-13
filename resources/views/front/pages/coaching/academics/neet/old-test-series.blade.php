@extends('front.layouts.app')

@section('content')

    @include('front.layouts.nav-coaching')

    <main id="content" role="main">

        <div class="container space-top-3 space-top-lg-4 space-bottom-2">
            <div class="row align-items-lg-center">
                <div class="col-lg-5 mb-7 mb-lg-0">
                    <div class="mb-4">
                        <h1>NEET Classes – The 21K Class Way</h1>
                        <p>An all-India level examination for admission into India’s best medical colleges.</p>
                    </div>
                </div>

                <div class="col-lg-7">
                    <img class="img-fluid" src="/images/coaching/svg/illustrations/we-are-in-office-1.svg" alt="Image Description">
                </div>
            </div>
        </div>

        <div class="container space-top-2">
            <div class="w-lg-50 text-center mx-lg-auto mb-5">
                <h2>NEET – An Introduction</h2>
                <p>The National Eligibility-cum-Entrance Test (NEET-UG) 2021 for admission to the undergraduate medical
                    education will be conducted by the NTA (National Testing Agency)</p>
            </div>
            <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-md-5">
                <h4>Pattern of NEET (UG)-2020 </h4>
            </div>

            <div class="table-responsive-lg w-lg-75 mx-lg-auto">
                <table class="table table-align-middle table-thead-bordered">
                    <thead class="text-center">
                    <tr>
                        <th scope="col" class="w-20">
                            <span class="text-dark">Subject</span>
                        </th>
                        <th scope="col" class="w-20 border-left">
                            <span class="text-dark">Types of Question</span>
                        </th>
                        <th scope="col" class="w-20 border-left">
                            <span class="text-dark">Duration</span>
                        </th>
                        <th scope="col" class="w-20 border-left">
                            <span class="text-dark">Number of Questions</span>
                        </th>
                        <th scope="col" class="w-20 border-left">
                            <span class="text-dark">Marks</span>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="border-top border-bottom">
                        <td class="bg-white text-center text-dark">Physics</td>
                        <td class="bg-white border-left font-size-1" rowspan="4">Multiple Choice Questions (MCQs) with four
                            options and single correct answer/best option
                        </td>
                        <td class="bg-white text-center border-left" rowspan="4">3 Hours</td>
                        <td class="bg-white text-center border-left">45</td>
                        <td class="bg-white text-center border-left">180</td>
                    </tr>
                    <tr class="border-bottom">
                        <td class="font-size-1 text-center text-dark">Chemistry</td>
                        <td class="text-center border-left border-right p-3">45</td>
                        <td class="text-center p-3">180</td>
                    </tr>
                    <tr class="border-bottom">
                        <td class="font-size-1 text-center text-dark">Biology (Botany & Zoology)</td>
                        <td class="text-center border-left border-right p-3">90</td>
                        <td class="text-center p-3">360</td>
                    </tr>
                    <tr class="border-bottom">
                        <td class="font-size-1 text-center text-dark"><strong>Total</strong></td>
                        <td class="text-center border-left border-right p-3"><strong>180</strong></td>
                        <td class="text-center p-3"><strong>720</strong></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="container space-bottom-lg-2">
            <div class="row justify-content-sm-between align-items-lg-center">
                <div class="col-lg-12 mb-9 mb-lg-0">
                    <div class="mb-5">
                        <h3 class="mt-3 mb-3">Important Note</h3>
                    </div>

                    <div class="media pb-3">
                        <span class="icon icon-xs icon-soft-indigo icon-circle mr-3">
                          <i class="fas fa-check"></i>
                        </span>
                        <div class="media-body">
                            <p class="text-dark mb-0">For each correct answer, candidate will get 04 (four) marks.</p>
                        </div>
                    </div>
                    <div class="media py-3">
                        <span class="icon icon-xs icon-soft-indigo icon-circle mr-3">
                          <i class="fas fa-check"></i>
                        </span>
                        <div class="media-body">
                            <p class="text-dark mb-0">For each incorrect answer, 01(one) mark will be deducted from the
                                total score.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="container space-2">
            <div class="row justify-content-lg-between align-items-lg-center">
                <div class="col-lg-6 mb-9 mb-lg-0">
                    <div class="mb-3">
                        <h2 class="h1">NEET Preparation</h2>
                    </div>

                    <p>NEET exams test the conceptual understanding of the student in the
                        subjects of Physics, Chemistry and Biology. The exam will be based on the common
                        syllabus notified by the Medical Council of India from these subjects. But, the aspiring
                        student need to focus on the concepts from the class 9 onwards for a good understanding
                        of the concepts. Students from the class 11 should start specific preparation to
                        understand the pattern of the NEET exam and the syllabus coverage of the
                        examination.</p>
                    <p>The students need to go for supportive classes where the teacher can
                        focus on the NEET syllabus and administer regular tests to make the child aware of
                        his/her understanding of the concepts. Regular test practice enables the aspirant to
                        face the final NEET exam confidently and answer the questions in the given period of
                        time.</p>

                    <div class="mt-4">
                        <a class="btn btn-primary btn-wide transition-3d-hover" href="#">Start Now</a>
                    </div>
                </div>

                <div class="col-lg-5 col-xl-5">
                    <div class="position-relative min-h-500rem mx-auto" style="max-width: 28rem;">
                        <figure class="position-absolute top-0 right-0 z-index-2 mr-11" data-aos="fade-up">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 450 450" width="165" height="165">
                                <g>
                                    <defs>
                                        <path id="circleImgID2" d="M225,448.7L225,448.7C101.4,448.7,1.3,348.5,1.3,225l0,0C1.2,101.4,101.4,1.3,225,1.3l0,0
                      c123.6,0,223.7,100.2,223.7,223.7l0,0C448.7,348.6,348.5,448.7,225,448.7z"/>
                                    </defs>
                                    <clipPath id="circleImgID1">
                                        <use xlink:href="#circleImgID2"/>
                                    </clipPath>
                                    <g clip-path="url(#circleImgID1)">
                                        <image width="450" height="450" xlink:href="/images/coaching/450x450/img1.jpg" ></image>
                                    </g>
                                </g>
                            </svg>
                        </figure>

                        <figure class="position-absolute top-0 left-0" data-aos="fade-up" data-aos-delay="300">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 335.2 335.2" width="120" height="120">
                                <circle fill="none" stroke="#FEB607" stroke-width="75" cx="167.6" cy="167.6" r="130.1"/>
                            </svg>
                        </figure>

                        <figure class="d-none d-sm-block position-absolute top-0 left-0 mt-11" data-aos="fade-up" data-aos-delay="200">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 515 515" width="200" height="200">
                                <g>
                                    <defs>
                                        <path id="circleImgID4" d="M260,515h-5C114.2,515,0,400.8,0,260v-5C0,114.2,114.2,0,255,0h5c140.8,0,255,114.2,255,255v5
                      C515,400.9,400.8,515,260,515z"/>
                                    </defs>
                                    <clipPath id="circleImgID3">
                                        <use xlink:href="#circleImgID4"/>
                                    </clipPath>
                                    <g clip-path="url(#circleImgID3)">
                                        <image width="515" height="515" xlink:href="/images/coaching/515x515/img1.jpg" transform="matrix(1 0 0 1 1.639390e-02 2.880859e-02)"></image>
                                    </g>
                                </g>
                            </svg>
                        </figure>

                        <figure class="position-absolute top-0 right-0" style="margin-top: 11rem; margin-right: 13rem;" data-aos="fade-up" data-aos-delay="250">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 67 67" width="25" height="25">
                                <circle fill="#00C9A7" cx="33.5" cy="33.5" r="33.5"/>
                            </svg>
                        </figure>

                        <figure class="position-absolute top-0 right-0 mr-3" style="margin-top: 8rem;" data-aos="fade-up" data-aos-delay="350">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 141 141" width="50" height="50">
                                <circle fill="#FFC107" cx="70.5" cy="70.5" r="70.5"/>
                            </svg>
                        </figure>

                        <figure class="position-absolute bottom-0 right-0" data-aos="fade-up" data-aos-delay="400">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 770.4 770.4" width="280" height="280">
                                <g>
                                    <defs>
                                        <path id="circleImgID6" d="M385.2,770.4L385.2,770.4c212.7,0,385.2-172.5,385.2-385.2l0,0C770.4,172.5,597.9,0,385.2,0l0,0
                      C172.5,0,0,172.5,0,385.2l0,0C0,597.9,172.4,770.4,385.2,770.4z"/>
                                    </defs>
                                    <clipPath id="circleImgID5">
                                        <use xlink:href="#circleImgID6"/>
                                    </clipPath>
                                    <g clip-path="url(#circleImgID5)">
                                        <image width="900" height="900" xlink:href="/images/coaching/900x900/img2.jpg" transform="matrix(1 0 0 1 -64.8123 -64.8055)"></image>
                                    </g>
                                </g>
                            </svg>
                        </figure>
                    </div>
                </div>
            </div>
        </div>

        <div class="container space-2">
            <div class="w-lg-50 text-center mx-lg-auto mb-10">
                <h2>21K NEET Test Series 2021</h2>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="media text-body font-size-1 mb-3">
                        <i class="fas fa-check-circle text-success mt-1 mr-2"></i>
                        <div class="media-body">
                            Planned in a systematic and organized way like the pattern of NEET.
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="media text-body font-size-1 mb-3">
                        <i class="fas fa-check-circle text-success mt-1 mr-2"></i>
                        <div class="media-body">
                            Follow the same pattern as that of NEET.
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="media text-body font-size-1 mb-3">
                        <i class="fas fa-check-circle text-success mt-1 mr-2"></i>
                        <div class="media-body">
                            Cover all the aspects and complete syllabus of NEET.
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="media text-body font-size-1 mb-3">
                        <i class="fas fa-check-circle text-success mt-1 mr-2"></i>
                        <div class="media-body">
                            Give a detailed Analysis of student’s test result.
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="media text-body font-size-1 mb-3">
                        <i class="fas fa-check-circle text-success mt-1 mr-2"></i>
                        <div class="media-body">
                            Provide relevant solution to each question.
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="media text-body font-size-1 mb-3">
                        <i class="fas fa-check-circle text-success mt-1 mr-2"></i>
                        <div class="media-body">
                            Questions based on latest NEET pattern, syllabus and matching difficulty level.
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="media text-body font-size-1 mb-3">
                        <i class="fas fa-check-circle text-success mt-1 mr-2"></i>
                        <div class="media-body">
                            Builds Problem solving speed in exams with Series of specially designed Chapter test and Subject test.
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="media text-body font-size-1 mb-3">
                        <i class="fas fa-check-circle text-success mt-1 mr-2"></i>
                        <div class="media-body">
                            Analyze errors with step by step self-explanatory solution provided in answer key.
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="media text-body font-size-1 mb-3">
                        <i class="fas fa-check-circle text-success mt-1 mr-2"></i>
                        <div class="media-body">
                            Structured Practice with practice sheets, formulae sheet and study cards.
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="media text-body font-size-1 mb-3">
                        <i class="fas fa-check-circle text-success mt-1 mr-2"></i>
                        <div class="media-body">
                            Doubt clearance through video chat.
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-lg-90 text-center mx-lg-auto mb-5">
                <p>The result analysis would show the students topic wise strength and weakness. This will enable them to prepare better for the NEET.</p>
                <p>A question wise progress report, student can spot the weaknesses and work towards strengthening the same.</p>
            </div>
        </div>

        <div class="position-relative">
            <div class="bg-img-hero" style="background-image: url('/images/coaching/svg/components/abstract-shapes-12.svg');">
                <div class="container space-top-2 space-bottom-3 position-relative z-index-2">
                    <div class="w-md-80 w-lg-60 text-center mx-md-auto mb-5 mb-md-9">
                        <h2>Components of Test Series</h2>
                    </div>

                    <div class="row">
                        <div class="col-md-4 mb-3 mb-md-0 mb-md-n11">
                            <div class="card text-center h-100 transition-3d-hover">
                                <div class="card-body p-lg-5">
                                    <figure class="max-w-8rem w-100 mx-auto mb-4">
                                        <img class="img-fluid" src="/images/coaching/svg/icons/icon-26.svg" alt="SVG">
                                    </figure>
                                    <h3 class="h4">Chapter Test</h3>
                                    <p class="text-body mb-0">A student can choose a chapter and take a test from the topics and sub topics.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-3 mb-md-0 mb-md-n11">
                            <div class="card text-center h-100 transition-3d-hover">
                                <div class="card-body p-lg-5">
                                    <figure class="max-w-8rem w-100 mx-auto mb-4">
                                        <img class="img-fluid" src="/images/coaching/svg/icons/icon-29.svg" alt="SVG">
                                    </figure>
                                    <h3 class="h4">Subject Test</h3>
                                    <p class="text-body mb-0">A student can take a test a full subject test independently for 3 subjects.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-md-n11">
                            <div class="card text-center h-100 transition-3d-hover">
                                <div class="card-body p-lg-5">
                                    <figure class="max-w-8rem w-100 mx-auto mb-4">
                                        <img class="img-fluid" src="/images/coaching/svg/icons/icon-24.svg" alt="SVG">
                                    </figure>
                                    <h3 class="h4">Whole Syllabus Test</h3>
                                    <p class="text-body mb-0">As per NEET syllabus.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <figure class="position-absolute bottom-0 right-0 left-0">
                <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1921 273">
                    <polygon fill="#fff" points="0,273 1921,273 1921,0 "/>
                </svg>
            </figure>
        </div>

        <div class="container space-top-2">
            <div class="w-lg-50 text-center mx-lg-auto mb-5">
                <h2>21K Test Series 2021</h2>
            </div>

            <div class="table-responsive-lg w-lg-75 mx-lg-auto">
                <table class="table table-align-middle table-thead-bordered">
                    <thead class="text-center">
                    <tr>
                        <th scope="col" class="w-20">
                            <span class="text-dark">Test Name</span>
                        </th>
                        <th scope="col" class="w-20 border-left">
                            <span class="text-dark">No. of Test</span>
                        </th>
                        <th scope="col" class="w-20 border-left">
                            <span class="text-dark">No. of Questions</span>
                        </th>
                        <th scope="col" class="w-20 border-left">
                            <span class="text-dark">Total Marks</span>
                        </th>
                        <th scope="col" class="w-20 border-left">
                            <span class="text-dark">Duration</span>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="border-top border-bottom">
                        <td class="bg-white text-left text-dark font-size-1">Entry level full syllabus mock test</td>
                        <td class="bg-white border-left font-size-1 text-center">1</td>
                        <td class="bg-white border-left font-size-1 text-center">180</td>
                        <td class="bg-white border-left font-size-1 text-center">180</td>
                        <td class="bg-white border-left font-size-1 text-center">3 hrs</td>
                    </tr>
                    <tr class="border-top border-bottom">
                        <td class="bg-white text-left text-dark font-size-1">Chapter test</td>
                        <td class="bg-white border-left font-size-1 text-center">33</td>
                        <td class="bg-white border-left font-size-1 text-center">60</td>
                        <td class="bg-white border-left font-size-1 text-center">60</td>
                        <td class="bg-white border-left font-size-1 text-center">1 hr</td>
                    </tr>
                    <tr class="border-top border-bottom">
                        <td class="bg-white text-left text-dark font-size-1">Subject test</td>
                        <td class="bg-white border-left font-size-1 text-center">3</td>
                        <td class="bg-white border-left font-size-1 text-center">180</td>
                        <td class="bg-white border-left font-size-1 text-center">180</td>
                        <td class="bg-white border-left font-size-1 text-center">3 hrs</td>
                    </tr>
                    <tr class="border-top border-bottom">
                        <td class="bg-white text-left text-dark font-size-1">Exit level full syllabus mock test</td>
                        <td class="bg-white border-left font-size-1 text-center">1</td>
                        <td class="bg-white border-left font-size-1 text-center">180</td>
                        <td class="bg-white border-left font-size-1 text-center">180</td>
                        <td class="bg-white border-left font-size-1 text-center">3 hrs</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="container w-md-80 w-lg-50 mx-md-auto mb-5 mb-md-9">
            <div class="row justify-content-sm-between align-items-lg-center">
                <ul>
                    <li>Negative mark is applicable for incorrect answers.</li>
                    <li>Questionnaire will be uploaded every week as per the schedule.</li>
                    <li>Students must attend the test within the stipulated time and week.</li>
                    <li>Time lock for Test completion</li>
                    <li>Late entry students will be given access to questionnaire till date.</li>
                    <li>Answer key and performance report will be provided on submission of test.</li>
                    <li>Follow up notification will be sent to students/Parents.</li>
                    <li>Students can attend the test as per their time convenience within that week.</li>
                </ul>
            </div>
        </div>

        <div class="container space-2">
            <div class="w-lg-50 text-center mx-lg-auto mb-5 mb-md-9">
                <h2>16 weeks Series</h2>
                <p>Higher the Marks You Score – Lower the Fees for You</p>
            </div>

            <div class="row no-gutters align-items-lg-center mb-7 mb-md-11">
                <div class="col-lg-7 shadow-lg rounded-lg">
                    <div class="text-center py-6 px-5 px-sm-9">
                        <header class="mb-4">
                            <div class="mb-1">
                                <span class="display-4 text-danger">₹2,000/-</span>
                            </div>
                            <p>per student</p>
                        </header>

                        <div class="row justify-content-sm-center align-items-sm-center mb-5">
                            <div class="col-sm-3">
                                <figure class="max-w-8rem mx-auto mb-2">
                                    <img class="img-fluid" src="/images/coaching/svg/illustrations/diversity.svg" alt="SVG">
                                </figure>
                                <h4>Skills</h4>
                            </div>

                            <div class="col-sm-1 my-3 my-sm-0">
                                <span class="font-size-3 text-primary">+</span>
                            </div>

                            <div class="col-sm-3">
                                <figure class="max-w-8rem mx-auto mb-2">
                                    <img class="img-fluid" src="/images/coaching/svg/illustrations/growth.svg" alt="SVG">
                                </figure>
                                <h4>Confidence</h4>
                            </div>

                            <div class="col-sm-1 my-3 my-sm-0">
                                <span class="font-size-3 text-primary">=</span>
                            </div>

                            <div class="col-sm-3">
                                <figure class="max-w-8rem mx-auto mb-2">
                                    <img class="img-fluid" src="/images/coaching/svg/illustrations/medal.svg" alt="SVG">
                                </figure>
                                <h4>Future</h4>
                            </div>
                        </div>

                        <div class="mb-1 text-black text-left">
                            <p>Performance analysis report</p>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="media text-left text-body mb-2">
                                    <i class="fas fa-check-circle text-success mt-1 mr-2"></i>
                                    <div class="media-body font-size-1">
                                        Score card (Overall score & rank, Subject score & rank, Percentage)
                                    </div>
                                </div>
                                <div class="media text-left text-body mb-2">
                                    <i class="fas fa-check-circle text-success mt-1 mr-2"></i>
                                    <div class="media-body font-size-1">
                                        Question wise report (Summary attempted, un-attempted, correct & incorrect)
                                    </div>
                                </div>
                                <div class="media text-left text-body mb-2">
                                    <i class="fas fa-check-circle text-success mt-1 mr-2"></i>
                                    <div class="media-body font-size-1">
                                        Chapter wise report (Strength & weakness, competent area)
                                    </div>
                                </div>
                                <div class="media text-left text-body mb-2">
                                    <i class="fas fa-check-circle text-success mt-1 mr-2"></i>
                                    <div class="media-body font-size-1">
                                        Subject Wise report (summarized after each concept test)
                                    </div>
                                </div>
                                <div class="media text-left text-body mb-2">
                                    <i class="fas fa-check-circle text-success mt-1 mr-2"></i>
                                    <div class="media-body font-size-1">
                                        Difficulty level report (tough, medium & easy)
                                    </div>
                                </div>
                                <div class="media text-left text-body mb-2">
                                    <i class="fas fa-check-circle text-success mt-1 mr-2"></i>
                                    <div class="media-body font-size-1">
                                        Progression Graph (efforts)
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button type="button" class="btn mt-5 btn-primary btn-wide btn-pill transition-3d-hover">Join Now</button>
                    </div>
                </div>
                <div class="col-lg-5 bg-info">
                    <div class="py-8 px-5 px-sm-8">
                        <div class="media mb-4">
                        <span class="icon icon-xs icon-soft-light icon-circle mt-1 mr-3">
                            <i class="fas fa-angle-right fa-xs"></i>
                        </span>
                            <div class="media-body">
                                <h4 class="text-white mb-1">Week 1</h4>
                                <p class="text-white-70 mb-0">Entry level full syllabus mock test.</p>
                            </div>
                        </div>

                        <div class="border-top opacity-xs mb-4"></div>
                        <div class="media mb-4">
                        <span class="icon icon-xs icon-soft-light icon-circle mt-1 mr-3">
                            <i class="fas fa-angle-right fa-xs"></i>
                        </span>
                            <div class="media-body">
                                <h4 class="text-white mb-1">Week 2 to 12</h4>
                                <p class="text-white-70 mb-0">Chapter test (3 Chapter test per week).</p>
                            </div>
                        </div>

                        <div class="border-top opacity-xs mb-4"></div>
                        <div class="media mb-4">
                        <span class="icon icon-xs icon-soft-light icon-circle mt-1 mr-3">
                            <i class="fas fa-angle-right fa-xs"></i>
                        </span>
                            <div class="media-body">
                                <h4 class="text-white mb-1">Week 13 to 15</h4>
                                <p class="text-white-70 mb-0">Subject test (PCB One subject per week).</p>
                            </div>
                        </div>

                        <div class="border-top opacity-xs mb-4"></div>
                        <div class="media">
                        <span class="icon icon-xs icon-soft-light icon-circle mt-1 mr-3">
                            <i class="fas fa-angle-right fa-xs"></i>
                        </span>
                            <div class="media-body">
                                <h4 class="text-white mb-1">Week 16</h4>
                                <p class="text-white-70 mb-0">Exit level full syllabus mock test.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-lg-75 mx-lg-auto">
                <div class="media d-block d-sm-flex">
                    <figure class="w-100 max-w-15rem mr-4 mb-3 mb-sm-0">
                        <img class="img-fluid" src="/images/coaching/svg/illustrations/referral.svg" alt="SVG">
                    </figure>
                    <div class="media-body">
                        <h4>Scholarship Programme</h4>
                        <p>
                            Scholarships are given on the basis of the Entry Level Full Syllabus Mock Test to be conducted by us. Registration for this Test is absolutely free and the Entry Level Full Syllabus Mock Test is also free.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container space-2">
            <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
                <span class="d-block small font-weight-bold text-cap mb-2">The Way Forward</span>
                <h2>Process of Enrollment</h2>
            </div>

            <ul class="step step-md step-centered">
                <li class="step-item">
                    <div class="step-content-wrapper">
                        <span class="step-icon step-icon-indigo">1</span>
                        <div class="step-content">
                            <h3>Click NEET 21KTest Series 2021</h3>
                            <ul>
                                <li class="text-left small">Sign in with your email id and mobile no.</li>
                                <li class="text-left small">OTP will be recd and then log in with your email id and password.</li>
                            </ul>
                        </div>
                    </div>
                </li>

                <li class="step-item">
                    <div class="step-content-wrapper">
                        <span class="step-icon step-icon-indigo">2</span>
                        <div class="step-content">
                            <h3>Application Form</h3>
                            <ul>
                                <li class="text-left small">Fill the application form.</li>
                                <li class="text-left small">Take the Trial Test.</li>
                            </ul>
                        </div>
                    </div>
                </li>

                <li class="step-item">
                    <div class="step-content-wrapper">
                        <span class="step-icon step-icon-indigo">3</span>
                        <div class="step-content">
                            <h3>Mock Test & Enrollment</h3>
                            <ul>
                                <li class="text-left small">Take the Mock Test and know your score.</li>
                                <li class="text-left small">Based on the score you can pay the fees and enroll for the TEST SERIES.</li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <div class="space-bottom-2 space-bottom-lg-3" style="background: url('/images/coaching/svg/components/abstract-shapes-9.svg') center no-repeat;">
            <div class="position-relative">
                <div class="container space-2">
                    <div class="row align-items-md-center mb-7">
                        <div class="col-md-6 mb-4 mb-md-0">
                            <h2>Check out our newest and most popular courses</h2>
                        </div>
                    </div>

                    <div class="js-slick-carousel slick slick-equal-height slick-gutters-3 slick-center-mode-right slick-center-mode-right-offset"
                         data-hs-slick-carousel-options='{
                                                         "prevArrow": "<span class=\"fa fa-arrow-left slick-arrow slick-arrow-primary-white slick-arrow-left slick-arrow-centered-y shadow-soft rounded-circle ml-sm-n2\"></span>",
                                                         "nextArrow": "<span class=\"fa fa-arrow-right slick-arrow slick-arrow-primary-white slick-arrow-right slick-arrow-centered-y shadow-soft rounded-circle mr-sm-2 mr-xl-4\"></span>",
                                                         "slidesToShow": 5,
                                                         "infinite": true,
                                                         "responsive": [{
                                                           "breakpoint": 1200,
                                                             "settings": {
                                                               "slidesToShow": 4
                                                             }
                                                           }, {
                                                           "breakpoint": 992,
                                                             "settings": {
                                                               "slidesToShow": 3
                                                             }
                                                           }, {
                                                           "breakpoint": 768,
                                                           "settings": {
                                                             "slidesToShow": 2
                                                           }
                                                           }, {
                                                           "breakpoint": 554,
                                                           "settings": {
                                                             "slidesToShow": 1
                                                           }
                                                         }]
                                                       }'>
                        <article class="js-slide pt-2">
                            <div class="card bg-img-hero w-100 min-h-270rem transition-3d-hover" style="background-image: url('/images/coaching/400x500/img14.jpg');">
                                <div class="card-body">
                                    <span class="d-block small text-white-70 font-weight-bold text-cap mb-2">NEET</span>
                                    <h3 class="text-white">NEET 2022 – One Year Course</h3>
                                </div>
                            </div>
                        </article>

                        <article class="js-slide pt-2">
                            <div class="card bg-img-hero w-100 min-h-270rem transition-3d-hover" style="background-image: url('/images/coaching/400x500/img15.jpg');">
                                <div class="card-body">
                                    <span class="d-block small text-white-70 font-weight-bold text-cap mb-2">NEET</span>
                                    <h3 class="text-white">NEET 2023 – Two Year Course</h3>
                                </div>
                            </div>
                        </article>

                        <article class="js-slide pt-2">
                            <div class="card bg-img-hero w-100 min-h-270rem transition-3d-hover" style="background-image: url('/images/coaching/400x500/img16.jpg');">
                                <div class="card-body">
                                    <span class="d-block small text-white-70 font-weight-bold text-cap mb-2">JEE</span>
                                    <h3 class="text-white">JEE 2022 – One Year Course</h3>
                                </div>
                            </div>
                        </article>

                        <article class="js-slide pt-2">
                            <div class="card bg-img-hero w-100 min-h-270rem transition-3d-hover" style="background-image: url('/images/coaching/400x500/img18.jpg');">
                                <div class="card-body">
                                    <span class="d-block small text-white-70 font-weight-bold text-cap mb-2">JEE</span>
                                    <h3 class="text-white">JEE 2023 – Two Year Course</h3>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>

                <div class="w-100 w-md-65 bg-light position-absolute top-0 right-0 bottom-0 rounded-left z-index-n1"></div>
            </div>
        </div>

        <div class="border-top">
            <div class="container space-2">
                <div class="text-center" style="background: url('/images/coaching/svg/components/abstract-shapes-19.svg') center no-repeat;">
                    <h2>Find the right learning path for you</h2>
                    <p>Answer a few questions and match your goals to our programs.</p>
                    <span class="d-block mt-5">
          <a class="btn btn-primary transition-3d-hover" href="#">Explore by Category</a>
        </span>
                </div>
            </div>
        </div>

    </main>

    @include('front.layouts.footer-coaching')


@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function () {
            $('.js-slick-carousel').each(function() {
                var slickCarousel = $.HSCore.components.HSSlickCarousel.init($(this));
            });
        });
    </script>
@endsection
