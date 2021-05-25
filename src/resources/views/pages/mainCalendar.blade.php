@extends('templates.base')
<!-- Page Container -->
@section('content')
    <!-- Main Container -->
    @section('main')
        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-sm-fill h3 my-2">
                        Calendar <small
                            class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted">"No
                            Pain, More Gain"</small>
                    </h1>
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
    @endsection
    <!-- END Main Container -->

    <!-- Footer -->

    <!-- END Footer -->

    <!-- END Page Container -->
@endsection
    <script src="{{asset('js/oneui.core.min.js')}}"></script>

    <script src="{{asset('js/oneui.app.js')}}"></script>
    <!-- Page JS Plugins -->
    <script src="{{asset('js/plugins/fullcalendar/main.min.js')}}"></script>

    <!-- Page JS Code -->
    <script>
        let routines = {!! json_encode($routines) !!};
    </script>

    <script src="{{asset('js/pages/calendar.min.js')}}"></script>
