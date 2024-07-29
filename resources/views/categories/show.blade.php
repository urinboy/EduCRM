@extends('layouts.app')

@section('can', __('category'))
@section('name', 'categories')
@section('title', __('section.view', ['show' => $category->name]))

@section('heading')
    <h1 class="h3">{{ __('section.info', ['show' => lcfirst($__env->yieldContent('can'))]) }}</h1>
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
        aria-label="breadcrumb">
        <ol class="breadcrumb m-0 fs-7">
            <li class="breadcrumb-item"><a class="link-primary text-decoration-none" href="{{ route('home') }}">{{ __('section.home') }}</a></li>
            <li class="breadcrumb-item"><a href="{{ route($__env->yieldContent('name').'.index') }}">{{  ucfirst(__($__env->yieldContent('name'))) }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
        </ol>
    </nav>
@endsection

@section('content')

<div class="px-3 my-2 d-flex justify-content-between">
    <h3>@yield('title')</h3>
    <a class="py-2 px-4 fw-bold shadow btn btn-primary" href="{{ route($__env->yieldContent('name').'.index') }}"><i class="fa fa-arrow-left"></i> {{ __('crud.btn_back') }}</a>
</div>
    <div class="row justify-content-center">
        <div class="col-12 col-md-6 my-2">
            <div class="card shadow bg-white">
                <div class="card-header h-30 p-0">
                    @if ($category->image)
                        <img src="{{ Storage::url($category->image) }}" alt="{{ $category->name }}"
                            class="w-100 rounded">
                    @endif
                </div>
                <div class="card-body p-3 rounded">
        
                    <h3>{{ $category->name }}</h3>
                    <p>{{ $category->description }}</p>
                </div>
                <div class="card-footer bg-white d-flex flex-decoration-column justify-content-around">
                    @can($__env->yieldContent('can') . '-edit')
                        <a class="btn btn-primary btn-sm m-1 w-50 w-sm-100 px-3"
                            href="{{ route($__env->yieldContent('name') . '.edit', $category->id) }}">
                            <i class="fa-solid fa-pen-to-square"></i>
                            {{ __('crud.btn_edit') }}
                        </a>
                    @endcan
                    @can($__env->yieldContent('can') . '-delete')
                        <button type="button" class="btn btn-danger btn-sm m-1 w-50 w-sm-100 px-3" data-bs-toggle="modal"
                            data-bs-target="#deleteModal" data-sectionid="{{ $category->id }}">
                            <i class="fa-solid fa-trash"></i>
                            {{ __('crud.btn_delete') }}
                        </button>
                    @endcan
                </div>
            </div>
        </div>
    </div>

@endsection