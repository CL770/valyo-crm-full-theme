<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo view('partials/title-meta', ['title' => 'Topbar with Sub Item']) ?>

    <?= $this->include('partials/head-css') ?>
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">

        <?= $this->include('partials/menu') ?>

        <!-- ============================================================== -->
        <!-- Start Main Content -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="container-fluid">

                <div class="page-title-head py-2 d-flex align-items-sm-center flex-sm-row flex-column">
                    <div class="flex-grow-1">
                        <h4 class="fs-sm text-uppercase fw-bold mb-1">Hey Damian,</h4>
                        <p class="text-muted mb-0 fs-xs">You have 42 messages and 6 notifications.</p>
                    </div>
                    <div class="d-flex">
                        <div class="input-group">
                            <input type="text" class="form-control" data-provider="flatpickr" data-range-date="true" data-date-format="d M, Y" data-default-date="01 Jan 2025 to 31 Jan 2025" style="min-width: 200px;">
                            <div class="input-group-text text-bg-primary border-primary btn-icon">
                                <i class="ti ti-calendar fs-lg"></i>
                            </div>
                        </div>
                        <a href="javascript: void(0);" class="btn btn-icon btn-primary flex-shrink-0 ms-2">
                            <i class="ti ti-circle-dashed-plus fs-lg"></i>
                        </a>
                        <a href="javascript: void(0);" class="btn btn-icon btn-primary flex-shrink-0 ms-1">
                            <i class="ti ti-activity-heartbeat fs-lg"></i>
                        </a>
                    </div>
                </div>

            </div>
            <!-- container -->

            <?= $this->include('partials/footer') ?>

        </div>

        <!-- ============================================================== -->
        <!-- End of Main Content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <?= $this->include('partials/footer-scripts') ?>

</body>

</html>