<div class="row">
    <div class="col-12 col-md-4 mb-3">
        <div class="profile-img  text-center">
            @if ($account->photo)
                <img src="{{ asset('storage/' . $account->photo) }}" alt="Profile Photo" class="profile-img img-fluid rounded mb-2">
            @else
                <img src="{{ asset('dist/img/no-photo.png') }}" class="profile-img img-fluid rounded mb-2" alt="Profile Picture">
            @endif
            <div class="file px-4 py-1 btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#uploadModal">
                <i class="bi bi-upload"></i> Upload
            </div>
            <div class="file px-4 py-1 btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                <i class="bi bi-trash"></i> Delete
            </div>
        </div>

    </div>
    <div class="col-md-8">
        <h3 class="my-3 text-center fw-bold">{{ $account->first_name ?? __("Null")}} {{ $account->last_name ?? __("Null") }} {{ $account->middle_name ?? __("Null") }}</h3>
        <div class="row">
            <div class="col-12 col-md-6">
                <p class="form-control"><strong>{{ __('ID') }}:</strong> {{ $account->user->id }}</p>
                <p class="form-control"><strong>{{ __('Username') }}:</strong> {{ $account->user->name }}</p>
                <p class="form-control"><strong>{{ __("Role") }}:</strong>
                    @if (!empty(Auth::user()->getRoleNames()))
                        @foreach (Auth::user()->getRoleNames() as $v)
                            <label class="badge bg-primary">{{ $v }}</label>
                        @endforeach
                    @endif
                </p>
                <p class="form-control"><strong>{{ __('Email') }}:</strong> {{ $account->user->email }}</p>
            </div>
            <div class="col-12 col-md-6">
                <p class="form-control"><strong>{{ __("Phone") }}:</strong> {{ $account->phone }}</p>
                <p class="form-control"><strong>{{ __("Birthday") }}:</strong>
                    {{ date('d.m.Y', strtotime($account->birthday)) }}
                </p>
                <p class="form-control"><strong>{{ __("Gender") }}:</strong> {{ ucfirst($account->gender) }}</p>
                <p class="form-control"><strong>{{ __("Status") }}:</strong> <label class="badge bg-info">{{ ucfirst($account->status) }}</label></p>
            </div>
            
            <div class="col-12 col-md-12">
                <p class="form-control"><strong>{{ __('BIO') }}:</strong> {{ $account->bio }}</p>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 mt-2 d-flex justify-content-end">
        <button data-bs-toggle="modal" data-bs-target="#editProfileModal" class="shadow btn btn-success btn-sm mt-2 mb-3 px-5 py-2">
            <i class="fa-solid fa-floppy-disk"></i> {{ __('crud.btn_edit') }}
        </button>
    </div>
</div>