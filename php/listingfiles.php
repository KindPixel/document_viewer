<?php
$dir = "../pages/";
$scanned_directory = array_diff(scandir($dir), array('..', '.'));
echo json_encode($scanned_directory);
?>