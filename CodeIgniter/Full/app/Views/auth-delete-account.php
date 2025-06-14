<?= $this->include('./partials/html') ?>

<head>
    <?php echo view("partials/title-meta", array("title" => "Delete Account")) ?>

    <?= $this->include('./partials/head-css') ?>
</head>

<body>

    <div class="auth-box overflow-hidden align-items-center d-flex">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-4 col-md-6 col-sm-8">
                    <div class="auth-brand text-center mb-4">
                        <a href="/" class="logo-dark">
                            <img src="/images/logo-black.png" alt="dark logo" height="32">
                        </a>
                        <a href="/" class="logo-light">
                            <img src="/images/logo.png" alt="logo" height="32">
                        </a>
                    </div>

                    <div class="card p-4 rounded-4">
                        <div class="mb-4">
                            <div class="avatar-xxl mx-auto mt-2">
                                <div class="avatar-title bg-light-subtle border border-light border-dashed rounded-circle">
                                    <img src="/images/delete.png" alt="dark logo" height="64">
                                </div>
                            </div>
                        </div>

                        <h4 class="fw-bold text-center mb-3">Account Deactivated</h4>
                        <p class="text-muted text-center mb-4">Your account is currently inactive. Reactivate now to regain access to all features and opportunities.</p>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary fw-semibold py-2">Reactivate Now</button>
                        </div>

                    </div>

                    <p class="text-center text-muted mt-4 mb-0">
                        © 2014 -
                        <script>document.write(new Date().getFullYear())</script> INSPINIA — by <span class="fw-semibold">WebAppLayers</span>
                    </p>
                </div>
            </div>
        </div>
    </div>


    <!-- end auth-fluid-->
    <?= $this->include('./partials/footer-scripts') ?>

</body>

</html>