<?php
session_start();
require '../database/singleton.php';


$login = $_SESSION["login"];

$request = $pdo ->prepare("SELECT filesAccess FROM users WHERE login = :login");
$request->bindParam(':login', $login, PDO::PARAM_STR, 64);

$request->execute();

$result = $request->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($result);
?>
