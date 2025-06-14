@extends('layouts.vertical', ['title' => 'Bootstrap Toasts'])

@section('css')
@endsection

@section('content')

@include('layouts.partials/page-title', ['subtitle' => 'UI', 'title' => 'Notifications'])

<div class="container-xl">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Bootstrap Toasts</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted mb-2">
                        Push notifications to your visitors with a toast, a lightweight and easily customizable alert message.
                    </p>

                    <a class="btn btn-link p-0 fw-semibold" href="https://getbootstrap.com/docs/5.3/components/toasts/" target="_blank">
                        Toasts on Bootstrap
                        <i class="ti ti-chevron-right ms-1"></i>
                    </a>
                </div>
            </div>
        </div> <!-- end col-->

        <div class="col-lg-6">

            <div class="card">
                <div class="card-header">
                    <div class="flex-grow-1">
                        <h4 class="card-title">Basic</h4>
                    </div>
                    <div class="card-action">
                        <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                        <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                    </div>
                </div>

                <div class="code-body">
                    <pre>
                        <code class="language-markup">
                            &lt;!-- Basic --&gt;
                            &lt;div class=&quot;toast fade show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
                                &lt;div class=&quot;toast-header&quot;&gt;
                                    &lt;img src=&quot;/images/logo-sm.png&quot; alt=&quot;brand-logo&quot; height=&quot;16&quot; class=&quot;me-1&quot; /&gt;
                                    &lt;strong class=&quot;me-auto text-body&quot;&gt;INSPINIA&lt;/strong&gt;
                                    &lt;small&gt;11 mins ago&lt;/small&gt;
                                    &lt;button type=&quot;button&quot; class=&quot;ms-2 btn-close&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                &lt;/div&gt;
                                &lt;div class=&quot;toast-body&quot;&gt;
                                    Hello, world! This is a toast message.
                                &lt;/div&gt;
                            &lt;/div&gt;
                        </code>
                    </pre> <!-- end highlight-->
                </div> <!-- end preview code -->

                <div class="card-body">
                    <p class="text-muted">Toasts are as flexible as you need and
                        have very little required markup. At a minimum, we
                        require a single element to contain your “toasted” content and
                        strongly encourage a dismiss button.</p>
                    <div class="p-3">

                        <!-- Basic -->
                        <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                            <div class="toast-header">
                                <img src="/images/logo-sm.png" alt="brand-logo" height="16" class="me-1">
                                <strong class="me-auto text-body">INSPINIA</strong>
                                <small>11 mins ago</small>
                                <button type="button" class="ms-2 btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                            </div>
                            <div class="toast-body">
                                Hello, world! This is a toast message.
                            </div>
                        </div>
                        <!--end toast-->

                    </div>
                </div> <!-- end card body-->
            </div> <!-- end card-->



            <div class="card">
                <div class="card-header">
                    <div class="flex-grow-1">
                        <h4 class="card-title">Placement</h4>
                    </div>
                    <div class="card-action">
                        <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                        <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                    </div>
                </div>

                <div class="code-body">
                    <pre>
                        <code class="language-markup">
                            &lt;!-- Then put toasts within --&gt;
                            &lt;div class=&quot;toast fade show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot; data-bs-toggle=&quot;toast&quot;&gt;
                                &lt;div class=&quot;toast-header&quot;&gt;
                                    &lt;img src=&quot;/images/logo-sm.png&quot; alt=&quot;brand-logo&quot; height=&quot;16&quot; class=&quot;me-1&quot; /&gt;
                                    &lt;strong class=&quot;me-auto text-body&quot;&gt;INSPINIA&lt;/strong&gt;
                                    &lt;small&gt;11 mins ago&lt;/small&gt;
                                    &lt;button type=&quot;button&quot; class=&quot;ms-2 btn-close&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                &lt;/div&gt;
                                &lt;div class=&quot;toast-body&quot;&gt;
                                    Hello, world! This is a toast message.
                                &lt;/div&gt;
                            &lt;/div&gt;
                        </code>
                    </pre> <!-- end highlight-->
                </div> <!-- end preview code -->

                <div class="card-body">
                    <p class="text-muted">Place toasts with custom CSS as you
                        need them. The top right is often used for
                        notifications, as is the top middle. If you’re only ever going
                        to show one toast at a time, put the positioning
                        styles right on the <code>.toast</code>.</p>
                    <div class="p-3">
                        <div aria-live="polite" aria-atomic="true" class="d-flex justify-content-center align-items-center" style="min-height: 200px;">

                            <!-- Then put toasts within -->
                            <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" data-bs-toggle="toast">
                                <div class="toast-header">
                                    <img src="/images/logo-sm.png" alt="brand-logo" height="16" class="me-1">
                                    <strong class="me-auto text-body">INSPINIA</strong>
                                    <small>11 mins ago</small>
                                    <button type="button" class="ms-2 btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                </div>
                                <div class="toast-body">
                                    Hello, world! This is a toast message.
                                </div>
                            </div>
                            <!--end toast-->
                        </div>
                    </div>
                </div> <!-- end card body-->
            </div> <!-- end card-->

            <div class="card">
                <div class="card-header">
                    <div class="flex-grow-1">
                        <h4 class="card-title">Placement</h4>
                    </div>
                    <div class="card-action">
                        <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                        <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                    </div>
                </div>

                <div class="code-body">
                    <pre>
                        <code class="language-markup">
                            &lt;label for=&quot;selectToastPlacement&quot;&gt;Toast placement&lt;/label&gt;
                            &lt;select class=&quot;form-select mt-2&quot; id=&quot;selectToastPlacement&quot;&gt;
                                &lt;option value=&quot;&quot; selected&gt;Select a position...&lt;/option&gt;
                                &lt;option value=&quot;top-0 start-0&quot;&gt;Top left&lt;/option&gt;
                                &lt;option value=&quot;top-0 start-50 translate-middle-x&quot;&gt;Top center
                                &lt;/option&gt;
                                &lt;option value=&quot;top-0 end-0&quot;&gt;Top right&lt;/option&gt;
                                &lt;option value=&quot;top-50 start-0 translate-middle-y&quot;&gt;Middle left
                                &lt;/option&gt;
                                &lt;option value=&quot;top-50 start-50 translate-middle&quot;&gt;Middle center
                                &lt;/option&gt;
                                &lt;option value=&quot;top-50 end-0 translate-middle-y&quot;&gt;Middle right
                                &lt;/option&gt;
                                &lt;option value=&quot;bottom-0 start-0&quot;&gt;Bottom left&lt;/option&gt;
                                &lt;option value=&quot;bottom-0 start-50 translate-middle-x&quot;&gt;Bottom
                                    center&lt;/option&gt;
                                &lt;option value=&quot;bottom-0 end-0&quot;&gt;Bottom right&lt;/option&gt;
                            &lt;/select&gt;
                            
                            &lt;div aria-live=&quot;polite&quot; aria-atomic=&quot;true&quot; class=&quot;bg-light position-relative bd-example-toasts&quot; style=&quot;min-height:294px&quot;&gt;
                                &lt;div class=&quot;toast-container position-absolute p-3&quot; id=&quot;toastPlacement&quot;&gt;
                                    &lt;div class=&quot;toast show&quot;&gt;
                                        &lt;div class=&quot;toast-header&quot;&gt;
                                            &lt;img src=&quot;/images/logo-sm.png&quot; alt=&quot;brand-logo&quot; height=&quot;16&quot; class=&quot;me-1&quot; /&gt;
                                            &lt;strong class=&quot;me-auto text-body&quot;&gt;INSPINIA&lt;/strong&gt;
                                            &lt;small&gt;11 mins ago&lt;/small&gt;
                                        &lt;/div&gt;
                                        &lt;div class=&quot;toast-body&quot;&gt;
                                            Hello, world! This is a toast message.
                                        &lt;/div&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                        </code>        
                    </pre> <!-- end highlight-->
                </div> <!-- end preview code -->

                <div class="card-body">
                    <p class="text-muted">Place toasts with custom CSS as you need them. The top
                        right is often used for notifications, as is the top middle. If you’re only ever
                        going to show one toast at a time, put the positioning styles right on the
                        <code>.toast</code>.
                    </p>

                    <form>
                        <div class="mb-3">
                            <label for="selectToastPlacement">Toast placement</label>
                            <select class="form-select mt-2" id="selectToastPlacement">
                                <option value="" selected>Select a position...</option>
                                <option value="top-0 start-0">Top left</option>
                                <option value="top-0 start-50 translate-middle-x">Top center
                                </option>
                                <option value="top-0 end-0">Top right</option>
                                <option value="top-50 start-0 translate-middle-y">Middle left
                                </option>
                                <option value="top-50 start-50 translate-middle">Middle center
                                </option>
                                <option value="top-50 end-0 translate-middle-y">Middle right
                                </option>
                                <option value="bottom-0 start-0">Bottom left</option>
                                <option value="bottom-0 start-50 translate-middle-x">Bottom
                                    center</option>
                                <option value="bottom-0 end-0">Bottom right</option>
                            </select>
                        </div>
                    </form>
                    <div aria-live="polite" aria-atomic="true" class="bg-light position-relative bd-example-toasts" style="min-height:294px">
                        <div class="toast-container position-absolute p-3" id="toastPlacement">
                            <div class="toast show">
                                <div class="toast-header">
                                    <img src="/images/logo-sm.png" alt="brand-logo" height="16" class="me-1">
                                    <strong class="me-auto text-body">INSPINIA</strong>
                                    <small>11 mins ago</small>
                                </div>
                                <div class="toast-body">
                                    Hello, world! This is a toast message.
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end card body -->
            </div> <!-- end card-->
        </div> <!-- end col-->

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <div class="flex-grow-1">
                        <h4 class="card-title">Live Toast</h4>
                    </div>
                    <div class="card-action">
                        <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                        <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                    </div>
                </div>

                <div class="code-body">
                    <pre>
                        <code class="language-markup">
                            &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; id=&quot;liveToastBtn&quot;&gt;Show live toast&lt;/button&gt;

                            &lt;div class=&quot;toast-container position-fixed top-0 end-0 p-3&quot;&gt;
                                &lt;div id=&quot;liveToast&quot; class=&quot;toast&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
                                    &lt;div class=&quot;toast-header&quot;&gt;
                                        &lt;img src=&quot;/images/logo-sm.png&quot; alt=&quot;brand-logo&quot; height=&quot;16&quot; class=&quot;me-1&quot; /&gt;
                                        &lt;strong class=&quot;me-auto text-body&quot;&gt;INSPINIA&lt;/strong&gt;
                                        &lt;small&gt;11 mins ago&lt;/small&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                    &lt;/div&gt;
                                    &lt;div class=&quot;toast-body&quot;&gt;
                                        Hello, world! This is a toast message.
                                    &lt;/div&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                        </code>
                    </pre> <!-- end highlight-->
                </div> <!-- end preview code -->

                <div class="card-body">
                    <p class="text-muted">Click the button below to show a toast (positioned with our utilities in the Toop Right corner)
                        that has been hidden by default.
                    </p>

                    <button type="button" class="btn btn-primary" id="liveToastBtn">Show live toast</button>

                    <div class="toast-container position-fixed top-0 end-0 p-3">
                        <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                            <div class="toast-header">
                                <img src="/images/logo-sm.png" alt="brand-logo" height="16" class="me-1">
                                <strong class="me-auto text-body">INSPINIA</strong>
                                <small>11 mins ago</small>
                                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                            </div>
                            <div class="toast-body">
                                Hello, world! This is a toast message.
                            </div>
                        </div>
                    </div>
                </div> <!-- end card body-->
            </div> <!-- end card-->

            <div class="card">
                <div class="card-header">
                    <div class="flex-grow-1">
                        <h4 class="card-title">Translucent</h4>
                    </div>
                    <div class="card-action">
                        <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                        <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                    </div>
                </div>

                <div class="code-body">
                    <pre>
                        <code class="language-markup">
                            &lt;!-- Translucent --&gt;
                            &lt;div class=&quot;toast fade show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
                                &lt;div class=&quot;toast-header&quot;&gt;
                                    &lt;img src=&quot;/images/logo-sm.png&quot; alt=&quot;brand-logo&quot; height=&quot;16&quot; class=&quot;me-1&quot; /&gt;
                                    &lt;strong class=&quot;me-auto text-body&quot;&gt;INSPINIA&lt;/strong&gt;
                                    &lt;small&gt;11 mins ago&lt;/small&gt;
                                    &lt;button type=&quot;button&quot; class=&quot;ms-2 btn-close&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                &lt;/div&gt;
                                &lt;div class=&quot;toast-body&quot;&gt;
                                    Hello, world! This is a toast message.
                                &lt;/div&gt;
                            &lt;/div&gt;
                        </code>
                    </pre> <!-- end highlight-->
                </div> <!-- end preview code -->

                <div class="card-body">
                    <p class="text-muted">Toasts are slightly translucent, too,
                        so they blend over whatever they might appear over.
                        For browsers that support the backdrop-filter CSS property,
                        we’ll also attempt to blur the elements under a toast.</p>

                    <div class="p-3 bg-light bg-opacity-50">
                        <!-- Translucent -->
                        <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                            <div class="toast-header">
                                <img src="/images/logo-sm.png" alt="brand-logo" height="16" class="me-1">
                                <strong class="me-auto text-body">INSPINIA</strong>
                                <small>11 mins ago</small>
                                <button type="button" class="ms-2 btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                            </div>
                            <div class="toast-body">
                                Hello, world! This is a toast message.
                            </div>
                        </div>
                        <!--end toast-->
                    </div>
                </div> <!-- end card body-->
            </div> <!-- end card-->

            <div class="card">
                <div class="card-header">
                    <div class="flex-grow-1">
                        <h4 class="card-title">Stacking</h4>
                    </div>
                    <div class="card-action">
                        <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                        <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                    </div>
                </div>

                <div class="code-body">
                    <pre>
                        <code class="language-markup">
                            &lt;div aria-live=&quot;polite&quot; aria-atomic=&quot;true&quot; style=&quot;position: relative; min-height: 200px;&quot;&gt;
                                &lt;!-- Position it --&gt;
                                &lt;div class=&quot;toast-container&quot; style=&quot;position: absolute; top: 0; right: 0;&quot;&gt;

                                    &lt;!-- Then put toasts within --&gt;
                                    &lt;div class=&quot;toast fade show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
                                        &lt;div class=&quot;toast-header&quot;&gt;
                                            &lt;img src=&quot;/images/logo-sm.png&quot; alt=&quot;brand-logo&quot; height=&quot;16&quot; class=&quot;me-1&quot; /&gt;
                                            &lt;strong class=&quot;me-auto text-body&quot;&gt;INSPINIA&lt;/strong&gt;
                                            &lt;small class=&quot;text-muted&quot;&gt;just now&lt;/small&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;ms-2 btn-close&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                        &lt;/div&gt;
                                        &lt;div class=&quot;toast-body&quot;&gt;
                                            See? Just like this.
                                        &lt;/div&gt;
                                    &lt;/div&gt;
                                    &lt;!--end toast--&gt;

                                    &lt;div class=&quot;toast fade show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
                                        &lt;div class=&quot;toast-header&quot;&gt;
                                            &lt;img src=&quot;/images/logo-sm.png&quot; alt=&quot;brand-logo&quot; height=&quot;16&quot; class=&quot;me-1&quot; /&gt;
                                            &lt;strong class=&quot;me-auto text-body&quot;&gt;INSPINIA&lt;/strong&gt;
                                            &lt;small class=&quot;text-muted&quot;&gt;2 seconds ago&lt;/small&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;ms-2 btn-close&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                        &lt;/div&gt;
                                        &lt;div class=&quot;toast-body&quot;&gt;
                                            Heads up, toasts will stack automatically
                                        &lt;/div&gt;
                                    &lt;/div&gt;
                                    &lt;!--end toast--&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                        </code>
                    </pre> <!-- end highlight-->
                </div> <!-- end preview code -->

                <div class="card-body">
                    <p class="text-muted">When you have multiple toasts, we
                        default to vertiaclly stacking them in a readable manner.</p>
                    <div class="p-3">
                        <div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px;">
                            <!-- Position it -->
                            <div class="toast-container" style="position: absolute; top: 0; right: 0;">

                                <!-- Then put toasts within -->
                                <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                                    <div class="toast-header">
                                        <img src="/images/logo-sm.png" alt="brand-logo" height="16" class="me-1">
                                        <strong class="me-auto text-body">INSPINIA</strong>
                                        <small class="text-muted">just now</small>
                                        <button type="button" class="ms-2 btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                    </div>
                                    <div class="toast-body">
                                        See? Just like this.
                                    </div>
                                </div>
                                <!--end toast-->

                                <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                                    <div class="toast-header">
                                        <img src="/images/logo-sm.png" alt="brand-logo" height="16" class="me-1">
                                        <strong class="me-auto text-body">INSPINIA</strong>
                                        <small class="text-muted">2 seconds ago</small>
                                        <button type="button" class="ms-2 btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                    </div>
                                    <div class="toast-body">
                                        Heads up, toasts will stack automatically
                                    </div>
                                </div>
                                <!--end toast-->
                            </div>
                        </div>
                    </div>
                </div> <!-- end card body-->
            </div> <!-- end card-->

            <div class="card">
                <div class="card-header">
                    <div class="flex-grow-1">
                        <h4 class="card-title">Custom content</h4>
                    </div>
                    <div class="card-action">
                        <a href="#!" class="card-action-item" data-action="card-toggle"><i class="ti ti-chevron-up"></i></a>
                        <a href="#!" class="card-action-item" data-action="code-collapse"><i class="ti ti-code"></i></a>

                    </div>
                </div>

                <div class="code-body">
                    <pre>
                        <code class="language-markup">
                            &lt;div class=&quot;toast show align-items-center mb-2&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
                                &lt;div class=&quot;d-flex&quot;&gt;
                                    &lt;div class=&quot;toast-body&quot;&gt;
                                        Hello, world! This is a toast message.
                                    &lt;/div&gt;
                                    &lt;button type=&quot;button&quot; class=&quot;btn-close me-2 m-auto&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;

                            &lt;div class=&quot;toast show align-items-center text-white bg-primary border-0 mb-2&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
                                &lt;div class=&quot;d-flex&quot;&gt;
                                    &lt;div class=&quot;toast-body&quot;&gt;
                                        Hello, world! This is a toast message.
                                    &lt;/div&gt;
                                    &lt;button type=&quot;button&quot; class=&quot;btn-close btn-close-white me-2 m-auto&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;

                            &lt;div class=&quot;toast show mb-2&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
                                &lt;div class=&quot;toast-body&quot;&gt;
                                    Hello, world! This is a toast message.
                                    &lt;div class=&quot;mt-2 pt-2 border-top&quot;&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary btn-sm&quot;&gt;Take
                                            action&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary btn-sm&quot; data-bs-dismiss=&quot;toast&quot;&gt;Close&lt;/button&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                        </code>   
                    </pre> <!-- end highlight-->
                </div> <!-- end preview code -->

                <div class="card-body">

                    <div class="toast show align-items-center mb-2" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="d-flex">
                            <div class="toast-body">
                                Hello, world! This is a toast message.
                            </div>
                            <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                    </div>

                    <div class="toast show align-items-center text-white bg-primary border-0 mb-2" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="d-flex">
                            <div class="toast-body">
                                Hello, world! This is a toast message.
                            </div>
                            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                    </div>

                    <div class="toast show mb-2" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-body">
                            Hello, world! This is a toast message.
                            <div class="mt-2 pt-2 border-top">
                                <button type="button" class="btn btn-primary btn-sm">Take
                                    action</button>
                                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="toast">Close</button>
                            </div>
                        </div>
                    </div>
                </div> <!-- end card body -->
            </div> <!-- end card-->
        </div> <!-- end col-->

    </div><!-- end row-->

</div> <!-- container -->

@endsection

@section('scripts')
@endsection
