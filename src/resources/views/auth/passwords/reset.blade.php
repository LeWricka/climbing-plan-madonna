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
<!-- Page Container -->
<!--
    Available classes for #page-container:

GENERIC

    'enable-cookies'                            Remembers active color theme between pages (when set through color theme helper Template._uiHandleTheme())

SIDEBAR & SIDE OVERLAY

    'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
    'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
    'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
    'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
    'sidebar-dark'                              Dark themed sidebar

    'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
    'side-overlay-o'                            Visible Side Overlay by default

    'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

    'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

HEADER

    ''                                          Static Header if no class is added
    'page-header-fixed'                         Fixed Header

HEADER STYLE

    ''                                          Light themed Header
    'page-header-dark'                          Dark themed Header

MAIN CONTENT LAYOUT

    ''                                          Full width Main Content if no class is added
    'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
    'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)
-->
<div id="page-container">

    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->
        <div class="bg-image"
             style="background-position: 0px 0px;background-size: cover; background-image: url({{('media/photos/leftSideImage.jpg')}});"/>

        <div class="row no-gutters">
            <!-- Meta Info Section -->
            <div class="hero-static col-lg-4 d-none d-lg-flex flex-column justify-content-center">
                <div class="p-4 p-xl-5 flex-grow-1 d-flex align-items-center">
                    <div class="w-100">
                        <a class="link-fx font-w600 font-size-h2 text-white" href="../..">
                            ClimbingPlan
                        </a>
                        <p class="text-white-75 mr-xl-8 mt-2">
                            Improve your climbing with the best climbing training programs
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
                    <a class="link-fx font-w600 font-size-h3 text-dark" href="../..">
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
                                Reset Password
                            </h1>
                            <h2 class="font-size-base text-muted">
                                Recover your access today in one easy step
                            </h2>
                        </div>
                        <!-- END Header -->

                        <!-- Sign Up Form -->
                        <!-- jQuery Validation (.js-validation-signup class is initialized in js/pages/op_auth_signup.min.js which was auto compiled from _js/pages/op_auth_signup.js) -->
                        <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->

                        <div class="row no-gutters justify-content-center">
                            <div class="col-sm-8 col-xl-4">

                                <form method="POST" action="{{ route('password.update') }}">
                                    @csrf
                                    <input type="hidden" name="token" value="{{ $token }}">

                                    <div class="form-group">

                                        <input id="email" type="email"
                                               class="form-control form-control-lg form-control-alt  @error('email') is-invalid @enderror"
                                               name="email" value="{{ $email ?? old('email') }}" required
                                               placeholder="Email"
                                               autofocus
                                               autocomplete="email">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">

                                        <input id="password" type="password"
                                               class="form-control form-control-lg form-control-alt  @error('password') is-invalid @enderror"
                                               name="password" placeholder="Password" required
                                               autocomplete="new-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">

                                        <input id="password-confirm" type="password"
                                               class="form-control form-control-lg form-control-alt "
                                               name="password_confirmation" placeholder="Confirm Password" required
                                               autocomplete="new-password">
                                    </div>

                                    <div class="form-group text-center mb-0">
                                        <button type="submit" class="btn btn-lg btn-alt-success">
                                            <i class="fa fa-fw fa-plus mr-1 opacity-50"></i> Reset Password
                                        </button>
                                    </div>

                                </form>

                            </div>
                        </div>
                        <!-- END Sign Up Form -->
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
</div>
<!-- END Page Content -->
</main>
<!-- END Main Container -->
</div>
<!-- END Page Container -->

<!-- Terms Modal -->
<div class="modal fade" id="one-signup-terms" tabindex="-1" role="dialog" aria-labelledby="one-signup-terms"
     aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-popout" role="document">
        <div class="modal-content">
            <div class="block block-rounded block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Terms &amp; Conditions</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing
                        luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor
                        tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum
                        quis in sit varius lorem sit metus mi.</p>
                    <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing
                        luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor
                        tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum
                        quis in sit varius lorem sit metus mi.</p>
                    <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing
                        luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor
                        tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum
                        quis in sit varius lorem sit metus mi.</p>
                    <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing
                        luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor
                        tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum
                        quis in sit varius lorem sit metus mi.</p>
                    <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing
                        luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor
                        tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum
                        quis in sit varius lorem sit metus mi.</p>
                </div>
                <div class="block-content block-content-full text-right border-top">
                    <button type="button" class="btn btn-alt-primary mr-1" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">I Agree</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Terms Modal -->

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
<!--
<script src="assets/js/oneui.core.min.js"></script>
-->
<!--
    OneUI JS

    Custom functionality including Blocks/Layout API as well as other vital and optional helpers
    webpack is putting everything together at assets/_js/main/app.js
-->
<!--
<script src="assets/js/oneui.app.min.js"></script>
-->
<!-- Page JS Plugins -->
<!--
<script src="assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>
-->
<!-- Page JS Code -->
<!--
<script src="assets/js/pages/op_auth_signup.min.js"></script>
-->
</body>
</html>
