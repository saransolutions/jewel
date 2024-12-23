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
    <!-- Page Content-->
    <div class="container">
      <!-- Gallery + details-->
      <div class="bg-light box-shadow-lg rounded-lg px-4 py-3 mb-5">
        <div class="px-lg-3">
          <div class="row">
            <!-- Product gallery-->
            <div class="col-lg-7 pr-lg-0 pt-lg-4">
              <div class="cz-product-gallery">
                <div class="cz-preview order-sm-2">
                  <div class="cz-preview-item active" id="first"><img class="cz-image-zoom" src="static/img/shop/single/gallery/01.jpg" data-zoom="static/img/shop/single/gallery/01.jpg" alt="Product image">
                    <div class="cz-image-zoom-pane"></div>
                  </div>
                  <div class="cz-preview-item" id="second"><img class="cz-image-zoom" src="static/img/shop/single/gallery/02.jpg" data-zoom="static/img/shop/single/gallery/02.jpg" alt="Product image">
                    <div class="cz-image-zoom-pane"></div>
                  </div>
                  <div class="cz-preview-item" id="third"><img class="cz-image-zoom" src="static/img/shop/single/gallery/03.jpg" data-zoom="static/img/shop/single/gallery/03.jpg" alt="Product image">
                    <div class="cz-image-zoom-pane"></div>
                  </div>
                  <div class="cz-preview-item" id="fourth"><img class="cz-image-zoom" src="static/img/shop/single/gallery/04.jpg" data-zoom="static/img/shop/single/gallery/04.jpg" alt="Product image">
                    <div class="cz-image-zoom-pane"></div>
                  </div>
                </div>
                <div class="cz-thumblist order-sm-1"><a class="cz-thumblist-item active" href="#first"><img src="static/img/shop/single/gallery/th01.jpg" alt="Product thumb"></a><a class="cz-thumblist-item" href="#second"><img src="static/img/shop/single/gallery/th02.jpg" alt="Product thumb"></a><a class="cz-thumblist-item" href="#third"><img src="static/img/shop/single/gallery/th03.jpg" alt="Product thumb"></a><a class="cz-thumblist-item" href="#fourth"><img src="static/img/shop/single/gallery/th04.jpg" alt="Product thumb"></a><a class="cz-thumblist-item video-item" href="https://www.youtube.com/watch?v=1vrXpMLLK14">
                    <div class="cz-thumblist-item-text"><i class="czi-video"></i>Video</div></a></div>
              </div>
            </div>
            <!-- Product details-->
            <div class="col-lg-5 pt-4 pt-lg-0">
              <div class="product-details ml-auto pb-3">
                <div class="d-flex justify-content-between align-items-center mb-2"><a href="#reviews" data-scroll>
                    <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                    </div><span class="d-inline-block font-size-sm text-body align-middle mt-1 ml-1">74 Reviews</span></a>
                  <button class="btn-wishlist mr-0 mr-lg-n3" type="button" data-toggle="tooltip" title="Add to wishlist"><i class="czi-heart"></i></button>
                </div>
                <div class="mb-3"><span class="h3 font-weight-normal text-accent mr-1">$18.<small>99</small></span>
                  <del class="text-muted font-size-lg mr-3">$25.<small>00</small></del><span class="badge badge-danger badge-shadow align-middle mt-n2">Sale</span>
                </div>
                <div class="font-size-sm mb-4"><span class="text-heading font-weight-medium mr-1">Color:</span><span class="text-muted" id="colorOption">Red/Dark blue/White</span></div>
                <div class="position-relative mr-n4 mb-3">
                  <div class="custom-control custom-option custom-control-inline mb-2">
                    <input class="custom-control-input" type="radio" name="color" id="color1" data-label="colorOption" value="Red/Dark blue/White" checked>
                    <label class="custom-option-label rounded-circle" for="color1"><span class="custom-option-color rounded-circle" style="background-image: url(static/img/shop/single/color-opt-1.png)"></span></label>
                  </div>
                  <div class="custom-control custom-option custom-control-inline mb-2">
                    <input class="custom-control-input" type="radio" name="color" id="color2" data-label="colorOption" value="Beige/White/Dark grey">
                    <label class="custom-option-label rounded-circle" for="color2"><span class="custom-option-color rounded-circle" style="background-image: url(static/img/shop/single/color-opt-2.png)"></span></label>
                  </div>
                  <div class="custom-control custom-option custom-control-inline mb-2">
                    <input class="custom-control-input" type="radio" name="color" id="color3" data-label="colorOption" value="Dark grey/White/Orange">
                    <label class="custom-option-label rounded-circle" for="color3"><span class="custom-option-color rounded-circle" style="background-image: url(static/img/shop/single/color-opt-3.png)"></span></label>
                  </div>
                  <div class="product-badge product-available mt-n1"><i class="czi-security-check"></i>Product available</div>
                </div>
                <form class="mb-grid-gutter" method="post">
                  <div class="form-group">
                    <div class="d-flex justify-content-between align-items-center pb-1">
                      <label class="font-weight-medium" for="product-size">Size:</label><a class="nav-link-style font-size-sm" href="#size-chart" data-toggle="modal"><i class="czi-ruler lead align-middle mr-1 mt-n1"></i>Size guide</a>
                    </div>
                    <select class="custom-select" required id="product-size">
                      <option value="">Select size</option>
                      <option value="xs">XS</option>
                      <option value="s">S</option>
                      <option value="m">M</option>
                      <option value="l">L</option>
                      <option value="xl">XL</option>
                    </select>
                  </div>
                  <div class="form-group d-flex align-items-center">
                    <select class="custom-select mr-3" style="width: 5rem;">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                    </select>
                    <button class="btn btn-primary btn-shadow btn-block" type="submit"><i class="czi-cart font-size-lg mr-2"></i>Add to Cart</button>
                  </div>
                </form>
                <!-- Product panels-->
                <div class="accordion mb-4" id="productPanels">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="accordion-heading"><a href="#productInfo" role="button" data-toggle="collapse" aria-expanded="true" aria-controls="productInfo"><i class="czi-announcement text-muted font-size-lg align-middle mt-n1 mr-2"></i>Product info<span class="accordion-indicator"></span></a></h3>
                    </div>
                    <div class="collapse show" id="productInfo" data-parent="#productPanels">
                      <div class="card-body">
                        <h6 class="font-size-sm mb-2">Composition</h6>
                        <ul class="font-size-sm pl-4">
                          <li>Elastic rib: Cotton 95%, Elastane 5%</li>
                          <li>Lining: Cotton 100%</li>
                          <li>Cotton 80%, Polyester 20%</li>
                        </ul>
                        <h6 class="font-size-sm mb-2">Art. No.</h6>
                        <ul class="font-size-sm pl-4 mb-0">
                          <li>183260098</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header">
                      <h3 class="accordion-heading"><a class="collapsed" href="#shippingOptions" role="button" data-toggle="collapse" aria-expanded="true" aria-controls="shippingOptions"><i class="czi-delivery text-muted lead align-middle mt-n1 mr-2"></i>Shipping options<span class="accordion-indicator"></span></a></h3>
                    </div>
                    <div class="collapse" id="shippingOptions" data-parent="#productPanels">
                      <div class="card-body font-size-sm">
                        <div class="d-flex justify-content-between border-bottom pb-2">
                          <div>
                            <div class="font-weight-semibold text-dark">Courier</div>
                            <div class="font-size-sm text-muted">2 - 4 days</div>
                          </div>
                          <div>$26.50</div>
                        </div>
                        <div class="d-flex justify-content-between border-bottom py-2">
                          <div>
                            <div class="font-weight-semibold text-dark">Local shipping</div>
                            <div class="font-size-sm text-muted">up to one week</div>
                          </div>
                          <div>$10.00</div>
                        </div>
                        <div class="d-flex justify-content-between border-bottom py-2">
                          <div>
                            <div class="font-weight-semibold text-dark">Flat rate</div>
                            <div class="font-size-sm text-muted">5 - 7 days</div>
                          </div>
                          <div>$33.85</div>
                        </div>
                        <div class="d-flex justify-content-between border-bottom py-2">
                          <div>
                            <div class="font-weight-semibold text-dark">UPS ground shipping</div>
                            <div class="font-size-sm text-muted">4 - 6 days</div>
                          </div>
                          <div>$18.00</div>
                        </div>
                        <div class="d-flex justify-content-between pt-2">
                          <div>
                            <div class="font-weight-semibold text-dark">Local pickup from store</div>
                            <div class="font-size-sm text-muted">&mdash;</div>
                          </div>
                          <div>$0.00</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- <div class="card">
                    <div class="card-header">
                      <h3 class="accordion-heading"><a class="collapsed" href="#localStore" role="button" data-toggle="collapse" aria-expanded="true" aria-controls="localStore"><i class="czi-location text-muted font-size-lg align-middle mt-n1 mr-2"></i>Find in local store<span class="accordion-indicator"></span></a></h3>
                    </div>
                    <div class="collapse" id="localStore" data-parent="#productPanels">
                      <div class="card-body">
                        <select class="custom-select">
                          <option value>Select your country</option>
                          <option value="Argentina">Argentina</option>
                          <option value="Belgium">Belgium</option>
                          <option value="France">France</option>
                          <option value="Germany">Germany</option>
                          <option value="Spain">Spain</option>
                          <option value="UK">United Kingdom</option>
                          <option value="USA">USA</option>
                        </select>
                      </div>
                    </div>
                  </div> -->
                </div>
                <!-- Sharing-->
                <?php product_sharing_links();?>
                <!-- sharing-->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Product description section 1-->
      <!-- <div class="row align-items-center py-md-3">
        <div class="col-lg-5 col-md-6 offset-lg-1 order-md-2"><img class="d-block rounded-lg" src="static/img/shop/single/prod-img.jpg" alt="Image"></div>
        <div class="col-lg-4 col-md-6 offset-lg-1 py-4 order-md-1">
          <h2 class="h3 mb-4 pb-2">High quality materials</h2>
          <h6 class="font-size-base mb-3">Soft cotton blend</h6>
          <p class="font-size-sm text-muted pb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit.</p>
          <h6 class="font-size-base mb-3">Washing instructions</h6>
          <ul class="nav nav-tabs mb-3" role="tablist">
            <li class="nav-item"><a class="nav-link active" href="#wash" data-toggle="tab" role="tab"><i class="czi-wash font-size-xl"></i></a></li>
            <li class="nav-item"><a class="nav-link" href="#bleach" data-toggle="tab" role="tab"><i class="czi-bleach font-size-xl"></i></a></li>
            <li class="nav-item"><a class="nav-link" href="#hand-wash" data-toggle="tab" role="tab"><i class="czi-hand-wash font-size-xl"></i></a></li>
            <li class="nav-item"><a class="nav-link" href="#ironing" data-toggle="tab" role="tab"><i class="czi-ironing font-size-xl"></i></a></li>
            <li class="nav-item"><a class="nav-link" href="#dry-clean" data-toggle="tab" role="tab"><i class="czi-dry-clean font-size-xl"></i></a></li>
          </ul>
          <div class="tab-content text-muted font-size-sm">
            <div class="tab-pane fade show active" id="wash" role="tabpanel">30° mild machine washing</div>
            <div class="tab-pane fade" id="bleach" role="tabpanel">Do not use any bleach</div>
            <div class="tab-pane fade" id="hand-wash" role="tabpanel">Hand wash normal (30°)</div>
            <div class="tab-pane fade" id="ironing" role="tabpanel">Low temperature ironing</div>
            <div class="tab-pane fade" id="dry-clean" role="tabpanel">Do not dry clean</div>
          </div>
        </div>
      </div> -->
      <!-- Product description section 2-->
      <!-- <div class="row align-items-center py-4 py-lg-5">
        <div class="col-lg-5 col-md-6 offset-lg-1"><img class="d-block rounded-lg" src="static/img/shop/single/prod-map.png" alt="Map"></div>
        <div class="col-lg-4 col-md-6 offset-lg-1 py-4">
          <h2 class="h3 mb-4 pb-2">Where is it made?</h2>
          <h6 class="font-size-base mb-3">Apparel Manufacturer, Ltd.</h6>
          <p class="font-size-sm text-muted pb-2">​Sam Tower, 6 Road No 32, Dhaka 1875, Bangladesh</p>
          <div class="d-flex mb-2">
            <div class="mr-4 pr-2 text-center">
              <h4 class="h2 text-accent mb-1">3258</h4>
              <p>Workers</p>
            </div>
            <div class="mr-4 pr-2 text-center">
              <h4 class="h2 text-accent mb-1">43%</h4>
              <p>Female</p>
            </div>
            <div class="text-center">
              <h4 class="h2 text-accent mb-1">57%</h4>
              <p>Male</p>
            </div>
          </div>
          <h6 class="font-size-base mb-3">Factory information</h6>
          <p class="font-size-sm text-muted pb-md-2">​Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
        </div>
      </div> -->
    </div>
    <!-- Reviews commented out-->
    
    <!-- Reviews commented out-->
    <!-- Product carousel (Style with)-->
    <!-- Product carousel (You may also like)-->
    <div class="container py-5 my-md-3">
      <h2 class="h3 text-center pb-4">You may also like</h2>
      <div class="cz-carousel cz-controls-static cz-controls-outside">
        <div class="cz-carousel-inner" data-carousel-options="{&quot;items&quot;: 2, &quot;controls&quot;: true, &quot;nav&quot;: false, &quot;autoHeight&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;500&quot;:{&quot;items&quot;:2, &quot;gutter&quot;: 18},&quot;768&quot;:{&quot;items&quot;:3, &quot;gutter&quot;: 20}, &quot;1100&quot;:{&quot;items&quot;:4, &quot;gutter&quot;: 30}}}">
          <!-- Product-->
          <div>
            <div class="card product-card card-static">
              <?php add_to_wishlist_button(); ?>
              <a class="card-img-top d-block overflow-hidden" href="#"><img src="static/img/shop/catalog/20.jpg" alt="Product"></a>
              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Men’s Hoodie</a>
                <h3 class="product-title font-size-sm"><a href="#">Block-colored Hooded Top</a></h3>
                <div class="d-flex justify-content-between">
                  <div class="product-price"><span class="text-accent">$24.<small>99</small></span></div>
                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div>
            <div class="card product-card card-static">
              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="#"><img src="static/img/shop/catalog/21.jpg" alt="Product"></a>
              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Men’s Hoodie</a>
                <h3 class="product-title font-size-sm"><a href="#">Block-colored Hooded Top</a></h3>
                <div class="d-flex justify-content-between">
                  <div class="product-price text-accent">$26.<small>99</small></div>
                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div>
            <div class="card product-card card-static">
              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="#"><img src="static/img/shop/catalog/22.jpg" alt="Product"></a>
              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Men’s Hoodie</a>
                <h3 class="product-title font-size-sm"><a href="#">Block-colored Hooded Top</a></h3>
                <div class="d-flex justify-content-between">
                  <div class="product-price text-accent">$24.<small>99</small></div>
                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i><i class="sr-star czi-star"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div>
            <div class="card product-card card-static">
              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="#"><img src="static/img/shop/catalog/23.jpg" alt="Product"></a>
              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Mens Hoodie</a>
                <h3 class="product-title font-size-sm"><a href="#">Block-colored Hooded Top</a></h3>
                <div class="d-flex justify-content-between">
                  <div class="product-price text-accent">$24.<small>99</small></div>
                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div>
            <div class="card product-card card-static">
              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="#"><img src="static/img/shop/catalog/24.jpg" alt="Product"></a>
              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Men’s Hoodie</a>
                <h3 class="product-title font-size-sm"><a href="#">Block-colored Hooded Top</a></h3>
                <div class="d-flex justify-content-between">
                  <div class="product-price text-accent">$25.<small>00</small></div>
                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i><i class="sr-star czi-star"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer-->
    <!-- Footer-->
    <?php common_footer($page); ?>
    <!-- Toolbar for handheld devices-->
    <div class="cz-handheld-toolbar">
      <div class="d-table table-fixed w-100"><a class="d-table-cell cz-handheld-toolbar-item" href="account-wishlist.html"><span class="cz-handheld-toolbar-icon"><i class="czi-heart"></i></span><span class="cz-handheld-toolbar-label">Wishlist</span></a><a class="d-table-cell cz-handheld-toolbar-item" href="#navbarCollapse" data-toggle="collapse" onclick="window.scrollTo(0, 0)"><span class="cz-handheld-toolbar-icon"><i class="czi-menu"></i></span><span class="cz-handheld-toolbar-label">Menu</span></a><a class="d-table-cell cz-handheld-toolbar-item" href="checkout.php?cart"><span class="cz-handheld-toolbar-icon"><i class="czi-cart"></i><span class="badge badge-primary badge-pill ml-1">4</span></span><span class="cz-handheld-toolbar-label">$265.00</span></a>
      </div>
    </div>
    <!-- Back To Top Button--><a class="btn-scroll-top" href="#top" data-scroll><span class="btn-scroll-top-tooltip text-muted font-size-sm mr-2">Top</span><i class="btn-scroll-top-icon czi-arrow-up">   </i></a>
    <!-- Vendor scrits: js libraries and plugins-->
    
    <script src="static/vendor/lightgallery.js/dist/js/lightgallery.min.js"></script>
    <script src="static/vendor/lg-video.js/dist/lg-video.min.js"></script>
    <?php common_js_scripts(); ?>
  </body>
<?php } ?>