@extends('layouts.app')

@section('can', __('language'))
@section('name', __('languages'))
@section('title', __('section.view', ['show' => $language->name]))

@section('heading')
    <h1 class="h3">{{ __('section.info', ['show' => lcfirst($__env->yieldContent('can'))]) }}</h1>
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
        aria-label="breadcrumb">
        <ol class="breadcrumb m-0 fs-7">
            <li class="breadcrumb-item"><a class="link-primary text-decoration-none"
                    href="{{ route('home') }}">{{ __('section.home') }}</a></li>
            <li class="breadcrumb-item"><a
                    href="{{ route($__env->yieldContent('name') . '.index') }}">{{ ucfirst($__env->yieldContent('name')) }}</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
        </ol>
    </nav>
@endsection

@section('content')

    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="{{ $teacher->account->photo }}" class="card-img-top" alt="{{ $teacher->user->name }}">
                <div class="card-body text-center">
                    <h5 class="card-title">{{ $teacher->user->name }}</h5>
                    <p class="card-text">{{ $teacher->account->first_name }} {{ $teacher->account->last_name }}</p>
                    <p class="card-text">{{ $teacher->account->phone }}</p>
                    <a href="mailto:{{ $teacher->user->email }}" class="btn btn-primary">Contact Me</a>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <h2>Hello, I'm {{ $teacher->account->first_name }} {{ $teacher->account->last_name }}</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>

            <h3>Skillset</h3>
            <div class="progress mb-3">
                <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0"
                    aria-valuemax="100">WordPress Development</div>
            </div>
            <div class="progress mb-3">
                <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0"
                    aria-valuemax="100">Digital Marketing</div>
            </div>
            <div class="progress mb-3">
                <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0"
                    aria-valuemax="100">Laravel Development</div>
            </div>
            <div class="progress mb-3">
                <div class="progress-bar" role="progressbar" style="width: 95%;" aria-valuenow="95" aria-valuemin="0"
                    aria-valuemax="100">Live Support</div>
            </div>

            <div class="d-flex justify-content-around text-center mt-5">
                <div>
                    <h4>4</h4>
                    <p>Course Author</p>
                </div>
                <div>
                    <h4>14</h4>
                    <p>Total Rating</p>
                </div>
                <div>
                    <h4>4.9</h4>
                    <p>Avg. Rating</p>
                </div>
            </div>

            <h3 class="mt-5">Courses By: {{ $teacher->account->first_name }} {{ $teacher->account->last_name }}</h3>
            <div class="row">
                <!-- Kurslar -->
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/150" class="card-img-top" alt="Course Image">
                        <div class="card-body">
                            <h5 class="card-title">Course Title</h5>
                            <p class="card-text">Short description of the course.</p>
                            <p class="card-text"><small class="text-muted">257 Students • 44 Lessons</small></p>
                            <a href="#" class="btn btn-primary">Enroll Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/150" class="card-img-top" alt="Course Image">
                        <div class="card-body">
                            <h5 class="card-title">Course Title</h5>
                            <p class="card-text">Short description of the course.</p>
                            <p class="card-text"><small class="text-muted">35 Students • 27 Lessons</small></p>
                            <a href="#" class="btn btn-primary">Enroll Now</a>
                        </div>
                    </div>
                </div>
                <!-- Yana ko'proq kurslarni shu tarzda qo'shishingiz mumkin -->
            </div>
        </div>
    </div>

    {{-- <div class="d-flex justify-content-center">
        <div class="card shadow bg-white w-100">
            <div class="card-header bg-white">
                <div class="px-3 my-2 d-flex justify-content-between">
                    <h3>@yield('title')</h3>
                    <a class="py-2 px-4 fw-bold shadow btn btn-primary" href="{{ route($__env->yieldContent('name').'.index') }}"><i class="fa fa-arrow-left"></i> {{ __('crud.btn_back') }}</a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('Name') }}:</strong>
                            {{ $language->name }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('Code') }}:</strong>
                            <span class="text-success fw-bold mx-2">{{ $language->code }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

@endsection
