<nav class="navbar navbar-expand-md bsb-navbar-3 navbar-light bg-white shadow-sm">
    <div class="container">
        <ul class="navbar-nav">
            <li class="nav-item me-3">
                <a class="nav-link" href="{{ route('home') }}" data-bs-toggle="offcanvas" data-bs-target="#bsbSidebar1"
                    aria-controls="bsbSidebar1">
                    <i class="bi bi-grid fs-3 lh-1"></i>
                </a>
            </li>
        </ul>
        <a class="navbar-brand" href="{{ route('home') }}">
            {{ config('app.name', 'Laravel') }}
            {{-- <img src="https://bootstrapbrain.com/demo/components/navbars/navbar-3/#!" class="img-fluid" alt="BootstrapBrain Logo" width="135" height="44"> --}}
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#bsbNavbar"
            aria-controls="bsbNavbar" aria-label="Toggle Navigation">
            <i class="bi bi-three-dots"></i>
        </button>
        <div class="collapse navbar-collapse" id="bsbNavbar">
            <ul class="navbar-nav bsb-dropdown-menu-responsive ms-auto align-items-center">
                @guest

                {{-- Localization --}}
                <x-localization />
                
                @else
                {{-- Search --}}
                {{-- <x-search /> --}}

                {{-- Localization --}}
                <x-localization />

                {{-- Chats --}}
                {{-- <x-chats /> --}}

                {{-- Notification --}}
                <x-notification />

                {{-- Account --}}
                <x-account />
                @endguest

            </ul>
        </div>
    </div>
</nav>