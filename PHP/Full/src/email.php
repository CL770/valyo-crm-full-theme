<?php include './partials/html.php' ?>

<head>
    <?php $title = "Inbox (77)"; include 'partials/title-meta.php' ?>

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
            
            <?php $subtitle = "Apps"; $title = "Email"; include 'partials/page-title.php' ?>

            <div class="outlook-box email-app">
                <div class="offcanvas-lg offcanvas-start outlook-left-menu outlook-left-menu-sm" tabindex="-1"
                     id="emailSidebaroffcanvas">
                    <div class="card h-100 mb-0 rounded-end-0" data-simplebar>
                        <div class="card-body">
                            <a href="email-compose.php" class="btn btn-danger fw-medium w-100">Compose</a>

                            <div class="list-group list-group-flush list-custom mt-3">
                                <a href="email.php" class="list-group-item list-group-item-action active">
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

                        <div class="position-absolute bottom-0 start-0 w-100 overflow-hidden"
                             style="pointer-events: none;">
                            <svg viewBox="0 0 600 560" preserveAspectRatio="xMinYMax meet" width="100%" height="100%"
                                 fill="none" xmlns="http://www.w3.org/2000/svg" style="opacity: 0.05;">
                                <!-- Circle -->
                                <circle cx="50" cy="480" r="40" fill="#FF4C3E"/>

                                <!-- Wavy Path -->
                                <path d="M140 440 C130 470, 100 470, 90 440 S50 410, 40 440" stroke="#089df1"
                                      stroke-width="2" fill="none"/>

                                <!-- Triangle -->
                                <path d="M100 360 L50 410 L0 360 Z" fill="#f9bf59"/>

                                <!-- Oval -->
                                <ellipse cx="80" cy="280" rx="30" ry="50" fill="#7b70ef"/>

                                <!-- Rounded Diamond -->
                                <path d="M140 240 Q130 260 110 250 Q90 240 100 220 Q110 200 130 210 Q150 220 140 240 Z"
                                      fill="#089df1"/>

                                <!-- Organic blob -->
                                <path d="M130 150 C140 170, 110 180, 90 170 C70 160, 60 140, 80 120 C100 100, 120 110, 130 150 Z"
                                      fill="#f7577e"/>

                                <!-- Star -->
                                <path d="M220 480 L212 460 H190 L208 445 L200 425 L220 437 L240 425 L232 445 L250 460 H228 Z"
                                      fill="#7b70ef"/>

                                <!-- Spiral -->
                                <path d="M310 460 C300 470, 290 450, 300 440 C310 430, 330 430, 340 440 C350 450, 350 470, 340 480"
                                      stroke="#089df1" stroke-width="2" fill="none"/>

                                <!-- Custom Polygon (Irregular Shape) -->
                                <path d="M280 360 L270 350 L280 330 L300 330 L310 350 Z" fill="#f7577e"/>

                                <!-- Ring -->
                                <circle cx="140" cy="310" r="20" stroke="#089df1" stroke-width="3" fill="none"/>
                            </svg>
                        </div>
                    </div> <!-- end card-->
                </div>

                <div data-table data-table-rows-per-page="15"
                     class="card h-100 mb-0 rounded-start-0 flex-grow-1 border-start-0">
                    <div class="card-header d-lg-none d-flex gap-2">
                        <button class="btn btn-default btn-icon" type="button" data-bs-toggle="offcanvas"
                                data-bs-target="#emailSidebaroffcanvas" aria-controls="emailSidebaroffcanvas">
                            <i class="ti ti-menu-2 fs-lg"></i>
                        </button>

                        <div class="app-search">
                            <input type="text" class="form-control" placeholder="Search mails...">
                            <i data-lucide="search" class="app-search-icon text-muted"></i>
                        </div>
                    </div>

                    <div class="card-header card-bg justify-content-between">
                        <div class="d-flex flex-wrap align-items-center gap-1">
                            <input class="form-check-input form-check-input-light fs-14 mt-0 me-3" type="checkbox"
                                   id="select-all-email">

                            <!-- Delete -->
                            <button type="button" class="btn btn-default btn-icon btn-sm" data-bs-toggle="tooltip"
                                    title="Delete">
                                <i class="ti ti-trash fs-lg"></i>
                            </button>

                            <!-- Mark as Read -->
                            <button type="button" class="btn btn-default btn-icon btn-sm" data-bs-toggle="tooltip"
                                    title="Mark as Read">
                                <i class="ti ti-mail-opened fs-lg"></i>
                            </button>

                            <!-- Tag -->
                            <button type="button" class="btn btn-default btn-icon btn-sm" data-bs-toggle="tooltip"
                                    title="Tag">
                                <i class="ti ti-tag fs-lg"></i>
                            </button>

                            <!-- Archive -->
                            <button type="button" class="btn btn-default btn-icon btn-sm" data-bs-toggle="tooltip"
                                    title="Archive">
                                <i class="ti ti-archive fs-lg"></i>
                            </button>

                            <!-- Move to Folder -->
                            <button type="button" class="btn btn-default btn-icon btn-sm" data-bs-toggle="tooltip"
                                    title="Move to Folder">
                                <i class="ti ti-folder fs-lg"></i>
                            </button>

                            <!-- Forward -->
                            <button type="button" class="btn btn-default btn-icon btn-sm" data-bs-toggle="tooltip"
                                    title="Forward">
                                <i class="ti ti-arrow-forward-up fs-lg"></i>
                            </button>

                            <!-- Snooze -->
                            <button type="button" class="btn btn-default btn-icon btn-sm" data-bs-toggle="tooltip"
                                    title="Snooze">
                                <i class="ti ti-clock-pause fs-lg"></i>
                            </button>

                            <!-- Important -->
                            <button type="button" class="btn btn-default btn-icon btn-sm" data-bs-toggle="tooltip"
                                    title="Mark as Important">
                                <i class="ti ti-alert-circle fs-lg"></i>
                            </button>
                        </div>

                        <div class="app-search d-none d-lg-inline-flex">
                            <input data-table-search type="text" class="form-control" placeholder="Search mails...">
                            <i data-lucide="search" class="app-search-icon text-muted"></i>
                        </div>
                    </div>

                    <div class="card-body p-0" style="height: calc(100% - 100px);" data-simplebar data-simplebar-md>
                        <div class="table-responsive">
                            <table class="table table-hover table-select mb-0">
                                <tbody>
                                <tr class="position-relative">
                                    <td class="ps-3" style="width: 1%;">
                                        <div class="d-flex gap-3">
                                            <input class="form-check-input form-check-input-light fs-14 position-relative z-2 mt-0 email-item-check"
                                                   type="checkbox">

                                            <button class="btn p-0 text-warning fs-xl">
                                                <i class="ti ti-star-filled"></i>
                                            </button>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="assets/images/users/user-5.jpg" alt="user avatar"
                                                 class="avatar-xs rounded-circle">
                                            <h5 class="fs-base mb-0 fw-medium">
                                                Amanda Reyes
                                            </h5>
                                        </div>
                                    </td>

                                    <td>
                                        <a href="email-details.php" class="link-reset fs-base fw-medium stretched-link">
                                            Design Review & Feedback
                                        </a>
                                        <span class="d-xl-inline-block d-none">
                                                    —
                                                </span>
                                        <span class="fs-base text-muted d-xl-inline-block d-none mb-0">
                                                    I’ve reviewed the updated UI mockups. Great work overall—just a few...
                                                </span>
                                    </td>

                                    <td style="width: 1%;">
                                        <div class="d-flex align-items-center gap-1">
                                            <i class="ti ti-paperclip"></i>
                                            <span class="fw-semibold">3</span>
                                        </div>
                                    </td>

                                    <td>
                                        <p class="fs-xs text-muted mb-0 text-end pe-2">Apr 20, 10:12 AM</p>
                                    </td>
                                </tr>

                                <tr class="position-relative">
                                    <td class="ps-3" style="width: 1%;">
                                        <div class="d-flex gap-3">
                                            <input class="form-check-input form-check-input-light fs-14 position-relative z-2 mt-0 email-item-check"
                                                   type="checkbox">
                                            <button class="btn p-0 text-warning fs-xl">
                                                <i class="ti ti-star-filled"></i>
                                            </button>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="assets/images/users/user-2.jpg" alt="user avatar"
                                                 class="avatar-xs rounded-circle">
                                            <h5 class="fs-base mb-0 fw-medium">George Thomas</h5>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="email-details.php" class="link-reset fs-base fw-medium stretched-link">
                                            Request for Meeting
                                        </a>
                                        <span class="d-xl-inline-block d-none">—</span>
                                        <span class="fs-base text-muted d-xl-inline-block d-none mb-0">
                                                    Are you available for a quick sync-up this week regarding the roadmap?
                                                </span>
                                    </td>
                                    <td style="width: 1%;">
                                        <div class="d-flex align-items-center gap-1">
                                            <i class="ti ti-paperclip"></i>
                                            <span class="fw-semibold">1</span>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="fs-xs text-muted mb-0 text-end pe-2">Apr 19, 4:45 PM</p>
                                    </td>
                                </tr>

                                <tr class="position-relative mark-as-read">
                                    <td class="ps-3" style="width: 1%;">
                                        <div class="d-flex gap-3">
                                            <input class="form-check-input form-check-input-light fs-14 position-relative z-2 mt-0 email-item-check"
                                                   type="checkbox">
                                            <button class="btn p-0 text-muted fs-xl">
                                                <i class="ti ti-star"></i>
                                            </button>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-xs">
                                                        <span class="avatar-title text-bg-primary rounded-circle">
                                                            L
                                                        </span>
                                            </div>
                                            <h5 class="fs-base mb-0 fw-medium">Lucas Martin</h5>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="email-details.php" class="link-reset fs-base fw-medium stretched-link">
                                            Q2 Marketing Strategy
                                        </a>
                                        <span class="d-xl-inline-block d-none">—</span>
                                        <span class="fs-base text-muted d-xl-inline-block d-none mb-0">
                                                    Here's the proposed outline for our Q2 campaign and goals...
                                                </span>
                                    </td>
                                    <td style="width: 1%;">
                                        <div class="d-flex align-items-center gap-1">
                                            <i class="ti ti-paperclip"></i>
                                            <span class="fw-semibold">2</span>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="fs-xs text-muted mb-0 text-end pe-2">Apr 19, 11:30 AM</p>
                                    </td>
                                </tr>

                                <tr class="position-relative mark-as-read">
                                    <td class="ps-3" style="width: 1%;">
                                        <div class="d-flex gap-3">
                                            <input class="form-check-input form-check-input-light fs-14 position-relative z-2 mt-0 email-item-check"
                                                   type="checkbox">
                                            <button class="btn p-0 text-warning fs-xl">
                                                <i class="ti ti-star-filled"></i>
                                            </button>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="assets/images/users/user-6.jpg" alt="user avatar"
                                                 class="avatar-xs rounded-circle">
                                            <h5 class="fs-base mb-0 fw-medium">Sophia Lee</h5>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="email-details.php" class="link-reset fs-base fw-medium stretched-link">
                                            Final Invoice Attached
                                        </a>
                                        <span class="d-xl-inline-block d-none">—</span>
                                        <span class="fs-base text-muted d-xl-inline-block d-none mb-0">
                                                    Attached is the invoice for the April sprint deliverables. Let me know...
                                                </span>
                                    </td>
                                    <td style="width: 1%;">
                                        <div class="d-flex align-items-center gap-1">
                                            <i class="ti ti-paperclip"></i>
                                            <span class="fw-semibold">1</span>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="fs-xs text-muted mb-0 text-end pe-2">Apr 18, 6:05 PM</p>
                                    </td>
                                </tr>

                                <tr class="position-relative mark-as-read">
                                    <td class="ps-3" style="width: 1%;">
                                        <div class="d-flex gap-3">
                                            <input class="form-check-input form-check-input-light fs-14 position-relative z-2 mt-0 email-item-check"
                                                   type="checkbox">
                                            <button class="btn p-0 text-muted fs-xl">
                                                <i class="ti ti-star"></i>
                                            </button>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-xs">
                                                        <span class="avatar-title text-bg-danger fw-bold rounded-circle">
                                                            D
                                                        </span>
                                            </div>
                                            <h5 class="fs-base mb-0 fw-medium">Daniel Kim</h5>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="email-details.php" class="link-reset fs-base fw-medium stretched-link">
                                            Team Offsite Agenda
                                        </a>
                                        <span class="d-xl-inline-block d-none">—</span>
                                        <span class="fs-base text-muted d-xl-inline-block d-none mb-0">
                                                    Here’s a rough outline for the team offsite activities next month...
                                                </span>
                                    </td>
                                    <td style="width: 1%;">
                                        <div class="d-flex align-items-center gap-1 opacity-25">
                                            <i class="ti ti-paperclip"></i>
                                            <span class="fw-semibold">0</span>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="fs-xs text-muted mb-0 text-end pe-2">Apr 18, 1:20 PM</p>
                                    </td>
                                </tr>

                                <tr class="position-relative mark-as-read">
                                    <td class="ps-3" style="width: 1%;">
                                        <div class="d-flex gap-3">
                                            <input class="form-check-input form-check-input-light fs-14 position-relative z-2 mt-0 email-item-check"
                                                   type="checkbox">
                                            <button class="btn p-0 text-muted fs-xl">
                                                <i class="ti ti-star"></i>
                                            </button>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-xs">
                                                        <span class="avatar-title bg-purple-subtle text-purple fw-bold rounded-circle">
                                                            C
                                                        </span>
                                            </div>
                                            <h5 class="fs-base mb-0 fw-medium">Chloe Bennett</h5>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="email-details.php" class="link-reset fs-base fw-medium stretched-link">
                                            Welcome to the Project!
                                        </a>
                                        <span class="d-xl-inline-block d-none">—</span>
                                        <span class="fs-base text-muted d-xl-inline-block d-none mb-0">
                                                    Excited to have you on board. Let’s have a quick intro call tomorrow...
                                                </span>
                                    </td>
                                    <td style="width: 1%;">
                                        <div class="d-flex align-items-center gap-1 opacity-25">
                                            <i class="ti ti-paperclip"></i>
                                            <span class="fw-semibold">0</span>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="fs-xs text-muted mb-0 text-end pe-2">Apr 17, 9:18 AM</p>
                                    </td>
                                </tr>

                                <tr class="position-relative">
                                    <td class="ps-3" style="width: 1%;">
                                        <div class="d-flex gap-3">
                                            <input class="form-check-input form-check-input-light fs-14 position-relative z-2 mt-0 email-item-check"
                                                   type="checkbox">
                                            <button class="btn p-0 text-warning fs-xl">
                                                <i class="ti ti-star-filled"></i>
                                            </button>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="assets/images/users/user-6.jpg" alt="user avatar"
                                                 class="avatar-xs rounded-circle">
                                            <h5 class="fs-base mb-0 fw-medium">James Carter</h5>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="email-details.php" class="link-reset fs-base fw-medium stretched-link">
                                            Meeting Follow-up Notes
                                        </a>
                                        <span class="d-xl-inline-block d-none">—</span>
                                        <span class="fs-base text-muted d-xl-inline-block d-none mb-0">
                                                    Thanks for the insights today. Please find the summary and action points...
                                                </span>
                                    </td>
                                    <td style="width: 1%;">
                                        <div class="d-flex align-items-center gap-1">
                                            <i class="ti ti-paperclip"></i>
                                            <span class="fw-semibold">1</span>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="fs-xs text-muted mb-0 text-end pe-2">Apr 17, 2:45 PM</p>
                                    </td>
                                </tr>

                                <tr class="position-relative mark-as-read">
                                    <td class="ps-3" style="width: 1%;">
                                        <div class="d-flex gap-3">
                                            <input class="form-check-input form-check-input-light fs-14 position-relative z-2 mt-0 email-item-check"
                                                   type="checkbox">
                                            <button class="btn p-0 text-muted fs-xl">
                                                <i class="ti ti-star"></i>
                                            </button>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="assets/images/users/user-7.jpg" alt="user avatar"
                                                 class="avatar-xs rounded-circle">
                                            <h5 class="fs-base mb-0 fw-medium">Sophia Allen</h5>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="email-details.php" class="link-reset fs-base fw-medium stretched-link">
                                            Project Files Delivered
                                        </a>
                                        <span class="d-xl-inline-block d-none">—</span>
                                        <span class="fs-base text-muted d-xl-inline-block d-none mb-0">
                                                    The final batch of designs and documentation has been uploaded to the drive...
                                                </span>
                                    </td>
                                    <td style="width: 1%;">
                                        <div class="d-flex align-items-center gap-1">
                                            <i class="ti ti-paperclip"></i>
                                            <span class="fw-semibold">2</span>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="fs-xs text-muted mb-0 text-end pe-2">Apr 16, 11:05 AM</p>
                                    </td>
                                </tr>

                                <tr class="position-relative">
                                    <td class="ps-3" style="width: 1%;">
                                        <div class="d-flex gap-3">
                                            <input class="form-check-input form-check-input-light fs-14 position-relative z-2 mt-0 email-item-check"
                                                   type="checkbox">
                                            <button class="btn p-0 text-muted fs-xl">
                                                <i class="ti ti-star"></i>
                                            </button>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="assets/images/users/user-8.jpg" alt="user avatar"
                                                 class="avatar-xs rounded-circle">
                                            <h5 class="fs-base mb-0 fw-medium">Michael Chen</h5>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="email-details.php" class="link-reset fs-base fw-medium stretched-link">
                                            Re: Budget Estimate
                                        </a>
                                        <span class="d-xl-inline-block d-none">—</span>
                                        <span class="fs-base text-muted d-xl-inline-block d-none mb-0">
                                                    The budget looks good overall, but we might need to adjust the Q3 allocations...
                                                </span>
                                    </td>
                                    <td style="width: 1%;">
                                        <div class="d-flex align-items-center gap-1">
                                            <i class="ti ti-paperclip"></i>
                                            <span class="fw-semibold">1</span>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="fs-xs text-muted mb-0 text-end pe-2">Apr 15, 6:28 PM</p>
                                    </td>
                                </tr>

                                <tr class="position-relative mark-as-read">
                                    <td class="ps-3" style="width: 1%;">
                                        <div class="d-flex gap-3">
                                            <input class="form-check-input form-check-input-light fs-14 position-relative z-2 mt-0 email-item-check"
                                                   type="checkbox">
                                            <button class="btn p-0 text-muted fs-xl">
                                                <i class="ti ti-star"></i>
                                            </button>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-xs">
                                                        <span class="avatar-title text-bg-dark fw-bold rounded-circle">
                                                            E
                                                        </span>
                                            </div>
                                            <h5 class="fs-base mb-0 fw-medium">Emma Watson</h5>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="email-details.php" class="link-reset fs-base fw-medium stretched-link">
                                            Collaboration Opportunity
                                        </a>
                                        <span class="d-xl-inline-block d-none">—</span>
                                        <span class="fs-base text-muted d-xl-inline-block d-none mb-0">
                                                    I’d love to chat about a possible partnership on our upcoming launch event...
                                                </span>
                                    </td>
                                    <td style="width: 1%;">
                                        <div class="d-flex align-items-center gap-1 opacity-25">
                                            <i class="ti ti-paperclip"></i>
                                            <span class="fw-semibold">0</span>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="fs-xs text-muted mb-0 text-end pe-2">Apr 14, 3:59 PM</p>
                                    </td>
                                </tr>

                                <tr class="position-relative mark-as-read">
                                    <td class="ps-3" style="width: 1%;">
                                        <div class="d-flex gap-3">
                                            <input class="form-check-input form-check-input-light fs-14 position-relative z-2 mt-0 email-item-check"
                                                   type="checkbox">
                                            <button class="btn p-0 text-warning fs-xl">
                                                <i class="ti ti-star-filled"></i>
                                            </button>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="assets/images/users/user-10.jpg" alt="user avatar"
                                                 class="avatar-xs rounded-circle">
                                            <h5 class="fs-base mb-0 fw-medium">Daniel White</h5>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="email-details.php" class="link-reset fs-base fw-medium stretched-link">
                                            Reschedule Request
                                        </a>
                                        <span class="d-xl-inline-block d-none">—</span>
                                        <span class="fs-base text-muted d-xl-inline-block d-none mb-0">
                                                    Can we move our call to Friday afternoon instead? Something urgent came up...
                                                </span>
                                    </td>
                                    <td style="width: 1%;">
                                        <div class="d-flex align-items-center gap-1 opacity-25">
                                            <i class="ti ti-paperclip"></i>
                                            <span class="fw-semibold">0</span>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="fs-xs text-muted mb-0 text-end pe-2">Apr 13, 10:20 AM</p>
                                    </td>
                                </tr>

                                <tr class="position-relative mark-as-read">
                                    <td class="ps-3" style="width: 1%;">
                                        <div class="d-flex gap-3">
                                            <input class="form-check-input form-check-input-light fs-14 position-relative z-2 mt-0 email-item-check"
                                                   type="checkbox">
                                            <button class="btn p-0 text-warning fs-xl">
                                                <i class="ti ti-star-filled"></i>
                                            </button>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="assets/images/users/user-3.jpg" alt="user avatar"
                                                 class="avatar-xs rounded-circle">
                                            <h5 class="fs-base mb-0 fw-medium">James Walker</h5>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="email-details.php" class="link-reset fs-base fw-medium stretched-link">
                                            Monthly Report Submission
                                        </a>
                                        <span class="d-xl-inline-block d-none">—</span>
                                        <span class="fs-base text-muted d-xl-inline-block d-none mb-0">
                                                    Please find the attached monthly performance report for your review...
                                                </span>
                                    </td>
                                    <td style="width: 1%;">
                                        <div class="d-flex align-items-center gap-1">
                                            <i class="ti ti-paperclip"></i>
                                            <span class="fw-semibold">1</span>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="fs-xs text-muted mb-0 text-end pe-2">Apr 16, 11:42 AM</p>
                                    </td>
                                </tr>

                                <tr class="position-relative">
                                    <td class="ps-3" style="width: 1%;">
                                        <div class="d-flex gap-3">
                                            <input class="form-check-input form-check-input-light fs-14 position-relative z-2 mt-0 email-item-check"
                                                   type="checkbox">
                                            <button class="btn p-0 text-muted fs-xl">
                                                <i class="ti ti-star"></i>
                                            </button>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-xs">
                                                        <span class="avatar-title text-bg-warning fw-bold rounded-circle">
                                                            E
                                                        </span>
                                            </div>
                                            <h5 class="fs-base mb-0 fw-medium">Emma Johnson</h5>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="email-details.php" class="link-reset fs-base fw-medium stretched-link">
                                            Design Assets Update
                                        </a>
                                        <span class="d-xl-inline-block d-none">—</span>
                                        <span class="fs-base text-muted d-xl-inline-block d-none mb-0">
                                                    I’ve uploaded the latest illustrations and icons to the shared folder...
                                                </span>
                                    </td>
                                    <td style="width: 1%;">
                                        <div class="d-flex align-items-center gap-1 opacity-25">
                                            <i class="ti ti-paperclip"></i>
                                            <span class="fw-semibold">0</span>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="fs-xs text-muted mb-0 text-end pe-2">Apr 16, 8:09 AM</p>
                                    </td>
                                </tr>

                                <tr class="position-relative mark-as-read">
                                    <td class="ps-3" style="width: 1%;">
                                        <div class="d-flex gap-3">
                                            <input class="form-check-input form-check-input-light fs-14 position-relative z-2 mt-0 email-item-check"
                                                   type="checkbox">
                                            <button class="btn p-0 text-warning fs-xl">
                                                <i class="ti ti-star-filled"></i>
                                            </button>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="assets/images/users/user-9.jpg" alt="user avatar"
                                                 class="avatar-xs rounded-circle">
                                            <h5 class="fs-base mb-0 fw-medium">Noah Patel</h5>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="email-details.php" class="link-reset fs-base fw-medium stretched-link">
                                            Updated Meeting Schedule
                                        </a>
                                        <span class="d-xl-inline-block d-none">—</span>
                                        <span class="fs-base text-muted d-xl-inline-block d-none mb-0">
                                                    Please review the adjusted times for next week's client meetings...
                                                </span>
                                    </td>
                                    <td style="width: 1%;">
                                        <div class="d-flex align-items-center gap-1">
                                            <i class="ti ti-paperclip"></i>
                                            <span class="fw-semibold">2</span>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="fs-xs text-muted mb-0 text-end pe-2">Apr 15, 4:55 PM</p>
                                    </td>
                                </tr>

                                <tr class="position-relative mark-as-read">
                                    <td class="ps-3" style="width: 1%;">
                                        <div class="d-flex gap-3">
                                            <input class="form-check-input form-check-input-light fs-14 position-relative z-2 mt-0 email-item-check"
                                                   type="checkbox">
                                            <button class="btn p-0 text-muted fs-xl">
                                                <i class="ti ti-star"></i>
                                            </button>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="assets/images/users/user-3.jpg" alt="user avatar"
                                                 class="avatar-xs rounded-circle">
                                            <h5 class="fs-base mb-0 fw-medium">Ava Thompson</h5>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="email-details.php" class="link-reset fs-base fw-medium stretched-link">
                                            Client Feedback Notes
                                        </a>
                                        <span class="d-xl-inline-block d-none">—</span>
                                        <span class="fs-base text-muted d-xl-inline-block d-none mb-0">
                                                    Attached is the client feedback from last week’s demo session...
                                                </span>
                                    </td>
                                    <td style="width: 1%;">
                                        <div class="d-flex align-items-center gap-1">
                                            <i class="ti ti-paperclip"></i>
                                            <span class="fw-semibold">1</span>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="fs-xs text-muted mb-0 text-end pe-2">Apr 15, 9:32 AM</p>
                                    </td>
                                </tr>

                                <tr class="position-relative mark-as-read">
                                    <td class="ps-3" style="width: 1%;">
                                        <div class="d-flex gap-3">
                                            <input class="form-check-input form-check-input-light fs-14 position-relative z-2 mt-0 email-item-check"
                                                   type="checkbox">
                                            <button class="btn p-0 text-muted fs-xl">
                                                <i class="ti ti-star"></i>
                                            </button>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="assets/images/users/user-1.jpg" alt="user avatar"
                                                 class="avatar-xs rounded-circle">
                                            <h5 class="fs-base mb-0 fw-medium">Liam Garcia</h5>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="email-details.php" class="link-reset fs-base fw-medium stretched-link">
                                            Weekly Sync Meeting
                                        </a>
                                        <span class="d-xl-inline-block d-none">—</span>
                                        <span class="fs-base text-muted d-xl-inline-block d-none mb-0">
                                                    Let’s discuss blockers and updates on the current sprints in our sync...
                                                </span>
                                    </td>
                                    <td style="width: 1%;">
                                        <div class="d-flex align-items-center gap-1 opacity-25">
                                            <i class="ti ti-paperclip"></i>
                                            <span class="fw-semibold">0</span>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="fs-xs text-muted mb-0 text-end pe-2">Apr 14, 3:30 PM</p>
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                        </div> <!-- end table responsive-->

                        <div class="d-flex align-items-center justify-content-center gap-2 p-3">
                            <strong>Loading...</strong>
                            <div class="spinner-border spinner-border-sm text-danger" role="status"
                                 aria-hidden="true"></div>
                        </div>
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end row-->

        </div>
        <!-- container -->

        <?php include './partials/footer.php' ?>

    </div>

    <!-- ============================================================== -->
    <!-- End of Main Content -->
    <!-- ============================================================== -->

</div>
<!-- END wrapper -->

<?php include './partials/customizer.php' ?>

<?php include './partials/footer-scripts.php' ?>

<script>
    document.getElementById('select-all-email').addEventListener('change', function () {
        const checkboxes = document.querySelectorAll('.email-item-check');
        checkboxes.forEach(checkbox => {
            checkbox.checked = this.checked;
        });
    });
</script>

<!-- Custom table -->
<script src="assets/js/pages/custom-table.js"></script>

</body>

</html>