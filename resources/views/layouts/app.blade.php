<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="application-name" content="{{ config('app.name') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>{{ View::hasSection('title') ? config('app.name') . ' - ' . $__env->yieldContent('title') : config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('dist/plugins/fontawesome/css/all.min.css') }}">
    <link rel="icon" type="image/svg+xml"
        href="data:image/svg+xml,%3Csvg viewBox='0 -.11376601 49.74245785 51.31690859' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='m49.626 11.564a.809.809 0 0 1 .028.209v10.972a.8.8 0 0 1 -.402.694l-9.209 5.302v10.509c0 .286-.152.55-.4.694l-19.223 11.066c-.044.025-.092.041-.14.058-.018.006-.035.017-.054.022a.805.805 0 0 1 -.41 0c-.022-.006-.042-.018-.063-.026-.044-.016-.09-.03-.132-.054l-19.219-11.066a.801.801 0 0 1 -.402-.694v-32.916c0-.072.01-.142.028-.21.006-.023.02-.044.028-.067.015-.042.029-.085.051-.124.015-.026.037-.047.055-.071.023-.032.044-.065.071-.093.023-.023.053-.04.079-.06.029-.024.055-.05.088-.069h.001l9.61-5.533a.802.802 0 0 1 .8 0l9.61 5.533h.002c.032.02.059.045.088.068.026.02.055.038.078.06.028.029.048.062.072.094.017.024.04.045.054.071.023.04.036.082.052.124.008.023.022.044.028.068a.809.809 0 0 1 .028.209v20.559l8.008-4.611v-10.51c0-.07.01-.141.028-.208.007-.024.02-.045.028-.068.016-.042.03-.085.052-.124.015-.026.037-.047.054-.071.024-.032.044-.065.072-.093.023-.023.052-.04.078-.06.03-.024.056-.05.088-.069h.001l9.611-5.533a.801.801 0 0 1 .8 0l9.61 5.533c.034.02.06.045.09.068.025.02.054.038.077.06.028.029.048.062.072.094.018.024.04.045.054.071.023.039.036.082.052.124.009.023.022.044.028.068zm-1.574 10.718v-9.124l-3.363 1.936-4.646 2.675v9.124l8.01-4.611zm-9.61 16.505v-9.13l-4.57 2.61-13.05 7.448v9.216zm-36.84-31.068v31.068l17.618 10.143v-9.214l-9.204-5.209-.003-.002-.004-.002c-.031-.018-.057-.044-.086-.066-.025-.02-.054-.036-.076-.058l-.002-.003c-.026-.025-.044-.056-.066-.084-.02-.027-.044-.05-.06-.078l-.001-.003c-.018-.03-.029-.066-.042-.1-.013-.03-.03-.058-.038-.09v-.001c-.01-.038-.012-.078-.016-.117-.004-.03-.012-.06-.012-.09v-21.483l-4.645-2.676-3.363-1.934zm8.81-5.994-8.007 4.609 8.005 4.609 8.006-4.61-8.006-4.608zm4.164 28.764 4.645-2.674v-20.096l-3.363 1.936-4.646 2.675v20.096zm24.667-23.325-8.006 4.609 8.006 4.609 8.005-4.61zm-.801 10.605-4.646-2.675-3.363-1.936v9.124l4.645 2.674 3.364 1.937zm-18.422 20.561 11.743-6.704 5.87-3.35-8-4.606-9.211 5.303-8.395 4.833z' fill='%23ff2d20'/%3E%3C/svg%3E" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet"
        href="https://unpkg.com/bs-brain@2.0.4/components/sidebars/sidebar-1/assets/css/sidebar-1.css">
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/navbars/navbar-3/assets/css/navbar-3.css">
    <style>
        .breadcrumb-item a{
            text-decoration: none;
            font-weight: bold;
        }
    </style>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <!-- Header -->
        <header id="header">
            {{-- <nav class="navbar navbar-expand-md bg-body-tertiary bsb-navbar-3">
                <div class="container">
                  <ul class="navbar-nav">
                    <li class="nav-item me-3">
                      <a class="nav-link" href="#!" data-bs-toggle="offcanvas" data-bs-target="#bsbSidebar1" aria-controls="bsbSidebar1">
                        <i class="bi-filter-left fs-3 lh-1"></i>
                      </a>
                    </li>
                  </ul>
                  <a class="navbar-brand" href="#!">
                    <img src="https://bootstrapbrain.com/demo/components/navbars/navbar-3/#!" class="img-fluid" alt="BootstrapBrain Logo" width="135" height="44">
                  </a>
                  <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#bsbNavbar" aria-controls="bsbNavbar" aria-label="Toggle Navigation">
                    <i class="bi bi-three-dots"></i>
                  </button>
                  <div class="collapse navbar-collapse" id="bsbNavbar">
                    <ul class="navbar-nav bsb-dropdown-menu-responsive ms-auto align-items-center">
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle bsb-dropdown-toggle-caret-disable" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <span class="position-relative pt-1">
                            <i class="bi bi-search"></i>
                          </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-md-end bsb-dropdown-animation bsb-fadeIn">
                          <form class="row g-1 px-3 py-2 align-items-center">
                            <div class="col-8">
                              <label class="visually-hidden" for="inputSearchNavbar">Search</label>
                              <input type="text" class="form-control" id="inputSearchNavbar">
                            </div>
                            <div class="col-4">
                              <button type="submit" class="btn btn-primary">Search</button>
                            </div>
                          </form>
                        </div>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle bsb-dropdown-toggle-caret-disable" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <span class="position-relative pt-1">
                            <i class="bi bi-globe"></i>
                          </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-md-end bsb-dropdown-sm bsb-dropdown-animation bsb-fadeIn">
                          <div>
                            <h6 class="dropdown-header fs-7 text-center">Multilingual</h6>
                          </div>
                          <div>
                            <hr class="dropdown-divider mb-0">
                          </div>
                          <div class="list-group list-group-flush">
                            <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                              <div class="row g-0 align-items-center">
                                <div class="col-2">
                                  <img src="./assets/img/translation/flag-img-1.svg" class="img-fluid rounded-pill" alt="Arabic">
                                </div>
                                <div class="col-10">
                                  <div class="ps-3">
                                    <div class="fs-7">Arabic</div>
                                  </div>
                                </div>
                              </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                              <div class="row g-0 align-items-center">
                                <div class="col-2">
                                  <img src="./assets/img/translation/flag-img-2.svg" class="img-fluid rounded-pill" alt="Chinese">
                                </div>
                                <div class="col-10">
                                  <div class="ps-3">
                                    <div class="fs-7">Chinese</div>
                                  </div>
                                </div>
                              </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                              <div class="row g-0 align-items-center">
                                <div class="col-2">
                                  <img src="./assets/img/translation/flag-img-3.svg" class="img-fluid rounded-pill" alt="English">
                                </div>
                                <div class="col-10">
                                  <div class="ps-3">
                                    <div class="fs-7">English</div>
                                  </div>
                                </div>
                              </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                              <div class="row g-0 align-items-center">
                                <div class="col-2">
                                  <img src="./assets/img/translation/flag-img-4.svg" class="img-fluid rounded-pill" alt="French">
                                </div>
                                <div class="col-10">
                                  <div class="ps-3">
                                    <div class="fs-7">French</div>
                                  </div>
                                </div>
                              </div>
                            </a>
                          </div>
                          <div>
                            <hr class="dropdown-divider mt-0">
                          </div>
                          <div>
                            <a class="dropdown-item fs-7 text-center" href="#">See All Languages</a>
                          </div>
                        </div>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle bsb-dropdown-toggle-caret-disable" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <span class="position-relative pt-1">
                            <i class="bi bi-chat-left"></i>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary">
                              9
                              <span class="visually-hidden">New Chats</span>
                            </span>
                          </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-md-end bsb-dropdown-animation bsb-fadeIn">
                          <div>
                            <h6 class="dropdown-header fs-7 text-center">9 New Messages</h6>
                          </div>
                          <div>
                            <hr class="dropdown-divider mb-0">
                          </div>
                          <div class="list-group list-group-flush">
                            <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                              <div class="row g-0 align-items-center">
                                <div class="col-2">
                                  <img src="https://new.urinboydev.uz/static/media/udev.bee0942b3e14218411dd.png" class="img-fluid rounded-circle" alt="Luna John">
                                </div>
                                <div class="col-10">
                                  <div class="ps-3">
                                    <div class="text-dark">Luna John</div>
                                    <div class="text-secondary mt-1 fs-7">Hello, I'm having trouble with my account.</div>
                                    <div class="text-secondary mt-1 fs-7">15m ago</div>
                                  </div>
                                </div>
                              </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                              <div class="row g-0 align-items-center">
                                <div class="col-2">
                                  <img src="https://new.urinboydev.uz/static/media/udev.bee0942b3e14218411dd.png" class="img-fluid rounded-circle" alt="Mark Smith">
                                </div>
                                <div class="col-10">
                                  <div class="ps-3">
                                    <div class="text-dark">Mark Smith</div>
                                    <div class="text-secondary mt-1 fs-7">Hi, I'm not able to change my password.</div>
                                    <div class="text-secondary mt-1 fs-7">23m ago</div>
                                  </div>
                                </div>
                              </div>
                            </a>
                          </div>
                          <div>
                            <hr class="dropdown-divider mt-0">
                          </div>
                          <div>
                            <a class="dropdown-item fs-7 text-center" href="#">See All Messages</a>
                          </div>
                        </div>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle bsb-dropdown-toggle-caret-disable" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <span class="position-relative pt-1">
                            <i class="bi bi-bell"></i>
                            <span class="p-1 bg-danger border border-light rounded-circle position-absolute top-0 start-100 translate-middle">
                              <span class="visually-hidden">New Notifications</span>
                            </span>
                          </span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-md-end bsb-dropdown-animation bsb-fadeIn">
                          <li>
                            <h6 class="dropdown-header fs-7 text-center">18 Notifications</h6>
                          </li>
                          <li>
                            <hr class="dropdown-divider">
                          </li>
                          <li>
                            <a class="dropdown-item d-flex align-items-center" href="#!">
                              <span>
                                <i class="bi bi-envelope-fill me-2"></i>
                                <span class="fs-7">New Messages</span>
                              </span>
                              <span class="fs-7 ms-auto text-secondary">5 mins</span>
                            </a>
                          </li>
                          <li>
                            <hr class="dropdown-divider">
                          </li>
                          <li>
                            <a class="dropdown-item d-flex align-items-center" href="#!">
                              <span>
                                <i class="bi bi-person-fill me-2"></i>
                                <span class="fs-7">Friend Requests</span>
                              </span>
                              <span class="fs-7 ms-auto text-secondary">17 hours</span>
                            </a>
                          </li>
                          <li>
                            <hr class="dropdown-divider">
                          </li>
                          <li>
                            <a class="dropdown-item d-flex align-items-center" href="#!">
                              <span>
                                <i class="bi bi-file-earmark-fill me-2"></i>
                                <span class="fs-7">New Reports</span>
                              </span>
                              <span class="fs-7 ms-auto text-secondary">3 days</span>
                            </a>
                          </li>
                          <li>
                            <hr class="dropdown-divider">
                          </li>
                          <li><a class="dropdown-item fs-7 text-center" href="#">See All Notifications</a></li>
                        </ul>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle bsb-dropdown-toggle-caret-disable" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <img src="./assets/img/profile/profile-img-1.jpg" width="35" height="35" class="img-fluid rounded-circle" alt="Luke Reeves">
                        </a>
                        <ul class="dropdown-menu dropdown-menu-md-end bsb-dropdown-animation bsb-fadeIn">
                          <li>
                            <h6 class="dropdown-header fs-7 text-center">Welcome, Luke Reeves</h6>
                          </li>
                          <li>
                            <hr class="dropdown-divider">
                          </li>
                          <li>
                            <a href="#" class="dropdown-item" aria-current="true">
                              <div class="row g-0 align-items-center">
                                <div class="col-3">
                                  <img src="./assets/img/profile/profile-img-1.jpg" width="55" height="55" class="img-fluid rounded-circle" alt="Luke Reeves">
                                </div>
                                <div class="col-9">
                                  <div class="ps-3">
                                    <div class="text-secondary mt-1 fs-7">Premium Account</div>
                                    <div class="text-secondary mt-1 fs-7">email@domain.com</div>
                                  </div>
                                </div>
                              </div>
                            </a>
                          </li>
                          <li>
                            <hr class="dropdown-divider">
                          </li>
                          <li>
                            <a class="dropdown-item" href="#!">
                              <span>
                                <i class="bi bi-person-fill me-2"></i>
                                <span class="fs-7">View Profile</span>
                              </span>
                            </a>
                          </li>
                          <li>
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
                          </li>
                          <li>
                            <hr class="dropdown-divider">
                          </li>
                          <li>
                            <a class="dropdown-item text-center" href="#!">
                              <span>
                                <span class="fs-7">Log Out</span>
                              </span>
                            </a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
            </nav> --}}

            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <a class="nav-link" href="#!" data-bs-toggle="offcanvas" data-bs-target="#bsbSidebar1"
                        aria-controls="bsbSidebar1">
                        <i class="bi bi-grid fs-3 lh-1"></i>
                    </a>
                    <a class="navbar-brand" href="/" style="margin-left: 10px">
                        {{ config('app.name', 'Laravel') }}
                    </a>

                    <div class="dropdown">
                        <button class="btn btn-white dropdown-toggle" id="languageDropdown" type="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('/dist/flags/' . app()->getLocale() . '.png') }}" class="bd-h-lang-icon"
                                alt="" width="25px">
                            <span class="fw-bold">{{ strtoupper(app()->getLocale()) }}</span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="languageDropdown">
                            @foreach (App\Models\Language::all() as $language)
                                <li>
                                    <form action="{{ route('locale.change') }}" method="POST" class="p-0 m-0">
                                        @csrf
                                        <button type="submit" name="locale" value="{{ $language->code }}"
                                            class="dropdown-item d-flex align-items-center">
                                            <img src="{{ asset('/dist/flags/' . $language->code . '.png') }}"
                                                alt="" width="25px" class="me-2">
                                            {{ $language->name }}
                                        </button>
                                    </form>
                                </li>
                            @endforeach
                        </ul>
                    </div>


                    {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto"></ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto pt-2"></ul>
                    </div> --}}
                </div>
            </nav>
            {{-- <nav class="navbar navbar-expand-sm bg-body-tertiary">
                <div class="container">
                    <a class="navbar-brand d-sm-none" href="/">
                        {{ config('app.name') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#bsbNavbar"
                        aria-controls="bsbNavbar" aria-label="Toggle Navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="bsbNavbar" aria-labelledby="bsbNavbarLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="bsbNavbarLabel">{{ __("Menu") }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav">
                                <li class="nav-item me-3">
                                    <a class="nav-link" href="#!" data-bs-toggle="offcanvas"
                                        data-bs-target="#bsbSidebar1" aria-controls="bsbSidebar1">
                                        <i class="bi-filter-left fs-3 lh-1"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="/home">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="#!">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="#!">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav> --}}
        </header>

        <!-- Main -->
        <div id="main-demo">
            <section class="my-3 my-md-4">
                <div class="container">
                    @yield('heading')
                    @yield('content')
                </div>
            </section>
        </div>

        @include('layouts.aside')

        <!-- Footer -->
        <footer style="background-color: #f8f9fa; padding: 20px; text-align: center;">
            <p>&copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
            <p>
                <a href="/privacy-policy" style="margin-right: 15px; text-decoration: none; color: #333;">Privacy
                    Policy</a>
                <a href="/terms-of-service" style="margin-right: 15px; text-decoration: none; color: #333;">Terms of
                    Service</a>
                <a href="{{ route('contact') }}" style="text-decoration: none; color: #333;">{{ __("Contact Us") }}</a>
            </p>
        </footer>
    </div>
    <script src="{{ asset('dist/plugins/fontawesome/js/all.min.js') }}"></script>
</body>

</html>
