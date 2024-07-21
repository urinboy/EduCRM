@extends('layouts.app')

@section('can', __('product'))
@section('name', __('products'))
@section('title', __('section.title_create', ['name' => lcfirst($__env->yieldContent('can'))]))

@section('heading')
    <h1 class="h3">@yield('title')</h1>
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
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            {{ __('message.oops') }}
        </div>
    @endif
    <div class="d-flex justify-content-center">
        <div class="card shadow bg-white w-100">
            <div class="card-header bg-white">
                <div class="px-3 my-2 d-flex justify-content-between">
                    <h3>{{ __('section.create_form', ['form' => ucfirst($__env->yieldContent('can'))]) }}</h3>
                    <a class="py-2 px-4 fw-bold shadow btn btn-primary" href="{{ route($__env->yieldContent('name') . '.index') }}"><i class="fa fa-arrow-left"></i> {{ __('crud.btn_back') }}</a>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route($__env->yieldContent('name') . '.store') }}">
                    @csrf
                    
                    <div class="row p-2">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group mt-2">
                                <label class="form-label fw-bold" for="name">{{ __('Name') }}:</label>
                                <input type="text" id="name" name="name" placeholder="Name"
                                    class="form-control w-100 @error('name') is-invalid @enderror"
                                    value="{{ old('name') }}" required>
                                @error('name')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group mt-2">
                                <label class="form-label fw-bold" for="name">{{ __("Detail") }}:</label>
                                <textarea style="height:150px" id="detail" name="detail" placeholder="Detail" class="form-control w-100 @error('detail') is-invalid @enderror" required>{{ old('detail') }}</textarea>
                                @error('detail')
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
@endsection