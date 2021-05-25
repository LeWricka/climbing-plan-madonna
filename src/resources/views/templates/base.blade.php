<!doctype html>
<html lang="en">
    @include('components.head')
    <body>
        <div id="page-container"
             class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">
            @include('components.navbar')
            @include('components.header')
            <main id="main-container">
                @yield('main')
            </main>
            @yield('content')
            @include('components.footer')
        </div>
    </body>
</html>
