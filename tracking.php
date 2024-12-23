<?php
require_once 'includes/common/cons.php';
require_once 'includes/common/db.php';
require_once 'includes/common/page.php';
$module = "tracking";
$page = get_page_info($module);
$page["type"] = "overview";
$page["title"] = "Order Tracking";
require_once 'includes/'.$module . '/body.php';

?>
<!DOCTYPE html>
<html lang="en">
<?php head($page); ?>
<!-- Body-->
<?php body($page); ?>
<!-- body -->
</html>
