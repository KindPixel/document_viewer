<?php
session_start();
require '../database/singleton.php';

$request = $pdo->prepare("SELECT id,login, namecomp, mail, access FROM users");

$request->execute();

$result = $request->fetchAll();

echo json_encode($result);

$request -> closeCursor();
?>