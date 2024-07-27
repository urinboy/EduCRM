@php
    $account = \App\Models\Account::where("user_id", Auth::user()->id)->first();
@endphp
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle bsb-dropdown-toggle-caret-disable" href="#" role="button"
        data-bs-toggle="dropdown" aria-expanded="false">
            @if ($account->photo)
                <img src="{{ asset('storage/' . $account->photo) }}" width="35" height="35" class="img-fluid rounded-circle" alt="{{ Auth::user()->name }}">
            @else
                <img src="{{ asset('dist/img/no-photo.png') }}" width="35" height="35"  class="img-fluid rounded" alt="Profile Picture">
            @endif
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
                        @if ($account->photo)
                            <img src="{{ asset('storage/' . $account->photo) }}" width="55" height="55" class="img-fluid rounded-circle" alt="{{ Auth::user()->name }}">
                        @else
                            <img src="{{ asset('dist/img/no-photo.png') }}" width="55" height="55"  class="img-fluid rounded" alt="Profile Picture">
                        @endif
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
        </li>
    </ul>
</li>
