@extends('layouts.app')

@section('css')
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('js/plugins/select2/css/select2.min.css') }}">
@endsection

@section('js')
    <!-- jQuery -->
    <script src="{{ asset('js/lib/jquery.min.js') }}"></script>
    <!-- Page JS Plugins -->
    <script src="{{ asset('js/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
    <!-- Page JS Code -->
    @vite(['resources/assets/js/pages/select2.full.js','resources/assets/js/pages/be_comp_dialogs.js'])
@endsection

@section('content')
    <!-- Breadcrumb -->
    @php
        $breadcrumbs = [['name' => 'Users', 'url' => route('users.index')], ['name' => 'Create', 'url' => '#']];
        $title = 'Users';
    @endphp
    <x-breadcrumb :items="$breadcrumbs" :title="$title" />
    <!-- END Breadcrumb -->

    <!-- Page Content -->
    <div class="content">
        <!-- Dynamic Table with Export Listings Buttons -->
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    Create User
                </h3>
            </div>
            <div class="block-content block-content-full overflow-x-auto">
                <form class="js-swal-store" action="{{ route('users.store') }}" method="POST">
                    @csrf
                    <div class="block mb-0">
                        <div class="row">
                            <div class="col-lg-6 mb-4">
                                <label class="form-label" for="name">Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="name" name="name">
                                <span class="invalid-feedback animated fadeIn"></span>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <label class="form-label" for="email">Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="email" name="email">
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
                                <label class="form-label" for="password-confirm">Confirm Password <span
                                        class="text-danger">*</span></label>
                                <input type="password" class="form-control" id="password-confirm" name="password-confirm">
                                <span class="invalid-feedback animated fadeIn"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 mb-4">
                                <label class="form-label" for="role">Role <span class="text-danger">*</span></label>
                                <select class="js-select2 form-select" id="role" name="role" style="width: 100%;" data-placeholder="Select Role">
                                  <option value="">Select Role</option>
                                  @foreach ($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                  @endforeach
                                </select>
                                <span class="invalid-feedback animated fadeIn"></span>
                            </div>
                        </div>
                        <!-- Submit Button -->
                        <x-submit-button :cancelRoute="route('users.index')" />
                        <!-- Submit Button -->
                    </div>
                </form>
            </div>
        </div>
        <!-- END Dynamic Table with Export Buttons -->
    </div>
    <!-- END Page Content -->
@endsection
