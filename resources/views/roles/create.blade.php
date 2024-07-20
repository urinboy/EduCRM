@extends('layouts.app')

@section('title', __('Create New Role'))
@section('index', __('Roles'))

@section('heading')
<h1 class="h3">@yield('title')</h1>
<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
    <ol class="breadcrumb m-0 fs-7">
        <li class="breadcrumb-item"><a class="link-primary text-decoration-none" href="{{ route('home') }}">{{ __('Home') }}</a></li>
        <li class="breadcrumb-item"><a href="{{ route('roles.index') }}">@yield('index')</a></li>
        <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
    </ol>
</nav>
@endsection

@section('content')

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            {{ __('Whoops! There were some problems with your input.') }}
        </div>
    @endif
    <div class="d-flex justify-content-center">
        <div class="card shadow bg-white w-100">
            <div class="card-header bg-white mb-3">
                <div class="d-flex justify-content-end">
                    <a class="shadow btn btn-primary btn-sm mt-2 mb-3 px-5 py-2" href="{{ route('roles.index') }}"><i class="fa fa-arrow-left"></i> {{ __("Back") }}</a>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('roles.store') }}">
                    @csrf
                    <div class="row p-2">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <label class="form-label fw-bold" for="name">{{ __("Name") }}:</label>
                            <input type="text" id="name" name="name" placeholder="Name" class="form-control w-100 @error('name') is-invalid @enderror" value="{{ old('name') }}">
                            @error('name')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group mt-2   @error('permission') is-invalid @enderror">
                                <strong>{{ __("Permission") }}:</strong>
                                <br />
                                @foreach ($permission as $value)
                                    <label class="border rounded px-2 py-1 my-2 mx-1">
                                        <input type="checkbox" name="permission[{{ $value->id }}]"
                                            value="{{ $value->id }}" class="name" {{ in_array($value, old('permissions', [])) ? 'checked' : '' }}>
                                        {{ $value->name }}
                                    </label>
                                    
                                @endforeach
                            </div>
                            @error('permission')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 m-2 d-flex justify-content-end">
                            <button type="submit" class="shadow btn btn-success btn-sm mt-2 mb-3 px-5 py-2"><i
                                    class="fa-solid fa-floppy-disk"></i> {{ __("Submit") }}</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

@endsection
