@extends('layouts.app')

@section('can', __('category'))
@section('name', 'categories')
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

    {{-- <div class="card shadow bg-white">
        <div class="card-header bg-white mb-3">
            
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table  table-striped  table-bordered">
                    <tr>
                        <th>{{ __('№') }}</th>
                        <th>{{ __('Image') }}</th>
                        <th>{{ ucfirst( __('category') ) }} {{ __('Name') }}</th>
                        <th>{{ __('Description') }}</th>
                        <th>{{ __('Parent') }}</th>
                        <th width="280px">{{ __('Action') }}</th>
                    </tr>
                    @if (count($data) > 0)
                        @foreach ($data as $key => $value)
                            <tr class="align-items-center justify-content-center w-10">
                                <td>{{ ++$key }}</td>
                                <td>
                                    @if ($value->image)
                                        <img src="{{ Storage::url($value->image) }}" alt="{{ $value->name }}" width="50">
                                    @endif
                                </td>
                                <td>{{ $value->name }}</td>
                                <td>{{ $value->description }}</td>
                                <td>{{ optional($value->parent)->name ?? __('Null') }}</td>
                                <td>
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

                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="6" class="text-center fw-bold">
                                {{ __('message.data_not_available') }}
                            </td>
                        </tr>
                    @endif
                </table>
            </div>

            {!! $data->links('pagination::bootstrap-5') !!}
        </div>
    </div>
     --}}
    <div class="row flex-row">
        <div class="col-12">
            <div class="px-3 my-2 d-flex justify-content-between">
                <h3>{{ __('section.list_of', ['lists' => __($__env->yieldContent('name'))]) }}</h3>
                <a class="py-2 px-4 fw-bold shadow btn btn-success"
                    href="{{ route($__env->yieldContent('name') . '.create') }}"><i class="fa fa-plus"></i>
                    {{ __('crud.btn_create') }}</a>
            </div>
        </div>
        @if (count($data) > 0)
            @foreach ($data as $key => $value)
                <div class="col-12 col-md-4 my-2">
                    <div class="card shadow bg-white">
                        <div class="card-header h-30 p-0">
                            @if ($value->image)
                                <img src="{{ Storage::url($value->image) }}" alt="{{ $value->name }}"
                                    class="w-100 rounded">
                                    @else
                                    <img src="{{ asset('dist/img/default.png') }}" alt="{{ $value->name }}"
                                    class="w-100 rounded">
                            @endif
                        </div>
                        <div class="card-body p-3 rounded">
                            <h4>{{ $value->name }}</h4>
                            <div class="d-flex justify-content-between my-1">
                                <span>
                                    <i class="bi bi-calendar-event"></i>
                                    {{ date('d.m.Y', strtotime($value->created_at)) }}
                                </span>
                                @if ($value->parent)
                                    <span>
                                        <i class="bi bi-folder"></i>
                                        {{ optional($value->parent)->name }}
                                    </span>
                                @else
                                    <code>{{ __('No Parent') }}</code>
                                @endif

                            </div>
                            <p>{{ $value->description }}</p>
                            <div>
                                <strong>{{ __('Slug') }}: </strong>
                                <code>{{ $value->slug }}</code>
                            </div>
                        </div>
                        <div class="card-footer bg-white d-flex flex-sm-column flex-md-row justify-content-around">
                            @can($__env->yieldContent('can') . '-show')
                                <a class="btn btn-info btn-sm m-1 px-4"
                                    href="{{ route($__env->yieldContent('name') . '.show', $value->id) }}">
                                    <i class="fa-solid fa-eye"></i>
                                    {{ __('crud.btn_view') }}
                                </a>
                            @endcan
                            @can($__env->yieldContent('can') . '-edit')
                                <a class="btn btn-primary btn-sm m-1 px-4"
                                    href="{{ route($__env->yieldContent('name') . '.edit', $value->id) }}">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                    {{ __('crud.btn_edit') }}
                                </a>
                            @endcan
                            @can($__env->yieldContent('can') . '-delete')
                                <button type="button" class="btn btn-danger btn-sm m-1 px-4" data-bs-toggle="modal"
                                    data-bs-target="#deleteModal" data-sectionid="{{ $value->id }}">
                                    <i class="fa-solid fa-trash"></i>
                                    {{ __('crud.btn_delete') }}
                                </button>
                            @endcan
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="col-12">
                <div class="card shadow bg-white my-3">
                    <div class="card-body text-center text-danger fw-bold">
                        {{ __('message.data_not_available') }}
                    </div>
                </div>
            </div>
        @endif
    </div>


    <!-- Delete Confirmation Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">{{ __('crud.btn_delete') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="{{ __('crud.btn_close') }}"></button>
                </div>
                <div class="modal-body text-center">
                    {{ __('message.delete_confirmation', ['name' => lcfirst(__('section.name', ['name' => __($__env->yieldContent('can'))]))]) }}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal">{{ __('crud.btn_cancel') }}</button>
                    <form id="deleteForm" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i>
                            {{ __('crud.btn_delete') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var deleteModal = document.getElementById('deleteModal');
            deleteModal.addEventListener('show.bs.modal', function(event) {
                var button = event.relatedTarget;
                var sectionId = button.getAttribute('data-sectionid');
                var action = '{{ url($__env->yieldContent('name')) }}/' + sectionId;
                var form = deleteModal.querySelector('#deleteForm');
                form.setAttribute('action', action);
            });
        });
    </script>

@endsection
