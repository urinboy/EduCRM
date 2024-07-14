@extends('layouts.app')

@section('title', __('Products'))

@section('heading')
    <div class="row mb-3">
        <div class="col-lg-6 col-sm-12 d-flex align-items-center">
            <h2 class="mb-0">@yield('title')</h2>
        </div>
        <div class="col-lg-6 col-sm-12 d-flex justify-content-end">
            @can('product-create')
            <a class="shadow btn btn-success my-2" href="{{ route('products.create') }}"><i class="fa fa-plus"></i> {{ __('Create New Product') }}</a>
            @endcan
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

    @session('success')
        <div class="alert alert-success" product="alert" id="success-alert">
            {{ $value }}
        </div>
    @endsession

    <div class="card shadow bg-white">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table  table-striped  table-bordered">
                    <tr>
                        <th>{{ __('№') }}</th>
                        <th>{{ __('Name') }}</th>
                        <th>{{ __('Details') }}</th>
                        <th width="280px">{{ __('Action') }}</th>
                    </tr>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->detail }}</td>
                            <td>
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                    <a class="btn btn-info btn-sm m-1 w-30"
                                        href="{{ route('products.show', $product->id) }}"><i class="fa-solid fa-eye"></i>
                                        {{ __('Show') }}</a>
                                    @can('product-edit')
                                        <a class="btn btn-primary btn-sm m-1 w-30"
                                            href="{{ route('products.edit', $product->id) }}"><i
                                                class="fa-solid fa-pen-to-square"></i> {{ __('Edit') }}</a>
                                    @endcan

                                    @can('product-delete')
                                        <button type="button" class="btn btn-danger btn-sm m-1 w-30" data-bs-toggle="modal"
                                            data-bs-target="#deleteModal" data-roleid="{{ $product->id }}"><i
                                                class="fa-solid fa-trash"></i> {{ __('Delete') }}</button>
                                    @endcan
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>

            </div>

            {!! $products->links('pagination::bootstrap-5') !!}
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">{{ __('Delete product') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{ __('Are you sure you want to delete this product?') }}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('Cancel') }}</button>
                    <form id="deleteForm" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i>
                            {{ __('Delete') }}</button>
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
                var roleId = button.getAttribute('data-roleid');
                var action = '{{ url('products') }}/' + roleId;
                var form = deleteModal.querySelector('#deleteForm');
                form.setAttribute('action', action);
            });

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
