<?php include 'partials/html.php' ?>

<head>
    <?php $title = "400 Error"; include 'partials/title-meta.php' ?>

    <?php include 'partials/head-css.php' ?>
</head>

<body>

    <div class="auth-box overflow-hidden align-items-center d-flex">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-4 col-md-6 col-sm-8">
                    <div class="auth-brand text-center mb-3">
                        <a href="index.php" class="logo-dark">
                            <img src="assets/images/logo-black.png" alt="dark logo" height="32">
                        </a>
                        <a href="index.php" class="logo-light">
                            <img src="assets/images/logo.png" alt="logo" height="32">
                        </a>
                    </div>
    
                    <div class="p-2 text-center">
                        <div class="error-glitch" data-text="400">400</div>
                        <h3 class="fw-bold text-uppercase">Bad Request</h3>
                        <p class="text-muted">Something's not right in the request you made.</p>

                        <button class="btn btn-primary mt-3 rounded-pill" onclick="window.location.href='index.php'">Go Home</button>

                    </div>
    
                    <p class="text-center text-muted mt-5 mb-0">
                        © 2014 - <script>document.write(new Date().getFullYear())</script> INSPINIA — by <span class="fw-bold">WebAppLayers</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    

    <!-- end auth-fluid-->
    <?php include 'partials/footer-scripts.php' ?>

</body>

</html>