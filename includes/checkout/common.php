<?php
function head($page)
{
    echo "<head>";
    common_head($page);
    echo "</head>";
}

function page_path($page)
{
?>
    <div class="page-title-overlap bg-dark pt-4">
        <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
            <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                        <li class="breadcrumb-item"><a class="text-nowrap" href="index.html"><i class="czi-home"></i>Home</a></li>
                        <li class="breadcrumb-item text-nowrap"><a href="shop-grid-ls.html">Shop</a>
                        </li>
                        <li class="breadcrumb-item text-nowrap active" aria-current="page"><?php echo ucfirst($page["module"]);?></li>
                    </ol>
                </nav>
            </div>
            <div class="order-lg-1 pr-lg-4 text-center text-lg-left">
                <h1 class="h3 text-light mb-0"><?php echo ucfirst($page["title"]);?></h1>
            </div>
        </div>
    </div>
<?php
}


function workflow_steps($step_no)
{
    $step1 = "";
    $step2 = "";
    $step3 = "";
    $step4 = "";
    $step5 = "";
    if ($step_no == 1) {
        $step1 = " active";
    } elseif ($step_no == 2) {
        $step1 = " active";
        $step2 = " active current";
    } elseif ($step_no == 3) {
        $step1 = " active";
        $step2 = " active";
        $step3 = " active current";
    } elseif ($step_no == 4) {
        $step1 = " active";
        $step2 = " active";
        $step3 = " active";
        $step4 = " active current";
    } elseif ($step_no == 5) {
        $step1 = " active";
        $step2 = " active";
        $step3 = " active";
        $step4 = " active";
        $step5 = " active current";
    }
?>
    <!-- workflow-steps -->
    <div class="steps steps-light pt-2 pb-3 mb-5">
        <a class="step-item<?php echo $step1; ?>" href="checkout.php?cart">
            <div class="step-progress"><span class="step-count">1</span></div>
            <div class="step-label"><i class="czi-cart"></i>Cart</div>
        </a><a class="step-item<?php echo $step2; ?>" href="checkout.php?details">
            <div class="step-progress"><span class="step-count">2</span></div>
            <div class="step-label"><i class="czi-user-circle"></i>Your details</div>
        </a><a class="step-item<?php echo $step3; ?>" href="checkout.php?shopping">
            <div class="step-progress"><span class="step-count">3</span></div>
            <div class="step-label"><i class="czi-package"></i>Shipping</div>
        </a><a class="step-item<?php echo $step4; ?>" href="checkout.php?pay">
            <div class="step-progress"><span class="step-count">4</span></div>
            <div class="step-label"><i class="czi-card"></i>Payment</div>
        </a><a class="step-item<?php echo $step5; ?>" href="checkout.php?review">
            <div class="step-progress"><span class="step-count">5</span></div>
            <div class="step-label"><i class="czi-check-circle"></i>Review</div>
        </a>
    </div>
    <!-- workflow-steps -->
<?php
}

function order_summary()
{
?>
    <aside class="col-lg-4 pt-4 pt-lg-0">
        <div class="cz-sidebar-static rounded-lg box-shadow-lg ml-lg-auto">
            <div class="widget mb-3">
                <h2 class="widget-title text-center">Order summary</h2>
                <div class="media align-items-center pb-2 border-bottom"><a class="d-block mr-2" href="shop-single-v1.html"><img width="64" src="static/img/shop/cart/widget/01.jpg" alt="Product" /></a>
                    <div class="media-body">
                        <h6 class="widget-product-title"><a href="shop-single-v1.html">Women Colorblock Sneakers</a></h6>
                        <div class="widget-product-meta"><span class="text-accent mr-2">$150.<small>00</small></span><span class="text-muted">x 1</span></div>
                    </div>
                </div>
                <div class="media align-items-center py-2 border-bottom"><a class="d-block mr-2" href="shop-single-v1.html"><img width="64" src="static/img/shop/cart/widget/02.jpg" alt="Product" /></a>
                    <div class="media-body">
                        <h6 class="widget-product-title"><a href="shop-single-v1.html">TH Jeans City Backpack</a></h6>
                        <div class="widget-product-meta"><span class="text-accent mr-2">$79.<small>50</small></span><span class="text-muted">x 1</span></div>
                    </div>
                </div>
                <div class="media align-items-center py-2 border-bottom"><a class="d-block mr-2" href="shop-single-v1.html"><img width="64" src="static/img/shop/cart/widget/03.jpg" alt="Product" /></a>
                    <div class="media-body">
                        <h6 class="widget-product-title"><a href="shop-single-v1.html">3-Color Sun Stash Hat</a></h6>
                        <div class="widget-product-meta"><span class="text-accent mr-2">$22.<small>50</small></span><span class="text-muted">x 1</span></div>
                    </div>
                </div>
                <div class="media align-items-center py-2 border-bottom"><a class="d-block mr-2" href="shop-single-v1.html"><img width="64" src="static/img/shop/cart/widget/04.jpg" alt="Product" /></a>
                    <div class="media-body">
                        <h6 class="widget-product-title"><a href="shop-single-v1.html">Cotton Polo Regular Fit</a></h6>
                        <div class="widget-product-meta"><span class="text-accent mr-2">$9.<small>00</small></span><span class="text-muted">x 1</span></div>
                    </div>
                </div>
            </div>
            <ul class="list-unstyled font-size-sm pb-2 border-bottom">
                <li class="d-flex justify-content-between align-items-center"><span class="mr-2">Subtotal:</span><span class="text-right">$265.<small>00</small></span></li>
                <li class="d-flex justify-content-between align-items-center"><span class="mr-2">Shipping:</span><span class="text-right">—</span></li>
                <li class="d-flex justify-content-between align-items-center"><span class="mr-2">Taxes:</span><span class="text-right">$9.<small>50</small></span></li>
                <li class="d-flex justify-content-between align-items-center"><span class="mr-2">Discount:</span><span class="text-right">—</span></li>
            </ul>
            <h3 class="font-weight-normal text-center my-4">$274.<small>50</small></h3>
            <!-- <form class="needs-validation" method="post" novalidate>
                <div class="form-group">
                    <input class="form-control" type="text" placeholder="Promo code" required>
                    <div class="invalid-feedback">Please provide promo code.</div>
                </div>
                <button class="btn btn-outline-primary btn-block" type="submit">Apply promo code</button>
            </form> -->
        </div>
    </aside>
<?php
}

?>