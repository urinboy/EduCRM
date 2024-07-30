@extends('layouts.app')

@section('can', __('teacher'))
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
        </div>
    @endif

    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card shadow bg-white">
                <div class="card-body text-center">
                    <img src="{{ asset('dist/img/teacher.png') }}" class="w-50" alt="Teacher">
                    <p class="my-3">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae nihil, in ullam modi dolore
                        repudiandae laboriosam, dolorum quas voluptatibus dicta soluta officia sequi aspernatur mollitia eos
                        eaque eveniet quasi ducimus.
                    </p>
                    <a class="py-2 px-4 fw-bold w-100 shadow btn btn-success" href="{{ route('teacher.userCreate') }}">
                        <i class="fa fa-plus"></i>
                        {{ __('crud.btn_create') }}
                    </a>
                </div>
            </div>
        </div>
        {{-- <div class="col-12 col-md-3">
            <ul class="nav flex-column nav-pills mb-3 custom-card  bg-white  show  p-2 rounded" id="account-tabs"
                role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link border rounded m-1 active" id="profile-tab" data-bs-toggle="pill" href="#profile"
                        role="tab" aria-controls="profile" aria-selected="true"><i class="bi bi-person-fill"></i>
                        {{ __('Profile') }}</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link border rounded m-1" id="address-tab" data-bs-toggle="pill" href="#address"
                        role="tab" aria-controls="address" aria-selected="false"><i class="bi bi-geo-alt-fill"></i>
                        {{ __('Address') }}</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link border rounded m-1" id="password-tab" data-bs-toggle="pill" href="#password"
                        role="tab" aria-controls="password" aria-selected="false"><i class="bi bi-key-fill"></i>
                        {{ __('Update Password') }}</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link border rounded m-1" id="course-tab" data-bs-toggle="pill" href="#course"
                        role="tab" aria-controls="course" aria-selected="false"><i class="bi bi-person-vcard-fill"></i>
                        {{ __('Courses') }}</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link border rounded m-1" id="group-tab" data-bs-toggle="pill" href="#group"
                        role="tab" aria-controls="group" aria-selected="false"><i class="bi bi-collection-fill"></i>
                        {{ __('Groups') }}</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link border rounded m-1" id="lesson-tab" data-bs-toggle="pill" href="#lesson"
                        role="tab" aria-controls="lesson" aria-selected="false"><i class="bi bi-list-task"></i>
                        {{ __('Lessons') }}</a>
                </li>
            </ul>
        </div>
        <div class="col-md-9">
            <div class="tab-content" id="account-tab-content">
                <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="custom-card bg-white rounded">
                        <h5 class="mb-3">{{ __('Profile Details') }}</h5>
                        @include('accounts.tap-content.profile')
                    </div>
                </div>
                <div class="tab-pane fade" id="address" role="tabpanel" aria-labelledby="address-tab">
                    <!-- Address Content -->
                    <div class="custom-card bg-white rounded">
                        <h5 class="mb-3">{{ __('Address Details') }}</h5>
                        <!-- Add address fields here -->
                        @include('accounts.tap-content.address-detail')
                    </div>
                </div>
                <div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
                    <!-- Update Password Content -->
                    <div class="custom-card bg-white rounded">
                        <h5 class="mb-3">{{ __('Update Password') }}</h5>
                        <!-- Add password update fields here -->
                        @include('accounts.tap-content.password-update')
                    </div>
                </div>
                <div class="tab-pane fade" id="course" role="tabpanel" aria-labelledby="course-tab">
                    <!-- Group Content -->
                    <div class="custom-card bg-white rounded">
                        <h5 class="mb-3">{{ __('Course Details') }}</h5>
                        <!-- Add course details here -->
                        @include('accounts.tap-content.courses')
                    </div>
                </div>
                <div class="tab-pane fade" id="group" role="tabpanel" aria-labelledby="group-tab">
                    <!-- Group Content -->
                    <div class="custom-card bg-white rounded">
                        <h5 class="mb-3">{{ __('Group Details') }}</h5>
                        <!-- Add group details here -->
                        @include('accounts.tap-content.groups')
                    </div>
                </div>
                <div class="tab-pane fade" id="lesson" role="tabpanel" aria-labelledby="lesson-tab">
                    <!-- Lesson Content -->
                    <div class="custom-card bg-white rounded">
                        <h5 class="mb-3">{{ __('Lesson Details') }}</h5>
                        <!-- Add lesson details here -->
                        @include('accounts.tap-content.lessons')
                    </div>
                </div>
            </div>
        </div> --}}
    </div>

@endsection
