@extends('layout')

@section('title', 'About me')

@section('content')
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="section-title">
                <h2>About</h2>
                <p>I am an enthusiastic web and software developer Jr. that studies in one of the best engineering
                    schools in Mexico, also, I try to improve myself day by day, besides working as Cofounder in <a href="cibera.co">Cibera</a>,
                    an IT Solutions company in San Luis Potosi, where I live. Among my greatest passions are also the
                    Graphic Design, Film, Artificial Intelligence and Literature.</p>
            </div>

            <div class="row">
                <div class="col-lg-4" data-aos="fade-right">
                    <img
                        src="{{ asset('img/Angelo.jpg') /*https://drive.google.com/uc?export=view&amp;id=1D1YzNanQFsApEJSNUs7_6TQWnnYRpvy7*/}}"
                        class="img-fluid" alt="">
                </div>
                <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                    <h3>Software &amp; Web Developer.</h3>
                    <p class="font-italic">
                        Here are some facts about me:
                    </p>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul>

                                <li><i class="icofont-rounded-right"></i> <strong>Website:</strong> www.angelalvaradodhdz.me
                                </li>
                                <li><i class="icofont-rounded-right"></i> <strong>Study at:</strong> Universidad
                                    Autónoma de San Luis Potosi, México
                                </li>
                                <li><i class="icofont-rounded-right"></i> <strong>City:</strong> San Luis Potosí, México
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul>

                                <li><i class="icofont-rounded-right"></i> <strong>Degree (in course):</strong> Ingeniería en
                                    Sistemas Inteligentes, Especializado en Ciberseguridad
                                </li>
                                <li><i class="icofont-rounded-right"></i> <strong>Email:</strong>
                                    contact@angelalvaradohdz.me
                                </li>
                                <li><i class="icofont-rounded-right"></i> <strong>Freelance:</strong> Available (remote
                                    only)
                                </li>
                            </ul>
                        </div>
                    </div>
                    <p>
                        I have done multiple projects related to web development and artificial intelligence, as well as
                        courses about computer security and a little bit of IA and graphic design. You can see them in the <a
                            href="{{ route('projects.index') }}">Portfolio</a> section.
                    </p>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->



@endsection
