@extends('layouts.app')

@section('can', __('city'))
@section('name', __('cities'))
@section('title', __('section.view', ['show' => $city->name]))

@section('heading')
    <h1 class="h3">{{ __('section.info', ['show' => lcfirst($__env->yieldContent('can'))]) }}</h1>
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
        aria-label="breadcrumb">
        <ol class="breadcrumb m-0 fs-7">
            <li class="breadcrumb-item"><a class="link-primary text-decoration-none" href="{{ route('home') }}">{{ __('section.home') }}</a></li>
            <li class="breadcrumb-item"><a href="{{ route($__env->yieldContent('name').'.index') }}">{{  ucfirst($__env->yieldContent('name')) }}</a></li>
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
                    <a class="py-2 px-4 fw-bold shadow btn btn-primary" href="{{ route($__env->yieldContent('name').'.index') }}"><i class="fa fa-arrow-left"></i> {{ __('crud.btn_back') }}</a>
                </div>
            </div>
            <div class="card-body">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>{{ __('City Name') }}:</strong>
                        {{ $city->name }}
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>{{ __('State') }}:</strong>
                        {{ $city->state->name }}
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>{{ __('Country') }}:</strong>
                        {{ $city->state->country->name }}
                    </div>
                </div>
                
            </div>
        </div>
    </div>

@endsection
