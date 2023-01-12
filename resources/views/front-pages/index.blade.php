@extends('front-layouts.app')

@section('hero')
    <section id="hero" class="hero">

        <div class="info d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2 data-aos="fade-down">Selamat Datang</h2>
                        <p data-aos="fade-up">Layanan Informasi & Pengaduan Masyarakat</p>
                        <a data-aos="fade-up" data-aos-delay="200" href="#get-started" class="btn-get-started">Get
                            Started</a>
                    </div>
                </div>
            </div>
        </div>

        <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

            <div class="carousel-item active"
                style="background-image: url({{ asset('front-components/img/hero-carousel/hero-carousel-1.jpg') }})">
            </div>
            <div class="carousel-item"
                style="background-image: url({{ asset('front-components/img/hero-carousel/hero-carousel-2.jpg') }})"></div>
            <div class="carousel-item"
                style="background-image: url({{ asset('front-components/img/hero-carousel/hero-carousel-3.jpg') }})"></div>
            <div class="carousel-item"
                style="background-image: url({{ asset('front-components/img/hero-carousel/hero-carousel-4.jpg') }})"></div>
            <div class="carousel-item"
                style="background-image: url({{ asset('front-components/img/hero-carousel/hero-carousel-5.jpg') }})"></div>
        </div>

        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

        </div>

    </section>
@endsection

@section('content')
    <!-- ======= Features Section ======= -->
    <section id="features" class="features section-bg">
        <div class="section-header">
            <h2>Visi & Misi</h2>
        </div>
        <div class="container" data-aos="fade-up">

            <ul class="nav nav-tabs row  g-2 d-flex justify-content-center">

                <li class="nav-item col-3">
                    <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                        <h4>Visi</h4>
                    </a>
                </li><!-- End tab nav item -->

                <li class="nav-item col-3">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                        <h4>Misi</h4>
                    </a><!-- End tab nav item -->
            </ul>

            <div class="tab-content">

                <div class="tab-pane active show" id="tab-1">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center"
                            data-aos="fade-up" data-aos-delay="100">
                            <h3>Visi :</h3>
                            <p class="fst-italic">
                                Visi: Menjadi aplikasi website pengaduan masyarakat yang paling efektif dan terpercaya di
                                Indonesia dalam membantu masyarakat untuk menyampaikan keluh kesah, aspirasi, dan pengaduan
                                serta membantu pemerintah dalam menyelesaikan masalah masyarakat.
                            </p>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                            <img src="{{ asset('front-components/img/visi.jpg') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div><!-- End tab content item -->

                <div class="tab-pane" id="tab-2">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                            <h3>Misi :</h3>
                            <ul>
                                <li><i class="bi bi-check2-all"></i> Menyediakan platform yang aman, mudah digunakan, dan
                                    terjangkau bagi masyarakat untuk menyampaikan pengaduan dan keluh kesah.
                                    consequat.</li>
                                <li><i class="bi bi-check2-all"></i> Membantu pemerintah dalam menyelesaikan masalah
                                    masyarakat dengan cepat dan tepat.
                                    voluptate velit.</li>
                                <li><i class="bi bi-check2-all"></i> Meningkatkan transparansi dan akuntabilitas pemerintah
                                    dalam menangani pengaduan masyarakat.</li>
                                <li><i class="bi bi-check2-all"></i> Meningkatkan kualitas pelayanan publik dengan
                                    memperhatikan aspirasi masyarakat.</li>
                                <li><i class="bi bi-check2-all"></i> Menjadi wadah bagi masyarakat untuk memberikan masukan
                                    dan saran terkait pembangunan daerah.</li>
                            </ul>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="{{ asset('front-components/img/misi.jpg') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div><!-- End tab content item -->

            </div>

        </div>
    </section><!-- End Features Section -->

    <!-- ======= Our Projects Section ======= -->
    <section id="projects" class="projects">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Our Projects</h2>
                <p>SIPMAS (Sistem Informasi dan Pengaduan Masyarakat) merupakan Sistem Informasi dan Pengaduan Masyarakat
                    berbasis web untuk membuat pengaduan masyarakat dapat direspon dengan cepat dan baik dan dapat
                    mempermudah penyaluran informasi dari pusat kepada masyarakat dengan efisien.</p>
            </div>

            {{-- <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                data-portfolio-sort="original-order">

                <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-remodeling">Remodeling</li>
                    <li data-filter=".filter-construction">Construction</li>
                    <li data-filter=".filter-repairs">Repairs</li>
                    <li data-filter=".filter-design">Design</li>
                </ul><!-- End Projects Filters -->

                <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                        <div class="portfolio-content h-100">
                            <img src="assets/img/projects/remodeling-1.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Remodeling 1</h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                                <a href="assets/img/projects/remodeling-1.jpg" title="Remodeling 1"
                                    data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="project-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Projects Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
                        <div class="portfolio-content h-100">
                            <img src="assets/img/projects/construction-1.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Construction 1</h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                                <a href="assets/img/projects/construction-1.jpg" title="Construction 1"
                                    data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="project-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Projects Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
                        <div class="portfolio-content h-100">
                            <img src="assets/img/projects/repairs-1.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Repairs 1</h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                                <a href="assets/img/projects/repairs-1.jpg" title="Repairs 1"
                                    data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="project-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Projects Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item filter-design">
                        <div class="portfolio-content h-100">
                            <img src="assets/img/projects/design-1.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Design 1</h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                                <a href="assets/img/projects/design-1.jpg" title="Repairs 1"
                                    data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="project-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Projects Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                        <div class="portfolio-content h-100">
                            <img src="assets/img/projects/remodeling-2.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Remodeling 2</h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                                <a href="assets/img/projects/remodeling-2.jpg" title="Remodeling 2"
                                    data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="project-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Projects Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
                        <div class="portfolio-content h-100">
                            <img src="assets/img/projects/construction-2.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Construction 2</h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                                <a href="assets/img/projects/construction-2.jpg" title="Construction 2"
                                    data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="project-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Projects Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
                        <div class="portfolio-content h-100">
                            <img src="assets/img/projects/repairs-2.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Repairs 2</h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                                <a href="assets/img/projects/repairs-2.jpg" title="Repairs 2"
                                    data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="project-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Projects Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item filter-design">
                        <div class="portfolio-content h-100">
                            <img src="assets/img/projects/design-2.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Design 2</h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                                <a href="assets/img/projects/design-2.jpg" title="Repairs 2"
                                    data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="project-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Projects Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                        <div class="portfolio-content h-100">
                            <img src="assets/img/projects/remodeling-3.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Remodeling 3</h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                                <a href="assets/img/projects/remodeling-3.jpg" title="Remodeling 3"
                                    data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="project-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Projects Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
                        <div class="portfolio-content h-100">
                            <img src="assets/img/projects/construction-3.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Construction 3</h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                                <a href="assets/img/projects/construction-3.jpg" title="Construction 3"
                                    data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="project-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Projects Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
                        <div class="portfolio-content h-100">
                            <img src="assets/img/projects/repairs-3.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Repairs 3</h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                                <a href="assets/img/projects/repairs-3.jpg" title="Repairs 2"
                                    data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="project-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Projects Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item filter-design">
                        <div class="portfolio-content h-100">
                            <img src="assets/img/projects/design-3.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Design 3</h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                                <a href="assets/img/projects/design-3.jpg" title="Repairs 3"
                                    data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="project-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Projects Item -->

                </div><!-- End Projects Container -->

            </div> --}}

        </div>
    </section><!-- End Our Projects Section -->

    <!-- ======= Testimonials Section ======= -->
    {{-- <section id="testimonials" class="testimonials section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Testimonials</h2>
                <p>Quam sed id excepturi ccusantium dolorem ut quis dolores nisi llum nostrum enim velit qui ut et
                    autem uia reprehenderit sunt deleniti</p>
            </div>

            <div class="slides-2 swiper">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Saul Goodman</h3>
                                <h4>Ceo &amp; Founder</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum
                                    suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et.
                                    Maecen aliquam, risus at semper.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Sara Wilsson</h3>
                                <h4>Designer</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum
                                    quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat
                                    irure amet legam anim culpa.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Jena Karlis</h3>
                                <h4>Store Owner</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem
                                    veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis
                                    sint minim.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Matt Brandon</h3>
                                <h4>Freelancer</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim
                                    fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore
                                    quem dolore labore illum veniam.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img"
                                    alt="">
                                <h3>John Larson</h3>
                                <h4>Entrepreneur</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor
                                    noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam
                                    esse veniam culpa fore nisi cillum quid.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Testimonials Section --> --}}

    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">
        <div class="container" data-aos="fade-up">



            <div class=" section-header">
                <h2>Postingan Terbaru</h2>
                <p>Berikut adalah beberapa postingan pengumuman terbaru</p>
            </div>

            <div class="row gy-5">
                @if ($posts->count())
                    @foreach ($posts as $post)
                        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="post-item position-relative h-100">

                                <div class="post-img position-relative overflow-hidden">
                                    <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid" alt="">
                                    <span class="post-date">{{ $post->created_at->diffForHumans() }}</span>
                                </div>

                                <div class="post-content d-flex flex-column">

                                    <h3 class="post-title">{{ $post->title }}</h3>

                                    <div class="meta d-flex align-items-center">
                                        <div class="d-flex align-items-center">
                                            <i class="bi bi-person"></i> <span
                                                class="ps-2">{{ $post->author->name }}</span>
                                        </div>
                                        <span class="px-3 text-black-50">/</span>
                                        <div class="d-flex align-items-center">
                                            <i class="bi bi-folder2"></i> <span
                                                class="ps-2">{{ $post->category->name }}</span>
                                        </div>
                                    </div>

                                    <hr>

                                    <a href="{{ route('post.detail', $post->slug) }}"
                                        class="readmore stretched-link"><span>Read More</span><i
                                            class="bi bi-arrow-right"></i></a>

                                </div>

                            </div>
                        </div><!-- End post item -->
                    @endforeach
                @endif


            </div>

        </div>
    </section>
    <!-- End Recent Blog Posts Section -->
@endsection
