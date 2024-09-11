@extends('layouts.app')

@section('css')
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables-buttons-bs5/css/buttons.bootstrap5.min.css') }}">
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
    <!-- Page JS Helpers (Table Tools helpers) -->
    {{-- <script>Dashmix.helpersOnLoad(['dm-table-tools-checkable', 'dm-table-tools-sections']);</script> --}}
    {{-- <script>
        let tables = document.querySelectorAll('.js-table-checkable:not(.js-table-checkable-enabled)');
        tables.forEach(table => {
        // Add .js-table-checkable-enabled class to tag it as activated
        table.classList.add('js-table-checkable-enabled');

        // When a checkbox is clicked in thead
        table.querySelector('thead input[type=checkbox]').addEventListener('click', e => {
            // Check or uncheck all checkboxes in tbody
            table.querySelectorAll('tbody input[type=checkbox]').forEach(checkbox => {
            checkbox.checked = e.currentTarget.checked;

            // Update Row classes
            this.tableToolscheckRow(checkbox, e.currentTarget.checked);
            });
        });

        // When a checkbox is clicked in tbody
        table.querySelectorAll('tbody input[type=checkbox], tbody input + label').forEach(checkbox => {
            checkbox.addEventListener('click', e => {
            let checkboxHead = table.querySelector('thead input[type=checkbox]');

            // Adjust checkbox in thead
            if (!checkbox.checked) {
                checkboxHead.checked = false
            } else {
                if (table.querySelectorAll('tbody input[type=checkbox]:checked').length === table.querySelectorAll('tbody input[type=checkbox]').length) {
                checkboxHead.checked = true;
                }
            }

            // Update Row classes
            this.tableToolscheckRow(checkbox, checkbox.checked);
            });
        });
    });

     // Checkable table functionality helper - Checks or unchecks table row
    function tableToolscheckRow(checkbox, checkedStatus) {
        if (checkedStatus) {
        checkbox.closest('tr').classList.add('table-active');
        } else {
        checkbox.closest('tr').classList.remove('table-active');
        }
    }

    </script> --}}

    <!-- Page JS Code -->
    @vite(['resources/assets/js/pages/datatables.js'])
@endsection

@section('content')
    <!-- Breadcrumb -->
    @php
    $breadcrumbs = [
        ['name' => 'Users', 'url' => route('users.index')],
        ['name' => 'Listings', 'url' => '#']
    ];
    $title = "Users";
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
                <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons js-table-checkable">
                    <thead>
                        <tr>
                            {{-- <th class="text-center" style="width: 70px;">
                                <div class="form-check d-inline-block">
                                    <input class="form-check-input" type="checkbox" value="" id="check-all" name="check-all">
                                    <label class="form-check-label" for="check-all"></label>
                                </div>
                            </th> --}}
                            <th>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="example-checkbox-default2" name="example-checkbox-default2">
                              </div>
                            </th>
                            <th>Name</th>
                            <th class="d-none d-sm-table-cell" style="width: 30%;">Email</th>
                            <th class="d-none d-sm-table-cell" style="width: 15%;">Role</th>
                            <th class="d-none d-sm-table-cell" style="width: 15%;">Created By</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $key => $user)
                        <tr class="">
                            <td class="text-center">
                                <div class="form-check d-inline-block">
                                  <input class="form-check-input" type="checkbox" value="" id="row_1" name="row_1">
                                  <label class="form-check-label" for="row_1"></label>
                                </div>
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
