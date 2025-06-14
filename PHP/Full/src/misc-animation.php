<?php include 'partials/html.php' ?>

<head>
    <?php $title = "Animation"; include 'partials/title-meta.php' ?>

    <!-- Animate.css -->
    <link href="assets/plugins/animate/animate.min.css" rel="stylesheet">

    <?php include 'partials/head-css.php' ?>
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">

        <?php include 'partials/menu.php' ?>

        <!-- ============================================================== -->
        <!-- Start Main Content -->
        <!-- ============================================================== -->

        <div class="content-page">

            <div class="container-fluid">

                <?php $subtitle = "Miscellaneous"; $title = "Animation"; include 'partials/page-title.php' ?>

                <div class="row justify-content-center">
                    <div class="col-xxl-10">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Animate.css</h4>
                            </div>
                            <div class="card-body">
        
                                <p class="text-muted">
                                    A cross-browser library of CSS animations. Animate.css is a bunch of cool, fun, and cross-browser animations for you to use in your projects. Great for emphasis, home pages, sliders, and general just-add-water-awesomeness.
                                </p>
        
                                <div class="row g-lg-4">
                                    <div class="col-sm-4">
                                        <div class="card card-top-sticky overflow-hidden">
                                            <div class="card-body">
                                                <div id="animation_box" class="animate__animated">
                                                    <img src="assets/images/blog/blog-1.jpg" class="img-fluid rounded" alt="user">
                                                </div>
                                                <p class="mt-3 text-muted text-center mb-0">
                                                    Example box for animation effect.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
        
                                    <div class="col-lg-8">
                                        <div class="alert alert-info">
                                            Click any of the buttons below to see the animation effect applied to the box on the left.
                                        </div>
        
                                        <div class="accordion" id="animationAccordion">
                                            <!-- Attention Seekers -->
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingAttention">
                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAttention">
                                                        Attention Seekers
                                                    </button>
                                                </h2>
                                                <div id="collapseAttention" class="accordion-collapse collapse show" data-bs-parent="#animationAccordion">
                                                    <div class="accordion-body d-flex flex-wrap gap-2">
                                                        <a href="#" class="btn btn-light animation_select" data-animation="bounce">bounce</a>
                                                        <a href="#" class="btn btn-light animation_select" data-animation="flash">flash</a>
                                                        <a href="#" class="btn btn-light animation_select" data-animation="pulse">pulse</a>
                                                        <a href="#" class="btn btn-light animation_select" data-animation="rubberBand">rubberBand</a>
                                                        <a href="#" class="btn btn-light animation_select" data-animation="shakeX">shakeX</a>
                                                        <a href="#" class="btn btn-light animation_select" data-animation="shakeY">shakeY</a>
                                                        <a href="#" class="btn btn-light animation_select" data-animation="headShake">headShake</a>
                                                        <a href="#" class="btn btn-light animation_select" data-animation="swing">swing</a>
                                                        <a href="#" class="btn btn-light animation_select" data-animation="tada">tada</a>
                                                        <a href="#" class="btn btn-light animation_select" data-animation="wobble">wobble</a>
                                                        <a href="#" class="btn btn-light animation_select" data-animation="jello">jello</a>
                                                        <a href="#" class="btn btn-light animation_select" data-animation="heartBeat">heartBeat</a>
                                                    </div>
                                                </div>
                                            </div>
        
                                            <!-- Bouncing Entrances -->
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingBounceIn">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBounceIn">
                                                    Bouncing Entrances
                                                </button>
                                                </h2>
                                                <div id="collapseBounceIn" class="accordion-collapse collapse" data-bs-parent="#animationAccordion">
                                                <div class="accordion-body d-flex flex-wrap gap-2">
                                                    <a href="#" class="btn btn-light animation_select" data-animation="bounceIn">bounceIn</a>
                                                    <a href="#" class="btn btn-light animation_select" data-animation="bounceInDown">bounceInDown</a>
                                                    <a href="#" class="btn btn-light animation_select" data-animation="bounceInLeft">bounceInLeft</a>
                                                    <a href="#" class="btn btn-light animation_select" data-animation="bounceInRight">bounceInRight</a>
                                                    <a href="#" class="btn btn-light animation_select" data-animation="bounceInUp">bounceInUp</a>
                                                </div>
                                                </div>
                                            </div>
                                            
                                            <!-- Fading Entrances -->
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingFadeIn">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFadeIn">
                                                    Fading Entrances
                                                </button>
                                                </h2>
                                                <div id="collapseFadeIn" class="accordion-collapse collapse" data-bs-parent="#animationAccordion">
                                                <div class="accordion-body d-flex flex-wrap gap-2">
                                                    <a href="#" class="btn btn-light animation_select" data-animation="fadeIn">fadeIn</a>
                                                    <a href="#" class="btn btn-light animation_select" data-animation="fadeInDown">fadeInDown</a>
                                                    <a href="#" class="btn btn-light animation_select" data-animation="fadeInLeft">fadeInLeft</a>
                                                    <a href="#" class="btn btn-light animation_select" data-animation="fadeInRight">fadeInRight</a>
                                                    <a href="#" class="btn btn-light animation_select" data-animation="fadeInUp">fadeInUp</a>
                                                </div>
                                                </div>
                                            </div>
                                            
                                            <!-- Fading Exits -->
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingFadeOut">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFadeOut">
                                                    Fading Exits
                                                </button>
                                                </h2>
                                                <div id="collapseFadeOut" class="accordion-collapse collapse" data-bs-parent="#animationAccordion">
                                                <div class="accordion-body d-flex flex-wrap gap-2">
                                                    <a href="#" class="btn btn-light animation_select" data-animation="fadeOut">fadeOut</a>
                                                    <a href="#" class="btn btn-light animation_select" data-animation="fadeOutDown">fadeOutDown</a>
                                                    <a href="#" class="btn btn-light animation_select" data-animation="fadeOutLeft">fadeOutLeft</a>
                                                    <a href="#" class="btn btn-light animation_select" data-animation="fadeOutRight">fadeOutRight</a>
                                                    <a href="#" class="btn btn-light animation_select" data-animation="fadeOutUp">fadeOutUp</a>
                                                </div>
                                                </div>
                                            </div>
                                            
                                            <!-- Flippers -->
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingFlip">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFlip">
                                                    Flippers
                                                </button>
                                                </h2>
                                                <div id="collapseFlip" class="accordion-collapse collapse" data-bs-parent="#animationAccordion">
                                                <div class="accordion-body d-flex flex-wrap gap-2">
                                                    <a href="#" class="btn btn-light animation_select" data-animation="flip">flip</a>
                                                    <a href="#" class="btn btn-light animation_select" data-animation="flipInX">flipInX</a>
                                                    <a href="#" class="btn btn-light animation_select" data-animation="flipInY">flipInY</a>
                                                    <a href="#" class="btn btn-light animation_select" data-animation="flipOutX">flipOutX</a>
                                                    <a href="#" class="btn btn-light animation_select" data-animation="flipOutY">flipOutY</a>
                                                </div>
                                                </div>
                                            </div>
                                            
                                            <!-- Light Speed -->
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingLightSpeed">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLightSpeed">
                                                    Light Speed
                                                </button>
                                                </h2>
                                                <div id="collapseLightSpeed" class="accordion-collapse collapse" data-bs-parent="#animationAccordion">
                                                <div class="accordion-body d-flex flex-wrap gap-2">
                                                    <a href="#" class="btn btn-light animation_select" data-animation="lightSpeedInLeft">lightSpeedInLeft</a>
                                                    <a href="#" class="btn btn-light animation_select" data-animation="lightSpeedInRight">lightSpeedInRight</a>
                                                    <a href="#" class="btn btn-light animation_select" data-animation="lightSpeedOutLeft">lightSpeedOutLeft</a>
                                                    <a href="#" class="btn btn-light animation_select" data-animation="lightSpeedOutRight">lightSpeedOutRight</a>
                                                </div>
                                                </div>
                                            </div>
                                            
                                            <!-- Rotate -->
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingRotate">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseRotate">
                                                    Rotate
                                                </button>
                                                </h2>
                                                <div id="collapseRotate" class="accordion-collapse collapse" data-bs-parent="#animationAccordion">
                                                <div class="accordion-body d-flex flex-wrap gap-2">
                                                    <a href="#" class="btn btn-light animation_select" data-animation="rotateIn">rotateIn</a>
                                                    <a href="#" class="btn btn-light animation_select" data-animation="rotateInDownLeft">rotateInDownLeft</a>
                                                    <a href="#" class="btn btn-light animation_select" data-animation="rotateInDownRight">rotateInDownRight</a>
                                                    <a href="#" class="btn btn-light animation_select" data-animation="rotateInUpLeft">rotateInUpLeft</a>
                                                    <a href="#" class="btn btn-light animation_select" data-animation="rotateInUpRight">rotateInUpRight</a>
                                                </div>
                                                </div>
                                            </div>
                                            
                                            <!-- Zoom -->
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingZoom">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseZoom">
                                                    Zoom
                                                </button>
                                                </h2>
                                                <div id="collapseZoom" class="accordion-collapse collapse" data-bs-parent="#animationAccordion">
                                                <div class="accordion-body d-flex flex-wrap gap-2">
                                                    <a href="#" class="btn btn-light animation_select" data-animation="zoomIn">zoomIn</a>
                                                    <a href="#" class="btn btn-light animation_select" data-animation="zoomInDown">zoomInDown</a>
                                                    <a href="#" class="btn btn-light animation_select" data-animation="zoomInLeft">zoomInLeft</a>
                                                    <a href="#" class="btn btn-light animation_select" data-animation="zoomInRight">zoomInRight</a>
                                                    <a href="#" class="btn btn-light animation_select" data-animation="zoomInUp">zoomInUp</a>
                                                    <a href="#" class="btn btn-light animation_select" data-animation="zoomOut">zoomOut</a>
                                                    <a href="#" class="btn btn-light animation_select" data-animation="zoomOutDown">zoomOutDown</a>
                                                    <a href="#" class="btn btn-light animation_select" data-animation="zoomOutLeft">zoomOutLeft</a>
                                                    <a href="#" class="btn btn-light animation_select" data-animation="zoomOutRight">zoomOutRight</a>
                                                    <a href="#" class="btn btn-light animation_select" data-animation="zoomOutUp">zoomOutUp</a>
                                                </div>
                                                </div>
                                            </div>
                                            
                                            <!-- Sliding -->
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingSlide">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSlide">
                                                    Sliding
                                                </button>
                                                </h2>
                                                <div id="collapseSlide" class="accordion-collapse collapse" data-bs-parent="#animationAccordion">
                                                <div class="accordion-body d-flex flex-wrap gap-2">
                                                    <a href="#" class="btn btn-light animation_select" data-animation="slideInDown">slideInDown</a>
                                                    <a href="#" class="btn btn-light animation_select" data-animation="slideInLeft">slideInLeft</a>
                                                    <a href="#" class="btn btn-light animation_select" data-animation="slideInRight">slideInRight</a>
                                                    <a href="#" class="btn btn-light animation_select" data-animation="slideInUp">slideInUp</a>
                                                    <a href="#" class="btn btn-light animation_select" data-animation="slideOutDown">slideOutDown</a>
                                                    <a href="#" class="btn btn-light animation_select" data-animation="slideOutLeft">slideOutLeft</a>
                                                    <a href="#" class="btn btn-light animation_select" data-animation="slideOutRight">slideOutRight</a>
                                                    <a href="#" class="btn btn-light animation_select" data-animation="slideOutUp">slideOutUp</a>
                                                </div>
                                                </div>
                                            </div>
                                            
                                            <!-- Special -->
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingSpecial">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSpecial">
                                                    Special
                                                </button>
                                                </h2>
                                                <div id="collapseSpecial" class="accordion-collapse collapse" data-bs-parent="#animationAccordion">
                                                <div class="accordion-body d-flex flex-wrap gap-2">
                                                    <a href="#" class="btn btn-light animation_select" data-animation="hinge">hinge</a>
                                                    <a href="#" class="btn btn-light animation_select" data-animation="jackInTheBox">jackInTheBox</a>
                                                    <a href="#" class="btn btn-light animation_select" data-animation="rollIn">rollIn</a>
                                                    <a href="#" class="btn btn-light animation_select" data-animation="rollOut">rollOut</a>
                                                </div>
                                                </div>
                                            </div>
          
                                        </div>
                                    </div>
        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php include 'partials/footer.php' ?>

        </div>

        <!-- ============================================================== -->
        <!-- End of Main Content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <?php include 'partials/customizer.php' ?>

    <?php include 'partials/footer-scripts.php' ?>

    <script src="assets/js/pages/misc-animation.js"></script>

</body>

</html>