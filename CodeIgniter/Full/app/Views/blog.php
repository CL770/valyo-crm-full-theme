<?= $this->include('./partials/html') ?>

<head>
    <?php echo view("partials/title-meta", array("title" => "Blog")) ?>

    <?= $this->include('./partials/head-css') ?>
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">

        <?= $this->include('./partials/menu') ?>

        <!-- ============================================================== -->
        <!-- Start Main Content -->
        <!-- ============================================================== -->

        <div class="content-page">

            <div class="container-fluid">

                <?php echo view("./partials/page-title", array("subtitle" => "Apps", "title" => "Blog")) ?>

                <div class="row" data-masonry='{"percentPosition": true }'>

                    <div class="col-xl-3 col-md-6">
                        <article class="card rounded-3">
                            <!-- Card Body -->
                            <div class="card-body">
                                <!-- Badge -->
                                <div class="badge text-bg-dark badge-label mb-3">Design</div>

                                <!-- Title -->
                                <h6 class="card-title fs-lg lh-base mb-2">
                                    <a href="article" class="link-reset">Mastering Figma: 7 Pro Tips for Better UI Design</a>
                                </h6>
                                <p class="mb-3 text-muted">
                                    Unlock advanced techniques in Figma that can speed up your workflow and help you create pixel-perfect designs every time.
                                </p>

                                <div>
                                    <a href="#!" class="badge badge-label badge-default">Figma</a>
                                    <a href="#!" class="badge badge-label badge-default">UX</a>
                                    <a href="#!" class="badge badge-label badge-default">Tips</a>
                                </div>

                                <p class="d-flex flex-wrap gap-3 text-muted mb-0 mt-3 align-items-center fs-base">
                                    <span><i class="ti ti-calendar fs-md"></i> Jan 12, 2025</span>
                                    <span><i class="ti ti-message-circle fs-md"></i> <a href="#!" class="link-reset">89</a></span>
                                    <span><i class="ti ti-eye fs-md"></i> 1,284</span>
                                </p>
                            </div>

                            <!-- Card footer -->
                            <div class="card-footer bg-transparent d-flex justify-content-between">
                                <div class="d-flex justify-content-start align-items-center gap-2">
                                    <div class="avatar avatar-xs">
                                        <img src="/images/users/user-6.jpg" alt="avatar-6" class="img-fluid rounded-circle">
                                    </div>
                                    <div>
                                        <h5 class="text-nowrap fs-sm mb-0 lh-base">
                                            <a href="#!" class="link-reset">Emma Blake</a>
                                        </h5>
                                    </div>
                                </div>
                                <a class="link-primary fw-semibold" href="article">Read more <i class="ti ti-arrow-right"></i></a>
                            </div>
                        </article>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <article class="card rounded-3">
                            <!-- Badge -->
                            <div class="badge text-bg-dark badge-label position-absolute top-0 start-0 m-3">Development</div>

                            <!-- Card image -->
                            <img class="card-img-top rounded-top-3" src="/images/blog/blog-1.jpg" alt="Building APIs">

                            <!-- Card Body -->
                            <div class="card-body">
                                <!-- Title -->
                                <h6 class="card-title fs-lg lh-base mb-2">
                                    <a href="article" class="link-reset">Building REST APIs with Node.js</a>
                                </h6>
                                <p class="mb-3 text-muted">
                                    Learn how to design and build scalable REST APIs with Node.js and Express in this step-by-step tutorial.
                                </p>

                                <div>
                                    <a href="#!" class="badge badge-label badge-default">Node.js</a>
                                    <a href="#!" class="badge badge-label badge-default">API</a>
                                    <a href="#!" class="badge badge-label badge-default">Tutorial</a>
                                </div>

                                <p class="d-flex flex-wrap gap-3 text-muted mb-0 mt-3 align-items-center fs-base">
                                    <span><i class="ti ti-calendar fs-md"></i> Jan 12, 2025</span>
                                    <span><i class="ti ti-message-circle fs-md"></i> <a href="#!" class="link-reset">89</a></span>
                                    <span><i class="ti ti-eye fs-md"></i> 1,284</span>
                                </p>
                            </div>

                            <!-- Card footer -->
                            <div class="card-footer bg-transparent d-flex justify-content-between">
                                <div class="d-flex justify-content-start align-items-center gap-2">
                                    <div class="avatar avatar-xs">
                                        <img src="/images/users/user-3.jpg" alt="avatar-3" class="img-fluid rounded-circle">
                                    </div>
                                    <div>
                                        <h5 class="text-nowrap fs-sm mb-0 lh-base">
                                            <a href="#!" class="link-reset">John Doe</a>
                                        </h5>
                                    </div>
                                </div>
                                <a class="link-primary fw-semibold" href="article">Read more <i class="ti ti-arrow-right"></i></a>
                            </div>
                        </article>
                    </div> <!-- end col-->
                    <div class="col-xl-3 col-md-6">
                        <article class="card rounded-3">
                            <!-- Badge -->
                            <div class="badge text-bg-dark badge-label position-absolute top-0 start-0 m-3">Marketing</div>

                            <!-- Card image -->
                            <img class="card-img-top rounded-top-3" src="/images/blog/blog-2.jpg" alt="SEO Strategies">

                            <!-- Card Body -->
                            <div class="card-body">
                                <!-- Title -->
                                <h6 class="card-title fs-lg lh-base mb-2">
                                    <a href="article" class="link-reset">SEO Strategies for 2025: How to Rank Higher</a>
                                </h6>
                                <p class="mb-3 text-muted">
                                    Boost your website's search engine ranking with these proven SEO techniques for 2025.
                                </p>

                                <div>
                                    <a href="#!" class="badge badge-label badge-default">SEO</a>
                                    <a href="#!" class="badge badge-label badge-default">Marketing</a>
                                    <a href="#!" class="badge badge-label badge-default">Growth</a>
                                </div>

                                <p class="d-flex flex-wrap gap-3 text-muted mb-0 mt-3 align-items-center fs-base">
                                    <span><i class="ti ti-calendar fs-md"></i> Jan 12, 2025</span>
                                    <span><i class="ti ti-message-circle fs-md"></i> <a href="#!" class="link-reset">89</a></span>
                                    <span><i class="ti ti-eye fs-md"></i> 1,284</span>
                                </p>
                            </div>

                            <!-- Card footer -->
                            <div class="card-footer bg-transparent d-flex justify-content-between">
                                <div class="d-flex justify-content-start align-items-center gap-2">
                                    <div class="avatar avatar-xs">
                                        <img src="/images/users/user-2.jpg" alt="avatar-2" class="img-fluid rounded-circle">
                                    </div>
                                    <div>
                                        <h5 class="text-nowrap fs-sm mb-0 lh-base">
                                            <a href="#!" class="link-reset">Sophie Green</a>
                                        </h5>
                                    </div>
                                </div>
                                <a class="link-primary fw-semibold" href="article">Read more <i class="ti ti-arrow-right"></i></a>
                            </div>
                        </article>
                    </div> <!-- end col-->
                    <div class="col-xl-3 col-md-6">
                        <article class="card rounded-3">
                            <!-- Card Body -->
                            <div class="card-body">
                                <!-- Badge -->
                                <div class="badge text-bg-dark badge-label mb-3">Design</div>

                                <!-- Title -->
                                <h6 class="card-title fs-lg lh-base mb-2">
                                    <a href="article" class="link-reset">Web Design Trends to Watch in 2025</a>
                                </h6>
                                <p class="mb-3 text-muted">
                                    Explore the top web design trends that will shape the user experience in 2025.
                                </p>

                                <div>
                                    <a href="#!" class="badge badge-label badge-default">Web Design</a>
                                    <a href="#!" class="badge badge-label badge-default">UX/UI</a>
                                    <a href="#!" class="badge badge-label badge-default">Trends</a>
                                </div>

                                <p class="d-flex flex-wrap gap-3 text-muted mb-0 mt-3 align-items-center fs-base">
                                    <span><i class="ti ti-calendar fs-md"></i> Jan 12, 2025</span>
                                    <span><i class="ti ti-message-circle fs-md"></i> <a href="#!" class="link-reset">89</a></span>
                                    <span><i class="ti ti-eye fs-md"></i> 1,284</span>
                                </p>
                            </div>

                            <!-- Card footer -->
                            <div class="card-footer bg-transparent d-flex justify-content-between">
                                <div class="d-flex justify-content-start align-items-center gap-2">
                                    <div class="avatar avatar-xs">
                                        <img src="/images/users/user-5.jpg" alt="avatar-5" class="img-fluid rounded-circle">
                                    </div>
                                    <div>
                                        <h5 class="text-nowrap fs-sm mb-0 lh-base">
                                            <a href="#!" class="link-reset">Anna White</a>
                                        </h5>
                                    </div>
                                </div>
                                <a class="link-primary fw-semibold" href="article">Read more <i class="ti ti-arrow-right"></i></a>
                            </div>
                        </article>
                    </div> <!-- end col-->
                    <div class="col-xl-3 col-md-6">
                        <article class="card rounded-3">
                            <!-- Badge -->
                            <div class="badge text-bg-dark badge-label position-absolute top-0 start-0 m-3">Business</div>

                            <!-- Card image -->
                            <img class="card-img-top rounded-top-3" src="/images/blog/blog-3.jpg" alt="Entrepreneur Tips">

                            <!-- Card Body -->
                            <div class="card-body">
                                <!-- Title -->
                                <h6 class="card-title fs-lg lh-base mb-2">
                                    <a href="article" class="link-reset">5 Key Tips for New Entrepreneurs</a>
                                </h6>
                                <p class="mb-3 text-muted">
                                    Start your entrepreneurial journey with these 5 essential tips that will guide you through the first year of business.
                                </p>

                                <div>
                                    <a href="#!" class="badge badge-label badge-default">Business</a>
                                    <a href="#!" class="badge badge-label badge-default">Entrepreneur</a>
                                    <a href="#!" class="badge badge-label badge-default">Startup</a>
                                </div>

                                <p class="d-flex flex-wrap gap-3 text-muted mb-0 mt-3 align-items-center fs-base">
                                    <span><i class="ti ti-calendar fs-md"></i> Jan 12, 2025</span>
                                    <span><i class="ti ti-message-circle fs-md"></i> <a href="#!" class="link-reset">89</a></span>
                                    <span><i class="ti ti-eye fs-md"></i> 1,284</span>
                                </p>
                            </div>

                            <!-- Card footer -->
                            <div class="card-footer bg-transparent d-flex justify-content-between">
                                <div class="d-flex justify-content-start align-items-center gap-2">
                                    <div class="avatar avatar-xs">
                                        <img src="/images/users/user-7.jpg" alt="avatar-7" class="img-fluid rounded-circle">
                                    </div>
                                    <div>
                                        <h5 class="text-nowrap fs-sm mb-0 lh-base">
                                            <a href="#!" class="link-reset">David Clark</a>
                                        </h5>
                                    </div>
                                </div>
                                <a class="link-primary fw-semibold" href="article">Read more <i class="ti ti-arrow-right"></i></a>
                            </div>
                        </article>
                    </div> <!-- end col-->
                    <div class="col-xl-3 col-md-6">
                        <article class="card rounded-3">
                            <!-- Badge -->
                            <div class="badge text-bg-dark badge-label position-absolute top-0 start-0 m-3">Technology</div>

                            <!-- Card image -->
                            <img class="card-img-top rounded-top-3" src="/images/blog/blog-4.jpg" alt="Tech Innovations">

                            <!-- Card Body -->
                            <div class="card-body">
                                <!-- Title -->
                                <h6 class="card-title fs-lg lh-base mb-2">
                                    <a href="article" class="link-reset">The Future of Artificial Intelligence</a>
                                </h6>
                                <p class="mb-3 text-muted">
                                    Discover how AI is transforming industries and what the future holds for this cutting-edge technology.
                                </p>

                                <div>
                                    <a href="#!" class="badge badge-label badge-default">AI</a>
                                    <a href="#!" class="badge badge-label badge-default">Technology</a>
                                    <a href="#!" class="badge badge-label badge-default">Innovation</a>
                                </div>

                                <p class="d-flex flex-wrap gap-3 text-muted mb-0 mt-3 align-items-center fs-base">
                                    <span><i class="ti ti-calendar fs-md"></i> Jan 12, 2025</span>
                                    <span><i class="ti ti-message-circle fs-md"></i> <a href="#!" class="link-reset">89</a></span>
                                    <span><i class="ti ti-eye fs-md"></i> 1,284</span>
                                </p>
                            </div>

                            <!-- Card footer -->
                            <div class="card-footer bg-transparent d-flex justify-content-between">
                                <div class="d-flex justify-content-start align-items-center gap-2">
                                    <div class="avatar avatar-xs">
                                        <img src="/images/users/user-4.jpg" alt="avatar-4" class="img-fluid rounded-circle">
                                    </div>
                                    <div>
                                        <h5 class="text-nowrap fs-sm mb-0 lh-base">
                                            <a href="#!" class="link-reset">Michael Turner</a>
                                        </h5>
                                    </div>
                                </div>
                                <a class="link-primary fw-semibold" href="article">Read more <i class="ti ti-arrow-right"></i></a>
                            </div>
                        </article>
                    </div> <!-- end col-->
                    <div class="col-xl-3 col-md-6">
                        <article class="card bg-primary bg-gradient rounded-3">
                            <!-- Card Body -->
                            <div class="card-body">
                                <!-- Badge -->
                                <div class="badge bg-white text-white bg-opacity-25 badge-label mb-3">Data Science</div>

                                <!-- Title -->
                                <h6 class="card-title fs-lg lh-base mb-2">
                                    <a href="article" class="text-white">Top Data Science Trends in 2025</a>
                                </h6>
                                <p class="mb-3 text-white-50">
                                    Get ahead in the data science field with the latest trends, technologies, and tools that are reshaping the industry.
                                </p>

                                <div>
                                    <a href="#!" class="badge badge-label border rounded border-white border-opacity-25">Data Science</a>
                                    <a href="#!" class="badge badge-label border rounded border-white border-opacity-25">Trends</a>
                                    <a href="#!" class="badge badge-label border rounded border-white border-opacity-25">2025</a>
                                </div>

                                <p class="d-flex flex-wrap gap-3 text-white-50 mb-0 mt-3 align-items-center fs-base">
                                    <span><i class="ti ti-calendar fs-md"></i> Jan 12, 2025</span>
                                    <span><i class="ti ti-message-circle fs-md"></i> <a href="#!" class="link-reset">89</a></span>
                                    <span><i class="ti ti-eye fs-md"></i> 1,284</span>
                                </p>
                            </div>

                            <!-- Card footer -->
                            <div class="card-footer bg-transparent d-flex justify-content-between border-light border-opacity-25">
                                <div class="d-flex justify-content-start align-items-center gap-2">
                                    <div class="avatar avatar-xs">
                                        <img src="/images/users/user-1.jpg" alt="avatar-1" class="img-fluid rounded-circle">
                                    </div>
                                    <div>
                                        <h5 class="text-nowrap fs-sm mb-0 lh-base">
                                            <a href="#!" class="text-white">Olivia Brown</a>
                                        </h5>
                                    </div>
                                </div>
                                <a class="text-white fw-semibold" href="article">Read more <i class="ti ti-arrow-right"></i></a>
                            </div>
                        </article>
                    </div> <!-- end col-->

                    <div class="col-xl-3 col-md-6">
                        <article class="card rounded-3">
                            <!-- Badge -->
                            <div class="badge text-bg-dark badge-label position-absolute top-0 start-0 m-3">Data Science</div>

                            <!-- Card image -->
                            <img class="card-img-top rounded-top-3" src="/images/blog/blog-5.jpg" alt="Data Science Trends">

                            <!-- Card Body -->
                            <div class="card-body">
                                <!-- Title -->
                                <h6 class="card-title fs-lg lh-base mb-2">
                                    <a href="article" class="link-reset">Top Data Science Trends in 2025</a>
                                </h6>
                                <p class="mb-3 text-muted">
                                    Get ahead in the data science field with the latest trends, technologies, and tools that are reshaping the industry.
                                </p>

                                <div>
                                    <a href="#!" class="badge badge-label badge-default">Data Science</a>
                                    <a href="#!" class="badge badge-label badge-default">Trends</a>
                                    <a href="#!" class="badge badge-label badge-default">2025</a>
                                </div>

                                <p class="d-flex flex-wrap gap-3 text-muted mb-0 mt-3 align-items-center fs-base">
                                    <span><i class="ti ti-calendar fs-md"></i> Jan 12, 2025</span>
                                    <span><i class="ti ti-message-circle fs-md"></i> <a href="#!" class="link-reset">89</a></span>
                                    <span><i class="ti ti-eye fs-md"></i> 1,284</span>
                                </p>
                            </div>

                            <!-- Card footer -->
                            <div class="card-footer bg-transparent d-flex justify-content-between">
                                <div class="d-flex justify-content-start align-items-center gap-2">
                                    <div class="avatar avatar-xs">
                                        <img src="/images/users/user-1.jpg" alt="avatar-1" class="img-fluid rounded-circle">
                                    </div>
                                    <div>
                                        <h5 class="text-nowrap fs-sm mb-0 lh-base">
                                            <a href="#!" class="link-reset">Olivia Brown</a>
                                        </h5>
                                    </div>
                                </div>
                                <a class="link-primary fw-semibold" href="article">Read more <i class="ti ti-arrow-right"></i></a>
                            </div>
                        </article>
                    </div> <!-- end col-->
                </div> <!-- end row-->

            </div>
            <!-- container -->

            <?= $this->include('./partials/footer') ?>

        </div>

        <!-- ============================================================== -->
        <!-- End of Main Content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <?= $this->include('./partials/customizer') ?>

    <?= $this->include('./partials/footer-scripts') ?>

    <script src="/plugins/masonry/masonry.pkgd.min.js"></script>

</body>

</html>