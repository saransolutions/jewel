<?php

function top_navbar()
{
?>
    <!-- Sign in / sign up modal-->
    <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <ul class="nav nav-tabs card-header-tabs" role="tablist">
                        <li class="nav-item"><a class="nav-link active" href="#signin-tab" data-toggle="tab" role="tab" aria-selected="true"><i class="czi-unlocked mr-2 mt-n1"></i>Sign in</a></li>
                        <li class="nav-item"><a class="nav-link" href="#signup-tab" data-toggle="tab" role="tab" aria-selected="false"><i class="czi-user mr-2 mt-n1"></i>Sign up</a></li>
                    </ul>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body tab-content py-4">
                    <form class="needs-validation tab-pane fade show active" autocomplete="off" novalidate id="signin-tab">
                        <div class="form-group">
                            <label for="si-email">Email address</label>
                            <input class="form-control" type="email" id="si-email" placeholder="johndoe@example.com" required>
                            <div class="invalid-feedback">Please provide a valid email address.</div>
                        </div>
                        <div class="form-group">
                            <label for="si-password">Password</label>
                            <div class="password-toggle">
                                <input class="form-control" type="password" id="si-password" required>
                                <label class="password-toggle-btn">
                                    <input class="custom-control-input" type="checkbox"><i class="czi-eye password-toggle-indicator"></i><span class="sr-only">Show password</span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group d-flex flex-wrap justify-content-between">
                            <div class="custom-control custom-checkbox mb-2">
                                <input class="custom-control-input" type="checkbox" id="si-remember">
                                <label class="custom-control-label" for="si-remember">Remember me</label>
                            </div><a class="font-size-sm" href="#">Forgot password?</a>
                        </div>
                        <button class="btn btn-primary btn-block btn-shadow" type="submit">Sign in</button>
                    </form>
                    <form class="needs-validation tab-pane fade" autocomplete="off" novalidate id="signup-tab">
                        <div class="form-group">
                            <label for="su-name">Full name</label>
                            <input class="form-control" type="text" id="su-name" placeholder="John Doe" required>
                            <div class="invalid-feedback">Please fill in your name.</div>
                        </div>
                        <div class="form-group">
                            <label for="su-email">Email address</label>
                            <input class="form-control" type="email" id="su-email" placeholder="johndoe@example.com" required>
                            <div class="invalid-feedback">Please provide a valid email address.</div>
                        </div>
                        <div class="form-group">
                            <label for="su-password">Password</label>
                            <div class="password-toggle">
                                <input class="form-control" type="password" id="su-password" required>
                                <label class="password-toggle-btn">
                                    <input class="custom-control-input" type="checkbox"><i class="czi-eye password-toggle-indicator"></i><span class="sr-only">Show password</span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="su-password-confirm">Confirm password</label>
                            <div class="password-toggle">
                                <input class="form-control" type="password" id="su-password-confirm" required>
                                <label class="password-toggle-btn">
                                    <input class="custom-control-input" type="checkbox"><i class="czi-eye password-toggle-indicator"></i><span class="sr-only">Show password</span>
                                </label>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-block btn-shadow" type="submit">Sign up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php
}

function size_chart_modal()
{
?>
    <div class="modal fade" id="size-chart">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <ul class="nav nav-tabs card-header-tabs" role="tablist" style="margin-bottom: -1rem;">
                        <li class="nav-item"><a class="nav-link active" href="#mens" data-toggle="tab" role="tab" aria-controls="mens" aria-selected="true">Men's sizes</a></li>
                        <li class="nav-item"><a class="nav-link" href="#womens" data-toggle="tab" role="tab" aria-controls="womens" aria-selected="false">Women's sizes</a></li>
                    </ul>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body p-0">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="mens" role="tabpanel">
                            <div class="table-responsive">
                                <table class="table font-size-sm text-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="align-middle bg-secondary">US<br>Sizes</th>
                                            <th class="align-middle">Euro<br>Sizes</th>
                                            <th class="align-middle">UK<br>Sizes</th>
                                            <th class="align-middle">Inches</th>
                                            <th class="align-middle">CM</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="bg-secondary font-weight-medium">6</td>
                                            <td>39</td>
                                            <td>5.5</td>
                                            <td>9.25"</td>
                                            <td>23.5</td>
                                        </tr>
                                        <tr>
                                            <td class="bg-secondary font-weight-medium">6.5</td>
                                            <td>39</td>
                                            <td>6</td>
                                            <td>9.5"</td>
                                            <td>24.1</td>
                                        </tr>
                                        <tr>
                                            <td class="bg-secondary font-weight-medium">7</td>
                                            <td>40</td>
                                            <td>6.5</td>
                                            <td>9.625"</td>
                                            <td>24.4</td>
                                        </tr>
                                        <tr>
                                            <td class="bg-secondary font-weight-medium">7.5</td>
                                            <td>40-41</td>
                                            <td>7</td>
                                            <td>9.75"</td>
                                            <td>24.8</td>
                                        </tr>
                                        <tr>
                                            <td class="bg-secondary font-weight-medium">8</td>
                                            <td>41</td>
                                            <td>7.5</td>
                                            <td>9.9375"</td>
                                            <td>25.4</td>
                                        </tr>
                                        <tr>
                                            <td class="bg-secondary font-weight-medium">8.5</td>
                                            <td>41-42</td>
                                            <td>8</td>
                                            <td>10.125"</td>
                                            <td>25.7</td>
                                        </tr>
                                        <tr>
                                            <td class="bg-secondary font-weight-medium">9</td>
                                            <td>42</td>
                                            <td>8.5</td>
                                            <td>10.25"</td>
                                            <td>26</td>
                                        </tr>
                                        <tr>
                                            <td class="bg-secondary font-weight-medium">9.5</td>
                                            <td>42-43</td>
                                            <td>9</td>
                                            <td>10.4375"</td>
                                            <td>26.7</td>
                                        </tr>
                                        <tr>
                                            <td class="bg-secondary font-weight-medium">10</td>
                                            <td>43</td>
                                            <td>9.5</td>
                                            <td>10.5625"</td>
                                            <td>27</td>
                                        </tr>
                                        <tr>
                                            <td class="bg-secondary font-weight-medium">10.5</td>
                                            <td>43-44</td>
                                            <td>10</td>
                                            <td>10.75"</td>
                                            <td>27.3</td>
                                        </tr>
                                        <tr>
                                            <td class="bg-secondary font-weight-medium">11</td>
                                            <td>44</td>
                                            <td>10.5</td>
                                            <td>10.9375"</td>
                                            <td>27.9</td>
                                        </tr>
                                        <tr>
                                            <td class="bg-secondary font-weight-medium">11.5</td>
                                            <td>44-45</td>
                                            <td>11</td>
                                            <td>11.125"</td>
                                            <td>28.3</td>
                                        </tr>
                                        <tr>
                                            <td class="bg-secondary font-weight-medium">12</td>
                                            <td>45</td>
                                            <td>11.5</td>
                                            <td>11.25"</td>
                                            <td>28.6</td>
                                        </tr>
                                        <tr>
                                            <td class="bg-secondary font-weight-medium">13</td>
                                            <td>46</td>
                                            <td>12.5</td>
                                            <td>11.5625"</td>
                                            <td>29.4</td>
                                        </tr>
                                        <tr>
                                            <td class="bg-secondary font-weight-medium">14</td>
                                            <td>47</td>
                                            <td>13.5</td>
                                            <td>11.875"</td>
                                            <td>30.2</td>
                                        </tr>
                                        <tr>
                                            <td class="bg-secondary font-weight-medium">15</td>
                                            <td>48</td>
                                            <td>14.5</td>
                                            <td>12.1875"</td>
                                            <td>31</td>
                                        </tr>
                                        <tr>
                                            <td class="bg-secondary font-weight-medium">16</td>
                                            <td>49</td>
                                            <td>15.5</td>
                                            <td>12.5"</td>
                                            <td>31.8</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="womens" role="tabpanel">
                            <div class="table-responsive">
                                <table class="table font-size-sm text-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="align-middle bg-secondary">US<br>Sizes</th>
                                            <th class="align-middle">Euro<br>Sizes</th>
                                            <th class="align-middle">UK<br>Sizes</th>
                                            <th class="align-middle">Inches</th>
                                            <th class="align-middle">CM</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="bg-secondary font-weight-medium">4</td>
                                            <td>35</td>
                                            <td>2</td>
                                            <td>8.1875"</td>
                                            <td>20.8</td>
                                        </tr>
                                        <tr>
                                            <td class="bg-secondary font-weight-medium">4.5</td>
                                            <td>35</td>
                                            <td>2.5</td>
                                            <td>8.375"</td>
                                            <td>21.3</td>
                                        </tr>
                                        <tr>
                                            <td class="bg-secondary font-weight-medium">5</td>
                                            <td>35-36</td>
                                            <td>3</td>
                                            <td>8.5"</td>
                                            <td>21.6</td>
                                        </tr>
                                        <tr>
                                            <td class="bg-secondary font-weight-medium">5.5</td>
                                            <td>36</td>
                                            <td>3.5</td>
                                            <td>8.75"</td>
                                            <td>22.2</td>
                                        </tr>
                                        <tr>
                                            <td class="bg-secondary font-weight-medium">6</td>
                                            <td>36-37</td>
                                            <td>4</td>
                                            <td>8.875"</td>
                                            <td>22.5</td>
                                        </tr>
                                        <tr>
                                            <td class="bg-secondary font-weight-medium">6.5</td>
                                            <td>37</td>
                                            <td>4.5</td>
                                            <td>9.0625"</td>
                                            <td>23</td>
                                        </tr>
                                        <tr>
                                            <td class="bg-secondary font-weight-medium">7</td>
                                            <td>37-38</td>
                                            <td>5</td>
                                            <td>9.25"</td>
                                            <td>23.5</td>
                                        </tr>
                                        <tr>
                                            <td class="bg-secondary font-weight-medium">7.5</td>
                                            <td>38</td>
                                            <td>5.5</td>
                                            <td>9.375"</td>
                                            <td>23.8</td>
                                        </tr>
                                        <tr>
                                            <td class="bg-secondary font-weight-medium">8</td>
                                            <td>38-39</td>
                                            <td>6</td>
                                            <td>9.5"</td>
                                            <td>24.1</td>
                                        </tr>
                                        <tr>
                                            <td class="bg-secondary font-weight-medium">8.5</td>
                                            <td>39</td>
                                            <td>6.5</td>
                                            <td>9.6875"</td>
                                            <td>24.6</td>
                                        </tr>
                                        <tr>
                                            <td class="bg-secondary font-weight-medium">9</td>
                                            <td>39-40</td>
                                            <td>7</td>
                                            <td>9.875"</td>
                                            <td>25.1</td>
                                        </tr>
                                        <tr>
                                            <td class="bg-secondary font-weight-medium">9.5</td>
                                            <td>40</td>
                                            <td>7.5</td>
                                            <td>10"</td>
                                            <td>25.4</td>
                                        </tr>
                                        <tr>
                                            <td class="bg-secondary font-weight-medium">10</td>
                                            <td>40-41</td>
                                            <td>8</td>
                                            <td>10.1875"</td>
                                            <td>25.9</td>
                                        </tr>
                                        <tr>
                                            <td class="bg-secondary font-weight-medium">10.5</td>
                                            <td>41</td>
                                            <td>8.5</td>
                                            <td>10.3125"</td>
                                            <td>26.2</td>
                                        </tr>
                                        <tr>
                                            <td class="bg-secondary font-weight-medium">11</td>
                                            <td>41-42</td>
                                            <td>9</td>
                                            <td>10.5"</td>
                                            <td>26.7</td>
                                        </tr>
                                        <tr>
                                            <td class="bg-secondary font-weight-medium">11.5</td>
                                            <td>42</td>
                                            <td>9.5</td>
                                            <td>10.6875"</td>
                                            <td>27.1</td>
                                        </tr>
                                        <tr>
                                            <td class="bg-secondary font-weight-medium">12</td>
                                            <td>42-43</td>
                                            <td>10</td>
                                            <td>10.875"</td>
                                            <td>27.6</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}

function language_bar()
{
?>
    <!-- language/currency bar -->
    <div class="topbar-text dropdown disable-autohide"><a class="topbar-link dropdown-toggle" href="#" data-toggle="dropdown"><img class="mr-2" width="20" src="static/img/flags/en.png" alt="English" />Eng / $</a>
        <ul class="dropdown-menu dropdown-menu-right">
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
    </div>
    <!-- language/currency bar -->
<?php
}

function top_navigation_bar()
{
?>
    <!-- Topbar-->
    <div class="topbar topbar-dark bg-dark">
        <div class="container">
            <div class="topbar-text dropdown d-md-none"><a class="topbar-link dropdown-toggle" href="#" data-toggle="dropdown">Useful links</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="tel:<?php echo HEAD_PHONE; ?>"><i class="czi-support text-muted mr-2"></i><?php echo HEAD_PHONE; ?></a></li>
                    <li><a class="dropdown-item" href="tracking.php"><i class="czi-location text-muted mr-2"></i>Order tracking</a></li>
                </ul>
            </div>
            <div class="topbar-text text-nowrap d-none d-md-inline-block"><i class="czi-support"></i><span class="text-muted mr-1">Support</span><a class="topbar-link" href="tel:<?php echo HEAD_PHONE; ?>"><?php echo HEAD_PHONE; ?></a></div>
            <div class="cz-carousel cz-controls-static d-none d-md-block">
                <div class="cz-carousel-inner" data-carousel-options="{&quot;mode&quot;: &quot;gallery&quot;, &quot;nav&quot;: false}">
                    <div class="topbar-text">Free shipping for order over 200 CHF</div>
                    <div class="topbar-text">Deliver the products within 30 days</div>
                    <div class="topbar-text">Friendly customer support</div>
                </div>
            </div>
            <div class="ml-3 text-nowrap"><a class="topbar-link mr-4 d-none d-md-inline-block" href="tracking.php"><i class="czi-location"></i>Order tracking</a>
                <!-- language/currency bar currently commented -->
                <!-- language/currency bar currently commented -->
            </div>
        </div>
    </div>
    <!-- Topbar-->
<?php
}

function main_menu()
{
?>
    <!-- Navbar 3 Level (Light)-->
    <header class="box-shadow-sm">
        <!-- Topbar-->
        <?php top_navigation_bar();?>
        <!-- Topbar-->
        <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
        <div class="navbar-sticky bg-light">
            <div class="navbar navbar-expand-lg navbar-light">
                <div class="container"><a class="navbar-brand d-none d-sm-block mr-3 flex-shrink-0" href="dashboard.php" style="min-width: 7rem;">
                        <img width="142" src="<?php echo "static/img/" . MAIN_LOGO_IMG; ?>" alt="<?php echo MAIN_TITLE; ?>" /></a>
                    <a class="navbar-brand d-sm-none mr-2" href="dashboard.php" style="min-width: 4.625rem;"><img width="74" src="static/img/logo-icon.png" alt="<?php echo MAIN_TITLE; ?>" />
                    </a>
                    <div class="input-group-overlay d-none d-lg-flex mx-4">
                        <input class="form-control appended-form-control" type="text" placeholder="Search for products">
                        <div class="input-group-append-overlay"><span class="input-group-text"><i class="czi-search"></i></span></div>
                    </div>
                    <div class="navbar-toolbar d-flex flex-shrink-0 align-items-center">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"><span class="navbar-toggler-icon"></span></button><a class="navbar-tool navbar-stuck-toggler" href="#"><span class="navbar-tool-tooltip">Expand menu</span>
                            <div class="navbar-tool-icon-box"><i class="navbar-tool-icon czi-menu"></i></div>
                        </a>
                        <?php wishlist_link(); ?>
                        <a class="navbar-tool ml-1 ml-lg-0 mr-n1 mr-lg-2" href="#signin-modal" data-toggle="modal">
                            <div class="navbar-tool-icon-box"><i class="navbar-tool-icon czi-user"></i></div>
                            <div class="navbar-tool-text ml-n3"><small>Hello, Sign in</small>My Account</div>
                        </a>
                        <div class="navbar-tool dropdown ml-3">
                            <a class="navbar-tool-icon-box bg-secondary dropdown-toggle" href="checkout.php?cart">
                                <span class="navbar-tool-label">4</span><i class="navbar-tool-icon czi-cart"></i>
                            </a>
                            <a class="navbar-tool-text" href="checkout.php?cart"><small>My Cart</small>$265.00</a>
                            <!-- Cart dropdown-->
                            <div class="dropdown-menu dropdown-menu-right" style="width: 20rem;">
                                <div class="widget widget-cart px-3 pt-2 pb-3">
                                    <div style="height: 15rem;" data-simplebar data-simplebar-auto-hide="false">
                                        <div class="widget-cart-item pb-2 border-bottom">
                                            <button class="close text-danger" type="button" aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                                            <div class="media align-items-center"><a class="d-block mr-2" href="shop-single-v1.html"><img width="64" src="static/img/shop/cart/widget/01.jpg" alt="Product" /></a>
                                                <div class="media-body">
                                                    <h6 class="widget-product-title"><a href="shop-single-v1.html">Women Colorblock Sneakers</a></h6>
                                                    <div class="widget-product-meta"><span class="text-accent mr-2">$150.<small>00</small></span><span class="text-muted">x 1</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-cart-item py-2 border-bottom">
                                            <button class="close text-danger" type="button" aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                                            <div class="media align-items-center"><a class="d-block mr-2" href="shop-single-v1.html"><img width="64" src="static/img/shop/cart/widget/02.jpg" alt="Product" /></a>
                                                <div class="media-body">
                                                    <h6 class="widget-product-title"><a href="shop-single-v1.html">TH Jeans City Backpack</a></h6>
                                                    <div class="widget-product-meta"><span class="text-accent mr-2">$79.<small>50</small></span><span class="text-muted">x 1</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-cart-item py-2 border-bottom">
                                            <button class="close text-danger" type="button" aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                                            <div class="media align-items-center"><a class="d-block mr-2" href="shop-single-v1.html"><img width="64" src="static/img/shop/cart/widget/03.jpg" alt="Product" /></a>
                                                <div class="media-body">
                                                    <h6 class="widget-product-title"><a href="shop-single-v1.html">3-Color Sun Stash Hat</a></h6>
                                                    <div class="widget-product-meta"><span class="text-accent mr-2">$22.<small>50</small></span><span class="text-muted">x 1</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-cart-item py-2 border-bottom">
                                            <button class="close text-danger" type="button" aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                                            <div class="media align-items-center"><a class="d-block mr-2" href="shop-single-v1.html"><img width="64" src="static/img/shop/cart/widget/04.jpg" alt="Product" /></a>
                                                <div class="media-body">
                                                    <h6 class="widget-product-title"><a href="shop-single-v1.html">Cotton Polo Regular Fit</a></h6>
                                                    <div class="widget-product-meta"><span class="text-accent mr-2">$9.<small>00</small></span><span class="text-muted">x 1</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-wrap justify-content-between align-items-center py-3">
                                        <div class="font-size-sm mr-2 py-2"><span class="text-muted">Subtotal:</span><span class="text-accent font-size-base ml-1">$265.<small>00</small></span></div><a class="btn btn-outline-secondary btn-sm" href="checkout.php?cart">Expand cart<i class="czi-arrow-right ml-1 mr-n1"></i></a>
                                    </div><a class="btn btn-primary btn-sm btn-block" href="checkout.php?details"><i class="czi-card mr-2 font-size-base align-middle"></i>Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navbar navbar-expand-lg navbar-light navbar-stuck-menu mt-n2 pt-0 pb-2">
                <div class="container">
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <!-- Search-->
                        <div class="input-group-overlay d-lg-none my-3">
                            <div class="input-group-prepend-overlay"><span class="input-group-text"><i class="czi-search"></i></span></div>
                            <input class="form-control prepended-form-control" type="text" placeholder="Search for products">
                        </div>
                        <!-- Departments menu-->
                        <ul class="navbar-nav mega-nav pr-lg-2 mr-lg-2">
                            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle pl-0" href="#" data-toggle="dropdown"><i class="czi-view-grid mr-2"></i>Shop</a>
                                <div class="dropdown-menu px-2 pl-0 pb-4">
                                    <div class="d-flex flex-wrap flex-md-nowrap">
                                        <div class="mega-dropdown-column pt-4 px-3">
                                            <div class="widget widget-links"><a class="d-block overflow-hidden rounded-lg mb-3" href="#"><img src="static/img/shop/departments/01.jpg" alt="Shoes" /></a>
                                                <h6 class="font-size-base mb-2">Makeup Set</h6>
                                                <ul class="widget-list">
                                                    <li class="widget-list-item"><a class="widget-list-link" href="#">Sticker Pottu</a></li>
                                                    <li class="widget-list-item"><a class="widget-list-link" href="#">Makeup kit</a></li>
                                                    <li class="widget-list-item"><a class="widget-list-link" href="#">Fancy Items</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="mega-dropdown-column pt-4 px-3">
                                            <div class="widget widget-links"><a class="d-block overflow-hidden rounded-lg mb-3" href="#"><img src="static/img/shop/departments/02.jpg" alt="Shoes" /></a>
                                                <h6 class="font-size-base mb-2">Jewels</h6>
                                                <ul class="widget-list">
                                                    <li class="widget-list-item"><a class="widget-list-link" href="#">Necklace</a></li>
                                                    <li class="widget-list-item"><a class="widget-list-link" href="#">Bangles</a></li>
                                                    <li class="widget-list-item"><a class="widget-list-link" href="#">Ear Rings</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="mega-dropdown-column pt-4 px-3">
                                            <div class="widget widget-links"><a class="d-block overflow-hidden rounded-lg mb-3" href="#"><img src="static/img/shop/departments/03.jpg" alt="Shoes" /></a>
                                                <h6 class="font-size-base mb-2">Statues</h6>
                                                <ul class="widget-list">
                                                    <li class="widget-list-item"><a class="widget-list-link" href="#">Lord Ganesha</a></li>
                                                    <li class="widget-list-item"><a class="widget-list-link" href="#">Lord Krishna</a></li>
                                                    <li class="widget-list-item"><a class="widget-list-link" href="#">Lord Shiva & More</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-wrap flex-md-nowrap">
                                        <div class="mega-dropdown-column pt-4 px-3">
                                            <div class="widget widget-links"><a class="d-block overflow-hidden rounded-lg mb-3" href="#"><img src="static/img/shop/departments/04.jpg" alt="Shoes" /></a>
                                                <h6 class="font-size-base mb-2">Lamp & Plates</h6>
                                                <ul class="widget-list">
                                                    <li class="widget-list-item"><a class="widget-list-link" href="#">Kamatchi Vilakku</a></li>
                                                    <li class="widget-list-item"><a class="widget-list-link" href="#">Dinner Set</a></li>
                                                    <li class="widget-list-item"><a class="widget-list-link" href="#">Pallankuzhi</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="mega-dropdown-column pt-4 px-3">
                                            <div class="widget widget-links"><a class="d-block overflow-hidden rounded-lg mb-3" href="#"><img src="static/img/shop/departments/05.jpg" alt="Shoes" /></a>
                                                <h6 class="font-size-base mb-2">Stone Jewels</h6>
                                                <ul class="widget-list">
                                                    <li class="widget-list-item"><a class="widget-list-link" href="#">Silver plated</a></li>
                                                    <li class="widget-list-item"><a class="widget-list-link" href="#">Traditional</a></li>
                                                    <li class="widget-list-item"><a class="widget-list-link" href="#">Bharathanattiyam set</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="mega-dropdown-column pt-4 px-3">
                                            <div class="widget widget-links"><a class="d-block overflow-hidden rounded-lg mb-3" href="#"><img src="static/img/shop/departments/06.jpg" alt="Shoes" /></a>
                                                <h6 class="font-size-base mb-2">Native Medicines</h6>
                                                <ul class="widget-list">
                                                    <li class="widget-list-item"><a class="widget-list-link" href="#">Herbal Powders</a></li>
                                                    <li class="widget-list-item"><a class="widget-list-link" href="#">Raw & Dried Herbs</a></li>
                                                    <li class="widget-list-item"><a class="widget-list-link" href="#">Pissin & Gum</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <!-- Primary menu-->
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown active"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Home</a>
                                <!-- <ul class="dropdown-menu">
                                    <li class="dropdown position-static mb-0"><a class="dropdown-item py-2 border-bottom" href="home-fashion-store-v1.html"><span class="d-block text-heading">Fashion Store v.1</span><small class="d-block text-muted">Classic shop layout</small></a>
                                        <div class="dropdown-menu h-100 animation-0 mt-0 p-3"><a class="d-block" href="home-fashion-store-v1.html" style="width: 250px;"><img src="img/home/preview/th01.jpg" alt="Fashion Store v.1" /></a></div>
                                    </li>
                                    <li class="dropdown position-static mb-0"><a class="dropdown-item py-2 border-bottom" href="home-electronics-store.html"><span class="d-block text-heading">Electronics Store</span><small class="d-block text-muted">Slider + Promo banners</small></a>
                                        <div class="dropdown-menu h-100 animation-0 mt-0 p-3"><a class="d-block" href="home-electronics-store.html" style="width: 250px;"><img src="img/home/preview/th03.jpg" alt="Electronics Store" /></a></div>
                                    </li>
                                    <li class="dropdown position-static mb-0"><a class="dropdown-item py-2 border-bottom" href="home-marketplace.html"><span class="d-block text-heading">Marketplace</span><small class="d-block text-muted">Multi-vendor, digital goods</small></a>
                                        <div class="dropdown-menu h-100 animation-0 mt-0 p-3"><a class="d-block" href="home-marketplace.html" style="width: 250px;"><img src="img/home/preview/th04.jpg" alt="Marketplace" /></a></div>
                                    </li>
                                    <li class="dropdown position-static mb-0"><a class="dropdown-item py-2 border-bottom" href="home-grocery-store.html"><span class="d-block text-heading">Grocery Store</span><small class="d-block text-muted">Full width + Side menu</small></a>
                                        <div class="dropdown-menu h-100 animation-0 mt-0 p-3"><a class="d-block" href="home-grocery-store.html" style="width: 250px;"><img src="img/home/preview/th06.jpg" alt="Grocery Store" /></a></div>
                                    </li>
                                    <li class="dropdown position-static mb-0"><a class="dropdown-item py-2 border-bottom" href="home-food-delivery.html"><span class="d-block text-heading">Food Delivery Service</span><small class="d-block text-muted">Food &amp; Beverages delivery</small></a>
                                        <div class="dropdown-menu h-100 animation-0 mt-0 p-3"><a class="d-block" href="home-food-delivery.html" style="width: 250px;"><img src="img/home/preview/th07.jpg" alt="Food Delivery Service" /></a></div>
                                    </li>
                                    <li class="dropdown position-static mb-0"><a class="dropdown-item py-2 border-bottom" href="home-fashion-store-v2.html"><span class="d-block text-heading">Fashion Store v.2</span><small class="d-block text-muted">Slider + Featured categories</small></a>
                                        <div class="dropdown-menu h-100 animation-0 mt-0 p-3"><a class="d-block" href="home-fashion-store-v2.html" style="width: 250px;"><img src="img/home/preview/th02.jpg" alt="Fashion Store v.2" /></a></div>
                                    </li>
                                    <li class="dropdown position-static mb-0"><a class="dropdown-item py-2" href="home-single-store.html"><span class="d-block text-heading">Single Product Store</span><small class="d-block text-muted">Single product / mono brand</small></a>
                                        <div class="dropdown-menu h-100 animation-0 mt-0 p-3"><a class="d-block" href="home-single-store.html" style="width: 250px;"><img src="img/home/preview/th05.jpg" alt="Single Product / Brand Store" /></a></div>
                                    </li>
                                </ul> -->
                            </li>
                            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Products</a>
                                <div class="dropdown-menu p-0">
                                    <div class="d-flex flex-wrap flex-md-nowrap px-2">
                                        <div class="mega-dropdown-column py-4 px-3">
                                            <div class="widget widget-links mb-3">
                                                <h6 class="font-size-base mb-3">Makeup Set</h6>
                                                <ul class="widget-list">
                                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Sticker Pottu</a></li>
                                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Fancy items</a></li>
                                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Makeup kit</a></li>
                                                </ul>
                                            </div>
                                            <div class="widget widget-links">
                                                <h6 class="font-size-base mb-3">Lamp & Plates</h6>
                                                <ul class="widget-list">
                                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Kamatchi vilakku</a></li>
                                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Silver plates</a></li>
                                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Silver vessels</a></li>
                                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Pallankuzhi</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="mega-dropdown-column py-4 px-3">
                                            <div class="widget widget-links">
                                                <a class="widget-list-link" href="#"><h6 class="font-size-base mb-3">Artificial Jewels</h6></a>
                                                <ul class="widget-list">
                                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Necklace</a></li>
                                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Bangles</a></li>
                                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Stone Jewels</a></li>
                                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Bharathanattiyam Set</a></li>
                                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Pearl Chains</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="mega-dropdown-column py-4 pr-3">
                                            <div class="widget widget-links mb-3">
                                                <h6 class="font-size-base mb-3">Pooja Items</h6>
                                                <ul class="widget-list">
                                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Lord Statues</a></li>
                                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Vibuthi & Kumkum</a></li>
                                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Irumudi Set</a></li>
                                                </ul>
                                            </div>
                                            <div class="widget widget-links">
                                                <h6 class="font-size-base mb-3">Native Medicines</h6>
                                                <ul class="widget-list">
                                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="food-delivery-category.html">Herbal Powders</a></li>
                                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="food-delivery-single.html">Pissin & Gum</a></li>
                                                    <li class="widget-list-item pb-1"><a class="widget-list-link" href="food-delivery-cart.html">Raw & Dried Herbs</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Services</a>
                                <!-- <ul class="dropdown-menu">
                                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Shop User Account</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="account-orders.html">Orders History</a></li>
                                            <li><a class="dropdown-item" href="account-profile.html">Profile Settings</a></li>
                                            <li><a class="dropdown-item" href="account-address.html">Account Addresses</a></li>
                                            <li><a class="dropdown-item" href="account-payment.html">Payment Methods</a></li>
                                            <li><a class="dropdown-item" href="account-wishlist.html">Wishlist</a></li>
                                            <li><a class="dropdown-item" href="account-tickets.html">My Tickets</a></li>
                                            <li><a class="dropdown-item" href="account-single-ticket.html">Single Ticket</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Vendor Dashboard</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="dashboard-settings.html">Settings</a></li>
                                            <li><a class="dropdown-item" href="dashboard-purchases.html">Purchases</a></li>
                                            <li><a class="dropdown-item" href="dashboard-favorites.html">Favorites</a></li>
                                            <li><a class="dropdown-item" href="dashboard-sales.html">Sales</a></li>
                                            <li><a class="dropdown-item" href="dashboard-products.html">Products</a></li>
                                            <li><a class="dropdown-item" href="dashboard-add-new-product.html">Add New Product</a></li>
                                            <li><a class="dropdown-item" href="dashboard-payouts.html">Payouts</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item" href="account-signin.html">Sign In / Sign Up</a></li>
                                    <li><a class="dropdown-item" href="account-password-recovery.html">Password Recovery</a></li>
                                </ul> -->
                            </li>
                            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Contact</a>
                                <!-- <ul class="dropdown-menu">
                                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Navbar Variants</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="navbar-1-level-light.html">1 Level Light</a></li>
                                            <li><a class="dropdown-item" href="navbar-1-level-dark.html">1 Level Dark</a></li>
                                            <li><a class="dropdown-item" href="navbar-2-level-light.html">2 Level Light</a></li>
                                            <li><a class="dropdown-item" href="navbar-2-level-dark.html">2 Level Dark</a></li>
                                            <li><a class="dropdown-item" href="navbar-3-level-light.html">3 Level Light</a></li>
                                            <li><a class="dropdown-item" href="navbar-3-level-dark.html">3 Level Dark</a></li>
                                            <li><a class="dropdown-item" href="home-electronics-store.html">Electronics Store</a></li>
                                            <li><a class="dropdown-item" href="home-marketplace.html">Marketplace</a></li>
                                            <li><a class="dropdown-item" href="home-grocery-store.html">Side Menu (Grocery)</a></li>
                                            <li><a class="dropdown-item" href="home-single-store.html">Transparent</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="about.html">About Us</a></li>
                                    <li><a class="dropdown-item" href="contacts.html">Contacts</a></li>
                                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Help Center</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="help-topics.html">Help Topics</a></li>
                                            <li><a class="dropdown-item" href="help-single-topic.html">Single Topic</a></li>
                                            <li><a class="dropdown-item" href="help-submit-request.html">Submit a Request</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">404 Not Found</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="404-simple.html">404 - Simple Text</a></li>
                                            <li><a class="dropdown-item" href="404-illustration.html">404 - Illustration</a></li>
                                        </ul>
                                    </li>
                                </ul> -->
                            </li>
                            <!-- <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Blog</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Blog List Layouts</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="blog-list-sidebar.html">List with Sidebar</a></li>
                                            <li><a class="dropdown-item" href="blog-list.html">List no Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Blog Grid Layouts</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="blog-grid-sidebar.html">Grid with Sidebar</a></li>
                                            <li><a class="dropdown-item" href="blog-grid.html">Grid no Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Single Post Layouts</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="blog-single-sidebar.html">Article with Sidebar</a></li>
                                            <li><a class="dropdown-item" href="blog-single.html">Article no Sidebar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Docs / Components</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="docs/dev-setup.html">
                                            <div class="d-flex">
                                                <div class="lead text-muted pt-1"><i class="czi-book"></i></div>
                                                <div class="ml-2"><span class="d-block text-heading">Documentation</span><small class="d-block text-muted">Kick-start customization</small></div>
                                            </div>
                                        </a></li>
                                    <li class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="components/typography.html">
                                            <div class="d-flex">
                                                <div class="lead text-muted pt-1"><i class="czi-server"></i></div>
                                                <div class="ml-2"><span class="d-block text-heading">Components<span class="badge badge-info ml-2">40+</span></span><small class="d-block text-muted">Faster page building</small></div>
                                            </div>
                                        </a></li>
                                    <li class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="docs/changelog.html">
                                            <div class="d-flex">
                                                <div class="lead text-muted pt-1"><i class="czi-edit"></i></div>
                                                <div class="ml-2"><span class="d-block text-heading">Changelog<span class="badge badge-success ml-2">v1.4</span></span><small class="d-block text-muted">Regular updates</small></div>
                                            </div>
                                        </a></li>
                                    <li class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="mailto:contact@createx.studio">
                                            <div class="d-flex">
                                                <div class="lead text-muted pt-1"><i class="czi-help"></i></div>
                                                <div class="ml-2"><span class="d-block text-heading">Support</span><small class="d-block text-muted">contact@createx.studio</small></div>
                                            </div>
                                        </a></li>
                                </ul>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
<?php
}

function quick_view_modal()
{
?>
    <!-- quick view modal -->
    <!-- Quick View Modal-->
    <div class="modal-quick-view modal fade" id="quick-view" tabindex="-1">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title product-title"><a href="products.php" data-toggle="tooltip" data-placement="right" title="Go to product page">Sports Hooded Sweatshirt<i class="czi-arrow-right font-size-lg ml-2"></i></a></h4>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <!-- Product gallery-->
                        <div class="col-lg-7 pr-lg-0">
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
                                <div class="cz-thumblist order-sm-1"><a class="cz-thumblist-item active" href="#first"><img src="static/img/shop/single/gallery/th01.jpg" alt="Product thumb"></a><a class="cz-thumblist-item" href="#second"><img src="static/img/shop/single/gallery/th02.jpg" alt="Product thumb"></a><a class="cz-thumblist-item" href="#third"><img src="static/img/shop/single/gallery/th03.jpg" alt="Product thumb"></a><a class="cz-thumblist-item" href="#fourth"><img src="static/img/shop/single/gallery/th04.jpg" alt="Product thumb"></a></div>
                            </div>
                        </div>
                        <!-- Product details-->
                        <div class="col-lg-5 pt-4 pt-lg-0 cz-image-zoom-pane">
                            <div class="product-details ml-auto pb-3">
                                <div class="d-flex justify-content-between align-items-center mb-2"><a href="products.php#reviews">
                                        <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                                        </div><span class="d-inline-block font-size-sm text-body align-middle mt-1 ml-1">74 Reviews</span>
                                    </a>
                                    <button class="btn-wishlist" type="button" data-toggle="tooltip" title="Add to wishlist"><i class="czi-heart"></i></button>
                                </div>
                                <div class="mb-3"><span class="h3 font-weight-normal text-accent mr-1">$18.<small>99</small></span>
                                    <del class="text-muted font-size-lg mr-3">$25.<small>00</small></del><span class="badge badge-danger badge-shadow align-middle mt-n2">Sale</span>
                                </div>
                                <div class="font-size-sm mb-4"><span class="text-heading font-weight-medium mr-1">Color:</span><span class="text-muted">Red/Dark blue/White</span></div>
                                <div class="position-relative mr-n4 mb-3">
                                    <div class="custom-control custom-option custom-control-inline mb-2">
                                        <input class="custom-control-input" type="radio" name="color" id="color1" checked>
                                        <label class="custom-option-label rounded-circle" for="color1"><span class="custom-option-color rounded-circle" style="background-image: url(img/shop/single/color-opt-1.png)"></span></label>
                                    </div>
                                    <div class="custom-control custom-option custom-control-inline mb-2">
                                        <input class="custom-control-input" type="radio" name="color" id="color2">
                                        <label class="custom-option-label rounded-circle" for="color2"><span class="custom-option-color rounded-circle" style="background-image: url(img/shop/single/color-opt-2.png)"></span></label>
                                    </div>
                                    <div class="custom-control custom-option custom-control-inline mb-2">
                                        <input class="custom-control-input" type="radio" name="color" id="color3">
                                        <label class="custom-option-label rounded-circle" for="color3"><span class="custom-option-color rounded-circle" style="background-image: url(img/shop/single/color-opt-3.png)"></span></label>
                                    </div>
                                    <div class="product-badge product-available mt-n1"><i class="czi-security-check"></i>Product available</div>
                                </div>
                                <form class="mb-grid-gutter">
                                    <div class="form-group">
                                        <label class="font-weight-medium pb-1" for="product-size">Size:</label>
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
                                <h5 class="h6 mb-3 pb-2 border-bottom"><i class="czi-announcement text-muted font-size-lg align-middle mt-n1 mr-2"></i>Product info</h5>
                                <h6 class="font-size-sm mb-2">Style</h6>
                                <ul class="font-size-sm pl-4">
                                    <li>Hooded top</li>
                                </ul>
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
                </div>
            </div>
        </div>
    </div>
    <!-- quick view modal -->
<?php
}

function hero_slider()
{
?>
    <!-- hero slider-->
    <section class="cz-carousel cz-controls-lg">
        <div class="cz-carousel-inner" data-carousel-options="{&quot;mode&quot;: &quot;gallery&quot;, &quot;responsive&quot;: {&quot;0&quot;:{&quot;nav&quot;:true, &quot;controls&quot;: false},&quot;992&quot;:{&quot;nav&quot;:false, &quot;controls&quot;: true}}}">
            <!-- Item-->
            <div class="px-lg-5" style="background-color: #3aafd2;">
                <div class="d-lg-flex justify-content-between align-items-center pl-lg-4"><img class="d-block order-lg-2 mr-lg-n5 flex-shrink-0" src="static/img/home/hero-slider/01.jpg" alt="Summer Collection">
                    <div class="position-relative mx-auto mr-lg-n5 py-5 px-4 mb-lg-5 order-lg-1" style="max-width: 42rem; z-index: 10;">
                        <div class="pb-lg-5 mb-lg-5 text-center text-lg-left text-lg-nowrap">
                            <h2 class="text-light font-weight-light pb-1 from-left">Has just arrived!</h2>
                            <h1 class="text-light display-4 from-left delay-1">Huge Summer Collection</h1>
                            <p class="font-size-lg text-light pb-3 from-left delay-2">Swimwear, Tops, Shorts, Sunglasses &amp; much more...</p><a class="btn btn-primary scale-up delay-4" href="shop-grid-ls.html">Shop Now<i class="czi-arrow-right ml-2 mr-n1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Item-->
            <div class="px-lg-5" style="background-color: #f5b1b0;">
                <div class="d-lg-flex justify-content-between align-items-center pl-lg-4"><img class="d-block order-lg-2 mr-lg-n5 flex-shrink-0" src="static/img/home/hero-slider/02.jpg" alt="Women Sportswear">
                    <div class="position-relative mx-auto mr-lg-n5 py-5 px-4 mb-lg-5 order-lg-1" style="max-width: 42rem; z-index: 10;">
                        <div class="pb-lg-5 mb-lg-5 text-center text-lg-left text-lg-nowrap">
                            <h2 class="text-light font-weight-light pb-1 from-bottom">Hurry up! Limited time offer.</h2>
                            <h1 class="text-light display-4 from-bottom delay-1">Women Sportswear Sale</h1>
                            <p class="font-size-lg text-light pb-3 from-bottom delay-2">Sneakers, Keds, Sweatshirts, Hoodies &amp; much more...</p><a class="btn btn-primary scale-up delay-4" href="shop-grid-ls.html">Shop Now<i class="czi-arrow-right ml-2 mr-n1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Item-->
            <div class="px-lg-5" style="background-color: #eba170;">
                <div class="d-lg-flex justify-content-between align-items-center pl-lg-4"><img class="d-block order-lg-2 mr-lg-n5 flex-shrink-0" src="static/img/home/hero-slider/03.jpg" alt="Men Accessories">
                    <div class="position-relative mx-auto mr-lg-n5 py-5 px-4 mb-lg-5 order-lg-1" style="max-width: 42rem; z-index: 10;">
                        <div class="pb-lg-5 mb-lg-5 text-center text-lg-left text-lg-nowrap">
                            <h2 class="text-light font-weight-light pb-1 from-top">Complete your look with</h2>
                            <h1 class="text-light display-4 from-top delay-1">New Men's Accessories</h1>
                            <p class="font-size-lg text-light pb-3 from-top delay-2">Hats &amp; Caps, Sunglasses, Bags &amp; much more...</p><a class="btn btn-primary scale-up delay-4" href="shop-grid-ls.html">Shop Now<i class="czi-arrow-right ml-2 mr-n1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- hero slider-->
<?php
}

function common_header($page)
{ ?>
    <!-- top nav bar -->
    <?php top_navbar(); ?>
    <!-- top nav bar -->
    <!-- Navbar-->
    <!-- Size chart modal-->
    <?php size_chart_modal(); ?>
    <!-- size chart modal -->
    <!-- nav & menu -->
    <?php main_menu(); ?>
    <!-- nav & menu -->
    <!-- Page title-->
    <!-- Page Title-->

    <!-- small menu-->
    <?php if ($page["type"] == "single") {
        $product = array();
        $product["name"] = "Sports Hooded Sweatshirt";
        small_menu($page, $product);
    } ?>
    <!-- small menu-->

<?php } ?>

<?php function small_menu($page, $product)
{
?>
    <div class="page-title-overlap bg-dark pt-4">
        <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
            <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                        <li class="breadcrumb-item"><a class="text-nowrap" href="dashboard.php"><i class="czi-home"></i>Home</a></li>
                        <li class="breadcrumb-item text-nowrap"><a href="#">Shop</a>
                        </li>
                        <li class="breadcrumb-item text-nowrap active" aria-current="page"><?php echo $page["title"]; ?></li>
                    </ol>
                </nav>
            </div>
            <div class="order-lg-1 pr-lg-4 text-center text-lg-left">
                <h1 class="h3 text-light mb-0"><?php echo $product["name"]; ?></h1>
            </div>
        </div>
    </div>
<?php
}

function wishlist_link(){
    return '
    <!--<a class="navbar-tool d-none d-lg-flex" href="account-wishlist.html"><span class="navbar-tool-tooltip">Wishlist</span>
        <div class="navbar-tool-icon-box"><i class="navbar-tool-icon czi-heart"></i></div>
    </a>-->';
}

function add_to_wishlist_button(){
    return '
    <!--<button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button>-->';
}
