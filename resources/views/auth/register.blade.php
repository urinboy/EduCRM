@extends('layouts.app')

@section('title', __('Register'))

@section('heading')
    <div class="row mb-3">
        <div class="col-lg-6 col-sm-12 d-flex align-items-center">
            {{-- <h2 class="mb-0">@yield('title')</h2> --}}
        </div>
        <div class="col-lg-6 col-sm-12 d-flex justify-content-end">
            @canany(['role-create', 'role-edit', 'role-delete'])
                <a class="btn mx-1 my-2 btn-primary" href="{{ route('roles.index') }}">
                    <i class="bi bi-person-fill-gear"></i> {{ __('Manage Roles') }}</a>
            @endcanany
            @canany(['user-create', 'user-edit', 'user-delete'])
                <a class="btn mx-1 my-2 btn-success" href="{{ route('users.index') }}">
                    <i class="bi bi-people"></i> {{ __('Manage Users') }}</a>
            @endcanany
            @canany(['product-create', 'product-edit', 'product-delete'])
                <a class="btn mx-1 my-2 btn-warning" href="{{ route('products.index') }}">
                    <i class="bi bi-bag"></i> {{ __('Manage Products') }}</a>
            @endcanany
        </div>
    </div>
    <div class="row">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
            aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/home">{{ __('Home') }}</a></li>
                <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
            </ol>
        </nav>
    </div>
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-4 col-md-8 col-sm-12">
            <div class="card shadow bg-white">
                <div class="card-body">
                    <div class="d-flex justify-content-center mt-4 mb-2">
                        <h2 class="mb-0">@yield('title')</h2>
                    </div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row p-1 m-0">
                            <div class="form-group mt-2">
                                <label for="name" class="form-label">{{ __('Full Name') }}</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required placeholder="{{ __('Enter Full Name') }}" autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
    
                            <div class="form-group mt-2">
                                <label for="email" class="form-label">{{ __('Email Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="{{ __('Enter Email Address') }}" autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
    
                            <div class="form-group mt-2">
                                <label for="password" class="form-label">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="{{ __('Enter Password') }}" autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
    
                            <div class="form-group mt-2">
                                <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="{{ __('Enter Confirm Password') }}" autocomplete="new-password">
                            </div>
    
                            <div class="row m-0">
                                <div class="col-md-12 m-0 mt-2">
                                    <button type="submit" class="btn btn-primary w-100">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>

                        </div>
                    </form>
                    {{-- <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row p-1 m-0">
                            <div class="form-group mt-2">
                                <label for="email" class="form-label">{{ __('Email Address') }}</label>
                                <input id="email" type="email"
                                    class="form-control w-100 @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required placeholder="test" autocomplete="email" autofocus>
    
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
    
                            <div class="form-group mt-2">
                                <label for="password" class="form-label">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                                    name="password" required autocomplete="current-password">
        
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        
                            </div>
        
                            <div class="row m-0 align-items-center justify-content-between">
                                <div class="badge text-warning form-check mt-3 w-50 d-flex align-items-center">
                                    <input class="form-check-input  m-0 mx-1" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>
    
                                    <label class="form-check-label text-sm m-0" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                                @if (Route::has('password.request'))
                                <a class="badge text-primary mt-3 w-50 " style="text-decoration: none" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                
                            </div>
        
        
                            <div class="row m-0">
                                <div class="col-md-12 m-0 mt-2">
                                    <button type="submit" class="btn btn-primary w-100">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                            </div>
                        </div>
    
                    </form> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
