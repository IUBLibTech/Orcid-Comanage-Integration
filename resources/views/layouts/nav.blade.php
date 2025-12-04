    <header class="rvt-header-wrapper">

        <a class="rvt-header-wrapper__skip-link" href="#main-content">Skip to main content</a>

        <div class="rvt-header-global">
            <div class="rvt-p-lr-md">
                <div class="rvt-header-global__inner">
                    <div class="rvt-header-global__logo-slot">
                        <a class="rvt-lockup" href="https://orcid-dev.dlib.indiana.edu">

                            <div class="rvt-lockup__tab">
                                <svg xmlns="http://www.w3.org/2000/svg" class="rvt-lockup__trident" viewBox="0 0 28 34">
                                    <path fill="currentColor" d="M-3.34344e-05 4.70897H8.83308V7.174H7.1897V21.1426H10.6134V2.72321H8.83308V0.121224H18.214V2.65476H16.2283V21.1426H19.7889V7.174H18.214V4.64047H27.0471V7.174H25.0614V23.6761L21.7746 26.8944H16.2967V30.455H18.214V33.8787H8.76463V30.592H10.6819V26.8259H5.20403L1.91726 23.6077V7.174H-3.34344e-05V4.70897Z"></path>
                                </svg>
                            </div>

                            <div class="rvt-lockup__body">
                                <span class="rvt-lockup__title">@yield('site-title', 'ORCID @ IU')</span>
                            </div>
                        </a>
                    </div>
                    <div class="rvt-header-global__controls">
                        <div data-rvt-disclosure="menu" data-rvt-close-click-outside>
                            <button aria-expanded="false" class="rvt-global-toggle rvt-global-toggle--menu rvt-hide-lg-up" data-rvt-disclosure-toggle="menu">
                                <span class="rvt-sr-only">Menu</span>
                                <svg class="rvt-global-toggle__open" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">  <path d="M15 4H1V2h14v2Zm0 5H1V7h14v2ZM1 14h14v-2H1v2Z"/></svg>
                                <svg class="rvt-global-toggle__close" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">  <path d="m3.5 2.086 4.5 4.5 4.5-4.5L13.914 3.5 9.414 8l4.5 4.5-1.414 1.414-4.5-4.5-4.5 4.5L2.086 12.5l4.5-4.5-4.5-4.5L3.5 2.086Z"/></svg>
                            </button>

                            <nav aria-label="Main" class="rvt-header-menu" data-rvt-disclosure-target="menu" hidden>
                                <ul class="rvt-header-menu__list">
                                    <li class="rvt-header-menu__item">
  					<a class="rvt-header-menu__link" href="/comanage">Comanage</a>
 				   </li>
                                    <li class="rvt-header-menu__item">
                                        <a class="rvt-header-menu__link" href="/orcid">ORCID</a>
                                    </li>
				</ul>

                        <div class="rvt-flex rvt-items-center rvt-m-left-md rvt-p-bottom-md rvt-p-bottom-none-lg-up">
                        @if (cas()->isAuthenticated())
                            <div class="rvt-ts-14">
                                <strong>Logged in as</strong>
                            </div>
                            <div class="rvt-ts-14 rvt-m-left-xs rvt-p-right-xs rvt-m-right-xs rvt-border-right">
                                {{ cas()->user() }}
                            </div>
                                <a href="{{ route('logout') }}">Logout</a>
                        @else
                            <a href="{{ url('/login') }}">
                                <button type="button" class="rvt-button">IU Login</button>
                            </a>
                        @endif
                        </div> 
                        
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
