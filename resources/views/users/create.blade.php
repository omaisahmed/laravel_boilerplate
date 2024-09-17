@extends('layouts.app')

@section('css')
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('js/plugins/select2/css/select2.min.css') }}">
@endsection

@section('js')
    <!-- jQuery -->
    <script src="{{ asset('js/lib/jquery.min.js') }}"></script>
    <!-- Page JS Plugins -->
    <script src="{{ asset('js/plugins/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
    <script src="{{ asset('js/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
    <!-- Page JS Code -->
    @vite(['resources/assets/js/pages/select2.full.js','resources/assets/js/pages/be_comp_dialogs.js'])
@endsection

@section('title', 'Create User')

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
                <form action="{{ route('users.store') }}" method="POST" class="form-store">
                    @csrf
                    @include('users.includes.form_fields')
                </form>
            </div>
        </div>
        <!-- END Dynamic Table with Export Buttons -->
    </div>
    <!-- END Page Content -->
@endsection
