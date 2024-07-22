@extends('layouts.app')

@section('can', __('contact'))
@section('name', __('contacts'))
@section('title', __('section.title_manage', ['name' => ucfirst($__env->yieldContent('name'))]))

@section('heading')
    <h1 class="h3">@yield('title')</h1>
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
        aria-label="breadcrumb">
        <ol class="breadcrumb m-0 fs-7">
            <li class="breadcrumb-item"><a class="link-primary text-decoration-none"
                    href="{{ route('home') }}">{{ __('section.home') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
        </ol>
    </nav>
@endsection

@section('content')

    <div>
        <!-- row -->
        <div class="row">
            <div class="{{ $contact ? 'col-xxl-9 col-lg-8 col-12' : 'col-12' }}">
                <!-- card -->
                <div class="card mb-4  bg-white" id="contact-list">
                    <div class="card-header bg-white d-lg-flex justify-content-between ">
                        <div class="d-grid d-lg-block">
                            <a href="#!" class="btn btn-primary" id="contact-modal-button" data-bs-toggle="modal"
                                data-bs-target="#contact-modal">+
                                Create New Contact</a>
                        </div>
                        <div class="d-flex mt-3 mt-lg-0">
                            <form action="#">
                                <div class="input-group ">
                                    <input class="form-control rounded-3 search" type="search" value=""
                                        id="searchInput" placeholder="Search">
                                    <span class="input-group-append">
                                        <button class="btn  ms-n10 rounded-0 rounded-end" type="button">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-search text-dark">
                                                <circle cx="11" cy="11" r="8"></circle>
                                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                            </svg>
                                        </button>
                                    </span>
                                </div>
                            </form>
                            <a href="#!" class="btn btn-outline-white ms-2">Import</a>
                            <a href="#!" class="btn btn-danger-soft btn-icon ms-2 texttooltip"
                                data-template="trashTwo">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-trash-2 icon-xs">
                                    <polyline points="3 6 5 6 21 6"></polyline>
                                    <path
                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                    </path>
                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                </svg>
                                <div id="trashTwo" class="d-none">
                                    <span>Delete</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive table-card">
                            <table class="table table-striped text-nowrap mb-0 table-centered">
                                <thead class="table-light">
                                    <tr>
                                        <th class=" pe-0  ">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="checkAll">
                                                <label class="form-check-label" for="checkAll">

                                                </label>
                                            </div>
                                        </th>
                                        <th class="ps-1 sort" default-sort-order="asc" data-sort="name">Name</th>
                                        <th class="sort" data-sort="email_id">Email</th>
                                        <th class="sort" data-sort="phone">Phone Number</th>
                                        {{-- <th class="sort" data-sort="company_name">Company</th> --}}
                                        <th class="sort" data-sort="last_contact">Last Contact</th>
                                        <th>Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="list contact-list-container bg-white" style="height:250px">
                                    @if (count($data) > 0)
                                        @foreach ($data as $key => $value)
                                            <tr class="fw-bold">
                                                <td class=" pe-0">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="contactCheckbox{{ $value->id }}">
                                                        <label class="form-check-label" for="contactCheckbox{{ $value->id }}"></label>
                                                    </div>
                                                </td>
                                                <td class="id" style="display:none;">#{{ $value->id }}</td>
                                                <td class=" ps-1">
                                                    <div class="d-flex align-items-center">
                                                        <div class="ms-2">
                                                            <h5 class="mb-0">
                                                                <a href="{{ route('contacts.show', $value->id) }}"class="text-inherit name view-item-btn" style="text-decoration:none; color:#650365;"> {{ $value->full_name }}</a>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="email_id"> {{ $value->email }}</td>
                                                <td class="phone"> {{ $value->phone_number }}</td>
                                                <td class="last_contact">{{ \Carbon\Carbon::parse($value->created_at)->format('F j, Y g:iA') }}</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
        
                                                        <div class="dropdown">
                                                            <a class="btn btn-ghost btn-icon btn-sm rounded-circle" href="#!"
                                                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                    class="feather feather-more-vertical icon-xs">
                                                                    <circle cx="12" cy="12" r="1"></circle>
                                                                    <circle cx="12" cy="5" r="1"></circle>
                                                                    <circle cx="12" cy="19" r="1"></circle>
                                                                </svg>
                                                            </a>
        
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item d-flex align-items-center view-item-btn" href="#!">View</a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item d-flex align-items-center edit-item-btn" href="#!">Edit</a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item d-flex align-items-center remove-item-btn" href="#!">Delete</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>

                                                
                                                {{-- <td>
                                                    @can($__env->yieldContent('can') . '-show')
                                                        <a class="btn btn-info btn-sm m-1 w-30"
                                                            href="{{ route($__env->yieldContent('name') . '.show', $value->id) }}"><i
                                                                class="fa-solid fa-eye"></i></a>
                                                    @endcan
                                                    @can($__env->yieldContent('can') . '-edit')
                                                        <a class="btn btn-primary btn-sm m-1 w-30"
                                                            href="{{ route($__env->yieldContent('name') . '.edit', $value->id) }}"><i
                                                                class="fa-solid fa-pen-to-square"></i></a>
                                                    @endcan
                                                    @can($__env->yieldContent('can') . '-delete')
                                                        <button type="button" class="btn btn-danger btn-sm m-1 w-30" data-bs-toggle="modal"
                                                            data-bs-target="#deleteModal" data-sectionid="{{ $value->id }}"><i
                                                                class="fa-solid fa-trash"></i></button>
                                                    @endcan

                                                </td> --}}
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="6" class="text-center fw-bold">
                                                {{ __('message.data_not_available') }}
                                            </td>
                                        </tr>
                                    @endif

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="bg-white mx-3">
                        {!! $data->links('pagination::bootstrap-5') !!}
                    </div>

                </div>
            </div>
            @if (isset($contact))
            <div class="col-xxl-3 col-lg-4">
                <div class="card bg-white" id="contact-view-detail">
                    <div class="card-body border-bottom">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <img src="https://new.urinboydev.uz/static/media/favicon.9f15ba03dac502a26263.png" alt="Image" style="height: 3rem; width: 3rem" id="view-detail-image" class="avatar-lg avatar rounded-circle">

                                <div class="ms-4">
                                    <h3 class="mb-0 fs-4" id="view-detail-name">{{ $contact->full_name }}</h3>
                                    <small id="view-detail-current-job"></small>
                                </div>
                            </div>
                            <div>

                                <div class="dropdown">
                                    <a class="btn btn-ghost btn-icon btn-sm rounded-circle" href="#!"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-more-vertical icon-xs">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="12" cy="5" r="1"></circle>
                                            <circle cx="12" cy="19" r="1"></circle>
                                        </svg>
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item d-flex align-items-center" href="#!">Action</a>
                                        </li>
                                        <li><a class="dropdown-item d-flex align-items-center" href="#!">Another
                                                action</a></li>
                                        <li><a class="dropdown-item d-flex align-items-center" href="#!">Something
                                                else here</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="mt-5">
                            <a href="#!" class="btn btn-light btn-icon rounded-circle texttooltip"
                                data-template="voicecallOne">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-phone-call icon-xs">
                                    <path
                                        d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                    </path>
                                </svg>
                                <div id="voicecallOne" class="d-none">
                                    <span>Voice Call</span>
                                </div>
                            </a>
                            <a href="#!" class="btn btn-light btn-icon rounded-circle texttooltip"
                                data-template="mailOne">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail icon-xs">
                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                    </path>
                                    <polyline points="22,6 12,13 2,6"></polyline>
                                </svg>
                                <div id="mailOne" class="d-none">
                                    <span>Mail</span>
                                </div>
                            </a>
                        </div> --}}
                    </div>
                    <div class="card-body ">
                        <h4>Personal information</h4>
                        {{-- <p class="mb-0" id="view-detail-personal-info"> {{ $contact->message }}</p> --}}
                        <div class="mt-4">
                            <ul class="list-group list-group-flush bg-white">
                                <li class="list-group-item d-flex justify-content-between align-items-center ps-0  bg-white">
                                    <span>Email:</span><span id="view-detail-email-id">{{ $contact->email }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center ps-0  bg-white">
                                    <span>Phone Number:</span><span id="view-detail-phone">{{ $contact->phone_number }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center ps-0  bg-white">
                                    <span>Last Contact:</span><span id="view-detail-last-contact">{{ Carbon\Carbon::parse($contact->created_at)->diffForHumans() }}</span>
                                    {{-- <span>Last Contact:</span><span id="view-detail-last-contact">{{ \Carbon\Carbon::parse($contact->created_at)->format('F j, Y g:iA') }}</span> --}}
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center ps-0  bg-white">
                                    <span>Lead Status:</span><span id="view-detail-lead-status">In Progress</span>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>

    {{-- <div class="row">
    <div class="col-12">
        <button class="btn btn-primary mb-3">+ Create New Contact</button>
        <div class="row">
            <div class="col-md-8">
                
                <a href="#!" class="btn btn-light btn-icon rounded-circle texttooltip"
                    data-template="messageEleven">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-message-square icon-xs">
                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                    </svg>
                    <div id="messageEleven" class="d-none">
                        <span>Message</span>
                    </div>
                </a>

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Company</th>
                            <th scope="col">Last Contact</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Example contact row -->
                        <tr>
                            <td>
                                <img src="https://via.placeholder.com/40" class="rounded-circle me-2" alt="Herbert Stokes">
                                Herbert Stokes
                            </td>
                            <td>herbert@dashuipro.com</td>
                            <td>740-320-9874</td>
                            <td>Dash UI</td>
                            <td>July 23, 2022 12:00PM</td>
                        </tr>
                        <!-- Additional contact rows can be added similarly -->
                    </tbody>
                </table>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <img src="https://via.placeholder.com/80" class="rounded-circle me-3" alt="Dan Shutts">
                            <div>
                                <h5 class="card-title mb-0">Dan Shutts</h5>
                                <p class="text-muted mb-0">UX Designer at Olympic Sports</p>
                            </div>
                        </div>
                        <p class="card-text">Personal information</p>
                        <p>The most effective objective is one that is tailored to the job you are applying for. It states what kind of career you are seeking, and what skills and experiences you have that make you ideal for that career.</p>
                        <ul class="list-unstyled">
                            <li><strong>Email ID:</strong> danshutts@teleworm.us</li>
                            <li><strong>Phone No:</strong> 626-209-2472</li>
                            <li><strong>Last Contact:</strong> July 23, 2022 12:24PM</li>
                            <li><strong>Lead Status:</strong> In Progress</li>
                            <li><strong>Designation:</strong> UX Designer</li>
                        </ul>
                        <div class="d-flex justify-content-around mt-3">
                            <button class="btn btn-outline-secondary">Call</button>
                            <button class="btn btn-outline-secondary">Message</button>
                            <button class="btn btn-outline-secondary">Email</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-between mt-3">
            <button class="btn btn-secondary">Import</button>
            <button class="btn btn-danger">Delete</button>
        </div>
    </div>
</div> --}}

@endsection
