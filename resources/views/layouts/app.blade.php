@include('layouts.header')

@include('layouts.nav')
<main id="main-content" class="rvt-layout__wrapper">
        @yield('page-heading')


        @yield('content')
</main>

@include('layouts.footer')
