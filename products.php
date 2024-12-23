<?php
require_once 'includes/common/cons.php';
require_once 'includes/common/db.php';
require_once 'includes/common/page.php';
$module = "product";
$page = get_page_info($module);
$page["type"] = "single";
require_once 'includes/'.$module . '/body.php';

?>
<!DOCTYPE html>
<html lang="en">
<?php head($page); ?>
<!-- Body-->
<?php body($page); ?>
<!-- body -->
</html>
