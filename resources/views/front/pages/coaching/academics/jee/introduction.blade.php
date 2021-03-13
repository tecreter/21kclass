@extends('front.layouts.app')

@section('content')

    @include('front.layouts.nav-coaching')

    <main id="content" role="main">

        <div class="bg-img-hero-center" style="background-image: url('/images/banners/banner-jee.jpeg');background-color: rgba(0, 0, 0, 0.4)">
            <div class="container space-2 space-sm-3 space-md-4 min-vw-100" style="background-color: rgba(0, 0, 0, 0.45);">
                <div class="w-xs-auto text-center">
                    <div class="mb-4">
                        <h2 class="h1 text-white">JEE Coaching</h2>
                    </div>
                </div>
            </div>
        </div>


        <div class="container space-top-1 space-top-lg-2">
            <div class="w-lg-80 text-center mx-lg-auto mb-5">
                <h2 class="mb-3 mb-lg-5">JEE an Introduction</h2>
                <p>Joint Entrance Examination (JEE) is conducted by the National Testing Agency (NTA).</p>
            </div>

            <div class="container space-bottom-1">
                <p>The Joint Entrance Examination (JEE) comprises of two papers. The Paper1 (JEE Mains) is conducted for admission to Undergraduate Engineering Programs (B.E/B. Tech) at NITs, IIITs, other Centrally Funded Technical Institutions (CFTIs), Institutions/Universities funded/recognized by participating State Governments, as well as an eligibility test for JEE (Advanced), which is conducted for admission to IITs.</p>
                <p>The JEE (Main) is being conducted in multiple Sessions (February/March/April/May 2021) for admissions in the next academic session. The student’s best of the 2021 NTA Scores will be considered for preparation of Merit List/ Ranking.</p>
            </div>

            <div class="w-md-80 w-lg-60 text-center mx-md-auto mb-md-5">
                <h3>JEE Exam Pattern</h3>
            </div>

            <div class="table-responsive-lg w-lg-75 mx-lg-auto">
                <table class="table table-align-middle table-thead-bordered">
                    <thead class="text-center">
                    <tr>
                        <th scope="col" class="align-middle">
                            <span class="text-dark">Parameters</span>
                        </th>
                        <th scope="col" class="align-middle border-left">
                            <span class="text-dark">JEE Main Exam Pattern Details</span>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr class="border-top border-bottom">
                            <td class="font-size-1 bg-white">Exam Mode</td>
                            <td class="font-size-1 bg-white border-left">Computer-based test mode</td>
                        </tr>
                        <tr class="border-top border-bottom">
                            <td class="font-size-1 bg-white">Exam Duration</td>
                            <td class="font-size-1 bg-white border-left">3 hours (4 hours for persons with benchmark disabilities)</td>
                        </tr>
                        <tr class="border-top border-bottom">
                            <td class="font-size-1 bg-white">Subjects</td>
                            <td class="font-size-1 bg-white border-left">Physics, Chemistry, and Mathematics</td>
                        </tr>
                        <tr class="border-top border-bottom">
                            <td class="font-size-1 bg-white">Total number of questions</td>
                            <td class="font-size-1 bg-white border-left">90 (need to answer 75 questions) (Each subject will have 20 MCQs and 10 numerical ques out of which 5 is must)</td>
                        </tr>
                        <tr class="border-top border-bottom">
                            <td class="font-size-1 bg-white">Type of Questions</td>
                            <td class="font-size-1 bg-white border-left">20 Objective questions having 4 options each with only 1 correct option <br> 10 Numerical questions out of which 5 needs to be answered</td>
                        </tr>
                        <tr class="border-top border-bottom">
                            <td class="font-size-1 bg-white">JEE Main 2021 Marking Scheme</td>
                            <td class="font-size-1 bg-white border-left">JEE Main Marking Scheme for Paper 1 is-
                                <br> For MCQs – 4 Marks will be awarded for every correct answer and 1 Mark will be
                                <br> Deducted for every incorrect answer
                                <br> For answer with a numeric value - 4 Marks will be awarded for every correct answer and 0 0Mark will be deducted for every incorrect answer</td>
                        </tr>
                        <tr class="border-top border-bottom">
                            <td class="font-size-1 bg-white">JEE Main Maximum Marks</td>
                            <td class="font-size-1 bg-white border-left">300</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="container space-0 space-lg-top-2 space-bottom-1 ">
                <div class="w-lg-6 mx-lg-auto">
                </div>
            </div>

            <div class="container space-top-1 space-bottom-1">
                <div class="row justify-content-lg-between align-items-lg-center">
                    <div class="w-lg-80 text-center mx-lg-auto mb-5">
                        <h2>JEE Preparation</h2>
                    </div>
                    <div class="col-lg-6 mb-9 mb-lg-0">
                        <p>JEE exam tests the conceptual understanding of the student in the subjects of Mathematics, Physics and Chemistry. The aspiring student needs to focus on the concepts from the class 9 onwards for a good understanding of the concepts. Students from the class 11 should start specific preparation to understand the pattern of the JEE exam and the syllabus coverage of the examination.</p>

                        <p>The students need to go for supportive classes where the teacher can focus on the JEE syllabus and administer regular tests to make the child aware of his/her understanding of the concepts. Regular test practice enables the aspirant to face the final JEE exam confidently and answer the questions in the given period of time.</p>

                        <div class="mt-4">
                            <a class="btn btn-primary btn-wide transition-3d-hover" data-toggle="modal" data-target="#applyNow">Apply now</a>
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

            <div class="container space-top-1 space-bottom-1">
                <div class="w-lg-6 mx-lg-auto">
                    <hr class="my-0">
                </div>
            </div>

            <div class="container space-top-1 space-bottom-1">
                <div class="w-lg-80 text-center mx-lg-auto mb-5">
                    <h2>21K Class JEE Coaching</h2>
                </div>
                <p>21K Class is a pioneer to provide a comprehensive Virtual Class for the JEE aspirants.</p>
                <p>The aspirants for becoming a student of Premier Engineering Institutions through JEE has no geographical boundary. But the availability of preparatory courses are restricted to big cities. It is not possible for the parent to either migrate as a family or send their ward alone to such cities for the schooling and the coaching classes. It is also not financially viable to do so.</p>
                <p>Hence, we at 21K Class is bringing in the Technology enabled Virtual Class mode to break the geographical barrier for learning and provide expert teaching to the students across Tamil Nadu irrespective of the place they live.</p>
                <p>Our team of Expert Faculty Members have more than 15 years of experience in preparing the students for the competitive exams like IIT JEE and Medical Entrance Examinations.</p>
                <p>We will be providing every student with a Tablet to attend the 21K Class sessions which will be inbuilt with Data Card, Camera and a Head Phone. More so, we will also pay the data charges for the student during the periodicity of the course.</p>
                <p>We provide the structured Learning experience and a robust practice for the JEE aspirants in our Online Coaching Program. Our Program focuses on the Conceptual understanding and clarity of the students and the continuous practice and assessments pave you a way for your success in JEE Exam.</p>
                <p>We ensure your better conceptual understanding by using English and Vernacular Language (Tamil, Telugu & Malayalam) as instructional medium of our online Courses.</p>
                <ul style="list-style-type:square;">
                    <li>Interactive Online Live Classes</li>
                    <li>All-inclusive Study Material</li>
                    <li>Dedicated online tutors – Individual attention</li>
                    <li>Recorded videos of online classes to revisit</li>
                    <li>Doubt resolution JEE experts</li>
                    <li>Question Paper discussion</li>
                    <li>Integrated Tests and Assessments</li>
                    <li>Individualized Analyzer of Performance</li>
                    <li>Monitored regular practice through online</li>
                </ul>
                <p>At 21K class, we have designed our Learning Management System (LMS) the foundation on which the entire classes shall happen. This platform will have the multiple features ensuring a better teaching-learning process.</p>
                <p>Our Goal is to take our Coaching Classes to the students wherever they live, irrespective of their geographical location and enable them to study and prepare for the JEE.</p>
            </div>
        </div>

        <div class="bg-soft-primary text-center bg-img-hero" style="background-image: url('/images/coaching/svg/components/abstract-shapes-19.svg');">
            <div class="container space-2">
                <div class="mb-5">
                    <h3 class="h2 text-dark">Join your coaching with 21K Class</h3>
                </div>
                <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#applyNow">Apply now</button>
            </div>
        </div>

        @include('front.layouts.apply')

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
