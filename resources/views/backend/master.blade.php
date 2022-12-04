<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ config('app.name') }}</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ url('vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ url('vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ url('vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ url('vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ url('vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url('js/select.dataTables.min.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ url('css/vertical-layout-light/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ url('images/favicon.png') }}" />
    @notifyCss

    <style>
        .notify {
            z-index: 1000000000;
            margin-top: 2%;
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        @include('backend.partials.header')
        <x:notify-messages />
        <div class="container-fluid page-body-wrapper">
            @include('backend.partials.setting')
            @include('backend.partials.rightSidebar')
            @include('backend.partials.navbar')
            <div class="main-panel">
                <div class="content-wrapper">
                    @yield('content')
                </div>
                @include('backend.partials.footer')
            </div>

        </div>
        <!-- container-scroller -->

        @notifyJs
        <!-- plugins:js -->
        <script src="{{ url('vendors/js/vendor.bundle.base.js') }}"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="{{ url('vendors/chart.js/Chart.min.js') }}"></script>
        <script src="{{ url('vendors/datatables.net/jquery.dataTables.js') }}"></script>
        <script src="{{ url('vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
        <script src="{{ url('js/dataTables.select.min.js') }}"></script>

        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="{{ url('js/off-canvas.js') }}"></script>
        <script src="{{ url('js/hoverable-collapse.js') }}"></script>
        <script src="{{ url('js/template.js') }}"></script>
        <script src="{{ url('js/settings.js') }}"></script>
        <script src="{{ url('js/todolist.js') }}"></script>
        <!-- endinject -->
        <!-- Custom js for this page-->
        <script src="{{ url('js/dashboard.js') }}"></script>
        <script src="{{ url('js/Chart.roundedBarCharts.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/js/all.min.js"></script>
        <!-- End custom js for this page-->
</body>

</html>
