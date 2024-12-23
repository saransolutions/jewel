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
            <h2 class="h6 pb-3 mb-2">Choose payment method</h2>
          <div class="accordion mb-2" id="payment-method" role="tablist">
            <div class="card">
              <div class="card-header" role="tab">
                <h3 class="accordion-heading"><a href="#card" data-toggle="collapse"><i class="czi-card font-size-lg mr-2 mt-n1 align-middle"></i>Pay with Credit Card<span class="accordion-indicator"></span></a></h3>
              </div>
              <div class="collapse show" id="card" data-parent="#payment-method" role="tabpanel">
                <div class="card-body">
                  <p class="font-size-sm">We accept following credit cards:&nbsp;&nbsp;<img class="d-inline-block align-middle" src="static/img/cards.png" style="width: 187px;" alt="Cerdit Cards"></p>
                  <div class="card-wrapper"></div>
                  <form class="interactive-credit-card row">
                    <div class="form-group col-sm-6">
                      <input class="form-control" type="text" name="number" placeholder="Card Number" required>
                    </div>
                    <div class="form-group col-sm-6">
                      <input class="form-control" type="text" name="name" placeholder="Full Name" required>
                    </div>
                    <div class="form-group col-sm-3">
                      <input class="form-control" type="text" name="expiry" placeholder="MM/YY" required>
                    </div>
                    <div class="form-group col-sm-3">
                      <input class="form-control" type="text" name="cvc" placeholder="CVC" required>
                    </div>
                    <!-- <div class="col-sm-6">
                      <button class="btn btn-outline-primary btn-block mt-0" type="submit">Submit</button>
                    </div> -->
                  </form>
                </div>
              </div>
            </div>
            <!-- paypal -->
            <!-- <div class="card">
              <div class="card-header" role="tab">
                <h3 class="accordion-heading"><a class="collapsed" href="#paypal" data-toggle="collapse"><i class="czi-paypal mr-2 align-middle"></i>Pay with PayPal<span class="accordion-indicator"></span></a></h3>
              </div>
              <div class="collapse" id="paypal" data-parent="#payment-method" role="tabpanel">
                <div class="card-body font-size-sm">
                  <p><span class='font-weight-medium'>PayPal</span> - the safer, easier way to pay</p>
                  <form class="row" method="post">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <input class="form-control" type="email" placeholder="E-mail" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <input class="form-control" type="password" placeholder="Password" required>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="d-flex flex-wrap justify-content-between align-items-center"><a class="nav-link-style" href="#">Forgot password?</a>
                        <button class="btn btn-primary" type="submit">Log In</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div> -->
            <!-- paypal -->
            <!-- redeem points -->
            <!-- <div class="card">
              <div class="card-header" role="tab">
                <h3 class="accordion-heading"><a class="collapsed" href="#points" data-toggle="collapse"><i class="czi-gift mr-2"></i>Redeem Reward Points<span class="accordion-indicator"></span></a></h3>
              </div>
              <div class="collapse" id="points" data-parent="#payment-method" role="tabpanel">
                <div class="card-body">
                  <p>You currently have<span class="font-weight-medium">&nbsp;384</span>&nbsp;Reward Points to spend.</p>
                  <div class="custom-control custom-checkbox d-block">
                    <input class="custom-control-input" type="checkbox" id="use_points">
                    <label class="custom-control-label" for="use_points">Use my Reward Points to pay for this order.</label>
                  </div>
                </div>
              </div>
            </div> -->
            <!-- redeem points -->
          </div>
            <!-- Navigation (desktop)-->
            <div class="d-none d-lg-flex pt-4">
                <div class="w-50 pr-3"><a class="btn btn-secondary btn-block" href="checkout.php?pay"><i class="czi-arrow-left mt-sm-0 mr-1"></i><span class="d-none d-sm-inline">Back to Adresses</span><span class="d-inline d-sm-none">Back</span></a></div>
                <div class="w-50 pl-2"><a class="btn btn-primary btn-block" href="checkout.php?review"><span class="d-none d-sm-inline">Proceed to Review</span></a></div>
            </div>
        </section>
        <!-- Sidebar-->
        <?php order_summary(); ?>
        <!-- sidebar -->
    </div>
<?php
}

function pay($page)
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
                        <div class="w-50 pl-2"><a class="btn btn-primary btn-block" href="checkout.php?review"><span class="d-none d-sm-inline">Proceed to Review</span><span class="d-inline d-sm-none">Next</span><i class="czi-arrow-right mt-sm-0 ml-1"></i></a></div>
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
        <script src="static/vendor/card/dist/card.js"></script>
        <?php common_js_scripts(); ?>
        <!--common js scripts -->
    </body>
<?php
}
?>