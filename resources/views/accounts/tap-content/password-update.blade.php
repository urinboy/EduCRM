<form action="{{ route('profile.password.update') }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group my-2">
        <label  class="form-label" for="current_password">Current Password</label>
        <input type="password" name="current_password" id="current_password"  class="form-control" required>
        @error('current_password')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group my-2">
        <label  class="form-lab el" for="new_password">New Password</label>
        <input type="password" name="new_password" id="new_password" class="form-control" required>
        @error('new_password')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group my-2">
        <label  class="form-label" for="new_password_confirmation">Confirm New Password</label>
        <input type="password" name="new_password_confirmation" id="new_password_confirmation" class="form-control" required>
        @error('new_password_confirmation')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 mt-2 d-flex justify-content-end">
        <button type="submit" class="shadow btn btn-primary btn-sm mt-2 mb-3 px-5 py-2"><i
                class="fa-solid fa-floppy-disk"></i> {{ __('crud.btn_update') }}</button>
    </div>
    {{-- <button type="submit" class="btn btn-primary">Change Password</button> --}}

    {{-- <div class="row gy-3 gy-xxl-4">
        <div class="col-12">
            <label for="currentPassword" class="form-label">Current Password</label>
            <input type="password" class="form-control" id="currentPassword">
        </div>
        <div class="col-12">
            <label for="newPassword" class="form-label">New Password</label>
            <input type="password" class="form-control" id="newPassword">
        </div>
        <div class="col-12">
            <label for="confirmPassword" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="confirmPassword">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Change Password</button>
        </div>
    </div> --}}
</form>