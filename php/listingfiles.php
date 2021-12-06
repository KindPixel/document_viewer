<?php
$dir = "../pages/";


$scanned_directory = array_diff(scandir($dir), array('..', '.'));

$result = json_encode($scanned_directory);

echo $result;
?>