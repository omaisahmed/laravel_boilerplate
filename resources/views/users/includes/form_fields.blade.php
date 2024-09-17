@php
    $name = $user->name ?? old('name');
    $email = $user->email ?? old('email');
    $role_id = $user->role_id ?? old('role_id');
@endphp
<div class="block mb-0">
    <div class="row">
        <div class="col-lg-6 mb-4">
            <label class="form-label" for="name">Name <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $name }}">
            <span class="invalid-feedback animated fadeIn"></span>
        </div>
        <div class="col-lg-6 mb-4">
            <label class="form-label" for="email">Email <span class="text-danger">*</span></label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $email }}">
            <span class="invalid-feedback animated fadeIn"></span>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 mb-4">
            <label class="form-label" for="password">Password <span class="text-danger">*</span></label>
            <input type="password" class="form-control" id="password" name="password">
            <span class="invalid-feedback animated fadeIn"></span>
        </div>
        <div class="col-lg-6 mb-4">
            <label class="form-label" for="password_confirmation">Confirm Password <span
                    class="text-danger">*</span></label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
            <span class="invalid-feedback animated fadeIn"></span>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 mb-4">
            <label class="form-label" for="role_id">Role <span class="text-danger">*</span></label>
            <select class="js-select2 form-select" id="role_id" name="role_id" data-placeholder="Select Role">
              <option value="">Select Role</option>
              @foreach ($roles as $role)
                <option value="{{ $role->id }}" {{ isset($role_id) && $role_id == $role->id ? 'selected' : '' }}>{{ $role->name }}</option>
              @endforeach
            </select>
            <span class="invalid-feedback animated fadeIn"></span>
        </div>
    </div>
    <!-- Submit Button -->
    <x-submit-button :cancelRoute="route('users.index')" />
    <!-- Submit Button -->
</div>
