@extends('layouts.app')

@section('title', __('Terms of Services'))

@section('heading')
    <h1 class="h3">@yield('title')</h1>
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb m-0 fs-7">
            <li class="breadcrumb-item"><a class="link-primary text-decoration-none" href="{{ route('home') }}">{{ __('Home') }}</a></li>
            {{-- <li class="breadcrumb-item">Pages</li> --}}
            <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
        </ol>
    </nav>
@endsection

@section('content')
    <div class="row">
        <div id="primary" class="content-area col-md-8 mx-auto">
            <div id="content" class="site-content" role="main">



                <article id="post-108" class="post-108 page type-page status-publish hentry">
                    <header class="entry-header">
                        <h1 class="entry-title">@yield('title')</h1>
                    </header><!-- .entry-header -->

                    <div class="entry-content">
                        <p>Below are our Terms of Service, which outline a lot of legal goodies, but the bottom line is it’s
                            our aim to always take care of both you, as a customer, or as a seller on our platform. We’ve
                            included many of these terms to legally protect ourselves, but if you have an issue, always feel
                            free to email us at themes@getbootstrap.com and we’ll do our best to resolve it in a fair and
                            timely fashion.</p>
                        <ol>
                            <li><strong>Application of Terms</strong>
                                <ol>
                                    <li>By visiting and/or taking any action on Bootstrap Themes, you confirm that you are
                                        in agreement with and bound by the terms outlined below. These terms apply to the
                                        website, emails, or any other communication.</li>
                                </ol>
                            </li>
                            <li><strong>Themes</strong>
                                <ol>
                                    <li>All products are 100% digital and delivered electronically to your email.</li>
                                    <li>Bootstrap Themes is not responsible for you not receiving your theme if you fail to
                                        provide a valid email or for technical issues outside our control.</li>
                                </ol>
                            </li>
                            <li><strong>Security &amp; Payments</strong>
                                <ol>
                                    <li>All payments are processed securely through PayPal or Stripe. Bootstrap Themes does
                                        not directly process payments through the website.</li>
                                </ol>
                            </li>
                            <li><strong>Refunds</strong>
                                <ol>
                                    <li>You have 14 days to evaluate your purchase. If your purchase fails to meet
                                        expectations set by the seller, or is critically flawed in some way, contact
                                        Bootstrap Themes and we will issue a full refund pending a review.</li>
                                    <li>The issue of refunds is at the complete discretion of Bootstrap Themes.</li>
                                </ol>
                            </li>
                            <li><strong>Support</strong>
                                <ol>
                                    <li>Support for a purchase is governed by the usage license you purchase.</li>
                                </ol>
                            </li>
                            <li><strong>Ownership</strong>
                                <ol>
                                    <li>Ownership of the product is governed by the usage licenses.</li>
                                </ol>
                            </li>
                            <li><strong>Membership &amp; Content</strong>
                                <ol>
                                    <li>Membership is a benefit for those who follow our terms and policies. We may at any
                                        time suspend or terminate your account.</li>
                                    <li>We can view and/or remove any content for any reason at our own discretion. This
                                        will typically only be exercised for issues needing immediate resolution, such as,
                                        but not limited to, the posting of unauthorized content, offensive content, illegal
                                        content, or anything breaching anyone else’s rights.</li>
                                </ol>
                            </li>
                            <li><strong>Liability</strong>
                                <ol>
                                    <li>You indemnify us against all losses, costs (including legal costs), expenses,
                                        demands or liability that we incur arising out of, or in connection with, any claims
                                        against us relating to your use of Bootstrap Themes.</li>
                                </ol>
                            </li>
                            <li><strong>Requesting, Modifying or Deleting Your Data (GDPR)</strong>
                                <ol>
                                    <li>We are a small operation, but we work hard to make sure your data remains safe and
                                        we only collect what is needed to provide our services. If you want to request an
                                        export of your data, a modification to any data we have related to your account, or
                                        delete of all data permanently, please email themes@getbootstrap.com and we’ll
                                        complete your request in a timely manner.</li>
                                </ol>
                            </li>
                            <li><strong>Changes to terms</strong>
                                <ol>
                                    <li>If we change our terms of use we will post those changes on this page.</li>
                                </ol>
                            </li>
                        </ol>
                    </div><!-- .entry-content -->
                </article><!-- #post-108 -->



            </div><!-- #content .site-content -->
        </div><!-- #primary .content-area -->

    </div>
@endsection

