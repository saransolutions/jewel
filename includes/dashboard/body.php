<?php

function head($page)
{
    echo "<head>";
    common_head($page);
    echo "</head>";
}

function popular_categories()
{
?>
    <!-- popular categories -->
    <section class="container position-relative pt-3 pt-lg-0 pb-5 mt-lg-n10" style="z-index: 10;">
        <div class="row">
            <div class="col-xl-8 col-lg-9">
                <div class="card border-0 box-shadow-lg">
                    <div class="card-body px-3 pt-grid-gutter pb-0">
                        <div class="row no-gutters pl-1">
                            <div class="col-sm-4 px-2 mb-grid-gutter">
                                <a class="d-block text-center text-decoration-none mr-1" href="shop-grid-ls.html">
                                    <img class="d-block rounded mb-3" src="static/img/home/categories/cat-sm01.jpg" alt="Men">
                                    <h3 class="font-size-base pt-1 mb-0">Fancy Items</h3>
                                </a>
                            </div>
                            <div class="col-sm-4 px-2 mb-grid-gutter">
                                <a class="d-block text-center text-decoration-none mr-1" href="shop-grid-ls.html">
                                    <img class="d-block rounded mb-3" src="static/img/home/categories/cat-sm02.jpg" alt="Women">
                                    <h3 class="font-size-base pt-1 mb-0">Artificial Jewellery</h3>
                                </a>
                            </div>
                            <div class="col-sm-4 px-2 mb-grid-gutter">
                                <a class="d-block text-center text-decoration-none mr-1" href="shop-grid-ls.html">
                                    <img class="d-block rounded mb-3" src="static/img/home/categories/cat-sm03.jpg" alt="Kids">
                                    <h3 class="font-size-base pt-1 mb-0">Pooja Items</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- popular categories -->
<?php }

function section_feature_category_hoodie()
{
?>
    <section class="container mb-4 pb-3 pb-sm-0 mb-sm-5">
        <div class="row">
            <!-- Banner with controls-->
            <div class="col-md-5">
                <div class="d-flex flex-column h-100 overflow-hidden rounded-lg" style="background-color: #e2e9ef;">
                    <div class="d-flex justify-content-between px-grid-gutter py-grid-gutter">
                        <div>
                            <h3 class="mb-1">Hoodie day</h3><a class="font-size-md" href="shop-grid-ls.html">Shop hoodies<i class="czi-arrow-right font-size-xs align-middle ml-1"></i></a>
                        </div>
                        <div class="cz-custom-controls" id="hoodie-day">
                            <button type="button"><i class="czi-arrow-left"></i></button>
                            <button type="button"><i class="czi-arrow-right"></i></button>
                        </div>
                    </div><a class="d-none d-md-block mt-auto" href="shop-grid-ls.html"><img class="d-block w-100" src="static/img/home/categories/cat-lg04.jpg" alt="For Women"></a>
                </div>
            </div>
            <!-- Product grid (carousel)-->
            <div class="col-md-7 pt-4 pt-md-0">
                <div class="cz-carousel">
                    <div class="cz-carousel-inner" data-carousel-options="{&quot;nav&quot;: false, &quot;controlsContainer&quot;: &quot;#hoodie-day&quot;}">
                        <!-- Carousel item-->
                        <div>
                            <div class="row mx-n2">
                                <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                                    <div class="card product-card card-static">
                                        <?php add_to_wishlist_button(); ?>
                                        <a class="card-img-top d-block overflow-hidden" href="products.php?id=1"><img src="static/img/shop/catalog/20.jpg" alt="Product"></a>
                                        <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Hoodies &amp; Sweatshirts</a>
                                            <h3 class="product-title font-size-sm"><a href="products.php?id=1">Block-colored Hooded Top</a></h3>
                                            <div class="d-flex justify-content-between">
                                                <div class="product-price"><span class="text-accent">$24.<small>99</small></span></div>
                                                <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                                    <div class="card product-card card-static">
                                        <?php add_to_wishlist_button(); ?>
                                        <a class="card-img-top d-block overflow-hidden" href="products.php"><img src="static/img/shop/catalog/21.jpg" alt="Product"></a>
                                        <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Hoodies &amp; Sweatshirts</a>
                                            <h3 class="product-title font-size-sm"><a href="products.php">Block-colored Hooded Top</a></h3>
                                            <div class="d-flex justify-content-between">
                                                <div class="product-price"><span class="text-accent">$26.<small>99</small></span></div>
                                                <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                                    <div class="card product-card card-static"><span class="badge badge-danger badge-shadow">Sale</span>
                                        <?php add_to_wishlist_button(); ?>
                                        <a class="card-img-top d-block overflow-hidden" href="products.php"><img src="static/img/shop/catalog/23.jpg" alt="Product"></a>
                                        <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Hoodies &amp; Sweatshirts</a>
                                            <h3 class="product-title font-size-sm"><a href="products.php">Block-colored Hooded Top</a></h3>
                                            <div class="d-flex justify-content-between">
                                                <div class="product-price"><span class="text-accent">$17.<small>99</small></span>
                                                    <del class="font-size-sm text-muted">24.<small>99</small></del>
                                                </div>
                                                <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i><i class="sr-star czi-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                                    <div class="card product-card card-static">
                                        <?php add_to_wishlist_button(); ?>
                                        <a class="card-img-top d-block overflow-hidden" href="products.php"><img src="static/img/shop/catalog/51.jpg" alt="Product"></a>
                                        <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Hoodies &amp; Sweatshirts</a>
                                            <h3 class="product-title font-size-sm"><a href="products.php">Mono Color Hooded Top</a></h3>
                                            <div class="d-flex justify-content-between">
                                                <div class="product-price"><span class="text-accent">$21.<small>99</small></span></div>
                                                <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4 d-none d-lg-block">
                                    <div class="card product-card card-static">
                                        <?php add_to_wishlist_button(); ?>
                                        <a class="card-img-top d-block overflow-hidden" href="products.php"><img src="static/img/shop/catalog/24.jpg" alt="Product"></a>
                                        <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Hoodies &amp; Sweatshirts</a>
                                            <h3 class="product-title font-size-sm"><a href="products.php">Block-colored Hooded Top</a></h3>
                                            <div class="d-flex justify-content-between">
                                                <div class="product-price"><span class="text-accent">$24.<small>99</small></span></div>
                                                <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4 d-none d-lg-block">
                                    <div class="card product-card card-static">
                                        <?php add_to_wishlist_button(); ?>
                                        <a class="card-img-top d-block overflow-hidden" href="products.php"><img src="static/img/shop/catalog/54.jpg" alt="Product"></a>
                                        <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Hoodies &amp; Sweatshirts</a>
                                            <h3 class="product-title font-size-sm"><a href="products.php">Mono Color Hooded Top</a></h3>
                                            <div class="d-flex justify-content-between">
                                                <div class="product-price"><span class="text-accent">$21.<small>99</small></span></div>
                                                <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Carousel item-->
                        <div>
                            <div class="row mx-n2">
                                <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4 d-none d-lg-block">
                                    <div class="card product-card card-static">
                                        <?php add_to_wishlist_button(); ?><a class="card-img-top d-block overflow-hidden" href="products.php"><img src="static/img/shop/catalog/53.jpg" alt="Product"></a>
                                        <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Hoodies &amp; Sweatshirts</a>
                                            <h3 class="product-title font-size-sm"><a href="products.php">Mono Color Hooded Top</a></h3>
                                            <div class="d-flex justify-content-between">
                                                <div class="product-price"><span class="text-accent">$21.<small>99</small></span></div>
                                                <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4 d-none d-lg-block">
                                    <div class="card product-card card-static">
                                        <?php add_to_wishlist_button(); ?><a class="card-img-top d-block overflow-hidden" href="products.php"><img src="static/img/shop/catalog/52.jpg" alt="Product"></a>
                                        <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Hoodies &amp; Sweatshirts</a>
                                            <h3 class="product-title font-size-sm"><a href="products.php">Printed Hooded Top</a></h3>
                                            <div class="d-flex justify-content-between">
                                                <div class="product-price"><span class="text-accent">$25.<small>99</small></span></div>
                                                <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                                    <div class="card product-card card-static">
                                        <?php add_to_wishlist_button(); ?><a class="card-img-top d-block overflow-hidden" href="products.php"><img src="static/img/shop/catalog/22.jpg" alt="Product"></a>
                                        <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Hoodies &amp; Sweatshirts</a>
                                            <h3 class="product-title font-size-sm"><a href="products.php">Block-colored Hooded Top</a></h3>
                                            <div class="d-flex justify-content-between">
                                                <div class="product-price"><span class="text-accent">$24.<small>99</small></span></div>
                                                <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                                    <div class="card product-card card-static">
                                        <?php add_to_wishlist_button(); ?><a class="card-img-top d-block overflow-hidden" href="products.php"><img src="static/img/shop/catalog/56.jpg" alt="Product"></a>
                                        <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Hoodies &amp; Sweatshirts</a>
                                            <h3 class="product-title font-size-sm"><a href="products.php">Printed Hooded Top</a></h3>
                                            <div class="d-flex justify-content-between">
                                                <div class="product-price"><span class="text-accent">$25.<small>99</small></span></div>
                                                <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                                    <div class="card product-card card-static">
                                        <?php add_to_wishlist_button(); ?><a class="card-img-top d-block overflow-hidden" href="products.php"><img src="static/img/shop/catalog/55.jpg" alt="Product"></a>
                                        <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Hoodies &amp; Sweatshirts</a>
                                            <h3 class="product-title font-size-sm"><a href="products.php">Block-colored Hooded Top</a></h3>
                                            <div class="d-flex justify-content-between">
                                                <div class="product-price"><span class="text-accent">$24.<small>99</small></span></div>
                                                <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                                    <div class="card product-card card-static">
                                        <?php add_to_wishlist_button(); ?>
                                        <a class="card-img-top d-block overflow-hidden" href="products.php"><img src="static/img/shop/catalog/57.jpg" alt="Product"></a>
                                        <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Hoodies &amp; Sweatshirts</a>
                                            <h3 class="product-title font-size-sm"><a href="products.php">Block-colored Hooded Top</a></h3>
                                            <div class="d-flex justify-content-between">
                                                <div class="product-price"><span class="text-accent">$23.<small>99</small></span></div>
                                                <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i><i class="sr-star czi-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
}



function section_trending_products()
{
?>
    <section class="container pt-md-3 pb-5 mb-md-3">
        <h2 class="h3 text-center">Trending products</h2>
        <div class="row pt-4 mx-n2">
            <!-- Product-->
            <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
                <div class="card product-card">
                    <?php add_to_wishlist_button(); ?>
                    <a class="card-img-top d-block overflow-hidden" href="products.php?id=2"><img src="static/img/shop/catalog/01.jpg" alt="Product"></a>
                    <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Sneakers &amp; Keds</a>
                        <h3 class="product-title font-size-sm"><a href="products.php?id=2">Women Colorblock Sneakers</a></h3>
                        <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-accent">$154.<small>00</small></span></div>
                            <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-body card-body-hidden">
                        <div class="text-center pb-2">
                            <div class="custom-control custom-option custom-control-inline mb-2">
                                <input class="custom-control-input" type="radio" name="size1" id="s-75">
                                <label class="custom-option-label" for="s-75">7.5</label>
                            </div>
                            <div class="custom-control custom-option custom-control-inline mb-2">
                                <input class="custom-control-input" type="radio" name="size1" id="s-80" checked>
                                <label class="custom-option-label" for="s-80">8</label>
                            </div>
                            <div class="custom-control custom-option custom-control-inline mb-2">
                                <input class="custom-control-input" type="radio" name="size1" id="s-85">
                                <label class="custom-option-label" for="s-85">8.5</label>
                            </div>
                            <div class="custom-control custom-option custom-control-inline mb-2">
                                <input class="custom-control-input" type="radio" name="size1" id="s-90">
                                <label class="custom-option-label" for="s-90">9</label>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-sm btn-block mb-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart font-size-sm mr-1"></i>Add to Cart</button>
                        <div class="text-center"><a class="nav-link-style font-size-ms" href="#quick-view" data-toggle="modal"><i class="czi-eye align-middle mr-1"></i>Quick view</a></div>
                    </div>
                </div>
                <hr class="d-sm-none">
            </div>
            <!-- Product-->
            <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
                <div class="card product-card"><span class="badge badge-danger badge-shadow">Sale</span>
                    <?php add_to_wishlist_button(); ?>
                    <a class="card-img-top d-block overflow-hidden" href="products.php"><img src="static/img/shop/catalog/02.jpg" alt="Product"></a>
                    <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Women’s T-shirt</a>
                        <h3 class="product-title font-size-sm"><a href="products.php">Cotton Lace Blouse</a></h3>
                        <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-accent">$28.<small>50</small></span>
                                <del class="font-size-sm text-muted">$38.<small>50</small></del>
                            </div>
                            <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i><i class="sr-star czi-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-body card-body-hidden">
                        <div class="text-center pb-2">
                            <div class="custom-control custom-option custom-control-inline mb-2">
                                <input class="custom-control-input" type="radio" name="color1" id="white" checked>
                                <label class="custom-option-label rounded-circle" for="white"><span class="custom-option-color rounded-circle" style="background-color: #eaeaeb;"></span></label>
                            </div>
                            <div class="custom-control custom-option custom-control-inline mb-2">
                                <input class="custom-control-input" type="radio" name="color1" id="blue">
                                <label class="custom-option-label rounded-circle" for="blue"><span class="custom-option-color rounded-circle" style="background-color: #d1dceb;"></span></label>
                            </div>
                            <div class="custom-control custom-option custom-control-inline mb-2">
                                <input class="custom-control-input" type="radio" name="color1" id="yellow">
                                <label class="custom-option-label rounded-circle" for="yellow"><span class="custom-option-color rounded-circle" style="background-color: #f4e6a2;"></span></label>
                            </div>
                            <div class="custom-control custom-option custom-control-inline mb-2">
                                <input class="custom-control-input" type="radio" name="color1" id="pink">
                                <label class="custom-option-label rounded-circle" for="pink"><span class="custom-option-color rounded-circle" style="background-color: #f3dcff;"></span></label>
                            </div>
                        </div>
                        <div class="d-flex mb-2">
                            <select class="custom-select custom-select-sm mr-2">
                                <option>XS</option>
                                <option>S</option>
                                <option>M</option>
                                <option>L</option>
                                <option>XL</option>
                            </select>
                            <button class="btn btn-primary btn-sm" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart font-size-sm mr-1"></i>Add to Cart</button>
                        </div>
                        <div class="text-center"><a class="nav-link-style font-size-ms" href="#quick-view" data-toggle="modal"><i class="czi-eye align-middle mr-1"></i>Quick view</a></div>
                    </div>
                </div>
                <hr class="d-sm-none">
            </div>
            <!-- Product-->
            <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
                <div class="card product-card">
                    <?php add_to_wishlist_button(); ?><a class="card-img-top d-block overflow-hidden" href="products.php"><img src="static/img/shop/catalog/03.jpg" alt="Product"></a>
                    <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Women’s Shorts</a>
                        <h3 class="product-title font-size-sm"><a href="products.php">Mom High Waist Shorts</a></h3>
                        <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-accent">$39.<small>50</small></span></div>
                            <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-body card-body-hidden">
                        <div class="text-center pb-2">
                            <div class="custom-control custom-option custom-control-inline mb-2">
                                <input class="custom-control-input" type="radio" name="size2" id="xs">
                                <label class="custom-option-label" for="xs">XS</label>
                            </div>
                            <div class="custom-control custom-option custom-control-inline mb-2">
                                <input class="custom-control-input" type="radio" name="size2" id="s" checked>
                                <label class="custom-option-label" for="s">S</label>
                            </div>
                            <div class="custom-control custom-option custom-control-inline mb-2">
                                <input class="custom-control-input" type="radio" name="size2" id="m">
                                <label class="custom-option-label" for="m">M</label>
                            </div>
                            <div class="custom-control custom-option custom-control-inline mb-2">
                                <input class="custom-control-input" type="radio" name="size2" id="l">
                                <label class="custom-option-label" for="l">L</label>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-sm btn-block mb-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart font-size-sm mr-1"></i>Add to Cart</button>
                        <div class="text-center"><a class="nav-link-style font-size-ms" href="#quick-view" data-toggle="modal"><i class="czi-eye align-middle mr-1"></i>Quick view</a></div>
                    </div>
                </div>
                <hr class="d-sm-none">
            </div>
            <!-- Product-->
            <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
                <div class="card product-card">
                    <?php add_to_wishlist_button(); ?><a class="card-img-top d-block overflow-hidden" href="products.php"><img src="static/img/shop/catalog/07.jpg" alt="Product"></a>
                    <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Women's Swimwear</a>
                        <h3 class="product-title font-size-sm"><a href="products.php">Two-Piece Bikini in Print</a></h3>
                        <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-accent">$18.<small>99</small></span></div>
                            <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-body card-body-hidden">
                        <div class="text-center pb-2">
                            <div class="custom-control custom-option custom-control-inline mb-2">
                                <input class="custom-control-input" type="radio" name="size4" id="xs3" checked>
                                <label class="custom-option-label" for="xs3">XS</label>
                            </div>
                            <div class="custom-control custom-option custom-control-inline mb-2">
                                <input class="custom-control-input" type="radio" name="size4" id="s3">
                                <label class="custom-option-label" for="s3">S</label>
                            </div>
                            <div class="custom-control custom-option custom-control-inline mb-2">
                                <input class="custom-control-input" type="radio" name="size4" id="m3">
                                <label class="custom-option-label" for="m3">M</label>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-sm btn-block mb-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart font-size-sm mr-1"></i>Add to Cart</button>
                        <div class="text-center"><a class="nav-link-style font-size-ms" href="#quick-view" data-toggle="modal"><i class="czi-eye align-middle mr-1"></i>Quick view</a></div>
                    </div>
                </div>
                <hr class="d-sm-none">
            </div>
            <!-- Product-->
            <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
                <div class="card product-card">
                    <?php add_to_wishlist_button(); ?><a class="card-img-top d-block overflow-hidden" href="products.php"><img src="static/img/shop/catalog/04.jpg" alt="Product"></a>
                    <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Sportswear</a>
                        <h3 class="product-title font-size-sm"><a href="products.php">Women Sports Jacket</a></h3>
                        <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-accent">$68.<small>40</small></span></div>
                            <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-body card-body-hidden">
                        <div class="text-center pb-2">
                            <div class="custom-control custom-option custom-control-inline mb-2">
                                <input class="custom-control-input" type="radio" name="size3" id="xs2" checked>
                                <label class="custom-option-label" for="xs2">XS</label>
                            </div>
                            <div class="custom-control custom-option custom-control-inline mb-2">
                                <input class="custom-control-input" type="radio" name="size3" id="s2">
                                <label class="custom-option-label" for="s2">S</label>
                            </div>
                            <div class="custom-control custom-option custom-control-inline mb-2">
                                <input class="custom-control-input" type="radio" name="size3" id="m2">
                                <label class="custom-option-label" for="m2">M</label>
                            </div>
                            <div class="custom-control custom-option custom-control-inline mb-2">
                                <input class="custom-control-input" type="radio" name="size3" id="l2">
                                <label class="custom-option-label" for="l2">L</label>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-sm btn-block mb-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart font-size-sm mr-1"></i>Add to Cart</button>
                        <div class="text-center"><a class="nav-link-style font-size-ms" href="#quick-view" data-toggle="modal"><i class="czi-eye align-middle mr-1"></i>Quick view</a></div>
                    </div>
                </div>
                <hr class="d-sm-none">
            </div>
            <!-- Product-->
            <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
                <div class="card product-card">
                    <?php add_to_wishlist_button(); ?><a class="card-img-top d-block overflow-hidden" href="products.php"><img src="static/img/shop/catalog/05.jpg" alt="Product"></a>
                    <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Men’s Sunglasses</a>
                        <h3 class="product-title font-size-sm"><a href="products.php">Polarized Sunglasses</a></h3>
                        <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-muted font-size-sm">Out of stock</span></div>
                            <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-body card-body-hidden"><a class="btn btn-secondary btn-sm btn-block mb-2" href="products.php">View details</a>
                        <div class="text-center"><a class="nav-link-style font-size-ms" href="#quick-view" data-toggle="modal"><i class="czi-eye align-middle mr-1"></i>Quick view</a></div>
                    </div>
                </div>
                <hr class="d-sm-none">
            </div>
            <!-- Product-->
            <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
                <div class="card product-card">
                    <?php add_to_wishlist_button(); ?><a class="card-img-top d-block overflow-hidden" href="products.php"><img src="static/img/shop/catalog/06.jpg" alt="Product"></a>
                    <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Backpacks</a>
                        <h3 class="product-title font-size-sm"><a href="products.php">TH Jeans City Backpack</a></h3>
                        <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-accent">$79.<small>50</small></span></div>
                            <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i><i class="sr-star czi-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-body card-body-hidden">
                        <div class="text-center pb-2">
                            <div class="custom-control custom-option custom-control-inline mb-2">
                                <input class="custom-control-input" type="radio" name="color2" id="khaki" checked>
                                <label class="custom-option-label rounded-circle" for="khaki"><span class="custom-option-color rounded-circle" style="background-color: #97947c;"></span></label>
                            </div>
                            <div class="custom-control custom-option custom-control-inline mb-2">
                                <input class="custom-control-input" type="radio" name="color2" id="jeans">
                                <label class="custom-option-label rounded-circle" for="jeans"><span class="custom-option-color rounded-circle" style="background-color: #99a8be;"></span></label>
                            </div>
                            <div class="custom-control custom-option custom-control-inline mb-2">
                                <input class="custom-control-input" type="radio" name="color2" id="white2">
                                <label class="custom-option-label rounded-circle" for="white2"><span class="custom-option-color rounded-circle" style="background-color: #eaeaeb;"></span></label>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-sm btn-block mb-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart font-size-sm mr-1"></i>Add to Cart</button>
                        <div class="text-center"><a class="nav-link-style font-size-ms" href="#quick-view" data-toggle="modal"><i class="czi-eye align-middle mr-1"></i>Quick view</a></div>
                    </div>
                </div>
                <hr class="d-sm-none">
            </div>
            <!-- Product-->
            <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
                <div class="card product-card">
                    <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="products.php"><img src="static/img/shop/catalog/25.jpg" alt="Product"></a>
                    <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Women's Sneakers</a>
                        <h3 class="product-title font-size-sm"><a href="products.php">Leather High-Top Sneakers</a></h3>
                        <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-accent">$215.<small>00</small></span></div>
                            <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-body card-body-hidden">
                        <div class="text-center pb-2">
                            <div class="custom-control custom-option custom-control-inline mb-2">
                                <input class="custom-control-input" type="radio" name="size5" id="s4-80">
                                <label class="custom-option-label" for="s4-80">8</label>
                            </div>
                            <div class="custom-control custom-option custom-control-inline mb-2">
                                <input class="custom-control-input" type="radio" name="size5" id="s4-85" checked>
                                <label class="custom-option-label" for="s4-85">8.5</label>
                            </div>
                            <div class="custom-control custom-option custom-control-inline mb-2">
                                <input class="custom-control-input" type="radio" name="size5" id="s4-90">
                                <label class="custom-option-label" for="s4-90">9</label>
                            </div>
                            <div class="custom-control custom-option custom-control-inline mb-2">
                                <input class="custom-control-input" type="radio" name="size5" id="s4-95">
                                <label class="custom-option-label" for="s4-95">9.5</label>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-sm btn-block mb-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart font-size-sm mr-1"></i>Add to Cart</button>
                        <div class="text-center"><a class="nav-link-style font-size-ms" href="#quick-view" data-toggle="modal"><i class="czi-eye align-middle mr-1"></i>Quick view</a></div>
                    </div>
                </div>
                <hr class="d-sm-none">
            </div>
        </div>
        <div class="text-center pt-3"><a class="btn btn-outline-accent" href="shop-grid-ls.html">More products<i class="czi-arrow-right ml-1"></i></a></div>
    </section>
<?php
}

function body($page)
{
?>

    <body class="toolbar-enabled">
        <!-- Sign in / sign up modal-->
        <!-- top nav bar -->
        <?php top_navbar(); ?>
        <!-- top nav bar -->
        <!-- Navbar-->
        <!-- Quick View Modal-->
        <?php quick_view_modal(); ?>
        <!-- Navbar 3 Level (Light)-->
        <?php main_menu(); ?>
        <!-- Page title-->
        <!-- Page Content-->
        <!-- Hero slider-->
        <?php hero_slider(); ?>
        <!-- Hero slider -->
        <!-- Popular categories-->
        <?php popular_categories(); ?>
        <!-- Popular categories-->
        <!-- Products grid (Trending products)-->
        <?php section_trending_products(); ?>
        <!--- Products grid (Trending products)-->
        <!-- Banners-->
        <?php section_banners(); ?>
        <!-- Banners-->
        <!-- Featured category (Hoodie)-->
        <?php section_feature_category_hoodie(); ?>
        <!-- Featured category (Hoodie) -->
        <!-- Toast: Added to Cart-->
        <div class="toast-container toast-bottom-center">
            <div class="toast mb-3" id="cart-toast" data-delay="5000" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header bg-success text-white"><i class="czi-check-circle mr-2"></i>
                    <h6 class="font-size-sm text-white mb-0 mr-auto">Added to cart!</h6>
                    <button class="close text-white ml-2 mb-1" type="button" data-dismiss="toast" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="toast-body">This item has been added to your cart.</div>
            </div>
        </div>
        <!-- Footer-->
        <?php common_footer($page); ?>
        <!-- Footer-->
        <!-- Toolbar for handheld devices-->
        <div class="cz-handheld-toolbar">
            <div class="d-table table-fixed w-100">
                <a class="d-table-cell cz-handheld-toolbar-item" href="account-wishlist.html">
                <span class="cz-handheld-toolbar-icon"><i class="czi-telegram"></i></span>
                <span class="cz-handheld-toolbar-label">Track</span></a>
                <a class="d-table-cell cz-handheld-toolbar-item" href="#navbarCollapse" data-toggle="collapse" onclick="window.scrollTo(0, 0)">
                    <span class="cz-handheld-toolbar-icon"><i class="czi-menu"></i></span><span class="cz-handheld-toolbar-label">Menu</span>
                </a>
                <a class="d-table-cell cz-handheld-toolbar-item" href="checkout.php?cart">
                    <span class="cz-handheld-toolbar-icon">
                        <i class="czi-cart"></i>
                    <span class="badge badge-primary badge-pill ml-1">4</span>
                    </span>
                    <span class="cz-handheld-toolbar-label">$265.00</span>
                </a>
            </div>
        </div>
        <!-- Back To Top Button--><a class="btn-scroll-top" href="#top" data-scroll><span class="btn-scroll-top-tooltip text-muted font-size-sm mr-2">Top</span><i class="btn-scroll-top-icon czi-arrow-up"> </i></a>
        <!-- Vendor scrits: js libraries and plugins-->
        <?php common_js_scripts(); ?>
    </body>
<?php
}
?>