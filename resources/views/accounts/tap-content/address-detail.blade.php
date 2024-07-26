<div class="row">
    <div class="col-12 col-md-6">
        <p class="form-control"><strong>{{ __('Country') }}:</strong> {{ $account->address->country->name }}</p>
        <p class="form-control"><strong>{{ __('State') }}:</strong> {{ $account->address->state->name }}</p>
        <p class="form-control"><strong>{{ __('City') }}:</strong> {{ $account->address->city->name }}</p>
    </div>
    <div class="col-12 col-md-6">
        <p class="form-control"><strong>{{ __("District") }}:</strong> {{ $account->address->district }}</p>
        <p class="form-control"><strong>{{ __("Street") }}:</strong> {{ $account->address->street }}</p>
        <p class="form-control"><strong>{{ __("Zip Code") }}:</strong> {{ $account->address->zip_code }}</p>
    </div>
    <div class="col-12 col-md-12">
        <p class="form-control"><strong>{{ __("Detail") }}:</strong> {{ $account->address->detail }}</p>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 mt-2 d-flex justify-content-end">
        <button data-bs-toggle="modal" data-bs-target="#editAddressModal" class="shadow btn btn-success btn-sm mt-2 mb-3 px-5 py-2"><i class="fa-solid fa-floppy-disk"></i> {{ __('crud.btn_edit') }}</button>
    </div>
</div>