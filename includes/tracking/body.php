<?php 
function head($page)
{
    echo "<head>";
    common_head($page);
    echo "</head>";
}

function body($page)
{
?>
<body class="toolbar-enabled">
    <?php common_header($page); ?>
    <!-- Page Title (Dark)-->
    <div class="bg-dark py-4">
      <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
        <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
              <li class="breadcrumb-item"><a class="text-nowrap" href="index.html"><i class="czi-home"></i>Home</a></li>
              <li class="breadcrumb-item text-nowrap"><a href="#">Shop</a>
              </li>
              <li class="breadcrumb-item text-nowrap active" aria-current="page">Order tracking</li>
            </ol>
          </nav>
        </div>
        <div class="order-lg-1 pr-lg-4 text-center text-lg-left">
          <h1 class="h3 text-light mb-0">Tracking order: <span class="h4 font-weight-normal text-light">34VB5540K83</span></h1>
        </div>
      </div>
    </div>
    <!-- Page Title (Dark)-->
    <!-- Page Content-->
    <div class="container py-5 mb-2 mb-md-3">
      <!-- Details-->
      <div class="row mb-4">
        <div class="col-sm-4 mb-2">
          <div class="bg-secondary p-4 text-center rounded-lg"><span class="font-weight-medium text-dark mr-2">Shipped via:</span>UPS Ground</div>
        </div>
        <div class="col-sm-4 mb-2">
          <div class="bg-secondary p-4 text-center rounded-lg"><span class="font-weight-medium text-dark mr-2">Status:</span>Processing order</div>
        </div>
        <div class="col-sm-4 mb-2">
          <div class="bg-secondary p-4 text-center rounded-lg"><span class="font-weight-medium text-dark mr-2">Expected date:</span>October 15, 2019</div>
        </div>
      </div>
      <!-- Progress-->
      <div class="card border-0 box-shadow-lg">
        <div class="card-body pb-2">
          <ul class="nav nav-tabs media-tabs nav-justified">
            <li class="nav-item">
              <div class="nav-link completed">
                <div class="media align-items-center">
                  <div class="media-tab-media mr-3"><i class="czi-bag"></i></div>
                  <div class="media-body">
                    <div class="media-tab-subtitle text-muted font-size-xs mb-1">First step</div>
                    <h6 class="media-tab-title text-nowrap mb-0">Order placed</h6>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item">
              <div class="nav-link active">
                <div class="media align-items-center">
                  <div class="media-tab-media mr-3"><i class="czi-settings"></i></div>
                  <div class="media-body">
                    <div class="media-tab-subtitle text-muted font-size-xs mb-1">Second step</div>
                    <h6 class="media-tab-title text-nowrap mb-0">Processing order</h6>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item">
              <div class="nav-link">
                <div class="media align-items-center">
                  <div class="media-tab-media mr-3"><i class="czi-star"></i></div>
                  <div class="media-body">
                    <div class="media-tab-subtitle text-muted font-size-xs mb-1">Third step</div>
                    <h6 class="media-tab-title text-nowrap mb-0">Quality check</h6>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item">
              <div class="nav-link">
                <div class="media align-items-center">
                  <div class="media-tab-media mr-3"><i class="czi-package"></i></div>
                  <div class="media-body">
                    <div class="media-tab-subtitle text-muted font-size-xs mb-1">Fourth step</div>
                    <h6 class="media-tab-title text-nowrap mb-0">Product dispatched</h6>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <!-- Footer-->
      <div class="d-sm-flex flex-wrap justify-content-between align-items-center text-center pt-4">
        <div class="custom-control custom-checkbox mt-2 mr-3">
          <input class="custom-control-input" type="checkbox" id="notify-me" checked>
          <label class="custom-control-label" for="notify-me">Notify me when order is delivered</label>
        </div><a class="btn btn-primary btn-sm mt-2" href="#order-details" data-toggle="modal">View Order Details</a>
      </div>
    </div>
    <?php section_banners(); ?>
    <!-- Page Content-->
    <!-- Footer-->
    <?php common_footer($page); ?>
    <!-- Toolbar for handheld devices-->
    <div class="cz-handheld-toolbar">
      <div class="d-table table-fixed w-100"><a class="d-table-cell cz-handheld-toolbar-item" href="account-wishlist.html"><span class="cz-handheld-toolbar-icon"><i class="czi-heart"></i></span><span class="cz-handheld-toolbar-label">Wishlist</span></a><a class="d-table-cell cz-handheld-toolbar-item" href="#navbarCollapse" data-toggle="collapse" onclick="window.scrollTo(0, 0)"><span class="cz-handheld-toolbar-icon"><i class="czi-menu"></i></span><span class="cz-handheld-toolbar-label">Menu</span></a><a class="d-table-cell cz-handheld-toolbar-item" href="checkout.php?cart"><span class="cz-handheld-toolbar-icon"><i class="czi-cart"></i><span class="badge badge-primary badge-pill ml-1">4</span></span><span class="cz-handheld-toolbar-label">$265.00</span></a>
      </div>
    </div>
    <!-- Back To Top Button--><a class="btn-scroll-top" href="#top" data-scroll><span class="btn-scroll-top-tooltip text-muted font-size-sm mr-2">Top</span><i class="btn-scroll-top-icon czi-arrow-up">   </i></a>
    <!-- Vendor scrits: js libraries and plugins-->
    <?php common_js_scripts(); ?>
  </body>
<?php } ?>