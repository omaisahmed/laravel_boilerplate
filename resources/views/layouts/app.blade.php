<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <!-- Head -->
  @include('layouts.partials.head')
  <!-- End Head -->
  <body>
    <!-- Page Container -->
    <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">
      <!-- Side Overlay-->
      @include('layouts.partials.side_overlay')
      <!-- END Side Overlay -->

      <!-- Sidebar -->
      @include('layouts.partials.sidebar')
      <!-- END Sidebar -->

      <!-- Header -->
      @include('layouts.partials.header')
      <!-- END Header -->

      <!-- Main Container -->
      <main id="main-container">
        @yield('content')
      </main>
      <!-- END Main Container -->

      <!-- Footer -->
      @include('layouts.partials.footer')
      <!-- END Footer -->
    </div>
    <!-- END Page Container -->

    {{-- <script src="{{ asset('resources/assets/js/dashmix.app.min.js') }}"></script> --}}
    <!-- Page JS Plugins -->
    {{-- <script src="{{ asset('assets/js/plugins/chart.js/chart.umd.js') }}"></script> --}}
    <!-- Page JS Code -->
    {{-- <script src="{{ asset('assets/js/pages/be_tables_datatables.min.js') }}"></script> --}}
  </body>
</html>
