@extends('layouts.app')

@section('can', __('user'))
@section('name', __('users'))
@section('title', __('section.title_manage', ['name' => ucfirst($__env->yieldContent('name'))]))

@section('heading')
    <h1 class="h3">@yield('title')</h1>
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
        aria-label="breadcrumb">
        <ol class="breadcrumb m-0 fs-7">
            <li class="breadcrumb-item"><a class="link-primary text-decoration-none"
                    href="{{ route('home') }}">{{ __('section.home') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
        </ol>
    </nav>
@endsection

@section('content')
    {{-- <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">


                <div class="card position-relative overflow-hidden mb-8">
                    <div class="position-absolute bottom-0 left-0 right-0 d-none d-lg-flex flex-row-fluid">
                        <span class="svg-icon svg-icon-full flex-row-fluid svg-icon-dark opacity-3">
                            <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/bg/home-2-bg.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 1200 172"
                                style="enable-background:new 0 0 1200 172;" xml:space="preserve">
                                <path class="st0"
                                    d="M2058,94c0,0,16-14,73-14s153,92,248,92s286-145,456-145s183,34,292,34s131-54,131-54v172H2058V94z">
                                </path>
                                <path class="st0"
                                    d="M0,87c0,0,16-14,73-14s153,92,248,92S607,20,777,20s183,34,292,34s131-54,131-54v172H0V87z">
                                </path>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                    </div>
                    <div class="position-absolute d-flex top-0 right-0 offset-lg-6 col-lg-6 opacity-30 opacity-lg-100">
                        <span class="svg-icon svg-icon-full flex-row-fluid p-10">
                            <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/illustrations/working.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                id="e66d77ca-31e8-442d-a5de-b801817c4280" data-name="Layer 1" width="1024.7" height="671.65"
                                viewBox="0 0 1024.7 671.65">
                                <circle cx="720.55" cy="430.76" r="105"
                                    fill="url(#a374d817-ded2-4154-8f0a-fb69bb0241af)"></circle>
                                <circle cx="720.55" cy="430.76" r="100" fill="#f5f5f5"></circle>
                                <g opacity="0.5">
                                    <path
                                        d="M811,482.47a62.52,62.52,0,0,0-64.27,55.82h-18a3.64,3.64,0,0,0-3.64,3.64v6a3.65,3.65,0,0,0,3.64,3.65h18A62.5,62.5,0,1,0,811,482.47Z"
                                        transform="translate(-87.65 -114.18)"
                                        fill="url(#fd39efba-8078-41b8-857e-e17431406f47)"></path>
                                </g>
                                <path
                                    d="M810.19,486.22a58.75,58.75,0,0,0-60.41,52.47H732.36a2.91,2.91,0,0,0-2.91,2.91v6.67a2.91,2.91,0,0,0,2.91,2.92h17.42a58.75,58.75,0,1,0,60.41-65Z"
                                    transform="translate(-87.65 -114.18)" fill="#fff"></path>
                                <circle cx="720.55" cy="430.76" r="41.25" fill="#795548"></circle>
                                <path d="M829.45,524.94s11.77,18.28,8.4,32.5C837.85,557.44,851.3,535.09,829.45,524.94Z"
                                    transform="translate(-87.65 -114.18)" fill="#fff" opacity="0.2"></path>
                                <circle cx="746.8" cy="453.26" r="3.75" fill="#fff" opacity="0.2"></circle>
                                <rect x="119.09" y="182.63" width="213.27" height="308.72"
                                    transform="translate(-156.47 -56.04) rotate(-12.75)"
                                    fill="url(#b2bf7fa1-65c2-4695-aeca-af8d6fc55ae3)"></rect>
                                <rect x="334.38" y="133.91" width="213.27" height="308.72"
                                    transform="translate(-140.4 -9.72) rotate(-12.75)"
                                    fill="url(#a8abeec4-29f5-4a5c-9a38-56f560b9b0a3)"></rect>
                                <rect x="122.15" y="186.27" width="207.97" height="302.01"
                                    transform="translate(-156.52 -55.94) rotate(-12.75)" fill="#6c63ff"></rect>
                                <rect x="336.06" y="137.86" width="207.97" height="302.01"
                                    transform="translate(-140.56 -9.92) rotate(-12.75)" fill="#f5f5f5"></rect>
                                <rect x="135.55" y="222.61" width="124.88" height="20.81"
                                    transform="translate(-134.2 -64.73) rotate(-12.75)" fill="#f5f5f5"></rect>
                                <rect x="124.12" y="271.86" width="166.5" height="5.2"
                                    transform="translate(-143.12 -61.63) rotate(-12.75)" fill="#f5f5f5"></rect>
                                <rect x="126.8" y="283.7" width="166.5" height="5.2"
                                    transform="translate(-145.67 -60.75) rotate(-12.75)" fill="#f5f5f5"></rect>
                                <rect x="129.48" y="295.54" width="166.5" height="5.2"
                                    transform="translate(-148.21 -59.87) rotate(-12.75)" fill="#f5f5f5"></rect>
                                <rect x="133.23" y="316.95" width="79.78" height="5.2"
                                    transform="translate(-153.92 -68.08) rotate(-12.75)" fill="#f5f5f5"></rect>
                                <rect x="135.76" y="327.46" width="91.92" height="5.2"
                                    transform="translate(-156.02 -65.92) rotate(-12.75)" fill="#f5f5f5"></rect>
                                <rect x="137.52" y="331.07" width="166.5" height="5.2"
                                    transform="translate(-155.86 -57.21) rotate(-12.75)" fill="#f5f5f5"></rect>
                                <rect x="140.2" y="342.91" width="166.5" height="5.2"
                                    transform="translate(-158.4 -56.33) rotate(-12.75)" fill="#f5f5f5"></rect>
                                <rect x="143.03" y="356.09" width="154.36" height="5.2"
                                    transform="translate(-161.39 -56.72) rotate(-12.75)" fill="#f5f5f5"></rect>
                                <rect x="145.56" y="366.59" width="166.5" height="5.2"
                                    transform="translate(-163.5 -54.56) rotate(-12.75)" fill="#f5f5f5"></rect>
                                <rect x="149.22" y="387.24" width="86.72" height="5.2"
                                    transform="translate(-168.95 -62.05) rotate(-12.75)" fill="#f5f5f5"></rect>
                                <rect x="372.13" y="350.43" width="91.92" height="5.2"
                                    transform="translate(-155.26 -13.18) rotate(-12.75)" fill="#6c63ff" opacity="0.3">
                                </rect>
                                <rect x="373.89" y="354.04" width="166.5" height="5.2"
                                    transform="translate(-155.1 -4.47) rotate(-12.75)" fill="#6c63ff" opacity="0.3">
                                </rect>
                                <rect x="376.57" y="365.88" width="166.5" height="5.2"
                                    transform="translate(-157.64 -3.59) rotate(-12.75)" fill="#6c63ff" opacity="0.3">
                                </rect>
                                <rect x="379.4" y="379.06" width="154.36" height="5.2"
                                    transform="translate(-160.63 -3.98) rotate(-12.75)" fill="#6c63ff" opacity="0.3">
                                </rect>
                                <rect x="381.93" y="389.56" width="166.5" height="5.2"
                                    transform="translate(-162.74 -1.82) rotate(-12.75)" fill="#6c63ff" opacity="0.3">
                                </rect>
                                <rect x="385.59" y="410.21" width="86.72" height="5.2"
                                    transform="translate(-168.19 -9.31) rotate(-12.75)" fill="#6c63ff" opacity="0.3">
                                </rect>
                                <rect x="221.62" y="391.43" width="100.59" height="69.38"
                                    transform="translate(-175 -43.64) rotate(-12.75)" fill="#f5f5f5"></rect>
                                <rect x="337.76" y="165.98" width="100.59" height="69.38"
                                    transform="translate(-122.37 -23.57) rotate(-12.75)" fill="#6c63ff" opacity="0.3">
                                </rect>
                                <rect x="433.79" y="236.72" width="100.59" height="69.38"
                                    transform="translate(-135.62 -0.63) rotate(-12.75)" fill="#6c63ff" opacity="0.3">
                                </rect>
                                <rect x="410.68" y="203.79" width="213.27" height="308.72" rx="13.44"
                                    transform="translate(-153.95 8.85) rotate(-12.75)"
                                    fill="url(#af3e6cbd-120e-45f3-bb1d-3967e91ae903)"></rect>
                                <rect x="412.36" y="207.74" width="207.97" height="302.01" rx="13.44"
                                    transform="translate(-154.1 8.65) rotate(-12.75)" fill="#6c63ff"></rect>
                                <g opacity="0.5">
                                    <rect x="220.35" y="542.11" width="3" height="17" fill="#47e6b1"></rect>
                                    <rect x="308" y="656.29" width="3" height="17"
                                        transform="translate(886.64 241.11) rotate(90)" fill="#47e6b1"></rect>
                                </g>
                                <g opacity="0.5">
                                    <rect x="726.55" y="32.76" width="3" height="17" fill="#47e6b1"></rect>
                                    <rect x="814.2" y="146.94" width="3" height="17"
                                        transform="translate(883.49 -774.44) rotate(90)" fill="#47e6b1"></rect>
                                </g>
                                <g opacity="0.5">
                                    <rect x="636.55" y="249.76" width="3" height="17" fill="#47e6b1"></rect>
                                    <rect x="724.2" y="363.94" width="3" height="17"
                                        transform="translate(1010.49 -467.44) rotate(90)" fill="#47e6b1"></rect>
                                </g>
                                <g opacity="0.5">
                                    <rect x="894.15" y="288.76" width="3" height="17" fill="#47e6b1"></rect>
                                    <rect x="981.8" y="402.94" width="3" height="17"
                                        transform="translate(1307.08 -686.03) rotate(90)" fill="#47e6b1"></rect>
                                </g>
                                <path
                                    d="M482.69,654.59a3.68,3.68,0,0,1-2.05-4.44,1.15,1.15,0,0,0,.08-.41h0a1.84,1.84,0,0,0-3.31-1.22h0a2.53,2.53,0,0,0-.2.36,3.67,3.67,0,0,1-4.44,2,1.86,1.86,0,0,0-.41-.08h0a1.84,1.84,0,0,0-1.22,3.31h0a1.88,1.88,0,0,0,.36.21,3.67,3.67,0,0,1,2.05,4.44,1.89,1.89,0,0,0-.08.4h0a1.84,1.84,0,0,0,3.31,1.23h0a1.9,1.9,0,0,0,.2-.37,3.68,3.68,0,0,1,4.45-2,1.77,1.77,0,0,0,.4.08h0a1.84,1.84,0,0,0,1.22-3.31h0A1.62,1.62,0,0,0,482.69,654.59Z"
                                    transform="translate(-87.65 -114.18)" fill="#4d8af0" opacity="0.5"></path>
                                <path
                                    d="M628.89,779.24a3.68,3.68,0,0,1-2-4.44,1.86,1.86,0,0,0,.08-.41h0a1.84,1.84,0,0,0-3.31-1.22h0a1.82,1.82,0,0,0-.2.36,3.66,3.66,0,0,1-4.44,2.05,2,2,0,0,0-.41-.08h0a1.84,1.84,0,0,0-1.22,3.31h0a1.62,1.62,0,0,0,.36.21,3.68,3.68,0,0,1,2,4.44,1.86,1.86,0,0,0-.08.41h0a1.84,1.84,0,0,0,3.31,1.22h0a1.65,1.65,0,0,0,.2-.37,3.67,3.67,0,0,1,4.44-2,2,2,0,0,0,.41.08h0a1.84,1.84,0,0,0,1.22-3.31h0A1.62,1.62,0,0,0,628.89,779.24Z"
                                    transform="translate(-87.65 -114.18)" fill="#4d8af0" opacity="0.5"></path>
                                <path
                                    d="M847.89,348.24a3.68,3.68,0,0,1-2-4.44,1.86,1.86,0,0,0,.08-.41h0a1.84,1.84,0,0,0-3.31-1.22h0a1.82,1.82,0,0,0-.2.36,3.66,3.66,0,0,1-4.44,2.05,2,2,0,0,0-.41-.08h0a1.84,1.84,0,0,0-1.22,3.31h0a1.62,1.62,0,0,0,.36.21,3.68,3.68,0,0,1,2,4.44,1.86,1.86,0,0,0-.08.41h0a1.84,1.84,0,0,0,3.31,1.22h0a1.65,1.65,0,0,0,.2-.37,3.67,3.67,0,0,1,4.44-2,2,2,0,0,0,.41.08h0a1.84,1.84,0,0,0,1.22-3.31h0A1.62,1.62,0,0,0,847.89,348.24Z"
                                    transform="translate(-87.65 -114.18)" fill="#4d8af0" opacity="0.5"></path>
                                <path
                                    d="M999.89,509.24a3.68,3.68,0,0,1-2-4.44,1.86,1.86,0,0,0,.08-.41h0a1.84,1.84,0,0,0-3.31-1.22h0a1.82,1.82,0,0,0-.2.36,3.66,3.66,0,0,1-4.44,2.05,2,2,0,0,0-.41-.08h0a1.84,1.84,0,0,0-1.22,3.31h0a1.62,1.62,0,0,0,.36.21,3.68,3.68,0,0,1,2,4.44,1.86,1.86,0,0,0-.08.41h0a1.84,1.84,0,0,0,3.31,1.22h0a1.65,1.65,0,0,0,.2-.37,3.67,3.67,0,0,1,4.44-2,2,2,0,0,0,.41.08h0a1.84,1.84,0,0,0,1.22-3.31h0A1.62,1.62,0,0,0,999.89,509.24Z"
                                    transform="translate(-87.65 -114.18)" fill="#4d8af0" opacity="0.5"></path>
                                <circle cx="142.35" cy="487.11" r="6" fill="#f55f44" opacity="0.5"></circle>
                                <circle cx="523.55" cy="50.76" r="6" fill="#4d8af0" opacity="0.5"></circle>
                                <circle cx="498.55" cy="489.76" r="6" fill="#47e6b1" opacity="0.5"></circle>
                                <circle cx="844.55" cy="639.76" r="6" fill="#f55f44" opacity="0.5"></circle>
                                <g opacity="0.5">
                                    <path
                                        d="M848.9,203.3h286a6.29,6.29,0,0,1,6.29,6.29V362.51a6.29,6.29,0,0,1-6.29,6.29h-286a6.28,6.28,0,0,1-6.28-6.28V209.58A6.29,6.29,0,0,1,848.9,203.3Z"
                                        transform="translate(346.54 1040.57) rotate(-73.39)"
                                        fill="url(#ad46d94a-2a5e-454e-b2ea-f38dffec9c1a)"></path>
                                </g>
                                <rect x="911.41" y="140.66" width="161.02" height="290.64" rx="13.64"
                                    transform="translate(35.53 -385.86) rotate(16.61)" fill="#fff"></rect>
                                <path
                                    d="M1070.15,165.27a13,13,0,0,1-15.5,7l-53.29-15.91A13.05,13.05,0,0,1,992.2,142L964,133.59a6.13,6.13,0,0,0-7.61,4.11L880.92,390.53a6.11,6.11,0,0,0,4.12,7.6l134.84,40.24a6.11,6.11,0,0,0,7.6-4.11l75.44-252.83a6.1,6.1,0,0,0-4.11-7.6Z"
                                    transform="translate(-87.65 -114.18)" fill="#e0e0e0"></path>
                                <rect x="1010.74" y="156.59" width="35.88" height="2.24" rx="1.12"
                                    transform="translate(-5.15 -389.83) rotate(15.89)" fill="#dbdbdb"></rect>
                                <circle cx="965.68" cy="50.32" r="1.35" fill="#dbdbdb"></circle>
                                <rect x="953.4" y="188.74" width="44" height="38"
                                    transform="translate(2.54 -365.73) rotate(15.4)" fill="#fff"></rect>
                                <rect x="938.79" y="241.77" width="44" height="38"
                                    transform="translate(16.09 -359.95) rotate(15.4)" fill="#6c63ff" opacity="0.3">
                                </rect>
                                <rect x="924.19" y="294.79" width="44" height="38"
                                    transform="translate(29.65 -354.17) rotate(15.4)" fill="#fff"></rect>
                                <rect x="909.58" y="347.82" width="44" height="38"
                                    transform="translate(43.2 -348.39) rotate(15.4)" fill="#3ad29f" opacity="0.3">
                                </rect>
                                <rect x="1008.3" y="214.49" width="58" height="4"
                                    transform="translate(7.08 -381.86) rotate(15.4)" fill="#fff"></rect>
                                <rect x="1005.11" y="226.06" width="58" height="4"
                                    transform="translate(10.04 -380.6) rotate(15.4)" fill="#fff"></rect>
                                <rect x="993.96" y="266.56" width="58" height="4"
                                    transform="translate(20.39 -376.18) rotate(15.4)" fill="#fff"></rect>
                                <rect x="990.77" y="278.12" width="58" height="4"
                                    transform="translate(23.35 -374.92) rotate(15.4)" fill="#fff"></rect>
                                <rect x="979.62" y="318.62" width="58" height="4"
                                    transform="translate(33.7 -370.5) rotate(15.4)" fill="#fff"></rect>
                                <rect x="976.43" y="330.19" width="58" height="4"
                                    transform="translate(36.66 -369.24) rotate(15.4)" fill="#fff"></rect>
                                <rect x="965.28" y="370.68" width="58" height="4"
                                    transform="translate(47.01 -364.83) rotate(15.4)" fill="#fff"></rect>
                                <rect x="962.09" y="382.25" width="58" height="4"
                                    transform="translate(49.97 -363.56) rotate(15.4)" fill="#fff"></rect>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                    </div>
                    <div class="card-body">
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center flex-wrap py-25 px-5">
                                <!--begin::Heading-->
                                <h2 class="text-dark font-weight-bolder mr-12">Frequently asked questions</h2>
                                <!--end::Heading-->
                                <!--begin::Form-->

                                <!--end::Form-->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card mb-8">
                            <div class="card-body">
                                <div class="p-6">
                                    <h2 class="text-dark mb-8">Questions about polls</h2>
                                    <!--begin::Accordion-->
                                    <div class="accordion accordion-light accordion-light-borderless accordion-svg-toggle"
                                        id="accordionExample1">

                                        <div class="card">

                                            <div class="card-header" id="headingOne1">
                                                <div class="card-title" data-toggle="collapse"
                                                    data-target="#collapseOne1" aria-expanded="true"
                                                    aria-controls="collapseOne1" role="button">
                                                    <span class="svg-icon svg-icon-primary">
                                                        <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Navigation/Angle-double-right.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                            height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                                <path
                                                                    d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z"
                                                                    fill="#000000" fill-rule="nonzero"></path>
                                                                <path
                                                                    d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z"
                                                                    fill="#000000" fill-rule="nonzero" opacity="0.3"
                                                                    transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999)">
                                                                </path>
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                    <div class="card-label text-dark pl-4">I did a survey but I didn't get
                                                        paid</div>
                                                </div>
                                            </div>


                                            <div id="collapseOne1" class="collapse" aria-labelledby="headingOne1"
                                                data-parent="#accordionExample1">

                                                <div class="card-body text-dark-50 font-size-lg pl-12">

                                                    Have you been disqualified from one or more surveys?
                                                    <br>
                                                    So you didn't get paid?
                                                    <br>


                                                    It can indeed happen, especially when you're just starting out.
                                                    Institutes need to progressively target your answers to offer you the
                                                    most appropriate surveys. That's why you should always enter accurate
                                                    and honest answers and take the time to respond.
                                                    <br><br>


                                                    The more accurate and honest your answers are, the more time you will
                                                    take, and the more the surveys will be adapted to your profile. So
                                                    gradually you will have fewer and fewer disqualifications, more and more
                                                    surveys, and especially higher and higher salaries!
                                                    <br><br>


                                                    The secret is in seriousness, recurrence and frequency!


                                                </div>
                                            </div>

                                        </div>


                                        <div class="card border-top-0">

                                            <div class="card-header" id="headingTwo1">
                                                <div class="card-title collapsed" data-toggle="collapse"
                                                    data-target="#collapseTwo1" aria-expanded="false"
                                                    aria-controls="collapseTwo1" role="button">
                                                    <span class="svg-icon svg-icon-primary">
                                                        <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Navigation/Angle-double-right.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                            height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                                <path
                                                                    d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z"
                                                                    fill="#000000" fill-rule="nonzero"></path>
                                                                <path
                                                                    d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z"
                                                                    fill="#000000" fill-rule="nonzero" opacity="0.3"
                                                                    transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999)">
                                                                </path>
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                    <div class="card-label text-dark pl-4">I don't see any surveys even
                                                        though I received an invitation</div>
                                                </div>
                                            </div>


                                            <div id="collapseTwo1" class="collapse" aria-labelledby="headingTwo1"
                                                data-parent="#accordionExample1">
                                                <div class="card-body text-dark-50 font-size-lg pl-12">

                                                    We send survey invitations by email. However, places are limited and can
                                                    end quickly. Instead, we will offer you other available surveys
                                                </div>
                                            </div>

                                        </div>


                                        <div class="card border-top-0">

                                            <div class="card-header" id="headingTwo1">
                                                <div class="card-title collapsed" data-toggle="collapse"
                                                    data-target="#collapseTwo4" aria-expanded="false"
                                                    aria-controls="collapseTwo4" role="button">
                                                    <span class="svg-icon svg-icon-primary">
                                                        <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Navigation/Angle-double-right.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                            height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                                <path
                                                                    d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z"
                                                                    fill="#000000" fill-rule="nonzero"></path>
                                                                <path
                                                                    d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z"
                                                                    fill="#000000" fill-rule="nonzero" opacity="0.3"
                                                                    transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999)">
                                                                </path>
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                    <div class="card-label text-dark pl-4">I did a survey but the earnings
                                                        were canceled</div>
                                                </div>
                                            </div>


                                            <div id="collapseTwo4" class="collapse" aria-labelledby="headingTwo1"
                                                data-parent="#accordionExample1">
                                                <div class="card-body text-dark-50 font-size-lg pl-12">

                                                    One of our partners cancelled one or more surveys because they think you
                                                    answered too quickly or incorrectly. As a result, the survey was
                                                    cancelled. No claims can be made.


                                                </div>
                                            </div>

                                        </div>

                                        <div class="card border-top-0">

                                            <div class="card-header" id="headingTwo1">
                                                <div class="card-title collapsed" data-toggle="collapse"
                                                    data-target="#collapseTwo4a" aria-expanded="false"
                                                    aria-controls="collapseTwo4a" role="button">
                                                    <span class="svg-icon svg-icon-primary">
                                                        <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Navigation/Angle-double-right.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                            height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                                <path
                                                                    d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z"
                                                                    fill="#000000" fill-rule="nonzero"></path>
                                                                <path
                                                                    d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z"
                                                                    fill="#000000" fill-rule="nonzero" opacity="0.3"
                                                                    transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999)">
                                                                </path>
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                    <div class="card-label text-dark pl-4">Why am I not selected on some
                                                        polls?</div>
                                                </div>
                                            </div>


                                            <div id="collapseTwo4a" class="collapse" aria-labelledby="headingTwo1"
                                                data-parent="#accordionExample1">
                                                <div class="card-body text-dark-50 font-size-lg pl-12">

                                                    Some survey responses are qualifying or disqualifying. For example, if
                                                    the survey is looking for pet owners to review kibble for dogs and you
                                                    do not own animals, you will be disqualified from the survey.


                                                </div>
                                            </div>

                                        </div>
                                        <div class="card border-top-0">

                                            <div class="card-header" id="headingTwo1">
                                                <div class="card-title collapsed" data-toggle="collapse"
                                                    data-target="#collapseTwo4b" aria-expanded="false"
                                                    aria-controls="collapseTwo4b" role="button">
                                                    <span class="svg-icon svg-icon-primary">
                                                        <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Navigation/Angle-double-right.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                            height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                                <path
                                                                    d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z"
                                                                    fill="#000000" fill-rule="nonzero"></path>
                                                                <path
                                                                    d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z"
                                                                    fill="#000000" fill-rule="nonzero" opacity="0.3"
                                                                    transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999)">
                                                                </path>
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                    <div class="card-label text-dark pl-4">I don't have any polls available
                                                    </div>
                                                </div>
                                            </div>


                                            <div id="collapseTwo4b" class="collapse" aria-labelledby="headingTwo1"
                                                data-parent="#accordionExample1">
                                                <div class="card-body text-dark-50 font-size-lg pl-12">

                                                    Surveys have limited quotas based on profiles (age, gender, location,
                                                    etc.). It is possible that there are temporarily no requests for your
                                                    category, do not hesitate to come back regularly! However, be careful
                                                    about the sincerity of your answers, you may be excluded from a survey
                                                    operator if they detect fraud such as an answer without having read the
                                                    question!


                                                </div>
                                            </div>

                                        </div>
                                        <div class="card border-top-0">

                                            <div class="card-header" id="headingTwo1">
                                                <div class="card-title collapsed" data-toggle="collapse"
                                                    data-target="#collapseTwo4c" aria-expanded="false"
                                                    aria-controls="collapseTwo4c" role="button">
                                                    <span class="svg-icon svg-icon-primary">
                                                        <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Navigation/Angle-double-right.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                            height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                                <path
                                                                    d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z"
                                                                    fill="#000000" fill-rule="nonzero"></path>
                                                                <path
                                                                    d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z"
                                                                    fill="#000000" fill-rule="nonzero" opacity="0.3"
                                                                    transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999)">
                                                                </path>
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                    <div class="card-label text-dark pl-4"> Changer la langue des sondages
                                                    </div>
                                                </div>
                                            </div>


                                            <div id="collapseTwo4c" class="collapse" aria-labelledby="headingTwo1"
                                                data-parent="#accordionExample1">
                                                <div class="card-body text-dark-50 font-size-lg pl-12">

                                                    Unfortunately, it is not possible to change the language of a survey. If
                                                    you feel that you cannot answer correctly because of the language
                                                    offered, leave the survey and choose another survey.


                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <!--end::Accordion-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card mb-8">
                            <div class="card-body">
                                <div class="p-6">
                                    <h2 class="text-dark mb-8">Questions about My Earnings</h2>
                                    <!--begin::Accordion-->
                                    <div class="accordion accordion-light accordion-light-borderless accordion-svg-toggle"
                                        id="accordionExample3">

                                        <div class="card">

                                            <div class="card-header" id="headingOne2">
                                                <div class="card-title" data-toggle="collapse"
                                                    data-target="#collapseOne2" aria-expanded="true"
                                                    aria-controls="collapseOne2" role="button">
                                                    <span class="svg-icon svg-icon-primary">
                                                        <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Navigation/Angle-double-right.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                            height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                                <path
                                                                    d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z"
                                                                    fill="#000000" fill-rule="nonzero"></path>
                                                                <path
                                                                    d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z"
                                                                    fill="#000000" fill-rule="nonzero" opacity="0.3"
                                                                    transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999)">
                                                                </path>
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                    <div class="card-label text-dark pl-4">How do I get rewards?</div>
                                                </div>
                                            </div>


                                            <div id="collapseOne2" class="collapse" aria-labelledby="headingOne2"
                                                data-parent="#accordionExample3">
                                                <div class="card-body text-dark-50 font-size-lg pl-12">Respond to surveys
                                                    seriously and take the time to choose your answers. Survey responses
                                                    have an influence on future surveys that will be offered to you. The
                                                    more seriously you answer, the better your answers will be, the more
                                                    surveys you will have at your disposal to earn as much money as
                                                    possible. If you are very serious and take surveys very seriously, the
                                                    rewards will also be higher!</div>
                                            </div>

                                        </div>

                                        <div class="card">

                                            <div class="card-header" id="headingTwo2">
                                                <div class="card-title collapsed" data-toggle="collapse"
                                                    data-target="#collapseTwo2e" aria-expanded="true"
                                                    aria-controls="collapseTwo2e" role="button">
                                                    <span class="svg-icon svg-icon-primary">
                                                        <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Navigation/Angle-double-right.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                            height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                                <path
                                                                    d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z"
                                                                    fill="#000000" fill-rule="nonzero"></path>
                                                                <path
                                                                    d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z"
                                                                    fill="#000000" fill-rule="nonzero" opacity="0.3"
                                                                    transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999)">
                                                                </path>
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                    <div class="card-label text-dark pl-4">I installed the app but I didn't
                                                        get paid</div>
                                                </div>
                                            </div>


                                            <div id="collapseTwo2e" class="collapse" aria-labelledby="headingTwo2"
                                                data-parent="#accordionExample3">
                                                <div class="card-body text-dark-50 font-size-lg pl-12">If you have
                                                    installed the app, know that your remuneration will be taken into
                                                    account 48 hours later, and on the condition that you use the app.</div>
                                            </div>

                                        </div>


                                        <div class="card">

                                            <div class="card-header" id="headingFour2">
                                                <div class="card-title collapsed" data-toggle="collapse"
                                                    data-target="#collapseFour24" aria-expanded="false"
                                                    aria-controls="#collapseFour24" role="button">
                                                    <span class="svg-icon svg-icon-primary">
                                                        <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Navigation/Angle-double-right.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                            height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                                <path
                                                                    d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z"
                                                                    fill="#000000" fill-rule="nonzero"></path>
                                                                <path
                                                                    d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z"
                                                                    fill="#000000" fill-rule="nonzero" opacity="0.3"
                                                                    transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999)">
                                                                </path>
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                    <div class="card-label text-dark pl-4">I have not received my payment
                                                    </div>
                                                </div>
                                            </div>


                                            <div id="collapseFour24" class="collapse" aria-labelledby="headingFour2"
                                                data-parent="#accordionExample3">
                                                <div class="card-body text-dark-50 font-size-lg pl-12">
                                                    Transfer: If a bank transfer is noted as paid, please contact your bank.
                                                    The transfer must have been initiated using the bank details
                                                    provided.<br><br>


                                                    Amazon: Your code is available in your pickup area, or sent by email
                                                    directly by Amazon depending on your country<br><br>

                                                    Paypal: If a bank transfer is noted as paid, please check your Paypal
                                                    address. The Paypal transfer must have been initiated at the address
                                                    provided. If there is an error in your address, we do not offer to
                                                    return funds

                                                </div>
                                            </div>

                                        </div>
                                        <div class="card">

                                            <div class="card-header" id="headingFour2">
                                                <div class="card-title collapsed" data-toggle="collapse"
                                                    data-target="#collapseFour25" aria-expanded="false"
                                                    aria-controls="#collapseFour25" role="button">
                                                    <span class="svg-icon svg-icon-primary">
                                                        <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Navigation/Angle-double-right.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                            height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                                <path
                                                                    d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z"
                                                                    fill="#000000" fill-rule="nonzero"></path>
                                                                <path
                                                                    d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z"
                                                                    fill="#000000" fill-rule="nonzero" opacity="0.3"
                                                                    transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999)">
                                                                </path>
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                    <div class="card-label text-dark pl-4">How do I withdraw my earnings?
                                                    </div>
                                                </div>
                                            </div>


                                            <div id="collapseFour25" class="collapse" aria-labelledby="headingFour2"
                                                data-parent="#accordionExample3">
                                                <div class="card-body text-dark-50 font-size-lg pl-12">
                                                    We offer paypal transfer, bank transfer, Amazon gift card. You are
                                                    completely free to withdraw your money as you wish! We pay our members
                                                    within 48 hours! You can withdraw your money from 280 000&nbsp;UZS !

                                                </div>
                                            </div>

                                        </div>


                                        <div class="card">

                                            <div class="card-header" id="headingThree255">
                                                <div class="card-title collapsed" data-toggle="collapse"
                                                    data-target="#collapseThree29" aria-expanded="false"
                                                    aria-controls="collapseThree2" role="button">
                                                    <span class="svg-icon svg-icon-primary">
                                                        <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Navigation/Angle-double-right.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                            height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                                <path
                                                                    d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z"
                                                                    fill="#000000" fill-rule="nonzero"></path>
                                                                <path
                                                                    d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z"
                                                                    fill="#000000" fill-rule="nonzero" opacity="0.3"
                                                                    transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999)">
                                                                </path>
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                    <div class="card-label text-dark pl-4">I have not received my payment
                                                    </div>
                                                </div>
                                            </div>


                                            <div id="collapseThree29" class="collapse" aria-labelledby="headingThree255"
                                                data-parent="#accordionExample3">
                                                <div class="card-body text-dark-50 font-size-lg pl-12">You need to get to
                                                    280 000&nbsp;UZS before you can withdraw. Then you can request a Paypal,
                                                    Bank Transfer or Amazon Gift Voucher payment! Good polls!</div>
                                            </div>

                                        </div>

                                    </div>
                                    <!--end::Accordion-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card mb-8">
                            <div class="card-body">
                                <div class="p-6">
                                    <h2 class="text-dark mb-8">General questions</h2>
                                    <!--begin::Accordion-->
                                    <div class="accordion accordion-light accordion-light-borderless accordion-svg-toggle"
                                        id="accordionExample4">

                                        <div class="card">

                                            <div class="card-header" id="headingOne2">
                                                <div class="card-title collapsed" data-toggle="collapse"
                                                    data-target="#collapseD1" aria-expanded="false"
                                                    aria-controls="collapseD1" role="button">
                                                    <span class="svg-icon svg-icon-primary">
                                                        <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Navigation/Angle-double-right.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                            height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                                <path
                                                                    d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z"
                                                                    fill="#000000" fill-rule="nonzero"></path>
                                                                <path
                                                                    d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z"
                                                                    fill="#000000" fill-rule="nonzero" opacity="0.3"
                                                                    transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999)">
                                                                </path>
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                    <div class="card-label text-dark pl-4">Change the language?</div>
                                                </div>
                                            </div>


                                            <div id="collapseD1" class="collapse" aria-labelledby="headingOne2"
                                                data-parent="#accordionExample4" style="">
                                                <div class="card-body text-dark-50 font-size-lg pl-12">At the top right of
                                                    the website, you will find a dropdown list of flags. Simply scroll
                                                    through this list and choose the flag of your country to get the desired
                                                    language. However, you cannot change the language of the surveys
                                                    offered.</div>
                                            </div>

                                        </div>
                                        <div class="card">

                                            <div class="card-header" id="headingOne2">
                                                <div class="card-title collapsed" data-toggle="collapse"
                                                    data-target="#collapseD2" aria-expanded="false"
                                                    aria-controls="collapseD2" role="button">
                                                    <span class="svg-icon svg-icon-primary">
                                                        <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Navigation/Angle-double-right.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                            height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                                <path
                                                                    d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z"
                                                                    fill="#000000" fill-rule="nonzero"></path>
                                                                <path
                                                                    d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z"
                                                                    fill="#000000" fill-rule="nonzero" opacity="0.3"
                                                                    transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999)">
                                                                </path>
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                    <div class="card-label text-dark pl-4">How do I unsubscribe?</div>
                                                </div>
                                            </div>


                                            <div id="collapseD2" class="collapse" aria-labelledby="headingOne2"
                                                data-parent="#accordionExample4" style="">
                                                <div class="card-body text-dark-50 font-size-lg pl-12">

                                                    <a href="#" onclick="del.init()">You can unsubscribe at any time
                                                        by clicking here.</a>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="card">

                                            <div class="card-header" id="headingOne2">
                                                <div class="card-title" data-toggle="collapse" data-target="#collapseD4"
                                                    aria-expanded="true" aria-controls="collapseD4" role="button">
                                                    <span class="svg-icon svg-icon-primary">
                                                        <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Navigation/Angle-double-right.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                            height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                                <path
                                                                    d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z"
                                                                    fill="#000000" fill-rule="nonzero"></path>
                                                                <path
                                                                    d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z"
                                                                    fill="#000000" fill-rule="nonzero" opacity="0.3"
                                                                    transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999)">
                                                                </path>
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                    <div class="card-label text-dark pl-4">How do I change the country?
                                                    </div>
                                                </div>
                                            </div>


                                            <div id="collapseD4" class="collapse" aria-labelledby="headingOne2"
                                                data-parent="#accordionExample4">
                                                <div class="card-body text-dark-50 font-size-lg pl-12">For security
                                                    reasons, we do not give users the option to change their country. You
                                                    can delete your account and create it again in your new country.</div>
                                            </div>

                                        </div>
                                        <div class="card">

                                            <div class="card-header" id="headingOne2">
                                                <div class="card-title" data-toggle="collapse" data-target="#collapseD5"
                                                    aria-expanded="true" aria-controls="collapseD5" role="button">
                                                    <span class="svg-icon svg-icon-primary">
                                                        <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Navigation/Angle-double-right.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                            height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                                <path
                                                                    d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z"
                                                                    fill="#000000" fill-rule="nonzero"></path>
                                                                <path
                                                                    d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z"
                                                                    fill="#000000" fill-rule="nonzero" opacity="0.3"
                                                                    transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999)">
                                                                </path>
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                    <div class="card-label text-dark pl-4">How do I change my email
                                                        address?</div>
                                                </div>
                                            </div>


                                            <div id="collapseD5" class="collapse" aria-labelledby="headingOne2"
                                                data-parent="#accordionExample4">
                                                <div class="card-body text-dark-50 font-size-lg pl-12"><a href="#"
                                                        onclick="changeMail()">You can change your email address by
                                                        clicking here, using an email that is not already registered on the
                                                        site.</a></div>
                                            </div>

                                        </div>
                                        <div class="card">

                                            <div class="card-header" id="headingOne2">
                                                <div class="card-title" data-toggle="collapse" data-target="#collapseD6"
                                                    aria-expanded="true" aria-controls="collapseD6" role="button">
                                                    <span class="svg-icon svg-icon-primary">
                                                        <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Navigation/Angle-double-right.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                            height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                                <path
                                                                    d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z"
                                                                    fill="#000000" fill-rule="nonzero"></path>
                                                                <path
                                                                    d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z"
                                                                    fill="#000000" fill-rule="nonzero" opacity="0.3"
                                                                    transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999)">
                                                                </path>
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                    <div class="card-label text-dark pl-4">How do I change my date of
                                                        birth?</div>
                                                </div>
                                            </div>


                                            <div id="collapseD6" class="collapse" aria-labelledby="headingOne2"
                                                data-parent="#accordionExample4">
                                                <div class="card-body text-dark-50 font-size-lg pl-12">You were already
                                                    born, so it is no longer possible to change your date of birth! ;)</div>
                                            </div>

                                        </div>



                                        <div class="card">

                                            <div class="card-header" id="headingOne2">
                                                <div class="card-title" data-toggle="collapse" data-target="#collapseD3"
                                                    aria-expanded="true" aria-controls="collapseD3" role="button">
                                                    <span class="svg-icon svg-icon-primary">
                                                        <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Navigation/Angle-double-right.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                            height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                                <path
                                                                    d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z"
                                                                    fill="#000000" fill-rule="nonzero"></path>
                                                                <path
                                                                    d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z"
                                                                    fill="#000000" fill-rule="nonzero" opacity="0.3"
                                                                    transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999)">
                                                                </path>
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                    <div class="card-label text-dark pl-4">I couldn't find an answer to my
                                                        question</div>
                                                </div>
                                            </div>


                                            <div id="collapseD3" class="collapse" aria-labelledby="headingOne2"
                                                data-parent="#accordionExample4">
                                                <div class="card-body text-dark-50 font-size-lg pl-12"><a
                                                        href="https://www.surveoo.com/en/contact">Click here for additional
                                                        support</a>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <!--end::Accordion-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div> --}}
    {{-- <div class="gdpr__content">
        <h1>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Sizning ma'lumotlaringiz</font>
            </font>
        </h1>
        <section>
            <h2>
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Qanday maʼlumotlarni biz toʻplaymiz va qayta ishlaymiz?</font>
                </font>
            </h2>
            <ul class="margin-sm">
                <li>
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">avtomatik ravishda olingan ma'lumotlar: Siz ekran hajmi,
                            operatsion tizimi, IP-manzili va boshqa identifikatoringizni o'z ichiga olishi mumkin bo'lgan
                            ilova va / yoki qurilma identifikatsiyasini o'z ichiga olishi mumkin. Tizim sahifasi orqali yoki
                            siz bajarayotgan ilovangiz ko'rsatilgan dastur rozilik orqali yoki sizga rozilik orqali berilgan
                            ruvvat so'rovi orqali ularga kirish.</font>
                    </font>
                </li>
                <li>
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Tadqiqot ma'lumotlari: Anonim javoblardan iborat: siz anonim
                            javoblardan iborat. Hisobot ma'lumotlari ichki, Pollfografik yordam so'zlarni yuklash mumkin.
                        </font>
                    </font>
                </li>
                <li>
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Aloqa ma'lumotlari: Bular har qanday maqsad uchun
                            to'g'ridan-to'g'ri Pollfish bilan muloqot orqali tanlaganingizda bizga taqdim ma'lumotlar.
                        </font>
                    </font>
                </li>
                <li>
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Tekshirish ma'lumotlari: foydalanuvchi bo'lishi mumkin
                            emasligi uchun, biz telefonni davolash usullari-dan foydalanamiz. Sizdan telefon raqamingizni
                            ixtiyoriy taqdim etishingiz mumkin. Keyin siz foydalanishni tuzatishning bir qismi sifatida SMS
                            yuborasiz. Biz telefon raqamingizni har qanday foydalanuvchi bilan baham ko'rmaymiz.</font>
                    </font>
                </li>
            </ul>
            <p class="margin-reset">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Biz AQShning kompaniyasi, GDPRga mos va ishonchlilik
                        qalqongohimiz. Sizning ma'lumotlaringiz bizda asosiy ish joyimizga o'yin.</font>
                </font>
            </p>
        </section>
        <section>
            <h2>
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Maʼlumotlaringizni kim bilan boʻlishamiz?</font>
                </font>
            </h2>
            <ul class="margin-sm">
                <li>
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Tadqiqotchii (IE Bizni o'z anketalarini tarqatish va javob
                            to'plash uchun yuborishni topshirish bo'yicha): Biz tadqiqotchi harakat bilan ko'ramiz.</font>
                    </font>
                </li>
                <li>
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Hamkorlik reklama beruvchilar va hujjat agentlari (masalan,
                            siz ishlatayotgan ilovada Pollfish orqali koʻrsatgan amaldagi reklamalarni taqdim etgan
                            reklamachilar): Reklama ozaro aloqada boʻlganingizda, tegishli maʼlumotlar toʻgʻridan-toʻgʻri va
                            faqat kompaniyalarga tegishli reklama bilan bogʻliq boʻlgan ulanish sozlamalariga toʻgʻri keladi
                            – Pollfish EMAS</font>
                    </font>
                </li>
                <li>
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Mediatsiya platformalar (IE Uchinchi tomonlar Pollfish orqali
                            o'z so'rovlarini o'tkazadilar): Biz vositachilar bilan baham ko'ramiz. Mediatsiya tadqiqotini
                            o'tkazganingizda, barcha tegishli so'rovlar to'g'ridan-to'g'ri va faqat mediat sheriklarimizdan
                            foydalanish shartlariga muvofiq yig'iladi - Pollfish emas.</font>
                    </font>
                </li>
                <li>
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">boshqa, shu ma'lumotlar, ma'lumotlar Marketerlar: biz ular
                            bilan ma'lumotlarni avtomatik ravishdagi ma'lumot va sotsiologik ma'lumotlar bilan bo'lishimiz
                            mumkin.</font>
                    </font>
                </li>
            </ul>
            <p class="margin-reset">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Nb: Agar siz reklama va / yoki qurilma identifikatoringizga
                        kirishga imkoningiz bo'lishi mumkin. 'lsa (biz ularni yuqorida ko'rish mumkin. Pollfish ishlabi
                        o'zlarini sotish yoki marketing kampaniyalari uchun mo'ljallangan.</font>
                </font>
            </p>
        </section>
        <section>
            <h2>
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Maʼlumotlaringizni boshqarish va rad etish masalalari</font>
                </font>
            </h2>
            <p class="margin-reset">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Siz uchun rasmga rad mumkin:</font>
                </font>
            </p>
            <ul class="margin-sm">
                <li>
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">
                            Pollfish-dan siz so'rovlarni tinglash yoki sizga takliflarni yuborish:</font>
                    </font><button type="button" class="btn-link btn-link-inline js-open-website"
                        data-url="https://www.pollfish.com/respondent/opt-out">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">https://www.pollfish.com/respondent/opt-out</font>
                        </font>
                    </button>
                </li>
                <li>
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">
                            Pollfish-dan shaxsiy maʼlumotlaringizni kompaniyalarida paydo bo'lish bilan almashishni</font>
                    </font><button type="button" class="btn-link btn-link-inline js-open-website"
                        data-url="https://www.pollfish.com/do-not-sell-my-personal-information">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">
                                https://www.pollfish.com/do-not-sell-my-personal-information</font>
                        </font>
                    </button>
                </li>
            </ul>
            <div class="divider"></div>
            <ul class="margin-sm" style="padding-left: 14px;">
                <li>
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Mening shaxsiy ma'lumotlarim Xitoydan tashqarida,
                            korxonalarda, AQSh va Gretsiyam qayta tiklanganligini tushunaman.</font>
                    </font>
                </li>
                <li>
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Menga nisbatan, mening shaxsiy ma'lumotlarim Xitoydan
                            tashqarida, shu AQSh va Mediatsiya bo'yicha sheriklar o' ta'minlash mumkin (masalan,
                            vositachilik sheriklari) AQShda o'ziga xos so'rovnomalarni tarqatish bilan bog'liq bo'lishi
                            mumkin. Qo'shimcha ma'lumot uchun siz har qanday vaqtda saylovoldi</font>
                    </font>
                </li>
                <li>
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Bundan, mening shaxsiy ma'lumotlarim Xitoydan tashqarida
                            amalga oshirilishini tushuntirib beraman: AQSh, Kanada, Ruminiya, Isroil, Pokiston va
                            Hindistonda IPGGE va Ipqs.</font>
                    </font>
                </li>
            </ul>
        </section>
        <p>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">
                    Qo'shimcha ma'lumot olish uchun iltimos, parvarish qilish va diqqat bilan Pollfish-ning Maxfiylik
                    siyosatini</font>
            </font><button type="button" class="btn-link btn-link-inline js-open-website"
                data-url="https://www.pollfish.com/terms/respondent">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">https://www.pollfish.com/terms/respondent</font>
                </font>
            </button>
        </p>
        <footer class="gdpr-footer gdpr-footer--inner">
            <div class="gdpr-btn-container">
                <h1 class="js-gdpr-footer">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Sizning tanlovingiz</font>
                    </font>
                </h1>
                <a href="#" id="agree-to-gdpr" class="btn btn-primary btn-lg js-agree-to-gdpr">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Men roziman</font>
                    </font>
                </a>
                <a href="#" id="decline-gdpr" class="js-decline-gdpr btn-link">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Men qatnashmayman</font>
                    </font>
                </a>
            </div>
        </footer>
    </div> --}}

    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">


                <div class="card card-custom">
                    <div class="card-header">
                        <h3 class="card-title">
                            Shaxsiy ma'lumotlar
                        </h3>
                    </div>


                    <!--begin::Form-->
                    <form id="kt_form_1" class="form fv-plugins-bootstrap fv-plugins-framework" novalidate="novalidate">
                        <div class="card-body">

                            <div class="alert alert-custom  alert-danger alert-shadow gutter-b" role="alert">

                                <div class="alert-text">
                                    Siz pul ishlashni boshlashdan bir necha soniya uzoqdasiz, Surveoo pullik so'rovlarni
                                    boshlash imkoniyatiga ega bo'lish uchun quyidagi profilingizni to'ldiring va “Submit”
                                    tugmasini bosing
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <label>Sizning elektron pochta manzilingiz</label>
                                    <p class="form-control-plaintext text-muted">urinboytursunboev@gmail.com</p>
                                </div>
                                <div class="col-sm-6">
                                    <button type="button" class="btn btn-outline-secondary" onclick="sw.init()">Parolni
                                        o'zgartirish</button>

                                </div>

                            </div>
                            <div class="form-group row fv-plugins-icon-container">
                                <div class="col-sm-6">
                                    <label>Sizning ismingiz</label>
                                    <input type="text" name="lastname" class="form-control" value="Tursunboev"
                                        placeholder="Familiya">
                                    <div class="fv-plugins-message-container"></div>
                                </div>
                                <div class="col-sm-6">
                                    <label>Sizning ismingiz</label>
                                    <input type="text" name="firstname" class="form-control" value="Urinboy"
                                        placeholder="Ism">
                                    <div class="fv-plugins-message-container"></div>
                                </div>
                            </div>
                            <div class="form-group row fv-plugins-icon-container">
                                <div class="col-sm-6">
                                    <label>Sizning manzilingiz</label>
                                    <input type="text" name="address" class="form-control" value=""
                                        placeholder="Manzili">
                                    <div class="fv-plugins-message-container"></div>
                                </div>
                                <div class="col-sm-6">

                                    <label>Sizning shaharingiz</label>
                                    <input type="text" name="town" class="form-control" value=""
                                        placeholder="Shahar">
                                    <div class="fv-plugins-message-container"></div>
                                </div>
                            </div>
                            <div class="form-group row fv-plugins-icon-container">
                                <div class="col-lg-4">
                                    <label>Sizning pochta indeksingiz</label>
                                    <input type="text" name="zipcode" class="form-control" value=""
                                        placeholder="Pochta indeksi">
                                    <div class="fv-plugins-message-container"></div>
                                </div>
                                <div class="col-lg-4">


                                    <label>Mamlakatingiz</label>
                                    <div class="input-icon input-icon-right">

                                        <p class="form-control-plaintext text-muted">Oʻzbekiston</p>
                                    </div>

                                </div>
                                <div class="col-lg-4">
                                    <label for="example-date-input" class="">Sizning tug'ilgan sanangiz:</label>
                                    <div class="input-icon input-icon-right">

                                        <p class="form-control-plaintext text-muted">1996-05-10</p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <label for="exampleSelect1">Sizning jinsingiz</label>
                                    <select class="form-control" id="exampleSelect1" name="gender">
                                        <option value="1">Ayol</option>
                                        <option value="0" selected="">Xomme</option>
                                    </select>
                                </div>

                            </div>
                            <div class="form-group row">

                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex flex-row  justify-content-end align-items-center">
                                <button type="submit" class="btn btn-primary mr-2">Mening ma'lumotimni saqlang</button>


                            </div>
                        </div>
                        <div></div><input type="hidden">
                    </form>
                    <!--end::Form-->
                </div>
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
@endsection
