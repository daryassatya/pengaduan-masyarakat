<!doctype html>
<html lang="en">

<head>
    <title>Login 05</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('auth-components/css/style.css') }}">

    <style>
        /* .form-control.is-invalid {
            background-image: none;
        } */
    </style>

</head>

<body>
    <section class="ftco-section">
        <div class="container">
            {{-- <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Login #05</h2>
                </div>
            </div> --}}
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div class="wrap">
                        <div class="img"
                            style="background-image: url({{ asset('auth-components/images/bg-1.jpg') }});"></div>

                        @if (session()->has('loginError'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session('loginError') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4">Sign In</h3>
                                </div>
                                <div class="w-100">
                                    <p class="social-media d-flex justify-content-end">
                                        <a href="#"
                                            class="social-icon d-flex align-items-center justify-content-center"><span
                                                class="fa fa-facebook"></span></a>
                                        <a href="#"
                                            class="social-icon d-flex align-items-center justify-content-center"><span
                                                class="fa fa-twitter"></span></a>
                                    </p>
                                </div>
                            </div>
                            <form class="form-signin" action="{{ route('login') }}" method="post">
                                @csrf
                                <div class="form-group mt-3">
                                    <input type="text" id="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autofocus>
                                    <label class="form-control-placeholder" for="username">Username</label>
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group mt-5">
                                    <input type="password" id="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required>
                                    <label class="form-control-placeholder" for="password">Password</label>
                                    <span toggle="#password" class="align-middle fa fa-eye toggle-password"></span>
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign
                                        In</button>
                                </div>
                                {{-- <div class="form-group d-md-flex">
                                    <div class="w-50 text-left">
                                        <label class="checkbox-wrap checkbox-primary mb-0">Remember Me
                                            <input type="checkbox" checked>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="w-50 text-md-right">
                                        <a href="#">Forgot Password</a>
                                    </div>
                                </div>
                            </form>
                            <p class="text-center">Not a member? <a data-toggle="tab" href="#signup">Sign Up</a></p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('auth-components/js/jquery.min.js') }}"></script>
    <script src="{{ asset('auth-components/js/popper.js') }}"></script>
    <script src="{{ asset('auth-components/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('auth-components/js/main.js') }}"></script>

</body>

</html>
