@extends('layouts.app')

@section('title', __('Show').": ".$role->name)
@section('index', __('Roles'))

@section('heading')
<div class="row mb-3">
    <div class="col-lg-6 col-sm-12 d-flex align-items-center">
        <h2 class="mb-0">@yield('title')</h2>
    </div>
    <div class="col-lg-6 col-sm-12 d-flex justify-content-end">
        <a class="shadow btn btn-primary btn-sm mt-2 mb-3 px-5 py-2" href="{{ route('roles.index') }}"><i class="fa fa-arrow-left"></i> {{ __("Back") }}</a>
    </div>
</div>
<div class="row">
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
        aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">{{ __('Home') }}</a></li>
            <li class="breadcrumb-item"><a href="{{ route('roles.index') }}">@yield('index')</a></li>
            <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
        </ol>
    </nav>
</div>
@endsection

@section('content')

    <div class="d-flex justify-content-center">
        <div class="card shadow bg-white w-100">
            <div class="card-body">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $role->name }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Permissions:</strong>
                            @if(!empty($rolePermissions))
                                @foreach($rolePermissions as $v)
                                    <label class="border rounded px-2 py-1 my-2 mx-1">{{ $v->name }},</label>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection