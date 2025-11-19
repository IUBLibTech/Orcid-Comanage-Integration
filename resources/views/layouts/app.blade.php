@include('layouts.header')

@include('layouts.nav')

<main id="main-content" class="rvt-layout__wrapper rvt-layout__wrapper--details">
        <div class="rvt-layout__sidebar [ rvt-p-top-xxl rvt-p-left-md rvt-bg-black-000 ]" id="section-nav">
	</div>

    <div class="rvt-container-lg rvt-m-top-xl rvt-m-left-none rvt-m-right-none rvt-p-right-none rvt-p-left-none">
        <div class="rvt-row">
            <div class="rvt-cols-8-lg">
                <div class="rvt-prose">
                    @yield('page-heading')
                </div>

                @yield('content')
            </div>
        </div>
    </div>
</main>

@include('layouts.footer')
