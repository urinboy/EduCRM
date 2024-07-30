@extends('layouts.app')

@section('can', __('organization'))
@section('name', 'teachers')
@section('title', __('section.title_create', ['name' => lcfirst($__env->yieldContent('can'))]))

@section('heading')
    <h1 class="h3">@yield('title')</h1>
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
        aria-label="breadcrumb">
        <ol class="breadcrumb m-0 fs-7">
            <li class="breadcrumb-item"><a class="link-primary text-decoration-none"
                    href="{{ route('home') }}">{{ __('section.home') }}</a></li>
            <li class="breadcrumb-item"><a
                    href="{{ route($__env->yieldContent('name') . '.index') }}">{{ ucfirst(__($__env->yieldContent('name'))) }}</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
        </ol>
    </nav>
@endsection

@section('content')

    @session('success')
        <div class="alert alert-success" role="alert" id="success-alert">
            {{ $value }}
        </div>
    @endsession

    @session('error')
        <div class="alert alert-danger" role="alert" id="error-alert">
            {{ $value }}
        </div>
    @endsession

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            {{ __('message.oops') }}
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row justify-content-center">
        <div class="col-12 col-md-3">
            <ul class="nav flex-column nav-pills mb-3 custom-card  bg-white  show  p-2 rounded">
                <li class="nav-item" role="presentation">
                    <a class="nav-link border rounded m-1 disabled">
                        <i class="bi bi-person-fill-add"></i>
                        {{ __('Create Teacher') }}
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link border rounded m-1 disabled">
                        <i class="bi bi-person-vcard-fill"></i>
                        {{ __('Add Account Info') }}
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link border rounded m-1 disabled">
                        <i class="bi bi-geo-alt-fill"></i>
                        {{ __('Add Address') }}
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link border rounded m-1 active">
                        <i class="bi bi-person-fill-gear"></i>
                        {{ __('Add Organization') }}
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link border rounded m-1">
                        <i class="bi bi-person-video3"></i>
                        {{ __('Add Teacher Info') }}
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link border rounded m-1">
                        <i class="bi bi-person-rolodex"></i>
                        {{ __('Coplate') }}
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-md-9">
            <div class="row">
                <div class="col-12">
                    <div class="card bg-white custom-card" style="border:none;">
                        <div class="card-body">
                            <h4 class="text-center mb-3">
                                <strong>{{ __('Full Name') }}:</strong> {{ $user->account->first_name }}
                                {{ $user->account->last_name }} {{ $user->account->last_name }}
                            </h4>
                            <form action="{{ route('teacher.userOrganizationStore', $user->id) }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                        <div class="form-group mt-2">
                                            <label class="form-label" for="name">{{ __("Organization Name") }}:</label>
                                            <input type="text" id="name" name="name" placeholder="Organization Name" class="bg-white form-control w-100 @error('name') is-invalid @enderror" required value="{{ old('name') }}" required>
                                            @error('name')
                                                <span class="invalid-feedback d-block" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                        <div class="form-group mt-2">
                                            <label class="form-label" for="phone">{{ __("Phone") }}:</label>
                                            <input type="text" id="phone" name="phone" placeholder="Phone" class="bg-white form-control w-100 @error('phone') is-invalid @enderror" value="{{ old('phone') }}" required>
                                            @error('phone')
                                                <span class="invalid-feedback d-block" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                        <div class="form-group mt-2">
                                            <label class="form-label" for="email">{{ __("Email") }}:</label>
                                            <input type="email" id="email" name="email" placeholder="Email" class="bg-white form-control w-100 @error('email') is-invalid @enderror" value="{{ old('email') }}" required>
                                            @error('email')
                                                <span class="invalid-feedback d-block" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                        <div class="form-group mt-2">
                                            <label class="form-label" for="website">{{ __("Website") }}:</label>
                                            <input type="url" id="website" name="website" placeholder="Website" class="bg-white form-control w-100 @error('website') is-invalid @enderror" value="{{ old('website') }}" required>
                                            @error('website')
                                                <span class="invalid-feedback d-block" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group mt-2">
                                            <label class="form-label" for="address">{{ __("Address") }}:</label>
                                            <input type="text" id="address" name="address" placeholder="Address" class="bg-white form-control w-100 @error('address') is-invalid @enderror" value="{{ old('address') }}" required>
                                            @error('address')
                                                <span class="invalid-feedback d-block" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2 d-flex justify-content-end">
                                        <button type="submit" class="shadow btn btn-success btn-sm mt-2 mb-3 px-5 py-2"><i class="fa-solid fa-floppy-disk"></i> {{ __("crud.btn_create") }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection