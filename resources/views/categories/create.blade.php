@extends('layouts.app')

@section('can', __('category'))
@section('name', 'categories')
@section('title', __('section.title_create', ['name' => $__env->yieldContent('can')]))

@section('heading')
    <h1 class="h3">@yield('title')</h1>
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
        aria-label="breadcrumb">
        <ol class="breadcrumb m-0 fs-7">
            <li class="breadcrumb-item"><a class="link-primary text-decoration-none"
                    href="{{ route('home') }}">{{ __('section.home') }}</a></li>
            <li class="breadcrumb-item"><a
                    href="{{ route($__env->yieldContent('name') . '.index') }}">{{ ucfirst($__env->yieldContent('name')) }}</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
        </ol>
    </nav>
@endsection

@section('content')
    <div class="my-3 d-flex justify-content-between">
        <h3>
            {{-- {{ __('section.create_form', ['form' => ucfirst($__env->yieldContent('can'))]) }} --}}
        </h3>
        <a class="py-2 px-4 fw-bold shadow btn btn-primary" href="{{ route($__env->yieldContent('name') . '.index') }}"><i
                class="fa fa-arrow-left"></i>
            {{ __('crud.btn_back') }}</a>
    </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            {{ __('message.oops') }}
        </div>
    @endif
    <form method="POST" action="{{ route($__env->yieldContent('name') . '.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row justify-content-around">
            <div class="col-12 col-md-8 my-3">
                <div class="card shadow bg-white border rounded p-2">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="name"
                                value="{{ old('name') }}" required>
                            @error('name')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="slug" class="form-label">Slug</label>
                            <input type="text" name="slug" class="form-control" id="slug"
                                value="{{ old('slug') }}" required>
                            @error('slug')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-12 col-md-12 mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" class="form-control" id="description">{{ old('description') }}</textarea>
                            @error('description')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 my-3">
                <div class="card shadow bg-white border rounded p-2">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="parent_id" class="form-label">Parent Category</label>
                            <select name="parent_id" class="form-control" id="parent_id">
                                <option value="{{ null }}">Select Parent Category</option>
                                @foreach ($categories as $parent)
                                    <option value="{{ $parent->id }}">{{ $parent->name }}</option>
                                @endforeach
                            </select>
                            @error('parent_id')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3 text-center">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" name="image" class="form-control" id="image" required>
                            <img id="image-preview" src="#" alt="Image Preview"
                                style="display:none; margin: 10px auto; width:100%; margin-top:10px;">
                            @error('image')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                    </div>
                </div>




            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2 d-flex justify-content-end">
                <button type="submit" class="shadow btn btn-success btn-sm mt-2 mb-3 px-5 py-2"><i
                        class="fa-solid fa-floppy-disk"></i> {{ __('crud.btn_create') }}</button>
            </div>
        </div>
    </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#name').on('input', function() {
                var name = $(this).val();
                var slug = name.toLowerCase().replace(/ /g, '-').replace(/[^\w-]+/g, '');
                $('#slug').val(slug);
            });

            $('#image').change(function() {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#image-preview').attr('src', e.target.result);
                    $('#image-preview').show();
                }
                reader.readAsDataURL(this.files[0]);
            });
        });
    </script>
    @endsection
