<?php

function customer_info()
{
?>
    <div class="d-sm-flex justify-content-between align-items-center bg-secondary p-4 rounded-lg mb-grid-gutter">
        <div class="media align-items-center">
            <div class="img-thumbnail rounded-circle position-relative" style="width: 6.375rem;"><span class="badge badge-warning" data-toggle="tooltip" title="Reward points">384</span><img class="rounded-circle" src="static/img/shop/account/avatar.jpg" alt="Susan Gardner"></div>
            <div class="media-body pl-3">
                <h3 class="font-size-base mb-0">Susan Gardner</h3><span class="text-accent font-size-sm">s.gardner@example.com</span>
            </div>
        </div><a class="btn btn-light btn-sm btn-shadow mt-3 mt-sm-0" href="account-profile.html"><i class="czi-edit mr-2"></i>Edit profile</a>
    </div>
<?php
}

function shipping_address()
{
?>
    <h2 class="h6 pt-1 pb-3 mb-3 border-bottom">Shipping address</h2>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label for="checkout-fn">First Name</label>
                <input class="form-control" type="text" id="checkout-fn">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label for="checkout-ln">Last Name</label>
                <input class="form-control" type="text" id="checkout-ln">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label for="checkout-email">E-mail Address</label>
                <input class="form-control" type="email" id="checkout-email">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label for="checkout-phone">Phone Number</label>
                <input class="form-control" type="text" id="checkout-phone">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label for="checkout-company">Company</label>
                <input class="form-control" type="text" id="checkout-company">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label for="checkout-country">Country</label>
                <select class="form-control custom-select" id="checkout-country">
                    <option>Choose country</option>
                    <option>Australia</option>
                    <option>Canada</option>
                    <option>France</option>
                    <option>Germany</option>
                    <option>Switzerland</option>
                    <option>USA</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label for="checkout-city">Country</label>
                <select class="form-control custom-select" id="checkout-city">
                    <option>Choose city</option>
                    <option>Amsterdam</option>
                    <option>Berlin</option>
                    <option>Geneve</option>
                    <option>New York</option>
                    <option>Paris</option>
                </select>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label for="checkout-zip">ZIP Code</label>
                <input class="form-control" type="text" id="checkout-zip">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label for="checkout-address-1">Address 1</label>
                <input class="form-control" type="text" id="checkout-address-1">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label for="checkout-address-2">Address 2</label>
                <input class="form-control" type="text" id="checkout-address-2">
            </div>
        </div>
    </div>
<?php
}

function page_content($page)
{
?>
    <div class="container pb-5 mb-2 mb-md-4">
        <div class="row">
            <section class="col-lg-8">
                <!-- Steps-->
                <?php workflow_steps($page["workflow_step_no"]); ?>
                <!-- steps -->
                <!-- customer info -->
                <?php customer_info(); ?>
                <!-- customer info -->
                <!-- Shipping address-->
                <?php shipping_address(); ?>
                <h6 class="mb-3 py-3 border-bottom">Billing address</h6>
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" checked id="same-address">
                    <label class="custom-control-label" for="same-address">Same as shipping address</label>
                </div>
                <!-- Navigation (desktop)-->
                <div class="d-none d-lg-flex pt-4 mt-3">
                    <div class="w-50 pr-3"><a class="btn btn-secondary btn-block" href="checkout.php?cart"><i class="czi-arrow-left mt-sm-0 mr-1"></i><span class="d-none d-sm-inline">Back to Cart</span><span class="d-inline d-sm-none">Back</span></a></div>
                    <div class="w-50 pl-2"><a class="btn btn-primary btn-block" href="checkout.php?shipping"><span class="d-none d-sm-inline">Proceed to Shipping</span>
                </a></div>
                </div>
                <!-- shipping address-->
            </section>
            <!-- Sidebar-->
            <?php order_summary(); ?>
            <!-- sidebar -->
        </div>
        <!-- Navigation (mobile)-->
        <div class="row d-lg-none">
            <div class="col-lg-8">
                <div class="d-flex pt-4 mt-3">
                    <div class="w-50 pr-3"><a class="btn btn-secondary btn-block" href="checkout.php?cart"><i class="czi-arrow-left mt-sm-0 mr-1"></i><span class="d-none d-sm-inline">Back to Cart</span><span class="d-inline d-sm-none">Back</span></a></div>
                    <div class="w-50 pl-2"><a class="btn btn-primary btn-block" href="checkout.php?shipping"><span class="d-none d-sm-inline">Proceed to Shipping</span>
                    <span class="d-inline d-sm-none">Next</span><i class="czi-arrow-right mt-sm-0 ml-1"></i></a></div>
                </div>
            </div>
        </div>
    </div>
<?php
}
function details($page)
{
?>
    <?php head($page); ?>
    <body class="toolbar-enabled">
        <!-- Sign in / sign up modal-->
        <!-- top navbar -->
        <?php top_navbar(); ?>
        <!-- top navbar -->

        <!-- Navbar-->
        <!-- Navbar 3 Level (Light)-->
        <?php main_menu(); ?>
        <!-- Navbar-->
        <!-- Page Path -->
        <?php page_path($page); ?>
        <!-- Page Path -->

        <!-- Page Content-->
        <?php page_content($page); ?>
        <!-- page content -->
        <!-- Footer-->
        <!-- Footer-->
        <?php common_footer($page); ?>
        <!-- Footer-->
        <!-- Toolbar for handheld devices-->
        <div class="cz-handheld-toolbar">
            <div class="d-table table-fixed w-100"><a class="d-table-cell cz-handheld-toolbar-item" href="account-wishlist.html"><span class="cz-handheld-toolbar-icon"><i class="czi-heart"></i></span><span class="cz-handheld-toolbar-label">Wishlist</span></a><a class="d-table-cell cz-handheld-toolbar-item" href="#navbarCollapse" data-toggle="collapse" onclick="window.scrollTo(0, 0)"><span class="cz-handheld-toolbar-icon"><i class="czi-menu"></i></span><span class="cz-handheld-toolbar-label">Menu</span></a><a class="d-table-cell cz-handheld-toolbar-item" href="checkout.php?cart"><span class="cz-handheld-toolbar-icon"><i class="czi-cart"></i><span class="badge badge-primary badge-pill ml-1">4</span></span><span class="cz-handheld-toolbar-label">$265.00</span></a>
            </div>
        </div>
        <!-- Back To Top Button--><a class="btn-scroll-top" href="#top" data-scroll><span class="btn-scroll-top-tooltip text-muted font-size-sm mr-2">Top</span><i class="btn-scroll-top-icon czi-arrow-up"> </i></a>
        <!-- Vendor scrits: js libraries and plugins-->
        <!--common js scripts -->
        <?php common_js_scripts(); ?>
        <!--common js scripts -->
    </body>
<?php
}
?>