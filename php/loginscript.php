<?php

    require '../database/singleton.php';
    
    session_start();

    $login = $_POST['login'];
    $password = $_POST['password'];

    $hash = password_hash($password, PASSWORD_DEFAULT);

    $request = $pdo->prepare("select * from users where login=:login");
    $request->bindParam(":login", $login, PDO::PARAM_STR, 64);
    $request->execute();
    $users = $request->fetch(PDO::FETCH_ASSOC);

    if (password_verify($password, $users['password'])) {
        session_start();
        $_SESSION['login'] = $users['login'];
        $_SESSION['namecomp'] = $users['namecomp'];
        $_SESSION['mail'] = $users['mail'];
        $_SESSION['access'] = $users['access'];
        $_SESSION['id'] = $users['id'];
        echo 200;
    }
    else {
        echo 201;
    }

    $request = null;
