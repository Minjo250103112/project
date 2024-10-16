<!DOCTYPE html>
<html lang="id">
    @include('layouts.partials.header')
    <body class="sb-nav-fixed">
        @include('layouts.partials.navbar')
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                @include('layouts.partials.sidebar')
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">@yield('title-page')</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        @yield('content')
                    </div>
                </main>
                @include('layouts.partials.footer')
            </div>
        </div>
        @include('layouts.partials.script')
        @stack('scripts')
    </body>
</html>
