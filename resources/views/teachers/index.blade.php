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
        <div class="page-header bg-white mb-4 p-4 border rounded">
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
        </div>


        <div class="card bg-white my-3">
            <div class="card-body">
                <div class="user-tabel table-responsive">
                    {{-- @php
                        $teacherUsers = $users->filter(function ($user) {
                            return $user->getRolesName() === 'Teacher';
                        });
                    @endphp --}}

                    @if ($users->isEmpty())
                        <p>No teachers found.</p>
                    @else
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Subject</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    @foreach ($teachers as $teacher)
                                        @if ($teacher->user_id == $user->id)
                                            <tr>
                                                <td>{{ $teacher->id }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $teacher->subject }}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                    {{-- <table class="table card-table table-bordered table-hover table-vcenter text-nowrap table-user">
                        <tbody>
                            <tr>
                                <th class="font-weight-bold">Member</th>
                                <th class="font-weight-bold">Name</th>
                                <th class="font-weight-bold">Membership Status</th>
                                <th class="font-weight-bold">Member Since</th>
                                <th class="font-weight-bold"></th>
                            </tr>
                            
                            <tr>
                                <td class=""><span class="avatar avatar-md  d-block brround cover-image"
                                        data-bs-image-src="../assets/images/users/female/20.jpg"
                                        style="background: url(&quot;../assets/images/users/female/20.jpg&quot;) center center;"></span>
                                </td>
                                <td><a href="userprofile.html" class="text-dark font-weight-bold">Jane Pearson</a></td>
                                <td><a href="javascript:void(0)" class="badge bg-success">Active</a></td>
                                <td>December-05-2018</td>
                                <td class="text-center"> <a href="userprofile.html"
                                        class="btn btn-outline-primary btn-sm me-1" data-bs-toggle="tooltip"
                                        data-bs-original-title="View"><i class="fa-solid fa-eye"></i></a> <a
                                        href="edit-posts.html" class="btn btn-outline-success btn-sm me-1"
                                        data-bs-toggle="tooltip" data-bs-original-title="Edit"><i
                                            class="fa-solid fa-pen-to-square"></i></a> <a href="javascript:void(0)"
                                        class="btn btn-outline-danger btn-sm" data-bs-toggle="tooltip"
                                        data-bs-original-title="Delete"><i class="fa-solid fa-trash"></i></a> </td>
                            </tr>
                            
                            <tr>
                                <td><span class="avatar avatar-md  d-block brround cover-image"
                                        data-bs-image-src="../assets/images/users/female/16.jpg"
                                        style="background: url(&quot;../assets/images/users/female/16.jpg&quot;) center center;"></span>
                                </td>
                                <td><a href="userprofile.html" class="text-dark font-weight-bold">Mary Butler</a></td>
                                <td><a href="javascript:void(0)" class="badge bg-info">Paused</a></td>
                                <td>November-29-2018</td>
                                <td class="text-center"> <a href="userprofile.html"
                                        class="btn btn-outline-primary btn-sm me-1" data-bs-toggle="tooltip"
                                        data-bs-original-title="View"><i class="fa-solid fa-eye"></i></a> <a
                                        href="edit-posts.html" class="btn btn-outline-success btn-sm me-1"
                                        data-bs-toggle="tooltip" data-bs-original-title="Edit"><i
                                            class="fa-solid fa-pen-to-square"></i></a> <a href="javascript:void(0)"
                                        class="btn btn-outline-danger btn-sm" data-bs-toggle="tooltip"
                                        data-bs-original-title="Delete"><i class="fa-solid fa-trash"></i></a> </td>
                            </tr>
                            
                            <tr>
                                <td><span class="avatar avatar-md  d-block brround cover-image"
                                        data-bs-image-src="../assets/images/users/female/16.jpg"
                                        style="background: url(&quot;../assets/images/users/female/16.jpg&quot;) center center;"></span>
                                </td>
                                <td><a href="userprofile.html" class="text-dark font-weight-bold">Rose Cook</a></td>
                                <td><a href="javascript:void(0)" class="badge bg-danger">Blocked</a></td>
                                <td>November-15-2018</td>
                                <td class="text-center"> <a href="userprofile.html"
                                        class="btn btn-outline-primary btn-sm me-1" data-bs-toggle="tooltip"
                                        data-bs-original-title="View"><i class="fa-solid fa-eye"></i></a> <a
                                        href="edit-posts.html" class="btn btn-outline-success btn-sm me-1"
                                        data-bs-toggle="tooltip" data-bs-original-title="Edit"><i
                                            class="fa-solid fa-pen-to-square"></i></a> <a href="javascript:void(0)"
                                        class="btn btn-outline-danger btn-sm" data-bs-toggle="tooltip"
                                        data-bs-original-title="Delete"><i class="fa-solid fa-trash"></i></a> </td>
                            </tr>
                            
                        </tbody>
                    </table> --}}
                </div>
            </div>
        </div>
        <ul class="pagination mb-0">
            <li class="page-item page-prev disabled"> <a class="page-link" href="javascript:void(0)" tabindex="-1">Prev</a>
            </li>
            <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0)">5</a></li>
            <li class="page-item page-next"> <a class="page-link" href="javascript:void(0)">Next</a> </li>
        </ul>
    </div>

@endsection
