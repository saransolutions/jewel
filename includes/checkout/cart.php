<?php

function page_content($page)
{
?>
    <div class="row">
    <section class="col-lg-8">
          <div class="d-flex justify-content-between align-items-center pt-3 pb-2 pb-sm-5 mt-1">
            <h2 class="h6 text-light mb-0">Products</h2><a class="btn btn-outline-primary btn-sm pl-2" href="shop-grid-ls.html"><i class="czi-arrow-left mr-2"></i>Continue shopping</a>
          </div>
          <!-- Item-->
          <div class="d-sm-flex justify-content-between align-items-center my-4 pb-3 border-bottom">
            <div class="media media-ie-fix d-block d-sm-flex align-items-center text-center text-sm-left"><a class="d-inline-block mx-auto mr-sm-4" href="shop-single-v1.html" style="width: 10rem;"><img src="static/img/shop/cart/01.jpg" alt="Product"></a>
              <div class="media-body pt-2">
                <h3 class="product-title font-size-base mb-2"><a href="shop-single-v1.html">Women Colorblock Sneakers</a></h3>
                <div class="font-size-sm"><span class="text-muted mr-2">Size:</span>8.5</div>
                <div class="font-size-sm"><span class="text-muted mr-2">Color:</span>White &amp; Blue</div>
                <div class="font-size-lg text-accent pt-2">$154.<small>00</small></div>
              </div>
            </div>
            <div class="pt-2 pt-sm-0 pl-sm-3 mx-auto mx-sm-0 text-center text-sm-left" style="max-width: 9rem;">
              <div class="form-group mb-0">
                <label class="font-weight-medium" for="quantity1">Quantity</label>
                <input class="form-control" type="number" id="quantity1" value="1">
              </div>
              <button class="btn btn-link px-0 text-danger" type="button"><i class="czi-close-circle mr-2"></i><span class="font-size-sm">Remove</span></button>
            </div>
          </div>
          <!-- Item-->
          <div class="d-sm-flex justify-content-between align-items-center my-4 pb-3 border-bottom">
            <div class="media media-ie-fix d-block d-sm-flex align-items-center text-center text-sm-left"><a class="d-inline-block mx-auto mr-sm-4" href="shop-single-v1.html" style="width: 10rem;"><img src="static/img/shop/cart/02.jpg" alt="Product"></a>
              <div class="media-body pt-2">
                <h3 class="product-title font-size-base mb-2"><a href="shop-single-v1.html">TH Jeans City Backpack</a></h3>
                <div class="font-size-sm"><span class="text-muted mr-2">Brand:</span>Tommy Hilfiger</div>
                <div class="font-size-sm"><span class="text-muted mr-2">Color:</span>Khaki</div>
                <div class="font-size-lg text-accent pt-2">$79.<small>50</small></div>
              </div>
            </div>
            <div class="pt-2 pt-sm-0 pl-sm-3 mx-auto mx-sm-0 text-center text-sm-left" style="max-width: 9rem;">
              <div class="form-group mb-0">
                <label class="font-weight-medium" for="quantity2">Quantity</label>
                <input class="form-control" type="number" id="quantity2" value="1">
              </div>
              <button class="btn btn-link px-0 text-danger" type="button"><i class="czi-close-circle mr-2"></i><span class="font-size-sm">Remove</span></button>
            </div>
          </div>
          <!-- Item-->
          <div class="d-sm-flex justify-content-between align-items-center my-4 pb-3 border-bottom">
            <div class="media media-ie-fix d-block d-sm-flex align-items-center text-center text-sm-left"><a class="d-inline-block mx-auto mr-sm-4" href="shop-single-v1.html" style="width: 10rem;"><img src="static/img/shop/cart/03.jpg" alt="Product"></a>
              <div class="media-body pt-2">
                <h3 class="product-title font-size-base mb-2"><a href="shop-single-v1.html">3-Color Sun Stash Hat</a></h3>
                <div class="font-size-sm"><span class="text-muted mr-2">Brand:</span>The North Face</div>
                <div class="font-size-sm"><span class="text-muted mr-2">Color:</span>Pink / Beige / Dark blue</div>
                <div class="font-size-lg text-accent pt-2">$22.<small>50</small></div>
              </div>
            </div>
            <div class="pt-2 pt-sm-0 pl-sm-3 mx-auto mx-sm-0 text-center text-sm-left" style="max-width: 9rem;">
              <div class="form-group mb-0">
                <label class="font-weight-medium" for="quantity3">Quantity</label>
                <input class="form-control" type="number" id="quantity3" value="1">
              </div>
              <button class="btn btn-link px-0 text-danger" type="button"><i class="czi-close-circle mr-2"></i><span class="font-size-sm">Remove</span></button>
            </div>
          </div>
          <!-- Item-->
          <div class="d-sm-flex justify-content-between align-items-center my-4 pb-3 border-bottom">
            <div class="media media-ie-fix d-block d-sm-flex align-items-center text-center text-sm-left"><a class="d-inline-block mx-auto mr-sm-4" href="shop-single-v1.html" style="width: 10rem;"><img src="static/img/shop/cart/04.jpg" alt="Product"></a>
              <div class="media-body pt-2">
                <h3 class="product-title font-size-base mb-2"><a href="shop-single-v1.html">Cotton Polo Regular Fit</a></h3>
                <div class="font-size-sm"><span class="text-muted mr-2">Size:</span>42</div>
                <div class="font-size-sm"><span class="text-muted mr-2">Color:</span>Light blue</div>
                <div class="font-size-lg text-accent pt-2">$9.<small>00</small></div>
              </div>
            </div>
            <div class="pt-2 pt-sm-0 pl-sm-3 mx-auto mx-sm-0 text-center text-sm-left" style="max-width: 9rem;">
              <div class="form-group mb-0">
                <label class="font-weight-medium" for="quantity4">Quantity</label>
                <input class="form-control" type="number" id="quantity4" value="1">
              </div>
              <button class="btn btn-link px-0 text-danger" type="button"><i class="czi-close-circle mr-2"></i><span class="font-size-sm">Remove</span></button>
            </div>
          </div>
        </section>
        <!-- Sidebar-->
        <?php subtotal(); ?>
        <!-- sidebar -->
    </div>
<?php
}


function subtotal(){
    ?>
    <aside class="col-lg-4 pt-4 pt-lg-0">
          <div class="cz-sidebar-static rounded-lg box-shadow-lg ml-lg-auto">
            <div class="text-center mb-4 pb-3 border-bottom">
              <h2 class="h6 mb-3 pb-1">Subtotal</h2>
              <h3 class="font-weight-normal">$265.<small>00</small></h3>
            </div>
            <a class="btn btn-primary btn-shadow btn-block mt-4" href="checkout.php?details"><i class="czi-card font-size-lg mr-2"></i>Proceed to Checkout</a>
          </div>
        </aside>
    <?php
}

function cart($page)
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
                        <div class="w-50 pr-3"><a class="btn btn-secondary btn-block" href="dashboard.php"><i class="czi-arrow-left mt-sm-0 mr-1"></i><span class="d-none d-sm-inline">Back to Adresses</span><span class="d-inline d-sm-none">Back</span></a></div>
                        <div class="w-50 pl-2"><a class="btn btn-primary btn-block" href="checkout.php?details"><span class="d-none d-sm-inline">Proceed to Checkout</span>
                        <span class="d-inline d-sm-none">Next</span><i class="czi-arrow-right mt-sm-0 ml-1"></i></a></div>
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
            <div class="d-table table-fixed w-100"><a class="d-table-cell cz-handheld-toolbar-item" href="account-wishlist.html"><span class="cz-handheld-toolbar-icon"><i class="czi-heart"></i></span><span class="cz-handheld-toolbar-label">Wishlist</span></a><a class="d-table-cell cz-handheld-toolbar-item" href="#navbarCollapse" data-toggle="collapse" onclick="window.scrollTo(0, 0)"><span class="cz-handheld-toolbar-icon"><i class="czi-menu"></i></span><span class="cz-handheld-toolbar-label">Menu</span></a><a class="d-table-cell cz-handheld-toolbar-item" href="shop-cart.html"><span class="cz-handheld-toolbar-icon"><i class="czi-cart"></i><span class="badge badge-primary badge-pill ml-1">4</span></span><span class="cz-handheld-toolbar-label">$265.00</span></a>
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