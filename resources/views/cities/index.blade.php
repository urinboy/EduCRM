@extends('layouts.app')

@section('title', __("Cities Management"))

@section('heading')
<div class="row mb-3">
    <div class="col-lg-6 col-sm-12 d-flex align-items-center">
        <h2 class="mb-0">@yield('title')</h2>
    </div>
    <div class="col-lg-6 col-sm-12 d-flex justify-content-end">
        <a class="shadow btn btn-success my-2" href="{{ route('cities.create') }}"><i class="fa fa-plus"></i> {{ __("Create New City") }}</a>
    </div>
</div>
<div class="row">
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">{{ __("Home") }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
        </ol>
    </nav>
</div>
@endsection

@section('content')

@session('success')
    <div class="alert alert-success" role="alert" id="success-alert"> 
        {{ $value }}
    </div>
@endsession

<div class="card shadow bg-white">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table  table-striped  table-bordered">
                <tr>
                    <th>{{ __("№") }}</th>
                    <th>{{ __("City") }} {{ __("Name") }}</th>
                    <th>{{ __("State") }}</th>
                    <th>{{ __("Country") }}</th>
                    <th width="280px">{{ __("Action") }}</th>
                </tr>
                @foreach ($cities as $key => $city)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $city->name }}</td>
                        <td>{{ $city->state->name }}</td>
                        <td>{{ $city->state->country->name }}</td>
                        <td>
                            {{-- <a class="btn btn-info btn-sm m-1 w-30" href="{{ route('cities.show',$city->id) }}"><i class="fa-solid fa-eye"></i> {{ __("Show") }}</a> --}}
                            <a class="btn btn-primary btn-sm m-1 w-30" href="{{ route('cities.edit',$city->id) }}"><i class="fa-solid fa-pen-to-square"></i></a>
                            <button type="button" class="btn btn-danger btn-sm m-1 w-30" data-bs-toggle="modal" data-bs-target="#deleteModal" data-cityid="{{ $city->id }}"><i class="fa-solid fa-trash"></i></button>
                     
                        </td>
                    </tr>
                @endforeach

             </table>
         </div>
         
         {!! $cities->links('pagination::bootstrap-5') !!}    
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">{{ __("Delete City") }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        {{ __("Are you sure you want to delete this city?") }}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __("Cancel") }}</button>
        <form id="deleteForm" method="POST" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i> {{ __("Delete") }}</button>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var deleteModal = document.getElementById('deleteModal');
    deleteModal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget;
        var userId = button.getAttribute('data-cityid');
        var action = '{{ url("cities") }}/' + userId;
        var form = deleteModal.querySelector('#deleteForm');
        form.setAttribute('action', action);
    });

    // Hide success alert after 3 seconds
    var successAlert = document.getElementById('success-alert');
    if (successAlert) {
        setTimeout(function () {
            successAlert.style.display = 'none';
        }, 5000);
    }
});
</script>

@endsection
