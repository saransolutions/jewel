<?php
function common_footer($page)
{ ?>
    <!-- Footer-->
    <footer class="bg-dark pt-5">
        <!-- footer_navigation_subscribtion commented out -->
         <!-- footer_navigation_subscribtion commented out -->
        <div class="pt-5 bg-darker">
            <div class="container">
                <div class="row pb-3">
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="media"><i class="czi-rocket text-primary" style="font-size: 2.25rem;"></i>
                            <div class="media-body pl-3">
                                <h6 class="font-size-base text-light mb-1">Fast and free delivery</h6>
                                <p class="mb-0 font-size-ms text-light opacity-50">Free delivery for all orders over $200</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="media"><i class="czi-currency-exchange text-primary" style="font-size: 2.25rem;"></i>
                            <div class="media-body pl-3">
                                <h6 class="font-size-base text-light mb-1">Fast Delivery</h6>
                                <p class="mb-0 font-size-ms text-light opacity-50">We deliver the products within 30 days</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="media"><i class="czi-support text-primary" style="font-size: 2.25rem;"></i>
                            <div class="media-body pl-3">
                                <h6 class="font-size-base text-light mb-1">Customer support</h6>
                                <p class="mb-0 font-size-ms text-light opacity-50">Friendly customer support</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="media"><i class="czi-card text-primary" style="font-size: 2.25rem;"></i>
                            <div class="media-body pl-3">
                                <h6 class="font-size-base text-light mb-1">Secure online payment</h6>
                                <p class="mb-0 font-size-ms text-light opacity-50">We possess SSL / Secure сertificate</p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="hr-light pb-4 mb-3">
                <div class="row pb-2">
                    <div class="col-md-6 text-center text-md-left mb-4">
                        <div class="text-nowrap mb-4">
                            <a class="d-inline-block align-middle mt-n1 mr-3" href="#"><img class="d-block" width="117" src="static/img/footer-logo-light.png" alt="Saran Solutions" /></a>
                            <!-- <div class="btn-group dropdown disable-autohide">
                                <button class="btn btn-outline-light border-light btn-sm dropdown-toggle px-2" type="button" data-toggle="dropdown"><img class="mr-2" width="20" src="static/img/flags/en.png" alt="English" />Eng / $
                                </button>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-item">
                                        <select class="custom-select custom-select-sm">
                                            <option value="usd">$ USD</option>
                                            <option value="eur">€ EUR</option>
                                            <option value="ukp">£ UKP</option>
                                            <option value="jpy">¥ JPY</option>
                                        </select>
                                    </li>
                                    <li><a class="dropdown-item pb-1" href="#"><img class="mr-2" width="20" src="static/img/flags/fr.png" alt="Français" />Français</a></li>
                                    <li><a class="dropdown-item pb-1" href="#"><img class="mr-2" width="20" src="static/img/flags/de.png" alt="Deutsch" />Deutsch</a></li>
                                    <li><a class="dropdown-item" href="#"><img class="mr-2" width="20" src="static/img/flags/it.png" alt="Italiano" />Italiano</a></li>
                                </ul>
                            </div> -->
                        </div>
                        <!-- <div class="widget widget-links widget-light">
                            <ul class="widget-list d-flex flex-wrap justify-content-center justify-content-md-start">
                                <li class="widget-list-item mr-4"><a class="widget-list-link" href="#">Outlets</a></li>
                                <li class="widget-list-item mr-4"><a class="widget-list-link" href="#">Affiliates</a></li>
                                <li class="widget-list-item mr-4"><a class="widget-list-link" href="#">Support</a></li>
                                <li class="widget-list-item mr-4"><a class="widget-list-link" href="#">Privacy</a></li>
                                <li class="widget-list-item mr-4"><a class="widget-list-link" href="#">Terms of use</a></li>
                            </ul>
                        </div> -->
                    </div>
                    <div class="col-md-6 text-center text-md-right mb-4">
                        <div class="mb-3">
                            <!-- <a class="social-btn sb-light sb-twitter ml-2 mb-2" href="#"><i class="czi-twitter"></i></a> -->
                            <a class="social-btn sb-light sb-facebook ml-2 mb-2" href="#"><i class="czi-facebook"></i></a>
                            <!-- <a class="social-btn sb-light sb-instagram ml-2 mb-2" href="#"><i class="czi-instagram"></i></a>
                            <a class="social-btn sb-light sb-pinterest ml-2 mb-2" href="#"><i class="czi-pinterest"></i></a>
                            <a class="social-btn sb-light sb-youtube ml-2 mb-2" href="#"><i class="czi-youtube"></i></a> -->
                        </div>
                        <!-- <img class="d-inline-block" width="187" src="static/img/cards-alt.png" alt="Payment methods" /> -->
                    </div>
                </div>
                <div class="pb-4 font-size-xs text-light opacity-50 text-center text-md-left">© All rights reserved. Made by <a class="text-light" href="https://saransolutions.ch/" target="_blank" rel="noopener"><?php echo MAIN_TITLE ?></a></div>
            </div>
        </div>
    </footer>
    <!-- Footer-->
<?php }

function footer_navigation_subscribtion()
{
?>
    <!-- footer_navigation_subscribtion-->
    <div class="container">
        <div class="row pb-2">
            <div class="col-md-4 col-sm-6">
                <div class="widget widget-links widget-light pb-2 mb-4">
                    <h3 class="widget-title text-light">Shop departments</h3>
                    <ul class="widget-list">
                        <li class="widget-list-item"><a class="widget-list-link" href="#">Sneakers &amp; Athletic</a></li>
                        <li class="widget-list-item"><a class="widget-list-link" href="#">Athletic Apparel</a></li>
                        <li class="widget-list-item"><a class="widget-list-link" href="#">Sandals</a></li>
                        <li class="widget-list-item"><a class="widget-list-link" href="#">Jeans</a></li>
                        <li class="widget-list-item"><a class="widget-list-link" href="#">Shirts &amp; Tops</a></li>
                        <li class="widget-list-item"><a class="widget-list-link" href="#">Shorts</a></li>
                        <li class="widget-list-item"><a class="widget-list-link" href="#">T-Shirts</a></li>
                        <li class="widget-list-item"><a class="widget-list-link" href="#">Swimwear</a></li>
                        <li class="widget-list-item"><a class="widget-list-link" href="#">Clogs &amp; Mules</a></li>
                        <li class="widget-list-item"><a class="widget-list-link" href="#">Bags &amp; Wallets</a></li>
                        <li class="widget-list-item"><a class="widget-list-link" href="#">Accessories</a></li>
                        <li class="widget-list-item"><a class="widget-list-link" href="#">Sunglasses &amp; Eyewear</a></li>
                        <li class="widget-list-item"><a class="widget-list-link" href="#">Watches</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="widget widget-links widget-light pb-2 mb-4">
                    <h3 class="widget-title text-light">Account &amp; shipping info</h3>
                    <ul class="widget-list">
                        <li class="widget-list-item"><a class="widget-list-link" href="#">Your account</a></li>
                        <li class="widget-list-item"><a class="widget-list-link" href="#">Shipping rates &amp; policies</a></li>
                        <li class="widget-list-item"><a class="widget-list-link" href="#">Refunds &amp; replacements</a></li>
                        <li class="widget-list-item"><a class="widget-list-link" href="#">Order tracking</a></li>
                        <li class="widget-list-item"><a class="widget-list-link" href="#">Delivery info</a></li>
                        <li class="widget-list-item"><a class="widget-list-link" href="#">Taxes &amp; fees</a></li>
                    </ul>
                </div>
                <div class="widget widget-links widget-light pb-2 mb-4">
                    <h3 class="widget-title text-light">About us</h3>
                    <ul class="widget-list">
                        <li class="widget-list-item"><a class="widget-list-link" href="#">About company</a></li>
                        <li class="widget-list-item"><a class="widget-list-link" href="#">Our team</a></li>
                        <li class="widget-list-item"><a class="widget-list-link" href="#">Careers</a></li>
                        <li class="widget-list-item"><a class="widget-list-link" href="#">News</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="widget pb-2 mb-4">
                    <h3 class="widget-title text-light pb-1">Stay informed</h3>
                    <form class="cz-subscribe-form validate" action="https://studio.us12.list-manage.com/subscribe/post?u=c7103e2c981361a6639545bd5&amp;amp;id=29ca296126" method="post" name="mc-embedded-subscribe-form" target="_blank" novalidate>
                        <div class="input-group input-group-overlay flex-nowrap">
                            <div class="input-group-prepend-overlay"><span class="input-group-text text-muted font-size-base"><i class="czi-mail"></i></span></div>
                            <input class="form-control prepended-form-control" type="email" name="EMAIL" placeholder="Your email" required>
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit" name="subscribe">Subscribe*</button>
                            </div>
                        </div>
                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                        <div style="position: absolute; left: -5000px;" aria-hidden="true">
                            <input class="cz-subscribe-form-antispam" type="text" name="b_c7103e2c981361a6639545bd5_29ca296126" tabindex="-1">
                        </div><small class="form-text text-light opacity-50">*Subscribe to our newsletter to receive early discount offers, updates and new products info.</small>
                        <div class="subscribe-status"></div>
                    </form>
                </div>
                <div class="widget pb-2 mb-4">
                    <h3 class="widget-title text-light pb-1">Download our app</h3>
                    <div class="d-flex flex-wrap">
                        <div class="mr-2 mb-2"><a class="btn-market btn-apple" href="#" role="button"><span class="btn-market-subtitle">Download on the</span><span class="btn-market-title">App Store</span></a></div>
                        <div class="mb-2"><a class="btn-market btn-google" href="#" role="button"><span class="btn-market-subtitle">Download on the</span><span class="btn-market-title">Google Play</span></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer_navigation_subscribtion-->
<?php
}
?>