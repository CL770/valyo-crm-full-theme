<!DOCTYPE html>
<html lang="en" data-skin="flat">

<head>
    <?php echo view('partials/title-meta', ['title' => 'Flat Skin']) ?>

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

                <?= $this->include('partials/page-title', ['title' => 'Flat Skin']) ?>

                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-info alert-bordered border-start border-info d-flex align-items-center gap-2 mb-3">
                            <i class="ti ti-info-circle fs-20"></i>
                            <div>
                                Set <code>data-skin="flat"</code> in the <code>&lt;html&gt;</code> tag to use the Flat theme.
                            </div>
                        </div>
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