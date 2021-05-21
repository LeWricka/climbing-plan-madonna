<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>ClimbingPlan</title>

    <meta name="description"
          content="Best training programs">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="ClimbingPlan">
    <meta property="og:site_name" content="ClimbingPlan">
    <meta property="og:description"
          content="Best training programs">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="assets/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/media/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Fonts and OneUI framework -->
    {{--    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">--}}
    {{--    <link rel="stylesheet" id="css-main" href="assets/css/oneui.min.css">--}}
    @yield('css_before')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" id="css-main" href="{{ mix('/css/oneui.css') }}">

    <!-- You can include a specific file from public/css/themes/ folder to alter the default color theme of the template. eg: -->
<!-- <link rel="stylesheet" id="css-theme" href="{{ mix('/css/themes/amethyst.css') }}"> -->
@yield('css_after')

<!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/amethyst.min.css"> -->
    <!-- END Stylesheets -->
</head>
<body>
<div id="page-container">

    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->
        <div class="bg-image" style="background-image: url({{('media/photos/leftSideImage.jpg')}});"/>

        <div class="row no-gutters"
             style="background-image: url('{{ asset('assets/images/leftSideImage.png')}}');">
            <!-- Meta Info Section -->
            <div class="hero-static col-lg-4 d-none d-lg-flex flex-column justify-content-center">
                <div class="p-4 p-xl-5 flex-grow-1 d-flex align-items-center">
                    <div class="w-100">
                        <a class="link-fx font-w600 font-size-h2 text-white" href="index.html">
                            ClimbingPlan
                        </a>
                        <p class="text-white-75 mr-xl-8 mt-2">
                            Improve your climbing with the best climbing trainning programs
                        </p>
                    </div>
                </div>
                <div class="p-4 p-xl-5 d-xl-flex justify-content-between align-items-center font-size-sm">
                    <p class="font-w500 text-white-50 mb-0">
                        <strong>ClimbingPlan</strong> &copy; <span data-toggle="year-copy"></span>
                    </p>
                    <ul class="list list-inline mb-0 py-2">
                        <li class="list-inline-item">
                            <a class="text-white-75 font-w500" href="javascript:void(0)">Legal</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-white-75 font-w500" href="javascript:void(0)">Contact</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-white-75 font-w500" href="javascript:void(0)">Terms</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END Meta Info Section -->

            <!-- Main Section -->
            <div class="hero-static col-lg-8 d-flex flex-column align-items-center bg-white">
                <div class="p-3 w-100 d-lg-none text-center">
                    <a class="link-fx font-w600 font-size-h3 text-dark" href="index.html">
                        Climbing<span class="font-w400">Plan</span>
                    </a>
                </div>
                <div class="p-4 w-100 flex-grow-1 d-flex align-items-center">
                    <div class="w-100">
                        <!-- Header -->
                        <div class="text-center mb-5">
                            <p class="mb-3">
                                <i class="fa fa-2x fa-circle-notch text-primary-light"></i>
                            </p>
                            <h1 class="font-w700 mb-2">
                                ClimbingPlan
                            </h1>
                            <h2 class="font-size-base text-muted">
                                Welcome, please login or <a href="op_auth_signup3.html">sign up</a> for a new
                                account.
                            </h2>
                        </div>
                        <!-- END Header -->

                        <!-- Sign In Form -->
                        <!-- jQuery Validation (.js-validation-signin class is initialized in js/pages/op_auth_signin.min.js which was auto compiled from _js/pages/op_auth_signin.js) -->
                        <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->


                        <div class="row no-gutters justify-content-center">
                            <div class="col-sm-8 col-xl-4">
                                <form action="{{ route('login') }}" method="POST">
                                    @csrf

                                    <div class="form-group">

                                        <input id="email" type="email"
                                               placeholder="Email"
                                               class="form-control form-control-lg form-control-alt py-4 @error('email') is-invalid @enderror"
                                               name="email"
                                               value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>


                                    <div class="form-group">

                                        <input id="password" type="password"
                                               placeholder="Password"
                                               class="form-control form-control-lg form-control-alt py-4 @error('password') is-invalid @enderror"
                                               name="password"
                                               required autocomplete="current-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>

                                    <div class="form-group d-flex justify-content-between align-items-center">
                                        <div>
                                            <a class="text-muted font-size-sm font-w500 d-block d-lg-inline-block mb-1"
                                               href="op_auth_reminder3.html">
                                                Forgot Password?
                                            </a>
                                        </div>
                                        <div>
                                            <button type="submit" class="btn btn-lg btn-alt-primary">
                                                <i class="fa fa-fw fa-sign-in-alt mr-1 opacity-50"></i> Sign In
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div>
                        </div>
                        <!-- END Sign In Form -->
                    </div>
                </div>
                <div
                    class="px-4 py-3 w-100 d-lg-none d-flex flex-column flex-sm-row justify-content-between font-size-sm text-center text-sm-left">
                    <p class="font-w500 text-black-50 py-2 mb-0">
                        <strong>ClimbingPlan</strong> &copy; <span data-toggle="year-copy"></span>
                    </p>
                    <ul class="list list-inline py-2 mb-0">
                        <li class="list-inline-item">
                            <a class="text-muted font-w500" href="javascript:void(0)">Legal</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-muted font-w500" href="javascript:void(0)">Contact</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-muted font-w500" href="javascript:void(0)">Terms</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END Main Section -->
        </div>

<!-- END Page Content -->
</main>
<!-- END Main Container -->
</div>
<!-- END Page Container -->

<!--
    OneUI JS Core

    Vital libraries and plugins used in all pages. You can choose to not include this file if you would like
    to handle those dependencies through webpack. Please check out assets/_js/main/bootstrap.js for more info.

    If you like, you could also include them separately directly from the assets/js/core folder in the following
    order. That can come in handy if you would like to include a few of them (eg jQuery) from a CDN.

    assets/js/core/jquery.min.js
    assets/js/core/bootstrap.bundle.min.js
    assets/js/core/simplebar.min.js
    assets/js/core/jquery-scrollLock.min.js
    assets/js/core/jquery.appear.min.js
    assets/js/core/js.cookie.min.js
-->

</body>
</html>
