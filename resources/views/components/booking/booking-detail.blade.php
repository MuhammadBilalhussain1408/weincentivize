@extends('layouts.master')
@section('content')
<style>
    .form-label, .col-form-label {
        color: #000000;
        font-size: 18px;
        font-weight: 500;
    }
    .form-control {
        font-size: 19px;
        font-weight: 600;
        padding: 11px 10px 11px 10px;
    }
    .form-control {
        font-size: 17px;
        font-weight: 600;
        padding: 7px 10px 7px 10px;
        color: black;
    }
</style>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

                @include('include.menu')

            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                @include('include.nav')

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="app-ecommerce">
                            <!-- Add Product -->
                            <div
                                class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-6 row-gap-4">
                                <div class="d-flex flex-column justify-content-center">
                                    <h4 class="card-tile mb-0 fw-bold text-uppercase">Appointment Details</h4>
                                    <p class="mb-0 fw-medium" style="color: #058283;">Abdul Rehman Appointment Details</p>
                                </div>
                                <div class="d-flex align-content-center flex-wrap gap-4">
                                    <div class="btn-group" id="dropdown-icon-demo">
                                        <button
                                            type="button"
                                            class="btn btn-green dropdown-toggle"
                                            data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="ti ti-menu-2 ti-xs me-1"></i> Action
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"
                                                ><i class="ti ti-chevron-right scaleX-n1-rtl"></i>Action</a
                                                >
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"
                                                ><i class="ti ti-chevron-right scaleX-n1-rtl"></i>Another action</a
                                                >
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"
                                                ><i class="ti ti-chevron-right scaleX-n1-rtl"></i>Something else here</a
                                                >
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider" />
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"
                                                ><i class="ti ti-chevron-right scaleX-n1-rtl"></i>Separated link</a
                                                >
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- First column-->
                                <div class="col-12 col-lg-12">
                                    <!-- Product Information -->
                                    <div class="card mb-6">
                                        <div class="card-body row">
                                            <div class="mb-6 col-md-4">
                                                <label class="form-label" for="ecommerce-product-name">Appointment ID</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="ecommerce-product-name"
                                                    placeholder=""
                                                    name="productTitle"
                                                    aria-label="Product title" />
                                            </div>
                                            <div class="mb-6 col-md-4">
                                                <label class="form-label" for="ecommerce-product-name">Date</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="ecommerce-product-name"
                                                    placeholder=""
                                                    name="productTitle"
                                                    aria-label="Product title" />
                                            </div>
                                            <div class="mb-6 col-md-4">
                                                <label class="form-label" for="ecommerce-product-name">Time</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="ecommerce-product-name"
                                                    placeholder=""
                                                    name="productTitle"
                                                    aria-label="Product title" />
                                            </div>
                                            <div class="mb-6 col-md-4">
                                                <label class="form-label" for="ecommerce-product-name">Customer Type</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="ecommerce-product-name"
                                                    placeholder=""
                                                    name="productTitle"
                                                    aria-label="Product title" />
                                            </div>
                                            <div class="mb-6 col-md-4">
                                                <label class="form-label" for="ecommerce-product-name">First Name</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="ecommerce-product-name"
                                                    placeholder=""
                                                    name="productTitle"
                                                    aria-label="Product title" />
                                            </div>
                                            <div class="mb-6 col-md-4">
                                                <label class="form-label" for="ecommerce-product-name">Last Name</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="ecommerce-product-name"
                                                    placeholder=""
                                                    name="productTitle"
                                                    aria-label="Product title" />
                                            </div>
                                            <div class="mb-6 col-md-4">
                                                <label class="form-label" for="ecommerce-product-name">Email</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="ecommerce-product-name"
                                                    placeholder=""
                                                    name="productTitle"
                                                    aria-label="Product title" />
                                            </div>
                                            <div class="mb-6 col-md-4">
                                                <label class="form-label" for="ecommerce-product-name">Contact</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="ecommerce-product-name"
                                                    placeholder=""
                                                    name="productTitle"
                                                    aria-label="Product title" />
                                            </div>
                                            <div class="mb-6 col-md-4">
                                                <label class="form-label" for="ecommerce-product-name">Service Type</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="ecommerce-product-name"
                                                    placeholder=""
                                                    name="productTitle"
                                                    aria-label="Product title" />
                                            </div>
                                            <div class="mb-6 col-md-4">
                                                <label class="form-label" for="ecommerce-product-name">Zip Code</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="ecommerce-product-name"
                                                    placeholder=""
                                                    name="productTitle"
                                                    aria-label="Product title" />
                                            </div>
                                            <div class="mb-6 col-md-4">
                                                <label class="form-label" for="ecommerce-product-name">Country</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="ecommerce-product-name"
                                                    placeholder=""
                                                    name="productTitle"
                                                    aria-label="Product title" />
                                            </div>
                                            <div class="mb-6 col-md-4">
                                                <label class="form-label" for="ecommerce-product-name">State</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="ecommerce-product-name"
                                                    placeholder=""
                                                    name="productTitle"
                                                    aria-label="Product title" />
                                            </div>
                                            <div class="mb-6 col-md-6">
                                                <label class="form-label" for="ecommerce-product-name">Current Website or Social Media Page</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="ecommerce-product-name"
                                                    placeholder=""
                                                    name="productTitle"
                                                    aria-label="Product title" />
                                            </div>
                                            <div class="mb-6 col-md-6">
                                                <label class="form-label" for="ecommerce-product-name">Name Of Business or Brand</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="ecommerce-product-name"
                                                    placeholder=""
                                                    name="productTitle"
                                                    aria-label="Product title" />
                                            </div>
                                            <div class="mb-6 col-md-12">
                                                <label class="form-label" for="ecommerce-product-name">Address</label>
                                                <textarea id="autosize-demo" rows="3" class="form-control"></textarea>
                                            </div>
                                            <div class="mb-6 col-md-6">
                                                <label class="form-label" for="ecommerce-product-name">Are You Looking To</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="ecommerce-product-name"
                                                    placeholder=""
                                                    name="productTitle"
                                                    aria-label="Product title" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Product Information -->
                                </div>
                                <!-- /First column -->

                            </div>
                        </div>
                    </div>
                    <!-- / Content -->

                </div>
                <!-- Content wrapper -->

            </div>

            <!-- / Layout page -->

        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>

        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->

@endsection
