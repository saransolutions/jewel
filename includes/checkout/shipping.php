<?php

function page_content($page)
{
?>
    <div class="row">
        <section class="col-lg-8">
            <!-- Steps -->
            <?php workflow_steps($page["workflow_step_no"]); ?>
            <!-- steps -->
            <!-- Shipping methods table-->
            <h2 class="h6 pb-3 mb-2">Choose shipping method</h2>
            <div class="table-responsive">
                <table class="table table-hover font-size-sm border-bottom">
                    <thead>
                        <tr>
                            <th class="align-middle"></th>
                            <th class="align-middle">Shipping method</th>
                            <th class="align-middle">Delivery time</th>
                            <th class="align-middle">Handling fee</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="custom-control custom-radio mb-4">
                                    <input class="custom-control-input" type="radio" id="courier" name="shipping-method" checked>
                                    <label class="custom-control-label" for="courier"></label>
                                </div>
                            </td>
                            <td class="align-middle"><span class="text-dark font-weight-medium">Courier</span><br><span class="text-muted">All addresses (default zone), United States &amp; Canada</span></td>
                            <td class="align-middle">2 - 4 days</td>
                            <td class="align-middle">$26.50</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="custom-control custom-radio mb-4">
                                    <input class="custom-control-input" type="radio" id="local" name="shipping-method">
                                    <label class="custom-control-label" for="local"></label>
                                </div>
                            </td>
                            <td class="align-middle"><span class="text-dark font-weight-medium">Local Shipping</span><br><span class="text-muted">All addresses (default zone), United States &amp; Canada</span></td>
                            <td class="align-middle">up to one week</td>
                            <td class="align-middle">$10.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- Navigation (desktop)-->
            <div class="d-none d-lg-flex pt-4">
                <div class="w-50 pr-3"><a class="btn btn-secondary btn-block" href="checkout.php?details"><i class="czi-arrow-left mt-sm-0 mr-1"></i><span class="d-none d-sm-inline">Back to Adresses</span><span class="d-inline d-sm-none">Back</span></a></div>
                <div class="w-50 pl-2"><a class="btn btn-primary btn-block" href="checkout.php?pay"><span class="d-none d-sm-inline">Proceed to Payment</span></a></div>
            </div>
        </section>
        <!-- Sidebar-->
        <?php order_summary(); ?>
        <!-- sidebar -->
    </div>
<?php
}

function shipping($page)
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
        <!-- Page Title-->
        <!-- Page Path -->
        <?php page_path($page); ?>
        <!-- Page Path -->
        <!-- Page Content-->
        <div class="container pb-5 mb-2 mb-md-4">
            <?php page_content($page); ?>
            <!-- Navigation (mobile)-->
            <div class="row d-lg-none">
                <div class="col-lg-8">
                    <div class="d-flex pt-4 mt-3">
                        <div class="w-50 pr-3"><a class="btn btn-secondary btn-block" href="checkout.php?details"><i class="czi-arrow-left mt-sm-0 mr-1"></i><span class="d-none d-sm-inline">Back to Adresses</span><span class="d-inline d-sm-none">Back</span></a></div>
                        <div class="w-50 pl-2"><a class="btn btn-primary btn-block" href="checkout.php?pay"><span class="d-none d-sm-inline">Proceed to Payment</span><span class="d-inline d-sm-none">Next</span><i class="czi-arrow-right mt-sm-0 ml-1"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
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