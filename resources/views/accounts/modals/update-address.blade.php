<!-- Edit Address Modal -->
<div class="modal fade" id="editAddressModal" tabindex="-1" aria-labelledby="editAddressModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editAddressModalLabel">{{ __("Edit Address") }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('profile.address.update', $account->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <div class="form-group my-2">
                        <label class="fw-bold mt-2" for="country_id">{{ __("Country") }}</label>
                        <select class="form-control mt-2" id="country_id" name="country_id">
                            <option value="">{{ __("Select Country") }}</option>
                            @foreach ($countries as $country)
                                <option value="{{ $country->id }}"
                                    {{ old('country_id', $account->address->country_id) == $country->id ? 'selected' : '' }}>
                                    {{ $country->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('country_id')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="form-group my-2">
                        <label class="fw-bold mt-2" for="state_id">{{ __("State") }}</label>
                        <select class="form-control mt-2" id="state_id" name="state_id">
                            <option value="">{{ __("Select State") }}</option>
                            @foreach ($states as $state)
                            <option value="{{ $state->id }}"
                                {{ old('state_id', $account->address->state_id) == $state->id ? 'selected' : '' }}>
                                {{ $state->name }}</option>
                        @endforeach
                        </select>
                        @error('state_id')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="form-group my-2">
                        <label class="fw-bold mt-2" for="city_id">{{ __("City") }}</label>
                        <select class="form-control mt-2" id="city_id" name="city_id">
                            <option value="">{{ __("Select City") }}</option>
                            @foreach ($cities as $city)
                                <option value="{{ $city->id }}"
                                    {{ old('city_id', $account->address->city_id) == $city->id ? 'selected' : '' }}>
                                    {{ $city->name }}</option>
                            @endforeach
                        </select>
                        @error('city_id')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="form-group my-2">
                        <label class="fw-bold mt-2" for="district">{{ __("District") }}</label>
                        <input type="text" class="form-control mt-2" id="district" name="district" value="{{ old('district', $account->address->district) }}">
                        @error('district')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="form-group my-2">
                        <label class="fw-bold mt-2" for="street">{{ __("Street") }}</label>
                        <input type="text" class="form-control mt-2" id="street" name="street" value="{{ old('street', $account->address->street) }}">
                        @error('street')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="form-group my-2">
                        <label class="fw-bold mt-2" for="zip_code">{{ __("Zip Code") }}</label>
                        <input type="text" class="form-control mt-2" id="zip_code" name="zip_code" value="{{ old('zip_code', $account->address->zip_code) }}">
                        @error('zip_code')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="form-group my-2">
                        <label class="fw-bold mt-2" for="detail">{{ __("Detail") }}</label>
                        <textarea class="form-control mt-2" id="detail" name="detail" rows="3">{{ old('detail', $account->address->detail) }}</textarea>
                        @error('detail')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
        
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 d-flex justify-content-end">
                            <button type="submit" class="shadow btn btn-success btn-sm mt-2 mb-3 px-5 py-2"><i class="fa-solid fa-floppy-disk"></i> {{ __("crud.btn_update") }}</button>
                        </div>
                    </div>
                </form>
                {{-- <div class="form-group my-2">
                    <label class="fw-bold mt-2" for="country_id">Country</label>
                    <select class="form-control mt-2" id="country_id" name="country_id">
                        <!-- Populate countries dynamically -->
                        @foreach ($countries as $country)
                            <option value="{{ $country->id }}"
                                {{ old('country_id', $account->address->country_id) == $country->id ? 'selected' : '' }}>
                                {{ $country->name }}</option>
                        @endforeach
                    </select>
                    @error('country_id')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group my-2">
                    <label class="fw-bold mt-2" for="state_id">State</label>
                    <select class="form-control mt-2" id="state_id" name="state_id">
                        <!-- Populate states dynamically -->
                        @foreach ($states as $state)
                            <option value="{{ $state->id }}"
                                {{ old('state_id', $account->address->state_id) == $state->id ? 'selected' : '' }}>
                                {{ $state->name }}</option>
                        @endforeach
                    </select>
                    @error('state_id')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group my-2">
                    <label class="fw-bold mt-2" for="city_id">City</label>
                    <select class="form-control mt-2" id="city_id" name="city_id">
                        <!-- Populate cities dynamically -->
                        @foreach ($cities as $city)
                            <option value="{{ $city->id }}"
                                {{ old('city_id', $account->address->city_id) == $city->id ? 'selected' : '' }}>
                                {{ $city->name }}</option>
                        @endforeach
                    </select>
                    @error('city_id')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group my-2">
                    <label class="fw-bold mt-2" for="district">District</label>
                    <input type="text" class="form-control mt-2" id="district" name="district"
                        value="{{ old('district', $account->address->district) }}">
                    @error('district')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group my-2">
                    <label class="fw-bold mt-2" for="street">Street</label>
                    <input type="text" class="form-control mt-2" id="street" name="street"
                        value="{{ old('street', $account->address->street) }}">
                    @error('street')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group my-2">
                    <label class="fw-bold mt-2" for="zip_code">Zip Code</label>
                    <input type="text" class="form-control mt-2" id="zip_code" name="zip_code"
                        value="{{ old('zip_code', $account->address->zip_code) }}">
                    @error('zip_code')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group my-2">
                    <label class="fw-bold mt-2" for="detail">Detail</label>
                    <textarea class="form-control mt-2" id="detail" name="detail" rows="3">{{ old('detail', $account->address->detail) }}</textarea>
                    @error('detail')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div> --}}
            </div>
        </div>
    </div>
</div>
