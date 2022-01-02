<?php
require_once('../boot.php');
$file = LWS_ROOT_PATH . '/' . $_GET['file'];
$name = basename($file);
$size = filesize($file);
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename={$name}");
header("Content-length: " . $size);
header("Pragma: no-cache");
header("Expires: 0");
readfile("{$file}");