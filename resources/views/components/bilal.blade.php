<!doctype html>

<html lang="en"
      class="light-style layout-wide customizer-hide"
      dir="ltr"
      data-theme="theme-default"
      data-assets-path="assets/"
      data-template="vertical-menu-template-no-customizer"
      data-style="light">
<head>
    <meta charset="utf-8"/>
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>

    <title>Login - WeIncentivize</title>

    <meta name="description" content=""/>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico"/>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap"
        rel="stylesheet"/>

    <!-- Icons -->
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome.css"/>
    <link rel="stylesheet" href="assets/vendor/fonts/tabler-icons.css"/>
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icons.css"/>

    <!-- Core CSS -->

    <link rel="stylesheet" href="assets/vendor/css/rtl/core.css"/>
    <link rel="stylesheet" href="assets/vendor/css/rtl/theme-default.css"/>

    <link rel="stylesheet" href="assets/css/demo.css"/>

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="assets/vendor/libs/node-waves/node-waves.css"/>

    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css"/>
    <link rel="stylesheet" href="assets/vendor/libs/typeahead-js/typeahead.css"/>
    <!-- Vendor -->
    <link rel="stylesheet" href="assets/vendor/libs/@form-validation/form-validation.css"/>

    <!-- Page CSS -->
    <link rel="stylesheet" href="assets/vendor/libs/toastr/toastr.css" />
    <link rel="stylesheet" href="assets/vendor/libs/animate-css/animate.css" />
    <link rel="stylesheet" href="assets/vendor/libs/spinkit/spinkit.css" />
    <!-- Page -->

    <!-- Helpers -->
    <script src="assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->

    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="assets/js/config.js"></script>

</head>

<body>
<!-- Content -->

<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">

        <!-- SpinKit -->
        <div class="card">
            <h5 class="card-header">Loader</h5>
            <div class="card-body demo-vertical-spacing-lg demo-only-element px-12">
                <div class="row py-sm-6 gy-3 gy-sm-0">
                    <div class="col">
                        <!-- Plane -->
                        <div class="sk-plane sk-primary" style="width: 50px;height: 50px;"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SpinKit -->
        <!-- Toastr Demo -->
        <div class="card">
            <h5 class="card-header">Toastr</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6 col-xl-3">
                        <div class="mb-4">
                            <label class="form-label" for="title">Title</label>
                            <input id="title" type="text" class="form-control" placeholder="Enter a title ..." />
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="message">Message</label>
                            <textarea
                                class="form-control"
                                id="message"
                                rows="3"
                                placeholder="Enter a message ..."
                                spellcheck="false"></textarea>
                        </div>
                        <div class="mb-4">
                            <div class="form-check">
                                <input id="closeButton" class="form-check-input" type="checkbox" value="checked" />
                                <label class="form-check-label" for="closeButton">Close Button</label>
                            </div>
                            <div class="form-check">
                                <input
                                    id="addBehaviorOnToastClick"
                                    class="form-check-input"
                                    type="checkbox"
                                    value="checked" />
                                <label class="form-check-label" for="addBehaviorOnToastClick"
                                >Add behavior on toast click</label
                                >
                            </div>
                            <div class="form-check">
                                <input id="debugInfo" class="form-check-input" type="checkbox" value="checked" />
                                <label class="form-check-label" for="debugInfo">Debug</label>
                            </div>
                            <div class="form-check">
                                <input id="progressBar" class="form-check-input" type="checkbox" value="checked" />
                                <label class="form-check-label" for="progressBar">Progress Bar</label>
                            </div>
                            <div class="form-check">
                                <input id="preventDuplicates" class="form-check-input" type="checkbox" value="checked" />
                                <label class="form-check-label" for="preventDuplicates">Prevent Duplicates</label>
                            </div>
                            <div class="form-check">
                                <input id="addClear" class="form-check-input" type="checkbox" value="checked" />
                                <label class="form-check-label" for="addClear"
                                >Add button to force clearing a toast, ignoring focus</label
                                >
                            </div>
                            <div class="form-check">
                                <input id="newestOnTop" class="form-check-input" type="checkbox" value="checked" />
                                <label class="form-check-label" for="newestOnTop">Newest on top</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-3">
                        <div class="mb-4" id="toastTypeGroup">
                            <label class="form-label">Toast Type</label>
                            <div class="form-check">
                                <input
                                    type="radio"
                                    id="successRadio"
                                    name="toastsRadio"
                                    class="form-check-input"
                                    checked
                                    value="success" />
                                <label class="form-check-label" for="successRadio">Success</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" id="infoRadio" name="toastsRadio" class="form-check-input" value="info" />
                                <label class="form-check-label" for="infoRadio">Info</label>
                            </div>
                            <div class="form-check">
                                <input
                                    type="radio"
                                    id="warningRadio"
                                    name="toastsRadio"
                                    class="form-check-input"
                                    value="warning" />
                                <label class="form-check-label" for="warningRadio">Warning</label>
                            </div>
                            <div class="form-check">
                                <input
                                    type="radio"
                                    id="errorRadio"
                                    name="toastsRadio"
                                    class="form-check-input"
                                    value="error" />
                                <label class="form-check-label" for="errorRadio">Error</label>
                            </div>
                        </div>
                        <div class="mb-4" id="positionGroup">
                            <label class="form-label">Position</label>
                            <div class="form-check">
                                <input
                                    type="radio"
                                    id="topRightRadio"
                                    name="positionsRadio"
                                    class="form-check-input"
                                    value="toast-top-right" />
                                <label class="form-check-label" for="topRightRadio">Top Right</label>
                            </div>
                            <div class="form-check">
                                <input
                                    type="radio"
                                    id="bottomRightRadio"
                                    name="positionsRadio"
                                    class="form-check-input"
                                    value="toast-bottom-right" />
                                <label class="form-check-label" for="bottomRightRadio">Bottom Right</label>
                            </div>
                            <div class="form-check">
                                <input
                                    type="radio"
                                    id="bottomLeftRadio"
                                    name="positionsRadio"
                                    class="form-check-input"
                                    value="toast-bottom-left" />
                                <label class="form-check-label" for="bottomLeftRadio">Bottom Left</label>
                            </div>
                            <div class="form-check">
                                <input
                                    type="radio"
                                    id="topLeftRadio"
                                    name="positionsRadio"
                                    class="form-check-input"
                                    value="toast-top-left" />
                                <label class="form-check-label" for="topLeftRadio">Top Left</label>
                            </div>
                            <div class="form-check">
                                <input
                                    type="radio"
                                    id="topFullWidthRadio"
                                    name="positionsRadio"
                                    class="form-check-input"
                                    value="toast-top-full-width" />
                                <label class="form-check-label" for="topFullWidthRadio">Top Full Width</label>
                            </div>
                            <div class="form-check">
                                <input
                                    type="radio"
                                    id="bottomFullWidthRadio"
                                    name="positionsRadio"
                                    class="form-check-input"
                                    value="toast-bottom-full-width" />
                                <label class="form-check-label" for="bottomFullWidthRadio">Bottom Full Width</label>
                            </div>
                            <div class="form-check">
                                <input
                                    type="radio"
                                    id="topCenterRadio"
                                    name="positionsRadio"
                                    class="form-check-input"
                                    value="toast-top-center" />
                                <label class="form-check-label" for="topCenterRadio">Top Center</label>
                            </div>
                            <div class="form-check">
                                <input
                                    type="radio"
                                    id="bottomCenterRadio"
                                    name="positionsRadio"
                                    class="form-check-input"
                                    value="toast-bottom-center" />
                                <label class="form-check-label" for="bottomCenterRadio">Bottom Center</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-3">
                        <div class="mb-4">
                            <label class="form-label" for="showEasing">Show Easing</label>
                            <input
                                id="showEasing"
                                type="text"
                                class="form-control"
                                placeholder="swing, linear"
                                value="swing" />
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="hideEasing">Hide Easing</label>
                            <input
                                id="hideEasing"
                                type="text"
                                class="form-control"
                                placeholder="swing, linear"
                                value="linear" />
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="showMethod">Show Method</label>
                            <input
                                id="showMethod"
                                type="text"
                                class="form-control"
                                placeholder="show, fadeIn, slideDown"
                                value="fadeIn" />
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="hideMethod">Hide Method</label>
                            <input
                                id="hideMethod"
                                type="text"
                                class="form-control"
                                placeholder="hide, fadeOut, slideUp"
                                value="fadeOut" />
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-3">
                        <div class="mb-4 kt-form__grou">
                            <label class="form-label" for="showDuration">Show Duration</label>
                            <input id="showDuration" type="text" class="form-control" placeholder="ms" value="300" />
                        </div>
                        <div class="mb-4 kt-form__grou">
                            <label class="form-label" for="hideDuration">Hide Duration</label>
                            <input id="hideDuration" type="text" class="form-control" placeholder="ms" value="1000" />
                        </div>
                        <div class="mb-4 kt-form__grou">
                            <label class="form-label" for="timeOut">Time out</label>
                            <input id="timeOut" type="text" class="form-control" placeholder="ms" value="5000" />
                        </div>
                        <div class="mb-4 kt-form__grou">
                            <label class="form-label" for="extendedTimeOut">Extended time out</label>
                            <input id="extendedTimeOut" class="form-control" type="text" placeholder="ms" value="1000" />
                        </div>
                    </div>
                </div>
                <hr />
                <div class="d-flex gap-3 flex-wrap">
                    <a href="javascript:;" class="btn btn-primary" id="showtoast">Show Toast</a>
                    <a href="javascript:;" class="btn btn-danger" id="cleartoasts">Clear Toasts</a>
                    <a href="javascript:;" class="btn btn-danger" id="clearlasttoast">Clear Last Toast</a>
                </div>
            </div>
        </div>
        <!--/ Toastr Demo -->
    </div>
    <!-- / Content -->

    <div class="content-backdrop fade"></div>
</div>
<!-- Content wrapper -->

<!-- / Content -->

<!-- Core JS -->
<!-- buiassets/vendor/js/core.js -->

<script src="assets/vendor/libs/jquery/jquery.js"></script>
<script src="assets/vendor/libs/popper/popper.js"></script>
<script src="assets/vendor/js/bootstrap.js"></script>
<script src="assets/vendor/libs/node-waves/node-waves.js"></script>
<script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="assets/vendor/libs/hammer/hammer.js"></script>
<script src="assets/vendor/libs/i18n/i18n.js"></script>
<script src="assets/vendor/libs/typeahead-js/typeahead.js"></script>
<script src="assets/vendor/js/menu.js"></script>

<script src="assets/vendor/libs/toastr/toastr.js"></script>
<script src="assets/js/ui-toasts.js"></script>


<!-- endbuild -->

<!-- Main JS -->
<script src="assets/js/main.js"></script>

<!-- Page JS -->
</body>
</html>
