<?php
session_start();
require '../database/singleton.php';

$id = $_POST['login'];
$type = $_POST['type'];

if ($type == "testMdp") {
    $password = $_POST['password'];
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $request = $pdo->prepare("select * from users where id=:id");
    $request->bindParam(":id", $id, PDO::PARAM_STR, 64);
    $request->execute();
    $users = $request->fetch(PDO::FETCH_ASSOC);

    if (password_verify($password, $users['password'])) {
        echo 200;
    } else {
        echo 201;
    }
    $request = null;

} else if ($type == "updPass") {
    $newPass = $_POST['newPass'];
    $newPassConf = $_POST['newPassConf'];
    
    $hash = password_hash($newPass, PASSWORD_DEFAULT);

    $request = $pdo->prepare("  UPDATE users
                                SET password = :password
                                WHERE id = :id");

    $request->bindParam(":password", $hash, PDO::PARAM_STR, 100);
    $request->bindParam(":id", $id, PDO::PARAM_STR, 100);
    

    if ($request->execute()) {
        echo 200;
    } else {
        echo 201;
    }
}
