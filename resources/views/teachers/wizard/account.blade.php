@extends('layouts.app')

@section('can', __('account'))
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
        <div class="col-12 col-md-3">
            <ul class="nav flex-column nav-pills mb-3 custom-card  bg-white  show  p-2 rounded">
                <li class="nav-item" role="presentation">
                    <a class="nav-link disabled border rounded m-1">
                        <i class="bi bi-person-fill-add"></i>
                        {{ __('Create Teacher') }}
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link border rounded m-1  active">
                        <i class="bi bi-person-vcard-fill"></i>
                        {{ __('Add Account Info') }}
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link border rounded m-1">
                        <i class="bi bi-geo-alt-fill"></i>
                        {{ __('Add Address') }}
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link border rounded m-1">
                        <i class="bi bi-person-fill-gear"></i>
                        {{ __('Add Organization') }}
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link border rounded m-1">
                        <i class="bi bi-person-video3"></i>
                        {{ __('Add Teacher Info') }}
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link border rounded m-1">
                        <i class="bi bi-person-rolodex"></i>
                        {{ __('Coplate') }}
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-md-9">
            <div class="row">
                <div class="col-12">
                    <div class="card bg-white custom-card" style="border:none;">
                        <div class="card-body">
                            <h4 class="text-center mb-3"><strong>{{ __('username') }}:</strong> {{ $user->name }},
                                <strong>{{ __('email') }}:</strong> {{ $user->email }}
                            </h4>
                            <form action="{{ route('teacher.userAccountStore') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <input type="hidden" class="form-control my-1" id="user_id" name="user_id"
                                        value="{{ $user->id }}">

                                    <div class="col-12 col-md-4 mb-3">
                                        <div class="profile-img  text-center border rounded my-3">
                                            <img src="{{ asset('dist/img/no-photo.png') }}" class="profile-img img-fluid"
                                                alt="Profile Picture">
                                        </div>

                                    </div>
                                    <div class="col-12 col-md-8">
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="form-group mt-2">
                                                    <label class="form-label" for="first_name">{{ __('First Name') }} <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control my-1" id="first_name"
                                                        name="first_name" value="{{ old('first_name') }}" required>
                                                    @error('first_name')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="form-group mt-2">
                                                    <label class="form-label" for="last_name">{{ __('Last Name') }} <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control my-1" id="last_name"
                                                        name="last_name" value="{{ old('last_name') }}" required>
                                                    @error('last_name')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="form-group mt-2">
                                                    <label class="form-label"
                                                        for="middle_name">{{ __('Middle Name') }}</label>
                                                    <input type="text" class="form-control my-1" id="middle_name"
                                                        name="middle_name" value="{{ old('middle_name') }}">
                                                    @error('middle_name')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="form-group mt-2">
                                                    <label class="form-label" for="phone">{{ __('Phone') }} <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control my-1" id="phone"
                                                        name="phone" value="{{ old('phone') }}" required>
                                                    @error('phone')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group col-12 col-md-6 my-2">
                                                <label class="form-label" for="birthday">{{ __('Birthday') }} <span
                                                        class="text-danger">*</span></label>
                                                <input type="date" class="form-control my-1" id="birthday"
                                                    name="birthday" value="{{ old('birthday') }}" required>
                                                @error('birthday')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group col-12 col-md-6 my-2">
                                                <label class="form-label" for="gender">{{ __('Gender') }} <span
                                                        class="text-danger">*</span></label>
                                                <select class="form-control my-1" id="gender" name="gender" required>
                                                    <option value="male"
                                                        {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                                                    <option value="female"
                                                        {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                                                    <option value="other"
                                                        {{ old('gender') == 'other' ? 'selected' : '' }}>Other</option>
                                                </select>
                                                @error('gender')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="form-group col-12 col-md-6 my-2">
                                                <label class="form-label" for="photo">{{ __('Photo') }} <span
                                                        class="text-danger">*</span></label>
                                                <input type="file" id="photo" name="photo"
                                                    class="form-control">
                                                @error('photo')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group col-12 col-md-6 my-2">
                                                <label class="form-label" for="status">{{ __('Status') }} <span
                                                        class="text-danger">*</span></label>
                                                <select class="form-control" id="status" name="status" required>
                                                    <option value="active"
                                                        {{ old('status') == 'active' ? 'selected' : '' }}>Active</option>
                                                    <option value="inactive"
                                                        {{ old('status') == 'inactive' ? 'selected' : '' }}>Inactive
                                                    </option>
                                                    <option value="unallowed"
                                                        {{ old('status') == 'unallowed' ? 'selected' : '' }}>Unallowed
                                                    </option>
                                                    <option value="blocked"
                                                        {{ old('status') == 'blocked' ? 'selected' : '' }}>Blocked</option>
                                                </select>
                                                @error('status')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group col-12 col-md-6 my-2">
                                                <label class="form-label" for="language">{{ __('Language') }} <span
                                                        class="text-danger">*</span></label>
                                                <select class="form-control" id="language" name="language" required>
                                                    @foreach ($languages as $language)
                                                        <option value="{{ $language->id }}">{{ $language->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('lanugage')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group col-12 col-md-6 my-2">
                                                <label class="form-label" for="currency">{{ __('Currency') }} <span
                                                        class="text-danger">*</span></label>
                                                <select class="form-control" id="currency" name="currency" required>
                                                    @foreach ($currencies as $currency)
                                                        <option value="{{ $currency->id }}">{{ $currency->name }} ( {{ $currency->code }} )</option>
                                                    @endforeach
                                                </select>
                                                @error('currency')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-group col-12 col-md-12 my-2">
                                        <textarea class="form-control my-1" id="bio" name="bio" placeholder="{{ __('BIO') }}">{{ old('bio') }}</textarea>
                                        @error('bio')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 d-flex justify-content-end">
                                    <button type="submit" class="shadow btn btn-success btn-sm mt-2 mb-3 px-5 py-2">
                                        <i class="fa-solid fa-floppy-disk"></i>
                                        {{ __('crud.btn_create') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
