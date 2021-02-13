@extends('layout')

@section('title', 'Resume')

@section('content')


            <!-- ======= Skills Section ======= -->
            <section id="skills" class="skills bg-white">
                <div class="container-fluid">

                    <div class="section-title">
                        <h2>Tech Skills</h2>
                        <p>
                            I have improved the following skills throughout my student experience, as well as the
                            projects that I made and still develop it.
                            One of my strengths is PHP programming with laravel and C# with .NET, I currently have good experience with
                            these
                            frameworks and am in the process of learning Django, Vue and Spring Boot.
                        </p>
                    </div>

                    <h3 class="text-center">Advanced</h3>


                    <div class="row " data-aos="fade-right">
                        @include('partials.tech-badge', [
                            'src' => 'dialogflow-min.png',
                            'name' => 'Dialogflow'
                        ])
                        @include('partials.tech-badge', [
                            'src' => 'laravel-min.png',
                            'name' => 'Laravel'
                        ])
                        @include('partials.tech-badge', [
                            'src' => 'dotnet-min.png',
                            'name' => '.NET'
                        ])
                        @include('partials.tech-badge', [
                        'src' => 'sqlserver-min.png',
                        'name' => 'SQL Server'
                    ])
                    </div>

                    <h3 class="text-center">Intermediate</h3>
                    <div class="row" data-aos="fade-left">
                        @include('partials.tech-badge', [
                            'src' => 'rails-min.png',
                            'name' => 'Ruby on Rails'
                        ])
                        @include('partials.tech-badge', [
                            'src' => 'next-min.png',
                            'name' => 'Next.js'
                        ])
                        @include('partials.tech-badge', [
                            'src' => 'react-min.png',
                            'name' => 'React.js'
                        ])

                        @include('partials.tech-badge', [
                            'src' => 'node-min.png',
                            'name' => '(Node) Express.js'
                        ])

                    </div>

                    <h3 class="text-center">Beginner</h3>
                    <div class="row" data-aos="fade-right">
                    @include('partials.tech-badge', [
                        'src' => 'spring-min.png',
                        'name' => 'Spring Boot'
                    ])
                    @include('partials.tech-badge', [
                        'src' => 'vue-min.png',
                        'name' => 'Vue.js'
                    ])
                    @include('partials.tech-badge', [
                        'src' => 'mongo-min.png',
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
                            I have done multiple courses, focused on Cybersecurity and Artificial Intelligence, here
                            are some
                            of the titles received. I have a few more in progress, especially Full Stack Developer
                        </p>
                    </div>
                    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

                        @include('partials.certificate', [
                            'src' => 'ISO27001-min.jpg',
                            'title' => 'ISO 27001 Implementation',
                            'link' => 'https://backtrackacademy.com/examen/50/certificate.pdf?key=19238c8e9d12a146a74d0c842fc91a65',
                            'asset' => 'img/ISO27001.jpg'
                        ])
                        @include('partials.certificate', [
                            'src' => 'CourseraDeep-min.jpg',
                            'title' => 'Deep Learning Inference with Azure ML Studio',
                            'link' => 'https://www.coursera.org/account/accomplishments/records/5M8S2LN6D2RK?utm_medium=certificate&utm_source=link&utm_campaign=copybutton_certificate',
                            'asset' => 'img/CourseraDeep.jpg'
                        ])
                        @include('partials.certificate', [
                            'src' => 'CourseraTensor-min.jpg',
                            'title' => 'Using TensorFlow with Amazon Sagemaker',
                            'link' => 'https://www.coursera.org/account/accomplishments/records/Z6FH42ZMV8KM?utm_source=link&utm_medium=certificate&utm_content=cert_image&utm_campaign=sharing_cta&utm_product=project',
                            'asset' => 'img/CourseraTensor.jpg'
                        ])
                        @include('partials.certificate', [
                            'src' => 'C-SIA-min.jpg',
                            'title' => 'Agile Computer Security Certification',
                            'link' => 'https://badgr.com/public/assertions/Kf--USxTRbi9uxl08_1qig',
                            'asset' => 'img/C-SIA.jpg'
                        ])
                        @include('partials.certificate', [
                            'src' => 'Ilustrator-min.png',
                            'title' => 'Graphic Vectors with Adobe Illustrator',
                            'link' => '#',
                            'asset' => 'img/Ilustrator.png'
                        ])
                        @include('partials.certificate', [
                            'src' => 'Rails-min.jpg',
                            'title' => 'Ruby on Rails',
                            'link' => '#',
                            'asset' => 'img/Rails.jpg'
                        ])
                        @include('partials.certificate', [
                            'src' => 'RailsAuth-min.jpg',
                            'title' => 'Ruby on Rails Authentication',
                            'link' => '#',
                            'asset' => 'img/RailsAuth.jpg'
                        ])
                        @include('partials.certificate', [
                            'src' => 'ISO27001Cons-min.jpg',
                            'title' => 'ISO 27001 Consulting & Implementation',
                            'link' => '#',
                            'asset' => 'img/ISO27001Cons.jpg'
                        ])




                    </div>
                </div>
            </section>



@endsection
