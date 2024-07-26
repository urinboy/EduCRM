<!-- Edit Profile Modal -->
<div class="modal fade" id="editProfileModal" tabindex="-1" aria-labelledby="editProfileModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('profile.update') }}" method="POST">
                @csrf
                @method('PUT')
                
                <div class="modal-header">
                    <h5 class="modal-title" id="editProfileModalLabel">Edit Profile</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="first_name">{{ __('First Name') }}</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" value="{{ old('first_name', Auth::user()->account->first_name) }}">
                        @error('first_name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="last_name">{{ __("Last Name") }}</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" value="{{ old('last_name', Auth::user()->account->last_name) }}">
                        @error('last_name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="middle_name">{{ __("Middle Name") }}</label>
                        <input type="text" class="form-control" id="middle_name" name="middle_name" value="{{ old('middle_name', Auth::user()->account->middle_name) }}">
                        @error('middle_name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="username">{{ __("Username") }}</label>
                        <input type="text" class="form-control" id="username" name="username" value="{{ old('username', Auth::user()->name) }}">
                        @error('username')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="phone">{{ __("Phone") }}</label>
                        <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone', Auth::user()->account->phone) }}">
                        @error('phone')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="birthday">{{ __("Birthday") }}</label>
                        <input type="date" class="form-control" id="birthday" name="birthday" value="{{ old('birthday', Auth::user()->account->birthday) }}">
                        @error('birthday')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="gender">{{ __("Gender") }}</label>
                        <select class="form-control" id="gender" name="gender">
                            <option value="male" {{ old('gender', Auth::user()->account->gender) == 'male' ? 'selected' : '' }}>Male</option>
                            <option value="female" {{ old('gender', Auth::user()->account->gender) == 'female' ? 'selected' : '' }}>Female</option>
                            <option value="other" {{ old('gender', Auth::user()->account->gender) == 'other' ? 'selected' : '' }}>Other</option>
                        </select>
                        @error('gender')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __("crud.btn_cancel") }}</button>
                    <button type="submit" class="btn btn-primary" class="shadow btn btn-primary btn-sm mt-2 mb-3 px-5 py-2">
                        <i class="fa-solid fa-floppy-disk"></i> {{ __("crud.btn_update") }}</button>
                </div>
            </form>
        </div>
    </div>
</div>