<!DOCTYPE html>
<html lang="en">

<head>
    @include('front-layouts.partials.head')
</head>

<body>

    <!-- ======= Header ======= -->
    @include('front-layouts.partials.header')
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    @yield('hero')
    <!-- End Hero Section -->

    <main id="main">

        <!-- ======= Get Started Section ======= -->
        @yield('content')
        <!-- End Get Started Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('front-layouts.partials.footer')
    <!-- End Footer -->

    <!-- ======= Foot ======= -->
    @include('front-layouts.partials.foot')
    <!-- End Foot -->

</body>

</html>
