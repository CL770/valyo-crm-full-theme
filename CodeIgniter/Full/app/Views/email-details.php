<?= $this->include('./partials/html') ?>

<head>
    <?php echo view("partials/title-meta", array("title" => "Design Reviews & Feedback")) ?>

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
                            <div class="d-flex flex-wrap align-items-center gap-1">
                                <!-- Back to Inbox -->
                                <a href="email" class="btn btn-default btn-icon btn-sm" data-bs-toggle="tooltip" title="Back to Inbox">
                                    <i class="ti ti-arrow-left-dashed fs-lg"></i>
                                </a>

                                <!-- Delete -->
                                <button type="button" class="btn btn-default btn-icon btn-sm" data-bs-toggle="tooltip" title="Delete">
                                    <i class="ti ti-trash fs-lg"></i>
                                </button>

                                <!-- Mark as Read -->
                                <button type="button" class="btn btn-default btn-icon btn-sm" data-bs-toggle="tooltip" title="Mark as Read">
                                    <i class="ti ti-mail-opened fs-lg"></i>
                                </button>

                                <!-- Archive -->
                                <button type="button" class="btn btn-default btn-icon btn-sm" data-bs-toggle="tooltip" title="Archive">
                                    <i class="ti ti-archive fs-lg"></i>
                                </button>

                                <!-- Move to Folder -->
                                <button type="button" class="btn btn-default btn-icon btn-sm" data-bs-toggle="tooltip" title="Move to Folder">
                                    <i class="ti ti-folder fs-lg"></i>
                                </button>

                            </div>

                            <div class="d-flex align-items-center gap-1">

                                <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary rounded-circle">
                                    <i class="ti ti-share-3 fs-xl"></i>
                                </button>

                                <button type="button" class="btn btn-icon btn-sm btn-ghost-dark rounded-circle">
                                    <i class="ti ti-dots-vertical fs-xl"></i>
                                </button>
                            </div>
                        </div>

                        <div class="card-body pt-0 pb-5" style="height: calc(100% - 100px);" data-simplebar data-simplebar-md>
                            <h4 class="py-3 mb-0 sticky-top bg-body-secondary">Design Reviews & Feedback</h4>

                            <!-- Email One -->
                            <div class="pb-3">
                                <div class="d-flex align-items-center">
                                    <a class="d-flex align-items-center flex-grow-1 text-reset" data-bs-toggle="collapse" href="#EmailOne" role="button" aria-expanded="false" aria-controls="EmailOne">
                                        <img src="/images/users/user-3.jpg" class="avatar-md rounded-circle" alt="User Avatar">
                                        <div class="ms-2 overflow-hidden">
                                            <h5 class="fs-sm mb-0 text-truncate">John Maxwell</h5>
                                            <p class="text-muted mb-0 text-truncate">john.maxwell@uxstudio.com</p>
                                        </div>
                                    </a>
                                    <div class="ms-auto d-flex align-items-center gap-1">
                                        <button class="btn btn-icon btn-sm btn-ghost-light rounded-circle"><i class="ti ti-star-filled text-warning fs-lg"></i></button>
                                        <button class="btn btn-icon btn-sm btn-ghost-light text-dark rounded-circle"><i class="ti ti-mail-forward fs-lg"></i></button>
                                        <button class="btn btn-icon btn-sm btn-ghost-light text-dark rounded-circle"><i class="ti ti-mail-opened fs-lg"></i></button>
                                        <span class="text-muted fs-xs mb-0 ms-2">Apr 11, 07:47 AM</span>
                                    </div>
                                </div>

                                <div class="collapse" id="EmailOne">
                                    <div class="mt-3">
                                        <p>Hey team,</p>
                                        <p>I reviewed the new dashboard layout and overall it's looking solid. The spacing and typography are much better than the previous version.</p>
                                        <p>A couple of suggestions:</p>
                                        <ul>
                                            <li>Make the chart legends slightly smaller and lighter in color.</li>
                                            <li>Try a softer drop shadow for the card components – they feel a bit harsh right now.</li>
                                        </ul>
                                        <p>Let me know if you need a quick call to discuss.</p>
                                        <p class="mt-3 mb-0">Cheers,</p>
                                        <p class="fw-medium mb-0">John</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Email Two -->
                            <div class="py-3 border-top border-dashed">
                                <div class="d-flex align-items-center">
                                    <a class="d-flex align-items-center flex-grow-1 text-reset" data-bs-toggle="collapse" href="#EmailThree" role="button" aria-expanded="false" aria-controls="EmailThree">
                                        <img src="/images/users/user-6.jpg" class="avatar-md rounded-circle" alt="User Avatar">
                                        <div class="ms-2 overflow-hidden">
                                            <h5 class="fs-sm mb-0 text-truncate">Anika Patel</h5>
                                            <p class="text-muted mb-0 text-truncate">anika@creativemix.net</p>
                                        </div>
                                    </a>
                                    <div class="ms-auto d-flex align-items-center gap-1">
                                        <button class="btn btn-icon btn-sm btn-ghost-light rounded-circle">
                                            <i class="ti ti-star-filled text-warning fs-lg"></i>
                                        </button>
                                        <button class="btn btn-icon btn-sm btn-ghost-light text-dark rounded-circle">
                                            <i class="ti ti-mail-forward fs-lg"></i>
                                        </button>
                                        <button class="btn btn-icon btn-sm btn-ghost-light text-dark rounded-circle">
                                            <i class="ti ti-mail-opened fs-lg"></i>
                                        </button>
                                        <span class="text-muted fs-xs mb-0 ms-2">Apr 11, 09:05 AM</span>
                                    </div>
                                </div>

                                <div class="collapse" id="EmailThree">
                                    <div class="mt-3">
                                        <p>Hello team,</p>
                                        <p>I did a final check on the landing page animations. Everything works smoothly except the testimonial slider – there's a tiny jitter on loop transition.</p>
                                        <p>Maybe easing timing or delay tweaks can help fix it. Otherwise, great job!</p>
                                        <p>Let me know once it's deployed to staging so I can do one last run-through.</p>
                                        <p class="mt-3 mb-0">Thanks,</p>
                                        <p class="fw-medium mb-0">Anika</p>
                                    </div>

                                    <div class="mt-3">
                                        <div class="d-flex justify-content-between mt-3">
                                            <h4 class="fs-sm text-muted">1 Attachment</h4>
                                        </div>
                                        <div class="mt-2 d-flex flex-wrap gap-2">
                                            <div class="d-flex p-2 gap-2 align-items-center text-start position-relative border border-dashed rounded">
                                                <i class="ti ti-video fs-24 text-primary"></i>
                                                <div>
                                                    <h4 class="fs-sm mb-1"><a href="#!" class="link-reset stretched-link">testimonial-glitch.mp4</a></h4>
                                                    <p class="fs-xs mb-0">4.7 MB</p>
                                                </div>
                                                <i class="ti ti-download fs-xxl text-muted"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Email Three -->
                            <div class="py-3 border-top border-dashed">
                                <div class="d-flex align-items-center">
                                    <a class="d-flex align-items-center flex-grow-1 text-reset" data-bs-toggle="collapse" href="#EmailTwo" role="button" aria-expanded="false" aria-controls="EmailTwo">
                                        <img src="/images/users/user-5.jpg" class="avatar-md rounded-circle" alt="User Avatar">
                                        <div class="ms-2 overflow-hidden">
                                            <h5 class="fs-sm mb-0 text-truncate">Laura Chen</h5>
                                            <p class="text-muted mb-0 text-truncate">laura.chen@designteam.co</p>
                                        </div>
                                    </a>
                                    <div class="ms-auto d-flex align-items-center gap-1">
                                        <button class="btn btn-icon btn-sm btn-ghost-light rounded-circle">
                                            <i class="ti ti-star-filled text-warning fs-lg"></i>
                                        </button>
                                        <button class="btn btn-icon btn-sm btn-ghost-light text-dark rounded-circle">
                                            <i class="ti ti-mail-forward fs-lg"></i>
                                        </button>
                                        <button class="btn btn-icon btn-sm btn-ghost-light text-dark rounded-circle">
                                            <i class="ti ti-mail-opened fs-lg"></i>
                                        </button>
                                        <span class="text-muted fs-xs mb-0 ms-2">Apr 12, 11:42 AM</span>
                                    </div>
                                </div>

                                <div class="collapse show" id="EmailTwo">
                                    <div class="mt-lg-4 mt-3">
                                        <p>Hi folks,</p>
                                        <p>Thanks for sharing the prototype. The color scheme and layout look clean, but I think we can still refine the mobile responsiveness on the pricing page.</p>
                                        <p>Also, the button contrast on the footer needs more WCAG-friendly contrast – it's currently a bit hard to read.</p>
                                        <p>I’ve attached some screenshots with markup for clarity.</p>
                                        <p class="mt-3 mb-0">Regards,</p>
                                        <p class="fw-medium">Laura</p>
                                    </div>

                                    <div class="mt-3">
                                        <div class="d-flex justify-content-between mt-3">
                                            <h4 class="fs-sm text-muted">2 Attachments</h4>
                                        </div>
                                        <div class="mt-2 d-flex flex-wrap gap-2">
                                            <div class="d-flex p-2 gap-2 align-items-center text-start position-relative border border-dashed rounded">
                                                <i class="ti ti-file-text fs-24 text-danger"></i>
                                                <div>
                                                    <h4 class="fs-sm mb-1"><a href="#!" class="link-reset stretched-link">footer-contrast-notes.pdf</a></h4>
                                                    <p class="fs-xs mb-0">1.2 MB</p>
                                                </div>
                                                <i class="ti ti-download fs-xxl text-muted"></i>
                                            </div>
                                            <div class="d-flex p-2 gap-2 align-items-center text-start position-relative border border-dashed rounded">
                                                <i class="ti ti-photo fs-24 text-secondary"></i>
                                                <div>
                                                    <h4 class="fs-sm mb-1"><a href="#!" class="link-reset stretched-link">responsive-issues.png</a></h4>
                                                    <p class="fs-xs mb-0">850 KB</p>
                                                </div>
                                                <i class="ti ti-download fs-xxl text-muted"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Reply Box -->
                            <div class="position-sticky bottom-0 z-1">
                                <div class="collapse" id="EmailReply">
                                    <div class="mt-2 pb-5">
                                        <textarea class="form-control rounded-top rounded-0" id="exampleFormControlTextarea1" rows="6" placeholder="Enter message"></textarea>
                                        <div class="bg-light-subtle p-2 rounded-bottom border border-top-0">
                                            <div class="d-flex gap-1 align-items-center">
                                                <button type="button" class="btn btn-sm btn-icon btn-light" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Bold">
                                                    <i class="ti ti-bold"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-icon btn-light" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Italic">
                                                    <i class="ti ti-italic"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-icon btn-light" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Attach files">
                                                    <i class="ti ti-paperclip"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-icon btn-light" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Insert link">
                                                    <i class="ti ti-link"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-icon btn-light" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Insert photo">
                                                    <i class="ti ti-photo-up"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-light ms-auto" data-bs-toggle="collapse" data-bs-target="#EmailReply">
                                                    <i class="ti ti-x me-1"></i> Cancel
                                                </button>
                                                <button type="button" class="btn btn-sm btn-success">
                                                    <i class="ti ti-send me-1"></i> Send
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end card-body -->


                        <div class="card-header bg-body-secondary border-top border-dashed border-bottom-0 position-absolute bottom-0 w-100">
                            <div class="d-flex flex-wrap align-items-center justify-content-between">
                                <div class="d-flex align-items-center gap-2">
                                    <button class="btn btn-sm btn-default" data-bs-toggle="collapse" data-bs-target="#EmailReply" aria-expanded="false" aria-controls="EmailReply" type="button">
                                        <i class="ti ti-share-3 fs-lg"></i>
                                        <span class="fw-medium ms-1">Reply</span>
                                    </button>

                                    <button class="btn btn-sm btn-default" type="button">
                                        <i class="ti ti-arrow-big-left fs-lg"></i>
                                        <span class="fw-medium ms-1">Forward</span>
                                    </button>

                                    <button class="btn btn-sm btn-default" type="button">
                                        <i class="ti ti-printer fs-lg"></i>
                                        <span class="fw-medium ms-1">Print</span>
                                    </button>
                                </div>
                            </div>
                        </div>
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

</body>

</html>