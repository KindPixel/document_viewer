<?php
require '../database/singleton.php';
session_start();

$login = $_POST["login"];

$request = $pdo ->prepare("SELECT id, login, namecomp, mail FROM users WHERE login = :login");
$request->bindParam(':login', $login, PDO::PARAM_STR, 64);

$request->execute();

$result = $request->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($result);

?>
