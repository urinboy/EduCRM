@extends('layouts.app')

@section('can', __('address'))
@section('name', __('addresses'))
@section('title', __('section.view', ['show' => $address->name ?? ucfirst($__env->yieldContent('can'))]))

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
                <ul class="list-group">
                    <li class="list-group-item">
                        <strong>Country:</strong> {{ $address->country->name ?? 'N/A' }}
                    </li>
                    <li class="list-group-item">
                        <strong>State:</strong> {{ $address->state->name ?? 'N/A' }}
                    </li>
                    <li class="list-group-item">
                        <strong>City:</strong> {{ $address->city->name ?? 'N/A' }}
                    </li>
                    <li class="list-group-item">
                        <strong>District:</strong> {{ $address->district }}
                    </li>
                    <li class="list-group-item">
                        <strong>Street:</strong> {{ $address->street }}
                    </li>
                    <li class="list-group-item">
                        <strong>Zip Code:</strong> {{ $address->zip_code }}
                    </li>
                    <li class="list-group-item">
                        <strong>Detail:</strong> {{ $address->detail ?? 'N/A' }}
                    </li>
                </ul>
                {{-- <div class="mt-3">
                    <a href="{{ route('addresses.edit', $address->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('addresses.destroy', $address->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this address?');">Delete</button>
                    </form>
                    <a href="{{ route('addresses.index') }}" class="btn btn-secondary">Back to List</a>
                </div> --}}
            </div>
        </div>
    </div>

@endsection
