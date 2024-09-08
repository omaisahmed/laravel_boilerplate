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
  <!-- Page JS Code -->
  @vite(['resources/assets/js/pages/datatables.js'])
@endsection

@section('content')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Dashboard</h1>
                <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Users</li>
                        <li class="breadcrumb-item active" aria-current="page">Listing</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">
        <!-- Dynamic Table with Export Buttons -->
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    Users
                </h3>
            </div>
            <div class="block-content block-content-full overflow-x-auto">
                <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 80px;">ID</th>
                            <th>Name</th>
                            <th class="d-none d-sm-table-cell" style="width: 30%;">Email</th>
                            <th class="d-none d-sm-table-cell" style="width: 15%;">Access</th>
                            <th class="d-none d-sm-table-cell" style="width: 15%;">Registered</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td class="fw-semibold">
                                <a href="be_pages_generic_blank.html">Ryan Flores</a>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                client1<span class="text-muted">@example.com</span>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="badge bg-danger">Disabled</span>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="text-muted">6 days ago</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td class="fw-semibold">
                                <a href="be_pages_generic_blank.html">Justin Hunt</a>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                client2<span class="text-muted">@example.com</span>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="badge bg-warning">Trial</span>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="text-muted">2 days ago</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">3</td>
                            <td class="fw-semibold">
                                <a href="be_pages_generic_blank.html">Adam McCoy</a>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                client3<span class="text-muted">@example.com</span>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="badge bg-success">VIP</span>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="text-muted">10 days ago</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">4</td>
                            <td class="fw-semibold">
                                <a href="be_pages_generic_blank.html">Carl Wells</a>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                client4<span class="text-muted">@example.com</span>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="badge bg-success">VIP</span>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="text-muted">2 days ago</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">5</td>
                            <td class="fw-semibold">
                                <a href="be_pages_generic_blank.html">Albert Ray</a>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                client5<span class="text-muted">@example.com</span>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="badge bg-danger">Disabled</span>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="text-muted">8 days ago</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">6</td>
                            <td class="fw-semibold">
                                <a href="be_pages_generic_blank.html">Wayne Garcia</a>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                client6<span class="text-muted">@example.com</span>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="badge bg-info">Business</span>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="text-muted">7 days ago</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">7</td>
                            <td class="fw-semibold">
                                <a href="be_pages_generic_blank.html">Thomas Riley</a>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                client7<span class="text-muted">@example.com</span>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="badge bg-info">Business</span>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="text-muted">5 days ago</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">8</td>
                            <td class="fw-semibold">
                                <a href="be_pages_generic_blank.html">Carol Ray</a>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                client8<span class="text-muted">@example.com</span>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="badge bg-primary">Personal</span>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="text-muted">9 days ago</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">9</td>
                            <td class="fw-semibold">
                                <a href="be_pages_generic_blank.html">Adam McCoy</a>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                client9<span class="text-muted">@example.com</span>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="badge bg-danger">Disabled</span>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="text-muted">7 days ago</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">10</td>
                            <td class="fw-semibold">
                                <a href="be_pages_generic_blank.html">Ralph Murray</a>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                client10<span class="text-muted">@example.com</span>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="badge bg-info">Business</span>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="text-muted">6 days ago</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">11</td>
                            <td class="fw-semibold">
                                <a href="be_pages_generic_blank.html">Betty Kelley</a>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                client11<span class="text-muted">@example.com</span>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="badge bg-info">Business</span>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="text-muted">3 days ago</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">12</td>
                            <td class="fw-semibold">
                                <a href="be_pages_generic_blank.html">Wayne Garcia</a>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                client12<span class="text-muted">@example.com</span>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="badge bg-success">VIP</span>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="text-muted">7 days ago</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">13</td>
                            <td class="fw-semibold">
                                <a href="be_pages_generic_blank.html">Megan Fuller</a>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                client13<span class="text-muted">@example.com</span>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="badge bg-success">VIP</span>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="text-muted">4 days ago</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">14</td>
                            <td class="fw-semibold">
                                <a href="be_pages_generic_blank.html">Megan Fuller</a>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                client14<span class="text-muted">@example.com</span>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="badge bg-info">Business</span>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="text-muted">5 days ago</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">15</td>
                            <td class="fw-semibold">
                                <a href="be_pages_generic_blank.html">Sara Fields</a>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                client15<span class="text-muted">@example.com</span>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="badge bg-success">VIP</span>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="text-muted">8 days ago</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">16</td>
                            <td class="fw-semibold">
                                <a href="be_pages_generic_blank.html">Lisa Jenkins</a>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                client16<span class="text-muted">@example.com</span>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="badge bg-danger">Disabled</span>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="text-muted">6 days ago</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">17</td>
                            <td class="fw-semibold">
                                <a href="be_pages_generic_blank.html">Jack Greene</a>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                client17<span class="text-muted">@example.com</span>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="badge bg-primary">Personal</span>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="text-muted">3 days ago</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">18</td>
                            <td class="fw-semibold">
                                <a href="be_pages_generic_blank.html">Ryan Flores</a>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                client18<span class="text-muted">@example.com</span>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="badge bg-info">Business</span>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="text-muted">6 days ago</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">19</td>
                            <td class="fw-semibold">
                                <a href="be_pages_generic_blank.html">Andrea Gardner</a>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                client19<span class="text-muted">@example.com</span>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="badge bg-primary">Personal</span>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="text-muted">10 days ago</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">20</td>
                            <td class="fw-semibold">
                                <a href="be_pages_generic_blank.html">Danielle Jones</a>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                client20<span class="text-muted">@example.com</span>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="badge bg-info">Business</span>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="text-muted">6 days ago</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END Dynamic Table with Export Buttons -->
    </div>
    <!-- END Page Content -->
@endsection
