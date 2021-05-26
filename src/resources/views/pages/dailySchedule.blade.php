@extends('templates.base')
<!-- Page Container -->
@section('content')
    @parent
    <!-- Header -->
    @section('button')
        <button type="button" class="btn btn-sm btn-dual mr-2"
                        onclick="location.href='{{ route('calendar') }}'">
            <i class="fa fa-fw fa-arrow-circle-left"></i>
        </button>
    @endsection

    <!-- END Header -->

    <!-- Main Container -->
    @section('main')
        <!-- Hero Content -->
        <div class="bg-image" style="background-image: url({{'../../media/photos/photo25@2x.jpg'}});">
            <div class="bg-black-50">
                <div class="content content-full overflow-hidden">
                    <div class="mt-7 mb-5 text-center">
                        <h1 class="h2 text-white mb-2 invisible" data-toggle="appear"
                            data-class="animated fadeInDown">{!! $date !!}</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Hero Content -->

        <!-- Page Content -->
        <div class="content content-boxed">
            <div class="row row-deck py-4">
                @if(count($routines) === 0)
                    <h1 class="h2 mb-2">No routines scheduled</h1>
                @else
                    @for ($i = 0; $i < count($routines); $i++)
                    <!-- Course -->
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <a class="block block-rounded block-link-pop" href="/routine/{!!$routines[$i]->getId() !!}">
                                <div class="block-content block-content-full text-center"
                                     style="background-color: {!! $routines[$i]->getColor() !!}">
                                    <div class="item item-2x item-circle bg-white-10 py-3 my-3 mx-auto invisible"
                                         data-toggle="appear" data-offset="50" data-class="animated fadeIn">
                                        <i class="fab fa-html5 fa-2x text-white-75"></i>
                                    </div>
                                </div>
                                <div class="block-content block-content-full">
                                    <h4 class="h5 mb-1">Routine {{$i+1}}</h4>
                                </div>
                            </a>
                        </div>
                        <!-- END Course -->
                    @endfor
                @endif
            </div>
        </div>
        <!-- END Page Content -->
    @endsection
    <!-- END Main Container -->
@endsection
