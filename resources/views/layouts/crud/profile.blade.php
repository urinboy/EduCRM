<div class="row gy-4 gy-lg-0">
    <div class="col-12 col-lg-4 col-xl-3">
        <div class="row gy-4">
            <div class="col-12">
                <div class="card widget-card border-light shadow-sm">
                    <div class="card-header text-bg-primary">Welcome, {{ Auth::user()->name }}</div>
                    <div class="card-body bg-white">
                        <div class="text-center mb-3">
                            <img src="@if (Storage::url($data->photo)) Storage::url($data->photo) @else /storage/photos/urinboydev.png @endif"
                                class="img-fluid rounded-circle" alt="Luna John">
                            {{-- <img src="{{ isset(Storage::url($data->photo)) ? Storage::url($data->photo) :'/storage/photos/urinboydev.png' }}" class="img-fluid rounded-circle" alt="{{ Auth::user()->name }}"> --}}
                        </div>
                        <h5 class="text-center mb-1">@ {{ Auth::user()->name }}</h5>
                        <p class="text-center text-secondary mb-4">
                            @if (!empty(Auth::user()->getRoleNames()))
                                @foreach (Auth::user()->getRoleNames() as $v)
                                    <label class="badge bg-success">{{ $v }}</label>
                                @endforeach
                            @endif
                        </p>
                        <ul class="list-group list-group-flush mb-4">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <h6 class="m-0">Followers</h6>
                                <span>7,854</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <h6 class="m-0">Following</h6>
                                <span>5,987</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <h6 class="m-0">Friends</h6>
                                <span>4,620</span>
                            </li>
                        </ul>
                        <div class="d-grid m-0">
                            <button class="btn btn-outline-primary" type="button">Follow</button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="col-12">
        <div class="card widget-card border-light shadow-sm">
            <div class="card-header text-bg-primary">Social Accounts</div>
            <div class="card-body bg-white">
                <a href="#!" class="d-inline-block bg-dark link-light lh-1 p-2 rounded">
                    <i class="bi bi-youtube"></i>
                </a>
                <a href="#!" class="d-inline-block bg-dark link-light lh-1 p-2 rounded">
                    <i class="bi bi-twitter-x"></i>
                </a>
                <a href="#!" class="d-inline-block bg-dark link-light lh-1 p-2 rounded">
                    <i class="bi bi-facebook"></i>
                </a>
                <a href="#!" class="d-inline-block bg-dark link-light lh-1 p-2 rounded">
                    <i class="bi bi-linkedin"></i>
                </a>
            </div>
        </div>
    </div> --}}

            {{-- <div class="col-12">
                <div class="card widget-card border-light shadow-sm">
                    <div class="card-header text-bg-primary">About Me</div>
                    <div class="card-body bg-white">
                        <ul class="list-group list-group-flush mb-0">
                            <li class="list-group-item">
                                <h6 class="mb-1">
                                    <span class="bii bi-mortarboard-fill me-2"></span>
                                    Education
                                </h6>
                                <span>M.S Computer Science</span>
                            </li>
                            <li class="list-group-item">
                                <h6 class="mb-1">
                                    <span class="bii bi-geo-alt-fill me-2"></span>
                                    Location
                                </h6>
                                <span>{{ $data->address->country->name ?? __('Null') }},
                                    {{ $data->address->state->name ?? __('Null') }},
                                    {{ $data->address->city->name ?? __('Null') }},
                                    {{ $data->address->district ?? __('Null') }},
                                    {{ $data->address->street ?? __('Null') }}.</span>
                            </li>
                            <li class="list-group-item">
                                <h6 class="mb-1">
                                    <span class="bii bi-building-fill-gear me-2"></span>
                                    Company
                                </h6>
                                <span>{{ $data->organization->name ?? __('Null') }} </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="col-12">
        <div class="card widget-card border-light shadow-sm">
            <div class="card-header text-bg-primary">Skills</div>
            <div class="card-body bg-white">
                <span class="badge text-bg-primary">HTML</span>
                <span class="badge text-bg-primary">SCSS</span>
                <span class="badge text-bg-primary">Javascript</span>
                <span class="badge text-bg-primary">React</span>
                <span class="badge text-bg-primary">Vue</span>
                <span class="badge text-bg-primary">Angular</span>
                <span class="badge text-bg-primary">UI</span>
                <span class="badge text-bg-primary">UX</span>
            </div>
        </div>
    </div> --}}

        </div>
    </div>
    <div class="col-12 col-lg-8 col-xl-9">
        <div class="card widget-card border-light shadow-sm">
            <div class="card-body bg-white p-4">
                <ul class="nav nav-tabs" id="profileTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="overview-tab" data-bs-toggle="tab"
                            data-bs-target="#overview-tab-pane" type="button" role="tab"
                            aria-controls="overview-tab-pane" aria-selected="true">Overview</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                            data-bs-target="#profile-tab-pane" type="button" role="tab"
                            aria-controls="profile-tab-pane" aria-selected="false">Profile</button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="password-tab" data-bs-toggle="tab"
                            data-bs-target="#password-tab-pane" type="button" role="tab"
                            aria-controls="password-tab-pane" aria-selected="false">Password</button>
                    </li>
                </ul>

                <div class="tab-content pt-4" id="profileTabContent">
                    <div class="tab-pane fade show active" id="overview-tab-pane" role="tabpanel"
                        aria-labelledby="overview-tab" tabindex="0">
                        <h5 class="mb-3">About</h5>
                        <p class="lead mb-3">{{ $data->bio ?? __('Null') }}</p>
                        <h5 class="mb-3">Profile</h5>
                        <div class="row g-0">
                            <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
                                <div class="p-2">Full Name</div>
                            </div>
                            <div class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
                                <div class="p-2">{{ $data->first_name ?? __('Null') }}
                                    {{ $data->last_name ?? __('Null') }} {{ $data->middle_name ?? __('Null') }}
                                </div>
                            </div>
                            <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
                                <div class="p-2">Birth Day</div>
                            </div>
                            <div class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
                                <div class="p-2">
                                    {{ $data->birthday ? \Carbon\Carbon::parse($data->birthday)->format('F j, Y') : __('Null') }}
                                </div>
                            </div>
                            <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
                                <div class="p-2">Gender</div>
                            </div>
                            <div class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
                                <div class="p-2">{{ $data->gender ?? __('Null') }}</div>
                            </div>
                            <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
                                <div class="p-2">Address</div>
                            </div>
                            <div class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
                                <div class="p-2">
                                    {{ $data->address->country->name ?? __('Null') }},
                                    {{ $data->address->state->name ?? __('Null') }},
                                    {{ $data->address->city->name ?? __('Null') }},
                                    {{ $data->address->district ?? __('Null') }},
                                    {{ $data->address->street ?? __('Null') }}
                                </div>
                            </div>
                            <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
                                <div class="p-2">Organization</div>
                            </div>
                            <div class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
                                <div class="p-2">{{ $data->organization->name ?? __('Null') }}</div>
                            </div>
                            <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
                                <div class="p-2">Role</div>
                            </div>
                            <div class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
                                <div class="p-2">
                                    @if (!empty(Auth::user()->getRoleNames()))
                                        @foreach (Auth::user()->getRoleNames() as $v)
                                            <label class="badge bg-success">{{ $v }}</label>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                            <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
                                <div class="p-2">Phone</div>
                            </div>
                            <div class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
                                <div class="p-2">{{ $data->phone ?? __('Null') }}</div>
                            </div>
                            <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
                                <div class="p-2">Email</div>
                            </div>
                            <div class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
                                <div class="p-2">{{ Auth::user()->email }}</div>
                            </div>
                            <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
                                <div class="p-2">Language</div>
                            </div>
                            <div class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
                                <div class="p-2">{{ $data->language->name ?? __('Null') }}</div>
                            </div>
                            <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
                                <div class="p-2">Currency</div>
                            </div>
                            <div class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
                                <div class="p-2"> {{ $data->currency->name ?? __('Null') }}
                                    ({{ $data->currency->code ?? __('Null') }})</div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
                        tabindex="0">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                {{ __('message.oops') }}
                            </div>
                        @endif
                        @include('account.update')

                    </div>

                    <div class="tab-pane fade" id="password-tab-pane" role="tabpanel" aria-labelledby="password-tab"
                        tabindex="0">
                        @include('account.password-update')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
