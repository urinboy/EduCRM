@extends('layouts.app')

@section('title', __('Dashboard'))

@section('heading')
    <div class="row mb-3">
        <div class="col-lg-6 col-sm-12 d-flex align-items-center">
            <h2 class="mb-0">@yield('title')</h2>
        </div>
        <div class="col-lg-6 col-sm-12 d-flex justify-content-end">
            @canany(['role-create', 'role-edit', 'role-delete'])
                <a class="btn mx-1 my-2 btn-primary" href="{{ route('roles.index') }}">
                    <i class="bi bi-person-fill-gear"></i> {{ __("Manage Roles") }}</a>
            @endcanany
            @canany(['user-create', 'user-edit', 'user-delete'])
                <a class="btn mx-1 my-2 btn-success" href="{{ route('users.index') }}">
                    <i class="bi bi-people"></i> {{ __("Manage Users") }}</a>
            @endcanany
            @canany(['product-create', 'product-edit', 'product-delete'])
                <a class="btn mx-1 my-2 btn-warning" href="{{ route('products.index') }}">
                    <i class="bi bi-bag"></i> {{ __("Manage Products") }}</a>
            @endcanany
        </div>
    </div>
    <div class="row">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
            aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/home">{{ __('Home') }}</a></li>
                <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
            </ol>
        </nav>
    </div>
@endsection

@section('content')
<div class="row gy-3 gy-md-4 my-3">
    <div class="col-12 col-sm-6 col-xl-3">
        <div class="card widget-card border-light shadow-sm bg-white">
            <div class="card-body p-4">
                <div class="row">
                    <div class="col-8">
                        <h5 class="card-title widget-card-title mb-3">Sales</h5>
                        <h4 class="card-subtitle text-body-secondary m-0">$6,820</h4>
                    </div>
                    <div class="col-4">
                        <div class="d-flex justify-content-end">
                            <div
                                class="lh-1 text-white bg-primary rounded-circle p-3 d-flex align-items-center justify-content-center">
                                <i class="bi bi-truck fs-4"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex align-items-center mt-3">
                            <span
                                class="lh-1 me-3 bg-danger-subtle text-danger rounded-circle p-1 d-flex align-items-center justify-content-center">
                                <i class="bi bi-arrow-right-short bsb-rotate-45"></i>
                            </span>
                            <div>
                                <p class="fs-7 mb-0">-9%</p>
                                <p class="fs-7 mb-0 text-secondary">since last week</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-xl-3">
        <div class="card widget-card border-light shadow-sm bg-white">
            <div class="card-body p-4">
                <div class="row">
                    <div class="col-8">
                        <h5 class="card-title widget-card-title mb-3">Earnings</h5>
                        <h4 class="card-subtitle text-body-secondary m-0">$21,900</h4>
                    </div>
                    <div class="col-4">
                        <div class="d-flex justify-content-end">
                            <div
                                class="lh-1 text-white bg-primary rounded-circle p-3 d-flex align-items-center justify-content-center">
                                <i class="bi bi-currency-dollar fs-4"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex align-items-center mt-3">
                            <span
                                class="lh-1 me-3 bg-success-subtle text-success rounded-circle p-1 d-flex align-items-center justify-content-center">
                                <i class="bi bi-arrow-right-short bsb-rotate-n45"></i>
                            </span>
                            <div>
                                <p class="fs-7 mb-0">+26%</p>
                                <p class="fs-7 mb-0 text-secondary">since last week</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-xl-3">
        <div class="card widget-card border-light shadow-sm bg-white">
            <div class="card-body p-4">
                <div class="row">
                    <div class="col-8">
                        <h5 class="card-title widget-card-title mb-3">Visitors</h5>
                        <h4 class="card-subtitle text-body-secondary m-0">3,764</h4>
                    </div>
                    <div class="col-4">
                        <div class="d-flex justify-content-end">
                            <div
                                class="lh-1 text-white bg-primary rounded-circle p-3 d-flex align-items-center justify-content-center">
                                <i class="bi bi-person fs-4"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex align-items-center mt-3">
                            <span
                                class="lh-1 me-3 bg-success-subtle text-success rounded-circle p-1 d-flex align-items-center justify-content-center">
                                <i class="bi bi-arrow-right-short bsb-rotate-n45"></i>
                            </span>
                            <div>
                                <p class="fs-7 mb-0">+69%</p>
                                <p class="fs-7 mb-0 text-secondary">since last week</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-xl-3">
        <div class="card widget-card border-light shadow-sm bg-white">
            <div class="card-body p-4">
                <div class="row">
                    <div class="col-8">
                        <h5 class="card-title widget-card-title mb-3">Orders</h5>
                        <h4 class="card-subtitle text-body-secondary m-0">786</h4>
                    </div>
                    <div class="col-4">
                        <div class="d-flex justify-content-end">
                            <div
                                class="lh-1 text-white bg-primary rounded-circle p-3 d-flex align-items-center justify-content-center">
                                <i class="bi bi-cart fs-4"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex align-items-center mt-3">
                            <span
                                class="lh-1 me-3 bg-danger-subtle text-danger rounded-circle p-1 d-flex align-items-center justify-content-center">
                                <i class="bi bi-arrow-right-short bsb-rotate-45"></i>
                            </span>
                            <div>
                                <p class="fs-7 mb-0">-21%</p>
                                <p class="fs-7 mb-0 text-secondary">since last week</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="d-flex justify-content-center">
    <div class="card shadow bg-white w-100">

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            {{ __('You are logged in!') }}
        </div>
    </div>
</div>
@endsection
