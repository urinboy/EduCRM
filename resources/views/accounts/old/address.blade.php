@extends('layouts.app')

@section('title', __('Profile'))

@section('heading')
    <h1 class="h4">@yield('title')</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb m-0 fs-7">
            <li class="breadcrumb-item"><a class="link-primary text-decoration-none"
                    href="{{ route('home') }}">{{ __('Home') }}</a></li>
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
    {{-- <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        @if ($account->photo)
                            <img src="{{ Storage::url($account->photo) }}" alt="Profile Photo" class="rounded-circle img-fluid" style="width: 150px; height: 150px; object-fit: cover;">
                        @else
                            <img src="https://via.placeholder.com/150" alt="Profile Photo" class="rounded-circle img-fluid" style="width: 150px; height: 150px; object-fit: cover;">
                        @endif
                        <h5 class="my-3">{{ $account->first_name }} {{ $account->last_name }}</h5>
                        <p class="text-muted mb-1">{{ $account->bio ?? 'Bio not provided' }}</p>
                        <p class="text-muted mb-4">{{ $account->address->address ?? 'Address not provided' }}</p>
                        <div class="d-flex justify-content-center mb-2">
                            <a href="{{ route('accounts.edit', $account->id) }}" class="btn btn-primary">Edit Profile</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
    
                        <form action="{{ route('profile.update', $account->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
    
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <label for="photo" class="form-label">Photo</label>
                                </div>
                                <div class="col-sm-9">
                                    <input class="form-control @error('photo') is-invalid @enderror" type="file" id="photo" name="photo">
                                    @error('photo')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    @if ($account->photo)
                                        <img src="{{ Storage::url($account->photo) }}" alt="Profile Photo" class="img-thumbnail mt-2" width="150">
                                    @endif
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <label for="first_name" class="form-label">First Name</label>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name" name="first_name" value="{{ old('first_name', $account->first_name) }}">
                                    @error('first_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <label for="last_name" class="form-label">Last Name</label>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('last_name') is-invalid @enderror" id="last_name" name="last_name" value="{{ old('last_name', $account->last_name) }}">
                                    @error('last_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <label for="middle_name" class="form-label">Middle Name</label>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('middle_name') is-invalid @enderror" id="middle_name" name="middle_name" value="{{ old('middle_name', $account->middle_name) }}">
                                    @error('middle_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <label for="birthday" class="form-label">Birthday</label>
                                </div>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control @error('birthday') is-invalid @enderror" id="birthday" name="birthday" value="{{ old('birthday', $account->birthday) }}">
                                    @error('birthday')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <label for="gender" class="form-label">Gender</label>
                                </div>
                                <div class="col-sm-9">
                                    <select class="form-control @error('gender') is-invalid @enderror" id="gender" name="gender">
                                        <option value="male" {{ old('gender', $account->gender) == 'male' ? 'selected' : '' }}>Male</option>
                                        <option value="female" {{ old('gender', $account->gender) == 'female' ? 'selected' : '' }}>Female</option>
                                        <option value="other" {{ old('gender', $account->gender) == 'other' ? 'selected' : '' }}>Other</option>
                                    </select>
                                    @error('gender')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <label for="bio" class="form-label">Bio</label>
                                </div>
                                <div class="col-sm-9">
                                    <textarea class="form-control @error('bio') is-invalid @enderror" id="bio" name="bio" rows="3">{{ old('bio', $account->bio) }}</textarea>
                                    @error('bio')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <label for="phone" class="form-label">Phone</label>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone', $account->phone) }}">
                                    @error('phone')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <label for="organization_id" class="form-label">Organization</label>
                                </div>
                                <div class="col-sm-9">
                                    <select class="form-control @error('organization_id') is-invalid @enderror" id="organization_id" name="organization_id">
                                        <option value="">Select Organization</option>
                                        @foreach ($organizations as $organization)
                                            <option value="{{ $organization->id }}" {{ old('organization_id', $account->organization_id) == $organization->id ? 'selected' : '' }}>{{ $organization->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('organization_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <label for="address_id" class="form-label">Address</label>
                                </div>
                                <div class="col-sm-9">
                                    <select class="form-control @error('address_id') is-invalid @enderror" id="address_id" name="address_id">
                                        <option value="">Select Address</option>
                                        @foreach ($addresses as $address)
                                            <option value="{{ $address->id }}" {{ old('address_id', $account->address_id) == $address->id ? 'selected' : '' }}>{{ $address->address }}</option>
                                        @endforeach
                                    </select>
                                    @error('address_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <label for="language_id" class="form-label">Language</label>
                                </div>
                                <div class="col-sm-9">
                                    <select class="form-control @error('language_id') is-invalid @enderror" id="language_id" name="language_id">
                                        <option value="">Select Language</option>
                                        @foreach ($languages as $language)
                                            <option value="{{ $language->id }}" {{ old('language_id', $account->language_id) == $language->id ? 'selected' : '' }}>{{ $language->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('language_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <label for="currency_id" class="form-label">Currency</label>
                                </div>
                                <div class="col-sm-9">
                                    <select class="form-control @error('currency_id') is-invalid @enderror" id="currency_id" name="currency_id">
                                        <option value="">Select Currency</option>
                                        @foreach ($currencies as $currency)
                                            <option value="{{ $currency->id }}" {{ old('currency_id', $account->currency_id) == $currency->id ? 'selected' : '' }}>{{ $currency->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('currency_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <label for="status" class="form-label">Status</label>
                                </div>
                                <div class="col-sm-9">
                                    <select class="form-control @error('status') is-invalid @enderror" id="status" name="status">
                                        <option value="active" {{ old('status', $account->status) == 'active' ? 'selected' : '' }}>Active</option>
                                        <option value="inactive" {{ old('status', $account->status) == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                        <option value="unallowed" {{ old('status', $account->status) == 'unallowed' ? 'selected' : '' }}>Unallowed</option>
                                        <option value="blocked" {{ old('status', $account->status) == 'blocked' ? 'selected' : '' }}>Blocked</option>
                                    </select>
                                    @error('status')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
    
                            <button type="submit" class="btn btn-primary">Update Profile</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <section class="edu-profile-wrapper">

        @include('accounts.nav')
        
        <div class="edu-profile-tabcontent-wrapper">

            <div class="edu-tab-content-active">
                <div class="edu-profile-tab-content-info">
                    <div>
                        <div>
                            @if ($account->photo)
                                <img src="{{ asset('storage/' . $account->photo) }}" alt="Photo" width="100">
                            @endif

                        </div>
                        <div>
                            <h1>{{ $account->first_name . ' ' . $account->last_name . ' ' . $account->middle_name }}</h1>
                            <span>{{ 'ID: '.$account->user->id }}</span>
                        </div>
                    </div>
                    <div>
                        <div class="edu-profile-fieldset-core mt-3">
                            <span>{{ __("Full Name") }}</span>
                            <div>{{ $account->first_name . ' ' . $account->last_name . ' ' . $account->middle_name }}</div>
                        </div>
                        <div class="edu-profile-fieldset-core mt-3">
                            <span>{{ __("Birthday") }}</span>
                            <div>{{ \Carbon\Carbon::parse($account->birtday)->format('F j, Y') }}</div>
                        </div>
                        <div class="edu-profile-fieldset-core mt-3">
                            <span>{{ __("Gender") }}</span>
                            <div>{{ ucfirst($account->gender) }}</div>
                        </div>
                    </div>
                    <div>
                        <div class="edu-profile-fieldset-core mt-3">
                            <span>{{ __("Role") }}</span>
                            <div>
                                @if (!empty(Auth::user()->getRoleNames()))
                                    @foreach (Auth::user()->getRoleNames() as $v)
                                    {{ $v }}
                                        {{-- <label class="badge bg-primary"></label> --}}
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="edu-profile-fieldset-core mt-3">
                            <span>{{ __("Email") }}</span>
                            <div>{{ $account->user->email }}</div>
                        </div>
                        
                        <div class="edu-profile-fieldset-core mt-3">
                            <span>{{ __("Phone") }}</span>
                            <div>{{ $account->phone }}</div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end flex-wrap align-items-center">
                        <div class="m-2">
                            <a href="/person-change" class="edu-btn-sm">{{ __('crud.btn_edit') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <div class="container">
        <div class="card shadow rounded">
            <div class="card-header bg-white">
                <h3>{{ $account->first_name }} {{ $account->last_name }}</h3>
            </div>
            <div class="card-body bg-white  rounded">
                <p><strong>Photo:</strong> @if ($account->photo)<img src="{{ asset('storage/' . $account->photo) }}" alt="Photo" width="100">@endif</p>
                <p><strong>BIO:</strong> {{ ucfirst($account->bio) }}</p>
                <p><strong>Username:</strong> {{ '@'.$account->user->name }}</p>
                <p><strong>First Name:</strong> {{ $account->first_name }}</p>
                <p><strong>Last Name:</strong> {{ $account->last_name }}</p>
                <p><strong>Middle Name:</strong> {{ $account->middle_name }}</p>
                <p><strong>Birthday:</strong> {{ $account->birthday ? \Carbon\Carbon::parse($account->birthday)->format('F j, Y') : __('Null') }} </p>
                <p><strong>Gender:</strong> {{ ucfirst($account->gender) }}</p>
                <p><strong>Phone:</strong> {{ $account->phone }}</p>
                <p><strong>Email:</strong> {{ $account->user->email }}</p>
                <p>
                    <strong>Role:</strong> 
                    @if (!empty(Auth::user()->getRoleNames()))
                        @foreach (Auth::user()->getRoleNames() as $v)
                            <label class="badge bg-primary">{{ $v }}</label>
                        @endforeach
                    @endif
                </p>
                @foreach ($organizations as $organization)
                    @if ($account->organization_id == $organization->id)
                        <p> <strong>Organization:</strong> {{ $organization->name }}</p>
                    @endif
                @endforeach
                @foreach ($addresses as $address)
                    @if ($account->address_id == $address->id)
                        <p> <strong>Address:</strong> {{ $address->country->name }}, {{ $address->state->name }} , {{ $address->city->name }}, {{ $address->district }}, {{ $address->street }}   </p>
                    @endif
                @endforeach
               
                
                @foreach ($currencies as $currency)
                    @if ($account->currency_id == $currency->id)
                        <p><strong>Currency:</strong> {{ $currency->name }} ({{ $currency->code }})</p>
                    @endif
                @endforeach
                @foreach ($languages as $language)
                    @if ($account->language_id == $language->id)
                        <p><strong>Language:</strong> {{ $language->name }} ({{ $language->code }})</p>
                    @endif    
                @endforeach
                
                <p><strong>Status:</strong> <label  class="badge bg-success">{{ ucfirst($account->status) }}</label></p>
                <p><strong>Created At:</strong> {{ \Carbon\Carbon::parse($account->created_at)->format('F j, Y') }}</label></p>
            </div>
        </div>
    </div> --}}

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            // Hide success alert after 3 seconds
            var successAlert = document.getElementById('success-alert');
            if (successAlert) {
                setTimeout(function() {
                    successAlert.style.display = 'none';
                }, 5000);
            }
        });
    </script>
@endsection
