@extends('layouts.app')

@section('can', __('complate'))
@section('name', 'teachers')
@section('title', __('Personal Information'))

@section('heading')
    <h1 class="h3">{{ __('section.info', ['show' => lcfirst($__env->yieldContent('can'))]) }}</h1>
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

    <div class="d-flex justify-content-center">
        <div class="card shadow bg-white w-100">
            <div class="card-header bg-white">
                <div class="px-3 my-2 d-flex justify-content-between">
                    <h3>@yield('title')</h3>
                    <a class="py-2 px-4 fw-bold shadow btn btn-primary"
                        href="{{ route($__env->yieldContent('name') . '.index') }}"><i class="fa fa-arrow-left"></i>
                        {{ __('crud.btn_back') }}</a>
                </div>
            </div>
            <div class="card-body">
                <div class="row p-3 justify-content-between">
                    <div class="col-12 col-md-3 mb-3">
                        <div class="profile-img border rounded my-3">
                            @if ($user->account->photo)
                                <img src="{{ asset('storage/' . $user->account->photo) }}" class="profile-img img-fluid rounded mb-2" alt="Profile Photo">
                            @else
                                <img src="{{ asset('dist/img/no-photo.png') }}" class="profile-img img-fluid rounded mb-2"  alt="Profile Picture">
                            @endif
                        </div>
                    </div>

                    <div class="col-12 col-md-9 my-1">
                        <div class="row">
                            <div class="col-12 col-md-6 my-2">
                                <p class="bg-white form-control my-1"><strong class="mx-2">{{ __('ID') }}:</strong>
                                    {{ $user->id }}</p>
                                <p class="bg-white form-control my-1"><strong class="mx-2">{{ __('F.I.O') }}:</strong>
                                    {{ $user->account->first_name . ' ' . $user->account->last_name . ' ' . $user->account->middle_name }}
                                </p>
                                <p class="bg-white form-control my-1"><strong class="mx-2">{{ __('Birthday') }}:</strong>
                                    {{ date('d.m.Y', strtotime($user->account->birthday)) }}</p>
                                <p class="bg-white form-control my-1"><strong class="mx-2">{{ __('Gender') }}:</strong>
                                    {{ ucfirst($user->account->gender) }}</p>
                                <p class="bg-white form-control my-1"><strong class="mx-2">{{ __('Username') }}:</strong>
                                    {{ $user->name }}</p>
                                <p class="bg-white form-control my-1"><strong class="mx-2">{{ __('Email') }}:</strong>
                                    {{ $user->email }}</p>
                                <p class="bg-white form-control my-1"><strong class="mx-2">{{ __('Phone') }}:</strong>
                                    {{ $user->account->phone }}</p>
                                <p class="bg-white form-control my-1"><strong class="mx-2">{{ __('Role') }}:</strong>
                                    @if (!empty(Auth::user()->getRoleNames()))
                                        @foreach (Auth::user()->getRoleNames() as $v)
                                            <label class="badge bg-primary">{{ $v }}</label>
                                        @endforeach
                                    @endif
                                </p>
                            </div>
                            <div class="col-12 col-md-6 my-2">
                                <p class="bg-white form-control my-1"><strong class="mx-2"> {{ __('Country') }}:</strong> {{ $user->account->address->country->name }}, {{ $user->account->address->state->name }} </p>
                                <p class="bg-white form-control my-1"><strong class="mx-2"> {{ __('Address') }}:</strong> {{ $user->account->address->city->name }}, {{ $user->account->address->district }}</p>
                                <p class="bg-white form-control my-1"><strong class="mx-2">{{ __('Zip code') }}:</strong> {{ $user->account->address->zip_code }}</p>
                                <p class="bg-white form-control my-1"><strong class="mx-2">{{ __('Organization') }}:</strong> {{ $user->account->organization->name }}</p>
                                @if ($user->teacher)
                                    <p class="bg-white form-control my-1"><strong class="mx-2">{{ __("Hire Date") }}:</strong> {{ date('d.m.Y', strtotime($user->teacher->hire_date)) }}</p>
                                    <p class="bg-white form-control my-1"><strong class="mx-2">{{ __("Date of Resignation") }}:</strong> {{ $user->teacher->date_of_resignation ?? 'Null' }}</p>
                                    <p class="bg-white form-control my-1"><strong class="mx-2">{{ __("Work Experience") }}:</strong> {{ $user->teacher->work_experience ?? "Null" }}</p>
                                @endif
                                <p class="bg-white form-control my-1">
                                    <strong class="mx-2">{{ __('Status') }}:</strong>
                                    <label class="badge bg-success">{{ ucfirst($user->account->status) }}</label>
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="col-12 col-md-12">
                        <p class="bg-white form-control my-1"><strong>{{ __('BIO') }}:</strong>
                            {{ $user->account->bio }}</p>
                    </div>

                </div>
                {{-- <p><strong>Email:</strong> {{ $user->email }}</p>
                @if ($user->account)
                    <p><strong>First Name:</strong> {{ $user->account->first_name }}</p>
                    <p><strong>Last Name:</strong> {{ $user->account->last_name }}</p>
                    <p><strong>Middle Name:</strong> {{ $user->account->middle_name }}</p>
                    <p><strong>Phone:</strong> {{ $user->account->phone }}</p>
                    <p><strong>Birthday:</strong> {{ $user->account->birthday }}</p>
                    <p><strong>Gender:</strong> {{ $user->account->gender }}</p>
                    <p><strong>Status:</strong> {{ $user->account->status }}</p>
                    <p><strong>Bio:</strong> {{ $user->account->bio }}</p>
                @endif --}}

                {{-- <h3>Organization Information</h3>
                @if ($user->account && $user->account->organization)
                    <p><strong>Organization Name:</strong> {{ $user->account->organization->name }}</p>
                    <p><strong>Organization Phone:</strong> {{ $user->account->organization->phone }}</p>
                    <p><strong>Organization Email:</strong> {{ $user->account->organization->email }}</p>
                    <p><strong>Organization Website:</strong> {{ $user->account->organization->website }}</p>
                @endif --}}

                {{-- <h3>Address Information</h3>
                @if ($user->account && $user->account->address)
                    <p><strong>Country:</strong> {{ $user->account->address->country->name }}</p>
                    <p><strong>State:</strong> {{ $user->account->address->state->name }}</p>
                    <p><strong>City:</strong> {{ $user->account->address->city->name }}</p>
                    <p><strong>District:</strong> {{ $user->account->address->district }}</p>
                    <p><strong>Street:</strong> {{ $user->account->address->street }}</p>
                    <p><strong>Zip Code:</strong> {{ $user->account->address->zip_code }}</p>
                    <p><strong>Detail:</strong> {{ $user->account->address->detail }}</p>
                @endif --}}

                {{-- <h3>Professional Information</h3>
                @if ($user->teacher)
                    <p><strong>Hire Date:</strong> {{ $user->teacher->hire_date }}</p>
                    <p><strong>Date of Resignation:</strong> {{ $user->teacher->date_of_resignation }}</p>
                    <p><strong>Work Experience:</strong> {{ $user->teacher->work_experience }}</p>
                @endif --}}



            </div>
        </div>
    </div>

@endsection
