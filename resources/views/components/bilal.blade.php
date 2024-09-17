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

    <style>
        #loader1 {
            background-color: #2c3e50;
            width: 100px;
            height: 100px;
            position: absolute;
            top: calc(50% - 50px);
            left: calc(50% - 50px);
            transition: all 0.2s ease;
            -webkit-animation: page-loader 2s infinite;
            animation: page-loader 2s infinite;
        }

        @-webkit-keyframes page-loader {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }

        @keyframes page-loader {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }
    </style>

</head>

<body>
<!-- Content -->

<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">

        <div id="loader1"></div>

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
