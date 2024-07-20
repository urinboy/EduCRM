<!-- Aside -->
<aside class="bsb-sidebar-1 offcanvas offcanvas-start" tabindex="-1" id="bsbSidebar1"
    aria-labelledby="bsbSidebarLabel1">
    <div class="offcanvas-header text-center">
        <a class="sidebar-brand fw-bold text-danger text-center"
            style="margin: 0 20px;text-decoration: none; font-size:20px;height:40px;" href="/">
            <img type="image/svg+xml"
                src="data:image/svg+xml,%3Csvg viewBox='0 -.11376601 49.74245785 51.31690859' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='m49.626 11.564a.809.809 0 0 1 .028.209v10.972a.8.8 0 0 1 -.402.694l-9.209 5.302v10.509c0 .286-.152.55-.4.694l-19.223 11.066c-.044.025-.092.041-.14.058-.018.006-.035.017-.054.022a.805.805 0 0 1 -.41 0c-.022-.006-.042-.018-.063-.026-.044-.016-.09-.03-.132-.054l-19.219-11.066a.801.801 0 0 1 -.402-.694v-32.916c0-.072.01-.142.028-.21.006-.023.02-.044.028-.067.015-.042.029-.085.051-.124.015-.026.037-.047.055-.071.023-.032.044-.065.071-.093.023-.023.053-.04.079-.06.029-.024.055-.05.088-.069h.001l9.61-5.533a.802.802 0 0 1 .8 0l9.61 5.533h.002c.032.02.059.045.088.068.026.02.055.038.078.06.028.029.048.062.072.094.017.024.04.045.054.071.023.04.036.082.052.124.008.023.022.044.028.068a.809.809 0 0 1 .028.209v20.559l8.008-4.611v-10.51c0-.07.01-.141.028-.208.007-.024.02-.045.028-.068.016-.042.03-.085.052-.124.015-.026.037-.047.054-.071.024-.032.044-.065.072-.093.023-.023.052-.04.078-.06.03-.024.056-.05.088-.069h.001l9.611-5.533a.801.801 0 0 1 .8 0l9.61 5.533c.034.02.06.045.09.068.025.02.054.038.077.06.028.029.048.062.072.094.018.024.04.045.054.071.023.039.036.082.052.124.009.023.022.044.028.068zm-1.574 10.718v-9.124l-3.363 1.936-4.646 2.675v9.124l8.01-4.611zm-9.61 16.505v-9.13l-4.57 2.61-13.05 7.448v9.216zm-36.84-31.068v31.068l17.618 10.143v-9.214l-9.204-5.209-.003-.002-.004-.002c-.031-.018-.057-.044-.086-.066-.025-.02-.054-.036-.076-.058l-.002-.003c-.026-.025-.044-.056-.066-.084-.02-.027-.044-.05-.06-.078l-.001-.003c-.018-.03-.029-.066-.042-.1-.013-.03-.03-.058-.038-.09v-.001c-.01-.038-.012-.078-.016-.117-.004-.03-.012-.06-.012-.09v-21.483l-4.645-2.676-3.363-1.934zm8.81-5.994-8.007 4.609 8.005 4.609 8.006-4.61-8.006-4.608zm4.164 28.764 4.645-2.674v-20.096l-3.363 1.936-4.646 2.675v20.096zm24.667-23.325-8.006 4.609 8.006 4.609 8.005-4.61zm-.801 10.605-4.646-2.675-3.363-1.936v9.124l4.645 2.674 3.364 1.937zm-18.422 20.561 11.743-6.704 5.87-3.35-8-4.606-9.211 5.303-8.395 4.833z' fill='%23ff2d20'/%3E%3C/svg%3E"
                id="bsbSidebarLabel1" class="img-fluid" style="margin: 0 20px" alt="BootstrapBrain Logo"
                width="44" height="44">
            {{ config('app.name') }}
        </a>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body pt-0">
        {{-- <hr class="sidebar-divider mb-3"> --}}
        <ul class="navbar-nav">
            <!-- Authentication Links -->
            @guest
                <li class="nav-item mt-3">
                    <h6 class="py-1 text-secondary text-uppercase fs-7">{{ __('Authentification') }}</h6>
                </li>
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link p-3 active rounded" href="{{ route('login') }}">
                            <div class="nav-link-icon">
                                <i class="bi bi-key"></i>
                            </div>
                            <span class="nav-link-text fw-bold">{{ __('Login') }}</span>
                        </a>

                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link p-3 active rounded" href="{{ route('register') }}">
                            <div class="nav-link-icon">
                                <i class="bi bi-person-plus"></i>
                            </div>
                            <span class="nav-link-text fw-bold">{{ __('Register') }}</span>
                        </a>

                    </li>
                @endif
            @else
                <div class="bg-light rounded-3 position-relative px-4 pt-5 pb-4 mt-5">
                    <div
                        class="bsb-w-80 bsb-h-80 d-flex align-items-center justify-content-center text-bg-primary border border-5 border-white rounded-circle position-absolute top-0 start-50 translate-middle">
                        <i class="bi bi-person lh-1 fs-3"></i>
                    </div>
                    <div class="text-center">
                        <h3 class="h5">{{ Auth::user()->name }}</h3>
                        <p class="fs-7">
                            <a href="{{ route('profile') }}"><span class="btn btn-sm btn-outline-primary rounded w-100 fw-bold">{{ __('Profile') }}</span></a>
                        </p>
                        <div class="d-grid m-0">
                            <a class="btn btn-primary rounded" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>

                <li class="nav-item mt-3">
                    <h6 class="py-1 text-secondary text-uppercase fs-7">{{ __('Menu') }}</h6>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-3 active rounded" href="{{ route('home') }}">
                        <div class="nav-link-icon">
                            <i class="bi bi-house-gear"></i>
                        </div>
                        <span class="nav-link-text fw-bold">{{ __('Dashboards') }}</span>
                    </a>
                </li>
                @if(Auth::user() && Auth::user()->roles()->where('name', '!=', 'User')->exists())
                    <li class="nav-item">
                        <a class="nav-link p-3" data-bs-toggle="collapse" href="#authExamples" role="button"
                            aria-expanded="false" aria-controls="authExamples">
                            <div class="nav-link-icon text-success">
                                <i class="bi bi-gear"></i>
                            </div>
                            <span class="nav-link-text fw-bold">{{ __('Managments') }}</span>
                        </a>
                        <div class="collapse" id="authExamples">
                            <ul class="nav flex-column ms-4">
                                @can('user-list')
                                    <li class="nav-item">
                                        <a class="nav-link  link-secondary" href="{{ route('users.index') }}">
                                            <div class="nav-link-icon text-success-emphasis">
                                                <i class="bi bi-arrow-right-short"></i>
                                            </div>
                                            <span class="nav-link-text">{{ __('Users') }}</span>
                                        </a>
                                    </li>
                                @endcan
                                @can('role-list')
                                    <li class="nav-item">
                                        <a class="nav-link  link-secondary" href="{{ route('roles.index') }}">
                                            <div class="nav-link-icon text-success-emphasis">
                                                <i class="bi bi-arrow-right-short"></i>
                                            </div>
                                            <span class="nav-link-text">{{ __('Roles') }}</span>
                                        </a>
                                    </li>
                                @endcan
                                @can('language-list')
                                    <li class="nav-item">
                                        <a class="nav-link  link-secondary" href="{{ route('languages.index') }}">
                                            <div class="nav-link-icon text-success-emphasis">
                                                <i class="bi bi-arrow-right-short"></i>
                                            </div>
                                            <span class="nav-link-text">{{ __('Languages') }}</span>
                                        </a>
                                    </li>
                                @endcan
                                @can('product-list')
                                    <li class="nav-item">
                                        <a class="nav-link  link-secondary" href="{{ route('products.index') }}">
                                            <div class="nav-link-icon text-success-emphasis">
                                                <i class="bi bi-arrow-right-short"></i>
                                            </div>
                                            <span class="nav-link-text">{{ __('Products') }}</span>
                                        </a>
                                    </li>
                                @endcan
                                @can('city-list')
                                    <li class="nav-item">
                                        <a class="nav-link  link-secondary" href="{{ route('cities.index') }}">
                                            <div class="nav-link-icon text-success-emphasis">
                                                <i class="bi bi-arrow-right-short"></i>
                                            </div>
                                            <span class="nav-link-text">{{ __('Cities') }}</span>
                                        </a>
                                    </li>
                                @endcan
                                @can('organization-list')
                                    <li class="nav-item">
                                        <a class="nav-link  link-secondary" href="{{ route('organizations.index') }}">
                                            <div class="nav-link-icon text-success-emphasis">
                                                <i class="bi bi-arrow-right-short"></i>
                                            </div>
                                            <span class="nav-link-text">{{ __('Organizations') }}</span>
                                        </a>
                                    </li>
                                @endcan

                                {{-- <li class="nav-item">
                                    <a class="nav-link link-secondary" aria-current="page" href="#!">
                                        <div class="nav-link-icon text-success-emphasis">
                                            <i class="bi bi-arrow-right-short"></i>
                                        </div>
                                        <span class="nav-link-text">Sign In</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link link-secondary" aria-current="page" href="#!">
                                        <div class="nav-link-icon text-success-emphasis">
                                            <i class="bi bi-arrow-right-short"></i>
                                        </div>
                                        <span class="nav-link-text">Sign Up</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link link-secondary" aria-current="page" href="#!">
                                        <div class="nav-link-icon text-success-emphasis">
                                            <i class="bi bi-arrow-right-short"></i>
                                        </div>
                                        <span class="nav-link-text">Reset Password</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link link-secondary" aria-current="page" href="#!">
                                        <div class="nav-link-icon text-success-emphasis">
                                            <i class="bi bi-arrow-right-short"></i>
                                        </div>
                                        <span class="nav-link-text">Lock</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link link-secondary" aria-current="page" href="#!">
                                        <div class="nav-link-icon text-success-emphasis">
                                            <i class="bi bi-arrow-right-short"></i>
                                        </div>
                                        <span class="nav-link-text">Error</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link link-secondary" aria-current="page" href="#!">
                                        <div class="nav-link-icon text-success-emphasis">
                                            <i class="bi bi-arrow-right-short"></i>
                                        </div>
                                        <span class="nav-link-text">2FA</span>
                                    </a>
                                </li> --}}
                            </ul>
                        </div>
                    </li>
                @endif

                {{-- <li class="nav-item">
                    <a class="nav-link p-3" data-bs-toggle="collapse" href="#pageExamples" role="button"
                        aria-expanded="false" aria-controls="pageExamples">
                        <div class="nav-link-icon text-danger">
                            <i class="bi bi-folder"></i>
                        </div>
                        <span class="nav-link-text fw-bold">Pages</span>
                    </a>
                    <div class="collapse" id="pageExamples">
                        <ul class="nav flex-column ms-4">
                            <li class="nav-item">
                                <a class="nav-link link-secondary" aria-current="page" href="#!">
                                    <div class="nav-link-icon text-danger-emphasis">
                                        <i class="bi bi-arrow-right-short"></i>
                                    </div>
                                    <span class="nav-link-text">Account</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link-secondary" aria-current="page" href="#!">
                                    <div class="nav-link-icon text-danger-emphasis">
                                        <i class="bi bi-arrow-right-short"></i>
                                    </div>
                                    <span class="nav-link-text">Profile</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link-secondary" aria-current="page" href="#!">
                                    <div class="nav-link-icon text-danger-emphasis">
                                        <i class="bi bi-arrow-right-short"></i>
                                    </div>
                                    <span class="nav-link-text">Users</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link-secondary" aria-current="page" href="#!">
                                    <div class="nav-link-icon text-danger-emphasis">
                                        <i class="bi bi-arrow-right-short"></i>
                                    </div>
                                    <span class="nav-link-text">Projects</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link-secondary" aria-current="page" href="#!">
                                    <div class="nav-link-icon text-danger-emphasis">
                                        <i class="bi bi-arrow-right-short"></i>
                                    </div>
                                    <span class="nav-link-text">Invoice</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link-secondary" aria-current="page" href="#!">
                                    <div class="nav-link-icon text-danger-emphasis">
                                        <i class="bi bi-arrow-right-short"></i>
                                    </div>
                                    <span class="nav-link-text">Pricing</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-3" data-bs-toggle="collapse" href="#ecommerceExamples" role="button"
                        aria-expanded="false" aria-controls="ecommerceExamples">
                        <div class="nav-link-icon text-info">
                            <i class="bi bi-cart"></i>
                        </div>
                        <span class="nav-link-text fw-bold">Ecommerce</span>
                    </a>
                    <div class="collapse" id="ecommerceExamples">
                        <ul class="nav flex-column ms-4">
                            <li class="nav-item">
                                <a class="nav-link link-secondary" aria-current="page" href="#!">
                                    <div class="nav-link-icon text-info-emphasis">
                                        <i class="bi bi-arrow-right-short"></i>
                                    </div>
                                    <span class="nav-link-text">Overview</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link-secondary" aria-current="page" href="#!">
                                    <div class="nav-link-icon text-info-emphasis">
                                        <i class="bi bi-arrow-right-short"></i>
                                    </div>
                                    <span class="nav-link-text">Products</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link-secondary" aria-current="page" href="#!">
                                    <div class="nav-link-icon text-info-emphasis">
                                        <i class="bi bi-arrow-right-short"></i>
                                    </div>
                                    <span class="nav-link-text">Orders</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link-secondary" aria-current="page" href="#!">
                                    <div class="nav-link-icon text-info-emphasis">
                                        <i class="bi bi-arrow-right-short"></i>
                                    </div>
                                    <span class="nav-link-text">Referral</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-3" data-bs-toggle="collapse" href="#componentExamples" role="button"
                        aria-expanded="false" aria-controls="componentExamples">
                        <div class="nav-link-icon text-warning">
                            <i class="bi bi-database-check"></i>
                        </div>
                        <span class="nav-link-text fw-bold">Components</span>
                    </a>
                    <div class="collapse" id="componentExamples">
                        <ul class="nav flex-column ms-4">
                            <li class="nav-item">
                                <a class="nav-link link-secondary" aria-current="page" href="#!">
                                    <div class="nav-link-icon text-warning-emphasis">
                                        <i class="bi bi-arrow-right-short"></i>
                                    </div>
                                    <span class="nav-link-text">Buttons</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link-secondary" aria-current="page" href="#!">
                                    <div class="nav-link-icon text-warning-emphasis">
                                        <i class="bi bi-arrow-right-short"></i>
                                    </div>
                                    <span class="nav-link-text">Charts</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link-secondary" aria-current="page" href="#!">
                                    <div class="nav-link-icon text-warning-emphasis">
                                        <i class="bi bi-arrow-right-short"></i>
                                    </div>
                                    <span class="nav-link-text">Forms</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link-secondary" aria-current="page" href="#!">
                                    <div class="nav-link-icon text-warning-emphasis">
                                        <i class="bi bi-arrow-right-short"></i>
                                    </div>
                                    <span class="nav-link-text">Icons</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link-secondary" aria-current="page" href="#!">
                                    <div class="nav-link-icon text-warning-emphasis">
                                        <i class="bi bi-arrow-right-short"></i>
                                    </div>
                                    <span class="nav-link-text">Widgets</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link-secondary" aria-current="page" href="#!">
                                    <div class="nav-link-icon text-warning-emphasis">
                                        <i class="bi bi-arrow-right-short"></i>
                                    </div>
                                    <span class="nav-link-text">Notifications</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item mt-3">
                    <h6 class="py-1 text-secondary text-uppercase fs-7">Docs</h6>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-3" data-bs-toggle="collapse" href="#basicExamples" role="button"
                        aria-expanded="false" aria-controls="basicExamples">
                        <div class="nav-link-icon text-dark">
                            <i class="bi bi-pen"></i>
                        </div>
                        <span class="nav-link-text fw-bold">Basic</span>
                    </a>
                    <div class="collapse" id="basicExamples">
                        <ul class="nav flex-column ms-4">
                            <li class="nav-item">
                                <a class="nav-link link-secondary" aria-current="page" href="#!">
                                    <div class="nav-link-icon text-dark-emphasis">
                                        <i class="bi bi-arrow-right-short"></i>
                                    </div>
                                    <span class="nav-link-text">Getting Started</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link-secondary" aria-current="page" href="#!">
                                    <div class="nav-link-icon text-dark-emphasis">
                                        <i class="bi bi-arrow-right-short"></i>
                                    </div>
                                    <span class="nav-link-text">Foundation</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link-secondary" aria-current="page" href="#!">
                                    <div class="nav-link-icon text-dark-emphasis">
                                        <i class="bi bi-arrow-right-short"></i>
                                    </div>
                                    <span class="nav-link-text">FAQs</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-3" data-bs-toggle="collapse" href="#frameworkExamples" role="button"
                        aria-expanded="false" aria-controls="frameworkExamples">
                        <div class="nav-link-icon text-dark">
                            <i class="bi bi-shield-plus"></i>
                        </div>
                        <span class="nav-link-text fw-bold">Framework</span>
                    </a>
                    <div class="collapse" id="frameworkExamples">
                        <ul class="nav flex-column ms-4">
                            <li class="nav-item">
                                <a class="nav-link link-secondary" aria-current="page" href="#!">
                                    <div class="nav-link-icon text-dark-emphasis">
                                        <i class="bi bi-arrow-right-short"></i>
                                    </div>
                                    <span class="nav-link-text">Developers</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link-secondary" aria-current="page" href="#!">
                                    <div class="nav-link-icon text-dark-emphasis">
                                        <i class="bi bi-arrow-right-short"></i>
                                    </div>
                                    <span class="nav-link-text">API</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link-secondary" aria-current="page" href="#!">
                                    <div class="nav-link-icon text-dark-emphasis">
                                        <i class="bi bi-arrow-right-short"></i>
                                    </div>
                                    <span class="nav-link-text">Changelog</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li> --}}
            @endguest

        </ul>
    </div>
</aside>
