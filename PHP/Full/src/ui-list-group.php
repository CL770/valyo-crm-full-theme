<?php include 'partials/html.php' ?>

<head>
    <?php $title = "List Group"; include 'partials/title-meta.php' ?>

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
                <?php $subtitle = "UI"; $title = "List Group"; include 'partials/page-title.php';?>
            </div>
            <!-- container -->

            <div class="container-xl">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Examples</h4>
                            </div>

                            <div class="card-body">
                                <p class="text-muted mb-2">
                                    List groups are a flexible and powerful component for displaying a series of content. Modify and extend them to support just about any content within.
                                </p>

                                <a class="btn btn-link p-0 fw-semibold" href="https://getbootstrap.com/docs/5.3/components/list-group/" target="_blank">
                                    List Group on Bootstrap
                                    <i class="ti ti-chevron-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div> <!-- end col -->

                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Basic Example</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;ul class=&quot;list-group&quot;&gt;
                                            &lt;li class=&quot;list-group-item&quot;&gt;&lt;i class=&quot;ti ti-cloud me-1 align-middle fs-xl&quot;&gt;&lt;/i&gt; Dropbox Cloud Storage&lt;/li&gt;
                                            &lt;li class=&quot;list-group-item&quot;&gt;&lt;i class=&quot;ti ti-brand-slack me-1 align-middle fs-xl&quot;&gt;&lt;/i&gt; Slack Team Collaboration&lt;/li&gt;
                                            &lt;li class=&quot;list-group-item&quot;&gt;&lt;i class=&quot;ti ti-brand-windows me-1 align-middle fs-xl&quot;&gt;&lt;/i&gt; Microsoft Windows OS&lt;/li&gt;
                                            &lt;li class=&quot;list-group-item&quot;&gt;&lt;i class=&quot;ti ti-device-desktop-analytics me-1 align-middle fs-xl&quot;&gt;&lt;/i&gt; Zendesk Customer Support&lt;/li&gt;
                                            &lt;li class=&quot;list-group-item&quot;&gt;&lt;i class=&quot;ti ti-brand-stripe me-1 align-middle fs-xl&quot;&gt;&lt;/i&gt; Stripe Payment Integration&lt;/li&gt;
                                        &lt;/ul&gt;
                                    </code>             
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code -->

                            <div class="card-body">

                                <p class="text-muted">The most basic list group is an unordered list with
                                    list items and the proper classes.
                                    Build upon it with the options that follow, or with your own CSS as needed.
                                </p>

                                <ul class="list-group">
                                    <li class="list-group-item"><i class="ti ti-cloud me-1 align-middle fs-xl"></i> Dropbox Cloud Storage</li>
                                    <li class="list-group-item"><i class="ti ti-brand-slack me-1 align-middle fs-xl"></i> Slack Team Collaboration</li>
                                    <li class="list-group-item"><i class="ti ti-brand-windows me-1 align-middle fs-xl"></i> Microsoft Windows OS</li>
                                    <li class="list-group-item"><i class="ti ti-device-desktop-analytics me-1 align-middle fs-xl"></i> Zendesk Customer Support</li>
                                    <li class="list-group-item"><i class="ti ti-brand-stripe me-1 align-middle fs-xl"></i> Stripe Payment Integration</li>
                                </ul>
                            </div> <!-- end card body-->
                        </div> <!-- end card-->
                    </div> <!-- end col -->

                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Active Items</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;ul class=&quot;list-group&quot;&gt;
                                            &lt;li class=&quot;list-group-item active&quot;&gt;&lt;i class=&quot;ti ti-brand-github me-1 align-middle fs-xl&quot;&gt;&lt;/i&gt; GitHub Repository&lt;/li&gt;
                                            &lt;li class=&quot;list-group-item&quot;&gt;&lt;i class=&quot;ti ti-brand-figma me-1 align-middle fs-xl&quot;&gt;&lt;/i&gt; Figma Design Tool&lt;/li&gt;
                                            &lt;li class=&quot;list-group-item&quot;&gt;&lt;i class=&quot;ti ti-brand-notion me-1 align-middle fs-xl&quot;&gt;&lt;/i&gt; Notion Workspace&lt;/li&gt;
                                            &lt;li class=&quot;list-group-item&quot;&gt;&lt;i class=&quot;ti ti-brand-trello me-1 align-middle fs-xl&quot;&gt;&lt;/i&gt; Trello Task Manager&lt;/li&gt;
                                            &lt;li class=&quot;list-group-item&quot;&gt;&lt;i class=&quot;ti ti-cloud me-1 align-middle fs-xl&quot;&gt;&lt;/i&gt; DigitalOcean Cloud&lt;/li&gt;
                                        &lt;/ul&gt;
                                    </code>            
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code -->

                            <div class="card-body">
                                <p class="text-muted">Add <code>.active</code> to a
                                    <code>.list-group-item</code> to indicate the current active selection.
                                </p>

                                <ul class="list-group">
                                    <li class="list-group-item active"><i class="ti ti-brand-github me-1 align-middle fs-xl"></i> GitHub Repository</li>
                                    <li class="list-group-item"><i class="ti ti-brand-figma me-1 align-middle fs-xl"></i> Figma Design Tool</li>
                                    <li class="list-group-item"><i class="ti ti-brand-notion me-1 align-middle fs-xl"></i> Notion Workspace</li>
                                    <li class="list-group-item"><i class="ti ti-brand-trello me-1 align-middle fs-xl"></i> Trello Task Manager</li>
                                    <li class="list-group-item"><i class="ti ti-cloud me-1 align-middle fs-xl"></i> DigitalOcean Cloud</li>
                                </ul>

                            </div> <!-- end card body-->
                        </div> <!-- end card-->
                    </div> <!-- end col -->

                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Disabled Items</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;ul class=&quot;list-group&quot;&gt;
                                            &lt;li class=&quot;list-group-item disabled&quot; aria-disabled=&quot;true&quot;&gt;&lt;i class=&quot;ti ti-cloud me-1 align-middle fs-xl&quot;&gt;&lt;/i&gt; Dropbox Cloud Storage&lt;/li&gt;
                                            &lt;li class=&quot;list-group-item&quot;&gt;&lt;i class=&quot;ti ti-brand-slack me-1 align-middle fs-xl&quot;&gt;&lt;/i&gt; Slack Team Collaboration&lt;/li&gt;
                                            &lt;li class=&quot;list-group-item&quot;&gt;&lt;i class=&quot;ti ti-brand-windows me-1 align-middle fs-xl&quot;&gt;&lt;/i&gt; Microsoft Windows OS&lt;/li&gt;
                                            &lt;li class=&quot;list-group-item&quot;&gt;&lt;i class=&quot;ti ti-device-desktop-analytics me-1 align-middle fs-xl&quot;&gt;&lt;/i&gt; Zendesk Customer Support&lt;/li&gt;
                                            &lt;li class=&quot;list-group-item&quot;&gt;&lt;i class=&quot;ti ti-brand-stripe me-1 align-middle fs-xl&quot;&gt;&lt;/i&gt; Stripe Payment Integration&lt;/li&gt;
                                        &lt;/ul&gt;  
                                    </code>           
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code -->

                            <div class="card-body">
                                <p>Add <code>.disabled</code> to a <code>.list-group-item</code> to make it
                                    <em>appear</em> disabled.
                                </p>

                                <ul class="list-group">
                                    <li class="list-group-item disabled" aria-disabled="true"><i class="ti ti-cloud me-1 align-middle fs-xl"></i> Dropbox Cloud Storage</li>
                                    <li class="list-group-item"><i class="ti ti-brand-slack me-1 align-middle fs-xl"></i> Slack Team Collaboration</li>
                                    <li class="list-group-item"><i class="ti ti-brand-windows me-1 align-middle fs-xl"></i> Microsoft Windows OS</li>
                                    <li class="list-group-item"><i class="ti ti-device-desktop-analytics me-1 align-middle fs-xl"></i> Zendesk Customer Support</li>
                                    <li class="list-group-item"><i class="ti ti-brand-stripe me-1 align-middle fs-xl"></i> Stripe Payment Integration</li>
                                </ul>
                            </div> <!-- end card body-->
                        </div> <!-- end card-->
                    </div> <!-- end col -->
                
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Links and Buttons</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">  
                                        &lt;div class=&quot;list-group&quot;&gt;
                                            &lt;a href=&quot;#&quot; class=&quot;list-group-item list-group-item-action active&quot;&gt;
                                                Stripe Payment Integration
                                            &lt;/a&gt;
                                            &lt;a href=&quot;#&quot; class=&quot;list-group-item list-group-item-action&quot;&gt;Dropbox Cloud Service&lt;/a&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;list-group-item list-group-item-action&quot;&gt;Slack Communication&lt;/button&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;list-group-item list-group-item-action&quot;&gt;Notion Productivity App&lt;/button&gt;
                                            &lt;a href=&quot;#&quot; class=&quot;list-group-item list-group-item-action disabled&quot; tabindex=&quot;-1&quot; aria-disabled=&quot;true&quot;&gt;Zendesk Support Tool&lt;/a&gt;
                                        &lt;/div&gt;
                                    </code>            
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code -->

                            <div class="card-body">
                                <p class="text-muted">Use <code>&lt;a&gt;</code>s or
                                    <code>&lt;button&gt;</code>s to create <em>actionable</em> list group items with
                                    hover, disabled, and active states by adding
                                    <code>.list-group-item-action</code>.
                                </p>

                                <div class="list-group">
                                    <a href="#" class="list-group-item list-group-item-action active">
                                        Stripe Payment Integration
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">Dropbox Cloud Service</a>
                                    <button type="button" class="list-group-item list-group-item-action">Slack Communication</button>
                                    <button type="button" class="list-group-item list-group-item-action">Notion Productivity App</button>
                                    <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1">Zendesk Support Tool</a>
                                </div>
                            </div> <!-- end card body-->
                        </div> <!-- end card-->
                    </div> <!-- end col -->

                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Flush</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;ul class=&quot;list-group list-group-flush&quot;&gt;
                                            &lt;li class=&quot;list-group-item&quot;&gt;Slack Collaboration Tool&lt;/li&gt;
                                            &lt;li class=&quot;list-group-item&quot;&gt;Dropbox Cloud Storage&lt;/li&gt;
                                            &lt;li class=&quot;list-group-item&quot;&gt;Notion Workspace Organizer&lt;/li&gt;
                                            &lt;li class=&quot;list-group-item&quot;&gt;Zendesk Customer Support&lt;/li&gt;
                                            &lt;li class=&quot;list-group-item&quot;&gt;Stripe Payment Processor&lt;/li&gt;
                                        &lt;/ul&gt;
                                    </code>             
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code -->

                            <div class="card-body">
                                <p class="text-muted">Add <code>.list-group-flush</code> to remove some
                                    borders and rounded corners to render list group items edge-to-edge in a parent
                                    container (e.g., cards).</p>

                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Slack Collaboration Tool</li>
                                    <li class="list-group-item">Dropbox Cloud Storage</li>
                                    <li class="list-group-item">Notion Workspace Organizer</li>
                                    <li class="list-group-item">Zendesk Customer Support</li>
                                    <li class="list-group-item">Stripe Payment Processor</li>
                                </ul>
                            </div> <!-- end card body-->
                        </div> <!-- end card-->
                    </div> <!-- end col -->

                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Horizontal</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;ul class=&quot;list-group list-group-horizontal mb-3&quot;&gt;
                                            &lt;li class=&quot;list-group-item&quot;&gt;Slack&lt;/li&gt;
                                            &lt;li class=&quot;list-group-item&quot;&gt;Notion&lt;/li&gt;
                                            &lt;li class=&quot;list-group-item&quot;&gt;Dropbox&lt;/li&gt;
                                        &lt;/ul&gt;
        
                                        &lt;ul class=&quot;list-group list-group-horizontal-sm mb-3&quot;&gt;
                                            &lt;li class=&quot;list-group-item&quot;&gt;Figma&lt;/li&gt;
                                            &lt;li class=&quot;list-group-item&quot;&gt;Stripe&lt;/li&gt;
                                            &lt;li class=&quot;list-group-item&quot;&gt;Zendesk&lt;/li&gt;
                                        &lt;/ul&gt;
        
                                        &lt;ul class=&quot;list-group list-group-horizontal-md&quot;&gt;
                                            &lt;li class=&quot;list-group-item&quot;&gt;Trello&lt;/li&gt;
                                            &lt;li class=&quot;list-group-item&quot;&gt;Asana&lt;/li&gt;
                                            &lt;li class=&quot;list-group-item&quot;&gt;ClickUp&lt;/li&gt;
                                        &lt;/ul&gt;
                                    </code>         
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code -->

                            <div class="card-body">
                                <p class="text-muted">Add <code>.list-group-horizontal</code> to change the
                                    layout of list group items from vertical to horizontal across all breakpoints.
                                    Alternatively, choose a responsive variant
                                    <code>.list-group-horizontal-{sm|md|lg|xl}</code> to make a list group
                                    horizontal starting at that breakpoint’s <code>min-width</code>.
                                </p>

                                <ul class="list-group list-group-horizontal mb-3">
                                    <li class="list-group-item">Slack</li>
                                    <li class="list-group-item">Notion</li>
                                    <li class="list-group-item">Dropbox</li>
                                </ul>

                                <ul class="list-group list-group-horizontal-sm mb-3">
                                    <li class="list-group-item">Figma</li>
                                    <li class="list-group-item">Stripe</li>
                                    <li class="list-group-item">Zendesk</li>
                                </ul>

                                <ul class="list-group list-group-horizontal-md">
                                    <li class="list-group-item">Trello</li>
                                    <li class="list-group-item">Asana</li>
                                    <li class="list-group-item">ClickUp</li>
                                </ul>
                            </div> <!-- end card body-->
                        </div> <!-- end card-->
                    </div> <!-- end col -->
                
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Contextual Classes</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;ul class=&quot;list-group&quot;&gt;
                                            &lt;li class=&quot;list-group-item&quot;&gt;Dapibus ac facilisis in&lt;/li&gt;
                                            &lt;li class=&quot;list-group-item list-group-item-primary&quot;&gt;A simple primary
                                                list group item&lt;/li&gt;
                                            &lt;li class=&quot;list-group-item list-group-item-secondary&quot;&gt;A simple secondary
                                                list group item&lt;/li&gt;
                                            &lt;li class=&quot;list-group-item list-group-item-success&quot;&gt;A simple success
                                                list group item&lt;/li&gt;
                                            &lt;li class=&quot;list-group-item list-group-item-danger&quot;&gt;A simple danger list
                                                group item&lt;/li&gt;
                                            &lt;li class=&quot;list-group-item list-group-item-warning&quot;&gt;A simple warning
                                                list group item&lt;/li&gt;
                                            &lt;li class=&quot;list-group-item list-group-item-info&quot;&gt;A simple info list
                                                group item&lt;/li&gt;
                                            &lt;li class=&quot;list-group-item list-group-item-light&quot;&gt;A simple light list
                                                group item&lt;/li&gt;
                                            &lt;li class=&quot;list-group-item list-group-item-dark&quot;&gt;A simple dark list
                                                group item&lt;/li&gt;
                                        &lt;/ul&gt;
                                    </code>             
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code -->


                            <div class="card-body">
                                <p class="text-muted">Use contextual classes to style list items with a
                                    stateful background and color.</p>

                                <ul class="list-group">
                                    <li class="list-group-item">Dapibus ac facilisis in</li>
                                    <li class="list-group-item list-group-item-primary">A simple primary
                                        list group item</li>
                                    <li class="list-group-item list-group-item-secondary">A simple secondary
                                        list group item</li>
                                    <li class="list-group-item list-group-item-success">A simple success
                                        list group item</li>
                                    <li class="list-group-item list-group-item-danger">A simple danger list
                                        group item</li>
                                    <li class="list-group-item list-group-item-warning">A simple warning
                                        list group item</li>
                                    <li class="list-group-item list-group-item-info">A simple info list
                                        group item</li>
                                    <li class="list-group-item list-group-item-light">A simple light list
                                        group item</li>
                                    <li class="list-group-item list-group-item-dark">A simple dark list
                                        group item</li>
                                </ul>
                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div> <!-- end col -->

                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Contextual Classes with Link</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;div class=&quot;list-group&quot;&gt;
                                            &lt;a href=&quot;#&quot; class=&quot;list-group-item list-group-item-action&quot;&gt;Darius ac facilities in&lt;/a&gt;
                                            &lt;a href=&quot;#&quot; class=&quot;list-group-item list-group-item-action list-group-item-primary&quot;&gt;A simple primary list group item&lt;/a&gt;
                                            &lt;a href=&quot;#&quot; class=&quot;list-group-item list-group-item-action list-group-item-secondary&quot;&gt;A simple secondary list group item&lt;/a&gt;
                                            &lt;a href=&quot;#&quot; class=&quot;list-group-item list-group-item-action list-group-item-success&quot;&gt;A simple success list group item&lt;/a&gt;
                                            &lt;a href=&quot;#&quot; class=&quot;list-group-item list-group-item-action list-group-item-danger&quot;&gt;A simple danger list group item&lt;/a&gt;
                                            &lt;a href=&quot;#&quot; class=&quot;list-group-item list-group-item-action list-group-item-warning&quot;&gt;A simple warning list group item&lt;/a&gt;
                                            &lt;a href=&quot;#&quot; class=&quot;list-group-item list-group-item-action list-group-item-info&quot;&gt;A simple info list group item&lt;/a&gt;
                                            &lt;a href=&quot;#&quot; class=&quot;list-group-item list-group-item-action list-group-item-light&quot;&gt;A simple light list group item&lt;/a&gt;
                                            &lt;a href=&quot;#&quot; class=&quot;list-group-item list-group-item-action list-group-item-dark&quot;&gt;A simple dark list group item&lt;/a&gt;
                                        &lt;/div&gt;
                                    </code>             
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code -->

                            <div class="card-body">
                                <p class="text-muted">Use contextual classes to style list items with a
                                    stateful background and color.</p>

                                <div class="list-group">
                                    <a href="#" class="list-group-item list-group-item-action">Darius ac facilities in</a>
                                    <a href="#" class="list-group-item list-group-item-action list-group-item-primary">A simple primary list group item</a>
                                    <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">A simple secondary list group item</a>
                                    <a href="#" class="list-group-item list-group-item-action list-group-item-success">A simple success list group item</a>
                                    <a href="#" class="list-group-item list-group-item-action list-group-item-danger">A simple danger list group item</a>
                                    <a href="#" class="list-group-item list-group-item-action list-group-item-warning">A simple warning list group item</a>
                                    <a href="#" class="list-group-item list-group-item-action list-group-item-info">A simple info list group item</a>
                                    <a href="#" class="list-group-item list-group-item-action list-group-item-light">A simple light list group item</a>
                                    <a href="#" class="list-group-item list-group-item-action list-group-item-dark">A simple dark list group item</a>
                                </div>
                            </div> <!-- end card body-->
                        </div> <!-- end card-->
                    </div> <!-- end col -->

                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Custom Content</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;a href=&quot;#&quot; class=&quot;list-group-item list-group-item-action active&quot;&gt;
                                            &lt;div class=&quot;d-flex w-100 justify-content-between&quot;&gt;
                                                &lt;h5 class=&quot;mb-2&quot;&gt;List group item heading&lt;/h5&gt;
                                                &lt;small&gt;3 days ago&lt;/small&gt;
                                            &lt;/div&gt;
                                            &lt;p class=&quot;mb-1&quot;&gt;Donec id elit non mi porta gravida at eget metus.
                                                Maecenas sed diam eget risus varius blandit.&lt;/p&gt;
                                            &lt;small&gt;Donec id elit non mi porta.&lt;/small&gt;
                                        &lt;/a&gt;

                                        &lt;a href=&quot;#&quot; class=&quot;list-group-item list-group-item-action&quot;&gt;
                                            &lt;div class=&quot;d-flex w-100 justify-content-between&quot;&gt;
                                                &lt;h5 class=&quot;mb-2&quot;&gt;List group item heading&lt;/h5&gt;
                                                &lt;small class=&quot;text-muted&quot;&gt;3 days ago&lt;/small&gt;
                                            &lt;/div&gt;
                                            &lt;p class=&quot;mb-1&quot;&gt;Donec id elit non mi porta gravida at eget metus.
                                                Maecenas sed diam eget risus varius blandit.&lt;/p&gt;
                                            &lt;small class=&quot;text-muted&quot;&gt;Donec id elit non mi porta.&lt;/small&gt;
                                        &lt;/a&gt;
                                        
                                        &lt;a href=&quot;#&quot; class=&quot;list-group-item list-group-item-action&quot;&gt;
                                            &lt;div class=&quot;d-flex w-100 justify-content-between&quot;&gt;
                                                &lt;h5 class=&quot;mb-2&quot;&gt;List group item heading&lt;/h5&gt;
                                                &lt;small class=&quot;text-muted&quot;&gt;3 days ago&lt;/small&gt;
                                            &lt;/div&gt;
                                            &lt;p class=&quot;mb-1&quot;&gt;Donec id elit non mi porta gravida at eget metus.
                                                Maecenas sed diam eget risus varius blandit.&lt;/p&gt;
                                            &lt;small class=&quot;text-muted&quot;&gt;Donec id elit non mi porta.&lt;/small&gt;
                                        &lt;/a&gt;
                                    </code>             
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code -->

                            <div class="card-body">
                                <p class="text-muted">Add nearly any HTML within, even for linked list
                                    groups like the one below, with the help of flexbox utilities.</p>

                                <div class="list-group">
                                    <a href="#" class="list-group-item list-group-item-action active">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-2">List group item heading</h5>
                                            <small>3 days ago</small>
                                        </div>
                                        <p class="mb-1">Donec id elit non mi porta gravida at eget metus.
                                            Maecenas sed diam eget risus varius blandit.</p>
                                        <small>Donec id elit non mi porta.</small>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-2">List group item heading</h5>
                                            <small class="text-muted">3 days ago</small>
                                        </div>
                                        <p class="mb-1">Donec id elit non mi porta gravida at eget metus.
                                            Maecenas sed diam eget risus varius blandit.</p>
                                        <small class="text-muted">Donec id elit non mi porta.</small>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-2">List group item heading</h5>
                                            <small class="text-muted">3 days ago</small>
                                        </div>
                                        <p class="mb-1">Donec id elit non mi porta gravida at eget metus.
                                            Maecenas sed diam eget risus varius blandit.</p>
                                        <small class="text-muted">Donec id elit non mi porta.</small>
                                    </a>
                                </div>
                            </div> <!-- end card body-->
                        </div> <!-- end card-->
                    </div> <!-- end col -->

                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">With Badges</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;ul class=&quot;list-group&quot;&gt;
                                            &lt;li class=&quot;list-group-item d-flex justify-content-between align-items-center&quot;&gt;
                                                Gmail Notifications
                                                &lt;span class=&quot;badge bg-primary rounded-pill&quot;&gt;14&lt;/span&gt;
                                            &lt;/li&gt;
                                            &lt;li class=&quot;list-group-item d-flex justify-content-between align-items-center&quot;&gt;
                                                Unprocessed Orders
                                                &lt;span class=&quot;badge bg-success rounded-pill&quot;&gt;2&lt;/span&gt;
                                            &lt;/li&gt;
                                            &lt;li class=&quot;list-group-item d-flex justify-content-between align-items-center&quot;&gt;
                                                Urgent Tickets
                                                &lt;span class=&quot;badge bg-danger rounded-pill&quot;&gt;99+&lt;/span&gt;
                                            &lt;/li&gt;
                                            &lt;li class=&quot;list-group-item d-flex justify-content-between align-items-center&quot;&gt;
                                                Completed Transactions
                                                &lt;span class=&quot;badge bg-success rounded-pill&quot;&gt;20+&lt;/span&gt;
                                            &lt;/li&gt;
                                            &lt;li class=&quot;list-group-item d-flex justify-content-between align-items-center&quot;&gt;
                                                Invoices Awaiting Approval
                                                &lt;span class=&quot;badge bg-warning rounded-pill&quot;&gt;12&lt;/span&gt;
                                            &lt;/li&gt;
                                        &lt;/ul&gt;
                                    </code>             
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code -->

                            <div class="card-body">
                                <p class="text-muted">Add badges to any list group item to show unread
                                    counts, activity, and more with the help of some utilities.</p>

                                <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Gmail Notifications
                                        <span class="badge bg-primary rounded-pill">14</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Unprocessed Orders
                                        <span class="badge bg-success rounded-pill">2</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Urgent Tickets
                                        <span class="badge bg-danger rounded-pill">99+</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Completed Transactions
                                        <span class="badge bg-success rounded-pill">20+</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Invoices Awaiting Approval
                                        <span class="badge bg-warning rounded-pill">12</span>
                                    </li>
                                </ul>
                            </div> <!-- end card body-->
                        </div> <!-- end card-->
                    </div> <!-- end col -->

                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Checkboxes and Radios</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;ul class=&quot;list-group&quot;&gt;
                                            &lt;li class=&quot;list-group-item&quot;&gt;
                                                &lt;input class=&quot;form-check-input me-1&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;newsletterCheckbox&quot;&gt;
                                                &lt;label class=&quot;form-check-label&quot; for=&quot;newsletterCheckbox&quot;&gt;Subscribe to newsletter&lt;/label&gt;
                                            &lt;/li&gt;
                                            &lt;li class=&quot;list-group-item&quot;&gt;
                                                &lt;input class=&quot;form-check-input me-1&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;termsCheckbox&quot;&gt;
                                                &lt;label class=&quot;form-check-label&quot; for=&quot;termsCheckbox&quot;&gt;Accept terms and conditions&lt;/label&gt;
                                            &lt;/li&gt;
                                        &lt;/ul&gt;

                                        &lt;ul class=&quot;list-group mt-2&quot;&gt;
                                            &lt;li class=&quot;list-group-item&quot;&gt;
                                                &lt;input class=&quot;form-check-input me-1&quot; type=&quot;radio&quot; name=&quot;notificationOptions&quot; value=&quot;&quot; id=&quot;emailRadio&quot; checked&gt;
                                                &lt;label class=&quot;form-check-label&quot; for=&quot;emailRadio&quot;&gt;Notify by Email&lt;/label&gt;
                                            &lt;/li&gt;
                                            &lt;li class=&quot;list-group-item&quot;&gt;
                                                &lt;input class=&quot;form-check-input me-1&quot; type=&quot;radio&quot; name=&quot;notificationOptions&quot; value=&quot;&quot; id=&quot;smsRadio&quot;&gt;
                                                &lt;label class=&quot;form-check-label&quot; for=&quot;smsRadio&quot;&gt;Notify by SMS&lt;/label&gt;
                                            &lt;/li&gt;
                                        &lt;/ul&gt;
                                    </code>             
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code -->

                            <div class="card-body">
                                <p class="text-muted">Place Bootstrap’s checkboxes and radios within list
                                    group items and customize as needed. You can use them without
                                    <code>&lt;label&gt;</code>s, but please remember to include an
                                    <code>aria-label</code> attribute and value for accessibility.
                                </p>

                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <input class="form-check-input me-1" type="checkbox" value="" id="newsletterCheckbox">
                                        <label class="form-check-label" for="newsletterCheckbox">Subscribe to newsletter</label>
                                    </li>
                                    <li class="list-group-item">
                                        <input class="form-check-input me-1" type="checkbox" value="" id="termsCheckbox">
                                        <label class="form-check-label" for="termsCheckbox">Accept terms and conditions</label>
                                    </li>
                                </ul>

                                <ul class="list-group mt-2">
                                    <li class="list-group-item">
                                        <input class="form-check-input me-1" type="radio" name="notificationOptions" value="" id="emailRadio" checked>
                                        <label class="form-check-label" for="emailRadio">Notify by Email</label>
                                    </li>
                                    <li class="list-group-item">
                                        <input class="form-check-input me-1" type="radio" name="notificationOptions" value="" id="smsRadio">
                                        <label class="form-check-label" for="smsRadio">Notify by SMS</label>
                                    </li>
                                </ul>
                            </div> <!-- end card body -->
                        </div> <!-- end card-->
                    </div> <!-- end col -->

                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Numbered</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;ol class=&quot;list-group list-group-numbered&quot;&gt;
                                            &lt;li class=&quot;list-group-item d-flex justify-content-between align-items-start&quot;&gt;
                                                &lt;div class=&quot;ms-2 me-auto&quot;&gt;
                                                    &lt;div class=&quot;fw-bold&quot;&gt;INSPINIA Admin&lt;/div&gt;
                                                    INSPINIA Admin
                                                &lt;/div&gt;
                                                &lt;span class=&quot;badge bg-primary rounded-pill&quot;&gt;865&lt;/span&gt;
                                            &lt;/li&gt;
                                            &lt;li class=&quot;list-group-item d-flex justify-content-between align-items-start&quot;&gt;
                                                &lt;div class=&quot;ms-2 me-auto&quot;&gt;
                                                    &lt;div class=&quot;fw-bold&quot;&gt;INSPINIA React Admin&lt;/div&gt;
                                                    INSPINIA React Admin
                                                &lt;/div&gt;
                                                &lt;span class=&quot;badge bg-primary rounded-pill&quot;&gt;140&lt;/span&gt;
                                            &lt;/li&gt;
                                            &lt;li class=&quot;list-group-item d-flex justify-content-between align-items-start&quot;&gt;
                                                &lt;div class=&quot;ms-2 me-auto&quot;&gt;
                                                    &lt;div class=&quot;fw-bold&quot;&gt;Angular Version&lt;/div&gt;
                                                    Angular Version
                                                &lt;/div&gt;
                                                &lt;span class=&quot;badge bg-primary rounded-pill&quot;&gt;85&lt;/span&gt;
                                            &lt;/li&gt;
                                        &lt;/ol&gt;
                                    </code>             
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code -->

                            <div class="card-body">
                                <p class="text-muted">Numbers are generated by <code>counter-reset</code> on
                                    the <code>&lt;ol&gt;</code>, and then styled and placed with a
                                    <code>::before</code> psuedo-element on the <code>&lt;li&gt;</code> with
                                    <code>counter-increment</code> and <code>content</code>.
                                </p>

                                <ol class="list-group list-group-numbered">
                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                        <div class="ms-2 me-auto">
                                            <div class="fw-bold">INSPINIA Admin</div>
                                            INSPINIA Admin
                                        </div>
                                        <span class="badge bg-primary rounded-pill">865</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                        <div class="ms-2 me-auto">
                                            <div class="fw-bold">INSPINIA React Admin</div>
                                            INSPINIA React Admin
                                        </div>
                                        <span class="badge bg-primary rounded-pill">140</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                        <div class="ms-2 me-auto">
                                            <div class="fw-bold">Angular Version</div>
                                            Angular Version
                                        </div>
                                        <span class="badge bg-primary rounded-pill">85</span>
                                    </li>
                                </ol>
                            </div> <!-- end card body -->
                        </div> <!-- end card-->
                    </div> <!-- end col -->
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

</body>

</html>