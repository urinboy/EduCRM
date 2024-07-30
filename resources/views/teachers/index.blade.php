@extends('layouts.app')

@section('can', __('teacher'))
@section('name', 'teachers')
@section('title', __('section.title_manage', ['name' => ucfirst(__($__env->yieldContent('name')))]))

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

    @session('success')
        <div class="alert alert-success" role="alert" id="success-alert">
            {{ $value }}
        </div>
    @endsession

    <div class="row flex-row my-3">
        <div class="col-12">
            <div class="px-3 my-2 d-flex justify-content-between">
                <h3>{{ __('section.list_of', ['lists' => __($__env->yieldContent('name'))]) }}</h3>
                <a class="py-2 px-4 fw-bold shadow btn btn-success"
                    href="{{ route($__env->yieldContent('name') . '.create') }}"><i class="fa fa-plus"></i>
                    {{ __('crud.btn_create') }}</a>
            </div>
        </div>
    </div>
    <style>
        .page-header {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .form-select {
            max-width: 200px;
            margin-right: 10px;
        }

        .input-group-text button {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
    <div class="col-lg-12 users-list" data-select2-id="24">
        {{-- <div class="page-header bg-white mb-4 p-4 border rounded">
            <select class="form-select bg-white select2 page-select" aria-label="Select Options">
                <option value="0">Select Options</option>
                <option value="1">Active</option>
                <option value="2">Online</option>
                <option value="3">Blocked</option>
                <option value="4">Suspended</option>
                <option value="5">A-Z</option>
            </select>
            <div class="page-options bg-white d-flex mt-3">
                <div class="input-group">
                    <input type="text" class="form-control bg-white" placeholder="search">
                    <button class="btn btn-primary" type="button">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
        </div> --}}

        <div class="card bg-white my-3">
            <div class="card-body">
                <div class="user-tabel table-responsive">
                    @if ($teachers->isEmpty())
                        <p>No teachers found.</p>
                    @else
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Photo</th>
                                    <th>Account Name</th>
                                    <th>Hire Date</th>
                                    <th>Date of Resignation</th>
                                    <th>Work Experience</th>
                                    <th>Created At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($teachers as $key =>  $teacher)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>
                                            @if ($teacher->account->photo)
                                                <img src="{{ asset('storage/' . $teacher->account->photo) }}"
                                                    class="img-fluid rounded mb-2" alt="Profile Photo" width="64px">
                                            @else
                                                <img src="{{ asset('dist/img/no-photo.png') }}"
                                                    class="img-fluid rounded mb-2" alt="Profile Photo" width="64px">
                                            @endif
                                        </td>
                                        <td>{{ $teacher->account->first_name . ' ' . $teacher->account->last_name . ' ' . $teacher->account->middle_name }}</td>
                                        <td>{{ date('d.m.Y', strtotime($teacher->hire_date)) }}</td>
                                        <td>{{ $teacher->date_of_resignation }}</td>
                                        <td>{{ $teacher->work_experience }}</td>
                                        <td> {{ date('d.m.Y', strtotime($teacher->created_at)) }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif

                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            {{ $teachers->links() }}
        </div>
    </div>

@endsection
