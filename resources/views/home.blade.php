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
