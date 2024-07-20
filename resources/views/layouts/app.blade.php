<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="application-name" content="{{ config('app.name') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>
        {{ View::hasSection('title') ? config('app.name') . ' - ' . $__env->yieldContent('title') : config('app.name', 'Laravel') }}
    </title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="UrinboyDev.uz">

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
        .breadcrumb-item a {
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
            <x-nav />
        </header>

        <!-- Main -->
        <main id="main">

            <!-- Section - Bootstrap Brain Component -->
            <!-- Breadcrumb -->
            <section class="py-3 py-md-4 py-xl-5 bg-light">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            @yield('heading')
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section - Bootstrap Brain Component -->
            <section class="pb-3 pb-md-4 pb-xl-5 bg-light">
                <div class="container">
                    @yield('content')
                </div>
            </section>
        </main>

        <x-aside />

        <!-- Footer -->
        <footer style="background-color: #f8f9fa; padding: 20px; text-align: center;">
            <p>&copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
            <p>
                <a href="/privacy-policy" style="margin-right: 15px; text-decoration: none; color: #333;">Privacy
                    Policy</a>
                <a href="/terms-of-service" style="margin-right: 15px; text-decoration: none; color: #333;">Terms of
                    Service</a>
                <a href="{{ route('contact') }}"
                    style="text-decoration: none; color: #333;">{{ __('Contact Us') }}</a>
            </p>
        </footer>
    </div>
    <script src="{{ asset('dist/plugins/fontawesome/js/all.min.js') }}"></script>
</body>

</html>
