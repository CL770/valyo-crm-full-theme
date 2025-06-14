<?php include 'partials/html.php' ?>

<head>
    <?php $title = "Modals"; include 'partials/title-meta.php' ?>

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
                <?php $subtitle = "UI"; $title = "Modals"; include 'partials/page-title.php';?>
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
                                    Use Bootstrap’s JavaScript modal plugin to add dialogs to your site for lightboxes, user notifications, or completely custom content.
                                </p>

                                <a class="btn btn-link p-0" href="https://getbootstrap.com/docs/5.3/components/modal/" target="_blank">
                                    Modals on Bootstrap
                                    <i class="ti ti-chevron-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div> <!-- end col -->

                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Bootstrap Modals</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;!-- Standard  modal --&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#standard-modal&quot;&gt;Standard Modal&lt;/button&gt;
                                        &lt;!-- Large modal --&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#bs-example-modal-lg&quot;&gt;Large Modal&lt;/button&gt;
                                        &lt;!-- Small modal --&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-success&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#bs-example-modal-sm&quot;&gt;Small Modal&lt;/button&gt;
                                        &lt;!-- Full width modal --&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#full-width-modal&quot;&gt;Full Width Modal&lt;/button&gt;
                                        &lt;!-- Scrollable modal --&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#scrollable-modal&quot;&gt;Scrollable Modal&lt;/button&gt;


                                        &lt;!-- Standard modal content --&gt;
                                        &lt;div id=&quot;standard-modal&quot; class=&quot;modal fade&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot; aria-labelledby=&quot;standard-modalLabel&quot; aria-hidden=&quot;true&quot;&gt;
                                            &lt;div class=&quot;modal-dialog&quot;&gt;
                                                &lt;div class=&quot;modal-content&quot;&gt;
                                                    &lt;div class=&quot;modal-header&quot;&gt;
                                                        &lt;h4 class=&quot;modal-title&quot; id=&quot;standard-modalLabel&quot;&gt;Modal Heading&lt;/h4&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;modal-body&quot;&gt;
                                                        ...
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;modal-footer&quot;&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot; data-bs-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Save changes&lt;/button&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;&lt;!-- /.modal-content --&gt;
                                            &lt;/div&gt;&lt;!-- /.modal-dialog --&gt;
                                        &lt;/div&gt;&lt;!-- /.modal --&gt;

                                        &lt;!--  Modal content for the Large example --&gt;
                                        &lt;div class=&quot;modal fade&quot; id=&quot;bs-example-modal-lg&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot; aria-labelledby=&quot;myLargeModalLabel&quot; aria-hidden=&quot;true&quot;&gt;
                                            &lt;div class=&quot;modal-dialog modal-lg&quot;&gt;
                                                &lt;div class=&quot;modal-content&quot;&gt;
                                                    &lt;div class=&quot;modal-header&quot;&gt;
                                                        &lt;h4 class=&quot;modal-title&quot; id=&quot;myLargeModalLabel&quot;&gt;Large modal&lt;/h4&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;modal-body&quot;&gt;
                                                        ...
                                                    &lt;/div&gt;
                                                &lt;/div&gt;&lt;!-- /.modal-content --&gt;
                                            &lt;/div&gt;&lt;!-- /.modal-dialog --&gt;
                                        &lt;/div&gt;&lt;!-- /.modal --&gt;
        
                                        &lt;div class=&quot;modal fade&quot; id=&quot;bs-example-modal-sm&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot; aria-labelledby=&quot;mySmallModalLabel&quot; aria-hidden=&quot;true&quot;&gt;
                                            &lt;div class=&quot;modal-dialog modal-sm&quot;&gt;
                                                &lt;div class=&quot;modal-content&quot;&gt;
                                                    &lt;div class=&quot;modal-header&quot;&gt;
                                                        &lt;h4 class=&quot;modal-title&quot; id=&quot;mySmallModalLabel&quot;&gt;Small modal&lt;/h4&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;modal-body&quot;&gt;
                                                        ...
                                                    &lt;/div&gt;
                                                &lt;/div&gt;&lt;!-- /.modal-content --&gt;
                                            &lt;/div&gt;&lt;!-- /.modal-dialog --&gt;
                                        &lt;/div&gt;&lt;!-- /.modal --&gt;

                                        &lt;!-- Full width modal content --&gt;
                                        &lt;div id=&quot;full-width-modal&quot; class=&quot;modal fade&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot; aria-labelledby=&quot;fullWidthModalLabel&quot; aria-hidden=&quot;true&quot;&gt;
                                            &lt;div class=&quot;modal-dialog modal-full-width&quot;&gt;
                                                &lt;div class=&quot;modal-content&quot;&gt;
                                                    &lt;div class=&quot;modal-header&quot;&gt;
                                                        &lt;h4 class=&quot;modal-title&quot; id=&quot;fullWidthModalLabel&quot;&gt;Modal Heading&lt;/h4&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;modal-body&quot;&gt;
                                                         ...
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;modal-footer&quot;&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot; data-bs-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Save changes&lt;/button&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;&lt;!-- /.modal-content --&gt;
                                            &lt;/div&gt;&lt;!-- /.modal-dialog --&gt;
                                        &lt;/div&gt;&lt;!-- /.modal --&gt;

                                        &lt;!-- Long Content Scroll Modal --&gt;
                                        &lt;div class=&quot;modal fade&quot; id=&quot;scrollable-modal&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot; aria-labelledby=&quot;scrollableModalTitle&quot; aria-hidden=&quot;true&quot;&gt;
                                            &lt;div class=&quot;modal-dialog modal-dialog-scrollable&quot; role=&quot;document&quot;&gt;
                                                &lt;div class=&quot;modal-content&quot;&gt;
                                                    &lt;div class=&quot;modal-header&quot;&gt;
                                                        &lt;h5 class=&quot;modal-title&quot; id=&quot;scrollableModalTitle&quot;&gt;Modal title&lt;/h5&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;modal-body&quot;&gt;
                                                        ...
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;modal-footer&quot;&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Save changes&lt;/button&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;&lt;!-- /.modal-content --&gt;
                                            &lt;/div&gt;&lt;!-- /.modal-dialog --&gt;
                                        &lt;/div&gt;&lt;!-- /.modal --&gt;
                                    </code>         
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code -->

                            <div class="card-body">
                                <p class="text-muted">
                                    A rendered modal with header, body, and set of actions in the footer.
                                </p>

                                <!-- Standard modal content -->
                                <div id="standard-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="standard-modalLabel">Modal Heading</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5>Text in a modal</h5>
                                                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                                <hr>
                                                <h5>Overflowing text to show scroll behavior</h5>
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                <p class="mb-0">Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->

                                <!--  Modal content for the Large example -->
                                <div class="modal fade" id="bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                ...
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->

                                <div class="modal fade" id="bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="mySmallModalLabel">Small modal</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                ...
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->

                                <!-- Full width modal content -->
                                <div id="full-width-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="fullWidthModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-full-width">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="fullWidthModalLabel">Modal Heading</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5>Text in a modal</h5>
                                                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                                <hr>
                                                <h5>Overflowing text to show scroll behavior</h5>
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                <p class="mb-0">Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->

                                <!-- Long Content Scroll Modal -->
                                <div class="modal fade" id="scrollable-modal" tabindex="-1" role="dialog" aria-labelledby="scrollableModalTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="scrollableModalTitle">Modal title</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas
                                                    eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue
                                                    laoreet rutrum faucibus dolor auctor.</p>
                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl
                                                    consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas
                                                    eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue
                                                    laoreet rutrum faucibus dolor auctor.</p>
                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl
                                                    consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas
                                                    eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue
                                                    laoreet rutrum faucibus dolor auctor.</p>
                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl
                                                    consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas
                                                    eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue
                                                    laoreet rutrum faucibus dolor auctor.</p>
                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl
                                                    consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas
                                                    eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue
                                                    laoreet rutrum faucibus dolor auctor.</p>
                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl
                                                    consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas
                                                    eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue
                                                    laoreet rutrum faucibus dolor auctor.</p>
                                                <p class="mb-0">Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl
                                                    consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->

                                <div class="d-flex flex-wrap gap-2">
                                    <!-- Standard  modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#standard-modal">Standard Modal</button>
                                    <!-- Large modal -->
                                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#bs-example-modal-lg">Large Modal</button>
                                    <!-- Small modal -->
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#bs-example-modal-sm">Small Modal</button>
                                    <!-- Full width modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#full-width-modal">Full Width Modal</button>
                                    <!-- Scrollable modal -->
                                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#scrollable-modal">Scrollable Modal</button>
                                </div>

                            </div> <!-- end card body-->
                        </div> <!-- end card-->
                    </div> <!-- end col -->

                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Modal Position</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;!-- Top modal --&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#top-modal&quot;&gt;Top Modal&lt;/button&gt;
                                        &lt;!-- Bottom modal --&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#bottom-modal&quot;&gt;Bottom Modal&lt;/button&gt;
                                        &lt;!-- Center modal --&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#centermodal&quot;&gt;Center modal&lt;/button&gt;

                                        &lt;!-- Top modal content --&gt;
                                        &lt;div id=&quot;top-modal&quot; class=&quot;modal fade&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot; aria-hidden=&quot;true&quot;&gt;
                                            &lt;div class=&quot;modal-dialog modal-top&quot;&gt;
                                                &lt;div class=&quot;modal-content&quot;&gt;
                                                    &lt;div class=&quot;modal-header&quot;&gt;
                                                        &lt;h4 class=&quot;modal-title&quot; id=&quot;topModalLabel&quot;&gt;Modal Heading&lt;/h4&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;modal-body&quot;&gt;
                                                        ...
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;modal-footer&quot;&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot; data-bs-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Save changes&lt;/button&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;&lt;!-- /.modal-content --&gt;
                                            &lt;/div&gt;&lt;!-- /.modal-dialog --&gt;
                                        &lt;/div&gt;&lt;!-- /.modal --&gt;

                                        &lt;!-- Bottom modal content --&gt;
                                        &lt;div id=&quot;bottom-modal&quot; class=&quot;modal fade&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot; aria-hidden=&quot;true&quot;&gt;
                                            &lt;div class=&quot;modal-dialog modal-bottom&quot;&gt;
                                                &lt;div class=&quot;modal-content&quot;&gt;
                                                    &lt;div class=&quot;modal-header&quot;&gt;
                                                        &lt;h4 class=&quot;modal-title&quot; id=&quot;bottomModalLabel&quot;&gt;Modal Heading&lt;/h4&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;modal-body&quot;&gt;
                                                        ...
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;modal-footer&quot;&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot; data-bs-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Save changes&lt;/button&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;&lt;!-- /.modal-content --&gt;
                                            &lt;/div&gt;&lt;!-- /.modal-dialog --&gt;
                                        &lt;/div&gt;&lt;!-- /.modal --&gt;

                                        &lt;!-- Center modal content --&gt;
                                        &lt;div class=&quot;modal fade&quot; id=&quot;centermodal&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot; aria-hidden=&quot;true&quot;&gt;
                                            &lt;div class=&quot;modal-dialog modal-dialog-centered&quot;&gt;
                                                &lt;div class=&quot;modal-content&quot;&gt;
                                                    &lt;div class=&quot;modal-header&quot;&gt;
                                                        &lt;h4 class=&quot;modal-title&quot; id=&quot;myCenterModalLabel&quot;&gt;Center modal&lt;/h4&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;modal-body&quot;&gt;
                                                        ...
                                                    &lt;/div&gt;
                                                &lt;/div&gt;&lt;!-- /.modal-content --&gt;
                                            &lt;/div&gt;&lt;!-- /.modal-dialog --&gt;
                                        &lt;/div&gt;&lt;!-- /.modal --&gt;
                                    </code>
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code -->

                            <div class="card-body">
                                <p class="text-muted">Specify the position for the modal. You can display modal at top, bottom, or center of page by specifying
                                    classes <code>modal-top</code>, <code>modal-bottom</code>and <code>modal-dialog-centered</code>
                                    respectively.</p>

                                <!-- Top modal content -->
                                <div id="top-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-top">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="topModalLabel">Modal Heading</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="mt-0">Text in a modal</h5>
                                                <p class="mb-0">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->

                                <!-- Bottom modal content -->
                                <div id="bottom-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-bottom">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="bottomModalLabel">Modal Heading</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="mt-0">Text in a modal</h5>
                                                <p class="mb-0">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->

                                <!-- Center modal content -->
                                <div class="modal fade" id="centermodal" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myCenterModalLabel">Center modal</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="mt-0">Overflowing text to show scroll behavior</h5>
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                <p class="mb-0">Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->

                                <div class="d-flex flex-wrap gap-2">
                                    <!-- Top modal -->
                                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#top-modal">Top Modal</button>
                                    <!-- Bottom modal -->
                                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#bottom-modal">Bottom Modal</button>
                                    <!-- Center modal -->
                                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#centermodal">Center modal</button>
                                </div>
                            </div> <!-- end card body-->
                        </div> <!-- end card-->
                    </div> <!-- end col -->

                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Multiple Modal</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;!-- Multiple modal --&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#multiple-one&quot;&gt;Multiple Modal&lt;/button&gt;

                                        &lt;!-- Modal Heading --&gt;
                                        &lt;div id=&quot;multiple-one&quot; class=&quot;modal fade&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot; aria-labelledby=&quot;multiple-oneModalLabel&quot; aria-hidden=&quot;true&quot;&gt;
                                            &lt;div class=&quot;modal-dialog&quot;&gt;
                                                &lt;div class=&quot;modal-content&quot;&gt;
                                                    &lt;div class=&quot;modal-header&quot;&gt;
                                                        &lt;h4 class=&quot;modal-title&quot; id=&quot;multiple-oneModalLabel&quot;&gt;Modal Heading&lt;/h4&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;modal-body&quot;&gt;
                                                        &lt;h5 class=&quot;mt-0&quot;&gt;Text in a modal&lt;/h5&gt;
                                                        &lt;p class=&quot;mb-0&quot;&gt;Duis mollis, est non commodo luctus, nisi erat porttitor ligula.&lt;/p&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;modal-footer&quot;&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-target=&quot;#multiple-two&quot; data-bs-toggle=&quot;modal&quot; data-bs-dismiss=&quot;modal&quot;&gt;Next&lt;/button&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;&lt;!-- /.modal-content --&gt;
                                            &lt;/div&gt;&lt;!-- /.modal-dialog --&gt;
                                        &lt;/div&gt;&lt;!-- /.modal --&gt;
        
                                        &lt;!-- Modal Heading --&gt;
                                        &lt;div id=&quot;multiple-two&quot; class=&quot;modal fade&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot; aria-labelledby=&quot;multiple-twoModalLabel&quot; aria-hidden=&quot;true&quot;&gt;
                                            &lt;div class=&quot;modal-dialog&quot;&gt;
                                                &lt;div class=&quot;modal-content&quot;&gt;
                                                    &lt;div class=&quot;modal-header&quot;&gt;
                                                        &lt;h4 class=&quot;modal-title&quot; id=&quot;multiple-twoModalLabel&quot;&gt;Modal Heading&lt;/h4&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;modal-body&quot;&gt;
                                                        &lt;h5 class=&quot;mt-0&quot;&gt;Text in a modal&lt;/h5&gt;
                                                        &lt;p class=&quot;mb-0&quot;&gt;Duis mollis, est non commodo luctus, nisi erat porttitor ligula.&lt;/p&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;modal-footer&quot;&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;&lt;!-- /.modal-content --&gt;
                                            &lt;/div&gt;&lt;!-- /.modal-dialog --&gt;
                                        &lt;/div&gt;&lt;!-- /.modal --&gt;
                                    </code>         
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code -->

                            <div class="card-body">
                                <p class="text-muted">Display a series of modals one by one to guide your users on multiple aspects or take step wise input.</p>

                                <!-- Modal Heading -->
                                <div id="multiple-one" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="multiple-oneModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="multiple-oneModalLabel">Modal Heading</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="mt-0">Text in a modal</h5>
                                                <p class="mb-0">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" data-bs-target="#multiple-two" data-bs-toggle="modal" data-bs-dismiss="modal">Next</button>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->

                                <!-- Modal Heading -->
                                <div id="multiple-two" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="multiple-twoModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="multiple-twoModalLabel">Modal Heading</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="mt-0">Text in a modal</h5>
                                                <p class="mb-0">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->

                                <div class="d-flex flex-wrap gap-2">
                                    <!-- Multiple modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#multiple-one">Multiple Modal</button>
                                </div>
                            </div> <!-- end card body-->
                        </div> <!-- end card-->
                    </div> <!-- end col -->

                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Toggle Between Modals</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;a class=&quot;btn btn-secondary&quot; data-bs-toggle=&quot;modal&quot; href=&quot;#exampleModalToggle&quot; role=&quot;button&quot;&gt;Open first modal&lt;/a&gt;

                                        &lt;!-- Modal 1--&gt;
                                        &lt;div class=&quot;modal fade&quot; id=&quot;exampleModalToggle&quot; aria-hidden=&quot;true&quot; aria-labelledby=&quot;exampleModalToggleLabel&quot; tabindex=&quot;-1&quot;&gt;
                                            &lt;div class=&quot;modal-dialog modal-dialog-centered&quot;&gt;
                                                &lt;div class=&quot;modal-content&quot;&gt;
                                                    &lt;div class=&quot;modal-header&quot;&gt;
                                                        &lt;h5 class=&quot;modal-title&quot; id=&quot;exampleModalToggleLabel&quot;&gt;Modal 1&lt;/h5&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;modal-body&quot;&gt;
                                                        Show a second modal and hide this one with the button below.
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;modal-footer&quot;&gt;
                                                        &lt;button class=&quot;btn btn-primary&quot; data-bs-target=&quot;#exampleModalToggle2&quot; data-bs-toggle=&quot;modal&quot; data-bs-dismiss=&quot;modal&quot;&gt;Open second modal&lt;/button&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;&lt;!-- /.modal-content --&gt;
                                            &lt;/div&gt;&lt;!-- /.modal-dialog --&gt;
                                        &lt;/div&gt;&lt;!-- /.modal --&gt;
        
                                        &lt;!-- Modal 2--&gt;
                                        &lt;div class=&quot;modal fade&quot; id=&quot;exampleModalToggle2&quot; aria-hidden=&quot;true&quot; aria-labelledby=&quot;exampleModalToggleLabel2&quot; tabindex=&quot;-1&quot;&gt;
                                            &lt;div class=&quot;modal-dialog modal-dialog-centered&quot;&gt;
                                                &lt;div class=&quot;modal-content&quot;&gt;
                                                    &lt;div class=&quot;modal-header&quot;&gt;
                                                        &lt;h5 class=&quot;modal-title&quot; id=&quot;exampleModalToggleLabel2&quot;&gt;Modal 2&lt;/h5&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;modal-body&quot;&gt;
                                                        Hide this modal and show the first with the button below.
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;modal-footer&quot;&gt;
                                                        &lt;button class=&quot;btn btn-primary&quot; data-bs-target=&quot;#exampleModalToggle&quot; data-bs-toggle=&quot;modal&quot; data-bs-dismiss=&quot;modal&quot;&gt;Back to first&lt;/button&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;&lt;!-- /.modal-content --&gt;
                                            &lt;/div&gt;&lt;!-- /.modal-dialog --&gt;
                                        &lt;/div&gt;&lt;!-- /.modal --&gt;
                                    </code>          
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code -->

                            <div class="card-body">
                                <p class="text-muted">Toggle between multiple modals with some clever placement of the <code>data-bs-target</code> and <code>data-bs-toggle</code> attributes.</p>

                                <!-- Modal 1-->
                                <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalToggleLabel">Modal 1</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Show a second modal and hide this one with the button below.
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Open second modal</button>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->

                                <!-- Modal 2-->
                                <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalToggleLabel2">Modal 2</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Hide this modal and show the first with the button below.
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Back to first</button>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->

                                <a class="btn btn-secondary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Open first modal</a>

                            </div> <!-- end card body-->
                        </div> <!-- end card-->
                    </div> <!-- end col -->

                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Fullscreen Modal</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;!-- Fullscreen Modal --&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#fullscreeexampleModal&quot;&gt; Fullscreen Modal&lt;/button&gt;
                                        &lt;!-- Full Screen Below sm --&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#exampleModalFullscreenSm&quot;&gt;Full Screen Below sm&lt;/button&gt;
                                        &lt;!-- Full Screen Below md --&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#exampleModalFullscreenMd&quot;&gt;Full Screen Below md&lt;/button&gt;
                                        &lt;!-- Full Screen Below lg --&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#exampleModalFullscreenLg&quot;&gt;Full Screen Below lg&lt;/button&gt;
                                        &lt;!-- Full Screen Below xl --&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#exampleModalFullscreenXl&quot;&gt;Full Screen Below xl&lt;/button&gt;
                                        &lt;!-- Full Screen Below xxl --&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#exampleModalFullscreenXxl&quot;&gt;Full Screen Below xxl&lt;/button&gt;
                                  
                                        &lt;!-- Full Screen Modal --&gt;
                                        &lt;div class=&quot;modal fade&quot; id=&quot;fullscreeexampleModal&quot; tabindex=&quot;-1&quot; aria-labelledby=&quot;fullscreeexampleModalLabel&quot; aria-hidden=&quot;true&quot;&gt;
                                            &lt;div class=&quot;modal-dialog modal-fullscreen&quot;&gt;
                                                &lt;div class=&quot;modal-content&quot;&gt;
                                                    &lt;div class=&quot;modal-header&quot;&gt;
                                                        &lt;h5 class=&quot;modal-title&quot; id=&quot;fullscreeexampleModalLabel&quot;&gt;Full Screen Modal&lt;/h5&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;modal-body&quot;&gt;
                                                        ...
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;modal-footer&quot;&gt;
                                                        &lt;a href=&quot;javascript:void(0);&quot; class=&quot;btn btn-light&quot; data-bs-dismiss=&quot;modal&quot;&gt;Close&lt;/a&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Save Changes&lt;/button&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;

                                        &lt;!-- Full screen below sm --&gt;
                                        &lt;div class=&quot;modal fade&quot; id=&quot;exampleModalFullscreenSm&quot; tabindex=&quot;-1&quot; aria-labelledby=&quot;exampleModalFullscreenSmLabel&quot; aria-hidden=&quot;true&quot;&gt;
                                            &lt;div class=&quot;modal-dialog modal-fullscreen-sm-down&quot;&gt;
                                                &lt;div class=&quot;modal-content&quot;&gt;
                                                    &lt;div class=&quot;modal-header&quot;&gt;
                                                        &lt;h5 class=&quot;modal-title&quot; id=&quot;exampleModalFullscreenSmLabel&quot;&gt;Full screen below sm&lt;/h5&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;modal-body&quot;&gt;
                                                        ...
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;modal-footer&quot;&gt;
                                                        &lt;a href=&quot;javascript:void(0);&quot; class=&quot;btn btn-light&quot; data-bs-dismiss=&quot;modal&quot;&gt;Close&lt;/a&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Save Changes&lt;/button&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;

                                        &lt;!-- Full screen below md --&gt;
                                        &lt;div class=&quot;modal fade&quot; id=&quot;exampleModalFullscreenMd&quot; tabindex=&quot;-1&quot; aria-labelledby=&quot;exampleModalFullscreenMdLabel&quot; aria-hidden=&quot;true&quot;&gt;
                                            &lt;div class=&quot;modal-dialog modal-fullscreen-md-down&quot;&gt;
                                                &lt;div class=&quot;modal-content&quot;&gt;
                                                    &lt;div class=&quot;modal-header&quot;&gt;
                                                        &lt;h5 class=&quot;modal-title&quot; id=&quot;exampleModalFullscreenMdLabel&quot;&gt;Full screen below md&lt;/h5&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;modal-body&quot;&gt;
                                                        ...
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;modal-footer&quot;&gt;
                                                        &lt;a href=&quot;javascript:void(0);&quot; class=&quot;btn btn-light&quot; data-bs-dismiss=&quot;modal&quot;&gt;Close&lt;/a&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Save Changes&lt;/button&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;

                                        &lt;!-- Full screen below lg --&gt;
                                        &lt;div class=&quot;modal fade&quot; id=&quot;exampleModalFullscreenLg&quot; tabindex=&quot;-1&quot; aria-labelledby=&quot;exampleModalFullscreenLgLabel&quot; aria-hidden=&quot;true&quot;&gt;
                                            &lt;div class=&quot;modal-dialog modal-fullscreen-lg-down&quot;&gt;
                                                &lt;div class=&quot;modal-content&quot;&gt;
                                                    &lt;div class=&quot;modal-header&quot;&gt;
                                                        &lt;h5 class=&quot;modal-title&quot; id=&quot;exampleModalFullscreenLgLabel&quot;&gt;Full screen below lg&lt;/h5&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;modal-body&quot;&gt;
                                                        ...
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;modal-footer&quot;&gt;
                                                        &lt;a href=&quot;javascript:void(0);&quot; class=&quot;btn btn-light&quot; data-bs-dismiss=&quot;modal&quot;&gt;Close&lt;/a&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Save Changes&lt;/button&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;

                                        &lt;!-- Full screen below xl --&gt;
                                        &lt;div class=&quot;modal fade&quot; id=&quot;exampleModalFullscreenXl&quot; tabindex=&quot;-1&quot; aria-labelledby=&quot;exampleModalFullscreenXlLabel&quot; aria-hidden=&quot;true&quot;&gt;
                                            &lt;div class=&quot;modal-dialog modal-fullscreen-sm-down&quot;&gt;
                                                &lt;div class=&quot;modal-content&quot;&gt;
                                                    &lt;div class=&quot;modal-header&quot;&gt;
                                                        &lt;h5 class=&quot;modal-title&quot; id=&quot;exampleModalFullscreenXlLabel&quot;&gt;Full screen below xl&lt;/h5&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;modal-body&quot;&gt;
                                                        ...
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;modal-footer&quot;&gt;
                                                        &lt;a href=&quot;javascript:void(0);&quot; class=&quot;btn btn-light&quot; data-bs-dismiss=&quot;modal&quot;&gt;Close&lt;/a&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Save Changes&lt;/button&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;

                                        &lt;!-- Full screen below xxl --&gt;
                                        &lt;div class=&quot;modal fade&quot; id=&quot;exampleModalFullscreenXxl&quot; tabindex=&quot;-1&quot; aria-labelledby=&quot;exampleModalFullscreenXxlLabel&quot; aria-hidden=&quot;true&quot;&gt;
                                            &lt;div class=&quot;modal-dialog modal-fullscreen-xxl-down&quot;&gt;
                                                &lt;div class=&quot;modal-content&quot;&gt;
                                                    &lt;div class=&quot;modal-header&quot;&gt;
                                                        &lt;h5 class=&quot;modal-title&quot; id=&quot;exampleModalFullscreenXxlLabel&quot;&gt;Full screen below xxl&lt;/h5&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;modal-body&quot;&gt;
                                                        ...
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;modal-footer&quot;&gt;
                                                        &lt;a href=&quot;javascript:void(0);&quot; class=&quot;btn btn-light&quot; data-bs-dismiss=&quot;modal&quot;&gt;Close&lt;/a&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Save Changes&lt;/button&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;
                                    </code>    
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code -->

                            <div class="card-body">
                                <p class="text-muted">Another override is the option to pop up a modal that covers the user viewport, available via modifier classes that are placed on a <code>.modal-dialog</code></p>

                                <div class="hstack gap-2 flex-wrap">
                                    <!-- Fullscreen Modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#fullscreeexampleModal"> Fullscreen Modal</button>
                                    <!-- Full Screen Below sm -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreenSm">Full Screen Below sm</button>
                                    <!-- Full Screen Below md -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreenMd">Full Screen Below md</button>
                                    <!-- Full Screen Below lg -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreenLg">Full Screen Below lg</button>
                                    <!-- Full Screen Below xl -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreenXl">Full Screen Below xl</button>
                                    <!-- Full Screen Below xxl -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreenXxl">Full Screen Below xxl</button>
                                </div>

                                <!-- Full Screen Modal -->
                                <div class="modal fade" id="fullscreeexampleModal" tabindex="-1" aria-labelledby="fullscreeexampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-fullscreen">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="fullscreeexampleModalLabel">Full Screen Modal</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                ...
                                            </div>
                                            <div class="modal-footer">
                                                <a href="javascript:void(0);" class="btn btn-light" data-bs-dismiss="modal">Close</a>
                                                <button type="button" class="btn btn-primary">Save Changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Full screen below sm -->
                                <div class="modal fade" id="exampleModalFullscreenSm" tabindex="-1" aria-labelledby="exampleModalFullscreenSmLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-fullscreen-sm-down">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalFullscreenSmLabel">Full screen below sm</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                ...
                                            </div>
                                            <div class="modal-footer">
                                                <a href="javascript:void(0);" class="btn btn-light" data-bs-dismiss="modal">Close</a>
                                                <button type="button" class="btn btn-primary">Save Changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Full screen below md -->
                                <div class="modal fade" id="exampleModalFullscreenMd" tabindex="-1" aria-labelledby="exampleModalFullscreenMdLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-fullscreen-md-down">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalFullscreenMdLabel">Full screen below md</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                ...
                                            </div>
                                            <div class="modal-footer">
                                                <a href="javascript:void(0);" class="btn btn-light" data-bs-dismiss="modal">Close</a>
                                                <button type="button" class="btn btn-primary">Save Changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Full screen below lg -->
                                <div class="modal fade" id="exampleModalFullscreenLg" tabindex="-1" aria-labelledby="exampleModalFullscreenLgLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-fullscreen-lg-down">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalFullscreenLgLabel">Full screen below lg</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                ...
                                            </div>
                                            <div class="modal-footer">
                                                <a href="javascript:void(0);" class="btn btn-light" data-bs-dismiss="modal">Close</a>
                                                <button type="button" class="btn btn-primary">Save Changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Full screen below xl -->
                                <div class="modal fade" id="exampleModalFullscreenXl" tabindex="-1" aria-labelledby="exampleModalFullscreenXlLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-fullscreen-sm-down">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalFullscreenXlLabel">Full screen below xl</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                ...
                                            </div>
                                            <div class="modal-footer">
                                                <a href="javascript:void(0);" class="btn btn-light" data-bs-dismiss="modal">Close</a>
                                                <button type="button" class="btn btn-primary">Save Changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Full screen below xxl -->
                                <div class="modal fade" id="exampleModalFullscreenXxl" tabindex="-1" aria-labelledby="exampleModalFullscreenXxlLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-fullscreen-xxl-down">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalFullscreenXxlLabel">Full screen below xxl</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                ...
                                            </div>
                                            <div class="modal-footer">
                                                <a href="javascript:void(0);" class="btn btn-light" data-bs-dismiss="modal">Close</a>
                                                <button type="button" class="btn btn-primary">Save Changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div> <!-- end card body-->
                        </div> <!-- end card-->
                    </div> <!-- end col -->

                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Static Backdrop</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">
                                        &lt;!-- Static Backdrop modal --&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#staticBackdrop&quot;&gt;
                                            Static Backdrop
                                        &lt;/button&gt;

                                        &lt;div class=&quot;d-flex flex-wrap gap-2&quot;&gt;
                                            &lt;!-- Static Backdrop modal --&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#staticBackdrop&quot;&gt;
                                                Static Backdrop
                                            &lt;/button&gt;
                                        &lt;/div&gt; &lt;!-- btn list --&gt;
        
                                        &lt;!-- Modal --&gt;
                                        &lt;div class=&quot;modal fade&quot; id=&quot;staticBackdrop&quot; data-bs-backdrop=&quot;static&quot; data-bs-keyboard=&quot;false&quot; tabindex=&quot;-1&quot; aria-labelledby=&quot;staticBackdropLabel&quot; aria-hidden=&quot;true&quot;&gt;
                                            &lt;div class=&quot;modal-dialog&quot;&gt;
                                                &lt;div class=&quot;modal-content&quot;&gt;
                                                    &lt;div class=&quot;modal-header&quot;&gt;
                                                        &lt;h5 class=&quot;modal-title&quot; id=&quot;staticBackdropLabel&quot;&gt;Modal title&lt;/h5&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                    &lt;/div&gt; &lt;!-- end modal header --&gt;
                                                    &lt;div class=&quot;modal-body&quot;&gt;
                                                        &lt;p class=&quot;m-0&quot;&gt;I will not close if you click outside me. Don't even try to press escape key.&lt;/p&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;modal-footer&quot;&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Understood&lt;/button&gt;
                                                    &lt;/div&gt; &lt;!-- end modal footer --&gt;
                                                &lt;/div&gt; &lt;!-- end modal content--&gt;
                                            &lt;/div&gt; &lt;!-- end modal dialog--&gt;
                                        &lt;/div&gt; &lt;!-- end modal--&gt;
                                    </code>         
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code -->

                            <div class="card-body">
                                <p class="text-muted">When backdrop is set to static, the modal will not close when clicking outside it. Click the button below to try it.</p>

                                <div class="d-flex flex-wrap gap-2">
                                    <!-- Static Backdrop modal -->
                                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        Static Backdrop
                                    </button>
                                </div> <!-- btn list -->

                                <!-- Modal -->
                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div> <!-- end modal header -->
                                            <div class="modal-body">
                                                <p class="m-0">I will not close if you click outside me. Don't even try to press escape key.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Understood</button>
                                            </div> <!-- end modal footer -->
                                        </div> <!-- end modal content-->
                                    </div> <!-- end modal dialog-->
                                </div> <!-- end modal-->

                            </div> <!-- end card body-->
                        </div> <!-- end card-->
                    </div> <!-- end col -->

                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Varying Modal Content</h4>
                                </div>
                                <div class="card-action">
                                    <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                                    <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                                </div>
                            </div>

                            <div class="code-body">
                                <pre>
                                    <code class="language-markup">                                              
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#exampleModal&quot; data-bs-whatever=&quot;@mdo&quot;&gt;Open modal for @mdo&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#exampleModal&quot; data-bs-whatever=&quot;@fat&quot;&gt;Open modal for @fat&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#exampleModal&quot; data-bs-whatever=&quot;@getbootstrap&quot;&gt;Open modal for @getbootstrap&lt;/button&gt;
                                 
                                        &lt;div class=&quot;modal fade&quot; id=&quot;exampleModal&quot; tabindex=&quot;-1&quot; aria-labelledby=&quot;exampleModalLabel&quot; aria-hidden=&quot;true&quot;&gt;
                                            &lt;div class=&quot;modal-dialog&quot;&gt;
                                                &lt;div class=&quot;modal-content&quot;&gt;
                                                    &lt;div class=&quot;modal-header&quot;&gt;
                                                        &lt;h5 class=&quot;modal-title&quot; id=&quot;exampleModalLabel&quot;&gt;New message&lt;/h5&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;modal-body&quot;&gt;
                                                        &lt;form&gt;
                                                            &lt;div class=&quot;mb-3&quot;&gt;
                                                                &lt;label for=&quot;recipient-name&quot; class=&quot;col-form-label&quot;&gt;Recipient:&lt;/label&gt;
                                                                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;recipient-name&quot;&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;mb-3&quot;&gt;
                                                                &lt;label for=&quot;message-text&quot; class=&quot;col-form-label&quot;&gt;Message:&lt;/label&gt;
                                                                &lt;textarea class=&quot;form-control&quot; id=&quot;message-text&quot;&gt;&lt;/textarea&gt;
                                                            &lt;/div&gt;
                                                        &lt;/form&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;modal-footer&quot;&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Send message&lt;/button&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;
                                    </code>         
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code -->

                            <div class="card-body">
                                <p class="text-muted">Have a bunch of buttons that all trigger the same modal with slightly different contents? Use
                                    <code>event.relatedTarget</code> and <a href="https://developer.mozilla.org/en-US/docs/Learn/HTML/Howto/Use_data_attributes" target="_blank">HTML <code>data-bs-*</code>
                                        attributes</a> to vary the contents of the modal depending on which button was clicked.
                                </p>

                                <div class="hstack gap-2 flex-wrap">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Open modal for @mdo</button>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@fat">Open modal for @fat</button>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Open modal for @getbootstrap</button>
                                </div>

                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="mb-3">
                                                        <label for="recipient-name" class="col-form-label">Recipient:</label>
                                                        <input type="text" class="form-control" id="recipient-name">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="message-text" class="col-form-label">Message:</label>
                                                        <textarea class="form-control" id="message-text"></textarea>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Send message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div> <!-- end card body-->
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

    <script>
        const exampleModal = document.getElementById('exampleModal')
        exampleModal.addEventListener('show.bs.modal', event => {
            // Button that triggered the modal
            const button = event.relatedTarget
            // Extract info from data-bs-* attributes
            const recipient = button.getAttribute('data-bs-whatever')
            // If necessary, you could initiate an AJAX request here
            // and then do the updating in a callback.
            //
            // Update the modal's content.
            const modalTitle = exampleModal.querySelector('.modal-title')
            const modalBodyInput = exampleModal.querySelector('.modal-body input')

            modalTitle.textContent = `New message to ${recipient}`
            modalBodyInput.value = recipient
        })
    </script>

</body>

</html>