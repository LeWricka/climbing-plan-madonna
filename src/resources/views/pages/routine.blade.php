@extends('templates.base')
<!-- Page Container -->
@section('content')
    @parent
    <!-- Header -->
    @section('button')
        <button type="button" class="btn btn-sm btn-dual mr-2"
                        onclick="location.href='{{url()->previous() }}'">
            <i class="fa fa-fw fa-arrow-circle-left"></i>
        </button>
    @endsection
    <!-- END Header -->

    <!-- Main Container -->
    @section('main')
    <!-- Hero Content -->
    <div class="bg-image" style="background-image: url({{'media/photos/photo3@2x.jpg'}});">
        <div class="bg-primary-dark-op">
            <div class="content content-full overflow-hidden">
                <div class="mt-7 mb-5 text-center">
                    <h1 class="h2 text-white mb-2 invisible" data-toggle="appear" data-class="animated fadeInDown">
                        {!! $routine->getName() !!}</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- END Hero Content -->

    <!-- Page Content -->
    <div class="content content-boxed">
        <div class="row">
            <div class="col-xl-8">
                <!-- Lesson -->
                <!-- Syntax Highlighting functionality is initialized in Helpers.highlightjs() -->
                <!-- For more info and examples you can check out https://highlightjs.org/usage/ -->
                <div class="block block-rounded">
                    <div class="block-content">
                        <iframe src ="{{ url($routine->getPdf()) }}" height="500px" width="100%"></iframe>
                    </div>
                </div>
                <!-- END Lesson -->
            </div>
            <div class="col-xl-4">
                <!-- Log training -->
                <div class="block block-rounded">
                    <div class="block-content">
                        <a class="btn btn-block btn-rounded btn-success mb-2" href="javascript:void(0)">Log training</a>
                        <a class="btn btn-block btn-primary disabled push" href="javascript:void(0)">
                            <i class="fa fa-download mr-1"></i> Download pdf
                        </a>
                    </div>
                </div>
                <!-- END Log training -->
            </div>
        </div>
    </div>
    <!-- END Page Content -->
    @endsection
    <!-- END Main Container -->
    <!-- Page JS Plugins -->
    @section('scripts')
        @parent


        <!-- Page JS Helpers (Highlight.js Plugin) -->
        <script>jQuery(function () {
                One.helpers('highlightjs');
            });</script>
    @endsection
    <!-- END Page Container -->
@endsection


