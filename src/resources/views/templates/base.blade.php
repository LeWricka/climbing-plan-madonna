<!doctype html>
<html lang="en">
    <x-head/>
    <body>
        <div id="page-container"
             class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">
            <x-navbar/>
            <x-header/>
            <main id="main-container">
                @yield('main')
            </main>
            @yield('content')
            <x-footer/>
        </div>
    </body>
</html>
