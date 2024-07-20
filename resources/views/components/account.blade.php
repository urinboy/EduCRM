<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle bsb-dropdown-toggle-caret-disable" href="#" role="button"
        data-bs-toggle="dropdown" aria-expanded="false">
        <img src="https://new.urinboydev.uz/static/media/favicon.9f15ba03dac502a26263.png" width="35" height="35"
            class="img-fluid rounded-circle" alt="Luke Reeves">
    </a>
    <ul class="dropdown-menu dropdown-menu-md-end bsb-dropdown-animation bsb-fadeIn">
        <li>
            <h6 class="dropdown-header fs-7 text-center">Welcome, {{ Auth::user()->name }}</h6>
        </li>
        <li>
            <hr class="dropdown-divider">
        </li>
        <li>
            <a href="#" class="dropdown-item" aria-current="true">
                <div class="row g-0 align-items-center">
                    <div class="col-3">
                        <img src="https://new.urinboydev.uz/static/media/favicon.9f15ba03dac502a26263.png"
                            width="55" height="55" class="img-fluid rounded-circle" alt="Luke Reeves">
                    </div>
                    <div class="col-9">
                        <div class="ps-3">
                            <div class="text-secondary mt-1 fs-7">{{ Auth::user()->name }}</div>
                            <div class="text-secondary mt-1 fs-7">{{ Auth::user()->email }}</div>
                        </div>
                    </div>
                </div>
            </a>
        </li>
        <li>
            <hr class="dropdown-divider">
        </li>
        <li>
            <a class="dropdown-item" href="{{ route('profile') }}">
                <span>
                    <i class="bi bi-person-fill me-2"></i>
                    <span class="fs-7">{{ __('Profile') }}</span>
                </span>
            </a>
        </li>

        {{-- <li>
            <a class="dropdown-item" href="#!">
                <span>
                    <i class="bi bi-bell-fill me-2"></i>
                    <span class="fs-7">Notifications</span>
                </span>
            </a>
        </li>
        <li>
            <hr class="dropdown-divider">
        </li>
        <li>
            <a class="dropdown-item" href="#!">
                <span>
                    <i class="bi bi-gear-fill me-2"></i>
                    <span class="fs-7">Settings & Privacy</span>
                </span>
            </a>
        </li>
        <li>
            <a class="dropdown-item" href="#!">
                <span>
                    <i class="bi bi-question-circle-fill me-2"></i>
                    <span class="fs-7">Help Center</span>
                </span>
            </a>
        </li> --}}
        
        <li>
            <hr class="dropdown-divider">
        </li>
        <li>
            <a class="dropdown-item text-center" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <span class="fw-bold text-danger">
                    <i class="bi bi-box-arrow-left me-2"></i>
                    <span class="fs-7">{{ __('Logout') }}</span>
                </span> 
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            {{-- <a class="dropdown-item text-center" href="#!">
                <span>
                    <span class="fs-7">Log Out</span>
                </span>
            </a> --}}
        </li>
    </ul>
</li>
