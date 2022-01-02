<?php include('header.php');

use Letweb\UI\Demo;

$demo = new Demo();
$demo->renderDir(LWS_ROOT_PATH.'/components');
?>
<?php include('footer.php'); ?>