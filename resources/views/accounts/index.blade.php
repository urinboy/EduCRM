@extends('layouts.app')

@section('can', __('account'))
@section('name', __('accounts'))
@section('title', ucfirst($__env->yieldContent('can')))

@section('heading')
    <h1 class="h4">@yield('title')</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb m-0 fs-7">
            <li class="breadcrumb-item"><a class="link-primary text-decoration-none"
                    href="{{ route('home') }}">{{ __('Home') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
        </ol>
    </nav>
@endsection

@section('content')
<div class="row">
    <div class="col-12 col-md-4 mb-3">
        {{-- @if ($account->photo)
            <img src="{{ asset('storage/' . $account->photo) }}" class="profile-img img-fluid rounded" alt="Photo">
        @else
            <img src="https://via.placeholder.com/150" class="profile-img img-fluid rounded" alt="Profile Picture">
        @endif --}}
        <div class="row gy-2 d-flex align-items-center justify-content-center">
            {{-- <label for="photo" class="col-12 form-label m-0">Profile Image</label> --}}
            <div class="col-12 text-center">
                <img src="{{ $account->photo ? $account->photo : 'https://via.placeholder.com/150' }}" class="profile-imgimg-fluid rounded w-100" alt="{{ Auth::user()->name }}">
            </div>
            {{-- <div class="col-12 text-center">
                <a href="#!" class="d-inline-block bg-primary link-light lh-1 px-5 py-2 rounded">
                    <i class="bi bi-upload"></i>
                </a>
                <a href="#!" class="d-inline-block bg-danger link-light lh-1 px-5 py-2 rounded">
                    <i class="bi bi-trash"></i>
                </a>
            </div> --}}
        </div>
    </div>
    <div class="col-md-8">
        <h3 class="my-3 text-center fw-bold">{{ $account->first_name ?? __("Null")}} {{ $account->last_name ?? __("Null") }} {{ $account->middle_name ?? __("Null") }}</h3>
        <div class="row">
            <div class="col-12 col-md-6">
                <p class="form-control"><strong>{{ __('ID') }}:</strong> {{ $account->user->id }}</p>
                <p class="form-control"><strong>{{ __('Username') }}:</strong> {{ $account->user->name }}</p>
                <p class="form-control"><strong>{{ __("Role") }}:</strong>
                    @if (!empty(Auth::user()->getRoleNames()))
                        @foreach (Auth::user()->getRoleNames() as $v)
                            <label class="badge bg-primary">{{ $v }}</label>
                        @endforeach
                    @endif
                </p>
                <p class="form-control"><strong>{{ __('Email') }}:</strong> {{ $account->user->email }}</p>
            </div>
            <div class="col-12 col-md-6">
                <p class="form-control"><strong>{{ __("Phone") }}:</strong> {{ $account->phone }}</p>
                <p class="form-control"><strong>{{ __("Birthday") }}:</strong>
                    {{ date('d.m.Y', strtotime($account->birthday)) }}
                </p>
                <p class="form-control"><strong>{{ __("Gender") }}:</strong> {{ ucfirst($account->gender) }}</p>
                <p class="form-control"><strong>{{ __("Status") }}:</strong> <label class="badge bg-info">{{ ucfirst($account->status) }}</label></p>
            </div>
            
            <div class="col-12 col-md-12">
                <p class="form-control"><strong>{{ __('BIO') }}:</strong> {{ $account->bio }}</p>
            </div>
        </div>
    </div>
</div>
@endsection