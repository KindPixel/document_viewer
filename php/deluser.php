<?php
require '../database/singleton.php';
session_start();

$login = $_POST["login"];

$request = $pdo ->prepare("DELETE FROM users WHERE login = :login");
$request->bindParam(':login', $login, PDO::PARAM_STR, 64);

if ($request->execute()) {
    echo 200;
}
else {
    echo 201;
}




?>
