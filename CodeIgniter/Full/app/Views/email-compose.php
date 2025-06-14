<?= $this->include('./partials/html') ?>

<head>
    <?php echo view("partials/title-meta", array("title" => "New Email (Compose)")) ?>

    <!-- Quill css -->
    <link href="/plugins/quill/quill.core.css" rel="stylesheet" type="text/css">
    <link href="/plugins/quill/quill.snow.css" rel="stylesheet" type="text/css">

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

                <?php echo view("./partials/page-title", array("subtitle" => "Apps", "title" => "Email")) ?>

                <div class="outlook-box email-app">
                    <div class="offcanvas-lg offcanvas-start outlook-left-menu outlook-left-menu-sm" tabindex="-1" id="emailSidebaroffcanvas">
                        <div class="card h-100 mb-0 rounded-end-0" data-simplebar>
                            <div class="card-body">
                                <a href="email-compose" class="btn btn-danger fw-medium w-100">Compose</a>

                                <div class="list-group list-group-flush list-custom mt-3">
                                    <a href="email" class="list-group-item list-group-item-action active">
                                        <i class="ti ti-inbox me-1 opacity-75 fs-lg align-middle"></i>
                                        <span class="align-middle">Inbox</span>
                                        <span class="badge align-middle bg-danger-subtle fs-xxs text-danger float-end">21</span>
                                    </a>

                                    <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                        <i class="ti ti-send align-middle me-1 opacity-75 fs-lg"></i>
                                        <span class="align-middle">Sent</span>
                                    </a>

                                    <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                        <i class="ti ti-star align-middle me-1 opacity-75 fs-lg"></i>
                                        <span class="align-middle">Starred</span>
                                    </a>

                                    <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                        <i class="ti ti-clock align-middle me-1 opacity-75 fs-lg"></i>
                                        <span class="align-middle">Scheduled</span>
                                    </a>

                                    <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                        <i class="ti ti-pencil align-middle me-1 opacity-75 fs-lg"></i>
                                        <span class="align-middle">Drafts</span>
                                        <span class="badge align-middle bg-purple-subtle text-purple fs-xxs float-end">9</span>
                                    </a>

                                    <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                        <i class="ti ti-alert-circle align-middle me-1 opacity-75 fs-lg"></i>
                                        <span class="align-middle">Important</span>
                                    </a>

                                    <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                        <i class="ti ti-ban me-1 align-middle opacity-75 fs-lg"></i>
                                        <span class="align-middle">Spam</span>
                                    </a>

                                    <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                        <i class="ti ti-trash me-1 align-middle opacity-75 fs-lg"></i>
                                        <span class="align-middle">Trash</span>
                                    </a>

                                    <div class="list-group-item mt-2">
                                        <span class="align-middle">Labels</span>
                                    </div>

                                    <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                        <i class="ti ti-chart-donut-filled me-1 align-middle fs-sm text-primary"></i>
                                        <span class="align-middle">Business</span>
                                    </a>

                                    <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                        <i class="ti ti-chart-donut-filled me-1 align-middle fs-sm text-purple"></i>
                                        <span class="align-middle">Personal</span>
                                    </a>

                                    <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                        <i class="ti ti-chart-donut-filled me-1 align-middle fs-sm text-info"></i>
                                        <span class="align-middle">Friends</span>
                                    </a>

                                    <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                        <i class="ti ti-chart-donut-filled me-1 align-middle fs-sm text-warning"></i>
                                        <span class="align-middle">Family</span>
                                    </a>
                                </div>

                            </div> <!-- end card-body-->

                            <div class="position-absolute bottom-0 start-0 w-100 overflow-hidden" style="pointer-events: none;">
                                <svg viewBox="0 0 600 560" preserveAspectRatio="xMinYMax meet" width="100%" height="100%" fill="none" xmlns="http://www.w3.org/2000/svg" style="opacity: 0.05;">
                                    <!-- Circle -->
                                    <circle cx="50" cy="480" r="40" fill="#FF4C3E" />

                                    <!-- Wavy Path -->
                                    <path d="M140 440 C130 470, 100 470, 90 440 S50 410, 40 440" stroke="#089df1" stroke-width="2" fill="none" />

                                    <!-- Triangle -->
                                    <path d="M100 360 L50 410 L0 360 Z" fill="#f9bf59" />

                                    <!-- Oval -->
                                    <ellipse cx="80" cy="280" rx="30" ry="50" fill="#7b70ef" />

                                    <!-- Rounded Diamond -->
                                    <path d="M140 240 Q130 260 110 250 Q90 240 100 220 Q110 200 130 210 Q150 220 140 240 Z" fill="#089df1" />

                                    <!-- Organic blob -->
                                    <path d="M130 150 C140 170, 110 180, 90 170 C70 160, 60 140, 80 120 C100 100, 120 110, 130 150 Z" fill="#f7577e" />

                                    <!-- Star -->
                                    <path d="M220 480 L212 460 H190 L208 445 L200 425 L220 437 L240 425 L232 445 L250 460 H228 Z" fill="#7b70ef" />

                                    <!-- Spiral -->
                                    <path d="M310 460 C300 470, 290 450, 300 440 C310 430, 330 430, 340 440 C350 450, 350 470, 340 480" stroke="#089df1" stroke-width="2" fill="none" />

                                    <!-- Custom Polygon (Irregular Shape) -->
                                    <path d="M280 360 L270 350 L280 330 L300 330 L310 350 Z" fill="#f7577e" />

                                    <!-- Ring -->
                                    <circle cx="140" cy="310" r="20" stroke="#089df1" stroke-width="3" fill="none" />
                                </svg>
                            </div>
                        </div> <!-- end card-->
                    </div>

                    <div class="card h-100 mb-0 rounded-start-0 flex-grow-1 border-start-0">
                        <div class="card-header d-lg-none d-flex gap-2">
                            <button class="btn btn-default btn-icon" type="button" data-bs-toggle="offcanvas" data-bs-target="#emailSidebaroffcanvas" aria-controls="emailSidebaroffcanvas">
                                <i class="ti ti-menu-2 fs-lg"></i>
                            </button>

                            <div class="app-search">
                                <input type="text" class="form-control" placeholder="Search mails...">
                                <i data-lucide="search" class="app-search-icon text-muted"></i>
                            </div>
                        </div>

                        <div class="card-header card-bg justify-content-between">
                            <h4 class="card-title">Compose Message</h4>
                        </div>

                        <div class="card-body p-0" style="height: calc(100% - 120px);" data-simplebar data-simplebar-md>
                            <div class="app-search input-group border-bottom border-dashed ps-2 pe-4">
                                <input type="text" class="form-control py-3 border-0" placeholder="Enter emails..">
                                <span class="app-search-icon fw-semibold fs-sm">To:</span>
                                <button class="btn btn-link fs-sm px-2 text-decoration-underline text-reset fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#email-cc" aria-expanded="false" aria-controls="email-cc">Cc</button>
                                <button class="btn btn-link fs-sm px-2 text-decoration-underline text-reset fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#email-bcc" aria-expanded="false" aria-controls="email-bcc">Bcc</button>
                            </div>

                            <div class="collapse" id="email-cc">
                                <div class="app-search input-group border-bottom border-dashed ps-2 pe-4">
                                    <input type="text" class="form-control py-3 border-0" placeholder="Enter emails..">
                                    <span class="app-search-icon fw-semibold fs-sm">Cc:</span>
                                    <button class="btn btn-link px-2 text-muted fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#email-cc" aria-expanded="false" aria-controls="email-cc"><i class="ti ti-x fs-xl"></i></button>
                                </div>
                            </div>

                            <div class="collapse" id="email-bcc">
                                <div class="app-search input-group border-bottom border-dashed ps-2 pe-4">
                                    <input type="text" class="form-control py-3 border-0" placeholder="Enter emails..">
                                    <span class="app-search-icon fw-semibold fs-sm">Bcc:</span>
                                    <button class="btn btn-link px-2 text-muted fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#email-bcc" aria-expanded="false" aria-controls="email-bcc"><i class="ti ti-x fs-xl"></i></button>
                                </div>
                            </div>

                            <div class="border-bottom border-dashed ps-2 pe-4">
                                <input type="text" class="form-control py-3 fs-sm fw-semibold border-0" placeholder="Subject">
                            </div>

                            <div class="email-editor">
                                <div id="snow-editor">
                                    <p>Hi <strong><em>James</em></strong>,</p>

                                    <p>I hope you're doing well.</p>
                                    <p>I'm reaching out regarding the latest updates on our project. Please find the summary below:</p>
                                    <ul>
                                        <li>All UI components have been reviewed and finalized.</li>
                                        <li>The mobile responsiveness is now optimized across all breakpoints.</li>
                                        <li>We’re awaiting final client feedback before deployment.</li>
                                    </ul>
                                    <p>Let me know if you need anything else or if there's anything you'd like us to adjust.</p>
                                    <p><br></p>
                                    <p>Best regards,</p>
                                    <p><em>Damian</em></p>
                                </div><!-- end Snow-editor -->
                            </div>
                            <div class="bg-light-subtle p-2 border-light border-bottom">
                                <div class="d-flex gap-1 align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary">
                                            <i class="ti ti-send-2 me-2"></i> Send
                                        </button>
                                        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split drop-arrow-none" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ti ti-chevron-down align-middle"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Send & Archive</a>
                                            <a class="dropdown-item" href="#">Schedule Send</a>
                                            <a class="dropdown-item" href="#">Save as Draft</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Discard</a>
                                        </div>
                                    </div><!-- /btn-group -->

                                    <button type="button" class="btn btn-sm btn-icon btn-light ms-auto" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Settings"><i class="ti ti-settings"></i></button>
                                    <button type="button" class="btn btn-sm btn-icon btn-soft-danger" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Delete"><i class="ti ti-trash"></i></button>
                                </div>
                            </div>

                        </div> <!-- end card-body -->

                    </div> <!-- end card-->
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

    <!-- Quill Editor js -->
    <script src="/plugins/quill/quill.js"></script>

    <!-- Email Compose Page js -->
    <script src="/js/pages/email-compose.js"></script>

</body>

</html>