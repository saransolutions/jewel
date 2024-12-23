<?php
require_once 'includes/common/cons.php';
require_once 'includes/common/db.php';
require_once 'includes/common/page.php';
$module = "checkout";
$page = get_page_info($module);
require_once 'includes/'.$module . '/common.php';
?>
<!DOCTYPE html>
<html lang="en">

<!-- Body-->
<?php
  $page["type"] = "overview";
  #2. order shipping details
  if(isset($_GET["cart"])){
    $page["title"] = "Your Cart";
    $page["workflow_step_no"] = 1;
    require_once 'includes/'.$module . '/cart.php';
    cart($page);
  }
  #2. order shipping details
  elseif(isset($_GET["details"])){
    $page["title"] = "Checkout Details";
    $page["workflow_step_no"] = 2;
    require_once 'includes/'.$module . '/details.php';
    details($page);
  }#3. order shipping method
  elseif(isset($_GET["shipping"])){
    $page["workflow_step_no"] = 3;
    $page["title"] = "Checkout - Shipping Method";
    require_once 'includes/'.$module . '/shipping.php';
    shipping($page);
  }#4. order payment method
  elseif(isset($_GET["pay"])){
    ##exception: new js file is used (for card) ##
    $page["workflow_step_no"] = 4;
    $page["title"] = "Checkout - Payment method";
    require_once 'includes/'.$module . '/pay.php';
    pay($page);
  }#5. order final review
  elseif(isset($_GET["review"])){
    $page["workflow_step_no"] = 5;
    $page["title"] = "Checkout - Final Review";
    require_once 'includes/'.$module . '/review.php';
    review($page);
  }
?>
<!-- body -->
</html>
