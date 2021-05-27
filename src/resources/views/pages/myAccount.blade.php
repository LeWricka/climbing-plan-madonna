@extends('templates.base')
<!-- Page Container -->
@section('content')
    <!-- Main Container -->
@section('main')

        <!-- Main Container -->
        <main id="main-container">
            <!-- Hero -->
            <div class="bg-image" style="background-image: url({{asset('media/photos/photo8@2x.jpg')}});">
                <div class="bg-black-50">
                    <div class="content content-full text-center">
                        <div class="my-3">
                            <img class="img-avatar img-avatar-thumb" src="{{asset('media/avatars/avatar10.jpg')}}" alt="">
                        </div>
                        <h1 class="h2 text-white mb-0">climberEmail</h1>
                    </div>
                </div>
            </div>
            <!-- END Hero -->


            <!-- END Stats -->

            <!-- Page Content -->
            <div class="content content-boxed">
                <div class="row">
                    <div class="col-md-7 col-xl-8">
                        <!-- Updates -->
                        <ul class="timeline timeline-alt py-0">
                            <li class="timeline-event">
                                <div class="timeline-event-block block invisible" data-toggle="appear">
                                    <div class="block-header">
                                        <h3 class="block-title">ROUTINES</h3>
                                    </div>
                                    <div class="block-content">
                                        <button class="btn btn-info">
                                            Download all your routines in a PDF
                                        </button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <!-- END Updates -->
                    </div>
                    <div class="col-md-5 col-xl-4">
                        <!-- Products -->
                        <div class="block block-rounded">
                            <div class="block-header block-header-default">
                                <h3 class="block-title">
                                    <i class="fa fa-briefcase text-muted mr-1"></i> RESOURCES
                                </h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                        <i class="si si-refresh"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="block-content">
                                <div class="media d-flex align-items-center push">
                                    <div class="mr-3">
                                        <a class="item item-rounded bg-info" href="https://www.climbingplan.com/blog/hangboard-training-for-climbing">
                                            <i class="si si-rocket fa-2x text-white-75"></i>
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <div class="font-w600">How to train with hangboard</div>
                                    </div>
                                </div>
                                <div class="media d-flex align-items-center push">
                                    <div class="mr-3">
                                        <a class="item item-rounded bg-amethyst" href="https://www.climbingplan.com/blog/training-for-climbing">
                                            <i class="si si-calendar fa-2x text-white-75"></i>
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <div class="font-w600">Training for climbing</div>
                                    </div>
                                </div>
                                <div class="media d-flex align-items-center push">
                                    <div class="mr-3">
                                        <a class="item item-rounded bg-city" href="https://www.climbingplan.com/blog/climbing-training-ground-rules">
                                            <i class="si si-speedometer fa-2x text-white-75"></i>
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <div class="font-w600">Climbing training ground rules </div>
                                    </div>
                                </div>
                                <div class="text-center push">
                                    <a class="btn btn-sm btn-light" href="https://www.climbingplan.com/blog">View More.. </a>
                                </div>
                            </div>
                        </div>
                        <!-- END Products -->

                    </div>
                </div>
            </div>
            <!-- END Page Content -->
        </main>
        <!-- END Main Container -->


@endsection
<!-- END Main Container -->

<!-- Footer -->

<!-- END Footer -->

<!-- END Page Container -->
@endsection

<script src="{{asset('js/oneui.core.min.js')}}"></script>

<script src="{{asset('js/oneui.app.js')}}"></script>
<!-- Page JS Plugins -->
