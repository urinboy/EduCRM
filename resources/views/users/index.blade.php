@extends('layouts.app')

@section('title', __("Users Management"))

@section('heading')
<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/home">{{ __("Home") }}</a></li>
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

<div class="card shadow bg-white">
    <div class="card-header px-4 fs-4 d-flex flex-column flex-md-row align-items-center justify-content-between">
        <h3 class="mb-0">@yield('title')</h3>
        <a class="shadow btn btn-success my-2" href="{{ route('users.create') }}"><i class="fa fa-plus"></i> {{ __("Create New User") }}</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <tr>
                    <th>{{ __("№") }}</th>
                    <th>{{ __("Name") }}</th>
                    <th>{{ __("Email") }}</th>
                    <th>{{ __("Roles") }}</th>
                    <th width="280px">{{ __("Action") }}</th>
                </tr>
                @foreach ($data as $key => $user)
                 <tr>
                     <td>{{ ++$i }}</td>
                     <td>{{ $user->name }}</td>
                     <td>{{ $user->email }}</td>
                     <td>
                       @if(!empty($user->getRoleNames()))
                         @foreach($user->getRoleNames() as $v)
                            <label class="badge bg-success">{{ $v }}</label>
                         @endforeach
                       @endif
                     </td>
                     <td>
                          <a class="btn btn-info btn-sm m-1 w-30" href="{{ route('users.show',$user->id) }}"><i class="fa-solid fa-eye"></i> {{ __("Show") }}</a>
                          <a class="btn btn-primary btn-sm m-1 w-30" href="{{ route('users.edit',$user->id) }}"><i class="fa-solid fa-pen-to-square"></i> {{ __("Edit") }}</a>
                           <button type="button" class="btn btn-danger btn-sm m-1 w-30" data-bs-toggle="modal" data-bs-target="#deleteModal" data-userid="{{ $user->id }}"><i class="fa-solid fa-trash"></i> {{ __("Delete") }}</button>
                     </td>
                 </tr>
              @endforeach
             </table>
         </div>
         
         {!! $data->links('pagination::bootstrap-5') !!}    
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">{{ __("Delete User") }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        {{ __("Are you sure you want to delete this user?") }}
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
        var userId = button.getAttribute('data-userid');
        var action = '{{ url("users") }}/' + userId;
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
