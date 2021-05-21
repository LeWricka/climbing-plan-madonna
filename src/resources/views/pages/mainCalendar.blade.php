<!doctype html>
<html lang="en">
<x-head/>
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
<div id="page-container"
     class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">
    <!-- Side Overlay-->
    <aside id="side-overlay">
        <!-- Side Header -->
        <div class="content-header border-bottom">
            <!-- User Avatar -->
            <a class="img-link mr-1" href="javascript:void(0)">
                <img class="img-avatar img-avatar32" src="{{asset('media/avatars/avatar10.jpg')}}" alt="">
            </a>
            <!-- END User Avatar -->

            <!-- User Info -->
            <div class="ml-2">
                <a class="text-dark font-w600 font-size-sm" href="javascript:void(0)">Adam McCoy</a>
            </div>
            <!-- END User Info -->

            <!-- Close Side Overlay -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <a class="ml-auto btn btn-sm btn-alt-danger" href="javascript:void(0)" data-toggle="layout"
               data-action="side_overlay_close">
                <i class="fa fa-fw fa-times"></i>
            </a>
            <!-- END Close Side Overlay -->
        </div>
        <!-- END Side Header -->

        <!-- Side Content -->
        <div class="content-side">
            <!-- Side Overlay Tabs -->
            <div class="block block-transparent pull-x pull-t">
                <ul class="nav nav-tabs nav-tabs-alt nav-justified" data-toggle="tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#so-overview">
                            <i class="fa fa-fw fa-coffee text-gray mr-1"></i> Overview
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#so-sales">
                            <i class="fa fa-fw fa-chart-line text-gray mr-1"></i> Sales
                        </a>
                    </li>
                </ul>
                <div class="block-content tab-content overflow-hidden">
                    <!-- Overview Tab -->
                    <div class="tab-pane pull-x fade fade-left show active" id="so-overview" role="tabpanel">
                        <!-- Activity -->
                        <div class="block">
                            <div class="block-header block-header-default">
                                <h3 class="block-title">Recent Activity</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-toggle="block-option"
                                            data-action="state_toggle" data-action-mode="demo">
                                        <i class="si si-refresh"></i>
                                    </button>
                                    <button type="button" class="btn-block-option" data-toggle="block-option"
                                            data-action="content_toggle"></button>
                                </div>
                            </div>
                            <div class="block-content">
                                <!-- Activity List -->
                                <ul class="nav-items mb-0">
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mr-3 ml-2">
                                                <i class="si si-wallet text-success"></i>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-size-sm font-w600">New sale ($15)</div>
                                                <div class="text-success">Admin Template</div>
                                                <small class="font-size-sm text-muted">3 min ago</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mr-3 ml-2">
                                                <i class="si si-pencil text-info"></i>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-size-sm font-w600">You edited the file</div>
                                                <div class="text-info">
                                                    Documentation.doc
                                                </div>
                                                <small class="font-size-sm text-muted">15 min ago</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mr-3 ml-2">
                                                <i class="si si-close text-danger"></i>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-size-sm font-w600">Project deleted</div>
                                                <div class="text-danger">Line Icon Set</div>
                                                <small class="font-size-sm text-muted">4 hours ago</small>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <!-- END Activity List -->
                            </div>
                        </div>
                        <!-- END Activity -->

                        <!-- Online Friends -->
                        <div class="block">
                            <div class="block-header block-header-default">
                                <h3 class="block-title">Online Friends</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-toggle="block-option"
                                            data-action="state_toggle" data-action-mode="demo">
                                        <i class="si si-refresh"></i>
                                    </button>
                                    <button type="button" class="btn-block-option" data-toggle="block-option"
                                            data-action="content_toggle"></button>
                                </div>
                            </div>
                            <div class="block-content">
                                <!-- Users Navigation -->
                                <ul class="nav-items mb-0">
                                    <li>
                                        <a class="media py-2" href="javascript:void(0)">
                                            <div class="mr-3 ml-2 overlay-container overlay-bottom">
                                                <img class="img-avatar img-avatar48" src="{{asset('media/avatars/avatar6.jpg')}}" alt="">
                                                <span
                                                    class="overlay-item item item-tiny item-circle border border-2x border-white bg-success"></span>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-w600">Susan Day</div>
                                                <div class="font-size-sm text-muted">Copywriter</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="media py-2" href="javascript:void(0)">
                                            <div class="mr-3 ml-2 overlay-container overlay-bottom">
                                                <img class="img-avatar img-avatar48" src="{{asset('media/avatars/avatar12.jpg')}}" alt="">
                                                <span
                                                    class="overlay-item item item-tiny item-circle border border-2x border-white bg-success"></span>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-w600">Scott Young</div>
                                                <div class="font-size-sm text-muted">Web Developer</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="media py-2" href="javascript:void(0)">
                                            <div class="mr-3 ml-2 overlay-container overlay-bottom">
                                                <img class="img-avatar img-avatar48" src="{{asset('media/avatars/avatar6.jpg')}}" alt="">
                                                <span
                                                    class="overlay-item item item-tiny item-circle border border-2x border-white bg-success"></span>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-w600">Lisa Jenkins</div>
                                                <div class="font-size-sm text-muted">Web Designer</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="media py-2" href="javascript:void(0)">
                                            <div class="mr-3 ml-2 overlay-container overlay-bottom">
                                                <img class="img-avatar img-avatar48" src="{{asset('media/avatars/avatar7.jpg')}}" alt="">
                                                <span
                                                    class="overlay-item item item-tiny item-circle border border-2x border-white bg-warning"></span>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-w600">Amanda Powell</div>
                                                <div class="font-size-sm text-muted">Photographer</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="media py-2" href="javascript:void(0)">
                                            <div class="mr-3 ml-2 overlay-container overlay-bottom">
                                                <img class="img-avatar img-avatar48" src="{{asset('media/avatars/avatar10.jpg')}}" alt="">
                                                <span
                                                    class="overlay-item item item-tiny item-circle border border-2x border-white bg-warning"></span>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-w600">Carl Wells</div>
                                                <div class="font-size-sm text-muted">Graphic Designer</div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <!-- END Users Navigation -->
                            </div>
                        </div>
                        <!-- END Online Friends -->

                        <!-- Quick Settings -->
                        <div class="block mb-0">
                            <div class="block-header block-header-default">
                                <h3 class="block-title">Quick Settings</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-toggle="block-option"
                                            data-action="content_toggle"></button>
                                </div>
                            </div>
                            <div class="block-content">
                                <!-- Quick Settings Form -->
                                <form action="be_pages_dashboard.html" method="POST" onsubmit="return false;">
                                    <div class="form-group">
                                        <p class="font-size-sm font-w600 mb-2">
                                            Online Status
                                        </p>
                                        <div class="custom-control custom-switch mb-1">
                                            <input type="checkbox" class="custom-control-input" id="so-settings-check1"
                                                   name="so-settings-check1" checked>
                                            <label class="custom-control-label" for="so-settings-check1">Show your
                                                status to all</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <p class="font-size-sm font-w600 mb-2">
                                            Auto Updates
                                        </p>
                                        <div class="custom-control custom-switch mb-1">
                                            <input type="checkbox" class="custom-control-input" id="so-settings-check2"
                                                   name="so-settings-check2" checked>
                                            <label class="custom-control-label" for="so-settings-check2">Keep up to
                                                date</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <p class="font-size-sm font-w600 mb-1">
                                            Application Alerts
                                        </p>
                                        <div class="custom-control custom-switch mb-1">
                                            <input type="checkbox" class="custom-control-input" id="so-settings-check3"
                                                   name="so-settings-check3" checked>
                                            <label class="custom-control-label" for="so-settings-check3">Email
                                                Notifications</label>
                                        </div>
                                        <div class="custom-control custom-switch mb-1">
                                            <input type="checkbox" class="custom-control-input" id="so-settings-check4"
                                                   name="so-settings-check4" checked>
                                            <label class="custom-control-label" for="so-settings-check4">SMS
                                                Notifications</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <p class="font-size-sm font-w600 mb-1">
                                            API
                                        </p>
                                        <div class="custom-control custom-switch mb-1">
                                            <input type="checkbox" class="custom-control-input" id="so-settings-check5"
                                                   name="so-settings-check5" checked>
                                            <label class="custom-control-label" for="so-settings-check5">Enable
                                                access</label>
                                        </div>
                                    </div>
                                </form>
                                <!-- END Quick Settings Form -->
                            </div>
                        </div>
                        <!-- END Quick Settings -->
                    </div>
                    <!-- END Overview Tab -->

                    <!-- Sales Tab -->
                    <div class="tab-pane pull-x fade fade-right" id="so-sales" role="tabpanel">
                        <div class="block mb-0">
                            <!-- Stats -->
                            <div class="block-content">
                                <div class="row items-push pull-t">
                                    <div class="col-6">
                                        <div class="font-size-sm font-w600 text-uppercase">Sales</div>
                                        <a class="font-size-lg" href="javascript:void(0)">22.030</a>
                                    </div>
                                    <div class="col-6">
                                        <div class="font-size-sm font-w600 text-uppercase">Balance</div>
                                        <a class="font-size-lg" href="javascript:void(0)">$4.589,00</a>
                                    </div>
                                </div>
                            </div>
                            <!-- END Stats -->

                            <!-- Today -->
                            <div class="block-content block-content-full block-content-sm bg-body-light">
                                <div class="row">
                                    <div class="col-6">
                                        <span class="font-size-sm font-w600 text-uppercase">Today</span>
                                    </div>
                                    <div class="col-6 text-right">
                                        <span class="ext-muted">$996</span>
                                    </div>
                                </div>
                            </div>
                            <div class="block-content">
                                <ul class="nav-items push">
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mr-3 ml-2">
                                                <i class="fa fa-fw fa-circle text-success"></i>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-w600">New sale! + $249</div>
                                                <small class="text-muted">3 min ago</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mr-3 ml-2">
                                                <i class="fa fa-fw fa-circle text-success"></i>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-w600">New sale! + $129</div>
                                                <small class="text-muted">50 min ago</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mr-3 ml-2">
                                                <i class="fa fa-fw fa-circle text-success"></i>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-w600">New sale! + $119</div>
                                                <small class="text-muted">2 hours ago</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mr-3 ml-2">
                                                <i class="fa fa-fw fa-circle text-success"></i>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-w600">New sale! + $499</div>
                                                <small class="text-muted">3 hours ago</small>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- END Today -->

                            <!-- Yesterday -->
                            <div class="block-content block-content-full block-content-sm bg-body-light">
                                <div class="row">
                                    <div class="col-6">
                                        <span class="font-size-sm font-w600 text-uppercase">Yesterday</span>
                                    </div>
                                    <div class="col-6 text-right">
                                        <span class="text-muted">$765</span>
                                    </div>
                                </div>
                            </div>
                            <div class="block-content">
                                <ul class="nav-items push">
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mr-3 ml-2">
                                                <i class="fa fa-fw fa-circle text-success"></i>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-w600">New sale! + $249</div>
                                                <small class="text-muted">26 hours ago</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mr-3 ml-2">
                                                <i class="fa fa-fw fa-circle text-danger"></i>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-w600">Product Purchase - $50</div>
                                                <small class="text-muted">28 hours ago</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mr-3 ml-2">
                                                <i class="fa fa-fw fa-circle text-success"></i>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-w600">New sale! + $119</div>
                                                <small class="text-muted">29 hours ago</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mr-3 ml-2">
                                                <i class="fa fa-fw fa-circle text-danger"></i>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-w600">Paypal Withdrawal - $300</div>
                                                <small class="text-muted">37 hours ago</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mr-3 ml-2">
                                                <i class="fa fa-fw fa-circle text-success"></i>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-w600">New sale! + $129</div>
                                                <small class="text-muted">39 hours ago</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mr-3 ml-2">
                                                <i class="fa fa-fw fa-circle text-success"></i>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-w600">New sale! + $119</div>
                                                <small class="text-muted">45 hours ago</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mr-3 ml-2">
                                                <i class="fa fa-fw fa-circle text-success"></i>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-w600">New sale! + $499</div>
                                                <small class="text-muted">46 hours ago</small>
                                            </div>
                                        </a>
                                    </li>
                                </ul>

                                <!-- More -->
                                <div class="text-center">
                                    <a class="btn btn-sm btn-light" href="javascript:void(0)">
                                        <i class="fa fa-arrow-down mr-1"></i> Load More..
                                    </a>
                                </div>
                                <!-- END More -->
                            </div>
                            <!-- END Yesterday -->
                        </div>
                    </div>
                    <!-- END Sales Tab -->
                </div>
            </div>
            <!-- END Side Overlay Tabs -->
        </div>
        <!-- END Side Content -->
    </aside>
    <!-- END Side Overlay -->

    <!-- Sidebar -->
    <!--
        Sidebar Mini Mode - Display Helper classes

        Adding 'smini-hide' class to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
        Adding 'smini-show' class to an element will make it visible (opacity: 1) when the sidebar is in mini mode
            If you would like to disable the transition animation, make sure to also add the 'no-transition' class to your element

        Adding 'smini-hidden' to an element will hide it when the sidebar is in mini mode
        Adding 'smini-visible' to an element will show it (display: inline-block) only when the sidebar is in mini mode
        Adding 'smini-visible-block' to an element will show it (display: block) only when the sidebar is in mini mode
    -->
    <x-navbar/>

    <!-- END Sidebar -->

    <!-- Header -->
    <header id="page-header">
        <!-- Header Content -->
        <div class="content-header">
            <!-- Left Section -->
            <div class="d-flex align-items-center">
                <!-- Toggle Sidebar -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                <button type="button" class="btn btn-sm btn-dual mr-2 d-lg-none" data-toggle="layout"
                        data-action="sidebar_toggle">
                    <i class="fa fa-fw fa-bars"></i>
                </button>
                <!-- END Toggle Sidebar -->

                <!-- Toggle Mini Sidebar -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                <button type="button" class="btn btn-sm btn-dual mr-2 d-none d-lg-inline-block" data-toggle="layout"
                        data-action="sidebar_mini_toggle">
                    <i class="fa fa-fw fa-ellipsis-v"></i>
                </button>
                <!-- END Toggle Mini Sidebar -->

            </div>
            <!-- END Left Section -->

            <!-- Right Section -->
            <div class="d-flex align-items-center">
                <!-- User Dropdown -->
                <div class="dropdown d-inline-block ml-2">
                    <button type="button" class="btn btn-sm btn-dual d-flex align-items-center"
                            id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                        <img class="rounded-circle" src="{{asset('media/avatars/avatar10.jpg')}}" alt="Header Avatar" style="width: 21px;">
                        <span class="d-none d-sm-inline-block ml-2">Adam</span>
                        <i class="fa fa-fw fa-angle-down d-none d-sm-inline-block ml-1 mt-1"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right p-0 border-0"
                         aria-labelledby="page-header-user-dropdown">
                        <div class="p-3 text-center bg-primary-dark rounded-top">
                            <img class="img-avatar img-avatar48 img-avatar-thumb" src="{{asset('media/avatars/avatar10.jpg')}}" alt="">
                            <p class="mt-2 mb-0 text-white font-w500">Adam Smith</p>
                            <p class="mb-0 text-white-50 font-size-sm">Web Developer</p>
                        </div>
                        <div class="p-2">
                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                               href="be_pages_generic_inbox.html">
                                <span class="font-size-sm font-w500">Inbox</span>
                                <span class="badge badge-pill badge-primary ml-2">3</span>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                               href="be_pages_generic_profile.html">
                                <span class="font-size-sm font-w500">Profile</span>
                                <span class="badge badge-pill badge-primary ml-2">1</span>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                               href="javascript:void(0)">
                                <span class="font-size-sm font-w500">Settings</span>
                            </a>
                            <div role="separator" class="dropdown-divider"></div>
                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                               href="op_auth_lock.html">
                                <span class="font-size-sm font-w500">Lock Account</span>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                               href="op_auth_signin.html">
                                <span class="font-size-sm font-w500">Log Out</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- END User Dropdown -->

            </div>
            <!-- END Right Section -->
        </div>
        <!-- END Header Content -->

        <!-- Header Search -->
        <div id="page-header-search" class="overlay-header bg-white">
            <div class="content-header">
                <form class="w-100" action="be_pages_generic_search.html" method="POST">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                            <button type="button" class="btn btn-alt-danger" data-toggle="layout"
                                    data-action="header_search_off">
                                <i class="fa fa-fw fa-times-circle"></i>
                            </button>
                        </div>
                        <input type="text" class="form-control" placeholder="Search or hit ESC.."
                               id="page-header-search-input" name="page-header-search-input">
                    </div>
                </form>
            </div>
        </div>
        <!-- END Header Search -->

        <!-- Header Loader -->
        <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
        <div id="page-header-loader" class="overlay-header bg-white">
            <div class="content-header">
                <div class="w-100 text-center">
                    <i class="fa fa-fw fa-circle-notch fa-spin"></i>
                </div>
            </div>
        </div>
        <!-- END Header Loader -->
    </header>
    <!-- END Header -->

    <!-- Main Container -->
    <main id="main-container">
        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-sm-fill h3 my-2">
                        Calendar <small
                            class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted">"No Pain, More Gain"</small>
                    </h1>
                    <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-alt">
                            <li class="breadcrumb-item">Components</li>
                            <li class="breadcrumb-item" aria-current="page">
                                <a class="link-fx" href="">Calendar</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
            <!-- Calendar -->
            <div class="block block-rounded">
                <div class="block-content">
                    <div class="row items-push">
                        <div class="col-md-8 col-lg-7 col-xl-9">
                            <!-- Calendar Container -->
                            <div id="js-calendar"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Calendar -->
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->

    <!-- Footer -->
    <x-footer/>
    <!-- END Footer -->

    <!-- Apps Modal -->
    <!-- Opens from the modal toggle button in the header -->
    <div class="modal fade" id="one-modal-apps" tabindex="-1" role="dialog" aria-labelledby="one-modal-apps"
         aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="block block-rounded block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Apps</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="si si-close"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content block-content-full">
                        <div class="row gutters-tiny">
                            <div class="col-6">
                                <!-- CRM -->
                                <a class="block block-rounded block-link-shadow bg-body" href="javascript:void(0)">
                                    <div class="block-content text-center">
                                        <i class="si si-speedometer fa-2x text-primary"></i>
                                        <p class="font-w600 font-size-sm mt-2 mb-3">
                                            CRM
                                        </p>
                                    </div>
                                </a>
                                <!-- END CRM -->
                            </div>
                            <div class="col-6">
                                <!-- Products -->
                                <a class="block block-rounded block-link-shadow bg-body" href="javascript:void(0)">
                                    <div class="block-content text-center">
                                        <i class="si si-rocket fa-2x text-primary"></i>
                                        <p class="font-w600 font-size-sm mt-2 mb-3">
                                            Products
                                        </p>
                                    </div>
                                </a>
                                <!-- END Products -->
                            </div>
                            <div class="col-6">
                                <!-- Sales -->
                                <a class="block block-rounded block-link-shadow bg-body mb-0" href="javascript:void(0)">
                                    <div class="block-content text-center">
                                        <i class="si si-plane fa-2x text-primary"></i>
                                        <p class="font-w600 font-size-sm mt-2 mb-3">
                                            Sales
                                        </p>
                                    </div>
                                </a>
                                <!-- END Sales -->
                            </div>
                            <div class="col-6">
                                <!-- Payments -->
                                <a class="block block-rounded block-link-shadow bg-body mb-0" href="javascript:void(0)">
                                    <div class="block-content text-center">
                                        <i class="si si-wallet fa-2x text-primary"></i>
                                        <p class="font-w600 font-size-sm mt-2 mb-3">
                                            Payments
                                        </p>
                                    </div>
                                </a>
                                <!-- END Payments -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Apps Modal -->
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

<script src="{{asset('js/oneui.core.min.js')}}"></script>

<!--
    OneUI JS

    Custom functionality including Blocks/Layout API as well as other vital and optional helpers
    webpack is putting everything together at assets/_js/main/app.js
-->
<script src="{{asset('js/oneui.app.js')}}"></script>


<!-- Page JS Plugins -->
<script src="{{asset('js/plugins/fullcalendar/main.min.js')}}"></script>

<!-- Page JS Code -->
<script>
    let routines = {!! json_encode($routines) !!};
</script>

<script src="{{asset('js/pages/calendar.min.js')}}"></script>

</body>
</html>
