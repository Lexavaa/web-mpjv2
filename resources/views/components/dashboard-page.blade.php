<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ $title }} || MPJ</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('dashboard/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('dashboard/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('dashboard/css/vertical-layout-light/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" />
    <script src="https://kit.fontawesome.com/0fdd5e9bfc.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="{{ asset('/assets/images/logo.png') }}">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        @include('components.layouts.navbar')

        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            @include('components.layouts.setting')
            <!-- partial:partials/_settings-panel.html -->
            @include('components.layouts.right-sidebar')
            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->
            @include('components.layouts.left-sidebar')
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    {{ $slot }}
                </div>

                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright ©
                            <?php echo date('Y'); ?>. By <a href="https://www.bootstrapdash.com/"
                                target="_blank">🍃confin{{ config('app.name') }}</a>. All rights reserved.</span>
                    </div>
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Distributed and
                            developed by <a href="https://www.themewagon.com/" target="_blank">🧠MPJ Coders Team.
                            </a></span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <script src="{{ asset('/dashboard/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('/dashboard/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('/dashboard/vendors/datatables.net/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('/dashboard/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('/dashboard/js/dataTables.select.min.js') }}"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('/dashboard/js/off-canvas.js') }}"></script>
    <script src="{{ asset('/dashboard/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('/dashboard/js/template.js') }}"></script>
    <script src="{{ asset('/dashboard/js/settings.js') }}"></script>
    <script src="{{ asset('/dashboard/js/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('/dashboard/js/dashboard.js') }}"></script>
    <script src="{{ asset('/dashboard/js/Chart.roundedBarCharts.js') }}"></script>
</body>

</html>
