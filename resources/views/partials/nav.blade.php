<!-- ======= Header ======= -->
<header id="header">
    <div class="d-flex flex-column">

        <div class="profile py-2">
            <img src="{{ config('app.b2_assets_url').'img/misc/Angelo-min.jpg' }}" alt=""
                 class="img-fluid rounded-circle">
            <h1 class="text-light mx-auto "><a href="index.html">Angel Alvarado</a></h1>
            <div class="social-links mt-3 text-center">
                <a href="https://twitter.com/AngelAl57920791" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://www.behance.net/angelalvarado3" class="google-plus"><i class="bx bxl-behance"></i></a>
                <a href="https://www.linkedin.com/in/luis-angel-alvarado-hernandez" class="linkedin"><i
                        class="bx bxl-linkedin"></i></a>
                <a href="https://github.com/AngelAngelopoulos" class="twitter"><i class="bx bxl-github"></i></a>
            </div>
        </div>

        <nav class="nav-menu nav navbar-nav">
            <ul class="">
                @auth
                    <li>
                        <p
                            class="text-white-50 rounded py-2  text-center title mb-2 welcome"> Welcome back
                            <b>{{ auth()->user()->name }}!!</b></p>
                    </li>
                    <form class="m-0 p-0" id="logout-form" action="{{ route('logout') }}" method="POST"
                          style="display: none;">
                        @csrf
                    </form>
                    <li>
                        <a class="nav-link px-3" href="{{ route('logout') }} "
                           onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();"><i
                                class="bx bx-log-out"></i><span> Logout</span></a>
                    </li>
                @endauth

                <li><a class="nav-link {{ setActive('home') }} px-3 " href="{{ route('home') }}"><i
                            class="bx bx-home"></i> <span>Home</span></a></li>
                <li><a class="nav-link {{ setActive('about') }} px-3" href="{{ route('about') }}"><i
                            class="bx bx-user"></i> <span>About</span></a></li>
                <li><a class="nav-link {{ setActive('resume') }} px-3 " href="{{ route('resume') }}"><i
                            class='bx bxs-user-rectangle'></i> Resume</a></li>
                <li><a class="nav-link {{ setActive('projects.*') }} px-3 " href="{{ route('projects.index') }}"><i
                            class="bx bx-book-content"></i> Portfolio</a></li>
                <li><a class="nav-link {{ setActive('services') }} px-3" href="{{ route('services') }}"><i
                            class="bx bx-server"></i> Services</a></li>
                <li><a class="nav-link {{ setActive('contact') }} px-3 " href="{{ route('contact') }}"><i
                            class="bx bx-envelope"></i> Contact</a></li>


            </ul>
        </nav>
        <!-- .nav-menu -->

    </div>

</header><!-- End Header -->

<button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>
