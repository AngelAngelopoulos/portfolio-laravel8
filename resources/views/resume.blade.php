@extends('layout')

@section('title', 'Resume')

@section('content')
    <section id="resume" class="resume">
        <div class="container">

            <div class="section-title">
                <h2>Resume</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                    fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>
            </div>
    </section><!-- End Resume Section -->

            <!-- ======= Skills Section ======= -->
            <section id="skills" class="skills section-bg">
                <div class="container-fluid">

                    <div class="section-title">
                        <h2>Tech Skills</h2>
                        <p>
                            I have improved the following skills throughout my student experience, as well as the
                            projects and
                            work I have done.
                            One of my strengths is PHP programming with laravel, I currently have good experience with
                            this
                            framework and am in the process of learning Django, Vue and Spring Boot.
                        </p>
                    </div>

                    <h3 class="text-center">Advanced</h3>


                    <div class="row " data-aos="fade-right">
                        @include('partials.tech-badge', [
                            'src' => 'dialogflow.png',
                            'name' => 'Dialogflow'
                        ])
                        @include('partials.tech-badge', [
                            'src' => 'laravel.png',
                            'name' => 'Laravel'
                        ])
                        @include('partials.tech-badge', [
                            'src' => 'dotnet.png',
                            'name' => '.NET'
                        ])
                        @include('partials.tech-badge', [
                        'src' => 'sqlserver.png',
                        'name' => 'SQL Server'
                    ])
                    </div>

                    <h3 class="text-center">Intermediate</h3>
                    <div class="row" data-aos="fade-left">
                        @include('partials.tech-badge', [
                            'src' => 'rails.png',
                            'name' => 'Ruby on Rails'
                        ])
                        @include('partials.tech-badge', [
                            'src' => 'next.png',
                            'name' => 'Next.js'
                        ])
                        @include('partials.tech-badge', [
                            'src' => 'react.png',
                            'name' => 'React.js'
                        ])

                        @include('partials.tech-badge', [
                            'src' => 'node.png',
                            'name' => '(Node) Express.js'
                        ])

                    </div>

                    <h3 class="text-center">Beginner</h3>
                    <div class="row" data-aos="fade-right">
                    @include('partials.tech-badge', [
                        'src' => 'spring.png',
                        'name' => 'Spring Boot'
                    ])
                    @include('partials.tech-badge', [
                        'src' => 'vue.png',
                        'name' => 'Vue.js'
                    ])
                    @include('partials.tech-badge', [
                        'src' => 'mongo.png',
                        'name' => 'mongoDB'
                    ])






                    <!--

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

                    <div class="progress">
                        <span class="skill">PHP <i class="val">80%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                 aria-valuemax="100"></div>
                        </div>
                    </div>
                    -->


                    </div>
                </div>
            </section>
            <!-- End Skills Section -->

            <!-- ======= Skills Section ======= -->
            <section id="portfolio" class="portfolio section-bg">
                <div class="container">

                    <div class="section-title">
                        <h2>Certifications &amp Courses</h2>
                        <p>
                            I have done multiple courses, focused on cyber-security and artificial intelligence, here
                            are some
                            of the titles received and I have a few more in progress, especially full stack developer
                        </p>
                    </div>
                    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="{{ asset('img/ISO27001.jpg') }}" class="img-fluid" alt="">
                                <div class="portfolio-links">
                                    <a href="{{ asset('img/ISO27001.jpg') }}" data-gall="portfolioGallery"
                                       class="venobox"
                                       title="ISO 27001 Implementation"><i class="bx bx-plus"></i></a>
                                    <a href="https://backtrackacademy.com/examen/50/certificate.pdf?key=19238c8e9d12a146a74d0c842fc91a65"
                                       title="More Details"><i class="bx bx-link"></i></a>
                                </div>

                            </div>
                            <h5>ISO 27001 Implementation</h5>
                        </div>


                        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                            <div class="portfolio-wrap">
                                <img src="{{ asset('img/CourseraDeep.jpg') }}" class="img-fluid" alt="">
                                <div class="portfolio-links">
                                    <a href="{{ asset('img/CourseraDeep.jpg') }}" data-gall="portfolioGallery"
                                       class="venobox"
                                       title="Deep Learning Inference with Azure ML Studio"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="https://www.coursera.org/account/accomplishments/records/5M8S2LN6D2RK?utm_medium=certificate&utm_source=link&utm_campaign=copybutton_certificate"
                                       title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                            <h5>Deep Learning Inference with Azure ML Studio</h5>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="{{ asset('img/CourseraTensor.jpg') }}" class="img-fluid" alt="">
                                <div class="portfolio-links">
                                    <a href="{{ asset('img/CourseraTensor.jpg') }}" data-gall="portfolioGallery"
                                       class="venobox"
                                       title="Using TensorFlow with Amazon Sagemaker"><i class="bx bx-plus"></i></a>
                                    <a href="https://www.coursera.org/account/accomplishments/records/Z6FH42ZMV8KM?utm_source=link&utm_medium=certificate&utm_content=cert_image&utm_campaign=sharing_cta&utm_product=project"
                                       title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                            <h5>Using TensorFlow with Amazon Sagemaker</h5>
                        </div>


                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="{{ asset('img/C-SIA.jpg') }}" class="img-fluid" alt="">
                                <div class="portfolio-links">
                                    <a href="{{ asset('img/C-SIA.jpg') }}" data-gall="portfolioGallery" class="venobox"
                                       title="Agile Computer Security Certification"><i class="bx bx-plus"></i></a>
                                    <a href="https://badgr.com/public/assertions/Kf--USxTRbi9uxl08_1qig"
                                       title="More Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                            <h5>Agile Computer Security Certification</h5>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="{{ asset('img/Ilustrator.png') }}" class="img-fluid" alt="">
                                <div class="portfolio-links">
                                    <a href="{{ asset('img/Ilustrator.png') }}" data-gall="portfolioGallery"
                                       class="venobox"
                                       title="Graphic Vectors with Adobe Illustrator"><i class="bx bx-plus"></i></a>
                                    <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                            <h5>Graphic Vectors with Adobe Illustrator</h5>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="{{ asset('img/Rails.jpg') }}" class="img-fluid" alt="">
                                <div class="portfolio-links">
                                    <a href="{{ asset('img/Rails.jpg') }}" data-gall="portfolioGallery" class="venobox"
                                       title="Ruby on Rails"><i class="bx bx-plus"></i></a>
                                    <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                            <h5>Ruby on Rails</h5>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="{{ asset('img/RailsAuth.jpg') }}" class="img-fluid" alt="">
                                <div class="portfolio-links">
                                    <a href="{{ asset('img/RailsAuth.jpg') }}" data-gall="portfolioGallery"
                                       class="venobox"
                                       title="Ruby on Rails Authentication"><i class="bx bx-plus"></i></a>
                                    <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                            <h5>Ruby on Rails Authentication</h5>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="{{ asset('img/ISO27001Cons.jpg') }}" class="img-fluid" alt="">
                                <div class="portfolio-links">
                                    <a href="{{ asset('img/ISO27001Cons.jpg') }}" data-gall="portfolioGallery"
                                       class="venobox"
                                       title="ISO 27001 Consulting & Implementation"><i class="bx bx-plus"></i></a>
                                    <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                            <h5>ISO 27001 Consulting & Implementation</h5>
                        </div>


                    </div>
                </div>
            </section>



@endsection
