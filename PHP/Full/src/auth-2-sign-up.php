<?php include 'partials/html.php' ?>

<head>
    <?php $title = "Create New Account"; include 'partials/title-meta.php' ?>

    <?php include 'partials/head-css.php' ?>
</head>

<body>

    <div class="auth-box d-flex align-items-center">
        <div class="container-xxl">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-10">
                    <div class="card rounded-4">
                        <div class="row justify-content-between g-0">
                            <div class="col-lg-6">
                                <div class="card-body">
                                    <div class="auth-brand text-center mb-4">
                                        <a href="index.php" class="logo-dark">
                                            <img src="assets/images/logo-black.png" alt="dark logo" height="32">
                                        </a>
                                        <a href="index.php" class="logo-light">
                                            <img src="assets/images/logo.png" alt="logo" height="32">
                                        </a>
                                        <h4 class="fw-bold mt-4">Register to IN+</h4>
                                        <p class="text-muted w-lg-75 mx-auto">Let’s get you started. Create your account by entering your details below.</p>
                                    </div>

                                    <form>
                                        <div class="mb-3">
                                            <label for="userName" class="form-label">Name <span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <span class="input-group-text bg-light"><i class="ti ti-user text-muted fs-xl"></i></span>
                                                <input type="text" class="form-control" id="userName" placeholder="Damian D." required>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="userEmail" class="form-label">Email address <span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <span class="input-group-text bg-light"><i class="ti ti-mail text-muted fs-xl"></i></span>
                                                <input type="email" class="form-control" id="userEmail" placeholder="you@example.com" required>
                                            </div>
                                        </div>

                                        <div class="mb-3" data-password="bar">
                                            <label for="userPassword" class="form-label">Password <span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <span class="input-group-text bg-light"><i class="ti ti-lock-password text-muted fs-xl"></i></span>
                                                <input type="password" class="form-control" id="userPassword" placeholder="••••••••" required>
                                            </div>
                                            <div class="password-bar my-2"></div>
                                            <p class="text-muted fs-xs mb-0">Use 8+ characters with letters, numbers & symbols.</p>
                                        </div>

                                        <div class="mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input form-check-input-light fs-14" type="checkbox" checked id="termAndPolicy">
                                                <label class="form-check-label" for="termAndPolicy">Agree the Terms & Policy</label>
                                            </div>
                                        </div>

                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-primary fw-semibold py-2">Create Account</button>
                                        </div>
                                    </form>

                                    <p class="text-muted text-center mt-4 mb-0">
                                        Already have an account? <a href="auth-2-sign-in.php" class="text-decoration-underline link-offset-3 fw-semibold">Login</a>
                                    </p>

                                    <p class="text-center text-muted mt-4 mb-0">
                                        © 2014 -
                                        <script>document.write(new Date().getFullYear())</script> INSPINIA — by <span class="fw-semibold">WebAppLayers</span>
                                    </p>
                                </div>
                            </div>

                            <div class="col-lg-6 d-none d-lg-block">
                                <div class="h-100 position-relative card-side-img rounded-end-4 rounded-end rounded-0 overflow-hidden">
                                    <div class="p-4 card-img-overlay rounded-4 rounded-start-0 auth-overlay d-flex align-items-end justify-content-center">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end auth-fluid-->

    <?php include 'partials/footer-scripts.php' ?>

    <!-- Password Suggestion Js -->
    <script src="assets/js/pages/auth-password.js"></script>

</body>

</html>