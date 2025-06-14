<?php include 'partials/html.php' ?>

<head>
    <?php $title = "Form Wizard"; include 'partials/title-meta.php' ?>

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
                
                <?php $subtitle = "Forms"; $title = "Wizard"; include 'partials/page-title.php' ?>

                <div class="row justify-content-center">
                    <div class="col-xxl-9">
                        <div class="card">
                            <div class="card-header justify-content-between">
                                <h4 class="card-title">Basic Wizard</h4>
                                <span class="badge badge-soft-success badge-label fs-xxs py-1">Exclusive</span>
                            </div>

                            <div class="card-body">

                                <div class="ins-wizard" data-wizard>
                                    <!-- Navigation Tabs -->
                                    <ul class="nav nav-tabs wizard-tabs" data-wizard-nav role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#stuInfo">
                                                <span class="d-flex align-items-center">
                                                    <i class="ti ti-user-circle fs-32"></i>
                                                    <span class="flex-grow-1 ms-2 text-truncate">
                                                        <span class="mb-0 lh-base d-block fw-semibold text-body fs-base">Student Info</span>
                                                        <span class="fs-xxs mb-0">Personal details</span>
                                                    </span>
                                                </span>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#addrInfo">
                                                <span class="d-flex align-items-center">
                                                    <i class="ti ti-map-pin fs-32"></i>
                                                    <span class="flex-grow-1 ms-2 text-truncate">
                                                        <span class="mb-0 lh-base d-block fw-semibold text-body fs-base">Address Info</span>
                                                        <span class="fs-xxs mb-0">Where you live</span>
                                                    </span>
                                                </span>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#courseInfo">
                                                <span class="d-flex align-items-center">
                                                    <i class="ti ti-book fs-32"></i>
                                                    <span class="flex-grow-1 ms-2 text-truncate">
                                                        <span class="mb-0 lh-base d-block fw-semibold text-body fs-base">Course Info</span>
                                                        <span class="fs-xxs mb-0">Select your course</span>
                                                    </span>
                                                </span>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#parentInfo">
                                                <span class="d-flex align-items-center">
                                                    <i class="ti ti-users fs-32"></i>
                                                    <span class="flex-grow-1 ms-2 text-truncate">
                                                        <span class="mb-0 lh-base d-block fw-semibold text-body fs-base">Parent Info</span>
                                                        <span class="fs-xxs mb-0">Guardian details</span>
                                                    </span>
                                                </span>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#documents">
                                                <span class="d-flex align-items-center">
                                                    <i class="ti ti-folder fs-32"></i>
                                                    <span class="flex-grow-1 ms-2 text-truncate">
                                                        <span class="mb-0 lh-base d-block fw-semibold text-body fs-base">Documents</span>
                                                        <span class="fs-xxs mb-0">Upload certificates</span>
                                                    </span>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>


                                    <!-- Content -->
                                    <div class="tab-content pt-3" data-wizard-content>

                                        <!-- Step 1: Student Info -->
                                        <div class="tab-pane fade show active" id="stuInfo">
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Full Name</label>
                                                        <input type="text" class="form-control" placeholder="Enter your full name" name="fullname" required>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Email</label>
                                                        <input type="email" class="form-control" placeholder="Enter your email" name="email" required>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Phone Number</label>
                                                        <input type="tel" class="form-control" name="phone" placeholder="Enter your phone number" required>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Date of Birth</label>
                                                        <input type="text" data-provider="flatpickr" data-date-format="d M, Y" placeholder="Select you DOB" class="form-control" name="dob" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-end mt-3">
                                                <button type="button" class="btn btn-primary" data-wizard-next>Next: Address Info →</button>
                                            </div>
                                        </div>

                                        <!-- Step 2: Address Info -->
                                        <div class="tab-pane fade" id="addrInfo">
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Street Address</label>
                                                        <input type="text" class="form-control" name="street" placeholder="123 Main St" required>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">City</label>
                                                        <input type="text" class="form-control" name="city" placeholder="e.g., New York" required>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">State</label>
                                                        <input type="text" class="form-control" name="state" placeholder="e.g., California" required>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Zip Code</label>
                                                        <input type="text" class="form-control" name="zip" placeholder="e.g., 10001" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between mt-3">
                                                <button type="button" class="btn btn-secondary" data-wizard-prev>← Back: Student Info</button>
                                                <button type="button" class="btn btn-primary" data-wizard-next>Next: Course Info →</button>
                                            </div>
                                        </div>


                                        <!-- Step 3: Course Info -->
                                        <div class="tab-pane fade" id="courseInfo">
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Choose Course</label>
                                                        <select class="form-select" name="course" required>
                                                            <option value="">Select</option>
                                                            <option value="Engineering">Engineering</option>
                                                            <option value="Medical">Medical</option>
                                                            <option value="Business">Business</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Enrollment Type</label>
                                                        <select class="form-select" name="enrollment" required>
                                                            <option value="">Select</option>
                                                            <option value="Full Time">Full Time</option>
                                                            <option value="Part Time">Part Time</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Preferred Batch Time</label>
                                                        <select class="form-select" name="batch_time" required>
                                                            <option value="">Select Time</option>
                                                            <option value="Morning">Morning (8am – 12pm)</option>
                                                            <option value="Afternoon">Afternoon (1pm – 5pm)</option>
                                                            <option value="Evening">Evening (6pm – 9pm)</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Mode of Study</label>
                                                        <select class="form-select" name="mode" required>
                                                            <option value="">Select Mode</option>
                                                            <option value="Offline">Offline</option>
                                                            <option value="Online">Online</option>
                                                            <option value="Hybrid">Hybrid</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between mt-3">
                                                <button type="button" class="btn btn-secondary" data-wizard-prev>← Back: Address Info</button>
                                                <button type="button" class="btn btn-primary" data-wizard-next>Next: Parent Info →</button>
                                            </div>
                                        </div>


                                        <!-- Step 4: Parent Info -->
                                        <div class="tab-pane fade" id="parentInfo">
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Parent/Guardian Name</label>
                                                        <input type="text" class="form-control" name="parent_name" placeholder="e.g., John Doe" required>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Relation</label>
                                                        <input type="text" class="form-control" name="relation" placeholder="e.g., Father, Mother" required>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Parent Phone</label>
                                                        <input type="tel" class="form-control" name="parent_phone" placeholder="e.g., +1 555 123 4567" required>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Parent Email</label>
                                                        <input type="email" class="form-control" name="parent_email" placeholder="e.g., parent@example.com" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between mt-3">
                                                <button type="button" class="btn btn-secondary" data-wizard-prev>← Back: Course Info</button>
                                                <button type="button" class="btn btn-primary" data-wizard-next>Next: Documents →</button>
                                            </div>
                                        </div>


                                        <!-- Step 5: Documents -->
                                        <div class="tab-pane fade" id="documents">
                                            <div class="mb-3">
                                                <label class="form-label">Upload ID Proof</label>
                                                <input type="file" class="form-control" name="id_proof" required>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Upload Previous Marksheet</label>
                                                <input type="file" class="form-control" name="marksheet" required>
                                            </div>
                                            <div class="d-flex justify-content-between mt-3">
                                                <button type="button" class="btn btn-secondary" data-wizard-prev>← Back: Parent Info</button>
                                                <button type="submit" class="btn btn-success">Submit Application</button>
                                            </div>
                                        </div>

                                    </div> <!-- tab-content -->
                                </div> <!-- ins-wizard -->

                            </div> <!-- end card body-->
                        </div> <!-- end card-->

                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Validation Support</h4>
                                </div>
                                <span class="badge badge-soft-success badge-label fs-xxs py-1">Exclusive</span>
                            </div>

                            <div class="card-body">

                                <form data-wizard-validation>
                                    <div class="ins-wizard" data-wizard>
                                        <!-- Navigation Tabs -->
                                        <ul class="nav nav-tabs wizard-tabs" data-wizard-nav role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-bs-toggle="tab" href="#stepStudent">
                                                    <span class="d-flex align-items-center">
                                                        <i class="ti ti-user-circle fs-32"></i>
                                                        <span class="flex-grow-1 ms-2 text-truncate">
                                                            <span class="mb-0 lh-base d-block fw-semibold text-body fs-base">Student Info</span>
                                                            <span class="fs-xxs mb-0">Your basic details</span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#stepAddress">
                                                    <span class="d-flex align-items-center">
                                                        <i class="ti ti-map-pin fs-32"></i>
                                                        <span class="flex-grow-1 ms-2 text-truncate">
                                                            <span class="mb-0 lh-base d-block fw-semibold text-body fs-base">Address Info</span>
                                                            <span class="fs-xxs mb-0">Where you currently live</span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#stepCourse">
                                                    <span class="d-flex align-items-center">
                                                        <i class="ti ti-book fs-32"></i>
                                                        <span class="flex-grow-1 ms-2 text-truncate">
                                                            <span class="mb-0 lh-base d-block fw-semibold text-body fs-base">Course Info</span>
                                                            <span class="fs-xxs mb-0">Program preferences</span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#stepParent">
                                                    <span class="d-flex align-items-center">
                                                        <i class="ti ti-users fs-32"></i>
                                                        <span class="flex-grow-1 ms-2 text-truncate">
                                                            <span class="mb-0 lh-base d-block fw-semibold text-body fs-base">Parent Info</span>
                                                            <span class="fs-xxs mb-0">Guardian contact</span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#stepDocs">
                                                    <span class="d-flex align-items-center">
                                                        <i class="ti ti-folder fs-32"></i>
                                                        <span class="flex-grow-1 ms-2 text-truncate">
                                                            <span class="mb-0 lh-base d-block fw-semibold text-body fs-base">Documents</span>
                                                            <span class="fs-xxs mb-0">Upload requirements</span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>

                                        <!-- Content -->
                                        <div class="tab-content pt-3" data-wizard-content>

                                            <!-- Step 1 -->
                                            <div class="tab-pane fade show active" id="stepStudent">
                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Full Name</label>
                                                            <input type="text" class="form-control" placeholder="Enter your full name" name="fullname" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Email</label>
                                                            <input type="email" class="form-control" placeholder="Enter your email address" name="email" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Phone Number</label>
                                                            <input type="tel" class="form-control" name="phone" placeholder="e.g., +1 234 567 8901" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Date of Birth</label>
                                                            <input type="text" data-provider="flatpickr" data-date-format="d M, Y" placeholder="Select your birth date" class="form-control" name="dob" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-end mt-3">
                                                    <button type="button" class="btn btn-primary" data-wizard-next>Next: Address Info →</button>
                                                </div>
                                            </div>

                                            <!-- Step 2 -->
                                            <div class="tab-pane fade" id="stepAddress">
                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Street Address</label>
                                                            <input type="text" class="form-control" name="street" placeholder="e.g., 123 Main Street" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">City</label>
                                                            <input type="text" class="form-control" name="city" placeholder="e.g., New York" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">State</label>
                                                            <input type="text" class="form-control" name="state" placeholder="e.g., California" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Zip Code</label>
                                                            <input type="text" class="form-control" name="zip" placeholder="e.g., 10001" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-between mt-3">
                                                    <button type="button" class="btn btn-secondary" data-wizard-prev>← Back: Student Info</button>
                                                    <button type="button" class="btn btn-primary" data-wizard-next>Next: Course Info →</button>
                                                </div>
                                            </div>

                                            <!-- Step 3 -->
                                            <div class="tab-pane fade" id="stepCourse">
                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Choose Course</label>
                                                            <select class="form-select" name="course" required>
                                                                <option value="">Select</option>
                                                                <option value="Engineering">Engineering</option>
                                                                <option value="Medical">Medical</option>
                                                                <option value="Business">Business</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Enrollment Type</label>
                                                            <select class="form-select" name="enrollment" required>
                                                                <option value="">Select</option>
                                                                <option value="Full Time">Full Time</option>
                                                                <option value="Part Time">Part Time</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Preferred Batch Time</label>
                                                            <select class="form-select" name="batch_time" required>
                                                                <option value="">Select Time</option>
                                                                <option value="Morning">Morning (8am – 12pm)</option>
                                                                <option value="Afternoon">Afternoon (1pm – 5pm)</option>
                                                                <option value="Evening">Evening (6pm – 9pm)</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Mode of Study</label>
                                                            <select class="form-select" name="mode" required>
                                                                <option value="">Select Mode</option>
                                                                <option value="Offline">Offline</option>
                                                                <option value="Online">Online</option>
                                                                <option value="Hybrid">Hybrid</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-between mt-3">
                                                    <button type="button" class="btn btn-secondary" data-wizard-prev>← Back: Address Info</button>
                                                    <button type="button" class="btn btn-primary" data-wizard-next>Next: Parent Info →</button>
                                                </div>
                                            </div>

                                            <!-- Step 4 -->
                                            <div class="tab-pane fade" id="stepParent">
                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Parent/Guardian Name</label>
                                                            <input type="text" class="form-control" name="parent_name" placeholder="e.g., John Doe" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Relation</label>
                                                            <input type="text" class="form-control" name="relation" placeholder="e.g., Father, Mother" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Parent Phone</label>
                                                            <input type="tel" class="form-control" name="parent_phone" placeholder="e.g., +1 555 123 4567" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Parent Email</label>
                                                            <input type="email" class="form-control" name="parent_email" placeholder="e.g., parent@example.com">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-between mt-3">
                                                    <button type="button" class="btn btn-secondary" data-wizard-prev>← Back: Course Info</button>
                                                    <button type="button" class="btn btn-primary" data-wizard-next>Next: Documents →</button>
                                                </div>
                                            </div>

                                            <!-- Step 5 -->
                                            <div class="tab-pane fade" id="stepDocs">
                                                <div class="mb-3">
                                                    <label class="form-label">Upload ID Proof</label>
                                                    <input type="file" class="form-control" name="id_proof" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Upload Previous Marksheet</label>
                                                    <input type="file" class="form-control" name="marksheet" required>
                                                </div>
                                                <div class="d-flex justify-content-between mt-3">
                                                    <button type="button" class="btn btn-secondary" data-wizard-prev>← Back: Parent Info</button>
                                                    <button type="submit" class="btn btn-success">Submit Application</button>
                                                </div>
                                            </div>

                                        </div> <!-- tab-content -->
                                    </div> <!-- ins-wizard -->

                                </form>

                            </div>
                        </div> <!-- end card-->

                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Progressbar Support</h4>
                                </div>
                                <span class="badge badge-soft-success badge-label fs-xxs py-1">Exclusive</span>
                            </div>

                            <div class="card-body">

                                <form data-wizard-validation>
                                    <div class="ins-wizard" data-wizard>
                                        <!-- Progress bar -->
                                        <div class="progress mb-4" style="height: 6px;">
                                            <div class="progress-bar bg-primary" data-wizard-progress style="width: 0%;"></div>
                                        </div>

                                        <!-- Navigation Tabs -->
                                        <ul class="nav nav-tabs wizard-tabs" data-wizard-nav role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-bs-toggle="tab" href="#progressStepStudent">
                                                    <span class="d-flex align-items-center">
                                                        <i class="ti ti-user-circle fs-32"></i>
                                                        <span class="flex-grow-1 ms-2 text-truncate">
                                                            <span class="mb-0 lh-base d-block fw-semibold text-body fs-base">Student Info</span>
                                                            <span class="fs-xxs mb-0">Your basic details</span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#progressStepAddress">
                                                    <span class="d-flex align-items-center">
                                                        <i class="ti ti-map-pin fs-32"></i>
                                                        <span class="flex-grow-1 ms-2 text-truncate">
                                                            <span class="mb-0 lh-base d-block fw-semibold text-body fs-base">Address Info</span>
                                                            <span class="fs-xxs mb-0">Where you currently live</span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#progressStepCourse">
                                                    <span class="d-flex align-items-center">
                                                        <i class="ti ti-book fs-32"></i>
                                                        <span class="flex-grow-1 ms-2 text-truncate">
                                                            <span class="mb-0 lh-base d-block fw-semibold text-body fs-base">Course Info</span>
                                                            <span class="fs-xxs mb-0">Program preferences</span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#progressStepParent">
                                                    <span class="d-flex align-items-center">
                                                        <i class="ti ti-users fs-32"></i>
                                                        <span class="flex-grow-1 ms-2 text-truncate">
                                                            <span class="mb-0 lh-base d-block fw-semibold text-body fs-base">Parent Info</span>
                                                            <span class="fs-xxs mb-0">Guardian contact</span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#progressStepDocs">
                                                    <span class="d-flex align-items-center">
                                                        <i class="ti ti-folder fs-32"></i>
                                                        <span class="flex-grow-1 ms-2 text-truncate">
                                                            <span class="mb-0 lh-base d-block fw-semibold text-body fs-base">Documents</span>
                                                            <span class="fs-xxs mb-0">Upload requirements</span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>

                                        <!-- Tab Content -->
                                        <div class="tab-content pt-3" data-wizard-content>

                                            <div class="tab-pane fade show active" id="progressStepStudent">
                                                <div class="row">
                                                    <div class="col-xl-6 mb-3">
                                                        <label class="form-label">Full Name</label>
                                                        <input type="text" class="form-control" placeholder="Enter your full name" name="fullname" required>
                                                    </div>
                                                    <div class="col-xl-6 mb-3">
                                                        <label class="form-label">Email</label>
                                                        <input type="email" class="form-control" placeholder="Enter your email address" name="email" required>
                                                    </div>
                                                    <div class="col-xl-6 mb-3">
                                                        <label class="form-label">Phone Number</label>
                                                        <input type="tel" class="form-control" name="phone" placeholder="e.g., +1 234 567 8901" required>
                                                    </div>
                                                    <div class="col-xl-6 mb-3">
                                                        <label class="form-label">Date of Birth</label>
                                                        <input type="text" data-provider="flatpickr" data-date-format="d M, Y" placeholder="Select your birth date" class="form-control" name="dob" required>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-end">
                                                    <button type="button" class="btn btn-primary" data-wizard-next>Next: Address Info →</button>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="progressStepAddress">
                                                <div class="row">
                                                    <div class="col-xl-6 mb-3">
                                                        <label class="form-label">Street Address</label>
                                                        <input type="text" class="form-control" name="street" placeholder="e.g., 123 Main Street" required>
                                                    </div>
                                                    <div class="col-xl-6 mb-3">
                                                        <label class="form-label">City</label>
                                                        <input type="text" class="form-control" name="city" placeholder="e.g., New York" required>
                                                    </div>
                                                    <div class="col-xl-6 mb-3">
                                                        <label class="form-label">State</label>
                                                        <input type="text" class="form-control" name="state" placeholder="e.g., California" required>
                                                    </div>
                                                    <div class="col-xl-6 mb-3">
                                                        <label class="form-label">Zip Code</label>
                                                        <input type="text" class="form-control" name="zip" placeholder="e.g., 10001" required>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <button type="button" class="btn btn-secondary" data-wizard-prev>← Back: Student Info</button>
                                                    <button type="button" class="btn btn-primary" data-wizard-next>Next: Course Info →</button>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="progressStepCourse">
                                                <div class="row">
                                                    <div class="col-xl-6 mb-3">
                                                        <label class="form-label">Choose Course</label>
                                                        <select class="form-select" name="course" required>
                                                            <option value="">Select</option>
                                                            <option value="Engineering">Engineering</option>
                                                            <option value="Medical">Medical</option>
                                                            <option value="Business">Business</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-xl-6 mb-3">
                                                        <label class="form-label">Enrollment Type</label>
                                                        <select class="form-select" name="enrollment" required>
                                                            <option value="">Select</option>
                                                            <option value="Full Time">Full Time</option>
                                                            <option value="Part Time">Part Time</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-xl-6 mb-3">
                                                        <label class="form-label">Preferred Batch Time</label>
                                                        <select class="form-select" name="batch_time" required>
                                                            <option value="">Select Time</option>
                                                            <option value="Morning">Morning (8am – 12pm)</option>
                                                            <option value="Afternoon">Afternoon (1pm – 5pm)</option>
                                                            <option value="Evening">Evening (6pm – 9pm)</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-xl-6 mb-3">
                                                        <label class="form-label">Mode of Study</label>
                                                        <select class="form-select" name="mode" required>
                                                            <option value="">Select Mode</option>
                                                            <option value="Offline">Offline</option>
                                                            <option value="Online">Online</option>
                                                            <option value="Hybrid">Hybrid</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <button type="button" class="btn btn-secondary" data-wizard-prev>← Back: Address Info</button>
                                                    <button type="button" class="btn btn-primary" data-wizard-next>Next: Parent Info →</button>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="progressStepParent">
                                                <div class="row">
                                                    <div class="col-xl-6 mb-3">
                                                        <label class="form-label">Parent/Guardian Name</label>
                                                        <input type="text" class="form-control" name="parent_name" placeholder="e.g., John Doe" required>
                                                    </div>
                                                    <div class="col-xl-6 mb-3">
                                                        <label class="form-label">Relation</label>
                                                        <input type="text" class="form-control" name="relation" placeholder="e.g., Father, Mother" required>
                                                    </div>
                                                    <div class="col-xl-6 mb-3">
                                                        <label class="form-label">Parent Phone</label>
                                                        <input type="tel" class="form-control" name="parent_phone" placeholder="e.g., +1 555 123 4567" required>
                                                    </div>
                                                    <div class="col-xl-6 mb-3">
                                                        <label class="form-label">Parent Email</label>
                                                        <input type="email" class="form-control" name="parent_email" placeholder="e.g., parent@example.com" required>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <button type="button" class="btn btn-secondary" data-wizard-prev>← Back: Course Info</button>
                                                    <button type="button" class="btn btn-primary" data-wizard-next>Next: Documents →</button>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="progressStepDocs">
                                                <div class="mb-3">
                                                    <label class="form-label">Upload ID Proof</label>
                                                    <input type="file" class="form-control" name="id_proof" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Upload Previous Marksheet</label>
                                                    <input type="file" class="form-control" name="marksheet" required>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <button type="button" class="btn btn-secondary" data-wizard-prev>← Back: Parent Info</button>
                                                    <button type="submit" class="btn btn-success">Submit Application</button>
                                                </div>
                                            </div>

                                        </div> <!-- tab-content -->
                                    </div>

                                </form>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->

                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Vertical Wizard</h4>
                                </div>
                                <span class="badge badge-soft-success badge-label fs-xxs py-1">Exclusive</span>
                            </div>

                            <div class="card-body">

                                <form data-wizard-validation>
                                    <div class="ins-wizard" data-wizard data-wizard-animation>
                                        <div class="row">
                                            <!-- Vertical Nav -->
                                            <div class="col-md-4">
                                                <!-- Navigation Tabs -->
                                                <ul class="nav flex-column wizard-bordered wizard-tabs nav-pills" data-wizard-nav role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" data-bs-toggle="tab" href="#verticalStepStudent">
                                                            <span class="d-flex align-items-center">
                                                                <i class="ti ti-user-circle fs-32"></i>
                                                                <span class="flex-grow-1 ms-2 text-truncate">
                                                                    <span class="mb-0 lh-base d-block fw-semibold text-body fs-base">Student Info</span>
                                                                    <span class="fs-xxs mb-0">Your personal details</span>
                                                                </span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-bs-toggle="tab" href="#verticalStepAddress">
                                                            <span class="d-flex align-items-center">
                                                                <i class="ti ti-map-pin fs-32"></i>
                                                                <span class="flex-grow-1 ms-2 text-truncate">
                                                                    <span class="mb-0 lh-base d-block fw-semibold text-body fs-base">Address Info</span>
                                                                    <span class="fs-xxs mb-0">Current location</span>
                                                                </span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-bs-toggle="tab" href="#verticalStepCourse">
                                                            <span class="d-flex align-items-center">
                                                                <i class="ti ti-book fs-32"></i>
                                                                <span class="flex-grow-1 ms-2 text-truncate">
                                                                    <span class="mb-0 lh-base d-block fw-semibold text-body fs-base">Course Info</span>
                                                                    <span class="fs-xxs mb-0">Your academic choices</span>
                                                                </span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-bs-toggle="tab" href="#verticalStepParent">
                                                            <span class="d-flex align-items-center">
                                                                <i class="ti ti-users fs-32"></i>
                                                                <span class="flex-grow-1 ms-2 text-truncate">
                                                                    <span class="mb-0 lh-base d-block fw-semibold text-body fs-base">Parent Info</span>
                                                                    <span class="fs-xxs mb-0">Guardian details</span>
                                                                </span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-bs-toggle="tab" href="#verticalStepDocs">
                                                            <span class="d-flex align-items-center">
                                                                <i class="ti ti-folder fs-32"></i>
                                                                <span class="flex-grow-1 ms-2 text-truncate">
                                                                    <span class="mb-0 lh-base d-block fw-semibold text-body fs-base">Documents</span>
                                                                    <span class="fs-xxs mb-0">Required uploads</span>
                                                                </span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <!-- Tab Content -->
                                            <div class="col-md-8">
                                                <!-- Content -->
                                                <div class="tab-content border border-dashed rounded p-4" data-wizard-content>

                                                    <!-- Step 1 -->
                                                    <div class="tab-pane fade show active" id="verticalStepStudent">
                                                        <div class="row">
                                                            <div class="col-xl-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Full Name</label>
                                                                    <input type="text" class="form-control" placeholder="Enter full name" name="fullname" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Email</label>
                                                                    <input type="email" class="form-control" placeholder="Enter email address" name="email" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Phone Number</label>
                                                                    <input type="tel" class="form-control" name="phone" placeholder="e.g., +1 234 567 8901" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Date of Birth</label>
                                                                    <input type="text" data-provider="flatpickr" data-date-format="d M, Y" placeholder="Select birth date" class="form-control" name="dob" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex justify-content-end mt-3">
                                                            <button type="button" class="btn btn-primary" data-wizard-next>Next: Address Info →</button>
                                                        </div>
                                                    </div>

                                                    <!-- Step 2 -->
                                                    <div class="tab-pane fade" id="verticalStepAddress">
                                                        <div class="row">
                                                            <div class="col-xl-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Street Address</label>
                                                                    <input type="text" class="form-control" name="street" placeholder="e.g., 123 Main St" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label">City</label>
                                                                    <input type="text" class="form-control" name="city" placeholder="e.g., New York" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label">State</label>
                                                                    <input type="text" class="form-control" name="state" placeholder="e.g., California" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Zip Code</label>
                                                                    <input type="text" class="form-control" name="zip" placeholder="e.g., 10001" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex justify-content-between mt-3">
                                                            <button type="button" class="btn btn-secondary" data-wizard-prev>← Back</button>
                                                            <button type="button" class="btn btn-primary" data-wizard-next>Next: Course Info →</button>
                                                        </div>
                                                    </div>

                                                    <!-- Step 3 -->
                                                    <div class="tab-pane fade" id="verticalStepCourse">
                                                        <div class="row">
                                                            <div class="col-xl-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Choose Course</label>
                                                                    <select class="form-select" name="course" required>
                                                                        <option value="">Select</option>
                                                                        <option value="Engineering">Engineering</option>
                                                                        <option value="Medical">Medical</option>
                                                                        <option value="Business">Business</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Enrollment Type</label>
                                                                    <select class="form-select" name="enrollment" required>
                                                                        <option value="">Select</option>
                                                                        <option value="Full Time">Full Time</option>
                                                                        <option value="Part Time">Part Time</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Preferred Batch Time</label>
                                                                    <select class="form-select" name="batch_time" required>
                                                                        <option value="">Select Time</option>
                                                                        <option value="Morning">Morning</option>
                                                                        <option value="Afternoon">Afternoon</option>
                                                                        <option value="Evening">Evening</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Mode of Study</label>
                                                                    <select class="form-select" name="mode" required>
                                                                        <option value="">Select Mode</option>
                                                                        <option value="Offline">Offline</option>
                                                                        <option value="Online">Online</option>
                                                                        <option value="Hybrid">Hybrid</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex justify-content-between mt-3">
                                                            <button type="button" class="btn btn-secondary" data-wizard-prev>← Back</button>
                                                            <button type="button" class="btn btn-primary" data-wizard-next>Next: Parent Info →</button>
                                                        </div>
                                                    </div>

                                                    <!-- Step 4 -->
                                                    <div class="tab-pane fade" id="verticalStepParent">
                                                        <div class="row">
                                                            <div class="col-xl-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Parent/Guardian Name</label>
                                                                    <input type="text" class="form-control" name="parent_name" placeholder="e.g., John Doe" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Relation</label>
                                                                    <input type="text" class="form-control" name="relation" placeholder="e.g., Father, Mother" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Parent Phone</label>
                                                                    <input type="tel" class="form-control" name="parent_phone" placeholder="e.g., +1 555 123 4567" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Parent Email</label>
                                                                    <input type="email" class="form-control" name="parent_email" placeholder="e.g., parent@example.com">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex justify-content-between mt-3">
                                                            <button type="button" class="btn btn-secondary" data-wizard-prev>← Back</button>
                                                            <button type="button" class="btn btn-primary" data-wizard-next>Next: Documents →</button>
                                                        </div>
                                                    </div>

                                                    <!-- Step 5 -->
                                                    <div class="tab-pane fade" id="verticalStepDocs">
                                                        <div class="mb-3">
                                                            <label class="form-label">Upload ID Proof</label>
                                                            <input type="file" class="form-control" name="id_proof" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Upload Previous Marksheet</label>
                                                            <input type="file" class="form-control" name="marksheet" required>
                                                        </div>
                                                        <div class="d-flex justify-content-between mt-3">
                                                            <button type="button" class="btn btn-secondary" data-wizard-prev>← Back</button>
                                                            <button type="submit" class="btn btn-success">Submit Application</button>
                                                        </div>
                                                    </div>

                                                </div> <!-- tab-content -->
                                            </div>
                                        </div> <!-- row -->
                                    </div>
                                </form>


                            </div>
                        </div>

                    </div> <!-- en col-->
                </div> <!-- end row -->
            </div> <!-- container -->

            <?php include 'partials/footer.php' ?>

        </div>

        <!-- ============================================================== -->
        <!-- End of Main Content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <?php include 'partials/customizer.php' ?>

    <?php include 'partials/footer-scripts.php' ?>

    <!-- Wizard Form Demo js -->
    <script src="assets/js/pages/form-wizard.js"></script>

</body>

</html>