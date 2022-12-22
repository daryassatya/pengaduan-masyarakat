@extends('front-layouts.app')

@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2>Blog</h2>
            <ol>
                <li><a href="{{ route('/') }}">Home</a></li>
                <li>Blog</li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row justify-content-center mb-3">
                <div class="col-md-5">
                    <form action="{{ route('post') }}">
                        @if (request('category'))
                            <input type="hidden" name="category" value="{{ request('category') }}">
                        @endif
                        @if (request('author'))
                            <input type="hidden" name="author" value="{{ request('author') }}">
                        @endif
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Search" name="search"
                                value="{{ request('search') }}">
                            <div class="input-group-append">
                                <button class="btn btn-outline-dark" type="submit">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row gy-4 posts-list">
                @foreach ($posts as $post)
                    <div class="col-xl-4 col-md-6">
                        <div class="post-item position-relative h-100">
                            <div class="post-img position-relative overflow-hidden">
                                @if ($post->image)
                                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                                        class="img-fluid">
                                @else
                                    <img src="https://source.unsplash.com/500x400/?{{ $post->category->name }}"
                                        class="img-fluid" alt="{{ $post->category->name }}">
                                @endif
                                <span class="post-date">{{ $post->created_at->diffForHumans() }}</span>
                            </div>

                            <div class="post-content d-flex flex-column">

                                <h3 class="post-title">{{ $post->title }}
                                </h3>

                                <div class="meta d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-person"></i> <span class="ps-2">{{ $post->author->name }}</span>
                                    </div>
                                    <span class="px-3 text-black-50">/</span>
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-folder2"></i> <span
                                            class="ps-2">{{ $post->category->name }}</span>
                                    </div>
                                </div>

                                <p>{{ $post->excerpt }}</p>

                                <hr>

                                <a href="{{ route('post.detail', $post->slug) }}"
                                    class="readmore stretched-link"><span>Read
                                        More</span><i class="bi bi-arrow-right"></i></a>

                            </div>

                        </div>
                    </div><!-- End post list item -->
                @endforeach

            </div><!-- End blog posts list -->

            <div class="d-flex justify-content-center mt-5">
                {{ $posts->links() }}
            </div><!-- End blog pagination -->

        </div>
        <div class="">

        </div>
    </section><!-- End Blog Section -->
@endsection
