<header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1><span class="light-logo"><img src="{{ asset('images/sip-logo2.png') }}" alt="logo"></span></h1>
        </a>

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="{{ route('post') }}">Postingan</a></li>
                <li><a href="{{ route('login') }}">Login</a></li>
            </ul>
        </nav><!-- .navbar -->

    </div>
</header>
