<?php
require_once 'includes/common/header.php';
require_once 'includes/common/footer.php';
function common_head($page)
{
?>
    <!-- common head section -->
    <meta charset="utf-8">
    <title><?php echo MAIN_TITLE;
            echo " | " . $page["title"]; ?></title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="<?php echo MAIN_TITLE; ?> - Bootstrap E-commerce Template">
    <meta name="keywords" content="bootstrap, shop, e-commerce, market, modern, responsive,  business, mobile, bootstrap 4, html5, css3, jquery, js, gallery, slider, touch, creative, clean">
    <meta name="author" content="<?php echo MAIN_TITLE; ?>">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon.ico">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" color="#fe6a6a" href="safari-pinned-tab.svg">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendor Styles including: Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href="static/vendor/simplebar/dist/simplebar.min.css" />
    <link rel="stylesheet" media="screen" href="static/vendor/tiny-slider/dist/tiny-slider.css" />
    <link rel="stylesheet" media="screen" href="static/vendor/drift-zoom/dist/drift-basic.min.css" />
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="static/css/theme.min.css">
    <!-- common head section -->
<?php } ?>
<?php
function common_js_scripts()
{
?>
    <!-- common js script section -->
    <script src="static/vendor/jquery/dist/jquery.slim.min.js"></script>
    <script src="static/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="static/vendor/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>
    <script src="static/vendor/simplebar/dist/simplebar.min.js"></script>
    <script src="static/vendor/tiny-slider/dist/min/tiny-slider.js"></script>
    <script src="static/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="static/vendor/drift-zoom/dist/Drift.min.js"></script>
    <!-- Main theme script-->
    <script src="static/js/theme.min.js"></script>
    <!-- common js script section -->
<?Php
}

function section_banners()
{
?>
    <!-- Banners-->
    <section class="container pb-4 mb-md-3">
        <div class="row">
            <div class="col-md-8 mb-4">
                <div class="d-sm-flex justify-content-between align-items-center bg-secondary overflow-hidden rounded-lg">
                    <div class="py-4 my-2 my-md-0 py-md-5 px-4 ml-md-3 text-center text-sm-left">
                        <h4 class="font-size-lg font-weight-light mb-2">Hurry up! Limited time offer</h4>
                        <h3 class="mb-4">Converse All Star on Sale</h3><a class="btn btn-primary btn-shadow btn-sm" href="#">Shop Now</a>
                    </div><img class="d-block ml-auto" src="static/img/shop/catalog/banner.jpg" alt="Shop Converse">
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="d-flex flex-column h-100 justify-content-center bg-size-cover bg-position-center rounded-lg" style="background-image: url(static/img/blog/banner-bg.jpg);">
                    <div class="py-4 my-2 px-4 text-center">
                        <div class="py-1">
                            <h5 class="mb-2">Your Add Banner Here</h5>
                            <p class="font-size-sm text-muted">Hurry up to reserve your spot</p><a class="btn btn-primary btn-shadow btn-sm" href="#">Contact us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banners-->
<?php
}

function product_sharing_links(){
    return '<!--<h6 class="d-inline-block align-middle font-size-base my-2 mr-2">Share:</h6><a class="share-btn sb-twitter mr-2 my-2" href="#"><i class="czi-twitter"></i>Twitter</a><a class="share-btn sb-instagram mr-2 my-2" href="#"><i class="czi-instagram"></i>Instagram</a><a class="share-btn sb-facebook my-2" href="#"><i class="czi-facebook"></i>Facebook</a>-->';
}
?>