@extends('layouts.app')

@section('css')
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables-buttons-bs5/css/buttons.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/sweetalert2/sweetalert2.min.css') }}">
@endsection

@section('js')
    <!-- jQuery (required for DataTables plugin) -->
    <script src="{{ asset('js/lib/jquery.min.js') }}"></script>
    <!-- Page JS Plugins -->
    <script src="{{ asset('js/plugins/datatables/dataTables.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons-bs5/js/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons-jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons-pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons-pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons/buttons.print.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('js/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
    <!-- Page JS Code -->
    @vite(['resources/assets/js/pages/datatables.js', 'resources/assets/js/pages/be_comp_dialogs.js'])
@endsection

@section('content')
    <!-- Breadcrumb -->
    @php
        $breadcrumbs = [['name' => 'Users', 'url' => route('users.index')], ['name' => 'Listings', 'url' => '#']];
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
                    Users List
                </h3>
                <a href="{{ route('users.create') }}" class="btn btn-success me-1">
                    <i class="fa fa-fw fa-plus me-1"></i> Add User
                </a>
            </div>
            <div class="block-content block-content-full overflow-x-auto">
                <table class="table table-hover table-vcenter js-dataTable-buttons">
                    <thead>
                        <tr class="bg-dark">
                            <th class="text-white">ID</th>
                            <th class="text-white">Name</th>
                            <th class="d-none d-sm-table-cell text-white" style="width: 30%;">Email</th>
                            <th class="d-none d-sm-table-cell text-white" style="width: 15%;">Role</th>
                            <th class="d-none d-sm-table-cell text-white" style="width: 15%;">Created By</th>
                            <th class="text-center text-white" style="width: 100px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $key => $user)
                            <tr class="">
                                <td class="text-center">
                                    {{ $key + 1 }}
                                </td>
                                <td class="fw-semibold">
                                    <a href="{{ route('users.edit', $user->id) }}">{{ $user->name }}</a>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    {{ $user->email }}
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <span class="badge bg-primary">{{ $user->name }}</span>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <span class="text-muted">{{ auth()->user()->name }}</span>
                                </td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a href="{{ route('users.edit', $user->id) }}"
                                            class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled"
                                            data-bs-toggle="tooltip" aria-label="Edit" data-bs-original-title="Edit">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>
                                        <button type="button" class="btn btn-sm btn-alt-secondary js-swal-delete"
                                            data-model="User" data-action="{{ route('users.delete', $user->id) }}"
                                            data-name="{{ $user->name }}">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END Dynamic Table with Export Buttons -->
    </div>
    <!-- END Page Content -->
@endsection
