<?php
require '../database/singleton.php';
session_start();

if(isset($_POST["pagesArray"])) {
    $pagesArray = json_encode($_POST["pagesArray"]);
    $login = $_POST["login"];
}
else {
    $login = $_POST["login"];
    $pagesArray = "";
}



$request = $pdo ->prepare("UPDATE users SET filesAccess = :pagesArray WHERE login=:login ;");
$request->bindParam(':login', $login, PDO::PARAM_STR, 64);
$request->bindParam(':pagesArray', $pagesArray, PDO::PARAM_STR, 10000);



if($request->execute()) {
    echo 200;
}
else {
    echo 201;
}
?>
