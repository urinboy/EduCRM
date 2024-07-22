@extends('layouts.app')

@section('can', __('contact'))
@section('name', __('contacts'))
@section('title', __('section.view', ['show' => $contact->full_name]))

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

                    <a class="py-2 px-4 fw-bold shadow btn btn-primary" href="{{ route($__env->yieldContent('name').'.index') }}"><i class="fa fa-arrow-left"></i> {{ __('crud.btn_back') }}</a>
                </div>
            </div>
            <div class="card-body border-bottom">
                <div class="mt-1">
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
                </div>
            </div>
            <div class="card-body ">
                <h4>Personal information</h4>
                <p class="mb-0" id="view-detail-personal-info"> {{ $contact->message }}</p>
                <div class="mt-4">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center ps-0">
                            <span>Email:</span><span id="view-detail-email-id">{{ $contact->email }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center ps-0">
                            <span>Phone Number:</span><span id="view-detail-phone">{{ $contact->phone_number }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center ps-0">
                            <span>Last Contact:</span><span id="view-detail-last-contact">{{ \Carbon\Carbon::parse($contact->created_at)->format('F j, Y g:iA') }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center ps-0">
                            <span>Lead Status:</span><span id="view-detail-lead-status">In Progress</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center ps-0">
                            <span>IP Address:</span><span id="view-detail-ip-address">{{ $contact->ip_address }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center ps-0">
                            <span>Device:</span><span id="view-detail-device">{{ $contact->device }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center ps-0">
                            <span>Platform:</span><span id="view-detail-platform">{{ $contact->platform }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center ps-0">
                            <span>Browser:</span><span id="view-detail-browser">{{ $contact->browser }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center ps-0">
                            <span>Location:</span><span id="view-detail-location">{{ $contact->location }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center ps-0">
                            <span>Latitude:</span><span id="view-detail-latitude">{{ $contact->latitude }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center ps-0">
                            <span>Longitude:</span><span id="view-detail-longitude">{{ $contact->longitude }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center ps-0">
                            <span>MAC Address:</span><span id="view-detail-mac-address">{{ $contact->mac_address }}</span>
                        </li>
                    </ul>   
                </div>
            </div>
        </div>
    </div>

@endsection
