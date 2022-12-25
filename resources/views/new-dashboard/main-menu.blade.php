@extends('new-dashboard.layouts.app')

@push('styles')
    <style>
        .card {
            cursor: pointer;
            transition: all 0.7s;
        }

        .card:hover {
            transform: scale(1.07) !important;
            box-shadow: 0 10px 20px rgba(0, 0, 0, .12), 0 5px 8px rgba(0, 0, 0, .06);
        }
    </style>
@endpush

@section('content')
    <div class="row mx-lg-100 mt-20">
        <div class="col-lg-4 col-md-6" onclick="location.href='{{ route('dashboard.posts.index') }}'">
            <div class="box card">
                <div class="box-body p-10">
                    <div class="d-flex align-items-center">
                        <div class="me-15 bg-secondary h-50 w-50 l-h-50 rounded text-center">
                            <img src="{{ asset('images/svg/post.svg') }}" style="height: 26px" alt="">
                        </div>
                        <div class="d-flex flex-column fw-500">
                            <span class="text-dark fs-14">Posts</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6" onclick="location.href='{{ route('dashboard.categories.index') }}'">
            <div class="box card">
                <div class="box-body p-10">
                    <div class="d-flex align-items-center">
                        <div class="me-15 bg-dark h-50 w-50 l-h-50 rounded text-center">
                            <img src="{{ asset('images/svg/categories.svg') }}" style="height: 26px" alt="">
                        </div>
                        <div class="d-flex flex-column fw-500">
                            <span class="text-dark fs-14">Categories</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $('body').addClass('sidebar-collapse');
    </script>
@endpush
