<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo view('partials/title-meta', ['title' => 'New Password']) ?>

    <?= $this->include('partials/head-css') ?>
</head>

<body>
    <div class="auth-box p-0 w-100">
        <div class="row w-100 g-0">
            <div class="col">
                <div class="h-100 position-relative card-side-img rounded-0 overflow-hidden">
                    <div class="p-4 card-img-overlay auth-overlay d-flex align-items-end justify-content-center">
                    </div>
                </div>
            </div>

            <div class="col-xl-auto">
                <!--Auth Box content -->
                <div class="card auth-box-form border-0 mb-0">
                    <div class="card-body min-vh-100 d-flex flex-column justify-content-center">
                        <div class="auth-brand mb-0 text-center">
                            <a href="/" class="logo-dark">
                                <img src="/images/logo-black.png" alt="dark logo" height="32">
                            </a>
                            <a href="/" class="logo-light">
                                <img src="/images/logo.png" alt="logo" height="32">
                            </a>
                        </div>

                        <div class="mt-auto text-center">
                            <h4 class="fw-bold">Setup New Password ! | IN++</h4>
                            <p class="text-muted auth-sub-text mx-auto mb-4">We've emailed you a 6-digit verification code. Please enter it below to confirm your Email Address.</p>

                            <form>
                                <div class="mb-3">
                                    <div class="input-group">
                                        <input type="email" class="form-control py-2 px-3 bg-light bg-opacity-40 border-light" id="userEmail" placeholder="you@example.com" disabled="">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label d-flex">Enter your 6-digit code <span class="text-danger">*</span></label>
                                    <div class="d-flex gap-2 two-factor">
                                        <input type="text" class="form-control py-2 bg-light bg-opacity-40 border-light text-center" required>
                                        <input type="text" class="form-control py-2 bg-light bg-opacity-40 border-light text-center" required>
                                        <input type="text" class="form-control py-2 bg-light bg-opacity-40 border-light text-center" required>
                                        <input type="text" class="form-control py-2 bg-light bg-opacity-40 border-light text-center" required>
                                        <input type="text" class="form-control py-2 bg-light bg-opacity-40 border-light text-center" required>
                                        <input type="text" class="form-control py-2 bg-light bg-opacity-40 border-light text-center" required>
                                    </div>
                                </div>

                                <div class="mb-3" data-password="bar">
                                    <div class="input-group">
                                        <input type="password" class="form-control py-2 px-3 bg-light bg-opacity-40 border-light" id="userPassword" placeholder="Enter Password" required>
                                    </div>
                                    <div class="password-bar my-2"></div>
                                    <p class="text-muted fs-xs mb-0">Use 8+ characters with letters, numbers & symbols.</p>
                                </div>

                                <div class="mb-3">
                                    <div class="input-group">
                                        <input type="password" class="form-control py-2 px-3 bg-light bg-opacity-40 border-light" id="userPassword" placeholder="Confirm New password" required>
                                    </div>
                                </div>

                                <div class="mb-3 d-flex">
                                    <div class="form-check">
                                        <input class="form-check-input form-check-input-light fs-14" type="checkbox" checked id="termAndPolicy">
                                        <label class="form-check-label" for="termAndPolicy">Agree the Terms &amp; Policy</label>
                                    </div>
                                </div>

                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary fw-semibold py-2">Update Password</button>
                                </div>


                            </form>

                            <p class="mt-4 text-muted text-center mb-4">Don’t have a code? <a href="#" class="text-decoration-underline link-offset-2 fw-semibold">Resend</a> or <a href="#" class="text-decoration-underline link-offset-2 fw-semibold">Call Us</a></p>

                        </div>

                        <p class="text-muted text-center mt-4 mb-0">
                            Return to <a href="auth-3-sign-in" class="text-decoration-underline link-offset-3 fw-semibold">Sign in</a>
                        </p>

                        <p class="text-center text-muted mt-auto mb-0">
                            © 2014 -
                            <script>document.write(new Date().getFullYear())</script> INSPINIA — by <span class="fw-semibold">WebAppLayers</span>
                        </p>
                    </div>
                </div>
                <!-- End Auth Box Content -->
            </div>
        </div>
    </div>

    <?= $this->include('partials/footer-scripts') ?>

    <!-- Two Factor Validator Js -->
    <script src="/js/pages/auth-two-factor.js"></script>

    <!-- Password Suggestion Js -->
    <script src="/js/pages/auth-password.js"></script>

</body>

</html>